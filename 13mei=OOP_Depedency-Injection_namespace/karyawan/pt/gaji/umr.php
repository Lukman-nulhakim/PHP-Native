<?php

namespace Dummy\Gaji;

class Umr extends Gaji{
    protected $gaji = "Rp 4.000.000";

    public function getGaji(){
        return $this->gaji;
    }
}