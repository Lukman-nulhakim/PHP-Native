<?php 

    $calonSiswa = [
        [
        "Nama" => "lukman",
        "Alamat" => "bandung",
        "No_Hp" => "08133222211",
        "Email" => "lukmannurhakim1402@gmail.com",
        "Nama_ortu" => "Emak",
        "Foto" => "lukman"
        ],
        [
        "Nama" => "rohit",
        "Alamat" => "tangerang",
        "No_Hp" => "08143534656",
        "Email" => "lutkjrj@gmail.com",
        "Nama_ortu" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nama" => "salman",
        "Alamat" => "cipondih",
        "No_Hp" => "08943545366",
        "Email" => "kmj5ijl@gmail.com",
        "Nama_ortu" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nama" => "sahrul",
        "Alamat" => "pasarLama",
        "No_Hp" => "084354565656",
        "Email" => "ffgfaha@gmail.com",
        "Nama_ortu" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nama" => "hotman",
        "Alamat" => "grendeng",
        "No_Hp" => "089456255757",
        "Email" => "sfgjhgj@gamil.com",
        "Nama_ortu" => "emak",
        "Foto" => "lukman"
        ]
    ];

    foreach($calonSiswa as $tampil){
        $tampil;
    }

    $siswaAktif = [
        [
        "Nik" => "111",
        "Nama" => "lukman",
        "Alamat" => "bandung",
        "No_Hp" => "08133222211",
        "Email" => "lukmannurhakim1402@gmail.com",
        "CV" => "Emak",
        "Foto" => "lukman"
        ],
        [
        "Nik" => "222",
        "Nama" => "rohit",
        "Alamat" => "tangerang",
        "No_Hp" => "08143534656",
        "Email" => "lutkjrj@gmail.com",
        "CV" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nik" => "333",
        "Nama" => "salman",
        "Alamat" => "cipondih",
        "No_Hp" => "08943545366",
        "Email" => "kmj5ijl@gmail.com",
        "CV" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nik" => "444",
        "Nama" => "sahrul",
        "Alamat" => "pasarLama",
        "No_Hp" => "084354565656",
        "Email" => "ffgfaha@gmail.com",
        "CV" => "emak",
        "Foto" => "lukman"
        ],
        [
        "Nik" => "555",
        "Nama" => "hotman",
        "Alamat" => "grendeng",
        "No_Hp" => "089456255757",
        "Email" => "sfgjhgj@gamil.com",
        "CV" => "emak",
        "Foto" => "lukman"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="" href="style.css">
    <title>Document</title>

</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark justify-content-end py-3">
        <ul class="nav">
            <li class="nav-item px-1">
                <a class="nav-link text-white bg-info rounded" href="#">Home</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link text-white bg-info rounded" href="#">About Us Siswa</a>
            </li>
            <li class="nav-item px-1">
                <a class="nav-link text-white bg-info rounded" href="#">Contact</a>
            </li>
        </ul>
    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Welcome To School</h1>
            <p class="lead">This is a modified jumbotron that occupies the entire horizontal space<br>of its parent Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde,<br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda, nulla!</p>
            <?php foreach($calonSiswa as $tampil){ ?>
            <a class="btn btn-warning" href="calonsiswa.php?Nama="><?php echo $tampil["Nama"]; ?></a>
            <?php } ?>
            <br>
            <button type="button" class="btn btn-warning rounded-pill"><a href="">Siswa Aktif</a></button>
            </div>
    </div>
    

</body>
</html>