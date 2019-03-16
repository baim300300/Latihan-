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
</br>
</br>
</br>
</br>

<form class="form-horizontal ">
<fieldset>

<!-- Form Name -->
<CENTER><legend>LOGIN</legend>

</br>
</br>
</br>

<!-- Text input-->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="username">Email / Username</label>  
  <div class="col-md-5">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-5">
  <input id="password" name="password" type="text" placeholder="" class="form-control input-md">
  <br/>
    <div class="row">
    	<div class="col" align="left">
    		<label class="col control-label" for="singlebutton"><a href="<?= url('/register')?>">Lupa password?| Daftar sekarang</a> </label>
    	</div>
    	<div class="col-md-6" align="right">
    		 <button id="singlebutton" name="singlebutton" class="btn btn-primary">Masuk</button>
    	</div>
    	
    </div>
  </div>
</div>

<!-- Button -->


</fieldset>
</form>
</CENTER>


</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>


@stop