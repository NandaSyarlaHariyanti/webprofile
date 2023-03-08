<div class="halaman">

<?php
	$nama = "Nanda Syarla Hariyanti";
	$tempatLahir = "Tulungagung";
	$tglLahir = '2003-04-09';
    $tglSekarang = date('Y-m-d');
	$usia = date_diff(date_create($tglLahir), date_create($tglSekarang))->y;
    $agama= "Islam";
	$alamat = "Jl. Panglima Sudirman, Ngantru, Tulungagung";
	$pendidikan = " <li> SMPN 2 Tulungagung </li>
					<li> SMK Telkom Malang </li>";

	echo "<h3>Nama  : ".$nama."<br>";
	echo "TTL	: " .$tempatLahir."<br>";
	echo "Tanggal : ".$tglLahir."<br>";
    echo "Usia	: " .$usia." tahun <br>";
	echo "Agama : " .$agama."<br>";
	echo "Alamat : " .$alamat."<br>";
	echo "Pendidikan :" .$pendidikan."<br> </h3>";

?>

</div>
    