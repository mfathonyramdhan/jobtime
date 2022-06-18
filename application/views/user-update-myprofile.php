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

<nav class="navbar bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="height: 40px;padding: 0px;">
	<ul class="navbar-nav nav-justified w-100">
		<li class="nav-item">
			<a href="<?= base_url('user/favorit/') ?>" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
					<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
					<path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5z" />
				</svg>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('user/index/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-house-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
					<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
				</svg>
			</a>
		</li>
		<li class="nav-item" style="background-color: white;">
			<a href="<?= base_url('user/update_myprofile/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#435ebe" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
				</svg>
			</a>
		</li>

	</ul>
</nav>

<div class="page-heading" style="padding-top: 20px;">
	<section id="basic-vertical-layouts">
		<div class="row" style="margin-right: 0px;">
			<div class="col" style="padding-right: 0px;">
				<div class="card shadow p-3 mb-5 bg-white rounded" style="margin-right: 20px; margin-left: 20px; margin-bottom: 100px;">
					<div class="card-header" style="padding: 0px;">
						<h4 class="card-title text-center">My Profile</h4>
						<div class="col-md-3">

							<!-- Profile Image -->
							<div class="card card-primary card-outline">
								<div class="card-body box-profile shadow p-3 bg-white rounded">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/images/foto_profil/' . $data_user['foto']) ?>" alt="User profile picture">
									</div>

									<h3 class="profile-username text-center" style="margin-top: 10px;"><?= $data_user['nama'] ?></h3>

									<p class="text-muted text-center">
										<?= $data_user['email'] ?> </p>

									<strong><i class="fas fa-map-marker-alt mr-1"></i> No. HP</strong>

									<p class="text-muted">
										<?= $data_user['no_hp'] ?> </p>

									<hr>

									<strong><i class="fas fa-book mr-1"></i> Jenis Kelamin</strong>

									<p class="text-muted">
										<?= $data_user['jenis_kelamin'] ?></p>

									<hr>

									<strong><i class="fas fa-map-marker-alt mr-1"></i>Tgl. Lahir</strong>

									<p class="text-muted">
										<?= $data_user['tgl_lahir'] ?> </p>

									<hr>

									<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

									<p class="text-muted">
										<?= $data_user['alamat'] ?> </p>
									<hr>
									<div class="text-center">

										<a href="<?= base_url('admin/logout') ?>">

											<i class="bi bi-box-arrow-left" style="color: lightcoral;"></i>
											<span style="color: lightcoral;">Logout</span>


										</a>
									</div>






								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->


						</div>
					</div>

					<div class="card-content">
						<hr>

						<h4 class="card-title text-center">Update My Profile</h4>
						<div class="card-body">
							<form class="form form-vertical" method="POST" action="<?= base_url('user/update_profile/') ?>" enctype="multipart/form-data">
								<div class="form-body">
									<div class="row">

										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(1/3) Informasi Akun</strong>
											</div>
										</div>
										<input type="hidden" name="id_user" value="<?= $data_user['id_user'] ?>">
										<input type="hidden" name="id_role" value="<?= $data_user['id_role'] ?>">
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="first-name-icon">Nama Lengkap</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input nama lengkap baru" id="first-name-icon" name="nama" value="<?= $data_user['nama'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-person"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="email-id-icon">Email</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input email baru" id="email-id-icon" name="email" value="<?= $data_user['email'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-envelope"></i>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="password-id-icon">Password</label>
												<div class="position-relative">
													<input type="password" class="form-control" placeholder="Input password baru" id="password-id-icon" name="password"  />
													<div class="form-control-icon">
														<i class="bi bi-lock"></i>
													</div>
												</div>
											</div>
										</div> -->
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(2/3) Informasi Pribadi</strong>
											</div>
										</div>
										<div class="row">
											<div class="col-md-auto">
												<div class="form-group has-icon-left">
													<label for="mobile-id-icon">No. HP</label>
													<div class="position-relative">
														<input type="text" class="form-control" placeholder="Input nomor hp. baru" id="mobile-id-icon" name="no_hp" value="<?= $data_user['no_hp'] ?>" />
														<div class="form-control-icon">
															<i class="bi bi-phone"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-auto">
												<div class="form-group has-icon-left">
													<label for="date-id-icon">Tanggal Lahir</label>
													<div class="position-relative">
														<input type="date" class="form-control" placeholder="Update tanggal lahir" id="date-id-icon" name="tgl_lahir" value="<?= $data_user['tgl_lahir'] ?>" />
														<div class="form-control-icon">
															<i class="bi bi-calendar"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-auto">
												<div class="form-group has-icon-left">
													<label for="#">Jenis Kelamin</label>
													<div class="position-relative">
														<select class="form-select" id="basicSelect" name="jenis_kelamin">


															<!-- <option value="Laki - Laki" <#?php if ($data_user['jenis_kelamin'] == 'Laki - Laki') {
																							echo 'selected="selected"';
																						} ?>>Laki - Laki</option>
															<option value="Perempuan" <#?php if ($data_user['jenis_kelamin'] == 'Perempuan') {
																							echo 'selected="selected"';
																						} ?>>Perempuan</option> -->
															<option value="Laki- Laki" <?php if ($data_user['jenis_kelamin'] == 'Laki - Laki') {
																							echo 'selected="selected"';
																						} ?>>Laki- Laki</option>
															<option value="Perempuan" <?php if ($data_user['jenis_kelamin'] == 'Perempuan') {
																							echo 'selected="selected"';
																						} ?>>Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-auto">
												<div class="form-group">
													<label for="formFile">Ubah Foto Profil</label>
													<input type="hidden" name="image1" value="<?= $data_user['foto'] ?>">
													<input type="file" class="form-control" placeholder="" id="formFile" name="image" id="image" />
												</div>
											</div>
										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(3/3) Informasi Tempat Tinggal</strong>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Provinsi</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input provinsi baru" id="provinsi" name="provinsi" value="<?= $data_user['provinsi'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-map"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Kota</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input kota baru" id="kota" name="kota" value="<?= $data_user['kota'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo"></i>
													</div>
												</div>
											</div>
										</div>
										<!-- <div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Kecamatan</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input kecamatan baru" id="kecamatan" name="kecamatan" value="<?= $data_user['kecamatan'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Desa</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input desa baru" id="desa" name="desa" value="<?= $data_user['desa'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo-alt"></i>
													</div>
												</div>
											</div>
										</div> -->
										<div class="col-md-8">
											<div class="form-group has-icon-left">
												<label for="#">Alamat</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input alamat baru" id="#" name="alamat" value="<?= $data_user['alamat'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-signpost-2"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>*)</strong> Pastikan data diri anda sudah benar sebelum klik update!
											</div>
										</div>
										<div class="col-12 d-flex justify-content-end">

											<button type="submit" class="btn btn-primary me-1 mb-1">
												Update
											</button>
										</div>
									</div>
								</div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


</div>
</div>
<?php $this->load->view('template/js') ?>
<script>
	$(function() {
		$("#datetimepicker1").datetimepicker();
	});
</script>
</body>

</html>