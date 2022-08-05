<html>
    <head>
        <title>
            tambah data buku
        </title>
    </head>
    <body>
        <h2>silahkah tanbah data buku</h2>
        <br>
        <form method="post" action="prosesb.php">
            <label for="id_katalog">Katalog</label>
            <input type="number" name="id_katalog" id="id_katalog">
            <br>
            <label for="judul_buku">Judul BUKU</label>
            <input type="text" name="judul_buku" id="judul_buku">
            <br>
            <label for="pengarang">pengarang</label>
            <input type="text" name="pengarang" id="pengarang">
            <br>
            <label for="thn_terbit">thn_terbit</label>
            <input type="date" name="thn_terbit" id="thn_terbit">
            <br>
            <label for="penerbit">penerbit</label>
            <input type="text" name="penerbit" id="penerbit">
            <br>
            <input type="submit" value="SIMPAN">
        </form>
    </body>
</html>
