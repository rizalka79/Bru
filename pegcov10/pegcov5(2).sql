-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 07:50 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegcov5`
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
  `kel_unitkerja` varchar(40) NOT NULL,
  `kel_nip` varchar(20) NOT NULL,
  `kel_tglswab` date NOT NULL,
  `kel_tglhasil` date NOT NULL,
  `kel_starawat` enum('Isman','Rujuk') NOT NULL,
  `kel_staakhir` enum('Dalam Proses','Sembuh','Meninggal') NOT NULL,
  `kel_ket` text NOT NULL,
  `kel_tgl` date NOT NULL,
  `kel_tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kel`
--

INSERT INTO `tb_kel` (`kel_id`, `kel_peg_id`, `kel_peg_nama`, `kel_peg_nip`, `kel_peg_nik`, `kel_peg_org`, `kel_peg_orgsat`, `kel_nama`, `kel_jk`, `kel_hubungan`, `kel_tgllahir`, `kel_nik`, `kel_stapeg`, `kel_unitkerja`, `kel_nip`, `kel_tglswab`, `kel_tglhasil`, `kel_starawat`, `kel_staakhir`, `kel_ket`, `kel_tgl`, `kel_tglinput`) VALUES
(6, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', ' esdgfhjk\r\n                    ', '2020-12-20', '2021-01-20'),
(7, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', ' ssdgvfhbjnkm\r\n                    ', '2020-12-20', '2021-01-20'),
(8, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-06-09', '2021-06-06', 'Isman', 'Sembuh', '555555555555\r\n                    ', '2021-01-20', '2021-01-25'),
(9, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Rujuk', 'Dalam Proses', 'rssdfdsf\r\n                    ', '2021-01-20', '2021-01-20'),
(10, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'sasuker', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'PNS', '200x', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', ' rrgrrwererwe\r\n                    ', '2021-01-20', '2021-01-20'),
(11, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'sasuker', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'PNS', '200x', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', ' gsgrsgrrg\r\n                    ', '2021-01-20', '2021-01-20'),
(12, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'goku', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'PNS', '1', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', 'hjghjkj\r\n                    ', '2020-12-20', '2021-01-20'),
(13, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'goku', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'PNS', '1', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', 'jhghkkhjkh  ', '2021-01-20', '2021-01-20'),
(17, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'sukuran', 'Perempuan', 'Lainnya', '2021-09-09', '999', 'Non PNS', '999999', '9999000', '2021-01-19', '2021-01-19', 'Isman', 'Dalam Proses', '000000909', '2021-01-25', '2021-01-25'),
(18, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'kakakakaka', 'Laki-laki', 'Kakek/Nenek', '2021-01-12', '4342', 'Non PNS', '3121', '2132131', '2021-01-13', '2021-01-21', 'Rujuk', 'Dalam Proses', '21321312\r\n                    ', '2021-01-25', '2021-01-25'),
(19, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'jirajira', 'Laki-laki', 'Keponakan', '2021-02-03', '43242', 'PNS', '313', '1231', '2021-01-12', '2021-01-14', 'Isman', 'Sembuh', '321ddfds         ', '2021-01-25', '2021-01-25'),
(21, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Bayu', 'Perempuan', 'Cucu', '1995-01-20', '143654', 'PNS', 'oy', '312312', '2021-01-30', '2021-01-30', 'Isman', 'Sembuh', 'dfdssdf\r\n                    ', '2021-01-29', '2021-01-29'),
(31, 3, 'Martin Rabun', '56566', '55663', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Manto', 'Laki-laki', 'Kakak/Adik', '1994-11-06', '432434', 'Non Kemenkes', '', '456758765', '2021-02-07', '2021-02-08', 'Isman', 'Dalam Proses', 'fdfsdfses\r\n                    ', '2021-02-09', '2021-02-09'),
(39, 18, 'Kara', '678', '876', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'vhfdjvk', 'Laki-laki', 'Suami/Istri', '2020-01-08', '731987398', 'Non Kemenkes', '', '33213', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(40, 18, 'Kara', '678', '876', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'vhfdjvk', 'Laki-laki', 'Suami/Istri', '2020-01-08', '731987398', 'Non Kemenkes', '', '33213', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(43, 1, 'Januar Salasanto', '1212', '1122', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'gg', 'Laki-laki', 'Suami/Istri', '2020-01-08', '34', 'Kemenkes', '', '', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(44, 20, 'Jun', '234', '4324', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', 'Pebepe', 'Laki-laki', 'Kakak/Adik', '1994-11-12', '1500', 'Non Kemenkes', '', '1501', '2021-02-12', '2021-02-13', 'Isman', 'Dalam Proses', 'dsddsfs\r\n                    ', '2021-02-15', '2021-02-15'),
(45, 22, 'Zenovax', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janos', 'Laki-laki', 'Anak/Menantu', '2009-02-24', '8080000', 'Non Kemenkes', '', '909099999', '2020-12-01', '2021-01-02', 'Rujuk', 'Sembuh', 'junosxxx 3432\r\n                    ', '2021-02-15', '2021-02-15'),
(46, 22, 'Zenovax', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janetom', 'Perempuan', 'Keponakan', '1996-02-03', '777777778', 'Non Kemenkes', '', '909090', '2021-02-14', '2021-02-15', 'Isman', 'Sembuh', 'jjjjjj\r\n                    ', '2021-02-15', '2021-02-15'),
(47, 22, 'Zenovax', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Janos', 'Laki-laki', 'Anak/Menantu', '2009-02-24', '8080000', 'Non Kemenkes', '', '909099999', '2021-02-23', '2021-02-27', 'Isman', 'Sembuh', ' tytyty\r\n                    ', '2021-02-15', '2021-02-15'),
(48, 22, 'Zenovax', '5566500', '6655601', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Dear', 'Perempuan', 'Keponakan', '2005-02-18', '797879', 'Non Kemenkes', '', '787978', '2021-02-17', '2021-02-18', 'Rujuk', 'Sembuh', 'ninja\r\n                    ', '2021-02-15', '2021-02-15');

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
  `kon_peg_orgunit` varchar(40) NOT NULL,
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

INSERT INTO `tb_kon` (`kon_id`, `kon_peg_id`, `kon_peg_nama`, `kon_peg_jk`, `kon_peg_tgllahir`, `kon_peg_nip`, `kon_peg_nik`, `kon_peg_stapeg`, `kon_peg_org`, `kon_peg_orgsat`, `kon_peg_orgunit`, `kon_tglswab`, `kon_tglhasil`, `kon_starawat`, `kon_staakhir`, `kon_status`, `kon_ket`, `kon_tgl`, `kon_tglinput`) VALUES
(34, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '2021-03-04', '2021-03-08', '', '', '', ' xxx\r\n                    ', '2021-01-20', '2021-01-25'),
(35, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'TU', '2020-12-01', '0000-00-00', '', '', '', 'hgfhgff\r\n                    ', '2020-12-20', '2021-12-20'),
(36, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'TU', '2020-12-01', '0000-00-00', '', '', '', ' asdfghjk\r\n                    ', '2021-01-20', '2021-01-20'),
(38, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Masyarakat', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', '', ' likugjhfv\r\n                    ', '2020-12-20', '2021-02-09'),
(39, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Masyarakat', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', '', 'jjokjlhkghk\r\n                    ', '2021-01-20', '2021-02-09'),
(40, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Informatika', '2021-01-04', '0000-00-00', '', '', '', ' yigm hmj\r\n                    ', '2021-01-20', '2021-01-20'),
(41, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Informatika', '2021-01-04', '0000-00-00', '', '', '', ' xxx\r\n                    ', '2021-01-20', '2021-01-26'),
(42, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Kabel', '2021-01-05', '0000-00-00', '', '', '', 'poiughfghg \r\n                    ', '2020-12-20', '2021-01-20'),
(43, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Kabel', '2021-01-05', '0000-00-00', '', '', '', 'jkouiygjy\r\n                    ', '2021-01-20', '2021-01-20'),
(44, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Logistik', '2021-01-06', '0000-00-00', '', '', '', ' jghhjbfh\r\n                    ', '2021-01-20', '2021-01-20'),
(45, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Logistik', '2021-01-06', '0000-00-00', '', '', '', ' iuyyjgfj\r\n                    ', '2021-01-20', '2021-01-26'),
(46, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '2021-01-25', '2021-01-25', '', '', '', '2525525252525\r\n                    ', '2021-01-25', '2021-01-25'),
(47, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '2021-01-26', '2021-01-26', '', '', '', 'xxxx\r\n                    ', '2021-01-25', '2021-01-26'),
(48, 10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'SLGK', '2021-01-01', '2021-01-08', '', '', '', 'gfhghgfhft \r\n                    ', '2021-01-26', '2021-01-26'),
(49, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'PSI', '2021-01-01', '2021-01-12', '', '', '', 'dsfdsfs\r\n                    ', '2021-01-26', '2021-01-26'),
(50, 11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'lnspektorat Jenderal', 'lnspektorat II', 'CPU', '2021-01-16', '2021-01-18', '', '', '', ' Surat menyusul\r\n                    ', '2021-01-27', '2021-01-27'),
(51, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'PSI', '2021-01-21', '2021-01-25', '', '', '', 'qewew \r\n                    ', '2021-01-27', '2021-01-27'),
(52, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Informatika', '2021-01-27', '2021-01-27', '', '', '', ' \r\n                    ', '2021-01-27', '2021-01-27'),
(53, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '2021-01-27', '2021-01-28', '', '', '', 'jkhjkghgbjm\r\n                    ', '2021-01-29', '2021-01-29'),
(54, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Masyarakat', '2021-01-27', '2021-01-28', 'Isman', 'Dalam Proses', '', ' jjkhgjhg\r\n                    ', '2021-01-29', '2021-02-09'),
(55, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '2021-01-27', '2021-01-28', '', '', '', 'xxxx            ', '2021-01-29', '2021-01-29'),
(56, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Masyarakat', '2021-02-05', '2021-02-06', 'Isman', 'Dalam Proses', '', 'gggggggg', '2021-01-29', '2021-02-09'),
(61, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Kabel', '2021-01-26', '2021-01-28', '', '', '', ' \r\n                    ', '2021-01-29', '2021-01-29'),
(62, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Kabel', '2021-01-27', '0001-01-01', '', '', '', 'abcdefg          ', '2021-01-29', '2021-01-29'),
(63, 18, 'Kara', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA', '2021-02-03', '2021-02-04', 'Isman', 'Dalam Proses', '', 'test\r\n                    ', '2021-02-05', '2021-02-05'),
(64, 18, 'Kara', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA', '2021-02-01', '2021-02-02', 'Isman', 'Dalam Proses', '', 'dafsdefes\r\n                    ', '2021-02-05', '2021-02-05'),
(65, 18, 'Kara', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA', '2021-01-31', '2021-02-01', 'Isman', 'Dalam Proses', '', 'sdsfdesfw           ', '2021-02-05', '2021-02-05'),
(72, 14, 'jen', 'Perempuan', '1992-01-01', '2', '2', 'PNS', 'Direktorat Jenderal Pelayanan Kesehatan', 'Sekretariat Direktorat Jenderal Pelayana', '4', '0000-00-00', '0000-00-00', 'Isman', 'Sembuh', '', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(73, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum', '0000-00-00', '0000-00-00', 'Isman', 'Dalam Proses', '', ' \r\n                    ', '2021-02-09', '2021-02-09'),
(74, 22, 'Zenovax', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'CCC', '2021-02-14', '2021-02-15', 'Rujuk', 'Sembuh', '', 'zxzxzxz12\r\n                    ', '2021-02-15', '2021-02-15'),
(76, 22, 'Zenovax', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '', '2021-02-24', '2021-02-25', 'Rujuk', 'Dalam Proses', '', '000000\r\n                    ', '2021-02-15', '2021-02-15'),
(77, 22, 'Zenovax', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', '', '2021-03-01', '2021-03-02', 'Rujuk', 'Meninggal', '', 'kkkkkkkkk', '2021-02-15', '2021-02-15'),
(78, 22, 'Zenovax', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'CCC', '2021-03-12', '2021-03-13', 'Rujuk', 'Sembuh', '', 'lklklklkl\r\n                    ', '2021-02-15', '2021-02-15');

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
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700501000000', 'Sekretariat Direktorat Jenderal Kesehatan Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700502000000', 'Direktorat Kesehatan Keluarga'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700503000000', 'Direktorat Kesehatan Lingkungan'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700504000000', 'Direktorat Kesehatan Kerja dan Olahraga'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700505000000', 'Direktorat Gizi Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700506000000', 'Direktorat Promosi Kesehatan dan Pemberdayaan Masyarakat'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700512000000', 'Balai Kesehatan Olahraga Masyarakat Bandung'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700513000000', 'Balai Kesehatan Tradisional Masyarakat Makassar'),
('700500000000', 'Direktorat Jenderal Kesehatan Masyarakat', '700514000000', 'Loka Kesehatan Tradisional Masyarakat Palembang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_orgunit`
--

