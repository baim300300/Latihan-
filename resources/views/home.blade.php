@extends('layout.app3')
@section('content')

<h1 class="mainTitle">Beranda MppsoftJob</h1>
<br/>

<?php
	
if($alert) {
			print '<div class="alert alert-info">Selamat semua input sudah diisi</div>.<br><br><br><br>';
}else
{
	print '<div class="alert alert-danger">Resume anda blum lengkap <a href="#">Silahkan lengkapi</a>
	</div>';
}
?>




@stop