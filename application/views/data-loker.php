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
        <h3>Data Loker</h3>
        <!-- <p class="text-subtitle text-muted">
                  Untuk mengecek data akun dengan role User
                </p> -->
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= base_url('admin') ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Manajemen Loker - Data Loker
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">Data Lowongan Pekerjaan</div>
      <div class="text-center">
        <div class="buttons">
          <a href="<?= base_url('admin/form_create_loker/') ?>" class="btn btn-primary">Buat Postingan Loker Baru +</a>

        </div>
      </div>

      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No.</th>
              <th>Aksi</th>
              <th>ID Loker</th>
              <th>Akun Pembuat Loker</th>
              <th>Nama Perusahaan</th>
              <th>Logo Perusahaan</th>
              <th>Judul Loker</th>
              <th>Lokasi Perusahaan</th>
              <th>Gaji</th>
              <th>Deskripsi</th>
              <th>Syarat</th>
              <th>Deadline Pendaftaran</th>
              <th>Status</th>
              <th>Link Whatsapp</th>
              <th>Loker Dibuat</th>
              <th>Loker diupdate terakhir pada</th>

            </tr>

          </thead>
          <tbody>

            <?php if (count($daftar_loker) > 0) { ?>
              <?php $no = 1;
              foreach ($daftar_loker as $d) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td>
                    <!-- <a href="<#?= base_url('admin/edit_loker/' . $a['id_jobs']) ?>"> -->
                    <a href="<?= base_url('admin/edit_loker/' . $d['id_jobs']) ?>">
                      <span class="badge bg-primary" style="margin: 10px">Edit</span>
                    </a>

                    <!-- <a href="<#?= base_url('admin/hapus_loker/' . $a['id_jobs']) ?>"> -->
                    <a href="<?= base_url('admin/hapus_loker/' . $d['id_jobs']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                      <span class="badge bg-danger">Hapus</span>
                    </a>
                  </td>
                  <td><?= $d['id_jobs'] ?></td>
                  <td><?= $d['nama'] ?></td>
                  <td><?= $d['perusahaan_nama'] ?></td>
                  <td> <a href="<?= base_url('assets/images/logo_perusahaan/') . $d['logo'] ?>">
                      <span class="badge bg-warning">Lihat Gambar</span>
                  </td></a>
                  <td><?= $d['judul'] ?></td>
                  <td><?= $d['perusahaan_lokasi'] ?></td>
                  <td><?= "Rp " . number_format($d['gaji'], 0, ',', '.'); ?></td>
                  <td><?= $d['deskripsi'] ?></td>
                  <td><?= $d['syarat'] ?></td>
                  <td><?= $d['deadline'] ?></td>
                  <td>
                    <?php if ($d['id_jobs_status'] == 1) { ?>
                      <span class="badge bg-warning">
                        Belum direview
                      </span>
                    <?php } elseif ($d['id_jobs_status'] == 2) { ?>
                      <span class="badge bg-success">
                        Terkonfirmasi
                      </span>
                    <?php } elseif ($d['id_jobs_status'] == 3) { ?>
                      <span class="badge bg-danger">
                        Kadaluarsa
                      </span>
                    <?php } ?>
                  </td>
                  <td><?= $d['link'] ?></td>
                  <td><?= $d['created_at']  ?></td>
                  <td><?= $d['updated_at'] ?></td>
                </tr>
              <?php } ?>
            <?php } ?>
          </tbody>
        </table>
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

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
  // Simple Datatable
  let table1 = document.querySelector("#table1");
  let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="assets/js/main.js"></script>
</body>

</html>