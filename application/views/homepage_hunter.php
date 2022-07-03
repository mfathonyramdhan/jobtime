<style>
	@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css");
	@import url(https://fonts.googleapis.com/css?family=Open+Sans);

	#img404 {
		width: 30%;
	}



	.download {
		width: 200px;
		height: 75px;
		background: #25396f;
		margin: 0 auto;
		border-radius: 100px;
		position: relative;
		color: #fff;
		cursor: pointer;
		border: 1px solid #fff;
	}

	.download>.fa {
		color: #fff;
		position: absolute;
		top: 50%;
		left: 15px;
		transform: translateY(-50%);
	}

	.df,
	.dfn {
		position: absolute;
		left: 70px;
	}

	.df {
		top: 20px;
		font-size: .68em;
	}

	.dfn {
		top: 33px;
		font-size: 1.08em;
	}



	.download:hover {

		background: #142042;


		color: #CFCFCF;
		cursor: pointer;

	}
</style>

<script>
	$(document).ready(function() {
		$("#myinput").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#card div").filter(function() {
				$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
			});
		});
	});
</script>




<body style="padding-top: 20px; margin-bottom: 70px;">

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
			confirmButtonText: "Ok"
		});
	</script>';
		} else if ($pesan['status_pesan'] == false && !empty($pesan)) {
			echo '
	<script>
		Swal.fire({
			title: "Gagal",
			text: "' . $pesan['isi_pesan'] . '",
			type: "error",
			confirmButtonText: "Coba lagi"
		});
	</script>';
		}
	}
	?>

	<div class="d-lg-none">

		<!-- begin Bottom Navbar -->
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
		<!-- end Bottom Navbar -->



		<!-- perulangan card konten loker -->
		<?php if (count($daftar_loker) > 0) { ?>
			<form action="#" method="get" style="margin-right: 20px; margin-left: 20px; ">
				<div class="input-group">
					<span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
					<input type="text" class="form-control" placeholder="Masukan Kata Kunci..." aria-label="Recipient's username" aria-describedby="button-addon2" id="myinput">

				</div>
				<hr>
			</form>

			<?php foreach ($daftar_loker as $d) { ?>
				<div id="card">
					<div class="card shadow p-3 mb-4 bg-white rounded" style="margin-right: 20px; margin-left: 20px;">
						<div class="card-content">

							<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/logo_perusahaan/' . $d['logo']) ?>" alt="Card image cap">
							<div class="card-body">
								<h4 class="card-title" style="padding-bottom: 10px;"><?= $d['judul'] ?></h4>
								<p> <i class="bi bi-building"></i>
									<?= $d['perusahaan_nama'] ?></p>

								<p> <i class="bi bi-geo-alt"> </i><?= $d['perusahaan_lokasi'] ?></p>



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
							</div>

							<a href="<?= base_url('user/loker_detail_hunter/' . $d['id_jobs']) ?>" class="btn btn-primary" style="float: right;">Lihat Detail</a>

							<form class="form" method="POST" action="<?= base_url('user/favoritkan/') ?>" enctype="multipart/form-data">

								<input type="hidden" name="id_jobs" value="<?= $d['id_jobs'] ?>">
								<button type="submit" class="btn btn-warning">
									Tambah ke <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-star-fill" viewBox="0 0 16 16">
										<path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
									</svg>
								</button>
							</form>

						</div>
					</div>
				</div>
			<?php } ?>
		<?php } else { ?>
			<!-- jika konten  kosong maka tampilkan -->
			<div class="text-center my-auto" style="margin: 20px;">
				<img class="card-img-top img-fluid" src="<?php echo base_url('assets/images/samples/error-404.png') ?>" alt="Card " />
				<h3>Masih belum ada <br> postingan loker</h3>
			</div>
		<?php } ?>

	</div>

	<div class="d-none d-lg-block" style="margin: auto;" id="container">
		<div class="text-center my-auto">
			<img id="img404" class="card-img-top img-fluid" src="<?php echo base_url('assets/images/samples/error-404.png') ?>" alt="Card " />
			<h4>Halaman ini hanya dapat diakses <br> melalui aplikasi JobTime!</h4>
			<p class="text-gray-600">
				Download Aplikasi JobTime

			</p>


			<a href="https://jobtime.my.id/jobtime.apk">
				<div class="download android">
					<i class="fa fa fa-android fa-3x"></i>
					<span class="df">Download</span>
					<span class="dfn">Jobtime App</span>
				</div>
			</a>

		</div>
	</div>

</body>

</html>