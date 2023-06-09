-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 09:56 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ekstra`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota_ekstra`
--

CREATE TABLE `anggota_ekstra` (
  `nim` int(11) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `Username` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL,
  `Nilai` varchar(3) NOT NULL,
  `keaktifan` varchar(1222) NOT NULL,
  `Id_ekstra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota_ekstra`
--

INSERT INTO `anggota_ekstra` (`nim`, `nama`, `Username`, `Password`, `Nilai`, `keaktifan`, `Id_ekstra`) VALUES
(9, 'Valen', 'admin', 'admin', 'B', 'Aktif', 3),
(11, 'Abi ', 'req', 'qer', 'A', 'Sangat aktif', 4),
(12, 'Daffa', 'ter', 'ret', 'B', 'Aktif', 2),
(15, 'Galih', 'bismillah', 'bismillah', 'B', 'Jarang aktif', 2),
(16, 'Aiman', 'bismillah', 'bismillah', 'C', 'Jarang aktif', 4),
(17, 'Valen', 'req', 'qer', 'C', 'Jarang aktif', 3),
(18, 'abi', 'ser', 'res', 'B', 'Aktif', 1),
(19, 'Aiman', 'bismillah', 'bismillah', 'B', 'Aktif', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstra`
--

INSERT INTO `ekstra` (`Id`, `Nama`) VALUES
(1, 'Futsal'),
(2, 'DKV'),
(3, 'Silat'),
(4, 'Basket');

-- --------------------------------------------------------

--
-- Table structure for table `guru_ekstra`
--

CREATE TABLE `guru_ekstra` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(111) NOT NULL,
  `id_ekstra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru_ekstra`
--

INSERT INTO `guru_ekstra` (`ID`, `Nama`, `id_ekstra`) VALUES
(1, 'bu susila', 4),
(2, 'Pak yoga', 2),
(3, 'Pak ucup', 1),
(4, 'Pak kopling', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `tanggal`, `isi`) VALUES
(4, '2023-06-08', 'Assalamualaikum Wr. Wb.\r\nBerikut informasi kegiatan Senin, 05 Juni 2023\r\n\r\n* • Pukul 06.30 - 07.00 WIB*\r\n- Apel pengarahan persiapan UKL & P5\r\n• Pukul 07.OO - 12.00 WIB\r\n- Pelaksaan pendampingan dan finishing project UKL & P5\r\n\r\nNB:\r\n1. Masuk sekolah pukul 06.30 WIB\r\n2. Wajib memakai Almamater, topi, dasi, pantovel, dan ikat pinggang\r\n3. Rambut wajib rapi ukuran 3-2-1\r\n\r\nDemikian informasi disampaikan, \r\n\r\nWassalamualaikum Wr. Wb.'),
(5, '2023-06-09', 'besok '),
(6, '2023-06-12', 'besok k');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `Id semester` int(11) NOT NULL,
  `Nama` varchar(11) NOT NULL,
  `Tahun` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`Id semester`, `Nama`, `Tahun`) VALUES
(1, 'semester 1', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(111) NOT NULL,
  `Kelas` varchar(111) NOT NULL,
  `Jurusan` varchar(111) NOT NULL,
  `Id semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`Id`, `Nama`, `Kelas`, `Jurusan`, `Id semester`) VALUES
(1, 'Aiman wafi\'i an nawal', 'X', 'SIJA', 1),
(2, 'Abi Arrasyid', 'X', 'SIJA', 1),
(3, 'Valentino rossi', 'X', 'TJA', 1),
(4, 'Galih pradana', 'X', 'SIJA', 1),
(5, 'Daffa arkandinov nugroho', 'X', 'SIJA', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_ekstra`
--
ALTER TABLE `anggota_ekstra`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `Id ekstra` (`Id_ekstra`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guru_ekstra`
--
ALTER TABLE `guru_ekstra`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id ekstra` (`id_ekstra`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`Id semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id semester` (`Id semester`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_ekstra`
--
ALTER TABLE `anggota_ekstra`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guru_ekstra`
--
ALTER TABLE `guru_ekstra`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `Id semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota_ekstra`
--
ALTER TABLE `anggota_ekstra`
  ADD CONSTRAINT `anggota_ekstra_ibfk_1` FOREIGN KEY (`Id_ekstra`) REFERENCES `ekstra` (`Id`);

--
-- Constraints for table `guru_ekstra`
--
ALTER TABLE `guru_ekstra`
  ADD CONSTRAINT `guru_ekstra_ibfk_1` FOREIGN KEY (`id_ekstra`) REFERENCES `ekstra` (`Id`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`Id semester`) REFERENCES `semester` (`Id semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
