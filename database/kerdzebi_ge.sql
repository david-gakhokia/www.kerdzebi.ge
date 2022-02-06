-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 02:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kerdzebi.ge`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `image`, `rank`, `status`, `created_at`, `updated_at`) VALUES
(48, 52, '20220129005848.png', 1, 1, '2022-01-28 20:58:48', '2022-02-03 07:12:01'),
(49, 52, '20220129005931.png', 3, 1, '2022-01-28 20:59:31', '2022-02-03 07:56:05'),
(50, 52, '20220129010015.png', 2, 1, '2022-01-28 21:00:15', '2022-01-29 08:38:47'),
(51, 52, '20220129010519.png', 4, 1, '2022-01-28 21:05:19', '2022-01-29 08:40:22'),
(52, NULL, NULL, 10, 1, '2022-01-29 07:54:42', '2022-02-03 07:11:40'),
(61, NULL, NULL, 20, 1, '2022-02-03 07:52:13', '2022-02-03 07:53:12'),
(62, 61, NULL, NULL, 0, '2022-02-03 07:52:24', '2022-02-03 07:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `category_translations`
--

CREATE TABLE `category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_translations`
--

INSERT INTO `category_translations` (`id`, `category_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(136, 48, 'en', 'Salads', NULL, '2022-01-28 20:58:48', '2022-01-28 20:58:48'),
(137, 48, 'ka', 'სალათები', NULL, '2022-01-28 20:58:48', '2022-01-29 11:34:08'),
(138, 48, 'zh-CN', '沙拉', NULL, '2022-01-28 20:58:48', '2022-01-28 20:58:48'),
(139, 49, 'en', 'Soups', NULL, '2022-01-28 20:59:31', '2022-01-28 20:59:31'),
(140, 49, 'ka', 'წვნიანები', NULL, '2022-01-28 20:59:31', '2022-01-29 13:07:03'),
(141, 49, 'zh-CN', '汤类', NULL, '2022-01-28 20:59:31', '2022-01-28 20:59:31'),
(142, 50, 'en', 'Sandwiches', NULL, '2022-01-28 21:00:15', '2022-01-28 21:00:15'),
(143, 50, 'ka', 'სენდვიჩები', NULL, '2022-01-28 21:00:15', '2022-01-28 21:00:15'),
(144, 50, 'zh-CN', '三明治', NULL, '2022-01-28 21:00:15', '2022-01-28 21:00:15'),
(145, 51, 'en', 'Pasta', NULL, '2022-01-28 21:05:19', '2022-01-28 21:05:19'),
(146, 51, 'ka', 'პასტა', NULL, '2022-01-28 21:05:19', '2022-01-28 21:05:19'),
(147, 51, 'zh-CN', '意大利面', NULL, '2022-01-28 21:05:19', '2022-01-28 21:05:19'),
(148, 52, 'en', 'Food', NULL, '2022-01-29 07:54:42', '2022-01-29 07:54:42'),
(149, 52, 'ka', 'საკვები', NULL, '2022-01-29 07:54:42', '2022-01-29 07:54:42'),
(150, 52, 'zh-CN', '食物', NULL, '2022-01-29 07:54:42', '2022-01-29 07:54:42'),
(175, 61, 'en', 'Dranks', 'Dranks', '2022-02-03 07:52:13', '2022-02-03 07:52:13'),
(176, 61, 'ka', 'სასმელები', 'სასმელები', '2022-02-03 07:52:14', '2022-02-03 07:52:14'),
(177, 61, 'zh-CN', 'Dranks-ZH-CN', 'Dranks-ZH-CN', '2022-02-03 07:52:14', '2022-02-03 07:52:14'),
(178, 62, 'en', 'Plato Jacobson', 'Ipsam itaque sunt qu', '2022-02-03 07:52:24', '2022-02-03 07:52:24'),
(179, 62, 'ka', 'Jenna Sanders', 'Repudiandae debitis', '2022-02-03 07:52:24', '2022-02-03 07:52:24'),
(180, 62, 'zh-CN', 'Natalie Mcintosh', 'Nihil porro commodi', '2022-02-03 07:52:24', '2022-02-03 07:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('enable','disabled') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(52, '20220106084908.png', 'Debitis et fuga Vol', 'disabled', '2022-01-06 04:49:08', '2022-01-06 04:49:08'),
(53, '20220106221707.png', 'Quidem maxime sapien', 'enable', '2022-01-06 18:17:07', '2022-01-06 18:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `client_translations`
--

CREATE TABLE `client_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_translations`
--

INSERT INTO `client_translations` (`id`, `client_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(154, 52, 'en', 'Cruz Sheppard', 'Nemo et quia sed ull', '2022-01-06 04:49:08', '2022-01-06 04:49:08'),
(155, 52, 'ka', 'Dominic Bishop', 'Similique quos sunt', '2022-01-06 04:49:08', '2022-01-06 04:49:08'),
(156, 52, 'ru', 'Hasad Riggs', 'Qui in dolor sint q', '2022-01-06 04:49:08', '2022-01-06 04:49:08'),
(157, 53, 'en', 'Madison Ortega', 'Ipsam ad ipsam sint', '2022-01-06 18:17:07', '2022-01-06 18:17:07'),
(158, 53, 'ka', 'Hadassah Butler', 'Asperiores dicta cup', '2022-01-06 18:17:07', '2022-01-06 18:17:07'),
(159, 53, 'ru', 'Kai Moody', 'Odit aliquid sed per', '2022-01-06 18:17:07', '2022-01-06 18:17:07');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Warren Mathews', 'cikatoci@mailinator.com', 60, 'In non voluptates vo', 'Blanditiis exercitat', '2022-01-11 15:15:36', '2022-01-11 15:15:36'),
(4, 'Gareth Craft', 'totezi@mailinator.com', 29, 'Voluptatem eiusmod q', 'Eu nostrum praesenti', '2022-01-20 11:43:55', '2022-01-20 11:43:55');

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
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'en', '2021-12-26 04:01:46', '2021-12-26 04:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `image`, `status`, `start_time`, `end_time`, `icon`, `link`, `images`, `created_at`, `updated_at`) VALUES
(17, NULL, 1, '2022-01-30 20:00:00', '2022-01-31 12:00:00', 'code-branch', 'https://api.kerdzebi.ge/api/v1/products', NULL, '2022-01-30 16:08:56', '2022-01-30 16:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `message_translations`
--

CREATE TABLE `message_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_translations`
--

INSERT INTO `message_translations` (`id`, `message_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(49, 17, 'en', 'Product API', '<p>A complete output API will be added<br></p>', '2022-01-30 16:08:56', '2022-01-30 16:08:56'),
(50, 17, 'ka', 'პროდუქციი API', '<p>დაემატება სრული პროდუქციი API<br></p>', '2022-01-30 16:08:56', '2022-01-30 16:08:56'),
(51, 17, 'zh-CN', '产品 API', '<p>将添加完整的输出 API<br></p>', '2022-01-30 16:08:56', '2022-01-30 16:08:56');

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
(3, '2018_08_29_200844_create_languages_table', 1),
(4, '2018_08_29_205156_create_translations_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_08_12_014722_create_permission_tables', 1),
(7, '2021_08_12_014733_create_posts_table', 1),
(8, '2021_12_06_090353_create_post_translations_table', 1),
(9, '2021_12_18_141228_create_pages_table', 1),
(10, '2021_12_21_111633_create_contacts_table', 1),
(11, '2021_12_24_215528_create_clients_table', 1),
(15, '2021_12_26_072418_create_places_table', 2),
(16, '2021_12_26_073511_create_place_translations_table', 2),
(17, '2022_01_01_193700_create_categories_table', 2),
(18, '2022_01_03_144525_create_category_translations_table', 2),
(19, '2022_01_05_111526_create_tables_table', 3),
(20, '2022_01_09_152436_create_products_table', 4),
(21, '2022_01_09_152920_create_product_translations_table', 4),
(22, '2022_01_11_083356_create_reservations_table', 5),
(23, '2022_01_13_084017_create_messages_table', 6),
(24, '2022_01_13_084600_create_message_translations_table', 6),
(25, '2022_01_20_160345_create_settings_table', 7),
(26, '2022_01_20_162023_create_setting_translations_table', 7),
(27, '2022_01_21_171753_create_networks_table', 8),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 9),
(29, '2022_02_03_135223_create_orders_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 2),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frame` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `icon`, `image`, `link`, `frame`, `created_at`, `updated_at`) VALUES
(7, 'fab fa-facebook-f', NULL, 'https://www.facebook.com/kerdzebi.ge', NULL, '2022-01-21 15:51:12', '2022-01-21 15:51:12'),
(9, 'fab fa-instagram', NULL, 'https://www.instagram.com/kerdzebi.ge/', NULL, '2022-01-22 03:24:57', '2022-01-22 03:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `table_id` int(11) DEFAULT NULL,
  `place_id` int(11) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `table_id`, `place_id`, `product_id`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(13, 5, NULL, NULL, 18, 5, NULL, NULL, '2022-02-03 19:21:52'),
(14, 5, NULL, NULL, 19, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('admin@kerdzebi.ge', '$2y$10$KAq74t8XMXbELQizDm4KsOsnyDAytvdLoopwXsVtXDTUzMZgkYxIy', '2022-01-11 08:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `title`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user-list', 'მომხმარებლები', 'web', '2021-12-26 04:11:11', '2021-12-26 04:11:11'),
(2, 'user-create', 'მომხმარებლის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:08'),
(3, 'user-edit', 'მომხმარებლის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:51'),
(4, 'user-delete', 'მომხმარებლის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:26:59'),
(5, 'role-list', 'როლების ნახვა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:23'),
(6, 'role-create', 'როლის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:47'),
(7, 'role-edit', 'როლის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:27:59'),
(8, 'role-delete', 'როლის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:28:10'),
(9, 'permission-list', 'პრივილეგიების ნახვა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:28:32'),
(10, 'permission-create', 'პრივილეგიის დამატება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:04'),
(11, 'permission-edit', 'პრივილეგიის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:20'),
(12, 'permission-delete', 'პრივილეგიის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-11 15:29:34'),
(13, 'post-list', 'პოსტების დათვალიერება', 'web', '2021-12-26 04:11:11', '2022-01-22 05:52:48'),
(14, 'post-create', 'პოსტის შექმნა', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:06'),
(15, 'post-edit', 'პოსტის რედაქტირება', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:30'),
(16, 'post-delete', 'პოსტის წაშლა', 'web', '2021-12-26 04:11:11', '2022-01-22 05:53:50'),
(17, 'contact-list', 'კონტაქტების ნახვა', 'web', '2021-12-26 04:47:05', '2022-01-11 15:30:07'),
(18, 'contact-edit', 'კონტაქტის რედაქტირება', 'web', '2021-12-26 04:47:37', '2022-01-22 05:51:52'),
(19, 'contact-create', 'კონტაქტის შექმნა', 'web', '2021-12-26 04:48:23', '2022-01-22 05:52:09'),
(20, 'contact-delete', 'კონტაქტის წაშლა', 'web', '2021-12-26 04:48:51', '2022-01-31 19:52:58'),
(21, 'client-list', 'კლიენტები', 'web', '2021-12-26 08:39:18', '2021-12-26 08:39:18'),
(22, 'client-edit', 'კლიენტების რედაქტირება', 'web', '2021-12-26 08:40:34', '2021-12-26 08:40:34'),
(23, 'client-delete', 'კლიენტის წაშლა', 'web', '2021-12-26 08:40:58', '2021-12-26 08:40:58'),
(24, 'place-list', 'ადგილების ნახვა', 'web', '2022-01-06 06:47:35', '2022-01-06 06:47:35'),
(25, 'place-create', 'ადგილის შექმნა', 'web', '2022-01-06 06:48:10', '2022-01-06 06:48:10'),
(26, 'place-edit', 'ადგილის რედაქტირება', 'web', '2022-01-06 06:48:35', '2022-01-06 06:48:35'),
(27, 'place-delete', 'ადგილის წაშლა', 'web', '2022-01-06 06:48:57', '2022-01-06 06:48:57'),
(29, 'table-list', 'მაგიდების სია', 'web', '2022-01-08 09:43:16', '2022-01-08 09:43:16'),
(30, 'table-edit', 'მაგიდის რედაქტირება', 'web', '2022-01-08 09:44:18', '2022-01-08 09:44:18'),
(31, 'table-delete', 'მაგიდის წაშლა', 'web', '2022-01-08 09:44:45', '2022-01-08 09:44:45'),
(32, 'table-create', 'მაგიდის დამატება', 'web', '2022-01-08 09:46:00', '2022-01-08 09:46:00'),
(33, 'setting-list', 'პარამეტრების ნახვა', 'web', '2022-01-09 07:31:54', '2022-01-09 07:31:54'),
(34, 'setting-create', 'პარამეტრების შექმნა', 'web', '2022-01-09 07:32:43', '2022-01-09 07:32:43'),
(35, 'setting-edit', 'პარამეტრების რედაქტირება', 'web', '2022-01-09 07:33:33', '2022-01-09 07:33:33'),
(36, 'setting-delete', 'პარამეტრების წაშლა', 'web', '2022-01-09 07:34:08', '2022-01-09 07:34:08'),
(37, 'category-list', 'კატეგორიების სია', 'web', '2022-01-09 08:20:03', '2022-01-09 08:20:03'),
(38, 'category-create', 'კატეგორის დამატება', 'web', '2022-01-09 08:20:42', '2022-01-09 08:20:42'),
(39, 'category-edit', 'კატეგორის რედაქტირება', 'web', '2022-01-09 08:22:06', '2022-01-09 08:22:06'),
(40, 'category-delete', 'კატეგორის წაშლა', 'web', '2022-01-09 08:22:28', '2022-01-09 08:22:28'),
(41, 'product-list', 'პროდუქციის სია', 'web', '2022-01-09 14:54:35', '2022-01-09 14:54:52'),
(42, 'product-create', 'პროდუქტის დამატება', 'web', '2022-01-09 14:55:20', '2022-01-09 14:55:20'),
(43, 'product-edit', 'პროდუქტის რედაქტირება', 'web', '2022-01-09 14:55:41', '2022-01-09 14:55:41'),
(44, 'product-delete', 'პროდუქტის წაშლა', 'web', '2022-01-09 14:56:00', '2022-01-09 14:56:00'),
(45, 'reservation-list', 'რეზერვაციების სია', 'web', '2022-01-11 06:59:48', '2022-01-11 06:59:48'),
(46, 'reservation-create', 'რეზერვაციის დამატება', 'web', '2022-01-11 07:00:26', '2022-01-11 07:00:26'),
(47, 'reservation-edit', 'რეზერვაციის რედაქტირება', 'web', '2022-01-11 07:00:53', '2022-01-11 07:00:53'),
(48, 'reservation-delete', 'რეზერვაციის წაშლა', 'web', '2022-01-11 07:01:09', '2022-01-11 07:01:09'),
(51, 'token-list', 'ტოკენების სია', 'web', '2022-01-31 19:53:50', '2022-01-31 19:53:50'),
(52, 'token-create', 'ტოკენის შექმნა', 'web', '2022-01-31 19:54:21', '2022-01-31 19:54:21'),
(53, 'token-delete', 'ტოკენის წაშლა', 'web', '2022-01-31 19:54:38', '2022-01-31 19:54:38'),
(54, 'order-list', 'შეკვეთების ცხრილი', 'web', '2022-02-03 13:07:37', '2022-02-03 13:07:37'),
(55, 'order-create', 'შეკვეთის დამატება', 'web', '2022-02-03 13:08:16', '2022-02-03 13:08:16'),
(56, 'order-edit', 'შეკვეთის რედაქტირება', 'web', '2022-02-03 13:08:38', '2022-02-03 13:09:00'),
(57, 'order-delete', 'შეკვეთის წაშლა', 'web', '2022-02-03 13:09:15', '2022-02-03 13:09:15');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(10, 'App\\Models\\User', 1, 'BWP', '463ab3eb8d2661a1888837e4e2dccd7ccef428e08cd985fb0559305766835b65', '[\"*\"]', '2022-01-31 19:46:58', '2022-01-31 19:45:08', '2022-01-31 19:46:58'),
(13, 'App\\Models\\User', 5, 'Tok1', '9f854b835f65828e302c347895769c44d653ba038336949e2497282f32228843', '[\"*\"]', '2022-02-01 07:45:40', '2022-01-31 20:49:04', '2022-02-01 07:45:40'),
(14, 'App\\Models\\User', 1, 'Test', 'bbff699b401233c65f828724e0ed31f2618d85f86525c4a5fd302e8833900502', '[\"*\"]', '2022-02-01 07:48:13', '2022-02-01 07:44:51', '2022-02-01 07:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(23, NULL, 1, '2022-01-28 18:28:40', '2022-01-28 18:28:40'),
(24, NULL, 1, '2022-01-28 18:29:38', '2022-01-28 18:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `place_translations`
--

CREATE TABLE `place_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_translations`
--

INSERT INTO `place_translations` (`id`, `place_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(64, 23, 'en', 'Terrace', 'Terrace', '2022-01-28 18:28:40', '2022-01-28 18:28:40'),
(65, 23, 'ka', 'ტერასა', 'ტერასა', '2022-01-28 18:28:40', '2022-01-28 18:28:40'),
(66, 23, 'ru', 'Терраса', 'Терраса', '2022-01-28 18:28:40', '2022-01-28 18:28:40'),
(67, 24, 'en', 'Main hall', 'Main hall', '2022-01-28 18:29:38', '2022-01-28 18:29:38'),
(68, 24, 'ka', 'მთავარი დარბაზი', 'მთავარი დარბაზი', '2022-01-28 18:29:38', '2022-01-28 18:29:38'),
(69, 24, 'ru', 'Основной зал', 'Основной зал', '2022-01-28 18:29:38', '2022-01-28 18:29:38');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `created_at`, `updated_at`) VALUES
(1, '2022-01-09 06:39:39', '2022-01-09 06:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `post_translations`
--

CREATE TABLE `post_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_translations`
--

INSERT INTO `post_translations` (`id`, `post_id`, `locale`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Recusandae Laboris', 'Amet voluptas ut to', NULL, NULL),
(2, 1, 'ka', 'Vel vel molestiae fa', 'Quo quod ut id culpa', NULL, NULL),
(3, 1, 'ru', 'Ratione illo error i', 'Sequi facilis offici', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `status`, `price`, `images`, `category_id`, `created_at`, `updated_at`) VALUES
(16, '20220129024958.jpg', 1, '10', NULL, 48, '2022-01-28 22:49:58', '2022-01-28 22:49:58'),
(17, '20220129025153.jpg', 1, '14', NULL, 48, '2022-01-28 22:51:53', '2022-01-28 22:51:53'),
(18, '20220129170344.jpg', 1, '10', NULL, 49, '2022-01-29 13:03:44', '2022-01-29 13:03:44'),
(19, '20220129170645.jpg', 1, '12', NULL, 49, '2022-01-29 13:06:45', '2022-01-29 13:06:45'),
(20, NULL, 0, '707', NULL, 49, '2022-01-31 19:44:12', '2022-01-31 19:44:12'),
(21, NULL, 1, '2', NULL, 48, '2022-01-31 19:44:19', '2022-01-31 19:44:19'),
(22, NULL, 1, '273', NULL, 50, '2022-01-31 19:44:32', '2022-01-31 19:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `product_translations`
--

CREATE TABLE `product_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_translations`
--

INSERT INTO `product_translations` (`id`, `product_id`, `locale`, `name`, `description`, `created_at`, `updated_at`) VALUES
(46, 16, 'en', 'Georgian Salad', '(Cucumber, tomato, onion, grapes vinegar, parsley, herbs)', '2022-01-28 22:49:58', '2022-01-28 22:49:58'),
(47, 16, 'ka', 'კიტრი-პომიდორი ქართულად', '(კიტრი, პომიდორი, ხახვი, ყურძნის ძმარი, ოხრახუში, მწვანილი)', '2022-01-28 22:49:58', '2022-01-28 22:49:58'),
(48, 16, 'zh-CN', '番茄黄瓜沙拉', '（番茄、黄瓜、洋葱、葡萄醋、欧芹、香草）', '2022-01-28 22:49:58', '2022-01-28 22:49:58'),
(49, 17, 'en', 'Georgian Salad With Walnut', 'Cucumber, tomato, onion, grapes vinegar, parsley, herbs, Walnut', '2022-01-28 22:51:53', '2022-01-28 22:51:53'),
(50, 17, 'ka', 'კიტრი-პომიდორი ნიგვზით', 'კიტრი, პომიდორი, ხახვი, ყურძნის ძმარი, ოხრახუში, მწვანილი,ნიგოზი', '2022-01-28 22:51:54', '2022-01-28 22:51:54'),
(51, 17, 'zh-CN', '番茄黄瓜沙拉配核桃酱', '番茄、黄瓜、洋葱、葡萄醋、欧芹、香草、核桃', '2022-01-28 22:51:54', '2022-01-28 22:51:54'),
(52, 18, 'en', 'Tomato Cream-Soup', 'Tomato with cream sauce', '2022-01-29 13:03:44', '2022-01-29 13:03:44'),
(53, 18, 'ka', 'პომიდვრის კრემ-წვნიანი', '(პომიდორი ნაღებით)', '2022-01-29 13:03:44', '2022-01-29 13:03:44'),
(54, 18, 'zh-CN', '奶油番茄汤', '番茄加奶油', '2022-01-29 13:03:44', '2022-01-29 13:03:44'),
(55, 19, 'en', 'Mushroom Cream-Soup', 'Mushroom with cream sauce', '2022-01-29 13:06:45', '2022-01-29 13:06:45'),
(56, 19, 'ka', 'სოკოს კრემ-წვნიანი', 'სოკო ნაღებით', '2022-01-29 13:06:45', '2022-01-29 13:06:45'),
(57, 19, 'zh-CN', '奶油蘑菇汤', '蘑菇加奶油', '2022-01-29 13:06:45', '2022-01-29 13:06:45'),
(58, 20, 'en', 'Harper Mcintosh', 'Molestiae laboris ne', '2022-01-31 19:44:12', '2022-01-31 19:44:12'),
(59, 20, 'ka', 'Nash Martinez', 'Quod est quod earum', '2022-01-31 19:44:12', '2022-01-31 19:44:12'),
(60, 20, 'zh-CN', 'Eugenia Haney', 'Est illo quas eos e', '2022-01-31 19:44:12', '2022-01-31 19:44:12'),
(61, 21, 'en', 'Merritt Dixon', 'Nam beatae enim vita', '2022-01-31 19:44:19', '2022-01-31 19:44:19'),
(62, 21, 'ka', 'Clare Huber', 'Id nostrum omnis qui', '2022-01-31 19:44:19', '2022-01-31 19:44:19'),
(63, 21, 'zh-CN', 'Kenneth Duke', 'Nostrum est dolor i', '2022-01-31 19:44:19', '2022-01-31 19:44:19'),
(64, 22, 'en', 'Whoopi Nelson', 'Minim dolores ipsum', '2022-01-31 19:44:32', '2022-01-31 19:44:32'),
(65, 22, 'ka', 'Griffith Wyatt', 'Atque dolores aliqua', '2022-01-31 19:44:32', '2022-01-31 19:44:32'),
(66, 22, 'zh-CN', 'Maxwell Meadows', 'Iste rerum recusanda', '2022-01-31 19:44:32', '2022-01-31 19:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `person` int(11) NOT NULL,
  `table_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `date`, `time`, `person`, `table_id`, `status`, `created_at`, `updated_at`) VALUES
(42, 'Ivory Bell', 'gudij@mailinator.com', '+1 (521) 205-8918', '1974-07-07', '02:05:00', 14, 54, 0, '2022-01-31 08:53:12', '2022-01-31 08:53:12'),
(43, 'Kirestin Wynn', 'vylyp@mailinator.com', '+1 (322) 943-4511', '1996-11-28', '21:46:00', 4, 55, 0, '2022-01-31 22:02:02', '2022-01-31 22:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2021-12-26 04:11:31', '2021-12-26 04:11:31'),
(2, 'Manager', 'web', '2022-01-12 08:06:40', '2022-01-12 08:06:40'),
(3, 'API_Users', 'web', '2022-01-31 07:59:23', '2022-01-31 07:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 3),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(21, 2),
(21, 3),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(24, 3),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(29, 1),
(29, 2),
(29, 3),
(30, 1),
(30, 2),
(31, 1),
(32, 1),
(32, 2),
(33, 1),
(33, 3),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(37, 2),
(37, 3),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(41, 1),
(41, 2),
(41, 3),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(45, 1),
(45, 2),
(45, 3),
(46, 1),
(46, 2),
(47, 1),
(47, 2),
(48, 1),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(55, 1),
(56, 1),
(57, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `phone`, `email`, `logo`, `image`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(11, '(+995) 514 756688', 'info@kerdzebi.ge', '20220205150107.png', '20220205153023.png', '10:00:00', '12:00:00', '2022-01-21 07:02:44', '2022-02-05 11:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `setting_translations`
--

CREATE TABLE `setting_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `setting_id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_translations`
--

INSERT INTO `setting_translations` (`id`, `setting_id`, `locale`, `name`, `title`, `description`, `address`, `start_time_text`, `end_time_text`, `created_at`, `updated_at`) VALUES
(26, 11, 'en', 'Georgian&European Cuisine', 'bwp.kerdzebi.ge', 'Create your digital menu with us   Kerdzebi.ge®', 'Georgia, Batum', 'Monday', 'Saturday', '2022-01-21 07:02:44', '2022-02-05 10:34:42'),
(27, 11, 'ka', 'ქართულ&ევროპული სამზარეულო', 'კერძები.ჯი', 'შექმენი შენი ციფრული მენი ჩვენთან   Kerdzebi.ge®', 'საქართველო, ბათუმი', 'ორშაბათი', 'შაბათი', '2022-01-21 07:02:44', '2022-02-05 10:34:42'),
(28, 11, 'zh-CN', '中餐', 'Kerdzebi.ge®', 'Создайте свое цифровое меню вместе с нами   Kerdzebi.ge®', '戈尔吉拉泽海峡 巴', '星期', '/星期天', '2022-01-21 07:02:44', '2022-02-05 10:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `place_id`, `status`, `created_at`, `updated_at`) VALUES
(50, '1', 23, 1, NULL, NULL),
(51, '2', 23, 1, NULL, NULL),
(52, '3', 23, 1, NULL, NULL),
(53, '1', 24, 1, NULL, NULL),
(54, '2', 24, 1, NULL, NULL),
(55, '3', 24, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Davit Gakhokia', 'd.gakhokia@diem.ge', NULL, '$2y$10$kKLCoIQ1agyMND64EznmQO5WaTJLCRhAGCnYBXgJV/HnmEyf4YYIK', NULL, '2021-12-26 04:12:05', '2021-12-26 13:29:28'),
(2, 'დავით გახოკია', 'admin@kerdzebi.ge', NULL, '$2y$10$KJgSrIpK.m1JEiI.MGWo8uTmHxt9sqmri51P1cwZDzuFg2iYANLp.', NULL, '2022-01-11 08:02:18', '2022-01-11 08:02:18'),
(3, 'Demo', 'manager@kerdzebi.ge', NULL, '$2y$10$V2yXEOrVb8FUlmiqxNJ5Ou/fLh9RAs5rlAMLJr.p0PMXW8VSmhIGW', NULL, '2022-01-12 08:07:41', '2022-01-12 08:07:41'),
(4, 'მირიან კახიძე', 'mirka@kerdzebi.ge', NULL, '$2y$10$UbAyoNtroq28tQXKwRQtWeyW1719s3XVt5cTPqcvx1.HV6N7R4Y6C', NULL, '2022-01-30 16:01:07', '2022-01-30 16:01:07'),
(5, 'API', 'api@kerdzebi.ge', NULL, '$2y$10$A083kTmc.sLZTp5iByxKGuMiqhCeIYhlUWCIx78TamXJTDp2PUqoO', NULL, '2022-01-31 08:00:07', '2022-01-31 20:47:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_translations_category_id_locale_unique` (`category_id`,`locale`),
  ADD KEY `category_translations_locale_index` (`locale`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_translations`
--
ALTER TABLE `client_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `client_translations_client_id_locale_unique` (`client_id`,`locale`),
  ADD KEY `client_translations_locale_index` (`locale`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_translations`
--
ALTER TABLE `message_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `message_translations_message_id_locale_unique` (`message_id`,`locale`),
  ADD KEY `message_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_translations`
--
ALTER TABLE `place_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `place_translations_place_id_locale_unique` (`place_id`,`locale`),
  ADD KEY `place_translations_locale_index` (`locale`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_translations_post_id_locale_unique` (`post_id`,`locale`),
  ADD KEY `post_translations_locale_index` (`locale`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_translations_product_id_locale_unique` (`product_id`,`locale`),
  ADD KEY `product_translations_locale_index` (`locale`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting_translations_locale_index` (`locale`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `category_translations`
--
ALTER TABLE `category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `client_translations`
--
ALTER TABLE `client_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `message_translations`
--
ALTER TABLE `message_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `place_translations`
--
ALTER TABLE `place_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post_translations`
--
ALTER TABLE `post_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `product_translations`
--
ALTER TABLE `product_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `setting_translations`
--
ALTER TABLE `setting_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_translations`
--
ALTER TABLE `category_translations`
  ADD CONSTRAINT `category_translations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `client_translations`
--
ALTER TABLE `client_translations`
  ADD CONSTRAINT `client_translations_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `message_translations`
--
ALTER TABLE `message_translations`
  ADD CONSTRAINT `message_translations_message_id_foreign` FOREIGN KEY (`message_id`) REFERENCES `messages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `place_translations`
--
ALTER TABLE `place_translations`
  ADD CONSTRAINT `place_translations_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_translations`
--
ALTER TABLE `post_translations`
  ADD CONSTRAINT `post_translations_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_translations`
--
ALTER TABLE `product_translations`
  ADD CONSTRAINT `product_translations_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_translations`
--
ALTER TABLE `setting_translations`
  ADD CONSTRAINT `setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
