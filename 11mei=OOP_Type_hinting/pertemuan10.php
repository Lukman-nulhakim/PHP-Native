<?php
// type hinting
// kita gunakan untuk diterima sebagai parameter/argument
// suatu method, dengan demikian kita bisa meningkatkan keamanan data, karna sebelumnya
// kita hanya memasukan properti di argument/parameter dan mengisi datanya bebas (dalam arti bebas)
// ini kita bisa menggunakan type hinting, dan kita bisa atur datanya apa yg diinput

// contoh rumus kita memasukan array
// function namaMethod(array $namaArray){
    // source code
// }

// 1. array type hinting
// function hitungJarak(array $mobils){
//     foreach($mobils as $mobil){
//         $jarakMaks = $mobil[1] * $mobil[2];
//         echo $mobil[0] . " : " . $jarakMaks . "<br>";
//     }
// }

// $kendaraan = [
//     ['Toyota', 10, 25],
//     ['Suzuki', 15, 21],
//     ['Odong-odong', 5, 2]
// ];

// hitungJarak($kendaraan);



// 2. object type hinting
// class Mobil{
//     private $merk;
//     private $efisiensi;
//     private $volBbm;

//     public function __construct($merk, $efisiensi, $volBbm){
//         $this->merk = $merk;
//         $this->efisiensi = $efisiensi;
//         $this->volBbm = $volBbm;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }
//     public function getEfisiensi(){
//         return $this->efisiensi;
//     }
//     public function getVolBbm(){
//         return $this->volBbm;
//     }
// }

// class Calculator{
//     public function hitungJarak(Mobil $mobil){
//         $efisiensi = $mobil->getEfisiensi();
//         $volBbm = $mobil->getVolBbm();
//         $jarakMaks = $efisiensi * $volBbm;
//         echo $mobil->getMerk() . " : " . $jarakMaks . " KM <br>";
//     }
// }

// $toyota = new Mobil("Toyota", 10, 20);
// $call = new Calculator();
// $call->hitungJarak($toyota);

// $suzuki = new Mobil("Suzuki", 15, 20);
// $muncul = new Calculator();
// $muncul->hitungJarak($suzuki);


// 3. type hinting tipe data
// native contoh
// function nama($orang){
//     if(is_string($orang)){
//         echo "Halo " . $orang;
//     } else {
//         echo "Bukan string coy";
//     }
// }

// nama("lukman");

// OOP contoh
class Mobil{
    private $merk;
    private $harga;
    private $lunas;
    private $jumlahPintu;

    public function setMerk(string $merk){
        $this->merk = $merk;
    }

    public function setHarga(float $harga){
        $this->harga = $harga;
    }

    public function setLunas(bool $lunas){
        $this->lunas = $lunas;
    }

    public function setPintu(int $pintu){
        $this->jumlahPintu = $pintu;
    }
}

$toyota = new Mobil();
$toyota->setMerk('Toyota');
$toyota->setHarga(04984.434);
$toyota->setPintu(2384);
$toyota->setLunas(true);
var_dump($toyota);