<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];
$status_perkawinan = $_POST['status_perkawinan'];
$pendidikan = $_POST['pendidikan'];
$id_pengguna = $_POST['id_pengguna'];

// $foto = $_FILES['foto']['name'];
// $foto_temp = $_FILES['foto']['tmp_name'];
// $folder_upload = "upload/";
// if($foto != ""){
//     $setfoto = ", foto = '$foto' ";
// } else {
//     $setfoto = '';
// }

// move_uploaded_file($foto_temp, $folder_upload . $foto);

// var_dump($setfoto); die();
if($jns != 'edit'){
    $query = "INSERT INTO data_penduduk (nik, nama, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, pekerjaan, alamat, status_perkawinan, pendidikan, status, id_pengguna) VALUES ('$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$agama', '$pekerjaan', '$alamat', '$status_perkawinan', '$pendidikan', '0', '$id_pengguna')";
} else {
    $query = "UPDATE data_penduduk SET nik = '$nik', nama = '$nama', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', jenis_kelamin = '$jenis_kelamin', agama = '$agama', pekerjaan = '$pekerjaan', alamat = '$alamat', status_perkawinan = '$status_perkawinan', pendidikan = '$pendidikan', id_pengguna = '$id_pengguna' WHERE id = " . $_POST['id_penduduk'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: inputdatapenduduk.php?status=1");
    exit();
} else {
    header("Location: inputdatapenduduk.php?status=null");
    exit();
}

$koneksi->close();
?>