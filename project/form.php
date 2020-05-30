 
<html>
<head>
	<title>tambah</title>
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

	<div class="box-form">
		<div class="title-form">
			Tambah Buku
		</div>
		<div class="content-form">
			<form action="insert.php" method="post">
				Judul Buku<br>
				<input type="text" name="judul" /><br>
				Pengarang<br>
				<input type="text" 	name="pengarang" /><br>
				Penerbit<br>
				<input type="text" 	name="penerbit" /><br>
				Edisi<br>
				<input type="text" name="edisi"/><br>
				Tahun<br>
				<input type="text" name="tahun"/><br> 
				<input type="submit" name="tombol" value="Daftar" />
			</form>
		</div>
	</div>

</body>
</html>