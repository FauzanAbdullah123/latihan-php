<?php
function luas_persegipanjang($panjang, $lebar){
    return $panjang * $lebar;
}
$p=15;
$l=10;
echo "Dik : <br>Panjang = $p <br> Lebar = $l<br>";
echo "<br>Dit : Luas? <br><br>Jawab : <br>Rumus : P x L <br>$p x $l = ";
echo luas_persegipanjang($p, $l);