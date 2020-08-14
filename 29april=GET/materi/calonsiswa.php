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
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No_Hp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama_ortu</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $_GET["Nama"]; ?></td>
                    <td><?php echo $_GET["Alamat"]; ?></td>
                    <td><?php echo $_GET["No_Hp"]; ?></td>
                    <td><?php echo $_GET["Email"]; ?></td>
                    <td><?php echo $_GET["Nama_ortu"]; ?></td>
                    <td>
                        <img src="img/<?php echo $_GET["Foto"] ?>" alt="gambar" class="img-fluid" width="100">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>