<?php
// Create database connection using config file
include_once("config/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM databuku ORDER BY idbuku DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="public/databuku/add.php">Add New User</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>idbuku</th> <th>namabuku</th> <th>pengarang</th> <th>penerbit</th> <th>jumlah</th> <th>tahunterbit</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['idbuku']."</td>";
        echo "<td>".$user_data['namabuku']."</td>";
        echo "<td>".$user_data['pengarang']."</td>";
        echo "<td>".$user_data['penerbit']."</td>";
        echo "<td>".$user_data['jumlah']."</td>";
        echo "<td>".$user_data['tahunterbit']."</td>";
        echo "<td><a href='public/databuku/edit.php?id=$user_data[idbuku]'>Edit</a> | <a href='public/databuku/delete.php?id=$user_data[idbuku]'>Delete</a></td></tr>";  
    }
    ?>
    </table>
</body>
</html>