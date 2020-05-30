
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<?php 
		session_start();
		include 'koneksi.php';
		if ($_SESSION['role']==""){
			header("location:login.php?pesan=gagal");
		}
		$user = $_SESSION['role'];
	?>


	<div class="atas">
			<nav class="navigasi">
			        <ul>
			            <li><a href="admin.php">Home</a></li>
			            <li><a href="#section2">Galeri Buku</a></li>
			            <li><a href="about.php">Tentang</a></li>
			            <li><a href="#section4">Form Pinjam Buku</a></li>
			            <li><a href="#section5">Edit Profil</a></li>
			            <li><a href="logout.php">Log Out</a></li>
			        </ul>
    			</nav>
		<table class="header">
			<tr>
				<td>
					<img src="gambar/logo.png">
				</td>
				<td>
					<h1>Selamat Datang Di Halaman Admin Perpustakaan</h1>
					<h2>TEKNIK INFORMATIKA</h2>
				</td>
			</tr>
		</table>
		<div class="tengah">
			<p><i>Halo <b><?php echo $_SESSION['user_name']; ?></b> Selamat datang di halaman <b><?php echo $_SESSION['role']; ?></b>.</i></p>
		  	
		  	<img class="perpus" src="gambar/perpus.jpeg">
		  	<table>
		  		<tr>
		  			<td>
		  				nama:
		  			</td>
		  			<td>
		  				perpustakaan ilkom
		  			</td>
		  		</tr>
		  	</table>
		</div>
		
	</div>
	

	 

</body>
</html>