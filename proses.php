<?
	echo"<head><title>My Guest Book</head></title>";
	$fp = fopen("guestbook.txt","a+");
	fputs($fp,"$nama | $alamat | $email | $status | $komentar\n");
	fclose($fp);
	echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
	echo "<a herf=tampilan.php>Isi Buku Tamu</a><br>";
	echo "<a herf=lihat.php>Lihat Buku Tamu</a><br>";
?>