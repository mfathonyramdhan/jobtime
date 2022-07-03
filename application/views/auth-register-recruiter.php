<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>JobTime - Daftar</title>
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
						Daftar sebagai <strong> penyedia <br> loker </strong> di JobTime
					</p>
					<p id="email_result"></p>
					<p id="pass_conf1"></p>
					<p id="pass_conf"></p>
					<form action="<?= base_url('auth/proses_register_recruiter') ?>" method="POST">
						<div class="form-group position-relative has-icon-left">
							<input type="text" class="form-control form-control-xl" name="nama" id="nama" placeholder="Nama" required />
							<div class="form-control-icon">
								<i class="bi bi-person"></i>
							</div>
						</div>

						<div class="form-group position-relative has-icon-left">
							<input type="hidden" name="status_email" id="status_email" value="" required>
							<input type="email" class="form-control form-control-xl" name="email" id="email" placeholder="Email" required />
							<div class="form-control-icon">
								<i class="bi bi-envelope"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left">
							<input type="password" name="password" id="password" autocomplete="off" class="form-control form-control-xl" placeholder="Password" required />
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left">
							<input type="password" name="password2" id="password2" autocomplete="off" class="form-control form-control-xl" placeholder="Konfirmasi Password" required />
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" id="show_pass" />
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Tampilkan Password
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-3">
							Daftar
						</button>
					</form>
					<div class="text-center mt-4 text-lg fs-6">
						<p class="text-gray-600">
							Daftar sebagai pencari loker
							<a href="<?= base_url('auth/register_user') ?>" class="font-bold">Disini</a>.
						</p>
					</div>
					<div class="text-center mt-4 text-lg fs-6">
						<p class="text-gray-600">
							Sudah punya akun ?
							<a href="<?= base_url('auth') ?>" class="font-bold">Login</a>.
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-right"></div>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#show_pass').click(function() {
			if ($(this).is(':checked')) {
				$('#password').attr('type', 'text');
				$('#password2').attr('type', 'text');
			} else {
				$('#password').attr('type', 'password');
				$('#password2').attr('type', 'password');
			}
		});
	});
	$(document).ready(function() {
		$('#email').blur(function() {
			$.ajax({
				type: "POST",
				url: "<?php echo base_url('auth/check_email'); ?>",
				data: $(this).serialize(),
				success: function(data) {
					if (data == "ok") {
						$('#email_result').html('<font color="red">*Email Tidak Tersedia</font>');
						$('#status_email').val('tidak tersedia');
					} else {
						$('#email_result').html('<font color="green" class="ml-2">*email Tersedia</font>');
						$('#status_email').val('tersedia');
					}
				}
			});
		});
	});

	$('#password').on('input', function() {
		var pass = $(this).val();
		if (pass.length < 5) {
			$('#pass_conf1').html('*Password Terlalu Pendek').css('color', 'red');
		} else {
			$('#pass_conf1').html('');
		}
	});

	$('#password, #password2').on('keyup', function() {
		if ($('#password').val() == $('#password2').val()) {
			$('#pass_conf').html('*Password Cocok').css('color', 'green');
		} else {
			$('#pass_conf').html('*Password Tidak Cocok').css('color', 'red');
		}
	});
</script>


</html>