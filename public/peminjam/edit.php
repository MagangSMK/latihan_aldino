<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$idpeminjam=$_POST['idpeminjam'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
    $semester=$_POST['semester'];
    $angkatan=$_POST['angkatan'];
    $jumlah=$_POST['jumlah'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET idpeminjam='$idpeminjam',nama='$nama',jurusan='$jurusan',semester='$semester',angkatan='$angkatan',jumlah='$jumlah' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $idpeminjam = $user_data['idpeminjam'];
    $nama = $user_data['nama'];
    $jurusan = $user_data['jurusan'];
    $semester = $user_data['semester'];
    $angkatan = $user_data['angkatan'];
    $jumlah = $user_data['jumlah'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../../index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>idpeminjam</td>
				<td><input type="text" name="idpeminjam" value=<?php echo $idpeminjam;?>></td>
			</tr>
			<tr> 
				<td>namespace</td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>jurusan</td>
				<td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
			</tr>
            <tr>
                <td>semester</td>
				<td><input type="text" name="semester" value=<?php echo $semester;?>></td>
            </tr>
            <tr>
                <td>angkatan</td>
				<td><input type="text" name="angkatan" value=<?php echo $angkatan;?>></td>
            </tr>
            <tr>
                <td>jumlah</td>
				<td><input type="text" name="jumlah" value=<?php echo $jumlah;?>></td>
            </tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>