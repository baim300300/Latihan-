@extends('layout.app')
@section('content')

</br>
</br>

</br>
</br>
</br>
</br>
</br>
</br>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<CENTER><legend>Daftar MPSSOFT CARRER</legend></CENTER>

</br>
</br>
</br>

<!-- Text input-->
<div class="form-group" >
	<div class="row" align="right">
		 <label class="col-md-4 control-label" for="nama_depan">Nama Depan</label>  
  <div class="col-md-5">
  <input id="nama_depan" name="nama_depan" type="text" placeholder="" class="form-control input-md" align="CENTER">
    
  </div>
	</div>
 
</div>

<!-- Text input-->
<div class="form-group" >
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="nama_belakang">Nama Belakang</label>  
  <div class="col-md-5">
  <input id="nama_belakang" name="nama_belakang" type="text" placeholder="" class="form-control input-md" align="CENTER">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md" align="CENTER" required="">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group" >
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="username">Username</label>  
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md" align="CENTER" required="">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-5">
  <input id="password" name="password" type="text" placeholder="" class="form-control input-md" align="CENTER" required="">
    </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group" >
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="rpassword">Ulangi Password</label>  
  <div class="col-md-5">
  <input id="rpassword" name="rpassword" type="text" placeholder="" class="form-control input-md" align="CENTER" required="">
    </div>
  </div>
</div>

<!-- Button -->
<div class="form-group" >
	<div class="row" align="right">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-5" align="right">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
  </div>
</div>
</div>

</fieldset>
</form>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

@stop