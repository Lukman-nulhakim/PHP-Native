<?php 

// Tugas

// 1.
class sorumMobil{
    public $merk_mobil,
            $jenis_mobil,
            $warna_mobil,
            $tahun;

            public function __construct( $merk_mobil, $jenis_mobil, $warna_mobil, $tahun ){
                $this->merk_mobil = $merk_mobil;
                $this->jenis_mobil = $jenis_mobil;
                $this->warna_mobil = $warna_mobil;
                $this->tahun = $tahun;
            }

            public function Honda( $merk_mobil, $jenis_mobil, $warna_mobil, $tahun){
                $this->merk_mobil = $merk_mobil;
                $this->jenis_mobil = $jenis_mobil;
                $this->warna_mobil = $warna_mobil;
                $this->tahun = $tahun;
            }
            
            public function mobilSport( $merk_mobil, $jenis_mobil, $warna_mobil, $tahun){
                $this->merk_mobil = $merk_mobil;
                $this->jenis_mobil = $jenis_mobil;
                $this->warna_mobil = $warna_mobil;
                $this->tahun = $tahun;
            }

            public function detailMobil(){
                return "$this->merk_mobil, $this->jenis_mobil, $this->warna_mobil, $this->tahun";
            }
}

$mobil1 = new sorumMobil("Honda", "JAZZ", "warna merah", "tahun 2017");
echo "mobil doni adalah " . $mobil1->detailMobil();
echo "<br>";
$mobil1->Honda("Toyota","yaris","warna hitam","tahun 2010");
echo "mobil erik adalah " . $mobil1->detailMobil();
echo "<br>";
$mobil1->mobilSport("BMW", "i8", "warna biru", "tahun 2020");
echo "mobil lukman adalah " . $mobil1->detailMobil();


// 2.
// class Mobil {
//     public $bensin=10,
//             $km=10;
        

//     public function Ferrari($liter, $jarak){
//         $this->bensin -= $liter;
//         $this->km *= $jarak;
//         return $this;
//     }

//     public function BMW($liter, $jarak){
//         $this->bensin -= $liter;
//         $this->km *= $jarak;
//         return $this;
//     }

// }
// $mobil1 = new Mobil();
// $sisaBensin1 = $mobil1->Ferrari(9,5)->bensin;
// $sisaBensin2 = $mobil1->Ferrari(0,1)->km;
// echo "Mobil Ferrari WINNER dengan jarak tempuh " . $sisaBensin2 . "km/jam dan sisa bensin " . $sisaBensin1 . " Liter";
// echo "<br>";

// $mobil2 = new Mobil();
// $sisaBensin3 = $mobil2->BMW(5,5)->bensin;
// $sisaBensin4 = $mobil2->BMW(0,1)->km;
// echo "Dan Mobil BMW juara 2 dengan jarak tempuh " . $sisaBensin4 . "km/jam dan sisa bensin " . $sisaBensin3 . " Liter";