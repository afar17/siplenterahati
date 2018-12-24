<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>LENTERA HATI</title>
<link href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url('assetsadmin/ui-lightness/jquery-ui.css');?>" />

<link rel="stylesheet" href="<?php echo base_url('assetsadmin/ui-lightness/jquery.ui.theme.css'); ?>">
 <link href="<?php echo base_url('assets/css/jquery.dataTables.min.css')?>" rel="stylesheet">
<style>
	a:hover{text-decoration: none;}
</style>
</head>
<body>
<div class="header-bg">
	<div class="wrap"> 
		<div class="total-box">
				<div class="total">
					<div class="header_top">
				     	<div class="menu">
				     		<ul>
						    	<li class="<?php if(isset($menuhome)) echo $menuhome;?>"><a href="<?php echo site_url('home'); ?>">Home</a></li>
						    	<li class="<?php if(isset($menugallery)) echo $menugallery;?>"><a href="<?php echo site_url('gallery'); ?>">Galeri</a></li>
						    	<li ><a href="<?php echo site_url('home/informasi'); ?>">Staff</a>
								</li>
                                 <li class="<?php if(isset($menupendaftaran)) echo $menupendaftaran;?>"><a href="<?php echo site_url('pendaftaran'); ?>">Penerimaan Siswa  Baru (PSB)</a></li>
						    	<li class="<?php if(isset($menucontact)) echo $menucontact;?>"><a href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
						    	<div class="clear"></div>
			     			</ul>
				     	</div>
				     	
		     			<div class="clear"></div>
		     	</div>
			     <div class="header-bottom">
					 <div class="logo">
						
					 </div>
					<div class="clear"></div> 
				</div>
			</div>	
		</div>
	 </div>
</div>
	<div class="banner-box">
		<div class="wrap">