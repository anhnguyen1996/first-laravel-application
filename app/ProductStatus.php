<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductStatus extends Model
{
    protected $table = 'product_statuses';

    protected $fillable = ['id', 'name', 'describes'];

    public $timestamps = true;
}
