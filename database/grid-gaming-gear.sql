-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 09, 2021 lúc 11:06 AM
-- Phiên bản máy phục vụ: 5.7.14
-- Phiên bản PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `grid-gaming-gear`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`name`, `link`) VALUES
('AKKO', 'https://akko.vn/'),
('AKRacing', 'https://www.akracing.com/'),
('Anda', 'https://www.andaseat.com/'),
('Asus', 'https://www.asus.com/'),
('Corsair', 'https://www.corsair.com/'),
('Cougar', 'https://cougargaming.com/'),
('DareU', 'https://dareu.com.vn/'),
('DXRACER', 'https://www.dxracer.com/'),
('HyperX', 'https://www.hyperxgaming.com/'),
('Leopold', 'https://global.leopold.co.kr/'),
('Logitech', 'https://www.logitech.com/'),
('Rapoo', 'https://www.rapoo-eu.com/'),
('Razer', 'https://www.razer.com/'),
('SteelSeries', 'https://steelseries.com/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Bàn phím'),
(2, 'Chuột'),
(3, 'Tai nghe'),
(4, 'Ghế'),
(5, 'Loa'),
(6, 'Lót chuột');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `user_name`, `password`, `full_name`, `address`, `phone`, `email`, `image`, `gender`) VALUES
(8, 'duy', '123', 'nguyen duy 123456', '12231', '3123123', 'duy@gmail.com', 'user.png', 0),
(9, 'duy1', '123', 'nguyen duy', '33333', '55555', 'hoangduy791999@gmail.com', 'user.png', 0),
(10, 'duy2', '123', 'Nguyen Duy', 'UIT', '1203802199', 'hoangduy791999@gmail.com', 'user.png', 0),
(11, 'admin', '123', 'Admin', 'abc', '123456789', 'admin@gmail.com', 'user.png', 0),
(12, 'nhd', '123', 'Nguyen Duy haha', 'UIT 123', '1203802199', 'hoangduy791999@gmail.com', 'user.png', 0),
(14, 'duy5', '123', 'Nguyen Duy123', 'UIT', '1203802199', 'hoangduy791999@gmail.com', 'user.png', 0),
(16, 'new', '$2y$10$Aibk5kFYTkWtsKp2ByP4xej5WKu2k7LQHW89YxjvlnDLX7KiVaa5.', 'Nguyễn Hoàng Duy', 'UIT 123', '555 666', 'hoangduy791999@gmal.com', 'bCwMds.jpg', 0),
(17, 'new2', '$2y$10$v/FCE6G13kY/1arin665LeN4G5rMZZKZJd2EiD/Rr/TT7BrHqgLGC', 'Nguyễn Hoàng Duy', '12234241212', '111111', 'hoangduy791999@gmal.com', 'user.png', 0),
(18, 'AAAAAA', '$2y$10$kxd5VRm97fueB4Ug9Z71henwaZQYTBh1zxb6kR/m1/w/3X7T94GO.', '', '', '', '', 'user.png', 0),
(19, 'Duy791999', '$2y$10$CgsYtfZoWdKsw/.t4H/Cn.IwzsjVP0kqkTv7L8gZ9S2mcZeGr.TpG', 'Nguyễn Hoàng Duy', 'Binh Tan District', '777777777', 'hoangduy791999@gmal.com', 'user.png', 0),
(20, '123213213', '$2y$10$h.BF9kJUCJT8czwkj8.jyu03.qc60.aXt3p8CAy1eDCQQOPm/vFRy', 'Nguyễn Hoàng Duy', '', '', 'hoangduy791999@gmal.com', 'user.png', 0),
(21, 'aaaaaaaa', '$2y$10$UuL2TZ6xtP08Ugj8RVTkWeCrSv.z0ms45AZnqbA046sho05oUcyFG', 'Nguyễn Hoàng Duy', '03 đường 6A', '', 'hoangduy791999@gmal.com', 'user.png', 0),
(22, 'Duy212edqsdq', '$2y$10$bnlWu9965gusj2QiYaqmLex5sKh5AbNvoqgvTKdCJHldLDRu0KtmS', 'Từ Thị Lệ Đầy', '03 đường 6A', '44444444', 'nguyenhoangquan123@yahoo.com.vn', 'user.png', 0),
(23, 'SADIJH2132121', '$2y$10$DlxsN03TmAm8.isgSqrE5el6MB5sP0Yb1hsATojmuJauOlNy3uLN6', 'Nguyễn Hoàng Duy', 'Binh Tan District', '34342343', '17520399@gm.uit.edu.vn', 'user.png', 0),
(24, 'dasdwqeqs3', '$2y$10$GOHB3KMeXo1dloJnbgX4mOKhzwwfJAnQri9PtNWPiT04NOFJ1bmSy', 'sdddduyuy', 'dsd12312', '333333333', 'hoangduy@gmail.com', 'user.png', 0),
(25, 'bbbb55555', '$2y$10$RInCJGpTK9aguweYidNVfeNlNL9z8m46kM00doz4pUwI.v2tRxBe.', 'sadasdsad', 'dasfsdfdsf', '55555555', 'asdsd@gmail.com', 'user.png', 0),
(26, 'new123456', '$2y$10$N4nu3RxUOq942MyuWzN2i.hXPLnuHYIr5MP/QGldYepK11cCb9/wi', 'NGuyen Hoang DUy', '12321412', '55555555', 'hoangduasd@gmail.com', 'dp.png', 0),
(27, 'new123789', '$2y$10$KWHaNmj0j31GGMG35s2yh.RfrxQRk9b2tcef.E8CkwNnJgPV4KwLC', 'asdsafsd', 'dsdfdssfd', '66666666', 'dfcsdxs@sdvsd.com', 'kkkk.jpg', 0),
(28, 'new67890', '$2y$10$e/iHfdWH50j/6RXGbEsWeeUrbQylsPpZ6GAjoicRNIlBlD9OMQyVy', 'asd', 'sadasd', '222', 'new67890@gmail.com', 'https://avatars.dicebear.com/api/micah/new67890.svg?mood[]=happy&mouth[]=smile', 0),
(29, 'new123456789', '$2y$10$kuQt7tJz2TuI5yd8XwCZFuR0tS7NuyNYfnN1HETr7OFfxqvP5bnfe', '', '', '', 'hoangduy791999@gmail.com', 'https://avatars.dicebear.com/api/micah/new123456789.svg?mood[]=happy&mouth[]=smile&eyebrows[]=up&earringsProbability[]=0', 1),
(30, 'new123871263', '$2y$10$8VaabTHeXe7iSVqj7pHEVeZOR5hfl.Vt.vSFJ5IaRCHYK9rtClvP6', '', '', '', 'asjdksj@jkfsdnf.com', 'https://avatars.dicebear.com/api/micah/new123871263.svg?mood[]=happy&mouth[]=smile&eyebrows[]=eyelashesUp&earrings[]=stud&hair[]=full', 2),
(31, 'admin123', '$2y$10$NLnGkQcSwN88pjTJj9OrUenMXeINN8stIcj5vY9GLdeQT482puKRO', 'admin', '', '', 'admin123@gmail.com', 'https://avatars.dicebear.com/api/micah/admin123.svg?mood[]=happy&mouth[]=smile&eyebrows[]=up&earringsProbability[]=0&hair[]=fonze', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` date NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `order_date`, `customer_id`, `full_name`, `address`, `email`, `phone`, `status`, `payment_method`) VALUES
(11, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 1, 'OB'),
(12, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 2, 'OB'),
(13, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 2, 'OB'),
(14, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 1, 'COD'),
(15, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 1, 'COD'),
(16, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 3, 'COD'),
(17, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 3, ''),
(18, '2021-01-09', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 3, ''),
(19, '2021-01-10', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 1, ''),
(20, '2021-01-12', 11, 'Admin', 'abc', 'admin@gmail.com', '123456789', 1, ''),
(21, '2021-01-13', 8, 'nguyen duy 123', '12231', 'duy@gmail.com', '3123123', 1, ''),
(22, '2021-01-13', 8, 'nguyen duy 123', '12231', 'duy@gmail.com', '3123123', 4, ''),
(23, '2021-01-13', 0, 'Nguyen Duy', 'UIT', 'hoangduy791999@gmail.com', '1203802199', 4, ''),
(24, '2021-01-13', 8, 'nguyen duy 123456', '12231', 'duy@gmail.com', '3123123', 1, ''),
(25, '2021-01-13', 8, 'nguyen duy 123456', '12231', 'duy@gmail.com', '3123123', 4, ''),
(26, '2021-01-13', 0, 'Nguyen Duy', 'UIT', 'hoangduy791999@gmail.com', '1203802199', 1, ''),
(29, '2021-11-03', 16, 'Nguyễn Hoàng Duy', 'UIT 123', 'hoangduy791999@gmal.com', '555 666', 1, '0'),
(30, '2021-11-03', 16, 'Nguyễn Hoàng Duy', 'UIT 123', 'hoangduy791999@gmal.com', '555 666', 1, '0'),
(31, '2021-11-04', 16, 'Nguyễn Hoàng Duy', 'UIT 123', 'hoangduy791999@gmal.com', '555 666', 1, '0'),
(32, '2021-11-04', 16, 'Nguyễn Hoàng Duy', 'UIT 123', 'hoangduy791999@gmal.com', '555 666', 1, '0'),
(33, '2021-12-02', 16, 'Nguyễn Hoàng Duy', 'UIT 123', 'hoangduy791999@gmal.com', '555 666', 1, '0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`,`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `product_id`, `quantity`, `price`, `total`) VALUES
(11, 5, 1, 1350000, 1350000),
(11, 6, 1, 1390000, 1390000),
(12, 3, 1, 990000, 990000),
(12, 5, 1, 1350000, 1350000),
(12, 6, 1, 1390000, 1390000),
(13, 1, 2, 490000, 980000),
(13, 2, 1, 1090000, 1090000),
(14, 1, 1, 490000, 490000),
(14, 2, 1, 1090000, 1090000),
(15, 19, 1, 350000, 350000),
(16, 10, 1, 430000, 430000),
(17, 28, 4, 4550000, 18200000),
(18, 1, 1, 490000, 490000),
(19, 35, 1, 10990000, 10990000),
(19, 28, 4, 4550000, 18200000),
(19, 20, 1, 690000, 690000),
(20, 2, 4, 1090000, 4360000),
(21, 6, 1, 1390000, 1390000),
(21, 2, 1, 1090000, 1090000),
(22, 3, 1, 990000, 990000),
(23, 3, 1, 990000, 990000),
(23, 1, 1, 490000, 490000),
(24, 36, 3, 18990000, 56970000),
(25, 1, 1, 490000, 490000),
(25, 28, 1, 4550000, 4550000),
(26, 1, 3, 490000, 1470000),
(29, 13, 3, 590000, 1770000),
(29, 24, 1, 4390000, 4390000),
(29, 7, 1, 2750000, 2750000),
(29, 3, 2, 990000, 1980000),
(30, 36, 1, 18990000, 18990000),
(31, 5, 2, 1350000, 2700000),
(31, 7, 1, 2750000, 2750000),
(32, 4, 2, 1350000, 2700000),
(33, 6, 2, 1390000, 2780000),
(33, 32, 1, 6990000, 6990000),
(33, 14, 1, 590000, 590000),
(33, 7, 1, 2750000, 2750000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_3` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_4` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description_5` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sao` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `image`, `description`, `description_2`, `description_3`, `description_4`, `description_5`, `sao`) VALUES
(1, 1, 'Bàn phím Rapoo V500L Rainbow\r\n', 490000, 'Rapoo V500L Rainbow.jpg', 'Nhà Sản Xuất : Rapoo', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', 'Switch : Rapoo Blue/ Red', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(2, 1, 'Bàn phím HyperX Alloy Core RGB', 1090000, 'HyperX Alloy Core RGB.png', 'Nhà Sản Xuất : HyperX Kingston', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', '', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(3, 1, 'Bàn phím Cougar Attack X3', 990000, 'Cougar Attack X3.jpg', 'Nhà Sản Xuất : Cougar', 'Tình Trạng: Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', 'Switch : Cherry MX Blue ', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(4, 1, 'Bàn phím Akko 3087 v2 One Piece – Chopper', 1350000, 'Akko 3087 v2 One Piece – Chopper.jpg', 'Hãng sản xuất: Akko', 'Tình trạng: Mới 100%', 'Bảo hành: 12 Tháng', 'Switch: Akko switch (Blue/Orange/Pink)', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(5, 1, 'Bàn phím AKKO 3087 Dragon Ball Z – Goku', 1350000, 'AKKO 3087 Dragon Ball Z – Goku.jpg', 'Hãng sản xuất: Akko', 'Tình trạng: Mới 100%', 'Bảo hành: 12 Tháng', 'Switch: Akko switch (Blue/Orange/Pink)', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(6, 1, 'Bàn phím Akko 3108 Honkai Impact 3rd – Seele Vollerei', 1390000, 'Akko 3108 Honkai Impact 3rd – Seele Vollerei.jpg', 'Hãng sản xuất: Akko', 'Tình trạng: Mới 100%', 'Bảo hành: 12 Tháng', 'Switch: Akko switch (Blue/Orange/Pink)', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(7, 1, 'Bàn phím Leopold FC660MPD Sweden White Case', 2750000, 'Leopold FC660MPD Sweden White Case.jpg', 'Nhà sản xuất : Leopold', 'Tình trạng : Mới - 100%', 'Bảo hành : 24 tháng', 'Switch : Brown/ Silent Red', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(8, 1, 'Bàn phím Leopold FC660M PD White Grey', 2750000, 'Leopold FC660M PD White Grey.jpg', 'Nhà sản xuất : Leopold', 'Tình trạng : Mới - 100%', 'Bảo hành : 24 tháng', 'Cherry MX Red', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(9, 1, 'Bàn phím Asus ROG Strix Scope PBT', 2990000, 'Asus ROG Strix Scope PBT.png', 'Nhà sản xuất : Asus ROG', 'Tình trạng : Mới - 100%', 'Bảo hành : 36 tháng', '', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(10, 2, 'Chuột gaming Corsair Harpoon Pro RGB', 430000, 'Corsair Harpoon Pro RGB.png', 'Nhà Sản Xuất: Corsair', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành: 24 Tháng', 'Led: RGB', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(11, 2, 'Chuột Rapoo VT200', 440000, 'Rapoo VT200.jpg', 'Nhà Sản Xuất: Rapoo', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', 'Led: RGB', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(12, 2, 'Chuột gaming Asus TUF M3', 540000, 'Asus TUF M3.jpg', 'Nhà Sản Xuất: ASUS', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành: 24 Tháng', '', NULL, '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(13, 2, 'Chuột game Akko LW325 Blue (Lightweight)', 590000, 'Akko LW325 Blue (Lightweight).jpg', 'Hãng sản xuất: Akko', 'Tình Trạng : Mới 100%', 'Bảo Hành: 12 Tháng', 'Màu Sắc:  Black/Pink/Blue', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(14, 2, 'Chuột game Akko LW325 Pink (Lightweight)', 590000, 'Akko LW325 Pink (Lightweight).jpg', 'Hãng sản xuất: Akko', 'Tình Trạng : Mới 100%', 'Bảo Hành: 12 Tháng', 'Màu Sắc:  Black/Pink/Blue', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(15, 2, 'Chuột game Akko LW325 Black (Lightweight)', 590000, 'Akko LW325 Black (Lightweight).jpg', 'Hãng sản xuất: Akko', 'Tình Trạng : Mới 100%', 'Bảo Hành: 12 Tháng', 'Màu Sắc:  Black/Pink/Blue', NULL, '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(16, 2, 'Chuột Logitech G502 Hero', 990000, 'Logitech G502 Hero.png', 'Nhà Sản Xuất: Logitech', 'Tình Trạng : Mới 100%', 'Bảo Hành: 24 Tháng', 'Led: RGB', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(17, 2, 'Chuột Logitech G604 Hero Lightspeed Wireless', 1700000, 'Logitech G604 Hero Lightspeed Wireless.jpg', 'Nhà Sản Xuất: Logitech', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành: 24 Tháng', '', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(18, 2, 'Chuột Steelseries Rival 650', 2590000, 'Steelseries Rival 650.jpg', 'Nhà Sản Xuất: Steelseries', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành: 12 Tháng', 'Led : RGB 16.8 triệu màu', NULL, '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(19, 3, 'Tai nghe DareU EH416 RGB', 350000, 'DareU EH416 RGB.png', 'Nhà Sản Xuất : Dare-U', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 12 tháng', 'Màu sắc: Đen', 'Led: RGB', '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(20, 3, 'Tai nghe Rapoo VH200 RGB', 690000, 'Rapoo VH200 RGB.png', 'Nhà Sản Xuất : Rapoo', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', 'Led: RGB', 'Port: 3.5MM Audio port, Micphone Port,USB Port', '&#9733; &#9733; &#9733; &#9734; &#9734;'),
(21, 3, 'MSI IMMERSE GH70', 2490000, 'MSI IMMERSE GH70.jpg', 'Nhà Sản Xuất : MSI ', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', 'Đèn nền : 16,8 triệu màu', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(22, 3, 'Asus ROG Strix 7.1', 3990000, 'Asus ROG Strix 7.1.jpg', 'Nhà Sản Xuất : Asus', 'Tình Trạng : Mới 100%', 'Bảo Hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(23, 3, 'Razer Nari Ultimate', 4490000, 'Razer Nari Ultimate.png', 'Nhà Sản Xuất : Razer', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(24, 3, 'Razer Nari Ultimate – Overwatch Lucio Edition', 4390000, 'Razer Nari Ultimate – Overwatch Lucio Edition.png', 'Nhà Sản Xuất : Razer ', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(25, 3, 'Tai nghe SteelSeries Arctis 7 Black Edition - 2019 Edition', 3990000, 'SteelSeries Arctis 7 Black Edition - 2019 Edition.jpg', 'Nhà Sản Xuất : Steelseries ', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 12 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(26, 3, 'Tai nghe SteelSeries Arctis Pro + GameDAC White Edition', 5990000, 'SteelSeries Arctis Pro + GameDAC White Edition.jpg', 'Nhà Sản Xuất : Steelseries', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 12 tháng', 'Led: 16.8 triệu màu', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(27, 3, 'Tai nghe SteelSeries Arctis Pro Wireless', 8490000, 'SteelSeries Arctis Pro Wireless.png', 'Nhà Sản Xuất : Steelseries', 'Tình Trạng : Mới 100% - Fullbox', 'Bảo Hành : 12 tháng', 'Led: 16.8 triệu màu', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(28, 4, 'Ghế Cougar Armor K Black', 4550000, 'Cougar Armor K Black.png', 'Nhà sản xuất : Cougar', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(29, 4, 'Ghế Anda Seat Assassin V2 Black/White/Blue', 4690000, 'Anda Seat Assassin V2.png', 'Nhà sản xuất : Anda Seat', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(30, 4, 'Ghế Gamer AKRacing Octane K702B Black Red', 5990000, 'Gamer AKRacing Octane K702B.jpg', 'Nhà sản xuất : AKRacing', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', 'Màu sắc: Đen/Đen đỏ', '', '&#9733; &#9733; &#9733; &#9733; &#9734;'),
(31, 4, 'Ghế DXRACER - Drifting Series OH/DJ133/NR', 6490000, 'XRACER - Drifting Series.jpg', 'Nhà sản xuất : DXRacer', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(32, 4, 'Ghế DXRACER Racing Series RV131 / NR', 6990000, 'DXRACER Racing Series.jpg', 'Nhà sản xuất : DXRacer', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(33, 4, 'Ghế Nitro Concepts Radiant White (S300EX-WB)', 6990000, 'Nitro Concepts Radiant White.jpg', 'Nhà sản xuất : Nitro Concepts', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(34, 4, 'Ghế Gamer AKRacing Premium Camo', 7450000, 'AKRacing Premium Camo.jpg', 'Nhà sản xuất : AKRacing', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(35, 4, 'Ghế Gamer AKRacing Special Series K700T Arctica', 10990000, 'AKRacing Special Series K700T Arctica.jpg', 'Nhà sản xuất : AKRacing', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(36, 4, 'Ghế Gaming Noble Chair - Epic Series MERCEDES-AMG Edition', 18990000, 'Noble Chair - Epic Series MERCEDES-AMG Edition.png', 'Nhà sản xuất : Noble Chair', 'Tình trạng : Mới 100%', 'Bảo hành : 24 tháng', '', '', '&#9733; &#9733; &#9733; &#9733; &#9733;'),
(48, 1, 'bbbbb', 21312414, 'dun.jpg', 'aaaa', 'sdfsdfg', 'sdgfg', 'dfg', 'dfgfd', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
