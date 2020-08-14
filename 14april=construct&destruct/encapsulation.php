<!-- 1.public
2.protected
3.private -->

<?php
class handphone{
    public $merk;
    protected $os;
    private $tahun_produksi;
}

class smartphone extends handphone{
    public function info_hp(){
    $this->os = "android";
    return "merk: $this->merk, os: $this->os";
    }

    public function tahun_produksi(){
        return "tahun produksi: $this->"tahun_produksi";
    }
    }

    $hp_nabil = new smartphone();
    $hp_nabil->merk = "samsung";
    $hp_nabil->

    echo 