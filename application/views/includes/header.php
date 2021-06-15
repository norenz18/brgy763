<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="<?php echo site_url('img/brgylogo1.png'); ?>" type="gif/image" sizes="32x32">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php echo site_url('bootstrap/css/bootstrap.min.css') ?> ">
  <link rel="stylesheet" type="text/css" media="screen" href="<?php site_url('bootstrap/css/jquery-ui.css') ?>" />
  <link rel="stylesheet" href="<?php echo site_url('fontawesome/css/all.css') ?>">
  <link rel="stylesheet" href="<?php echo site_url('asset/bootstrap-table.min.css') ?> ">

  <!-- datepicker -->
  <link rel="stylesheet" href="<?php echo site_url('jquery/jquery-ui.min.css') ?> ">
  <script src="<?php echo site_url('jquery/external/jquery/jquery.js') ?>"></script>
  <script src="<?php echo site_url('jquery/jquery-ui.min.js') ?>"></script>


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

    * {

      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: nexa, poppins, lucida;
      /* font-family: lucida; */
      font-weight: 400;


    }

    html,
    body {

      background: #f2f2f2;
      /* background-image: url("./img/logomanila2.png"); */
      height: 80vh;
      position: relative;

    }

    #log_out {

      color: #ffffff;
      font-size: 22px;
      font-weight: bolder;
      width: 100%;

    }

    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }

    input {

      text-transform: capitalize;
    }

    #textArea {

      resize: none;
    }

    .dropdown-toggle {
      display: none;
    }

    .page-list {
      opacity: 0;
    }

    .pagination {
      background-color: grey;
    }

    /* NAV FOR HEADER */
    .nav {

      background-color: #123A4A;
      height: 10vh;

    }

    .nav ul {

      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      margin: 0 50px;
      list-style: none;

    }

    .nav ul li a {

      font-family: montserrat;
      color: #efefef;
      text-decoration: none;
      font-size: 22px;
      transition: .2s ease;

    }

    /* .nav ul li:nth-child(3) a:hover {

      color: #ff0000;

    } */

    #main-container {

      padding: 0;
      height: auto;

    }

    /* SIDEBAR NAVIGATION */
    .nav-main {

      height: auto;
      width: 200px;
      background-color: #e3f2fd;
      box-shadow: 0 0 8px grey;

    }

    .nav-main ul {

      display: flex;
      flex-direction: column;
      justify-content: space-evenly;
      align-items: flex-start;
      height: 100vh;
      position: relative;

    }

    .nav-main ul li {

      list-style: none;

    }

    .nav-main ul li:nth-child(1) {

      align-self: center;
    }

    .nav-main ul li a {

      font-family: nexa, lucida;
      color: #7c7777;
      /* font-weight: 900; */
      font-size: 18px;
      text-decoration: none;
      margin: 0 0 0 10px;
      transition: all .1s ease;

    }

    .nav-main ul li a:hover {

      padding-left: 2px;
      border-left: 8px solid #123A4A;
      color: #000000;

    }

    #brgylogo {

      height: auto;
      width: 150px;
      object-fit: cover;

    }

    #editContainer {

      height: 100vh;

    }

    #editPostContainer {

      height: 100vh;

    }

    #official-Info {

      height: 100vh;
    }

    #resident-info {

      height: 100vh;
      padding-bottom: 20px;
    }

    label {

      font-weight: 700;
    }

    /* FOR SCROLLING TABLE IN RESIDENT VIEW */
    /* 
    .table-wrapper-scroll-y {
      display: block;
      border: 1px solid lightgrey;
    } */

    #table-wrapper {

      position: relative;
      width: auto;
      /* height: 500px;
      overflow: auto; */


    }

    #blotter-section {

      width: 80%;

    }

    #thead {

      border: 1px solid grey;

    }

    #thead tr th {

      position: sticky;
      top: 0;
      background-color: #123a4a;
      color: #fff;
      width: auto;
    }

    #officialImage {

      height: 100px;
      width: 100px;
      object-fit: contain;

    }

    .profileImg {

      height: 190px;
      width: 190px;

    }

    #tbody {

      text-transform: capitalize;
    }

    #profileImgs {

      height: 100px;
      width: 100px;
      object-fit: contain;
    }

    #tbody tr #fml {

      width: 280px;

    }

    #tbody tr #adrs {

      width: 350px;
      font-size: 14px;
    }

    .footer {

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

    .main-content {

      height: 100vh;

    }

    .main-content #div-content {

      display: flex;
      justify-content: center;
      align-items: flex-start;
      padding: 50px 0 0 0;

    }

    .main-content #div-content .resPic img {

      height: 300px;
      width: 300px;
      border-radius: 50%;
      border: 3px solid #123A4A;
      margin-right: 50px;

    }

    .main-content #div-content #resProfile {


      margin-left: 50px;
      border: 2px solid #123a4a;
      padding: 50px 20px 50px;
      width: 100%;
      text-transform: capitalize;

      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: flex-start;
      position: relative;

    }

    .main-content #div-content #resProfile #resProfileImg {

      position: absolute;
      right: 0;
      top: 50%;
      transform: translate(-20%, -50%);
      width: 300px;
      height: auto;

    }

    .main-content #div-content #resProfile #officialProfileImg {

      position: absolute;
      right: 0;
      top: 50%;
      transform: translate(-50%, -50%);
      width: 150px;
      height: auto;
      padding: 10px;


    }

    .main-content #div-content #resProfile li {

      list-style: none;
      padding: 0 15px 0 0;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: flex-start;
      position: relative;
      width: 100%;

    }

    .main-content #div-content #resProfile li span {

      /* font-weight: 700; */

      position: absolute;
      padding-left: 200px;
      color: blue;
      text-align: right;
      font-size: 20px;
    }


    #incidentTab {

      height: auto;
      width: 100%;
      padding-left: 0;
      padding-right: 0;
    }

    #incidentTab #searchbar {

      background: transparent;
      border: none;
      border-bottom: 1px solid #343A40;
      margin-left: 10px;
      outline: none;
    }

    #incidentTab #table-posts #tbody tr #post-title {

      width: 500px;
      margin: 0;

    }

    #incidentTab #table-posts #tbody tr #post-body {

      width: 300px;
      margin: 0;


    }

    #incidentTab #table-posts #tbody tr td {

      width: 200px;
      text-align: center;
    }

    #incident_section {

      margin: 20px 50px 280px;
      height: auto;

    }

    #incident_section #titlehead {

      background-color: black;
      color: #fff;
      padding: 10px 0 10px 15px;
      letter-spacing: 3px;
    }

    #incident_section #postdate,
    #postbody {

      color: black;
      resize: none;
      padding: 5px;
      line-height: 35px;

      text-transform: initial;
      font-weight: normal;


    }

    /* DASHBOARD */
    .dataCount {


      margin: 20px 0 20px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      align-content: flex-start;

    }

    .dataCount .count {


      width: 250px;
      height: 120px;
      border: 3px solid #123a4a;
      border-radius: 5px;
      background-color: rgba(255, 255, 255, 0.425);
      position: relative;
      margin-top: 20px;



    }

    .dataCount .count:nth-child(2) {

      border-color: #123a4a;
      margin-top: 20px;

    }

    .dataCount .count:nth-child(3) {

      border-color: #123a4a;
      margin-top: 20px;

    }

    .dataCount .count:nth-child(4) {

      border-color: #123a4a;
      margin-top: 20px;

    }

    .dataCount .count:nth-child(5) {

      border-color: #123a4a;
      margin-top: 20px;

    }

    .dataCount .count:nth-child(6) {

      border-color: #123a4a;
      margin-top: 20px;

    }



    .dataCount .count h3 {

      position: absolute;
      text-align: center;
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

    .dataCount .count h3 span {

      color: #fb4f28;
      font-weight: 900;

    }

    .dataCount .count h3 a {

      color: black;
      font-weight: 700;

    }
  </style>

  <title>Brgy. 763, Zone 83</title>
</head>

<body>