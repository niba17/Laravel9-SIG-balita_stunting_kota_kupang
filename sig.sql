-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 04:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasus`
--

CREATE TABLE `kasus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kelurahan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sasaran` bigint(20) NOT NULL,
  `j_b_diukur` bigint(20) NOT NULL,
  `s_pendek` bigint(20) NOT NULL,
  `pendek` bigint(20) NOT NULL,
  `normal` bigint(20) NOT NULL,
  `tinggi` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL,
  `presentase` decimal(11,1) NOT NULL,
  `tahun` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kasus`
--

INSERT INTO `kasus` (`id`, `kelurahan_id`, `sasaran`, `j_b_diukur`, `s_pendek`, `pendek`, `normal`, `tinggi`, `total`, `presentase`, `tahun`, `created_at`, `updated_at`) VALUES
(64, 33, 331, 223, 46, 64, 112, 1, 110, '49.3', 2021, '2022-11-05 23:10:45', '2022-11-05 23:10:45'),
(65, 43, 643, 343, 23, 80, 240, 0, 103, '30.0', 2021, '2022-11-05 23:12:13', '2022-11-05 23:12:13'),
(66, 44, 491, 243, 20, 51, 172, 0, 71, '29.2', 2021, '2022-11-05 23:13:38', '2022-11-05 23:13:38'),
(67, 46, 618, 529, 5, 47, 477, 0, 52, '9.8', 2021, '2022-11-05 23:14:56', '2022-11-05 23:14:56'),
(68, 47, 144, 153, 0, 2, 151, 0, 2, '1.3', 2021, '2022-11-05 23:15:52', '2022-11-05 23:15:52'),
(69, 48, 337, 289, 7, 48, 233, 1, 55, '19.0', 2021, '2022-11-05 23:16:44', '2022-11-05 23:16:44'),
(70, 49, 295, 228, 0, 19, 209, 0, 19, '8.3', 2021, '2022-11-05 23:18:02', '2022-11-05 23:18:02'),
(71, 50, 968, 481, 12, 36, 432, 1, 48, '10.0', 2021, '2022-11-05 23:19:11', '2022-11-05 23:19:11'),
(72, 51, 459, 371, 6, 42, 323, 0, 48, '12.9', 2021, '2022-11-05 23:20:03', '2022-11-05 23:20:03'),
(73, 52, 707, 517, 40, 80, 393, 4, 120, '23.2', 2021, '2022-11-05 23:21:21', '2022-11-05 23:21:21'),
(74, 53, 74, 71, 4, 6, 61, 0, 10, '14.1', 2021, '2022-11-05 23:22:17', '2022-11-05 23:22:17'),
(75, 54, 271, 221, 7, 31, 183, 0, 38, '17.2', 2021, '2022-11-05 23:23:10', '2022-11-05 23:23:10'),
(76, 55, 780, 373, 58, 100, 213, 2, 158, '42.4', 2021, '2022-11-05 23:24:19', '2022-11-05 23:24:19'),
(77, 56, 1092, 612, 41, 146, 422, 3, 187, '30.6', 2021, '2022-11-05 23:25:09', '2022-11-05 23:25:09'),
(78, 57, 716, 331, 40, 71, 220, 0, 111, '33.5', 2021, '2022-11-05 23:26:07', '2022-11-05 23:26:07'),
(79, 58, 457, 270, 27, 59, 182, 2, 86, '31.9', 2021, '2022-11-05 23:27:13', '2022-11-05 23:27:13'),
(80, 59, 1009, 496, 37, 126, 332, 1, 163, '32.9', 2021, '2022-11-05 23:28:04', '2022-11-05 23:28:04'),
(81, 60, 453, 150, 10, 30, 110, 0, 40, '26.7', 2021, '2022-11-05 23:28:55', '2022-11-05 23:28:55'),
(82, 61, 373, 305, 28, 64, 212, 1, 92, '30.2', 2021, '2022-11-05 23:29:44', '2022-11-05 23:29:44'),
(83, 95, 514, 455, 2, 55, 397, 1, 57, '12.5', 2021, '2022-11-05 23:30:44', '2022-11-05 23:30:44'),
(84, 63, 709, 419, 115, 117, 187, 0, 232, '55.4', 2021, '2022-11-05 23:32:05', '2022-11-05 23:32:05'),
(85, 64, 337, 101, 8, 28, 65, 0, 36, '35.6', 2021, '2022-11-05 23:33:07', '2022-11-05 23:33:07'),
(86, 65, 656, 148, 16, 20, 112, 0, 36, '24.3', 2021, '2022-11-05 23:33:51', '2022-11-05 23:33:51'),
(87, 66, 657, 166, 14, 31, 120, 1, 45, '27.1', 2021, '2022-11-05 23:34:47', '2022-11-05 23:34:47'),
(88, 67, 592, 200, 17, 26, 156, 1, 43, '21.5', 2021, '2022-11-05 23:36:51', '2022-11-05 23:36:51'),
(89, 68, 284, 105, 2, 13, 89, 1, 15, '14.3', 2021, '2022-11-05 23:38:04', '2022-11-05 23:38:04'),
(90, 69, 380, 90, 6, 17, 64, 3, 23, '25.6', 2021, '2022-11-05 23:38:52', '2022-11-05 23:38:52'),
(91, 70, 375, 82, 9, 12, 60, 1, 21, '25.6', 2021, '2022-11-05 23:39:38', '2022-11-05 23:39:38'),
(92, 71, 326, 135, 4, 29, 102, 0, 33, '24.4', 2021, '2022-11-05 23:40:20', '2022-11-05 23:40:20'),
(93, 72, 1051, 342, 27, 76, 238, 1, 103, '30.1', 2021, '2022-11-05 23:41:26', '2022-11-05 23:41:26'),
(94, 73, 629, 215, 17, 35, 162, 1, 52, '24.2', 2021, '2022-11-05 23:42:22', '2022-11-05 23:42:22'),
(95, 74, 608, 152, 17, 24, 111, 0, 41, '27.0', 2021, '2022-11-05 23:43:17', '2022-11-05 23:43:17'),
(96, 75, 858, 297, 27, 50, 219, 1, 77, '25.9', 2021, '2022-11-05 23:44:31', '2022-11-05 23:44:31'),
(97, 90, 355, 118, 11, 22, 85, 0, 33, '28.0', 2021, '2022-11-05 23:45:28', '2022-11-05 23:45:28'),
(98, 91, 718, 238, 17, 48, 173, 0, 65, '27.3', 2021, '2022-11-05 23:46:21', '2022-11-05 23:46:21'),
(99, 92, 1008, 265, 16, 42, 207, 0, 58, '21.9', 2021, '2022-11-05 23:48:43', '2022-11-05 23:48:43'),
(100, 76, 94, 50, 4, 7, 38, 1, 11, '22.0', 2021, '2022-11-05 23:49:55', '2022-11-05 23:49:55'),
(101, 77, 23, 16, 1, 4, 11, 0, 5, '31.3', 2021, '2022-11-05 23:50:40', '2022-11-05 23:50:40'),
(102, 78, 150, 92, 9, 23, 58, 2, 32, '34.8', 2021, '2022-11-05 23:52:26', '2022-11-05 23:52:26'),
(103, 79, 127, 87, 9, 21, 55, 2, 30, '34.5', 2021, '2022-11-05 23:53:33', '2022-11-05 23:53:33'),
(104, 80, 164, 94, 9, 18, 65, 2, 27, '28.7', 2021, '2022-11-05 23:54:18', '2022-11-05 23:54:18'),
(105, 96, 56, 8, 1, 3, 4, 0, 4, '50.0', 2021, '2022-11-05 23:55:02', '2022-11-06 00:35:24'),
(106, 82, 190, 64, 3, 9, 51, 1, 12, '18.8', 2021, '2022-11-05 23:56:21', '2022-11-05 23:56:21'),
(107, 88, 129, 97, 5, 17, 73, 2, 22, '22.7', 2021, '2022-11-05 23:58:08', '2022-11-05 23:58:08'),
(108, 89, 401, 257, 14, 51, 191, 1, 65, '25.3', 2021, '2022-11-05 23:58:58', '2022-11-05 23:58:58'),
(109, 84, 675, 195, 22, 40, 132, 1, 62, '31.8', 2021, '2022-11-05 23:59:53', '2022-11-05 23:59:53'),
(110, 93, 1068, 347, 26, 65, 255, 1, 91, '26.2', 2021, '2022-11-06 00:00:53', '2022-11-06 00:00:53'),
(111, 85, 618, 317, 29, 63, 225, 0, 92, '29.0', 2021, '2022-11-06 00:02:05', '2022-11-06 00:02:05'),
(112, 86, 190, 80, 1, 8, 71, 0, 9, '11.3', 2021, '2022-11-06 00:03:17', '2022-11-06 00:03:17'),
(113, 87, 952, 337, 43, 80, 211, 3, 123, '36.5', 2021, '2022-11-06 00:04:02', '2022-11-06 00:04:02'),
(114, 33, 312, 272, 33, 79, 160, 0, 112, '41.2', 2022, '2022-11-06 01:17:01', '2022-11-06 01:17:01'),
(115, 43, 583, 447, 20, 77, 348, 2, 97, '21.7', 2022, '2022-11-06 01:18:50', '2022-11-06 01:18:50'),
(116, 44, 517, 275, 24, 56, 195, 0, 80, '29.1', 2022, '2022-11-06 01:19:45', '2022-11-06 01:19:45'),
(117, 46, 654, 520, 12, 42, 466, 0, 54, '10.4', 2022, '2022-11-06 01:21:38', '2022-11-06 01:21:38'),
(118, 47, 152, 130, 0, 2, 128, 0, 2, '1.5', 2022, '2022-11-06 01:23:08', '2022-11-06 01:23:08'),
(119, 48, 359, 276, 2, 31, 243, 0, 33, '12.0', 2022, '2022-11-06 01:26:45', '2022-11-06 01:26:45'),
(120, 49, 278, 213, 1, 11, 201, 0, 12, '5.6', 2022, '2022-11-06 01:27:37', '2022-11-06 01:27:37'),
(121, 50, 802, 625, 20, 42, 563, 0, 62, '9.9', 2022, '2022-11-06 01:28:34', '2022-11-06 01:28:34'),
(122, 51, 527, 439, 6, 29, 404, 0, 35, '8.0', 2022, '2022-11-06 01:29:21', '2022-11-06 01:29:21'),
(123, 52, 711, 592, 17, 85, 490, 0, 102, '17.2', 2022, '2022-11-06 01:30:27', '2022-11-06 01:30:27'),
(124, 53, 78, 70, 2, 8, 60, 0, 10, '14.3', 2022, '2022-11-06 01:31:25', '2022-11-06 01:31:25'),
(125, 54, 277, 239, 10, 32, 197, 0, 42, '17.6', 2022, '2022-11-06 01:32:11', '2022-11-06 01:32:11'),
(126, 55, 704, 430, 48, 131, 250, 1, 179, '41.6', 2022, '2022-11-06 01:33:21', '2022-11-06 01:33:21'),
(127, 56, 1019, 755, 58, 178, 516, 3, 236, '31.3', 2022, '2022-11-06 01:34:21', '2022-11-06 01:34:21'),
(128, 57, 653, 450, 48, 108, 291, 3, 156, '34.7', 2022, '2022-11-06 01:35:24', '2022-11-06 01:35:24'),
(129, 58, 461, 285, 23, 82, 179, 1, 105, '36.8', 2022, '2022-11-06 01:36:25', '2022-11-06 01:36:25'),
(130, 59, 1056, 604, 49, 130, 424, 1, 179, '29.6', 2022, '2022-11-06 01:37:20', '2022-11-06 01:37:20'),
(131, 60, 434, 203, 12, 51, 139, 1, 63, '31.0', 2022, '2022-11-06 01:38:12', '2022-11-06 01:38:12'),
(132, 61, 314, 275, 35, 66, 174, 0, 101, '36.7', 2022, '2022-11-06 01:39:06', '2022-11-06 01:39:06'),
(133, 95, 500, 393, 29, 68, 295, 1, 97, '24.7', 2022, '2022-11-06 01:40:02', '2022-11-06 01:40:02'),
(134, 63, 571, 422, 49, 107, 265, 1, 156, '37.0', 2022, '2022-11-06 01:40:50', '2022-11-06 01:40:50'),
(135, 64, 369, 111, 10, 29, 69, 3, 39, '35.1', 2022, '2022-11-06 02:32:01', '2022-11-06 02:32:01'),
(136, 65, 358, 282, 5, 9, 265, 3, 14, '5.0', 2022, '2022-11-06 02:32:56', '2022-11-06 02:32:56'),
(137, 66, 444, 229, 22, 35, 171, 1, 57, '24.9', 2022, '2022-11-06 02:33:42', '2022-11-06 02:33:42'),
(138, 67, 500, 211, 14, 31, 165, 1, 45, '21.3', 2022, '2022-11-06 02:34:40', '2022-11-06 02:34:40'),
(139, 68, 201, 113, 1, 13, 99, 0, 14, '12.4', 2022, '2022-11-06 02:35:35', '2022-11-06 02:35:35'),
(140, 69, 311, 134, 9, 24, 99, 2, 33, '24.6', 2022, '2022-11-06 02:36:25', '2022-11-06 02:36:25'),
(141, 70, 164, 154, 8, 10, 132, 4, 18, '11.7', 2022, '2022-11-06 02:37:11', '2022-11-06 02:37:11'),
(142, 71, 277, 126, 8, 17, 101, 0, 25, '19.8', 2022, '2022-11-06 02:38:53', '2022-11-06 02:38:53'),
(143, 72, 1128, 522, 28, 118, 374, 2, 146, '28.0', 2022, '2022-11-06 02:40:03', '2022-11-06 02:40:03'),
(144, 73, 696, 353, 31, 79, 241, 2, 110, '31.2', 2022, '2022-11-06 02:41:32', '2022-11-06 02:41:32'),
(145, 74, 661, 247, 13, 33, 198, 3, 46, '18.6', 2022, '2022-11-06 02:42:41', '2022-11-06 02:42:41'),
(146, 75, 893, 280, 20, 44, 213, 3, 64, '22.9', 2022, '2022-11-06 02:46:31', '2022-11-06 02:46:31'),
(147, 90, 310, 157, 8, 40, 109, 0, 48, '30.6', 2022, '2022-11-06 02:48:09', '2022-11-06 02:48:09'),
(148, 91, 693, 322, 43, 73, 204, 2, 116, '36.0', 2022, '2022-11-06 02:49:52', '2022-11-06 02:49:52'),
(149, 92, 998, 405, 26, 88, 291, 0, 114, '28.1', 2022, '2022-11-06 02:50:36', '2022-11-06 02:50:36'),
(150, 76, 86, 84, 4, 15, 64, 1, 19, '22.6', 2022, '2022-11-06 02:51:34', '2022-11-06 02:51:34'),
(151, 77, 24, 23, 0, 5, 18, 0, 5, '21.7', 2022, '2022-11-06 02:52:19', '2022-11-06 02:52:19'),
(152, 78, 120, 118, 7, 21, 90, 0, 28, '23.7', 2022, '2022-11-06 02:53:17', '2022-11-06 02:53:17'),
(153, 79, 131, 131, 6, 17, 108, 0, 23, '17.6', 2022, '2022-11-06 02:54:25', '2022-11-06 02:54:25'),
(154, 80, 155, 155, 7, 20, 128, 0, 27, '17.4', 2022, '2022-11-06 02:55:14', '2022-11-06 02:55:14'),
(155, 96, 64, 45, 3, 1, 40, 1, 4, '8.9', 2022, '2022-11-06 02:56:12', '2022-11-06 02:56:12'),
(156, 82, 194, 151, 17, 34, 100, 0, 51, '33.8', 2022, '2022-11-06 02:58:11', '2022-11-06 02:58:11'),
(157, 83, 197, 156, 12, 28, 116, 0, 40, '25.6', 2022, '2022-11-06 02:59:06', '2022-11-06 02:59:06'),
(158, 88, 139, 120, 5, 12, 102, 1, 17, '14.2', 2022, '2022-11-06 03:00:13', '2022-11-06 03:00:13'),
(159, 89, 406, 326, 13, 54, 258, 1, 67, '20.6', 2022, '2022-11-06 03:01:49', '2022-11-06 03:01:49'),
(160, 84, 552, 469, 42, 105, 318, 3, 147, '31.3', 2022, '2022-11-06 03:02:44', '2022-11-06 03:02:44'),
(161, 93, 867, 729, 62, 159, 504, 4, 221, '30.3', 2022, '2022-11-06 03:04:15', '2022-11-06 03:04:15'),
(162, 85, 516, 371, 29, 81, 261, 0, 110, '29.6', 2022, '2022-11-06 03:05:13', '2022-11-06 03:05:13'),
(163, 86, 129, 103, 5, 13, 84, 1, 18, '17.5', 2022, '2022-11-06 03:06:23', '2022-11-06 03:06:23'),
(164, 87, 898, 708, 73, 177, 456, 2, 250, '35.3', 2022, '2022-11-06 03:07:32', '2022-11-06 03:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `geojson` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warna_fill` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `geojson`, `warna_fill`, `created_at`, `updated_at`) VALUES
(28, 'Kota Radja', 'kota-raja.geojson', '#2600ff', '2022-10-26 09:30:17', '2022-10-26 20:32:22'),
(29, 'Oebobo', 'oebobo.geojson', '#42ffe2', '2022-10-26 09:30:29', '2022-10-26 20:49:55'),
(30, 'Kota Lama', 'kota-lama.geojson', '#00ff0c', '2022-10-26 09:30:48', '2022-10-26 20:32:46'),
(31, 'Kelapa Lima', 'kelapa-lima.geojson', '#ffff00', '2022-10-26 09:31:00', '2022-10-26 20:33:00'),
(35, 'Maulafa', 'maulafa.geojson', '#ffa200', '2022-10-28 00:45:40', '2022-11-06 00:25:24'),
(37, 'Alak', 'alak.geojson', '#db1a1a', '2022-10-29 13:22:17', '2022-11-06 00:24:55');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puskesmas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `geojson` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama`, `puskesmas_id`, `geojson`, `created_at`, `updated_at`) VALUES
(33, 'Naioni', 31, 'naioni.geojson', '2022-10-01 16:55:24', '2022-11-04 20:50:42'),
(43, 'Manulai II', 31, 'manulai-II.geojson', '2022-10-26 09:34:48', '2022-11-04 20:56:40'),
(44, 'Batuplat', 31, 'batuplat.geojson', '2022-10-26 09:34:59', '2022-11-05 22:40:13'),
(46, 'Alak', 40, 'alak.geojson', '2022-10-29 14:22:18', '2022-11-05 22:40:27'),
(47, 'Nunhila', 40, 'nunhila.geojson', '2022-10-29 14:24:13', '2022-11-05 22:40:49'),
(48, 'Nunbaun Delha', 40, 'nunbaun-delha.geojson', '2022-10-29 14:24:40', '2022-11-05 22:42:22'),
(49, 'Nunbaun Sabu', 40, 'nunbaun-sabu.geojson', '2022-10-29 14:24:55', '2022-11-05 22:43:24'),
(50, 'Namosain', 40, 'namosain.geojson', '2022-10-29 14:25:26', '2022-11-05 22:45:53'),
(51, 'Penkase-Oeleta', 40, 'penkase-oeleta.geojson', '2022-10-29 14:25:52', '2022-11-05 22:46:33'),
(52, 'Manutapen', 41, 'manutapen.geojson', '2022-10-29 14:26:06', '2022-11-05 22:47:25'),
(53, 'Mantasi', 41, 'mantasi.geojson', '2022-10-29 14:26:23', '2022-11-05 22:47:56'),
(54, 'Fatufeto', 41, 'fatufeto.geojson', NULL, '2022-11-05 22:48:31'),
(55, 'Fatukoa', 32, 'fatukoa.geojson', NULL, '2022-11-04 20:58:28'),
(56, 'Sikumana', 32, 'sikumana.geojson', NULL, '2022-11-05 22:49:00'),
(57, 'Bello', 32, 'bello.geojson', NULL, '2022-11-05 22:49:31'),
(58, 'Kolhua', 32, 'kolhua.geojson', NULL, '2022-11-05 22:49:59'),
(59, 'Oepura', 32, 'oepura.geojson', NULL, '2022-11-05 22:50:33'),
(60, 'Naikolan', 32, 'naikolan.geojson', NULL, '2022-11-05 22:50:55'),
(61, 'Penfui', 33, 'penfui.geojson', NULL, '2022-11-05 22:51:20'),
(63, 'Maulafa', 33, 'maulafa.geojson', NULL, '2022-11-05 22:53:39'),
(64, 'Bakunase', 34, 'bakunase.geojson', NULL, '2022-11-05 22:54:09'),
(65, 'Bakunase II', 34, 'bakunase-II.geojson', NULL, '2022-11-05 22:56:11'),
(66, 'Air nona', 34, 'airnona.geojson', NULL, '2022-11-05 22:56:47'),
(67, 'Naikoten I', 34, 'naikoten-I.geojson', NULL, '2022-11-05 22:57:21'),
(68, 'Naikoten II', 34, 'naikoten-II.geojson', NULL, '2022-11-05 22:57:47'),
(69, 'Kuanino', 34, 'kuanino.geojson', NULL, '2022-11-05 22:58:11'),
(70, 'Nunleu', 34, 'nunleu.geojson', NULL, '2022-11-05 22:58:44'),
(71, 'Fontein', 34, 'fontein.geojson', NULL, '2022-11-05 22:59:05'),
(72, 'Oebufu', 35, 'oebufu.geojson', NULL, '2022-11-05 22:59:31'),
(73, 'Tuak Daun Merah', 35, 'tuak-daun-merah.geojson', NULL, '2022-11-04 20:57:32'),
(74, 'Kayu Putih', 35, 'kayu-putih.geojson', NULL, '2022-11-04 21:53:40'),
(75, 'Liliba', 35, 'liliba.geojson', NULL, '2022-11-05 22:59:56'),
(76, 'Air Mata', 37, 'airmata.geojson', NULL, '2022-11-05 23:00:16'),
(77, 'Lahilai Bissi Kopan', 37, 'lahilai-bissi-kopan.geojson', NULL, '2022-11-05 23:00:45'),
(78, 'Bonipoi', 37, 'bonipoi.geojson', NULL, '2022-11-05 23:01:06'),
(79, 'Merdeka', 37, 'merdeka.geojson', NULL, '2022-11-05 23:01:32'),
(80, 'Solor', 37, 'solor.geojson', NULL, '2022-11-05 23:02:02'),
(82, 'Oeba', 38, 'oeba.geojson', NULL, '2022-11-05 23:02:43'),
(83, 'Fatubesi', 38, 'fatubesi.geojson', NULL, '2022-11-05 23:03:05'),
(84, 'Kelapa Lima', 39, 'kelapa-lima.geojson', '2022-10-29 15:03:16', '2022-11-05 23:03:32'),
(85, 'Oesapa Barat', 39, 'oesapa-barat.geojson', '2022-10-29 15:03:31', '2022-11-05 23:03:55'),
(86, 'Oesapa Selatan', 39, 'oesapa-selatan.geojson', '2022-10-29 15:03:47', '2022-11-05 23:04:22'),
(87, 'Lasiana', 39, 'lasiana.geojson', '2022-10-29 15:04:03', '2022-11-05 23:04:46'),
(88, 'Nefonaek', 38, 'nefonaek.geojson', '2022-10-29 15:04:37', '2022-11-05 23:05:13'),
(89, 'Pasir Panjang', 38, 'pasir-panjang.geojson', '2022-10-29 15:04:55', '2022-11-05 23:05:36'),
(90, 'Oetete', 36, 'oetete.geojson', '2022-10-29 15:05:34', '2022-11-05 23:06:01'),
(91, 'Oebobo', 36, 'oebobo.geojson', '2022-10-29 15:05:56', '2022-11-05 23:06:26'),
(92, 'Fatululi', 36, 'fatululi.geojson', '2022-10-29 15:06:08', '2022-11-05 23:06:48'),
(93, 'Oesapa', 39, 'oesapa.geojson', '2022-10-29 15:10:29', '2022-11-05 22:43:02'),
(95, 'Naimata', 33, 'naimata.geojson', '2022-11-05 22:39:45', '2022-11-05 22:39:45'),
(96, 'Todekisar', 38, 'tode-kisar.geojson', '2022-11-06 00:33:27', '2022-11-06 00:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_19_134504_make_kasus_table', 1),
(3, '2022_09_19_145703_create_puskesmas_table', 2),
(4, '2022_09_19_150923_create_kecamatan_table', 3),
(6, '2022_09_19_151045_create_kelurahan_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `puskesmas`
--

CREATE TABLE `puskesmas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan_id` bigint(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `puskesmas`
--

INSERT INTO `puskesmas` (`id`, `nama`, `kecamatan_id`, `created_at`, `updated_at`) VALUES
(31, 'Naioni', 37, '2022-10-26 09:32:22', '2022-10-29 13:22:46'),
(32, 'Sikumana', 35, '2022-10-27 23:07:55', '2022-10-28 00:46:20'),
(33, 'Penfui', 35, '2022-10-29 14:18:00', '2022-10-29 14:18:00'),
(34, 'Bakunase', 28, '2022-10-29 14:19:21', '2022-10-29 14:19:21'),
(35, 'Oepoi', 29, '2022-10-29 14:19:39', '2022-10-29 14:19:39'),
(36, 'Oebobo', 29, '2022-10-29 14:20:00', '2022-10-29 14:20:00'),
(37, 'Kupang Kota', 30, '2022-10-29 14:20:25', '2022-10-29 14:20:25'),
(38, 'Pasir Panjang', 30, '2022-10-29 14:20:42', '2022-10-29 14:20:42'),
(39, 'Oesapa', 31, '2022-10-29 14:21:06', '2022-10-29 14:21:06'),
(40, 'Alak', 37, '2022-10-29 14:23:00', '2022-10-29 14:23:00'),
(41, 'Manutapen', 37, '2022-10-29 14:23:17', '2022-10-29 14:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$OTSgBSHGhURLJdQq6TYuAefw/vwKrCRISTGw/xv8QRsXc0V6N5hwS', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasus`
--
ALTER TABLE `kasus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `puskesmas_id` (`puskesmas_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kasus`
--
ALTER TABLE `kasus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `puskesmas`
--
ALTER TABLE `puskesmas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasus`
--
ALTER TABLE `kasus`
  ADD CONSTRAINT `kasus_ibfk_1` FOREIGN KEY (`kelurahan_id`) REFERENCES `kelurahan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD CONSTRAINT `kelurahan_ibfk_2` FOREIGN KEY (`puskesmas_id`) REFERENCES `puskesmas` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `puskesmas`
--
ALTER TABLE `puskesmas`
  ADD CONSTRAINT `puskesmas_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
