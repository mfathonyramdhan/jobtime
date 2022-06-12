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
        <h3>Data Akun User</h3>
        <!-- <p class="text-subtitle text-muted">
                  Untuk mengecek data akun dengan role admin
                </p> -->
      </div>
      <div class="col-12 col-md-6 order-md-2 order-first">
        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
              Manajemen Akun - Data Akun User
            </li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <section class="section">
    <div class="card">
      <div class="card-header">Data Akun User</div>
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No.</th>
              <th>ID Akun</th>
              <th>Nama</th>
              <th>Email</th>
              <th>No. HP</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Foto Profil</th>
              <th>Provinsi</th>
              <th>Kota</th>
              <th>Kecamatan</th>
              <th>Desa</th>
              <th>Alamat</th>
              <th>Akun Dibuat</th>
              <th>Akun diupdate terakhir pada</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($daftar_user) > 0) { ?>
              <?php $no = 1;
              foreach ($daftar_user as $a) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $a['id_user'] ?></td>
                  <td><?= $a['nama'] ?></td>
                  <td><?= $a['email'] ?></td>
                  <td><?= $a['no_hp'] ?></td>
                  <td><?= $a['tgl_lahir'] ?></td>
                  <td><?= $a['jenis_kelamin'] ?></td>
                  <td>
                    <a href="<?= base_url('assets/images/foto_profil/') . $a['foto'] ?>"><span class="badge bg-warning">Lihat Foto</span></a>
                  </td>
                  <td><?= $a['provinsi'] ?></td>
                  <td><?= $a['kota'] ?></td>
                  <td><?= $a['kecamatan'] ?></td>
                  <td><?= $a['desa'] ?></td>
                  <td><?= $a['alamat'] ?></td>
                  <td><?= $a['created_at'] ?></td>
                  <td><?= $a['updated_at'] ?></td>
                  <td>
                    <a href="<?= base_url('admin/edit_akun/' . $a['id_user']) ?>">
                      <span class="badge bg-primary" style="margin: 10px">Edit</span>
                    </a>

                    <a href="<?= base_url('admin/hapus_user/' . $a['id_user']) ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                      <span class="badge bg-danger">Hapus</span>
                    </a>
                  </td>
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
<script>
  // Simple Datatable
  let table1 = document.querySelector("#table1");
  let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>