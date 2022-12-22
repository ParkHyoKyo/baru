<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<a href="tambah_barang.php">Tambah Barang</a><br><br>
	<!-- <table border="1">
		<tr>
			<td>Nama barang</td>
			<td>Stok Barang</td>
			<td>Jumlah Barang</td>
			<td>Aksi</td>
		</tr> -->
		
		<?php

		include 'koneksi.php'; 
			$data = mysqli_query($koneksi, "SELECT * FROM `managemen_barang`");

			foreach ($data as $data){
			echo $data['nama_barang'];
			echo $data['jumlah_barang'];
			echo $data['jenis_barang'];
		?>
			<a href="delete_barang.php?id=<?php echo $data['id']; ?>">hapus</a>
			<a href="edit_barang.php?id=<?php echo $data['id']; ?>">edit</a><br>
		



		<?php 	
		 	}
		?>

	<!-- </table> -->




</body>
</html>