<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Brgy. 763 Zone 83 District V. Manila</title>
  
  
    <style>

        *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        }
        html,body{

            font-family: calibri, arial, sans-serif;

        }
        .container{

            position: relative;
            height: 100%;
            border: 2px solid black;
        
        }
        .container .bg-logo{
         
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
        }
        .pdf-header h3{

            text-align: center;
            margin-top: 30px;
            padding: 0;
            box-sizing: border-box;
        }
        .container .bg-logo .titleCert{

            text-align: center;

        }
        .container .bg-logo .officialSection h6{

            font-size: 11px;
            line-height: 40px;
            word-spacing: 3px;
            text-align: center;
            width: 100%;
          

        }
        .footText{

        
            margin: 120px 50px 0;
            box-sizing: border-box;
            
        }
      

    </style>
</head>
<body>

    <?php { ?>

    
    <div class="container" id="pdf">
                  
            <div class="bg-logo">
     
                <div class="pdf-header">
                     
                    <h3>
                        <img src="<?php echo site_url('img/brgylogo1.png'); ?>" style="float: left;width:110x;height:110px;margin-left:30px;" id="brgylogo" alt="brgy. 763 logo">
                        <img src="<?php echo site_url('img/newblogo.png'); ?>" style="float: right;width:100px;height:100px;margin-right:30px;" id="blogo" alt="blogo">
                        <b>
                        REPUBLIC OF THE PHILIPPINES <br>
                        CITY OF MANILA <br>
                        BARANGAY 763 ZONE 83 <br>
                        DISTRICT V   
                        </b>
                     
                    </h3>
    
                </div>  

                <div class="titleCert">

                        <h4 style="color: red"><b>OFFICE OF THE BARANGAY CHAIRMAN</b></h4>
                        <h1><strong>CERTIFICATE OF INDIGENCY</strong> </h1>

                </div>

                <div class="officialSection">
<!-- 
                    <h6 style="text-align: left;">
                        BARANGAY OFFICIALS <br>
            
                        PUNONG BARANGAY <br>
                    
                        BARANGAY KAGAWAD <br>
                    
                        BARANGAY KAGAWAD <br>
                    
                        BARANGAY KAGAWAD <br>
                    
                        BARANGAY KAGAWAD <br>
                 
                        BARANGAY KAGAWAD <br>
                    
                        BARANGAY KAGAWAD <br>
                
                        BARANGAY KAGAWAD <br>

                        SK CHAIRMAN <br>

                        BARANGAY SECRETARY <br>

                        BARANGAY TREASURER 
                    </h6> -->     

                    <h6>

                
                        <b>
                            This     is   to    certify    that   <strong style="text-transform: uppercase;text-decoration: underline;"> </strong> <br>

                            Filipino of legal age,  with present address at

                            <strong style="text-transform: uppercase;text-decoration: underline;"> San Andres Manila 1017</strong> <br> is a resident and is an 

                            INDIGENT of Barangay 763 Zone 83 District 5 Manila. <br>

                            This certification is issued upon the request of the concerned for 

                            the purpose of <br> ____________________________________________ <br>

                            Done this _____________day of  __________________ 20_________ <br>

                            at the Office of the Barangay Chairman, Barangay 763 Zone 83 

                            District 5, Manila City 1017 Philippines.  

                        <b/>
                    </h6>

                </div>
        
                   <div class="footText">

                        <h6 style="text-align: left;">
                            <b>NOT VALID WITHOUT A SEAL</b>             
                        </h6>
                        
                        <h6  style="text-align: right">
                        <b>EDISON "SONNY" M. JIMENO </b><br>
                         <b>PUNONG BARANGAY</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
            
                            
                        </h6>
                    </div>
              
                    
            </div> <!-- end of bg logo -->

          
    </div>

    <?php }  ?>



</body>
</html>


  