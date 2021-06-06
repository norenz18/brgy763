<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
	<link rel="icon" href="<?php echo site_url('img/brgylogo1.png'); ?>" type="gif/image" sizes="16x16">


	<style type="text/css">
		/* ::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; } */

		html,
		body {

			margin: 0;
			padding: 0;
			font-family: nexa, tahoma, arial, sans-serif;


		}

		.welcome-container {

			position: relative;
			height: 100vh;

		}

		.welcome-container #bglogo {

			position: absolute;
			position: fixed;
			left: 50%;
			transform: translateX(-50%);
			height: 100vh;
			width: 50%;
			filter: opacity(30%);
			z-index: -20;

		}

		.welcome-container #container {


			height: 100vh;
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			border: 3px solid rgba(255, 255, 255, 1);
			box-shadow: 0 0 8px #D0D0D0;


		}

		.welcome-container #container .login-container {

			position: absolute;
			padding: 50px 50px 50px;
			border-radius: 20px;
			border: 3px solid rgba(255, 255, 255, 0.425);
			background-color: rgba(255, 255, 255, 0.5);
			filter: blur(0.5);
			color: black;
			font-size: 18px;
			font-weight: bolder;

			/* FLEX */
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;

		}

		input[type=text],
		[type=password] {

			border: none;
			border-bottom: 1px solid black;
			border-radius: 5px;
			background: transparent;
			outline: none;
			font-size: 18px;
			/* text-transform: Initial; */

		}
	</style>
</head>

<body>

	<div class="welcome-container">

		<img id="bglogo" src="<?php echo site_url('img/brgylogo1.png'); ?>">

		<div class="container d-flex justify-content-center text-center" id="container">


			<div class="login-container">

				<?php if ($this->session->flashdata('user_loggedin')) : ?>
					<?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
				<?php endif; ?>

				<?php if ($this->session->flashdata('login_failed')) : ?>
					<?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
				<?php endif; ?>


				<form action="<?php echo site_url('Users/login'); ?>" method="POST">
					<h1><strong>Login</strong></h1>

					<div class="form-group col-md-12">
						<label for=""><strong>Username</strong></label>
						<input type="text" name="username" id="username" placeholder="Enter Username" class="form-control" required>
					</div>

					<div class="form-group col-md-12">
						<label for=""><strong>Password</strong></label>
						<input type="password" name="password" id="password" placeholder="Enter Password" class="form-control" required>
					</div>

					<div class="form-group col-md-12">
						<input type="submit" name="login" value="Login" class="form-control btn btn-dark">
					</div>

					<!-- <p>Dont have an account?&nbsp;<a id="regText" href="<?php echo site_url('Users/register'); ?> ">Sign up here!</a></p> -->
				</form>
			</div>
		</div>

	</div>

	<script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
	<script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
	<script src="<?php echo site_url('bootstrap/js/jquery.js') ?>"></script>
	<script src="<?php echo site_url('bootstrap/js/jquery-ui.js') ?>"></script>

</body>

</html>