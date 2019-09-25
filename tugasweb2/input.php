<?php 
include 'koneksi.php';

if(isset($_POST['save'])){
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
 
$query = "INSERT INTO `data` (`Id`, `Nama`, `Username`, `Password`, `Email`) VALUES (NULL, '$Nama', '$Username', '$Password', '$Email');";

if(mysqli_query($koneksi, $query)){
	header("location:index.php");
}else{


}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="judul bg-dark text-light p-3 mt-3 mb-3">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
	</div>
	
	<br/>
 
	<a href="index.php" class="btn btn-info">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" required></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username" required></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" required></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" required></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" name="save" class="btn btn-warning"></td>					
			</tr>				
		</table>
	</form>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>