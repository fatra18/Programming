<?php

/* class Komputer{

    public $nama;

    public $merek;

    function __construct($nama, $merek)
    {
        $this->nama = $nama;
        $this->merek = $merek;

        echo 'komputer punya'.$this->nama.'mereknya'.$this->merek;
    }

    function tes()
    {
        echo 'tes';
    }
    
}
$komputer_1 = new Komputer('fatra','apple');
$komputer_1->tes(); */


class Hello{
    
    protected $jam;

    protected $nama;

    function __construct($jam,$nama){
        $this->jam = $jam;
        $this->nama = $nama;
        
        if($this->jam > 7 ){
            echo "selamat pagi".$this->nama;
            
        }elseif($this->jam >12 && $this->jam <18){
            echo "selamat sore".$this->nama;
        }else{
            echo"selamat malam".' '.$this->nama;
        }
    }

    function tes(){
        echo $this->nama ,"mau apa kamu";
    }
}
$waktu = new Hello(5,'muji');
class Pagi extends Hello{

    public function __construct()
    {
        echo"dari construct pagi";
    } 
    
        
    public function tes();
    {
        echo $this->nama;
    }
    }

 $waktu = new Pagi(11,'muji <br>'); 
 $waktu = new Pagi();
 $waktu->tes();

?>