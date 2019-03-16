<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referees extends Model
{
   protected $table = "referees";
 	  protected $fillable = ['nama_referensi ','posisi',' 	email',' 	perusahaan',' 	telepon '];
}
