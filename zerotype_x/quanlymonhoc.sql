-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 14, 2014 at 10:38 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `quanlymonhoc`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `diem`
-- 

CREATE TABLE `diem` (
  `id_diem` int(255) NOT NULL,
  `Masinhvien` varchar(20) collate utf8_unicode_ci NOT NULL,
  `MaLop` varchar(20) collate utf8_unicode_ci NOT NULL,
  `diemso` int(10) NOT NULL,
  `hesodiem` float NOT NULL,
  PRIMARY KEY  (`id_diem`,`Masinhvien`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `diem`
-- 

INSERT INTO `diem` VALUES (0, '11004681', 'INT3219', 9, 20);
INSERT INTO `diem` VALUES (0, '10020567', 'INT3315', 8, 10);
INSERT INTO `diem` VALUES (1, '10020567', 'INT3315', 9, 30);

-- --------------------------------------------------------

-- 
-- Table structure for table `diemdanh`
-- 

CREATE TABLE `diemdanh` (
  `MaLop` varchar(50) collate utf8_unicode_ci NOT NULL,
  `Masinhvien` varchar(50) collate utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `begin_dd` tinyint(1) NOT NULL,
  `random_dd` tinyint(1) NOT NULL,
  `end_dd` tinyint(1) NOT NULL,
  PRIMARY KEY  (`MaLop`,`Masinhvien`,`date`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `diemdanh`
-- 

INSERT INTO `diemdanh` VALUES ('INT3304', '11000235', '2014-10-01', 1, 1, 1);
INSERT INTO `diemdanh` VALUES ('INT3304', '10020149', '2014-10-01', 1, 1, 1);
INSERT INTO `diemdanh` VALUES ('INT3219', '11023657', '2014-10-02', 1, 0, 0);
INSERT INTO `diemdanh` VALUES ('INT3219', '11004681', '2014-10-02', 1, 0, 0);
INSERT INTO `diemdanh` VALUES ('INT3219', '10032456', '2014-10-02', 1, 0, 0);
INSERT INTO `diemdanh` VALUES ('INT3315', '10020567', '2014-10-13', 1, 1, 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `hesodiem`
-- 

CREATE TABLE `hesodiem` (
  `heso` int(100) NOT NULL,
  `MaLop` varchar(200) collate utf8_unicode_ci NOT NULL,
  `thanhphan` varchar(200) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`heso`,`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `hesodiem`
-- 

INSERT INTO `hesodiem` VALUES (30, 'INT3219', 'điểm giữa kỳ');
INSERT INTO `hesodiem` VALUES (20, 'INT3219', 'điểm kiểm tra 15''');
INSERT INTO `hesodiem` VALUES (50, 'INT3219', 'cuối kỳ');
INSERT INTO `hesodiem` VALUES (30, 'INT3315', 'giữa kỳ');
INSERT INTO `hesodiem` VALUES (10, 'INT3315', 'kiểm tra 15''');
INSERT INTO `hesodiem` VALUES (60, 'INT3315', 'cuối kỳ');

-- --------------------------------------------------------

-- 
-- Table structure for table `monhoc`
-- 

CREATE TABLE `monhoc` (
  `MaLop` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Ten` varchar(100) collate utf8_unicode_ci NOT NULL,
  `soluongsinhvien` int(200) NOT NULL,
  `sotinchi` int(50) NOT NULL,
  `slsvthamgia` int(200) NOT NULL,
  `lichday` varchar(100) collate utf8_unicode_ci NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY  (`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `monhoc`
-- 

INSERT INTO `monhoc` VALUES ('INT3211', 'Mạng không dây', 80, 3, 0, 'tiết 3-5, thứ 5, 304-G2', '2014-09-05', '2014-12-22');
INSERT INTO `monhoc` VALUES ('INT3219', 'phân tích thiết kế hướng đối tượng', 80, 3, 0, 'tiết 6-9, thứ 3, 304 - G2', '2014-09-02', '2014-12-30');
INSERT INTO `monhoc` VALUES ('INT3304', 'Tin học cơ sở 4', 100, 4, 0, 'tiết 1-3 thứ 2, 3-g3', '2014-09-04', '2014-12-30');
INSERT INTO `monhoc` VALUES ('INT2205', 'Tin học cơ sở 4', 100, 4, 0, 'Tiết 1 - 5, thứ 6, 304 GD2', '2014-09-01', '2014-12-30');
INSERT INTO `monhoc` VALUES ('INT3315', 'Học máy', 100, 4, 0, 'tiết 3-5, thứ 5, 304-G2', '2014-10-01', '2014-10-22');

-- --------------------------------------------------------

-- 
-- Table structure for table `sinhvien`
-- 

CREATE TABLE `sinhvien` (
  `Masinhvien` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Lop` varchar(20) collate utf8_unicode_ci NOT NULL,
  `MaLop` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Ten` varchar(20) collate utf8_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `chuyencan` int(100) NOT NULL,
  `sex` varchar(10) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`Masinhvien`,`MaLop`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Dumping data for table `sinhvien`
-- 

INSERT INTO `sinhvien` VALUES ('11000235', 'K55CLC', 'INT3304', 'Trần Văn Hưng', '1993-02-12', 0, 'Nam');
INSERT INTO `sinhvien` VALUES ('10020149', 'K55cc', 'INT3304', 'Nguyễn Quang Huy', '1992-05-12', 0, 'Nam');
INSERT INTO `sinhvien` VALUES ('11023657', 'K56CD', 'INT3219', 'Nguyễn Văn Đức', '1993-09-12', 0, 'Nam');
INSERT INTO `sinhvien` VALUES ('11004681', 'K56CB', 'INT3219', 'Nguyễn Thị Luyến', '1993-03-23', 0, 'Nữ');
INSERT INTO `sinhvien` VALUES ('10020159', 'K55CC', 'INT3211', 'Nguyễn Viết Huy', '1992-08-28', 0, 'Nam');
INSERT INTO `sinhvien` VALUES ('10032456', 'K55CD', 'INT3219', 'Nguyễn Văn Chiến', '1992-11-03', 0, 'Nam');
INSERT INTO `sinhvien` VALUES ('10020567', 'K56cc', 'INT3315', 'Nguyễn Văn A', '1993-03-12', 0, 'Nữ');
