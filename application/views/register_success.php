<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Changhong</title>
        <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
        <meta name="keywords" content="Free website templates, Free bootstrap themes, Free template, Free bootstrap, Free website template">
    
        <link href="<?php echo base_url();?>https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/law-icons/font/flaticon.css">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick-theme.css">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/helpers.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/landing-2.css">
    </head>
    <body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo site_url('HomePage/index')?>">Changhong</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <!-- <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-faq">FAQ</a></li>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="#" target="_blank"><span class="pb_rounded-4 px-4">Get Started</span></a></li>
          </ul>
        </div> -->
      </div>
    </nav>
    <!-- END nav -->



    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" >
      <div class="container">
        <br><br>
        <br><br>
          <div class="row">
              <div class="col-md-offset-3 col-md-6">
                <div class="jumbotron">
                  <p align="center">Register is Successed <br> Check your email for confirmation</p>
                  <br>
                  <a href="<?php echo site_url('HomePage');?>" class="btn btn-primary">Back to home</a>
                </div>
              </div>
          </div> 
        </div>
      </div>
    </section>
    <!-- END section -->


    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2018 Changhong Forum Disscussion. <br> Template by UI Cookies &amp; Developed by </a> <small>(Jihad Nur Shibgatullah & Muhammad Faris Muzakki)</small></p>
          </div>
        </div>
      </div>
    </footer>
    
    <!-- loader -->
    <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#1d82ff"/></svg></div>



    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mb.YTPlayer.min.js"></script>

    <script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>

    <script src="<?php echo base_url();?>assets/js/main.js"></script>

    </body>
</html>

<script >
function check(){
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
</script>
