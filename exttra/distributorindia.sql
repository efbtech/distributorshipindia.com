-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 04:07 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `distributorindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `apr_admin`
--

CREATE TABLE `apr_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apr_admin`
--

INSERT INTO `apr_admin` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'distributor@gmail.com', '753e91286bebce0ddd63dc0bb65bb7b5', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apr_blogs`
--

CREATE TABLE `apr_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_slug` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `scheduled_date` date NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `is_featured` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apr_campaigns`
--

CREATE TABLE `apr_campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaigns_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigns_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigns_meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_feat_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_detail_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_orgainsed_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_amount` int(11) DEFAULT NULL,
  `campaigns_start_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigns_end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaigns_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `campaigns_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apr_cms`
--

CREATE TABLE `apr_cms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apr_donations`
--

CREATE TABLE `apr_donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `donation_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doner_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apr_donations`
--

INSERT INTO `apr_donations` (`id`, `type`, `amount`, `donation_type`, `doner_name`, `doner_email`, `transaction_id`, `payment_id`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'Donation', 2736, '6-month', 'Anand Kumar', NULL, '5057d95ead774349bcf60bc33b95452d', NULL, NULL, '2022-12-16 00:58:56', '2022-12-16 00:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `apr_media`
--

CREATE TABLE `apr_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_path` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media_news` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_meta_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `apr_queries`
--

CREATE TABLE `apr_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_replied` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_attachments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'test', '2022-12-16 01:40:33', '2022-12-16 01:40:33'),
(2, NULL, 'Information Technology', '2022-12-16 01:51:11', '2022-12-16 01:51:11'),
(3, 2, 'Software', '2022-12-16 01:51:25', '2022-12-16 01:51:25'),
(4, 2, 'Hardware', '2022-12-16 02:18:30', '2022-12-16 02:18:30'),
(5, NULL, 'Public Sector', '2022-12-16 08:01:46', '2022-12-16 08:01:46'),
(6, 5, 'Railway', '2022-12-16 08:02:02', '2022-12-16 08:02:02');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_21_114230_create_apr_cms_table', 1),
(6, '2022_11_23_051407_create_apr_campaigns_table', 1),
(7, '2022_11_23_053350_add_campaigns_slug_column_apr_campaigns_table', 1),
(8, '2022_11_24_072302_add_start_end_date_time_in_campaign_table', 1),
(9, '2022_11_24_072751_renaming_columns_name_in_campaign_table', 1),
(10, '2022_11_24_074900_change_column_type_of_campaigns_date_in_campaign_table', 1),
(11, '2022_11_25_055748_change_column_type_of_meta_desc_and_comment_in_campaign_table', 1),
(12, '2022_11_25_074606_remove_columns_from_apr_campaigns_table', 1),
(13, '2022_11_25_100932_add_status_column_in_apr_campaigns_table', 1),
(14, '2022_11_29_071344_create_apr_donations_table', 1),
(15, '2022_11_30_071931_create_apr_blogs_table', 1),
(16, '2022_11_30_072406_create_apr_media_table', 1),
(17, '2022_11_30_072653_create_apr_queries_table', 1),
(18, '2022_11_30_073046_create_apr_admin_table', 1),
(19, '2022_11_30_075034_add_status_column_in_apr_admin_table', 1),
(20, '2022_12_16_064121_create_categories_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rs@yopmail.com', '$2y$10$nYGBXVGkAIczGz6RJpL04OSD5kfbbdHJqreG299SNyxFIpMKiO2lu', '2022-12-17 04:20:52');

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
  `intrested` int(11) NOT NULL COMMENT '0->distributors, 1->Franchises, 2->sales agent',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `intrested`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rajat Shah', 'rs@yopmail.com', NULL, '$2y$10$m2Y5K1kZ/i9K5snjV6Dd3.QO18caZtuv4aONY3cVjgpL/vh7KDZqm', 0, NULL, '2022-12-17 01:39:29', '2022-12-17 01:39:29'),
(3, 'Dinesh Shah', 'ds@yopmail.com', NULL, '$2y$10$XswKsvcPA0EcpnvhdTcyAeXOuYNyCBEVOOwVj1L6yp.vVUiMpJmP2', 0, NULL, '2022-12-17 01:40:56', '2022-12-17 01:40:56'),
(5, 'Nitin', 'ns@yopmail.com', NULL, '$2y$10$8v57s2lKOF5C1R5JlJHUKOMpXVGLEVPUCD0F8wPQRwB6zyX2Uq3EK', 1, NULL, '2022-12-17 08:34:42', '2022-12-17 08:34:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apr_admin`
--
ALTER TABLE `apr_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_blogs`
--
ALTER TABLE `apr_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_campaigns`
--
ALTER TABLE `apr_campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_cms`
--
ALTER TABLE `apr_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_donations`
--
ALTER TABLE `apr_donations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_media`
--
ALTER TABLE `apr_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apr_queries`
--
ALTER TABLE `apr_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `apr_admin`
--
ALTER TABLE `apr_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apr_blogs`
--
ALTER TABLE `apr_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apr_campaigns`
--
ALTER TABLE `apr_campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apr_cms`
--
ALTER TABLE `apr_cms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apr_donations`
--
ALTER TABLE `apr_donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apr_media`
--
ALTER TABLE `apr_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `apr_queries`
--
ALTER TABLE `apr_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
