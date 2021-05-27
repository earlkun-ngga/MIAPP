<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}


	$queri1 = mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '".$_SESSION['username']."'");

	while($datauser = mysqli_fetch_array($queri1))
	{
		$id_user = $datauser['id_user'];
		$username = $datauser['username'];
		$namdep = $datauser['nama_depan'];
		$nambel = $datauser['nama_belakang'];
		$jenkel = $datauser['jenis_kelamin'];
	}


 ?>
<!-- theming -->
<?php include "theme/header.php"; ?>
<center><h4 style="">INFORMASI KAMU : </h4></center>
<hr style="width: 30%;">
<center>
	<table>
		<tr>
			<td>ID User</td>
			<td><?= $id_user; ?></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><?= $username; ?></td>
		</tr>
		<tr>
			<td>Nama Depan</td>
			<td><?= $namdep; ?></td>
		</tr>
		<tr>
			<td>Nama Belakang</td>
			<td><?= $nambel; ?></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><?= $jenkel; ?></td>
		</tr>
	</table>
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>