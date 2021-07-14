-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 07:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himmsi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(10) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id_admin`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Linda', 'lindatari', '$2y$10$LcyX5rAsK2291s0ohA5qtOEG.xyfDH2z4rFGxVmKih8cA8t6TPcVK', NULL, '2021-07-13 19:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id_alternatif` int(10) UNSIGNED NOT NULL,
  `nama_calon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pilihan_sie` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id_alternatif`, `nama_calon`, `nim`, `kelas`, `alamat`, `pilihan_sie`, `created_at`, `updated_at`) VALUES
(1, 'Rian', '19.12.1141', '19-S1 Si-03', 'Palembang', 'Sie KSK', NULL, NULL),
(2, 'Bligania', '19.12.1065', '19-S1 SI-02', 'Kalasan, Jogja', 'Sie Humas', '2021-06-26 00:31:39', '2021-06-26 00:31:39'),
(3, 'Heni Putri Cahyanti', '19.02.0487', '19-D3 MI-02', 'Cilacap', 'Sie Konsumsi', '2021-06-26 00:38:05', '2021-06-26 00:38:05'),
(4, 'Andi Sutra Kusumaningrum', '19.02.0436', '19-D3 MI-02', 'Klaten', 'Sie Konsumsi', '2021-06-26 00:40:58', '2021-06-26 00:40:58'),
(5, 'Elham Pangestu Wibisono Saputro', '19.12.1145', '19-S1 SI-03', 'Sragen', 'Sie Humas', '2021-06-26 00:43:34', '2021-06-26 00:43:34'),
(6, 'Lutfiarsyah Gustama Afna', '19.12.1423', '19-SI-07', 'Tangerang', 'Sie Acara', '2021-07-12 16:41:17', '2021-07-12 16:41:17'),
(7, 'Muhammad Arif Apriansyah', '19.62.0137', '19-BCIS-01', 'Lampung', 'Sie Acara', '2021-07-12 16:42:18', '2021-07-12 16:42:18'),
(8, 'Sirul Hidayati', '19.12.1222', '19-SI-04', 'NTB', 'Sie Perlengkapan', '2021-07-12 16:43:33', '2021-07-12 16:43:33'),
(9, 'Lutfhfy Rahmansyah', '19.12.1247', '19-SI-04', 'Jakarta', 'Sie Acara', '2021-07-12 16:44:34', '2021-07-12 16:44:34'),
(10, 'Essy Ramadhanty', '19.12.1821', '19-SI-05', 'Bengkulu', 'Sie KSK', '2021-07-12 16:46:03', '2021-07-12 16:46:03'),
(11, 'Ferry Fakhrudin', '19.12.1405', '19-SI-07', 'Ngawi', 'Sie Humas', '2021-07-12 16:46:55', '2021-07-12 16:46:55'),
(12, 'Deshy Kurniasa', '19.02.0431', '19-MI-02', 'Demak', 'Sie KSK', '2021-07-12 16:51:07', '2021-07-12 16:51:07'),
(13, 'Novanto Anggoro', '18.12.0817', '18-SI-05', 'Cilacap', 'Sie PDD', '2021-07-12 16:52:11', '2021-07-12 16:52:11'),
(14, 'Annisa Nur Baiti', '19.02.0454', '19-MI-92', 'Kalimantan', 'Sie Perlengkapan', '2021-07-12 16:54:09', '2021-07-12 16:54:09'),
(15, 'Fhenina', '19.02.0479', '19-MI-02', 'Jogja', 'Sie Acara', '2021-07-12 16:55:03', '2021-07-12 16:55:03'),
(16, 'Nur Faidhoh', '19.12.1383', '19-SI-06', 'Demak', 'Sie Humas', '2021-07-12 16:56:24', '2021-07-12 16:56:24'),
(17, 'Verina S.', '19.02.0424', '19-MI-02', 'Jogja', 'Sie Acara', '2021-07-12 17:00:59', '2021-07-12 17:00:59'),
(18, 'Sulthan Ariq', '19.12.1331', '19-SI-06', 'Kalimantan', 'Sie Acara', '2021-07-12 17:01:53', '2021-07-12 17:01:53'),
(19, 'Muthiah Hanin Salsabila', '19.02.0476', '19-MI-02', 'Klaten', 'Sie KSK', '2021-07-12 17:02:40', '2021-07-12 17:02:40'),
(20, 'Rizqi Dwi Adyanto', '19.02.0428', '19-MI-02', 'Purworejo', 'Sie Humas', '2021-07-12 17:03:31', '2021-07-12 17:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `kd_kriteria` int(10) UNSIGNED NOT NULL,
  `nama_kriteria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kriteria` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`kd_kriteria`, `nama_kriteria`, `jenis_kriteria`, `bobot_kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Kelebihan', 'Benefit', 15, '2021-06-25 20:09:25', '2021-06-25 20:09:25'),
