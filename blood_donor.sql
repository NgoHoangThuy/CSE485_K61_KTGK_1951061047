-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 03:03 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` varchar(5) NOT NULL,
  `bd_name` varchar(30) NOT NULL,
  `bd_sex` tinyint(1) NOT NULL,
  `bd_age` int(11) NOT NULL,
  `bd_bgroup` varchar(5) NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_sex`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
('BD001', 'Ngô Văn A', 1, 18, 'A', '2021-10-19', '0987651111'),
('BD002', 'Đỗ Thị N', 0, 21, 'B', '2021-08-18', '0988111111'),
('DB003', 'Lê Văn D', 1, 23, 'B', '2021-10-15', '0927222222');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`bd_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
