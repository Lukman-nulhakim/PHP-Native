<?php 

// tanpa method chaining
// class Mobil{
//     public $tangki =0;

//     public function isiBensin($liter){
//         $this->tangki += $liter;
//     }

//     public function kendaraan($jarak){
//         $terpakai = $jarak / 20;
//         $this->tangki -= $terpakai;
//     }
// }

// $mobil = new Mobil();
// $mobil->isiBensin(2);
// $mobil->kendaraan(20);
// $sisaBensin = $mobil->tangki;
// echo "Sisa bensin mobil kamu adalah " . $sisaBensin . " liter";


// method chaining
class Mobil{
    public $tangki =0;

    public function isiBensin($liter){
        $this->tangki += $liter;
        return $this;
    }

    public function kendaraan($jarak){
        $terpakai = $jarak / 20;
        $this->tangki -= $terpakai;
        return $this;
    }
}

$mobil = new Mobil();
$sisaBensin = $mobil->kendaraan(20)->isiBensin(2)->tangki;
echo "sisa bensin mobil kamu adalah " . $sisaBensin . " liter";