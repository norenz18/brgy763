<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">


    <title>Brgy. 763 Zone 83 District V. Manila</title>


    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html,
        body {

            font-family: calibri, arial, sans-serif;

        }

        .container {

            position: relative;
            height: 100%;
            border: 1px solid black;

        }

        .container .bg-logo {

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

        .pdf-header h3 {

            text-align: center;
            margin-top: 30px;
            padding: 0;
            box-sizing: border-box;
        }

        .container .bg-logo .titleCert {

            text-align: center;

        }

        .container .bg-logo .officialSection h4 {

            /* font-size: 18px; */
            line-height: 40px;
            word-spacing: 3px;
            text-align: center;
            width: 100%;
            padding: 0 30px 0;


        }

        .footText {


            margin: 100px 50px 0;
            box-sizing: border-box;

        }

        span a {

            display: flex;
            justify-content: center;
            align-items: flex-end;
            text-decoration: none;



        }

        .btn {

            background-color: darkblue;
            outline: none;
            border: 1px solid;
            border-radius: 5px;
            margin: 30px 0 0 350px;
            width: 130px;
            height: 30px;
            cursor: pointer;
            color: #FFFFFF;



        }

        .btn:hover {

            background-color: #3751D7;

        }

        .btn::before {

            content: 'Generate ';
            color: #FFFFFF;
            font-weight: bolder;
            word-spacing: 1px;



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
                    <h1><strong>CERTIFICATE</strong> </h1>

                </div>

                <div class="officialSection">

                    <h4>
                        <b>
                            This is to certify that <strong style="text-transform: uppercase;text-decoration: underline;"> <?php echo $setrows->fullName; ?> </strong> <br>

                            Filipino of legal age, with present address at <br>

                            <strong style="text-transform: uppercase; text-decoration: underline; font-size: 13px;"><?php echo $setrows->address; ?> brgy 763 zone 83 san andres manila </strong> <br> is a resident of Barangay 763 Zone 83 District 5 Manila. <br>

                            This certification is issued upon the request of the concerned for

                            the purpose of <strong style="text-transform: uppercase;text-decoration: underline;"> <?php echo $setrows->purpose; ?> </strong> <br>

                            Done this <strong style="text-transform: uppercase;text-decoration: underline;"> <?php echo $setrows->dateOfcert; ?> </strong>

                            at the Office of the Barangay Chairman, <br> Barangay 763 Zone 83

                            District 5, Manila City 1017 Philippines.

                            </>
                    </h4>

                </div>

                <div class="footText">

                    <h5 style="text-align: left;">
                        <b>NOT VALID WITHOUT A SEAL</b>
                    </h5>

                    <h5 style="text-align: right">
                        <b style="text-transform: uppercase;text-align: center;border-top: 1px solid black;"><?php echo $setrows->punongBrgy; ?></b>&nbsp;<br>
                        <b>PUNONG BARANGAY</b>
                    </h5>

                    <br>
                    <br>
                    <br>

                    <h6 style="text-align: center;color: grey">

                        Address: 2520 Esmeralda St. San Andres Manila 1017 Philippines T.02 77560703

                    </h6>

                </div>


            </div> <!-- end of bg logo -->
        </div>

    <?php }  ?>


    <!-- <span><a href="<?php echo site_url('Certificate/CreateCertPdfs'); ?>/<?php echo $setrows->id; ?>"><button class="btn" data-toggle="tooltip" target="__blank"  title="Print" href=""><i class="fas fa-print"></i></button></a>
        </span>
   -->
</body>

</html>