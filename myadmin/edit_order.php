<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT * FROM checkout WHERE id_checkout='$id'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id = $hasil['id_checkout'];
$jumlah = stripslashes ($hasil['jumlah']);
$total = stripslashes ($hasil['totalharga']);
$nama = stripslashes ($hasil['nama']);
$alamat = stripslashes ($hasil['alamat']);
$kota = stripslashes ($hasil['kota']);
$email = stripslashes ($hasil['email']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id = $_POST['id'];
$jumlah = addslashes (strip_tags ($_POST['jumlah']));
$total = addslashes (strip_tags ($_POST['total']));
$nama = addslashes (strip_tags ($_POST['nama']));
$alamat = addslashes (strip_tags ($_POST['alamat']));
$kota = addslashes (strip_tags ($_POST['kota']));
$email = addslashes (strip_tags ($_POST['email']));
//update berita
$query = "UPDATE checkout SET jumlah='$jumlah',totalharga='$total',nama='$nama',alamat='$alamat',kota='$kota',email='$email' WHERE id_checkout='$id'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update');  
 		document.location='index.php?page=order';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Order gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Order</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=order';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Order</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Jumlah</td>
<td>: <input type="text" name="jumlah" size="30" value="<?php echo $jumlah ?>"></td>
</tr>
<tr>
<td width="200">Total Harga</td>
<td>: <input type="text" name="total" size="30" value="<?php echo $total ?>"></td>
</tr>
<tr>
<td width="200">Nama</td>
<td>: <input type="text" name="nama" size="30" value="<?php echo $nama ?>"></td>
</tr>
<tr>
<td width="200">Alamat</td>
<td>: <input type="text" name="alamat" size="30" value="<?php echo $alamat ?>"></td>
</tr>
<tr>
<td width="200">Kota</td>
<td>: <input type="text" name="kota" size="30" value="<?php echo $kota ?>"></td>
</tr>
<tr>
<td width="200">Email</td>
<td>: <input type="text" name="email" size="30" value="<?php echo $email ?>"></td>
</tr>

<!--
<td>: <textarea name="isi" cols="50"
rows="10">---</textarea></td> -->

</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="id" value="<?=$id?>">
<input type="submit" name="Edit" value="Edit Order">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>