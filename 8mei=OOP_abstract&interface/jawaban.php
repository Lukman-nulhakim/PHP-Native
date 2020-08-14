<?php 

class Mobil{
    private $merk;
    private $warna;
    public $harga;

    public function setDetail($merk, $warna, $harga){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->harga = $harga;
        
    }
    public function getMerk(){
        return $this->merk;
    }

}

class KeluargaBahagia extends Mobil {
    private $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function tampil(){
        return "$this->warna, $this->harga, $this->nama";
    }
}

class MobilSport extends Mobil{
    private $nama;

    public function setNama($nama){
        $this->nama = $nama;
    }

    public function getNama(){
        return $this->nama;
    }

    public function tampil(){
        return "$this->warna, $this->harga, $this->nama";
    }
}

// $cityCar = new KeluargaBahagia();
// $cityCar->setDetail("Avanza Velozz"," warna Biru","Harga Rp. 200.000.000");
// $cityCar->setNama("Milik Bapak Agus");
// echo $cityCar->getMerk().$cityCar->tampil();
// echo "<br>";

// $cityCar = new MobilSport();
// $cityCar->setDetail("Lamborghini "," warna Airbrush","Harga Rp. 10.000.000.000");
// $cityCar->setNama("Milik Kaka Lukman N.H");
// echo $cityCar->getMerk().$cityCar->tampil();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .jumbotron {
    background-image: url(jalan.jpg);
    background-size: cover;
}
    </style>
    
</head>
<body>
    <!-- Navbar -->
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark p-4">
            <h5 class="text-white h4">Collapsed content</h5>
            <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>

    <!-- content -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center text-white">Mobil Sejuta Umat VS Mobil Sport</h1>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mt-5 mb-3 text-light text-center font-weight-lighter">
                    <?php 
                        $cityCar = new KeluargaBahagia();
                        $cityCar->setDetail("Avanza Velozz"," warna Biru","Harga Rp. 200.000.000");
                        $cityCar->setNama("Milik Bapak Agus");
                        echo $cityCar->getMerk().$cityCar->tampil();
                    ?>
                    </h4>
                    <img src="avanza.jpg" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <h4 class="mt-5 mb-3 text-light text-center font-weight-lighter">
                    <?php  
                        $cityCar = new MobilSport();
                        $cityCar->setDetail("Lamborghini"," warna Ijo ","Harga Rp. 10.000.000.000");
                        $cityCar->setNama("Milik Kaka Lukman N.H");
                        echo $cityCar->getMerk().$cityCar->tampil();
                    ?>
                    </h4>
                    <img src="lambo1.jpg" class="img-fluid" alt="Responsive image">
                </div>
            </div>
        </div>
    </div>

</body>
</html>