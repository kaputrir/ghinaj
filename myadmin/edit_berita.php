<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id_berita = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
$query = "SELECT id_berita, gambar, judul, link FROM berita WHERE id_berita='$id_berita'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);
$id_berita = $hasil['id_berita'];
$gambar = stripslashes ($hasil['gambar']);
$judul = stripslashes ($hasil['judul']);
$link = stripslashes ($hasil['link']);
//proses edit berita
if (isset($_POST['Edit'])) {
$id_berita = $_POST['hidberita'];
$gambar = addslashes (strip_tags ($_POST['gambar']));
$judul = addslashes (strip_tags ($_POST['judul']));
$link = addslashes (strip_tags ($_POST['link']));
//update berita
$query = "UPDATE berita SET gambar='$gambar',judul='$judul',link='$link'
WHERE id_berita='$id_berita'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update');  
 		document.location='index.php?page=berita';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Berita gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Berita</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=berita';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Berita</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

<tr>
<td width="200">Gambar Berita</td>
<td>: <input type="text" name="gambar"
size="30" value="<?php echo $gambar ?>"></td>
</tr>
<tr>
<td width="200">Judul Berita</td>
<td>: <input type="text" name="judul"
size="30" value="<?php echo $judul ?>"></td>
</tr>

<tr>
<td>Link Berita</td>
<td>: <textarea name="link" cols="50"
rows="4"><?=$link?></textarea></td>
</tr>

<!--
<td>: <textarea name="isi" cols="50"
rows="10">---</textarea></td> -->

</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hidberita" value="<?=$id_berita?>">
<input type="submit" name="Edit" value="Edit Berita">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>