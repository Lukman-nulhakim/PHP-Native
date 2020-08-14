<?php

//pengakses property tersebut dilakukan dari global scope, maksud nya dilakukan dari luar class,
//bagaimana seandainya jika kita ingin mengakses suatu property dari dalam class itu sendiri ?
//misal kita ingin mengakses suatu property dari dalam method yg ada di class itu sendiri
//untuk mengakses suatu property dari dalam class itu sendiri, kita menggunakan keyword $this

// 1.
// class Mobil{
//     public $merk = 'BMW';

//     public function sebutMerk(){
//         //mengakses property $merk dari method sebutMerk()
//         return $this->merk;
//     }
// }

// $mobil = new Mobil();
// echo $mobil->sebutMerk();


// 2.
class Mobil{
    public $merk = 'BMW';

    public function sebutMerk(){
        //mengakses property $merk
        $merk = $this->merk;

        //mengubah format dan mengembalikan poperty $merk
        return $this->lowercase($merk); //method lowercase untuk mengubah format merk ke huruf kecil
    }
    
    public function lowercase($merk){
        return strtolower($merk);
    }
}

$mobil = new Mobil();
echo $mobil->sebutMerk();