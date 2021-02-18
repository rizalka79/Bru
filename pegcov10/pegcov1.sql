-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2021 at 01:58 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegcov1`
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
  `kel_nama` varchar(30) NOT NULL,
  `kel_jk` enum('Laki-laki','Perempuan') NOT NULL,
  `kel_hubungan` enum('Suami/Istri','Anak/Menantu','Bapak/Ibu/Mertua','Kakak/Adik','Kakek/Nenek','Cucu','Paman/Bibi','Sepupu','Keponakan','Teman','Lainnya') NOT NULL,
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

INSERT INTO `tb_kel` (`kel_id`, `kel_peg_id`, `kel_peg_nama`, `kel_peg_nip`, `kel_peg_nik`, `kel_nama`, `kel_jk`, `kel_hubungan`, `kel_tgllahir`, `kel_nik`, `kel_stapeg`, `kel_unitkerja`, `kel_nip`, `kel_tglswab`, `kel_tglhasil`, `kel_starawat`, `kel_staakhir`, `kel_ket`, `kel_tgl`, `kel_tglinput`) VALUES
(6, 3, 'Martin Rabun', '56566', '55663', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', ' esdgfhjk\r\n                    ', '2020-12-20', '2021-01-20'),
(7, 3, 'Martin Rabun', '56566', '55663', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Isman', 'Dalam Proses', ' ssdgvfhbjnkm\r\n                    ', '2020-12-20', '2021-01-20'),
(8, 3, 'Martin Rabun', '56566', '55663', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-06-09', '2021-06-06', 'Isman', 'Sembuh', '555555555555\r\n                    ', '2021-01-20', '2021-01-25'),
(9, 3, 'Martin Rabun', '56566', '55663', 'naruto', 'Laki-laki', 'Anak/Menantu', '1996-04-15', '1112', 'PNS', 'eeeee', '400000', '2021-01-11', '0000-00-00', 'Rujuk', 'Dalam Proses', 'rssdfdsf\r\n                    ', '2021-01-20', '2021-01-20'),
(10, 3, 'Martin Rabun', '56566', '55663', 'sasuker', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'PNS', '200x', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', ' rrgrrwererwe\r\n                    ', '2021-01-20', '2021-01-20'),
(11, 3, 'Martin Rabun', '56566', '55663', 'sasuker', 'Perempuan', 'Cucu', '2000-06-09', '2000', 'PNS', '200x', '2000009', '2021-01-12', '0000-00-00', 'Isman', 'Dalam Proses', ' gsgrsgrrg\r\n                    ', '2021-01-20', '2021-01-20'),
(12, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'goku', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'PNS', '1', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', 'hjghjkj\r\n                    ', '2020-12-20', '2021-01-20'),
(13, 5, 'Apriliatiwati Sajadi', '70002', '70011', 'goku', 'Laki-laki', 'Bapak/Ibu/Mertua', '1966-01-06', '3331', 'PNS', '1', '3', '2021-01-13', '0000-00-00', 'Rujuk', 'Dalam Proses', 'jhghkkhjkh  ', '2021-01-20', '2021-01-20'),
(17, 1, 'Januar Salasanto', '1212', '1122', 'sukuran', 'Perempuan', 'Lainnya', '2021-09-09', '999', 'Non PNS', '999999', '9999000', '2021-01-19', '2021-01-19', 'Isman', 'Dalam Proses', '000000909', '2021-01-25', '2021-01-25'),
(18, 1, 'Januar Salasanto', '1212', '1122', 'kakakakaka', 'Laki-laki', 'Kakek/Nenek', '2021-01-12', '4342', 'Non PNS', '3121', '2132131', '2021-01-13', '2021-01-21', 'Rujuk', 'Dalam Proses', '21321312\r\n                    ', '2021-01-25', '2021-01-25'),
(19, 1, 'Januar Salasanto', '1212', '1122', 'jirajira', 'Laki-laki', 'Keponakan', '2021-02-03', '43242', 'PNS', '313', '1231', '2021-01-12', '2021-01-14', 'Isman', 'Sembuh', '321ddfds         ', '2021-01-25', '2021-01-25'),
(20, 0, '', '', '', 'Maraton', 'Laki-laki', 'Anak/Menantu', '1993-01-30', '123123', 'PNS', 'Divisi', '321321', '2021-01-30', '2021-01-31', 'Isman', 'Dalam Proses', 'fdsfrrersgsds\r\n                    ', '2021-01-29', '2021-01-29'),
(21, 3, 'Martin Rabun', '56566', '55663', 'Bayu', 'Perempuan', 'Cucu', '1995-01-20', '143654', 'PNS', 'oy', '312312', '2021-01-30', '2021-01-30', 'Isman', 'Sembuh', 'dfdssdf\r\n                    ', '2021-01-29', '2021-01-29');

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
  `kon_peg_orgunit` varchar(40) NOT NULL,
  `kon_tglswab` date NOT NULL,
  `kon_tglhasil` date NOT NULL,
  `kon_starawat` enum('Isman','Rujuk') NOT NULL,
  `kon_staakhir` enum('Dalam Proses','Sembuh','Meninggal') NOT NULL,
  `kon_ket` text NOT NULL,
  `kon_tgl` date NOT NULL,
  `kon_tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kon`
--

INSERT INTO `tb_kon` (`kon_id`, `kon_peg_id`, `kon_peg_nama`, `kon_peg_jk`, `kon_peg_tgllahir`, `kon_peg_nip`, `kon_peg_nik`, `kon_peg_stapeg`, `kon_peg_org`, `kon_peg_orgunit`, `kon_tglswab`, `kon_tglhasil`, `kon_starawat`, `kon_staakhir`, `kon_ket`, `kon_tgl`, `kon_tglinput`) VALUES
(32, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-01', '0000-00-00', 'Isman', 'Dalam Proses', ' qwertyuiop\r\n                    ', '2020-12-20', '2021-12-20'),
(33, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-01', '0000-00-00', 'Rujuk', 'Dalam Proses', ' asdfghjkl\r\n                    ', '2020-12-20', '2021-12-20'),
(34, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-03-04', '2021-03-08', 'Rujuk', 'Meninggal', ' xxx\r\n                    ', '2021-01-20', '2021-01-25'),
(35, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Direktorat', 'TU', '2020-12-01', '0000-00-00', 'Isman', 'Dalam Proses', 'hgfhgff\r\n                    ', '2020-12-20', '2021-12-20'),
(36, 2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Direktorat', 'TU', '2020-12-01', '0000-00-00', 'Isman', 'Dalam Proses', ' asdfghjk\r\n                    ', '2021-01-20', '2021-01-20'),
(37, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', ' ersrdfghjkl\r\n                    ', '2020-12-20', '2021-01-20'),
(38, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat', '2021-01-03', '0000-00-00', 'Isman', 'Dalam Proses', ' likugjhfv\r\n                    ', '2020-12-20', '2021-01-20'),
(39, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat', '2021-01-03', '0000-00-00', 'Isman', 'Sembuh', 'jjokjlhkghk\r\n                    ', '2021-01-20', '2021-01-20'),
(40, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Teknik', 'Informatika', '2021-01-04', '0000-00-00', 'Rujuk', 'Dalam Proses', ' yigm hmj\r\n                    ', '2021-01-20', '2021-01-20'),
(41, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Teknik', 'Informatika', '2021-01-04', '0000-00-00', 'Isman', 'Dalam Proses', ' xxx\r\n                    ', '2021-01-20', '2021-01-26'),
(42, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Jaringan', 'Kabel', '2021-01-05', '0000-00-00', 'Rujuk', 'Dalam Proses', 'poiughfghg \r\n                    ', '2020-12-20', '2021-01-20'),
(43, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Jaringan', 'Kabel', '2021-01-05', '0000-00-00', 'Isman', 'Dalam Proses', 'jkouiygjy\r\n                    ', '2021-01-20', '2021-01-20'),
(44, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Bagian', 'Logistik', '2021-01-06', '0000-00-00', 'Rujuk', 'Dalam Proses', ' jghhjbfh\r\n                    ', '2021-01-20', '2021-01-20'),
(45, 7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Bagian', 'Logistik', '2021-01-06', '0000-00-00', 'Isman', 'Dalam Proses', ' iuyyjgfj\r\n                    ', '2021-01-20', '2021-01-26'),
(46, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-25', '2021-01-25', 'Rujuk', 'Meninggal', '2525525252525\r\n                    ', '2021-01-25', '2021-01-25'),
(47, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-26', '2021-01-26', 'Isman', 'Dalam Proses', 'xxxx\r\n                    ', '2021-01-25', '2021-01-26'),
(48, 10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Biro', 'SLGK', '2021-01-01', '2021-01-08', 'Isman', 'Dalam Proses', 'gfhghgfhft \r\n                    ', '2021-01-26', '2021-01-26'),
(49, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Pusdatin', 'PSI', '2021-01-01', '2021-01-12', 'Isman', 'Dalam Proses', 'dsfdsfs\r\n                    ', '2021-01-26', '2021-01-26'),
(50, 11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'Biro', 'CPU', '2021-01-16', '2021-01-18', 'Rujuk', 'Dalam Proses', ' Surat menyusul\r\n                    ', '2021-01-27', '2021-01-27'),
(51, 12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Pusdatin', 'PSI', '2021-01-21', '2021-01-25', 'Isman', 'Dalam Proses', 'qewew \r\n                    ', '2021-01-27', '2021-01-27'),
(52, 5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Teknik', 'Informatika', '2021-01-27', '2021-01-27', 'Rujuk', 'Sembuh', ' \r\n                    ', '2021-01-27', '2021-01-27'),
(53, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-27', '2021-01-28', 'Isman', 'Dalam Proses', 'jkhjkghgbjm\r\n                    ', '2021-01-29', '2021-01-29'),
(54, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat', '2021-01-27', '2021-01-28', 'Isman', 'Dalam Proses', ' jjkhgjhg\r\n                    ', '2021-01-29', '2021-01-29'),
(55, 1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum', '2021-01-27', '2021-01-28', 'Rujuk', 'Meninggal', 'xxxx            ', '2021-01-29', '2021-01-29'),
(56, 3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat', '2021-02-05', '2021-02-06', 'Rujuk', 'Meninggal', 'gggggggg', '2021-01-29', '2021-01-29'),
(61, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Jaringan', 'Kabel', '2021-01-26', '2021-01-28', 'Isman', 'Dalam Proses', ' \r\n                    ', '2021-01-29', '2021-01-29'),
(62, 6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Jaringan', 'Kabel', '2021-01-27', '0001-01-01', 'Isman', 'Dalam Proses', 'abcdefg          ', '2021-01-29', '2021-01-29');

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
  `peg_org` varchar(40) NOT NULL,
  `peg_orgunit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peg`
--

INSERT INTO `tb_peg` (`peg_id`, `peg_nama`, `peg_jk`, `peg_tgllahir`, `peg_nip`, `peg_nik`, `peg_stapeg`, `peg_org`, `peg_orgunit`) VALUES
(1, 'Januar Salasanto', 'Laki-laki', '1990-01-04', '1212', '1122', 'PNS', 'Biro', 'Umum'),
(2, 'Febrianti Mingguini', 'Perempuan', '1991-01-29', '3434', '3344', 'PNS', 'Direktorat', 'TU'),
(3, 'Martin Rabun', 'Laki-laki', '1992-01-17', '56566', '55663', 'PNS', 'Kesehatan', 'Masyarakat'),
(5, 'Apriliatiwati Sajadi', 'Perempuan', '1988-02-22', '70002', '70011', 'PNS', 'Teknik', 'Informatika'),
(6, 'Maya Duniyah', 'Perempuan', '1986-07-24', '90902', '99004', 'PNS', 'Jaringan', 'Kabel'),
(7, 'Juna Haliday', 'Laki-laki', '1985-08-15', '91912', '99116', 'PNS', 'Bagian', 'Logistik'),
(8, 'Julius Saturay', 'Laki-laki', '1990-01-01', '82824', '88228', 'PNS', 'Defence', 'Intel'),
(9, 'Agustin Jumatin', 'Perempuan', '1979-05-26', '37373', '33773', 'PNS', 'Yadana', 'Nakes'),
(10, 'Septiono Endang', 'Laki-laki', '1978-05-11', '45732', '44664', 'Non PNS', 'Biro', 'SLGK'),
(11, 'Okta Gon', 'Laki-laki', '1988-01-05', '64457', '23496', 'PNS', 'Biro', 'CPU'),
(12, 'Novirianti Khamisiah', 'Perempuan', '1978-09-15', '45678', '56844', 'Non PNS', 'Pusdatin', 'PSI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekkel`
--

