 <?php  
	include "koneksi.php";

	session_start();

	$user_name = $_POST['user_name'];
	$password = $_POST['password'];
	
	$query = "SELECT * FROM user WHERE user_name='$user_name' AND password='$password'";

	$konek = mysqli_query($conn, $query);
	$login = mysqli_num_rows($konek);

	if ($login > 0) {
		$data = mysqli_fetch_assoc($konek);
		if ($data['role']=="admin") {
			$_SESSION['user_name'] = $data['user_name'];
			$_SESSION['role'] = "admin";
			header("location:admin.php");
		}else if($data['role']=="petugas"){
			$_SESSION['user_name'] = $data['user_name'];
			$_SESSION['role'] = "petugas";
			header("location:petugas.php");
		}else{
			header("location:login.php");
		}
	}else{
		header("location:login.php?pesan=gagal");
	}
?>