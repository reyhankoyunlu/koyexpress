<?php
session_start();
include('../../yonetim/register.php');
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('../../header.php');
    ?>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
        
    <!-- CSS -->
    <link rel="stylesheet" href="../../style.css" />
    
    <!-- ICONFINDER -->
    <link rel="shortcut icon" href="../../img/Koyexpress Resmi Logo.ico">

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
      <a class="navbar-brand logo" href="../../index.php"><img src="../../img/Koyexpress Resmi Logo.png" alt="" style="width: 80px; margin-left: 120px;"></a>
  
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
  
          <!-- Link -->
          <li class="nav-item menuler"  >
            <a class="nav-link"  href="../../index.php">Kadın</a>
          </li>
          <li class="nav-item menuler" >
            <a class="nav-link " href="../../erkek/" >Erkek</a>
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
            <a class="nav-link" href="../../favoriler/" >
              <i class="fa-solid fa-heart"></i>
              <p style="font-size:13px ;">Favoriler</p>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../../sepetim/" style="color:#000d90 ;" >
              <i class="fas fa-shopping-cart"></i>
              <p style="font-size:13px ;">Sepetim</p>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../kullanicibilgilerim/" style="color:#000d90 ;" >
              <i class="fas fa-user"></i>
              <p style="font-size:13px ;">Profilim</p>
              
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0" >
            <a class="nav-link" href="../../yonetim/logout.php" style="color:#000d90 ;" >
            <i class="fa-solid fa-circle-xmark"></i>
              <p style="font-size:13px ;">Çıkış</p>
              
            </a>
          </li> 
          
        </ul>
      </div>
  
  </nav>

  <!-- menu navbar -->
  <?php
  include('../../menunavbarkadin.php');
  ?>

<!-- left main -->
<div class="container">
<div class="row">

    <!-- left main -->

    <div class="col-2 hesapsol ">

    <h3>Hesabım</h3>
    <div class="list-group list-group-flush solliste">
        <a href="../kullanicibilgilerim/" class="list-group-item list-group-item-action "><i class="fa-solid fa-user"></i>Kullanıcı Bilgilerim</a>

        <a href="../adresbilgilerim/" class="list-group-item list-group-item-action"><i class="fa-solid fa-location-dot"></i>Adres Bilgilerim</a>

        <a href="../kartbilgilerim/" class="list-group-item list-group-item-action"><i class="fa-regular fa-credit-card"></i>Kart Bilgilerim</a>

        <a href="../indirimkuponlarım/" class="list-group-item list-group-item-action"><i class="fa-solid fa-tag"></i>İndirim Kuponlarım</a>
        
      </div>
    </div>



    <!-- right main -->
    <div class="col-10  hesapsag">

  <h2>Kart Bilgilerim</h2>



  
  
<?php
        if (isset($_SESSION['Kullanici'])) {?>


  <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
    <div class="cizgi " style="height: 250px;">

    <div class="container"> <div class="row">
    <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
    <div class="card border-dark mb-3 " style="max-width: 300px;  font-weight: bold; ">
  <div class="card-header ">İş Bankası
             <span style="float: right; font-size: 18px; color: #000d90;">
              <i class="fa-solid fa-xmark"></i>
            </span></div>
  <div class="card-body text-dark " style="display: block; margin:auto ;">
    <p class="card-text">5374 75** **** 1548</p>
    <p class="card-text">10/2025</p>
  </div>
</div>
    </div>
</div>

<?php  
  }else{
        ?><h3 style="text-align: center;">LÜTFEN GİRİŞ YAPINIZ</h3><?php 
  }
        ?>
</div>

    </div>
  </div>


</div>



    </div>
  </div>


  <?php
  include('../../footerklasor2.php');
  ?>  

  <script src="../../script.js"></script> 
</body>
</html>
