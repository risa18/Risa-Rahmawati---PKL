<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
	header("Location: login.php");
	exit();
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title>Web Apps | Data Approve</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/5.3/css/all.min.css" rel="stylesheet" />
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="assets/css/default/style.min.css" rel="stylesheet" />
	<link href="assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="assets/plugins/jquery-jvectormap/jquery-jvectormap.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />
	<link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default" style="background-color: #2D353C;">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand text-center mb-2">
					<img src="assets/img/logo/mainlogo_rb.png" alt="Your Logo" style="max-height: 40px;" />
				</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->

			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/img/user/user.png" alt="" />
						<span class="d-none d-md-inline text-white"><?= $_SESSION['level'] ?></span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="logout.php" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="assets/img/user/user.png" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
								<?= $_SESSION['level'] ?>
							</div>
						</a>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->

				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub active">
						<a href="index.php">
							<b class="caret"></b>
							<i class="fa fa-th-large"></i>
							<span>Dashboard</span>
						</a>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-align-left"></i>
							<span>Management Data</span>
						</a>
						<ul class="sub-menu">
							<?php if ($_SESSION['level'] == 'Admin') : ?>
								<!-- <li><a href="approve.php">Approve</a></li> -->
								<li><a href="approve.php?search_pengguna=">Data Pengguna</a></li>
								<li><a href="approve.php?search_penduduk=">Approve Data Penduduk</a></li>
								<li><a href="approve.php?search_penduduk2=">Data Penduduk</a></li>
								<li><a href="approve.php?search_kelahiran=">Data Kelahiran</a></li>
								<li><a href="approve.php?search_kematian=">Data Kematian</a></li>
								<li><a href="approve.php?search_usaha=">Data Izin Usaha</a></li>
								<li><a href="approve.php?search_pindah=">Data Pindah</a></li>
							<?php else : ?>
								<li><a href="inputdatapenduduk.php">Data Penduduk</a></li>
							<?php endif; ?>
						</ul>
					</li>
					<?php if ($_SESSION['level'] == 'Admin') : ?>
						<li class="has-sub">
							<a href="javascript:;">
								<b class="caret"></b>
								<i class="fa fa-align-left"></i>
								<span>Report</span>
							</a>
							<ul class="sub-menu">
								<li><a href="rekapitulasidatapenduduk.php">Rekapitulasi Data Penduduk </a></li>
								<li><a href="rekapitulasidatakelahiran.php">Rekapitulasi Data Kelahiran</a></li>
								<li><a href="rekapitulasidatakematian.php">Rekapitulasi Data Kematian</a></li>
								<li><a href="rekapitulasidataizinusaha.php">Rekapitulasi Data Izin Usaha</a></li>
								<li><a href="rekapitulasidatapindah.php">Rekapitulasi Data Pindah</a></li>
								<li><a href="periode_surat.php">Rekapitulasi Data Surat</a></li>
							</ul>
						</li>
					<?php endif; ?>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->

		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin page-header -->
			<h1 class="page-header">Management Data</h1>
			<!-- end page-header -->
			<?php
			if (isset($_GET['status'])) {
				$status = $_GET['status'];
				if ($status == 'update_success') {
					echo '
						<div class="alert alert-success fade show">
							<span class="close" data-dismiss="alert">×</span>
							<strong>Success!</strong>
							<aclass="alert-link">Data berhasil di approve</a>. 
						</div>
						';
				} else if ($status == 'batal_success') {
					echo '
						<div class="alert alert-success fade show">
							<span class="close" data-dismiss="alert">×</span>
							<strong>Success!</strong>
							<aclass="alert-link">Batal approve berhasil</a>. 
						</div>
						';
				} else {
					echo '
						<div class="alert alert-danger fade show">
							<span class="close" data-dismiss="alert">×</span>
							<strong>Warning!</strong>
							<a class="alert-link">Terjadi kesalahan saat menyimpan data</a>. 
						</div>
						';
				}
			}
			?>

			<!-- begin row -->
			<?php if (isset($_GET['search_pengguna'])) : ?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_pengguna" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
								</div>
								<h4 class="panel-title">Data Pengguna Penduduk</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<a href="inputdatapengguna.php"><button class="btn btn-outline-primary">Tambah Data</button></a>
										<thead>
											<tr>
												<th>No</th>
												<th>Username</th>
												<th>Password</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_pengguna'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_pengguna WHERE level = 'Penduduk' AND user LIKE '%" . $_GET['search_pengguna'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['user'] ?></td>
															<td><?= $row['password'] ?></td>
															<td class="with-btn" nowrap>
																<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_pengguna" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Hapus</a>
																<a href="inputdatapengguna.php?id=<?= $row['id'] ?>&tabel=data_pengguna" onclick="return confirm('Apakah Anda yakin ingin edit data ini?')" class="btn btn-sm btn-primary width-100 m-r-2">Edit</a>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_pengguna WHERE level = 'Penduduk'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['user'] ?></td>
															<td><?= $row['password'] ?></td>
															<td class="with-btn" nowrap>
																<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_pengguna" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Hapus</a>
																<a href="inputdatapengguna.php?id=<?= $row['id'] ?>&tabel=data_pengguna" onclick="return confirm('Apakah Anda yakin ingin edit data ini?')" class="btn btn-sm btn-primary width-100 m-r-2">Edit</a>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_penduduk'])) : ?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_penduduk" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
								</div>
								<h4 class="panel-title">Data Approve Penduduk</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>NIK</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_penduduk'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_penduduk WHERE status = 0 AND nama LIKE '%" . $_GET['search_penduduk'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nik'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['alamat'] ?></td>
															<td class="with-btn" nowrap>
																<a href="prosesbatalapprove.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin membatalkan data ini?')" class="btn btn-sm btn-danger width-60">Batal</a>
																<a href="prosesapprove.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin approve data ini?')" class="btn btn-sm btn-primary width-100 m-r-2">Approve</a>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_penduduk WHERE status = 0");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nik'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['alamat'] ?></td>
															<td class="with-btn" nowrap>
																<a href="prosesbatalapprove.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin membatalkan data ini?')" class="btn btn-sm btn-danger width-60">Batal</a>
																<a href="prosesapprove.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin approve data ini?')" class="btn btn-sm btn-primary width-100 m-r-2">Approve</a>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_penduduk2'])) : ?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_penduduk2" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
								</div>
								<h4 class="panel-title">Data Penduduk</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>NIK</th>
												<th>Nama</th>
												<th>Alamat</th>
												<th>---</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_penduduk2'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_penduduk WHERE status = 1 AND nama LIKE '%" . $_GET['search_penduduk2'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nik'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['alamat'] ?></td>
															<td class="with-btn" nowrap>
																<?php if ($_SESSION['level'] == 'Admin') : ?>
																	<a href="inputdatakelahiran.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-white width-150">Data Kelahiran</a><br><br>
																	<a href="inputdatakematian.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-grey width-150">Data Kematian</a><br><br>
																	<a href="inputdataizinusaha.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-green width-150">Data Izin Usaha</a><br><br>
																	<a href="inputdatapindah.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-pink width-150">Data Pindah</a><br><br>
																<?php endif; ?>
															<td class="with-btn" nowrap>
																<?php if ($_SESSION['level'] == 'Admin') : ?>
																	<a href="inputdatapenduduk.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																<?php endif; ?>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_penduduk WHERE status = 1");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['nik'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['alamat'] ?></td>
															<?php if ($_SESSION['level'] == 'Admin') : ?>
																<a href="inputdatakelahiran.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-white width-150">Data Kelahiran</a><br><br>
																<a href="inputdatakematian.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-grey">Data Kematian</a>
																<a href="inputdataizinusaha.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-green">Data Izin Usaha</a>
																<a href="inputdatapindah.php?status=2&id_penduduk=<?= $row['id'] ?>" class="btn btn-sm btn-pink">Data Pindah</a>
															<?php endif; ?>
															<td class="with-btn" nowrap>
																<?php if ($_SESSION['level'] == 'Admin') : ?>
																	<a href="inputdatapenduduk.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_penduduk" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																<?php endif; ?>
															</td>
														</tr>

												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_kelahiran'])) : ?>
				<?php
				if (isset($_GET['status_kelahiran'])) {
					$status = $_GET['status_kelahiran'];
					if ($status != '0' && $status != '2') {
						if ($status == '1') {
							echo '
                            <div class="alert alert-success fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Success!</strong>
                                <aclass="alert-link">Data berhasil disimpan</a>. 
                            </div>
                            ';
						} else {
							echo '
                            <div class="alert alert-danger fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Warning!</strong>
                                <a class="alert-link">Terjadi kesalahan saat menyimpan data</a>. 
                            </div>
                            ';
						}
					}
				}
				?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_kelahiran" placeholder="Masukan Nama Anak" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
									<!-- <a href="cetakdatakelahiran.php" target="_blank" class="btn btn-sm btn-danger">print</a> -->
								</div>
								<h4 class="panel-title">Data Kelahiran</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>No Surat</th>
												<th>Nama Anak</th>
												<th>Tanggal</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_kelahiran'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_kelahiran WHERE nama_anak LIKE '%" . $_GET['search_kelahiran'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama_anak'] ?></td>
															<td><?= $row['tanggal'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatakelahiran.php?status=0&id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_kelahiran" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_kelahiran.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_kelahiran");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama_anak'] ?></td>
															<td><?= $row['tanggal'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatakelahiran.php?status=0&id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_kelahiran" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_kelahiran.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_kematian'])) : ?>
				<?php
				if (isset($_GET['status_kematian'])) {
					$status = $_GET['status_kematian'];
					if ($status != '0' && $status != '2') {
						if ($status == '1') {
							echo '
                            <div class="alert alert-success fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Success!</strong>
                                <aclass="alert-link">Data berhasil disimpan</a>. 
                            </div>
                            ';
						} else {
							echo '
                            <div class="alert alert-danger fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Warning!</strong>
                                <a class="alert-link">Terjadi kesalahan saat menyimpan data</a>. 
                            </div>
                            ';
						}
					}
				}
				?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_kematian" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
									<!-- <a href="cetakdatakematian.php" target="_blank" class="btn btn-sm btn-danger">print</a> -->
								</div>
								<h4 class="panel-title">Data Kematian</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>No Surat</th>
												<th>Nama</th>
												<th>Tanggal Kematian</th>
												<th>Sebab Kematian</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_kematian'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_kematian WHERE nama LIKE '%" . $_GET['search_kematian'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['tanggal_kematian'] ?></td>
															<td><?= $row['sebab_kematian'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatakematian.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_kematian" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_kematian.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_kematian");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['tanggal_kematian'] ?></td>
															<td><?= $row['sebab_kematian'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatakematian.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_kematian" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_kematian.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_usaha'])) : ?>
				<?php
				if (isset($_GET['status_usaha'])) {
					$status = $_GET['status_usaha'];
					if ($status != '0' && $status != '2') {
						if ($status == '1') {
							echo '
                            <div class="alert alert-success fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Success!</strong>
                                <aclass="alert-link">Data berhasil disimpan</a>. 
                            </div>
                            ';
						} else {
							echo '
                            <div class="alert alert-danger fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Warning!</strong>
                                <a class="alert-link">Terjadi kesalahan saat menyimpan data</a>. 
                            </div>
                            ';
						}
					}
				}
				?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_usaha" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
									<!-- <a href="cetakdatausaha.php" target="_blank" class="btn btn-sm btn-danger">print</a> -->
								</div>
								<h4 class="panel-title">Data Izin Usaha</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>No Surat</th>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Nama Usaha</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_usaha'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_izinusaha WHERE nama LIKE '%" . $_GET['search_usaha'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['jenis_kelamin'] ?></td>
															<td><?= $row['nama_usaha'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdataizinusaha.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_kematian" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_usaha.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_izinusaha");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['jenis_kelamin'] ?></td>
															<td><?= $row['nama_usaha'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdataizinusaha.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_izinusaha" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_usaha.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<?php if (isset($_GET['search_pindah'])) : ?>
				<?php
				if (isset($_GET['status_pindah'])) {
					$status = $_GET['status_pindah'];
					if ($status != '0' && $status != '2') {
						if ($status == '1') {
							echo '
                            <div class="alert alert-success fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Success!</strong>
                                <aclass="alert-link">Data berhasil disimpan</a>. 
                            </div>
                            ';
						} else {
							echo '
                            <div class="alert alert-danger fade show">
                                <span class="close" data-dismiss="alert">×</span>
                                <strong>Warning!</strong>
                                <a class="alert-link">Terjadi kesalahan saat menyimpan data</a>. 
                            </div>
                            ';
						}
					}
				}
				?>
				<div class="row">
					<!-- begin col-6 -->
					<div class="col-lg-12">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="table-basic-7">
							<!-- begin panel-heading -->
							<form class="d-flex p-5" role="search" style="width: 30%">
								<input class="form-control me-2 mr-2" type="search" name="search_pindah" placeholder="Masukan Nama" aria-label="Search">
								<button class="btn btn-outline-success" type="submit">Search</button>
							</form>
							<div class="panel-heading">
								<div class="panel-heading-btn">
									<!-- <a href="cetakdatausaha.php" target="_blank" class="btn btn-sm btn-danger">print</a> -->
								</div>
								<h4 class="panel-title">Data Pindah</h4>
							</div>
							<!-- end panel-heading -->
							<!-- begin panel-body -->
							<div class="panel-body">
								<!-- begin table-responsive -->
								<div class="table-responsive">
									<table class="table table-striped m-b-0">
										<thead>
											<tr>
												<th>No</th>
												<th>No Surat</th>
												<th>Nama</th>
												<th>Jenis Kelamin</th>
												<th>Alamat Baru</th>
												<th width="1%">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php if (isset($_GET['search_pindah'])) : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_pindah WHERE nama LIKE '%" . $_GET['search_pindah'] . "%'");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['jenis_kelamin'] ?></td>
															<td><?= $row['alamat_baru'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatapindah.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_pindah" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_pindah.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php else : ?>
												<?php
												$result = $koneksi->query("SELECT * FROM data_pindah");
												$no = 1;
												if ($result->num_rows > 0) :
													while ($row = $result->fetch_assoc()) {
												?>
														<tr>
															<td><?= $no++ ?></td>
															<td><?= $row['no_surat'] ?></td>
															<td><?= $row['nama'] ?></td>
															<td><?= $row['jenis_kelamin'] ?></td>
															<td><?= $row['alamat_baru'] ?></td>
															<td class="with-btn" nowrap>
																<center>
																	<a href="inputdatapindah.php?status=0&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary width-60 m-r-2">Edit</a>
																	<a href="deletedata.php?id=<?= $row['id'] ?>&tabel=data_pindah" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger width-60">Delete</a><br><br>
																	<a href="cetak_surat_pindah.php?id=<?= $row['id'] ?>&id_penduduk=<?= $row['id_penduduk'] ?>" class="btn btn-sm btn-yellow width-120 m-r-2">Cetak Surat</a>
																</center>
															</td>
														</tr>
												<?php
													}
												endif;
												?>
											<?php endif; ?>
										</tbody>
									</table>
								</div>
								<!-- end table-responsive -->
							</div>
							<!-- end panel-body -->
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-6 -->
				</div>
			<?php endif; ?>

			<!-- end row -->

		</div>
		<!-- end #content -->

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>
	<script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="assets/js/theme/default.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<!-- <script src="assets/plugins/gritter/js/jquery.gritter.js"></script> -->
	<script src="assets/plugins/flot/jquery.flot.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="assets/plugins/sparkline/jquery.sparkline.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/demo/dashboard.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			Dashboard.init();
		});
	</script>
</body>

</html>