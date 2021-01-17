<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Order</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Order
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                  
                                <!-- Ganti -->
                                 <th> ID Produk</th>
                                 <th> ID Promo</th>
                                 <th> Jumlah</th>
                                 <th> Total Harga</th>
								 <th> Nama</th>
                                 <th> Alamat</th>
                                 <th> Kota</th>
								 <th> Email</th>
								 <th> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM checkout ORDER BY id_checkout DESC");    
  while($hasil = mysqli_fetch_array($sql)) {     	
    $id = $hasil['id_checkout'];
    $produk  = stripslashes($hasil['id_produk']);  
 	$promo = stripslashes($hasil['id_promo']);  
 	$jumlah = stripslashes($hasil['jumlah']);  
 	$total = stripslashes($hasil['totalharga']);  
 	$nama = stripslashes($hasil['nama']);
 	$alamat = stripslashes($hasil['alamat']);
 	$kota = stripslashes($hasil['kota']);
 	$email = stripslashes($hasil['email']);
  ?>		  
							<tr>
								<td>
									<?php echo $produk;?>
								</td>
								<td>
									<?php echo $promo;?>
								</td>
								<td>
									<?php echo $jumlah;?>
								</td>
								<td>
									<?php echo $total;?>
								</td>
								<td>
									<?php echo $nama;?>
								</td>
								<td>
									<?php echo $alamat;?>
								</td>
								<td>
									<?php echo $kota;?>
								</td>
								<td>
									<?php echo $email;?>
								</td>
								<td>
									<div class="btn-group">
										<a class="btn btn-success" href="index.php?page=edit_order&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
										<a class="btn btn-danger" href="index.php?page=delete_order&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
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