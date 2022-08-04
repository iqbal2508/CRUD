<?php
//belajar koneksi database
$servername = "localhost";
$username= "root";
$password= "";
$database= "db_perpusweb";



//membuat koneksi
$connect = mysqli_connect($servername,$username,$password,$password);

//cek koneksi
if(!$connect){
    echo die("ORA KONEK :" . mysqli_connect_error());
}else{

    echo "koneq"; mysqli_close($connect);
}

?>