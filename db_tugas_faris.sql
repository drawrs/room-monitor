-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2017 at 01:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tugas_faris`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id` int(10) NOT NULL,
  `kode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('OoO','Occupied','VD','VC','VCI') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `kode`, `nama`, `status`, `tanggal`, `keterangan`, `created_at`, `updated_at`) VALUES
(5, '103', 'Kamar A', 'VCI', '2017-11-05', 'Kamarnya bagus Kok', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(6, '104', 'Kamar B', 'VCI', '2017-11-05', 'lengkap bagnet deh', '2017-11-05 15:41:48', '2017-11-05 15:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_28_145135_CreateKamarTable', 1),
(4, '2017_10_28_145158_CreatePropertiTable', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE `properti` (
  `id` int(10) UNSIGNED NOT NULL,
  `kamar_id` int(10) NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ada','tidak','rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`id`, `kamar_id`, `judul`, `status`, `created_at`, `updated_at`) VALUES
(10, 5, 'Entrance', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(11, 5, 'Door', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(12, 5, 'Door frame', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(13, 5, 'Door lock', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(14, 5, 'Electric box', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(15, 5, 'Wooden hanger', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(16, 5, 'Sliper', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(17, 5, 'Laundry bag', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(18, 5, 'Laundry list', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(19, 5, 'Hair dryer', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(20, 5, 'Safe box', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(21, 5, 'Lugage rack', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(22, 5, 'Refrigenerator', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(23, 5, 'Khitchen set', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(24, 5, 'Tea cup & Saucer', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(25, 5, 'Tea spoons', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(26, 5, 'Coffe tray', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(27, 5, 'ashtray', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(28, 5, 'Sugar Container', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(29, 5, 'Ceffe set', 'ada', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(30, 5, 'Kettle jug', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(31, 5, 'Mineral water', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(32, 5, 'Sofa / Chair', 'tidak', '2017-11-05 15:39:35', '2017-11-05 15:39:35'),
(33, 5, 'Coffe table / Writing table', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(34, 5, 'Bed & sheet', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(35, 5, 'Bed Skirting / Frame', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(36, 5, 'Under bed', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(37, 5, 'HeadBoard', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(38, 5, 'Pillow & Pillow case', 'tidak', '2017-11-05 15:39:36', '2017-11-05 15:39:36'),
(39, 6, 'Entrance', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(40, 6, 'Door', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(41, 6, 'Door frame', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(42, 6, 'Door lock', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(43, 6, 'Electric box', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(44, 6, 'Wooden hanger', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(45, 6, 'Sliper', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(46, 6, 'Laundry bag', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(47, 6, 'Laundry list', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(48, 6, 'Hair dryer', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(49, 6, 'Safe box', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(50, 6, 'Lugage rack', 'tidak', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(51, 6, 'Refrigenerator', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(52, 6, 'Khitchen set', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(53, 6, 'Tea cup & Saucer', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(54, 6, 'Tea spoons', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(55, 6, 'Coffe tray', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(56, 6, 'ashtray', 'ada', '2017-11-05 15:41:48', '2017-11-05 15:41:48'),
(57, 6, 'Sugar Container', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(58, 6, 'Ceffe set', 'ada', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(59, 6, 'Kettle jug', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(60, 6, 'Mineral water', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(61, 6, 'Sofa / Chair', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(62, 6, 'Coffe table / Writing table', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(63, 6, 'Bed & sheet', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(64, 6, 'Bed Skirting / Frame', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(65, 6, 'Under bed', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(66, 6, 'HeadBoard', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49'),
(67, 6, 'Pillow & Pillow case', 'tidak', '2017-11-05 15:41:49', '2017-11-05 15:41:49');

-- --------------------------------------------------------

--
-- Table structure for table `properti_default`
--

CREATE TABLE `properti_default` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ada','tidak','rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properti_default`
--

INSERT INTO `properti_default` (`id`, `judul`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Entrance', 'tidak', NULL, '2017-11-02 01:53:39'),
(3, 'Door', 'tidak', NULL, '2017-11-02 00:52:35'),
(4, 'Door frame', 'ada', NULL, '2017-11-02 01:53:40'),
(5, 'Door lock', 'tidak', NULL, '2017-11-02 01:49:42'),
(6, 'Electric box', 'ada', NULL, '2017-11-02 01:49:42'),
(7, 'Wooden hanger', 'tidak', '2017-10-28 17:54:35', '2017-11-02 01:49:42'),
(8, 'Sliper', 'ada', '2017-10-28 17:57:25', '2017-11-02 01:49:42'),
(9, 'Laundry bag', 'tidak', '2017-10-28 17:57:51', '2017-10-28 17:57:51'),
(10, 'Laundry list', 'ada', NULL, NULL),
(11, 'Hair dryer', 'ada', NULL, NULL),
(12, 'Safe box', 'ada', NULL, NULL),
(13, 'Lugage rack', 'tidak', NULL, NULL),
(14, 'Refrigenerator', 'ada', NULL, NULL),
(15, 'Khitchen set', 'ada', NULL, NULL),
(16, 'Tea cup & Saucer', 'ada', NULL, NULL),
(17, 'Tea spoons', 'ada', NULL, NULL),
(18, 'Coffe tray', 'ada', NULL, NULL),
(19, 'ashtray', 'ada', NULL, NULL),
(20, 'Sugar Container', 'tidak', NULL, NULL),
(21, 'Ceffe set', 'ada', NULL, NULL),
(22, 'Kettle jug', 'tidak', NULL, NULL),
(23, 'Mineral water', 'tidak', NULL, NULL),
(24, 'Sofa / Chair', 'tidak', NULL, NULL),
(25, 'Coffe table / Writing table', 'tidak', NULL, NULL),
(26, 'Bed & sheet', 'tidak', NULL, NULL),
(27, 'Bed Skirting / Frame', 'tidak', NULL, NULL),
(28, 'Under bed', 'tidak', NULL, NULL),
(29, 'HeadBoard', 'tidak', NULL, NULL),
(30, 'Pillow & Pillow case', 'tidak', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$qvO8S.IuayIfT/.SMB9LoeQCPz.eXG3Db3Z8g8QVQqlPcUJIY9yVG', 'bW0D17EI7laCarRGGGLbfPkOBs3mlwLTb3Vz9hMmAdvIi7y1RJoZlEJ0rs1z', '2017-11-05 03:05:57', '2017-11-05 03:05:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `properti`
--
ALTER TABLE `properti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id` (`kamar_id`);

--
-- Indexes for table `properti_default`
--
ALTER TABLE `properti_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `properti`
--
ALTER TABLE `properti`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `properti_default`
--
ALTER TABLE `properti_default`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `properti`
--
ALTER TABLE `properti`
  ADD CONSTRAINT `properti_ibfk_1` FOREIGN KEY (`kamar_id`) REFERENCES `kamar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
