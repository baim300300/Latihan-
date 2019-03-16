@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody tr').length - 0) + 1;
            var tr = 
                    '<td><input type="text" class="bahasa form-control" name="bahasa[]" value="{{ old('bahasa') }}"></td>'+
                    '<td><input type="text" class="speaking form-control" name="speaking[]" value="{{ old('speaking') }}"></td>'+
                    '<td><input type="text" class="writing form-control" name="writing[]" value="{{ old('writing') }}"></td>'+
                    '<td><input type="text" class="listening form-control" name="listening[]" value="{{ old('listening') }}"></td>'+
                    '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
            $('.resultbody').append(tr);
        });
        $('.resultbody').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>

   <script>
        
    $(document).ready(function(){

        $('#exampleModal3').on('click',$('#paramsOkay'),function(){
          


           var label= $('.industri:checked').data('label');
           $('#container').append(label);
           });


    });
    </script>
    <script>
        
    $(document).ready(function(){

        $('#exampleModal').on('click',$('#paramsOkay2'),function(){
          


           var label1= $('#fungsi:checked').data('label1');
           $('#container1').append(label1);
           });


    });
    </script>


</script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody6 tr').length - 0) + 1;
            var tr = 
                    `<label>*Nama bagian</label>
        <div class="col-md-10">
        <input type="text" name="nama_bagian[]" placeholder="Nama bagian" value="{{ old('nama_bagian') }}">
        </div>
         <br/>
          <label>*Keterangan</label>
        <div class="col-md-10">
          <input type="text" name="keterangan[]" placeholder="Keterangan" value="{{ old('keterangan') }}">
        </div>`;
            $('.resultbody6').append(tr);
        });
        $('.resultbody6').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>


<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody5 tr').length - 0) + 1;
            var tr = 
                    '<div class="row">'+
                    '<div class="col-md-6">'+
                    '<label>*Nama web</label>'+
                    '<div class="col-md-10">'+
                      '<input type="text" name="nama_web[]" placeholder="Nama Web" value="{{ old('nama_web') }}">'+
                    '</div>'+
                     '</div>'+
                     '<div class="col-md-6">'+
                     '<label>*URL</label>'+
                    '<div class="col-md-10">'+
                      '<input type="text" name="url[]" placeholder="URL" value="{{ old('url') }}">'+
                     '</div>'+
                     '</div>';
            $('.resultbody5').append(tr);
        });
        $('.resultbody5').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody4 tr').length - 0) + 1;
            var tr = 
                    `<div class="row">
                    <div class="col-md-6">
                     <label>*Nama referensi</label>
        <div class="col-md-10">
        <input type="text" name="nama_referensi[]" placeholder="Nama referensi" value="{{ old('nama_referensi') }}">
        </div>  
         <br/>
           <label>*Posisi</label>
        <div class="col-md-10">
        <input type="text" name="posisi_referens[]" placeholder="Posisi" value="{{ old('posisi_referens') }}">
        </div>
         <br/>
           <label>*Email</label>
        <div class="col-md-10">
          <input type="text" name="email[]" placeholder="Email" value="{{ old('email') }}">
        </div>
         <br/>
         </div>
         <div class="col-md-6">
           <label>*Perusahaan</label>
        <div class="col-md-10">
            <input type="text" name="perusahaan_referens[]" placeholder="Perusahaan" value="{{ old('perusahaan_referens') }}">
        </div>
         <br/>
         <label>*No telepon</label>
        <div class="col-md-10">
         <input type="text" name="telepon_referensi[]" placeholder="Telepon" value="{{ old('telepon_referensi') }}">
         </div>
        </div>
         <br/>`;
            $('.resultbody4').append(tr);
        });
        $('.resultbody4').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody3 tr').length - 0) + 1;
            var tr = 
                    `<div class="row">
                    <div class="col-md-6">
                     <label>*Bulan masuk</label>
                  <div class="col-md-10">
                  <select name="bulan_awal[]">
                  @foreach($bulan_awal as $ba)
                  <option value="{{$ba->id}}">{{$ba->bulan_awal}}</option>
                   @endforeach
                    </select>
                  </div>
        <br/>
                  <label>*Bulan Keluar</label>
                  <div class="col-md-10">
                  <select name="bulan_akhir[]">
                  @foreach($bulan_awal as $ba)
                  <option value="{{$ba->id}}">{{$ba->bulan_awal}}</option>
                   @endforeach
                    </select>
                  </div>
        <br/>
                  <label>*Tahun masuk</label>
                  <div class="col-md-10">
                  <select name="tahun_awal[]">
                  @foreach($tahun_masuk as $tm)
                  <option value="{{$tm->id}}">{{$tm->tahun_masuk}}</option>
                   @endforeach
                    </select>
                  </div>
         <br/>
                  <label>*Tahun akhir</label>
                  <div class="col-md-10">
                  <select name="tahun_akhir[]">
                  @foreach($tahun_masuk as $ta)
                  <option value="{{$ta->id}}">{{$ta->tahun_masuk}}</option>
                   @endforeach
                    </select>
                  </div>
                  </div>
                  <div class="col-md-6">
        
  
                  <label>*Perusahaan</label>
                  <div class="col-md-10">
                  <input type="text" name="perusahaan[]" value="{{ old('perusahaan') }}">
                  </div>
         <br/>
                <label>*Gaji</label>
                <div class="col-md-12">
                <input type="number" name="gaji[]" value="{{ old('gaji') }}">
                </div>
        <br/>
                <label>*Posisi</label>
                <div class="col-md-10">
                <input type="text" name="posisi[]" value="{{ old('posisi') }}">
                </div>
        <br/>
                <label>*Fungsi anda dipekerjaan tersebut</label>
                <div class="col-md-10">
                <input type="textarea" name="job_deks[]" value="{{ old('job_deks') }}">
                </div>
                </div>
                </div>`;
            $('.resultbody3').append(tr);
        });
        $('.resultbody3').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>


