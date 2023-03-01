  

<!DOCTYPE html>
<html lang="en">
<?php
    include('../header.php');
    ?>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css" />
    <link rel="stylesheet" href="adminlte.min.css">
    <link rel="stylesheet" href="all.min.css">
    
    <!-- ICONFINDER -->
    <link rel="shortcut icon" href="../img/Koyexpress Resmi Logo.ico">

    </head>
<body>


<!-- Navbar -->
<nav class="navbar navbar-expand-lg genelnav ">
      <!-- Container wrapper -->
      <div class="container-fluid">
    
        <!-- Navbar brand -->
        <a class="navbar-brand logo" href="../magazagiris/"><img src="../img/Koyexpress Resmi Logo.png" alt="" style="width: 80px; margin-left: 120px;"></a>
    
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
              <a class="nav-link" href="../giris/" style="color:#000d90 ;" >
                <i class="fas fa-user"></i>
                <p style="font-size:13px ;">Giriş Yap & Kayıt Ol</p>
                
              </a>
            </li>
            
          </ul>
        </div>
    
    </nav>


    <div class="card " style="margin: 100px 500px; ">
              <div class="card-header" style="background-color: #000d90; color: white; ">
                <h3 class="card-title" style="margin-left: 170px;">Mağaza Giriş Paneli</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="../giriskodlari.php">
                <input type="hidden" name="magazagirisyap">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="mail" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Şifre</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputPassword3" placeholder="Şifre" name="sifre" required>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn " style="background-color: #000d90; color: white;">Giriş Yap</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>


<?php
 include('../footerklasor.php');
 ?>

</body>
</html>