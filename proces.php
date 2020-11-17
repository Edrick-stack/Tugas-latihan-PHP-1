<?php
	if (isset($_GET['nama']) AND isset($_GET['email']))
	{
		$nama = $_GET['nama'];
		$email = $_GET['email'];
	}
	else
	{
		echo "Maaf, anda harus mengakses halaman ini dari form Login<br><br>";
	}
	if (!empty($nama) AND !empty($email))
	{
		echo "Nama: $nama <br /> Email: $email";
	}
	else
	{
		echo("Maaf, anda harus mengisi data");
	}
?>
