<?php

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
        return "Nama karyawan : " . $nama_karyawan . "<br> Alamat karyawan : " . $alamat_karyawan . "<br> Gaji : " . $gaji . " <br> Bagian : " . $bagian;
    }
}

abstract class Gaji{
    protected $gaji_bagian = " ";

    public function __construct(string $bagian){
        $this->gaji_bagian = $bagian;
    }

    public function getBagian(){
        return $this->gaji_bagian;
    }

    abstract public function getGaji();

}

class atasUmr extends Gaji{
    protected $gaji = "Rp 10.000.000";

    public function getGaji(){
        return $this->gaji;
    }
}

$rafif = new atasUmr(" Back End Developer");
$data = new pria($rafif);
$data->identitas(" Rafif ", " Perum Karawaci ");
echo $data->tampil();
