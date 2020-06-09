<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{
    protected $table = "iphones";
    protected $fillable = ['name', 'title', 'body'];
}
