
@extends('layout.app3')
@section('content')

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Judul Resume </label>  
  <div class="col-md-10">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<h5></h5>

<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
     Keterangan resume
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        
        <form class="form-horizontal" action="<?= url('/update')?>/{{$user?$user->id:''}}" method="post">
        	{{ csrf_field() }}

<fieldset>
 
  <form method="post" action="<?= url('/update')?>" id="myform" onsubmit="return validate(this);">
  {{ csrf_field() }}
 <br/>
    <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  </thead>
<tbody>
      


    <tr>
      <th>Nama depan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value ="{{$data->nama_depan}}"></td>
    <tr>
       <tr>
      <th>Nama Belakang</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->nama_belakang}}"></td>
    <tr>
       <tr>
      <th>Ras</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="ras" value="{{$data->ras}}"></td>
    <tr> <tr>
      <th>Kendaraan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="kendaraan" value="{{$data->kendaraan}}"></td>
    <tr>
      <th>Telepon</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="telepon" value="{{$data->telepon}}"></td>
    </tr>
    <tr>
      <th>Telepon lain</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->rtelepon}}"></td>
    </tr>
    <tr> 
       <tr>
      <th>Foto</th>
      <td>:</td>
      <td> <img src="{{ asset('image/'.$data1->gambar)  }}" style="max-height:200px;max-width:200px;margin-top:10px;"></td>
    </tr>
    <tr> 

      <th>Status</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->status}}"></td>
    </tr>
    <tr>
        <th>Tempat tinggal</th>
        <td>:</td>
        <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->status_tempat_tinggal}}"></td>
    </tr>
    <tr>
      <th>Provinsi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->provinsi}}"></td>
    </tr>
    <tr>
      <th>Alamat 1</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->alamat1}}"></td>
    </tr>
    <tr>
      <th>Alamat 2</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->alamat2}}"></td>
    </tr>
    <tr>
      <th>Kewarganegaraan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->kewarganegaraan}}"></td>
    </tr>
    <tr>
      <th>Agama</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->agama}}"></td>
    </tr>
    <tr>
      <th>Kartu kredit yang dipunya</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->kartu_kredit}}"></td>
    </tr>
    <tr>
      <th>Jumlah anak</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->jumlah_anak}}"></td>
    </tr>
    <tr>
      <th>Kode pos</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->kodepos}}"></td>
    </tr>
    <tr>
      <th>Negara</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->country_name}}"></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$data->gender}}"></td>
     </tr>

   
    </tr>

   
    </tbody>
  </table>

  </form>
    
  
    
 
</body>


<!-- Form Name -->


      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         Info karir
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
           <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  
      
    
  </thead>
<tbody>
      


    <tr>
      <th>Tingkat pendidikan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="tingkat_pendidikan" value ="{{$ik->tingkat_pendidikan}}"></td>
    <tr>
       <tr>
      <th>Posisi terakhir</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$ik->posisi_terakhir}}"></td>
    <tr>
       <tr>
      <th>Industri terakhir</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="ras" value="{{$ik->industri_terakhir}}"></td>
    <tr> <tr>
      <th>Gaji terakhir</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="kendaraan" value="{{$ik->gaji_terakhir}}"></td>
    <tr>
      <th>Jumlah tahun lama bekerja</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="pengalaman" value="{{$ik->jumlah_tahun_pengalaman}}"></td>
    </tr>
    <tr>
      <th>Fungsi Pekerjaan Terakhir</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$ik->fungsi_pekerjaan_terakhir}}"></td>
    </tr>
    <tr> 
      <th>Gaji yang diharapkan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$ik->gaji_yang_diharapkan}}"></td>
    </tr> 
    </tbody>
  </table>

  </form>
    
  
    
 
</body>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
         Pendidikan 
        </button>
      </h2>
    </div>
    <div id="collapseThree1" class="collapse" aria-labelledby="headingThree1" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  
      
    
  </thead>
<tbody>
      


    <tr>
      <th>Tahun masuk</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$p->tahun_masuk}}"></td>
    <tr>
       <tr>
      <th>Tahun Lulus</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$p->tahun_lulus}}"></td>
    <tr>
       <tr>
      <th>Institusi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="ras" value="{{$p->institusi}}"></td>
    <tr> <tr>
      <th>Bidang Studi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="kendaraan" value="{{$p->bidang_studi}}"></td>
    <tr>
      <th>Status Pendidikan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="pengalaman" value="{{$p->status_pendidikan}}"></td>
    </tr>
    <tr>
      <th>Index prestasi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$p->IPK}}"></td>
    </tr>
   
    </tbody>
  </table>
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Pengalaman Kerja 
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  
      
    
  </thead>
