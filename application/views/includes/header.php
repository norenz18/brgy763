<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo site_url('img/brgylogo1.png'); ?>" type="gif/image" sizes="16x16">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/bootstrap-table.min.css') ?> ">


     <!-- datepicker -->
    <link rel="stylesheet" href="<?php echo site_url('jquery/jquery-ui.min.css') ?> ">
    <script src="<?php echo site_url('jquery/external/jquery/jquery.js') ?>"></script>
    <script src="<?php echo site_url('jquery/jquery-ui.min.js') ?>"></script>

    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

   
    <style>
        ::-webkit-scrollbar {

            width: 10px;
            
          }

          /* Track */
          ::-webkit-scrollbar-track {

            background: #F2F2F2;
          
          }
          
          /* Handle */
          ::-webkit-scrollbar-thumb {

            background: #123A4A; 
            
          }

        *{

          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: nexa, 'poppins', sans-serif;
          font-weight: 400;
 
        }

        html,body{
          
          background: #f2f2f2;
          height: 100vh;
          position: relative;
                
        }
        /* DASHBOARD CONSTRUCTION */
        .under{

          /* 
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50% 50%); */

          display: flex;
          justify-content: center;
          align-items: center;

          /* display: grid;
          place-items: center; */
          height: 90vh;
        }
        input{

          text-transform: capitalize;
        }
        #textArea{

          resize: none;
        }
        .dropdown-toggle{
          display: none;
        }
        .page-list{
          opacity: 0;
        }
        .pagination{
          background-color: grey;
        }
           /* NAV FOR HEADER */
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

          font-family: montserrat;
          color: #efefef;
          text-decoration: none;
          font-size: 22px;
          transition: .2s ease;

          }
          .nav ul li:nth-child(3) a:hover{

          color: #ff0000;

          }
           #main-container{

          padding: 0;
          height: auto;

          }

          /* SIDEBAR NAVIGATION */
          .nav-main{

          height: auto;
          width: 200px;
          background-color: #e3f2fd;
          box-shadow: 0 0 8px grey;

          }
          .nav-main ul{

          display: flex;
          flex-direction: column;
          justify-content: space-evenly;
          align-items: flex-start;
          height: 100vh;
          position: relative;

          }

          .nav-main ul li{

          list-style: none;

          }
          .nav-main ul li:nth-child(1){

          align-self: center;     
          }
          .nav-main ul li a{

            color: #7c7777;
            font-weight: 900;
            font-size: 18px;
            text-decoration: none;
            margin: 0 0 0 10px;
            transition: all .1s ease;
           
          }
          .nav-main ul li a:hover{

            padding-left: 2px;
            border-left: 8px solid #123A4A;
            color: #000000;    

          }
          #brgylogo{

          height: auto;
	      	width: 150px;
          object-fit: cover;

          }
  
        #editContainer{
          height: 81.5vh;
        }
        label{

            font-weight: 700;
        }
        #table-wrapper {

          position: relative; 
         
        }
        #thead{
    
          border: 1px solid grey;
               
        }
        #thead tr th{

          position: sticky;
          top: 0;
          background-color: #123a4a;
          color: #fff;
          width: auto;
        }
        .profileImg{
           
           height: 150px;
           width: 150px;

        }
        #tbody #profileImg{

          height: 100px;
          width: 100px;
        }
        #tbody tr #fml{
          width: 300px;
        }
       
        #tbody tr #adrs{

          width: 350px;
        }
        .footer{
         
         /* margin-top: 38px; */
         height: 5vh;
         background-color: #123A4A;
         width: 100%;
         font-size: 12px;
         bottom: 0;
         text-align: center;
         color: #fff;
         display: flex;
          justify-content: center;
         align-items: center;
          
       }
       .main-content{

        height: 95vh;

       }
       .main-content #div-content{

        display: flex;
        justify-content: center;
        align-items: flex-start;
        padding: 50px 0 0 0;

       }
       .main-content #div-content .resPic img{

          height: 250px;
          width: 250px;
          border: 1px solid lightgrey;
          margin-right: 50px;

       }
       .main-content #div-content #resProfile{

         display: flex;
         flex-direction: column;
         justify-content: space-between;
         align-items: flex-start;
         margin-left: 50px;
         border: 1px solid lightgrey;
         padding: 30px;

       }
       .main-content #div-content #resProfile li{

        list-style: none;
        padding: 0 15px 0 0;
       
       }
       .main-content #div-content #resProfile li:nth-child(odd){

        background-color: lightgrey;
        width: 100%;
        padding: 0 5px 0;

       }
       .main-content #div-content #resProfile li strong{

          margin-right: 15px;
          font-size: 20px;
          
       }
       .main-content #div-content #resProfile li span{

        font-weight: 700;
        font-size: 20px;
        color: blue;
       }
       #incidentTab{

          height: auto;
          width: 100%;
          padding-left: 0;
          padding-right: 0;
       }
       #incidentTab #searchbar{

          background: transparent;
          border: none;
          border-bottom: 1px solid #343A40;
          margin-left: 10px;
          outline: none;
       }
       #incidentTab #table-posts #tbody tr #post-title{

          width: 500px;
          margin: 0;
         
        }
        #incidentTab #table-posts #tbody tr #post-body{

          width: 300px;
          margin: 0;

        }
        #incidentTab #table-posts #tbody tr td{

          width: 200px;
          text-align: center;
        }

       #incident_section{
          margin: 50px;
          height: 150vh;
         
       }
       #incident_section #titlehead{

         background-color: black;
         color: #fff;
         padding: 10px 0 10px 15px;
         letter-spacing: 3px;
       }
       #incident_section #postdate, #postbody{
        color: black;
       }

       /* DASHBOARD */
      .dataCount{

        margin: 20px 0 20px;
        display: flex;
        flex-direction: column;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: flex-start;
        align-content: flex-end;

       }
      .dataCount .count{

       
        width: 350px;
        height: 120px;
        border: 3px solid #123a4a;
        border-radius: 5px;
        background-color: rgba(255,255,255,0.425);
        position: relative;

       }
       .dataCount .count:nth-child(2){

        border-color: #F7B217;

       }
       .dataCount .count:nth-child(3){

        border-color: #30C730;

       }
       .dataCount .count:nth-child(4){

        border-color: #CE93C9;

       }
     
       .dataCount .count h3{

        position: absolute;
        text-align: center;
        color: #00000;
        font-size: 25px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: auto;
        width: 100%;
        margin: 0;
        /* -webkit-text-stroke: 1px darkgrey;
       -webkit-text-fill-color: white; */

      
       }
       

    </style>

    <title>Brgy. 763, Zone 83</title>
  </head>
  <body>

  <div class="container">
        <?php if($this->session->flashdata('user_registered')): ?>
          <?php echo '<p class="alert alert-dark">' .$this->session->flashdata('user_registered').'</p>'; ?>
        <?php endif; ?>
  </div>

  


           

        
      