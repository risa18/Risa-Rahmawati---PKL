<?php
include 'koneksi.php';

$jns = $_POST['jenis_post'];
$username = $_POST['username'];
$password = $_POST['password'];
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
    $query = "INSERT INTO data_pengguna (user, password, level) VALUES ('$username', '$password', 'Penduduk')";
} else {
    $query = "UPDATE data_pengguna SET user = '$username', password = '$password' WHERE id = " . $_POST['id'];
}

if ($koneksi->query($query) === TRUE) {
    header("Location: inputdatapengguna.php?status=1");
    exit();
} else {
    header("Location: inputdatapengguna.php?status=null");
    exit();
}

$koneksi->close();
?>