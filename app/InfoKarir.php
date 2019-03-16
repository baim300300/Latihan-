<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoKarir extends Model
{
     protected $table = "profil_karir";
 	  protected $fillable = ['tingkat_pendidikan_id','posisi_terakhir','industri_terakhir_id' ,'gaji_terakhir','mulai_bekerja','pengalaman','fungsi_pekerjaan_terakhir_id','tingkat_kharir_terakhir_id ','	gaji_yang_diharapkan'];
}
