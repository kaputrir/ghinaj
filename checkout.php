<?php
  include_once "koneksi.php";

  $id = $_POST['id'];
  $jumlah = $_POST['jumlah'];
  $total = $_POST['total'];
  $promo = $_POST['promo'];
  
  $query = mysqli_query($koneksi,"SELECT * from produk where id_produk='$id'");
  $hasil = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ShopMax &mdash; Checkout</title>
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
              <a href="index.html" class="js-logo-clone">ShopMax</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
        
                  <li><a href="index.php">Home</a></li>
                
                
                <li class="has-children active">
                <a href="pakaian.php">Pakaian</a>
                  <ul class="dropdown">
                    <li><a href="wanita.php">Wanita</a></li>
                    <li><a href="pria.php">Pria</a></li>
                    <li><a href="sport.php">Sport</a></li>
                  </ul>
                </li>
                <li><a href="hijab.php">Hijab</a></li>
                <li><a href="aksesoris.php">Aksesoris</a></li>
                <li><a href="promo.php">Promo</a></li>
                <li><a href="berita.php">Berita</a></li>
                <li><a href="video.php">Video</a></li>
                <li><a href="contact.php">Kontak</a></li>
                <li><a href="fitur.php">Fitur Lain</a></li>
              </ul>
            </nav>
          </div>
        
        <div class="icons">
          <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
          <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
          <a href="keranjang.php" class="icons-btn d-inline-block bag">
            <span class="icon-shopping-bag"></span>
            
          </a>
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
        </div>
        </div>
      </div>
    </div>
    
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.php">Cart</a> </a><span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            
          </div>
        </div>
        <form action="checkout_proccess.php" method="POST">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="nama" class="text-black">Nama Lengkap <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="alamat" class="text-black">Alamat <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="kota" class="text-black">Kota <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="email" class="text-black">Email Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                </div>
              </div>

            </div>
          </div>
          <div class="col-md-6">
            
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $hasil['nama']; ?> <strong class="mx-2">x</strong> <?php echo $jumlah; ?></td>
                        <td><?php echo $hasil['harga']*$jumlah; ?></td>
                      </tr>
                      <?php
                        if($promo!=""){?>
                            <tr>
                              <td class="text-black font-weight-bold"><strong>Discount</strong></td>
                              <td class="text-black font-weight-bold"><strong><?php echo ($hasil['harga']*$jumlah)-$total; ?></strong></td>
                            </tr>
                        <?php }
                      ?>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong><?php echo $total; ?></strong></td>
                      </tr>
                    </tbody>
                  </table>

                  <div class="form-group">
                    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
                    <input type="text" name="promo" value="<?php echo $promo; ?>" hidden>
                    <input type="text" name="jumlah" value="<?php echo $jumlah; ?>" hidden>
                    <input type="text" name="total" value="<?php echo $total; ?>" hidden>
                    <button class="btn btn-primary btn-lg btn-block" name="Input">Place Order</button>
                  </div>

                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- </form> -->
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
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
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