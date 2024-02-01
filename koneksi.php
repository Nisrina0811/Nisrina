<?php
	$conn = mysqli_connect("localhost", "root", "", "amikpgri")or die ("Koneksi ke server Gagal (Username dan Password SALAH)");
	mysqli_select_db($conn,"amikpgri") or die ("Koneksi ke server Gagal (Database tidak terdaftar)");
?>
