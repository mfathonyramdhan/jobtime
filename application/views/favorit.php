<body style="padding-top: 20px;">
	<!-- Bottom Navbar -->
	<nav class="navbar bg-primary navbar-expand fixed-bottom d-md-none d-lg-none d-xl-none" style="height: 40px; padding: 0px;">
		<ul class="navbar-nav nav-justified w-100">
			<li class="nav-item" style="background-color: white;">
				<a href="<?= base_url('user/favorit/') ?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#435ebe" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
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
			<li class="nav-item">
				<a href="<?= base_url('user/update_myprofile/') ?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-fill" viewBox="0 0 16 16">
						<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
					</svg>
				</a>
			</li>

		</ul>
	</nav>
	<div class="row" style="margin-right: 20px; margin-left: 20px; padding-bottom: 20px;">
	</div>

	<!-- <div class="card shadow p-3 mb-5 bg-white rounded" style="margin-right: 20px; margin-left: 20px;">
		<div class="card-content">
			<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/logo/logo.png') ?>" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title" style="padding-bottom: 10px;">Front-End Web Developer</h4>
				<p> <i class="bi bi-building"></i>
					PT. Jaya Makmur Techno</p>
				<div class="row">
					<div class="col">
						<p> <i class="bi bi-geo-alt"> </i>Jawa Timur - Jember</p>
					</div>
				</div>

				<h5>Gaji</h5>
				<p><i class="bi bi-currency-dollar"></i>Rp. 5.000.000</p>

				<p class="card-text">
					Dibutuhkan FE Web Dev di perusahaan kami dengan jo...
				</p>

				<small class="text-muted">Deadline Pendaftaran : 30 Hari lagi</small>
				<div class="row" style="padding-top: 10px;">
					<div class="col text-end">
						<a href="<?= base_url('user/loker_detail') ?>" class="btn btn-primary">Lihat Detail</a>
					</div>

				</div>

			</div>
		</div>
	</div> -->

	<div class="row" style="margin-right: 20px; margin-left: 20px; padding-bottom: 20px;">
		<a href="<?= base_url('user/form_create_loker_user/') ?>" class="btn btn-primary">+ Buat Postingan Loker</a>
	</div>

	<div class=" row" style="margin: 0px 0px 30px 0px;">

		<?php if (count($loker_user) > 0) { ?>
			<?php foreach ($loker_user as $d) { ?>
				<div class="col" style="padding: 0px;">


					<div class="card shadow p-3 mb-4 bg-white rounded" style="margin-right: 20px; margin-left: 20px;">

						<div class="card-content">
							<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/logo_perusahaan/' . $d['logo']) ?>" alt="Card image cap">
							<div class="card-body">

								<div class="mb-2">


									<?php if ($d['id_jobs_status'] == 1) { ?>
										<h6>Status postingan :<span class="badge bg-warning">
											Admin sedang mereview loker anda
										</span></h6>
									<?php } elseif ($d['id_jobs_status'] == 2) { ?>
										<h6>Status postingan :<span class="badge bg-success">
											Terkonfirmasi
										</span></h6>
									<?php } elseif ($d['id_jobs_status'] == 3) { ?>
										<h6>Status postingan :<span class="badge bg-danger">
											Kadaluarsa
										</span></h6><?php } elseif ($d['id_jobs_status'] == 4) { ?>
										<h6>Status postingan :<span class="badge bg-danger" style="margin-left: 10px;">
												Ditolak
											</span></h6>
									<?php } ?>
								</div>
								<h4 class="card-title" style="padding-bottom: 10px;"><?= $d['judul'] ?></h4>
								<p> <i class="bi bi-building"></i>
									<?= $d['perusahaan_nama'] ?></p>
								<div class="row">
									<div class="col">
										<p> <i class="bi bi-geo-alt"> </i><?= $d['perusahaan_lokasi'] ?></p>
									</div>
								</div>
								<h5>Gaji</h5>
								<p><i class="bi bi-currency-dollar"></i><?= "± Rp " . number_format($d['gaji'], 0, ',', '.'); ?></p>
								<p class="card-text">
									<?php
									$deskripsi    = $d['deskripsi'];
									$show    = substr($deskripsi, 0, 100);
									echo $show;
									echo "...";
									?>
								</p>
								<?php
								$now = strtotime(date('Y-m-d'));
								$dl = strtotime($d['deadline']);
								$interval = abs($dl - $now);
								$years = floor($interval / (365 * 60 * 60 * 24));
								$months = floor(($interval - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
								$days = floor(($interval - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
								?>
								<small class="text-muted">Deadline Pendaftaran : <?= $days ?> Hari lagi</small>


								<div class="row" style="padding-top: 10px;">

									<div class="col text-end">
										<a href="<?= base_url('user/loker_detail/' . $d['id_jobs']) ?>" class="btn btn-primary">Lihat Detail</a>
									</div>
								</div>

								<div class="row" style="padding-top: 10px; margin-right:0px;">
									<h6>Opsi :</h6>
									<div class="row">
										<div class="col text-end">
											<a href="<?= base_url('user/hapus_loker/' . $d['id_jobs']) ?>" class="btn btn-outline-danger">Hapus</a>
										</div>
										<?php if ($d['id_jobs_status'] == 4) { ?>
											<div class="col text-end">
												<a href="<?= base_url('user/edit_loker/' . $d['id_jobs']) ?>" class="btn btn-info">Edit</a>
											</div>
										<?php } ?>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<?php } ?>
		<?php } else { ?>
			<div class="text-center my-auto" style="margin: 20px;">
				<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/samples/error-404.png') ?>" alt="Card " />
				<h3>Masih belum ada loker <br> yang anda buat.</h3>
			</div>
		<?php } ?>
	</div>


</body>

</html>