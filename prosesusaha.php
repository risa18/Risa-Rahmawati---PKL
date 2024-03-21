<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$no_surat = $_POST['no_surat'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$nama_usaha = $_POST['nama_usaha'];
$id_pend = $_POST['id_penduduk'];
$tanggal_surat = date("Y-m-d");
// $jenis_usaha = $_POST['jenis_usaha'];
// $alamat_usaha = $_POST['alamat_usaha'];

// var_dump($_POST); die();

if ($jns != 'edit') {
    $query = "INSERT INTO data_izinusaha (no_surat, nik, nama, tanggal_lahir, jenis_kelamin, agama, alamat, pekerjaan, nama_usaha, status, id_penduduk, tanggal_surat) 
    VALUES ('$no_surat', '$nik', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$alamat', '$pekerjaan', '$nama_usaha', '1', '$id_pend', '$tanggal_surat')";
} else {
    $query = "UPDATE data_izinusaha SET nik = '$nik', nama = '$nama', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', alamat = '$alamat', pekerjaan = '$pekerjaan', nama_usaha = '$nama_usaha', id_penduduk = '$id_pend' WHERE id = " . $_POST['id_usaha'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: approve.php?search_usaha&status_usaha=1");
    exit();
} else {
    header("Location: inputdataizinusaha.php?status=null");
    exit();
}

$koneksi->close();
