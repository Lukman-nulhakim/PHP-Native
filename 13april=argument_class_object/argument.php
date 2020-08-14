<?php

class handphone{
    var $jml_pulsa;

    function mengirim_pesan($tarif, $jml_pesan=1){
        $this->jml_pulsa -= $tarif*$jml_pesan;
    }

    function minta_pulsa($vocer){
        $this->jml_pulsa += $vocer;
    }
}

$hp_lukman = new handphone();
$hp_lukman->jml_pulsa = 2000;

echo "Jumlah pulsa lukman = ";
echo $hp_lukman->jml_pulsa;
echo "<br>";

$hp_lukman->mengirim_pesan(150);

echo "Jumlah pulsa sekarang = ";
echo $hp_lukman->jml_pulsa;
echo "<br>";

$hp_lukman->mengirim_pesan(100, 2);

echo "Jumlah pulsa sekarang = ";
echo $hp_lukman->jml_pulsa;
echo "<br>";


$hp_lukman->minta_pulsa($vocer=5000);

echo "Dapat tambahan pulsa 5000 jadi total = ";
echo $hp_lukman->jml_pulsa;
