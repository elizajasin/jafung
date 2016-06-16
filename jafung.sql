-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 09:41 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jafung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dupak`
--

CREATE TABLE IF NOT EXISTS `tbl_dupak` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `tgl_pengajuan` date NOT NULL,
  `jenis_pengajuan` varchar(100) NOT NULL DEFAULT '',
  `periode` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `ak_diajukan` varchar(100) NOT NULL DEFAULT '',
  `ak_disetujuin` varchar(100) NOT NULL DEFAULT '',
  `id_akun` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_dupak`
--

INSERT INTO `tbl_dupak` (`id`, `tgl_pengajuan`, `jenis_pengajuan`, `periode`, `status`, `ak_diajukan`, `ak_disetujuin`, `id_akun`) VALUES
(1, '2016-06-22', 'a', '3', 'acc', 'dddd', 'fff', 116),
(2, '2016-06-08', 'd', 'd', 'd', 'd', 'd', 116),
(3, '2016-06-24', 's', 'g', 'd', 'b', 's', 116),
(4, '2016-06-15', 'g', 'b', 'd', 'a', 'g', 116),
(5, '2016-06-09', 'f', 's', 'v', 'z', 'c', 116),
(6, '2016-06-18', 'g', 'd', 'a', 'c', 'b', 116),
(7, '2016-06-18', 'f', 's', 'f', 'c', 'g', 116),
(8, '2016-06-28', 'f', 'g', 'd', 'a', 'r', 116),
(9, '2016-06-02', 'df', 'd', 'b', 'a', 'c', 116),
(10, '2016-06-17', 'f', 'c', 'z', 'x', 'v', 116),
(11, '2016-06-11', 'f', 'c', 's', 'e', 'f', 116);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=119 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `level`) VALUES
(115, 'eliza', '1', 'Admin'),
(116, 'riviera', '2', 'Pejabat Fungsional'),
(117, 'rachmawati', '3', 'Tim Sekretariat'),
(118, 'jasin', '4', 'Tim Penilai');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pejabat`
--

CREATE TABLE IF NOT EXISTS `tbl_pejabat` (
  `nip` varchar(100) NOT NULL DEFAULT '',
  `nama` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `foto` tinytext,
  `pangkat` varchar(100) DEFAULT NULL,
  `pangkat_terakhir` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `jabatan_terakhir` varchar(100) DEFAULT NULL,
  `unit_organisasi` varchar(100) DEFAULT NULL,
  `instansi` varchar(100) DEFAULT NULL,
  `angka_kredit` varchar(100) DEFAULT NULL,
  `sk_pns` tinytext,
  `sk_pangkat_terakhir` tinytext,
  `sk_jabatan_terakhir` tinytext,
  `pak_terakhir` tinytext,
  `id_akun` int(11) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pejabat`
--

INSERT INTO `tbl_pejabat` (`nip`, `nama`, `tempat`, `tgl_lahir`, `foto`, `pangkat`, `pangkat_terakhir`, `jabatan`, `jabatan_terakhir`, `unit_organisasi`, `instansi`, `angka_kredit`, `sk_pns`, `sk_pangkat_terakhir`, `sk_jabatan_terakhir`, `pak_terakhir`, `id_akun`) VALUES
('1111111', 'Eliza Jasin', 'Jakarta', '2016-06-05', 'uploads/sk_pejabat/donald.jpg', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'uploads/sk_pejabat/test.jpg', 'uploads/sk_pejabat/cat.jpg', 'uploads/sk_pejabat/tele.PNG', 'uploads/sk_pejabat/bunny.jpg', 115),
('222222222222', 'Riviera Jasin', 'Bandung', '2016-06-08', 'uploads/sk_pejabat/donald.jpg', 'f', 'd', 'd', 'r', 'd', 'd', 'd', 'uploads/sk_pejabat/test.jpg', 'uploads/sk_pejabat/cat.jpg', 'uploads/sk_pejabat/tele.PNG', 'uploads/sk_pejabat/bunny.jpg', 116);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unsur_kegiatan`
--

CREATE TABLE IF NOT EXISTS `tbl_unsur_kegiatan` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `tgl_peraturan` varchar(100) NOT NULL DEFAULT '',
  `status_peraturan` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unsur_kredit`
--

CREATE TABLE IF NOT EXISTS `tbl_unsur_kredit` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `jenis_unsur` varchar(100) DEFAULT '',
  `unsur` varchar(100) DEFAULT '',
  `sub_unsur` varchar(100) DEFAULT '',
  `butir_kegiatan` varchar(100) DEFAULT '',
  `pelaksana` varchar(100) DEFAULT '',
  `satuan_hasil` varchar(100) DEFAULT '',
  `angka_kredit` varchar(100) DEFAULT '',
  `batasan_penilaian` varchar(100) DEFAULT '',
  `bukti_fisik` varchar(100) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
