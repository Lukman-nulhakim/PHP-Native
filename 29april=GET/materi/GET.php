
<?php 
// GET

$karyawan = [
    [
        "Nik" => '111',
        "nama" =>  "Rian sumantri",
        "alamat" => "cipondoh",
        "bagian" => "Frontend",
        "gaji" => 10000000,
        "foto" => "gambar.jpg"
    ],
    [
        "Nik" => '222',
        "nama" =>  "Ali firdaus",
        "alamat" => "ciledug",
        "bagian" => "backend",
        "gaji" => 70000000,
        "foto" => "gambar2.jpg"
    ],
    [
        "Nik" => '333',
        "nama" =>  "Reni",
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Bagian</th>
                <th scope="col">Gaji</th>
                <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($karyawan as $tampil) : ?>
                <tr>
                    <td>Nama Karyawan : <a href="index.php?Nik=<?php echo $tampil["Nik"]; ?>&nama=<?php echo $tampil["nama"]; ?>&alamat=<?php echo $tampil["alamat"]; ?>&bagian=<?php echo $tampil["bagian"]; ?>&gaji=<?php echo $tampil["gaji"]; ?>&foto=<?php echo $tampil["foto"]; ?>"><?php echo $tampil["nama"]; ?></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>