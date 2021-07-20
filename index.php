<?php
date_default_timezone_set("GMT"); // replace this with your time zone from https://www.php.net/manual/en/timezones.php
$statsFile = fopen('stats.txt','a');
fwrite($statsFile, date("Y,F,j,G:i A",time()).",".$_SERVER[REQUEST_URI].",".$_SERVER[HTTP_REFERER].",".trim(file_get_contents("https://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/country"))."\n");
fclose($statsFile);
?>
