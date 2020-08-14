<?php
// array
// []
// array()

// contoh 1
// $kendaraan = ["Motor MX", "Motor Mio", "Motor Vixion"];
// var_dump($kendaraan);

// echo "<br>";

// contoh 2
// $kendaraan2 = array("Avanza","Jeep","Jazz");
// var_dump($kendaraan2);

// contoh 3
// $nama = "Ali";


// contoh 4
// $nama = ["adi ","eli ","rangga ","lukman"];

//contoh 5
$nama_karyawan = ["adi ","eli ","rangga ","lukman ","rian ", "aris ", "rian"];

// contoh 6
$apd = ["masker","sarung tangan", "Jubah"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- contoh 3 -->
<!-- <h1>Selamat berpuasa <//?php echo $nama; ?></h1> -->


<!-- contoh 4 -->
<?php 
    // for($i = 0; $i < count($nama); $i++){
    //     echo $nama[$i];
    // } 
?>

<!-- contoh 5 -->
<?php 
    // foreach( $nama_karyawan as $tampil ){
    //     echo "<h1>$tampil</h1>";
    // }
?>


<!-- contoh 6 -->
<!-- templating -->
<?php //foreach($apd as $data) : ?>
    <h3><?php //echo $data; ?></h3>
<?php //endforeach; ?>

<!-- contoh 7 -->
<?php for($i = 0; $i <= 5; $i++) : ?>
    <?php if($i == 2) : ?>
        <p>Libur</p>
    <?php endif; ?>
        <p>Masuk</p>
<?php endfor; ?>

    
</body>
</html>