CREATE TABLE `tb_orgunit` (
  `orgunit_org_id` varchar(15) NOT NULL,
  `orgunit_org_nama` varchar(100) NOT NULL,
  `orgunit_orgsat_id` varchar(15) NOT NULL,
  `orgunit_orgsat_nama` varchar(100) NOT NULL,
  `orgunit_id` varchar(15) NOT NULL,
  `orgunit_nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `peg_orgsat` varchar(100) NOT NULL,
  `peg_orgunit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peg`
--

INSERT INTO `tb_peg` (`peg_id`, `peg_nama`, `peg_jk`, `peg_tgllahir`, `peg_nip`, `peg_nik`, `peg_stapeg`, `peg_org`, `peg_orgsat`, `peg_orgunit`) VALUES
(1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Umum'),
(2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'TU'),
(3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Masyarakat'),
(5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Sekretariat Jenderal', 'Biro Keuangan dan Barang Milik Negara', 'Informatika'),
(6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'Kabel'),
(7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'Logistik'),
(8, 'Julius Saturay', 'Laki-laki', '1990-01-01', '82824', '88228', 'PNS', 'Sekretariat Jenderal', 'Pusal Analisis Determinan Kesehatan', 'Intel'),
(9, 'Agustin Jumatin', 'Perempuan', '1979-05-26', '37373', '33773', 'PNS', 'Sekretariat Jenderal', 'Biro Kerja Sama Luar Negeri', 'Nakes'),
(10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Sekretariat Jenderal', 'Biro Hukum dan Organisasi', 'SLGK'),
(11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'lnspektorat Jenderal', 'lnspektorat II', 'CPU'),
(12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'PSI'),
(13, 'Han', 'Laki-laki', '1991-01-01', '1', '1', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '1'),
(14, 'jen', 'Perempuan', '1992-01-01', '2', '2', 'PNS', 'Direktorat Jenderal Pelayanan Kesehatan', 'Sekretariat Direktorat Jenderal Pelayanan Kesehatan', '4'),
(15, 'jonatan', 'Laki-laki', '2020-01-04', '12129', '11229', 'PNS', 'lnspektorat Jenderal', 'lnspektorat I', 'AAA'),
(16, 'Era', 'Laki-laki', '2000-01-10', '789', '987', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA'),
(18, 'Kara', 'Laki-laki', '1996-06-06', '678', '876', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA'),
(19, 'Dora', 'Perempuan', '1991-01-03', '2340', '2340', 'PNS', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', 'AAA'),
(20, 'Jun', 'Laki-laki', '2020-01-06', '234', '4324', 'PNS', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', 'AAA'),
(21, 'Sahalancentropus', 'Laki-laki', '1972-02-22', '1119999', '1212999', 'PNS', 'Sekretariat Jenderal', 'Biro Perencanaan dan Anggaran', ''),
(22, 'Zenovax', 'Laki-laki', '1990-04-07', '5566500', '6655601', 'PNS', 'Sekretariat Jenderal', 'Biro Kepegawaian', 'CCC');

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
(42, '2020', '12', '', '2', 1, 3, 0, 0, 3),
(43, '2021', '01', '', '6', 3, 6, 3, 0, 9),
(44, '2021', '02', '', '7', 2, 5, 4, 0, 9);

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

--
-- Dumping data for table `tb_rekkon`
--

INSERT INTO `tb_rekkon` (`rekkon_id`, `rekkon_tahun`, `rekkon_bulan`, `rekkon_minggu`, `rekkon_srisman`, `rekkon_srrujuk`, `rekkon_saproses`, `rekkon_sasembuh`, `rekkon_samati`, `rekkon_total`) VALUES
(40, '2021', '01', '', 3, 0, 3, 0, 0, 21),
(41, '2020', '12', '', 1, 0, 1, 0, 0, 3),
(42, '2021', '02', '', 5, 4, 5, 3, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_telp` varchar(15) NOT NULL,
  `user_akses` enum('Super','Admin') NOT NULL,
  `user_org` varchar(100) NOT NULL,
  `user_orgsat` varchar(100) NOT NULL,
  `user_orgunit` varchar(100) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(40) NOT NULL,
  `user_nip` varchar(20) NOT NULL,
  `user_nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_nama`, `user_email`, `user_telp`, `user_akses`, `user_org`, `user_orgsat`, `user_orgunit`, `user_name`, `user_pass`, `user_nip`, `user_nik`) VALUES
