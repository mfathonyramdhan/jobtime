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
<div class="page-heading">
	<div class="page-title">
		<div class="row">
			<div class="col-12 col-md-6 order-md-1 order-last">
				<h3>Edit Data Akun</h3>
				<!-- <p class="text-subtitle text-muted">
									Tampilan edit data akun admin (nama admin)
								</p> -->
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="index.html">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="data-akun-admin.html">Manajemen Akun - Data Akun</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Edit Data Akun
						</li>
					</ol>
				</nav>
			</div>
		</div>
	</div>

	<section id="basic-vertical-layouts">
		<div class="row match-height">
			<div class="col">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Edit Data Akun</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<form class="form form-vertical" method="POST" action="<?= base_url('admin/update_akun/') ?>" enctype="multipart/form-data">
								<div class="form-body">
									<div class="row">
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(1/3) Informasi Akun</strong>
											</div>
										</div>
										<input type="hidden" name="id_user" value="<?= $akun['id_user'] ?>">
										<input type="hidden" name="id_role" value="<?= $akun['id_role'] ?>">
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="first-name-icon">Nama Lengkap</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input nama lengkap baru" id="first-name-icon" name="nama" value="<?= $akun['nama'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input email baru" id="email-id-icon" name="email" value="<?= $akun['email'] ?>" />
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
														<input type="text" class="form-control" placeholder="Input nomor hp. baru" id="mobile-id-icon" name="no_hp" value="<?= $akun['no_hp'] ?>" />
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
														<input type="date" class="form-control" placeholder="Update tanggal lahir" id="date-id-icon" name="tgl_lahir" value="<?= $akun['tgl_lahir'] ?>" />
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
															<option>Pilih Jenis Kelamin</option>
															<option value="Laki - Laki" <?php if ($akun['jenis_kelamin'] == 'Laki - Laki') {
																							echo 'selected="selected"';
																						} ?>>Laki - Laki</option>
															<option value="Perempuan" <?php if ($akun['jenis_kelamin'] == 'Perempuan') {
																							echo 'selected="selected"';
																						} ?>>Perempuan</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-4">
												<div class="form-group">
													<label for="formFile">Foto</label>
													<input type="hidden" name="image1" value="<?= $akun['foto'] ?>">
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
													<input type="text" class="form-control" placeholder="Input provinsi baru" id="provinsi" name="provinsi" value="<?= $akun['provinsi'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input kota baru" id="kota" name="kota" value="<?= $akun['kota'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-pin-map"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Kecamatan</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input kecamatan baru" id="kecamatan" name="kecamatan" value="<?= $akun['kecamatan'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input desa baru" id="desa" name="desa" value="<?= $akun['desa'] ?>" />
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
													<input type="text" class="form-control" placeholder="Input alamat baru" id="#" name="alamat" value="<?= $akun['alamat'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-signpost-2"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>*)</strong> Silahkan periksa data anda
												sebelum klik Submit!
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