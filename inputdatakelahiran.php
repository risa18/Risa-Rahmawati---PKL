<?php
include 'koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// $no_surat = "SK-" . rand(10, 99) . rand(10, 99) . "/" . date('m/y');
// $hari = "";
// $tanggal = "";
// $tempat = "";
// $nama_anak = "";
// $nama_ibu = "";
// $nama_ayah = "";
// $alamat = "";
// $jnspost = 'insert';
// $idkel = '';

if ($_GET) {
    if ($_GET['status'] == '0') {

        $id_penduduk = $_GET['id_penduduk'];
        $resultp = $koneksi->query("SELECT * FROM data_penduduk WHERE id = $id_penduduk");
        $row1 = $resultp->fetch_assoc();
        $jk = $row1['jenis_kelamin'];

        $id_kelahiran = $_GET['id'];
        $result = $koneksi->query("SELECT * FROM data_kelahiran WHERE id = $id_kelahiran");
        $row = $result->fetch_assoc();
        $no_surat = $row['no_surat'];
        $hari = $row['hari'];
        $tanggal = $row['tanggal'];
        $tempat = $row['tempat'];
        $nama_anak = $row['nama_anak'];
        $nama_ibu = $row['nama_ibu'];
        $nama_ayah = $row['nama_ayah'];
        $alamat = $row['alamat'];
        $idkel = $row['id'];
        $jnspost = 'edit';
        $id_pend = $row['id_penduduk'];
    }

    if ($_GET['status'] == '2') {
        $id_penduduk = $_GET['id_penduduk'];
        $resultp = $koneksi->query("SELECT * FROM data_penduduk WHERE id = $id_penduduk");
        $row1 = $resultp->fetch_assoc();

        $no_surat = "SK-" . rand(10, 99) . rand(10, 99) . "/" . date('m/y');
        $hari = "";
        $tanggal = "";
        $tempat = "";
        $nama_anak = "";
        $jk = $row1['jenis_kelamin'];

        if ($row1['jenis_kelamin'] == 'Laki-Laki') {
            $id_pend = $row1['id'];
            $nama_ibu = "";
            $nama_ayah = $row1['nama'];
            $alamat = $row1['alamat'];
        } else {
            $id_pend = $row1['id'];
            $nama_ibu = $row1['nama'];
            $nama_ayah = "";
            $alamat = $row1['alamat'];
        }
        $idkel = '';
        $jnspost = 'insert';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Web Apps | Data Kelahiran</title>
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
                    <li class="has-sub">
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
            <h1 class="page-header">Tambah Data Kelahiran</h1>
            <!-- end page-header -->
            <?php
            if (isset($_GET['status'])) {
                $status = $_GET['status'];
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


            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-lg-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <h4 class="panel-title">Form Input Data Kelahiran</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            <form action="proseskelahiran.php" method="post">
                                <input type="hidden" name="id_kelahiran" value="<?= $idkel ?>">
                                <input type="hidden" name="jenis_post" value="<?= $jnspost ?>">
                                <input type="hidden" name="id_penduduk" value="<?php echo $id_pend ?>">
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">No. Surat</label>
                                    <div class="col-md-9">
                                        <input type="text" name="no_surat" class="form-control m-b-5" value="<?= $no_surat ?>" readonly />
                                    </div>
                                </div>

                                <?php
                                if ($_GET['status'] != 1) {
                                    if ($jk == 'Laki-Laki') {
                                ?>
                                        <div class="form-group row m-b-15">
                                            <label class="col-form-label col-md-3">Nama Ibu</label>
                                            <div class="col-md-9">
                                                <input name="nama_ibu" value="<?= $nama_ibu ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ibu" />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-form-label col-md-3">Nama Ayah</label>
                                            <div class="col-md-9">
                                                <input name="nama_ayah" value="<?= $nama_ayah ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ayah" readonly />
                                            </div>
                                        </div>
                                    <?php } else {
                                    ?>
                                        <div class="form-group row m-b-15">
                                            <label class="col-form-label col-md-3">Nama Ibu</label>
                                            <div class="col-md-9">
                                                <input name="nama_ibu" value="<?= $nama_ibu ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ibu" readonly />
                                            </div>
                                        </div>
                                        <div class="form-group row m-b-15">
                                            <label class="col-form-label col-md-3">Nama Ayah</label>
                                            <div class="col-md-9">
                                                <input name="nama_ayah" value="<?= $nama_ayah ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ayah" />
                                            </div>
                                        </div>
                                    <?php
                                    }
                                } else {
                                    ?>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Nama Ibu</label>
                                        <div class="col-md-9">
                                            <input name="nama_ibu" value="<?= $nama_ibu ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ibu" readonly />
                                        </div>
                                    </div>
                                    <div class="form-group row m-b-15">
                                        <label class="col-form-label col-md-3">Nama Ayah</label>
                                        <div class="col-md-9">
                                            <input name="nama_ayah" value="<?= $nama_ayah ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Ayah" readonly />
                                        </div>
                                    </div>
                                <?php } ?>


                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">Alamat</label>
                                    <div class="col-md-9">
                                        <textarea name="alamat" value="<?= $alamat ?>" class="form-control" rows="3" readonly><?= $alamat ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">Hari</label>
                                    <div class="col-md-9">
                                        <select name="hari" value="<?= $hari ?>" class="form-control">
                                            <option value="Senin" <?= ($hari == 'Senin') ? 'selected' : '' ?>>Senin</option>
                                            <option value="Selasa" <?= ($hari == 'Selasa') ? 'selected' : '' ?>>Selasa</option>
                                            <option value="Rabu" <?= ($hari == 'Rabu') ? 'selected' : '' ?>>Rabu</option>
                                            <option value="Kamis" <?= ($hari == 'Kamis') ? 'selected' : '' ?>>Kamis</option>
                                            <option value="Jumat" <?= ($hari == 'Jumat') ? 'selected' : '' ?>>Jumat</option>
                                            <option value="Sabtu" <?= ($hari == 'Sabtu') ? 'selected' : '' ?>>Sabtu</option>
                                            <option value="Minggu" <?= ($hari == 'Minggu') ? 'selected' : '' ?>>Minggu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">Tanggal</label>
                                    <div class="col-md-9">
                                        <input name="tanggal" type="date" value="<?= $tanggal ?>" class="form-control m-b-5" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">Tempat</label>
                                    <div class="col-md-9">
                                        <input name="tempat" value="<?= $tempat ?>" type="text" class="form-control m-b-5" placeholder="Masukan Tempat Lahir" />
                                    </div>
                                </div>
                                <div class="form-group row m-b-15">
                                    <label class="col-form-label col-md-3">Nama Anak</label>
                                    <div class="col-md-9">
                                        <input name="nama_anak" value="<?= $nama_anak ?>" type="text" class="form-control m-b-5" placeholder="Masukan Nama Anak" />
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-sm btn-primary m-r-5">Simpan</button>
                                <a href="index.php" class="btn btn-sm btn-default">Kembali</a>
                            </form>
                        </div>
                        <!-- end panel-body -->
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
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