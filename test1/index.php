<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP | PERTEMUAN 1</title>
</head>
<body>
    <?php
    
    // class
    class Fruit{

        // properti
        public $buah;  

        public $warna;

        public $rasa;

        // method

        public function setBuah($nama_buah)
        {
            $this->buah = $nama_buah;
            echo $this->buah . "</br>";
        }
        
        public function setWarna($nama_warna)
        {
            $this->warna = $nama_warna;
            echo $this->warna . "</br>";
        }
        
        public function setRasa($jenis_rasa)
        {
            $this->rasa = $jenis_rasa;
            echo $this->rasa . "</br>";
        }
    }

    $apel = new Fruit();
    $apel->setBuah('apel');
    $apel->setWarna('hijau');
    $apel->setRasa('manis');

    echo "=================================================== . </br>";   

    class Makanan{

        // properti

        public $nama;

        public $harga;

        // method

    public function setNama($nama_makanan)
    {
        $this->nama = $nama_makanan;
        echo $this->nama ."</br>";
    }
    public function setHarga($nama_harga)
    {
        $this->harga = $nama_harga;
        echo $this->harga ;
    }
    }

    $mie = new Makanan();
    $mie->setNama('mieayam');
    $mie->setHarga(10000) . "</br>";

    echo "<br> ";

    class Smartphone{
        
        // properti
        public $merek;

        public $harga;

        public $warna;

        // method

        public function setMerek($nama_merek){
            $this->merek = $nama_merek;
            echo $this->merek . "</br>";
        }

        public function setHarga($nama_harga){
            $this->harga = $nama_harga;
            echo $this->harga . "</br>";
        }
        
        public function setWarna($nama_warna){
            $this->warna = $nama_warna;
            echo $this->warna . "</br>";
        }
    }
        $hp = new Smartphone();
        $hp->setMerek('apple');
        $hp->setHarga(10000000);
        $hp->setWarna('blue')
    ?>

    

</body>
</html>