<!-- inheritance adalah pewarisan class induk dan anak, anak yg bisa mengakses ke class induk beserta property-property nya contoh begitu pun method/function termasuk kedalam property -->

<?php

class handphone
{
    public $merk;

    public $os;

    public function hidupkan()
    {
        return "menghidupkan HP $this->merk";
    }
}

class smartphone extends handphone
{
    public function info_hp()
    {
        return "merk: $this->merk, OS: $this->os";
    }
}

$hp_nabil = new smartphone();

$hp_nabil->merk = "samsung";
$hp_nabil->os = "android";

echo $hp_nabil->hidupkan();
echo "<br>";
echo $hp_nabil->info_hp();
