	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		#inputfield{
			height: 100px;
		}
	</style>
	<title>Home</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Changhong</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor03">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	     <!--  <li class="nav-item">
	        <a class="nav-link" href="#">Features</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Pricing</a>
	      </li> -->
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo site_url('HomeUser/Profile'); ?>">Profile</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	    	<a href="<?php echo site_url('HomeUser/LogOut');?>" class="btn btn-secondary my-2 my-sm-0">LogOut</a>
	    </form>
	  </div>
	</nav>


	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<form class="form-group" method="post" action="<?php echo site_url('HomeUser/AddThread'); ?>">
						<input type="text" name="title" class="form-control" placeholder="title"><br>
						<input type="text" name="content" class="form-control" placeholder="Content" id="inputfield"><br>
						<center>
							<input type="submit" name="submit" value="create" class="btn btn-primary">
						</center>
					</form>			
				</div>
			</div>
		</div>
	</div>

	<?php foreach($data as $var){?>
	<div class="container">
		<div class="jumbotron">
			<div class="row">
				<div class="offset-md-4 col-md-4">
					<center>
						<h3><?php echo $var->title; ?></h3>
						<h5><?php echo $var->content; ?></h5>
					</center>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

