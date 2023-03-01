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
<link rel="stylesheet" href="card.css">
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

<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">,

        <?php 
          
          $sepetkontrol=$baglan->prepare("select * from sepetbilgileri where kullanicino='{$kullaniciid}'");

          $sepetkontrol->execute();

          $tutar=0;

          while ($sepet=$sepetkontrol->fetch(PDO::FETCH_ASSOC)) {
            
          $sep=$sepet['urunno'];


          ?>

    <div class=" sepetsol ">

      <ul class="list-group ">
        <li class="list-group-item">
          
          </label>
        
<hr>  

              <?php  
               $urunbilgi=$baglan->prepare("select * from urunbilgileri where urunid='{$sep}' ");
               $urunbilgi->execute();
       
               if ($urun=$urunbilgi->fetch(PDO::FETCH_ASSOC)) {
                 $urunid=$urun['urunid'];
                 $urunad=$urun['urunad'];
                 $urunfiyat=$urun['fiyat'];
                 $s=$urun['s'];
                 $m=$urun['m'];
                 $l=$urun['l'];
                 $xl=$urun['xl'];
                 $urunfoto=$urun['urunfoto'];
               }

               $tutar=$tutar+$urunfiyat;

               
              ?>

        <li class="list-group-item ">
          
          <img src="../img/cards/<?php echo $urunfoto; ?>" style="width: 50px;" alt="">
          <label class="form-check-label" for="ikincichek"><?php echo $urunad .' '.$urunfiyat ;  ?> TL
          </label>
          <a style="float: right;" href="sepetsil.php?sepetid=<?php echo $sepet['sepetid']?>">Sil</a>
        
        </li>
      
      </li>
      </ul>

    </div>
<?php  } ?> 

<div class=" sepetcard  mb-3 mt-3" >
            <div class="card-body ">
              <?php $kargo=19.99;
              $toplam = $tutar+$kargo;
              ?>
              <h3 class="card-title">Sipariş Özeti</h3><br>
              <p class="card-text">Ürünün Toplamı &emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo $tutar?> TL</p>

              <p class="card-text">Kargo Toplam
                &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 19,99 TL</p>
            </div>
            <div class="card-footer bg-transparent text-end"><?php echo $toplam?> TL&emsp;</div>
            
          </div>

        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <div  id="area">
  <div style="display: block; margin: auto;" class="master-card">
    <div class="card">
      <div class="title">Kredi Kartı</div>
      <div class="input-number"><span class="title-number">Kart Numarası</span>
        <div class="inputs-number">
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
          <input type="text" maxlength="4" name="number-card" placeholder="0000" required="required"/>
        </div>
        <div class="selects-date selecters">
          <div class="day-select"><span>Gün</span>
            <select id="dates">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
              <option value="">6</option>
              <option value="">7</option>
              <option value="">8</option>
              <option value="">9</option>
              <option value="">10</option>
              <option value="">11</option>
              <option value="">12</option>
              <option value="">13</option>
              <option value="">14</option>
              <option value="">15</option>
              <option value="">16</option>
              <option value="">17</option>
              <option value="">18</option>
              <option value="">19</option>
              <option value="">20</option>
              <option value="">21</option>
              <option value="">22</option>
              <option value="">23</option>
              <option value="">24</option>
              <option value="">25</option>
              <option value="">26</option>
              <option value="">27</option>
              <option value="">28</option>
              <option value="">29</option>
              <option value="">30</option>
            </select>
          </div>
          <div class="year-select"><span>Yıl</span>
            <select id="dates">
              <option value="">17</option>
              <option value="">18</option>
              <option value="">19</option>
              <option value="">20</option>
              <option value="">21</option>
              <option value="">22</option>
              <option value="">23</option>
              <option value="">24</option>
              <option value="">25</option>
              <option value="">26</option>
            </select>
          </div>
        </div>
      </div>
      <div class="mark-gold">
        <div class="round">
          <div class="circles">
            <div class="circle-1"> </div>
            <div class="circle-2"> </div>
          </div>
        </div>
      </div>
      <div class="name"><span>JEAN O IMPSUM</span></div>
    </div>
    <div class="card-back">
      <div class="tire"></div>
      <div class="secret-area">
        <input type="text" maxlength="3" name="number-card" placeholder="000" required="required"/>
      </div>
      <div class="chip-card"></div>
    </div>
  </div>
  <div style="display: block; margin: auto; margin-top: 15px; margin-left: 230px;" class="button-sent">
    <button id="back">Geri Çevir</button>
    <button id="continue">Çevir</button>
  </div>
  <div style="display: block; margin: auto; margin-top: 15px; margin-left: 230px;" class="button-sent">
    
    <button id="continue">Öde</button>
  </div>
</div>
        </div>
    </div>
</div>


<?php
include('../footerklasor.php');
?>
  
  <script src="../script.js"></script> 
  <script src="card.js"></script>
</body>
</html