<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Produk</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              produk
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                  
                                <!-- Ganti -->
                                 <th> Produk</th>
                                 <th> Harga</th>
                                 <th></i> Stock</th>
                                 <th> Gambar</th>
								 <th> Kategori</th>
                                 <th> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM produk ORDER BY id_kategori DESC");    
  while($hasil = mysqli_fetch_array($sql)) {     	
	$id = $hasil['id_produk'];
	$gambar = stripslashes($hasil['gambar']); 
    $nama  = stripslashes($hasil['nama']);  
 	$harga = stripslashes($hasil['harga']);  
 	$stok = stripslashes($hasil['stok']);  
 	$ktgri = stripslashes($hasil['id_kategori']);
  ?>		  
							<tr>
							<td>
							<?php echo $nama;?>
							</td>
							<td>
							<?php echo $harga;?>
							</td>
							<td>
							<?php echo $stok;?>
							</td>
							<td>
							<?php echo $gambar;?>
							</td>
							<td>
								<?php echo $ktgri;?>
							</td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index.php?page=input_produk&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index.php?page=edit_produk&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_produk&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
            
   <!-- =============== -->
	        <?php } ?>
		</tbody>
                        </table>
                      </section>
                  </div>
              </div>