-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 04:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_11_13_035003_create_place_details_table', 1),
(5, '2024_11_14_080207_add_category_to_places_table', 1),
(6, '2024_11_16_013746_create_admins_table', 1),
(7, '2024_11_16_013747_create_validators_table', 1),
(8, '2024_11_18_075305_add_photo_to_places_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `suggested_by` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','accepted','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `description`, `category`, `location`, `district`, `photo`, `suggested_by`, `status`, `created_at`, `updated_at`) VALUES
(4, 'kataragama', 'beautiful place', 'Archeological', 'kataragama', 'Ampara', 'photos/amfw29GF7tbwzG20d8OiyEJPrZJnnHBPczIBtcc5.jpg', 4, 'accepted', '2024-11-20 05:10:54', '2024-11-21 01:52:29'),
(5, 'sigiriya', 'nice place', 'Urban', 'sigiriya', 'Ampara', 'photos/MIwl3NOY3g1MEuYzI3inal0c7EqeONHQM9VRzTDc.jpg', 2, 'accepted', '2024-11-20 05:28:12', '2024-11-20 13:10:09'),
(6, 'pankuliya asokaramaya', 'Pankuliya Asokaramaya is an ancient Buddhist monastery located in the\r\nAnuradhapura District of Sri Lanka, known for its rich history and serene\r\natmosphere. It is believed to date back to the early Anuradhapura period,\r\nshowcasing the artistic and architectural brilliance of Sri Lanka\'s ancient\r\ncivilization.\r\nThe site is named after Emperor Ashoka, reflecting its connection to the\r\nspread of Buddhism during his reign. The monastery contains well-preserved\r\nruins, including stone pillars, guard stones, and stupas that speak to the\r\nspiritual significance of the location. Notably, Pankuliya Asokaramaya is\r\nsurrounded by lush greenery, adding to its tranquil and meditative ambiance.\r\nThe temple\'s historical importance and aesthetic appeal make it a popular\r\ndestination for both pilgrims seeking spiritual solace and history enthusiasts\r\neager to explore Sri Lanka\'s ancient heritage.', 'Archeological', 'Anuradhapura', 'Anuradhapura', 'photos/qcSEfnBMTRhYJLmod99BuYYmVlouJJLcR07E8Djs.jpg', 4, 'accepted', '2024-11-20 11:12:05', '2024-11-20 11:12:45'),
(10, 'kiri wehera', 'place is so calm', 'Historical', 'kataragama', 'Kilinochchi', 'photos/oTnam4oQIcLFoKQyeg07bFESjXvTjsHggEM9pMRU.jpg', 3, 'accepted', '2024-11-21 01:15:27', '2024-11-21 01:15:46'),
(11, 'haputhale', 'nbdhbvsj', 'Archeological', 'chdhvdvb', 'Kilinochchi', 'photos/gbKySZPYrp1nw9clxCtw80rzCuFdUkGl9H9ZxCkQ.jpg', 2, 'pending', '2024-11-21 01:45:43', '2024-11-21 01:45:43'),
(12, 'haputhale', 'nbdhbvsj', 'Archeological', 'chdhvdvb', 'Kilinochchi', 'photos/vLNX5DOZSpgBSZ9SQYCUdKBrHIkZmwPXmkxvaWqO.jpg', 2, 'pending', '2024-11-21 01:45:58', '2024-11-21 01:45:58'),
(13, 'kiri wehera', 'calm place', 'Urban', 'vhisfhviifs', 'Kegalle', 'photos/bUjPswYmC5YrVTGlNn3C13Mm46D3rv2frf18x8NK.jpg', 2, 'accepted', '2024-11-21 01:46:54', '2024-11-21 01:48:40'),
(14, 'kiri wehera', 'nice place', 'Historical', 'kataragama', 'Nuwara Eliya', 'photos/VGq5qr1flAl1G8fLE2orNI2LyXXSg9sDgfMrp29g.jpg', 4, 'accepted', '2024-11-21 03:55:24', '2024-11-21 03:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `place_details`
--

CREATE TABLE `place_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('apU5A7wz18ps3b3IkMDQ7KdahmlLEfZsMezJxZu4', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWjJ2ZEdMaHJTWGRoNnZZaHJZcmxGclFDamxkam91NE9lalgzM0x0USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1732181256);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'savain', 'Admin@gmail.com', NULL, '$2y$12$qlwNrYzi0uT0RHhusWTI5u6dXZDtX/3RRyB3s/ByAl6lXBCvMjhni', 'admin', NULL, '2024-11-20 03:38:38', '2024-11-20 03:38:38'),
(3, 'validator', 'vali@gmail.com', NULL, '$2y$12$ccE5DsUwMG/.KY5CYmB.FO1atnQfNZh4Sx/JFb52KzwnMQqkzu/F2', 'validator', NULL, '2024-11-20 03:39:44', '2024-11-20 03:39:44'),
(4, 'maneth', 'rmkalansooriya@gmail.com', NULL, '$2y$12$SYyAzTx0QLYUMu7jsTPiX.4765rY3MRuFhPIrFCsSHP03puT5ZC1C', 'user', NULL, '2024-11-20 04:42:04', '2024-11-20 04:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `validators`
--

CREATE TABLE `validators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_suggested_by_foreign` (`suggested_by`);

--
-- Indexes for table `place_details`
--
ALTER TABLE `place_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `validators`
--
ALTER TABLE `validators`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `validators_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `place_details`
--
ALTER TABLE `place_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `validators`
--
ALTER TABLE `validators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_suggested_by_foreign` FOREIGN KEY (`suggested_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
