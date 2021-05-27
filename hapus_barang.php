<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}
?><?php 

	include "koneksi.php";
	$id_barang = $_GET['id_barang'];
	$queri1 = mysqli_query($con, "DELETE FROM tbl_barang WHERE id_barang = '".$id_barang."'");
	$queri2 = mysqli_query($con, "DELETE FROM tbl_laporan_barang WHERE id_barang = '".$id_barang."'");
	header('Location:list_barang.php');

 ?>