<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = [
      'name',
      'description',
      'img',
      'created_at',
      'updated_at'
    ];
}
