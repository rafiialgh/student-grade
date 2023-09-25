-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 25, 2023 at 05:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_grade_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_tables`
--

CREATE TABLE `student_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` int(11) NOT NULL,
  `quiz` double(8,2) NOT NULL,
  `tugas` double(8,2) NOT NULL,
  `absen` double(8,2) NOT NULL,
  `praktek` double(8,2) NOT NULL,
  `uas` double(8,2) NOT NULL,
  `nilai_akhir` double(8,2) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_tables`
--

INSERT INTO `student_tables` (`id`, `nama`, `nim`, `quiz`, `tugas`, `absen`, `praktek`, `uas`, `nilai_akhir`, `grade`, `created_at`, `updated_at`) VALUES
(1, 'Reza', 1002999, 90.50, 87.60, 98.60, 78.87, 79.66, 83.99, 'B', '2023-09-25 08:27:46', '2023-09-25 08:27:46'),
(2, 'Rico', 8991110, 98.66, 87.88, 88.76, 87.66, 98.45, 92.15, 'A', '2023-09-25 08:28:24', '2023-09-25 08:28:24'),
(3, 'Pasha', 9488332, 65.77, 76.55, 65.77, 76.55, 68.66, 72.03, 'C', '2023-09-25 08:29:11', '2023-09-25 08:29:11'),
(4, 'Ayu', 88229991, 43.55, 56.33, 45.44, 43.22, 56.33, 50.03, 'D', '2023-09-25 08:29:44', '2023-09-25 08:29:44'),
(5, 'Nasya', 8599695, 67.53, 87.54, 67.88, 56.77, 98.66, 77.68, 'B', '2023-09-25 08:30:21', '2023-09-25 08:30:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_tables`
--
ALTER TABLE `student_tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_tables`
--
ALTER TABLE `student_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
