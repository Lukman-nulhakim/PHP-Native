<?php

// abstract class dan abstract method
// abstract class setidaknya harus ada minimal 1 abstract method
// abstract method adalah method yg hanya dideklarasikan dan jg diberikan di depan nama abstract itu sendiri

// abstract class sebuah class yg tidak bisa di instansiasi 
// abstract method sebuah method dasar yg dapat di implementasikan berulang ulang di dalam class anak 
// abstract class bisa digunakan di dalam inheritance(pewarisan)


// abstract class BangunDatar{
//     abstract protected function hitungLuas();
// }

// class Persegi extends BangunDatar{
//     protected $sisi = 4;

//     public function hitungLuas(){
//         // pow adalah function untuk pangkat
//         return pow($this->sisi, 2);
//     }
// }

// class Segitiga extends BangunDatar{
//     protected $alas = 4;
//     protected $tinggi = 3;

//     public function hitungLuas(){
//         return(0.5 * $this->alas * $this->tinggi);
//     }
// }

// $persegi = new Persegi();
// echo "luas persegi adalah = " . $persegi->hitungLuas() . "<br>";

// $segitiga = new Segitiga();
// echo "luas segitiga adalah = " . $segitiga->hitungLuas();


// 2.
abstract class Mobil{
    protected $volTangki;

    public function isiBensin($vol){
        $this->volTangki = $vol;
    }

    abstract protected function jarakTempuhMaksimum();
}

class Toyota extends Mobil{
    protected $perliter = 10;

    public function jarakTempuhMaksimum(){
        $jarakMaks = $this->perliter * $this->volTangki;
        echo 'jarak tempuh maksimal toyota adalah ' . $jarakMaks . " KM <br>";
    }
}

class Honda extends Mobil{
    protected $perliter = 20;

    public function jarakTempuhMaksimum(){
        $jarakMaks = $this->perliter * $this->volTangki;
        echo 'jarak tempuh maksimal Honda adalah ' . $jarakMaks . " KM";
    }
}

$toyota = new Toyota();
$toyota->isiBensin(10);
$toyota->jarakTempuhMaksimum();

$Honda = new Honda();
$Honda->isiBensin(15);
$Honda->jarakTempuhMaksimum();
