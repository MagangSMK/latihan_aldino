<?php
// Create database connection using config file
include_once("config/config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM databuku ORDER BY idbuku ASC");
$result1 = mysqli_query($mysqli, "SELECT * FROM peminjam ORDER BY idpeminjam ASC");
$result2 = mysqli_query($mysqli, "SELECT * FROM transaksi ORDER BY idtransaksi ASC");
?>

 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<a href="public/databuku/add.php">Add New User</a><br/><br/>
 <h3>Tabel Buku</h3>
    <table width='80%' border=1>
 
    <tr>
        <th>idbuku</th> 
        <th>namabuku</th> 
        <th>pengarang</th> 
        <th>penerbit</th> 
        <th>jumlah</th> 
        <th>tahunterbit</th>
        <th>opsi</th>
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

<body>
<a href="public/peminjam/add.php">Add New User</a><br/><br/>
 <h3>Tabel Peminjaman</h3>
    <table width='80%' border=1>
 
    <tr>
        <th>idpeminjam</th> 
        <th>nama</th> 
        <th>jurusan</th> 
        <th>semester</th> 
        <th>angkatan</th> 
        <th>jumlah</th>
        <th>opsi</th>
    </tr>
    <?php  
    while($user_data1 = mysqli_fetch_array($result1)) {         
        echo "<tr>";
        echo "<td>".$user_data1['idpeminjam']."</td>";
        echo "<td>".$user_data1['nama']."</td>";
        echo "<td>".$user_data1['jurusan']."</td>";
        echo "<td>".$user_data1['semester']."</td>";
        echo "<td>".$user_data1['angkatan']."</td>";
        echo "<td>".$user_data1['jumlah']."</td>";
        echo "<td><a href='public/peminjam/edit.php?id=$user_data1[idpeminjam]'>Edit</a> | <a href='public/peminjam/delete.php?id=$user_data1[idpeminjam]'>Delete</a></td></tr>";  
    }
    ?>
    </table>
</body>

<body>
<a href="public/transaksi/add.php">Add New User</a><br/><br/>
 <h3>Tabel Transaksi</h3>
    <table width='80%' border=1>
 
    <tr>
        <th>idtransaksi</th> 
        <th>idpeminjam</th> 
        <th>nama</th> 
        <th>idbuku</th> 
        <th>namabuku</th> 
        <th>jumlahbuku</th>
        <th>opsi</th>
    </tr>
    <?php  
    while($user_data2 = mysqli_fetch_array($result2)) {         
        echo "<tr>";
        echo "<td>".$user_data2['idtransaksi']."</td>";
        echo "<td>".$user_data2['idpeminjam']."</td>";
        echo "<td>".$user_data2['nama']."</td>";
        echo "<td>".$user_data2['idbuku']."</td>";
        echo "<td>".$user_data2['namabuku']."</td>";
        echo "<td>".$user_data2['jumlahbuku']."</td>";
        echo "<td><a href='public/transaksi/edit.php?id=$user_data2[idtransaksi]'>Edit</a> | <a href='public/transaksi/delete.php?id=$user_data2[idtransaksi]'>Delete</a></td></tr>";  
    }
    ?>
    </table>
</body>
</html>