<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Brgy.763 Zone 83 Dist.5, Manila</title>

	<link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="icon" href="<?php echo site_url('img/brgylogo1.png'); ?>" type="gif/image" sizes="16x16">

    <style>


html,body {
        height: 90vh;
		background-color: #ccc;
		margin-top: 10px;
		font-family: nexa;		
	}
	h1 {
		color: #555;
		background-color: transparent;
		border-bottom: 2px solid #D0D0D0;
		font-size: 3rem;
		font-weight: 700;
		margin: 0 0 12px 0;
		padding: 10px;
	}
    .container {
		
		/* padding: 10px 0; */
		font-size: 18px;
		border: 1px solid #D8D8D8;
		box-shadow: 0 0 8px #D0D0D0;
	}


    </style>

</head>
<body>
    

        <?php echo validation_errors(); ?>
        <?php echo form_open('users/register'); ?>

        <div class="container">
            <h1>Sign Up</h1>
            <div class="form-group col-sm-3">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            
            <div class="form-group col-sm-3">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group col-sm-3">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <div class="form-group col-sm-3">
                <label for="">Password</label>
                <input type="password" class="form-control" id="passVal" name="password" placeholder="password">
              
            </div>

            <div class="form-group col-sm-3">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="passVal2" name="password2" placeholder="Confirm Password">
              
            </div>

            <div class="form-group col-sm-3">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <p>Proceed to&nbsp;<a id="regText" href="<?php echo site_url('Users/login'); ?> ">Log In!</a></p>
            </div>
        </div>

        <?php echo form_close(); ?>

</body>
</html>