<?php 

$koneksi = mysqli_connect("localhost","root","","phpbatch5"); // untuk koneksi ke phpmyadmin 

// $data = mysqli_query($koneksi, "SELECT * FROM karyawan");

$data = mysqli_query($koneksi, "SELECT karyawan.nik,gaji.id,karyawan.nama,karyawan.alamat,karyawan.posisi,karyawan.foto,gaji.gaji,hp.no_hp
FROM karyawan
JOIN gaji
ON karyawan.nik=gaji.nik
JOIN hp
ON hp.nik=karyawan.nik");

// var_dump($data);

// $karyawan = mysqli_fetch_row($data);
// var_dump($karyawan);

// while($karyawan = mysqli_fetch_assoc($data)){
//     var_dump($karyawan);
// }
// mysqli_fetch_row => ngambil indexnya dari 0(array numeric)
// mysqli_fetch_assoc => array associative (ambil data melalui field)
// mysqli_fetch_array => bisa array associative / array numeric

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
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">nik</th>
                            <th scope="col">id</th>
                            <th scope="col">nama</th>
                            <th scope="col">alamat</th>
                            <th scope="col">posisi</th>
                            <th scope="col">foto</th>
                            <th scope="col">Gaji</th>
                            <th scope="col">No_hp</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php while($tampil = mysqli_fetch_assoc($data)){ ?>
                        <tr>
                            <td><?php echo $tampil["nik"]; ?></td>
                            <td><?php echo $tampil["id"]; ?></td>
                            <td><?php echo $tampil["nama"]; ?></td>
                            <td><?php echo $tampil["alamat"]; ?></td>
                            <td><?php echo $tampil["posisi"]; ?></td>
                            <td>
                                <img src="<?php echo $tampil["foto"] ?>" alt="gambar" class="img-fluid" width="50">
                            </td>
                            <td><?php echo $tampil["gaji"]; ?></td>
                            <td><?php echo $tampil["no_hp"]; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

