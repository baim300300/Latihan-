@extends('layout.app3')
@section('content')

<div class="container"><div class="container">
	<div class="box-content">
	<h1 class="title">Akunku</h1>
<div class=" col-md-9 col-sm-12 col-xs-12">





<form action="<?= url('store')?>" method="post" accept-charset="utf-8" id="validate" enctype="multipart/form-data"><div class="form-group">
	<div class="row">
		<div class="col-md-6 col-sm-12">
		            <label>Nama Depan</label>
		            <input id="FirstName" type="text" size="30" class="required form-control" name="FirstName" value="wira"  />
		</div>
		<div class="col-md-6 col-sm-12">
		            <label>Nama Belakang</label>
		            <input id="LastName" type="text" size="30" class="form-control" name="LastName" value="yuda"  />
		</div>
	</div>
</div>
<div class="form-group">
            <label>Negara</label>
            <select name="negara">
             @foreach($apps_countries as $n)
			  <option value="{{$n->id}}">{{$n->country_name}}</option>
			  @endforeach
			  </select>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-6 col-sm-12">
		            <label>Provinsi</label>
					<select id="ProvinceID" class="form-control" name="ProvinceID">
												</select>
		</div>
		<div class="col-md-6 col-sm-12">
		            <label>Kota</label>
					<select id="CityID" class="form-control" name="CityID">
												</select>
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-12">
			<label>Email</label>
			<input type="text" name="Email" class="required form-control" value="wirayuda@gmail.com" />
		</div>
	</div>
</div>	
<div class="form-group">
            <label>Alamat</label>
			<textarea id="Address" style="width: 100%; height: 83px;" class="required form-control" name="Address">asd</textarea>            
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-6 col-sm-12">
		            <label>Nomor Telp. / HP</label>
					<input id="PhoneNumber" type="text" size="30" class="required form-control" name="PhoneNumber" value="13"  />
		</div>
		<div class="col-md-6 col-sm-12">
		            <label>Kode Pos</label>
					<input id="PostalCode" type="text" size="30" class="form-control" name="PostalCode" value=""  />
		</div>
	</div>
</div>
<!-- 
<table class="form" border="0" id="validate">
	<tr>
		<td>
			Profile Picture
		</td>
		<td>:</td>
		<td>
			<input type="file" name="userfile" id="userfile" />
						<input type="hidden" id="MediaID" name="MediaID" value="0" />
			<br /><br />
			<span class="uploadstatus"></span>
			<div class="success infomedia" style="display: none">
							</div>
		</td>
	</tr>
</table> -->
<div class="form-group">
	<div class="row">
		<div class="col-md-12">
			<div class="alert alert-danger" style="text-align: center;">
			Password tidak usah diisi jika tidak diganti</div>
		</div>
		<div class="col-md-6 col-sm-12">
		            <label>Password</label>
					<input value="" type="password" class="form-control" name="Password" /><br />
		</div>
		<div class="col-md-6 col-sm-12">
		            <label>Ulangi Password</label>
					<input value="" type="password" class="form-control" name="RPassword" /><br />
		</div>
	</div>
</div>

<p>
	<button class="ui btn btn-primary" type="submit">Simpan</button>
</p>
</div>
<div class="col-md-3 col-sm-12">
	<div style="margin-top:70px;">
		<label>Profile Picture</label>
		<input type="file" name="userfile" id="userfile" />
				<input type="hidden" id="MediaID" name="MediaID" value="0" />
		<br />
		<span class="uploadstatus"></span>
		<div class="alert alert-success infomedia" style="display: none">
					</div>
		<br/>
				<input type="hidden" id="BannerID" name="BannerID" value="0" />
	</div>
</div>
</form><!-- <form id="uploader" enctype="multipart/form-data" method="post">
	<div class="col-md-12">
		<input type="file" style="visibility: hidden" id="filer" name="userfile" class="userfile" />
	</div>