<tbody>
      


    <tr>
      <th>Bulan masuk</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$pk->bulan_awal}}"></td>
    <tr>
       <tr>
      <th>Bulan keluar</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$pk->bulan_akhir}}"></td>
    <tr>
       <tr>
      <th>Tahun Awal</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="ras" value="{{$pk->tahun_awal_id}}"></td>
    <tr> <tr>
      <th>Tahun Akhir</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="kendaraan" value="{{$pk->tahun_akhir_id}}"></td>
    <tr>
      <th>Gaji bulanan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="pengalaman" value="{{$pk->gaji}}"></td>
    </tr>
    <tr>
      <th>Posisi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$pk->posisi}}"></td>
    </tr>
     <tr>
      <th>Fungsi Ditempat sebelumnya</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$pk->job_deks}}"></td>
    </tr>
   
    </tbody>
  </table>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingThree2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
        Keterangan Eksekutif 
        </button>
      </h2>
    </div>
    <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  
      
    
  </thead>
<tbody>
      


    <tr>
      <th>Keterangan Eksekutif</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$e->eksekutif}}"></td>
    <tr>
       
   
    </tbody>
  </table>
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThree3">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
        Keterampilan
        </button>
      </h2>
    </div>
    <div id="collapseThree3" class="collapse" aria-labelledby="headingThree3" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}
  <thead> 
  
      
    
  </thead>
<tbody>
      


    <tr>
      <th>Keterampilan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$keterampilan->keterampilan}}"></td>
    <tr>
       
   
    </tbody>
  </table>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingThree5">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
        Bahasa
        </button>
      </h2>
    </div>
    <div id="collapseThree5" class="collapse" aria-labelledby="headingThree5" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}

          <thead>
          <tr>
            <th>Bahasa</th>
            <th>Writing(1-9)  </th>
            <th>Speaking(1-9)  </th>
            <th>Listening(1-9)  </th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td><input type="text" name="bahasa" value="{{$b->bahasa}}"></td>
              <td><input type="number" name="writing" value="{{$b->writing}}"></td>
              <td><input type="number" name="speaking" value="{{$b->speaking}}"></td>
              <td><input type="number" name="listening" value="{{$b->listening}}"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThree7">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
        Referenses
        </button>
      </h2>
    </div>
    <div id="collapseThree7" class="collapse" aria-labelledby="headingThree7" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}

          <thead>
        
          </thead>
          <tbody>
           <tr>
      <th>Nama referensi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$r->nama_referensi}}"></td>
    <tr>
       <tr>
      <th>Posisi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$r->posisi}}"></td>
    <tr>
       <tr>
      <th>Email</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="ras" value="{{$r->email}}"></td>
    <tr> <tr>
      <th>Perusahaan/institusi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="kendaraan" value="{{$r->perusahaan}}"></td>
    <tr>
      <th>No. Telepon</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="pengalaman" value="{{$r->telepon}}"></td>
    </tr>
    
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
<div class="card">
    <div class="card-header" id="headingThreec">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreec" aria-expanded="false" aria-controls="collapseThreec">
        Web Pribadi
        </button>
      </h2>
    </div>
    <div id="collapseThreec" class="collapse" aria-labelledby="headingThreec" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}

          <thead>
        
          </thead>
          <tbody>
           <tr>
      <th>Nama web</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$wp->nama_web}}"></td>
    <tr>
       <tr>
      <th>URL</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$wp->url}}"></td>
    <tr>
     
    
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <div class="card">
    <div class="card-header" id="headingThreed">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreed" aria-expanded="false" aria-controls="collapseThreed">
        Bagian anda Sendiri
        </button>
      </h2>
    </div>
    <div id="collapseThreed" class="collapse" aria-labelledby="headingThreed" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}

          <thead>
        
          </thead>
          <tbody>
           <tr>
      <th>Nama bagian</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$ba->nama_bagian}}"></td>
    <tr>
       <tr>
      <th>Keterangan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$ba->keterangan}}"></td>
    <tr>
     
    
          </tbody>
        </table>
      </div>
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThreed1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreed1" aria-expanded="false" aria-controls="collapseThreed1">
        Info tambahan
        </button>
      </h2>
    </div>
    <div id="collapseThreed1" class="collapse" aria-labelledby="headingThreed1" data-parent="#accordionExample">
      <div class="card-body">
         <table width="1000" border="0" align="center" cellpadding="3" cellspacing="1">
    {{ csrf_field() }}

    <thead> </thead>
    <tbody>
        <tr>
      <th>Posisi</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" value ="{{$it?$it->posisi:''}}"></td>
     </tr>
       <tr>
      <th>Kategori yang Diingikan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->fungsi_pekerjaan_terakhir:''}}"></td>
     </tr>
       <tr>
      <th>Industri</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->industri_terakhir:''}}"></td>
     </tr>
       <tr>
      <th>Lokasi yang lebih disukai</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->provinsi:''}}"></td>
     </tr>
     <tr>
      <th>Bersediakah anda keluar negeri?</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->keluar_negeri:''}}"></td>
     </tr>
      <tr>
      <th>Bersediakah anda untuk berpergian?</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->berpergian:''}}"></td>
     </tr>
      <tr>
      <th>Info tambahan</th>
      <td>:</td>
      <td><input readonly="readonly" type="text" name="namadepan" value="{{$it?$it->info_tambahan:''}}"></td>
     </tr>
    
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<a href="<?= url('/edit')?>/{{$user?$user->id:''}}">Edit CV </a>
<script type="text/javascript">
  function validate(frm) {
  var tb = frm.getElementsByTagName("table")[0].getElementsByTagName("tbody")[0];
  
  // iterate through the rows in the table
  var trs = tb.getElementsByTagName("tr");
  for (var i=0; i < trs.length; i++) {
    // we only care about the first two inputs in this row
    var inputs = trs[i].getElementsByTagName("input");
    
    if (!validateEmpty(inputs[0]) || !validateEmpty(inputs[1])) {
      return false;
    }
  }
        return true;
}

