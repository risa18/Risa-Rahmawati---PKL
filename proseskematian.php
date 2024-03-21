<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$no_surat = $_POST['no_surat'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tanggal = $_POST['tanggal'];
$sebab = $_POST['sebab'];
$id_pend = $_POST['id_penduduk'];
$tanggal_surat = date("Y-m-d");
// $nik = $_POST['nik'];
// $hari = $_POST['hari'];
// $tempat = $_POST['tempat'];
// $pelapor = $_POST['pelapor'];

if ($jns != 'edit') {
    $query = "INSERT INTO data_kematian (no_surat, nama, tanggal_lahir, jenis_kelamin, agama, tanggal_kematian, sebab_kematian, status, id_penduduk, tanggal_surat) 
    VALUES ('$no_surat', '$nama', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$tanggal', '$sebab', '1', '$id_pend', '$tanggal_surat')";
} else {
    $query = "UPDATE data_kematian SET nama = '$nama', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', tanggal_kematian = '$tanggal', sebab_kematian = '$sebab', id_penduduk = '$id_pend' WHERE id = " . $_POST['id_kematian'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: approve.php?search_kematian&status_kematian=1");
    exit();
} else {
    header("Location: inputdatakematian.php?status=null");
    exit();
}

$koneksi->close();
