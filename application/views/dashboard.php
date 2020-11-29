<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Brgy. 763-Dashboard</title>

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
    <script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
    <script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">
    <style>

    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
       
    }
    html, body{

        font-family: montserrat; /*normal;*/
        
    }
   
    .bg-container{
     
      position: relative;

    }
    .bg-container #bglogo{
        position: absolute;
        position: fixed;
        left: 50%;
        transform: translateX(-50%);
        height: 80vh;
        width: 50%;
        filter: opacity(20%);
        z-index: -20;
       
    }
     .bg-container .tabs{
        
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: flex-start;
        
        position: absolute;
        right: 3%;
        height: 80vh;
        margin-top: 28px;
        
       
    }
    .bg-container .tabs .tab{
        
        background-color: #123A4A;
        border-radius: 10px;
        width: 90%;
        height: 120px;
        margin: 10px;
        transition: all .2s ease;
    }
    .bg-container .tabs .tab:hover{

        
        background-color: #23272B; /*  #123A4A; #e3f2fd; */
        transform: translateY(2%);
        transition: all .3s ease;
        
    }
     .bg-container .tabs .tab h4{

        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;

     }
     .bg-container .tabs .tab h4 a{

         text-decoration: none;
         color: #efefef;
         z-index: 10;
         text-align: center;
        
     }
     .nav{

        background-color: #123A4A;
        height: 10vh;
    }
    .nav ul{

        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        margin: 0 50px; 
        list-style: none;
    }
    .nav ul li a{
        
       color: #efefef;
       text-decoration: none;
       font-size: 22px;
       transition: .2s ease;
    }
    .nav ul li:nth-child(2) a:hover{

        color: #ff0000;

    }

   
    </style>

</head>
<body>

            <div class="nav">
                <ul>
                    <li><a href="<?php echo site_url('CrudController');?>">DASHBOARD</a></li>
                    <li><a href="<?php echo site_url('users/login'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                </ul>
            
            </div>


            <div class="bg-container">
            
                <img id="bglogo" src="<?php echo site_url('img/brgylogo.png');?>"> 
  
                    <div class="tabs">
       
                        <div class="tab">
                            <h4><a href="<?php echo site_url('CrudController/viewlist'); ?>" id="residenttab"><i class="fas fa-users"></i> RESIDENTS</a></h4>
                        </div>

                        <div class="tab">
                            <h4><a href="<?php echo site_url('PostsController'); ?>" id="recordtab"><i class="fas fa-feather-alt"></i> INCIDENT REPORT</a></h4>
                        </div>   

                        <div class="tab">
                            <h4><a href="<?php echo site_url('PostsController'); ?>" id="recordtab"><i class="fas fa-book"></i> BLOTTER</a></h4>
                        </div>   

                        <div class="tab">
                            <h4><a href="<?php echo site_url('CrudController/viewlist'); ?>" id="permittab"><i class="fas fa-scroll"></i> PERMITS &#38; CERTIFICATES</a></h4>
                        </div>

                        <div class="tab">
                            <h4><a href="<?php echo site_url('CrudController/viewlist'); ?>" id="offtab"><i class="fas fa-users-cog"></i> BRGY. OFFICIALS</a></h4> 
                        </div> 
                    </div>

            </div>

  