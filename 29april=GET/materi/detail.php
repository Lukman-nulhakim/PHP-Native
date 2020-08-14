<?php 

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
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Bagian</th>
                    <th scope="col">Gaji</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_GET["Nik"]; ?></td>
                    <td><?php echo $_GET["nama"]; ?></td>
                    <td><?php echo $_GET["alamat"]; ?></td>
                    <td><?php echo $_GET["bagian"]; ?></td>
                    <td><?php echo $_GET["gaji"]; ?></td>
                    <td>
                        <img src="img/<?php echo $_GET["foto"] ?>" alt="gambar" class="img-fluid" width="100">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>