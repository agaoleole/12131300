<?php
$koneksi=mysql_connect("localhost","root","") or die ("Koneksi gagal");
$sql="select * from tb_mahasiswa ORDER BY id ASC";
$query=mysql_db_query("db_webdinamis",$sql,$koneksi);

echo "<table border='0' width='100%' cellpadding='2' cellspacing='2'>";
echo "<tr bgcolor='#000099' align='center'>";
echo "<td width='40'><font color='white'>No</font></td>";
echo "<td><font color='white'>Nama</font></td>";
echo "<td><font color='white'>Alamat</font></td>";
echo "<td><font color='white'>Telepon</font></td>";
echo "</tr>";

$i=0; 
while ($hasil=mysql_fetch_array($query))
{
 $i+=1;
 $sisa=$i%2;
 if ($sisa == 0)  {
    $warna = '#FFFFFF';
 }
 else {
    $warna = '#66CC00';
 }
    echo "<tr bgcolor='$warna'>";
    echo "<td bgcolor='$warna' align='center'>$i";
    echo "<td bgcolor='$warna'>$hasil[nama]";
    echo "<td bgcolor='$warna'>$hasil[alamat]";
    echo "<td bgcolor='$warna'>$hasil[telepon]";
}

echo "</table>";
mysql_close();
?>