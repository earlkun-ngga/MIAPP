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
include "theme/header.php"; ?>

<?php 
	
	$id_bar = $_POST['id_barang'];
	$queri = mysqli_query($con, "SELECT * FROM tbl_barang WHERE id_barang = '".$id_bar."'");


 ?>



<center><h4 style="">BARANG MASUK</h4></center>
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
		</tr>
		<?php $ai = 1; ?>
		<?php while($data = mysqli_fetch_array($queri)) { ?>
		<tr>
			<td><center><?= $ai++; ?></center></td>
			<td><center><?= $data['id_barang']; ?></center></td>
			<td><center><?= $data['nama_barang']; ?></center></td>
			<td><center><?= $data['jumlah_stok']; ?></center></td>
			<td><center><?= $data['satuan']; ?></center></td>
		</tr>
		<?php 

		$id_barang_sekarang = $data['id_barang'];
		$jumlah_stok_sekarang = $data['jumlah_stok'];
		} ?>



	</table>
	<br>
	<form action="barang_masuk_proses.php" method="post">
		<input type="hidden" name="id_barang" value="<?= $id_barang_sekarang; ?>" />
		<input type="hidden" name="stok_sekarang" value="<?= $jumlah_stok_sekarang; ?>" />

		<table>
			<tr>
				<td><font color="green">Tambah (+)</font></td>
				<td><input style="width: 20%;" type="text" name="jml_tambah" required /></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td> <textarea name="keterangan" placeholder="contohnya : penambahan dari pembelian barang" required></textarea></td>
			</tr>
		</table>
		
		<input type="submit" value="INPUT" />
	</form>
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>