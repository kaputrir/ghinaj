<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$gambar = addslashes (strip_tags ($_POST['gambar']));
$nama = addslashes (strip_tags ($_POST['nama']));
$kategori = $_POST['kategori'];
$harga = addslashes (strip_tags ($_POST['harga']));
$stok = addslashes (strip_tags ($_POST['stok']));

//insert ke tabel
$query = "INSERT INTO produk(gambar,nama,harga,stok,id_kategori) VALUES('$gambar','$nama','$harga','$stok','$kategori')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Berita berhasil ditambahkan......');  

 		document.location='index.php?page=produk';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Berita gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Produk</title>
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
						<li><i class="fa fa-laptop"></i>Input Produk</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

	<tr>
		<td width="200">Nama Produk</td>
		<td>: <input type="text" name="nama" size="30"></td>
	</tr>
	<tr>
		<td>Kategori</td>
		<td>:
			<select name="kategori">
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
		<td>: <input type="text" name="harga"></td>
	</tr>
	<tr>
		<td>Stok</td>
		<td>: <input type="text" name="stok" size="30"></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td>: <input type="text" name="gambar"></td>
	</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Produk">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>