CREATE TABLE `tb_rekkel` (
  `rekkel_id` int(11) NOT NULL,
  `rekkel_tahun` varchar(4) NOT NULL,
  `rekkel_bulan` varchar(10) NOT NULL,
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

INSERT INTO `tb_rekkel` (`rekkel_id`, `rekkel_tahun`, `rekkel_bulan`, `rekkel_srisman`, `rekkel_srrujuk`, `rekkel_saproses`, `rekkel_sasembuh`, `rekkel_samati`, `rekkel_total`) VALUES
(7, '2020', 'December', '3', 1, 4, 0, 0, 4),
(8, '2021', 'January', '5', 5, 8, 2, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekkon`
--

CREATE TABLE `tb_rekkon` (
  `rekkon_id` int(11) NOT NULL,
  `rekkon_tahun` varchar(4) NOT NULL,
  `rekkon_bulan` varchar(10) NOT NULL,
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

INSERT INTO `tb_rekkon` (`rekkon_id`, `rekkon_tahun`, `rekkon_bulan`, `rekkon_srisman`, `rekkon_srrujuk`, `rekkon_saproses`, `rekkon_sasembuh`, `rekkon_samati`, `rekkon_total`) VALUES
(29, '2020', 'December', 4, 2, 6, 0, 0, 6),
(30, '2021', 'January', 8, 4, 9, 1, 2, 12);

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
  `user_name` varchar(15) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_nip` varchar(20) NOT NULL,
  `user_nik` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_nama`, `user_email`, `user_telp`, `user_akses`, `user_name`, `user_pass`, `user_nip`, `user_nik`) VALUES
(2, 'Sumit Sodoku', 'sumut@yahoo.com', '085476540987', 'Admin', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '3333', '4444'),
(3, 'Sapeloh Ariati', 'sapeloh@rocket.mail', '085477651254', 'Admin', '8', 'c9f0f895fb98ab9159f51fd0297e236d', '5555', '6666'),
(5, 'Sakura Takiya', 'sakura@gmail.com', '085745760949', 'Super', '5', 'e4da3b7fbbce2345d7772b0674a318d5', '7777', '8888'),
(7, 'Kukira Takada', 'takada@gmail.com', '087564758153', 'Super', 'admin', '21232f297a57a5a743894a0e4a801fc3', '65656', '89757');

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
-- Indexes for table `tb_peg`
--
ALTER TABLE `tb_peg`
  ADD PRIMARY KEY (`peg_id`);

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
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kel`
--
ALTER TABLE `tb_kel`
  MODIFY `kel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_kon`
--
ALTER TABLE `tb_kon`
  MODIFY `kon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `tb_peg`
--
ALTER TABLE `tb_peg`
  MODIFY `peg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb_rekkel`
--
ALTER TABLE `tb_rekkel`
  MODIFY `rekkel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_rekkon`
--
ALTER TABLE `tb_rekkon`
  MODIFY `rekkon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
