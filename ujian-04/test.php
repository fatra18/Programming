<?php
function papancatur($baris, $kolom) {
    $x=1;
    echo "<table align=center border=1 cellspacing=0>";
    while ($x <= $baris) {
        echo "<tr>";
        $y=1;
        while ($y <= $kolom) {
            if (($x+$y) %2 > 0)
            echo "<td width=50 height=50  bgcolor=#000000>
                </td>";
            else
            echo "<td width=50 height=50 bgcolor=#ffffff>
                </td>";
            $y++;
        }
        echo "</tr>";
        $x++;
    }
    echo "</table><br><br>";
} 
?>