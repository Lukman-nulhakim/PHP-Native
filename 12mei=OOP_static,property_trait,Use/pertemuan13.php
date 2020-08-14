<?php 

// trait
// stytax use

// 1.
// class Mobil{
//     // Memasukan trait
//     use TurboCharger;

//     private $merk;
//     private $hp = 300;

//     public function __construct($merk){
//         $this->merk = $merk;
//     }

//     public function getMerk(){
//         return $this->merk;
//     }

//     public function getHp(){
//         return $this->hp;
//     }
// }

// trait TurboCharger{
//     public function setHp($hp){
//         $this->hp += $hp;
//     }
// }

// $nissa = new Mobil('BMW e-46');
// echo $nissa->getMerk() . "<br>";
// echo "Turbo : " . $nissa->getHp() . " PK <br>";
// $nissa->setHp(50);
// echo "Turbo charged : " . $nissa->getHp() . " PK";

// 2.
class Mobil{
    // Memasukan trait
    use TurboCharger;
    use Nitro;

    private $merk;
    private $hp = 300;

    public function __construct($merk){
        $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function getHp(){
        return $this->hp;
    }
}

trait TurboCharger{
    public function setHp($hp){
        $this->hp += $hp;
    }
}

trait Nitro{
    private $maksHp = 150;

    public function nos(){
        $this->hp += $this->maksHp;
    }
}

$nissa = new Mobil('BMW e-46');
echo $nissa->getMerk() . "<br>";
echo "Turbo : " . $nissa->getHp() . " PK <br>";
$nissa->setHp(50);
echo "Turbo charged : " . $nissa->getHp() . " PK";

$nissa->nos();
echo "Hp Nitro : " . $nissa->getHp() . "PK";