<?php

namespace Dummy\Gaji;

class atasUmr extends Gaji{
    protected $gaji = "Rp 10.000.000";

    public function getGaji(){
        return $this->gaji;
    }
}