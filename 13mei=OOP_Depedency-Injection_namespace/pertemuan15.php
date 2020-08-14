<?php 

// namespace
// merapikan sourcecode agar pencarian data lebih mudah
// kita punya fungsi kepala -> fungsi kepala
// kita punya fungsi badan -> fungsi badan

// class Calculator{
//     protected $mobil;

//     public function __construct(Mobil $mobil){
//         $this->mobil = $mobil;
//     }

//     public function hitungJarak(){
//         $bbm = $this->mobil->getBbm();
//         $efisiensi = $this->mobil->getEfisiensi();
//         $jarakMaks = $bbm * $efisiensi;
//         return $jarakMaks;
//     }
// }

// abstract class Mobil{
//     protected $merk = '';
//     protected $bbm = 0;

//     public function __construct(string $merk, int $bbm){
//         $this->merk = $merk;
//         $this->bbm = $bbm;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }

//     public function getBbm(){
//         return $this->bbm;
//     }

//     abstract public function getEfisiensi();
// }

// class Toyota extends Mobil{
//     protected $efisiensi = 10;

//     public function getEfisiensi(){
//         return $this->efisiensi;
//     }
// }

// class Honda extends Mobil{
//     protected $efisiensi = 15;

//     public function getEfisiensi(){
//         return $this->efisiensi;
//     }
// }

// $toyota = new Toyota('Toyota Fortuner', 10);
// $calculator = new Calculator($toyota);
// echo "Jarak Maksimum " . $toyota->getMerk() . " adalah " . $calculator->hitungJarak() . " KM <br>";

// $honda = new Honda('Honda jazz', 10);
// $calculator = new Calculator($honda);
// echo "Jarak Maksimum " . $honda->getMerk() . " adalah " . $calculator->hitungJarak() . " KM <br>";


