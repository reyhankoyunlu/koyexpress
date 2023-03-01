<?php
session_start();
include('../yonetim/register.php');

?>


<!DOCTYPE html>
<html lang="en">
<?php
    include('../header.php');
    ?>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css" />


     <!-- CSS -->
     <link rel="stylesheet" href="adminlte.min.css" />

     <!-- CSS -->
     <link rel="stylesheet" href="../magazagiris/all.min.css" />
    
    <!-- ICONFINDER -->
    <link rel="shortcut icon" href="../img/Koyexpress Resmi Logo.ico">

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
      <a class="navbar-brand logo" href="../index.php"><img src="../img/Koyexpress Resmi Logo.png" alt="" style="width: 80px; margin-left: 120px;"></a>
  
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
  
          <!-- Link -->
          <li class="nav-item menuler"  >
            <a class="nav-link"  href="../index.php">Kadın</a>
          </li>
          <li class="nav-item menuler" >
            <a class="nav-link " href="../erkek/" >Erkek</a>
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
            <a class="nav-link" href="../favoriler/" >
              <i class="fa-solid fa-heart"></i>
              <p style="font-size:13px ;">Favoriler</p>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../sepetim/" style="color:#000d90 ;" >
              <i class="fas fa-shopping-cart"></i>
              <p style="font-size:13px ;">Sepetim</p>
              
            </a>
          </li>
          <?php
    if (isset($_SESSION['Kullanici']) ) { 
      ?>
      <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../profilim/kullanicibilgilerim/" style="color:#000d90 ;" >
              <i class="fas fa-user"></i>
              <p style="font-size:13px ;">Profilim</p>
              
            </a>
          </li> 
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../yonetim/logout.php" style="color:#000d90 ;" >
            <i class="fa-solid fa-circle-xmark"></i>
              <p style="font-size:13px ;">Çıkış</p>
              
            </a>
          </li> 
    <?php    
  }else {
    ?>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../giris/" style="color:#000d90 ;" >
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



include('../menunavbarkadin.php');

$id=$_GET['urunid'];

$urunbil=$baglan->prepare('select * from urunbilgileri where urunid=? limit 1 ');

$urunbil->execute([$id]);

$row=$urunbil->fetch(PDO::FETCH_ASSOC);

$urunsaydir=$urunbil->rowcount();

if ($urunsaydir>0) {
  if (isset($_SESSION['Kullanici']) ) {

  

?>

    <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img style="height: 450px; width: 300px; margin-left:150px;" src="../img/cards/<?php echo $row['urunfoto']?> " class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs "  >
                <div class="product-image-thumb active"><img src="../img/cards/<?php echo $row['urunfoto']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto1']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto2']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto3']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto4']?>" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $row['urunad'] ?></h3>
              <p><?php echo $row['urunbilgileri'] ?></p>
    
              <hr>
          

              <h4 class="mt-3">Beden <small>Lütfen Beden Seçiniz</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b1" autocomplete="off" value="small">
                  <span class="text-xl">S</span>
                  <br>
                  Small
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                  <span class="text-xl">M</span>
                  <br>
                  Medium
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                  <span class="text-xl">L</span>
                  <br>
                  Large
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                  <span class="text-xl">XL</span>
                  <br>
                  Xtra-Large
                </label>
              </div>
    
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                <?php echo $row['fiyat'] ?> TL
                </h2>
                <h4 class="mt-0">
                  <small>Ex Tax: <?php echo $row['fiyat'] ?></small>
                </h4>
              </div>

              
              
              

              <form action="../giriskodlari.php" method="POST">

                  <input type="hidden" name="sepetekle">
                  <input type="hidden" name="urunid" value="<?php echo $row['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

    
              <div class="mt-4">
                <button class="btn btn-lg btn-flat" style="background-color: #000d90; color: white;">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Sepete Ekle
                </button>

              </form>
    
              <form action="../giriskodlari.php" method="POST">

                  <input type="hidden" name="favoriekleme">
                  <input type="hidden" name="urunid" value="<?php echo $row['urunid']; ?>">
                  <input type="hidden" name="kullaniciid" value="<?php echo $kullaniciid; ?>">

                <button class="btn btn-default btn-lg btn-flat" style="color: #000d90;">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Favorilere Ekle
                </button>
              </div>
              </form>
    
            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
    
    <?php }else {   ?>

      
    <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img style="height: 450px; width: 300px; margin-left:150px;" src="../img/cards/<?php echo $row['urunfoto']?> " class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs "  >
                <div class="product-image-thumb active"><img src="../img/cards/<?php echo $row['urunfoto']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto1']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto2']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto3']?>" alt="Product Image"></div>
                <div class="product-image-thumb" ><img src="../img/cards/<?php echo $row['urunfoto4']?>" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3"><?php echo $row['urunad'] ?></h3>
              <p><?php echo $row['urunbilgileri'] ?></p>
    
              <hr>
          

              <h4 class="mt-3">Beden <small>Lütfen Beden Seçiniz</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b1" autocomplete="off" value="small">
                  <span class="text-xl">S</span>
                  <br>
                  Small
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                  <span class="text-xl">M</span>
                  <br>
                  Medium
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                  <span class="text-xl">L</span>
                  <br>
                  Large
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                  <span class="text-xl">XL</span>
                  <br>
                  Xtra-Large
                </label>
              </div>
    
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                <?php echo $row['fiyat'] ?> TL
                </h2>
                <h4 class="mt-0">
                  <small>Ex Tax: <?php echo $row['fiyat'] ?></small>
                </h4>
              </div>

              
              
              

              
    
              <div class="mt-4">
                <a class="btn btn-lg btn-flat" style="background-color: #000d90; color: white;">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Sepete Ekle
                </a>

              
    
              

                  
                <a class="btn btn-default btn-lg btn-flat" style="color: #000d90;">
                  <i class="fas fa-heart fa-lg mr-2"></i>
                  Favorilere Ekle
                </a>
              </div>
              
    
            </div>
          </div>
         
        </div>
        <!-- /.card-body -->
      </div>
    
      
   <?php } }
    
    include('../footerklasor.php');

    ?>


    

</body>
</html>



