<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    protected $casts = [
        'definition' => 'array',
        'published_at' => 'datetime',
    ];


    protected $fillable = ['user_id', 'title', 'slug', 'version', 'definition', 'published_at'];


    public function submissions(): HasMany
    {
        return $this->hasMany(Submission::class);
    }
}
