<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JobTime - Data Akun User</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="assets/images/logo/favicon.ico"
    />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />

    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css" />

    <link
      rel="stylesheet"
      href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="assets/vendors/bootstrap-icons/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="assets/css/app.css" />
    <link
      rel="shortcut icon"
      href="assets/images/favicon.svg"
      type="image/x-icon"
    />
  </head>

  <body>
    <div id="app">
      <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
          <div class="sidebar-header">
            <div class="d-flex justify-content-between">
              <div class="logo">
                <a href="index.html"
                  ><img src="assets/images/logo/logo.png" alt="Logo" srcset=""
                /></a>
              </div>
              <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"
                  ><i class="bi bi-x bi-middle"></i
                ></a>
              </div>
            </div>
          </div>
          <div class="sidebar-menu">
            <ul class="menu">
              <li class="sidebar-title">Admin Menu</li>

              <li class="sidebar-item">
                <a href="index.html" class="sidebar-link">
                  <i class="bi bi-grid-fill"></i>
                  <span>Dashboard</span>
                </a>
              </li>

              <li class="sidebar-item has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-person-badge-fill"></i>
                  <span>Manajemen Akun</span>
                </a>
                <ul class="submenu">
                  <li class="submenu-item">
                    <a href="data-akun-admin.html">Data Akun Admin</a>
                  </li>
                  <li class="submenu-item">
                    <a href="data-akun-user.html">Data Akun User</a>
                  </li>
                </ul>
              </li>

              <li class="sidebar-item active has-sub">
                <a href="#" class="sidebar-link">
                  <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                  <span>Manajemen Loker</span>
                </a>
                <ul class="submenu" style="display: block">
                  <li class="submenu-item active">
                    <a href="data-loker.html">Data Loker</a>
                  </li>
                  
                </ul>
              </li>
            </ul>
          </div>
          <button class="sidebar-toggler btn x">
            <i data-feather="x"></i>
          </button>
        </div>
      </div>
      <div id="main">
        <header class="mb-3">
          <a href="#" class="burger-btn d-block">
            <i class="bi bi-justify fs-3"></i>
          </a>
        </header>

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
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
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
                    <tr>
                      <td>1</td>
                      <td>1</td>
                      <td>Dave</td> 
                      <td>PT. Viktori Solution</td>             
                      <td> <a href="">
                        <span class="badge bg-warning">Lihat Gambar</span>
                      </td></a>
                      <td>Front-End Web Developer</td>
                      <td>Jember</td>
                      <td>Rp. 5.000.000</td>

                      <td>Dibutuhkan FE Web Dev di perusahaan kami dengan jobdesk sebagai berikut : Mengatur tampilan website dan maintenance UI / UX</td>
                      <td>1. S1 Teknologi Informasi, 2. Mampu Bekerja Sama dengan Tim, 3. Mampu bekerja dibawah tekanan, 4. Menyukai tantangan</td>
                      <td>30/08/2022</td>
                      <td><span class="badge bg-success">Terkonfirmasi</span></td>
                      <td>https://wa.me/+6283831832833</td>
                      <td>01/06/2022</td>
                      <td>-</td>
                      <td>
                        <a href="">
                            <span class="badge bg-primary" style="margin: 10px">Edit</span>
                        </a>

                        <a href="">
                            <span class="badge bg-danger">Hapus</span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>2</td>
                      <td>User 1</td>   
                      <td>PT. Makmur Jaya Techno</td>           
                      <td> <a href="">
                        <span class="badge bg-warning">Lihat Gambar</span>
                      </td></a>
                      <td>Senior Back-End Web Developer</td>
                      <td>Surabaya</td>
                      <td>Rp. 7.000.000</td>

                      <td>Dibutuhkan BE Web Dev di perusahaan kami dengan jobdesk sebagai berikut : Mengatur database website dan maintenance Database</td>
                      <td>1. S1 Teknologi Informasi, 2. Memiliki sertifikat Pelatihan Backend, 3. Mampu bekerja dibawah tekanan, 4. Menyukai tantangan</td>
                      <td>30/08/2022</td>
                      <td><span class="badge bg-warning">Belum direview</span></td>
                      <td>https://wa.me/+6283831832834</td>

                      <td>03/06/2022</td>
                      <td>-</td>
                      <td>
                        <a href="">
                            <span class="badge bg-primary" style="margin: 10px">Edit</span>
                        </a>

                        <a href="">
                            <span class="badge bg-danger">Hapus</span>
                        </a>
                      </td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>3</td>
                      <td>User 2</td>    
                      <td>PT. Jaya Abadi Tech Solution</td>       
                      <td> <a href="">
                        <span class="badge bg-warning">Lihat Gambar</span>
                      </td></a>
                      <td>IT Support</td>
                      <td>Probolinggo</td>
                      <td>Rp. 4.500.000</td>

                      <td>Dibutuhkan IT Support di perusahaan kami dengan jobdesk sebagai berikut : Input data dengan effisien</td>
                      <td>1. S1 Teknologi Informasi, 2. Memiliki sertifikat IT Suport, 3. Pengalaman bekerja di bidang yang sama minimal 3 tahun</td>
                      <td>30/05/2022</td>
                      <td><span class="badge bg-danger">Kadaluarsa</span></td>
                      <td>https://wa.me/+6283831832835</td>

                      <td>01/05/2022</td>
                      <td>-</td>
                      <td>
                        <a href="">
                            <span class="badge bg-primary" style="margin: 10px">Edit</span>
                        </a>

                        <a href="">
                            <span class="badge bg-danger">Hapus</span>
                        </a>
                      </td>
                    </tr>
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
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
      // Simple Datatable
      let table1 = document.querySelector("#table1");
      let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
  </body>
</html>
