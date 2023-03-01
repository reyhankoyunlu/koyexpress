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
    <?php  
    if (isset($_SESSION["admin"])) {

      $mail = $_GET['mail'];
    
    ?>
   <!-- rightnavbar -->
   <div class="container-fluid ">
    <ul class="navbar-nav d-flex flex-row menuler ">
      <!-- Icons -->
      <li class="nav-item me-3 me-lg-0">
        <a class="nav-link" href="index.php?mail=<?php echo $mail?>">
          <i class="fa-regular fa-plus-large"></i>
          <p style="font-size:18px ; font-weight: bold;">Geri Gel</p>
        </a>
      </li>

    </ul>
  </div>
  
  </nav>

<?php




$magzagetir = $baglan->prepare("SELECT * from magazabilgileri where mail = ? limit 1");
$magzagetir->execute([$mail]);
$magazasayisi = $magzagetir->rowCount();
$row = $magzagetir->fetch(PDO::FETCH_ASSOC);
if ($magazasayisi > 0 ) {
  $magazaadi = $row['magazaadi'];
  $magazaid  = $row['magazaid'];
}

?>




<div class="container mb-5">
  <div class="row">
  <div class="p-3 mb-2  text-white" style="background-color:#000d90 ; border-radius: 15px; border:5px solid #000d90; ">
  
      <b style="margin-left: 20px; text-decoration: underline;" ><?php echo $magazaadi?></b>
      <a style="float: right; color: white;" href="../yonetim/logout.php">Çıkış</a> 
  </div>
  </div>
</div>



<div style="margin-left: 150px; margin-right: 150px; margin-top: 15px; margin-bottom: 15px;  ">

    <form class="girisyapform  " action="../giriskodlari.php" name="contactForm" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="urunekle">
    <input type="hidden" name="magazaid"  value="<?php echo $magazaid?>">

        <div class="mb-3">
            <label for="exampleInputText1" class="form-label">Ürün Adı</label>
            <input type="text" name="urunad" class="form-control" id="isim" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Kategori 2</label>
            <select type="text" name="altkategori2" class="form-control" id="DogumTarihi" required>
              <?php $alturun = $baglan->prepare("SELECT distinct cinsiyet from menu ");
                    $alturun->execute();
                    while ($alt = $alturun->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $alt['cinsiyet']?>"><?php echo $alt['cinsiyet']?></option>
              <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputText2" class="form-label">Ana Kategori</label>
            <select type="text" name="anakategori" class="form-control" id="soyisim" required>
            <?php
            $urunkategorisecme = $baglan->prepare("SELECT DISTINCT AnaKategori from menu order by id asc");
            $urunkategorisecme->execute();
            while ($urun = $urunkategorisecme->fetch(PDO::FETCH_ASSOC)) { 
              $kategorikontrol = $urun['AnaKategori']
            ?>  
            <option value="<?php echo $urun['AnaKategori']?>"><?php echo $urun['AnaKategori']?></option>
            <?php }?>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputText3" class="form-label">Kategori 2</label>
            <select type="text" name="altkategori" class="form-control" id="DogumTarihi" required>
              <?php $alturun = $baglan->prepare("SELECT distinct AltKategori from menu ");
                    $alturun->execute();
                    while ($alt = $alturun->fetch(PDO::FETCH_ASSOC)) {
              ?>
              <option value="<?php echo $alt['AltKategori']?>"><?php echo $alt['AltKategori']?></option>
              <?php }?>
            </select>
        </div>
       
        <div class="mb-3 ">
          <label for="exampleInputEmail1" class="form-label">Ürün Bilgileri</label>
          <textarea type="text" name="urunbilgi" class="form-control" id="Mail" aria-describedby="emailHelp" required></textarea>
        </div>
        
        <div class="mb-3  ">
        
            <label for="exampleInputText3" class="form-label">Ürün Stok Bilgileri </label><br>
            S :<input type="text" name="Sbeden" class="form-control" id="DogumTarihi" required>
            M :<input type="text" name="Mbeden" class="form-control" id="DogumTarihi" required>
            L :<input type="text" name="Lbeden" class="form-control" id="DogumTarihi" required>
            XL :<input type="text" name="XLbeden" class="form-control" id="DogumTarihi" required>
        </div>
          
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Fiyat</label>
          <input type="number" name="Fiyat" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">1. Fotoğraf</label>
          <input type="file" name="urunfoto" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">2. Fotoğraf</label>
          <input type="file" name="urunfoto1" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">3. Fotoğraf</label>
          <input type="file" name="urunfoto2" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">4. Fotoğraf</label>
          <input type="file" name="urunfoto3" class="form-control" id="Sifre" required>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">5. Fotoğraf</label>
          <input type="file" name="urunfoto4" class="form-control" id="Sifre" required>
        </div>
       
        
        <button type="submit" style="background-color: #000d90; color: white;" class="btn ">Ekle</button> <br>
       
      </form>
      </div>


<?php
}
include('../footerklasor.php');
?>

  <script src="../script.js"></script> 
</body>
</html>


<!-- <img src="../img/rimagaza.jpg" style="width: 80px; height: 80px; border: 1px solid white; padding: 3px; " class="rounded-circle " alt="..."> -->