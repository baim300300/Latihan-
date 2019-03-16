<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_uploaded extends Model
{
    protected $table = "image_uploaded";
 	  protected $fillable = ['gambar','judul','isi','user_id'];
}
