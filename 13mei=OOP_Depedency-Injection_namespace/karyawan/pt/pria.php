<?php

namespace Dummy;

use Dummy\gaji\Gaji;

class Pria{
    protected $nama;
    protected $alamat;
    protected $gaji;

    public function __construct(Gaji $gaji){
        $this->gaji = $gaji;
    }

    public function identitas($nama, $alamat){
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function tampil(){
        $nama_karyawan = $this->nama;
        $alamat_karyawan = $this->alamat;
        $gaji = $this->gaji->getGaji();
        $bagian = $this->gaji->getBagian();
        return "Nama karyawan : " . $nama_karyawan . "<br> Alamat karyawan : " . $alamat_karyawan . "<br> Gaji : " . $gaji . " <br> Bagian : " . $bagian . "<br><br>";
    }
}