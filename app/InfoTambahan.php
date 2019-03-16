<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoTambahan extends Model
{
      protected $table = "info_tambahan";
 	  protected $fillable = ['	posisi ','	kategori_id ','	industri_id ','	waktu_kerja_id ','	lokasi_id',' 	keluar_negeri_id ','	bepergian_id 	','info_tambahan'];
 
      }