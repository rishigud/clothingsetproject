<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Clothing Set Donation</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url();?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url();?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/css/carousel.css" rel="stylesheet">
  </head>
 
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url() ?>items">Closet</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
			
				<?php if(!$this->session->userdata('logged_in') ):?>
				 <li><a href="<?php echo base_url();?>users/register">Create Account</a></li>
				 <li><a href="<?php echo base_url();?>admin">Admin</a></li>
				 <?php endif ; ?>
          </ul>
		  <?php if(!$this->session->userdata('logged_in')) : ?>
		  <form class="navbar-form navbar-right" method="post" action="<?php echo base_url()?>users/login">
		  
		  <div class="form-group">
		  <input name="username" type="text" class="form-control"  placeholder="Enter Username">
		  
		  </div>
		  <div class="form-group">
		  <input name="password" type="password" class="form-control"  placeholder="Enter Passowrd">
		  
		  </div>
		  <button name="submit" type="submit" class="btn btn-primary">Login</button>
		  
		  
		  
		  </form>
		  
		<?php else :?>
		   <form class="navbar-form navbar-right" method="post" action="<?php echo base_url()?>users/logout">
		   
		  <button name="submit" type="submit" class="btn btn-primary">Logout</button>
		
		  
		  
		  </form>
		<?php endif?>
        </div><!--/.nav-collapse -->
		
		
		
      </div>
    </nav>
<br>
  <br>
    <br>
   
      </div>
    </div>
	<br>
	<br>
<!---side bar and panel--->
<div class="container">

  <div class="row">
 
     <div class="col-md-4">
	
     <?php $this->load->view('layouts/includes/sidebar') ?>
        
             </div>
                       </div>
                   </div>
			 

     </div>

   <div class="col-md-8">
      
	<div class="row">
     <div class="panel panel-default panel-list ">
                <div class="panel-heading panel-heading-green">
				<h3 class="panel-title">Clothing Set Items</h3></div>
                  <div class="panel-body">
                        
						 
				
	

	 