<?php
		$id = $_GET['id'];

		include 'koneksi.php';
		$data = mysqli_query($koneksi,"SELECT * FROM `managemen_barang` WHERE `id` = $id"); 	
		$barang = mysqli_fetch_array($data);

		// echo $barang['nama_barang'];
		// header ('Location: daftar_barang.php');
	?>


	<form action="update_barang.php" method="POST">
		<h1>Update Data Barang</h1>
		<!-- <input type="text" name="id" hidden="" value=""> -->
		<input type="hidden" name="id" value="<?php echo $barang['id'] ?>">
		<p>Nama Barang</p>
		<input type="text" name="nama_barang" value="<?php echo $barang['nama_barang'] ?>">
		<br>
		<p>Jumlah Barang</p>
		<input type="text" name="jumlah_barang" value="<?php echo $barang['jumlah_barang'] ?>">
		<br>
		<p>Jenis_barang</p>
		<input type="text" name="jenis_barang" value="<?php echo $barang['jenis_barang'] ?>">
		<br>
		<input type="submit" value="kirim">
	</form>