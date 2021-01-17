<table  width="70%" border="10" cellspacing="100" cellpadding="100" class="table table-bordered">
    <tr>
        <th align="right" scope="col">Nama Barang</th>
        <th align="right" scope="col">Harga</th>
        <th align="right" scope="col">Qty</th>
        <th align="right" scope="col">Total</th>
        <th align="right" scope="col">Aksi</th>
    </tr>
    <?php
    $total = 0;
    mysql_select_db($database, $koneksi);
    if (isset($_SESSION['penjualam'])) {
        foreach ($_SESSION['penjualan'] as $key => $val) {
            $query = mysql_query("select toko.id_penjualan, toko.nama, toko.harga from toko where toko.id_penjualan = '$key'");
            $query_row  = mysql_fetch_array($query);
            $jumlah_harga = $query_row ['harga'] * $val * 1000;
            $total += $jumlah_harga;
            ?>
            <tr>
                <td><?php echo $query_row ['id_penjualan']; ?> </td>
                <td><a href="#"><?php echo $query_row ['nama']; ?> </a></td>
                <td align="right">Rp. <?php echo($query_row ['harga']); ?></td>
                <td align="right"><?php echo($val); ?></td>
                <td align="right">Rp. <?php echo($jumlah_harga); ?></td>
                <td align="right"><a href="cart.php?act=plus&amp;id_penjualan=<?php echo $key; ?>&amp;ref=index.html?p=wanita"><i class='glyphicon glyphicon-plus'></i></a>
				<a href="cart.php?act=min&amp;id_penjualan=<?php echo $key; ?>&amp;ref=index.html?p=wanita"><i class='glyphicon glyphicon-minus'></i></a> 
				<a href="cart.php?act=del&amp;id_penjualan=<?php echo $key; ?>&amp;ref=index.html?p=wanita" ><i class='glyphicon glyphicon-remove'>                 
                </i></a>
                <a href="print.php"> Beli </a>
                </td>
            </tr>
            <?php
            mysql_free_result($query);
        }
    }
    ?>
    <tr>
        <td colspan="4"><h4><b><center>Total</center><b></h4></td>        
        <td align="right">Rp. <?php echo number_format($total); ?></td>
        <td align="right"><a href="index.html?wanita"><i class='glyphicon glyphicon-arrow-left'></i></a>
		<a href="cart.php?act=clear&amp;ref=index.htmlp?p=wanita"><i class='glyphicon glyphicon-trash'></i></a></td>  
    </tr>
</table>