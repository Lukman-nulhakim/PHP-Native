<?php

// Inheritance
// sebuah turunan, jadi ada class anak turunan dari class bapaknya

// 1.
// class Mobil{
//     private $merk;

//     public function setMerk($merk){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }

//     public function tampil(){
//         return 'Mobil ini sedang jalannnn ' . $this->merk; 
//     }
// }

// // child class/class anak
// class MobilSport extends Mobil{

// }

// // Instansiasi
// $ferrari = new MobilSport();
// $ferrari->setMerk('Ferrari');
// echo $ferrari->tampil();

// 2.
// class Mobil{
//     private $merk;

//     public function setMerk($merk){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }

//     public function tampil(){
//         return 'Merk mobil kamu adalah ' . $this->merk; 
//     }
// }

// // child class/class anak
// class MobilSport extends Mobil{
//     private $nos = 'nitrous';

//     public function ngebut(){
//         return 'mengendarai ' . $this->getMerk() . ' dengan ' . $this->nos;
//     }
// }

// // Instansiasi
// $ferrari = new MobilSport();
// $ferrari->setMerk('Ferrari');
// echo $ferrari->ngebut();


// 3.
// class Mobil{
//     protected $merk;

//     public function setMerk($merk){
//         $this->merk = $merk;
//     }

// }

// // child class/class anak
// class MobilSport extends Mobil{

//     public function ngebut(){
//         return 'halo saya adalah ' . $this->merk;
//     }
// }

// // Instansiasi
// $ferrari = new MobilSport();
// $ferrari->setMerk('Ferrari');
// echo $ferrari->ngebut();


// 4.
class Gudang{
    public $produk = "Kursi";

    public function spesifikasi(){
        return "Bahan bagus";
    }
}

class Tampil extends Gudang{

}

$kayu = new Tampil();
echo $kayu->spesifikasi();