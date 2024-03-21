<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$no_surat = $_POST['no_surat'];
$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$tempat = $_POST['tempat'];
$nama_anak = $_POST['nama_anak'];
// $jenis_kelamin = $_POST['jenis_kelamin'];
$nama_ibu = $_POST['nama_ibu'];
$nama_ayah = $_POST['nama_ayah'];
$alamat = $_POST['alamat'];
$id_penduduk = $_POST['id_penduduk'];
$tanggal_surat = date("Y-m-d");

// if($jns != 'edit'){
//     $query = "INSERT INTO data_kelahiran (no_surat, hari, tanggal, tempat, nama_anak, jenis_kelamin, nama_ibu, nama_ayah, alamat, status) 
//     VALUES ('$no_surat', '$hari', '$tanggal', '$tempat', '$nama_anak', '$jenis_kelamin', '$nama_ibu', '$nama_ayah', '$alamat', '0')";
// } else {
//     $query = "UPDATE data_kelahiran SET hari = '$hari', tanggal = '$tanggal', tempat = '$tempat', nama_anak = '$nama_anak', jenis_kelamin = '$jenis_kelamin', nama_ibu = '$nama_ibu', nama_ayah = '$nama_ayah', alamat = '$alamat' WHERE id = " . $_POST['id_kelahiran'];
// }

if ($jns != 'edit') {
    $query = "INSERT INTO data_kelahiran (no_surat, hari, tanggal, tempat, nama_anak, nama_ibu, nama_ayah, alamat, status, id_penduduk, tanggal_surat) 
    VALUES ('$no_surat', '$hari', '$tanggal', '$tempat', '$nama_anak', '$nama_ibu', '$nama_ayah', '$alamat', '1', '$id_penduduk', '$tanggal_surat')";
} else {
    $query = "UPDATE data_kelahiran SET hari = '$hari', tanggal = '$tanggal', tempat = '$tempat', nama_anak = '$nama_anak', nama_ibu = '$nama_ibu', nama_ayah = '$nama_ayah', alamat = '$alamat', id_penduduk = '$id_penduduk' WHERE id = " . $_POST['id_kelahiran'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: approve.php?search_kelahiran&status_kelahiran=1");
    exit();
} else {
    header("Location: inputdatakelahiran.php?status=0");
    exit();
}

$koneksi->close();
