 <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
         <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
         <script src="{{asset('js/jquery.min.js')}}"></script>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="{{asset('../repair/img/mpssoft.png')}}">
        <!-- Author Meta -->
        <meta name="author" content="colorlib">
        <!-- Meta Description -->
        <meta name="description" content="">
        <!-- Meta Keyword -->
        <meta name="keywords" content="">
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>MPSSOFT CAREER</title>

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
            <!--
            CSS
            ============================================= -->
            <link rel="stylesheet" href="{{asset('../repair/css/linearicons.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/font-awesome.min.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/bootstrap.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/magnific-popup.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/nice-select.css')}}">                           
            <link rel="stylesheet" href="{{asset('../repair/css/animate.min.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/owl.carousel.css')}}">
            <link rel="stylesheet" href="{{asset('../repair/css/main.css')}}">
        </head>
        <body>  
              <header id="header" id="home">
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            
                           
                        </div>                              
                    </div>
                </div>
                <div class="container main-menu">
                    <div class="row align-items-center justify-content-between d-flex">
                      <div id="logo">
                        <a href="<?= url('/')?>"><img src="{{asset('../repair/img/mpssoft.png')}}" alt="" title="" width="200" /></a>
                      </div>
                      <nav id="nav-menu-container navbar-dark bg-dark">
                        <ul class="nav-menu">
                         <li>
                            Selamat datang <a href="#" >{{ $user?$user->name:""}}</a>
                         </li>
                         <li>
                             <a href="<?= url('/akun')?>"  class="nav-link text-success btn btn-outline-success">Akun</a>
                         </li>

                       <li> <a class="nav-link text-success btn btn-outline-success" href="{{ route('logout') }}"
                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                            {{ csrf_field() }}
                        </form>  
                        </li>          
                        
                        </ul>
                    
                   
                      </nav><!-- #nav-menu-container -->                    
                    </div>
                </div>
              </header><!-- #header -->
                <br/><br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/>
                <br/><br/>

                <div class="container-fluid">
    <div class="row">
        <div class="col-md-4" align="right">
          <div class="card" style="width: 18rem;">
              <div class="card-header" align="left"><a href="http://localhost/latihan/public/home">Beranda</a></div>
              <div class="card-header" align="left"><a href="<?= url('/tambah')?>">Atur Resume</a></div>
              <div class="card-header" align="left"><a href="<?= url('/detail')?>/{{$user?$user->id:''}}">Priview Resume</a></div>
            
              <div class="card-header" align="left"><a href="<?= url('/atur_document')?>">Atur Dokumen-dokumen</a></div>
              
            </div>
        </div>
        <div class="col-md-8">
             @yield('content')  


        </div>
    </div>
</div>
     <br/>
      <br/>
       <br/>

        <br/>

      
       <footer class="footer-area section-gap">
                <div class="container">

                    <div class="row">
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>About</h6>
                                <p>
                                    TWe start our business from a small team on 2008. Establised as PT. Mitra Pasifik Solusindo (MPSSOFT) on 27th May 2015. MPSSOFT is a tech company not only a software house. We focus on manufacturing and development of the technology and provide technology as a service. Our team consists of System Analyst, Certified IT Consultant/ Advisor/ Coach, HRIS/ HCMS Consultant, ERP Functional Consultant, Project Manager, Desktop Platform Engineer, Web Platform Engineer, Mobile App Engineer (Android & IOS), Web Designer, Graphic & Multimedia Designer, IT Support, Helpdesk & Customer Service, Business Development Team, Marketing & Public Relation Team to serve our valued customers.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Navigation Links</h6>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li><a href="#">Home</a></li>
                                            <li><a href="#">Feature</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Portfolio</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Pricing</a></li>
                                            <li><a href="#">Blog</a></li>
                                            <li><a href="#">Contact</a></li>
                                        </ul>
                                    </div>                                      
                                </div>                          
                            </div>
                        </div>                          
                        <div class="col-lg-3  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <p>
                                    For business professionals caught between high OEM price and mediocre print and graphic output.                                 
                                </p>                                
                                <div id="mc_embed_signup">
                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                                        <div class="input-group d-flex flex-row">
                                            <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                            </div>
                                            <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>      
                                        </div>                                  
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                                   
                    </div>

                    <div class="row footer-bottom d-flex justify-content-between align-items-center">
                        <p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Ibrahim nur </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                        <div class="col-lg-4 col-sm-12 footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End banner Area -->
        


            <script src="{{asset('../repair/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="{{asset('../repair/js/vendor/bootstrap.min.js')}}"></script>          
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="{{asset('../repair/js/easing.min.js')}}"></script>            
            <script src="{{asset('../repair/js/hoverIntent.js')}}"></script>
            <script src="{{asset('../repair/js/superfish.min.js')}}"></script> 
            <script src="{{asset('../repair/js/mn-accordion.js')}}"></script>
            <script src="{{asset('../repair/js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{asset('../repair/js/jquery.magnific-popup.min.js')}}"></script> 
            <script src="{{asset('../repair/js/owl.carousel.min.js')}}"></script>                      
            <script src="{{asset('../repair/js/jquery.nice-select.min.js')}}"></script>    
            <script src="{{asset('../repair/js/jquery.circlechart.js')}}"></script>                                
            <script src="{{asset('../repair/js/mail-script.js')}}"></script>   
            <script src="{{asset('../repair/js/main.js')}}"></script>
            <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
           <!--  <script type="text/javascript" src="{{asset('../repair/js/ckeditor.js')}}"></script>  -->
         
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                (function($){
                    $(function(){
                        $('.button-collapse').sideNav();
                    });
                });
            </script>
            @section('js')
            @show
       
    <script type="text/javascript">
        CKEDITOR.replace('ckeditor4');
        CKEDITOR.replace('ckeditor1');
        CKEDITOR.replace('ckeditor2');
    </script>
     </body>
    </html>
 <script type="text/javascript">
    var count = 0;
    var content = "";
    $('#addSertifikat').click(function(){
        count++;
                var content;
            content += 
            '<div class="col-md-4">'+
                        '<label>Jenis Dokumen</label>'+
                        '<select name="dokumen" class="required form-control">'+
                            '<option value="">-</option>'+
                            '<option value="1">KTP</option><option value="2">SIM</option><option value="3">Sertifikat</option><option value="4">CV</option><option value="5">Other</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-md-4">'+
                        '<label>Nama Dokumen</label>'+
                        '<input type="text" name="judul" class="required form-control" value="" />'+
                    '</div>'+
                    '<div class="col-md-4">'+
                        '<label>Upload Dokumen</label>'+
                       
                        '<input type="file" name="gambar[]" />'+
                        '<div class="fileinfo alert alert-info">'+
                        '</div>'+
                    '</div>'+
                    '';
            $('.inputcontainer').append(content);
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#insert').click(function(){
            var file_image = $('#inputgambar').val();
            if(file_image=='')
            {
                alert('please select image');
                return false;
            }else {
                var extension=$('#inputgambar').val().split('.').pop().toLowerCase();
                if(jQuery.inArray(extension,['gif','png','jpg','jpeg'])== -1)
                {
                    alert('Sucsess');
                    $('#inputgambar').val();
                    return false;
                }
            }
        })    
    })
    
</script>