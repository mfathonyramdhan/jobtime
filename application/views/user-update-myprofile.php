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

<nav class="navbar bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="height: 40px;">
	<ul class="navbar-nav nav-justified w-100">
		<li class="nav-item">
			<a href="<?= base_url('admin/favorit/') ?>" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-star-fill" viewBox="0 0 16 16">
					<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
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
		<li class="nav-item">
			<a href="<?= base_url('admin/update_myprofile/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
				</svg>
			</a>
		</li>

	</ul>
</nav>

<div class="page-heading" style="padding-top: 20px;">
	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="col">
				<div class="card shadow p-3 mb-5 bg-white rounded" style="margin-right: 20px; margin-left: 20px; margin-bottom: 100px;">
					<div class="card-header">
						<h4 class="card-title text-center">My Profile</h4>
						<div class="col-md-3">

							<!-- Profile Image -->
							<div class="card card-primary card-outline">
								<div class="card-body box-profile shadow p-3 mb-5 bg-white rounded">
									<div class="text-center">
										<img class="profile-user-img img-fluid img-circle" src="<?php echo base_url('assets/images/foto_profil/2.jpg') ?>" alt="User profile picture">
									</div>

									<h3 class="profile-username text-center" style="margin-top: 10px;">Toni</h3>

									<p class="text-muted text-center">
										mfathonyramdhan@gmail.com </p>

									<strong><i class="fas fa-map-marker-alt mr-1"></i> No. HP</strong>

									<p class="text-muted">
										0895337337339 </p>

									<hr>

									<strong><i class="fas fa-book mr-1"></i> Jenis Kelamin</strong>

									<p class="text-muted">
										Laki - Laki</p>

									<hr>

									<strong><i class="fas fa-map-marker-alt mr-1"></i> Tempat / Tgl. Lahir</strong>

									<p class="text-muted">
										Jember, 2000-02-22 </p>

									<hr>

									<strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

									<p class="text-muted">
										Jl. Semeru Situbondo </p>

									<hr>





								</div>
								<!-- /.card-body -->
							</div>
							<!-- /.card -->


						</div>
					</div>

					<div class="card-content">
						<h4 class="card-title text-center">Update My Profile</h4>
						<div class="card-body">
							<form class="form form-vertical" method="POST" action="<?= base_url('admin/update_myprofile/') ?>" enctype="multipart/form-data">
								<div class="form-body">
									<div class="row">

										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(1/3) Informasi Akun</strong>
											</div>
										</div>
										<!-- <input type="hidden" name="id_user" value="<?= $akun['id_user'] ?>">
										<input type="hidden" name="id_role" value="<?= $akun['id_role'] ?>"> -->
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="first-name-icon">Nama Lengkap</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input nama lengkap baru" id="first-name-icon" name="nama" value="<#?= $akun['nama'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input email baru" id="email-id-icon" name="email" value="<#?= $akun['email'] ?>" />
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
														<input type="text" class="form-control" placeholder="Input nomor hp. baru" id="mobile-id-icon" name="no_hp" value="<#?= $akun['no_hp'] ?>" />
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
														<input type="date" class="form-control" placeholder="Update tanggal lahir" id="date-id-icon" name="tgl_lahir" value="<#?= $akun['tgl_lahir'] ?>" />
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


															<!-- <option value="Laki - Laki" <#?php if ($akun['jenis_kelamin'] == 'Laki - Laki') {
																							echo 'selected="selected"';
																						} ?>>Laki - Laki</option>
															<option value="Perempuan" <#?php if ($akun['jenis_kelamin'] == 'Perempuan') {
																							echo 'selected="selected"';
																						} ?>>Perempuan</option> -->
															<option value="">Laki- Laki</option>
															<option value="">Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-auto">
												<div class="form-group">
													<label for="formFile">Foto</label>
													<input type="hidden" name="image1" value="<#?= $akun['foto'] ?>">
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
													<input type="text" class="form-control" placeholder="Input provinsi baru" id="provinsi" name="provinsi" value="<#?= $akun['provinsi'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input kota baru" id="kota" name="kota" value="<#?= $akun['kota'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Kecamatan</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input kecamatan baru" id="kecamatan" name="kecamatan" value="<#?= $akun['kecamatan'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input desa baru" id="desa" name="desa" value="<#?= $akun['desa'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo-alt"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-8">
											<div class="form-group has-icon-left">
												<label for="#">Alamat</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input alamat baru" id="#" name="alamat" value="<#?= $akun['alamat'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-signpost-2"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>*)</strong> Pastikan data diri anda sudah benar!
											</div>
										</div>
										<div class="col-12 d-flex justify-content-end">
											<button type="reset" class="btn btn-light-secondary me-1 mb-1">
												Reset
											</button>
											<button type="submit" class="btn btn-primary me-1 mb-1">
												Submit
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

<footer>
	<div class="footer clearfix mb-0 text-muted">
		<div class="float-start">
			<p>2022 &copy; Copyright - JobTime</p>
		</div>
	</div>
</footer>
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