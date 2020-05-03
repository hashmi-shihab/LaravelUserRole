-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 06:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soil`
--

-- --------------------------------------------------------

--
-- Table structure for table `cultivation_types`
--

CREATE TABLE `cultivation_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cultivation_types`
--

INSERT INTO `cultivation_types` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(1, 'hashmi', 'Ghosh', '2019-11-19 03:48:49', '2019-11-19 04:36:21'),
(3, 'hghg', 'lllllllllll', '2019-11-19 05:32:11', '2019-11-19 05:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Rajshahi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `land_classes`
--

CREATE TABLE `land_classes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `land_classes`
--

INSERT INTO `land_classes` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(3, 'hashmi', 'Shihab', '2019-11-18 07:19:57', '2019-11-18 20:53:47');

-- --------------------------------------------------------

--
-- Table structure for table `land_types`
--

CREATE TABLE `land_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `land_types`
--

INSERT INTO `land_types` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(3, 'asadas', 'sdsds', '2019-11-19 00:57:32', '2019-11-19 00:57:32');

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
(3, '2019_11_18_084754_create_land_classes_table', 2),
(4, '2019_11_19_061941_create_land_types_table', 3),
(5, '2019_11_19_070204_create_textures_table', 4),
(6, '2019_11_19_072047_create_cultivations_table', 5),
(7, '2019_11_19_114929_create_states_table', 6),
(8, '2019_11_20_085047_create_fertilities_table', 7),
(9, '2019_11_20_120222_create_districts_table', 8),
(10, '2019_11_20_120255_create_upazilas_table', 9),
(11, '2019_11_20_085047_create_fertility_classes_table', 10),
(12, '2019_11_23_132146_create_soil_nutrition_table', 11),
(13, '2019_11_24_085732_create_soil_nutrition_table', 12),
(14, '2019_11_24_100456_create_old_soil_nutrition_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `old_soil_nutrition`
--

CREATE TABLE `old_soil_nutrition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `soil_nutrition_id` bigint(20) NOT NULL,
  `land_type_id` bigint(20) UNSIGNED NOT NULL,
  `land_Class_id` bigint(20) UNSIGNED NOT NULL,
  `texture_id` bigint(20) UNSIGNED NOT NULL,
  `cultivation_type_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `upazila_id` bigint(20) UNSIGNED NOT NULL,
  `pH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfpH_id` bigint(20) UNSIGNED NOT NULL,
  `organicMatter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOforganicMatter_id` bigint(20) UNSIGNED NOT NULL,
  `calcium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfcalcium_id` bigint(20) UNSIGNED NOT NULL,
  `magnesium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfmagnesium_id` bigint(20) UNSIGNED NOT NULL,
  `potassium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfpotassium_id` bigint(20) UNSIGNED NOT NULL,
  `nitrogen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfnitrogen_id` bigint(20) UNSIGNED NOT NULL,
  `phosphorus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfphosphorus_id` bigint(20) UNSIGNED NOT NULL,
  `sulfur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfsulfur_id` bigint(20) UNSIGNED NOT NULL,
  `boron` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfboron_id` bigint(20) UNSIGNED NOT NULL,
  `copper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfcopper_id` bigint(20) UNSIGNED NOT NULL,
  `ferrous` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfferrous_id` bigint(20) UNSIGNED NOT NULL,
  `manganese` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfmanganese_id` bigint(20) UNSIGNED NOT NULL,
  `zinc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfzinc_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `old_soil_nutrition`
--

INSERT INTO `old_soil_nutrition` (`id`, `soil_nutrition_id`, `land_type_id`, `land_Class_id`, `texture_id`, `cultivation_type_id`, `district_id`, `upazila_id`, `pH`, `stateOfpH_id`, `organicMatter`, `stateOforganicMatter_id`, `calcium`, `stateOfcalcium_id`, `magnesium`, `stateOfmagnesium_id`, `potassium`, `stateOfpotassium_id`, `nitrogen`, `stateOfnitrogen_id`, `phosphorus`, `stateOfphosphorus_id`, `sulfur`, `stateOfsulfur_id`, `boron`, `stateOfboron_id`, `copper`, `stateOfcopper_id`, `ferrous`, `stateOfferrous_id`, `manganese`, `stateOfmanganese_id`, `zinc`, `stateOfzinc_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 3, 3, 1, 1, 1, '1', 3, '2', 3, '3', 3, '4', 3, '5', 3, '6', 3, '7', 3, '8', 3, '9', 3, '10', 3, '11', 3, '12', 3, '13', 3, '2019-11-24 23:31:19', '2019-11-24 23:31:19');

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
-- Table structure for table `soil_nutrition`
--

