<body style="padding-top: 20px;  margin-bottom: 70px;"">
	<!-- Bottom Navbar -->
	<nav class=" navbar bg-primary navbar-expand fixed-bottom d-lg-none d-xl-none" style="height: 40px; padding: 0px;">
	<ul class="navbar-nav nav-justified w-100">
		<li class="nav-item" style="background-color: white;">
			<a href="<?= base_url('user/favourite/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
					<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
				</svg>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('user/hunter/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-house-fill" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
					<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
				</svg>
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= base_url('user/hunter_update_myprofile/') ?>" class="nav-link">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-person-fill" viewBox="0 0 16 16">
					<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
				</svg>
			</a>
		</li>

	</ul>
	</nav>




	<div class="" style="margin: 0px 0px 30px 0px;">

		<?php if (count($loker_favorit) > 0) { ?>
			<div style="margin-right: 20px; margin-left: 20px;" class="text-center">

				<h3>Loker Favorit</h3>
				<hr>

			</div>
			<?php foreach ($loker_favorit as $d) { ?>
				<div class="col" style="padding: 0px;">


					<div class="card shadow p-3 mb-4 bg-white rounded" style="margin-right: 20px; margin-left: 20px;">

						<div class="card-content">
							<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/logo_perusahaan/' . $d['logo']) ?>" alt="Card image cap">
							<div class="card-body">

								<h4 class="card-title" style="padding-bottom: 10px;"><?= $d['judul'] ?></h4>
								<p> <i class="bi bi-building"></i>
									<?= $d['perusahaan_nama'] ?></p>
								<div class="row">
									<div class="col">
										<p> <i class="bi bi-geo-alt"> </i><?= $d['perusahaan_lokasi'] ?></p>
									</div>
								</div>

								<h5>Gaji</h5>
								<p><i class="bi bi-currency-dollar"></i><?= "?? Rp " . number_format($d['gaji'], 0, ',', '.'); ?></p>
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
							</div>
							<a href="<?= base_url('user/loker_detail_hunter/' . $d['id_jobs']) ?>" class="btn btn-primary" style="float: right;">Lihat Detail</a>


							<a href="<?= base_url('user/hapus_favourite/' . $d['id_jobs_fav']) ?>">
								<button type="submit" class="btn btn-outline-danger">
									Hapus dari <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#dc3545" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
									</svg>
								</button>
							</a>
						</div>
					</div>
				</div>

			<?php } ?>
		<?php } else { ?>
			<div class="text-center my-auto" style="margin: 20px;">
				<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/samples/error-404.png') ?>" alt="Card " />
				<h3>Masih belum ada loker <br> yang anda favoritkan</h3>
			</div>
		<?php } ?>
	</div>


</body>

</html>