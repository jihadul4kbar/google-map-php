<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "jsoon";

	$koneksi_server = mysql_connect($host, $user, $pass);
	if(!$koneksi_server){
		die("Koneksi Ke Server Gagal<br>");
	}

	$koneksi_database = mysql_select_db($dbname);
	if(!$koneksi_database){
		die("Koneksi Ke Database Gagal");
	}
?>