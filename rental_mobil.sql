-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2016 at 05:29 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rental_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenisservice`
--

CREATE TABLE IF NOT EXISTS `jenisservice` (
  `IdJenisService` varchar(5) NOT NULL,
  `NmJenisService` text NOT NULL,
  PRIMARY KEY (`IdJenisService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIK` varchar(20) NOT NULL,
  `NimKaryawan` text NOT NULL,
  `AlmtKaryawan` text NOT NULL,
  `TelpKaryawan` text NOT NULL,
  PRIMARY KEY (`NIK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIK`, `NimKaryawan`, `AlmtKaryawan`, `TelpKaryawan`) VALUES
('12345678', 'ABC123456', 'Kp.padurenan', '085776932047');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
  `NoPlat` varchar(20) NOT NULL,
  `Tahun` text NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  `StatusRental` text NOT NULL,
  PRIMARY KEY (`NoPlat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `Username` varchar(10) NOT NULL,
  `Password` text NOT NULL,
  `TypeUser` text NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Username`, `Password`, `TypeUser`) VALUES
('007', 'q', 'Karyawan'),
('abe', 'q', 'Admin'),
('Admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE IF NOT EXISTS `merk` (
  `KodeMerk` varchar(5) NOT NULL,
  `NmMerk` text NOT NULL,
  PRIMARY KEY (`KodeMerk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
  `NoKTP` varchar(20) NOT NULL,
  `NamaPel` text NOT NULL,
  `AlamatPel` text NOT NULL,
  `TelpPel` text NOT NULL,
  PRIMARY KEY (`NoKTP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE IF NOT EXISTS `pemilik` (
  `KodePemilik` varchar(5) NOT NULL,
  `NmPemilik` text NOT NULL,
  `AlmtPemilik` text NOT NULL,
  `TelpPemilik` text NOT NULL,
  PRIMARY KEY (`KodePemilik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `KodeService` varchar(5) NOT NULL,
  `TglService` date NOT NULL,
  `BiayaService` int(11) NOT NULL,
  PRIMARY KEY (`KodeService`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setoran`
--

CREATE TABLE IF NOT EXISTS `setoran` (
  `NoSetoran` varchar(5) NOT NULL,
  `TglSetoran` date NOT NULL,
  `Jumlah` int(11) NOT NULL,
  PRIMARY KEY (`NoSetoran`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sopir`
--

CREATE TABLE IF NOT EXISTS `sopir` (
  `IdSopir` varchar(5) NOT NULL,
  `NmSopir` text NOT NULL,
  `AlmtSopir` text NOT NULL,
  `TelpSopir` text NOT NULL,
  `NoSIM` text NOT NULL,
  `TarifPerJam` int(11) NOT NULL,
  PRIMARY KEY (`IdSopir`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sopir`
--

INSERT INTO `sopir` (`IdSopir`, `NmSopir`, `AlmtSopir`, `TelpSopir`, `NoSIM`, `TarifPerJam`) VALUES
('1', 'Rahmad Al Habib', 'Perum.Pabuaran Asri 2 Blok A18 No.1 Pabuaran Cibinong Bogor', '085776932047', '23232743848711', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksisewa`
--

CREATE TABLE IF NOT EXISTS `transaksisewa` (
  `NoTransaksi` varchar(5) NOT NULL,
  `TglPesan` date NOT NULL,
  `TglPinjam` date NOT NULL,
  `JamPinjam` time NOT NULL,
  `TglKembaliRencana` date NOT NULL,
  `JamKembaliRencana` time NOT NULL,
  `TglKembaliRealisasi` date NOT NULL,
  `JamKembaliRealisasi` time NOT NULL,
  `Denda` int(11) NOT NULL,
  `KilometerPinjam` int(11) NOT NULL,
  `KilometerKembali` int(11) NOT NULL,
  `BBMpinjam` int(11) NOT NULL,
  `BBMkembali` int(11) NOT NULL,
  `KondisiMobilPinjam` text NOT NULL,
  `KondisiMobilKembali` text NOT NULL,
  `Kerusakan` text NOT NULL,
  `BiayaKerusakan` int(11) NOT NULL,
  `BiayaBBM` int(11) NOT NULL,
  PRIMARY KEY (`NoTransaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `IdType` varchar(5) NOT NULL,
  `NmType` text NOT NULL,
  PRIMARY KEY (`IdType`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
