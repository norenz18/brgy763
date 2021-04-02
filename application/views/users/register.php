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


    *{

        padding: 0;
        margin: 0;
        box-sizing: border-box;

    }
    html,body{

        height: 90vh;
		background-color: #ccc;
        margin-top: 10px;
		font-family: nexa;		

	}
    input[type=email]{

        text-transform: initial;

    }
	h1 {

		color: black;
		background-color: transparent;
		font-size: 3rem;
		font-weight: 700;
		padding: 14px;

	}
    .container {
		
	
		font-size: 18px;
        background-color: rgba(255,255,255,0.5);
        border-radius: 20px;
     
        
	}


    </style>

</head>
<body>

        <?php echo form_open('users/register'); ?>

    <div class="container d-flex justify-content-evenly">

        <div class="container-fluid">
            <h1>Sign Up</h1>
            <h6 style="color: red;"><small><?php echo validation_errors(); ?></small></h6>
            <div class="form-group col-sm-12">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            
            <div class="form-group col-sm-12">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>

            <div class="form-group col-sm-12">
                <label for="">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>

            <div class="form-group col-sm-12">
                <label for="">Password</label>
                <input type="password" class="form-control" id="passVal" name="password" placeholder="password">
              
            </div>

            <div class="form-group col-sm-12">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="passVal2" name="password2" placeholder="Confirm Password">
              
            </div>

            <div class="form-group col-sm-12">
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <p>Proceed to&nbsp;<a id="regText" href="<?php echo site_url('welcome'); ?> ">Log In!</a></p>
            </div>
        </div>

        <iframe src="https://www.youtube.com/embed/NfY8UhPgqII?autoplay=1&mute=1" class="mt-5" style="width: 1500px; height: 500px;" frameborder="5"></iframe>

    </div>
        
        <?php echo form_close(); ?>

</body>
</html>