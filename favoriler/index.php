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
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../profilim/kullanıcıbilgilerim/" style="color:#000d90 ;" >
              <i class="fas fa-user"></i>
              <p style="font-size:13px ;">Profilim</p>
              
            </a>
          </li>
          
        </ul>
      </div>
  
  </nav>



<div class="container">
  <div class="row">
    <div class="col-md-12">

      <div class="item  ">
        <div class="col-xs-4 ">
          <div class="product-img">
            <img src="../img/sliders/erkekslider1.png" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

            <div class = "product-info p-3" >
              <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
              <span class = "product-price indirimsiz">$ 100.50</span>
              <span class = "product-price ">$ 100.50</span>
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
          </div>
          
        </div>
          
      </div>

      <div class="item ">
        <div class="col-xs-4">
          <div class="card-img ">
            <img src="../img/sliders/slider11.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/slider17.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/erkekslider13.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

            <div class = "product-info p-3" >
              <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
              <span class = "product-price indirimsiz">$ 100.50</span>
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
            <img src="../img/sliders/slider18.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/erkekslider8.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

            <div class = "product-info p-3" >
              <a href = "#" class = "d-block text-dark text-decoration-none py-2 product-name">Trendyol Collection Sweater - Gray - Oversize</a>
              <span class = "product-price indirimsiz">$ 100.50</span>
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
            <img src="../img/sliders/erkekslider2.png" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/slider15.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/slider3.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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
            <img src="../img/sliders/slider8.jpg" class="card-img-top img-fluid d-block mx-auto" alt="..." style="width: 250px;" >

            <span class = "heart-icon">
              <i class="fa-solid fa-xmark"></i>
            </span>

            <div class = "row btns w- mx-auto text-center">

              <div class=" dropdown">
              <div class="btn-group">
                <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  add to card
                </button>
                
              </div>
              
              <div class="btn-group ">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  size
                </button>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">s</button></li>
                  <li><button class="dropdown-item" type="button">m</button></li>
                  <li><button class="dropdown-item" type="button">l</button></li>
                </ul>
              </div>
          </div>
          
        </div>

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

      
    </div>
  </div>

</div>

<?php
include('../footerklasor.php');
?>

  <script src="../script.js"></script> 
</body>
</html>
