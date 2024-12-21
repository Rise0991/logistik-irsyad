-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 02:14 PM
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
-- Database: `db_logistik_irsyad`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_barang_keluar` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id`, `no_barang_keluar`, `kode_barang`, `quantity`, `destination`, `tanggal_keluar`, `created_at`, `updated_at`) VALUES
(1, 1, 'BRG1', 90, 'Bali', '2024-08-12', '2024-12-21 04:59:36', '2024-12-21 04:59:36'),
(2, 2, 'BRG4', 38, 'Jakarta Utara', '2024-02-04', '2024-12-21 05:28:47', '2024-12-21 05:28:47'),
(3, 3, 'BRG6', 30, 'Bandung', '2024-02-14', '2024-12-21 05:29:29', '2024-12-21 05:29:29'),
(4, 4, 'BRG7', 20, 'Depok', '2024-09-09', '2024-12-21 05:30:37', '2024-12-21 05:30:37'),
(5, 5, 'BRG2', 35, 'Magelang', '2024-12-18', '2024-12-21 05:31:09', '2024-12-21 05:31:09'),
(6, 6, 'BRG5', 15, 'Jakarta Selatan', '2024-12-21', '2024-12-21 05:31:43', '2024-12-21 05:31:43');

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_barang_masuk` int(11) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id`, `no_barang_masuk`, `kode_barang`, `quantity`, `origin`, `tanggal_masuk`, `created_at`, `updated_at`) VALUES
(1, 1, 'BRG1', 100, 'Jawa Barat', '2023-12-10', '2024-12-21 04:59:17', '2024-12-21 04:59:17'),
(2, 2, 'BRG2', 70, 'Temanggung', '2024-01-01', '2024-12-21 05:00:38', '2024-12-21 05:00:38'),
(3, 3, 'BRG3', 48, 'Magelang', '2024-04-02', '2024-12-21 05:01:06', '2024-12-21 05:01:06'),
(4, 4, 'BRG4', 85, 'Palu', '2024-04-05', '2024-12-21 05:01:23', '2024-12-21 05:01:23'),
(5, 5, 'BRG5', 15, 'Gorontalo', '2024-05-06', '2024-12-21 05:01:47', '2024-12-21 05:01:47'),
(6, 6, 'BRG6', 40, 'Jakarta Timur', '2024-07-23', '2024-12-21 05:02:32', '2024-12-21 05:02:32'),
(7, 7, 'BRG7', 38, 'Jakarta Utara', '2024-08-17', '2024-12-21 05:02:56', '2024-12-21 05:02:56'),
(8, 8, 'BRG8', 24, 'Jawa Tengah', '2024-08-22', '2024-12-21 05:03:25', '2024-12-21 05:03:25'),
(9, 9, 'BRG9', 64, 'Aceh', '2024-10-20', '2024-12-21 05:27:28', '2024-12-21 05:27:28'),
(10, 10, 'BRG10', 50, 'Purwokerto', '2024-11-08', '2024-12-21 05:28:06', '2024-12-21 05:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `stok`
--

CREATE TABLE `stok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stok`
--

INSERT INTO `stok` (`id`, `kode_barang`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'BRG1', 10, '2024-12-21 04:59:17', '2024-12-21 04:59:36'),
(2, 'BRG2', 35, '2024-12-21 05:00:38', '2024-12-21 05:31:09'),
(3, 'BRG3', 48, '2024-12-21 05:01:06', '2024-12-21 05:01:06'),
(4, 'BRG4', 47, '2024-12-21 05:01:23', '2024-12-21 05:28:47'),
(6, 'BRG6', 10, '2024-12-21 05:02:32', '2024-12-21 05:29:29'),
(7, 'BRG7', 18, '2024-12-21 05:02:56', '2024-12-21 05:30:37'),
(8, 'BRG8', 24, '2024-12-21 05:03:25', '2024-12-21 05:03:25'),
(9, 'BRG9', 64, '2024-12-21 05:27:28', '2024-12-21 05:27:28'),
(10, 'BRG10', 50, '2024-12-21 05:28:06', '2024-12-21 05:28:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stok_kode_barang_unique` (`kode_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok`
--
ALTER TABLE `stok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
