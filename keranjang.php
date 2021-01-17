<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GhiNaj Shop &mdash; Cart</title>
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

    <link rel="stylesheet" href="hijab.html">
    <link rel="stylesheet" href="wanita.html">
    <link rel="stylesheet" href="pria.html">
    <link rel="stylesheet" href="sport.html">
    <link rel="stylesheet" href="aksesoris.html">
    

    <script>
        var Arrays=new Array();

        $('#wrap li').click(function(){
		
		var thisID = $(this).attr('id');
		
		var itemname  = $(this).find('div .item-title').html();
		var itemprice = $(this).find('div .item-price').html();
			
		if(include(Arrays,thisID))
		{
			var price 	 = $('#each-'+thisID).children(".shopp-price").find('em').html();
			var quantity = $('#each-'+thisID).children(".shopp-quantity").html();
			quantity = parseInt(quantity)+parseInt(1);
			
			var total = parseInt(itemprice)*parseInt(quantity);
			
			$('#each-'+thisID).children(".shopp-price").find('em').html(total);
			$('#each-'+thisID).children(".shopp-quantity").html(quantity);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)-parseInt(price);
			
			prev_charges = parseInt(prev_charges)+parseInt(total);
			$('.cart-total span').html(prev_charges);
			
			$('#total-hidden-charges').val(prev_charges);
		}
		else
		{
			Arrays.push(thisID);
			
			var prev_charges = $('.cart-total span').html();
			prev_charges = parseInt(prev_charges)+parseInt(itemprice);
			
			$('.cart-total span').html(prev_charges);
			$('#total-hidden-charges').val(prev_charges);
			
			$('#left_bar .cart-info').append('<div class="shopp" id="each-'+thisID+'"><div class="label">'+itemname+'</div><div class="shopp-price"> Rp.<em>'+itemprice+'</em></div><span class="shopp-quantity">1</span><img src="remove.png" class="remove" /><br class="all" /></div>');
			
			$('#cart').css({'-webkit-transform' : 'rotate(20deg)','-moz-transform' : 'rotate(20deg)' });
		}
		
		setTimeout('angle()',200);
	});	
    </script>

    
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
              <a href="index.html" class="js-logo-clone">GhiNaj</a>
            </div>
          </div>

          <div class="main-nav d-none d-lg-block">
              <nav class="site-navigation text-right text-md-center" role="navigation">
                <ul class="site-menu js-clone-nav d-none d-lg-block">
          
                    <li><a href="index.html">Home</a></li>
                  
                  
                  <li class="has-children active">
                  <a href="#">Pakaian</a>
                    <ul class="dropdown">
                      <li><a href="wanita.html">Wanita</a></li>
                      <li><a href="pria.html">Pria</a></li>
                      <li><a href="sport.html">Sport</a></li>
                    </ul>
                  </li>
                  <li><a href="hijab.html">Hijab</a></li>
                  <li><a href="aksesoris.html">Aksesoris</a></li>
                  <li><a href="promo.html">Promo</a></li>
                  <li><a href="berita.html">Berita</a></li>
                  <li><a href="video.html">Video</a></li>
                  <li><a href="contact.html">Kontak</a></li>
                  <li><a href="fitur.html">Fitur Lain</a></li>
                </ul>
              </nav>
            </div>
          
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="keranjang.html" class="icons-btn d-inline-block bag">
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
                <h2 class="text-uppercase">Cart</h2>
              </div>
            </div>        
    </div>

    <div class="panel panel-default">
      <?php
       require_once 'koneksi.php';
      ?>
     
     <div class="panel panel-default">
     <div class="panel-heading"> <center> <h3>Keranjang Belanja</h3></center></div></div>
         
     </div>	
     <table  width="70%" border="10" cellspacing="100" cellpadding="100" class="table table-bordered">
    <tr>
    <th align="right" scope="col">ID Barang</th>
        <th align="right" scope="col">Nama Barang</th>
        <th align="right" scope="col">Harga</th>


    </tr>
    <?php
    $total = 0;
    mysql_select_db($database, $koneksi);
    if (isset($_SESSION['penjualan'])) 
    {
        foreach ($_SESSION['penjualan'] as $key => $val) 
        {
            $query = mysql_query("select penjualan.id_penjualan, penjualan.wanita_penj, penjualan.pria_penj from penjualan where penjualan.id_penjualan = '$key'");
            $query_row  = mysql_fetch_array($query);
            $jumlah_harga = $query_row ['harga'] * $val * 1000;
            $total += $jumlah_harga;
        }
    ?>
    
            <tr>
                <td><?php echo $query_row ['id_penjualan']; ?> </td>
                <td><a href="#"><?php echo $query_row ['nama']; ?> </a></td>
                <td align="right">Rp. <?php echo($query_row ['harga']); ?></td>
            </tr>
            <?php
            mysql_free_result($query);
        
    }
    ?>
</table>







      <?php
     require_once 'koneksi.php';
     require_once 'cart_view.php';
     ?>
     <div class="advantages">
      <div class="panel panel-default">

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="wanita.html" class="block-6">
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
          
          <div class="col-md-6 col-lg-3">
            
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