<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $table = 'user_types';

    protected $fillable = ['id', 'name', 'describes'];

    public $timestamps = true;
}
