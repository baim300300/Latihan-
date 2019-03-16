 <!DOCTYPE html>
    <html lang="zxx" class="no-js">
    <head>
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
                         
                                                         
                          <li><a href="<?= url('/login')?>"><button type="button" class="btn btn-primary">Masuk</button></a></li>                        
                          <li><a href="<?= url('/register')?>"><button type="button" class="btn btn-primary">Daftar Sekarang</button></a></li>
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
              <div class="card-header" align="left"><a href="<?= url('/addcv')?>">Atur Resume</a></div>
              <div class="card-header" align="left"><a href="">Priview Resume</a></div>
              <div class="card-header" align="left"><a href="<?= url('/daftar-lamaran')?>">Daftar lamaran</a></div>
              <div class="card-header" align="left"><a href="">Atur Dokumen-dokumen</a></div>
              
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
        

            <script src="{{asset('../repair/js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="{{asset('../repair/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js')}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="{{asset('../repair/js/vendor/bootstrap.min.js')}}"></script>          
          
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
        </body>
    </html>