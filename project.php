<?php
$uang = 50000;
$makan = 25000;
$minum = 10000;
$belanja = $uang-$makan-$minum;
$total = $uang-$belanja;

echo "Uang Harry = Rp. ".$uang."<br>";
echo "Makan = Rp. " .$makan."<br>";
echo "Minum = Rp. " .$minum."<br>";
echo "Harry Menghabiskan Uang sebesar = Rp. ".$total. "<br>";
echo "Sisa uang Harry = Rp. " .$belanja."<br>";

if(0<$belanja){
    echo "Dia <b>HEMAT</b>";
}else{
    echo "Dia <b>BOROS</b>";
}
?>