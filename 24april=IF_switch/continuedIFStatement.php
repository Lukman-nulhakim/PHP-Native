<?php 

// -> logical operator
// -> comparison operator
// -> casting in PHP

$username = 'lukman';
$password = '12345';

if($username == 'lukman' || $password == '123'){ // true/false
    echo 'welcome';
}
// Premis
// && (true, true) => true
// && (true, false) => false
// && (false, false) => false
// || (true, false) => true
// || (true, true) => true
// || (false, false) => false

if($password == '12345' xor $username== 'lukman'){
    echo 'to my life';
}
// xor (true, true) => false
// xor (false, false) => false
// xor (true, false) => true
//----------------------------------------------------------

echo '<br><br><br>';
$number1 = 6;
$number2 = 6;

if($number1 >= $number2){
    echo 'your number is no small';
} else {
    echo 'kondisi lainnya';
}

$number3 = 4;
$number4 = 4;

if($number3 === $number4){
    echo '<br>Nilainya sama cuy';
}
// COMPARISON OPERATOR
// <, >, <=, >=
// == Hanya melihat nilai
// === melihat nilai dan tipe data

// EXAMPLE
echo '<br><br><br>';

$booleanS = (bool) 'false'; // kita mau ubah dia jadi boolean
$numberS = (int) '1'; // kita mau ubah dia jadi integer
// $numberS = [2,3];

var_dump($numberS);
//(string)

if(gettype($numberS) == 'integer'){
    echo 'ini berhasil';
} // gettype() -> tipe data dari variable