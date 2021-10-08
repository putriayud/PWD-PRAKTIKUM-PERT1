<?
	$myDir = "c:/wamp/www/NIM";
	$dir = opendir($myDir);
	echo "Isi folder (klik link untuk download : <br>";
	while($tmp = reddir($dir)){
	echo "<a herf='$tmp' target='_blank'>$tmp</a><br>";
	}
	closedir($dir);
?>