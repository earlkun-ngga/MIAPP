<?php 

include "koneksi.php";

session_start();

if($_SESSION['username'] == null)
{
	header('Location:laman_login.php');
}
?>
<!-- theming -->
<?php 
include "koneksi.php"; 
include "theme/header.php"; ?>

<?php 

	$queri = mysqli_query($con, "SELECT * FROM tbl_barang");


 ?>



<center><h4 style="">BARANG MASUK</h4></center>
<hr style="width: 30%;">
<center>
	<br>
	Tentukan Id barang yang masuk
	<br>
	<form action="barang_masuk_input.php" method="post">
	<input style="width: 500px;" type="text" name="id_barang" placeholder="cari bedasarkan id barang"/>
	<input type="submit" value="CARI"/>
	</form>
</center>

<!-- theming -->
<?php include "theme/footer.php"; ?>