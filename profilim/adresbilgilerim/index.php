<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <?php
    include('../../header.php');
    ?>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet"/>

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
  
<div class="col-10 hesapsag ">

<h2>Adres Bilgilerim</h2>
 

 
<?php
        if (isset($_SESSION['Kullanici'])) {?>
        <div class="dropdown">
  <button type="button"  style="float: right; background-color: #000d90; color: white;" class="btn dropdown-toggle"  data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside">
<i class="fa-solid fa-plus" ></i>Adres Ekle
  </button>
  <form class="dropdown-menu p-4" method="POST" action="../../giriskodlari.php">

  <input type="hidden" name="adresekle">
  <input type="hidden" name="kullaniciid" value="<?php $kullaniciid?>">
    <div class="mb-3">
      <label for="exampleDropdownFormBaslik" class="form-label">Adres Başlığı</label>
      <input type="text" class="form-control" id="exampleDropdownFormBaslik" name="adresbasligi">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormad" class="form-label">Ad</label>
      <input type="text" class="form-control" id="exampleDropdownFormad" name="adresad">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormsoyad" class="form-label">Soyad</label>
      <input type="text" class="form-control" id="exampleDropdownFormsoyad" name="adressoyad">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormil" class="form-label">İl</label>
      <input type="text" class="form-control" id="exampleDropdownFormil" name="adresil">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormilçe" class="form-label">İlçe</label>
      <input type="text" class="form-control" id="exampleDropdownFormilce" name="adresilce">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormMahalle" class="form-label">Mahalle</label>
      <input type="text" class="form-control" id="exampleDropdownFormMahalle" name="adresmahalle">
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormTam" class="form-label">Tam Adres</label>
      <textarea type="text" class="form-control" id="exampleDropdownFormTam" name="adrestam"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleDropdownFormTel" class="form-label">Telefon Numarası</label>
      <input type="tel" class="form-control" id="exampleDropdownFormTel" name="adrestel">
    </div>
    <button type="submit" class="btn" style="background-color: #000d90; color: white;">Ekle</button>
  </form>
</div>


<div class="col-lg-6 col-md-12 mb-4 mb-md-0">
  <div class="cizgi " style="height: 300px;">
    <div class="container">
      <div class="row">

      <div class="card border-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Ev</div>
  <div class="card-body text-dark">
    <h5 class="card-title">ışıklı mahallesi</h5>
    <p class="card-text">ışıklı mahallesi 2635 sokak  no:22 <br> <br> 531 ***** 15</p>

  </div>

  <button type="button" class="btn btn-light" data-mdb-toggle="modal" data-mdb-target="#staticBackdrop" >sil</button> 

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
    
  </div>
</div>


<!-- Modal -->
<div
  class="modal fade"
  id="staticBackdrop"
  data-mdb-backdrop="static"
  data-mdb-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">...</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
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
