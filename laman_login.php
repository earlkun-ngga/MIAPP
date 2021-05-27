

<?php include "theme/header_laman_login.php"; ?>

<form action="proses_login.php" method="post">	

<table>	

		<tr>
			<td>Username : </td>
			<td><input type="text" name="username" required/></td>
		</tr>
		<tr>
			<td>Password : </td>
			<td><input type="password" name="password" required/></td>
		</tr>
		<tr>
			<td colspan="2">
				<center><input type="submit" value="LOGIN">	</center>
			</td>
		</tr>

</table>

</form>

<hr style="width: 70%;">	
<?php include "theme/footer.php"; ?>