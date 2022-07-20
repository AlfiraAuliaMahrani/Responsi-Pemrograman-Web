<?php
echo "<head><title>My Guest Book</head></title>";
$fp =fopen("laundry.txt","a+");
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$no  = $_POST ['no'];
$js = $_POST ['js'];
$paket = $_POST ['paket'];
$komentar = $_POST ['komentar'];

fputs($fp, "$nama|$alamat|$no|$js|$paket|$komentar\n");
fclose($fp);



//tampilkan
echo ("<table width=1000 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=##451155><tr>");
echo ("<td width=1000 valign=middle align= center>");
echo("<font face =arial size =5 color=#451155<br>");
echo ("TERIMA KASIH SUDAH BEKUNJUNG");
echo ("<br>");

echo "Today is " . date("d-m-Y") . "<br>";
echo "Today is " . date("l"). "<br>";
echo date("h:i:sa");
echo ("</b></font>");
echo ("</td>");
echo ("</tr></table>");
echo "<br>";
echo "<a href=lihat.php> **LIHAT ISI PESANAN** </a><br><br>";
echo "<a href=tampilan.html   > **KEMABALI KE HALAMAN UTAMA** </a><br><br>";


?>