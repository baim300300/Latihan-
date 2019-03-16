
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
        
        <form class="form-horizontal" action="<?= url('/store')?>/{{$user?$user->id:''}}" method="post">
        	{{ csrf_field() }}

<fieldset>

<!-- Form Name -->

<div class="row">
  <div class="col-md-6">
    <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">nama depan</label>  

  <div class="col-md-10">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" value="{{ $data->nama_depan }}">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="gender">Jenis Kelamin</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="" checked="checked">
      Pria
    </label> 
    <label class="radio-inline" for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="">
      Wanita
    </label>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Negara</label>
  <div class="col-md-10">
    <select id="selectbasic" name="selectbasic" class="form-control" value="">
    </select>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
  <label class="col-md-4 control-label" for="nama_belakang">Nama Belakang</label>  
  <div class="col-md-10">
  <input id="nama_belakang" name="nama_belakang" type="text" placeholder="" class="form-control input-md" input="{{ $data->nama_belakang }}">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="telepon">Telepon</label>  
  <div class="col-md-10">
  <input id="telepon" name="telepon" type="text" placeholder="" class="form-control input-md" value="telepon">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="nama_belakang">Tanggal lahir</label>  
  <div class="col-md-10">
   <input class="form-control" type="date" value="2011-08-19" id="example-date-input" value="">
    
  </div>
</div>
</div>
</div>
<div class="row">
  <div class="col-md-6">
<div class="form-group">
  <label class="col-md-4 control-label" for="kodepos">Kode Pos</label>  
  <div class="col-md-10">
  <input id="kodepos" name="kodepos" type="text" placeholder="" class="form-control input-md" value="{{ $data->kodepos }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat2">Alamat2</label>  
  <div class="col-md-10">
  <input id="alamat2" name="alamat2" type="text" placeholder="" class="form-control input-md" value="{{ $data->alamat2 }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="jumlah_anak">Jumlah anak</label>  
  <div class="col-md-10">
  <input id="jumlah_anak" name="jumlah_anak" type="text" placeholder="" class="form-control input-md" value="{{ $data->jumlah_anak }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="alamat1">Alamat1</label>  
  <div class="col-md-10">
  <input id="alamat1" name="alamat1" type="text" placeholder="" class="form-control input-md" value="{{ $data->alamat1 }}">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Status tempat tinggal</label>
  <div class="col-md-10">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">-</option>
      <option value="2">Sewa</option>
      <option value="">Kontrak</option>
      <option value="">Milik sendiri</option>
      <option value="">Tinggal dengan orang tua</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="provinsi">Provinsi</label>
  <div class="col-md-10">
    <select id="provinsi" name="provinsi" class="form-control" value="{{ $data->provinsi }}">
      <option value="1">-</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Kartu kredit</label>
  <div class="col-md-10">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="Gold">-</option>
      <option value="classic">Gold</option>
      <option value="platinum">classic</option>
      <option value="null">platinum</option>
      <option value="">tidak ada</option>
    </select>
  </div>
</div>
</div>
<div class="col-md-6"><!-- Select Basic -->

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Agama</label>
  <div class="col-md-10">
    <select id="selectbasic" name="selectbasic" class="form-control" value="{{ $data->agama }}">
      <option value="Islam">Islam</option>
      <option value="hindu">hindu</option>
      <option value="budha">budha</option>
      <option value="kristen">kristen</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kewarganegaraan">Kewarganegaraan</label>  
  <div class="col-md-10">
  <input id="kewarganegaraan" name="kewarganegaraan" type="text" placeholder="" class="form-control input-md" value="{{ $data->kewarganegaraan }}">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kendaraan">Kendaraan dimiliki</label>  
  <div class="col-md-10">
  <input id="kendaraan" name="kendaraan" type="text" placeholder="" class="form-control input-md" value="kendaraan">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Ras</label>
  <div class="col-md-10">
    <select id="selectbasic" name="selectbasic" class="form-control" value="{{ $data->ras }}">
      <option value="1">-</option>
      <option value="2">Option one</option>
      <option value="">Option two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="rtelepon">Nomor Lain</label>  
  <div class="col-md-10">
  <input id="rtelepon" name="rtelepon" type="text" placeholder="" class="form-control input-md" value="{{ $data->rtelepon }}">
    
  </div>
</div>

<!-- Text input-->

<!-- Text input-->


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="status">Status</label>
  <div class="col-md-10">
    <select id="status" name="status" class="form-control">
      <option value="0">-</option>
      <option value="lajang">Lajang</option>
      <option value="menikah">Sudah menikah</option>
    </select>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Unggah foto anda</label>
  <div class="col-md-4">
    <input id="image" name="image" class="input-file" type="file">
  </div>
</div>
</div>
</div>

<!-- Select Basic -->


<!-- Text input-->


<!-- Text input-->

<!-- Multiple Radios (inline) -->


</fieldset>
</form>



      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>
<input type="submit" value="Simpan Data">


@stop