<?php
	include "koneksi.php";
	$no = $_POST['id_buku'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $edisi = $_POST['edisi'];
    $tahun = $_POST['tahun'];

    $sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku='$id_buku'");
	$data = mysqli_fetch_array($sql);
	$id = $data['id_buku'];

    $query = mysqli_query($conn, "UPDATE buku SET id_buku='$no', judul='$judul', pengarang='$pengarang', edisi='$edisi', penerbit='$penerbit', tahun='$tahun', WHERE id_buku='$no'");

    if($query){
		echo '<script>alert("Data Berhasil Disimpan");window.location="admin.php";</script>';
	}
	else{
		echo '<script>alert("Data Gagal Disimpan");window.location="admin.php";</script>';
	}
?>