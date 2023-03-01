-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 13 Oca 2023, 05:28:22
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `koyexpress`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresbilgileri`
--

CREATE TABLE `adresbilgileri` (
  `adresid` int(11) NOT NULL,
  `kullaniciid` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mahalle` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tamadres` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `adresbasligi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tel` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `kurumsaladresid` int(11) DEFAULT NULL,
  `vkn` int(11) DEFAULT NULL,
  `vergidairesi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `adresbilgileri`
--

INSERT INTO `adresbilgileri` (`adresid`, `kullaniciid`, `ad`, `soyad`, `il`, `ilce`, `mahalle`, `tamadres`, `adresbasligi`, `tel`, `kurumsaladresid`, `vkn`, `vergidairesi`) VALUES
(5, 7, 'reyhan', 'koyunlu', 'aydın', 'efeler', 'kurtuluş', 'dnfudsvbwıuwuıdvdskjnwdv', 'iş adresim', '05317301815', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoribilgileri`
--

CREATE TABLE `favoribilgileri` (
  `favoriid` int(11) NOT NULL,
  `urunno` int(11) NOT NULL,
  `musterino` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `favoribilgileri`
--

INSERT INTO `favoribilgileri` (`favoriid`, `urunno`, `musterino`) VALUES
(1, 1, 1),
(2, 4, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kartbilgileri`
--

CREATE TABLE `kartbilgileri` (
  `kartid` int(11) NOT NULL,
  `kartnumarasi` char(16) COLLATE utf8_turkish_ci NOT NULL,
  `sonkullanma` date NOT NULL,
  `cww` char(3) COLLATE utf8_turkish_ci NOT NULL,
  `sahipadi` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicibilgileri`
--

CREATE TABLE `kullanicibilgileri` (
  `kullaniciid` int(11) NOT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dogumtarihi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(8) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicibilgileri`
--

INSERT INTO `kullanicibilgileri` (`kullaniciid`, `ad`, `soyad`, `mail`, `dogumtarihi`, `cinsiyet`, `sifre`) VALUES
(1, 'Reyhan', 'Koyunlu', 'reyhan@gmail.com', '2012-12-12', 'kadın', 'jdksvkod'),
(2, 'mahmut', 'ipek', 'mamo@gmail.com', '2002-10-12', 'erkek', 'dveagvea'),
(3, 'ilke', 'kücükyılmaz', 'ilkecilik@gmail.com', '2030-12-12', '0', 'hgıkelsv'),
(4, 'emre', 'küçük', 'emre@hotmail.com', '2001-10-10', '0', 'wefcwef'),
(5, 'hsdıfısdvb', 'dsoıglno', 'sfmokes@gmail.com', '2012-12-12', '0', 'sdgvrsb'),
(6, 'dsdfsdv', 'sdgvrsdg', 'sdgvsd@sdgvs', '2002-04-04', '0', 'edb x'),
(7, 'ilker', 'kücükyılmaz', 'ilkerklka@hotmail.com', '2003-10-24', '0', '123'),
(8, 'tunahan', 'akın', 'tuna@gmail.com', '2005-10-10', 'erkek', '123456'),
(9, 'büşra', 'akın', 'busra@gmail.com', '1999-05-05', '0', 'büşra'),
(10, 'ali', 'veli', 'ali@hotmail.com', '2012-12-12', '0', 'alidfe'),
(11, 'ahmet', 'sopgdjv', 'ahmet@hotmail.com', '2008-08-08', '0', 'skfjoı'),
(12, 'emre', 'kılcıoğlu', 'emre@gmail.com', '2002-12-12', '0', 'emre123'),
(13, 'wfewef', 'wegvaegv', 'sdgvksd@lsdgks', '2010-10-10', '0', 'edw'),
(14, 'oıaefno', 'ksdngvo', 'jsdbg@kjsdvb', '20120-10-10', '0', 'asdgvsdg'),
(15, 'dsncowı', 'oklsdno', 'dsjfs@xn--jsb-lua', '2020-05-05', '0', 'wafscs'),
(16, 'enes', 'saz', 'enes@mai.com', '2002-04-04', '0', 'asfsdf'),
(17, 'hüseyin', 'uyan', 'huseyin@gmail.com', '2012-12-12', '0', 'adjfos'),
(18, 'menekşe', 'ali', 'menekse@gmail.com', '1990-10-06', '0', '123456'),
(19, 'behlül', 'kücükyılmaz', 'behlulhamster@gmail.com', '2022-11-11', 'erkek', '12'),
(20, 'mehmet', 'bilir', 'mehmet@gmail.com', '1980-12-14', 'erkek', '78');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `magazabilgileri`
--

CREATE TABLE `magazabilgileri` (
  `magazaid` int(11) NOT NULL,
  `magazaadi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `magazaprofil` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `magazaadres` varchar(150) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yorum` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `telno` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `tcvergi` int(11) NOT NULL,
  `il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sirketturu` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `magazabilgileri`
--

INSERT INTO `magazabilgileri` (`magazaid`, `magazaadi`, `magazaprofil`, `magazaadres`, `yorum`, `ad`, `soyad`, `telno`, `mail`, `tcvergi`, `il`, `ilce`, `kategori`, `sirketturu`, `sifre`) VALUES
(1, 'ri clothing', NULL, NULL, NULL, 'reyhan', 'koyunlu', '05317301815', 'reyhankoyunlu@hotmail.com', 2147483647, 'aydın', 'efeler', 'ayakkabi', 'bireysel', '123'),
(2, 'RI CLOTHING', NULL, NULL, NULL, 'ilker', 'kücükyılmaz', '05313515946', 'ikoculuk@gmail.com', 2147483647, 'istanbul', 'tuzla', 'icgiyim', 'bireysel', '12'),
(3, NULL, NULL, NULL, NULL, 'ali', 'veli', '12345678912', 'hhsdbfs@gmail.com', 2147483647, 'rgtyfh', 'gjuhg', 'giyim', 'limited', ''),
(4, NULL, NULL, NULL, NULL, 'ali', 'veli', '12345678912', 'hhsdbfs@gmail.com', 2147483647, 'rgtyfh', 'gjuhg', 'giyim', 'limited', ''),
(5, NULL, NULL, NULL, NULL, 'ali', 'veli', '12345678912', 'hhsdbfs@gmail.com', 2147483647, 'rgtyfh', 'gjuhg', 'giyim', 'limited', ''),
(6, NULL, NULL, NULL, NULL, 'dnvsıo', 'osnmfok', '78965412301', 'dhfusbdv@xn--jsxbhvsj-ykb.com', 2147483647, 'aydın', 'efeler', 'icgiyim', 'bireysel', ''),
(7, NULL, NULL, NULL, NULL, 'ilke', 'kücük', '1234567891', 'ilke@hotmail.com', 2147483647, 'aydın', 'efeler', 'icgiyim', 'anonim', ''),
(8, NULL, NULL, NULL, NULL, 'ilke', 'kücük', '1234567891', 'ilke@hotmail.com', 2147483647, 'aydın', 'efeler', 'icgiyim', 'anonim', ''),
(9, NULL, NULL, NULL, NULL, 'ilke', 'kücük', '1234567891', 'ilke@hotmail.com', 2147483647, 'aydın', 'efeler', 'icgiyim', 'anonim', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `cinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `anakategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `altkategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `cinsiyet`, `anakategori`, `altkategori`) VALUES
(1, 'Kadın', 'Gİyim', 'Elbise'),
(2, 'Kadın', 'Giyim', 'T-Shirt'),
(3, 'Kadın', 'Giyim', 'Gömlek'),
(5, 'Kadın', 'Giyim', 'Kot Ceket'),
(6, 'Kadın', 'Giyim', 'Pantolon'),
(7, 'Kadın', 'Giyim', 'Mont'),
(8, 'Kadın', 'Giyim', 'Bluz'),
(9, 'Kadın', 'Giyim', 'Ceket'),
(10, 'Kadın', 'Giyim', 'Etek'),
(11, 'Kadın', 'Giyim', 'Kazak'),
(12, 'Kadın', 'İç Giyim', 'Pijama Takımı'),
(13, 'Kadın', 'İç Giyim', 'Takımlar'),
(14, 'Kadın', 'İç Giyim', 'Gecelik'),
(15, 'Kadın', 'İç Giyim', 'Sütyen'),
(16, 'Kadın', 'İç Giyim', 'Çorap'),
(17, 'Kadın', 'Spor&Outdoor', 'Sweatshirt'),
(18, 'Kadın', 'Spor&Outdoor', 'Tayt'),
(19, 'Kadın', 'Spor&Outdoor', 'Eşofman'),
(20, 'Kadın', 'Spor&Outdoor', 'Spor Sütyeni'),
(21, 'Kadın', 'Spor&Outdoor', 'Spor Çantası'),
(22, 'Kadın', 'Spor&Outdoor', 'Spor Ayakkabı'),
(23, 'Kadın', 'Ayakkabı', 'Topuklu Ayakkabı'),
(24, 'Kadın', 'Ayakkabı', 'Günlük Ayakkabı'),
(25, 'Kadın', 'Ayakkabı', 'Sneaker'),
(26, 'Kadın', 'Ayakkabı', 'Babet'),
(27, 'Kadın', 'Ayakkabı', 'Sandalet'),
(28, 'Kadın', 'Ayakkabı', 'Bot'),
(29, 'Erkek', 'Giyim', 'T-Shirt'),
(30, 'Erkek', 'Giyim', 'Gömlek'),
(31, 'Erkek', 'Giyim', 'Pantolon'),
(32, 'Erkek', 'Giyim', 'Ceket'),
(33, 'Erkek', 'Giyim', 'Kazak'),
(34, 'Erkek', 'Giyim', 'Takım Elbise'),
(35, 'Erkek', 'İç Giyim', 'Pijama Takımı'),
(36, 'Erkek', 'İç Giyim', 'Boxer'),
(37, 'Erkek', 'İç Giyim', 'Çorap'),
(38, 'Erkek', 'İç Giyim', 'Atlet'),
(39, 'Erkek', 'Spor&Outdoor', 'Sweatshirt'),
(40, 'Erkek', 'Spor&Outdoor', 'Eşofman'),
(41, 'Erkek', 'Spor&Outdoor', 'Spor Çantası'),
(42, 'Erkek', 'Spor&Outdoor', 'Spor Ayakkabı'),
(43, 'Erkek', 'Spor&Outdoor', 'Forma'),
(44, 'Erkek', 'Spor&Outdoor', 'Şort'),
(45, 'Erkek', 'Ayakkabı', 'Günlük Ayakkabı'),
(46, 'Erkek', 'Ayakkabı', 'Sneaker'),
(47, 'Erkek', 'Ayakkabı', 'Klasik'),
(48, 'Erkek', 'Ayakkabı', 'Bot');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemebilgileri`
--

CREATE TABLE `odemebilgileri` (
  `sepetno` int(11) NOT NULL,
  `adresno` int(11) NOT NULL,
  `kartno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `profilbilgileri`
--

CREATE TABLE `profilbilgileri` (
  `kullanicino` int(11) NOT NULL,
  `adresno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepetbilgileri`
--

CREATE TABLE `sepetbilgileri` (
  `sepetid` int(11) NOT NULL,
  `kullanicino` int(11) NOT NULL,
  `urunno` int(11) NOT NULL,
  `indirim` varchar(15) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sepetbilgileri`
--

INSERT INTO `sepetbilgileri` (`sepetid`, `kullanicino`, `urunno`, `indirim`) VALUES
(1, 1, 4, ''),
(16, 1, 1, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunbilgileri`
--

CREATE TABLE `urunbilgileri` (
  `urunid` int(11) NOT NULL,
  `urunfoto` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunbilgileri` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `magazano` int(11) NOT NULL,
  `urunfoto1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto2` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto3` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunfoto4` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `uruncinsiyet` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunanakategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunaltkategori` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `urunaltkategori1` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `s` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `xl` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunbilgileri`
--

INSERT INTO `urunbilgileri` (`urunid`, `urunfoto`, `urunad`, `urunbilgileri`, `magazano`, `urunfoto1`, `urunfoto2`, `urunfoto3`, `urunfoto4`, `uruncinsiyet`, `urunanakategori`, `urunaltkategori`, `urunaltkategori1`, `s`, `m`, `l`, `xl`, `fiyat`) VALUES
(1, 'slider1.jpg', 'Ayakkabı', 'Trendyol Collection Sweater - Gray - Oversize', 1, 'slider1.jpg', 'slider2.jpg', 'slider3.jpg', 'slider4.jpg', 'Kadın', 'Ayakkabı', 'Bot', '', 10, 20, 50, 10, 750),
(4, 'slider2.jpg', 'Kazak', 'Trendyol Collection Sweater - Gray - Oversize', 2, 'slider2.jpg', 'slider3.jpg', 'slider3.jpg', 'slider4.jpg', 'Kadın', 'Bluz', 'Günlük Ayakkabı', '', 50, 20, 200, 60, 70),
(5, 'slider3.jpg', 'Tayt', 'kahverengi ayakkabı', 3, 'slider3.jpg', 'slider4.jpg', 'slider5.jpg', 'slider6.jpg', 'Kadın', 'Spor&Outdoor', 'Tayt', '', 50, 15, 23, 78, 200),
(6, 'slider4.jpg', 'Bralet', 'kırmızı Bralet', 1, 'slider4.jpg', 'slider5.jpg', 'slider6.jpg', 'slider7.jpg', 'Kadın', 'İç Giyim', 'Sütyen', '', 50, 50, 40, 30, 150),
(7, 'slider5.jpg', 'Kazak', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce purus ligula, fermentum eu enim ut, porttitor gravida tortor. Morbi ac placerat lectus. Nam in sapien odio. Sed ac metus gravida, rhoncus', 3, 'slider6.jpg', 'slider7.jpg', 'slider8.jpg', 'slider9.jpg', 'Kadın', 'Giyim', 'Kazak', '', 15, 12, 40, 80, 100),
(8, 'slider6.png', 'Pantolon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce purus ligula, fermentum eu enim ut, porttitor gravida tortor. Morbi ac placerat lectus. Nam in sapien odio. Sed ac metus gravida, rhoncus', 4, 'slider7.jpg', 'slider8.jpg', 'slider9.jpg', 'slider10.jpg', 'Kadın', 'Giyim', 'Pantolon', '', 20, 50, 50, 20, 400),
(9, 'slider7.jpg', 'Etek', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor nisl nec elit fermentum cursus. Vestibulum sollicitudin eros in felis dapibus rutrum. Suspendisse elementum quis elit at f', 2, 'slider8.jpg', 'slider9.jpg', 'slider10.jpg', 'slider11.jpg', 'Kadın', 'Giyim', 'Etek', '', 40, 50, 50, 40, 80),
(10, 'slider8.jpg', 'Ceket', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor nisl nec elit fermentum cursus. Vestibulum sollicitudin eros in felis dapibus rutrum. Suspendisse elementum quis elit at f', 1, 'slider9.jpg', 'slider10.jpg', 'slider11.jpg', 'slider12.jpg', 'Kadın', 'Giyim', 'Ceket', '', 15, 15, 15, 15, 200),
(11, 'slider9.jpg', 'Ayakkabı', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor nisl nec elit fermentum cursus. Vestibulum sollicitudin eros in felis dapibus rutrum. Suspendisse elementum quis elit at f', 1, 'slider10.jpg', 'slider11.jpg', 'slider12.jpg', 'slider13.jpg', 'Kadın', 'Ayakkabı', 'Sneaker', '', 50, 50, 60, 40, 500);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adresbilgileri`
--
ALTER TABLE `adresbilgileri`
  ADD PRIMARY KEY (`adresid`),
  ADD KEY `kullaniciid` (`kullaniciid`);

--
-- Tablo için indeksler `favoribilgileri`
--
ALTER TABLE `favoribilgileri`
  ADD PRIMARY KEY (`favoriid`) USING BTREE,
  ADD KEY `musterino` (`musterino`),
  ADD KEY `urunno` (`urunno`);

--
-- Tablo için indeksler `kartbilgileri`
--
ALTER TABLE `kartbilgileri`
  ADD PRIMARY KEY (`kartid`);

--
-- Tablo için indeksler `kullanicibilgileri`
--
ALTER TABLE `kullanicibilgileri`
  ADD PRIMARY KEY (`kullaniciid`);

--
-- Tablo için indeksler `magazabilgileri`
--
ALTER TABLE `magazabilgileri`
  ADD PRIMARY KEY (`magazaid`);

--
-- Tablo için indeksler `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odemebilgileri`
--
ALTER TABLE `odemebilgileri`
  ADD PRIMARY KEY (`sepetno`,`adresno`,`kartno`),
  ADD KEY `adresno` (`adresno`),
  ADD KEY `kartno` (`kartno`);

--
-- Tablo için indeksler `profilbilgileri`
--
ALTER TABLE `profilbilgileri`
  ADD PRIMARY KEY (`kullanicino`,`adresno`),
  ADD KEY `adresno` (`adresno`);

--
-- Tablo için indeksler `sepetbilgileri`
--
ALTER TABLE `sepetbilgileri`
  ADD PRIMARY KEY (`sepetid`,`kullanicino`,`urunno`),
  ADD KEY `kullanicino` (`kullanicino`),
  ADD KEY `urunno` (`urunno`);

--
-- Tablo için indeksler `urunbilgileri`
--
ALTER TABLE `urunbilgileri`
  ADD PRIMARY KEY (`urunid`,`magazano`),
  ADD KEY `magazano` (`magazano`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adresbilgileri`
--
ALTER TABLE `adresbilgileri`
  MODIFY `adresid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `favoribilgileri`
--
ALTER TABLE `favoribilgileri`
  MODIFY `favoriid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `kartbilgileri`
--
ALTER TABLE `kartbilgileri`
  MODIFY `kartid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicibilgileri`
--
ALTER TABLE `kullanicibilgileri`
  MODIFY `kullaniciid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `magazabilgileri`
--
ALTER TABLE `magazabilgileri`
  MODIFY `magazaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Tablo için AUTO_INCREMENT değeri `sepetbilgileri`
--
ALTER TABLE `sepetbilgileri`
  MODIFY `sepetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `urunbilgileri`
--
ALTER TABLE `urunbilgileri`
  MODIFY `urunid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `adresbilgileri`
--
ALTER TABLE `adresbilgileri`
  ADD CONSTRAINT `adresbilgileri_ibfk_1` FOREIGN KEY (`kullaniciid`) REFERENCES `kullanicibilgileri` (`kullaniciid`);

--
-- Tablo kısıtlamaları `favoribilgileri`
--
ALTER TABLE `favoribilgileri`
  ADD CONSTRAINT `favoribilgileri_ibfk_1` FOREIGN KEY (`musterino`) REFERENCES `kullanicibilgileri` (`kullaniciid`),
  ADD CONSTRAINT `favoribilgileri_ibfk_2` FOREIGN KEY (`urunno`) REFERENCES `urunbilgileri` (`urunid`);

--
-- Tablo kısıtlamaları `odemebilgileri`
--
ALTER TABLE `odemebilgileri`
  ADD CONSTRAINT `odemebilgileri_ibfk_1` FOREIGN KEY (`sepetno`) REFERENCES `sepetbilgileri` (`sepetid`),
  ADD CONSTRAINT `odemebilgileri_ibfk_2` FOREIGN KEY (`adresno`) REFERENCES `adresbilgileri` (`adresid`),
  ADD CONSTRAINT `odemebilgileri_ibfk_3` FOREIGN KEY (`kartno`) REFERENCES `kartbilgileri` (`kartid`);

--
-- Tablo kısıtlamaları `profilbilgileri`
--
ALTER TABLE `profilbilgileri`
  ADD CONSTRAINT `profilbilgileri_ibfk_1` FOREIGN KEY (`kullanicino`) REFERENCES `kullanicibilgileri` (`kullaniciid`),
  ADD CONSTRAINT `profilbilgileri_ibfk_2` FOREIGN KEY (`adresno`) REFERENCES `adresbilgileri` (`adresid`);

--
-- Tablo kısıtlamaları `sepetbilgileri`
--
ALTER TABLE `sepetbilgileri`
  ADD CONSTRAINT `sepetbilgileri_ibfk_1` FOREIGN KEY (`kullanicino`) REFERENCES `kullanicibilgileri` (`kullaniciid`),
  ADD CONSTRAINT `sepetbilgileri_ibfk_2` FOREIGN KEY (`urunno`) REFERENCES `urunbilgileri` (`urunid`);

--
-- Tablo kısıtlamaları `urunbilgileri`
--
ALTER TABLE `urunbilgileri`
  ADD CONSTRAINT `urunbilgileri_ibfk_1` FOREIGN KEY (`magazano`) REFERENCES `magazabilgileri` (`magazaid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
