<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">
    <script src="<?php echo site_url('ckeditor/ckeditor.js') ?>"></script>
   
   
    <style>
        *{

          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: 'nexa', sans-serif;
          font-weight: 400;
 
        }

        html,body{
          
          background: #f2f2f2;
          height: 100vh;
          position: relative;
                
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
          height: 85vh;

          }

          /* SIDEBAR NAVIGATION */
          .nav-main{

          height: 85vh;
          width: 200px;
          background-color: #e3f2fd;
          box-shadow: 0 0 8px grey;
          /* transform: translateX(-85%);
          transition: .3s ease-in-out; */

          }
          /* .nav-main:hover{

            transform: translateX(0%);

          } */
          .nav-main ul{

          display: flex;
          flex-direction: column;
          justify-content: space-evenly;
          align-items: flex-start;
          height: 85vh;
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
          #brgy{

          width: 130px;
          height: auto;
          filter: drop-shadow(10px 10px 8px grey);
          transition: .3s ease-in-out;
          display: flex;
          justify-content: space-between;
          align-content: flex-start;

         }
         #brgy:hover{

          transform: translateY(-5%);

        }
        #opac{

          position: relative;
          background-color: #e3f2fd;
          box-shadow: 0px 5px 20px lightgrey;
          width: 100%;
          height: auto;
        
        }
        #editContainer{
          height: 81.5vh;
        }
        #search-bar{
         
          margin-left: 5px;
          border: none;
          outline: none;
          background: transparent;
          border-bottom: 2px solid lightgrey;

        }
        label{

            font-weight: 700;
        }
        #table-wrapper {

          position:relative;
         
        }
        #table-scroll {

          height: 65.2vh;
          overflow:auto;  
          margin-top: 20px;
          border: 1px solid lightgrey;
        }
        #thead{

          background-color: #e3f2fd; 
          border: 1px solid grey;
               
        }
        #thead tr th{

          width: auto;
        }
        #tbody tr #fml, #adrs{

          width: 250px;
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
          border: 5px solid grey;

       }
       .main-content #div-content #resProfile{

         display: flex;
         flex-direction: column;
         justify-content: center;
         align-items: center;

       }
       .main-content #div-content #resProfile tr td{

        padding: 0 15px 90px 0;

       }
       #incidentTab{

          height: 82vh;
          width: 100%;
       }
       #incidentTab #searchbar{

          border: 2px solid #343A40;
          border-radius: 5px;
          margin-left: 10px;
          outline: none;
       }
       #incidentTab #post-side #post-body{

          border: 1px solid lightgrey;
          padding: 5px;
          margin-right: 5px; 
          border-radius: 5px;
          text-align: center;
          width: 100%;
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

        color: grey;

       }
       #post-side {

        position:relative;

        }
        #post-scroll {
        
          height: 65vh;
          overflow: auto;  

        }
        #post-scroll #tbl-post{

          
          display: flex;
          justify-content: space-around;
          align-items: center;
        
        }
        #post-scroll #tbl-post tr td{

          display: flex;
          justify-content: space-around;
          align-items: center;
          margin: 10px 20px;
          width: 100%;
          padding: 10px 0 10px 10px;
          overflow: hidden;

        }
        #post-scroll #tbl-post tr td h1{

          margin: 0;
        }
        #post-scroll #tbl-post tr td p{

          padding-right: 50px;
        }
        #post-scroll #tbl-post tr #post-body{

          width: 100%;
          padding: 30px;
          margin-right: 50px;
        }
    
      

    </style>

    <title>Brgy. 763, Zone 83</title>
  </head>
  <body>

  


           

        <!-- <nav class="navbar navbar-light" id="opac">
          <a href="https://www.google.com" data-toggle="tooltip" title="Brgy 763 Zone 83">
            <img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo.png'); ?>" />
          </a>

          <a href="<?php echo site_url('CrudController');?>" data-toggle="tooltip" title="DASHBOARD" >
            <img id="brgy" alt="Dashboard" src="<?php echo site_url('img/dashboard.png'); ?>" />
          </a>

         
          <a href="<?php echo site_url('CrudController/viewlist');?>" data-toggle="tooltip" title="RESIDENTS">
            <img id="brgy" alt="Residents"  src="<?php echo site_url('img/resident.png'); ?>" />
          </a>
        
          <a href="" data-toggle="tooltip" title="RECORD BOOK">
            <img id="brgy" alt="Record Book"  src="<?php echo site_url('img/recordbook.png'); ?>" />
          </a>
          
          <a href="" data-toggle="tooltip" title="PERMIT & CERTIFICATE">
            <img id="brgy" alt="Permit"  src="<?php echo site_url('img/permit.png'); ?>" />
          </a>
          
          <a href="" data-toggle="tooltip" title="BRGY. OFFICIALS">
            <img id="brgy" alt="Officials"  src="<?php echo site_url('img/officials.png'); ?>" />
          </a>
          
          <a class="navbar-brand" href="https://www.facebook.com/groups/329543403861128/" data-toggle="tooltip" title="FB GROUP">
            <img src="<?php echo site_url('img/blogo.png'); ?>" id="brgylogo" alt="brgylogo">
          </a>   

        </nav>
        <br> -->

      