CREATE TABLE `soil_nutrition` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `land_type_id` bigint(20) UNSIGNED NOT NULL,
  `land_Class_id` bigint(20) UNSIGNED NOT NULL,
  `texture_id` bigint(20) UNSIGNED NOT NULL,
  `cultivation_type_id` bigint(20) UNSIGNED NOT NULL,
  `district_id` bigint(20) UNSIGNED NOT NULL,
  `upazila_id` bigint(20) UNSIGNED NOT NULL,
  `pH` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfpH_id` bigint(20) UNSIGNED NOT NULL,
  `organicMatter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOforganicMatter_id` bigint(20) UNSIGNED NOT NULL,
  `calcium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfcalcium_id` bigint(20) UNSIGNED NOT NULL,
  `magnesium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfmagnesium_id` bigint(20) UNSIGNED NOT NULL,
  `potassium` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfpotassium_id` bigint(20) UNSIGNED NOT NULL,
  `nitrogen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfnitrogen_id` bigint(20) UNSIGNED NOT NULL,
  `phosphorus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfphosphorus_id` bigint(20) UNSIGNED NOT NULL,
  `sulfur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfsulfur_id` bigint(20) UNSIGNED NOT NULL,
  `boron` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfboron_id` bigint(20) UNSIGNED NOT NULL,
  `copper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfcopper_id` bigint(20) UNSIGNED NOT NULL,
  `ferrous` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfferrous_id` bigint(20) UNSIGNED NOT NULL,
  `manganese` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfmanganese_id` bigint(20) UNSIGNED NOT NULL,
  `zinc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stateOfzinc_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soil_nutrition`
--

INSERT INTO `soil_nutrition` (`id`, `land_type_id`, `land_Class_id`, `texture_id`, `cultivation_type_id`, `district_id`, `upazila_id`, `pH`, `stateOfpH_id`, `organicMatter`, `stateOforganicMatter_id`, `calcium`, `stateOfcalcium_id`, `magnesium`, `stateOfmagnesium_id`, `potassium`, `stateOfpotassium_id`, `nitrogen`, `stateOfnitrogen_id`, `phosphorus`, `stateOfphosphorus_id`, `sulfur`, `stateOfsulfur_id`, `boron`, `stateOfboron_id`, `copper`, `stateOfcopper_id`, `ferrous`, `stateOfferrous_id`, `manganese`, `stateOfmanganese_id`, `zinc`, `stateOfzinc_id`, `created_at`, `updated_at`) VALUES
(2, 3, 3, 3, 1, 1, 1, '2', 3, '2', 3, '3', 3, '4', 3, '5', 3, '6', 3, '7', 3, '8', 3, '9', 3, '10', 3, '11', 3, '12', 3, '13', 3, '2019-11-24 23:30:53', '2019-11-24 23:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(3, 'sjadhsa', 'sdvasv', '2019-11-19 06:30:40', '2019-11-19 06:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `textures`
--

CREATE TABLE `textures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_bn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `textures`
--

