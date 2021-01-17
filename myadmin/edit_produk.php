<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
    $id_produk = $_GET['id'];
} else {
    die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM produk WHERE id_produk='$id_produk'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_produk = $hasil['id_produk'];
$nama = stripslashes ($hasil['nama']);
$harga = stripslashes ($hasil['harga']);
$stok = stripslashes ($hasil['stok']);
$gambar = stripslashes ($hasil['gambar']);
$id_kategori = stripslashes ($hasil['id_kategori']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_produk = $_POST['id'];
$nama = addslashes (strip_tags ($_POST['nama']));
$harga = $_POST['harga'];
$stok = addslashes (strip_tags ($_POST['stok']));
$gambar = addslashes (strip_tags ($_POST['gambar']));
$id_kategori = addslashes (strip_tags ($_POST['id_kategori']));
//update berita
$query = "UPDATE produk SET nama='$nama',harga='$harga',stok='$stok', gambar='$gambar',id_kategori='$id_kategori' WHERE id_produk='$id_produk'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Produk telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update');  
 		document.location='index.php?page=produk';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Produk gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Produk</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=produk';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Produk</li>						  	
					</ol>
				</div>
			</div>

<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

	<tr>
		<td width="200">Nama Produk</td>
		<td>: <input type="text" name="nama" size="30" value="<?php echo $nama; ?>"></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:
			<select name="id_kategori">
			<?php
			$query = "SELECT id_kategori, nama FROM kategori ORDER BY nama";
			$sql = mysqli_query ($con,$query);
			while ($hasil = mysqli_fetch_array ($sql)) {
			echo "<option
			value='$hasil[id_kategori]'>$hasil[nama]</option>";
			}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Harga Produk</td>
		<td>: <input type="text" name="harga" value="<?php echo $harga; ?>"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>: <input type="text" name="stok" size="30" value="<?php echo $stok; ?>"></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>: <input type="text" name="gambar" value="<?php echo $gambar; ?>"></td>
	</tr>
<tr>
<td>&nbsp;</td>
<td>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    &nbsp;&nbsp;<input type="submit" name="Edit" value="Edit Produk">&nbsp;
    <input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>