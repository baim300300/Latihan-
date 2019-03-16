<?php

namespace App\Http\Controllers;
use App\KeteranganPribadi as utd;
use App\InfoKarir as ik;
use App\Pendidikan as p;
use App\Eksekutif as e;
use App\Bahasa as b;
use App\PengalamanKerja as pk;
use App\Referees as r;
use App\WebPribadi as wp;
use App\BagianAnda as ba;
use App\InfoTambahan as it;
use App\Image_uploaded as iu;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class KeteranganPribadiController extends Controller
{
    public function index()
    {
    	$data=utd::all();
    	
   
    	
    	
    }

     public function tambah()
	{
	 $iu=iu::all();
	$it=it::all();
	$wp=wp::all();
	$r=r::all();
	$p=p::all();
	$b=b::all();
	$ba=ba::all();
	$pk=pk::all();
	$ik=ik::all();
	$data=utd::all();
	$user= Auth::user();
	// Ini kontroller keteranganpribadi
  	$negara=DB::table('apps_countries')->get();
  	$gender=DB::table('jenis_kelamin')->get();
  	$status=DB::table('status_pernikahan')->get();
  	$kendaraan=DB::table('kendaraan')->get();
  	$provinsi=DB::table('provinsi')->get();
  	$agama=DB::table('agama')->get();
  	$kartu_kredit=DB::table('kartu_kredit')->get();
  	$status_tempat_tinggal=DB::table('status_tempat_tinggal')->get();
  	$jumlah_tahun_pengalaman=DB::table('jumlah_tahun_pengalaman')->get();
  	
  	// Ini keterangan info karir
  	$tingkat_pendidikan=DB::table('tingkat_pendidikan')->get();
  	$industri_terakhir=DB::table('industri_terakhir')->get();
  	$fungsi_pekerjaan_terakhir=DB::table('fungsi_pekerjaan_terakhir')->get();
  	$tingkat_kharir_terakhir=DB::table('tingkat_kharir_terakhir')->get();

  	// ini keterangan Pendidikan 
  	$tahun_masuk=DB::table('tahun_masuk')->get();
  	$tahun_lulus=DB::table('tahun_lulus')->get();
  	

  	//ini keterangan pengalaman kerja                                       
	$bulan_awal=DB::table('bulan_awal')->get();
  	$bulan_akhir=DB::table('bulan_akhir')->get();



  	//ini keterangan rangkuman eksekutif
  	$eksekutif=DB::table('eksekutif')->get();
  	
  	//ini keterangan keterampilan
  	$keterampilan=DB::table('keterampilan')->get();


  	//ini keterangan Info tambahan
  	$berpergian=DB::table('berpergian')->get();
  	$keluar_negeri=DB::table('keluar_negeri')->get();
  	$jangka_waktu_kerja=DB::table('jangka_waktu_kerja')->get();


  	// dd($telepon);
	// memanggil view tambah
	return view('tambah')
	->with('apps_countries',$negara)
	->with('user',$user)
	->with('gender',$gender)
	->with('status_pernikahan',$status)
	->with('kendaraan',$kendaraan)
	->with('provinsi',$provinsi)
	->with('agama',$agama)
	->with('kartu_kredit',$kartu_kredit)
	->with('status_tempat_tinggal',$status_tempat_tinggal)
	->with('tingkat_pendidikan',$tingkat_pendidikan)
	->with('industri_terakhir',$industri_terakhir)
	->with('jumlah_tahun_pengalaman',$jumlah_tahun_pengalaman)
	->with('fungsi_pekerjaan_terakhir',$fungsi_pekerjaan_terakhir)
	->with('tahun_masuk',$tahun_masuk)
	->with('bulan_awal',$bulan_awal)
	->with('bulan_akhir',$bulan_akhir)
	->with('tahun_lulus',$tahun_lulus)
	->with('eksekutif',$eksekutif)
	->with('keterampilan',$keterampilan)
	->with('berpergian',$berpergian)
	->with('keluar_negeri',$keluar_negeri)
	->with('jangka_waktu_kerja',$jangka_waktu_kerja)

	->with('tingkat_kharir_terakhir',$tingkat_kharir_terakhir);

						 

 
	}
	public function store(Request $request)
	{
	

					$file  = request()->file('gambar');
		       		if($file){

	   			 $fileName = rand(1, 999) . $file->getClientOriginalName()->get(0);
	   			
	       		 $request->file('gambar')->move("image/", $fileName);
			       		 $data=array(
			   			'isi'=>$request->isi,
			   			'gambar'=>$fileName,
			   			'judul'=>$request->judul,
			   			'user_id' => auth()->id()
			   				);

			       		 DB::table('image_uploaded')->insert($data);

	   		}
	   		


	 
		DB::table('keteranganpribadi')->insert([

			'nama_depan'=>$request->namadepan,

			'nama_belakang'=>$request->nama_belakang,
			'jenis_kelamin_id'=>$request->gender,
			'telepon' =>$request->telepon,
			'rtelepon' =>$request->rtelepon,
			'status_pernikahan_id'=>$request->status,
			'ras' =>$request->ras,	
			'kendaraan_id'=>$request->kendaraan,
			'status_tempat_tinggal_id'=>$request->tempat_tinggal,	
			'provinsi_id' =>$request->provinsi,
			'alamat1' =>$request->alamat1,	
			'alamat2' =>$request->alamat2,
			'kewarganegaraan'=>$request->kewarganegaraan,
			'agama_id' =>$request->agama,
			'kartu_kredit_id' =>$request->kartu_kredit,	
			'jumlah_anak' =>$request->jumlah_anak,	
			'kodepos'=>$request->kodepos,
			'negara_id'=>$request->negara,
			'user_id' => auth()->id()

		]);
		 for($i=0 ;$i<count($request->industri_terakhir);$i++){
		DB::table('profil_karir')->insert([
			'tingkat_pendidikan_id'=>$request->tingkat_pendidikan,
			'posisi_terakhir'=>$request->posisi_terakhir,
			
			'industri_terakhir_id'=>$request->industri_terakhir[$i],
			
			'gaji_terakhir'=>$request->gaji_terakhir,
			'mulai_bekerja'=>$request->mulai_bekerja,
			'pengalaman_id'=>$request->pengalaman,
			'fungsi_pekerjaan_terakhir_id'=>$request->fungsi_pekerjaan_terakhir,
			'tingkat_kharir_terakhir_id'=>$request->tingkat_kharir_terakhir,
			'gaji_yang_diharapkan'=>$request->gaji_yang_diharapkan,
			'user_id' => auth()->id()


		]);
		}
		for($i=0 ;$i<count($request->tahun_masuk);$i++){
		DB::table('pendidikan')->insert([
			'tahun_masuk_id'=>$request->tahun_masuk[$i],
			'tahun_lulus_id'=>$request->tahun_lulus[$i],
			'institusi'=>$request->institusi[$i],
			'status_pendidikan'=>$request->status_pendidikan[$i],
			'bidang_studi'=>$request->bidang_studi[$i],
			'IPK'=>$request->IPK[$i],
			'user_id' => auth()->id()

		]);
		}
		for($i=0 ;$i<count($request->bulan_awal);$i++){
		DB::table('pengalaman_kerja')->insert([
			'bulan_awal_id'=>$request->bulan_awal[$i],
			'bulan_akhir_id'=>$request->bulan_akhir[$i],
			'tahun_awal_id'=>$request->tahun_awal[$i],
			'tahun_akhir_id'=>$request->tahun_akhir[$i],
			'perusahaan'=>$request->perusahaan[$i],
			'gaji'=>$request->gaji[$i],
			'posisi'=>$request->posisi[$i],
			'job_deks'=>$request->job_deks[$i],
			'user_id' => auth()->id()

		]);
		}
		DB::table('eksekutif')->insert([
			'eksekutif'=>$request->eksekutif,
			'user_id' => auth()->id()


		]);
		DB::table('keterampilan')->insert([
			'keterampilan'=>$request->keterampilan,
			'user_id' => auth()->id()


		]);
		
		


	    for($i=0 ;$i<count($request->bulan_awal);$i++){
		DB::table('referees')->insert([
			'nama_referensi'=>$request->nama_referensi[$i],
			 'posisi'=>$request->posisi_referens[$i], 	
			 'email'=>$request->email[$i], 	
			 'perusahaan'=>$request->perusahaan_referens[$i],
			  'telepon'=>$request->telepon_referensi[$i],
			'user_id' => auth()->id()


		]);
	    }
	     for($i=0 ;$i<count($request->bulan_awal);$i++){
		DB::table('web_pribadi')->insert([
			'nama_web'=>$request->nama_web[$i],
			'url'=>$request->url[$i],
			'user_id'=>auth()->id()
		]);
		}
		  for($i=0 ;$i<count($request->bulan_awal);$i++){
		DB::table('bagian_anda')->insert([
			'nama_bagian'=>$request->nama_bagian[$i],
			'keterangan'=>$request->keterangan[$i],
			'user_id'=>auth()->id()
		]);
		}
		DB::table('info_tambahan')->insert([
			'posisi'=>$request->posisi_tambahan,
			'kategori_id'=>$request->kategori,
			'industri_id'=>$request->industri,
			'waktu_kerja_id'=>$request->waktu_kerja,
			'lokasi_id'=>$request->lokasi,
			'keluar_negeri_id'=>$request->keluar_negeri,
			'berpergian_id'=>$request->berpergian,
			'info_tambahan'=> strip_tags($request->info_tambahan),
			'user_id'=>auth()->id()

		]);
		for($i=0 ;$i<count($request->bahasa);$i++){


	   	DB::table('bahasa')->insert([
	   		    'bahasa'=>$request->bahasa[$i],
				'writing'=>$request->writing[$i],
				'listening'=>$request->listening[$i],
				'speaking'=>$request->speaking[$i],
				'user_id' => auth()->id()

	   	]);
		}  

	// alihkan halaman ke halaman ustadz
	return redirect(url('/home'));
 
	}

	public function detail($id)
	{




	$user= Auth::user();
	$data = DB::table('keteranganpribadi')->where('user_id',$id)
		->leftjoin('apps_countries','keteranganpribadi.negara_id', '=','apps_countries.id')
		->leftjoin('jenis_kelamin','keteranganpribadi.jenis_kelamin_id', '=','jenis_kelamin.id')
		->leftjoin('status_pernikahan','keteranganpribadi.status_pernikahan_id', '=','status_pernikahan.id')
		->leftjoin('kendaraan','keteranganpribadi.kendaraan_id', '=','kendaraan.id')
		->leftjoin('status_tempat_tinggal','keteranganpribadi.status_tempat_tinggal_id', '=','status_tempat_tinggal.id')
		->leftjoin('provinsi','keteranganpribadi.provinsi_id', '=','provinsi.id')
		->leftjoin('agama','keteranganpribadi.agama_id', '=','agama.id')
		->leftjoin('kartu_kredit','keteranganpribadi.kartu_kredit_id', '=','kartu_kredit.id')
		->get()[0];
	

		$ik= DB::table('profil_karir')->where('user_id',$id)
		->leftjoin('tingkat_pendidikan','profil_karir.tingkat_pendidikan_id','=','tingkat_pendidikan.id')
		->leftjoin('industri_terakhir','profil_karir.industri_terakhir_id','=','industri_terakhir.id')
		->leftjoin('fungsi_pekerjaan_terakhir','profil_karir.fungsi_pekerjaan_terakhir_id','=','fungsi_pekerjaan_terakhir.id')
		->leftjoin('tingkat_kharir_terakhir','profil_karir.tingkat_kharir_terakhir_id','=','tingkat_kharir_terakhir.id')
		->leftjoin('jumlah_tahun_pengalaman','profil_karir.pengalaman_id','=','jumlah_tahun_pengalaman.id')
		->get()[0];

		$p= DB::table('pendidikan')->where('user_id',$id)

		->leftjoin('tahun_masuk','pendidikan.tahun_masuk_id','=','tahun_masuk.id')
		->leftjoin('tahun_lulus','pendidikan.tahun_lulus_id','=','tahun_lulus.id')
		->get()[0];

		$pk=DB::table('pengalaman_kerja')->where('user_id',$id)
		->leftjoin('bulan_awal','pengalaman_kerja.bulan_awal_id','=','bulan_awal.id')
		->leftjoin('bulan_akhir','pengalaman_kerja.bulan_akhir_id','=','bulan_akhir.id')
		->leftjoin('tahun_masuk','pengalaman_kerja.tahun_awal_id','=','tahun_masuk.id')
		->leftjoin('tahun_lulus','pengalaman_kerja.tahun_akhir_id','=','tahun_lulus.id')
		->get()[0];


		$e=DB::table('eksekutif')->where('user_id',$id)->get()[0];

		$keterampilan=DB::table('keterampilan')->where('user_id',$id)->get()[0];

		$b=DB::table('bahasa')->where('user_id',$id)->get()[0];

		$r=DB::table('referees')->where('user_id',$id)->get()[0];

		$wp=DB::table('web_pribadi')->where('user_id',$id)->get()[0];
	
		$ba=DB::table('bagian_anda')->where('user_id',$id)->get()[0];

		$it=DB::table('info_tambahan')->where('user_id',$id)
		->leftjoin('fungsi_pekerjaan_terakhir','info_tambahan.kategori_id','=','fungsi_pekerjaan_terakhir.id')
		->leftjoin('industri_terakhir','info_tambahan.industri_id','=','industri_terakhir.id')
		->leftjoin('jangka_waktu_kerja','info_tambahan.waktu_kerja_id','=','jangka_waktu_kerja.id')
		->leftjoin('provinsi','info_tambahan.lokasi_id','=','provinsi.id')
		->leftjoin('keluar_negeri','info_tambahan.keluar_negeri_id','=','keluar_negeri.id')
		->leftjoin('berpergian','info_tambahan.berpergian_id','=','berpergian.id')
		->get()->first();

		

		// dd($it);
		$data1=DB::table('image_uploaded')->where('user_id',$id)	->get()[0];
			
	// passing data ustadz yang didapat ke view edit.blade.php
	
		return view('/detail', compact('data','user','ik','p','pk','e','keterampilan','b','r','wp','ba','it','data1'));

	}

	public function edit($id)
	{
	$user= Auth::user();
	// mengambil data ustadz berdasarkan id yang dipilih
	$data = DB::table('keteranganpribadi')->where('user_id',$id)->get()[0];
	// passing data ustadz yang didapat ke view edit.blade.php
	return view('edit',compact('data','user'));
 
	}
	public function update(Request $request)
	{
	// update data ustadz
	$user= Auth::user();
	$data=DB::table('keteranganpribadi')->where('user_id',$request->id)->update([
		
			'nama_depan'=>$request->nama_depan,
			'nama_belakang'=>$request->nama_belakang,
			'jenis_kelamin_id '=>$request->gender,
			'telepon' =>$request->telepon,
			'rtelepon' =>$request->rtelepon,
			'status_pernikahan'=>$request->status,
			'ras' =>$request->ras,	
			'kendaraan'=>$request->kendaraan,
			'status_tempat_tinggal'=>$request->tempat_tinggal,	
			'provinsi' =>$request->provinsi,
			'alamat1' =>$request->alamat1,	
			'alamat2' =>$request->alamat2,
			'kewarganegaraan'=>$request->kewarganegaraan,
			'agama' =>$request->agama,
			'kartu_kredit' =>$request->kartu_kredit	,	
			'jumlah_anak' =>$request->jumlah_anak,	
			'kodepos'=>$request->kodepos,
			'negara_id'=>$request->negara
	]);
	// alihkan halaman ke halaman ustadz
	return redirect('/detail',compact('data','user'));
 
	}
	public function hapus($id)
	{
	// menghapus data ustadz berdasarkan id yang dipilih
	DB::table('keteranganpribadi')->where('id',$id)->delete();
		
	// alihkan halaman ke halaman ustadz
	return redirect('http://localhost/laravel/myapps/public/home');
	}

}
