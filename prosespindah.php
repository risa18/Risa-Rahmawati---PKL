<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$no_surat = $_POST['no_surat'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pindah_dari = $_POST['pindah_dari'];
$alasan_pindah = $_POST['alasan_pindah'];
$alamat_baru = $_POST['alamat_baru'];
$id_pend = $_POST['id_penduduk'];
$tanggal_surat = date("Y-m-d");

if ($jns != 'edit') {
    $query = "INSERT INTO data_pindah (no_surat, nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, alamat, pindah_dari, alasan_pindah, alamat_baru, status, id_penduduk, tanggal_surat) 
    VALUES ('$no_surat', '$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$pindah_dari', '$alasan_pindah', '$alamat_baru', '1', '$id_pend', '$tanggal_surat')";
} else {
    $query = "UPDATE data_pindah SET nik = '$nik', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat', pindah_dari = '$pindah_dari', alasan_pindah = '$alasan_pindah', alamat_baru = '$alamat_baru', id_penduduk = '$id_pend' WHERE id = " . $_POST['id_pindah'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: approve.php?search_pindah&status_pindah=1");
    exit();
} else {
    header("Location: inputdatapindah.php?status=null");
    exit();
}

$koneksi->close();
