<?php

require "pt/pria.php";
require "pt/wanita.php";
require "pt/gaji/gaji.php";
require "pt/gaji/atasUmr.php";
require "pt/gaji/umr.php";

use Dummy\Gaji\Umr;
use Dummy\Gaji\atasUmr;
use Dummy\Pria;
use Dummy\Wanita;


$rafif = new atasUmr(" Back End Developer");
$data = new pria($rafif);
$data->identitas(" Rafif ", " Perum Karawaci ");
echo $data->tampil();


$rafita = new Umr(" UX Design ");
$data = new pria($rafita);
$data->identitas(" Rafita ", " Perum Karawaci ");
echo $data->tampil();