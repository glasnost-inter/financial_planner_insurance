-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2014 at 10:50 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simulasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `benefit`
--

CREATE TABLE IF NOT EXISTS `benefit` (
  `kd_benefit` varchar(30) NOT NULL,
  `nama_benefit` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_benefit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benefit`
--

INSERT INTO `benefit` (`kd_benefit`, `nama_benefit`) VALUES
('BSW', 'Beasiswa'),
('JAMCAT', 'Jaminan cacat total'),
('JAMKEMAK', 'Jaminan kematian dalam masa asuransi'),
('JAMKEMWL', 'Jaminan kematian seumur hidup'),
('JKN', 'JKN BPJS Kesehatan'),
('NT', 'Nilai Tunai'),
('RWDT', 'Rawat Inap Diri Tertanggung');

-- --------------------------------------------------------

--
-- Table structure for table `benefit_klaim`
--

CREATE TABLE IF NOT EXISTS `benefit_klaim` (
  `no_klien` int(11) NOT NULL,
  `kd_benefit` varchar(30) NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pembayaran` date NOT NULL,
  `nilai_klaim` bigint(20) NOT NULL,
  `potongan` bigint(20) NOT NULL,
  `nilai_dibayarkan` bigint(20) NOT NULL,
  `kd_metode_bayar` varchar(2) NOT NULL,
  `bukti_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cara_bayar`
--

CREATE TABLE IF NOT EXISTS `cara_bayar` (
  `kd_cara_bayar` varchar(2) NOT NULL,
  `nama_cara_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cara_bayar`
--

INSERT INTO `cara_bayar` (`kd_cara_bayar`, `nama_cara_bayar`) VALUES
('B', 'Berkala'),
('X', 'Sekaligus');

-- --------------------------------------------------------

--
-- Table structure for table `frekuensi_bayar`
--

CREATE TABLE IF NOT EXISTS `frekuensi_bayar` (
  `kd_frekuensi_bayar` varchar(2) NOT NULL,
  `nama_frekuensi_bayar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frekuensi_bayar`
--

INSERT INTO `frekuensi_bayar` (`kd_frekuensi_bayar`, `nama_frekuensi_bayar`) VALUES
('1', 'Bulanan'),
('4', 'Tahunan'),
('SK', 'Sesuai Kejadian'),
('X', 'Sekaligus');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_klaim`
--

CREATE TABLE IF NOT EXISTS `jenis_klaim` (
  `kd_jenis_klaim` varchar(30) NOT NULL,
  `nama_jenis_klaim` varchar(100) NOT NULL,
  PRIMARY KEY (`kd_jenis_klaim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_klaim`
--

INSERT INTO `jenis_klaim` (`kd_jenis_klaim`, `nama_jenis_klaim`) VALUES
('BHT', 'Berhenti bekerja'),
('CCK', 'Cacat tetap total akibat kecelakaan'),
('EXP', 'Expirasi'),
('MDB', 'Meninggal Dunia bukan akibat kecelakaan'),
('MDK', 'Meninggal Dunia akibat kecelakaan'),
('SKT', 'Sakit dirawat di fasilitas kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE IF NOT EXISTS `klien` (
  `id_klien` int(11) NOT NULL AUTO_INCREMENT,
  `nama_klien` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_expirasi` date NOT NULL,
  `tgl_akhir_masa` date NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `tgl_berhenti` date NOT NULL,
  `nilai_expirasi` bigint(20) NOT NULL,
  `nilai_meninggal` bigint(20) NOT NULL,
  `nilai_berhenti` bigint(20) NOT NULL,
  `nilai_beasiswa` bigint(20) NOT NULL,
  `nilai_cacat` bigint(20) NOT NULL,
  `nilai_meninggal_kecelakaan` bigint(20) NOT NULL,
  `premi` bigint(20) NOT NULL,
  PRIMARY KEY (`id_klien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `nama_klien`, `tgl_lahir`, `tgl_expirasi`, `tgl_akhir_masa`, `tgl_meninggal`, `tgl_berhenti`, `nilai_expirasi`, `nilai_meninggal`, `nilai_berhenti`, `nilai_beasiswa`, `nilai_cacat`, `nilai_meninggal_kecelakaan`, `premi`) VALUES
(1, 'THOMAS MULLER', '1987-07-28', '2042-07-28', '2047-07-28', '2044-08-09', '2033-06-12', 50000000, 500000000, 25000000, 8333333, 500000000, 1000000000, 3500000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `kd_produk` varchar(30) NOT NULL,
  `nama_produk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kd_produk`, `nama_produk`) VALUES
('JSPE', 'JS Proteksi Educare'),
('JSPMA', 'JS Proteksi Mediacare Abadi'),
('JSPMAP', 'JS Proteksi Mediacare Abadi Plus'),
('S100', 'Siharta 100 Ribu');

-- --------------------------------------------------------

--
-- Table structure for table `produk_skema`
--

CREATE TABLE IF NOT EXISTS `produk_skema` (
  `kd_produk_skema` varchar(30) NOT NULL,
  `kd_produk` varchar(30) NOT NULL,
  `kd_skema` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_produk_skema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_skema`
--

INSERT INTO `produk_skema` (`kd_produk_skema`, `kd_produk`, `kd_skema`) VALUES
('JSPE_HBT', 'JSPE', 'HBT'),
('JSPE_HEX', 'JSPE', 'HEX'),
('JSPE_HKC', 'JSPE', 'HKC'),
('JSPE_RMD', 'JSPE', 'RMD'),
('JSPE_RMK', 'JSPE', 'RMK'),
('JSPMAP_HBT', 'JSPMAP', 'HBT'),
('JSPMAP_HEX', 'JSPMAP', 'HEX'),
('JSPMAP_HKC', 'JSPMAP', 'HKC'),
('JSPMAP_RMD', 'JSPMAP', 'RMD'),
('JSPMAP_RMK', 'JSPMAP', 'RMK'),
('JSPMA_HBT', 'JSPMA', 'HBT'),
('JSPMA_HEX', 'JSPMA', 'HEX'),
('JSPMA_RMD', 'JSPMA', 'RMD'),
('S100_HBT', 'S100', 'HBT'),
('S100_HEX', 'S100', 'HEX'),
('S100_HKC', 'S100', 'HKC'),
('S100_RMD', 'S100', 'RMD'),
('S100_RMK', 'S100', 'RMK');

-- --------------------------------------------------------

--
-- Table structure for table `produk_skema_klaim`
--

CREATE TABLE IF NOT EXISTS `produk_skema_klaim` (
  `kd_produk_skema_klaim` varchar(30) NOT NULL,
  `kd_produk_skema` varchar(30) NOT NULL,
  `kd_klaim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_skema_klaim`
--

INSERT INTO `produk_skema_klaim` (`kd_produk_skema_klaim`, `kd_produk_skema`, `kd_klaim`) VALUES
('JSPE_HBT_BHT', 'JSPE_HBT', 'BHT'),
('JSPE_HEX_EXP', 'JSPE_HEX', 'EXP'),
('JSPE_HKC_CCK', 'JSPE_HKC', 'CCK'),
('JSPE_HKC_EXP', 'JSPE_HKC', 'EXP'),
('JSPE_RMD_BHT', 'JSPE_RMD', 'BHT'),
('JSPE_RMD_MDB', 'JSPE_RMD', 'MDB'),
('JSPE_RMK_BHT', 'JSPE_RMK', 'BHT'),
('JSPE_RMK_MDK', 'JSPE_RMK', 'MDK'),
('JSPMA_HBT_BHT', 'JSPMA_HBT', 'BHT'),
('JSPMA_HEX_EXP', 'JSPMA_HEX', 'EXP'),
('JSPMA_HEX_SKT', 'JSPMA_HEX', 'SKT'),
('JSPMA_HKC_CCK', 'JSPMA_HKC', 'CCK'),
('JSPMA_HKC_EXP', 'JSPMA_HKC', 'EXP'),
('JSPMA_HKC_SKT', 'JSPMA_HKC', 'SKT'),
('JSPMA_RMD_BHT', 'JSPMA_RMD', 'BHT'),
('JSPMA_RMD_MDB', 'JSPMA_RMD', 'MDB'),
('JSPMA_RMD_MDB', 'JSPMA_RMD', 'MDB'),
('JSPMA_RMD_SKT', 'JSPMA_RMD', 'SKT'),
('JSPMA_RMK_BHT', 'JSPMA_RMK', 'BHT'),
('JSPMA_RMK_MDK', 'JSPMA_RMK', 'MDK'),
('JSPMA_RMK_SKT', 'JSPMA_RMK', 'SKT'),
('JSPMAP_HBT_BHT', 'JSPMAP_HBT', 'BHT'),
('JSPMAP_HEX_EXP', 'JSPMAP_HEX', 'EXP'),
('JSPMAP_HKC_CCK', 'JSPMAP_HKC', 'CCK'),
('JSPMAP_RMD_MDB', 'JSPMAP_RMD', 'MDB'),
('JSPMAP_RMK_MDK', 'JSPMAP_RMK', 'MDK'),
('JSPMAP_RMD_SKT', 'JSPMAP_RMD', 'SKT'),
('JSPMAP_RMK_SKT', 'JSPMAP_RMK', 'SKT'),
('S100_HBT_BHT', 'S100_HBT', 'BHT'),
('S100_HEX_EXP', 'S100_HEX', 'EXP'),
('S100_HKC_CCK', 'S100_HKC', 'CCK'),
('S100_HKC_EXP', 'S100_HKC', 'EXP'),
('S100_RMD_BHT', 'S100_RMD', 'BHT'),
('S100_RMD_MDB', 'S100_RMD', 'MDB'),
('S100_RMK_BHT', 'S100_RMK', 'BHT'),
('S100_RMK_MDK', 'S100_RMK', 'MDK');

-- --------------------------------------------------------

--
-- Table structure for table `produk_skema_klaim_benefit`
--

CREATE TABLE IF NOT EXISTS `produk_skema_klaim_benefit` (
  `kd_produk_skema_klaim` varchar(30) NOT NULL,
  `kd_produk_skema` varchar(30) NOT NULL,
  `kd_benefit` varchar(30) NOT NULL,
  `kd_cara_bayar` varchar(2) NOT NULL,
  `kd_frekuensi_bayar` varchar(2) NOT NULL,
  PRIMARY KEY (`kd_produk_skema_klaim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_skema_klaim_benefit`
--

INSERT INTO `produk_skema_klaim_benefit` (`kd_produk_skema_klaim`, `kd_produk_skema`, `kd_benefit`, `kd_cara_bayar`, `kd_frekuensi_bayar`) VALUES
('JSPE_HBT_BHT_NT', 'JSPE_HBT_BHT', 'NT', 'X', 'X'),
('JSPE_HEX_EXP_BSW', 'JSPE_HEX_EXP', 'BSW', 'B', '1'),
('JSPE_HEX_EXP_NT', 'JSPE_HEX_EXP', 'NT', 'X', 'X'),
('JSPE_HKC_CCK_JAMCAT', 'JSPE_HKC_CCK', 'JAMCAT', 'X', 'X'),
('JSPE_HKC_EXP_BSW', 'JSPE_HKC_EXP', 'BSW', 'B', '1'),
('JSPE_HKC_EXP_NT', 'JSPE_HKC_EXP', 'NT', 'X', 'X'),
('JSPE_RMD_MDB_BSW', 'JSPE_RMD_MDB', 'BSW', 'B', '1'),
('JSPE_RMD_MDB_JAMKEMAK', 'JSPE_RMD_MDB', 'JAMKEMAK', 'X', 'X'),
('JSPE_RMD_MDB_NT', 'JSPE_RMD_MDB', 'NT', 'X', 'X'),
('JSPE_RMK_MDK_BSW', 'JSPE_RMK_MDK', 'BSW', 'B', '1'),
('JSPE_RMK_MDK_JAMKEMAK', 'JSPE_RMK_MDK', 'JAMKEMAK', 'X', 'X'),
('JSPE_RMK_MDK_NT', 'JSPE_RMK_MDK', 'NT', 'X', 'X'),
('JSPMAP_HBT_BHT_NT', 'JSPMAP_HBT_BHT', 'NT', 'X', 'X'),
('JSPMAP_HEX_EXP_NT', 'JSPMAP_HEX_EXP', 'NT', 'X', 'X'),
('JSPMAP_HKC_CCK_JAMCAT', 'JSPMAP_HKC_CCK', 'JAMCAT', 'X', 'X'),
('JSPMAP_HKC_EXP_NT', 'JSPMAP_HKC_EXP', 'NT', 'X', 'X'),
('JSPMAP_RMD_MDB_JAMKEMWL', 'JSPMAP_RMD_MDB', 'JAMKEMWL', 'X', 'X'),
('JSPMAP_RMD_MDB_NT', 'JSPMAP_RMD_MDB', 'NT', 'X', 'X'),
('JSPMAP_RMK_MDK_JAMKEMWL', 'JSPMAP_RMK_MDK', 'JAMKEMWL', 'X', 'X'),
('JSPMAP_RMK_MDK_NT', 'JSPMAP_RMK_MDK', 'NT', 'X', 'X'),
('JSPMA_HEX_SKT_JKN', 'JSPMA_HEX_SKT', 'JKN', 'X', 'SK'),
('JSPMA_HEX_SKT_RWDT', 'JSPMA_HEX_SKT', 'RWDT', 'X', 'SK'),
('JSPMA_HKC_SKT_JKN', 'JSPMA_HKC_SKT', 'JKN', 'X', 'SK'),
('JSPMA_HKC_SKT_RWDT', 'JSPMA_HKC_SKT', 'RWDT', 'X', 'SK'),
('JSPMA_RMD_MDB_JAMKEMWL', 'JSPMA_RMD_MDB', 'JAMKEMWL', 'X', 'X'),
('JSPMA_RMD_SKT_JKN', 'JSPMA_RMD_SKT', 'JKN', 'X', 'SK'),
('JSPMA_RMD_SKT_RWDT', 'JSPMA_RMD_SKT', 'RWDT', 'X', 'SK'),
('JSPMA_RMK_MDK_JAMKEMWL', 'JSPMA_RMK_MDK', 'JAMKEMWL', 'X', 'X'),
('JSPMA_RMK_SKT_JKN', 'JSPMA_RMK_SKT', 'JKN', 'X', 'SK'),
('JSPMA_RMK_SKT_RWDT', 'JSPMA_RMK_SKT', 'RWDT', 'X', 'SK'),
('S100_HBT_BHT_NT', 'S100_HBT_BHT', 'NT', 'X', 'X'),
('S100_HEX_EXP_NT', 'S100_HEX_EXP', 'NT', 'X', 'X'),
('S100_HKC_CCK_JAMCAT', 'S100_HKC_CCK', 'JAMCAT', 'X', 'X'),
('S100_HKC_EXP_NT', 'S100_HKC_EXP', 'NT', 'X', 'X'),
('S100_RMD_MDB_JAMKEMAK', 'S100_RMD_MDB', 'JAMKEMAK', 'X', 'X'),
('S100_RMD_MDB_NT', 'S100_RMD_MDB', 'NT', 'X', 'X'),
('S100_RMK_MDK_JAMKEMAK', 'S100_RMK_MDK', 'JAMKEMAK', 'X', 'X'),
('S100_RMK_MDK_NT', 'S100_RMK_MDK', 'NT', 'X', 'X');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE IF NOT EXISTS `skema` (
  `kd_skema` varchar(30) NOT NULL,
  `nama_skema` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`kd_skema`, `nama_skema`) VALUES
('HEX', 'Hidup sampai expirasi tanpa resiko'),
('HKC', 'Hidup sampai expirasi mengalami cacat tetap akibat kecelakaan'),
('HBT', 'Hidup berhenti bekerja'),
('RMD', 'Meninggal dalam masa asuransi bukan karena kecelakaan'),
('RMK', 'Meninggal dalam masa asuransi karena kecelakaan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
