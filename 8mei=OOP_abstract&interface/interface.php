<?php

// Interface
// membuat method tertentu yg meng-inheritance dari parent classnya
// kita bisa membuat sebuah abstract class atau interface didalamnya

// 1.
// interface Mobil{
//     public function setMerk($merk);
//     public function getMerk();
// }

// class BMW implements Mobil{
//     private $merk;

//     public function setMerk($merk){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }
// }

// $bmw = new BMW();
// $bmw->setMerk('BMW 132');
// echo $bmw->getMerk();

// 2.
interface Mobil{
    public function setMerk($merk);
    public function getMerk();
}

interface KendaraanBeroda{
    public function setRoda($roda);
    public function getRoda();
}

class Bmw implements Mobil, KendaraanBeroda{
    private $merk;
    private $roda;

    public function setMerk($merk){
        $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function setRoda($roda){
        $this->jumlahRoda = $roda;
    }

    public function getRoda(){
        return $this->jumlahRoda;
    }
}

$bmw = new Bmw();
$bmw->setMerk('BMW b-123');
$bmw->setRoda(4);
echo " mobil kamu adalah = " . $bmw->getMerk(). " Beroda " . $bmw->getRoda();

// polymorphism
// banyak bentuk
// method yg berada pada class berbeda yg melakukan hal yg sama,
// harus memiliki nama yg sama pula

