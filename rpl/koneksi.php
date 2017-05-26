<?php

	$server   = "localhost";
	$database = "5-in-1-delivery";
	$username = "root";
	$password = "";

	$koneksi = new mysqli ($server, $username, $password, $database);

	if($koneksi->connect_error){
		die("Koneksi gagal");
	}
?>