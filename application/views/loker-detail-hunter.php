<body style="padding-top: 20px;">
	<!-- Bottom Navbar -->
	<nav class="navbar bg-primary navbar-expand fixed-bottom " style="height: 40px; padding: 0px;">
		<ul class="navbar-nav nav-justified w-100">
			<li class="nav-item">
				<a href="<?= base_url('user/favourite/') ?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-star-fill" viewBox="0 0 16 16">
						<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
					</svg>
				</a>
			</li>

			<li class="nav-item" style="background-color: white;">
				<a href="<?= base_url('user/hunter/') ?>" class="nav-link">
					<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#435ebe" class="bi bi-house-fill" viewBox="0 0 16 16">
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


	<div class="card shadow p-3 bg-white rounded" style="margin-right: 20px; margin-left: 20px; margin-bottom: 65px;">
		<div class="card-content">
			<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/logo_perusahaan/' . $loker['logo']) ?>" alt="Card image cap">
			<div class="card-body">
				<h4 class="card-title" style="padding-bottom: 10px;"><?= $loker['judul'] ?></h4>
				<p> <i class="bi bi-building"></i>
					<?= $loker['perusahaan_nama'] ?></p>
				<div class="row">
					<div class="col">
						<p> <i class="bi bi-geo-alt"> </i><?= $loker['perusahaan_lokasi'] ?></p>
					</div>
				</div>

				<h5>Gaji</h5>
				<p><i class="bi bi-currency-dollar"></i><?= "Rp " . number_format($loker['gaji'], 0, ',', '.'); ?></p>


				<h5>Deskripsi :</h5>
				<p class="card-text">
					<?= $loker['deskripsi'] ?>

				</p>

				<h5>Syarat :</h5>
				<span style="color: #fff; background-color: orange; border-radius: 10px; padding:  0 5px 0 5px; ">*Wajib mencantumkan CV</span>
				<p class="card-text">
					<?= $loker['syarat'] ?>

				</p>

				<?php
				$now = strtotime(date('Y-m-d'));
				$dl = strtotime($loker['deadline']);
				$interval = abs($dl - $now);
				$years = floor($interval / (365 * 60 * 60 * 24));
				$months = floor(($interval - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
				$days = floor(($interval - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
				?>
				<small class="text-muted">Deadline Pendaftaran : <?= $days ?> Hari lagi</small>
				<div class="row" style="padding-top: 10px;">
					<!-- <div class="col text-end">
						<a class="btn btn-warning">
							<i class="bi bi-star"></i>Favoritkan</a>
					</div> -->

					<div class="col text-end">
						<a class="btn btn-success" href="<?= $loker['link'] ?>">
							<i class="bi bi-telephone-fill" style="padding-right: 5px; "></i>WhatsApp</a>
					</div>

				</div>

			</div>
		</div>
	</div>

</body>

</html>