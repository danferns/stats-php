<?php
date_default_timezone_set("GMT"); //replce with your time zone https://www.php.net/manual/en/timezones.php
$statsFile = fopen('stats.txt','a');
fwrite($statsFile, date("Y,F,j,G:i A",time()).",".$_SERVER[REQUEST_URI].",".$_SERVER[HTTP_REFERER].",".trim(file_get_contents("https://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/country"))."\n");
fclose($statsFile);
?>
<html>
        <head>
                <title>Hello World!</title>
        </head>
        <body>
                Just wanted to show that HTML content of the page goes in this file too.
        </body>
</html>
