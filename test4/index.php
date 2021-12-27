<?php
 
    class Character{

        protected $nama;

        protected $harga;


        function __construct($nama,$harga)
        {
            $this->nama = $nama;
            $this->harga = $harga;
           

            if($this->harga < 10000){
                echo $this->nama , "ini terlalu murah";
            }elseif($this-> harga > 1000000 && $this->harga < 999999999999999){
                echo $this->nama .'ini terlalu mahal';
            }else{
                echo 'produk kami habis';
            }
        }

        public function tes(){
            echo $this->nama ."mau apa kamu";
        }

    }
   
    
    class Beli extends Character{
        public function message()
        {
            echo "sana miskin pergi";
        }
    }

   /*  $a = new Character('muji',9999999); */
    $harga = new Beli('muji',9999999);
    $harga->message();
        
        
    

?>