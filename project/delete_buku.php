<?php
	include "koneksi.php";

	$id_buku = $_GET['id_buku'];
	$query = mysqli_query($conn, "DELETE FROM buku Where id_buku='$id_buku'");
	if($query){
		echo '<script>alert("Data Berhasil Dihapus");window.location="admin.php";</script>';
	}
	else{
		echo '<script>alert("Data Gagal Dihapus");window.location="admin.php";</script>';
	} 
?>