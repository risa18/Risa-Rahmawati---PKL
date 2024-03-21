<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Web Apps | Surat Kelahiran</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        /* table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        } */
    </style>
</head>

<body>
    <img src="assets/img/logo/mainlogo.jpeg" alt="logo" align="left" width="120" height="120">
    <img src="assets/img/logo/pelengkap.png" alt="pelengkap" align="right" width="120" height="120">
    <p align="center">
        <br>
        <b>
            <br>
            <font size="5">PEMERINTAH KABUPATEN PULANG PISAU</font><br>
            <font size="5">DESA JABIREN</font> <br>
            <font size="2">Desa Jabiren, Kabupten Pulang Pisau Kalimatan Tengah KM.56 Kode Pos. 74811</font><br>
            <!-- <font size="2">Telpon/Fax: (0511)3363690, (0511)3365592</font><br> -->
            <br>
            <hr size="3px" color="black">
        </b>
    </p>

    <hr>
    <!-- <h3>Laporan Data SK Kematian</h3> -->
    <?php

    $no = 1;
    $id = $_GET['id'];
    $result = $koneksi->query("SELECT * FROM data_kelahiran JOIN data_penduduk ON data_kelahiran.id_penduduk = data_penduduk.id WHERE data_kelahiran.id = $id");
    $no = 1;
    if ($result->num_rows > 0) :
        while ($row = $result->fetch_assoc()) {
    ?>

            <h4 style="text-align: center; margin-bottom: 10px;"><u>Surat Kelahiran</u></h4>
            <p style="text-align: center; margin-bottom: 30px;">Nomor : <?= $row['no_surat'] ?></p>
            <justify>
                <p> &emsp; Yang bertanda tangan dibawah, dengan ini menerangkan bahwa :</p>
            </justify>

            <p>&emsp; &emsp; &emsp; Hari &emsp; &emsp; &emsp; &emsp; &emsp; : <?= $row['hari'] ?></p>
            <p>&emsp; &emsp; &emsp; Tanggal &emsp; &emsp; &emsp; &emsp;: <?= date('d M Y', strtotime($row['tanggal'])) ?></p>
            <p>&emsp; &emsp; &emsp; Tempat &emsp; &emsp; &emsp; &emsp; : <?= $row['tempat'] ?></p>
            <justify>

                <center>
                    <p> &emsp;
                        <b>Telah dilahirkan seorang anak bernama :</b>
                    </p>
                    <p> &emsp;
                        <b><u><?= $row['nama_anak'] ?></u></b>
                    </p>
                </center>
            </justify>
            <!-- <p>&emsp; &emsp; &emsp; Jenis Kelamin &emsp; &emsp; &ensp; : <?= $row['jenis_kelamin'] ?></p>
            <p>&emsp; &emsp; &emsp; Agama &emsp; &emsp; &emsp; &emsp; &emsp; : <?= $row['agama'] ?></p>
            <p>&emsp; &emsp; &emsp; Pekerjaan &emsp; &emsp; &emsp; &emsp; : <?= $row['pekerjaan'] ?></p>
            <p>&emsp; &emsp; &emsp; Status Perkawinan &emsp; : <?= $row['status_perkawinan'] ?></p>
            <p>&emsp; &emsp; &emsp; Alamat &emsp; &emsp; &emsp; &emsp; &emsp; : <?= $row['alamat'] ?></p> -->

            <justify>
                <p> &emsp;
                    Dari pasangan yang diketahui sebagai berikut :
                </p>
                <p>&emsp; &emsp; &emsp; Nama Ayah &emsp; &emsp;: <?= $row['nama_ayah'] ?></p>
                <p>&emsp; &emsp; &emsp; Nama Ibu &emsp; &emsp; &nbsp;: <?= $row['nama_ibu'] ?></p>
                <p>&emsp; &emsp; &emsp; Alamat &emsp; &emsp; &emsp; : <?= $row['alamat'] ?></p>

                <p> &emsp; Demikian <b>SURAT KELAHIRAN</b> ini kami buat atas dasar yang sebenarnya kepada pihak terkait mohon maklum adanya.</p>
                <br />
            </justify>


    <?php
        }
    endif;
    ?>


    <div class="text-right mt-5">
        <p>Jabiren Raya, <?= date('d-m-Y') ?></p>
        <p style="margin-right: 26px">Kepala Desa</p>
        <br><br><br>
        <div style="margin-right: 22px">Asio, H. Unil</div>
        <p>NIAP: 16100110711</p>
    </div>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
    <script src="assets/plugins/bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>