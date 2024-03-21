<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Web Apps | Rekapitulasi Data Surat</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        table,
        th,
        td {
            border: 2px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
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

    <h5 style="text-align: center; margin-bottom: 20px;">Laporan Rekapitulasi Data Surat</h5>
    <center>
        <table>
            <thead>
                <tr style="border: 1px solid black; border-collapse: collapse;">
                    <th style="border: 1px solid black; border-collapse: collapse;">No</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Tanggal</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Surat Kelahiran</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Surat Kematian</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Surat Izin Usaha</th>
                    <th style="border: 1px solid black; border-collapse: collapse;">Surat Pindah</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $tanggal1 = $_POST['tanggal1'];
                $tanggal2 = $_POST['tanggal2'];
                $no = 1;
                // $result = $koneksi->query("SELECT * FROM data_penduduk WHERE status = 1");

                // if($result->num_rows > 0) :
                while (strtotime($tanggal1) <= strtotime($tanggal2)) {

                ?>
                    <tr style="border: 1px solid black; border-collapse: collapse;">
                        <td><?= $no++ ?></td>

                        <td><?= date("d-m-Y", strtotime($tanggal1)); ?></td>


                        <?php
                        $queryKelahiran = "SELECT COUNT(*) as total FROM data_kelahiran WHERE tanggal_surat = '$tanggal1'";
                        $resultKelahiran = $koneksi->query($queryKelahiran);
                        if ($resultKelahiran->num_rows > 0) {
                            $rowKel = $resultKelahiran->fetch_assoc();
                            echo "<td>" . $rowKel['total'] . "</td>";
                        } else {
                            echo "<td>0</td>";
                        }
                        ?>

                        <?php
                        $queryKematian = "SELECT COUNT(*) as total FROM data_kematian WHERE tanggal_surat = '$tanggal1'";
                        $resultKematian = $koneksi->query($queryKematian);
                        if ($resultKematian->num_rows > 0) {
                            $rowKem = $resultKematian->fetch_assoc();
                            echo "<td>" . $rowKem['total'] . "</td>";
                        } else {
                            echo "<td>0</td>";
                        }
                        ?>

                        <?php
                        $queryIzinUsaha = "SELECT COUNT(*) as total FROM data_izinusaha WHERE tanggal_surat = '$tanggal1'";
                        $resultIzinUsaha = $koneksi->query($queryIzinUsaha);
                        if ($resultIzinUsaha->num_rows > 0) {
                            $rowUsaha = $resultIzinUsaha->fetch_assoc();
                            echo "<td>" . $rowUsaha['total'] . "</td>";
                        } else {
                            echo "<td>0</td>";
                        }
                        ?>

                        <?php
                        $queryPindah = "SELECT COUNT(*) as total FROM data_pindah WHERE tanggal_surat = '$tanggal1'";
                        $resultPindah = $koneksi->query($queryPindah);
                        if ($resultPindah->num_rows > 0) {
                            $rowPind = $resultPindah->fetch_assoc();
                            echo "<td>" . $rowPind['total'] . "</td>";
                        } else {
                            echo "<td>0</td>";
                        }
                        ?>

                    </tr>

                <?php
                    $tanggal1 = date("Y-m-d", strtotime("+1 day", strtotime($tanggal1)));
                }
                // endif; 
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