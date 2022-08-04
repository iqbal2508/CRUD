<html>
    <head>
        <title>Menampilkan Database web</title>
    </head>
    <body>
        <h2>ANGGOTA</h2>
<br/>
<a href="tambah.php">tambah data </a>
<br/>
<br/>
<table border="1">
<tr>
    <th>No</th>
    <th>NAMa</th>
    <th>No telp</th>
    <th>alamat</th>
    <th>Email</th>
</tr>

<?php
    //belajar koneksi database
    $servername = "localhost";
    $username= "root";
    $password= "";
    $database= "db_perpusweb";
    
    
    
    //membuat koneksi
    $connect = mysqli_connect($servername,$username,$password,$database);

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
        
    </tr>
    <?php
    }
    ?>

</table>
<h2>ADMIN</h2>
<br/>
<a href="tambah.php">tambah data </a>
<br/>
<br/>
<table border="1">
<tr>
    <th>No</th>
    <th>Username</th>
    <th>password</th>
    
</tr>

<?php
    //belajar koneksi database
    $servername = "localhost";
    $username= "root";
    $password= "";
    $database= "db_perpusweb";
    
    
    
    //membuat koneksi
    $connect = mysqli_connect($servername,$username,$password,$database);

    $no =1;
    $data = mysqli_query($connect,"SELECT * FROM admin  ORDER by id_admin");
    while($d = mysqli_fetch_array($data)) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['password']; ?></td>
        
        
    </tr>
    <?php
    }
    ?>

</table>
    </body>
    </html>
</html>
