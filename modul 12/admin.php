
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
		 

				<h2>DAFTAR BUKU</h2>
				<?php 
					$s_tahun="";
					$s_keyword="";
					$sort = 'ASC';
					$newsort = 'ASC';
					if (isset($_GET['search'])) {
						$s_tahun = $_GET['s_tahun'];
						$s_keyword = $_GET['s_keyword'];
					}
					if (isset($_GET['order'])) {
						$order = $_GET['order'];
						$sort = $_GET['sort'];
			
						if ($sort == 'DESC') {
							$newsort = 'ASC';
						}
						else{
							$newsort = 'DESC';
						}
					}else{
						$order = 'id_buku';
					}
				?>
		<form method="GET" action="" align="center">
			<select name="s_tahun" id="s_tahun">
				<option value="">Filter Tahun</option>
				<option value=2010
				<?php 
					if ($s_tahun==2010) {
						echo "selected";
					}
				?>>2010</option>
				<option value=2011 
				<?php 
					if ($s_tahun==2011) {
						echo "selected";
					}
				?>>2011</option>
				<option value=2012
				<?php 
					if ($s_tahun==2012) {
						echo "selected";
					}
				?>>2012</option>
				<option value=2013
				<?php 
					if ($s_tahun==2013) {
						echo "selected";
					}
				?>>2013</option>
				<option value=2014 
				<?php 
					if ($s_tahun==2014) {
						echo "selected";
					}
				?>>2014</option>
				<option value=2015
				<?php 
					if ($s_tahun==2015) {
						echo "selected";
					}
				?>>2015</option>
				<option value=2016
				<?php 
					if ($s_tahun==2016) {
						echo "selected";
					}
				?>>2016</option>
				<option value=2017
				<?php 
					if ($s_tahun==2017) {
						echo "selected";
					}
				?>>2017</option>
				<option value=2018
				<?php 
					if ($s_tahun==2018) {
						echo "selected";
					}
				?>>2018</option>
				<option value=2019
				<?php 
					if ($s_tahun==2019) {
						echo "selected";
					}
				?>>2019</option>
				<option value=2020
				<?php 
					if ($s_tahun==2020) {
						echo "selected";
					}
				?>>2020</option>
			</select>

				<input type="text" name="s_keyword" placeholder="Keyword..." id="s_keyword" value="<?php echo $s_keyword; ?>">

				<button id="search" name="search">Cari</button>
			</form>
			
			<table class="konten" border="1" align="center">
				<thead>
					<tr>
						<th>No</th>
						<th><a href="?order=judul&&sort=<?php echo $newsort; ?>">Judul Buku</a></th>
						<th><a href="?order=pengarang&&sort=<?php echo $newsort; ?>">Pengarang</a></th>
						<th><a href="?order=penerbit&&sort=<?php echo $newsort; ?>">Penerbit</a></th>
						<th><a href="?order=edisi&&sort=<?php echo $newsort; ?>">Edisi</a></th>
						<th><a href="?order=tahun&&sort=<?php echo $newsort; ?>">Tahun</a></th>
					</tr>		
				</thead>
				<tbody>
					<?php
						include "koneksi.php";
						$search_tahun = '%'.$s_tahun.'%';
						$search_keyword = '%'.$s_keyword.'%';
						$no = 1;

						$query = "SELECT * FROM buku WHERE tahun LIKE ? AND (judul LIKE ? OR pengarang LIKE ? OR edisi LIKE ? OR penerbit LIKE ?) ORDER BY $order $sort";

						$buku1 = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
						mysqli_stmt_bind_param($buku1, "sssss", $search_tahun, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
						mysqli_stmt_execute($buku1);
						$hasil = mysqli_stmt_get_result($buku1);

						if (mysqli_num_rows($hasil) > 0) {
							while ($rows = mysqli_fetch_assoc($hasil)) {
								$id_buku = $rows['id_buku'];
								$judul = $rows['judul'];
								$pengarang = $rows['pengarang'];
								$penerbit = $rows['penerbit'];
								$edisi = $rows['edisi'];
								$tahun = $rows['tahun'];
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $judul; ?></td>
							<td><?php echo $pengarang; ?></td>
							<td><?php echo $penerbit; ?></td>
							<td><?php echo $edisi; ?></td>
							<td><?php echo $tahun; ?></td>
						</tr>
						<?php } } else { ?>
						<tr>
							<td colspan="6" align="center">Tidak Ada Data Ditemukan</td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
			<table class="link"  > 	
				<tr>
					<td>
						<a href="form.php">INSERT</a>
					</td>
				</tr>
		 	</table>
		</div>
		
	</div>
	

	 

</body>
</html>