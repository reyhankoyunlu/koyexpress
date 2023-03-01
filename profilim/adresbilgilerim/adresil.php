<?php

include('../../yonetim/register.php');


$id = $_GET['adresid'];
$delete = $baglan->prepare("DELETE from adresbilgileri where adresid = '$id'");
$sil = $delete->execute();

if ($sil) {
    header('location:index.php');
}

?>