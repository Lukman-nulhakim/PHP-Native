<?php

// Magic method dan magic constant
// ciri-ciri magic method adalah adanya __ (double underscore)
// __construct bakal menyeting nilai awal property -> yg bakal diproses duluan
// __destruct bakal menyeting nilai akhir property -> yg bakal diproses belakangan

// 1.
// class Mobil{

//     public function __construct(){
//         echo "ini method construct <br>";
//     }

//     public function __destruct(){
//         echo "ini method destruct";
//     }

//     public function mobil_saya(){
//         return "ini method yg dibuat sendiri <br>";
//     }

// }

// $mobil = new Mobil();

// echo $mobil->mobil_saya();


// 2.
// class Mobil{
//     public $merk = '';

//     public function __construct($merk){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return "merk mobil kamu adalah " . $this->merk;
//     }
// }

// $mobil = new Mobil('avanza');
// echo $mobil->getMerk();

// 3.
// class Mobil{
//     public $merk = '';

//     public function __construct($merk = 'BMW'){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return "merk mobil kamu adalah " . $this->merk;
//     }
// }

// $mobil = new Mobil();
// echo $mobil->getMerk();
