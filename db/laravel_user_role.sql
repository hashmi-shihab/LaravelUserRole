-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 07:05 AM
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
-- Database: `laravel_user_role`
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
(3, 'asadas', 'sdsds', '2019-11-19 00:57:32', '2019-11-19 00:57:32'),
(4, 'hjffhg', 'hfjfghf', '2020-05-03 01:16:35', '2020-05-03 01:16:35');

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
(14, '2019_11_24_100456_create_old_soil_nutrition_table', 13),
(15, '2020_05_03_092259_create_roles_table', 14),
(16, '2020_05_03_174258_create_permissions_table', 15),
(17, '2020_05_03_175559_create_roles_table', 16),
(18, '2020_05_03_180007_create_permissions_table', 17),
(19, '2020_05_05_173520_create_user_roles_table', 18),
(20, '2020_05_05_175111_create_permissions_table', 19),
(21, '2020_05_06_062913_create_role_user_table', 20);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `for`, `created_at`, `updated_at`) VALUES
(1, 'LandClassController-Create', 'Land Class', NULL, NULL),
(2, 'LandClassController-List', 'Land Class', NULL, NULL),
(3, 'LandClassController-Edit', 'Land Class', NULL, NULL),
(4, 'LandClassController-Delete', 'Land Class', NULL, NULL),
(5, 'LandTypeController-Create', 'Land Type', NULL, NULL),
(6, 'LandTypeController-List', 'Land Type', NULL, NULL),
(7, 'LandTypeController-Edit', 'Land Type', NULL, NULL),
(8, 'LandTypeController-Delete', 'Land Type', NULL, NULL),
(9, 'TextureController-Create', 'Texture', NULL, NULL),
(10, 'TextureController-List', 'Texture', NULL, NULL),
(11, 'TextureController-Edit', 'Texture', NULL, NULL),
(12, 'TextureController-Delete', 'Texture', NULL, NULL),
(13, 'CultivationTypeController-Create', 'Cultivation Type', NULL, NULL),
(14, 'CultivationTypeController-List', 'Cultivation Type', NULL, NULL),
(15, 'CultivationTypeController-Edit', 'Cultivation Type', NULL, NULL),
(16, 'CultivationTypeController-Delete', 'Cultivation Type', NULL, NULL),
(17, 'StateController-Create', 'State', NULL, NULL),
(18, 'StateController-List', 'State', NULL, NULL),
(19, 'StateController-Edit', 'State', NULL, NULL),
(20, 'StateController-Deelete', 'State', NULL, NULL),
(21, 'SoilNutritionController-Create', 'Soil Nutrition', NULL, NULL),
(22, 'SoilNutritionController-List', 'Soil Nutrition', NULL, NULL),
(23, 'SoilNutritionController-Edit', 'Soil Nutrition', NULL, NULL),
(24, 'SoilNutritionController-Delete', 'Soil Nutrition', NULL, NULL),
(25, 'RolesController-Create', 'Roles', NULL, NULL),
(26, 'RolesController-List', 'Roles', NULL, NULL),
(27, 'RolesController-Edit', 'Roles', NULL, NULL),
(28, 'RolesController-Delete', 'Roles', NULL, NULL),
(29, 'RolesController-Menu', 'Roles', NULL, NULL),
(30, 'UsersController-Create', 'Users', NULL, NULL),
(31, 'UsersController-List', 'Users', NULL, NULL),
(32, 'UsersController-Edit', 'Users', NULL, NULL),
(33, 'UsersController-Delete', 'Users', NULL, NULL),
(34, 'UsersController-Menu', 'Users', NULL, NULL),
(35, 'LandClassController-Menu', 'Land Class', NULL, NULL),
(36, 'andTypeController-Menu', 'Land Type', NULL, NULL),
(37, 'TextureController-Menu', 'Texture', NULL, NULL),
(38, 'CultivationTypeController-Menu', 'Cultivation Type', NULL, NULL),
(39, 'StateController-Menu', 'State', NULL, NULL),
(40, 'SoilNutritionController-Menu', 'Soil Nutrition', NULL, NULL),
(41, 'Configuration-Menu', 'Tag', NULL, NULL),
(42, 'Properties-Menu', 'Tag', NULL, NULL),
(43, 'Settings-Menu', 'Tag', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 41),
(2, 42),
(2, 43),
(6, 35),
(6, 1),
(6, 5),
(6, 36),
(6, 41),
(7, 21),
(7, 22),
(7, 23),
(7, 24),
(7, 40),
(7, 42),
(6, 2),
(6, 6),
(6, 3),
(6, 4),
(6, 7),
(6, 8),
(6, 30),
(6, 31),
(6, 32),
(6, 33),
(6, 34),
(6, 43);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Admin', '2020-05-03 14:19:45', '2020-05-03 14:19:45'),
(6, 'Staff', '2020-05-06 07:22:17', '2020-05-06 07:22:17'),
(7, 'Editor', '2020-05-06 14:58:16', '2020-05-06 14:58:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `role_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(10, 6, 6, NULL, NULL),
(12, 8, 7, NULL, NULL),
(13, 8, 6, NULL, NULL),
(14, 9, 6, NULL, NULL);

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
(1, 'Hashmi Shihab', 'hashmi@gmail.com', NULL, '$2y$10$5qODxjsObRt6rCvLcecQmOU61t2sxRfyKaJ7qlrkhLFHMqf0Gx2ie', NULL, '2019-11-18 00:28:53', '2019-11-18 00:28:53'),
(6, 'Ziadul', 'ziadul@gmail.com', NULL, '$2y$10$MiIgUDu.Pr3v4FYyAEDtl.FZZ6yDLxS3w/KSdHlnz0wKlRUHcJ3mS', NULL, '2020-05-06 03:44:52', '2020-05-06 03:44:52'),
(8, 'Tanvir', 'tanvir@gmail.com', NULL, '$2y$10$BEsMc3ZRfa7oGzjShXVe.eERn7R7ynAvt0Ho/5fSzD0JmJW1b0OO.', NULL, '2020-05-06 14:57:46', '2020-05-06 14:57:46'),
(9, 'Dip Ghosh', 'dip@gmail.com', NULL, '$2y$10$c04VWt71u5ZTunWh9qLUbeZ4U8fIxJkOfRqtkwX6jtw5CM8EA26I6', NULL, '2020-05-08 08:47:59', '2020-05-08 08:47:59');

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `old_soil_nutrition`
--
ALTER TABLE `old_soil_nutrition`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
