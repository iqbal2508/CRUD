<?php
class mobil
{
    //properti dari mobil
    var $warna;
    var $merek;
    var $ukuran;

    //membuat operasi mobil
    function maju($move_forward){
$move_forward = "Gas";
    }

    function mundur(){
$move_backward = "rem";
    }
}
// inisiasi (panggil objek melalui  class)
$kendaraan = new mobil();
echo $kendaraan->maju($move_forward);

?>
