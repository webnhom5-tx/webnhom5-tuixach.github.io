-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 22, 2021 lúc 04:02 AM
-- Phiên bản máy phục vụ: 10.4.19-MariaDB
-- Phiên bản PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thegioituixach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `caphocsinhtomi`
--

CREATE TABLE `caphocsinhtomi` (
  `id` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `gia` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `caphocsinhtomi`
--

INSERT INTO `caphocsinhtomi` (`id`, `ten`, `gia`, `image`) VALUES
('B20_Lake Blue', 'Balo Học Sinh Tomi B20_Lake Blue', 505000, './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Lake Blue.webp'),
('B20_Navy', 'Balo Học Sinh Tomi B20_Navy', 505000, './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Navy.webp'),
('B20_Pink', 'Balo Học Sinh Tomi B20_Pink', 505000, './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Pink.webp'),
('B20_Royal Blue', 'Balo Học Sinh Tomi B20_Royal Blue', 505000, './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Royal Blue.webp'),
('F20_Blue', 'Cặp Học Sinh Tomi F20_Blue', 559000, './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_Blue.webp'),
('F20_Lake Blue', 'Cặp Học Sinh Tomi F20_Lake Blue', 559000, './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_Lake Blue.webp'),
('F20_Navy', 'Cặp Học Sinh Tomi F20_Navy', 559000, './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_Navy.webp'),
('F20_Pink', 'Cặp Học Sinh Tomi F20_Pink', 559000, './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_pink.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `username` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`username`, `content`) VALUES
('1', 'Bắc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `username` varchar(20) NOT NULL,
  `id` varchar(100) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `gia` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`username`, `id`, `ten`, `gia`, `image`) VALUES
('sv.18103100038', 'B20_Navy', 'Balo Học Sinh Tomi B20_Navy', '505000', './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Navy.webp'),
('sv.18103100038', 'F20_Pink', 'Cặp Học Sinh Tomi F20_Pink', '559000', './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_pink.webp'),
('sv.18103100038', 'F20_Navy', 'Cặp Học Sinh Tomi F20_Navy', '559000', './Public/client/img/Cặp học sinh TOMI/Cặp Học Sinh Tomi F20_Navy.webp'),
('vanbac', 'B20_Pink', 'Balo Học Sinh Tomi B20_Pink', '505000', './Public/client/img/Cặp học sinh TOMI/Balo Học Sinh Tomi B20_Pink.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`username`, `passwd`, `full_name`, `phone`, `email`, `level`) VALUES
('duccuong', '123456', 'Cường', 0, '', '1'),
('sv.18103100038', '1', 'Bắcc', 1234, 'asss@gmail.com', 'ad'),
('thanhbinh', '123456', 'Bình', 0, '', '1'),
('thanhdat', '123456', 'Đạt', 0, '', '1'),
('vanbac', '123456', 'Bắc', 0, '', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `caphocsinhtomi`
--
ALTER TABLE `caphocsinhtomi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
