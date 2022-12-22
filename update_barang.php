<?php 

include 'koneksi.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$jumlah_barang = $_POST['jumlah_barang'];
$jenis_barang = $_POST['jenis_barang'];

$data = mysqli_query($koneksi,"UPDATE `managemen_barang` SET `nama_barang`='$nama_barang',`jumlah_barang`='$jumlah_barang',`jenis_barang`='$jenis_barang' WHERE `id` = '$id'");

    header ("location:daftar_barang.php");



 ?>