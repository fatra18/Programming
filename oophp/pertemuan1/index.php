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
    class Mobil{

        // properti
        public $merek;  

        public $rilis;

        public $mesin;

        // method

        public function setMerek($nama_merek)
        {
            $this->merek = $nama_merek;
        }
        
        public function setRilis($tahun_rilis)
        {
            $this->rilis = $tahun_rilis;
        }
        
        public function setMesin($jenis_mesin)
        {
            $this->mesin = $jenis_mesin;
        }
    }
    
    $ferari = new Mobil();
    $ferari->setMerek('Toyota');
    $ferari->setRilis(2010);
    $ferari->setMesin('Diesel');

    echo $ferari->merek . "</br>";
    echo $ferari->rilis . "</br>"; 
    echo $ferari->mesin   
    
    ?>
</body>
</html>