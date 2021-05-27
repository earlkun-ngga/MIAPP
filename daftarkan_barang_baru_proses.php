<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}
?>


<?php 
	include "koneksi.php";

	$id_barang = $_POST['id_barang'];
	$nama_barang = $_POST['nama_barang'];
	$stok_awal = $_POST['stok_awal'];
	$satuan = $_POST['satuan'];
	$tanggal = date("Y - m - d");




	$queri1 = mysqli_query($con, "INSERT INTO tbl_barang VALUES('".$id_barang."', '".$nama_barang."', '".$satuan."', '".$stok_awal."', '".$tanggal."')");



	header('Location:list_barang.php');

 ?>