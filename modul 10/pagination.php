<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pagination</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Jenis - Jenis Makanan </h2>

	<?php
	include "koneksi.php";

	$limit = 3;
	$halaman = @$_GET['halaman'];
	if (empty($halaman)) {
	 	$posisi = 0;
	 	$halaman = 1;
	 } 
	 else{
	 	$posisi = ($halaman-1) * $limit;
	 }

	 $query = "SELECT * FROM makanan LIMIT $posisi,$limit";
	 $tampil = mysqli_query($conn, $query);

	 echo "<table>
	 			<tr>
	 				<th>No</th>
	 				<th>Nama Makanan</th>
	 				<th>Jenis Makanan</th>
	 				<th>Asal Makanan</th>
	 			</tr>";

	 $no = $posisi+1;
	 while ($data = mysqli_fetch_array($tampil)) {
	 	echo "<tr>
	 			<td>$no</td>
	 			<td>$data[nama]</td>
	 			<td>$data[jenis]</td>
	 			<td>$data[asal]</td>
	 		</tr>";
	 	$no++;
	 }

	 echo "</table>";

	 $query2 = mysqli_query($conn, "SELECT * FROM makanan");
	 $jmldata = mysqli_num_rows($query2);
	 $jmlhalaman = ceil($jmldata/$limit);

	 echo "<br> Halaman : ";

	 for ($i=1; $i <=$jmlhalaman ; $i++) { 
	 	if ($i != $halaman) {
	 		echo "<a href=\"pagination.php?halaman=$i\">$i</a> | ";
	 	}
	 	else{
	 		echo "<b>$i</b> | ";
	 	}
	 }

	 echo "<p>Total Daftar Makanan : <b>$jmldata</b></p>";
	?>
</body>
</html>