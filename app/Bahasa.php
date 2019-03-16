<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    protected $table = "bahasa";
 	  protected $fillable = ['bahasa','speaking','writing','listening'];
}