<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>
<script type="text/javascript">
    $(function () {
        $('.add').click(function () {
            var n = ($('.resultbody1 ').length - 0) + 1;
            var tr = 
                  '<div class="row">'+
                  '<div class="col-md-6">'+
                  '<label class="col-md-10 control-label" for="textinput">*Tahun masuk</label>'  +
                  '<div class="col-md-10">'+
                  '<select name="tahun_masuk[]">'+
                    @foreach($tahun_masuk as $tm)
                   '<option value="{{$tm->id}}">{{$tm->tahun_masuk}}</option>'+
                   @endforeach
                   '</select>'+
                   '</div>'+
                   '<label class="col-md-10 control-label" for="textinput">*Tahun Lulus</label>'  +
                   '<div class="col-md-10">'+
                   '<select name="tahun_lulus[]">'+
                   @foreach($tahun_masuk as $tm)
                   '<option value="{{$tm->id}}">{{$tm->tahun_masuk}}</option>'+
                   @endforeach
                   '</select>'+
                   '</div>'+
                  
                   '<label class="col-md-10 control-label" for="textinput">*Institusi</label>'  +
                  '<div class="col-md-10">'+
                    '<input type="text" name="institusi[]" value={{old('institusi')}}>'+
                   '</div>'+
                    '</div>'+
                   '<div class="col-md-6">'+
                   '<label class="col-md-12 control-label" for="textinput">*Status Pendidikan (SD,SMP,SMA.....)</label>'  +
                   '<div class="col-md-10">'+
                    '<input type="text" name="status_pendidikan[]" value={{old('status_pendidikan')}}>'+
                   '</div>'+
                   '<label class="col-md-10 control-label" for="textinput">*Bidang Studi</label>'  +
                   '<div class="col-md-10">'+
                    '<input type="text" name="bidang_studi[]" value={{old('bidang_studi')}}>'+
                   '</div>'+
                   '<label class="col-md-10 control-label" for="textinput">*IPK</label>'  +
                   '<div class="col-md-10">'+
                    '<input type="text" name="IPK[]" value={{old('IPK')}}>'+
                   '</div>'+
                   '</div>'+
                   '</div>'+
                   
                    '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
            $('.resultbody1').append(tr);
        });
        $('.resultbody1').delegate('.delete', 'click', function () {
            $(this).parent().parent().remove();
        });
    });
