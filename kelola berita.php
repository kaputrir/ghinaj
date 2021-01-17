<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin GhiNaj Shop &mdash; Pemrograman Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="admin.php" class="js-logo-clone">Admin GhiNaj</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
        
                <li class="active"><a href="kelola berita.php">Kelola Berita</a></li>
                <li><a href="produk.php">Kelola Produk</a></li c>
                <li><a href="pesanan.php">Kelola Pesanan</a></li>
                <li><a href="kelola video.php">Kelola Video</a></li>
                <li><a href="login.php">Login</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
           
          </div>
        </div>
      </div>
    </div>

    

    


    

    <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase">KELOLA BERITA</h2>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading"> <center> <h3>Kelola Berita</h3></center></div></div>

            <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 <th><i class="icon_profile"></i> Gambar</th>
                                 <th><i class="icon_mail_alt"></i> Judul</th>
                                 <th><i class="icon_pin_alt"></i> Link</th>
                                 <th><i class="icon_cogs"></i> Action</th>
                              </tr>
					<?php  
  $sql = mysqli_query($con,"SELECT * FROM berita ORDER BY id_berita DESC");    
  while($hasil = mysqli_fetch_array($sql)) {     	
  $id=$hasil['id_berita'];
  $gambar = stripslashes($hasil['gambar']);
  $nama  = stripslashes($hasil['judul']);  
 	$situs = stripslashes($hasil['link']);  
  ?>		  
							<tr>
							<td>
							<?php echo $gambar;?>
							</td>
							<td>
							<?php echo $judul;?>
							</td>
							<td>
							<?php echo $link;?>
							</td>
							<td>
							<tr>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="admin.php?page=input_berita&id=<?php echo $id;?>"><i class="icon_plus_alt2"></i></a>
                                      <a class="btn btn-success" href="admin.php?page=edit_berita&id=<?php echo $id;?>"><i class="icon_check_alt2"></i></a>
                                      <a class="btn btn-danger" href="admin.php?page=delete_berita&id=<?php echo $id;?>"><i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
                              </tr>
	        <?php } ?>
		</tbody>
                        </table>

            <table  width="70%" border="10" cellspacing="100" cellpadding="100" class="table table-bordered">
             <tr>
                 <th align="right" scope="col">Kategori</th>
                 <th align="right" scope="col">Judul</th>
                 <th align="right" scope="col">Jumlah</th>
             </tr>
                     <tr>
                         <td>Fashion</td>
                         <td>Trend Fashion 2019</td>
                         <td>2</td>
                         
                     </tr>
                     <?php
                     mysql_free_result($query);
                 
             
             ?>
          
         </table>

          </table>
                       
            </div>

        </div>
          
        </div>

  

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="wanita.php" class="block-6">
              <img src="images/navy mini dress.png" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Find Your Perfect Dress This Summer</h3>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled">
                <li class="address">Jl. Imam Bonjol No. 207, Pendrikan Kidul, Semarang Tengah</li>
                <li class="phone"><a href="tel://6287720112001">+62 877 2011 2001</a></li>
                <li class="email">kinantiayudyaputri@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading">Subscribe</label>
                <div class="form-group">
                  <input type="text" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value="Send">
                </div>
              </form>
            </div>
          </div>
          </div>
          
          
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank" class="text-primary"></a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>