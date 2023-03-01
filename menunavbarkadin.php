<nav class="navbar navbar-expand-lg  kıyafetdropdown">
  <?php
  
  $anaurunkontrol=$baglan->prepare("select distinct anakategori from menu  ");
  $anaurunkontrol->execute();

  while ($row=$anaurunkontrol->fetch(PDO::FETCH_ASSOC)) {
    
  $urunkategorisi=$row['anakategori'];
  
  ?>
<div class="menu"><?php echo $row['anakategori'];?>
  
  <ul class="drop" aria-labelledby="dropdownMenuButton">

  <?php $alturunkontrol=$baglan->prepare("select * from menu where anakategori='{$urunkategorisi}' and cinsiyet='Kadın' ");
  
  $alturunkontrol->execute();

  while ($urunalt=$alturunkontrol->fetch(PDO::FETCH_ASSOC)) {
  
  

  ?>

    <li><a class ="dropdown-item" href="urungosterme.php?id=<?php echo $urunalt['id'];?>"><?php echo $urunalt['altkategori'];?></a></li>

<?php }?>

  </ul>
</div>


<?php
}
?>

</nav>