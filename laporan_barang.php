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

	$queri = mysqli_query($con, "SELECT * FROM tbl_laporan_barang ORDER BY id_laporan DESC");


 ?>



<center><h4 style="">LAPORAN BARANG (MASUK - KELUAR)</h4></center>
<hr style="width: 30%;">
<center>
	<br>
	<table border="2">
		<tr><center>
			<td><center><b>No</b></center></td>
			<td><center><b>ID Laporan Barang </b></center></td>
			<td><center><b>ID Barang </b></center></td>
			<td><center><b>Jenis Aksi </b></center></td>
			<td><center><b>Jumlah </b></center></td>
			<td><center><b>Keterangan </b></center></td>
			<td><center><b>Waktu Detail </b></center></td>
		</tr>
		<?php $ai = 1; ?>
		<?php while($data = mysqli_fetch_array($queri)) { ?>
		<tr>
			<td><center><?= $ai++; ?></center></td>
			<td><center><?= $data['id_laporan']; ?></center></td>
			<td><center><?= $data['id_barang']; ?></center></td>
			<?php 
			if($data['jenis_aksi'] == 'BARANG MASUK') {$wrn = 'green';} else {$wrn = 'orange';} ?>
			<td><center><font color="<?= $wrn; ?>"><?= $data['jenis_aksi']; ?></font></center></td>
			<td><center><?= $data['jumlah']; ?></center></td>
			<td><center><?= $data['keterangan']; ?></center></td>
			<td><center><?= $data['waktu_aksi']; ?></center></td>

		</tr>
		<?php } ?>
	</table>
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>