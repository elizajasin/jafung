-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2016 at 03:37 AM
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
  `id` varchar(100) NOT NULL DEFAULT '',
  `tgl_pengajuan` varchar(100) NOT NULL DEFAULT '',
  `jenis_pengajuan` varchar(100) NOT NULL DEFAULT '',
  `periode` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `ak_diajukan` varchar(100) NOT NULL DEFAULT '',
  `ak_disetujuin` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pejabat`
--

CREATE TABLE IF NOT EXISTS `tbl_pejabat` (
  `nip` varchar(100) NOT NULL DEFAULT '',
  `nama` varchar(100) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `tgl_lahir` varchar(100) DEFAULT NULL,
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
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
