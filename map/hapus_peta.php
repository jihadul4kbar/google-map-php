<?php 
include "koneksi.php";
	$id = $_GET['id'];

	$data = mysql_query("DELETE FROM peta WHERE id='$id'") OR die (mysql_error());
	header("location:index.php");
?>