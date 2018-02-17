<?php 
include "koneksi.php";
$nama = $_POST['nama'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];

mysql_query("INSERT INTO peta VALUES ('','$nama','$lat','$lng')");

header("location:index.php");
?>