  <style type="text/css">
    .main-section{
      border:1px solid #138496;
      background-color: #fff;
    }
    .profile-header{
      background-color: #17a2b8;
      height:150px;
    }
    .user-detail{
      margin:-50px 0px 30px 0px;
    }
    .user-detail img{
      height:100px;
      width:100px;
    }
    .user-detail h5{
      margin:15px 0px 5px 0px;
    }
    .user-social-detail{
      padding:15px 0px;
      background-color: #17a2b8;
    }
    .user-social-detail a i{
      color:#fff;
      font-size:23px;
      padding: 0px 5px;
    }

    #in{
      text-align: center; 
    }

  </style>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Changhong</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('HomeUser'); ?>"<span class="sr-only">Home</span></a>
        </li>
       <!--  <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li> -->
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo site_url('HomeUser/Profile'); ?>">Profile</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


    <div class="container">
      <div class="row">
        <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 profile-header"></div>
            </div>
            <div class="row user-detail">
                <div class="col-lg-12 col-sm-12 col-12">   
                    <img src="<?php echo $user->foto; ?>" class="rounded-circle img-thumbnail"><br>
                    <h5 align="center"><?php echo $user->fullname ?></h5>
                    <!-- <p><i class="fa fa-map-marker" aria-hidden="true"></i> New Jersey, USA.</p> -->

                    <hr>

                    <h6 align="center"><?php echo $user->biodata;?></h6>


                    <hr>
                    <a href="<?php echo site_url('HomeUser/UpdateData')?>" class="btn btn-success btn-sm">Change</a>
                    <!-- <a href="#" class="btn btn-info btn-sm">lorem</a> -->
                </div>
            </div>
            <div class="row user-social-detail">
                <div class="col-lg-12 col-sm-12 col-12">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
      </div>
    </div>