</script>
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputgambar").change(function () {
        readURL(this);
    });

</script>

@stop

@extends('layout.app3')
@section('content')

<legend>Buat Resume Online</legend>

<!-- Text input-->
 <form class="form-horizontal" action="<?= url('store')?>" enctype="multipart/form-data" id="contactForm" name="contact" method="post">
          {{ csrf_field() }}
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
        <fieldset>
      <div class="row">
      <div class="col-md-6">
      <label class="col-md-4 control-label" for="textinput">*Nama depan</label>  
      <div class="col-md-10">
      <input id="textinput" name="namadepan" type="text" placeholder="Nama depan" class="form-control input-md">

      </div>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Nama Belakang</label>  
      <div class="col-md-10">
      <input id="textinput" name="nama_belakang" type="text" placeholder="Nama Belakang" class="form-control input-md">
      </div>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Telepon</label>  
      <div class="col-md-10">
      <input id="textinput" name="telepon" type="text" placeholder="Nomor telepon" class="form-control input-md">
      </div>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Telepon lainnya</label>  
      <div class="col-md-10">
      <input id="textinput" name="rtelepon" type="text" placeholder="Telepon lainnya" class="form-control input-md">
      </div>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Upload Foto</label>  
      <div class="col-md-10">
      <img src="http://placehold.it/100x100" id="showgambar" style="max-width:200px;max-height:200px;float:left;" />
      <input type="file" id="inputgambar" name="gambar" class="validate" >
      </div>
<br/>
<br/>
<br/>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Alamat 1</label>  
       <div class="col-md-10">
      <input id="textinput" name="alamat1" type="text" placeholder="Alamat" class="form-control input-md">
      </div>
<br/>
      <label class="col-md-4 control-label" for="textinput">*Alamat lainnya</label>  
      <div class="col-md-10">
      <input id="textinput" name="alamat2" type="text" placeholder="Alamat lainnya" class="form-control input-md">
      </div>
<br/>
       <label class="col-md-4 control-label" for="textinput">*Kode pos</label>  
       <div class="col-md-10">
       <input id="textinput" name="kodepos" type="text" placeholder="KODE POS" class="form-control input-md">
       </div>
<br/>
 </div>
      <div class="col-md-6">
      <label class="col-md-4 control-label" for="textinput">*Jumlah anak</label>  
      <div class="col-md-10">
      <input id="textinput" name="jumlah_anak" type="text" placeholder="Jumlah Anak" class="form-control input-md">
      </div>
<br/>

      <label class="col-md-4 control-label" for="textinput">*Kewarganegaraan</label>  
      <div class="col-md-10">
      <input id="textinput" name="kewarganegaraan" type="text" placeholder="Kewarganegaraan" class="form-control input-md">
      </div>
<br/>
     
      <label class="col-md-4 control-label" for="textinput">*Ras/Suku</label>  
      <div class="col-md-10">
      <input id="textinput" name="ras" type="text" placeholder="ras/suku" class="form-control input-md">
      </div>

<br/>
        <label class="col-md-4 control-label" for="textinput">*Negara</label>  
        <div class="col-md-10">
        <select name="negara">
          @foreach($apps_countries as $n)
          <option value="{{$n->id}}">{{$n->country_name}}</option>
          @endforeach
          </select>
        </div>
