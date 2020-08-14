<?php 

// Tipe - tipe data di php
// String
// Boelean
// Null
// Array
// Integer

$nama = 'lukman';
$nama1 = 'nulhakim';

echo '<br> hello gengs, ini file php saya';
echo $nama . ' ' . $nama1 . '<br>';

// String itu gabisa mengoperasikan aritmatika

$number = '1';
$number1 = '2';

echo $number . '+' . $number1 . '<br>';
$message = "it's a lovely day";
$message1 = 'it\'s a lovely day';
$message2 = '"it\'s a lovely day"';

echo $message . '<br>';
echo $message1 . '<br>'; // concatination
echo $message2 . '<br>';

echo "<a href='http://www.google.com'> link </a> <br>";

// Null

$name2 = null;
echo $name2;

$test = '123';
echo $test . '<br>';
// unset($test);
// echo $test;

// $test = ; // unset
// $test = null

// integer, float
$daysInWeek = 7;

$pi = 3.14;

$result = $daysInWeek + $pi; // operasi di integer
// integer + float -> float

$bankAccount = 1.2e6; // shortcut e6 = 1.000.000

echo $bankAccount . '<br>';

// boelean (true / false)
$iniSudahDiterima = true;

if($iniSudahDiterima){ // (next)
    echo 'ini sudah diterima <br>'; // masuk ke skenario jika nilai true
}

$is_int = is_int(1);
if($is_int){
    echo ' this is an integer <br>';
}
// var_dump(is_int(3.4)); //float