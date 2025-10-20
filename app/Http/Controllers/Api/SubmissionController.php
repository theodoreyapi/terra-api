<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index(Form $form)
    {
        $this->authorize('view', $form);
        return $form->submissions()->paginate(50);
    }


    public function store(Request $request, Form $form)
    {
        // Accept submission from mobile
        $payload = $request->validate([
            'data' => 'required|array',
            'device_id' => 'nullable|string',
        ]);


        $submission = Submission::create([
            'form_id' => $form->id,
            'user_id' => auth()->id(),
            'data' => $payload['data'],
            'device_id' => $payload['device_id'] ?? null,
            'status' => 'received',
        ]);


        // dispatch processing job if needed
        // ProcessSubmissionJob::dispatch($submission);


        return response()->json(['id' => $submission->id], 201);
    }


    public function show(Form $form, Submission $submission)
    {
        $this->authorize('view', $form);
        return $submission;
    }


    public function uploadMedia(Request $request)
    {
        $request->validate(['file' => 'required|file|max:10240']);
        $path = $request->file('file')->store('media', 's3');
        // create media record...
        return response()->json(['path' => $path], 201);
    }
}
