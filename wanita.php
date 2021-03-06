<?php include_once "koneksi.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GhiNaj Shop &mdash; Pakaian Wanita</title>
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
              <a href="index.php" class="js-logo-clone">GhiNaj</a>
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
            <a href="cart.php" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    

    <div class="container">
            <div class="row">
              <div class="title-section mb-5 col-12">
                <h2 class="text-uppercase">Pakaian Wanita</h2>
              </div>
            </div>
            <div class="row">

              <?php
                $query = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_kategori IN('1')");
                while($hasil = mysqli_fetch_array($query)){ 
                    ?>
                    <div class="col-lg-4 col-md-6 item-entry mb-4">
                      <a href="#" class="product-item md-height bg-gray d-block">
                        <img src="<?php echo $hasil['gambar']; ?>" alt="Image" class="img-fluid">
                      </a>
                      <h2 class="item-title"><a href="#"><?php echo $hasil['nama']; ?></a></h2>
                      <strong class="item-price">Rp <?php echo $hasil['harga']; ?></strong>
                      <br>
                      
                      <a href="cart.php?id=<?php echo $hasil['id_produk'];?>" class="btn btn-s btn-primary">
                        <i class='glyphicon glyphicon-shopping-cart'></i> Add To Cart </a>
                        
                    </div>
                <?php }
              ?>
  
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