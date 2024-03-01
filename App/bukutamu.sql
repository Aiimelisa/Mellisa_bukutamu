-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 04:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `username`, `password`) VALUES
(1, 'aimelisa@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `no` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(25) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `notel` varchar(25) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`no`, `nama`, `kelas`, `jurusan`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `notel`, `waktu`) VALUES
(28, 'Ai melisa', '12', 'rpl', 'swiss', 'perempuan', '2006-01-03', '0812876890', '2024-01-26 08:02:11'),
(29, 'kim seokjin', 'S1', 'Actor', 'seoul ', 'laki laki', '1992-12-04', '32578900', '2024-01-19 03:07:23'),
(31, 'dila', '12', 'Desainer', 'pasirmalang city', 'pr', '2024-02-01', '0812876890', '2024-02-01 02:18:52'),
(34, 'nana', '12', 'rpl', 'prancis city ', 'perempuan', '2024-02-01', '0812876890', '2024-02-01 02:42:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
