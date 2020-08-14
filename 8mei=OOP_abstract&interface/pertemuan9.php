<?php

// polymorphism
// banyak bentuk
// method yg berada pada class berbeda yg melakukan hal yg sama,
// harus memiliki nama yg sama pula

// interface BangunDatar{
//     (method)
// }

// class Persegi implements BangunDatar{
//     private a ??

//     public function __construct(a){

//     }

//     public function (method yg di baris 9 di panggil){

//     }
// }


// class Segitiga implements BangunDatar{
//     private a ??
//     private b ??

//     public function __construct(a, b){

//     }

//     public function (method yg di baris 9 di panggil){
        
//     }
// }

// class Lingkaran implements BangunDatar{
//     private a ??

//     public function __construct(a){

//     }

//     public function (method yg di baris 9 di panggil){
        
//     }
// }




interface BangunDatar {
    public function hitung();
}

class Persegi implements BangunDatar {
    private $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function hitung() {
        return pow($this->sisi, 2);
    }
}

class Segitiga implements BangunDatar {
    private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function hitung() {
        return (0.5 * $this->alas * $this->tinggi);
    }
}

class Lingkaran implements BangunDatar {
    private $luas;

    public function __construct($luas) {
        $this->luas = $luas;
    }

    public function hitung() {
        return floor(($this->luas * (22 / 7)));
    }
}

$persegi = new Persegi(4);
echo "luas persegi " . $persegi->hitung();
echo"<br>";

$segitiga = new Segitiga(4, 3);
echo "luas segitiga " .$segitiga->hitung();
echo"<br>";

$lingkaran = new Lingkaran(2);
echo "luas lingkaran " .$lingkaran->hitung();