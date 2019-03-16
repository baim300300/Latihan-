<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KeteranganPribadi extends Model
{
      protected $table = "keteranganpribadi";
 	  protected $fillable = ['nama_depan','nama_belakang','jenis_kelamin','telepon' ,'rtelepon' ,'status_pernikahan_id' 	,'ras' ,	'kendaraan_id' 	,'status_tempat_tinggal_id' ,	'provinsi_id' ,	'alamat1' ,	'alamat2' ,	'kewarganegaraan' ,	'agama_id' 	,'kartu_kredit_id' ,	'jumlah_anak' ,	'kodepos','negara_id','jenis_kelamin_id'];
}
