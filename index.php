<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
		<div class="profile">

		<table class="tabel">
                <tr>
                    <td rowspan="2">
                        <div class="sosmed">
                            <img src="profile.png" class="fotodiri">
							<div class = "grad">
								<ul>
										<a href="https://wa.me/+6285604520146" class = "fontsosmed">whatsapp
										</a>

								</ul>
							</div>
							<div class = "grad">
								<ul>
										<a href="https://instagram.com/syrla_nh?igshid=NmQ2ZmYxZjA=" class = "fontsosmed">Instagram</a>
								</ul>
							</div>
							<div class = "grad">
								<ul>
										<a href="https://www.linkedin.com/in/nanda-syarla-hariyanti-183849266" class = "fontsosmed">Linkedin</a>
								</ul>
							</div>
							<div class = "grad">
								<ul>
										<a href="https://github.com/NandaSyarlaHariyanti/" class = "fontsosmed">Github</a>
								</ul> 
								</div>
                        </div>
                        

                    </td>

                    <td >
                        <div class="bio">
                             <table class="fontbio">
                        <div class="content">
                            <div class="menu">
                            <ul>
                                <li><a href="index.php?page=home">HOME</a></li>
                                <li><a href="index.php?page=biografi">BIODATA</a></li>
                                <li><a href="index.php?page=about">TENTANG</a></li>
                                <li><a href="index.php?page=pengalaman">Pengalaman</a></li>
                            </ul>
                    	</div>

                    </td >

                    <div class="isi">
                        
	<?php 
	if(isset($_GET['page'])){
		$bagian = $_GET['page'];
 
		switch ($bagian) {
			case 'home':
				include "home.php";
				break;
			case 'biografi':
				include "biografi.php";
				break;
			case 'about':
				include "about.php";
				break;
			case 'pengalaman':
				include "pengalaman.php";
				break;			
			default:
				echo "<center><h3>Oops! Halaman itu tidak tersedia!</h3></center>";
				break;
		}
	}else{
		include "index.php";
	}
 
	 ?>
 
	</div>
</div>


</div>
</div>

</body>
</html>

</body>
