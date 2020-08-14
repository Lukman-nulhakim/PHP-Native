<?php 

// static property dan static method
//digunakan saat kasus2 tertentu karna penggunaan nya terbatas
// untuk membuat static property dan static method, kita memakai keyword static
// keyword static setelah acces modifier

// class Latihan{
//     //static property
//     public static $namaProperty = 'Property static';

//     //static method
//     public static function namaMethod(){
//         return "Halo saya adalah static method";
//     }
// }

// echo Latihan::$namaProperty . "<br>";
// echo Latihan::namaMethod();


// 2.
// class Mobil{
//     private static $merk = 'Toyota';

//     private static function uppercase($text){
//         return strtoupper($text);
//     }

//     public static function getMerk(){
//         $merk = self::$merk;
//         return self::uppercase($merk);
//     }
// }
// echo Mobil::getMerk();

// 3.
// class Mobil{
//     public static $km = 0;

//     public function jalan($jarak){
//         self::$km += $jarak;
//     }
// }

// $mobil1 = new Mobil();
// $mobil1->jalan(10);
// echo Mobil::$km . "<br>";

// $mobil2 = new Mobil();
// $mobil2->jalan(5);
// echo Mobil::$km;

// 4.
class StringFormat{
    public static function lowerCase($text){
        return strtolower($text); // mengubah huruf kapital menjadi huruf kecil
    }

    public static function uppercase($text){
        return strtoupper($text); // mengubah huruf kecil menjadi huruf kapital
    }

    public static function titleCase($text){
        return ucwords($text); // mengubah huruf depan menjadi kapital
    }
}

echo StringFormat::lowerCase('EDUTECH') . "<br>";
echo StringFormat::uppercase('web developer') . "<br>";
echo StringFormat:: titleCase('frontend developer test');