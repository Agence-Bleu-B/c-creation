<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

	<title>admin</title>
	<META NAME="robots" CONTENT="noindex,nofollow">
	<meta name="description" content="admin"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo css_url("lity.min"); ?>">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="<?php echo css_url('admin_style');?>" />
</head>
<body>
	<div id="wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
		    <div class="adjust-nav">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="<?php echo site_url('accueil'); ?>" >
		                <img class="img-responsive" style="max-height: 40px;" src="<?php echo img_url("logos/logo_forme.png"); ?>" />
		            </a>
		        </div>
		      
		         <span class="logout-spn" >
		          <a href="<?php echo site_url('admin?deco'); ?>" style="color:#fff;">Se déconnecter</a>  

		        </span>
		    </div>
		</div>
		       <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
 					<li <?php if ($pagecours == 'index') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin'); ?>" ><i class="fa fa-desktop "></i>Accueil</a>
                    </li>
                    <li <?php if ($pagecours == 'nouveautes') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/nouveautes'); ?>"><i class="fa fa-th-list"></i>Nouveautés</a>
                    </li>
                    <li <?php if ($pagecours == 'produits') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/produits'); ?>"><i class="fa fa-edit"></i>Produits</a>
                    </li>
                    <li <?php if ($pagecours == 'clients') {echo 'class="active-link"';}?>>
                        <a href="<?php echo site_url('admin/clients'); ?>"><i class="fa fa-address-book"></i>Clients</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /. NAV SIDE  -->