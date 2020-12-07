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
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">

    <style>

    html,body{

        height: 100vh;

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
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <p>Proceed to&nbsp;<a id="regText" href="<?php echo site_url('Users/login'); ?> ">Log In!</a></p>
        </div>

        <?php echo form_close(); ?>


</body>
</html>