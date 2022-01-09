-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 02:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060841_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_nhanvien`
--

CREATE TABLE `db_nhanvien` (
  `maNV` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(20) NOT NULL,
  `chucvu` varchar(20) NOT NULL,
  `phongban` varchar(20) NOT NULL,
  `luong` float DEFAULT NULL,
  `ngayvaolam` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_nhanvien`
--

INSERT INTO `db_nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Phạm LY', 'nhân viên', 'kinh tế', 10000000, '2022-04-12'),
(2, 'Thùy Ninh ', 'nhân viên', 'phòng kế toán', 20000000, '2022-03-12'),
(3, 'Vũ Nụ ', 'trưởng phòng', 'phòng kế toán', 30000000, '2022-03-20'),
(4, 'Nguyễn B', 'nhân viên', 'phòng chinh trị', 10000000, '2022-07-12'),
(6, 'ngô văn A', 'trưởng phòng', 'phòng kiểm toán', 5000000, '2021-01-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_nhanvien`
--
ALTER TABLE `db_nhanvien`
  ADD PRIMARY KEY (`maNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_nhanvien`
--
ALTER TABLE `db_nhanvien`
  MODIFY `maNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
