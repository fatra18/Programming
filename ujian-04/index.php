  <h1>Looping 1</h1>
  <?php 
    for ($a=5;$a>0;$a--)
    {
    for($b=6;$b>$a;$b--)    
    echo    " *" ;
    {
    echo    "<br>";
    }
    
}
    
?>

<h1>Looping 2</h1>
<?php
for($i=0;$i<=5;$i++){
    echo "";
    for($d=6-$i;$d>0;$d--){
        echo'&nbsp'.'&nbsp';
    }
    for($j=1;$j<=$i;$j++){
        echo"&nbsp;".$i."&nbsp;";
    }
    echo "<br>";
}
?>


<h1>Lopping 3</h1>
<?php
    function print_pattern($num){
        for($a = 1; $a <= $num; $a++){
            for($b =$num; $b > $a; $b--){
                echo ""; }
            for($c = 1; $c <= $a; $c++){
                echo chr(64+$c)."";}
            for($c = $a-1; $c >= 1; $c--){
                echo chr(64+$c),"";}
                echo "<br>"; }        
        }
        $num =26; print_pattern($num);

    

?>

<h1>Looping 4</h1>
<table border="1"><tr><br>
<?php
$color = 'black';
function printcolor($color, $nl) {

    echo '<td style="width:50px; height:50px; background:' . $color . '"></td>';
    if ($nl == true) {
        echo "</tr><tr>";
    }
}
for ($i=1; $i<=64;$i++) {
    if ($i % 8 == 0 && $color == "black") {
        $color = "white";
        $nl = true;
    } elseif ($i % 8 == 0 && $color == "white") {
        $color = "black";
        $nl = true;
    } elseif (isset($nl) && $nl == true) {      
        $nl = false;
    } elseif ($color == "black") {
        $nl = false;
        $color = "white";           
        } 
    elseif ($color == "white")  {
        $nl = false;
        $color = "black";
    }       
    printcolor($color, $nl);
}

?>
