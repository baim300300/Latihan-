<?php
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
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user= Auth::user();
        $check = false; 
        $utd= DB::table('keteranganpribadi')->where('user_id',$user->id)->get();    //sudah 
        $ik= DB::table('profil_karir')->where('user_id',$user->id)->get();
        $p= DB::table('pendidikan')->where('user_id',$user->id)->get();  //sudah
        $e= DB::table('eksekutif')->where('user_id',$user->id)->get(); // sudah
        $b= DB::table('bahasa')->where('user_id',$user->id)->get();   //sudah
        $pk= DB::table('pengalaman_kerja')->where('user_id',$user->id)->get(); //sudah
        $r= DB::table('referees')->where('user_id',$user->id)->get(); //sudah 
        $wp= DB::table('web_pribadi')->where('user_id',$user->id)->get(); //sudah
        $ba= DB::table('bagian_anda')->where('user_id',$user->id)->get();  //sudah
        $it= DB::table('info_tambahan')->where('user_id',$user->id)->get();   //sudah 
        $iu= DB::table('image_uploaded')->where('user_id',$user->id)->get(); //sudah
       
        
        foreach ($ba as $bagian_anda) {
            if(!empty($bagian_anda->nama_bagian)){
              
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($bagian_anda->keterangan)){
                $check =true;        
            }else{
                $check =false;
            }
            
            
        }

        foreach ($wp as $web_pribadi) {
            if(!empty($web_pribadi->nama_web)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($web_pribadi->url)){
                $check =true;        
            }else{
                $check =false;
            }
            
            
        }

        foreach ($r as $referees) {
            if(!empty($referees->nama_referensi)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($referees->posisi)){
                $check =true;        
            }else{
                $check =false;
            }
            
            if(!empty($referees->email)){
                $check =true;        
            }else{
                $check =false;
            }

            if(!empty($referees->perusahaan)){
                $check =true;        
            }else{
                $check =false;
            }

            if(!empty($referees->telepon)){
                $check =true;        
            }else{
                $check =false;
            }

               
        }

        foreach ($pk as $pengalaman_kerja) {
            if(!empty($pengalaman_kerja->bulan_awal_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->bulan_akhir_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->tahun_awal_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->tahun_akhir_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->perusahan)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->gaji)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->posisi)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pengalaman_kerja->job_deks)){
                $check =true;        
            }else{
                $check =false;
            }
        }

        foreach ($b as $bahasa) {
            if(!empty($bahasa->bahasa)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($bahasa->writing)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($bahasa->listening)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($bahasa->speaking)){
                $check =true;        
            }else{
                $check =false;
            }
        }

        foreach ($e as $eksekutif) {
            if(!empty($eksekutif->eksekutif)){
                $check =true;        
            }else{
                $check =false;
            }
        }

        foreach ($p as $pendidikan) {
            if(!empty($pendidikan->tahun_masuk_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pendidikan->tahun_lulus_id)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pendidikan->institusi)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pendidikan->status_pendidikan)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pendidikan->bidang_studi)){
                $check =true;        
            }else{
                $check =false;
            }
            if(!empty($pendidikan->IPK)){
                $check =true;        
            }else{
                $check =false;
            }
        }

        foreach ($utd as $kp) {
              
            if(!empty($kp->nama_depan)){
                $check =true;        
            }else{
                $check =false;
            }

            if(!empty($kp->nama_belakang)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->jeni_kelamin_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->telepon)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->rtelepon)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->status_pernikahan_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->ras)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->kendaraan_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->status_tempat_tinggal_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->provinsi_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->alamat1)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->alamat2)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->kewarganegaraan)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->agama_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->kartu_kredit_id)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->jumlah_anak)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->kodepos)){
                $check =true;
            }else{
                $check =false;
            }

            if(!empty($kp->negara_id)){
                $check =true;
            }else{
                $check =false;
            }

        }
        foreach ($it as $info) {
              
            if(!empty($info->posisi)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->kategori_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->industri_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->waktu_kerja_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->lokasi_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->keluar_negeri_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->berpergian_id)){
                $check =true;
            }else{
                $check =false;
            }
            if(!empty($info->info_tambahan)){
                $check =true;
            }else{
                $check =false;
            }
            
            
            
            
            
            
        }    
        return view('home')->with('user',$user)
                        ->with('alert',$check);
        
    }


}
