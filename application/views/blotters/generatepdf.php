<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
    <link rel="stylesheet" href="<?php echo site_url('asset/bootstrap-table.min.css') ?> ">
    <title>Brgy. 763 Zone 83 District V. Manila</title>
  
  
    <style>

        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }
        html,body{

            font-family: calibri, arial, sans-serif;
            height: 100vh;

        }
        .container{

            height: 100%;
            /* background-image: url('img/logomanila2.png');
            background-size: 88%;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;  */
            background-color: blue;

        
        }
        .container .pdf-header{

            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            align-items: center;

        }
        .container .pdf-header img{

            width: 130px;
            height: 130px;
            object-fit: cover;
        }
        .pdf-header h5{

            color: red;
        }


        /* .container .bg-logo{
         
            position: absolute;
            background-image: url('img/logomanila2.png');
            background-size: 88%;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed; 
            margin: 0;
            padding: 5px;
            width: auto;
            height: 100%;
        } */
        /*  .container .bg-logo .pdf-header h5, h2, h1{
            
            text-align: center;

        }
        #brgylogo, #blogo{
            
            width: 110px;
            height: 110px;
        } */

    </style>
</head>
<body>

<div class="container">
 
   
                <div class="pdf-header">


                        <img src="<?php echo site_url('img/brgylogo1.png'); ?>" id="brgylogo" alt="brgy. 763 logo">
                
                        <h4>
                        <b>
                        REPUBLIC OF THE PHILIPPINES <br>
                        CITY OF MANILA <br>
                        BARANGAY 763 ZONE 83 <br>
                        DISTRICT V   
                        </b>
                        </h4>

                        <img src="<?php echo site_url('img/newblogo.png'); ?>" id="blogo" alt="blogo">

<!-- 
                        <h5><b>OFFICE OF THE BARANGAY CHAIRMAN</b></h5>
                        <h1><strong>CERTIFICATE OF INDIGENCY</strong> </h1> -->
                        
                     
                </div>
               

        

 


        <div class="d-flex justify-content-around certText" id="">

                <div class="officialSection">

                    <p> BARANGAY OFFICIALS </p>
            
                    <p> PUNONG BARANGAY </p>
                
                    <p>  BARANGAY KAGAWAD</p>
                
                    <p> BARANGAY KAGAWAD</p>
                
                    <p> BARANGAY KAGAWAD</p>
                
                    <p> BARANGAY KAGAWAD</p>
            
                    <p> BARANGAY KAGAWAD</p> 
                
                    <p> BARANGAY KAGAWAD</p> 
            
                    <p> BARANGAY KAGAWAD</p>
        
                    <p> SK CHAIRMAN</p>
        
                    <p> BARANGAY SECRETARY</p>

                    <p> BARANGAY TREASURER</p>

        </div> <!-- end of official section -->

            <div class="textSection">

                <h6> 
                        This is to certify that    _________________________________ <br>

                        Filipino of legal age,  with present address at

                        ______________________________________ <br> is a resident of 

                        Barangay 763 Zone 83 District 5 of Manila. <br>

                        This certification is issued upon the request of the concerned for

                        the purpose of <br> ____________________________________________

                        <br> Done this _____________day of  ____________ 20_________ <br>

                        at the Office of the Barangay Chairman, <br> Barangay 763 Zone 83 

                        District 5, Manila City 1017 Philippines.  
                </h6>  
            
            </div> <!-- end of text section -->
    
    </div>


</div>   <!-- end of caontainer --> 
            
    <script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
    <script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo site_url('asset/bootstrap-table.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script> CKEDITOR.replace( 'editor1' );</script> -->
</body>
</html>
<!-- <li><img src="<?php echo site_url('img/brgylogo1.png'); ?>" id="brgylogo" alt="brgy. 763 logo"></li>
<li><img src="<?php echo site_url('img/newblogo.png'); ?>" id="blogo" alt="blogo"></li> -->

   
        <!-- <p>Click here to More Information for Pakainfo.com <a href="https://www.pakainfo.com/" alt="CodeIgniter 3 PDF Generate Tutorial With Example" title="CodeIgniter 3 PDF Generate Tutorial With Example">Pakainfo.com</a>.</p> -->
  
            <!-- <div class="pdfile">
        <div class="headerpdf">
          
                <h3>
                REPUBLIC OF THE PHILIPPINES <br>
                CITY OF MANILA <br>
                BARANGAY 763 ZONE 83 <br>
                DISTRICT V   
                </h3>
     </div>

        <h4>OFFICE OF THE BARANGAY CHAIRMAN</h4>

        <h2>CERTIFICATION</h2>

    <div class="container" id="pdf-content">

        <h5>
        BARANGAY OFFICIALS

        <p> <h5>HON. EDISON M. JIMENO</h5>
        PUNONG BARANGAY  </p>

        <p> <h5>HON. NAPOLEON P. SEÑERES</h5>
        BARANGAY KAGAWAD</p>

        <p> <h5>HON. JOHANNAH A. IBRAHIM</h5>
        BARANGAY KAGAWAD</p>

        <p> <h5>HON. OFELIA F. DALUGDUG</h5>
        BARANGAY KAGAWAD</p>

        <p> <h5>HON. CORAZON C. VILLANUEVA</h5>
        BARANGAY KAGAWAD</p>

        <p> <h5>HON. ANGELO KARLO S. CLARIÑO</h5>
        BARANGAY KAGAWAD</p> 

        <p> <h5>HON. JAMES B. ARIOLA</h5>
        BARANGAY KAGAWAD</p> 

        <p> <h5>HON. JOSEPH P. MALABANAN</h5>
        BARANGAY KAGAWAD</p>

        <p> <h5>HON. ADRINE JOSE R. FERRER</h5>
        SK CHAIRMAN</p>

        <p> <h5>MA. ANTONETTE A. VITERO</h5>
        BARANGAY SECRETARY</p>

        <p> <h5>ALEJANDRO A. VITERO</h5>
        BARANGAY TREASURER</p>
 
        </h5>

        <h6>This is to certify that    _________________________________

            Filipino of legal age,  with present address at    __________________

            ______________________________________  is a resident of 

            Barangay 763 Zone 83 District 5 of Manila.

            This certification is issued upon the request of the concerned for

            the purpose of ____________________________________________

            Done this _____________day of  __________________ 20_________ 

            at the Office of the Barangay Chairman, Barangay 763 Zone 83 

            District 5, Manila City 1017 Philippines.  
        </h5>  
    </div>  -->
    
  