<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['id_user','Name', 'Age'];
}