<br/>
        <label class="col-md-6 control-label" for="textinput">*Gender</label>  
        <div class="col-md-1">
        <select name="gender">
        @foreach($gender as $g)
        <option value="{{$g->id}}">{{ $g->gender}}</option>
        @endforeach
        </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Status pernikahan</label>  
        <div class="col-md-12">
        <select name="status">
        @foreach($status_pernikahan as $s)
        <option value="{{ $s->id}}">{{ $s->status}}</option>
        @endforeach
        </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Kendaraan</label>  
        <div class="col-md-12">
        <select name="kendaraan">
        @foreach($kendaraan as $k)
          <option value="{{$k->id}}">{{$k->kendaraan}}</option>
        @endforeach
        </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Status tempat tinggal</label>  
        <div class="col-md-12">
        <select name="tempat_tinggal">
        @foreach($status_tempat_tinggal as $stg)
          <option value="{{$stg->id}}">{{$stg->status_tempat_tinggal}}</option>
        @endforeach
        </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Provinsi</label>  
        <div class="col-md-12">
        <select name="provinsi">
          @foreach($provinsi as $p)
        <option value="{{$p->id}}">{{$p->provinsi}}</option>
          @endforeach
        </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Agama</label>  
        <div class="col-md-12">
        <select name="agama">
          @foreach($agama as $a)
          <option value="{{$a->id}}">{{$a->agama}}</option>
          @endforeach
          </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Kartu kredit</label>  
        <div class="col-md-12">
        <select name="kartu_kredit">
          @foreach($kartu_kredit as $kk)
          <option value="{{$kk->id}}">{{$kk->kartu_kredit}}</option>
          @endforeach
          </select>
        </div>
<br/>
        <label class="col-md-10 control-label" for="textinput">*Kartu kredit</label>  
        <div class="col-md-12">
        <select name="kartu_kredit">
          @foreach($kartu_kredit as $kk)
          <option value="{{$kk->id}}">{{$kk->kartu_kredit}}</option>
          @endforeach
          </select>
          </div>
        </div>
                </div>
                   </div>
                       </div>




  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Profil kharir
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
      

<!-- Form Name -->
Profil Karir untuk membantu Perusahaan Melihat Kualitas Anda
<br/>       
<br/>   
<br/>   
            <div class="row">
              <div class="col-md-6">
            <label>*Tingkat pendidikan</label>
            <div class="col-md-10">
            <select name="tingkat_pendidikan">
            @foreach($tingkat_pendidikan as $tp)
            <option value="{{$tp->id}}">{{$tp->tingkat_pendidikan}}</option>
             @endforeach
            </select>
            </div>
<br/>
          <label>*Posisi terakhir</label>
          <div class="col-md-10">
          <input type="text" name="posisi_terakhir" placeholder="Posisi terakhir">
          </div>
<br/>
           <label>*Industri terakhir</label>
           <br/>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
         Industri
          </button>
          <div  class="container" id="container">
            
          </div>
            
          

          <!-- Modal -->
         
          <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModal3Label" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModal3Label">Pilih industri terakhir</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               
                <div class="modal-body" style="overflow-y: scroll; height: 500px;" >

                  @foreach($industri_terakhir as $it)
                  <div class="form-group">
                 <input type="radio" class="industri" data-label="{{$it->industri_terakhir}}" name="industri_terakhir" value="{{$it->id}}">{{$it->industri_terakhir}}
                   </div>
                   @endforeach

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button id="paramsOkay"  class="oke" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                    Okay
                </button>
                  <br/>
                  
                </div>
              
              </div>
            </div>
          </div>
          <div id="result"></div>
         
<br/>
          <label>*Gaji terakhir</label>
          <div class="col-md-10">
          <input type="number" name="gaji_terakhir" placeholder="Gaji terakhir">
          </div>
<br/>
          </div>
          <div class="col-md-6">
          <label>*Kapan bisa mulai kerja?</label>
       <div class="container">
 <div class="form-group">

 <input type="date" name="mulai_bekerja" max="3000-12-31" 
        min="1000-01-01" class="form-control">
</div>
</div>
<br/>
          <label>*Jumlah tahun pengalaman</label>
          <div class="col-md-10">
          <select name="jumlah_tahun_pengalaman">
            @foreach($jumlah_tahun_pengalaman as $jtp)
            <option value="{{$jtp->id}}">{{$jtp->jumlah_tahun_pengalaman}}</option>
             @endforeach
          </select>
          </div>
<br/>
       <label>*Fungsi pekerjaan terakhir</label>
           <br/>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Pekerjaan terakhir
          </button>
         <div  class="container" id="container1"></div>
          <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Pilih industri terakhir</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
               
                <div class="modal-body" style="overflow-y: scroll; height: 500px;" >

                  @foreach($fungsi_pekerjaan_terakhir as $fpt)
                  <div class="form-group">
                 <input type="radio" name="fungsi_pekerjaan_terakhir" id="fungsi" data-label1="{{$fpt->fungsi_pekerjaan_terakhir}}" value="{{$fpt->id}}">{{$fpt->fungsi_pekerjaan_terakhir}}
                   </div>
                   @endforeach
                 </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Close
                </button>
                <button id="paramsOkay2"  class="oke" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Okay
                </button>
                  <br/>
                  
                </div>
              </div>
            </div>
          </div> 
