<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name','desc','price','category_id', 'additional_information' , 'image'
    ];
}
