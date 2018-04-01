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
        <a class="navbar-brand" href="index.php">Changhong</a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-features">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-reviews">Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-pricing">Pricing</a></li>
            <li class="nav-item"><a class="nav-link" href="#section-faq">FAQ</a></li>
            <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link" href="#" target="_blank"><span class="pb_rounded-4 px-4">Get Started</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->



    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="section-home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <h2 class="heading mb-3">Disscussion Make You Smart</h2>
            <div class="sub-heading">
              <p class="mb-4">Join with us. You will see the deferent of word</p>
              <p class="mb-5"><a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#"><span class="pb_font-14 text-uppercase pb_letter-spacing-1" data-toggle="modal" data-target=".login-register-form">Register</span></a></p>
            </div>
          </div> 
          <div class="col-md-1">
          </div>
          <div class="col-md-5 relative align-self-center">
            
            <form action="#" class="bg-white rounded pb_form_v1" method="post">
              <h2 class="mb-4 mt-0 text-center">Login</h2>
              <div class="form-group">
                <input type="text" class="form-control pb_height-50 reverse" name="username" placeholder="username" required="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control pb_height-50 reverse" name="password" placeholder="password" required="">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Login">
              </div>
            </form>

          </div> 
        </div>
      </div>
    </section>
    <!-- END section -->

    <!-- POPUP LOGIN -->
    <!-- Login / Register Modal-->
    <div class="modal fade login-register-form" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span>
                    </button>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                        <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                    </ul>
                </div>
                <div class="modal-body">
                    <div class="tab-content">
                        <div id="login-form" class="tab-pane fade in active">
                            <form action="/">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </div>
                        <div id="registration-form" class="tab-pane fade">
                            <form action="/">
                                <div class="form-group">
                                    <label for="name">Your Name:</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="newemail">Email:</label>
                                    <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                                </div>
                                <div class="form-group">
                                    <label for="newpwd">Password:</label>
                                    <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                                </div>
                                <button type="submit" class="btn btn-default">Register</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Features</strong></h5>
            <h2>App Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Minimal Design</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Fast Loading</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Unlimited Possibilities</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-color-filter-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Component Based Design</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-wineglass-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Clean Code</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md- col-sm-6">
            <div class="media d-block pb_feature-v1 text-left">
              <div class="pb_icon"><i class="ion-ios-paperplane-outline pb_icon-gradient"></i></div>
              <div class="media-body">
                <h5 class="mt-0 mb-3 heading">Lightweight</h5>
                <p class="text-sans-serif">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

   <!--  <section class="pb_section pb_slant-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5">
            <img src="assets/images/phone_3.png" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pl-md-5 pl-sm-0">
            <div class="row">
              <div class="col">
                <h2>Application Features</h2>
                <p class="pb_font-20">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Minimal Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Unlimited Posibilities</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 

              </div>
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Fast Loading</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Component Based Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>    

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

   <!--  <section class="pb_section bg-light pb_slant-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-2">
            <img src="assets/images/phone_3.png" alt="Image placeholder" class="img-fluid">
          </div>
          <div class="col-lg-8 pr-md-5 pr-sm-0 order-1  mb-5">
            <div class="row">
              <div class="col">
                <h2>Application Features</h2>
                <p class="pb_font-20">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Minimal Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-infinite-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Unlimited Posibilities</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div> 

              </div>
              <div class="col-lg">
                
                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Fast Loading</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>

                <div class="media pb_feature-v2 text-left mb-1 mt-5">
                  <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div>
                  <div class="media-body">
                    <h3 class="mt-2 mb-2 heading">Component Based Design</h3>
                    <p class="text-sans-serif pb_font-16">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                  </div>
                </div>    

              </div>
            </div>
            
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

    <!-- <section class="pb_section pb_slant-light pb_pb-220" id="section-reviews">
      <div class="container">
        <div class="row justify-content-center mb-1">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Reviews</strong></h5>
            <h2>Good Review From Good People</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_slide_testimonial_sync_v1">
              <div class="pb_slider_content js-pb_slider_content2">
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">Garry Alexander</h3>
                      <span class="subheading">@garry</span>
                      
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">Deborah Smith</h3>
                      <span class="subheading">@deborah</span>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">James Robertson</h3>
                      <span class="subheading">@james</span>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="media d-block text-center testimonial_v1 pb_quote_v2">
                    <div class="media-body">
                      <div class="quote">&ldquo;</div>
                      <blockquote class="mb-5">The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</blockquote>
                      <p>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star text-warning"></i>
                        <i class="ion-ios-star-half text-warning"></i>
                        <i class="ion-ios-star-outline text-warning"></i>
                      </p>
                      <h3 class="heading">Marie Gibson</h3>
                      <span class="subheading">@marie</span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mx-auto">
                  <div class="pb_slider_nav js-pb_slider_nav2">
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_1.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_5.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_2.jpg" alt="Generic placeholder image">
                    </div>
                    <div class="author">
                      <img class="img-fluid rounded-circle" src="assets/images/person_6.jpg" alt="Generic placeholder image">
                    </div>
                  </div>
                </div>
              </div>
              
            </div> -->
            <!-- END sync_v1 -->
          <!-- </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

    <!-- <section class="pb_section bg-light pb_slant-white" id="section-pricing">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>Pricing</strong></h5>
            <h2>Choose Your Plans</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border text-center bg-white">
              <h3>Basic</h3>
              <span class="price"><sup>$</sup>19<span>month</span></span>
              <p class="pb_font-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
              <p class="mb-0"><a href="#" role="button" class="btn btn-secondary">Get started</a></p>
            </div>
          </div>
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border border-primary text-center bg-white">
              <h3>Business</h3>
              <span class="price"><sup>$</sup>39<span>month</span></span>
              <p class="pb_font-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
              <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Get started</a></p>
            </div>
          </div>
          <div class="col-md">
            <div class="pb_pricing_v1 p-5 border text-center bg-white">
              <h3>Free</h3>
              <span class="price"><sup>$</sup>99<span>month</span></span>
              <p class="pb_font-15">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
              <p class="mb-0"><a href="#" role="button" class="btn btn-secondary">Get started</a></p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- ENDs ection -->

   <!--  <section class="pb_section pb_slant-white" id="section-faq">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-6 text-center mb-5">
            <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>FAQ</strong></h5>
            <h2>Frequently Ask Questions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md">
            <div id="pb_faq" class="pb_accordion" data-children=".item">
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">What is Instant?</a>
                <div id="pb_faq1" class="collapse show" role="tabpanel">
                  <div class="py-3">
                  <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">Is this available to my country?</a>
                <div id="pb_faq2" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">How do I use the features of Instant App?</a>
                <div id="pb_faq3" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">How much do the Instant App cost?</a>
                <div id="pb_faq4" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                  </div>
                </div>
              </div>

              <div class="item">
                <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-22 py-4">I have technical problem, who do I email?</a>
                <div id="pb_faq5" class="collapse" role="tabpanel">
                  <div class="py-3">
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8"  style="background-image: url(assets/images/1900x1200_img_5.jpg)">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 justify-content-center">
            <h2 class="heading mb-5 pb_font-40">Join over 1M+ people who uses Instant App</h2>
            <div class="sub-heading">
              <p class="mb-4">New free template by <a href="http://uicookies.com" target="_blank">uicookies.com</a>. For more templates visit the <a href="http://uicookies.com" target="_blank">site</a>. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
          </div> 
          <div class="col-md-1"></div>
          <div class="col-md-5">
             <form action="#" class="bg-white rounded pb_form_v1">
              <h2 class="mb-4 mt-0 text-center">Sign Up for Free</h2>
              <div class="form-group">
                <input type="text" class="form-control py-3 reverse" placeholder="Full name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control py-3 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control py-3 reverse" placeholder="Email">
              </div>
              <div class="form-group">
                <div class="pb_select-wrap">
                  <select class="form-control pb_height-50 reverse">
                    <option value="" selected>Type</option>
                    <option value="">Basic</option>
                    <option value="">Business</option>
                    <option value="">Free</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Register">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

    <footer class="pb_footer bg-light" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <p class="pb_font-14">&copy; 2018 Changhong Forum Disscussion. <br> Designed UI Cookies &amp; Developed by </a> <small>(Jihad Nur Shibgatullah & Muhammad Faris Muzakki)</small></p>
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