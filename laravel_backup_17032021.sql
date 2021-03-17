-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2021 at 09:26 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Teamliveprojects`
--

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_cart`
--

CREATE TABLE `laravel_ecommerce_cart` (
  `id` int(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `product_id` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel_ecommerce_cart`
--

INSERT INTO `laravel_ecommerce_cart` (`id`, `user_id`, `product_id`, `updated_at`, `created_at`, `quantity`) VALUES
(44, '1850951858', '23', '2021-03-15 11:51:23', '2021-03-15 06:19:09', '3'),
(42, '1850951858', '22', '2021-03-16 11:07:44', '2021-03-10 04:26:57', '54');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_categories`
--

CREATE TABLE `laravel_ecommerce_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_categories`
--

INSERT INTO `laravel_ecommerce_categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(2, NULL, 1, 'Category 2', 'category-2', '2021-02-11 22:45:47', '2021-02-11 22:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_coupons`
--

CREATE TABLE `laravel_ecommerce_coupons` (
  `id` int(250) NOT NULL,
  `coupons_name` varchar(250) NOT NULL,
  `coupons_code` varchar(250) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `valid` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_data_rows`
--

CREATE TABLE `laravel_ecommerce_data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_data_rows`
--

INSERT INTO `laravel_ecommerce_data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Parent', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Author', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Excerpt', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Created At', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Updated At', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Page Image', 0, 1, 1, 1, 1, 1, NULL, 12),
(70, 11, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(71, 11, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(72, 11, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 3),
(73, 11, 'price', 'text', 'Price', 1, 1, 1, 1, 1, 1, '{}', 7),
(74, 11, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 10),
(75, 11, 'created_at', 'timestamp', 'Created At', 1, 1, 0, 0, 0, 0, '{}', 11),
(76, 11, 'updated_at', 'timestamp', 'Updated At', 1, 1, 0, 0, 0, 0, '{}', 12),
(77, 11, 'description', 'text_area', 'Description', 1, 1, 1, 1, 1, 1, '{}', 8),
(78, 12, 'id', 'hidden', 'Id', 1, 1, 1, 1, 1, 0, '{}', 1),
(79, 12, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(80, 12, 'slug', 'text', 'Slug', 1, 1, 1, 1, 1, 1, '{}', 3),
(81, 12, 'created_at', 'date', 'Created At', 1, 1, 1, 1, 1, 1, '{}', 4),
(82, 12, 'updated_at', 'date', 'Updated At', 1, 1, 1, 1, 1, 1, '{}', 5),
(83, 14, 'id', 'hidden', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(84, 14, 'user_id', 'number', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(85, 14, 'billing_email', 'text', 'Billing Email', 1, 1, 1, 1, 1, 0, '{}', 3),
(86, 14, 'billing_name', 'text', 'Billing Name', 1, 1, 1, 1, 1, 0, '{}', 4),
(87, 14, 'billing_address', 'text', 'Billing Address', 1, 1, 1, 1, 1, 0, '{}', 5),
(88, 14, 'billing_city', 'text', 'Billing City', 1, 1, 1, 1, 1, 0, '{}', 6),
(89, 14, 'billing_postalcode', 'text', 'Billing Postalcode', 1, 0, 1, 1, 1, 0, '{}', 7),
(90, 14, 'billing_phone', 'text', 'Billing Phone', 1, 0, 1, 1, 1, 0, '{}', 8),
(91, 14, 'billing_discount', 'number', 'Billing Discount', 1, 1, 1, 0, 0, 0, '{}', 9),
(92, 14, 'billing_discountcode', 'text', 'Billing Discountcode', 1, 0, 1, 0, 0, 0, '{}', 10),
(93, 14, 'billing_subtotal', 'number', 'Billing Subtotal', 1, 1, 1, 0, 0, 0, '{}', 11),
(94, 14, 'billing_tax', 'number', 'Billing Tax', 1, 1, 1, 0, 0, 0, '{}', 12),
(95, 14, 'billing_total', 'number', 'Billing Total', 1, 1, 1, 0, 0, 0, '{}', 13),
(96, 14, 'payment_gateway', 'text', 'Payment Gateway', 1, 0, 1, 0, 0, 0, '{}', 14),
(97, 14, 'shipped', 'checkbox', 'Shipped', 1, 1, 1, 1, 0, 0, '{}', 15),
(98, 14, 'error', 'text', 'Error', 1, 1, 1, 0, 0, 0, '{}', 16),
(99, 14, 'created_at', 'date', 'Created At', 1, 1, 1, 1, 1, 0, '{}', 17),
(100, 14, 'updated_at', 'date', 'Updated At', 1, 1, 1, 1, 1, 0, '{}', 18),
(101, 15, 'id', 'hidden', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(102, 15, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 2),
(103, 15, 'type', 'select_dropdown', 'Type', 1, 1, 1, 1, 1, 1, '\"{\\\"default\\\":\\\"fixed\\\",\\\"options\\\":{\\\"fixed\\\":\\\"Fixed Value\\\",\\\"percent\\\":\\\"Percent Off\\\"}}\"', 3),
(104, 15, 'valye', 'number', 'Valye', 1, 1, 1, 1, 1, 1, '\"{\\\"null\\\":\\\"\\\"}\"', 4),
(105, 15, 'percent_off', 'number', 'Percent Off', 1, 1, 1, 1, 1, 1, '\"{\\\"null\\\":\\\"\\\"}\"', 5),
(106, 15, 'created_at', 'text', 'Created At', 1, 0, 1, 0, 0, 0, '{}', 6),
(107, 15, 'updated_at', 'text', 'Updated At', 1, 0, 1, 0, 0, 0, '{}', 7),
(108, 11, 'feature', 'checkbox', 'Feature', 1, 1, 1, 1, 1, 0, '{}', 9),
(110, 11, 'product_hasone_laravel_ecommerce_category_relationship', 'relationship', 'Categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\ProductCategories\",\"table\":\"laravel_ecommerce_categories\",\"type\":\"belongsTo\",\"column\":\"categorie\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"Demo\",\"pivot\":\"0\",\"taggable\":\"0\"}', 5),
(111, 11, 'categorie', 'hidden', 'Categorie', 1, 1, 1, 1, 1, 1, '{}', 6),
(112, 11, 'sub_images', 'multiple_images', 'Sub Images', 1, 1, 1, 1, 1, 1, '{}', 4),
(131, 18, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(132, 18, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 2),
(133, 18, 'billing_email', 'text', 'Billing Email', 1, 1, 1, 1, 1, 0, '{}', 3),
(134, 18, 'billing_name', 'text', 'Billing Name', 1, 1, 1, 1, 1, 0, '{}', 4),
(135, 18, 'billing_address', 'text', 'Billing Address', 1, 1, 1, 1, 1, 0, '{}', 5),
(136, 18, 'billing_city', 'text', 'Billing City', 1, 1, 1, 1, 1, 0, '{}', 6),
(137, 18, 'billing_postalcode', 'text', 'Billing Postalcode', 1, 1, 1, 1, 1, 0, '{}', 7),
(138, 18, 'billing_phone', 'text', 'Billing Phone', 1, 1, 1, 1, 1, 0, '{}', 8),
(139, 18, 'billing_discount', 'text', 'Billing Discount', 1, 1, 1, 1, 1, 0, '{}', 9),
(140, 18, 'billing_discountcode', 'text', 'Billing Discountcode', 1, 1, 1, 1, 1, 0, '{}', 10),
(141, 18, 'billing_subtotal', 'text', 'Billing Subtotal', 1, 1, 1, 1, 1, 0, '{}', 11),
(142, 18, 'billing_tax', 'text', 'Billing Tax', 1, 1, 1, 1, 1, 0, '{}', 12),
(143, 18, 'billing_total', 'text', 'Billing Total', 1, 1, 1, 1, 1, 0, '{}', 13),
(144, 18, 'payment_gateway', 'text', 'Payment Gateway', 1, 1, 1, 1, 1, 0, '{}', 14),
(145, 18, 'shipped', 'text', 'Shipped', 1, 1, 1, 1, 1, 0, '{}', 15),
(146, 18, 'error', 'text', 'Error', 1, 1, 1, 1, 1, 0, '{}', 16),
(147, 18, 'created_at', 'timestamp', 'Created At', 1, 0, 1, 0, 0, 0, '{}', 17),
(148, 18, 'updated_at', 'timestamp', 'Updated At', 1, 0, 1, 0, 0, 0, '{}', 18),
(149, 19, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(150, 19, 'user_id', 'text', 'User Id', 1, 0, 0, 0, 0, 0, '{}', 2),
(151, 19, 'billing_email', 'text', 'Billing Email', 1, 1, 1, 1, 1, 0, '{}', 3),
(152, 19, 'billing_name', 'text', 'Billing Name', 1, 1, 1, 1, 1, 0, '{}', 4),
(153, 19, 'billing_address', 'text', 'Billing Address', 1, 1, 1, 1, 1, 0, '{}', 5),
(154, 19, 'billing_city', 'text', 'Billing City', 1, 1, 1, 1, 1, 0, '{}', 6),
(155, 19, 'billing_postalcode', 'text', 'Billing Postalcode', 1, 1, 1, 1, 1, 0, '{}', 7),
(156, 19, 'billing_phone', 'text', 'Billing Phone', 1, 1, 1, 1, 1, 0, '{}', 8),
(157, 19, 'billing_discount', 'text', 'Billing Discount', 1, 1, 1, 1, 1, 0, '{}', 9),
(158, 19, 'billing_discountcode', 'text', 'Billing Discountcode', 1, 1, 1, 1, 1, 0, '{}', 10),
(159, 19, 'billing_subtotal', 'text', 'Billing Subtotal', 1, 1, 1, 1, 1, 0, '{}', 11),
(160, 19, 'billing_tax', 'text', 'Billing Tax', 1, 1, 1, 1, 1, 0, '{}', 12),
(161, 19, 'billing_total', 'text', 'Billing Total', 1, 1, 1, 1, 1, 0, '{}', 13),
(162, 19, 'payment_gateway', 'text', 'Payment Gateway', 1, 1, 1, 1, 1, 0, '{}', 14),
(163, 19, 'shipped', 'text', 'Shipped', 1, 1, 1, 1, 1, 0, '{}', 15),
(164, 19, 'error', 'text', 'Error', 1, 1, 1, 1, 1, 0, '{}', 16),
(165, 19, 'created_at', 'timestamp', 'Created At', 1, 0, 1, 0, 0, 0, '{}', 17),
(166, 19, 'updated_at', 'timestamp', 'Updated At', 1, 0, 1, 0, 0, 0, '{}', 18);

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_data_types`
--

CREATE TABLE `laravel_ecommerce_data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_data_types`
--

INSERT INTO `laravel_ecommerce_data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2021-02-11 22:45:38', '2021-02-11 22:45:38'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2021-02-11 22:45:38', '2021-02-11 22:45:38'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2021-02-11 22:45:38', '2021-02-11 22:45:38'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2021-02-11 22:45:46', '2021-02-11 22:45:46'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(11, 'products', 'products', 'Product', 'Products', 'voyager-bag', 'App\\Models\\Products', NULL, '\\App\\Http\\Controllers\\Voyager\\ProductController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-02-11 23:44:45', '2021-02-12 01:15:35'),
(12, 'product_categories', 'product-categories', 'Product Category', 'Product Categories', 'voyager-tag', 'App\\Models\\ProductCategories', NULL, '\\App\\Http\\Controllers\\Voyager\\ProductCategorieController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(15, 'product_coupons', 'product-coupons', 'Product Coupon', 'Product Coupons', 'voyager-dollar', 'App\\Models\\ProductCoupons', NULL, '\\App\\Http\\Controllers\\Voyager\\ProductCouponController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-02-12 00:43:40', '2021-02-12 00:43:40'),
(18, 'product_orders', 'product-orders', 'Product Order', 'Product Orders', 'voyager-truck', 'App\\Models\\ProductOrders', NULL, 'App\\Http\\Controllers\\Voyager\\productOrder', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-03-11 11:45:11', '2021-03-11 11:45:11'),
(19, 'product_orders', 'product-orders', 'Product Order', 'Product Orders', 'voyager-truck', 'App\\Models\\ProductOrders', NULL, 'App\\Http\\Controllers\\Voyager\\productOrder', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-03-11 11:46:44', '2021-03-11 11:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_failed_jobs`
--

CREATE TABLE `laravel_ecommerce_failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_menus`
--

CREATE TABLE `laravel_ecommerce_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_menus`
--

INSERT INTO `laravel_ecommerce_menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-02-11 22:45:39', '2021-02-11 22:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_menu_items`
--

CREATE TABLE `laravel_ecommerce_menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_menu_items`
--

INSERT INTO `laravel_ecommerce_menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2021-02-11 22:45:39', '2021-02-11 22:45:39', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 6, '2021-02-11 22:45:40', '2021-03-11 11:48:10', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2021-02-11 22:45:40', '2021-02-11 22:45:40', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2021-02-11 22:45:40', '2021-02-11 22:45:40', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2021-02-11 22:45:40', '2021-03-11 11:48:10', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2021-02-11 22:45:40', '2021-02-11 23:00:42', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2021-02-11 22:45:40', '2021-02-11 23:00:43', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2021-02-11 22:45:40', '2021-02-11 23:00:43', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2021-02-11 22:45:40', '2021-02-11 23:00:43', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 12, '2021-02-11 22:45:40', '2021-03-11 11:48:10', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 9, '2021-02-11 22:45:47', '2021-03-11 11:48:10', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 7, '2021-02-11 22:45:48', '2021-03-11 11:48:10', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 8, '2021-02-11 22:45:49', '2021-03-11 11:48:10', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 5, '2021-02-11 22:45:51', '2021-02-11 23:00:43', 'voyager.hooks', NULL),
(18, 1, 'Products', '', '_self', 'voyager-bag', NULL, NULL, 4, '2021-02-11 23:44:45', '2021-02-11 23:46:04', 'voyager.products.index', NULL),
(19, 1, 'Product Categories', '', '_self', 'voyager-tag', NULL, NULL, 5, '2021-02-12 00:00:48', '2021-02-12 00:45:45', 'voyager.product-categories.index', NULL),
(20, 1, 'Product Orders', '', '_self', 'voyager-truck', NULL, NULL, 10, '2021-03-11 11:46:44', '2021-03-11 11:48:10', 'voyager.product-orders.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_migrations`
--

CREATE TABLE `laravel_ecommerce_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_migrations`
--

INSERT INTO `laravel_ecommerce_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_05_19_173453_create_menu_table', 1),
(6, '2016_10_21_190000_create_roles_table', 1),
(7, '2016_10_21_190000_create_settings_table', 1),
(8, '2016_11_30_135954_create_permission_table', 1),
(9, '2016_11_30_141208_create_permission_role_table', 1),
(10, '2016_12_26_201236_data_types__add__server_side', 1),
(11, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(12, '2017_01_14_005015_create_translations_table', 1),
(13, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(14, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(15, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(16, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(17, '2017_08_05_000000_add_group_to_settings_table', 1),
(18, '2017_11_26_013050_add_user_role_relationship', 1),
(19, '2017_11_26_015000_create_user_roles_table', 1),
(20, '2018_03_11_000000_add_user_settings', 1),
(21, '2018_03_14_000000_add_details_to_data_types_table', 1),
(22, '2018_03_16_000000_make_settings_value_nullable', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2016_01_01_000000_create_pages_table', 2),
(25, '2016_01_01_000000_create_posts_table', 2),
(26, '2016_02_15_204651_create_categories_table', 2),
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_pages`
--

CREATE TABLE `laravel_ecommerce_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_pages`
--

INSERT INTO `laravel_ecommerce_pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2021-02-11 22:45:49', '2021-02-11 22:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_password_resets`
--

CREATE TABLE `laravel_ecommerce_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_permissions`
--

CREATE TABLE `laravel_ecommerce_permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_permissions`
--

INSERT INTO `laravel_ecommerce_permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(2, 'browse_bread', NULL, '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(3, 'browse_database', NULL, '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(4, 'browse_media', NULL, '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(5, 'browse_compass', NULL, '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(6, 'browse_menus', 'menus', '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(7, 'read_menus', 'menus', '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(8, 'edit_menus', 'menus', '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(9, 'add_menus', 'menus', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(10, 'delete_menus', 'menus', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(11, 'browse_roles', 'roles', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(12, 'read_roles', 'roles', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(13, 'edit_roles', 'roles', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(14, 'add_roles', 'roles', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(15, 'delete_roles', 'roles', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(16, 'browse_users', 'users', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(17, 'read_users', 'users', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(18, 'edit_users', 'users', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(19, 'add_users', 'users', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(20, 'delete_users', 'users', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(21, 'browse_settings', 'settings', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(22, 'read_settings', 'settings', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(23, 'edit_settings', 'settings', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(24, 'add_settings', 'settings', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(25, 'delete_settings', 'settings', '2021-02-11 22:45:41', '2021-02-11 22:45:41'),
(26, 'browse_categories', 'categories', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(27, 'read_categories', 'categories', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(28, 'edit_categories', 'categories', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(29, 'add_categories', 'categories', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(30, 'delete_categories', 'categories', '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(31, 'browse_posts', 'posts', '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(32, 'read_posts', 'posts', '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(33, 'edit_posts', 'posts', '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(34, 'add_posts', 'posts', '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(35, 'delete_posts', 'posts', '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(36, 'browse_pages', 'pages', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(37, 'read_pages', 'pages', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(38, 'edit_pages', 'pages', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(39, 'add_pages', 'pages', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(40, 'delete_pages', 'pages', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(41, 'browse_hooks', NULL, '2021-02-11 22:45:51', '2021-02-11 22:45:51'),
(52, 'browse_products', 'products', '2021-02-11 23:44:45', '2021-02-11 23:44:45'),
(53, 'read_products', 'products', '2021-02-11 23:44:45', '2021-02-11 23:44:45'),
(54, 'edit_products', 'products', '2021-02-11 23:44:45', '2021-02-11 23:44:45'),
(55, 'add_products', 'products', '2021-02-11 23:44:45', '2021-02-11 23:44:45'),
(56, 'delete_products', 'products', '2021-02-11 23:44:45', '2021-02-11 23:44:45'),
(57, 'browse_product_categories', 'product_categories', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(58, 'read_product_categories', 'product_categories', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(59, 'edit_product_categories', 'product_categories', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(60, 'add_product_categories', 'product_categories', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(61, 'delete_product_categories', 'product_categories', '2021-02-12 00:00:48', '2021-02-12 00:00:48'),
(62, 'browse_orders', 'orders', '2021-02-12 00:27:39', '2021-02-12 00:27:39'),
(63, 'read_orders', 'orders', '2021-02-12 00:27:39', '2021-02-12 00:27:39'),
(64, 'edit_orders', 'orders', '2021-02-12 00:27:39', '2021-02-12 00:27:39'),
(65, 'add_orders', 'orders', '2021-02-12 00:27:39', '2021-02-12 00:27:39'),
(66, 'delete_orders', 'orders', '2021-02-12 00:27:39', '2021-02-12 00:27:39'),
(67, 'browse_product_orders', 'product_orders', '2021-02-12 00:34:56', '2021-02-12 00:34:56'),
(68, 'read_product_orders', 'product_orders', '2021-02-12 00:34:56', '2021-02-12 00:34:56'),
(69, 'edit_product_orders', 'product_orders', '2021-02-12 00:34:56', '2021-02-12 00:34:56'),
(70, 'add_product_orders', 'product_orders', '2021-02-12 00:34:56', '2021-02-12 00:34:56'),
(71, 'delete_product_orders', 'product_orders', '2021-02-12 00:34:56', '2021-02-12 00:34:56'),
(72, 'browse_product_coupons', 'product_coupons', '2021-02-12 00:43:40', '2021-02-12 00:43:40'),
(73, 'read_product_coupons', 'product_coupons', '2021-02-12 00:43:40', '2021-02-12 00:43:40'),
(74, 'edit_product_coupons', 'product_coupons', '2021-02-12 00:43:40', '2021-02-12 00:43:40'),
(75, 'add_product_coupons', 'product_coupons', '2021-02-12 00:43:40', '2021-02-12 00:43:40'),
(76, 'delete_product_coupons', 'product_coupons', '2021-02-12 00:43:40', '2021-02-12 00:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_permission_role`
--

CREATE TABLE `laravel_ecommerce_permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_permission_role`
--

INSERT INTO `laravel_ecommerce_permission_role` (`permission_id`, `role_id`) VALUES
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
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1);

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_posts`
--

CREATE TABLE `laravel_ecommerce_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_posts`
--

INSERT INTO `laravel_ecommerce_posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\r\n                <h2>We can use all kinds of format!</h2>\r\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-11 22:45:48', '2021-02-11 22:45:48'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\r\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\r\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2021-02-11 22:45:48', '2021-02-11 22:45:48');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_products`
--

CREATE TABLE `laravel_ecommerce_products` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `sub_images` varchar(250) NOT NULL,
  `categorie` varchar(250) NOT NULL,
  `feature` int(250) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laravel_ecommerce_products`
--

INSERT INTO `laravel_ecommerce_products` (`id`, `name`, `image`, `sub_images`, `categorie`, `feature`, `description`, `price`, `slug`, `created_at`, `updated_at`) VALUES
(22, 'Product 4', 'products/February2021/mlH6g6U5MOvKgZcL3nDG.jpg', '[\"products\\/March2021\\/Fn3EtkJ6tV8gPs6LsqDZ.jpg\",\"products\\/March2021\\/u6mBq523eCoe9MJdf8VC.jpg\",\"products\\/March2021\\/43cG2ZEZQjzc0w2SkBdJ.jpg\"]', '2', 1, 'Test', '572.00', 'Product-4', '2021-02-26 05:10:32', '2021-03-05 05:11:31'),
(23, 'Product 5', 'products/March2021/Piuv8Qi62u09hkKWRIvh.jpg', '[\"products\\/March2021\\/ATSdOIuQKs5rrI1cFcPO.jpg\",\"products\\/March2021\\/lr1AmW6VE1qhvFpPbnud.jpg\",\"products\\/March2021\\/B1ziUKrwYrOkJ78gmDXc.jpg\"]', '2', 0, 'test', '150', 'product-4', '2021-03-05 08:33:40', '2021-03-05 08:41:26'),
(24, 'Product 6', 'products/March2021/7NWvNp3ezA7cpcQVclX9.jpg', '[\"products\\/March2021\\/fCBqKo7Gryp35pFPTVL9.jpg\",\"products\\/March2021\\/T3sMbkcBR0stQnw4ZbLr.jpg\",\"products\\/March2021\\/LvNkDB2VLrVGt2CjHqDv.jpg\"]', '2', 0, 'test', '999', 'product-6', '2021-03-05 08:40:18', '2021-03-05 08:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_product_categories`
--

CREATE TABLE `laravel_ecommerce_product_categories` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laravel_ecommerce_product_categories`
--

INSERT INTO `laravel_ecommerce_product_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', 'laptops', '2021-02-12 00:00:00', '2021-02-12 00:00:00'),
(2, 'Test', 'test', '2021-03-04 00:00:00', '2021-03-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_product_orders`
--

CREATE TABLE `laravel_ecommerce_product_orders` (
  `id` int(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `billing_email` varchar(250) NOT NULL,
  `billing_name` varchar(250) NOT NULL,
  `billing_address` varchar(250) NOT NULL,
  `billing_city` varchar(250) NOT NULL,
  `billing_postalcode` varchar(250) NOT NULL,
  `billing_phone` varchar(250) NOT NULL,
  `billing_discount` varchar(250) NOT NULL,
  `billing_discountcode` varchar(250) NOT NULL,
  `billing_subtotal` varchar(250) NOT NULL,
  `billing_tax` varchar(250) NOT NULL,
  `billing_total` varchar(250) NOT NULL,
  `payment_gateway` varchar(250) NOT NULL,
  `shipped` varchar(250) NOT NULL,
  `error` varchar(250) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laravel_ecommerce_product_orders`
--

INSERT INTO `laravel_ecommerce_product_orders` (`id`, `user_id`, `billing_email`, `billing_name`, `billing_address`, `billing_city`, `billing_postalcode`, `billing_phone`, `billing_discount`, `billing_discountcode`, `billing_subtotal`, `billing_tax`, `billing_total`, `payment_gateway`, `shipped`, `error`, `created_at`, `updated_at`) VALUES
(1, '121', 'adminadmin@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '5026', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(2, '121', 'adminadmin@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '5026', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(3, '121', 'Harman7b@gmail.com', 'Laravel', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '5026', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(4, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '21042', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(5, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '21042', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(6, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '21042', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(7, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '21042', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(8, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '21042', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(9, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '22186', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(10, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '23330', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(11, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '23330', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(12, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '25046', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(13, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(14, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(15, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(16, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(17, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(18, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(19, '121', 'Harman7b@gmail.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '28478', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(20, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '29622', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(21, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(22, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '29622', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(23, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(24, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(25, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '29622', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(26, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '29622', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(27, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(28, '121', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', 'vdfvdfv', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(29, '121', 'Harman7b@gmail.com', 'id_rsa_sajan', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '30766', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(30, '121', 'parteeksalwan025@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '30194', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(31, '23', 'admin@admin.com', 'id_rsa_putty', 'Amsterdam, NY, USA', 'Amsterdam', '12010', '9592974915', '121', '121', '121', '121', '30766', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(32, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(33, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(34, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(35, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(36, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(37, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(38, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(39, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(40, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(41, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(42, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00'),
(43, '23', 'karansharma4109@gmail.com', 'Karan', 'MAIN BAZAR, BHARA PATTI', 'VERKA', '143501', '8195047683', '121', '121', '121', '121', '31338', 'stripe', 'false', 'no', '2021-03-16 00:00:00', '2021-03-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_roles`
--

CREATE TABLE `laravel_ecommerce_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_roles`
--

INSERT INTO `laravel_ecommerce_roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2021-02-11 22:45:40', '2021-02-11 22:45:40'),
(2, 'user', 'Normal User', '2021-02-11 22:45:40', '2021-02-11 22:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_settings`
--

CREATE TABLE `laravel_ecommerce_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_settings`
--

INSERT INTO `laravel_ecommerce_settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome to Voyager. The Missing Admin for Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_translations`
--

CREATE TABLE `laravel_ecommerce_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_translations`
--

INSERT INTO `laravel_ecommerce_translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2021-02-11 22:45:49', '2021-02-11 22:45:49'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2021-02-11 22:45:50', '2021-02-11 22:45:50'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2021-02-11 22:45:51', '2021-02-11 22:45:51'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2021-02-11 22:45:51', '2021-02-11 22:45:51'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2021-02-11 22:45:51', '2021-02-11 22:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_userMeasurement`
--

CREATE TABLE `laravel_ecommerce_userMeasurement` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `Neck` varchar(255) NOT NULL,
  `Shoulder` varchar(255) NOT NULL,
  `X_front` varchar(255) NOT NULL,
  `Bust` varchar(255) NOT NULL,
  `Under_bust` varchar(255) NOT NULL,
  `Waist` varchar(255) NOT NULL,
  `Lower_waist` varchar(255) NOT NULL,
  `Hip` varchar(255) NOT NULL,
  `Arm_hole` varchar(255) NOT NULL,
  `Muscle` varchar(255) NOT NULL,
  `SLV_full_length` varchar(255) NOT NULL,
  `Elbow` varchar(255) NOT NULL,
  `Cuff` varchar(255) NOT NULL,
  `Thigh` varchar(255) NOT NULL,
  `Knee` varchar(255) NOT NULL,
  `Calf` varchar(255) NOT NULL,
  `Ankle_hem` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laravel_ecommerce_userMeasurement`
--

INSERT INTO `laravel_ecommerce_userMeasurement` (`id`, `user_id`, `Neck`, `Shoulder`, `X_front`, `Bust`, `Under_bust`, `Waist`, `Lower_waist`, `Hip`, `Arm_hole`, `Muscle`, `SLV_full_length`, `Elbow`, `Cuff`, `Thigh`, `Knee`, `Calf`, `Ankle_hem`) VALUES
(7, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(6, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(5, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(4, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(8, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(9, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(10, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(11, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(12, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(13, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(14, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(15, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0'),
(16, '23', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_users`
--

CREATE TABLE `laravel_ecommerce_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laravel_ecommerce_users`
--

INSERT INTO `laravel_ecommerce_users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$9ez6rtYSSd.v2Zy1bt0eM.4XMuq9PJGNVMWM4Yrx9KlT/XBMrEvJ6', 'dF2nJOfuBlH7tsUn8EYARHl49RvOlhLvtXRIbodKqy1EDfF3hfG4xC7WCL1T', NULL, '2021-02-11 22:45:47', '2021-02-11 22:45:47'),
(2, 2, 'Harman', 'Harman@gmail.com', 'users/default.png', NULL, '$2y$10$rO3tv5h4o4PVe/jvdvsJ3esHTs/x6nS7osiqc./blNC6gbWSswPYC', NULL, '{\"locale\":\"en\"}', '2021-03-15 11:40:34', '2021-03-15 11:40:34'),
(3, 2, 'TEST', 'test@a.c', 'users/default.png', NULL, '$2y$10$26Jy418VMv99WSU8Aj87e.zpgqTinDn1a3h4tRadJatH/BRy0auoq', NULL, '{\"locale\":\"en\"}', '2021-03-15 12:42:23', '2021-03-15 12:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_ecommerce_user_roles`
--

CREATE TABLE `laravel_ecommerce_user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laravel_ecommerce_cart`
--
ALTER TABLE `laravel_ecommerce_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_categories`
--
ALTER TABLE `laravel_ecommerce_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_coupons`
--
ALTER TABLE `laravel_ecommerce_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_data_rows`
--
ALTER TABLE `laravel_ecommerce_data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `laravel_ecommerce_data_types`
--
ALTER TABLE `laravel_ecommerce_data_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_menu_items`
--
ALTER TABLE `laravel_ecommerce_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `laravel_ecommerce_migrations`
--
ALTER TABLE `laravel_ecommerce_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_permissions`
--
ALTER TABLE `laravel_ecommerce_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_products`
--
ALTER TABLE `laravel_ecommerce_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_product_categories`
--
ALTER TABLE `laravel_ecommerce_product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_product_orders`
--
ALTER TABLE `laravel_ecommerce_product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_userMeasurement`
--
ALTER TABLE `laravel_ecommerce_userMeasurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_ecommerce_users`
--
ALTER TABLE `laravel_ecommerce_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laravel_ecommerce_cart`
--
ALTER TABLE `laravel_ecommerce_cart`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_categories`
--
ALTER TABLE `laravel_ecommerce_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_coupons`
--
ALTER TABLE `laravel_ecommerce_coupons`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_data_rows`
--
ALTER TABLE `laravel_ecommerce_data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_data_types`
--
ALTER TABLE `laravel_ecommerce_data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_menu_items`
--
ALTER TABLE `laravel_ecommerce_menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_permissions`
--
ALTER TABLE `laravel_ecommerce_permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_products`
--
ALTER TABLE `laravel_ecommerce_products`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_product_categories`
--
ALTER TABLE `laravel_ecommerce_product_categories`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_product_orders`
--
ALTER TABLE `laravel_ecommerce_product_orders`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_userMeasurement`
--
ALTER TABLE `laravel_ecommerce_userMeasurement`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `laravel_ecommerce_users`
--
ALTER TABLE `laravel_ecommerce_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
