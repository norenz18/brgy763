<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Brgy.763 Zone 83 Dist.5, Manila</title>

	<link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">
   

	<style type="text/css">

	html,body {
		background-color: #eee;
		margin: 40px;
		font-family: nexa;		
	}
	h1 {
		color: #555;
		background-color: transparent;
		border-bottom: 2px solid #D0D0D0;
		font-size: 3rem;
		font-weight: 700;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	#username, #password{

		width: 300px;
	}
	#brgylogo, #blogo{

		height: 100px;
		width: 150px;
	}

	.container {
		
		padding: 10px 0;
		font-size: 27px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	
	</style>
	
</head>
<body>
				<h1 class="container text-center">
					<img src="<?php echo site_url('img/brgylogo.png'); ?>" id="brgylogo" alt="brgy. 763 logo">
						Welcome to Brgy. 763 Zone 83 District V, Manila
					<img src="<?php echo site_url('img/blogo.png'); ?>" id="blogo" alt="blogo">
				</h1>
	
				<div class="container d-flex justify-content-center text-center">
									
					<form action="<?php echo site_url('users/login');?>" method="POST">					
						<h1>Log In</h1>

						<div class="form-group col-md-12">
							<label for="">Username</label>
							<input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" required>
						</div>

						<div class="form-group col-md-12">
							<label for="">Password</label>
							<input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required>
						</div>

						<div class="form-group col-md-12">							
							<input type="submit" name="login" value="Login" class="form-control btn btn-dark">					
						</div>
					</form>

				</div>
</body>
</html>
