<?php

include('../yonetim/register.php');


$id = $_GET['sepetid'];
$delete = $baglan->prepare("DELETE from sepetbilgileri where sepetid = '$id'");
$sil = $delete->execute();

if ($sil) {
    header('location:index.php');
}

?>