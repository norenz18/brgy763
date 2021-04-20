<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
        * {

            padding: 0;
            margin: 0;
            box-sizing: border-box;

        }

        html,
        body {

            height: 100vh;
            /* background-color: #ccc; */
            font-family: nexa;

        }

        input[type] {

            border: none;
            border-bottom: 1px solid black;
            border-radius: 5px;
            background: transparent;
            outline: none;
            font-size: 18px;
        }

        input[type=email] {

            text-transform: initial;

        }

        h1 {

            color: #000000;
            background-color: transparent;
            font-size: 3rem;
            font-weight: 700;
            /* padding: 14px; */

        }

        #register-tab {

            font-size: 14px;
            box-shadow: 0 0 5px #D0D0D0;
            border: 3px solid rgba(255, 255, 255, 0.425);
            background-color: rgba(255, 255, 255, 0.5);
            filter: blur(0.5);
            width: auto;
            height: 95vh;
            position: relative;


        }

        #register-tab #bglogo {

            position: absolute;
            position: fixed;
            left: 50%;
            transform: translateX(-50%);
            height: 90vh;
            width: 45%;
            filter: opacity(15%);
            z-index: -99;


        }

        #register-tab #form-register {

            position: absolute;
            position: fixed;
            width: 100vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px 50px 20px;



        }
    </style>

</head>

<body>

    <?php echo form_open('users/register'); ?>

    <div class="container" id="register-tab">

        <div class="container" id="form-register">



            <span class="">
                <?php if ($this->session->flashdata('user_registered')) : ?>
                    <?php echo '<p class="alert alert-info">' . $this->session->flashdata('user_registered') . '</p>'; ?>
                <?php endif; ?>
            </span>

            <img id="bglogo" src="<?php echo site_url('img/brgy-logo800.png'); ?>">
            <h1>Sign Up</h1>
            <h6 class="text-danger"><small><?php echo validation_errors(); ?></small></h6>
            <div class="form-group col-sm-6">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>

            <div class="form-group col-sm-6">
                <label for="">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="form-group col-sm-6">
                <label for="">Username</label>
                <input type="text" style="text-transform: initial" class="form-control" name="username" placeholder="Username" required>
            </div>

            <div class="form-group col-sm-6">
                <label for="">Password</label>
                <input type="password" class="form-control" id="passVal" name="password" placeholder="password" required>

            </div>

            <div class="form-group col-sm-6">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" id="passVal2" name="password2" placeholder="Confirm Password" required>

            </div>

            <div class="form-group col-sm-6 d-flex justify-content-between">
                <button type="submit" class="btn btn-md btn-dark">Submit</button>
                <p style="font-size: 16px;"><b>Proceed to&nbsp;<a id="regText" href="<?php echo site_url('welcome'); ?> "><b>Log In!</b></a></b></p>

            </div>
        </div>

        <!-- <iframe src="https://www.youtube.com/embed/NfY8UhPgqII?autoplay=1&mute=1" class="mt-5" style="width: 1500px; height: 500px;" frameborder="5"></iframe> -->

    </div>