<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BagianAnda extends Model
{
    protected $table = "bagian_anda";
 	  protected $fillable = ['nama_bagian','keterangan'];
}
