<?php
    if(isset($_POST['itemtitle']))
    {
        $itemtitle = $_POST['itemtitle'];
        $itemprice = $_POST['itemprice'];
        echo "Nama Barang : ".$itemtitle." <br> Harga : ".$itemprice;
    }

  

?>