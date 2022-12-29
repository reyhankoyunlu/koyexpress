<?php

include("yonetim/register.php");

if (isset($_POST["detayguncelle"])) {

    $isim=@$_POST["ad"];
    $soyisim=@$_POST["soyad"];
    $mail=@$_POST["mail"];
    $dogumtarihi=@$_POST["dtarihi"];
    $cinsiyet=@$_POST["cinsiyet"];
    $id=@$_POST["kullaniciid"];

    $kullaniciguncelle=$baglan->prepare("UPDATE kullanicibilgileri set 
    ad=:ad,
    soyad=:soyad,
    mail=:mail,
    dogumtarihi=:dogumtarihi,
    cinsiyet=:cinsiyet

    where 
    kullaniciid=:zat
    ");

    $guncelle=$kullaniciguncelle->execute(array(
        "ad"=>$isim,
        "soyad"=>$soyisim,
        "mail"=>$mail,
        "dogumtarihi"=>$dogumtarihi,
        "cinsiyet"=>$cinsiyet,
        "zat"=>$id

    ));

    if ($guncelle) {
        echo '<script>alert("Bilgileriniz Güncellendi");</script>';
                header("refresh:1, URL=profilim/kullanicibilgilerim");
    }


}

if (isset($_POST["sifreguncelle"])) {
    $kontrol=@$_POST["eskikontrol"];
    $eski=@$_POST["eskisifre"];
    $yeni=@$_POST["yenisifre"];
    $yenitekrar=@$_POST["yenisifretekrar"];
    $id=@$_POST["kullaniciid"];

    if ($kontrol!=$eski) {
        echo '<script>alert("eski şifre doğru değil");</script>';
        header("refresh:1, URL=profilim/kullanicibilgilerim");
    }else if($yeni==$yenitekrar) {
        
            $sifreguncelle=$baglan->prepare("UPDATE kullanicibilgileri set 
            sifre=:sifre
            where 
            kullaniciid=:id
            ");
            
            $insert=$sifreguncelle->execute(array(
                "sifre"=>$yeni,
                "id"=>$id
            ));
            if ($insert) {
                echo '<script>alert("şifreniz güncellendi");</script>';
                header("refresh:1, URL=profilim/kullanicibilgilerim");
            }
        }else {
            echo '<script>alert("yeni şifreler uyuşmuyor");</script>';
            header("refresh:1, URL=profilim/kullanicibilgilerim");
        }
    }


    if (isset($_POST["adresekle"])) {
        $baslik=@$_POST["adresbasligi"];
        $ad=@$_POST["adresad"];
        $soyad=@$_POST["adressoyad"];
        $il=@$_POST["adresil"];
        $ilce=@$_POST["adresilce"];
        $mahalle=@$_POST["adresmahalle"];
        $tam=@$_POST["adrestam"];
        $tel=@$_POST["adrestel"];
        $kullaniciid=@$_POST["kullaniciid"];


        $adresek=$baglan->prepare("INSERT into adresbilgileri set
        kullaniciid=:kullaniciid,
        adresbasligi=:baslik,
        ad=:adresad,
        soyad=:adressoyad,
        il=:il,
        ilce=:ilce,
        mahalle=:mahalle,
        tamadres=:tam,
        tel=:tel
        ");

        $adress=$adresek->execute(array(
            "kullaniciid"=>$kullaniciid,
            "baslik"=>$baslik,
            "adresad"=>$ad,
            "adressoyad"=>$soyad,
            "il"=>$il,
            "ilce"=>$ilce,
            "mahalle"=>$mahalle,
            "tam"=>$tam,
            "tel"=>$tel

        ));

        if ($adress) {
            echo '<script>alert("Adres Eklendi");</script>';
                header("refresh:1, URL=profilim/adresbilgilerim");
        }else {
            echo "AGA Bİ SIKINTI VAR";
        }
    }


?> 