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
    
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css" />
    
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

    <!-- main -->
              
  <form method="POST" >
    <div class="container p-4">
      <div class="row magazakayıt">
        <h4 class="mt-md-5 giris ">Mağaza Kayıt</h4>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0  ">

    
      <div class="mt-4   ">
        <label for="Ad" class="form-label text-black">Ad </label>
        <input  type="text" class="form-control" id="Ad" name="ad" >
      </div>
      <div class="mt-4  ">
        <label for="Soyad" class="form-label text-black">Soyad</label>
        <input type="text" class="form-control" id="Soyad" name="soyad">
      </div>
      <div class="mt-4   ">
        <label for="Tel" class="form-label text-black">Telefon Numarası </label>
        <input  type="tel" class="form-control" id="Tel" name="telno">
      </div>
      <div class="mt-4  ">
        <label for="Mail" class="form-label text-black">Mail</label>
        <input type="email" class="form-control" id="Mail" name="mail">
      </div>
      <div class="mt-4  ">
        <label for="sifre" class="form-label text-black">Şifre</label>
        <input type="password" class="form-control" id="sifre" name="sifre">
      </div>
    </div>

    <div class="col-lg-6 col-md-12 mb-4 mb-md-0"  >
    <div class="mt-4   ">
        <label for="ad" class="form-label text-black ">Şirket Adı </label>
        <input  type="text" class="form-control" id="ad" name="sirketadi">
      </div>
    
    <div class="mt-4   ">
        <label for="tur" class="form-label text-black ">Şirket Türü </label>
        <input  type="text" class="form-control" id="tur" name="sirketturu">
      </div>
      <div class="mt-4  ">
        <label for="Tc" class="form-label text-black">Tc No Veya Vergi No</label>
        <input type="text" class="form-control" id="Tc"name="tcvergi">
      </div>
      <div class="mt-4   ">
        <label for="il" class="form-label text-black">İl </label>
        <input  type="text" class="form-control" id="il"name="il">
      </div>
      <div class="mt-4 ">
        <label for="ilce" class="form-label text-black">İlçe</label>
        <input type="text" class="form-control" id="ilce"name="ilce">
      </div>

    </div>
    
    
    </div>
    
    <div class="mt-4  magazasecim " >
      <label for="kategori" class="form-label text-black">Ürün Kategorisi</label><br>
      <input type="checkbox" value="giyim" name="kategori"  >Giyim
      <input type="checkbox" value="spor" name="kategori" >Spor&Outdoor <br>
      <input type="checkbox" value="icgiyim" name="kategori" >İç Giyim         
      <input type="checkbox" value="ayakkabi" name="kategori" >Ayakkabı
    </div>
    <div class="mt-4 ">
      <button type="submit" class="btn butongiris giris ">Mağaza Oluştur</button>                                         
      </div>
    </div>
    </form>
    <a href="giris.php">Mağzaya sahipseniz tıklayın...</a>


    <?php
      $ad=@$_POST["ad"];
      $soyad=@$_POST["soyad"];
      $telno=@$_POST["telno"];
      $mail=@$_POST["mail"];
      $sifre=@$_POST["sifre"];
      $sirketad=@$_POST["magazaadi"];
      $sirketturu=@$_POST["sirketturu"];
      $tcvergi=@$_POST["tcvergi"];
      $il=@$_POST["il"];
      $ilce=@$_POST["ilce"];
      $kategori=@$_POST["kategori"];



      $kayit=$baglan->prepare("insert into magazabilgileri set
      
      ad =:ad,
      soyad =:soyad,
      telno =:telno,
      mail =:mail,
      sifre=:sifre,
      magazaadi=:sirketad,
      sirketturu =:sirketturu,
      tcvergi =:tcvergi,
      il =:il,
      ilce =:ilce,
      kategori =:kategori
      
      ");

      $insert = $kayit->execute(array(

        "ad" => $ad,
        "soyad" => $soyad,
        "telno" => $telno,
        "mail" => $mail,
        "sifre"=>$sifre,
        "sirketad"=>$sirketad,
        "sirketturu" => $sirketturu,
        "tcvergi" => $tcvergi,
        "il" => $il,
        "ilce" => $ilce,
        "kategori" => $kategori  

      ));

      if ($insert) {
        

        echo '<meta http-equiv="refresh" content="1;URL=giris.php">';
      }

    ?>

 <?php
 include('../footerklasor.php');
 ?>
     
    
</body>
</html>