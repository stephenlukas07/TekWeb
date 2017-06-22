-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2017 at 11:53 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lkmmtd_phenphen`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `idAdministrator` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_login` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Siswa_idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Kep_sek_idKep_sek` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idAdministrator`,`T_U_idT_U`,`Guru_idGuru`,`Siswa_idSiswa`,`Wali_kelas_idWali_kelas`,`Wali_murid_idWali_murid`),
  UNIQUE KEY `username` (`username`),
  KEY `fk_Administrator_T_U` (`T_U_idT_U`),
  KEY `fk_Administrator_Guru` (`Guru_idGuru`),
  KEY `fk_Administrator_Siswa` (`Siswa_idSiswa`),
  KEY `fk_Administrator_Wali_kelas` (`Wali_kelas_idWali_kelas`),
  KEY `fk_Administrator_Wali_murid` (`Wali_murid_idWali_murid`),
  KEY `fk_Administrator_Kep_sek` (`Kep_sek_idKep_sek`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`idAdministrator`, `nama`, `username`, `password`, `current_login`, `last_login`, `T_U_idT_U`, `Guru_idGuru`, `Siswa_idSiswa`, `Wali_kelas_idWali_kelas`, `Wali_murid_idWali_murid`, `Kep_sek_idKep_sek`) VALUES
