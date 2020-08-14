<?php

// ini class
class handphone{
    // ini property class
    var $merk;
    var $tipe;
    var $jml_pulsa;

    // ini function
    function mengirim_pesan(){
        $this->jml_pulsa -= 150;
    }
}

// ini objek
$handphone_faqih = new handphone();$handphone_daffa = new handphone();