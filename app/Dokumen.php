<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
      protected $table = "dokumen";
 	  protected $fillable = ['jenis_dokumen','nama_dokumen','file_dokument'];
   
   }