(1, 'Stephen Lukas', 'stephen', '7ff36797539130f77445f48da5d4a126', '2017-05-28 21:42:12', '2017-05-23 17:30:49', '', '', '', '', '', NULL),
(3, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-06-21 21:01:16', '2017-06-21 21:01:16', '', '', '', '', '', NULL),
(2, 'Guest', 'guest', '084e0343a0486ff05530df6c705c8bb4', '2012-02-06 11:29:10', '2013-12-12 23:12:11', '', '', '', '', '', NULL),
(12, 'A', 'a', '0cc175b9c0f1b6a831c399e269772661', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', NULL),
(13, 'B', 'b', '92eb5ffee6ae2fec3ad71c777531578f', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `bookingId` int(12) NOT NULL AUTO_INCREMENT,
  `hotelId` int(12) NOT NULL,
  `userId` varchar(12) NOT NULL,
  PRIMARY KEY (`bookingId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `idGuru` int(5) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wali_kelas` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_kelas_idWali_kelas` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idGuru`),
  KEY `fk_Guru_Wali_kelas` (`Wali_kelas_idWali_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`idGuru`, `nama`, `alamat`, `wali_kelas`, `password`, `foto`, `Wali_kelas_idWali_kelas`) VALUES
(1, 'Budi Sentosa', 'Pamekasan', 'X-1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(2, 'Ahmad', 'Sampang', 'X-2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(3, 'Brahmana Agung', 'Pamekasan', 'X-3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(4, 'Sulistyo', 'Sumenep', 'X-4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(5, 'Fahmi Rizal', 'Bangkalan', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(6, 'Putri Kuncoro', 'Pamekasan', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(7, 'Agung Said', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(8, 'Winan P', 'Kamal', 'XI IPA 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(9, 'Antonius', 'Kamal', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(10, 'Dodi K', 'Bangkalan', 'XI IPS 2', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(11, 'Kuriniawan', 'Pamekasan', 'XI IPS 3', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(12, 'Nikolas K', 'Sampang', 'XI IPS 4', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(13, 'Ananda Putri', 'Kamal', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL),
(14, 'Donny S', 'Gresik', 'Tidak', '827ccb0eea8a706c4c34a16891f84e7b', 'foto/no-image.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru_has_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `guru_has_mata_pelajaran` (
  `idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `idRuang_Kelas` int(4) NOT NULL,
  PRIMARY KEY (`idGuru`,`idmata_pelajaran`,`idRuang_Kelas`),
  KEY `fk_Guru_has_mata_pelajaran_Guru` (`idGuru`),
  KEY `fk_Guru_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`),
  KEY `fk_Guru_has_mata_pelajaran_ruang_kelas` (`idRuang_Kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru_has_mata_pelajaran`
--

INSERT INTO `guru_has_mata_pelajaran` (`idGuru`, `idmata_pelajaran`, `idRuang_Kelas`) VALUES
('1', '9', 1),
('10', '11', 2),
('11', '11', 1),
('11', '14', 6),
('12', '12', 5),
('13', '9', 5),
('14', '13', 5),
('2', '9', 2),
('3', '10', 1),
('4', '14', 5),
('6', '15', 3),
('8', '14', 3);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE IF NOT EXISTS `hotels` (
  `hotelId` int(12) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `description` varchar(512) NOT NULL,
  `imageUrl` varchar(512) NOT NULL,
  `star` int(1) NOT NULL,
  `price` int(10) NOT NULL,
  PRIMARY KEY (`hotelId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelId`, `name`, `description`, `imageUrl`, `star`, `price`) VALUES
(1, 'Hotel Berdua', 'Hotel yang sangat bagus untuk menginal berdua saja. kalau sendiri jadi lebih mahal.', 'https://media-cdn.tripadvisor.com/media/photo-s/0a/3d/86/1e/the-spectator-hotel.jpg', 3, 350000),
(4, 'Hotel Kotak', 'Hotel yang menampilkan sebuah arsitektur serba kotak.', 'http://doubletree3.hilton.com/resources/media/dt/DCAAEDT/en_US/img/shared/full_page_image_gallery/main/DT_exteriordusk_2_677x380_FitToBoxSmallDimension_Center.jpg', 2, 600000),
(5, 'Hotel Renang', 'Hotel yang sangat baik digunakan untuk berenang', 'https://media-cdn.tripadvisor.com/media/photo-o/02/1d/cf/18/hotel-exterior.jpg', 4, 500000),
(7, 'Hotel Pantai', 'Hotel yang berada di tepi pantai. Sangat cocok untuk liburan di pantai', 'https://media-cdn.tripadvisor.com/media/photo-s/06/be/39/6b/hotel-riu-palace-peninsula.jpg', 5, 750000),
(9, 'Hotel GG', 'GGWP', 'https://s-ec.bstatic.com/images/hotel/max1024x768/607/60716478.jpg', 5, 100000),
(10, 'Hotel Ku', 'Hotel Kepunyaanku xD', 'https://origin.pegipegi.com/jalan/images/pict2L/Y3/Y911603/Y911603012.jpg', 5, 350000);

-- --------------------------------------------------------

--
-- Table structure for table `kep_sek`
--

CREATE TABLE IF NOT EXISTS `kep_sek` (
  `idKep_sek` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idKep_sek`,`T_U_idT_U`),
  KEY `fk_Kep_sek_T_U` (`T_U_idT_U`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kep_sek`
--

INSERT INTO `kep_sek` (`idKep_sek`, `nama`, `username`, `password`, `T_U_idT_U`) VALUES
('1', 'Anthony Chandra Kurniawan', 'anthony', 'fc3f318fba8b3c1502bece62a27712df', '');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran` (
  `idmata_pelajaran` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmata_pelajaran`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`idmata_pelajaran`, `nama`) VALUES
(9, 'Matematika'),
(10, 'Bahasa Inggris'),
(11, 'Fisika'),
(12, 'Biologi'),
(14, 'Teknologi Informasi Dan Komunikasi'),
(15, 'Sosiologi'),
(16, 'Bahasa Daerah'),
(18, 'Kimia'),
(19, 'Bahasa Indonesia'),
(21, 'Kimia'),
(22, 'Tekweb');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_has_ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `mata_pelajaran_has_ruang_kelas` (
  `idmata_pelajaran` int(3) NOT NULL AUTO_INCREMENT,
  `idRuang_Kelas` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `hari` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `jampelajaran` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idmata_pelajaran`,`idRuang_Kelas`,`hari`),
  KEY `fk_mata_pelajaran_has_Ruang_Kelas_mata_pelajaran` (`idmata_pelajaran`),
  KEY `fk_mata_pelajaran_has_Ruang_Kelas_Ruang_Kelas` (`idRuang_Kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `mata_pelajaran_has_ruang_kelas`
--

INSERT INTO `mata_pelajaran_has_ruang_kelas` (`idmata_pelajaran`, `idRuang_Kelas`, `hari`, `jampelajaran`) VALUES
(10, '1', 'Senin', '07:00 - 08:30 '),
(11, '1', 'Senin', '08:30 - 09:30'),
(9, '2', 'Senin', '07:00 - 08:00 '),
(14, '6', 'Senin', '07:00 - 08:00 '),
(11, '2', 'Senin', '08:00 - 09:00 '),
(14, '3', 'Senin', '07:00 - 08:30'),
(15, '3', 'Senin', '07:00 - 08:10'),
(9, '5', 'Senin', '07:00 - 08:00 '),
(14, '5', 'Senin', '08:00 - 09:00 '),
(12, '5', 'Selasa', '07:00 - 08:00 '),
(13, '5', 'Selasa', '08:00 - 09:00 '),
(9, '1', 'Senin', '07:00 - 10:00 ');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `ruang_kelas` (
  `idRuang_Kelas` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  PRIMARY KEY (`idRuang_Kelas`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`idRuang_Kelas`, `nama`, `jumlah_siswa`) VALUES
(1, 'X - 1', 40),
(2, 'X - 2', 42),
(3, 'X - 3', 40),
(4, 'X - 4', 40),
(5, 'XI IPA 1', 40),
(6, 'XI IPA 2', 40),
(7, 'XI IPA 3', 40),
(8, 'XI IPA 4', 38),
(9, 'XI IPS 1', 40),
(10, 'XI IPS 2', 40),
(11, 'XI IPS 3', 35),
(12, 'XI IPS 4', 40),
(19, 'XI IPA 8', 9);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `kelas` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idSiswa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idSiswa`, `nama`, `alamat`, `kelas`, `password`) VALUES
('1234', 'Surya Cipta', 'Surabaya', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1222', 'Dinda', 'Sidoarjo', 'XI IPA 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('2112', 'Albert Kuswana', 'Surabaya', 'XII IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1221', 'Dinda Kusuma', 'Surabaya', 'XII IPS 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1215', 'Tommy A', 'Sidoarjo', 'XII IPS 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2111', 'Diana Setya', 'Surabaya', 'XII IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('2113', 'Kevin Sebastian', 'Surabaya', 'XII IPA 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('2114', 'Billy Noerdianto', 'Surabaya', 'XII IPA 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('2115', 'Amir Setiawan', 'Surabaya', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1110', 'Bobby Kurniawan', 'Surabaya', 'X - 3', '827ccb0eea8a706c4c34a16891f84e7b'),
('1212', 'Gilang Setiawan', 'Surabaya', 'X - 4', '827ccb0eea8a706c4c34a16891f84e7b'),
('1010', 'Nafal maulana', 'Surabaya', 'XI IPS 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1000', 'Eka Santoso', 'Sidoarjo', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('0809', 'Nico Setiawan', 'Sidoarjo', 'X - 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('1001', 'Moses Agung', 'Sidoarjo', 'X - 2', '827ccb0eea8a706c4c34a16891f84e7b'),
('1023', 'Edward Setiawan', 'Sidoarjo', 'XI IPA 1', '827ccb0eea8a706c4c34a16891f84e7b'),
('26415068', 'Stephen Lukas', 'Sidoarjo', 'XI IPA 1', '7ff36797539130f77445f48da5d4a126'),
('1223', 'Asfd', 'Aaa', 'X - 1', '1eb5ec1447dbacdc6d22cdc827ad9991');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_has_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `siswa_has_mata_pelajaran` (
  `idSiswa` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idmata_pelajaran` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `semester` enum('Ganjil','Genap') COLLATE utf8_unicode_ci NOT NULL,
  `thn_ajaran` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `afektif` int(3) DEFAULT NULL,
  `komulatif` int(3) DEFAULT NULL,
  `psikomotorik` int(3) DEFAULT NULL,
  `rata` int(3) DEFAULT NULL,
  PRIMARY KEY (`idSiswa`,`idmata_pelajaran`,`semester`,`thn_ajaran`),
  KEY `fk_Siswa_has_mata_pelajaran_Siswa` (`idSiswa`),
  KEY `fk_Siswa_has_mata_pelajaran_mata_pelajaran` (`idmata_pelajaran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa_has_mata_pelajaran`
--

INSERT INTO `siswa_has_mata_pelajaran` (`idSiswa`, `idmata_pelajaran`, `semester`, `thn_ajaran`, `afektif`, `komulatif`, `psikomotorik`, `rata`) VALUES
('1001', '9', 'Ganjil', '2009-2010', 90, 90, 95, 92),
('0809', '11', 'Ganjil', '2009-2010', 86, 98, 97, 94),
('1110', '15', 'Ganjil', '2009-2010', 83, 87, 97, 89),
('1110', '14', 'Ganjil', '2009-2010', 99, 91, 94, 95),
('1234', '9', 'Ganjil', '2009-2010', 91, 91, 94, 92),
('2115', '11', 'Ganjil', '2011-2012', 98, 83, 74, 85),
('2115', '10', 'Ganjil', '2009-2010', 90, 97, 92, 93),
('1222', '14', 'Ganjil', '2010-2011', 95, 89, 98, 94),
('1234', '14', 'Ganjil', '2010-2011', 99, 90, 92, 94),
('1234', '9', 'Genap', '2009-2010', 80, 75, 80, 78),
('1234', '14', 'Ganjil', '2009-2010', 97, 98, 98, 98),
('1023', '9', 'Ganjil', '2009-2010', 84, 87, 95, 89),
('1023', '14', 'Ganjil', '2009-2010', 99, 92, 94, 95),
('1023', '12', 'Ganjil', '2009-2010', 98, 82, 6, 62),
('1023', '9', 'Genap', '2009-2010', 72, 80, 74, 75),
('1023', '14', 'Genap', '2009-2010', 97, 84, 86, 89),
('1023', '9', 'Ganjil', '2010-2011', 86, 98, 80, 88),
('1023', '9', 'Genap', '2010-2011', 87, 70, 71, 76),
('1023', '14', 'Genap', '2010-2011', 74, 65, 69, 69),
('1023', '14', 'Ganjil', '2011-2012', 78, 82, 89, 83),
('1023', '12', 'Genap', '2011-2012', 98, 93, 85, 92),
('1023', '13', 'Genap', '2011-2012', 98, 97, 89, 95),
('0809', '10', 'Ganjil', '2014-2015', 100, 100, 100, 100),
('0809', '10', 'Ganjil', '2009-2010', 12, 14, 17, 14);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE IF NOT EXISTS `spp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` int(11) NOT NULL,
  `bulan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_bayar` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id`, `nis`, `bulan`, `tgl_bayar`, `jumlah`) VALUES
(1, 1023, 'juni 2012', '03-07-2012', 120000),
(2, 1222, 'juni 2012', '04-07-2012', 120000),
(3, 1234, 'juni 2012', '03-07-2012', 120000),
(4, 1212, 'juni 2012', '06-06-2012', 120000),
(5, 2115, 'mei 2012', '03-07-2012', 120000),
(6, 809, 'juni 2012', '07-06-2017', 10000),
(7, 1000, 'mei 2010', '06-06-2017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `t_u`
--

CREATE TABLE IF NOT EXISTS `t_u` (
  `idT_U` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idT_U`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `t_u`
--

INSERT INTO `t_u` (`idT_U`, `nama`, `alamat`, `username`, `password`) VALUES
(6, 'Sofyan', 'Surabaya', 'sofyan', '21232f297a57a5a743894a0e4a801fc3'),
(7, 'Delima Permata', 'Sidoarjo', 'delima', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'Antono Setiawan', 'Sidoarjo', 'antono', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_guru`
--

CREATE TABLE IF NOT EXISTS `t_u_has_guru` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Guru_idGuru` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`T_U_idT_U`,`Guru_idGuru`),
  KEY `fk_T_U_has_Guru_T_U` (`T_U_idT_U`),
  KEY `fk_T_U_has_Guru_Guru` (`Guru_idGuru`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `t_u_has_mata_pelajaran` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mata_pelajaran_idmata_pelajaran` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`T_U_idT_U`,`mata_pelajaran_idmata_pelajaran`),
  KEY `fk_T_U_has_mata_pelajaran_T_U` (`T_U_idT_U`),
  KEY `fk_T_U_has_mata_pelajaran_mata_pelajaran` (`mata_pelajaran_idmata_pelajaran`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_ruang_kelas`
--

CREATE TABLE IF NOT EXISTS `t_u_has_ruang_kelas` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Ruang_Kelas_idRuang_Kelas` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`T_U_idT_U`,`Ruang_Kelas_idRuang_Kelas`),
  KEY `fk_T_U_has_Ruang_Kelas_T_U` (`T_U_idT_U`),
  KEY `fk_T_U_has_Ruang_Kelas_Ruang_Kelas` (`Ruang_Kelas_idRuang_Kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `t_u_has_wali_murid`
--

CREATE TABLE IF NOT EXISTS `t_u_has_wali_murid` (
  `T_U_idT_U` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Wali_murid_idWali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`T_U_idT_U`,`Wali_murid_idWali_murid`),
  KEY `fk_T_U_has_Wali_murid_T_U` (`T_U_idT_U`),
  KEY `fk_T_U_has_Wali_murid_Wali_murid` (`Wali_murid_idWali_murid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(12) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `password` varchar(512) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `password`) VALUES
(1, 'stephen@gmail.com', 'stephen'),
(2, 'admin@bookinglah.com', 'admin'),
(3, 'asda@dasda.com', 'asda'),
(4, 'user@example.com', 'user'),
(5, 'stephen.lukas07@gmail.com', 'phenphen');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `idWali_kelas` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idWali_kelas`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid`
--

CREATE TABLE IF NOT EXISTS `wali_murid` (
  `idwali_murid` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idwali_murid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid`
--

INSERT INTO `wali_murid` (`idwali_murid`, `nama`, `alamat`, `password`) VALUES
('001234', 'Agung Chandara', 'Surabaya', '827ccb0eea8a706c4c34a16891f84e7b'),
('001001', 'Yosef Kurnia', 'Surabaya', '827ccb0eea8a706c4c34a16891f84e7b'),
('001023', 'Agus Pribuna', 'Surabaya', '827ccb0eea8a706c4c34a16891f84e7b'),
('001000', 'Dwi Chandra', 'Surabaya', '827ccb0eea8a706c4c34a16891f84e7b'),
('001215', 'Suamriyanto', 'Surabaya', '827ccb0eea8a706c4c34a16891f84e7b'),
('00001', 'Agus', 'Surabaya', 'fdf169558242ee051cca1479770ebac3');

-- --------------------------------------------------------

--
-- Table structure for table `wali_murid_has_siswa`
--

CREATE TABLE IF NOT EXISTS `wali_murid_has_siswa` (
  `idwali_murid` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `idSiswa` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idwali_murid`,`idSiswa`),
  KEY `fk_wali_murid_has_siswa_wali_murid` (`idwali_murid`),
  KEY `fk_wali_murid_has_siswa_siswa` (`idSiswa`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `wali_murid_has_siswa`
--

INSERT INTO `wali_murid_has_siswa` (`idwali_murid`, `idSiswa`) VALUES
('00001', '26415068'),
('001000', '1000'),
('001001', '1001'),
('001023', '1023'),
('001215', '1215'),
('001234', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
