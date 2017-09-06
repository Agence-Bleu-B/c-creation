<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title><?php echo $title; ?></title>

	<meta name="description" content="<?php echo $description; ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo css_url('style');?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Condensed:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> 
	<link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<!-- Begin Navbar -->
<div id="nav">
  <div id="menu" class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
          </button>
          <a class="navbar-brand bsbrand hidden-xs" href="<?php echo base_url(); ?>">
            <p class="logotop" ></p> 
          </a>
          <a class="navbar-brand smbrand hidden-sm hidden-md hidden-lg" href="<?php echo base_url(); ?>"><p>
            <img src="<?php echo img_url('logos/logo.png'); ?>" class="img-responsive"/> </p>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="<?php echo base_url('about'); ?>">a propos</a>
            </li>
            <!-- <li><a href="<?php echo base_url('magasin'); ?>">trouver un magasin</a>
            </li> -->
            <!-- <li><a href="<?php //echo base_url('presse'); ?>">revue de presse</a>
            </li> -->
            <li><a href="<?php echo base_url('contact'); ?>">contact/sav</a>
            </li>
            <li><a href="<?php echo base_url(); ?>">catalogue</a>
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
<section class="haut_page">
		<img src="<?php echo img_url('carr/WeChat Image_20170901173042-copie2.png'); ?>" alt="illuminez votre quotidien">
</section>