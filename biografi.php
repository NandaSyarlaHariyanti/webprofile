<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<div class="halaman">

	<?php
		$nama = "Nanda Syarla Hariyanti";
		$tempatLahir = "Tulungagung";
		$tglLahir = '2003-04-09';
		$tglSekarang = date('Y-m-d');
		$usia = date_diff(date_create($tglLahir), date_create($tglSekarang))->y;
		$agama= "Islam";
		$alamat = "Jl. Panglima Sudirman, Ngantru, Tulungagung";
		$pendidikan = array ("SMPN 2 Tulungagung", "SMK Telkom Malang");

		echo "<h3>Nama : ".$nama."<br>";
		echo "TTL : " .$tempatLahir."<br>";
		echo "Tanggal : ".$tglLahir."<br>";
		echo "Usia: " .$usia." tahun <br>";
		echo "Agama: " .$agama."<br>";
		echo "Alamat: " .$alamat."<br>";
		echo "Pendidikan:". "<li>" .$pendidikan[0]."<br>". "<li>" .$pendidikan[1]."</h3>";

	?>

	
	

	</div>
    
</body>
</html>