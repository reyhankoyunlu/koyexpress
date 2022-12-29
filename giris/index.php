<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<?php
include('../header.php');


?>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
      <a class="navbar-brand logo" href="../index.php"><img src="../img/Koyexpress Resmi Logo.png" alt="" style="width: 80px; margin-left: 120px;"></a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

          <!-- Link -->
          <li class="nav-item menuler">
            <a class="nav-link" href="../index.php">Kadın</a>
          </li>
          <li class="nav-item menuler">
            <a class="nav-link " href="../erkek/">Erkek</a>
          </li>
        </ul>

        <!-- search -->
        <nav>
          <div class="container-fluid">
            <form class="d-flex input-group w-auto arama">
              <input type="search" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
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
          <a class="nav-link" href="../favoriler/">
            <i class="fa-solid fa-heart"></i>
            <p style="font-size:13px ;">Favoriler</p>
          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="../sepetim/" style="color:#000d90 ;">
            <i class="fas fa-shopping-cart"></i>
            <p style="font-size:13px ;">Sepetim</p>

          </a>
        </li>
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="../profilim/kullanicibilgilerim/" style="color:#000d90 ;">
            <i class="fas fa-user"></i>
            <p style="font-size:13px ;">Giriş Yap & Kayıt Ol</p>

          </a>
        </li>

      </ul>
    </div>

  </nav>


  <!-- giriş -->
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0  ">
        <div class="sagkayit">
          <h4 class="mt-md-5  giris ">Giriş Yap</h4>
          <?php
          include("../yonetim/register.php");
          $gelenmail = $_POST['mail2'];
          $gelensifre = $_POST['sifre2'];
          if (isset($_POST["girisyap"])) {
            

           


            if ($gelenmail != "" && $gelensifre != "") {
              $kullanicikontrol = $baglan->prepare("select * from kullanicibilgileri where mail=? && sifre=? ");
              $kullanicikontrol->execute([$gelenmail, $gelensifre]);
              $kullanicikontrolsayisi = $kullanicikontrol->rowCount();

              if ($kullanicikontrolsayisi > 0) {
                $_SESSION['Kullanici'] = $gelenmail;
                echo '<div class="alert alert-success">Giriş işlemi başarılı</div>';
                echo '<meta http-equiv="refresh" content="2;URL=../index.php">';
              } else {
                echo '<div class="alert alert-danger">Bu bilgilere ait kullanıcı bulunamadı</div>';
              }
            } else {
              echo '<div class="alert alert-danger">Lütfen boş değer göndermeyin!</div>';
            }
          }
          ?>
          <form method="POST">
            <div class="mt-4 ">
              <label for="mail" class="form-label text-black">Email </label>
              <input type="email" name="mail2" class="form-control" id="mail2">
            </div>
            <input type="hidden" name="girisyap">
            <div class="mt-4  ">
              <label for="sifre" class="form-label text-black">Şifre</label>
              <input type="password" name="sifre2" class="form-control" id="sifre2">
            </div>

            <div class="mt-4 ">
              <button type="submit" class="btn butongiris giris ">Giriş Yap </button>
            </div>
          </form>

        </div>

      </div>

      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <div class="cizgi ">
          <h4 class="mt-5 giris">Kayıt Ol</h4>

          <?php

          $ad = @$_POST["ad"];
          $soyad = @$_POST["soyad"];
          $mail = @$_POST["mail"];
          $dogumtarihi = @$_POST["dogumtarihi"];
          $cinsiyet = @$_POST["cinsiyet"];
          $sifre = @$_POST["sifre"];

          if (isset($_POST["kayitol"])) {
            
          

          $gelenmail = $baglan->prepare("select * from kullanicibilgileri where mail=? LIMIT 1");
          $gelenmail->execute([$mail]);
          $gelenmailsayisi = $gelenmail->rowCount();

          if ($gelenmailsayisi > 0) {
            echo '<div class="alert alert-danger">mail mevcut</div>';
            header("Location:../index.php");
          } else {


            // veritabanı ismi - biz tanımlıyoruz

            $save = $baglan->prepare("insert into kullanicibilgileri set 

            
            ad =:ad,
            soyad =:soyad,
            mail =:mail,
            dogumtarihi =:dogumtarihi,
            cinsiyet =:cinsiyet,
            sifre =:sifre

            ");

            $insert = $save->execute(array(

              "ad" => $ad,
              "soyad" => $soyad,
              "mail" => $mail,
              "dogumtarihi" => $dogumtarihi,
              "cinsiyet" => $cinsiyet,
              "sifre" => $sifre

            ));

            if ($insert) {
              echo '<div class="alert alert-success">kayıt başarıyla oluşturuldu. Lütfen yan taraftan giriş yapınız!</div>';
            }
          }
        }
          ?>

          <form class="" method="POST" name="">
            <div class="mt-4 ">
              <label for="ad" class="form-label text-black">Ad </label>
              <input type="text" class="form-control" id="ad" name="ad">
            </div>
            <input type="hidden" name="kayitol">
            <div class="mt-4 ">
              <label for="soyad" class="form-label text-black">Soyad </label>
              <input type="text" class="form-control" id="soyad" name="soyad">
            </div>
            <div class="mt-4 ">
              <label for="mail" class="form-label text-black">Mail </label>
              <input type="email" class="form-control" id="mail" name="mail">
            </div>
            <div class="mt-4  ">
              <label for="dogum" class="form-label text-black">Doğum Tarihi </label>
              <input type="date" class="form-control" id="dogum" name="dogumtarihi">
            </div>
            <div class="mt-4 ">
              <label for="gender" class="form-label text-black">Cinsiyet </label><br>
              <div class="container cinsiyet">
                <input type="radio" name="cinsiyet" value="kadin" id="kadin">
                <label for="kadin">Kadın</label>
                <input type="radio" name="cinsiyet" value="erkek" id="erkek">
                <label for="erkek">Erkek</label>
              </div>

            </div>
            <div class="mt-4 ">
              <label for="sifre2" class="form-label text-black">Şifre</label>
              <input type="password" class="form-control" id="sifre2" name="sifre">
            </div>

            <div class="mt-4">
              <button type="submit" class="btn butongiris giris w-50">Kayıt Ol </button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>

  <?php
  include('../footerklasor.php');
  ?>


</body>

</html>