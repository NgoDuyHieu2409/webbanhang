-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mysqli`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `admin_status`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id_cart`, `id_khachhang`, `code_cart`, `cart_status`) VALUES
(8, 6, '3332', 0),
(9, 6, '9652', 0),
(10, 6, '4498', 0),
(11, 6, '394', 0),
(12, 6, '2549', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart_details`
--

CREATE TABLE `tbl_cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_cart_details`
--

INSERT INTO `tbl_cart_details` (`id_cart_details`, `code_cart`, `id_sanpham`, `soluongmua`) VALUES
(4, '3332', 14, 2),
(5, '9652', 14, 2),
(6, '9652', 13, 1),
(7, '4498', 14, 2),
(8, '4498', 13, 1),
(9, '394', 14, 2),
(10, '394', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangki`
--

CREATE TABLE `tbl_dangki` (
  `id_dangki` int(11) NOT NULL,
  `tenkhachhang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_dangki`
--

INSERT INTO `tbl_dangki` (`id_dangki`, `tenkhachhang`, `email`, `diachi`, `matkhau`, `dienthoai`) VALUES
(1, 'ng?? hi???u', 'duyhieu2499@gmail.com', 'th??i h??a', '87a72866642f88f310f5d81fa3246927', '123456'),
(2, 'ng?? duy hi???u', '2499@gmail.com', 'h?? n???i', '87a72866642f88f310f5d81fa3246927', '456789'),
(3, 'ng?? duy ', 'ngoduyhieu99@gmail.com', 'th??i h??a', '87a72866642f88f310f5d81fa3246927', '12456'),
(4, 'ng?? duy ', 'ngoduyhieu99@gmail.com', 'th??i h??a', '87a72866642f88f310f5d81fa3246927', '12456'),
(5, 'nam anh', 'nam12@gmail.com', 'Ha Tay', '87a72866642f88f310f5d81fa3246927', '34567'),
(6, 'ng?? hi???u', 'duyhieu2499@gmail.com', 'th??i h??a', '87a72866642f88f310f5d81fa3246927', '123456'),
(8, 'Nguy???n Gia Th??nh', 'thanhgia24799@gmail.com', 'h?? n???i', '87a72866642f88f310f5d81fa3246927', '0985117370'),
(9, 'Nguy???n Gia', 'ngoduyhieu99@gmail.com', 'h?? n???i', '87a72866642f88f310f5d81fa3246927', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(1, '???p l??ng', 1),
(4, ' M??n h??nh ??i???n tho???i', 3),
(6, 'K??nh c?????ng l???c', 4),
(7, 'Ph??? ki???n trang tr??', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giasp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sanpham`, `tensanpham`, `masp`, `giasp`, `soluong`, `hinhanh`, `tomtat`, `noidung`, `tinhtrang`, `id_danhmuc`) VALUES
(8, '???p tai nghe 2', '002', '35000', 10, '1.jpg', '???p tai nghe', '???p tai nghe', 1, 1),
(11, '???p tai nghe', '001', '25000', 10, '4.jpg', '???p tai nghe', '???p tai nghe', 1, 4),
(12, 'M??n h??nh Iphone 8', '005', '350000', 66, 'm??n 8.jpg', 'M??n h??nh Iphone 8', 'M??n h??nh Iphone 8', 1, 4),
(13, 'M??n h??nh Iphone 7', '002', '350000', 10, 'm??n7.jpg', 'M??n h??nh Iphone 7', 'M??n h??nh Iphone 7', 1, 4),
(14, 'M??n h??nh Iphone 6', '001', '250000', 8, 'm??n6.jpg', 'M??n h??nh Iphone 6', 'M??n h??nh Iphone 6', 1, 4),
(15, 'K??nh c?????ng l???c XR', '008', '250000', 50, 'K??nh XR.jpg', 'K??nh c?????ng l???c XR', 'K??nh c?????ng l???c XR', 1, 6),
(16, 'K??nh c?????ng l???c IP11', '004', '350000', 8, 'K??nh 11.jpg', 'K??nh c?????ng l???c 11', 'K??nh c?????ng l???c 11', 1, 6),
(17, 'K??nh c?????ng l???c IP13', '002', '650000', 60, 'K??nh 13.jpg', 'K??nh c?????ng l???c', 'K??nh c?????ng l???c', 1, 6),
(18, 'K??nh c?????ng l???c AW', '009', '35000', 50, 'K??nh aple watch.jpg', 'K??nh c?????ng l???c', 'K??nh c?????ng l???c', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Indexes for table `tbl_dangki`
--
ALTER TABLE `tbl_dangki`
  ADD PRIMARY KEY (`id_dangki`);

--
-- Indexes for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_cart_details`
--
ALTER TABLE `tbl_cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_dangki`
--
ALTER TABLE `tbl_dangki`
  MODIFY `id_dangki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
