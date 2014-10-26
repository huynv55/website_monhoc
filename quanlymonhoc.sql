-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2014 at 09:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quanlymonhoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE IF NOT EXISTS `diem` (
  `id_diem` int(255) NOT NULL,
  `Masinhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `diemso` int(10) NOT NULL,
  `thanhphan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_diem`,`Masinhvien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`id_diem`, `Masinhvien`, `MaLop`, `diemso`, `thanhphan`) VALUES
(0, '11000235', 'INT3304', 8, 'thành phần 1'),
(1, '11000235', 'INT3304', 9, 'giữa kỳ'),
(2, '11000235', 'INT3304', 7, 'cuối kỳ'),
(0, '11004681', 'INT3219', 8, 'giữa kỳ'),
(0, '11023657', 'INT3219', 7, 'kiểm tra 15 phút'),
(1, '11023657', 'INT3219', 8, 'giữa kỳ'),
(2, '11023657', 'INT3219', 9, 'cuối kỳ'),
(3, '11023657', 'INT3219', 8, 'kiểm tra 15 phút'),
(1, '11004681', 'INT3219', 9, 'kiểm tra 15 phút'),
(2, '11004681', 'INT3219', 7, 'cuối kỳ'),
(3, '11004681', 'INT3219', 9, 'giữa kỳ'),
(0, '10032456', 'INT3219', 9, 'kiểm tra 15 phút'),
(1, '10032456', 'INT3219', 6, 'kiểm tra 15 phút'),
(1, '10020159', 'INT3211', 8, 'giữa kỳ'),
(3, '10032456', 'INT3219', 10, 'giữa kỳ'),
(4, '11023657', 'INT3219', 8, 'giữa kỳ'),
(0, '10020459', 'INT2205', 10, '15 phút'),
(1, '10020459', 'INT2205', 9, 'thực hành'),
(2, '10020459', 'INT2205', 10, 'giữa kỳ'),
(3, '10020459', 'INT2205', 10, 'cuối kỳ'),
(4, '11004681', 'INT3219', 10, 'kiểm tra 15 phút'),
(0, '10020159', 'INT3211', 9, '15 phút'),
(6, '10020459', 'INT2205', 10, '15 phút'),
(2, '10020159', 'INT3211', 10, 'cuối kỳ'),
(3, '10020159', 'INT3211', 8, '15 phút'),
(4, '10020159', 'INT3211', 7, 'giữa kỳ'),
(5, '10020159', 'INT3211', 6, 'giữa kỳ');

-- --------------------------------------------------------

--
-- Table structure for table `diemdanh`
--

