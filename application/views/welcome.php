<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">
   

	<style type="text/css">

	/* ::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; } */

	html,body {
		background-color: #eee;
		margin: 40px;
		font-family: nexa;

	}
    #su, #pcd{

        text-decoration: none;
        color: #555;
        padding: 5px;
	
    }
	#su:hover, #pcd:hover{

		border-bottom: 1px solid grey;
	
	}
	h1 {
		color: #555;
		background-color: transparent;	
		font-size: 27px;
		font-weight: 700;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
		transition: .3s ease-in-out;
	}

	#brgylogo, #blogo{

		height: 100px;
		width: 150px;
	}

	.container {
		margin: 10px;
		padding: 20px 0;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	
	</style>
</head>
<body>
		<h1 class="container text-center">
			<img src="<?php echo site_url('img/brgylogo.png'); ?>" id="brgylogo" alt="brgy. 763 logo">&nbsp;&nbsp;<?php echo $title ?>&nbsp;
			<img src="<?php echo site_url('img/blogo.png'); ?>" id="blogo" alt="blogo">
		</h1>

		<div class="container text-center">
			<h1><a href="<?php echo site_url('Users/register'); ?>" id="su">Sign Up?</a></h1>
        	<h1><a href="<?php echo site_url('Users/login'); ?>" id="pcd">Proceed to Log In</a></h1>	

		</div>

</body>
</html>

