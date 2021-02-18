-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 06:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegcov7`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kel`
--

CREATE TABLE `tb_kel` (
  `kel_id` int(11) NOT NULL,
  `kel_peg_id` int(11) NOT NULL,
  `kel_peg_nama` varchar(30) NOT NULL,
  `kel_peg_nip` varchar(20) NOT NULL,
  `kel_peg_nik` varchar(20) NOT NULL,
  `kel_peg_org` varchar(100) NOT NULL,
  `kel_peg_orgsat` varchar(100) NOT NULL,
  `kel_nama` varchar(30) NOT NULL,
  `kel_jk` enum('Laki-laki','Perempuan') NOT NULL,
  `kel_hubungan` enum('Suami/Istri','Anak/Menantu','Bapak/Ibu/Mertua','Kakak/Adik','Kakek/Nenek','Cucu','Paman/Bibi','Sepupu','Keponakan','Lainnya') NOT NULL,
  `kel_tgllahir` date NOT NULL,
  `kel_nik` varchar(20) NOT NULL,
  `kel_stapeg` varchar(30) NOT NULL,
  `kel_nip` varchar(20) NOT NULL,
  `kel_tglswab` date NOT NULL,
  `kel_tglhasil` date NOT NULL,
  `kel_starawat` varchar(15) NOT NULL,
  `kel_staakhir` varchar(15) NOT NULL,
  `kel_status` varchar(15) NOT NULL,
  `kel_ket` text NOT NULL,
  `kel_tgl` date NOT NULL,
  `kel_tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kel`
--

INSERT INTO `tb_kel` (`kel_id`, `kel_peg_id`, `kel_peg_nama`, `kel_peg_nip`, `kel_peg_nik`, `kel_peg_org`, `kel_peg_orgsat`, `kel_nama`, `kel_jk`, `kel_hubungan`, `kel_tgllahir`, `kel_nik`, `kel_stapeg`, `kel_nip`, `kel_tglswab`, `kel_tglhasil`, `kel_starawat`, `kel_staakhir`, `kel_status`, `kel_ket`, `kel_tgl`, `kel_tglinput`) VALUES
(6, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Marto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'Non Kemenkes', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', '', ' esdgfhjk\r\n                    ', '2020-12-20', '2021-01-20'),
(7, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Marto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'Non Kemenkes', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', '', ' ssdgvfhbjnkm\r\n                    ', '2020-12-20', '2021-01-20'),
(8, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Marto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'Non Kemenkes', '400000', '2021-06-09', '2021-06-06', 'Isman', 'Sembuh', '', '555555555555\r\n                    ', '2021-01-20', '2021-01-25'),
(9, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Marto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'Non Kemenkes', '400000', '2021-01-11', '0000-00-00', 'Rujuk', 'Dalam Proses', '', 'rssdfdsf\r\n                    ', '2021-01-20', '2021-01-20'),
(10, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Sifani', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'Non Kemenkes', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', '', ' rrgrrwererwe\r\n                    ', '2021-01-20', '2021-01-20'),
(11, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Sifani', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'Non Kemenkes', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', '', ' gsgrsgrrg\r\n                    ', '2021-01-20', '2021-01-20'),
(12, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Gowanto', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'Kemenkes', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', '', 'hjghjkj\r\n                    ', '2020-12-20', '2021-01-20'),
(13, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Gowanto', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'Kemenkes', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', '', 'jhghkkhjkh  ', '2021-01-20', '2021-01-20'),
(17, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Sukuran', 'Perempuan', 'Lainnya', '2021-09-09', '999', 'Non Kemenkes', '9999000', '2021-01-19', '2021-01-19', 'Isman', 'Dalam Proses', '', '000000909', '2021-01-25', '2021-01-25'),
(18, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Kaka', 'Laki-laki', 'Kakek/Nenek', '2021-01-12', '4342', 'Non Kemenkes', '2132131', '2021-01-13', '2021-01-21', 'Rujuk', 'Dalam Proses', '', '21321312\r\n                    ', '2021-01-25', '2021-01-25'),
(19, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Jira Wira', 'Laki-laki', 'Keponakan', '2021-02-03', '43242', 'Non Kemenkes', '1231', '2021-01-12', '2021-01-14', 'Isman', 'Sembuh', '', '321ddfds         ', '2021-01-25', '2021-01-25'),
(21, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Bayu', 'Perempuan', 'Cucu', '1995-01-20', '143654', 'Non Kemenkes', '312312', '2021-01-30', '2021-01-30', 'Isman', 'Sembuh', '', 'dfdssdf\r\n                    ', '2021-01-29', '2021-01-29'),
(31, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Manto', 'Laki-laki', 'Kakak/Adik', '1994-11-06', '432434', 'Non Kemenkes', '456758765', '2021-02-07', '2021-02-08', 'Isman', 'Dalam Proses', '', 'fdfsdfses\r\n                    ', '2021-02-09', '2021-02-09'),
(39, 18, 'Kara Wong', '678', '876', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Jamet', 'Laki-laki', 'Suami/Istri', '2020-01-08', '731987398', 'Non Kemenkes', '33213', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(40, 18, 'Kara Wong', '678', '876', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Jamet', 'Laki-laki', 'Suami/Istri', '2020-01-08', '731987398', 'Non Kemenkes', '33213', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(43, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Gandong', 'Laki-laki', 'Suami/Istri', '2020-01-08', '34', 'Kemenkes', '', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(44, 20, 'Jun Edi', '234', '4324', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', 'Pebepe', 'Laki-laki', 'Kakak/Adik', '1994-11-12', '1500', 'Non Kemenkes', '1501', '2021-02-12', '2021-02-13', 'Isman', 'Dalam Proses', '', 'dsddsfs\r\n                    ', '2021-02-15', '2021-02-15'),
(45, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janosooo', 'Perempuan', 'Lainnya', '2000-02-24', '8080000', 'Non Kemenkes', '909099999', '2020-12-31', '2021-02-01', 'Rujuk', 'Sembuh', 'Sembuh', 'klkl\r\n                    ', '2021-02-15', '2021-02-16'),
(46, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janetom', 'Perempuan', 'Keponakan', '1996-02-03', '777777778', 'Non Kemenkes', '909090', '2021-02-14', '2021-02-15', 'Isman', 'Sembuh', '', 'jjjjjj\r\n                    ', '2021-02-15', '2021-02-15'),
(47, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janosooo', 'Perempuan', 'Lainnya', '2000-02-24', '8080000', 'Non Kemenkes', '909099999', '2021-02-23', '2021-02-27', 'Isman', 'Sembuh', 'Isman', ' tytyty\r\n                    ', '2021-02-15', '2021-02-16'),
(48, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Dear', 'Perempuan', 'Keponakan', '2005-02-18', '797879', 'Non Kemenkes', '787978', '2021-02-17', '2021-02-18', 'Rujuk', 'Sembuh', '', 'ninja\r\n                    ', '2021-02-15', '2021-02-15'),
(49, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', '', 'Laki-laki', 'Suami/Istri', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', '', '0000-00-00', '0000-00-00'),
(50, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'dfsdfsd', 'Laki-laki', 'Suami/Istri', '2020-01-15', '31341', 'Non Kemenkes', '', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-16', '2021-02-16'),
(51, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Zaino', 'Laki-laki', 'Cucu', '2019-02-18', '4235234345', 'Non Kemenkes', '', '2021-02-14', '2021-02-15', 'Isman', 'Dalam Proses', 'Isman', 'rwrw\r\n                    ', '2021-02-16', '2021-02-16'),
(52, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Zzzz', 'Laki-laki', 'Kakak/Adik', '2021-02-22', '3121', 'Non Kemenkes', '3123231', '2021-02-16', '2021-02-13', 'Isman', 'Dalam Proses', 'Rujuk', 'dsadas                 ', '2021-02-16', '2021-02-16'),
(53, 22, 'Zenovax Aldi', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janosooo', 'Perempuan', 'Lainnya', '2000-02-24', '8080000', 'Non Kemenkes', '909099999', '2021-02-17', '2021-02-17', '', '', 'Isman', 'lkhjgg\r\n                    ', '2021-02-16', '2021-02-16'),
(54, 1, 'Januar Salasanto', '1212', '1122', '', '', 'juva', 'Laki-laki', 'Lainnya', '2014-02-24', '45656665', 'Non Kemenkes', '9099990000', '2021-02-15', '2021-02-16', '', '', 'Isman', 'kkkkkkkkklllllllll      ', '2021-02-16', '2021-02-16'),
(55, 23, 'vivi', '90901', '90902', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Jivaxah', 'Laki-laki', 'Suami/Istri', '1988-02-25', '56767', 'Non Kemenkes', '565464222', '2021-03-02', '2021-03-03', '', '', 'Isman', 'fdgfdhhdd\r\n                    ', '2021-02-17', '2021-02-17'),
(58, 23, 'vivi', '90901', '90902', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Jivaxah', 'Laki-laki', 'Suami/Istri', '1988-02-25', '56767', 'Non Kemenkes', '565464222', '2021-02-26', '2021-02-27', '', '', 'Isman', 'xcvvvv\r\n                    ', '2021-02-17', '2021-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kon`
--

CREATE TABLE `tb_kon` (
  `kon_id` int(11) NOT NULL,
  `kon_peg_id` int(11) NOT NULL,
  `kon_peg_nama` varchar(30) NOT NULL,
  `kon_peg_jk` enum('Laki-laki','Perempuan') NOT NULL,
  `kon_peg_tgllahir` date NOT NULL,
  `kon_peg_nip` varchar(20) NOT NULL,
  `kon_peg_nik` varchar(20) NOT NULL,
  `kon_peg_stapeg` varchar(30) NOT NULL,
  `kon_peg_org` varchar(40) NOT NULL,
  `kon_peg_orgsat` varchar(40) NOT NULL,
  `kon_tglswab` date NOT NULL,
  `kon_tglhasil` date NOT NULL,
  `kon_starawat` varchar(15) NOT NULL,
  `kon_staakhir` varchar(15) NOT NULL,
  `kon_status` varchar(15) NOT NULL,
  `kon_ket` text NOT NULL,
  `kon_tgl` date NOT NULL,
  `kon_tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kon`
--

INSERT INTO `tb_kon` (`kon_id`, `kon_peg_id`, `kon_peg_nama`, `kon_peg_jk`, `kon_peg_tgllahir`, `kon_peg_nip`, `kon_peg_nik`, `kon_peg_stapeg`, `kon_peg_org`, `kon_peg_orgsat`, `kon_tglswab`, `kon_tglhasil`, `kon_starawat`, `kon_staakhir`, `kon_status`, `kon_ket`, `kon_tgl`, `kon_tglinput`) VALUES
(34, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-03-04', '2021-03-08', 'Isman', 'Dalam Proses', 'f', ' xxx\r\n                    ', '2021-01-20', '2021-02-15'),
(35, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', '2020-12-01', '2021-02-15', 'Isman', 'Dalam Proses', '', 'hgfhgff\r\n                    ', '2020-10-20', '2021-02-15'),
(36, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', '2020-12-01', '2021-02-15', 'Isman', 'Dalam Proses', '', ' asdfghjk\r\n                    ', '2021-01-20', '2021-02-15'),
(38, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', '', ' likugjhfv\r\n                    ', '2020-12-20', '2021-02-09'),
(39, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', '', 'jjokjlhkghk\r\n                    ', '2021-01-20', '2021-02-09'),
(40, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-04', '2021-02-15', 'Isman', 'Dalam Proses', '', ' yigm hmj\r\n                    ', '2021-01-20', '2021-02-15'),
(41, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-04', '2021-02-15', 'Isman', 'Dalam Proses', '', ' xxx\r\n                    ', '2021-01-20', '2021-02-15'),
(42, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-05', '0000-00-00', 'Isman', 'Dalam Proses', '', 'poiughfghg \r\n                    ', '2020-12-20', '2021-02-15'),
(43, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-05', '0000-00-00', 'Isman', 'Dalam Proses', '', 'jkouiygjy\r\n                    ', '2021-01-20', '2021-02-15'),
(44, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-10', '2021-02-11', 'Rujuk', 'Sembuh', '', ' jghhjbfh\r\n                    ', '2021-01-20', '2021-02-15'),
(45, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-01', '2021-02-02', 'Rujuk', 'Dalam Proses', '', ' iuyyjgfj\r\n                    ', '2021-01-20', '2021-02-15'),
(46, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-25', '2021-01-25', 'Isman', 'Dalam Proses', '', '2525525252525\r\n                    ', '2021-01-25', '2021-02-15'),
(47, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-26', '2021-01-26', 'Isman', 'Dalam Proses', '', 'xxxx\r\n                    ', '2021-01-25', '2021-02-15'),
(48, 10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', '2021-01-01', '2021-01-08', 'Isman', 'Dalam Proses', '', 'gfhghgfhft \r\n                    ', '2021-01-26', '2021-02-15'),
(49, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-01', '2021-01-12', 'Isman', 'Dalam Proses', '', 'dsfdsfs\r\n                    ', '2021-01-26', '2021-02-15'),
(50, 11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'lnspektorat Jenderal', 'lnspektorat II', '2021-01-16', '2021-01-18', 'Rujuk', 'Dalam Proses', '', ' Surat menyusul\r\n                    ', '2021-01-27', '2021-02-15'),
(51, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-21', '2021-01-25', 'Isman', 'Dalam Proses', '', 'qewew \r\n                    ', '2021-01-27', '2021-02-15'),
(52, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-27', '2021-01-27', 'Isman', 'Dalam Proses', '', 'hgghgj\r\n                    ', '2021-01-27', '2021-02-15'),
(53, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-27', '2021-01-28', 'Rujuk', 'Dalam Proses', '', 'jkhjkghgbjm\r\n                    ', '2021-01-29', '2021-02-15'),
(54, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-01-27', '2021-01-28', 'Isman', 'Dalam Proses', '', ' jjkhgjhg\r\n                    ', '2021-01-29', '2021-02-09'),
(55, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-01-27', '2021-01-28', 'Rujuk', 'Dalam Proses', '', 'xxxx            ', '2021-01-29', '2021-02-15'),
(56, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-05', '2021-02-06', 'Isman', 'Dalam Proses', '', 'gggggggg', '2021-01-29', '2021-02-09'),
(61, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-26', '2021-01-28', 'Rujuk', 'Dalam Proses', '', ' \r\n                    ', '2021-01-29', '2021-02-15'),
(62, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-27', '2021-01-29', 'Rujuk', 'Dalam Proses', '', 'abcdefg          ', '2021-01-29', '2021-02-15'),
(63, 18, 'Kara Wong', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-02-03', '2021-02-04', 'Isman', 'Dalam Proses', '', 'test\r\n                    ', '2021-02-05', '2021-02-05'),
(64, 18, 'Kara Wong', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-02-01', '2021-02-02', 'Isman', 'Dalam Proses', '', 'dafsdefes\r\n                    ', '2021-02-05', '2021-02-05'),
(65, 18, 'Kara Wong', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-01-31', '2021-02-01', 'Isman', 'Dalam Proses', '', 'sdsfdesfw           ', '2021-02-05', '2021-02-05'),
(72, 14, 'Jen Kai', 'Perempuan', '1992-01-01', '2', '2', 'PNS', 'Direktorat Jenderal Pelayanan Kesehatan', 'Sekretariat Direktorat Jenderal Pelayana', '2021-02-10', '2021-02-11', 'Isman', 'Sembuh', '', ' \r\n                    ', '2021-02-09', '2021-02-15'),
(73, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-02-14', '2021-02-15', 'Isman', 'Meninggal', '', ' \r\n                    ', '2021-02-09', '2021-02-15'),
(74, 22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-14', '2021-02-15', 'Rujuk', 'Sembuh', 'Rujuk', 'zxzxzxz12\r\n                    ', '2021-02-15', '2021-02-16'),
(76, 22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-24', '2021-02-25', 'Rujuk', 'Dalam Proses', 'Rujuk', '000000\r\n                    ', '2021-02-15', '2021-02-16'),
(77, 22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-03-01', '2021-03-02', 'Rujuk', 'Meninggal', 'Isman', 'kkkkkkkkk', '2021-02-15', '2021-02-16'),
(78, 22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-03-12', '2021-03-13', 'Rujuk', 'Sembuh', 'Isman', 'lklklklkl\r\n                    ', '2021-02-15', '2021-02-16'),
(79, 21, 'Sahalan Yasan', 'Laki-laki', '1972-02-22', '1119999', '1212999', 'PNS', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', '2021-02-12', '2021-02-13', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-15', '2021-02-15'),
(80, 8, 'Julius Saturay', 'Laki-laki', '1990-01-01', '82824', '88228', 'PNS', 'Sekretariat Jenderal', 'Pusal Analisis Determinan Kesehatan', '2021-02-12', '2021-02-13', 'Isman', 'Sembuh', '', ' \r\n                    ', '2021-02-15', '2021-02-15'),
(81, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-19', '2021-02-27', 'Rujuk', 'Dalam Proses', '', ' oke\r\n                    ', '2021-02-15', '2021-02-15'),
(82, 22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '2021-02-14', '2021-02-15', '', '', 'Sembuh', 'testttt\r\n                    ', '2021-02-16', '2021-02-16'),
(83, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', '2021-03-04', '2021-03-05', '', '', 'Rujuk', 'tttttttyyyyyyyyyyyyyyy\r\n                    ', '2021-02-16', '2021-02-16'),
(84, 23, 'vivi', 'Perempuan', '2004-01-16', '90901', '90902', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '2021-02-15', '2021-02-16', '', '', 'Isman', 'halo\r\n                    ', '2021-02-17', '2021-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_org`
--

CREATE TABLE `tb_org` (
  `org_id` varchar(15) NOT NULL,
  `org_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_org`
--

INSERT INTO `tb_org` (`org_id`, `org_nama`) VALUES
('700100000000', 'Sekretariat Jenderal'),
('700200000000', 'lnspektorat Jenderal'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat'),
('700600000000', 'Direktorat Jenderal Kefarmasian Dan Alat Kesehatan'),
('700700000000', 'Badan Penelitian dan Pengembangan Kesehatan'),
('700800000000', 'Badan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orgsat`
--

CREATE TABLE `tb_orgsat` (
  `orgsat_org_id` varchar(15) NOT NULL,
  `orgsat_org_nama` varchar(100) NOT NULL,
  `orgsat_id` varchar(15) NOT NULL,
  `orgsat_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_orgsat`
--

INSERT INTO `tb_orgsat` (`orgsat_org_id`, `orgsat_org_nama`, `orgsat_id`, `orgsat_nama`) VALUES
('700100000000', 'Sekretariat Jenderal', '700101000000', 'Biro Perencanaan dan Anggaran'),
('700100000000', 'Sekretariat Jenderal', '700102000000', 'Biro Keuangan dan Barang Milik Negara'),
('700100000000', 'Sekretariat Jenderal', '700103000000', 'Biro Hukum dan Organisasi'),
('700100000000', 'Sekretariat Jenderal', '700104000000', 'Biro Kepegawaian'),
('700100000000', 'Sekretariat Jenderal', '700105000000', 'Biro Kerja Sama Luar Negeri'),
('700100000000', 'Sekretariat Jenderal', '700106000000', 'Biro Komunikasi dan Pelayanan Masyarakat'),
('700100000000', 'Sekretariat Jenderal', '700107000000', 'Biro Umum'),
('700100000000', 'Sekretariat Jenderal', '700108000000', 'Pusat Data dan lnformasi'),
('700100000000', 'Sekretariat Jenderal', '700109000000', 'Pusal Analisis Determinan Kesehatan'),
('700100000000', 'Sekretariat Jenderal', '700110000000', 'Pusat Pembiayaan dan Jaminan Kesehatan'),
('700100000000', 'Sekretariat Jenderal', '700111000000', 'Pus at Krisis Kesehatan'),
('700100000000', 'Sekretariat Jenderal', '700112000000', 'Pusat Kesehatan Haji'),
('700100000000', 'Sekretariat Jenderal', '700113000000', 'Sekretariat Konsil Kedokteran Indonesia'),
('700200000000', 'lnspektorat Jenderal', '700201000000', 'Sekretariat lnspektorat Jenderal'),
('700200000000', 'lnspektorat Jenderal', '700202000000', 'lnspektorat I'),
('700200000000', 'lnspektorat Jenderal', '700203000000', 'lnspektorat II'),
('700200000000', 'lnspektorat Jenderal', '700204000000', 'lnspektorat Ill'),
('700200000000', 'lnspektorat Jenderal', '700205000000', 'lnspektorat IV'),
('700200000000', 'lnspektorat Jenderal', '700206000000', 'lnspektorat lnvestigasi'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700301000000', 'Sekretariat Direktorat Jenderal Pelayanan Kesehatan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700302000000', 'Direktorat Pelayanan Kesehatan Primer'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700303000000', 'Direktorat Pelayanan Kesehatan Rujukan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700304000000', 'Direktorat Pelayanan Kesehatan Tradisional'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700305000000', 'Direktorat Fasilitas Pelayanan Kesehatan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700306000000', 'Direktorat Mutu dan Akreditasi Pelayanan Kesehatan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700307000000', 'Rumah Sakit Umum Pusat Nasional Dr. Cipto Mangunkusumo Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700308000000', 'Run1ah Sakit Umum Pusat Dr. Hasan Sadikin Bandung'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700309000000', 'Rumah Sakit Umum Pusat Dr. Sardjito Yogyakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700310000000', 'Rumah Saki! Umum Pusat Dr. Kariadi Semarang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700311000000', 'Rumah Sakit Umum Pusat Sanglah Denpasar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700312000000', 'Rumah Sakit Umum Pusat Dr. Wahidin Sudirohusodo Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700313000000', 'Rum ah Sa kit Umum Pus at F atmawati Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700314000000', 'Rumah Sakit Umum Pusat Persahabatan Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700315000000', 'Rumah Sakit Umum Pusat Dr. Mohamad Hoesin Palembang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700316000000', 'Rumah Sakit Umum Pusat Dr. M. Djamil Padang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700317000000', 'Rumah Sakit Umum Pusat Dr. Soeradji Tirtonegoro Klaten'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700318000000', 'Rumah Sakit Umum Pusat Prof. Dr. R. D. Kandou Manado'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700319000000', 'Rumah Sakit Umum Pusat H. Adam Malik Medan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700320000000', 'Rumah Sakit Jantung dan Pembuluh Darah Harapan Kita Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700321000000', 'Rumah Sakit Anak dan Bunda Harapan Kita Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700322000000', 'Rumah Sakit Kanker Dharmais Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700323000000', 'Rumah Sakit Mata Cicendo Bandung'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700324000000', 'Rumah Sakit Ortopedi Prof. Dr. R. Soeharso Surakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700325000000', 'Rumah Sakit Paru Dr. Ario Wirawan Salatiga'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700326000000', 'Rumah Sakit Paru Dr. H. A. Rotinsulu Bandung'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700327000000', 'Rumah Sakit Paru Dr. M. Goenawan Partowidigdo Cisarua Bogor'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700328000000', 'Rumah Sakit Jiwa Dr. Soeharto Heerdjan Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700329000000', 'Rumah Sakit Jiwa Prof. Dr. Soerojo Magelang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700330000000', 'Rumah Sakit Jiwa Dr. Radjiman Wediodiningrat Lawang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700331000000', 'Rumah Sakit Dr. Marzoeki Mahdi Bogor'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700332000000', 'Rumah Sakit Ketergantungan Oba! Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700333000000', 'Rumah Saki! Stroke Nasional Bukittinggi'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700334000000', 'Rumah Sakit Dr. Tadjuddin Chalid Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700335000000', 'Rumah Sakit Kusta Sitanala Tangerang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700336000000', 'Rumah Sakit Kusta Dr. Rivai Abdullah Palembang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700337000000', 'Balai Besar Laboratorium Kesehatan Palembang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700338000000', 'Balai Besar Laboratorium Kesehatan Surabaya'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700339000000', 'Balai Besar Laboratorium Kesehatan Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700340000000', 'Balai Besar Laboratorium Kesehatan Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700341000000', 'Balai Pengamanan Fasilitas Kesehatan Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700342000000', 'Balai Pengamanan Fasilitas Kesehatan Surabaya'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700343000000', 'Balai Pengamanan Fasilitas Kesehatan Medan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700344000000', 'Balai Pengamanan Fasilitas Kesehatan Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700345000000', 'Balai Besar Kesehatan Paru Masyarakat Surakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700346000000', 'Balai Besar Kesehatan Paru Masyarakat Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700347000000', 'Balai Besar Kesehatan Paru Masyarakat Bandung'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700348000000', 'Balai Kesehatan Mata Masyarakat Cikampek'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700349000000', 'Balai Kesehatan Mata Masyarakat Makassar'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700350000000', 'Balai Pengamanan Fasilitas Kesehatan Banjarmasin'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700351000000', 'loka Pengamanan Fasilitas Kesehatan Jayapura'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700352000000', 'Rumah Sakit Umum Ratatotok Buyat'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700353000000', 'Rumah Sakit Penyakit lnfeksi Prof. Dr. Sulianti Saroso Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700354000000', 'Loka Pengamanan Fasilitas Kesehatan Surakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700355000000', 'Loka Pengamanan Fasilitas Kesehatan Banjarbaru'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700356000000', 'Rumah Sakit Pusat Otak Nasional Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700357000000', 'Unit Pelayanan Kesehatan Kementerian Kesehatan'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700358000000', 'Balai Besar Laboratorium Kesehatan Palembang'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700359000000', 'Balai Besar Laboratorium Kesehatan Surabaya'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700360000000', 'Balai Besar Laboralorium Kesehatan Jakarta'),
('700300000000', 'Direktorat Jenderal Pelayanan Kesehatan', '700394000000', 'Rumah Sakit Pusat Otak Nasional Prof. Dr. dr. Mahar Mardjono Jakarta - BARU'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700401000000', ' Sekretariat Direktorat Jenderal Pencegahan dan Pengendalian Penyakit'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700402000000', ' Direktorat Surveilans dan Karantina Kesehatan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700403000000', ' Direktorat Pencegahan dan Pengendalian Penyakit Menular Langsung'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700404000000', ' Direktorat Pencegahan dan Pengendalian Penyakit Tular Vektor dan Zoonotik'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700405000000', ' Direktorat Pencegahan dan Pengendalian Penyakit Tidak Menular'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700406000000', ' Direktorat Pencegahan dan Pengendalian Masalah Kesehatan Jiwa dan NAPZA'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700407000000', ' Kantor Kesehatan Pelabuhan Kelas I Tanjung Priok'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700408000000', ' Kantor Kesehatan Pelabuhan Kelas I Denpasar'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700409000000', ' Kantor Kesehatan Pelabuhan Kelas I Surabaya'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700410000000', ' Kantor Kesehatan Pelabuhan Kelas I Soekarno Hatta'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700411000000', ' Kantor Kesehatan Pelabuhan Kelas I Medan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700412000000', ' Kantor Kesehatan Pelabuhan Kelas I Makassar'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700413000000', ' Kantor Kesehatan Pelabuhan Kelas I Batam'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700414000000', ' Kantor Kesehatan Pelabuhan Kelas II Tanjung Pinang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700415000000', ' Kantor Kesehatan Pelabuhan Kelas II Banjarmasin'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700416000000', ' Kantor Kesehatan Pelabuhan Kelas II Kendari'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700417000000', ' Kantor Kesehatan Pelabuhan Kelas II Tarakan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700418000000', ' Kantor Kesehatan Pelabuhan Kelas II Mataram'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700419000000', ' Kantor Kesehatan Pelabuhan Kelas II Padang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700420000000', ' Kantor Kesehatan Pelabuhan Kelas II Semarang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700421000000', ' Kantor Kesehatan Pelabuhan Kelas II Palembang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700422000000', ' Kantor Kesehatan Pelabuhan Kelas II Probolinggo'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700423000000', ' Kantor Kesehatan Pelabuhan Kelas II Ambon'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700424000000', ' Kantor Kesehatan Pelabuhan Kelas II Pekanbaru'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700425000000', ' Kantor Kesehatan Pelabuhan Kelas II Balikpapan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700426000000', ' Kantor Kesehatan Pelabuhan Kelas II Manado'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700427000000', ' Kantor Kesehatan Pelabuhan Kelas II Bandung'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700428000000', ' Kantor Kesehatan Pelabuhan Kelas II Banten'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700429000000', ' Kantor Kesehatan Pelabuhan Kelas II Pontianak'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700430000000', ' Kantor Kesehatan Pelabuhan Kelas II Samarinda'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700431000000', ' Kantor Kesehatan Pelabuhan Kelas II Cilacap'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700432000000', ' Kantor Kesehatan Pelabuhan Kelas II Panjang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700433000000', ' Kantor Kesehatan Pelabuhan Kelas II Jayapura'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700434000000', ' Kantor Kesehatan Pelabuhan Kelas II Tanjung Balai Karimun'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700435000000', ' Kantor Kesehatan Pelabuhan Kelas III Pangkal Pinang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700436000000', ' Kantor Kesehatan Pelabuhan Kelas III Bitung'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700437000000', ' Kantor Kesehatan Pelabuhan Kelas III Tembilahan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700438000000', ' Kantor Kesehatan Pelabuhan Kelas III Jambi'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700439000000', ' Kantor Kesehatan Pelabuhan Kelas III Dumai'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700440000000', ' Kantor Kesehatan Pelabuhan Kelas III Palu'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700441000000', ' Kantor Kesehatan Pelabuhan Kelas III Kupang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700442000000', ' Kantor Kesehatan Pelabuhan Kelas III Biak'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700443000000', ' Kantor Kesehatan Pelabuhan Kelas III Sorong'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700444000000', ' Kantor Kesehatan Pelabuhan Kelas III Manokwari'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700445000000', ' Kantor Kesehatan Pelabuhan Kelas III Sampit'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700446000000', ' Kantor Kesehatan Pelabuhan Kelas III Banda Aceh'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700447000000', ' Kantor Kesehatan Pelabuhan Kelas III Merauke'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700448000000', ' Kantor Kesehatan Pelabuhan Kelas III Lhokseumawe'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700449000000', ' Kantor Kesehatan Pelabuhan Kelas III Bengkulu'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700450000000', ' Kantor Kesehatan Pelabuhan Kelas III Poso'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700451000000', ' Kantor Kesehatan Pelabuhan Kelas III Palangkaraya'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700452000000', ' Kantor Kesehatan Pelabuhan Kelas III Gorontalo'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700453000000', ' Kantor Kesehatan Pelabuhan Kelas III Ternate'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700454000000', ' Kantor Kesehatan Pelabuhan Kelas III Sabang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700455000000', ' BBTKL dan PP Yogyakarta'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700456000000', ' BBTKL dan PP Jakarta'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700457000000', ' BBTKL dan PP Surabaya'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700458000000', ' BBTKL dan PP Banjarbaru'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700459000000', ' BTKL dan PP Kelas I Batam'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700460000000', ' BTKL dan PP Kelas I Makassar'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700461000000', ' BTKL dan PP Kelas I Medan'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700462000000', ' BTKL dan PP Kelas I Palembang'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700463000000', ' BTKL dan PP Kelas I Manado'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700464000000', ' BTKL dan PP Kelas II Ambon'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700465000000', ' Kantor Kesehatan Pelabuhan Kelas IV DI Yogyakarta'),
('700400000000', 'Direktorat Jenderal Pencegahan Dan Pengendalian Penyakit', '700465010000', ' Urusan Tata Usaha'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700501000000', 'Sekretariat Direktorat Jenderal Kesehatan Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700502000000', 'Direktorat Kesehatan Keluarga'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700503000000', 'Direktorat Kesehatan Lingkungan'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700504000000', 'Direktorat Kesehatan Kerja dan Olahraga'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700505000000', 'Direktorat Gizi Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700506000000', 'Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700512000000', 'Balai Kesehatan Olahraga Masyarakat Bandung'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700513000000', 'Balai Kesehatan Tradisional Masyarakat Makassar'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700514000000', 'Loka Kesehatan Tradisional Masyarakat Palembang'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700601000000', ' Sekretariat Direktorat Jenderal Kefarmasian dan Alat Kesehatan'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700602000000', ' Direktorat Tata Kelola Obat Publik dan Perbekalan Kesehatan'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700603000000', ' Direktorat Pelayanan Kefarmasian'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700604000000', ' Direktorat Produksi dan Distribusi Kefarmasian'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700605000000', ' Direktorat Penilaian Alat Kesehatan dan Perbekalan Kesehatan Rumah Tangga'),
('700600000000', ' Direktorat Jenderal Kefarmasian Dan Alat Kesehatan', '700606000000', ' Direktorat Pengawasan Alat Kesehatan dan Perbekalan Kesehatan Rumah Tangga'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700701000000', ' Sekretariat Badan Penelitian dan Pengembangan Kesehatan'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700702000000', ' Pusat Penelitian dan Pengembangan Biomedis dan Teknologi Dasar Kesehatan'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700703000000', ' Pusat Penelitian dan Pengembangan Sumber Daya dan Pelayanan Kesehatan'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700704000000', ' Pusat Penelitian dan Pengembangan Upaya Kesehatan Masyarakat'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700705000000', ' Pusat Penelitian dan Pengembangan Humaniora dan Manajemen Kesehatan'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700707000000', ' Balai Penelitian dan Pengembangan Biomedis Papua'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700709000000', ' Balai Penelitian dan Pengembangan Gangguan Akibat Kekurangan lodium Magelang'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700710000000', ' Loka Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Baturaja'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700711000000', ' Loka Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Ciamis'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700712000000', ' Balai Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Banjarnegara'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700713000000', ' Balai Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Tanah Bumbu'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700714000000', ' Balai Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Donggala'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700715000000', ' Loka Penelitian dan Pengembangan Pengendalian Penyakit Bersumber Binatang Waikabubak'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700716000000', ' Loka Penelitian dan Pengembangan Biomedis Aceh'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700717000000', ' Balai Besar Penelitian dan Pengembangan Vektor Dan Reservoir Penyakit Salatiga'),
('700700000000', ' Sadan Penelitian dan Pengembangan Kesehatan', '700718000000', ' Balai Besar Penelitian dan Pengembangan Tanaman Obat Dan Obat Tradisional Tawangmangu'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700801000000', ' Sekretariat Badan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700802000000', ' Pusat Perencanaan dan Pendayagunaan Sumber Daya Manusia Kesehatan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700803000000', ' Pusat Pendidikan Sumber Daya Manusia Kesehatan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700804000000', ' Pusat Pelatihan Sumber Daya Manusia Kesehatan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700850000000', ' Sekretaris Konsil Tenaga Kesehatan Indonesia'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700854000000', ' Balai Besar Pelatihan Kesehatan Jakarta'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700855000000', ' Balai Besar Pelatihan Kesehatan Ciloto'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700856000000', ' Balai Besar Pelatihan Kesehatan Makassar'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700857000000', ' Balai Pelatihan Kesehatan Cikarang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700858000000', ' Balai Pelatihan Kesehatan Semarang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700859000000', ' Balai Pelatihan Kesehatan Batam'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700860000000', ' Pusat Peningkatan Mutu Sumber Daya Manusia Kesehatan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700861000000', ' Poltekkes Kemenkes Surakarta'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700862000000', ' Poltekkes Kemenkes Semarang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700863000000', ' Poltekkes Kemenkes Tasikmalaya'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700864000000', ' Poltekkes Kemenkes Bandung'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700865000000', ' Poltekkes Kemenkes Jakarta III'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700866000000', ' Poltekkes Kemenkes Medan'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700867000000', ' Poltekkes Kemenkes Yogyakarta'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700868000000', ' Poltekkes Kemenkes Makassar'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700869000000', ' Poltekkes Kemenkes Malang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700870000000', ' Poltekkes Kemenkes Surabaya'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700871000000', ' Poltekkes Kemenkes Jakarta II'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700872000000', ' Poltekkes Kemenkes Jakarta I'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700873000000', ' Poltekkes Kemenkes Denpasar'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700874000000', ' Poltekkes Kemenkes Tanjung Karang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700875000000', ' Poltekkes Kemenkes Palembang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700876000000', ' Poltekkes Kemenkes Bengkulu'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700877000000', ' Poltekkes Kemenkes Padang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700878000000', ' Poltekkes Kemenkes Kupang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700879000000', ' Poltekkes Kemenkes Pontianak'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700880000000', ' Poltekkes Kemenkes San1arinda'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700881000000', ' Poltekkes Kemenkes Banjarmasin'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700882000000', ' Poltekkes Kemenkes Manado'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700883000000', ' Poltekkes Kemenkes Kendari'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700884000000', ' Poltekkes Kemenkes Jayapura'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700885000000', ' Poltekkes Kemenkes Aceh'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700886000000', ' Poltekkes Kemenkes Banten'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700887000000', ' Poltekkes Kemenkes Jambi'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700888000000', ' Poltekkes Kemenkes Riau'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700889000000', ' Poltekkes Kemenkes Mataram'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700890000000', ' Poltekkes Kemenkes Palu'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700891000000', ' Poltekkes Kemenkes Palangkaraya'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700892000000', ' Poltekkes Kemenkes Maluku'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700893000000', ' Poltekkes Kemenkes Ternate'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700894000000', ' Poltekkes Kemenkes Gorontalo'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700895000000', ' Poltekkes Kemenkes Tanjungpinang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700896000000', ' Poltekkes Kemenkes Pangkal Pinang'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700897000000', ' Poltekkes Kemenkes Mamuju'),
('700800000000', ' Sadan Pengembangan dan Pemberdayaan Sumber Daya Manusia Kesehatan', '700898000000', ' Poltekkes Kemenkes Sorong');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peg`
--

CREATE TABLE `tb_peg` (
  `peg_id` int(11) NOT NULL,
  `peg_nama` varchar(30) NOT NULL,
  `peg_jk` enum('Laki-laki','Perempuan') NOT NULL,
  `peg_tgllahir` date NOT NULL,
  `peg_nip` varchar(20) NOT NULL,
  `peg_nik` varchar(20) NOT NULL,
  `peg_stapeg` varchar(30) NOT NULL,
  `peg_org` varchar(100) NOT NULL,
  `peg_orgsat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peg`
--

INSERT INTO `tb_peg` (`peg_id`, `peg_nama`, `peg_jk`, `peg_tgllahir`, `peg_nip`, `peg_nik`, `peg_stapeg`, `peg_org`, `peg_orgsat`) VALUES
(1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara'),
(2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi'),
(3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian'),
(5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara'),
(6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi'),
(7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian'),
(8, 'Julius Saturay', 'Laki-laki', '1990-01-01', '82824', '88228', 'PNS', 'Sekretariat Jenderal', 'Pusal Analisis Determinan Kesehatan'),
(9, 'Agustin Jumatin', 'Perempuan', '1979-05-26', '37373', '33773', 'PNS', 'Sekretariat Jenderal', 'Biro Kerja Sama Luar Negeri'),
(10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi'),
(11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'lnspektorat Jenderal', 'lnspektorat II'),
(12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi'),
(14, 'Jen Kai', 'Perempuan', '1992-01-01', '2', '2', 'PNS', 'Direktorat Jenderal Pelayanan Kesehatan', 'Sekretariat Direktorat Jenderal Pelayanan Kesehatan'),
(15, 'Jonatan Yasid', 'Laki-laki', '2020-01-04', '12129', '11229', 'PNS', 'lnspektorat Jenderal', 'lnspektorat I'),
(16, 'Era Amrulloh', 'Laki-laki', '2000-01-10', '789', '987', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi'),
(18, 'Kara Wong', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi'),
(19, 'Dora Desi', 'Perempuan', '1991-01-03', '2340', '2340', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi'),
(20, 'Jun Edi', 'Laki-laki', '2020-01-06', '234', '4324', 'PNS', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran'),
(21, 'Sahalan Yasan', 'Laki-laki', '1972-02-22', '1119999', '1212999', 'PNS', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran'),
(22, 'Zenovax Aldi', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian'),
(23, 'vivi', 'Perempuan', '2004-01-16', '90901', '90902', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekkel`
--

CREATE TABLE `tb_rekkel` (
  `rekkel_id` int(11) NOT NULL,
  `rekkel_tahun` varchar(4) NOT NULL,
  `rekkel_bulan` varchar(10) NOT NULL,
  `rekkel_minggu` varchar(10) NOT NULL,
  `rekkel_srisman` varchar(10) NOT NULL,
  `rekkel_srrujuk` int(11) NOT NULL,
  `rekkel_saproses` int(11) NOT NULL,
  `rekkel_sasembuh` int(11) NOT NULL,
  `rekkel_samati` int(11) NOT NULL,
  `rekkel_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekkel`
--

INSERT INTO `tb_rekkel` (`rekkel_id`, `rekkel_tahun`, `rekkel_bulan`, `rekkel_minggu`, `rekkel_srisman`, `rekkel_srrujuk`, `rekkel_saproses`, `rekkel_sasembuh`, `rekkel_samati`, `rekkel_total`) VALUES
(45, '2020', '12', '', '2', 1, 3, 0, 0, 3),
(46, '2021', '01', '', '6', 3, 6, 3, 0, 9),
(47, '2021', '02', '', '7', 2, 5, 4, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekkon`
--

CREATE TABLE `tb_rekkon` (
  `rekkon_id` int(11) NOT NULL,
  `rekkon_tahun` varchar(4) NOT NULL,
  `rekkon_bulan` varchar(10) NOT NULL,
  `rekkon_minggu` varchar(10) NOT NULL,
  `rekkon_srisman` int(11) NOT NULL,
  `rekkon_srrujuk` int(11) NOT NULL,
  `rekkon_saproses` int(11) NOT NULL,
  `rekkon_sasembuh` int(11) NOT NULL,
  `rekkon_samati` int(11) NOT NULL,
  `rekkon_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_telp` varchar(15) NOT NULL,
  `user_akses` enum('Super','Admin','Umum') NOT NULL,
  `user_org` varchar(100) NOT NULL,
  `user_orgsat` varchar(100) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_nip` varchar(20) NOT NULL,
  `user_nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_nama`, `user_email`, `user_telp`, `user_akses`, `user_org`, `user_orgsat`, `user_name`, `user_pass`, `user_nip`, `user_nik`) VALUES
(2, 'Sumit Sodoku', 'sumut@yahoo.com', '085476540987', 'Admin', 'lnspektorat Jenderal', 'lnspektorat I', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '3333', '4444'),
(3, 'Sapeloh Ariati', 'sapeloh@rocket.mail', '085477651254', 'Admin', 'Direktorat Jenderal Pelayanan Kesehatan', 'Direktorat Pelayanan Kesehatan Primer', 'kemkes', '0571370f946b01f91f98a50357833529', '5555', '6666'),
(5, 'Sakura Takiya', 'sakura@gmail.com', '085745760949', 'Super', 'Direktorat Jenderal Pelayanan Kesehatan', 'Direktorat Pelayanan Kesehatan Tradisional', 'sujudi', '8ede5faba59389464e45278cffabf625', '7777', '8888'),
(7, 'Kukira Takada', 'takadaz@gmail.com', '087564758777', 'Super', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'admin', '21232f297a57a5a743894a0e4a801fc3', '99977', '88877'),
(11, 'Andes Rohmat', 'andesa@gmail.com', '23145', 'Admin', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'pusdatin', '0148d197282307a042a0382a7f793097', '5613433', '432423'),
(12, 'Kanza Bella', 'kanza@gmail.com', '555550000', 'Admin', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'covid', '979d5b78613520f02d4118968683fbbb', '222488', '333288'),
(13, 'Ejak', 'e@e', '31444235', 'Admin', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'e', 'e1671797c52e15f763380b45e841ec32', '432425555', '35345444'),
(14, 'Vivi', 'v@v', '717123', 'Umum', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', 'v', '9e3669d19b675bd57058fd4664205d2a', '90901', '90902');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kel`
--
ALTER TABLE `tb_kel`
  ADD PRIMARY KEY (`kel_id`);

--
-- Indexes for table `tb_kon`
--
ALTER TABLE `tb_kon`
  ADD PRIMARY KEY (`kon_id`);

--
-- Indexes for table `tb_org`
--
ALTER TABLE `tb_org`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `tb_orgsat`
--
ALTER TABLE `tb_orgsat`
  ADD PRIMARY KEY (`orgsat_id`);

--
-- Indexes for table `tb_peg`
--
ALTER TABLE `tb_peg`
  ADD PRIMARY KEY (`peg_id`),
  ADD UNIQUE KEY `peg_nip` (`peg_nip`),
  ADD UNIQUE KEY `peg_nik` (`peg_nik`);

--
-- Indexes for table `tb_rekkel`
--
ALTER TABLE `tb_rekkel`
  ADD PRIMARY KEY (`rekkel_id`);

--
-- Indexes for table `tb_rekkon`
--
ALTER TABLE `tb_rekkon`
  ADD PRIMARY KEY (`rekkon_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_nip` (`user_nip`),
  ADD UNIQUE KEY `user_nik` (`user_nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kel`
--
ALTER TABLE `tb_kel`
  MODIFY `kel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tb_kon`
--
ALTER TABLE `tb_kon`
  MODIFY `kon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `tb_peg`
--
ALTER TABLE `tb_peg`
  MODIFY `peg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tb_rekkel`
--
ALTER TABLE `tb_rekkel`
  MODIFY `rekkel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `tb_rekkon`
--
ALTER TABLE `tb_rekkon`
  MODIFY `rekkon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
