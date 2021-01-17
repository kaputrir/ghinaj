<?php
include "mysqli_koneksi.php";
//proses input berita
if (isset($_POST['Input'])) {
$judul = addslashes (strip_tags ($_POST['judul']));
$link = addslashes (strip_tags ($_POST['link']));
//insert ke tabel
$query = "INSERT INTO video(judul,link) 
VALUES('$judul','$link')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Video berhasil ditambahkan......');  

 		document.location='index.php?page=video';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Video gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Video</title>
<script language="JavaScript">  
function batal(){
 		document.location='index.php?page=video';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Video</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

	<tr>
		<td width="200">Judul Video</td>
		<td>: <input type="text" name="judul" size="30"></td>
	</tr>
	<tr>
		<td>Link Video</td>
		<td>: <input type="text" name="link" size="30"></td>
	</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Video">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>