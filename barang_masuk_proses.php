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
	date_default_timezone_set('Asia/Bangkok');

		$id_barang = $_POST['id_barang'];
		$stok_lama = $_POST['stok_sekarang'];
		$jml_tambah = $_POST['jml_tambah'];
		$keterangan = $_POST['keterangan'];

		$total_stok = $stok_lama + $jml_tambah;

		 $waktu_aksi =  date('Y - m - d H:i:s');

		//update barang
		$queri1 = mysqli_query($con, "UPDATE tbl_barang SET jumlah_stok = '".$total_stok."' WHERE id_barang = '".$id_barang."' ");


		//input ke laporan
		$queri2 = mysqli_query($con, "INSERT INTO tbl_laporan_barang VALUES 

			('', '".$id_barang."', 'BARANG MASUK', '".$jml_tambah."', '".$keterangan."', '".$waktu_aksi."')
			");


		header("Location:laporan_barang.php");

	



?>