<?php
// 1
class Mobil{
    public $merk;
    public $tipe;
    public $tahun;
    public $warna = 'biru';
}

$mobil = new Mobil();
var_dump($mobil);


// 2
// class Mobil{
//     public $merk = 'toyota';
//     public $tipe = 'fortuner';
//     public $tahun = 2019;
//     public $warna = 'biru';
// }

// $mobil = new Mobil();
// echo "Mobil $mobil->merk <br>";
// echo "Mobil $mobil->tipe <br>";
// echo "Mobil $mobil->tahun <br>";


// 3
class Mobil{
    public $merk = 'toyota';
    public $tipe = 'fortuner';
    public $tahun = 2019;
    public $warna = 'biru';
}


//mengatur nilai property
$mobil = new Mobil();
$mobil->merk = 'suzuki';
$mobil->tipe = 'ertiga';
$mobil->tahun = 2015;
$mobil->warna= 'hitam';

//mencetak nilai property
echo "Mobil $mobil->merk <br>";
echo "Mobil $mobil->tipe <br>";
echo "Mobil $mobil->tahun <br>";
echo "Mobil $mobil->warna <br>";


// 4
//class
// class Mobil{
//     //property
//     public $merk = 'toyota';
//     public $tipe = 'fortuner';
//     public $tahun = 2019;
//     public $warna = 'biru';

//     //method
//     public function maju(){
//         echo 'jalannn';
//     }
// }

// $mobil = new Mobil();
// //mengatur nilai property
// $mobil->merk = 'suzuki';
// $mobil->tipe = 'ertiga';
// $mobil->tahun = 2015;
// $mobil->warna= 'hitam';

// //mencetak nilai property
// echo "Mobil $mobil->merk <br>";
// echo "Mobil $mobil->tipe <br>";
// echo "Mobil $mobil->tahun <br>";
// echo "Mobil $mobil->warna <br>";

// //menjalankan method maju()
// $mobil->maju();



//latihan
class Mobil{
    //property
    public $merk = '';
    public $tipe = '';

    //method
    public function maju(){
        echo 'jalannn ';
    }
}

// membuat dan mengatur property object 1
$mobil1 = new mobil();
$mobil1->merk = 'Suzuki';
$mobil1->tipe = 'Ertiga';

// mencetak property dan menjalankan method maju() object 1
echo $mobil1->merk . " " . $mobil1->tipe . " " . $mobil1->maju() . "<br>";


// membuat dan mengatur property object 2
$mobil2 = new mobil();
$mobil2->merk = 'Honda';
$mobil2->tipe = 'Civic';

// mencetak property dan menjalankan method maju() object 2
echo $mobil2->merk . " " . $mobil2->tipe . " " . $mobil2->maju();