<br/>    
          <label>*Tingkat karir terakhir</label>
          <div class="col-md-10">
          <select name="tingkat_kharir_terakhir">
            @foreach($tingkat_kharir_terakhir as $tkt)
            <option value="{{$tkt->id}}">{{$tkt->tingkat_karir_terakhir}}</option>
             @endforeach
          </select>
          </div>
<br/>
        <label>*Gaji yang diharapkan</label>
        <div class="col-md-10">
        <input type="number" name="gaji_yang_diharapkan" placeholder="Gaji yang diharapkan">
        </div>
<br/>
            </div>
            </div>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Pendidikan
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
    
                            <table class="resultbody1">
                        
                            </table>
            <a href="#" class="btn btn-info btn-white btn-sm dropdown-toggle add" id="addEducation" value="Add New Item"> + Pendidikan</a>
          
          <div class="clearfix"></div>
      
      </div>
    </div>
  </div>
   

   <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingfour">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          Pengalaman Kerja
        </button>
      </h2>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
          <table class="resultbody3">
         
          </table>
          
            
            <a href="#" class="btn btn-info btn-blue btn-sm dropdown-toggle add" id="addEducation" value="Add New Item"> + Pengalaman kerja</a>
          <div class="clearfix"></div>
         <br/>
                 
           </div>
        </div>
   </div>
  <div class="card">
    <div class="card-header" id="headingTwo1">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
         Rangkuman Eksekutif
        </button>
      </h2>
    </div>
    <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo1" data-parent="#accordionExample">
      <div class="card-body">
        <textarea id="ckeditor4"  name="eksekutif"></textarea>


        </div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThreeq">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreeq" aria-expanded="false" aria-controls="collapseThreeq">
          Keterampilan 
        </button>
      </h2>
    </div>
    <div id="collapseThreeq" class="collapse" aria-labelledby="headingThreeq" data-parent="#accordionExample">
      <div class="card-body">
        <textarea id="ckeditor1"  name="keterampilan"></textarea>


      </div> 
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingThreea">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreea" aria-expanded="false" aria-controls="collapseThreea">
         Bahasa 
        </button>
      </h2>
    </div>
    <div id="collapseThreea" class="collapse" aria-labelledby="headingThreea" data-parent="#accordionExample">
      <div class="card-body">
      <table class="table table-striped">
                            <thead>
                                <tr>
                                  
                                    <th>Bahasa</th>
                                    <th>Speaking</th>
                                    <th>Writing</th>
                                    <th>listening</th>
                            
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody class="resultbody">
                               

                            </tbody>
                        </table>    
                        <center><input type="button" class="btn btn-lg btn-primary add" value="Add New Item">   
       </div> 
        
      </div> 
    </div>
 
