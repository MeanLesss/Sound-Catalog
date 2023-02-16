-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33063
-- Generation Time: Feb 16, 2023 at 04:03 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soundcatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagName` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `tagName`, `created_at`, `updated_at`) VALUES
(1, 'winning', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `soundId` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_30_164417_create_soundcat_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soundcate`
--

CREATE TABLE `soundcate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soundId` bigint(20) UNSIGNED NOT NULL,
  `categoryId` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sounds`
--

CREATE TABLE `sounds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `soundPath` varchar(255) NOT NULL,
  `imagePath` varchar(255) DEFAULT NULL,
  `statusApprove` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sounds`
--

INSERT INTO `sounds` (`id`, `userId`, `title`, `description`, `soundPath`, `imagePath`, `statusApprove`, `created_at`, `updated_at`) VALUES
(1, 7, 'Please', 'work', 'sounds\\Losing Sound.mp3', '/images/default.png', 0, '2023-02-12 08:46:36', '2023-02-12 08:46:36'),
(11, 7, 'Pick up sound', 'This sound can be used in game as sound effect', 'sounds\\Pick up sound.wav', '/images/Sketchpad.png', 0, '2023-02-14 08:52:08', '2023-02-14 08:52:08');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `statusBan` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `statusBan`, `created_at`, `updated_at`) VALUES
(1, 'mean', 'sokvimean@gmail.com', '2023-02-01 15:11:57', '$2y$10$wXZVIJ2SMjfoWHvUxgA2o.IQd3YBzj4jjbrUfO3Ithi8okVqMODqq', NULL, 0, '2023-02-06 15:11:57', '2023-02-06 15:11:57'),
(7, 'nich', 'nich@gmail.com', NULL, '$2y$10$JCpX2kBe/glp1ElITFQgfOtSfAi5VF.9T0yionQzcj3ZElFcbX7s6', NULL, 0, '2023-02-08 06:29:08', '2023-02-08 06:29:08'),
(8, 'nich2', 'nich2@gmail.com', NULL, '$2y$10$wKHQyoOF3KUvCfWN3QII9OAqJH0AzadeOkv3bwFqIROHd73V2ICK6', NULL, 0, '2023-02-09 04:18:33', '2023-02-09 04:18:33'),
(9, 'mean2', 'sokvimean2@gmail.com', NULL, '$2y$10$B0HceHWs0Y3p1B2168RMJOoL/tON1ucgiegrRf/bQw3R5DbdDD24e', NULL, 0, '2023-02-09 04:24:17', '2023-02-09 04:24:17'),
(12, 'mean3', 'sokvimean3@gmail.com', NULL, '$2y$10$SiIzugABPuk3Tjjpf972xOTbMGosc9n3Is93868.ut6bq6u/7By/y', NULL, 0, '2023-02-09 04:28:51', '2023-02-09 04:28:51'),
(13, 'mean4', 'sokvimean4@gmail.com', NULL, '$2y$10$SNCghN0lPZHg7JnAO4e6U.TPCdosCGTZW39UMBBYNPj51lJtFvq2O', NULL, 0, '2023-02-09 04:29:43', '2023-02-09 04:29:43'),
(14, 'mean5', 'sokvimean5@gmail.com', NULL, '$2y$10$M5eut8lmsV3IcplezD1GQ.4gIL9AEBtw.snghLYvOOIYeMyX1.vZ2', NULL, 0, '2023-02-09 04:31:02', '2023-02-09 04:31:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_tagname_unique` (`tagName`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complain_userid_foreign` (`userId`),
  ADD KEY `complain_soundid_foreign` (`soundId`);

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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `soundcate`
--
ALTER TABLE `soundcate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soundcate_soundid_foreign` (`soundId`),
  ADD KEY `soundcate_categoryid_foreign` (`categoryId`);

--
-- Indexes for table `sounds`
--
ALTER TABLE `sounds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sounds_title_unique` (`title`),
  ADD KEY `sounds_userid_foreign` (`userId`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soundcate`
--
ALTER TABLE `soundcate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sounds`
--
ALTER TABLE `sounds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_soundid_foreign` FOREIGN KEY (`soundId`) REFERENCES `sounds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complain_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `soundcate`
--
ALTER TABLE `soundcate`
  ADD CONSTRAINT `soundcate_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `soundcate_soundid_foreign` FOREIGN KEY (`soundId`) REFERENCES `sounds` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sounds`
--
ALTER TABLE `sounds`
  ADD CONSTRAINT `sounds_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
