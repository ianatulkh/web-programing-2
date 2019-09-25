<?php 
include 'koneksi.php';

if(isset($_POST['save'])){
$Id = $_GET['id'];
$Nama = $_POST['Nama'];
$Username = $_POST['Username'];
$Password = $_POST['Password'];
$Email = $_POST['Email'];
 
$query = "UPDATE data SET nama='$Nama', Username='$Username', Password='$Password', Email='$Email' WHERE Id=$Id";

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
	<h3>Edit data</h3>
 
	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi, "SELECT * FROM data WHERE id='$id'");
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysql)){
	?>
	<form action="" method="post">		
		<table>
			<tr>
				<td>Id</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['Id'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="Nama" value="<?php echo $data['Nama'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username" value="<?php echo $data['Username'] ?>" required></td>					
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password" value="<?php echo $data['Password'] ?>" required></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="Email" value="<?php echo $data['Email'] ?>" required></td>
			</tr>			
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan" name="save" class="btn btn-warning"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>