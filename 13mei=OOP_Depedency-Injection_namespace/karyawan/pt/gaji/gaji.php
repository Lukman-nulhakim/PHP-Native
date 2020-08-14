<?php

namespace Dummy\Gaji;

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