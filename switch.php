<?php
$time = date ("H:m s A");
$day = date ("D");
$tgl = date ("G");
$month = date ("M");
$tahun = date ("Y");
echo "Sekarang pukul <b>$time</b><br><br>";
switch ($day){
    case 'Sun' : $hari = "Minggu"; break;
    case 'Mon' : $hari = "Senin"; break;
    case 'Tue' : $hari = "Selasa"; break;
    case 'Wed' : $hari = "Rabu"; break;
    case 'Thu' : $hari = "Kamis"; break;
    case 'Fri' : $hari = "Jum'at"; break;
    case 'Sat' : $hari = "Sabtu"; break;
    default    : $hari = "Kiamat";
}
echo "Hari ini adalah hari <b>$hari</b><br><br>";
echo "Sekarang tanggal <b>$tgl</b><br><br>";

switch ($month){
    case 'Jan' : $bulan = "Januari"; break;
    case 'Feb' : $bulan = "Februari"; break;
    case 'Mar' : $bulan = "Maret"; break;
    case 'Apr' : $bulan = "April"; break;
    case 'May' : $bulan = "Mei"; break;
    case 'Jun' : $bulan = "Juni"; break;
    case 'Jul' : $bulan = "Juli"; break;
    case 'Aug' : $bulan = "Agustus"; break;
    case 'Sep' : $bulan = "September"; break;
    case 'Oct' : $bulan = "Oktober"; break;
    case 'Nov' : $bulan = "November"; break;
    case 'Des' : $bulan = "Desember"; break;
    default    : $bulan ="Kiamat";
}
echo "Bulan ini adalah bulan <b>$bulan</b><br><br>";
echo "Dan sekarang tahun <b>$tahun</b>";