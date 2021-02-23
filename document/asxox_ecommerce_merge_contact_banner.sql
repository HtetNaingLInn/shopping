-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2021 at 04:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asxox_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `photo`, `link`, `status`, `created_at`, `updated_at`) VALUES
(10, '1613526577_Ali shop covera.jpg', 'http://localhost:8000/admin/home', 'Active', NULL, '2021-02-16 22:40:48'),
(12, '1613528392_bc.jpg', 'jbjent.com', 'Active', '2021-02-16 19:43:06', '2021-02-16 19:49:52'),
(15, '1613532710_c.jpg', NULL, 'Active', '2021-02-16 21:01:50', '2021-02-16 21:01:50'),
(16, '1613536217_c.jpg', 'http://www.sulesquare.com/', 'Active', '2021-02-16 22:00:17', '2021-02-17 06:33:55'),
(17, '1613536560_Ali shop home sport cover.png', 'http://www.sulesquare.com/', 'Active', '2021-02-16 22:06:00', '2021-02-16 22:06:00'),
(18, '1613536627_Ali shop home decoration cover.png', 'jbjent.com', 'Active', '2021-02-16 22:07:07', '2021-02-16 22:07:07'),
(19, '1613537796_Ali shop home sport cover.png', 'http://www.sulesquare.com/', 'Active', '2021-02-16 22:26:36', '2021-02-16 22:26:36'),
(20, '1613542700_bc.jpg', NULL, 'Active', '2021-02-16 23:48:20', '2021-02-16 23:48:20'),
(21, '1613542752_bc.jpg', NULL, 'Active', '2021-02-16 23:49:12', '2021-02-16 23:49:12'),
(22, '1613543932_bc.jpg', NULL, 'Active', '2021-02-17 00:08:52', '2021-02-17 00:08:52'),
(23, '1613544011_Ali shop cover.jpg', NULL, 'Active', '2021-02-17 00:10:11', '2021-02-17 00:10:11'),
(24, '1613544328_Ali shop home sport cover.png', NULL, 'Active', '2021-02-17 00:15:28', '2021-02-17 00:15:28'),
(25, '1613544414_Ali shop home sport cover.png', NULL, 'Active', '2021-02-17 00:16:54', '2021-02-17 00:16:54'),
(26, '1613544787_bc.jpg', NULL, 'Active', '2021-02-17 00:23:07', '2021-02-17 00:23:07'),
(27, '1613544825_Ali shop home decoration cover.png', NULL, 'Active', '2021-02-17 00:23:45', '2021-02-17 00:23:45'),
(28, '1613544904_bc.jpg', NULL, 'Active', '2021-02-17 00:25:04', '2021-02-17 00:25:04'),
(29, '1613545006_bc.jpg', NULL, 'Active', '2021-02-17 00:26:46', '2021-02-17 00:26:46'),
(31, '1613551752_Ali shop cover.jpg', 'http://www.sulesquare.com/', 'Active', '2021-02-17 02:19:12', '2021-02-17 02:19:12'),
(32, '1613566885_bc.jpg', 'http://www.sulesquare.com/', 'Active', '2021-02-17 06:31:25', '2021-02-17 06:31:25'),
(33, '1613575768_download.jpg', 'https://github.com/DevGHI/asxox-ecommerce/tree/zeyar/bander', 'Active', '2021-02-17 08:59:29', '2021-02-17 08:59:29'),
(34, 'c.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(35, 'b.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(36, 'a.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(37, 'c.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(38, 'c.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(39, 'c.png', 'http://localhost:8000/admin/home', 'InActive', NULL, NULL),
(40, 'a.png', 'http://localhost:8000/admin/home', 'InActive', NULL, NULL),
(41, 'c.png', 'http://localhost:8000/admin/home', 'InActive', NULL, NULL),
(42, 'b.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL),
(43, 'c.png', 'http://localhost:8000/admin/home', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact__us`
--

CREATE TABLE `contact__us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isread` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact__us`
--

INSERT INTO `contact__us` (`id`, `name`, `phone`, `title`, `message`, `isread`, `created_at`, `updated_at`) VALUES
(1, 'Illo et.', '0942001111', 'Ipsam quis.', 'Iure in vitae nobis sint alias. Voluptatibus atque neque sed quo aut ipsa reiciendis.', 1, '2021-02-17 09:19:49', '2021-02-17 09:19:49'),
(2, 'Molestias.', '0942001111', 'Nihil facilis.', 'Est id atque fugit dolor. Eum tenetur omnis eum ut.', 0, '2021-02-17 09:19:49', '2021-02-17 09:19:49'),
(3, 'Qui ut.', '0942001111', 'Nam labore.', 'Omnis ut in doloremque. Dolores quia quia eaque rerum error.', 1, '2021-02-17 09:19:49', '2021-02-17 09:19:49'),
(4, 'Minima.', '0942001111', 'Vero.', 'Deleniti repellat occaecati est saepe voluptas. Voluptas dolore ipsa omnis magni aut ut.', 0, '2021-02-17 09:19:49', '2021-02-17 09:19:49'),
(5, 'Ut.', '0942001111', 'Ducimus non.', 'Eos suscipit labore enim doloribus omnis et dolores eum. Nemo sed qui cum.', 1, '2021-02-17 09:19:50', '2021-02-17 09:19:50'),
(6, 'Quos aut.', '0942001111', 'Tenetur aut.', 'Sint et non temporibus mollitia ut. Ullam eveniet maiores quis quos perferendis voluptatem et.', 0, '2021-02-17 09:19:50', '2021-02-17 09:19:50'),
(7, 'Amet id.', '0942001111', 'Molestiae.', 'Ex qui qui nihil sit rem. Exercitationem est impedit tenetur tenetur optio debitis odit voluptas.', 1, '2021-02-17 09:19:50', '2021-02-17 09:19:50'),
(8, 'Aut.', '0942001111', 'Eveniet ipsam.', 'At quis aut labore dolores. Libero ratione eaque aperiam ut.', 1, '2021-02-17 09:19:50', '2021-02-17 09:19:50'),
(9, 'Explicabo.', '0942001111', 'Veritatis id.', 'Excepturi dolores eveniet quo error tempore facilis ut. Sed aliquid voluptatem nesciunt odio.', 1, '2021-02-17 09:19:50', '2021-02-17 09:19:50'),
(10, 'Aut qui.', '0942001111', 'Et impedit.', 'Ullam in distinctio porro. Beatae nihil aliquam sed dolorem placeat.', 1, '2021-02-17 09:19:50', '2021-02-17 09:19:50');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_23_142315_create_cities_table', 1),
(5, '2021_02_16_062758_create_banners_table', 1),
(6, '2021_02_16_062006_create_website__infos_table', 2),
(7, '2021_02_17_031054_create_contact__us_table', 2);

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

-- --------------------------------------------------------

--
-- Table structure for table `website__infos`
--

CREATE TABLE `website__infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_disable_website` tinyint(1) NOT NULL DEFAULT 0,
  `is_disable_app` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website__infos`
--

INSERT INTO `website__infos` (`id`, `name`, `logo`, `phone`, `email`, `address`, `facebook`, `viber`, `is_disable_website`, `is_disable_app`, `created_at`, `updated_at`) VALUES
(1, 'Asxox', 'company_logo.png', '09-966906666 , 09-966907777', 'asxoxec@gmail.com', ' No.165 Tapin Shwe Htee Street, Yangon 11401', 'https://www.facebook.com/AsxoxOnline', '09-966906666', 0, 0, '2021-02-17 09:19:47', '2021-02-17 09:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact__us`
--
ALTER TABLE `contact__us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website__infos`
--
ALTER TABLE `website__infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact__us`
--
ALTER TABLE `contact__us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website__infos`
--
ALTER TABLE `website__infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
