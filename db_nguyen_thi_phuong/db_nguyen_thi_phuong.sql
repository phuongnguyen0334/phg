-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2024 lúc 10:32 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_nguyen_thi_phuong`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `Id` int(11) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Description` text NOT NULL,
  `ImageUrl` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`Id`, `Title`, `Description`, `ImageUrl`) VALUES
(1, 'Laravel Programming	', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.\r\n', 'example/images/laravel.png'),
(2, '.NET Programming	', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.\r\n', 'images/dot-net.png'),
(3, 'Spring Boot Programming	', 'This is a longer card with supporting text below as a natural lead-in to additional content.\r\n', 'images/spring-boot.png'),
(4, 'Angular Programming	', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.\r\n', 'images/angular.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
