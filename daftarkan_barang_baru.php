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



<center><h4 style="">DAFTARKAN BARANG BARU</h4></center>
<hr style="width: 30%;">
<form action="daftarkan_barang_baru_proses.php" method="post">
<center>
	<table>
		<tr>
			<td>ID Barang : </td>
			<td><input type="text" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama Barang : </td>
			<td><input type="text" name="nama_barang"></td>
		</tr>
		<tr>
			<td>Jumlah Stok Awal : </td>
			<td><input type="text" name="stok_awal"></td>
		</tr>
			<tr>
			<td>Satuan: </td>
		<td>
				<select name="satuan">
					<option value="PCS">PCS</option>
					<option value="Meter">Meter</option>
					<option value="Kg">Kg</option>
				</select>
		</td>
		</tr>

		<tr>
			<td colspan="2"><center><input type="submit" value="INPUT"></center></td>
		</tr>

	</table>


</center>
</form>
<br>
<center><a href="list_barang.php">Kembali ke List Barang</a></center>
<!-- theming -->
<?php include "theme/footer.php"; ?>