CREATE TABLE IF NOT EXISTS `diemdanh` (
  `MaLop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Masinhvien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `begin_dd` tinyint(1) NOT NULL,
  `random_dd` tinyint(1) NOT NULL,
  `end_dd` tinyint(1) NOT NULL,
  PRIMARY KEY (`MaLop`,`Masinhvien`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `diemdanh`
--

INSERT INTO `diemdanh` (`MaLop`, `Masinhvien`, `date`, `begin_dd`, `random_dd`, `end_dd`) VALUES
('INT3304', '11000235', '2014-10-01', 1, 1, 1),
('INT3304', '10020149', '2014-10-01', 1, 1, 1),
('INT3219', '11023657', '2014-10-02', 1, 0, 0),
('INT3219', '11004681', '2014-10-02', 1, 0, 0),
('INT3219', '10032456', '2014-10-02', 1, 0, 0),
('INT3315', '10020567', '2014-10-13', 1, 1, 1),
('INT3219', '11023657', '0000-00-00', 1, 1, 1),
('INT3219', '11004681', '0000-00-00', 1, 1, 1),
('INT3219', '10032456', '0000-00-00', 1, 1, 1),
('INT3219', '11023657', '2014-10-22', 1, 1, 1),
('INT3219', '11004681', '2014-10-22', 1, 1, 1),
('INT3219', '10032456', '2014-10-22', 1, 1, 1),
('INT3219', '11023657', '2014-10-24', 1, 0, 1),
('INT3219', '11004681', '2014-10-24', 1, 0, 1),
('INT3219', '10032456', '2014-10-24', 1, 1, 1),
('INT2205', '10020459', '2014-10-24', 1, 1, 1),
('INT3211', '10020159', '2014-10-24', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hesodiem`
--

CREATE TABLE IF NOT EXISTS `hesodiem` (
  `thanhphan` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `heso` int(100) NOT NULL,
  PRIMARY KEY (`MaLop`,`heso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hesodiem`
--

INSERT INTO `hesodiem` (`thanhphan`, `MaLop`, `heso`) VALUES
('kiểm tra 15''', 'INT3319', 15),
('kiểm tra 15 phút', 'INT3219', 15),
('giữa kỳ', 'INT3219', 30),
('cuối kỳ', 'INT3219', 55),
('thành phần 1', 'INT3304', 20),
('giữa kỳ', 'INT3304', 30),
('cuối kỳ', 'INT3304', 50),
('15 phút', 'INT2205', 15),
('thực hành', 'INT2205', 20),
('giữa kỳ', 'INT2205', 25),
('cuối kỳ', 'INT2205', 40),
('15 phút', 'INT3211', 20),
('giữa kỳ', 'INT3211', 30),
('cuối kỳ', 'INT3211', 50);

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaLop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluongsinhvien` int(200) NOT NULL,
  `sotinchi` int(50) NOT NULL,
  `slsvthamgia` int(200) NOT NULL,
  `lichday` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MaLop`, `Ten`, `soluongsinhvien`, `sotinchi`, `slsvthamgia`, `lichday`, `begin_date`, `end_date`) VALUES
('INT3211', 'Mạng không dây', 80, 3, 1, 'tiết 3-5, thứ 5, 304-G2', '2014-09-05', '2014-12-22'),
('INT3219', 'phân tích thiết kế hướng đối tượng', 80, 3, 3, 'tiết 6-9, thứ 3, 304 - G2', '2014-09-02', '2014-12-30'),
('INT3304', 'Tin học cơ sở 4', 100, 4, 3, 'tiết 1-3 thứ 2, 3-g3', '2014-09-04', '2014-12-30'),
('INT2205', 'Tin học cơ sở 4', 100, 4, 1, 'Tiết 1 - 5, thứ 6, 304 GD2', '2014-09-01', '2014-12-30');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `Masinhvien` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Lop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `chuyencan` int(100) NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tongket` float NOT NULL,
  PRIMARY KEY (`Masinhvien`,`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`Masinhvien`, `Lop`, `MaLop`, `Ten`, `Ngaysinh`, `chuyencan`, `sex`, `tongket`) VALUES
('11000235', 'K55CLC', 'INT3304', 'Trần Văn Hưng', '1993-02-12', 9, 'Nam', 9),
('10020149', 'K55cc', 'INT3304', 'Nguyễn Quang Huy', '1992-05-12', 0, 'Nam', 0),
('11023657', 'K56CD', 'INT3219', 'Nguyễn Văn Đức', '1993-09-12', 2, 'Nam', 8.475),
('11004681', 'K56CB', 'INT3219', 'Nguyễn Thị Luyến', '1993-03-23', 2, 'Nữ', 7.825),
('10020159', 'K55CC', 'INT3211', 'Nguyễn Viết Huy', '1992-08-28', 1, 'Nam', 8.8),
('10032456', 'K55CD', 'INT3219', 'Nguyễn Văn Chiến', '1992-11-03', 3, 'Nam', 4.125),
('10020567', 'K56cc', 'INT3315', 'Nguyễn Văn A', '1993-03-12', 0, 'Nữ', 0),
('10020457', 'k55cc', 'INT3304', 'Nguyễn Minh Diện', '1992-08-12', 0, 'Nam', 0),
('10020459', 'k56cd', 'INT2205', 'Nguyễn Văn Trỗi', '1993-12-08', 1, 'Nam', 9.8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
