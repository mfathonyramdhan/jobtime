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
              <a href="index.html">Dashboard</a>
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
      <div class="card-body">
        <table class="table table-striped" id="table1">
          <thead>
            <tr>
              <th>No.</th>

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
              <th>Aksi</th>
            </tr>

          </thead>
          <tbody>
            <?php if (count($daftar_loker) > 0) { ?>
              <?php $no = 1;
              foreach ($daftar_loker as $d) {
              ?>
                <tr>
                  <td><?= $no++ ?></td>
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
                  <td><span class="badge bg-success"><?= $d['name_jobs_status'] ?></span></td>
                  <td><?= $d['link'] ?></td>
                  <?php $created = strtotime($d['created_at']) ?>
                  <td><?= date('Y-m-d', $created) ?></td>
                  <?php $updated = strtotime($d['updated_at']) ?>
                  <td><?= date('Y-m-d', $updated) ?></td>
                  <td>
                    <a href="">
                      <span class="badge bg-primary" style="margin: 10px">Edit</span>
                    </a>

                    <a href="">
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

<script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
<script>
  // Simple Datatable
  let table1 = document.querySelector("#table1");
  let dataTable = new simpleDatatables.DataTable(table1);
</script>

<script src="assets/js/main.js"></script>
</body>

</html>