function validateEmpty(obj) {
  if (obj.value == "") {
    alert("You have an empty input");
    obj.select();
    return redirect(url('/home'));
  }
  return true;
}
</script>
</form>
@stop




<!-- <input type="text" name="alamat2" value="{{ $data->alamat2}}">


  <tr>
       <td height="38" colspan="4" align="center">Data ustadz </td>
 

    </tr>
    <tr>
       <td height="38" colspan="4" align="center"><a href="http://localhost/laravel/myapps/public/ustadz"> Kembali</a></td>
    </tr>
     <tr>
      <td colspan="4">images</td>
    </tr>
    <tr>
      <td width="150"></td>
      <td width="131">NAMA</td>
      <td width="13">:</td>
      <td width="334"><input type="text" name="namadepan" value="{{ $data->nama_depan}}"></td>
    </tr>
     <tr>
       <td width="150"></td>
      <td width="131">ALIRAN</td>
      <td width="13">:</td>
      <td width="334"><input type="text" name="nama_belakang" value="{{ $data->nama_belakang}}"></td>
    </tr>
     <tr>
       <td width="150"></td>
      <td width="131">UMUR</td>
      <td width="13">:</td>
      <td width="334"><input type="text" name="telepon" value="{{ $data->telepon}}"></td>
    </tr>
     <tr>
       <td width="150"></td>
      <td width="131">Telepon</td>
      <td width="13">:</td>
      <td width="334"><input type="text" name="rtelepon" value="{{ $data->rtelepon}}"></td>
    </tr>

    <tr>
    <td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="alamat1" value="{{ $data->alamat1}}"></td>
    </tr>
    <td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="alamat2" value="{{ $data->alamat2}}"></td>
    </tr>
   <td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="kodepos" value="{{ $data->kodepos}}"></td>
    </tr>
   <td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td>
<input type="text" name="kewarganegaraan" value="{{ $data->kewarganegaraan}}"></td>
    </tr><td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="ras" value="{{ $data->ras}}"></td>
    </tr><td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="negara" value="{{ $data->country_name}}"></td>
    </tr><td width="150"></td>
      <td>ALAMAT</td>
      <td>:</td>
      <td><input type="text" name="gender" value="{{ $data->gender}}">></td>
    </tr>
   
    <tr>
       <td width="150"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" value="Simpan Data"> <a href="http://localhost/laravel/myapps/public/ustadz"> Kembali</a>  </td>
    </tr>

  </table>



</select>

 <select name="kendaraan">
  <option value="0">Mobil</option>
  <option value="1">Sepeda motor</option>
  <option value="2">Tidak ada</option>
</select>
 <select name="tempat_tinggal">
  <option value="0">sewa</option>
  <option value="1">Mortgaged</option>
  <option value="2">Memiliki property tanpa hapotek</option>
  <option value="3">Querters</option>
  <option value="4">Tinggal dengan orang tua</option>
  <option value="5">Tidak ada</option>
</select>
<select name="agama">
  <option value="0">islam</option>
  <option value="1">kristen</option>
  <option value="2">khatolik</option>
  <option value="3">budha</option>
  <option value="4">hindu</option>
  <option value="5">other</option>
</select>
<select name="kartu_kredit">
  <option value="0">classic</option>
  <option value="1">gold</option>
  <option value="2">platinum</option>
  <option value="3">tidak ada</option>
  
</select>
</fieldset>
</form>

 -->