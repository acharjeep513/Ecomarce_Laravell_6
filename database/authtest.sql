-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 05:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'super admin' COMMENT 'admin|super admin',
  `remember_tokem` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `avatar`, `type`, `remember_tokem`, `created_at`, `updated_at`) VALUES
(2, 'Rudro Acharjee', 'acharjeep513@gmail.com', '$2y$10$EwZj4/na039JemNBSrnIEuI4uhvI3NBefgb65BmUtF1iaL5ZqKAXW', '0170000000000', NULL, 'super admin', 'rH3dPZxdWIByClA26YttARkAbDfcqcBoFrcarjWC', '2020-07-21 08:00:54', '2020-09-03 12:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `product_quantity` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `ip_address`, `order_id`, `product_quantity`, `created_at`, `updated_at`) VALUES
(23, 23, 38, NULL, 1, 3, '2020-08-19 22:46:44', '2020-10-06 22:32:25'),
(24, 2, 38, NULL, 1, 2, '2020-08-19 22:48:53', '2020-10-06 20:29:33'),
(26, 1, NULL, '::1', 1, 3, '2020-08-19 23:18:54', '2020-08-28 13:34:30'),
(27, 2, NULL, '::1', 1, 2, '2020-08-28 13:26:15', '2021-01-05 12:57:31'),
(28, 13, NULL, '::1', NULL, 4, '2020-10-06 19:49:05', '2020-10-06 20:11:18');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `name`, `description`, `image`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'mobile', 'ggggggggg', 'in.jpg', 1, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(2, 'grocery', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(3, 'tool', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(4, 'tv', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(5, 'friger', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(6, 'ac', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(7, 'fertilizer', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(8, 'head-phone', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(9, 'laptop', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(10, 'memory-card', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(11, 'pen_drive', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(12, 'fan', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(13, 'light', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(14, 'switch', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(15, 'cable', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(16, 'door', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(17, 'window', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(18, 'table', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00'),
(19, 'chair', 'ggggggggg', 'in.jpg', 2, '2020-06-11 18:00:00', '2020-02-24 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `name`, `mobile`, `delivary`, `transaction`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:19:03', '2020-10-06 23:19:03'),
(2, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:21:58', '2020-10-06 23:21:58'),
(3, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:22:43', '2020-10-06 23:22:43'),
(4, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:23:02', '2020-10-06 23:23:02'),
(5, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:23:32', '2020-10-06 23:23:32'),
(6, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:24:13', '2020-10-06 23:24:13'),
(7, 'Rahul Acharjee', '2222222222', 'efGGGGGGG', 'bkash', NULL, '2020-10-06 23:25:04', '2020-10-06 23:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district`, `division`, `created_at`, `updated_at`) VALUES
(1, 'chittagong', 'chittagong', '2020-07-20 23:11:38', '2020-07-20 23:11:38'),
(2, 'comilla', 'chittagong', '2020-07-20 23:11:50', '2020-07-20 23:11:50'),
(3, 'vola', 'rajshahi', '2020-07-20 23:12:04', '2020-07-20 23:12:04'),
(4, 'cox bazar', 'chittagong', '2020-07-20 23:12:16', '2020-07-20 23:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `division`, `prority`, `created_at`, `updated_at`) VALUES
(1, 'chittagong', 1, '2020-07-20 23:10:29', '2020-07-20 23:10:29'),
(2, 'Dhaka', 2, '2020-07-20 23:10:42', '2020-07-20 23:10:42'),
(3, 'rajshahi', 3, '2020-07-20 23:10:53', '2020-07-20 23:10:53'),
(4, 'shylet', 4, '2020-07-20 23:11:02', '2020-07-20 23:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_25_132315_create_admins_table', 1),
(5, '2020_02_25_141026_create_catagories_table', 1),
(6, '2020_02_25_141046_create_brands_table', 1),
(7, '2020_02_25_141103_create_products_table', 1),
(8, '2020_02_25_141117_create_product_images_table', 1),
(9, '2020_05_13_134150_create_model_names_table', 1),
(10, '2020_05_13_134844_create_divisions_table', 1),
(11, '2020_05_13_135005_create_districts_table', 1),
(14, '2020_06_11_140514_create_settings_table', 2),
(15, '2020_06_12_041204_create_payments_table', 2),
(16, '2020_07_13_125535_create_carts_table', 2),
(18, '2020_06_08_130804_create_orders_table', 4),
(19, '2020_07_21_045753_create_slides_table', 5),
(22, '2020_08_18_141306_create_reviews_table', 6),
(23, '2014_10_12_200000_add_two_factor_columns_to_users_table', 7),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 7),
(25, '2020_10_04_144333_create_sessions_table', 7),
(26, '2020_06_11_134550_create_checkouts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model_names`
--

CREATE TABLE `model_names` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shiping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `massage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT 0,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `custom_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `ip_address`, `name`, `phone`, `shiping_address`, `email`, `massage`, `is_paid`, `is_completed`, `is_seen_by_admin`, `created_at`, `updated_at`, `shipping_charge`, `custom_discount`) VALUES
(1, 23, 'null', 'efqF', '0000000000', 'fWEGG', 'acharjee@gmail.com', 'nyuyt79t9i', 0, 0, 0, '2020-08-03 16:48:22', '2020-08-18 16:48:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$TspKqw//Bh9QryfpofPlW.dEFkvAoCerFtVtHqORk.fJEnDnTkTN2', '2020-09-01 14:39:11'),
('acharjeep513@gmail.com', '$2y$10$MLDfa8WBAi8Slsa/3YqOFOxCNkqdyWXnIVpJ2TWOV6TJ4n5q7mlF2', '2020-09-03 13:39:26');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` tinyint(4) NOT NULL DEFAULT 1,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'payment no',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'personal | agent',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `catagory_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `oder_price` int(11) DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catagory_id`, `brand_id`, `title`, `description`, `slug`, `quantity`, `price`, `status`, `oder_price`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Samsung galaxy s 10', 'sansung mobile', 'mobile', 1, 100000, 0, NULL, 1, '2020-07-20 23:08:00', '2020-07-20 23:08:00'),
(2, 1, 1, 'Xiomi redmi 7', 'xiomi mobile', 'mobile', 1, 17000, 0, NULL, 1, '2020-07-20 23:09:46', '2020-07-20 23:09:46'),
(3, 1, 1, 'seed', 'bangladeshi seed', 'seed', 1, 100, 0, NULL, 1, '2020-08-12 10:15:35', '2020-08-12 10:15:35'),
(4, 99, 1, 'Sun glass', 'Cricket sun glass', 'glass', 1, 10000, 0, NULL, 1, '2020-08-12 10:17:53', '2020-08-12 10:17:53'),
(5, 98, 1, 'Naviforce NF9117 - Coffee PU Leather Analog Watch for Men - Silver & Coffee', 'Product Type: Watch Movement: Analog Quartz Movement Dial Shape: Round Diameter: 4.5 cm Window Material: Hardlex Glass Case Thickness: 1.3 cm Case Material: Alloy Band Material: PU Leather Band Length: 24cm Band Width: 2.2cm Water Resistance: 30M', 'watch', 1, 1600, 0, NULL, 1, '2020-08-12 23:05:21', '2020-08-12 23:05:21'),
(6, 98, 1, 'NF9117M Leather Analog Watch for Men -Chocolate', 'Product details of NF9117M Leather Analog Watch for Men -Chocolate Product Type:Analog Watch Gender: Men Color: Chocolate Display Type: Analog Main Material: Leather Water Resistance: 30 Meters Case Material: Alloy Band Width: 24mm Dial Diameter: 46mm Case Thickness: 13mm', 'watch', 1, 10000, 0, NULL, 1, '2020-08-12 23:06:28', '2020-08-12 23:06:28'),
(7, 98, 1, 'NF9117M Leather Analog Watch for Men -Chocolate', 'Product details of NF9117M Leather Analog Watch for Men -Chocolate Product Type:Analog Watch Gender: Men Color: Chocolate Display Type: Analog Main Material: Leather Water Resistance: 30 Meters Case Material: Alloy Band Width: 24mm Dial Diameter: 46mm Case Thickness: 13mm', 'watch', 1, 10000, 0, NULL, 1, '2020-08-12 23:06:33', '2020-08-12 23:06:33'),
(8, 98, 1, 'NF9117M Leather Analog Watch for Men -Chocolate', 'Product details of NF9117M Leather Analog Watch for Men -Chocolate Product Type:Analog Watch Gender: Men Color: Chocolate Display Type: Analog Main Material: Leather Water Resistance: 30 Meters Case Material: Alloy Band Width: 24mm Dial Diameter: 46mm Case Thickness: 13mm', 'watch', 1, 10000, 0, NULL, 1, '2020-08-12 23:06:36', '2020-08-12 23:06:36'),
(9, 98, 1, 'NF9117M Leather Analog Watch for Men -Chocolate', 'Product details of NF9117M Leather Analog Watch for Men -Chocolate Product Type:Analog Watch Gender: Men Color: Chocolate Display Type: Analog Main Material: Leather Water Resistance: 30 Meters Case Material: Alloy Band Width: 24mm Dial Diameter: 46mm Case Thickness: 13mm', 'watch', 1, 10000, 0, NULL, 1, '2020-08-12 23:06:40', '2020-08-12 23:06:40'),
(10, 98, 1, 'NF9117M Leather Analog Watch for Men -Chocolate', 'Product details of NF9117M Leather Analog Watch for Men -Chocolate Product Type:Analog Watch Gender: Men Color: Chocolate Display Type: Analog Main Material: Leather Water Resistance: 30 Meters Case Material: Alloy Band Width: 24mm Dial Diameter: 46mm Case Thickness: 13mm', 'watch', 1, 10000, 0, NULL, 1, '2020-08-12 23:06:43', '2020-08-12 23:06:43'),
(11, 1, 1, 'oppo a1', 'oppa mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:22:50', '2020-08-17 10:22:50'),
(12, 1, 1, 'oppo a1\\2', 'oppa mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:23:23', '2020-08-17 10:23:23'),
(13, 1, 1, 'oppo a3', 'oppa mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:23:39', '2020-08-17 10:23:39'),
(14, 1, 1, 'mik', 'sansung mobile', 'vzsfbn', 1, 10000, 0, NULL, 1, '2020-08-17 10:37:04', '2020-08-17 10:37:04'),
(15, 1, 1, 'mik', 'sansung mobile', 'vzsfbn', 1, 10000, 0, NULL, 1, '2020-08-17 10:37:23', '2020-08-17 10:37:23'),
(16, 1, 1, 'mik', 'sansung mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:39:19', '2020-08-17 10:39:19'),
(17, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:39:42', '2020-08-17 10:39:42'),
(18, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:40:01', '2020-08-17 10:40:01'),
(19, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 1, 10000, 0, NULL, 1, '2020-08-17 10:40:17', '2020-08-17 10:40:17'),
(20, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 5, 10000, 0, NULL, 1, '2020-08-17 10:44:54', '2020-08-17 10:44:54'),
(21, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 5, 10000, 0, NULL, 1, '2020-08-17 10:51:54', '2020-08-17 10:51:54'),
(22, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 1, 100000, 0, NULL, 1, '2020-08-17 11:10:41', '2020-08-17 11:10:41'),
(23, 1, 1, 'Samsung', 'sansung mobile', 'mobile', 1, 100000, 0, NULL, 1, '2020-08-17 11:11:17', '2020-08-17 11:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, '1595308080.jpg', '2020-07-20 23:08:00', '2020-07-20 23:08:00'),
(2, 2, '1595308186.jpg', '2020-07-20 23:09:46', '2020-07-20 23:09:46'),
(3, 3, '1597248935.jpg', '2020-08-12 10:15:36', '2020-08-12 10:15:36'),
(4, 4, '1597249073.jpg', '2020-08-12 10:17:53', '2020-08-12 10:17:53'),
(5, 5, '1597295121.jpg', '2020-08-12 23:05:22', '2020-08-12 23:05:22'),
(6, 6, '1597295188.jpg', '2020-08-12 23:06:28', '2020-08-12 23:06:28'),
(7, 7, '1597295193.jpg', '2020-08-12 23:06:33', '2020-08-12 23:06:33'),
(8, 8, '1597295196.jpg', '2020-08-12 23:06:37', '2020-08-12 23:06:37'),
(9, 9, '1597295200.jpg', '2020-08-12 23:06:40', '2020-08-12 23:06:40'),
(10, 10, '1597295203.jpg', '2020-08-12 23:06:43', '2020-08-12 23:06:43'),
(11, 11, '1597681370.jpg', '2020-08-17 10:22:50', '2020-08-17 10:22:50'),
(12, 12, '1597681403.jpg', '2020-08-17 10:23:23', '2020-08-17 10:23:23'),
(13, 13, '1597681419.jpg', '2020-08-17 10:23:39', '2020-08-17 10:23:39'),
(14, 14, '1597682224.jpg', '2020-08-17 10:37:04', '2020-08-17 10:37:04'),
(15, 15, '1597682243.jpg', '2020-08-17 10:37:24', '2020-08-17 10:37:24'),
(16, 16, '1597682359.jpg', '2020-08-17 10:39:20', '2020-08-17 10:39:20'),
(17, 17, '1597682382.jpg', '2020-08-17 10:39:42', '2020-08-17 10:39:42'),
(18, 18, '1597682401.jpg', '2020-08-17 10:40:01', '2020-08-17 10:40:01'),
(19, 19, '1597682417.jpg', '2020-08-17 10:40:17', '2020-08-17 10:40:17'),
(20, 20, '1597682694.jpg', '2020-08-17 10:44:54', '2020-08-17 10:44:54'),
(21, 21, '1597683114.jpg', '2020-08-17 10:51:54', '2020-08-17 10:51:54'),
(22, 22, '1597684241.jpg', '2020-08-17 11:10:41', '2020-08-17 11:10:41'),
(23, 23, '1597684277.jpg', '2020-08-17 11:11:17', '2020-08-17 11:11:17'),
(24, 2, '1597814171.jpg', '2020-08-18 23:16:11', '2020-08-18 23:16:11'),
(25, 1, '1597814742.jpeg', '2020-08-18 23:25:42', '2020-08-18 23:25:42'),
(26, 2, '1597816242.jpg', '2020-08-18 23:50:42', '2020-08-18 23:50:42'),
(27, 4, '1597897860.jpg', '2020-08-19 22:31:00', '2020-08-19 22:31:00'),
(28, 5, '1597897988.jpg', '2020-08-19 22:33:08', '2020-08-19 22:33:08'),
(29, 6, '1597898554.jpg', '2020-08-19 22:42:34', '2020-08-19 22:42:34'),
(30, 7, '1597898965.jpg', '2020-08-19 22:49:25', '2020-08-19 22:49:25'),
(31, 8, '1597899648.jpg', '2020-08-19 23:00:48', '2020-08-19 23:00:48'),
(32, 9, '1597899683.jpg', '2020-08-19 23:01:23', '2020-08-19 23:01:23'),
(33, 10, '1597899883.jpg', '2020-08-19 23:04:43', '2020-08-19 23:04:43'),
(34, 11, '1597899950.jpg', '2020-08-19 23:05:50', '2020-08-19 23:05:50'),
(35, 12, '1597900103.jpg', '2020-08-19 23:08:23', '2020-08-19 23:08:23'),
(36, 13, '1597900233.jpg', '2020-08-19 23:10:33', '2020-08-19 23:10:33'),
(37, 14, '1597900266.jpg', '2020-08-19 23:11:06', '2020-08-19 23:11:06'),
(38, 15, '1597900389.jpg', '2020-08-19 23:13:09', '2020-08-19 23:13:09'),
(39, 16, '1597900432.jpg', '2020-08-19 23:13:52', '2020-08-19 23:13:52'),
(40, 17, '1597900691.jpg', '2020-08-19 23:18:11', '2020-08-19 23:18:11'),
(41, 18, '1597900761.jpg', '2020-08-19 23:19:21', '2020-08-19 23:19:21'),
(42, 1, '1597929817.jpg', '2020-08-20 07:23:38', '2020-08-20 07:23:38'),
(43, 2, '1597929896.jpg', '2020-08-20 07:24:56', '2020-08-20 07:24:56'),
(44, 5, '1609822652.png', '2021-01-05 12:57:32', '2021-01-05 12:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `ip_address`, `product_id`, `review`, `rating`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, '::1', 1, 'it is good product and shiped in time.', 4, 'Prasenjit Acharjee', '2020-08-20 07:23:37', '2020-08-20 07:23:37'),
(2, 1, 'NULL', 1, 'good Product', 4, 'Rahul Acharjee', '2020-08-20 07:24:56', '2020-08-20 07:24:56'),
(3, 1, 'NULL', 1, 'good Product', 4, 'Rahul Acharjee', '2020-08-20 07:24:56', '2020-08-20 07:24:56'),
(4, 1, 'NULL', 1, 'good Product', 4, 'Rahul Acharjee', '2020-08-20 07:24:56', '2020-08-20 07:24:56'),
(5, 0, '::1', 2, 'dddddd dddddd', 5, 'Rahul Acharjee', '2021-01-05 12:57:31', '2021-01-05 12:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shiping_cost` int(10) UNSIGNED NOT NULL DEFAULT 100,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `email`, `phone`, `address`, `shiping_cost`, `created_at`, `updated_at`) VALUES
(1, 'acharheep512@gmail.com', '0180000000', 'eqqqqqq', 100, '2020-07-22 18:00:00', '2020-07-22 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `image`, `button_text`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'jjjlll', 'ahteaaaaaaa', 'ryyyyye311111111111eeeee', 'active', '2020-08-14 08:00:56', '2020-08-14 08:05:35'),
(2, 'xiomi', 'jjjlll', 'ahteaaaaaaa', 'ryyyyye311111111111eeeee', 'active', '2020-08-14 08:00:56', '2020-08-14 08:05:35'),
(3, 'oppo', 'jjjlll', 'ahteaaaaaaa', 'ryyyyye311111111111eeeee', 'active', '2020-08-14 08:00:56', '2020-08-14 08:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `User_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division_ID` int(10) UNSIGNED NOT NULL COMMENT 'division table id',
  `district_ID` int(10) UNSIGNED NOT NULL COMMENT 'district table id',
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '0=Inactive | 1=active |2=ban',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avater` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shoping_address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `User_name`, `phone`, `email`, `street_address`, `division_ID`, `district_ID`, `status`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `ip_address`, `avater`, `shoping_address`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(51, 'rajib', 'qqqq', 'wwwwww', '018000000000', 'acharjeep513@gmail.com', 'HASHIMPUR', 3, 4, 1, '$2y$10$.PFjf.PuYCTwfqrxKSW3aumnWE9pI8hEqcUgoxXSjYI4o5K8g5Qmi', NULL, NULL, '::1', NULL, NULL, NULL, NULL, '2021-01-03 21:30:02', '2021-01-03 21:31:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_names`
--
ALTER TABLE `model_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_short_name_unique` (`short_name`),
  ADD UNIQUE KEY `payments_no_unique` (`no`),
  ADD UNIQUE KEY `payments_type_unique` (`type`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_street_address_unique` (`street_address`),
  ADD UNIQUE KEY `users_division_id_unique` (`division_ID`),
  ADD UNIQUE KEY `users_district_id_unique` (`district_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `model_names`
--
ALTER TABLE `model_names`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
