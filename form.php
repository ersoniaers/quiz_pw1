<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="login.php" method="POST">
		<table border="0">

			<tr>
				<td> username </td>
				<td> : </td> 
				<td>
					<input type="text" name="nim">
				</td>
			</tr>

			<tr>
				<td> password </td>
				<td> : </td> 
				<td>
					<input type="text" name="nama">
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td> 
				<td>
					<input type="submit" name="submit" value="login">
				</td>
			</tr>
			
		</table>
	</form>

	<?php

	if (isset($_POST['submit'])){
		if (mysqli_num_rows($result) > 0){
			while($rows= mysqli_fetch_assoc ($result)){
			header ('location : home.php');
		}
		else {
			echo "long gagal";
		}
		
	?>

</body>
</html>