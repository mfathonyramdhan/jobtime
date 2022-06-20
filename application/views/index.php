<body><div class="page-heading">
  <h3>Statistik JobTime</h3>
</div>
<div class="page-content">
  <section class="row">
    <div class="col-12 col-lg-9">
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
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Grafik Loker 2022</h4>
            </div>
            <div class="card-body">
            <div class="container">
              <div class="row mt-4">
                <div class="col-12">
                  <canvas id="bar" hight="100">

                  </canvas>
                </div>
              </div>
              
</div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
                <div class="col-12 col-xl-4">
                  <div class="card">
                    <div class="card-header">
                      <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg
                              class="bi text-primary"
                              width="32"
                              height="32"
                              fill="blue"
                              style="width: 10px"
                            >
                              <use
                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"
                              />
                            </svg>
                            <h5 class="mb-0 ms-3">Europe</h5>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0">862</h5>
                        </div>
                        <div class="col-12">
                          <div id="chart-europe"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg
                              class="bi text-success"
                              width="32"
                              height="32"
                              fill="blue"
                              style="width: 10px"
                            >
                              <use
                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"
                              />
                            </svg>
                            <h5 class="mb-0 ms-3">America</h5>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0">375</h5>
                        </div>
                        <div class="col-12">
                          <div id="chart-america"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="d-flex align-items-center">
                            <svg
                              class="bi text-danger"
                              width="32"
                              height="32"
                              fill="blue"
                              style="width: 10px"
                            >
                              <use
                                xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill"
                              />
                            </svg>
                            <h5 class="mb-0 ms-3">Indonesia</h5>
                          </div>
                        </div>
                        <div class="col-6">
                          <h5 class="mb-0">1025</h5>
                        </div>
                        <div class="col-12">
                          <div id="chart-indonesia"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-xl-8">
                  <div class="card">
                    <div class="card-header">
                      <h4>Latest Comments</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-lg">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Comment</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="col-3">
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-md">
                                    <img src="assets/images/faces/5.jpg" />
                                  </div>
                                  <p class="font-bold ms-3 mb-0">Si Cantik</p>
                                </div>
                              </td>
                              <td class="col-auto">
                                <p class="mb-0">
                                  Congratulations on your graduation!
                                </p>
                              </td>
                            </tr>
                            <tr>
                              <td class="col-3">
                                <div class="d-flex align-items-center">
                                  <div class="avatar avatar-md">
                                    <img src="assets/images/faces/2.jpg" />
                                  </div>
                                  <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                                </div>
                              </td>
                              <td class="col-auto">
                                <p class="mb-0">
                                  Wow amazing design! Can you make another
                                  tutorial for this design?
                                </p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
    </div>
    <div class="col-12 col-lg-3">
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

      <div class="card">
        <div class="card-header">
          <h4>Users Chart</h4>
        </div>
        <div class="card-body">
             <canvas id="pie"></canvas>
        </div>
      </div>
    </div>
  </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js" integrity="sha512-sW/w8s4RWTdFFSduOTGtk4isV1+190E/GghVffMA9XczdJ2MDzSzLEubKAs5h0wzgSJOQTRYyaz73L3d6RtJSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>

  const baseUrl = "<?php echo base_url();?>"
  const myChart = (chartType) => {
				$.ajax({
				url: baseUrl+'admin/chart_data',
				dataType: 'json',
				method: 'get',
				success: data => {
					let chartX = []
					let chartY = []

					data.map( data => {
						chartX.push(data.month)
						chartY.push(data.sales)
					})
					const chartData = {
						labels: chartX,
						datasets: [
							{
								label: 'Sales',
								data: chartY,
								backgroundColor: ['lightcoral'],
								borderColor: ['lightcoral'],
								borderWidth: 4

							}
						]
					}
					const ctx = document.getElementById(chartType).getContext('2d')
					const config = {
						type: chartType,
						data: chartData
					}
					switch(chartType) {
						case 'pie':
							const pieColor = ['salmon', 'red', 'green', 'blue', 'aliceblue', 'pink', 'orange', 'gold', 'plum', 'darkcyan', 'wheat', 'silver']
							chartData.datasets[0].backgroundColor = pieColor
							chartData.datasets[0].borderColor = pieColor
							break;
						case 'bar':
							chartData.datasets[0].backgroundColor = ['skyblue']
							chartData.datasets[0].borderColor = ['skyblue']
							break;
						default:
							config.options = {
								scales: {
									y: {
										beginAtZero: true
									}
								}
							}

					}

					const chart = new Chart(ctx, config)
				}
			})
  }

  myChart('pie')
  // myChart('line')
  myChart('bar')
 
</script>

  
</body>
<footer>
  <div class="footer clearfix mb-0 text-muted">
    <div class="float-start">
      <p>2022 &copy; Copyright - JobTime</p>
    </div>
  </div>
</footer>
</div>
</div>