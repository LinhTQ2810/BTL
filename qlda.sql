-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 06:15 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlda`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinh_huong_sv`
--

CREATE TABLE `dinh_huong_sv` (
  `MaDH` varchar(30) NOT NULL,
  `MaSV` varchar(30) NOT NULL,
  `Ytuong` varchar(300) NOT NULL,
  `Trang_thai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `do_an`
--

CREATE TABLE `do_an` (
  `MaDA` varchar(15) NOT NULL,
  `MaSV` varchar(30) NOT NULL,
  `MaGV` varchar(30) NOT NULL,
  `Ten_do_an` varchar(100) NOT NULL,
  `bao_cao_tom_tat` varchar(30) NOT NULL,
  `bao_cao_chi_tiet` varchar(30) NOT NULL,
  `demo` varchar(30) NOT NULL,
  `diem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MaGV` varchar(30) NOT NULL,
  `hoten_gv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giang_vien_quan_tam`
--

CREATE TABLE `giang_vien_quan_tam` (
  `madh` varchar(30) NOT NULL,
  `magv` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hoi_dong`
--

CREATE TABLE `hoi_dong` (
  `mada` varchar(30) NOT NULL,
  `magv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_gv`
--

CREATE TABLE `lich_su_gv` (
  `magv` varchar(30) NOT NULL,
  `ngay_gv` date DEFAULT NULL,
  `hoat_dong_gv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lich_su_sv`
--

CREATE TABLE `lich_su_sv` (
  `masv` varchar(30) NOT NULL,
  `ngaysv` date DEFAULT NULL,
  `hoat_dongsv` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nghien_cuu_gv`
--

CREATE TABLE `nghien_cuu_gv` (
  `MaNC` varchar(30) NOT NULL,
  `MaGV` varchar(30) NOT NULL,
  `Nghiencuu` varchar(300) NOT NULL,
  `Trang_thai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `phan_bien`
--

CREATE TABLE `phan_bien` (
  `MaDA` varchar(15) NOT NULL,
  `Nhan_xet_bao_cao_tom_tat` varchar(100) NOT NULL,
  `Nhan_xet_bao_cao_chi_tiet` varchar(100) NOT NULL,
  `Cau_hoi_phan_bien` varchar(100) NOT NULL,
  `Cau_tra_loi_sv` varchar(100) NOT NULL,
  `Diem` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MaSV` varchar(30) NOT NULL,
  `hoten_sv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sinh_vien_dk`
--

CREATE TABLE `sinh_vien_dk` (
  `manc` varchar(30) NOT NULL,
  `masv` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tien_do`
--

CREATE TABLE `tien_do` (
  `MaDA` varchar(20) NOT NULL,
  `Tuan1` date DEFAULT NULL,
  `tinh_trang1` varchar(20) NOT NULL,
  `nhiem_vu1` varchar(100) DEFAULT NULL,
  `tomtat1` varchar(100) DEFAULT NULL,
  `file1` varchar(100) DEFAULT NULL,
  `nhan_xet1` varchar(100) DEFAULT NULL,
  `Tuan2` date DEFAULT NULL,
  `tinh_trang2` varchar(20) NOT NULL,
  `nhiem_vu2` varchar(100) DEFAULT NULL,
  `tomtat2` varchar(100) DEFAULT NULL,
  `file2` varchar(100) DEFAULT NULL,
  `nhan_xet2` varchar(100) DEFAULT NULL,
  `Tuan3` date DEFAULT NULL,
  `tinh_trang3` varchar(20) NOT NULL,
  `nhiem_vu3` varchar(100) DEFAULT NULL,
  `tomtat3` varchar(100) DEFAULT NULL,
  `file3` varchar(100) DEFAULT NULL,
  `nhan_xet3` varchar(100) DEFAULT NULL,
  `Tuan4` date DEFAULT NULL,
  `tinh_trang4` varchar(20) NOT NULL,
  `nhiem_vu4` varchar(100) DEFAULT NULL,
  `tomtat4` varchar(100) DEFAULT NULL,
  `file4` varchar(100) DEFAULT NULL,
  `nhan_xet4` varchar(100) DEFAULT NULL,
  `Tuan5` date DEFAULT NULL,
  `tinh_trang5` varchar(20) NOT NULL,
  `nhiem_vu5` varchar(100) DEFAULT NULL,
  `tomtat5` varchar(100) DEFAULT NULL,
  `file5` varchar(100) DEFAULT NULL,
  `nhan_xet5` varchar(100) DEFAULT NULL,
  `Tuan6` date DEFAULT NULL,
  `tinh_trang6` varchar(20) NOT NULL,
  `nhiem_vu6` varchar(100) DEFAULT NULL,
  `tomtat6` varchar(100) DEFAULT NULL,
  `file6` varchar(100) DEFAULT NULL,
  `nhan_xet6` varchar(100) DEFAULT NULL,
  `Tuan7` date DEFAULT NULL,
  `tinh_trang7` varchar(20) NOT NULL,
  `nhiem_vu7` varchar(100) DEFAULT NULL,
  `tomtat7` varchar(100) DEFAULT NULL,
  `file7` varchar(100) DEFAULT NULL,
  `nhan_xet7` varchar(100) DEFAULT NULL,
  `Tuan8` date DEFAULT NULL,
  `tinh_trang8` varchar(20) NOT NULL,
  `nhiem_vu8` varchar(100) DEFAULT NULL,
  `tomtat8` varchar(100) DEFAULT NULL,
  `file8` varchar(100) DEFAULT NULL,
  `nhan_xet8` varchar(100) DEFAULT NULL,
  `Tuan9` date DEFAULT NULL,
  `tinh_trang9` varchar(20) NOT NULL,
  `nhiem_vu9` varchar(100) DEFAULT NULL,
  `tomtat9` varchar(100) DEFAULT NULL,
  `file9` varchar(100) DEFAULT NULL,
  `nhan_xet9` varchar(100) DEFAULT NULL,
  `Tuan10` date DEFAULT NULL,
  `tinh_trang10` varchar(20) NOT NULL,
  `nhiem_vu10` varchar(100) DEFAULT NULL,
  `tomtat10` varchar(100) DEFAULT NULL,
  `file10` varchar(100) DEFAULT NULL,
  `nhan_xet10` varchar(100) DEFAULT NULL,
  `Tuan11` date DEFAULT NULL,
  `tinh_trang11` varchar(20) NOT NULL,
  `nhiem_vu11` varchar(100) DEFAULT NULL,
  `tomtat11` varchar(100) DEFAULT NULL,
  `file11` varchar(100) DEFAULT NULL,
  `nhan_xet11` varchar(100) DEFAULT NULL,
  `Tuan12` date DEFAULT NULL,
  `tinh_trang12` varchar(20) NOT NULL,
  `nhiem_vu12` varchar(100) DEFAULT NULL,
  `tomtat12` varchar(100) DEFAULT NULL,
  `file12` varchar(100) DEFAULT NULL,
  `nhan_xet12` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinh_huong_sv`
--
ALTER TABLE `dinh_huong_sv`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaSV` (`MaSV`);

--
-- Indexes for table `do_an`
--
ALTER TABLE `do_an`
  ADD PRIMARY KEY (`MaDA`),
  ADD KEY `MaSV` (`MaSV`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MaGV`);

--
-- Indexes for table `giang_vien_quan_tam`
--
ALTER TABLE `giang_vien_quan_tam`
  ADD PRIMARY KEY (`madh`,`magv`),
  ADD KEY `magv` (`magv`);

--
-- Indexes for table `hoi_dong`
--
ALTER TABLE `hoi_dong`
  ADD PRIMARY KEY (`mada`,`magv`),
  ADD KEY `magv` (`magv`);

--
-- Indexes for table `lich_su_gv`
--
ALTER TABLE `lich_su_gv`
  ADD PRIMARY KEY (`magv`);

--
-- Indexes for table `lich_su_sv`
--
ALTER TABLE `lich_su_sv`
  ADD PRIMARY KEY (`masv`);

--
-- Indexes for table `nghien_cuu_gv`
--
ALTER TABLE `nghien_cuu_gv`
  ADD PRIMARY KEY (`MaNC`),
  ADD KEY `MaGV` (`MaGV`);

--
-- Indexes for table `phan_bien`
--
ALTER TABLE `phan_bien`
  ADD PRIMARY KEY (`MaDA`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MaSV`);

--
-- Indexes for table `sinh_vien_dk`
--
ALTER TABLE `sinh_vien_dk`
  ADD PRIMARY KEY (`manc`,`masv`),
  ADD KEY `masv` (`masv`);

--
-- Indexes for table `tien_do`
--
ALTER TABLE `tien_do`
  ADD PRIMARY KEY (`MaDA`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dinh_huong_sv`
--
ALTER TABLE `dinh_huong_sv`
  ADD CONSTRAINT `dinh_huong_sv_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `dinh_huong_sv_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `lich_su_sv` (`masv`);

--
-- Constraints for table `do_an`
--
ALTER TABLE `do_an`
  ADD CONSTRAINT `do_an_ibfk_1` FOREIGN KEY (`MaSV`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `do_an_ibfk_2` FOREIGN KEY (`MaSV`) REFERENCES `lich_su_sv` (`masv`),
  ADD CONSTRAINT `do_an_ibfk_3` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `do_an_ibfk_4` FOREIGN KEY (`MaGV`) REFERENCES `lich_su_gv` (`magv`);

--
-- Constraints for table `giang_vien_quan_tam`
--
ALTER TABLE `giang_vien_quan_tam`
  ADD CONSTRAINT `giang_vien_quan_tam_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `dinh_huong_sv` (`MaDH`),
  ADD CONSTRAINT `giang_vien_quan_tam_ibfk_2` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `giang_vien_quan_tam_ibfk_3` FOREIGN KEY (`magv`) REFERENCES `lich_su_gv` (`magv`);

--
-- Constraints for table `hoi_dong`
--
ALTER TABLE `hoi_dong`
  ADD CONSTRAINT `hoi_dong_ibfk_1` FOREIGN KEY (`mada`) REFERENCES `do_an` (`MaDA`),
  ADD CONSTRAINT `hoi_dong_ibfk_2` FOREIGN KEY (`magv`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `hoi_dong_ibfk_3` FOREIGN KEY (`mada`) REFERENCES `phan_bien` (`MaDA`),
  ADD CONSTRAINT `hoi_dong_ibfk_4` FOREIGN KEY (`mada`) REFERENCES `tien_do` (`MaDA`);

--
-- Constraints for table `nghien_cuu_gv`
--
ALTER TABLE `nghien_cuu_gv`
  ADD CONSTRAINT `nghien_cuu_gv_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giangvien` (`MaGV`),
  ADD CONSTRAINT `nghien_cuu_gv_ibfk_2` FOREIGN KEY (`MaGV`) REFERENCES `lich_su_gv` (`magv`);

--
-- Constraints for table `sinh_vien_dk`
--
ALTER TABLE `sinh_vien_dk`
  ADD CONSTRAINT `sinh_vien_dk_ibfk_1` FOREIGN KEY (`manc`) REFERENCES `nghien_cuu_gv` (`MaNC`),
  ADD CONSTRAINT `sinh_vien_dk_ibfk_2` FOREIGN KEY (`masv`) REFERENCES `sinhvien` (`MaSV`),
  ADD CONSTRAINT `sinh_vien_dk_ibfk_3` FOREIGN KEY (`masv`) REFERENCES `lich_su_sv` (`masv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
