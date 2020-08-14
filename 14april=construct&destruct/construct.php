<?php
class  handphone {
    var $jml_pulsa;

function __construct($pulsa){
    $this->jml_pulsa = $pulsa;
}

function mengirim_pesan($tarif, $jml_pesan=1){
    $this->jml_pulsa -=$tarif * $jml_pesan;
}

function __destruct()
{
    echo "jumlah pulsa sekarang : ";
    echo $this->jml_pulsa;
}

}

$hp_lukman = new handphone(2000);

echo "jumlah pulsa sekarang : ";
echo $hp_lukman->jml_pulsa;
echo "<br>";

$hp_lukman -> mengirim_pesan(150);