<?php 
// if kondisi itu ada 3 jenis
// if, else if, else
// if itu awal dalam decision terdapat kondisi didalamnya
// else if dijalankan setelah dari if, terdapat kondisi di dalamnya
// else dijalankan terakhir, dia mengcover kemungkinan2 yg tidak masuk
// pada kondisi sebelumnya

$karyawan = 25;

if($karyawan == 23){ // ada kondisinya cek nilai keryawan =23 bukan
    echo 'kamu merupakan freshgraduate';
} else if($karyawan < 23){
    echo 'kamu merupakan mahasiswa magang';
} else {
    echo 'kamu merupakan karyawan berpengalaman';
}

echo '<br><br><br>';

// EXAMPLE LAIN

$day = 1;
$dayOfWeek = [
    1 => 'Monday',
    2 => 'Tuesday',
    3 => 'wednesday'
];

var_dump(array_keys($dayOfWeek));
// output dari array ini berupa arrays dari index/key
echo '<br><br><br>';

if(in_array($day, array_keys($dayOfWeek))){
    // in_array itu cek apakah dalem array tersebut ada nilai yg dituju
    echo $dayOfWeek[$day];// monday
} else {
    echo 'that is not a valid day';
}
// echo $dayOfWeek[2]; // tuesday

// EXAMPLE of return in if statement
echo '<br><br><br>';
$nameTest = null;
// nilai null dan empty string sama dengan false kalau kita masukin ke dalam kondisi
// false -> true
// if(!$nameTest){
//   return;
// } // berenti kalau direturn
echo 'hello';

// EXAMPLE of NESTING IF Statement
echo '<br><br><br>';
$name = 'lukman nulhakim'; // true karena ada isinya di if statement
if($name){
    echo 'nama saya adalah '.$name. '<br>';
    if(strlen($name)> 10){
        // strlen itu untuk cek panjang karakter string yang dimasukan, hampir sama sperti .length dijavascript
        echo 'nama kamu terlalu panjang';
    }
}