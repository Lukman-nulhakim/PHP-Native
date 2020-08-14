<?php 

class Smk{
    public $nama, $umur, $alamat, $kelas;

    private $jurusan;

    protected $angkatan;


    public function setPublic($nama, $umur, $alamat, $kelas, $angkatan){
        $this->nama = $nama;
        $this->umur = $umur;
        $this->alamat = $alamat;
        $this->kelas = $kelas;
        $this->angkatan = $angkatan;
    }


    public function setJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
    public function getJurusan(){
        return $this->jurusan;
    }



}

class Siswa extends Smk {
    public function siswa(){
        return "$this->nama, $this->umur, $this->alamat, $this->kelas ". $this->getJurusan() ." $this->angkatan";
    }
}

class Siswi extends Smk {
    public function siswi(){
        return "$this->nama, $this->umur, $this->alamat, $this->kelas ". $this->getJurusan() ." $this->angkatan";
    }
}
echo "<h2>Siswa :</h2>";
$smk1 = new Siswa();
$smk1->setPublic("Lukman umur",21," alamat di tangerang ", " kelas 12"," tahun 2015");
$smk1->setJurusan(" Jurusan Teknik informatika ");
// $smk1->setAngkatan(" Tahun 2015");
echo $smk1->siswa();
echo "<br>";
$smk1->setPublic("Agung umur",25," alamat di sepatan ", " kelas 11"," tahun 2015");
$smk1->setJurusan(" Jurusan Teknik elektro ");
// $smk1->setAngkatan(" Tahun 2012");
echo $smk1->siswa();
echo "<br>";
$smk1->setPublic("Rangga umur",23," alamat di ciledug ", " kelas 10"," tahun 2015");
$smk1->setJurusan(" Jurusan Management ");
// $smk1->setAngkatan(" Tahun 2014");
echo $smk1->siswa();

echo "<br>";
echo "<br>";

// Nampilin dengan method chaining
echo "<h2>Siswi :</h2>";
$smk2 = new Siswi();
echo $smk2->setPublic("Rina umur",20," alamat di cipondoh ", " kelas 11"," tahun 2017").$smk2->setJurusan(" Jurusan kedokteran ").$smk2->siswi();
echo "<br>";
echo $smk2->setPublic("putri umur",21," alamat di cikokol ", " kelas 12"," tahun 2019").$smk2->setJurusan(" Jurusan akutansi ").$smk2->siswi();
echo "<br>";
echo $smk2->setPublic("siska umur",25," alamat di serpong ", " kelas 112"," tahun 2016").$smk2->setJurusan(" Jurusan Hukum ").$smk2->siswi();