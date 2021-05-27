<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}



 ?>
<!-- theming -->
<?php include "theme/header.php"; ?>
<center><h4 style="">TENTANG APLIKASI INI</h4></center>
<hr style="width: 30%;">
<center>
	MIA = My Inv (Inventory) APP adalah sebuah aplikasi web yang berguna untuk keperluan inventaris barang anda pada toko, pabrik atau personal !!!
	<br>
	<br>
	Developer / Programmer : Muhammad Erlangga Sapta Ajie<br>
	NIM : 181011402358<br>
	KELAS : 06 TPLE 024<br>
	Universitas Pamulang
	<BR>
	<br>
	Sekian (Ini versi 1.0)
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>