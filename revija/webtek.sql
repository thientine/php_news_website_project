-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2017, 16:27:17
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `webtek`
--
CREATE DATABASE IF NOT EXISTS `webtek` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `webtek`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE `haberler` (
  `Id` int(11) NOT NULL,
  `Baslik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `FotografAd` varchar(260) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Icerik` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `Tarih` datetime NOT NULL,
  `IsFlas` bit(1) NOT NULL,
  `IsSlider` bit(1) NOT NULL,
  `KategoriId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `haberler`
--

INSERT INTO `haberler` (`Id`, `Baslik`, `FotografAd`, `Icerik`, `Tarih`, `IsFlas`, `IsSlider`, `KategoriId`) VALUES
(42, 'Diyabet hastaları dondurma yiyebilir mi?', 'saglik1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 18:51:01', b'0', b'1', 1),
(43, '"Organik" etiketi olan her ürüne aldanmayın', 'saglik2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 18:54:06', b'1', b'0', 1),
(46, 'ABden son dakika referandum aciklamasi', 'siyaset1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 18:57:33', b'0', b'0', 6),
(47, 'Tarih belli oldu! 996 gün sora bir ilk', 'siyaset2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:02:07', b'1', b'1', 6),
(48, 'İkinci Elde Ayıplı Mala İlk Ceza Kesildi', 'ekonomi1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:03:33', b'1', b'1', 7),
(49, 'Ordusuna En Çok Para Harcayan Devlet Belli Oldu!', 'ekonomi2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:04:31', b'1', b'0', 7),
(50, 'Euro Dur Durak Bilmiyor', 'ishayati1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:05:02', b'0', b'1', 2),
(51, 'Dolar Yine Çıkışta', 'ishayati2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:05:10', b'1', b'0', 2),
(52, 'Yaşamak Güzeldir', 'yasam1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:05:18', b'0', b'0', 4),
(53, 'Muhteşem Manzaralar', 'yasam2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:05:25', b'0', b'0', 4),
(54, 'Usain Bolt Yine 1.', 'spor1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:06:56', b'0', b'1', 3),
(55, 'Sakaryanın Sporcusu ', 'spor2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:17:21', b'0', b'0', 3),
(56, 'Doğa Ana Bize Gülümsüyor', 'doga1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:17:40', b'0', b'1', 5),
(57, 'Doğa Ana İle İç İçe', 'doga2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan metus nec lectus egestas placerat. Etiam id pulvinar dui. Pellentesque volutpat arcu sed enim semper dignissim. Sed dictum nunc non suscipit pretium. Maecenas dapibus commodo diam, a interdum ante auctor sed. Etiam molestie urna a turpis placerat finibus. Donec ut vestibulum odio, eu fermentum neque. Quisque non consequat dui. Vestibulum accumsan feugiat fermentum. Etiam auctor ipsum ac neque bibendum, vitae placerat velit ornare. Nullam vulputate facilisis pharetra. Sed imperdiet et diam et vehicula. Suspendisse ut pellentesque erat.\r\n\r\nQuisque nec commodo sapien. Nullam ornare quis sem sit amet laoreet. Integer vitae leo ipsum. Nullam elit elit, varius sit amet sapien non, venenatis laoreet purus. Nulla a auctor urna. Sed eget purus iaculis, pretium metus sed, dictum mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet volutpat sapien sed eleifend. Nam mattis bibendum ex. Proin bibendum pretium metus, vel vehicula dolor viverra ut. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum tempor sem non auctor vestibulum. In ut sem facilisis quam sodales rhoncus. Aliquam faucibus felis quis consequat efficitur. Suspendisse quis odio a odio tincidunt interdum. Proin magna ante, varius id rhoncus et, tincidunt eget dui.', '2017-04-29 19:17:52', b'0', b'1', 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `Id` int(11) NOT NULL,
  `Ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `CSSClass` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`Id`, `Ad`, `CSSClass`) VALUES
(1, 'SAĞLIK', 'saglik'),
(2, 'İŞ HAYATI', 'ishayati'),
(3, 'SPOR', 'spor'),
(4, 'YAŞAM', 'yasam'),
(5, 'DOĞA', 'doga'),
(6, 'SİYASET', 'siyaset'),
(7, 'EKONOMİ', 'ekonomi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `Id` int(11) NOT NULL,
  `Email` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `Sifre` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `IsAdmin` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`Id`, `Email`, `Sifre`, `IsAdmin`) VALUES
(1, 'admin', 'admin', b'1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `Id` int(11) NOT NULL,
  `Ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `Icerik` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `HaberId` int(11) NOT NULL,
  `Onay` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`Id`, `Ad`, `Icerik`, `HaberId`, `Onay`) VALUES
(11, 'can', 'yorum bıraktım hehe', 43, b'1'),
(12, 'onayla', 'admin onayla', 57, b'1');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `haberler`
--
ALTER TABLE `haberler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`Id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `haberler`
--
ALTER TABLE `haberler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
