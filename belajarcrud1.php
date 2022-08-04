<html>
<head>
    <title>Belajar Get dan Post</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nama">nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="alamat">alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <input type="submit" name="submit" value="submit">
</form>
<?php
// belajar get dan post 
// GET = data di oper ke web dengan secara terlihat (di url)
// POST = data di oper ke web dengan secara tidak terlihat (di url)
if ($_POST){
    echo "Nama : " . $_POST["nama"];
    echo "</br>";
    echo "Alamat : " . $_POST["alamat"];
}
?>
</body>
    </html>


