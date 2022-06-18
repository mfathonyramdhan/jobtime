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
<nav class="navbar bg-primary navbar-expand fixed-bottom " style="height: 40px; padding: 0px;">
    <ul class="navbar-nav nav-justified w-100">
        <li class="nav-item">
            <a href="<?= base_url('admin/favorit/') ?>" class="nav-link"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                </svg>
            </a>
        </li>
        <li class="nav-item" style="background-color: white;">
            <a href="<?= base_url('user/index/') ?>" class="nav-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#435ebe" class="bi bi-house-fill" viewBox="0 0 16 16">
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
                    <form class="form form-vertical" method="POST" action="<?= base_url('user/create_loker/') ?>" enctype="multipart/form-data">
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
                                        <input type="text" class="form-control" placeholder="Input Nama Perusahaan " id="first-name-icon" name="perusahaan_nama" required />
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
                                        <input type="text" class="form-control" placeholder="Input Nama Lokasi Perusahaan" id="first-name-icon" name="perusahaan_lokasi" required />
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
                                    <input type="file" class="form-control" placeholder="" id="formFile" name="image" id="image" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group has-icon-left">
                                    <label for="first-name-icon">Judul Loker</label>
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Input Judul Lowongan Pekerjaan " id="first-name-icon" name="judul" required />
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
                                        <input type="number" class="form-control" placeholder="ex : 5000000" id="mobile-id-icon" name="gaji" required />
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
                                        <input type="datetime-local" class="form-control" placeholder="Input tanggal deadline loker " id="date-id-icon" name="deadline" required />
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
                                    <textarea type="text" class="form-control" placeholder="Input Deskripsi Loker" id="first-name-icon" name="deskripsi" required></textarea>
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

                                    <textarea type="text" class="form-control" placeholder="Input Syarat Loker " id="first-name-icon" name="syarat" required></textarea>
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
                                    <input type="text" class="form-control" placeholder="Ex : https://wa.me/+628xx-xxxx-xxxx" id="link" name="link" required />
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
</div>
</section>
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