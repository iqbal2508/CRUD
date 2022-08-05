<html>
    <head>
        <title>Menampilkan Database web</title>
    </head>
    <body>
        <h2>ANGGOTA</h2>

<a href="tambah.php">tambah data </a>
<table border="1">
<tr>
    <th>No</th>
    <th>NAMa</th>
    <th>No telp</th>
    <th>alamat</th>
    <th>Email</th>
    <th>Password</th>
</tr>

<?php
include 'koneksi.php';
    $no =1;
    $data = mysqli_query($connect,"SELECT * FROM anggota  ORDER by id_anggota");
    while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['no_telp']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['password']; ?></td>
        
    </tr>
    <?php
    }
    ?>

</table>
<h2>ADMIN</h2>
<a href="tambaha.php">tambah data </a>
<table border="1">
<tr>
    <th>No</th>
    <th>Id admin</th>
    <th>username</th>
    
</tr>

<?php

    $no =1;
    $data = mysqli_query($connect,"SELECT * FROM admin  ORDER by id_admin");
    while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['id_admin']; ?></td>
        <td><?php echo $d['username']; ?></td>
        
        
    </tr>
    <?php
    }
    ?>

</table>
<h2>BUKU</h2>
<a href="tambahb.php">tambah data </a>
<table border="1">
<tr>
    <th>No</th>
    <th>Id KATAlog</th>
    <th>JUDUL buku</th>
    <th>pengarang</th>
    <th>tahun terbit</th>
    <th>penerbit</th>
</tr>

<?php
   

    $no =1;
    $data = mysqli_query($connect,"SELECT * FROM book ORDER by id_buku");
    while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['id_katalog']; ?></td>
        <td><?php echo $d['judul_buku']; ?></td>
        <td><?php echo $d['pengarang']; ?></td>
        <td><?php echo $d['thn_terbit']; ?></td>
        <td><?php echo $d['penerbit']; ?></td>
        
    </tr>
    <?php
    }
    ?>

</table>
    </body>
    </html>
</html>
