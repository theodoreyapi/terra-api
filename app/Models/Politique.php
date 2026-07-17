<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Politique extends Model
{
    protected $fillable = ['description'];

    protected $table = 'politique';

    protected $primaryKey = 'id_politique';
}
