<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebPribadi extends Model
{
   protected $table = "web_pribadi";
 	  protected $fillable = ['nama_web ','url'];
}
