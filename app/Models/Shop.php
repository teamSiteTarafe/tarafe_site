<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table = 'shops';
    public $timestamps = true;
    protected $guarded = [''];
}
