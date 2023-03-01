<?php
session_start();
include('yonetim/register.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php
    include('header.php');
    ?>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
    
    <!-- ICONFINDER -->
    <link rel="shortcut icon" href="img/Koyexpress Resmi Logo.ico">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
<body>
<nav class="navbar navbar-expand-lg genelnav ">
    <!-- Container wrapper -->
    <div class="container-fluid">
  
      <!-- Navbar brand -->
      <a class="navbar-brand logo" href="index.php"><img src="img/Koyexpress Resmi Logo.png" alt="" style="width: 80px; margin-left: 120px;"></a>
  
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
  
          <!-- Link -->
          <li class="nav-item menuler"  >
            <a class="nav-link"  href="index.php">Kadın</a>
          </li>
          <li class="nav-item menuler" >
            <a class="nav-link " href="erkek/" >Erkek</a>
          </li>
        </ul>
  
        <!-- search -->
        <nav>
          <div class="container-fluid">
            <form class="d-flex input-group w-auto arama">
              <input
                type="search"
                placeholder="Search"
                aria-label="Search"
                aria-describedby="search-addon"
              />
            </form>
          </div>
        </nav>
        
      </div>
    </div>
    <!-- Container wrapper -->
  
    <!-- rightnavbar -->
      <div class="container-fluid " >
        <ul class="navbar-nav d-flex flex-row menuler ">
          <!-- Icons -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="favoriler/" >
              <i class="fa-solid fa-heart"></i>
              <p style="font-size:13px ;">Favoriler</p>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="sepetim/" style="color:#000d90 ;" >
              <i class="fas fa-shopping-cart"></i>
              <p style="font-size:13px ;">Sepetim</p>
              
            </a>
          </li>
          <?php
    if (isset($_SESSION['Kullanici'])) { 
      ?>
      <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="profilim/kullanicibilgilerim/" style="color:#000d90 ;" >
              <i class="fas fa-user"></i>
              <p style="font-size:13px ;">Profilim</p>
              
            </a>
          </li> 
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="yonetim/logout.php" style="color:#000d90 ;" >
            <i class="fa-solid fa-circle-xmark"></i>
              <p style="font-size:13px ;">Çıkış</p>
              
            </a>
          </li> 
    <?php    
  }else {
    ?>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="giris/" style="color:#000d90 ;" >
              <i class="fas fa-user"></i>
              <p style="font-size:13px ;">Giriş Yap & Kayıt Ol</p>
              
            </a>
          </li> 
      
   <?php 
   }
   ?>
          
        </ul>
      </div>
  
</nav>

<?php

include('menunavbarkadin.php');

?>



<?php

$id=$_GET['id'];
$urunlisteleme=$baglan->prepare("select * from menu where id=? limit 1");
$urunlisteleme->execute([$id]);
$urunyazdir=$urunlisteleme->fetch(PDO::FETCH_ASSOC);
$anaurun=$urunyazdir['anakategori'];
$alturun=$urunyazdir['altkategori'];
$urunsay=$urunlisteleme->rowCount();

if ($urunsay>0) {
    ?>


<div class="container">
    <h2><?php echo $urunyazdir['anakategori'] . ' ' . $urunyazdir['altkategori'] . ' ' . 'ürünler' ?></h2>

<hr>

    <div class="row">

    <?php
    
    $urungosterme=$baglan->prepare("select * from urunbilgileri where urunanakategori='{$anaurun} ' and (urunaltkategori='{$alturun}' or urunaltkategori1='{$alturun}')");
    $urungosterme->execute();
    while ($urun=$urungosterme->fetch(PDO::FETCH_ASSOC)) {
        
    
    
    ?>

    <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="img/cards/<?php echo $urun['urunfoto']?>" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >


                <form action="giriskodlari.php" method="POST">

                  <input type="hidden" name="favoriekleme">
                  <input type="hidden" name="urunid" value="<?php echo $urun['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

                <button class = "heart-icon" style="background-color: black; border-radius: 50px; opacity: .5; ">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </button>

                </form>

                <div class = "product-info p-3" >
                  <a href = "urunpaneli/urun.php?urunid=<?php echo $urun['urunid'] ?>" class = "d-block text-dark text-decoration-none py-2 product-name"><?php echo $urun['urunad'];?></a>
                  <span class = "product-price"><?php echo $urun['fiyat']?> TL </span>
                  
              </div>
              </div></div>
          </div>
        <?php } ?>
    </div>
</div>
<?PHP }


?>


<?php

include('footerindex.php');

?>


</body>
</html>