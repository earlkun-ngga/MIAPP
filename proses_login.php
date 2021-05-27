<?php 

	include "koneksi.php";

	$userin = $_POST['username'];
	$passin = $_POST['password'];


	$queri1 = mysqli_query($con, "SELECT * FROM tbl_user WHERE username = '".$userin."' AND password = '".$passin."'");


	while($data = mysqli_fetch_array($queri1))
	{
		$usrbener = $data['username'];
		$pssbener = $data['password'];
	}

	if($userin == $usrbener && $passin == $pssbener)
	{
		
		session_start();
		$_SESSION['username'] = $userin;
		header('Location:home.php');


	}else {

		header('Location:laman_login.php');
	}

 ?>