<?php

// encapsulation
// untuk menjaga suatu proses agar tidak dapat di akses secara sembarang
// konsep encapsulation sangat penting karna kita menjaga kebutuhan program agar bisa di akses sewaktu waktu


// 1. tanpa encapsulation, akses nya masih public

// class Mobil{
//     public $merk;

//     public function getMerk(){
//         return $this->merk;
//     }
// }

// $mobil = new Mobil();
// $mobil->merk = "BMW";
// echo 'Merk mobil kamu adalah ' . $mobil->getMerk();


// 2. dengan encapsulation, akses nya private
// ini akan error karna kita ganti menggunakan private
// cara munculin nya agar tidak error di contoh nomer 3

// class Mobil{
//     private $merk;

//     public function getMerk(){
//         return $this->merk;
//     }
// }

// $mobil = new Mobil();
// $mobil->merk = "BMW";
// echo 'Merk mobil kamu adalah ' . $mobil->getMerk();



// 3. ketika kita mau menjalankan private nya kita harus menggunakan setter dan getter
// getter public method untuk mendapatkan nilai private property
// setter public method untuk memberikan/mengatur nilai private property

// class Mobil{
//     private $merk;

//     // ini setter
//     public function setMerk($merk){
//         $this->merk = $merk;
//     }

//     // ini getter
//     public function getMerk(){
//         return $this->merk;
//     }
// }

// $mobil = new Mobil();
// // setter mengatur nilai
// $mobil->setMerk("BMW");
// // getter mendapatkan nilai
// echo 'Merk mobil kamu adalah ' . $mobil->getMerk();



// 4.

class Mobil{
    public function jalan(){
        $maju = $this->injakKompling();
        $maju .= $this->ubahPerseneling();
        $maju .= $this->injakGas();
        $maju .= 'Ngengggg jalan';
        echo $maju;
    }

    private function injakKompling(){
        return "Injak Kopling <br>";
    }
    private function ubahPerseneling(){
        return "Ubah Perseneling <br>";
    }
    private function injakGas(){
        return "Injak GASSSSS <br>";
    }
}

$mobil = new Mobil();
$mobil->jalan();