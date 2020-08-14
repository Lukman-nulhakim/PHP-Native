<?php 

// 1.
class Lingkaran{
    public static $Luas = 2;

    public static function Hitung(string $sisi){
        self::$Luas *= $sisi;
    }
}

$lingkaran1 = new Lingkaran();
$lingkaran1->Hitung(20);
echo "Luas lingkaran A = " . Lingkaran::$Luas . "<br>";

$lingkaran2 = new Lingkaran();
$lingkaran2->Hitung(2);
echo "Luas lingkaran B = " . Lingkaran::$Luas;



// 2.
abstract class Mobil{
    protected $merk;
    protected $hp;

    abstract public function setHp($hp);
}

trait TurboCharger{
    private $hpTurbo = 150;

    public function turbo(){
        // method yg menambahkan hp dan hpTurbo
        $this->hp += $this->hpTurbo;

    }

    // jgn di setter getter di sini
}

class Honda extends Mobil{
    public function __construct($merk){
        $this->merk = $merk;
    }

    public function setHp($hp){ //kenapa salah bambang
        $this->hp = $hp;

    }
    public function getHp(){
    return $this->hp;
    }

    public function tampil(){
        return $this->merk . " : " . $this->getHp(). " HP <br>";
    }
    

}

class Toyota extends Mobil{
    public function __construct($merk){
        $this->merk = $merk;
    }

    public function setHp($hp){ //kenapa salah bambang
        $this->hp = $hp;

    }

    public function getHp(){
        return $this->hp;
    }

    public function tampil(){
        return $this->merk . " : " . $this->getHp(). " HP <br>";
    }
}

class Data extends Mobil{
    
    use TurboCharger;


    public function __construct($merk){
        $this->merk = $merk;
    }

    public function setHp($hp){ //kenapa salah bambang
        $this->hp = $hp;

    }

    public function getHp(){
        return $this->hp;

    }

    public function tampil(){
        return $this->merk . " : " . $this->getHp(). " HP <br>" ; 
    }

}

$mobil_Honda = new Honda("Honda Civic Turbo ");
$mobil_Honda->setHp(150);
echo $mobil_Honda->tampil();

$mobil_Toyota = new Toyota("Lexus LFA");
$mobil_Toyota->setHp(250);
echo $mobil_Toyota->tampil();


$mobil = new Data("Ford Mustang");
$mobil->setHp(250);
$mobil->turbo();
echo $mobil->tampil();

