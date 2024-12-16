-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2024 lúc 04:18 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginbanquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `product` varchar(45) DEFAULT NULL,
  `feedback` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `regeter`
--

CREATE TABLE `regeter` (
  `tk` varchar(50) DEFAULT NULL,
  `dn` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `dc` varchar(45) DEFAULT NULL,
  `mk` varchar(45) DEFAULT NULL,
  `lmk` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `regeter`
--

INSERT INTO `regeter` (`tk`, `dn`, `email`, `phone`, `dc`, `mk`, `lmk`) VALUES
('Nguyễn Ly', 'Ly', 'ly@gmail.com', '0376252192', 'HT', '0123456', '0123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_dp`
--

CREATE TABLE `shop_dp` (
  `namepr` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `addres` varchar(45) DEFAULT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `product_price` varchar(45) DEFAULT NULL,
  `product_quantity` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `shop_dp`
--

INSERT INTO `shop_dp` (`namepr`, `phone`, `addres`, `product_name`, `product_price`, `product_quantity`) VALUES
('nguyenly', 376252192, 'Nam Định', 'Đầm ôm xếp cổ chéo', '945000', '3'),
('nguyenly', 376252192, 'Nam Định', 'Đầm ôm xếp cổ chéo', '945000', '3'),
('nguyenly', 376252192, 'Nam Định', 'Đầm ôm xếp cổ chéo', '945000', '3'),
('nguyenly', 376252192, 'Nam Định', 'Set áo blazer6 khuy và chân váy mini', '1024000', '3'),
('nguyenly', 2138843141, 'Nam Định', 'Đầm Lụa MAXICONO', '995000', '3'),
('tuyet', 327649199, 'nam dịnh', 'Đầm ôm xếp cổ chéo', '945000', '1'),
('tuyet', 66771508, '885 Tam Trinh', 'Đầm ôm xếp cổ chéo', '945000', '3'),
('tuyet', 66771508, '885 Tam Trinh', 'Set áo blazer6 khuy và chân váy mini', '1024000', '1'),
('tuyet', 66771508, '885 Tam Trinh', 'Set landatweed', '444000', '1'),
('Cham', 325975732, '885 Tam Trinh', 'Set áo Shophia', '1140000', '1'),
('Cham', 325975732, 'trung nghĩa ý yên nam định', 'Đầm Lụa Xếp Ly', '995000', '1'),
('Cham', 327649199, 'trung nghĩa ý yên nam định', 'Set áo Shophia', '1140000', '1'),
('Cham', 29348, 'nam dđinh', 'Set áo blazer6 khuy và chân váy mini', '1024000', '1'),
('Cham', 327649199, '896 nguyeen khoai', 'Set áo Shophia', '1140000', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
