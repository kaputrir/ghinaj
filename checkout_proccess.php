<?php
    include "koneksi.php";
    //proses input berita
    if (isset($_POST['Input'])) {
    $produk = addslashes (strip_tags ($_POST['id']));
    $promo = addslashes (strip_tags ($_POST['promo']));
    $jumlah = addslashes (strip_tags ($_POST['jumlah']));
    $total = addslashes (strip_tags ($_POST['total']));
    $nama = addslashes (strip_tags ($_POST['nama']));
    $alamat = addslashes (strip_tags ($_POST['alamat']));
    $kota = addslashes (strip_tags ($_POST['kota']));
    $email = addslashes (strip_tags ($_POST['email']));
    //insert ke tabel
    $query = "INSERT INTO checkout(id_produk,id_promo,jumlah,totalharga,nama,alamat,kota,email) VALUES('$produk','$promo','$jumlah','$total','$nama','$alamat','$kota','$email')";
    $sql = mysqli_query ($koneksi,$query);
    if ($sql) {
    //echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Checkout berhasil ditambahkan......');  

 		document.location='index.php';  

	</script>
<?php	
} else {
    ?>
	<script language="JavaScript">  

		alert('Checkout gagal ditambahkan......');

        document.location='index.php';  

	</script>
<?php	
}
}
?>