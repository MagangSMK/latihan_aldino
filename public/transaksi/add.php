<?php
include_once("../../config/config.php");
?>
<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="../../index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>idtransaksi</td>
				<td><input type="text" name="idtransaksi"></td>
			</tr>
			<tr> 
				<td>idpeminjam</td>
				<td><input type="text" name="idpeminjam"></td>
			</tr>
			<tr> 
				<td>nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
            <tr>
                <td>idbuku</td>
                <td><input type="text" name="idbuku"></td>
            </tr>
            <tr>
                <td>namabuku</td>
                <td><input type="text" name="namabuku"></td>
            </tr>
            <tr>
                <td>jumlahbuku</td>
                <td><input type="text" name="jumlahbuku"></td>
            </tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
</html>