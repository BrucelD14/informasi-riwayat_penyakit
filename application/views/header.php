<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - <?php echo $title ?></title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url() ?>assets/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url() ?>assets/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url() ?>assets/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
		</div>
		<div class="header-right">
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="<?php echo base_url() ?>assets/vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name"><?php echo $this->session->userdata('nama') ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="<?php echo site_url('auth/logout') ?>"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.html">
				<img src="<?php echo base_url() ?>assets/vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="<?php echo base_url() ?>assets/vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
      
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">

				<?php
				
				if($this->session->userdata('login') == 1){
					echo'
					<li>
						<a href="'.site_url('page').'" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
					</li>
          
					<li>
						<a href="'.site_url('page/pasien').'" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user-1"></span><span class="mtext">Pasien</span>
						</a>
					</li>

          <li>
						<a href="'.site_url('page/tambah').'" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-pencil-1"></span><span class="mtext">Tambah Pasien</span>
						</a>
					</li>
					';
				}elseif($this->session->userdata('login') == 2){
					echo'
					<li>
					<a href="'.site_url('page').'" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
					</a>
				</li>
				
				<li>
					<a href="'.site_url('page/pasien').'" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-user-1"></span><span class="mtext">Pasien</span>
					</a>
				</li>

				<li>
						<a href="'.site_url('page/instansi').'" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house1"></span><span class="mtext">Instansi</span>
						</a>
					</li>

					<li>
						<a href="'.site_url('page/dokter').'" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-user-2"></span><span class="mtext">Dokter</span>
						</a>
					</li>
					';
				}

				?>
					

          <li>
						<a href="<?php echo site_url('auth/logout') ?>" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-logout-1"></span><span class="mtext">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">