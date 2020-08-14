<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PERLENGKAPAN DUEL </h1>
    <a href="?data=dokter">dokter</a>
    <a href="?data=perawat">perawat</a>
    <a href="?data=pasien">pasien</a>
    <?php 
        if(isset($_GET["data"])){
            $url=$_GET["data"];
            switch ($url) {
                case 'dokter':
                    include "dokter.php";
                    break;
                case 'perawat':
                    include "perawat.php";
                    break;
                case 'pasien':
                    include "pasien.php";
                    break;
                
                default:
                    echo "nyari apa emang ??";
                    break;
            }
        } else {
            echo "zona merah";
        }
    ?>
</body>
</html>