(2, 'Kekurangan', 'Cost', 15, '2021-06-25 23:41:19', '2021-06-25 23:41:19'),
(3, 'Keahlian', 'Benefit', 25, '2021-06-25 23:41:59', '2021-06-25 23:41:59'),
(4, 'Kesibukan', 'Cost', 10, '2021-06-25 23:42:17', '2021-06-25 23:42:17'),
(5, 'Public Speaking', 'Benefit', 10, '2021-06-25 23:42:32', '2021-06-25 23:42:32'),
(6, 'Pengalaman Kepanitiaan', 'Benefit', 25, '2021-06-25 23:42:52', '2021-06-25 23:42:52');

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2021_06_05_134347_create_admins_table', 1),
(23, '2021_06_05_134425_create_alternatifs_table', 1),
(24, '2021_06_05_134610_create_kriterias_table', 1),
(25, '2021_06_05_134648_create_nilais_table', 1),
(26, '2021_06_05_134709_create_parameters_table', 1),
(27, '2021_06_05_134738_create_rangkings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilais`
--

CREATE TABLE `nilais` (
  `kd_nilai` int(10) UNSIGNED NOT NULL,
  `id_alternatif` int(10) NOT NULL,
  `kd_kriteria` int(10) NOT NULL,
  `nilai` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilais`
--

INSERT INTO `nilais` (`kd_nilai`, `id_alternatif`, `kd_kriteria`, `nilai`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 1, '2021-06-28 10:10:10', '2021-06-28 10:10:10'),
(6, 1, 2, 4, '2021-06-28 10:10:10', '2021-06-28 10:10:10'),
(7, 1, 3, 3, '2021-06-28 10:10:11', '2021-06-28 10:10:11'),
(8, 1, 4, 4, '2021-06-28 10:10:11', '2021-06-28 10:10:11'),
(9, 1, 5, 2, '2021-06-28 10:10:11', '2021-06-28 10:10:11'),
(10, 1, 6, 2, '2021-06-28 10:10:11', '2021-06-28 10:10:11'),
(11, 2, 1, 2, '2021-06-28 10:13:43', '2021-06-28 10:13:43'),
(12, 2, 2, 4, '2021-06-28 10:13:43', '2021-06-28 10:13:43'),
(13, 2, 3, 2, '2021-06-28 10:13:44', '2021-06-28 10:13:44'),
(14, 2, 4, 2, '2021-06-28 10:13:44', '2021-06-28 10:13:44'),
(15, 2, 5, 2, '2021-06-28 10:13:44', '2021-06-28 10:13:44'),
(16, 2, 6, 1, '2021-06-28 10:13:44', '2021-06-28 10:13:44'),
(17, 3, 1, 2, '2021-06-29 21:14:24', '2021-06-29 21:14:24'),
(18, 3, 2, 3, '2021-06-29 21:14:24', '2021-06-29 21:14:24'),
(19, 3, 3, 1, '2021-06-29 21:14:24', '2021-06-29 21:14:24'),
(20, 3, 4, 2, '2021-06-29 21:14:24', '2021-06-29 21:14:24'),
(21, 3, 5, 1, '2021-06-29 21:14:25', '2021-06-29 21:14:25'),
(22, 3, 6, 1, '2021-06-29 21:14:25', '2021-06-29 21:14:25'),
(23, 4, 1, 3, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(24, 4, 2, 4, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(25, 4, 3, 4, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(26, 4, 4, 4, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(27, 4, 5, 1, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(28, 4, 6, 3, '2021-06-29 21:49:18', '2021-06-29 21:49:18'),
(29, 5, 1, 2, '2021-06-29 21:49:55', '2021-06-29 21:49:55'),
(30, 5, 2, 3, '2021-06-29 21:49:55', '2021-06-29 21:49:55'),
(31, 5, 3, 2, '2021-06-29 21:49:55', '2021-06-29 21:49:55'),
(32, 5, 4, 3, '2021-06-29 21:49:56', '2021-06-29 21:49:56'),
(33, 5, 5, 3, '2021-06-29 21:49:56', '2021-06-29 21:49:56'),
(34, 5, 6, 2, '2021-06-29 21:49:56', '2021-06-29 21:49:56'),
(44, 6, 1, 1, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(45, 6, 2, 4, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(46, 6, 3, 1, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(47, 6, 4, 4, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(48, 6, 5, 4, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(49, 6, 6, 1, '2021-07-12 17:04:57', '2021-07-12 17:04:57'),
(50, 7, 1, 3, '2021-07-12 18:43:56', '2021-07-12 18:43:56'),
(51, 7, 2, 3, '2021-07-12 18:43:56', '2021-07-12 18:43:56'),
(52, 7, 3, 1, '2021-07-12 18:43:57', '2021-07-12 18:43:57'),
(53, 7, 4, 3, '2021-07-12 18:43:57', '2021-07-12 18:43:57'),
(54, 7, 5, 3, '2021-07-12 18:43:57', '2021-07-12 18:43:57'),
(55, 7, 6, 1, '2021-07-12 18:43:57', '2021-07-12 18:43:57'),
(56, 8, 1, 3, '2021-07-12 18:57:08', '2021-07-12 18:57:08'),
(57, 8, 2, 3, '2021-07-12 18:57:08', '2021-07-12 18:57:08'),
(58, 8, 3, 3, '2021-07-12 18:57:08', '2021-07-12 18:57:08'),
(59, 8, 4, 3, '2021-07-12 18:57:09', '2021-07-12 18:57:09'),
(60, 8, 5, 4, '2021-07-12 18:57:09', '2021-07-12 18:57:09'),
(61, 8, 6, 2, '2021-07-12 18:57:09', '2021-07-12 18:57:09'),
(62, 9, 1, 2, '2021-07-12 18:58:27', '2021-07-12 18:58:27'),
(63, 9, 2, 4, '2021-07-12 18:58:27', '2021-07-12 18:58:27'),
(64, 9, 3, 2, '2021-07-12 18:58:28', '2021-07-12 18:58:28'),
(65, 9, 4, 3, '2021-07-12 18:58:28', '2021-07-12 18:58:28'),
(66, 9, 5, 4, '2021-07-12 18:58:28', '2021-07-12 18:58:28'),
(67, 9, 6, 3, '2021-07-12 18:58:28', '2021-07-12 18:58:28'),
(68, 10, 1, 3, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(69, 10, 2, 4, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(70, 10, 3, 3, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(71, 10, 4, 4, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(72, 10, 5, 3, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(73, 10, 6, 2, '2021-07-12 18:59:00', '2021-07-12 18:59:00'),
(74, 11, 1, 2, '2021-07-12 18:59:43', '2021-07-12 18:59:43'),
(75, 11, 2, 3, '2021-07-12 18:59:44', '2021-07-12 18:59:44'),
(76, 11, 3, 3, '2021-07-12 18:59:44', '2021-07-12 18:59:44'),
(77, 11, 4, 4, '2021-07-12 18:59:44', '2021-07-12 18:59:44'),
(78, 11, 5, 1, '2021-07-12 18:59:44', '2021-07-12 18:59:44'),
(79, 11, 6, 1, '2021-07-12 18:59:44', '2021-07-12 18:59:44'),
(80, 12, 1, 1, '2021-07-12 19:00:09', '2021-07-12 19:00:09'),
(81, 12, 2, 2, '2021-07-12 19:00:10', '2021-07-12 19:00:10'),
(82, 12, 3, 1, '2021-07-12 19:00:10', '2021-07-12 19:00:10'),
(83, 12, 4, 4, '2021-07-12 19:00:10', '2021-07-12 19:00:10'),
(84, 12, 5, 2, '2021-07-12 19:00:10', '2021-07-12 19:00:10'),
(85, 12, 6, 1, '2021-07-12 19:00:10', '2021-07-12 19:00:10'),
(86, 13, 1, 2, '2021-07-12 19:00:40', '2021-07-12 19:00:40'),
(87, 13, 2, 4, '2021-07-12 19:00:40', '2021-07-12 19:00:40'),
(88, 13, 3, 2, '2021-07-12 19:00:40', '2021-07-12 19:00:40'),
(89, 13, 4, 4, '2021-07-12 19:00:40', '2021-07-12 19:00:40'),
(90, 13, 5, 2, '2021-07-12 19:00:41', '2021-07-12 19:00:41'),
(91, 13, 6, 2, '2021-07-12 19:00:41', '2021-07-12 19:00:41'),
(92, 14, 1, 2, '2021-07-12 19:04:15', '2021-07-12 19:04:15'),
(93, 14, 2, 3, '2021-07-12 19:04:16', '2021-07-12 19:04:16'),
(94, 14, 3, 1, '2021-07-12 19:04:16', '2021-07-12 19:04:16'),
(95, 14, 4, 4, '2021-07-12 19:04:16', '2021-07-12 19:04:16'),
(96, 14, 5, 3, '2021-07-12 19:04:16', '2021-07-12 19:04:16'),
(97, 14, 6, 1, '2021-07-12 19:04:16', '2021-07-12 19:04:16'),
(98, 15, 1, 2, '2021-07-12 19:04:54', '2021-07-12 19:04:54'),
(99, 15, 2, 3, '2021-07-12 19:04:55', '2021-07-12 19:04:55'),
(100, 15, 3, 1, '2021-07-12 19:04:55', '2021-07-12 19:04:55'),
(101, 15, 4, 4, '2021-07-12 19:04:55', '2021-07-12 19:04:55'),
(102, 15, 5, 2, '2021-07-12 19:04:55', '2021-07-12 19:04:55'),
(103, 15, 6, 1, '2021-07-12 19:04:55', '2021-07-12 19:04:55'),
(104, 16, 1, 1, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(105, 16, 2, 3, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(106, 16, 3, 1, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(107, 16, 4, 2, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(108, 16, 5, 1, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(109, 16, 6, 1, '2021-07-12 19:05:23', '2021-07-12 19:05:23'),
(110, 17, 1, 2, '2021-07-12 19:05:58', '2021-07-12 19:05:58'),
(111, 17, 2, 4, '2021-07-12 19:05:59', '2021-07-12 19:05:59'),
(112, 17, 3, 1, '2021-07-12 19:05:59', '2021-07-12 19:05:59'),
(113, 17, 4, 3, '2021-07-12 19:05:59', '2021-07-12 19:05:59'),
(114, 17, 5, 4, '2021-07-12 19:05:59', '2021-07-12 19:05:59'),
(115, 17, 6, 3, '2021-07-12 19:05:59', '2021-07-12 19:05:59'),
(116, 18, 1, 2, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(117, 18, 2, 3, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(118, 18, 3, 3, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(119, 18, 4, 4, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(120, 18, 5, 1, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(121, 18, 6, 1, '2021-07-12 19:06:34', '2021-07-12 19:06:34'),
(122, 19, 1, 2, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(123, 19, 2, 4, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(124, 19, 3, 2, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(125, 19, 4, 4, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(126, 19, 5, 2, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(127, 19, 6, 1, '2021-07-12 19:07:04', '2021-07-12 19:07:04'),
(128, 20, 1, 3, '2021-07-12 19:07:35', '2021-07-12 19:07:35'),
(129, 20, 2, 4, '2021-07-12 19:07:35', '2021-07-12 19:07:35'),
(130, 20, 3, 2, '2021-07-12 19:07:35', '2021-07-12 19:07:35'),
(131, 20, 4, 4, '2021-07-12 19:07:36', '2021-07-12 19:07:36'),
(132, 20, 5, 4, '2021-07-12 19:07:36', '2021-07-12 19:07:36'),
(133, 20, 6, 1, '2021-07-12 19:07:36', '2021-07-12 19:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `parameters`
--

CREATE TABLE `parameters` (
  `kd_parameter` int(10) UNSIGNED NOT NULL,
  `kd_kriteria` int(10) NOT NULL,
  `nama_parameter` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_parameter` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parameters`
--

INSERT INTO `parameters` (`kd_parameter`, `kd_kriteria`, `nama_parameter`, `nilai_parameter`, `created_at`, `updated_at`) VALUES
(1, 1, '<= 1 kelebihan yang dimiliki ', 1, NULL, NULL),
(2, 1, '2 – 3 kelebihan yang dimiliki', 2, NULL, '2021-06-25 23:47:16'),
(3, 1, '4 – 5 kelebihan yang dimiliki', 3, '2021-06-25 22:24:43', '2021-06-25 22:24:43'),
(4, 1, '>= 6 kelebihan yang dimiliki', 4, '2021-06-25 22:25:34', '2021-06-25 22:25:45'),
(5, 2, '>= 6 kekurangan yang dimiliki ', 1, NULL, NULL),
(6, 2, '4 – 5 kekurangan yang dimiliki', 2, '2021-06-25 23:52:34', '2021-06-25 23:52:34'),
(7, 2, '2 – 3 kekurangan yang dimiliki', 3, '2021-06-25 23:52:58', '2021-06-25 23:52:58'),
(8, 2, '<= 1 kekurangan yang dimiliki', 4, '2021-06-25 23:53:24', '2021-06-25 23:53:24'),
(9, 3, '<= 1 keahlian yang dimiliki', 1, '2021-06-25 23:54:11', '2021-06-25 23:54:11'),
(10, 3, '2  keahlian yang dimiliki', 2, '2021-06-25 23:54:36', '2021-06-25 23:54:36'),
(11, 3, '3 keahilan yang dimiliki', 3, '2021-06-25 23:55:04', '2021-06-25 23:55:04'),
(12, 3, '>= 4 keahlian yang dimiliki', 4, '2021-06-25 23:55:28', '2021-06-25 23:55:28'),
(13, 4, '>= 4 kesibukan yang dimiliki', 1, '2021-06-25 23:59:25', '2021-06-25 23:59:25'),
(14, 4, '3 kesibukan yang dimiliki', 2, '2021-06-26 00:00:15', '2021-06-26 00:00:15'),
(15, 4, '2 kesibukan yang dimiliki', 3, '2021-06-26 00:00:43', '2021-06-26 00:00:43'),
(16, 4, '<= 1 kesibukan yang dimiliki', 4, '2021-06-26 00:01:16', '2021-06-26 00:01:16'),
(17, 5, 'Kurang baik dalam menjawab', 1, '2021-06-26 00:01:41', '2021-06-26 00:01:41'),
(18, 5, 'Cukup baik dalam menjawab', 2, '2021-06-26 00:02:04', '2021-06-26 00:02:04'),
(19, 5, 'Baik dalam menjawab', 3, '2021-06-26 00:07:14', '2021-06-26 00:07:14'),
(20, 5, 'Sangat baik dalam menjawab', 4, '2021-06-26 00:08:33', '2021-06-26 00:08:33'),
(21, 6, 'Pernah ikut <= 1 kepanitian', 1, '2021-06-26 00:09:16', '2021-06-26 00:09:16'),
(22, 6, 'Pernah ikut 2 – 3 kepanitian', 2, '2021-06-26 00:09:48', '2021-06-26 00:09:48'),
(23, 6, 'Pernah ikut 4 – 5 kepanitian', 3, '2021-06-26 00:10:10', '2021-06-26 00:12:40'),
(24, 6, 'Pernah ikut >= 6 kepanitian', 4, '2021-06-26 00:13:08', '2021-06-26 00:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rangkings`
--

CREATE TABLE `rangkings` (
  `kd_hasil` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `hasil_akhir` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`kd_kriteria`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilais`
--
ALTER TABLE `nilais`
  ADD PRIMARY KEY (`kd_nilai`);

--
-- Indexes for table `parameters`
--
ALTER TABLE `parameters`
  ADD PRIMARY KEY (`kd_parameter`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rangkings`
--
ALTER TABLE `rangkings`
  ADD PRIMARY KEY (`kd_hasil`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id_alternatif` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `kd_kriteria` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `nilais`
--
ALTER TABLE `nilais`
  MODIFY `kd_nilai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `parameters`
--
ALTER TABLE `parameters`
  MODIFY `kd_parameter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `rangkings`
--
ALTER TABLE `rangkings`
  MODIFY `kd_hasil` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
