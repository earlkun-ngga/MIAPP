
<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}
?><!-- theming -->
<?php 
include "koneksi.php"; 
include "theme/header.php"; ?>

<?php 
	
	$id_bar = $_POST['id_barang'];
	$queri = mysqli_query($con, "SELECT * FROM tbl_barang WHERE id_barang = '".$id_bar."'");


 ?>



<center><h4 style="">LIST BARANG YANG TERDAFTAR</h4></center>
<hr style="width: 30%;">
<center>
	<br>
	<a href="list_barang.php">Kembali</a>
	<br>
	<br>
	<table border="2">
		<tr><center>
			<td><center><b>No</b></center></td>
			<td><center><b>Kode Barang</b></center></td>
			<td><center><b>Nama Barang</b></center></td>
			<td><center><b>Jumlah Stok</b></center></td>
			<td><center><b>Satuan</b></center></td>
			<td><center><b>Tanggal barang di daftarkan</b></center></td>
		</tr>
		<?php $ai = 1; ?>
		<?php while($data = mysqli_fetch_array($queri)) { ?>
		<tr>
			<td><center><?= $ai++; ?></center></td>
			<td><center><?= $data['id_barang']; ?></center></td>
			<td><center><?= $data['nama_barang']; ?></center></td>
			<td><center><?= $data['jumlah_stok']; ?></center></td>
			<td><center><?= $data['satuan']; ?></center></td>
			<td><center><?= $data['tanggal_barang_didaftarkan']; ?></center></td>
		</tr>
		<?php } ?>
	</table>
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>