INSERT INTO `textures` (`id`, `name_bn`, `name_en`, `created_at`, `updated_at`) VALUES
(3, 'Hashmi', 'Shihab', '2019-11-19 04:55:25', '2019-11-19 04:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Vatara', NULL, NULL),
(2, 'Rajshahi Sadar', NULL, NULL);

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hashmi Shihab', 'hashmi@gmail.com', NULL, '$2y$10$5qODxjsObRt6rCvLcecQmOU61t2sxRfyKaJ7qlrkhLFHMqf0Gx2ie', NULL, '2019-11-18 00:28:53', '2019-11-18 00:28:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cultivation_types`
--
ALTER TABLE `cultivation_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_classes`
--
ALTER TABLE `land_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_types`
--
ALTER TABLE `land_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `old_soil_nutrition`
--
ALTER TABLE `old_soil_nutrition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `old_soil_nutrition_land_type_id_foreign` (`land_type_id`),
  ADD KEY `old_soil_nutrition_land_class_id_foreign` (`land_Class_id`),
  ADD KEY `old_soil_nutrition_texture_id_foreign` (`texture_id`),
  ADD KEY `old_soil_nutrition_cultivation_type_id_foreign` (`cultivation_type_id`),
  ADD KEY `old_soil_nutrition_district_id_foreign` (`district_id`),
  ADD KEY `old_soil_nutrition_upazila_id_foreign` (`upazila_id`),
  ADD KEY `old_soil_nutrition_stateofph_id_foreign` (`stateOfpH_id`),
  ADD KEY `old_soil_nutrition_stateoforganicmatter_id_foreign` (`stateOforganicMatter_id`),
  ADD KEY `old_soil_nutrition_stateofcalcium_id_foreign` (`stateOfcalcium_id`),
  ADD KEY `old_soil_nutrition_stateofmagnesium_id_foreign` (`stateOfmagnesium_id`),
  ADD KEY `old_soil_nutrition_stateofpotassium_id_foreign` (`stateOfpotassium_id`),
  ADD KEY `old_soil_nutrition_stateofnitrogen_id_foreign` (`stateOfnitrogen_id`),
  ADD KEY `old_soil_nutrition_stateofphosphorus_id_foreign` (`stateOfphosphorus_id`),
  ADD KEY `old_soil_nutrition_stateofsulfur_id_foreign` (`stateOfsulfur_id`),
  ADD KEY `old_soil_nutrition_stateofboron_id_foreign` (`stateOfboron_id`),
  ADD KEY `old_soil_nutrition_stateofcopper_id_foreign` (`stateOfcopper_id`),
  ADD KEY `old_soil_nutrition_stateofferrous_id_foreign` (`stateOfferrous_id`),
  ADD KEY `old_soil_nutrition_stateofmanganese_id_foreign` (`stateOfmanganese_id`),
  ADD KEY `old_soil_nutrition_stateofzinc_id_foreign` (`stateOfzinc_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `soil_nutrition`
