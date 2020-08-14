<?php 

$number = 'a';
switch($number){
    case 'a';
        echo 'nilainya itu a';
    break;
    case 'b';
        echo 'nilainya itu bukan a, tapi b';
    break;
    default:
        echo 'nilainya bukan kedua itu';
    break;
}
// DIBACA
// switch (pilihannya)
// kalau nilai pilihannya 'a' : echo
// kalau nilai pilihannya bukan termasuk keduanya dia masuk ke default

//EXAMPLE lainnya
$weather = 'sunny';


switch(true){
    case $weather == 'sunny' :
        $color = 'blue';
    break;
    case $weather == 'cloudy' :
        $color = 'grey';
    break;
    default:
        $color = 'black';
    break;
}
echo '<br>'.$color;