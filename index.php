<?php
date_default_timezone_set("GMT"); //replce with your time zone https://www.php.net/manual/en/timezones.php
$statsFile = fopen('../stats.txt','a');
fwrite($statsFile, date("Y,F,j,G:i A",time()).",".$_SERVER[REQUEST_URI].",".$_SERVER[HTTP_REFERER].",".file_get_contents("https://ipinfo.io/{$_SERVER['REMOTE_ADDR']}/country"));
fclose($statsFile);
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Page Title</title>
	</head>
  <body>
    HTML stuff of the page...
  </body>
</html>
