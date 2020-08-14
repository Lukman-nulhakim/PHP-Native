<?php 

class AtasUmr{
    private $gaji;

    public function setGaji(float $gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }
}

class Umr{
    private $gaji;

    public function setGaji(int $gaji){
        $this->gaji = $gaji;
    }

    public function getGaji(){
        return $this->gaji;
    }
}

class Pria extends AtasUmr{
    public $nama;
    public $alamat;
    public $bagian;

    public function __construct($nama, $alamat, $bagian){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->bagian = $bagian;
    }

    public function Tampil(){
        echo $this->nama . ' Tinggal di ' . $this->alamat . ' Posisi Sebagai ' . $this->bagian . ' Gaji ' . $this->getGaji() . ' JT';
    }
}

class Wanita extends Umr{
    public $nama;
    public $alamat;
    public $bagian;

    public function __construct($nama, $alamat, $bagian){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->bagian = $bagian;
    }

    public function Tampil(){
        echo $this->nama . ' Tinggal di ' . $this->alamat . ' Posisi Sebagai ' . $this->bagian . ' Gaji ' . $this->getGaji() . ' JT <br>';
    }
}


$wanita = new Wanita('Nissa','Bandung','Digital Marketing');
$wanita->setGaji(4.5);
$wanita->Tampil();

$pria = new Pria('Lukman','Bali','CEO');
$pria->setGaji(20);
$pria->Tampil();