-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `nomor_antrian` varchar(50) NOT NULL DEFAULT '',
  `status_pasien` varchar(50) DEFAULT NULL,
  `nikbpjs` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `jenis_pelayanan` varchar(50) DEFAULT NULL,
  `status_antrian` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`nomor_antrian`, `status_pasien`, `nikbpjs`, `nama`, `jenis_kelamin`, `jenis_pelayanan`, `status_antrian`, `created_at`) VALUES
('001', 'Biasa', '15486463112', 'Restu Dwi Finansyah', 'Laki-laki', 'Lab', 0, '2024-10-24 19:25:23'),
('002', 'Biasa', '5484785153132', 'Faisal', 'Laki-laki', 'KIA', 0, '2024-10-24 19:29:16'),
('003', 'Biasa', '15144651651', 'Restu Dwi Finansyah', 'Laki-laki', 'Bidan', 0, '2024-10-24 20:23:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`nomor_antrian`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
