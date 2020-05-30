<?php 
	if(isset($_POST['tombol'])){
		include 'koneksi.php';
		$form = mysqli_query($conn, "INSERT INTO buku VALUES
		(NULL, 	'".$judul=$_POST['judul']."',
				'".$pengarang=$_POST['pengarang']."',
				'".$penerbit=$_POST['penerbit']."',
				'".$edisi=$_POST['edisi']."',
				'".$tahun=$_POST['tahun']."',)");
		if($form){
			echo '<script>alert("Data Berhasil Disimpan");window.location="admin.php";</script>';
		}
		else{
			echo 'Input Gagal';
		}	
	}
?>