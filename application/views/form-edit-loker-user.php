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
<nav class="navbar bg-primary navbar-expand fixed-bottom " style="height: 40px; padding: 0px;">
	<ul class="navbar-nav nav-justified w-100">
		<li class="nav-item">
			<a href="<?= base_url('user/favorit/') ?>" class="nav-link" style="background-color: white;">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#435ebe" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
					<path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
					<path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5z" />
				</svg>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('user/index/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-house-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
					<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
				</svg>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('user/update_myprofile/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
				</svg>
			</a>
		</li>

	</ul>
</nav>

<div class="card">
	<div class="page-heading">
		<div class="card-header bg-primary">
			<h4 class="card-title" style="color: white;">Buat Postingan Loker</h4>
		</div>
		<section id="basic-vertical-layouts">
			<div class="card-content">
				<div class="card-body">
					<form class="form form-vertical" method="POST" action="<?= base_url('user/update_loker/') ?>" enctype="multipart/form-data">
						<div class="form-body">

							<div class="divider divider-left">
								<div class="divider-text">
									<strong>(1/3) Informasi Perusahaan</strong>
								</div>
							</div>

							<input type="hidden" name="id_user" value="<?= $data_user['id_user'] ?>">


							<div class="row">
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
							<div class="row">
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
													<input type="password" class="form-control" placeholder="Input password " id="password-id-icon" name="password"  />
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
								<div class="form-group">
									<label for="formFile">Gambar / Poster Loker</label>
									<input type="hidden" name="image1" value="<?= $loker['logo'] ?>">
									<input type="file" class="form-control" placeholder="" id="formFile" name="image" id="image" />
								</div>
								<div class="row">
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
								<div class="row">
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
								<div class="row">
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






							<div class="divider divider-left">
								<div class="divider-text">
									<strong>(3/3) Direct LInk</strong>
								</div>
							</div>
							<div class="row">

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
								<div class="divider">
									<strong>*)</strong> Periksa kembali data
									sebelum Submit!
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

					</form>
				</div>
			</div>
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