--
ALTER TABLE `soil_nutrition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `soil_nutrition_land_type_id_foreign` (`land_type_id`),
  ADD KEY `soil_nutrition_land_class_id_foreign` (`land_Class_id`),
  ADD KEY `soil_nutrition_texture_id_foreign` (`texture_id`),
  ADD KEY `soil_nutrition_cultivation_type_id_foreign` (`cultivation_type_id`),
  ADD KEY `soil_nutrition_district_id_foreign` (`district_id`),
  ADD KEY `soil_nutrition_upazila_id_foreign` (`upazila_id`),
  ADD KEY `soil_nutrition_stateofph_id_foreign` (`stateOfpH_id`),
  ADD KEY `soil_nutrition_stateoforganicmatter_id_foreign` (`stateOforganicMatter_id`),
  ADD KEY `soil_nutrition_stateofcalcium_id_foreign` (`stateOfcalcium_id`),
  ADD KEY `soil_nutrition_stateofmagnesium_id_foreign` (`stateOfmagnesium_id`),
  ADD KEY `soil_nutrition_stateofpotassium_id_foreign` (`stateOfpotassium_id`),
  ADD KEY `soil_nutrition_stateofnitrogen_id_foreign` (`stateOfnitrogen_id`),
  ADD KEY `soil_nutrition_stateofphosphorus_id_foreign` (`stateOfphosphorus_id`),
  ADD KEY `soil_nutrition_stateofsulfur_id_foreign` (`stateOfsulfur_id`),
  ADD KEY `soil_nutrition_stateofboron_id_foreign` (`stateOfboron_id`),
  ADD KEY `soil_nutrition_stateofcopper_id_foreign` (`stateOfcopper_id`),
  ADD KEY `soil_nutrition_stateofferrous_id_foreign` (`stateOfferrous_id`),
  ADD KEY `soil_nutrition_stateofmanganese_id_foreign` (`stateOfmanganese_id`),
  ADD KEY `soil_nutrition_stateofzinc_id_foreign` (`stateOfzinc_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textures`
--
ALTER TABLE `textures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
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
-- AUTO_INCREMENT for table `cultivation_types`
--
ALTER TABLE `cultivation_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `land_classes`
--
ALTER TABLE `land_classes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `land_types`
--
ALTER TABLE `land_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `old_soil_nutrition`
--
ALTER TABLE `old_soil_nutrition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soil_nutrition`
--
ALTER TABLE `soil_nutrition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `textures`
--
ALTER TABLE `textures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `old_soil_nutrition`
--
ALTER TABLE `old_soil_nutrition`
  ADD CONSTRAINT `old_soil_nutrition_cultivation_type_id_foreign` FOREIGN KEY (`cultivation_type_id`) REFERENCES `cultivation_types` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_land_class_id_foreign` FOREIGN KEY (`land_Class_id`) REFERENCES `land_classes` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_land_type_id_foreign` FOREIGN KEY (`land_type_id`) REFERENCES `land_types` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofboron_id_foreign` FOREIGN KEY (`stateOfboron_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofcalcium_id_foreign` FOREIGN KEY (`stateOfcalcium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofcopper_id_foreign` FOREIGN KEY (`stateOfcopper_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofferrous_id_foreign` FOREIGN KEY (`stateOfferrous_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofmagnesium_id_foreign` FOREIGN KEY (`stateOfmagnesium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofmanganese_id_foreign` FOREIGN KEY (`stateOfmanganese_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofnitrogen_id_foreign` FOREIGN KEY (`stateOfnitrogen_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateoforganicmatter_id_foreign` FOREIGN KEY (`stateOforganicMatter_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofph_id_foreign` FOREIGN KEY (`stateOfpH_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofphosphorus_id_foreign` FOREIGN KEY (`stateOfphosphorus_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofpotassium_id_foreign` FOREIGN KEY (`stateOfpotassium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofsulfur_id_foreign` FOREIGN KEY (`stateOfsulfur_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_stateofzinc_id_foreign` FOREIGN KEY (`stateOfzinc_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_texture_id_foreign` FOREIGN KEY (`texture_id`) REFERENCES `textures` (`id`),
  ADD CONSTRAINT `old_soil_nutrition_upazila_id_foreign` FOREIGN KEY (`upazila_id`) REFERENCES `upazilas` (`id`);

--
-- Constraints for table `soil_nutrition`
--
ALTER TABLE `soil_nutrition`
  ADD CONSTRAINT `soil_nutrition_cultivation_type_id_foreign` FOREIGN KEY (`cultivation_type_id`) REFERENCES `cultivation_types` (`id`),
  ADD CONSTRAINT `soil_nutrition_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `soil_nutrition_land_class_id_foreign` FOREIGN KEY (`land_Class_id`) REFERENCES `land_classes` (`id`),
  ADD CONSTRAINT `soil_nutrition_land_type_id_foreign` FOREIGN KEY (`land_type_id`) REFERENCES `land_types` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofboron_id_foreign` FOREIGN KEY (`stateOfboron_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofcalcium_id_foreign` FOREIGN KEY (`stateOfcalcium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofcopper_id_foreign` FOREIGN KEY (`stateOfcopper_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofferrous_id_foreign` FOREIGN KEY (`stateOfferrous_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofmagnesium_id_foreign` FOREIGN KEY (`stateOfmagnesium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofmanganese_id_foreign` FOREIGN KEY (`stateOfmanganese_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofnitrogen_id_foreign` FOREIGN KEY (`stateOfnitrogen_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateoforganicmatter_id_foreign` FOREIGN KEY (`stateOforganicMatter_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofph_id_foreign` FOREIGN KEY (`stateOfpH_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofphosphorus_id_foreign` FOREIGN KEY (`stateOfphosphorus_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofpotassium_id_foreign` FOREIGN KEY (`stateOfpotassium_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofsulfur_id_foreign` FOREIGN KEY (`stateOfsulfur_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_stateofzinc_id_foreign` FOREIGN KEY (`stateOfzinc_id`) REFERENCES `states` (`id`),
  ADD CONSTRAINT `soil_nutrition_texture_id_foreign` FOREIGN KEY (`texture_id`) REFERENCES `textures` (`id`),
  ADD CONSTRAINT `soil_nutrition_upazila_id_foreign` FOREIGN KEY (`upazila_id`) REFERENCES `upazilas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
