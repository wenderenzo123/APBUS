<!DOCTYPE html>
<html lang="en">
  <head>
    <title>APBUS &mdash; Sistema de ônibus</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="public/apbus/fonts/icomoon/style.css">

    <link rel="stylesheet" href="public/apbus/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/apbus/css/magnific-popup.css">
    <link rel="stylesheet" href="public/apbus/css/jquery-ui.css">
    <link rel="stylesheet" href="public/apbus/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/apbus/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/apbus/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/apbus/css/animate.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">
    
    
    
    <link rel="stylesheet" href="public/apbus/fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="public/apbus/css/aos.css">

    <link rel="stylesheet" href="public/apbus/css/style.css">
    
  </head>
  <body style="background-image: url('public/apbus/images/bg.jpg');">
  
  <div class="site-wrap">

    

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
            <div class="col-2">
              <h2 class="mb-0 site-logo"><a href="index.php" class="font-weight-bold">APBUS</a></h2>
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li><a href="?/painel/index">Home</a></li>
                    <li class="has-children">
                      <a href="insurance.html">Insurance</a>
                      <ul class="dropdown arrow-top">
                        <li><a href="#">Home Insurance</a></li>
                        <li><a href="#">Auto Insurance</a></li>
                        <li><a href="#">Travel Insurance</a></li>
                        <li class="has-children">
                          <a href="#">Sub Menus</a>
                          <ul class="dropdown">
                            <li><a href="insurance.html">Home Insurance</a></li>
                            <li><a href="insurance.html">Auto Insurance</a></li>
                            <li><a href="insurance.html">Travel Insurance</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="active"><a href="?/painel/about">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="contact.html"><span class="d-inline-block p-3 bg-primary text-white btn btn-primary">Get A Quote</span></a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <table>
     <?php
foreach ($_SESSION['user'] as $u) {
  echo $u['matricula'];
}?>
</table>
    <div class="site-blocks-cover inner-page overlay" style="background-image: url(public/apbus/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="row align-items-center justify-content-center">
        <div class="col-md-7 text-center" data-aos="fade">
          <h1 class="text-uppercase">About Us</h1>
          <span class="caption d-block text-white">An Insurance Company</span>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12"><h2 class="text-uppercase">We Are Trusted Agency Company</h2></div>
        </div>
        <div class="row mb-5">
          <div class="col-md-12">
            <img src="public/apbus/images/about_1.jpg" alt="image" class="img-fluid">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>
          </div>
        </div>
      </div>
    </div>
    
  

  <div class="site-half">
    <div class="img-bg-1" style="background-image: url('public/apbus/images/hero_bg_2.jpg');"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-md-5 ml-md-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">Outstanding Services</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">Why Choose Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
        </div>
      </div>
    </div>
  </div>

  <div class="site-half">
    <div class="img-bg-1 right" style="background-image: url('public/apbus/images/hero_bg_1.jpg');"></div>
    <div class="container">
      <div class="row no-gutters align-items-stretch">
        <div class="col-md-5 mr-md-auto py-5">
          <span class="caption d-block mb-2 font-secondary font-weight-bold">Outstanding Services</span>
          <h2 class="site-section-heading text-uppercase font-secondary mb-5">Why Choose Us</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus aliquid eius facilis voluptatem eligendi magnam accusamus vel commodi asperiores sint rem reprehenderit nobis nesciunt veniam qui fugit doloremque numquam quod.</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur tempora distinctio ipsam nesciunt recusandae repellendus asperiores amet.</p>  
        </div>
      </div>
    </div>
  </div>
    

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <span class="caption d-block mb-2 font-secondary font-weight-bold">Outstanding Services</span>
            <h2 class="site-section-heading text-uppercase text-center font-secondary">Why Choose Us</h2>
          </div>
        </div>
        <div class="row border-responsive">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right">
            <div class="text-center">
              <span class="flaticon-customer-service display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">24/7 Support</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right">
            <div class="text-center">
              <span class="flaticon-group display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Trusted People</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right">
            <div class="text-center">
              <span class="flaticon-medal display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">12 Years Experience</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <div class="text-center">
              <span class="flaticon-agreement display-4 d-block mb-3 text-primary"></span>
              <h3 class="text-uppercase h4 mb-3">Join With Us</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-0">Small Business Insurance Company</h2>
          </div>
          <div class="col-md-3 ml-auto text-center text-md-left">
            <a href="#" class="btn btn-bg-primary d-inline-block d-md-block font-secondary text-uppercase">Contact Us</a> 
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quos rem ullam, placeat amet.</p>
            <p><a href="#" class="btn btn-primary rounded text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-5 ml-auto">
            <div class="row">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Insurance</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Privacy</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Insurance</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home Insurance</a></li>
                    <li><a href="#">Auto Insurance</a></li>
                    <li><a href="#">Travel Insurance</a></li>
                    <li><a href="#">Business Insurance</a></li>
                  </ul>
              </div>
            </div>
          </div>

          
          <div class="col-md-2">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="public/apbus/js/jquery-3.3.1.min.js"></script>
  <script src="public/apbus/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="public/apbus/js/jquery-ui.js"></script>
  <script src="public/apbus/js/popper.min.js"></script>
  <script src="public/apbus/js/bootstrap.min.js"></script>
  <script src="public/apbus/js/owl.carousel.min.js"></script>
  <script src="public/apbus/js/jquery.stellar.min.js"></script>
  <script src="public/apbus/js/jquery.countdown.min.js"></script>
  <script src="public/apbus/js/jquery.magnific-popup.min.js"></script>
  <script src="public/apbus/js/bootstrap-datepicker.min.js"></script>
  <script src="public/apbus/js/aos.js"></script>

  <script src="public/apbus/js/main.js"></script>

  </body>
</html>