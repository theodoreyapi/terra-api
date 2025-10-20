<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return auth()->user()->forms()->paginate(20);
    }


    public function store(Request $request)
    {
        $payload = $request->validate([
            'title' => 'required|string',
            'definition' => 'required|array',
        ]);


        $form = Form::create(array_merge($payload, ['user_id' => auth()->id()]));


        return response()->json($form, 201);
    }


    public function show(Form $form)
    {
        $this->authorize('view', $form);
        return $form->load('submissions');
    }


    public function update(Request $request, Form $form)
    {
        $this->authorize('update', $form);
        $form->update($request->only(['title', 'definition']));
        return $form;
    }


    public function destroy(Form $form)
    {
        $this->authorize('delete', $form);
        $form->delete();
        return response()->noContent();
    }


    public function exportCsv(Form $form)
    {
        $this->authorize('view', $form);
        // dispatch job to generate CSV & return signed URL or stream
        // Example: ExportSubmissionsJob::dispatch($form);
        return response()->json(['status' => 'export queued']);
    }
}
