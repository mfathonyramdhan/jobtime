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
				<h3>Edit Data Loker</h3>
				<!-- <p class="text-subtitle text-muted">
									Tampilan edit data akun admin (nama admin)
								</p> -->
			</div>
			<div class="col-12 col-md-6 order-md-2 order-first">
				<nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?= base_url('admin') ?>">Dashboard</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?= base_url('admin/daftar_loker') ?>">Manajemen Akun - Data Loker</a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">
							Edit Data Loker
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
						<h4 class="card-title">Edit Data Loker</h4>
					</div>
					<div class="card-content">
						<div class="card-body">
							<form class="form form-vertical" method="POST" action="<?= base_url('admin/update_loker/') ?>" enctype="multipart/form-data">
								<div class="form-body">
									<div class="row">
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(1/3) Informasi Perusahaan</strong>
											</div>
										</div>
										<input type="hidden" name="id_user" value="<?= $loker['id_user'] ?>">
										<input type="hidden" name="id_jobs" value="<?= $loker['id_jobs'] ?>">
										<input type="hidden" name="id_jobs_status" value="<?= $loker['id_jobs_status'] ?>">

										<div class="col">
											<div class="form-group">
												<label for="formFile">Logo Perusahaan</label>
												<input type="hidden" name="image1" value="<?= $loker['logo'] ?>">
												<input type="file" class="form-control" placeholder="" id="formFile" name="image" id="image" />
											</div>
										</div>

										<div class="col">
											<div class="form-group has-icon-left">
												<label for="first-name-icon">Nama Perusahaan</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input Nama Perusahaan Baru" id="first-name-icon" name="perusahaan_nama" value="<?= $loker['perusahaan_nama'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-building"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="col">
											<div class="form-group has-icon-left">
												<label for="first-name-icon">Lokasi Perusahaan</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Input Nama Lokasi Perusahaan" id="first-name-icon" name="perusahaan_lokasi" value="<?= $loker['perusahaan_lokasi'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-geo-alt"></i>
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
												<strong>(2/3) Informasi Lowongan Pekerjaan</strong>
											</div>
										</div>
										<div class="row">
											<div class="row">
												<div class="col">
													<div class="form-group has-icon-left">
														<label for="first-name-icon">Judul Loker</label>
														<div class="position-relative">
															<input type="text" class="form-control" placeholder="Input Judul Lowongan Pekerjaan Baru" id="first-name-icon" name="judul" value="<?= $loker['judul'] ?>" />
															<div class="form-control-icon">
																<i class="bi bi-type"></i>
															</div>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="form-group has-icon-left">
														<label for="mobile-id-icon">Gaji</label>
														<div class="position-relative">
															<input type="number" class="form-control" placeholder="ex : 5000000" id="mobile-id-icon" name="gaji" value="<?= $loker['gaji'] ?>" />
															<div class="form-control-icon">
																Rp.
															</div>
														</div>
													</div>
												</div>
												<div class="col">
													<div class="form-group has-icon-left">
														<label for="date-id-icon">Deadline Pendaftaran Loker</label>
														<div class="position-relative">
															<?php $deadline = strtotime($loker['deadline']) ?>
															<input type="datetime-local" class="form-control" placeholder="Input tanggal deadline loker baru" id="date-id-icon" name="deadline" value="<?= date('Y-m-d\TH:i:s', $deadline) ?>" />
															<div class="form-control-icon">
																<i class="bi bi-calendar"></i>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group has-icon-left">
													<label for="first-name-icon">Deskripsi Loker</label>
													<div class="position-relative">
														<textarea type="text" class="form-control" placeholder="Input Deskripsi Loker" id="first-name-icon" name="deskripsi" rows="5"><?= $loker['deskripsi'] ?></textarea>
														<div class="form-control-icon">
															<i class="bi bi-justify-left"></i>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="form-group has-icon-left">
													<label for="first-name-icon">Syarat Loker</label>
													<div class="position-relative">

														<textarea type="text" class="form-control" placeholder="Input Syarat Loker Baru" id="first-name-icon" name="syarat" rows="5"><?= $loker['syarat'] ?></textarea>
														<div class="form-control-icon">
															<i class="bi bi-list-ol"></i>
														</div>
													</div>
												</div>
											</div>





										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>(3/3) Status Loker & Direct LInk</strong>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Status Jobs</label>
												<div class="position-relative">
													<select class="form-select" id="basicSelect" name="id_jobs_status">
														<!-- <#?php if ($loker['id_jobs_status'] == 1) { ?> -->
														<option>Pilih Status Loker</option>
														<option value="1" <?php if ($loker['id_jobs_status'] == 1) {
																				echo 'selected="selected"';
																			} ?>>Belum direview</option>
														<option value="2" <?php if ($loker['id_jobs_status'] == 2) {
																				echo 'selected="selected"';
																			} ?>>Terkonfirmasi</option>
														<option value="3" <?php if ($loker['id_jobs_status'] == 3) {
																				echo 'selected="selected"';
																			} ?>>Kadaluarsa</option>
														<option value="4" <?php if ($loker['id_jobs_status'] == 3) {
																				echo 'selected="selected"';
																			} ?>>Ditolak</option>

													</select>
												</div>
											</div>
										</div>
										<div class="col-md-auto">
											<div class="form-group has-icon-left">
												<label for="#">Link</label>
												<div class="position-relative">
													<input type="text" class="form-control" placeholder="Ex : https://wa.me/+628xx-xxxx-xxxx" id="link" name="link" value="<?= $loker['link'] ?>" />
													<div class="form-control-icon">
														<i class="bi bi-link-45deg"></i>
													</div>
												</div>
											</div>
										</div>
										<div class="divider divider-left">
											<div class="divider-text">
												<strong>*)</strong> Silahkan periksa data
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