<?php
session_start();
include "koneksi.php";
echo"<h1>Daftar Produk</h1>
    <ul>";
$r=mysql_query("SELECT * FROM wanita");
while($d=mysql_fetch_array($r))
{
    echo "<li>$d[nama] : $d[harga] || <a href='aksi_keranjang.php?id=$d[id_pakaian]'>Beli</a></li>";
}
echo"</ul>";
?>