</div>
 <div class="card">
    <div class="card-header" id="headingThreez">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreez" aria-expanded="false" aria-controls="collapseThreez">
         Refereens 
        </button>
      </h2>
    </div>
    <div id="collapseThreez" class="collapse" aria-labelledby="headingThreez" data-parent="#accordionExample">
      <div class="card-body">
         <table class="resultbody4">
           <input type="hidden" value="{{ old('nama_referensi') }}">
      
        <input type="hidden" value="{{ old('posisi_referens') }}">
       
          <input type="hidden"  value="{{ old('email') }}">
       
            <input type="hidden" value="{{ old('perusahaan_referens') }}">
       
         <input type="hidden"  value="{{ old('telepon_referensi') }}">
         </div>
        </div>
          </table>
            <a href="#" class="btn btn-info btn-blue btn-sm dropdown-toggle add" id="addEducation" value="Add New Item"> + Refereens</a>
          <div class="clearfix"></div>
      </div> 
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThreex">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreex" aria-expanded="false" aria-controls="collapseThreex">
         Web Pribadi 
        </button>
      </h2>
    </div>
    <div id="collapseThreex" class="collapse" aria-labelledby="headingThreex" data-parent="#accordionExample">
      <div class="card-body">
        <table class="resultbody5">
          </table>
                <input type="hidden" value="{{ old('nama_web') }}">
                    
                      <input type="hidden"   value="{{ old('url') }}">
              
                     
            <a href="#" class="btn btn-info btn-blue btn-sm dropdown-toggle add" id="addEducation" value="Add New Item"> + Web pribadi</a>
          <div class="clearfix"></div>
         
         <br/>
      </div> 
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThrees">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThrees" aria-expanded="false" aria-controls="collapseThrees">
         Bagian anda sendiri (opsional) 
        </button>
      </h2>
    </div>
    <div id="collapseThrees" class="collapse" aria-labelledby="headingThrees" data-parent="#accordionExample">
      <div class="card-body">
        <table class="resultbody6">
          </table>
           <input type="hidden"  placeholder="Nama bagian" value="{{ old('nama_bagian') }}">
  
        
          <input type="hidden"  placeholder="Keterangan" value="{{ old('keterangan') }}">
          
            <a href="#" class="btn btn-info btn-blue btn-sm dropdown-toggle add" id="addEducation" value="Add New Item"> + Bagian</a>
          <div class="clearfix"></div>
         <br/>
      </div> 
    </div>
  </div>
   <div class="card">
    <div class="card-header" id="headingThreed">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThreed" aria-expanded="false" aria-controls="collapseThreed">
         Info tambahan
        </button>
      </h2>
    </div>
    <div id="collapseThreed" class="collapse" aria-labelledby="headingThreed" data-parent="#accordionExample">
      <div class="card-body">
        <label>*Posisi</label>
        <div class="col-md-10">
         <input type="text" name="posisi_tambahan" placeholder="posisi">
        </div>
         <br/>
         <label>*Kategori</label>
        <div class="col-md-10">
           <select name="kategori">
        @foreach($fungsi_pekerjaan_terakhir as $fpt)
        <option value="{{$fpt->id}}">{{$fpt->fungsi_pekerjaan_terakhir}}</option>
         @endforeach
          </select>
        </div>
         <br/>
         <label>*Industri</label>
        <div class="col-md-10"> 
           <select name="industri">
        @foreach($industri_terakhir as $it)
        <option value="{{$it->id}}">{{$it->industri_terakhir}}</option>
         @endforeach
          </select>
        </div>
         <br/>
          <label>*Lokasi</label>
        <div class="col-md-10"> 
        <select name="lokasi">
        @foreach($provinsi as $pr)
        <option value="{{$pr->id}}">{{$pr->provinsi}}</option>
         @endforeach
          </select>
        </div>
         <br/> 
         <label>*Jangka waktu kerja</label>
        <div class="col-md-10"> 
        @foreach($jangka_waktu_kerja as $jwk)
       <input type="checkbox" name="waktu_kerja" value="{{$jwk->id}}">{{$jwk->jangka_waktu_kerja}}
         @endforeach
        </div>
         <br/> 
         <label>*Bersedia keluar negeri?</label>
        <div class="col-md-10">  
        @foreach($keluar_negeri as $kn)
       <input type="radio" name="keluar_negeri" value="{{$kn->id}}">{{$kn->keluar_negeri}}
         @endforeach
        </div>
         <br/> 
          <label>*Bersedia untuk berpergian?</label>
        <div class="col-md-10">  
        @foreach($berpergian as $be)
       <input type="radio" name="berpergian" value="{{$be->id}}">{{$be->berpergian}}
         @endforeach
        </div>
         <br/> 
         <label>*Info tambahan</label>
        <div class="col-md-10">  
     
          <textarea id="ckeditor2" name="info_tambahan">
            </textarea>
        </div>
         <br/> 
        
          
        

        <br/>

         <br/>
         

      </div> 
    </div>
  </div>

  <input type="submit" value="Simpan Data">
</div>

 </fieldset>
 
</form>  


@endsection

