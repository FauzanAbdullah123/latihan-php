<?php
function luas_segitiga($alas, $tinggi){
    return 0.5 * $alas * $tinggi;
}
$a=10;
$t=12;
echo "Dik : <br>Alas = $a <br> Tinggi = $t<br>";
echo "<br>Dit : Luas?<br><br> Jawab : <br>Rumus : 0.5 x alas x tinggi <br>0.5 x $a x $t = ";
echo luas_segitiga($a, $t);