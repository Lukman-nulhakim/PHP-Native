<?php
// array multidimensi // array dalam array
// array numeric(yg index nya di mulai 0)
$karyawan = [
    ["Rian sumantri","cipondoh","frontend",100000000],
    ["Ali firdaus","ciledug","backend",70000000],
    ["Reni","cikokol","frontend",50000000],
    ["Raka","jakbar","fullstack",110000000],
    ["Rendy","jakpus","BOS",110000000]
];


// array assosiative
// percis kaya database(table -> field)

$karyawan2 = [
    [
        "nama_karyawan" =>  "Rian sumantri",
        "alamat" => "cipondoh",
        "bagian" => "Frontend",
        "gaji" => 10000000,
        "foto" => "gambar.jpg"
    ],
    [
        "nama_karyawan" =>  "Ali firdaus",
        "alamat" => "ciledug",
        "bagian" => "backend",
        "gaji" => 70000000,
        "foto" => "gambar2.jpg"
    ],
    [
        "nama_karyawan" =>  "Reni",
        "alamat" => "cikokol",
        "bagian" => "frontend",
        "gaji" => 50000000,
        "foto" => "gambar3.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- contoh tampil array numeric -->
    <h2>Data Karyawan PT ABCD</h2>

    <!-- sama dengan(=) == dengan echo -->
    <?php foreach($karyawan as $tampil_karyawan) { ?>
        <ol>
            <li>Nama : <?= $tampil_karyawan[0]; ?></li>
            <li>Alamat : <?= $tampil_karyawan[1]; ?></li>
            <li>Bagian : <?= $tampil_karyawan[2]; ?></li>
            <li>Gaji : <?= $tampil_karyawan[3]; ?></li>
        </ol>
    <?php } ?>



    <!-- contoh tampil array assosiative -->
    <h1>Data karyawan PT xyz</h1>
    <?php foreach($karyawan2 as $tampil) : ?>
        <ul>
            <li>Nama = <?php echo $tampil["nama_karyawan"]; ?></li>
            <li>Alamat = <?php echo $tampil["alamat"]; ?></li>
            <li>bagian = <?php echo $tampil["bagian"]; ?></li>
            <li>Nama = <?php echo $tampil["gaji"]; ?></li>
            <li>
                Foto Karyawan = <img src="img/<?= $tampil["foto"]; ?>" alt="gambar" heigth="100" width="100">
            </li>
        </ul>
    <?php endforeach; ?>

    <?php
        $data = 'edutech';
        echo "nama kamu adalah $data";
    ?>

</body>
</html>