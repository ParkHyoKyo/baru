 <?php 
	include 'koneksi.php';

	$nama_barang = $_POST['nama_barang'];
	$jumlah_barang = $_POST['jumlah_barang'];
	$jenis_barang = $_POST['jenis_barang'];

	$data = mysqli_query($koneksi,"INSERT INTO  `managemen_barang`(`nama_barang`, `jumlah_barang`, `jenis_barang`) VALUES ('$nama_barang','$jumlah_barang','$jenis_barang')"); 

	header ("location:daftar_barang.php");




 ?>
