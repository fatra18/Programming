<?php

class Baju {

    //property 
    
    // hanya bisa dipanggil didalam class
    private $merek;

    private $warna;

    private $harga;

    // method

     function setMerek($merek_baju){
        $this->merek = $merek_baju;
        return $this-> merek . '</br>';
    }

     function setWarna($warna_baju){
        $this->warna = $warna_baju;
        echo $this-> warna . '</br>';
    }

     function setHarga($harga_baju){
        $this->harga = $harga_baju;
        echo $this-> harga . '</br>';
    }


}

$gucci = new Baju();
echo $gucci->setMerek('gucci');
$gucci->setWarna ('pink');
$gucci->setHarga(99999999);

echo "====================  </br>";

