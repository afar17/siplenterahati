<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Yayasan Lentera Hati</title>
	<link href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/css/font-awesome.min.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/css/datepicker3.css'); ?>" rel="stylesheet">
	
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/sweetalert2.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/toastr.min.css'); ?>">
	<link href="<?php echo base_url('assets/admin/css/styles.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/css/jquery.dataTables.css'); ?>" rel="stylesheet">
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/lightbox.min.css'); ?>">
	<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>"><span><?php echo $this->session->userdata('level'); ?></span> YLH</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<em class="fa fa-envelope"></em>
							<?php $jumlahkomentar = $this->bantuan->jumlahkomentar();
							  		$pesan_masuk = $this->bantuan->pesanMasuk();
							  		
							?>
							<span class="label label-danger" id="pesanMasuk">
											<?php echo $jumlahkomentar;?>
							</span>
						</a>
						<?php if($jumlahkomentar >0 ) { ?>
							
						<ul class="dropdown-menu dropdown-messages" id="listPesanMasuk">
							<?php foreach($pesan_masuk as $row){ ?>
							<li>
								<div class="dropdown-messages-box">
									<div class="message-body">
											<img alt="image" class="img-circle" src="<?php echo base_url('assets/admin/img/avatar.png'); ?>">
										<a href="<?php echo site_url("admin/Message/readMessage/".$row->idkomentarpengunjung); ?>"><strong><?php echo $row->namapengunjung; ?></strong> <?php echo word_limiter($row->isikomentar,20); ?><strong>
										<?php echo $row->emailpengunjung; ?>
										</strong>.</a>
									<br /><small class="text-muted"><?php echo $row->tanggalkomentar; ?></small></div>
								</div>
							</li>
							<li class="divider"></li>
							<?php } ?>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="<?php echo site_url("admin/Message/Allmessage"); ?>">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
						<?php } ?>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-user"></em>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-user"></em>Profil</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-image"></em> Ganti Profil</div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-key"></em> Ganti Password</div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><?php echo ucwords($this->session->userdata('nama')); ?></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Cari Nama Peserta">
			</div>
		</form>
		<ul class="nav menu">
			<li class="<?php if(isset($menuDashboard)) echo $menuDashboard; ?>"><a href="<?php echo site_url('admin/dashboard'); ?>"><em class="fa fa-home">&nbsp;</em> Dashboard</a></li>
			<li class="<?php if(isset($menuPendaftaran)) echo $menuPendaftaran; ?>"><a href="<?php echo site_url('admin/pendaftaran'); ?>"><em class="fa fa-child">&nbsp;</em> Pendaftaran</a></li>
			<li class="<?php if(isset($menuGallery)) echo $menuGallery; ?>"><a href="<?php echo site_url('admin/gallery'); ?>"><em class="fa fa-image">&nbsp;</em> Gallery</a></li>
			<li class="<?php if(isset($menuInformasi)) echo $menuInformasi; ?>"><a href="<?php echo site_url('admin/informasi'); ?>"><em class="fa fa-suitcase">&nbsp;</em> Informasi</a></li>
			
			<li><a href="<?php echo site_url('Login/signout'); ?>"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->