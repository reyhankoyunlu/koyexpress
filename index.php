<?php
session_start();
include("yonetim/register.php");
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('header.php');
?>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css" />
   
    <!-- ICONFINDER -->
    <link rel="shortcut icon" href="img/Koyexpress Resmi Logo.ico">

    
<!-- popup -->
<!--gerekli js dosyaları--> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--gerekli css dosyaları--> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script type="text/javascript">
    $(document).ready(function(){
        //otomatik açma // bir butona tıklayınca
        //açmak için alttaki satırı jquery buton eventi içine koyun
        $("#modalCodeReplyFeed").modal('show');
    });
</script>
    
</head>


<body>



  <!-- popup -->
  <div id="modalCodeReplyFeed" class="modal fade">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                   <!--source.unsplash.com sitesinden rasgele resim çekme -->
                  
               </div>
                <p> <img src="img/popup.jpg" class="img-responsive"></p>

            </div>
        </div>
    </div>
</div>

    <!-- Navbar -->
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
          <li class="nav-item menuler" style="font-weight:bold; text-decoration: underline;" >
            <a class="nav-link" href="index.php">Kadın</a>
          </li>
          <li class="nav-item menuler">
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


  <!-- menu navbar -->
 
<?php

include('menunavbarkadin.php');

?>
  
<?php
    if (isset($_SESSION['Kullanici'])) { 
      echo '<div class="alert alert-success" ><p>Hoşgeldin ' ."<b>" .$kullaniciadi ."</b></p></div>";
    
    }
      ?>
<div>
  <img src="img/ana/ana.jpg" alt="..." style="width:100%; padding: 50px; margin-top: -50px;"  >
</div>

<!-- main -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
<div class="item active"></div>
        <?php 
        
        $urunsorgu= $baglan->prepare('select * from urunbilgileri  where uruncinsiyet = "Kadın"');
        $urunsorgu->execute();
        while ($urunyazma=$urunsorgu->fetch(PDO::FETCH_ASSOC)) {
          
        

        ?>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="img/cards/<?php echo $urunyazma['urunfoto']?>" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >


                <form action="giriskodlari.php" method="POST">

                  <input type="hidden" name="favoriekleme">
                  <input type="hidden" name="urunid" value="<?php echo $urunyazma['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

                <button class = "heart-icon" style="background-color: black; border-radius: 50px; opacity: .5; ">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </button>

                </form>

                <div class = "product-info p-3" >
                  <a href = "urunpaneli/urun.php?urunid=<?php echo $urunyazma['urunid'] ?>" class = "d-block text-dark text-decoration-none py-2 product-name"><?php echo $urunyazma['urunad'];?></a>
                  <span class = "product-price"><?php echo $urunyazma['fiyat']?> TL </span>
                  
              </div>
              </div></div>
          </div>




          
          <?php }?>

          
          <!-- add  more items here -->
        </div>
        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>


<!-- cardsilders -->
<div class="card-group kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/giyim.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/icgiyim.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >İç Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/spor.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Spor Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider" > 
  <div class="card">
<div class="card ">
  <img src="img/cards/ayakkabi.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Ayakkabı Ürünleri</p>
  </div>
</div>
</div>
</div>

<br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br><br> <br>

<div>
  <img src="img/ana/ana2.jpg" alt="..." style="width:100%; padding: 50px; margin-top: -50px;"  >
</div>

<!-- main -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel1">
        <div class="carousel-inner">

        <div class="item active"></div>
        <?php 
        
        $urunsorgu= $baglan->prepare('select * from urunbilgileri  where uruncinsiyet = "Kadın"');
        $urunsorgu->execute();
        while ($urunyazma=$urunsorgu->fetch(PDO::FETCH_ASSOC)) {
          
        

        ?>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="img/cards/<?php echo $urunyazma['urunfoto']?>" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >


                <form action="giriskodlari.php" method="POST">

                  <input type="hidden" name="favoriekleme">
                  <input type="hidden" name="urunid" value="<?php echo $urunyazma['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

                <button class = "heart-icon" style="background-color: black; border-radius: 50px; opacity: .5; ">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </button>

                </form>

                <div class = "product-info p-3" >
                  <a href = "urunpaneli/urun.php?urunid=<?php echo $urunyazma['urunid'] ?>" class = "d-block text-dark text-decoration-none py-2 product-name"><?php echo $urunyazma['urunad'];?></a>
                  <span class = "product-price"><?php echo $urunyazma['fiyat']?> TL </span>
                  
              </div>
              </div></div>
          </div>




          
          <?php }?>

          <!-- add  more items here -->
        </div>
        <a class="left carousel-control" href="#theCarousel1" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel1" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>


<!-- cardsilders -->
<div class="card-group kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/giyim2.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/icgiyim2.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >İç Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/spor2.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Spor Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider" > 
  <div class="card">
<div class="card ">
  <img src="img/cards/ayakkabi2.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Ayakkabı Ürünleri</p>
  </div>
</div>
</div>
</div>

<br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br><br> <br>

<div>
  <img src="img/ana/ana3.jpg" alt="..." style="width:100%; padding: 50px; margin-top: -50px;"  >
</div>

<!-- main -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel2">
        <div class="carousel-inner">

        <div class="item active"></div>
        <?php 
        
        $urunsorgu= $baglan->prepare('select * from urunbilgileri  where uruncinsiyet = "Kadın"');
        $urunsorgu->execute();
        while ($urunyazma=$urunsorgu->fetch(PDO::FETCH_ASSOC)) {
          
        

        ?>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="img/cards/<?php echo $urunyazma['urunfoto']?>" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >


                <form action="giriskodlari.php" method="POST">

                  <input type="hidden" name="favoriekleme">
                  <input type="hidden" name="urunid" value="<?php echo $urunyazma['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

                <button class = "heart-icon" style="background-color: black; border-radius: 50px; opacity: .5; ">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </button>

                </form>

                <div class = "product-info p-3" >
                  <a href = "urunpaneli/urun.php?urunid=<?php echo $urunyazma['urunid'] ?>" class = "d-block text-dark text-decoration-none py-2 product-name"><?php echo $urunyazma['urunad'];?></a>
                  <span class = "product-price"><?php echo $urunyazma['fiyat']?> TL </span>
                  
              </div>
              </div></div>
          </div>




          
          <?php }?>



          
          <!-- add  more items here -->
        </div>
        <a class="left carousel-control" href="#theCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>


<!-- cardsilders -->
<div class="card-group kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/giyim3.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/icgiyim3.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >İç Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="img/cards/spor3.jpg" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Spor Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider" > 
  <div class="card">
<div class="card ">
  <img src="img/cards/ayakkabi3.png" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Ayakkabı Ürünleri</p>
  </div>
</div>
</div>
</div>


<div>
  <img src="img/ana/ana4.png" alt="..." style="width:100%; padding: 50px; margin-top: -50px;"  >
</div>

  <?php
  include('footerindex.php');
  ?>


  <script src="script.js"></script> 
</body>
</html>

