<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['submit'])){ ?>
        <h1>Nama Anda Adalah : <b><?php echo $_POST ['nama']; ?></b></h1>
        <h1>Alamat Anda Di : <b><?php echo $_POST ['alamat']; ?></b></h1>
    <?php } ?>
</body>
</html>