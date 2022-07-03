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

<body>

  <div class="d-block d-lg-none" style="padding-top: 30px;" id="container">
    <div class="text-center my-auto">
      <img id="img404" class="card-img-top img-fluid" src="<?php echo base_url('assets/images/samples/error-404.png') ?>" alt="Card " style="width: 325px;" />
      <h4>Halaman admin <br> hanya dapat diakses <br> melalui PC / Desktop</h4>

    </div>
  </div>
  <div id="app" class="d-none d-lg-block">
    <div id="sidebar" class="active">
      <div class="sidebar-wrapper active">
        <div class="sidebar-header">
          <div class="d-flex justify-content-between">
            <div class="logo">
              <a href="<?= base_url('admin') ?>"><img src="<?= base_url('assets/images/') ?>logo/logo.png" alt="Logo" srcset="" /></a>
            </div>
            <div class="toggler">
              <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
          </div>
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class="sidebar-title">Admin Menu</li>

            <!-- <li class="sidebar-item active"> -->
            <li class="sidebar-item">
              <a href="<?= base_url('admin') ?>" class="sidebar-link">
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
                <!-- <li class="submenu-item">
                                    <a href="<?= base_url('admin/tambah_user') ?>">Tambah Akun User</a>
                                </li> -->
                <li class="submenu-item">
                  <a href="<?= base_url('admin/daftar_admin') ?>">Data Akun Admin</a>
                </li>
                <li class="submenu-item">
                  <a href="<?= base_url('admin/daftar_user') ?>">Data Akun User</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item has-sub">
              <a href="#" class="sidebar-link">
                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                <span>Manajemen Loker</span>
              </a>
              <ul class="submenu">
                <li class="submenu-item">
                  <a href="<?= base_url('admin/daftar_loker') ?>">Data Loker</a>
                </li>
              </ul>
            </li>

            <li class="sidebar-item">

              <a href="<?= base_url('admin/logout') ?>" class="sidebar-link">

                <i class="bi bi-box-arrow-left" style="color: lightcoral;"></i>
                <span style="color: lightcoral;">Logout</span>


              </a>

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

      <div class="d-none d-lg-block">
        <div class="page-heading">
          <h3>Statistik JobTime</h3>
        </div>
        <div class="page-content">
          <section class="row">
            <div class="col">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon purple">
                            <i class="iconly-boldProfile"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Total User</h6>
                          <h6 class="font-extrabold mb-0"><?= $jumlah_user ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon blue">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Total Loker</h6>
                          <h6 class="font-extrabold mb-0"><?= $jumlah_loker ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon green">
                            <i class="iconly-boldShow"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">
                            Loker Belum direview
                          </h6>
                          <h6 class="font-extrabold mb-0"><?= $jumlah_loker_status1 ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <div class="card-body py-4 px-5">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                          <img src="<?php echo base_url('assets/images/foto_profil/') . $data_user['foto'] ?>" alt="Admin Photo Profile" />
                        </div>
                        <div class="ms-3 name">
                          <h5 class="font-bold">Halo, Admin</h5>
                          <h6 class="text-muted mb-0"><?= $data_user['nama'] ?></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-6 col-lg-3 col-md-6">
                  <div class="card">
                    <div class="card-body px-3 py-4-5">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="stats-icon red">
                            <i class="iconly-boldBookmark"></i>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <h6 class="text-muted font-semibold">Saved Post</h6>
                          <h6 class="font-extrabold mb-0">112</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>


              <!-- <div class="card">
          <div class="card-header">
            <h4>Users Chart</h4>
          </div>
          <div class="card-body">
            <canvas id="pie"></canvas>
          </div>
        </div> -->
            </div>
            <div class="row">
              <div class="col">
                <div class="card">
                  <div class="card-header">
                    <h4>Grafik Loker 2022</h4>
                  </div>
                  <div class="card-body">
                    <div class="container">
                      <div class="row">
                        <div class="col-12">
                          <!-- <canvas id="bar" hight="100"> -->
                          <canvas id="myChart" width="400" height="200"></canvas>
                          </canvas>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>

        </div>



      </div>
    </div>
  </div>




</body>

<script src=" https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



<?php
//  $con = new mysqli('localhost', 'himm2959_jobtime', 'RW.MFRdsgn99', 'himm2959_jobtime');
$con = new mysqli('localhost', 'root', '', 'jobtime');
$query = $con->query("SELECT MONTHNAME(jobs_created_at) as monthname, COUNT(id_jobs) as jumlahloker FROM tb_jobs GROUP BY monthname  ORDER BY `jumlahloker` DESC");

foreach ($query as $data) {
  $monthname[] = $data['monthname'];
  $jumlahloker[] = $data['jumlahloker'];
}
?>

<script>
  const labels = <?php echo json_encode($monthname) ?>;
  const data = {
    labels: labels,
    datasets: [{
      label: 'Jumlah Loker',
      data: <?php echo json_encode($jumlahloker) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const config = {
    type: 'bar',
    data: data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    },
  };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
<footer>
  <div class="footer clearfix mb-0 text-muted d-none d-lg-block">
    <div class="float-start">
      <p>2022 &copy; Copyright - JobTime</p>
    </div>
  </div>
</footer>

</div>
</div>