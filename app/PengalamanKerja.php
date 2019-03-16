<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
  
     protected $table = "pengalaman_kerja";
 	  protected $fillable = ['bulan_awal_id','bulan_akhir_id','tahun_awal_id' ,'tahun_akhir_id','perusahaan','gaji','posisi','job_deks'];
}
