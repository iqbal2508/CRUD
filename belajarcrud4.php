<?php
class manusia
{
    // properti class manusia
    var $nama;
    var $warna;
// fungsi dari manusia
function tampilkan_nama(){
    return "NAma saya IQBAL dipanggil slebew";
}
function tampilkan_warna(){
    return "Warna saya pink UWU";

}
}
// inisiasi class manusia
$orang = new manusia();

// panggil fungsi tampilkan nama
echo $orang->tampilkan_nama();
echo "</br>"
// panggil fungsi tampilkan warna
echo $orang->tampilkan_warna();
?>