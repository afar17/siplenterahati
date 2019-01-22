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
<link href="<?php echo base_url('assets/guest/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url('assets/guest/'); ?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="<?php echo base_url('assets/admin/ui-lightness/jquery-ui.css');?>" />

<link rel="stylesheet" href="<?php echo base_url('assets/admin/ui-lightness/jquery.ui.theme.css'); ?>">
 <link href="<?php echo base_url('assets/guest/css/jquery.dataTables.min.css')?>" rel="stylesheet">
 <link href="<?php echo base_url('assets/guest/css/galleryimages.css')?>" rel="stylesheet">
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
						    	<li class="<?php if(isset($menuhome)) echo $menuhome;?>"><a href="<?php echo site_url('guest/home'); ?>">Home</a></li>
						    	<li class="<?php if(isset($menugallery)) echo $menugallery;?>"><a href="<?php echo site_url('guest/gallery'); ?>">Galeri</a></li>
						    	
                                 <li class="<?php if(isset($menupendaftaran)) echo $menupendaftaran;?>"><a href="<?php echo site_url('guest/pendaftaran'); ?>">Penerimaan Siswa  Baru (PSB)</a></li>
						    	<li class="<?php if(isset($menuContact)) echo $menuContact;?>"><a href="<?php echo site_url('guest/home/contact'); ?>">Contact</a></li>
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