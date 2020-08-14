<?php 

require "src/Calculator.php";
require "src/Mobil/Mobil.php";
require "src/Mobil/Toyota.php";
require "src/Mobil/Honda.php";

use Dummy\Calculator;
use Dummy\Mobil\Toyota as Fortuner;
use Dummy\Mobil\Honda;

$toyota = new Fortuner('Toyota Fortuner', 10);
$calculator = new Calculator($toyota);
echo "Jarak Maksimum " . $toyota->getMerk() . " adalah " . $calculator->hitungJarak() . " KM <br>";

$honda = new Honda('Honda jazz', 10);
$calculator = new Calculator($honda);
echo "Jarak Maksimum " . $honda->getMerk() . " adalah " . $calculator->hitungJarak() . " KM <br>";


