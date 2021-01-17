<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_produk = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Produk</title>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Delete Produk</li>						  	
					</ol>
				</div>
			</div>
<?php
//proses delete berita
if (!empty($id_produk) && $id_produk != "") {
$query = "DELETE FROM produk WHERE id_produk='$id_produk'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Berita telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Berita gagal dihapus</font></h2>";
}
echo "Klik <a href='index.php?page=produk'>di sini</a> untuk kembali ke halaman arsip produk";
} else {
die ("Access Denied");
}
?>
</body>
</html>