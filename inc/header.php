
<?php
require_once('ContactModel.php');
$sendMail=new SendEmail();

?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <title>Abuswani</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/component.css">

  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/vegas.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/gallery.css"> -->

  <!-- Google web font  -->
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>

</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">
  <!-- Navigation section  -->
  <style media="screen">
  .mylogo{
    padding:1px;
  }
  .mylogo1{
    padding:20px;
  }
  #navCustom{
    height: 90px !important;
  }
</style>
<div class="navbar navbar-default navbar-fixed-top" id="navCustom" role="navigation">
  <div class="container">
    <a href="index.php" class="navbar-brand smoothScroll mylogo"> <img src="images/abuswani.png" style="height:80px;" alt=""> </a>
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>

    </div>
    <div class="collapse navbar-collapse mylogo1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll"><span>Home</span></a></li>
        <li><a href="#about" class="smoothScroll"><span>About</span></a></li>
        <li><a href="#portfolio" class="smoothScroll"><span>Gallery</span></a></li>
        <li><a href="#contact" class="smoothScroll"><span>Contact</span></a></li>
        <!-- <li><a href="shop.php" class="smoothScroll"><span>Shop Now</span></a></li> -->
      </ul>

    </div>
  </div>
</div>