</form> -->
<script type="text/javascript">
	$('#validate').validate();
	$('#userfile').change(function(){
		$(this).attr('disable',true);
		$('.uploadstatus').html('Sedang mengupload file <img src="http://www.berkarir.id/assets/images/load.gif" alt="ajaxloading" />');
		$('#validate').ajaxSubmit({
			dataType: 'json',
			url: 'http://www.berkarir.id/media/upload.html',
			success : function(data){
				$('#MediaID').val(data.mediaid);
				$('.infomedia').html('<img src="http://www.berkarir.id/assets/images/media/'+data.mediapath+'" width="100" /> <br />Gambar sudah dipilih <strong>'+data.mediapath+'</strong>.').show();
				$(this).attr('disable',false);
				$('.uploadstatus').empty();
			}
		});
	});
	
	$('#bannerfile').change(function(){
		$(this).attr('disable',true);
		$('.bannerstatus').html('Sedang mengupload file <img src="http://www.berkarir.id/assets/images/load.gif" alt="ajaxloading" />');
		$('#uploaders').ajaxSubmit({
			dataType: 'json',
			url: 'http://www.berkarir.id/media/upload.html',
			success : function(data){
				$('#BannerID').val(data.mediaid);
				$('.bannermedia').html('<img src="http://www.berkarir.id/assets/images/media/'+data.mediapath+'" width="100" /> <br />Gambar sudah dipilih <strong>'+data.mediapath+'</strong>.').show();
				$(this).attr('disable',false);
				$('.bannerstatus').empty();
			}
		});
	});
	
	$('#CountryID').change(function(){
				var con = this;
				$('#CityID').empty();
				$('#ProvinceID').unbind().load('http://www.berkarir.id/ajax/getprovinceoption.html',{'id':$(con).val()},function(data){
					$(this).change(function(){
						var pro = this;
						$('#CityID').unbind().load('http://www.berkarir.id/ajax/getcityoption.html',{'province':$(pro).val()},function(data){
							$('#CityID').change(function(){
								$.ajax({
									url: 'http://www.berkarir.id/ajax/cekshippingavailable.html',
									data: {shipment:$('#ShipmentID').val(),city:$('#CityID').val()},
									dataType: 'json',
									type: 'post'
								}).done(function(data){
									
								});
							});
						});
					});
				});
			});
	$('#ProvinceID').change(function(){
						var pro = this;
						$('#CityID').unbind().load('http://www.berkarir.id/ajax/getcityoption.html',{'province':$(pro).val()},function(data){
							$('#CityID').change(function(){
								$.ajax({
									url: 'http://www.berkarir.id/ajax/cekshippingavailable.html',
									data: {shipment:$('#ShipmentID').val(),city:$('#CityID').val()},
									dataType: 'json',
									type: 'post'
								}).done(function(data){
									
								});
							});
						});
					});
					
	// $('.cardfile').change(function(){
		// $(this).attr('disable',true);
		// $('.ustatus').html('Sedang mengupload file <img src="http://www.berkarir.id/assets/images/load.gif" alt="ajaxloading" />');
		// $('.form-horizontal').ajaxSubmit({
			// dataType: 'json',
			// url: 'http://www.berkarir.id/media/upload.html',
			// success : function(data){
				// $('#CardFile').val(data.mediaid);
				// $('.infomediac').html('<img src="http://www.berkarir.id/assets/images/media/'+data.mediapath+'" width="100" /> <br />Gambar sudah dipilih <strong>'+data.mediapath+'</strong>.').show();
				// $(this).attr('disable',false);
				// $('.ustatus').empty();
			// }
		// });
	// });
	$(document).ready(function(){
			$('#CompanyIndustryID').change(function(){
				if($(this).val() == 68){
					$('#OIN').fadeIn();
					$('#OIN input').addClass('required');
				}else{
					$('#OIN').fadeOut();
					$('#OIN input').removeClass('required');
				}
			});
			
			$('#CompanyTypeID').change(function(){
				if($(this).val() == 5){
					$('#OCTN').fadeIn();
					$('#OCTN input').addClass('required');
				}else{
					$('#OCTN').fadeOut();
					$('#OCTN input').removeClass('required');
				}
			});
		});
</script>
</div>
</div>
</div>
 


@stop