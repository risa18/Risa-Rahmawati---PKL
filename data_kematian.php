<?php
include "koneksi.php";

$id = $_POST['id'];

$query = mysqli_query($koneksi, "select * from data_penduduk where id='$id'");
$data = mysqli_fetch_array($query);
echo json_encode($data);

?>