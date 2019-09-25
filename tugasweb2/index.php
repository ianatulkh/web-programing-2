<?php 
include 'koneksi.php';
 ?>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>
	<div class="judul bg-dark text-light p-3 mt-3 mb-3">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
	</div>

	<a href="./input.php" class="btn btn-outline-primary">tambah data</a>
 
	<h3>Data user</h3>
	<table border="1" class="table table-striped table-dark">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>	
			<th>Opsi</th>		
		</tr>
		<?php 
		$query_mysql = mysqli_query($koneksi, "SELECT * FROM data");
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['Nama']; ?></td>
			<td><?php echo $data['Username']; ?></td>
			<td><?php echo $data['Password']; ?></td>
			<td><?php echo $data['Email']; ?></td>
			<td>
				<a class="btn btn-outline-success text-light" href="edit.php?id=<?php echo $data['Id']; ?>">Edit</a> |
				<a class="btn btn-outline-danger text-light" href="hapus.php?id=<?php echo $data['Id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>