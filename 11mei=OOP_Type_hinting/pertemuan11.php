<?php 

// lanjutan type hinting

// 1.
// class Mobil{
//     public $merk;

//     public function __construct(string $merk){
//         $this->merk = $merk;
//     }

//     public function jalan(Manusia $sopir){
//         echo $this->merk . " Siap <br>";
//         echo $sopir->identitas() . " Siap <br>";
//         echo "Berangkattt";
//     }
// }

// class Manusia{
//     private $nama;

//     public function __construct(string $nama){
//         $this->nama = $nama;
//     }

//     public function identitas(){
//         return $this->nama;
//     }
// }

// $balap = new Manusia('Edi Pembalap Liar');
// $honda = new Mobil('Jazz');
// $honda->jalan($balap);


// 2.
class Mobil{
    public $merk;

    public function __construct(string $merk){
        $this->merk = $merk;
    }

    public function jalan(Robot $sopir){
        echo $this->merk . " Siap <br>";
        echo $sopir->identitas() . " Siap <br>";
        echo "Berangkattt";
    }
}

class Robot{
    private $nama;
    private $versi;

    public function __construct(string $nama, string $versi){
        $this->nama = $nama;
        $this->versi = $versi;
    }

    public function identitas(){
        return "$this->nama $this->versi";
    }
}

$terminator = new Robot('Terminator A-89', '9.0.0');
$robot = new Mobil('Mobil Authomatic x-yz');
$robot->jalan($terminator);
