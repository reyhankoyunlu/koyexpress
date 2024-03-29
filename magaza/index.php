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
            <a class="nav-link" href="../index.php">Kadın</a>
          </li>
          <li class="nav-item menuler" style=>
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
   <div class="container-fluid ">
    <ul class="navbar-nav d-flex flex-row menuler ">
      <!-- Icons -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="#">
          <i class="fa-regular fa-plus-large"></i>
          <p style="font-size:18px ; font-weight: bold;">Ürün Ekle</p>
        </a>
      </li>

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

<div class="container mb-5">
  <div class="row">
  <div class="p-3 mb-2  text-white" style="background-color:#000d90 ; border-radius: 15px; border:5px solid #000d90; ">
  <img src="../img/rimagaza.jpg" style="width: 80px; height: 80px; border: 1px solid white; padding: 3px; " class="rounded-circle " alt="...">
      <b style="margin-left: 20px;">KOYEXPRESS</b> 
  </div>
  </div>
</div>



<!-- main -->
<div class="container" >
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel3">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider1.png" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>


          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider2.png" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider3.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider4.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider5.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>

          <div class="item ">
            <div class="col-xs-4">
              <div class="card-img ">
                <img src="../img/sliders/erkekslider6.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;"  >

                <span class = "heart-icon">
                  <i class = "far fa-heart"></i> <!--tıklanınca içi dolu olacak ve favorilere eklenecek-->
                </span>

                <div class = "product-info p-3" >
                  <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
                  <span class = "product-price">$ 100.50</span>
                  <div class = "rating d-flex mt-1">
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "fa fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                      <span>
                          <i class = "far fa-star"></i>
                      </span>
                  </div>
              </div>
              </div></div>
          </div>

          <!-- add  more items here -->
        </div>
        <a class="left carousel-control" href="#theCarousel3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
        <a class="right carousel-control" href="#theCarousel3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
      </div>
    </div>
  </div>
</div>


<!-- cardsilders -->
<div class="card-group kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="../img/cards/erkekgiyim.jpg" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="../img/cards/erkekicgiyim.jpg" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >İç Giyim Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider"> 
  <div class="card">
<div class="card ">
  <img src="../img/cards/erkekspor.jpg" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Spor Ürünleri</p>
  </div>
</div>
</div>
</div>

<div class="card-group  kiyafetslider" > 
  <div class="card">
<div class="card ">
  <img src="../img/cards/erkekayakkabi.jpg" class="card-img" alt="giyim" >
  <div class="card-img-overlay">
    <p class="text-start " >Ayakkabı Ürünleri</p>
  </div>
</div>
</div>
</div>

<br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br> <br><br><br><br><br><br><br> <br>


<?php
include('../footerklasor.php');
?>

  <script src="../script.js"></script> 
</body>
</html>
