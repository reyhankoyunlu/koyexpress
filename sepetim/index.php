<?php
session_start();
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

    <!-- Navbar -->
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
    if (isset($_SESSION['Kullanici'])) { 
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

  <!-- menu navbar -->
<nav class="navbar navbar-expand-lg  kıyafetdropdown">
    <div class="menu">Giyim
      
      <ul class="drop" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Elbise</a></li>
        <li><a class ="dropdown-item" href="#">Tişört</a></li>
        <li><a class="dropdown-item" href="#">Gömlek</a></li>
        <li><a class="dropdown-item" href="#">Kot Pantolon</a></li>
        <li><a class="dropdown-item" href="#">Kot Ceket</a></li>
        <li><a class="dropdown-item" href="#">Pantolon</a></li>
        <li><a class="dropdown-item" href="#">Mont</a></li>
        <li><a class="dropdown-item" href="#">Bluz</a></li>
        <li><a class="dropdown-item" href="#">Ceket</a></li>
        <li><a class="dropdown-item" href="#">Etek</a></li>
        <li><a class="dropdown-item" href="#">Kazak</a></li>
      </ul>
    </div>
    
    
    <div class="menu">
      İç Giyim
      <ul class="drop" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Pijama Takımı</a></li>
        <li><a class="dropdown-item" href="#">Takımlar</a></li>
        <li><a class="dropdown-item" href="#">Gecelik</a></li>
        <li><a class="dropdown-item" href="#">Sütyen</a></li>
        <li><a class="dropdown-item" href="#">Çorap</a></li>
      </ul>
    </div>
    
    
    <div class="menu">
        Spor&Outdoor
      <ul class="drop" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Sweatshirt</a></li>
        <li><a class="dropdown-item" href="#">Tişört</a></li>
        <li><a class="dropdown-item" href="#">Tayt</a></li>
        <li><a class="dropdown-item" href="#">Eşofman</a></li>
        <li><a class="dropdown-item" href="#">Spor Sütyeni</a></li>
        <li><a class="dropdown-item" href="#">Spor Çantası</a></li>
        <li><a class="dropdown-item" href="#">Spor Ayakkabısı</a></li>
        <li><a class="dropdown-item" href="#">Koşu Ayakkabısı</a></li>
        <li><a class="dropdown-item" href="#">Outdoor Ayakkabı</a></li>
        <li><a class="dropdown-item" href="#">Kar Botu</a></li>
      </ul>
    </div>
    
    <div class="menu">
        Ayakkabı
      <ul class="drop" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Topuklu Ayakkabı</a></li>
        <li><a class="dropdown-item" href="#">Günlük Ayakkabı</a></li>
        <li><a class="dropdown-item" href="#">Sneaker</a></li>
        <li><a class="dropdown-item" href="#">Babet</a></li>
        <li><a class="dropdown-item" href="#">Sandalet</a></li>
        <li><a class="dropdown-item" href="#">Bot</a></li>
      </ul>
    </div>
    
    </div>
</nav>

<?php
        if (isset($_SESSION['Kullanici'])) {?>
<!-- left main -->
  <div class="row">


    <!-- left main -->

    <div class="col-8 sepetsol ">

      <ul class="list-group ">
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="birincichek">
          <label class="form-check-label" for="birincichek">Satıcı:Addax
          </label>
        
<hr>
        <li class="list-group-item ">
          <input class="form-check-input" type="checkbox" value="" id="ikincichek">
          <img src="../img/cards/ayakkabi.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="ikincichek">Lumberjack FREYA 1FX Beyaz Kadın Sneaker Ayakkabı 100785034 
          </label>
        
        </li>
      
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="ucuncuchek">
          <img src="../img/cards/giyim3.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="ucuncuchek">TRENDYOLMİLLA Buz Mavi Asit Yıkamalı Yüksek Bel Mom Jeans TWOSS20JE0164</label>
        </li>
      </li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="dorduncuchek">
          <label class="form-check-label" for="dorduncuchek">Satıcı:Addax
          </label>
        
<hr>
        <li class="list-group-item ">
          <input class="form-check-input" type="checkbox" value="" id="besincichek">
          <img src="../img/cards/ayakkabi.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="besincichek">Lumberjack FREYA 1FX Beyaz Kadın Sneaker Ayakkabı 100785034 
          </label>
        </li>
      
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="altincichek">
          <img src="../img/cards/giyim3.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="altincichek">TRENDYOLMİLLA Buz Mavi Asit Yıkamalı Yüksek Bel Mom Jeans TWOSS20JE0164</label>
        </li>
      </li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="yedincichek">
          <label class="form-check-label" for="yedincichek">Satıcı:Addax
          </label>
        
<hr>
        <li class="list-group-item ">
          <input class="form-check-input" type="checkbox" value="" id="sekizincichek">
          <img src="../img/cards/ayakkabi.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="sekizincichek">Lumberjack FREYA 1FX Beyaz Kadın Sneaker Ayakkabı 100785034 
          </label>
        </li>
      
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="dokuzuncuchek">
          <img src="../img/cards/giyim3.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="dokuzuncuchek">TRENDYOLMİLLA Buz Mavi Asit Yıkamalı Yüksek Bel Mom Jeans TWOSS20JE0164</label>
        </li>
      </li>
      </ul>

      <ul class="list-group">
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="onuncuchek">
          <label class="form-check-label" for="onuncuchek">Satıcı:Addax
          </label>
        
<hr>
        <li class="list-group-item ">
          <input class="form-check-input" type="checkbox" value="" id="onbirincichek">
          <img src="../img/cards/ayakkabi.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="onbirincichek">Lumberjack FREYA 1FX Beyaz Kadın Sneaker Ayakkabı 100785034 
          </label>
        </li>
      
        <li class="list-group-item">
          <input class="form-check-input " type="checkbox" value="" id="onikincichek">
          <img src="../img/cards/giyim3.png" style="width: 50px;" alt="">
          <label class="form-check-label" for="onikincichek">TRENDYOLMİLLA Buz Mavi Asit Yıkamalı Yüksek Bel Mom Jeans TWOSS20JE0164</label>
        </li>
      </li>
      </ul>
    </div>



    <!-- right main -->
    <div class="col-4 sepetsag ">

        <button type="button" class="btn btn-lg">Sepeti Onayla</button>


        <div class=" sepetcard  mb-3 mt-3" >
            <div class="card-body ">
              <h3 class="card-title">Sipariş Özeti</h3><br>
              <p class="card-text">Ürünün Toplamı &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2.207,78 TL</p>

              <p class="card-text">Kargo Toplam
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 19,99 TL</p>
            </div>
            <div class="card-footer bg-transparent text-end">2.227,77 TL&emsp;</div>
          </div>
          <br>
          <div class="kod ">
          <input type="text" name="" id="" class="in" placeholder="İndirim kodunu girin">
          <button type="button" class="btn " >Uygula</button>

        </div>
          <br>
        <button type="button" class="btn btn-lg ">Sepeti Onayla</button>
        <br>
        <br><br><br>


    </div>
    <?php  
  }else{
        ?><h3 style="text-align: center;">LÜTFEN GİRİŞ YAPINIZ</h3><?php 
  }
        ?>
  </div>

<?php
include('../footerklasor.php');
?>
  
  <script src="../script.js"></script> 
</body>
</html>
