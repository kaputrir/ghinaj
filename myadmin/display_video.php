<?php  
include "mysqli_koneksi.php";  ?>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Video</li>						  	
					</ol>
				</div>
			</div>              
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Video
                          </header>
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                  
                                <!-- Ganti -->
                                 <th> Judul Video</th>
                                 <th> Url Video</th>
                                 <th> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM video ");    
  while($hasil = mysqli_fetch_array($sql)) {     	
    $id = $hasil['id_video'];
    $judul  = stripslashes($hasil['judul']);  
 	$url = stripslashes($hasil['link']);  
  ?>		  
							<tr>
							<td>
							<?php echo $judul;?>
							</td>
							<td>
							<?php echo $url;?>
							</td>
							<td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="index.php?page=input_video&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="index.php?page=edit_video&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="index.php?page=delete_video&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
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