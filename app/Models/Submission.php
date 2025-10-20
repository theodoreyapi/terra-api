<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $casts = [
        'data' => 'array',
        'submitted_at' => 'datetime',
    ];


    protected $fillable = ['form_id', 'user_id', 'data', 'status', 'device_id', 'submitted_at'];


    public function form()
    {
        return $this->belongsTo(Form::class);
    }
}
