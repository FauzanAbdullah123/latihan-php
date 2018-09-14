<?php
for ($a=1; $a<=30; $a++){
    echo "$a ";
}echo "Didalam kelas ada $a orang";
echo "<br>";

$i=1;
while ($i<=10){
    echo $i++. " " ;
}echo " ada $i kelas";
echo "<br>";

$n=95;
echo "penilaian kelas anda adalah = $n";
if ($n>=75){
    echo "<br>Kelas anda bersih";
    echo "<br>";
}else{
    echo "<br>Kelas anda kotor";
    echo "<br>";
}

switch($n){
    case '90': $kelas="Kelas anda bersih"; break;
    case '93': $kelas="Kelas anda lebih bersih"; break;
    case '95': $kelas="Kelas anda paling bersih"; break;
}
echo "Dari $a orang dan $i kelas. Kelas yang mendapatkan penghargaan adalah $n, $kelas";