<?php 

// jawaban 1
abstract class Sopir{
    abstract protected function identitas();
}

class Mobil{
    private $merk;

    public function __construct(string $merk){
        $this->merk = $merk;
    }

    public function getMerk(){
        return $this->merk;
    }

    public function identitas(Manusia $manusia, Robot $robot){
        echo $this->merk . $manusia->identitas() . " yang mempunyai akal dan jenis kelamin <br>";
        echo $this->merk . $robot->identitas() . " yang tidak mempunyai akal dan jenis kelamin";

    }

}


class Manusia {
    private $nama;
    
    public function __construct(string $nama){
        $this->nama = $nama;
    }

    public function identitas(){
        return $this->nama;
    }

}

class Robot {
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

$people = new Manusia('Manusia');
$robot = new Robot('Robot Terminator','999-xxx');
$mobil = new Mobil('Saya adalah ');
$mobil->identitas($people, $robot);



// jawaban 2 menggunakan interface

interface Sopir{
    public function Identitas();
}

class Mobil{
    private $merk;
    

    public function __construct(string $merk){
        $this->merk = $merk;
    }

    public function tampil(Sopir $manusia){
        echo $manusia->Identitas() . " mengendarai " . $this->merk . "<br>";
    }

}

class Orang implements Sopir{
    private $nama;

    public function __construct(string $nama){
        $this->nama = $nama;
    }

    public function Identitas(){
        return $this->nama;
    }
}

class Robot implements Sopir{
    private $tipe;

    public function __construct(string $tipe){
        $this->tipe = $tipe;
    }

    public function Identitas(){
        return $this->tipe;
    }
}

$orang = new Orang('lukman');
$robot = new Robot('Robot');
$mobil = new Mobil('Honda Jazz');
$mobil->tampil($orang);
$mobil2 = new Mobil('Toyota Yaris');
$mobil2->tampil($robot);