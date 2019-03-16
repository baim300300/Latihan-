<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
     protected $table = "pendidikan";
 	  protected $fillable = ['tahun_masuk_id','tahun_lulus_id','institusi' ,'status_pendidikan','bidang_studi','IPK'];
}
