<?php
session_start();
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

    if (isset($_POST["magazagirisyap"])) {
        $mail=@$_POST["mail"];
        $sifre=@$_POST["sifre"];

        if ($mail != "" && $sifre != "") {

            $magazagiris=$baglan->prepare("select * from magazabilgileri where mail=? and sifre=?");

            $magazagiris->execute([$mail,$sifre]);
            $magazasayisi=$magazagiris->rowCount();
            if ($magazasayisi>0) {
                $_SESSION['admin']=$mail;
                echo '<script>alert("giriş başarılı");</script>';
                header("refresh:1, URL=magaza/index.php?mail=".$mail);
            }else {
                echo '<script>alert("kullanıcı bulunamadı");</script>';
                header("refresh:1, URL=magazagiris/giris.php");
            }

            
        }else {
            echo '<script>alert("lütfen boş geçmeyin");</script>';
            header("refresh:1, URL=magazagiris/giris.php");
        }
    }

        if (isset($_POST['favoriekleme'])) {
            $kulid=@$_POST['kullaniciid'];
            $kulurunid=@$_POST['urunid'];


            $favekle=$baglan->prepare("insert into favoribilgileri set 
            urunno=:urun,
            musterino=:musteri
            ");

            $insert=$favekle->execute(array(
                "urun"=>$kulurunid,
                "musteri"=>$kulid
            ));

            if ($insert ) {
                header("refresh:1, URL=index.php");
            }

        }


        if (isset($_POST['sepetekle'])) {
            $urunid=@$_POST['urunid'];
            $kullaniciid=@$_POST['kullaniciid'];

            $sepetek=$baglan->prepare("insert into sepetbilgileri set 
            urunno=:urun,
            kullanicino=:musteri
            ");

            $insert=$sepetek->execute(array(
                "urun"=>$urunid,
                "musteri"=>$kullaniciid
            ));

            if ($insert ) {
                header("refresh:1, URL=index.php");
            }
        }

?> 

<!------------------------------------Ürün Ekle---------------------------------------------->
<?php
if (isset($_POST["urunekle"])) {
        if (isset($_FILES['urunfoto'])) {
                $hata = $_FILES['urunfoto']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "img/cards/" .$resimAdi ; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto1'])) {
                $hata = $_FILES['urunfoto1']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto1']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto1']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto1']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "img/cards/" .$resimAdi ; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto1"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto2'])) {
                $hata = $_FILES['urunfoto2']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto2']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto2']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto2']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "img/cards/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto2"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto3'])) {
                $hata = $_FILES['urunfoto3']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto3']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto3']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto3']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "img/cards/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto3"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
        if (isset($_FILES['urunfoto4'])) {
                $hata = $_FILES['urunfoto4']['error']; //resim inputundan gönderilen hatayı aldık.
                if ($hata != 0) { // hata kontrolü gerçekleştirdik.
                        echo 'Resim gönderilirken bir hata gerçekleşti.';
                } else {
                        $resimBoyutu = $_FILES['urunfoto4']['size']; // resim boyutunu öğrendik
                        if ($resimBoyutu > (1024 * 1024 * 4)) {
                                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                                echo 'Resim 4MB den büyük olamaz.';
                        } else {
                                $tip = $_FILES['urunfoto4']['type']; //resim tipini öğrendik.
                                $resimAdi = $_FILES['urunfoto4']['name']; //resmin adını öğrendik.

                                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                                $yeni_adi = "img/cards/" .$resimAdi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                                //yuklenecek_yer/resim_adi.uzantisi

                                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                                        if (move_uploaded_file($_FILES["urunfoto4"]["tmp_name"], $yeni_adi)) {
                                                //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                                                echo "Resim başarılı bir şekilde yüklendi.";
                                        } else echo 'Resim yüklenirken bir hata oluştu.';
                                } else {
                                        echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                                }
                        }
                }
        }
    
        $magazaid  = @$_POST["magazaid"];
        $urunisim         = @$_POST["urunad"];
        $urunanakategori  = @$_POST["anakategori"];
        $urunaltkategori1 = @$_POST["altkategori"];
        $urunaltcinsiyet = @$_POST["altkategori2"];
        $urunbilgi        = @$_POST["urunbilgi"];
        $urunBedenS       = @$_POST["Sbeden"];
        $urunBedenM       = @$_POST["Mbeden"];
        $urunBedenL       = @$_POST["Lbeden"];
        $urunBedenXL      = @$_POST["XLbeden"];
        $urunFiyat        = @$_POST["Fiyat"];
        $urunFoto1        = @$_FILES["urunfoto"]["name"];
        $urunFoto2        = @$_FILES["urunfoto1"]["name"];
        $urunFoto3        = @$_FILES["urunfoto2"]["name"];
        $urunFoto4        = @$_FILES["urunfoto3"]["name"];
        $urunFoto5        = @$_FILES["urunfoto4"]["name"];
       


        $urunekle = $baglan->prepare("INSERT into urunbilgileri set
                urunad         =:urunadi,
                urunbilgileri   =:urunbilgileri,
                urunfoto        =:urunfoto,
                urunfoto1       =:urunfoto2,
                urunfoto2       =:urunfoto3,
                urunfoto3       =:urunfoto4,
                urunfoto4       =:urunfoto5,
                magazano        =:magazano,
                urunanakategori  =:urunkategorisi,
                urunaltkategori =:urunkategorisi1,
                uruncinsiyet =:urunkategorisi2,
                s               =:s,
                m               =:m,
                l               =:l,
                xl              =:xl,
                fiyat           =:fiyat
        ");

        $insert = $urunekle->execute(array(
                "urunadi"           => $urunisim,
                "urunbilgileri"     => $urunbilgi,
                "urunfoto"          => $urunFoto1,
                "urunfoto2"         => $urunFoto2,
                "urunfoto3"         => $urunFoto3,
                "urunfoto4"         => $urunFoto4,
                "urunfoto5"         => $urunFoto5,
                "urunkategorisi"    => $urunanakategori,
                "urunkategorisi1"   => $urunaltkategori1,
                "urunkategorisi2"   => $urunaltcinsiyet,
                "s"                 => $urunBedenS,
                "m"                 => $urunBedenM,
                "l"                 => $urunBedenL,
                "xl"                => $urunBedenXL,
                "fiyat"             => $urunFiyat,
                "magazano"          => $magazaid

                
        ));

        if ($insert) {
                header('location:magaza/index.php');
        }
}
?>
<!------------------------------------Ürün Ekle---------------------------------------------->
