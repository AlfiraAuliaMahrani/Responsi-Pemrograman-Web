<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("laundry.txt", "r");
echo ("<table width=1000 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=##451155><tr>");
echo ("<td width=1000 valign=middle align= center>");
echo("<font face =arial size =5 color=#451155<br>");
echo ("DETAIL PESANAN");
echo ("</tr></table>");
echo "<br>";
echo "<table border='0'>";

while ($isi = fgets($fp))
{
    $pisah = explode("|", $isi);
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>No Tlpn </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>Jenis Pakaina </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>Paket Diambil </td><td>: $pisah[4]</td></tr>";
    echo "<tr><td>Pesan </td><td>: $pisah[5]</td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";

}
    echo "</table>";
    echo "<a href='tampilan.html'> Klik Disini Untuk Kembali </a> ";
    ?>

