@extends('layout.app3')
@section('content')
<form class="form-horizontal" action="<?= url('store')?>" enctype="multipart/form-data" id="contactForm" name="contact" method="post">
          {{ csrf_field() }}
<div class="inputcontainer"></div>
<button type="button" class="btn btn-info dropdown-toggle " id="addSertifikat">+ Tambah Dokumen</a>
<button class="btn btn-primary dropdown-toggle" id="insert" name="insert" style="margin-left: 10px;">Simpan</button>
			
</form>

@stop	