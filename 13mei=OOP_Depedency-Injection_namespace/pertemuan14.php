<?php 

// Depedency Injection
// ketika class a membutuhkan class b untuk bekerja, class a ketergantungan sama class b
// biasanya nge intance class b yg akan di bentuk di class a



// 1.
// class MobilSport{
//     protected $sopir;

//     public function __construct(){
//         $this->sopir = new Toyota;
//     }

//     public function getSopir(){
//         return $this->sopir;
//     }
// }

// class Toyota{
//     public function setSopir($nama){
//         return $nama;
//     }
// }

// $toyota = new MobilSport();
// echo $toyota->getSopir()->setSopir('Ari menjalankan Mobil avanza');


// 2.
// class MobilSport{
//     protected $sopir;

//     public function __construct($sopir){
//         $this->sopir = $sopir;
//     }

//     public function getSopir(){
//         return $this->sopir;
//     }
// }

// class Toyota{
//     public function setSopir($nama){
//         return $nama;
//     }
// }

// $toyota = new Toyota(); // ini instansiasi
// $mobil = new MobilSport($toyota);
// echo $mobil->getSopir()->setSopir('Ari menjalankan Mobil BMW');


// 3. menggunakan interface
class MobilSport{
    protected $sopir;

    public function __construct(Sopir $sopir){
        $this->sopir = $sopir;
    }

    public function getSopir(){
        return $this->sopir;
    }
}

interface Sopir{
    public function nama($nama);
}

class Toyota implements Sopir{
    public function nama($nama){
        return " Halo nama saya adalah : " . $nama . "<br>";
    }
}

class Honda implements Sopir{
    public function nama($nama){
        return " saya adalah : " . $nama . "<br>";
    }
}

$toyota = new Toyota();
$tampil = new MobilSport($toyota);
echo $tampil->getSopir()->nama('Erik Dari Jakarta');

$honda = new Honda();
$muncul = new MobilSport($honda);
echo $muncul->getSopir()->nama('Andri dari tangerang');