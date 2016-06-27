-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2016 at 03:56 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jafung`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_acuanpak`
--

CREATE TABLE `tbl_acuanpak` (
  `id` int(11) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `bagian` varchar(100) NOT NULL,
  `subbagian` varchar(100) NOT NULL,
  `kegiatan` varchar(300) NOT NULL,
  `satuan_hasil` varchar(100) DEFAULT NULL,
  `angka_kredit` float DEFAULT NULL,
  `batasan_penilaian` varchar(100) DEFAULT NULL,
  `pelaksana` varchar(100) DEFAULT NULL,
  `bukti_fisik` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_acuanpak`
--

INSERT INTO `tbl_acuanpak` (`id`, `bidang`, `bagian`, `subbagian`, `kegiatan`, `satuan_hasil`, `angka_kredit`, `batasan_penilaian`, `pelaksana`, `bukti_fisik`) VALUES
(1, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan Sekolah dan Memperoleh Ijazah/Gelar', 'Doktor (S3)', 'Ijasah ', 200000, '-', 'Semua jenjang', 'Fotokopi Ijasah'),
(3, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan Sekolah dan Memperoleh Ijazah/Gelar', 'Pasca Sarjana (S2)', 'Ijasah', 150000, '-', 'Semua jenjang', 'Fotokopi Ijasah'),
(4, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan Sekolah dan Memperoleh Ijazah/Gelar', 'Sarjana (S1)/Diploma-IV', 'Ijasah', 100000, '-', 'Semua jenjang', 'Fotokopi Ijasah'),
(5, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat ', 'Lamanya lebih dari 960 jam', 'Sertifikat ', 15000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(6, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat ', 'Lamanya antara 641 - 960 jam', 'Sertifikat ', 9000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(7, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat ', 'Lamanya antara 401 - 640 jam', 'Sertifikat', 6000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(8, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Lamanya antara 161 - 400 jam', 'Sertifikat', 3000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(9, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Lamanya antara 81 - 160 jam', 'Sertifikat', 2000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(10, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Lamanya antara 31 - 80 jam', 'Sertifikat', 1000, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(11, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Lamanya antara 10 - 30 jam', 'Sertifikat', 0, '-', 'Semua jenjang', 'Fotokopi STTPP'),
(12, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Mengikuti Ujian Sertifikasi Tanpa Kursus/ Pelatihan Berskala Internasional', 'Sertifikat', 2000, '-', 'Semua jenjang', 'Fotokopi Sertifikat'),
(13, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Mengikuti Ujian Sertifikasi Tanpa Kursus/Pelatihan Berskala Nasiona', 'Sertifikat', 1000, '-', 'Semua jenjang', 'Fotokopi Sertifikat'),
(14, 'Pranata Komputer Ahli', 'Pendidikan', 'Pendidikan dan Pelatihan Fungsional di Bidang Kepranataan Komputer dan Memperoleh Surat Tanda Tamat', 'Mengikuti Ujian Sertifikasi Tanpa Kursus/Pelatihan Berskala  Institusional/Lokal', 'Sertifikat', 0, '-', 'Semua jenjang', 'Fotokopi Sertifikat'),
(15, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket ', 'Menelaah spesifikasi teknis komponen sistem komputer', 'Kali', 0, '-', 'PK Pertama', 'Dokumentasi'),
(18, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Mengatur alokasi area dalam media komputer', 'Kali', 0, '*)', 'PK Pertama', 'Dokumentasi'),
(19, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan instalasi dan atau meningkatkan (Up \r\nGrade) sistem komputer ', 'Sistem', 0, '*)', 'PK Pertama', 'Dokumentasi'),
(20, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat program paket  Program Untuk pengguna internasional ', 'Program', 2, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(21, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat program paket untuk pengguna nasional', 'Program', 2, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(22, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat Program Paket untuk Pengguna antar instansi/lembaga', 'Program', 0.58, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(23, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat program paket untuk kalangan sendiri', 'Program', 0, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(24, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat Program Paket Teknologi Internet Advanced', 'Program', 0, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(25, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat Program Paket Teknologi Internet Sederhana', 'Program', 0, '25 program per tahun', 'PK Pertama', 'Spesifikasi, Demo/list program, Pedoman Pengoperasian'),
(26, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Sistem Komputer', 'Sistem', 0, '25 sistem per tahun', 'PK Pertama', 'Dokumentasi'),
(27, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket untuk Pengguna Internasional', 'Program', 1, '25 program per tahun', 'PK Pertama', 'Laporan'),
(28, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket untuk Pengguna Nasional', 'Program', 0.414, '25 program per tahun', 'PK Pertama', 'Laporan'),
(29, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket untuk Antar Instansi/Lembaga', 'Program', 0.138, '25 program per tahun', 'PK Pertama', 'Laporan'),
(30, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket untuk Kalangan Sendiri', 'Program', 0.046, '25 program per tahun', 'PK Pertama', 'Laporan'),
(31, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket Teknologi Internet Advanced', 'Program', 0.138, '25 program per tahun', 'PK Pertama', 'Laporan'),
(32, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan Uji Coba Program Paket Teknologi Internet Sederhana', 'Program', 0.046, '25 program per tahun', 'PK Pertama', 'Laporan'),
(33, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Melakukan deteksi dan atau memperbaiki kerusakan sistem komputer dan atau paket program', 'Kali', 0.305, '25 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(34, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat petunjuk operasional sistem komputer > 29 hal', 'Buku', 0.367, '25 buku pertahun', 'PK Pertama', 'Buku'),
(35, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat petunjuk operasional sistem komputer 20- 29 hal', 'Buku', 0.246, '25 buku pertahun', 'PK Pertama', 'Buku'),
(36, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat petunjuk operasional sistem komputer 10- 19 hal', 'Buku', 0.123, '25 buku pertahun', 'PK Pertama', 'Buku'),
(37, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Komputer dan Program Paket', 'Membuat dokumentasi program paket ', 'Dokumen', 0.305, '25 dokumen pertahun', 'PK Pertama', 'Dokumentasi'),
(38, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Mengimplementasikan rancangan database ', 'Rancangan', 0.652, '25 rancangann pertahun', 'PK Pertama', 'Dokumentasi'),
(39, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Mengatur alokasi area databasedan media komputer', 'Kali', 0.347, '25 kali pertahun', 'PK Pertama ', 'Dokumentasi'),
(40, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Membuat otorisasi akses kepada pemakai ', 'Simpul', 0.004, '*)', 'PK Pertama ', 'Dokumentasi'),
(41, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Memantau dan mengevaluasi penggunaan database', 'Kali', 0.186, '1 kali perbulan', 'PK Pertama ', 'Dokumentasi'),
(42, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Melaksanakan duplikasi database', 'Kali', 0.155, '1 kali perminggu', 'PK Pertama', 'Dokumentasi'),
(43, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Melaksanakan perpindahan dari perangkat lunak ', 'Sistem', 0.418, '12 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(44, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Database', 'Melakukan pencarian kembali database ', 'Kali', 0.154, '52 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(45, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Menerapkan rancangan konfigurasi sistem jaringan ', 'Rancangan', 0.292, '-', 'PK Pertama', 'Dokumentasi'),
(46, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Membuat sistem pengamanan sistem jaringan \r\nkomputer', 'Sistem', 0.223, '-', 'PK Pertama', 'Dokumentasi'),
(47, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Membuat sistem prosedur pemanfaatan sistem ', 'Sistem', 0.27, '-', 'PK Pertama', 'Dokumentasi'),
(48, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Melakukan uji coba sistem operasi sistem jaringan \r\nkomputer', 'Sistem', 0.367, '-', 'PK Pertama', 'Dokumentasi'),
(49, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Melakukan monitoring akses ', 'Kali', 0.239, '12 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(50, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Melakukan perbaikan kerusakan sistem jaringan ', 'Kali', 0.189, '52 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(51, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Melakukan sistem pencarian kembali sistem jaringan ', 'Kali', 0.187, '12 kali pertahun', 'PK Pertama', 'Dokumentasi'),
(52, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Membuat laporan kejanggalan (anomali) sistem ', 'Laporan', 0.119, '12 laporan pertahun', 'PK Pertama', 'Dokumentasi'),
(53, 'Pranata Komputer Ahli', 'Implementasi Sistem Informasi', 'Implementasi Sistem Jaringan Komputer', 'Membuat dokumentasi penggunaan sistem jaringan ', 'Dokumen', 2.803, '1 kali pertahun', 'PK Pertama', 'Buku'),
(54, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', ' Melakukan diskusi dalam rangka integrasi sistem \r\ninformasi keseluruhan', 'Kali', 0.96, '25 kali pertahun', 'PK Madya', 'Dokumentasi'),
(55, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Mengidentifikasi kebutuhan pemakai dalam hal \r\noutput, data, dan kinerja program', 'Dokumentasi', 1.891, '2 dokumentasi pertahun', 'PK Madya', 'Dokumentasi'),
(56, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Membuat spesifikasi peralatan teknologi informasi ', 'Spesifikasi', 1.684, '2 spesifikasi per tahun', 'PK Madya', 'Dokumentasi'),
(57, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Membuat rancangan sistem informasi keseluruhan', 'Rancangan', 8.93, '1 rancangan per tahun', 'PK Madya', 'Dokumentasi'),
(58, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Meneliti dan mengusulkan metode pengembangan \r\nsistem informasi yang meningkatkan produktivitas \r\nke', 'Proposal', 3.574, '1 proposal per tahun', 'PK Madya', 'Proposal'),
(59, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Mengembangkan dan atau meremajakan rancangan \r\nsistem informasi keseluruhan.', 'Rancangan', 2.963, '1 rancangan per tahun', 'PK Madya', 'Dokumentasi'),
(60, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Memantau kinerja sistem informasi keseluruhan atau \r\nsistem informasi baru di lingkungan instansi', 'Dokumen', 2.862, '2 kali pertahun', 'PK Madya', 'Dokumentasi'),
(61, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Memantau dan menilai kinerja sistem komputer yang ', 'Laporan', 2.63, '2 laporan pertahun', 'PK Madya', 'Dokumentasi'),
(62, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Menentukan penggunaan sistem komputer dan sistem jaringan komputer untuk meningkatkan produktivitas', 'Laporan', 1.891, '-', 'PK Madya', 'Dokumentasi'),
(63, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Membuat rancangan pembakuan dokumentasi ', 'Rancangan', 7.407, '1 rancangan per tahun', 'PK Madya', 'Dokumentasi'),
(64, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Menyusun konsep program pendidikan dan pelatihan ', 'Proposal', 4.938, '1 proposal per tahun', 'PK Madya', 'Dokumentasi'),
(65, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perencanaaan dan Pengembangan Sistem Informasi', 'Mengusulkan alokasi sumber daya teknologi ', 'Proposal', 1.753, '-', 'PK Madya', 'Proposal'),
(66, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Melaksanakan studi lengkap terhadap organisasi dan ', 'Laporan', 13.003, '1 laporan per 3 tahun per instansi', 'PK Utama', 'Dokumentasi'),
(67, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Menyusun rencana induk sistem informasi ', 'Dokumen', 11.483, '1 dokumen per 3 tahun per instansi', 'PK Utama', 'Dokumentasi'),
(68, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Merintis revitalisasi rencana induk sistem informasi \r\nsesuai dengan kemajuan teknologi/organisasi', 'Dokumen', 7.343, '1 dokumen per 3 tahun per instansi', 'PK Utama', 'Dokumentasi'),
(69, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Merumuskan rencana integrasi sistem informasi ', 'Dokumen', 1.35, '4 dokumen per tahun per instansi', 'PK Utama', 'Dokumentasi'),
(70, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', ' Melakukan evaluasi sistem informasi induk yang sedang berjalan', 'Dokumen', 4.473, '1 dokumen per tahun per instansi', 'PK Utama', 'Dokumentasi'),
(71, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Menyusun dan merumuskan rencana seminar di \r\nbidang teknologi informasi', 'Dokumen', 4.517, '1 dokumen per tahun per instansi', 'PK Utama', 'Dokumentasi'),
(72, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', 'Melakukan kajian terhadap perkembangan dan \r\npemanfaatan teknologi informasi\r\n', 'Laporan', 6.414, '1 laporan per tahun', 'PK Utama', 'Dokumentasi'),
(73, 'Pranata Komputer Ahli', 'Penyusun Kebijakan Sistem Informasi', 'Perumusan Visi, Misi, dan Strategi Informasi', ' Menilai usulan pengembangan sistem informasi atau \r\npembangunan sistem informasi baru, dan \r\nmengin', 'Kali', 3.065, '12 kali per tahun', 'PK Utama', 'Dokumentasi'),
(74, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', 'Membuat karya tulis/karya ilmiah hasil penelitian, ', 'Buku', 12500, '-', 'Semua Jenjang', 'Buku'),
(75, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 6000, '-', 'Semua Jenjang', 'Majalah'),
(76, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Buku', 8000, '-', 'Semua Jenjang', 'Buku'),
(77, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 4000, '-', 'Semua Jenjang', 'Fotokopi Makalah'),
(78, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Buku', 8000, '-', 'Semua Jenjang', 'Buku'),
(79, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 4000, '-', 'Semua Jenjang', 'Artikel dalam Majalah'),
(80, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Buku', 7000, '-', 'Semua Jenjang', 'Buku'),
(81, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 3500, '-', 'Semua Jenjang', 'Makalah'),
(82, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 2500, '-', 'Semua Jenjang', 'Naskah'),
(83, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Pembuatan Karya Tulis/KaryaIlmiah di Bidang Teknologi Informasi', '', 'Naskah', 2500, '-', 'Semua Jenjang', 'Naskah'),
(84, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penyusunan Petunjuk Teknis Pelaksanaan Pengelolaan Kegiatan Teknologi Informasi', 'Menyusun petunjuk teknis pelaksanaan pengelolaan kegiatan teknologi informasi', 'Naskah', 3000, '-', 'Semua Jenjang', 'Naskah/Buku'),
(85, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penerjemahan/Penyaduran Buku atau Karya Ilmiah di Bidang Teknologi Informasi ', '', 'Buku', 7000, '-', 'Semua Jenjang', 'Buku Terjemahan/saduran'),
(86, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penerjemahan/Penyaduran Buku atau Karya Ilmiah di Bidang Teknologi Informasi ', '', 'Naskah', 3500, '-', 'Semua Jenjang', 'Makalah Terjemahan/Saduran dan majalah ilmiah'),
(87, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penerjemahan/Penyaduran Buku atau Karya Ilmiah di Bidang Teknologi Informasi ', '', 'Buku atau Naskah', 7000, '-', 'Semua Jenjang', 'Buku Terjemahan,makalah,terjemahan dan saduran'),
(88, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penerjemahan/Penyaduran Buku atau Karya Ilmiah di Bidang Teknologi Informasi ', '', 'Buku', 3500, '-', 'Semua Jenjang', 'Buku Terjemahan,makalah,terjemahan dan saduran'),
(89, 'Pranata Komputer Ahli', 'Pengembangan Profesi', 'Penerjemahan/Penyaduran Buku atau Karya Ilmiah di Bidang Teknologi Informasi ', '', 'Naskah', 1500, '-', 'Semua Jenjang', 'Naskah Abstrak dan Majalah yang memuatnya'),
(90, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Pengajar/Pelatih di Bidang Teknologi Informasi', 'Mengajar atau melatih bidang teknologi informasi ', 'Jam Pelajaran', 0.03, '-', 'Semua Jenjang', 'Surat Tugas atau keterangan'),
(91, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Peran Serta Dalam Seminar/Lokakarya/Konferensi', ' Mengikuti Seminar/Lokakarya/Konferensi sebagai pemasaran', 'kali', 3000, '2 kali per tahun', 'Semua Jenjang', 'Fotokopi Sertifikat'),
(92, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Peran Serta Dalam Seminar/Lokakarya/Konferensi', ' Mengikuti Seminar/Lokakarya/Konferensi sebagai moderato/pembahas/narasumber', 'Kali', 2000, '2 kali per tahun', 'Semua Jenjang', 'Fotokopi Sertifikat'),
(93, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Peran Serta Dalam Seminar/Lokakarya/Konferensi', ' Mengikuti Seminar/Lokakarya/Konferensi sebagai peserta', 'Kali', 1000, '2 kali per tahun', 'Semua Jenjang', 'Fotokopi Sertifikat'),
(94, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Keanggotaan Dalam Tim Penilai Angka Kredit Jabatan Fungsional Pranata Komputer', 'Menjadi anggota Tim Penilai Angka Kredit Jabatan ', 'Tahun', 0.5, 'Setiap tahu nmasa keanggotaan', 'Semua Jenjang', 'Surat Keputusan'),
(95, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Keanggotaan Dalam Organisasi Profesi', ' Menjadi anggota profesi di tingkat Nasional sebagai perngurus aktif', 'tahun', 1000, 'Setiap tahun masa keanggotaan', 'Semua Jenjang', 'Surat Keterangan'),
(96, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Keanggotaan Dalam Organisasi Profesi', 'Menjadi anggota profesi di tingkat Nasional sebagai anggota aktif', 'Tahun', 0.5, 'Setiap tahun masa keanggotaan', 'Semua Jenjang', 'Surat Keterangan'),
(97, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Piagam Kehormatan', ' Memperoleh penghargaan/tanda jasa Satya Lencana tiga puluh tahun', 'Piagam', 3000, '-', 'Semua Jenjang', 'Surat Keputusan'),
(98, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Piagam Kehormatan', ' Memperoleh penghargaan/tanda jasa Satya Lencana dua puluh tahun', 'Piagam', 2000, '-', 'Semua Jenjang', 'Surat Keputusan'),
(99, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Piagam Kehormatan', ' Memperoleh penghargaan/tanda jasa Satya Lencana sepuluh tahun', 'Piagam', 1000, '-', 'Semua Jenjang', 'Surat Keputusan'),
(100, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Gelar Kesarjanaan Lainnya', ' Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang Tugas Doktor (S3)', 'Gelar/Ijasah', 15000, '-', 'Semua Jenjang', 'Ijasah'),
(101, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Gelar Kesarjanaan Lainnya', ' Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang Pasca Sarjana (S2)', 'Gelar/Ijasah', 10000, '-', 'Semua Jenjang', 'Ijasah'),
(102, 'Pranata Komputer Ahli', 'Pendukung Kegiatan Pranata Komputer', 'Perolehan Gelar Kesarjanaan Lainnya', ' Memperoleh gelar kesarjanaan lainnya yang tidak sesuai dengan bidang Pasca Sarjana (S1)', NULL, 5000, '-', 'Semua Jenjang', 'Ijasah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dupak`
--

CREATE TABLE `tbl_dupak` (
  `id` int(100) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `jenis_pengajuan` varchar(100) NOT NULL DEFAULT '',
  `periode` varchar(100) NOT NULL DEFAULT '',
  `status` varchar(100) NOT NULL DEFAULT '',
  `ak_diajukan` varchar(100) NOT NULL DEFAULT '',
  `ak_disetujuin` varchar(100) NOT NULL DEFAULT '',
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dupak`
--

INSERT INTO `tbl_dupak` (`id`, `tgl_pengajuan`, `jenis_pengajuan`, `periode`, `status`, `ak_diajukan`, `ak_disetujuin`, `id_akun`) VALUES
(1, '2016-06-26', 'a', 'a', 'Approved', 'a', 'a', 116),
(2, '2016-06-08', 'd', 'd', 'Pending', 'd', 'd', 116),
(3, '2016-06-24', 's', 'g', 'Approved', 'b', 's', 116),
(4, '2016-06-15', 'g', 'b', 'Denied', 'a', 'g', 116),
(5, '2016-06-09', 'f', 's', 'Approved', 'z', 'c', 116),
(6, '2016-06-18', 'g', 'd', 'Denied', 'c', 'b', 116),
(7, '2016-06-18', 'f', 's', 'Pending', 'c', 'g', 116),
(8, '2016-06-28', 'f', 'g', 'Denied', 'a', 'r', 116),
(9, '2016-06-02', 'df', 'd', 'Approved', 'a', 'c', 116),
(10, '2016-06-17', 'f', 'c', 'Pending', 'x', 'v', 116),
(11, '2016-06-11', 'f', 'c', 'Approved', 'e', 'f', 116);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tbl_pejabat` (
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
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pejabat`
--

INSERT INTO `tbl_pejabat` (`nip`, `nama`, `tempat`, `tgl_lahir`, `foto`, `pangkat`, `pangkat_terakhir`, `jabatan`, `jabatan_terakhir`, `unit_organisasi`, `instansi`, `angka_kredit`, `sk_pns`, `sk_pangkat_terakhir`, `sk_jabatan_terakhir`, `pak_terakhir`, `id_akun`) VALUES
('1111111', 'Eliza Jasin', 'Jakarta', '2016-06-05', 'uploads/sk_pejabat/donald.jpg', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'uploads/sk_pejabat/test.jpg', 'uploads/sk_pejabat/cat.jpg', 'uploads/sk_pejabat/tele.PNG', 'uploads/sk_pejabat/bunny.jpg', 115),
('222222222222', 'Riviera Jasin', 'Bandung', '2016-06-08', 'uploads/sk_pejabat/donald.jpg', 'f', 'd', 'd', 'r', 'd', 'd', 'd', 'uploads/sk_pejabat/test.jpg', 'uploads/sk_pejabat/cat.jpg', 'uploads/sk_pejabat/tele.PNG', 'uploads/sk_pejabat/bunny.jpg', 116),
('333333333', 'Rachmawati Jasin', 'Jakarta', '2016-06-03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 117),
('444444', 'Jasin Jasin', 'Semarang', '2016-06-29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 118);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unsur_kegiatan`
--

CREATE TABLE `tbl_unsur_kegiatan` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `tgl_peraturan` varchar(100) NOT NULL DEFAULT '',
  `status_peraturan` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unsur_kredit`
--

CREATE TABLE `tbl_unsur_kredit` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `jenis_unsur` varchar(100) DEFAULT '',
  `unsur` varchar(100) DEFAULT '',
  `sub_unsur` varchar(100) DEFAULT '',
  `butir_kegiatan` varchar(100) DEFAULT '',
  `pelaksana` varchar(100) DEFAULT '',
  `satuan_hasil` varchar(100) DEFAULT '',
  `angka_kredit` varchar(100) DEFAULT '',
  `batasan_penilaian` varchar(100) DEFAULT '',
  `bukti_fisik` varchar(100) DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_acuanpak`
--
ALTER TABLE `tbl_acuanpak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dupak`
--
ALTER TABLE `tbl_dupak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pejabat`
--
ALTER TABLE `tbl_pejabat`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tbl_unsur_kegiatan`
--
ALTER TABLE `tbl_unsur_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unsur_kredit`
--
ALTER TABLE `tbl_unsur_kredit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_acuanpak`
--
ALTER TABLE `tbl_acuanpak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `tbl_dupak`
--
ALTER TABLE `tbl_dupak`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
