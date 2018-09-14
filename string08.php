<?php
//contoh1
$buah = "mangga pisang rambutan apel jeruk kedondong";
$buahan = explode(" ", $buah);
echo $buahan [0]. "<br>"; 
echo $buahan [3]. "<br>";

//contoh2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list ($user, $pass, $uid, $gid, $gecos, $home, $shell) = 
explode(":", $data);
echo $user. "<br>"; //foo
echo $pass; //*
?>