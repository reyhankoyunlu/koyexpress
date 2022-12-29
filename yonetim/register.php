<?php

$baglan = new PDO("mysql:host=localhost;dbname=koyexpress;charset=UTF8", "root", "");

if (isset($_SESSION['Kullanici'])) {
    $kullanicibilgi=$baglan->prepare("SELECT * from kullanicibilgileri where mail=? LIMIT 1");
    $kullanicibilgi->execute([$_SESSION['Kullanici']]);
    $kullanicisayisi=$kullanicibilgi->rowCount();
    $bilgikullanici=$kullanicibilgi->fetch(PDO::FETCH_ASSOC); //veri çekmek için

    if ( $kullanicisayisi > 0 ) {
        $kullaniciadi=$bilgikullanici['ad'];
        $kullanicisoyadi=$bilgikullanici['soyad'];
        $kullanicimail=$bilgikullanici['mail'];
        $kullaniciid = $bilgikullanici['kullaniciid'];
        $kullanicisifre=$bilgikullanici['sifre'];
        
    }
}

?>


