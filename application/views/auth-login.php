<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>JobTime - Login</title>

	<link rel="icon" type="image/x-icon" href="<?= base_url('assets/images/') ?>logo/favicon.ico" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/') ?>bootstrap-icons/bootstrap-icons.css" />
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>app.css" />
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>pages/auth.css" />
	<link rel="stylesheet" href="<?= base_url('assets/vendors/sweetalert/dist/sweetalert2.min.css') ?>">

	<script type="text/javascript" src="<?= base_url('assets/vendors/sweetalert/dist/sweetalert2.all.min.js') ?>"></script>
</head>

<body>
	<?php
	$pesan = $this->session->flashdata('pesan');
	if (!empty($pesan)) {
		if ($pesan['status_pesan'] == true && !empty($pesan)) {
			echo '
	<script>
		Swal.fire({
			title: "Berhasil",
			text: "' . $pesan['isi_pesan'] . '",
			type: "success",
			confirmButtonText: "Close"
		});
	</script>';
		} else if ($pesan['status_pesan'] == false && !empty($pesan)) {
			echo '
	<script>
		Swal.fire({
			title: "Gagal",
			text: "' . $pesan['isi_pesan'] . '",
			type: "error",
			confirmButtonText: "Close"
		});
	</script>';
		}
	}
	?>
	<div id="auth">
		<div class="row h-100">
			<div class="col-lg-5 col-12">
				<div id="auth-left">
					<div class="auth-logo">
						<a href="index.html"><img src="<?= base_url('assets/images/') ?>logo/logo.png" alt="Logo" /></a>
					</div>

					<p class="auth-subtitle mb-4">
						Login dengan data yang telah anda inputkan saat mendaftar
					</p>

					<form action="<?= base_url('auth/proses_login') ?>" method="POST">
						<div class="form-group position-relative has-icon-left">
							<input type="text" class="form-control form-control-xl" name="email" placeholder="Email" />
							<div class="form-control-icon">
								<i class="bi bi-envelope"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left">
							<input type="password" class="form-control form-control-xl" name="password" placeholder="Password" />
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault" />
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Biarkan saya tetap masuk
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-4">
							Login
						</button>
					</form>
					<div class="text-center mt-4 text-lg fs-6">
						<p class="text-gray-600">
							Belum punya akun ?
							<a href="<?= base_url('auth/register_user') ?>" class="font-bold">Daftar</a>
						</p>
						<!-- <p>
								<a class="font-bold" href="auth-forgot-password.html"
                  >Lupa password ?</a
                >
							</p> -->
					</div>
				</div>
			</div>
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-right"></div>
			</div>
		</div>
	</div>
</body>

</html>