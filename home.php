<?php 
	error_reporting(0);
	include 'db.php';
	$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
	$a = mysqli_fetch_object($kontak);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    <title>LATIHAN</title>
  </head>
  <body>
  	<link rel="stylesheet" type="text/css" href="css/styleui1.css">
  	<!-- NAVBAR -->
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar fixed-top navbar-light bg-light " >
      <a class="navbar-brand" href="#"><img src="img/gociken.png" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav navbar-">
          <div class="nav-link">
            <a class="navigasi" href="home.php">Home</a>
            <a class="navigasi" href="produk.php">Product</a>
            <a class="navigasi" href="about.php">About</a>
            <button class="but1"><a href="login.php">Login</a></button>
          </div>
        </div>
      </div>
    </nav>
 
  	<!-- AKHIR NAVBAR -->


    <!-- HEADER -->
    <section class="hal1">
      <div class="jumbotron" >
        <h1 class="judulhome">Masih bingung pesan ayam? </h1>
        <p class="paragraf">GoChicken Solusinya! GoChicken menyediakan daging ayam yang segar yang segar dan kualitasnya telah terjamin. Kamu juga bisa memilih berbagai potongan dagingnya loh. </p>

        <img class="img2" src="img/produk/home.jpg"  >

        <button type="button" class="but2"><a href="produk.php">Yuk Mulai</a></button>
      </div>
    </section>
    <!-- AHIR HEADER -->
  

    <!-- SLIDER -->
    <!-- AKHIR SLIDER -->


    <!-- ABOUT -->
    <section class="produk" id="produk">
      
      <div class="contaier">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="judul">PRODUCT</h2>
          </div>
        </div>
          <link rel="stylesheet" type="text/css" href="css/styleproduk.css">
          <div class="sectionhome ">
            <div class="container">
              <div class="box">
                <?php 
                  if($_GET['search'] != '' || $_GET['kat'] != ''){
                    $where = "AND product_name LIKE '%".$_GET['search']."%' AND category_id LIKE '%".$_GET['kat']."%' ";
                  }

                  $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 $where ORDER BY product_id DESC");
                  if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
                ?>	
                  <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                    <div class="col-4produk">
                      <img src="produk/<?php echo $p['product_image'] ?>">
                      <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                      <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                    </div>
                  </a>
                <?php }}else{ ?>
                  <p>Produk tidak ada</p>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- AKHIR ABOUT -->


    <!-- CATALOG -->
    <section class="about" id="about"> 
      <div class="jumbotron">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="judul">ABOUT US</h2>
            <h2 class="what">Apa itu GoChicken?</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <h4 class="buy">Tentang kami</h4>
            <div class="artikel">
              <h2 class="p">GoChicken adalah sebuah website yang melayani pembelian daging ayam segar secara online. Di website ini pembeli bisa membeli daging ayam segar berkualitas hanya dengan mengunjungi website GoChicken, dengan adanya website GoChicken membuat pembeli tidak perlu repot-repot keluar rumah untuk membeli daging ayam..</h2>
            </div>
          </div>
          <div class="col-sm-4">
            <img src="img/produk/ayam.jpg" class="img">
          </div>>
        </div>
      </div>
    </section>
    <!-- AKHIR CAYALOG -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
