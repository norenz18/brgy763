<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo site_url('img/brgylogo.png'); ?>" type="gif/image" sizes="16x16">
    

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/bootstrap-table.min.css') ?> ">
 

    <script src="<?php echo site_url('ckeditor/ckeditor.js') ?>"></script>
   
   
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
          font-family: 'nexa', sans-serif;
          font-weight: 400;
 
        }

        html,body{
          
          background: #f2f2f2;
          height: 100vh;
          position: relative;
                
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

          height: 82vh;
          width: 100%;
       }
       #incidentTab #searchbar{

          background: transparent;
          border: none;
          border-bottom: 1px solid #343A40;
          margin-left: 10px;
          outline: none;
       }
       #incidentTab #post-side #post-body{

          border: 1px solid black;
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

        color: black;

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
          flex-direction: column;
          justify-content: space-around;
          align-items: center;
          width: 100%;
          padding: 10px;
          overflow: hidden;

        }
        #post-scroll #tbl-post tr td h1{

          margin-top: 10px;
        }
        #post-scroll #tbl-post tr td p{

         
        }
        #post-scroll #tbl-post tr #post-body{

          width: 100%;
          padding: 15px;
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

  


           

        
      