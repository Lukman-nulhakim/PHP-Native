<?php 

class RsHermina{

    public $dokter = 'Dr. Idra Setiawan',
            $suster = 'Suster Irawati',
            $apd = 'Sarung tangan';

    public function Ruangan(){
            return "$this->dokter dan $this->suster menggunakan $this->apd di ruangan 0022";
        }
}

$Hermina = new Rshermina();
echo $Hermina->Ruangan();
echo "<br>";
echo "<br>";



class RsAsih{
    public $dokter1 = 'Dr. Andri Riyadi',
            $suster1 = 'Suster Mega',
            $ruangan1 = 'B774';
    public function Apd(){
        return "$this->dokter1 dan $this->suster1 menggunakan sarung tangan, jubah, masker, sepatu di ruangan $this->ruangan1";
    }
}
$Asih = new RsAsih();
echo $Asih->Apd();