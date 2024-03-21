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
    <title>Web Apps | Rekapitulasi Data Kematian</title>
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
    <h5 style="text-align: center; margin-bottom: 20px;">Laporan Rekapitulasi Data Kematian</h5>
    <center>
        <table style="border: 1px solid black; border-collapse: collapse; width: 100%;" class="text-center">
            <thead>
                <tr style="border: 1px solid black; border-collapse: collapse;">
                    <th style="border: 1px solid black; border-collapse: collapse;">No</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">No Surat</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Nama</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Tanggal Lahir</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Jenis Kelamin</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Agama</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Tanggal Kematian</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Sebab Kematian</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $koneksi->query("SELECT * FROM data_kematian WHERE status = 1");
                $no = 1;
                if ($result->num_rows > 0) :
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr style="border: 1px solid black; border-collapse: collapse;">
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $no++ ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['no_surat'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['nama'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['tanggal_lahir'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['jenis_kelamin'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['agama'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['tanggal_kematian'] ?></td>
                            <td style="border: 1px solid black; border-collapse: collapse;"><?= $row['sebab_kematian'] ?></td>
                        </tr>

                <?php
                    }
                endif;
                ?>
            </tbody>

        </table>
    </center>

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