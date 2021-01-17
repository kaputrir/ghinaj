<?php
session_start();
include "koneksi.php";
$sid = session_id();

$sql=mysql_query("SELECT id_produk FROM keranjang WHERE id_produk='$_GET[id]' AND id_session='$sid'");
    $ketemu=mysql_num_rows($sql);
    if($ketemu==0)
    {
        mysql_query("INSERT INTO keranjang (id_produk,jumlah,id_session)
        VALUES('$_GET[id]',1,'$sid')");
    }
    else
    {
        mysql_query("UPDATE keranjang
                    SET jumlah = jumlah+1
                    WHERE id_session = '$sid' AND id_produk='$_GET[id]'");
    }
    header('Location : keranjang.php');
?>