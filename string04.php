<?php
$str = "Is your name O'Reilly ?";
$str2 = addslashes($str);
$str3 = stripslashes($str2);

echo "<b>String Asli</b> : $str";
echo "<br><b>Addslashes()</b> : $str2";
echo "<br><b>stripslashes()</b> : $str3";   