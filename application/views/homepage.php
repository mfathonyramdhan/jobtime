<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>JobTime - Homepage</title>
	<link rel="icon" type="image/x-icon" href="assets/images/logo/favicon.ico" />

	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.css" />

	<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/simple-datatables/style.css" />

	<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/bootstrap-icons/bootstrap-icons.css" />
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/app.css" />
	<link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.svg" type="image/x-icon" />
</head>

<body>
	<div class="container">
		<div class="jumbotron mt-3">
			<h1>Bottom Navbar example</h1>
			<p class="lead">This example is a quick exercise to illustrate how the bottom navbar works.</p>
			<a class="btn btn-lg btn-primary" href="../../components/navbar/" role="button">View navbar docs »</a>
		</div>
	</div>
	<nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="#">Bottom navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Disabled</a>
				</li>
				<li class="nav-item dropup">
					<a class="nav-link dropdown-toggle" href="https://getbootstrap.com/" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropup</a>
					<div class="dropdown-menu" aria-labelledby="dropdown10">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script>
		window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
	</script>
	<script src="<?= base_url() ?>assets/js/vendor/popper.min.js"></script>
	<script src="<?= base_url() ?>dist/js/bootstrap.min.js"></script>


</body>

</html>