(2, 'Sumit Sodoku', 'sumut@yahoo.com', '085476540987', 'Admin', 'lnspektorat Jenderal', 'lnspektorat I', '', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '3333', '4444'),
(3, 'Sapeloh Ariati', 'sapeloh@rocket.mail', '085477651254', 'Admin', 'Direktorat Jenderal Pelayanan Kesehatan', 'Direktorat Pelayanan Kesehatan Primer', '', '8', 'c9f0f895fb98ab9159f51fd0297e236d', '5555', '6666'),
(5, 'Sakura Takiya', 'sakura@gmail.com', '085745760949', 'Super', '', '', '', '5', 'e4da3b7fbbce2345d7772b0674a318d5', '7777', '8888'),
(7, 'Kukira Takada Z', 'takadaz@gmail.com', '087564758777', 'Super', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', '99977', '88877'),
(11, 'Andes', 'a@a', '23145', 'Admin', 'Sekretariat Jenderal', 'Biro Kepegawaian', '', 'a', '0cc175b9c0f1b6a831c399e269772661', '5613433', '432423'),
(12, 'Kanzar', 'k@krrr', '555550000', 'Admin', 'Sekretariat Jenderal', 'Pusat Data dan lnformasi', '', 'ka', '2c68e1d50809e4ae357bcffe1fc99d2a', '222488', '333288');

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
-- Indexes for table `tb_orgunit`
--
ALTER TABLE `tb_orgunit`
  ADD PRIMARY KEY (`orgunit_id`);

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
  MODIFY `kel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tb_kon`
--
ALTER TABLE `tb_kon`
  MODIFY `kon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `tb_peg`
--
ALTER TABLE `tb_peg`
  MODIFY `peg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tb_rekkel`
--
ALTER TABLE `tb_rekkel`
  MODIFY `rekkel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb_rekkon`
--
ALTER TABLE `tb_rekkon`
  MODIFY `rekkon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
