<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

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
<body class="login-page">
	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="<?php echo base_url() ?>assets/vendors/images/login-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">REGISTER</h2>
						</div>
							<div class="select-role" id="pills-tab" role="tablist">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn">
										<input type="radio" name="options" id="user pills-home-tab"data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" checked>
										<div class="icon"><img src="<?php echo base_url() ?>assets/vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>Register</span>
										Instansi
									</label>
									<label class="btn">
										<input type="radio" name="options" id="admin pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" >
										<div class="icon"><img src="<?php echo base_url() ?>assets/vendors/images/person.svg" class="svg" alt=""></div>
										<span>Register</span>
										Dokter
									</label>
								</div>
							</div>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									<form action="<?php echo base_url() ?>auth/daftar_instansi" method="post">
                              <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="kode" placeholder="Kode Instansi">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                              <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama Instansi">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                              <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="alamat" placeholder="Alamat Instansi">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
										<div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
										<div class="input-group custom">
											<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="input-group mb-0">
													<button type="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
												</div>
												<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
												<div class="input-group mb-0">
													<a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo site_url('auth/login') ?>">I Have an Account</a>
												</div>
											</div>
										</div>
									</form>
								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<form action="<?php echo base_url() ?>auth/daftar_dokter" method="post">
										<div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="nik" placeholder="NIK">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                    <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="nama" placeholder="Nama">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                    <div class="input-group custom">
                      <select class="form-control form-control-lg custom-select col-12" name="instansi" class="text-muted">
                        <option selected="">Asal Instansi</option>
                        <?php
                           foreach($hasil as $data){
                        ?>
                        <option value="<?php echo htmlentities($data->nama_instansi, ENT_QUOTES, 'UTF-8');?>"><?php echo htmlentities($data->nama_instansi, ENT_QUOTES, 'UTF-8');?></option>
                        <?php
                           }
                        ?>
                      </select>
										</div>
                    <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="alamat" placeholder="Alamat Dokter">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                    <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="spesialis" placeholder="Jenis Spesialis">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
                    <div class="input-group custom">
											<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
											</div>
										</div>
										<div class="input-group custom">
											<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
											<div class="input-group-append custom">
												<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="input-group mb-0">
													<button type="submit" class="btn btn-primary btn-lg btn-block" >Sign In</button>
												</div>
												<div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
												<div class="input-group mb-0">
													<a class="btn btn-outline-primary btn-lg btn-block" href="<?php echo site_url('auth/login') ?>">I Have an Account</a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="<?php echo base_url() ?>assets/vendors/scripts/core.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/script.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/process.js"></script>
	<script src="<?php echo base_url() ?>assets/vendors/scripts/layout-settings.js"></script>
</body>
</html>