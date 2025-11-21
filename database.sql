-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2025 at 04:28 PM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 8.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwandadiabetes_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `year`, `file`, `created_at`, `updated_at`) VALUES
(1, '2016', 'http://www.umwezi.net/?p=6836', '2024-10-24 09:53:39', '2024-10-24 09:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `carousel_items`
--

CREATE TABLE `carousel_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousel_items`
--

INSERT INTO `carousel_items` (`id`, `title`, `description`, `link`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'image 2', NULL, 'about', '20241028171903.jpg', '2024-10-28 15:19:03', '2024-10-28 15:19:03'),
(3, 'image 1', NULL, 'about', '20241028173013.jpg', '2024-10-28 15:30:13', '2024-10-28 15:30:13'),
(4, 'image 3', NULL, 'about', '20241028173039.jpg', '2024-10-28 15:30:39', '2024-10-28 15:30:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'our story', 'our_story', '2024-10-24 10:10:52', '2024-10-24 10:11:38'),
(2, NULL, 1, 'our mission', 'our_mission', '2024-10-24 10:11:23', '2024-10-24 10:11:23'),
(3, NULL, 1, 'our vision', 'our_vision', '2024-10-24 10:11:59', '2024-10-24 10:11:59'),
(4, NULL, 1, 'our activities', 'our_activities', '2024-10-24 10:13:13', '2024-10-24 10:13:13'),
(5, NULL, 1, 'activities', 'activities', '2024-10-24 10:27:36', '2024-10-24 10:27:36'),
(6, NULL, 1, 'general', 'general', '2024-10-24 10:50:07', '2024-10-24 10:50:07'),
(7, NULL, 1, 'about', 'about', '2024-10-25 16:51:42', '2024-10-25 16:51:42'),
(8, NULL, 1, 'News & Events', 'news-&-events', '2024-10-28 16:23:38', '2024-10-28 16:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `post` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `message`, `post`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'comment', 'world-diabetes-day-2021', '2024-10-31 06:16:47', '2024-10-31 06:16:47');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
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
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(30, 5, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '{}', 2),
(31, 5, 'category_id', 'text', 'Category', 0, 0, 1, 1, 1, 0, '{}', 3),
(32, 5, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 5, 'excerpt', 'text_area', 'Excerpt', 0, 0, 1, 1, 1, 1, '{}', 5),
(34, 5, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '{}', 6),
(35, 5, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 10),
(39, 5, 'status', 'select_dropdown', 'Status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 12),
(41, 5, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(42, 5, 'seo_title', 'text', 'SEO Title', 0, 0, 1, 1, 1, 1, '{}', 14),
(43, 5, 'featured', 'checkbox', 'Featured', 1, 0, 1, 1, 1, 1, '{}', 15),
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
(62, 9, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(63, 9, 'title', 'text_area', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(64, 9, 'file', 'file', 'File', 0, 1, 1, 1, 1, 1, '{}', 3),
(65, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(66, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(80, 12, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(81, 12, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(82, 12, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, '{}', 4),
(83, 12, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 5),
(84, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(85, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(86, 12, 'disease', 'text', 'Disease', 0, 1, 1, 1, 1, 1, '{}', 6),
(87, 12, 'phone', 'text', 'Phone', 0, 1, 1, 1, 1, 1, '{}', 7),
(88, 12, 'headline', 'text', 'Headline', 0, 1, 1, 1, 1, 1, '{}', 3),
(89, 13, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(90, 13, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(91, 13, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 3),
(92, 13, 'website', 'text', 'Website', 0, 1, 1, 1, 1, 1, '{}', 4),
(93, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(94, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(95, 15, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(96, 15, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(97, 15, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, '{}', 4),
(98, 15, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(99, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(100, 15, 'poster', 'image', 'Poster', 0, 1, 1, 1, 1, 1, '{}', 3),
(101, 18, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 18, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(103, 18, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 3),
(104, 18, 'photo', 'image', 'Photo', 0, 1, 1, 1, 1, 1, '{}', 4),
(105, 18, 'department', 'text', 'Department', 0, 1, 1, 1, 1, 1, '{}', 5),
(106, 18, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(107, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(108, 19, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(109, 19, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(110, 19, 'logo', 'image', 'Logo', 0, 1, 1, 1, 1, 1, '{}', 3),
(111, 19, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(112, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(113, 20, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(114, 20, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 2),
(115, 20, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(116, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(117, 21, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(118, 21, 'event', 'text', 'Event', 0, 1, 1, 1, 1, 1, '{}', 2),
(119, 21, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 3),
(120, 21, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(121, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(128, 23, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(129, 23, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 2),
(130, 23, 'poster', 'image', 'Poster', 0, 1, 1, 1, 1, 1, '{}', 3),
(131, 23, 'content', 'rich_text_box', 'Content', 0, 1, 1, 1, 1, 1, '{}', 4),
(132, 23, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(133, 23, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(134, 23, 'engagement', 'text', 'Engagement', 0, 1, 1, 1, 1, 1, '{}', 5),
(135, 23, 'program_belongsto_engagement_relationship', 'relationship', 'engagements', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Engagement\",\"table\":\"engagements\",\"type\":\"belongsTo\",\"column\":\"engagement\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":null}', 8),
(136, 24, 'id', 'hidden', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(137, 24, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(138, 24, 'email', 'text', 'Email', 0, 1, 1, 1, 1, 1, '{}', 3),
(139, 24, 'message', 'text_area', 'Message', 0, 1, 1, 1, 1, 1, '{}', 4),
(140, 24, 'post', 'text', 'Post', 0, 1, 1, 1, 1, 1, '{}', 5),
(141, 24, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(142, 24, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(144, 25, 'id', 'time', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(145, 25, 'year', 'text', 'Year', 0, 1, 1, 1, 1, 1, '{}', 2),
(146, 25, 'file', 'text', 'Link', 0, 1, 1, 1, 1, 1, '{}', 3),
(147, 25, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(148, 25, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(150, 26, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(151, 26, 'name', 'text', 'Name', 0, 1, 1, 1, 1, 1, '{}', 2),
(152, 26, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(153, 26, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(160, 19, 'type', 'select_dropdown', 'Type', 0, 1, 1, 1, 1, 1, '{\"default\":\"PROJECT\",\"options\":{\"1\":\"PROJECT\",\"2\":\"STRATEGIC \"}}', 6);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-12-15 14:18:11', '2020-12-15 14:18:11'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-12-15 14:18:12', '2020-12-15 14:18:12'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-12-15 14:18:12', '2020-12-15 14:18:12'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-12-15 14:18:28', '2020-12-15 14:18:28'),
(5, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2020-12-15 14:18:30', '2021-04-08 12:19:32'),
(6, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-12-15 14:18:34', '2020-12-15 14:18:34'),
(9, 'resources', 'resources', 'Resource', 'Resources', 'voyager-paperclip', 'App\\Resource', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(12, 'stories', 'stories', 'Story', 'Stories', 'voyager-activity', 'App\\Story', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-12-18 08:18:15', '2020-12-21 11:32:31'),
(13, 'members', 'members', 'Member', 'Members', 'voyager-people', 'App\\Member', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(15, 'engagements', 'engagements', 'Engagement', 'Engagements', 'voyager-list', 'App\\Engagement', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-21 10:18:19', '2020-12-21 10:18:19'),
(16, 'Gallery', 'gallery', 'Gallery', 'Galleries', 'voyager-images', 'App\\Gallery', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(18, 'workers', 'workers', 'Worker', 'Workers', 'voyager-group', 'App\\Worker', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(19, 'partners', 'partners', 'Partner', 'Partners', 'voyager-paw', 'App\\Partner', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-12-22 12:58:56', '2021-04-06 10:16:30'),
(20, 'subscribers', 'subscribers', 'Subscriber', 'Subscribers', 'voyager-smile', 'App\\Subscriber', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(21, 'galleries', 'galleries', 'Gallery', 'Galleries', 'voyager-images', 'App\\Gallery', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-12-29 08:07:27', '2020-12-29 08:48:14'),
(23, 'programs', 'programs', 'Program', 'Programs', 'voyager-data', 'App\\Program', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(24, 'comments', 'comments', 'Comment', 'Comments', 'voyager-chat', 'App\\Comment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(25, 'calendars', 'calendars', 'Calendar', 'Calendars', 'voyager-calendar', 'App\\Calendar', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2021-03-30 11:53:29', '2021-04-09 07:38:55'),
(26, 'post_types', 'post-types', 'Post Type', 'Post Types', 'voyager-info-circled', 'App\\PostType', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2021-03-31 11:34:41', '2021-03-31 11:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `engagements`
--

CREATE TABLE `engagements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `poster` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `engagements`
--

INSERT INTO `engagements` (`id`, `title`, `content`, `created_at`, `updated_at`, `poster`) VALUES
(1, 'OUR ACTIVITIES', 'our activities', '2024-10-31 10:40:12', '2024-10-31 10:40:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `event` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `event`, `image`, `created_at`, `updated_at`) VALUES
(1, 'event 1', '20241029090121.jpg', '2024-10-29 06:54:53', '2024-10-29 07:01:21'),
(2, 'event 2', '20241029090038.jpg', '2024-10-29 07:00:38', '2024-10-29 07:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `website` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-12-15 14:18:14', '2020-12-15 14:18:14');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-12-15 14:18:14', '2020-12-15 14:18:14', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-12-15 14:18:14', '2020-12-15 14:18:14', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-12-15 14:18:14', '2020-12-15 14:18:14', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-12-15 14:18:15', '2020-12-15 14:18:15', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 10, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 11, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 12, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 13, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 14, '2020-12-15 14:18:15', '2020-12-15 14:18:15', 'voyager.settings.index', NULL),
(11, 1, 'Categories', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-12-15 14:18:29', '2020-12-15 14:18:29', 'voyager.categories.index', NULL),
(12, 1, 'Posts', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-12-15 14:18:32', '2020-12-15 14:18:32', 'voyager.posts.index', NULL),
(13, 1, 'Pages', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-12-15 14:18:35', '2020-12-15 14:18:35', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 5, 13, '2020-12-15 14:18:40', '2020-12-15 14:18:40', 'voyager.hooks', NULL),
(17, 1, 'Resources', '', '_self', 'voyager-paperclip', NULL, NULL, 16, '2020-12-16 08:25:36', '2020-12-16 08:25:36', 'voyager.resources.index', NULL),
(20, 1, 'Stories', '', '_self', 'voyager-activity', NULL, NULL, 18, '2020-12-18 08:18:15', '2020-12-18 08:18:15', 'voyager.stories.index', NULL),
(21, 1, 'Members', '', '_self', 'voyager-people', NULL, NULL, 19, '2020-12-18 11:53:26', '2020-12-18 11:53:26', 'voyager.members.index', NULL),
(22, 1, 'Engagements', '', '_self', 'voyager-list', NULL, NULL, 20, '2020-12-21 10:18:20', '2020-12-21 10:18:20', 'voyager.engagements.index', NULL),
(25, 1, 'Workers', '', '_self', 'voyager-group', NULL, NULL, 22, '2020-12-22 11:49:54', '2020-12-22 11:49:54', 'voyager.workers.index', NULL),
(26, 1, 'Partners', '', '_self', 'voyager-paw', NULL, NULL, 23, '2020-12-22 12:58:56', '2020-12-22 12:58:56', 'voyager.partners.index', NULL),
(27, 1, 'Subscribers', '', '_self', 'voyager-smile', NULL, NULL, 24, '2020-12-29 07:30:16', '2020-12-29 07:30:16', 'voyager.subscribers.index', NULL),
(28, 1, 'Galleries', '', '_self', 'voyager-images', NULL, NULL, 25, '2020-12-29 08:07:28', '2020-12-29 08:07:28', 'voyager.galleries.index', NULL),
(30, 1, 'Programs', '', '_self', 'voyager-data', NULL, NULL, 26, '2020-12-30 08:10:00', '2020-12-30 08:10:00', 'voyager.programs.index', NULL),
(31, 1, 'Comments', '', '_self', 'voyager-chat', NULL, NULL, 27, '2021-01-04 07:05:30', '2021-01-04 07:05:30', 'voyager.comments.index', NULL),
(32, 1, 'Calendars', '', '_self', 'voyager-calendar', NULL, NULL, 28, '2021-03-30 11:53:30', '2021-03-30 11:53:30', 'voyager.calendars.index', NULL),
(33, 1, 'Post Types', '', '_self', 'voyager-info-circled', NULL, NULL, 29, '2021-03-31 11:34:44', '2021-03-31 11:34:44', 'voyager.post-types.index', NULL);

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
(27, '2017_04_11_000000_alter_post_nullable_fields_table', 2),
(29, '2022_06_04_205418_create_newsletter', 2),
(30, '2024_07_16_074539_create_banners_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `ncd_news`
--

CREATE TABLE `ncd_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `logo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `logo`, `created_at`, `updated_at`, `type`) VALUES
(1, 'rbc', '20241024120301.jpg', '2024-10-24 10:03:01', '2024-10-24 10:03:01', 1),
(2, 'pih', '20241024120320.jpg', '2024-10-24 10:03:20', '2024-10-24 10:03:20', 1),
(3, 'tt', '20241024120451.jpg', '2024-10-24 10:04:51', '2024-10-24 10:04:51', 1),
(4, 'insulin', '20241024120515.png', '2024-10-24 10:05:15', '2024-10-24 10:05:15', 1),
(5, 'diabetes empowerment international', '20241202103733.jpg', '2024-12-02 08:37:33', '2024-12-02 08:37:33', 1),
(6, 'world diabetes foundation', '20241202104112.png', '2024-12-02 08:41:12', '2024-12-02 08:41:12', 1),
(7, 'THE T1D community fund', '20241202104506.jpg', '2024-12-02 08:45:06', '2024-12-02 08:45:06', 1),
(8, 'Life for a Child', '20241202104833.jpg', '2024-12-02 08:48:33', '2024-12-02 08:48:33', 1);

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
('rwandadiabetes@gmail.com', '$2y$10$CTb1QgUKN/wwSD4Bdyic7eYi5Z98HweVbXqy7THBYnRLicbkOt35W', '2024-11-04 10:19:45'),
('kabosierik@gmail.com', '$2y$10$cirrsC0WOGEw0G1kmwRMFuFO1PVJrK4bUwJy7unIHKpb9rnr5JwZG', '2024-11-04 17:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-12-15 14:18:15', '2020-12-15 14:18:15'),
(2, 'browse_bread', NULL, '2020-12-15 14:18:15', '2020-12-15 14:18:15'),
(3, 'browse_database', NULL, '2020-12-15 14:18:15', '2020-12-15 14:18:15'),
(4, 'browse_media', NULL, '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(5, 'browse_compass', NULL, '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(6, 'browse_menus', 'menus', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(7, 'read_menus', 'menus', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(8, 'edit_menus', 'menus', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(9, 'add_menus', 'menus', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(10, 'delete_menus', 'menus', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(11, 'browse_roles', 'roles', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(12, 'read_roles', 'roles', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(13, 'edit_roles', 'roles', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(14, 'add_roles', 'roles', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(15, 'delete_roles', 'roles', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(16, 'browse_users', 'users', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(17, 'read_users', 'users', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(18, 'edit_users', 'users', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(19, 'add_users', 'users', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(20, 'delete_users', 'users', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(21, 'browse_settings', 'settings', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(22, 'read_settings', 'settings', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(23, 'edit_settings', 'settings', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(24, 'add_settings', 'settings', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(25, 'delete_settings', 'settings', '2020-12-15 14:18:16', '2020-12-15 14:18:16'),
(26, 'browse_categories', 'categories', '2020-12-15 14:18:29', '2020-12-15 14:18:29'),
(27, 'read_categories', 'categories', '2020-12-15 14:18:29', '2020-12-15 14:18:29'),
(28, 'edit_categories', 'categories', '2020-12-15 14:18:29', '2020-12-15 14:18:29'),
(29, 'add_categories', 'categories', '2020-12-15 14:18:29', '2020-12-15 14:18:29'),
(30, 'delete_categories', 'categories', '2020-12-15 14:18:29', '2020-12-15 14:18:29'),
(31, 'browse_posts', 'posts', '2020-12-15 14:18:32', '2020-12-15 14:18:32'),
(32, 'read_posts', 'posts', '2020-12-15 14:18:32', '2020-12-15 14:18:32'),
(33, 'edit_posts', 'posts', '2020-12-15 14:18:32', '2020-12-15 14:18:32'),
(34, 'add_posts', 'posts', '2020-12-15 14:18:33', '2020-12-15 14:18:33'),
(35, 'delete_posts', 'posts', '2020-12-15 14:18:33', '2020-12-15 14:18:33'),
(36, 'browse_pages', 'pages', '2020-12-15 14:18:35', '2020-12-15 14:18:35'),
(37, 'read_pages', 'pages', '2020-12-15 14:18:36', '2020-12-15 14:18:36'),
(38, 'edit_pages', 'pages', '2020-12-15 14:18:36', '2020-12-15 14:18:36'),
(39, 'add_pages', 'pages', '2020-12-15 14:18:36', '2020-12-15 14:18:36'),
(40, 'delete_pages', 'pages', '2020-12-15 14:18:36', '2020-12-15 14:18:36'),
(41, 'browse_hooks', NULL, '2020-12-15 14:18:40', '2020-12-15 14:18:40'),
(52, 'browse_resources', 'resources', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(53, 'read_resources', 'resources', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(54, 'edit_resources', 'resources', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(55, 'add_resources', 'resources', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(56, 'delete_resources', 'resources', '2020-12-16 08:25:36', '2020-12-16 08:25:36'),
(67, 'browse_stories', 'stories', '2020-12-18 08:18:15', '2020-12-18 08:18:15'),
(68, 'read_stories', 'stories', '2020-12-18 08:18:15', '2020-12-18 08:18:15'),
(69, 'edit_stories', 'stories', '2020-12-18 08:18:15', '2020-12-18 08:18:15'),
(70, 'add_stories', 'stories', '2020-12-18 08:18:15', '2020-12-18 08:18:15'),
(71, 'delete_stories', 'stories', '2020-12-18 08:18:15', '2020-12-18 08:18:15'),
(72, 'browse_members', 'members', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(73, 'read_members', 'members', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(74, 'edit_members', 'members', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(75, 'add_members', 'members', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(76, 'delete_members', 'members', '2020-12-18 11:53:26', '2020-12-18 11:53:26'),
(77, 'browse_engagements', 'engagements', '2020-12-21 10:18:20', '2020-12-21 10:18:20'),
(78, 'read_engagements', 'engagements', '2020-12-21 10:18:20', '2020-12-21 10:18:20'),
(79, 'edit_engagements', 'engagements', '2020-12-21 10:18:20', '2020-12-21 10:18:20'),
(80, 'add_engagements', 'engagements', '2020-12-21 10:18:20', '2020-12-21 10:18:20'),
(81, 'delete_engagements', 'engagements', '2020-12-21 10:18:20', '2020-12-21 10:18:20'),
(82, 'browse_Gallery', 'Gallery', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(83, 'read_Gallery', 'Gallery', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(84, 'edit_Gallery', 'Gallery', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(85, 'add_Gallery', 'Gallery', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(86, 'delete_Gallery', 'Gallery', '2020-12-21 10:47:45', '2020-12-21 10:47:45'),
(92, 'browse_workers', 'workers', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(93, 'read_workers', 'workers', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(94, 'edit_workers', 'workers', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(95, 'add_workers', 'workers', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(96, 'delete_workers', 'workers', '2020-12-22 11:49:54', '2020-12-22 11:49:54'),
(97, 'browse_partners', 'partners', '2020-12-22 12:58:56', '2020-12-22 12:58:56'),
(98, 'read_partners', 'partners', '2020-12-22 12:58:56', '2020-12-22 12:58:56'),
(99, 'edit_partners', 'partners', '2020-12-22 12:58:56', '2020-12-22 12:58:56'),
(100, 'add_partners', 'partners', '2020-12-22 12:58:56', '2020-12-22 12:58:56'),
(101, 'delete_partners', 'partners', '2020-12-22 12:58:56', '2020-12-22 12:58:56'),
(102, 'browse_subscribers', 'subscribers', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(103, 'read_subscribers', 'subscribers', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(104, 'edit_subscribers', 'subscribers', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(105, 'add_subscribers', 'subscribers', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(106, 'delete_subscribers', 'subscribers', '2020-12-29 07:30:16', '2020-12-29 07:30:16'),
(107, 'browse_galleries', 'galleries', '2020-12-29 08:07:28', '2020-12-29 08:07:28'),
(108, 'read_galleries', 'galleries', '2020-12-29 08:07:28', '2020-12-29 08:07:28'),
(109, 'edit_galleries', 'galleries', '2020-12-29 08:07:28', '2020-12-29 08:07:28'),
(110, 'add_galleries', 'galleries', '2020-12-29 08:07:28', '2020-12-29 08:07:28'),
(111, 'delete_galleries', 'galleries', '2020-12-29 08:07:28', '2020-12-29 08:07:28'),
(117, 'browse_programs', 'programs', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(118, 'read_programs', 'programs', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(119, 'edit_programs', 'programs', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(120, 'add_programs', 'programs', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(121, 'delete_programs', 'programs', '2020-12-30 08:10:00', '2020-12-30 08:10:00'),
(122, 'browse_comments', 'comments', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(123, 'read_comments', 'comments', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(124, 'edit_comments', 'comments', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(125, 'add_comments', 'comments', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(126, 'delete_comments', 'comments', '2021-01-04 07:05:30', '2021-01-04 07:05:30'),
(127, 'browse_calendars', 'calendars', '2021-03-30 11:53:29', '2021-03-30 11:53:29'),
(128, 'read_calendars', 'calendars', '2021-03-30 11:53:29', '2021-03-30 11:53:29'),
(129, 'edit_calendars', 'calendars', '2021-03-30 11:53:29', '2021-03-30 11:53:29'),
(130, 'add_calendars', 'calendars', '2021-03-30 11:53:29', '2021-03-30 11:53:29'),
(131, 'delete_calendars', 'calendars', '2021-03-30 11:53:29', '2021-03-30 11:53:29'),
(132, 'browse_post_types', 'post_types', '2021-03-31 11:34:41', '2021-03-31 11:34:41'),
(133, 'read_post_types', 'post_types', '2021-03-31 11:34:41', '2021-03-31 11:34:41'),
(134, 'edit_post_types', 'post_types', '2021-03-31 11:34:41', '2021-03-31 11:34:41'),
(135, 'add_post_types', 'post_types', '2021-03-31 11:34:41', '2021-03-31 11:34:41'),
(136, 'delete_post_types', 'post_types', '2021-03-31 11:34:41', '2021-03-31 11:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 3),
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
(31, 3),
(32, 1),
(32, 3),
(33, 1),
(33, 3),
(34, 1),
(34, 3),
(35, 1),
(35, 3),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 3),
(67, 1),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 1),
(72, 3),
(73, 1),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 1),
(78, 3),
(79, 1),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 1),
(84, 3),
(85, 1),
(85, 3),
(86, 1),
(86, 3),
(92, 1),
(92, 3),
(93, 1),
(93, 3),
(94, 1),
(94, 3),
(95, 1),
(95, 3),
(96, 1),
(96, 3),
(97, 1),
(97, 3),
(98, 1),
(98, 3),
(99, 1),
(99, 3),
(100, 1),
(100, 3),
(101, 1),
(101, 3),
(102, 1),
(102, 3),
(103, 1),
(103, 3),
(104, 1),
(105, 1),
(106, 1),
(106, 3),
(107, 1),
(107, 3),
(108, 1),
(108, 3),
(109, 1),
(109, 3),
(110, 1),
(110, 3),
(111, 1),
(111, 3),
(117, 1),
(117, 3),
(118, 1),
(118, 3),
(119, 1),
(119, 3),
(120, 1),
(120, 3),
(121, 1),
(121, 3),
(122, 1),
(122, 3),
(123, 1),
(123, 3),
(124, 1),
(125, 1),
(126, 1),
(126, 3),
(127, 1),
(127, 3),
(128, 1),
(128, 3),
(129, 1),
(129, 3),
(130, 1),
(130, 3),
(131, 1),
(131, 3),
(132, 1),
(133, 1),
(134, 1),
(135, 1),
(136, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'our story', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">In 1996,&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">François Gishoma</strong>&nbsp;was running a successful construction business in Rwanda when he suddenly fell very ill. He quickly went into a coma and was diagnosed with Type 2 diabetes at King Faisal Hospital, before spending 1.8 million Rwandan Francs to restore his health. After being discharged, he began to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">research the disease and connect with other diabetics living in Rwanda</strong>. While he had the means to pay for treatments, he recognized that the vast majority of Rwandans did not. As his complications increased, his construction business declined and he set out on a quest to start an association.&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">In 1997, the Rwanda Diabetes Association was born</strong>. Initially, Francois was interested in exploring the realities of people who lived with diabetes during the genocide. Soon after, the activities of the association began to revolve around the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">opening of a clinic</strong>&nbsp;– the same one that we run today! Francois dedicated the rest of his life to serving people living with diabetes in Rwanda. The RDA became an official member of the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">International Diabetes Federation</strong>&nbsp;in 2003.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2015/11/MG_2422.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"size-full wp-image-265 aligncenter\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2015/11/MG_2422.jpg\" alt=\"_MG_2422\" width=\"863\" height=\"300\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2015/11/MG_2422.jpg 863w, https://rwandadiabetes.rw/wp-content/uploads/2015/11/MG_2422-300x104.jpg 300w\" sizes=\"(max-width: 863px) 100vw, 863px\" data-pagespeed-url-hash=\"3364440129\" style=\"height: auto; max-width: 100%; margin: 0px auto; padding: 0px; border: 0px; clear: both; display: block;\"></a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">Diabetes is a major challenge for&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">health</strong>&nbsp;and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">development</strong>&nbsp;in the 21st century. This chronic and incurable disease is largely&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">preventable</strong>&nbsp;but remains responsible for&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">millions of deaths</strong>&nbsp;every year and many more&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">life-threatening complications</strong>. No country, rich or poor, is immune to the epidemic. According to the Diabetes Atlas, the prevalence in Rwanda is about 3.2% of the population. RDA is a non-governmental organization that was&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">founded in 1997</strong>&nbsp;with the mission of promoting&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">diabetes care</strong>,&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">preventing</strong>&nbsp;and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">curing diabetes</strong>&nbsp;in Rwanda,&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">supporting</strong>&nbsp;diabetics and their families and joining the global efforts to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">advocate</strong>&nbsp;for diabetic people.</p>', '20241024121512.jpg', 'our-story', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:15:12', '2024-10-24 10:15:12'),
(2, 3, 7, 'OUR ACTIVITIES', NULL, NULL, '<ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: \"Open Sans\";\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">In our <a href=\"http://rwandadiabetes.rw/?page_id=183\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\">clinic</a> in Kinamba, Kigali, we provide <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">medical treatment</strong>, information on diabetes management and nutrition, <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">counselling</strong> and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">medical supplies</strong>. We promote <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">innovations</strong> in diabetic research, create networks between stakeholders and we host the <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">registry</strong> of diabetics in Rwanda.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Our “<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Care for Youth with Diabetes Program</strong>” (Life for A Child) provides care and education for children and young adults up to 25 years who live with diabetes. Thanks to this program, the supply of <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">free insulin</strong>, needles, glucose meters and test strips have been available since 2003.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">We reach diabetics all over Rwanda through <a href=\"http://rwandadiabetes.rw/?page_id=224\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\">outreach</a> initiatives and quarterly visits to <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">district hospitals</strong>, where we provide the necessary support, awareness, diabetes education and medical supplies.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">At our <a href=\"http://rwandadiabetes.rw/?page_id=189\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\">Diabetes Education Center</a> in Mwurire (near Rwamagana) we provide six months of <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">vocational training</strong> and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">diabetes management</strong> lessons for vulnerable young diabetics – enabling them to be self-reliant after the Life for A Child program.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">In addition, we organize annual <a href=\"http://rwandadiabetes.rw/?page_id=187\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\">diabetes camps</a> which assist <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">youth and young adults</strong> with diabetes to overcome some of the challenges they face, raising <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">hope</strong> in their lives.</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Other regular activities include the <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">free diabetes screening</strong> and information during <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day</strong> and other <a href=\"http://rwandadiabetes.rw/?page_id=226\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\">public or private events</a>. We also <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">train</strong> health professionals and raise <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">awareness</strong> through radio talk shows and newspaper articles.</li></ul>', '20241025191143.jpg', 'our-activities', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:16:52', '2024-10-25 17:11:43'),
(3, 3, 7, 'OUR MISSION', NULL, NULL, '<ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: \"Open Sans\";\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">PREVENT </strong>and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">TREAT</strong><b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"> </b>diabetes and its complications</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">EDUCATE</strong> and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">MOBILIZE</strong> the population of Rwanda around diabetes awareness</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">RESEARCH</strong> and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">PROMOTE</strong> the welfare of people living with diabetes and their families</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">ADVOCATE</strong> and <strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">PARTNER</strong> with the Rwandan government, national and international organizations to fight against diabetes</li></ul>', '20241025191113.jpg', 'our-mission', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:18:16', '2024-10-25 17:11:13'),
(4, 3, 7, 'OUR VISION', NULL, NULL, '<ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: \"Open Sans\";\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">An environment whereby nobody is dying because of diabetes.</li></ul>', '20241025191054.jpg', 'our-vision', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:19:51', '2024-10-25 17:10:54'),
(5, 3, 5, 'Clinic in Kinamba', NULL, NULL, '<span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Come check out our clinic in Kigali, Rwanda! We are located at&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/?page_id=114\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219);\">KN 8 Ave, No. 175 in Kinamba</a></strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">. We provide medical&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">treatment</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">, information on&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">diabetes management</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">&nbsp;and&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">nutrition</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">,&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">counselling</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">&nbsp;and&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">medical supplies</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">. We are committed to promoting&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">innovations</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">&nbsp;in diabetes treatment and creating&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">networks</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">&nbsp;between stakeholders in diabetic care. Our clinic also houses the national&nbsp;</span><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; font-weight: bold; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">registry</strong><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">&nbsp;of diabetics in Rwanda.</span>', '20241024122854.jpg', 'clinic-in-kinamba', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:28:54', '2024-10-24 10:28:54'),
(6, 3, 5, 'Education Center', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">We are currently raising funds to finish the construction of our new Education Centre. Click on&nbsp;<a href=\"https://www.generosity.com/education-fundraising/vocational-school-for-youth-with-diabetes-rwanda/x/15459346\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">this link</a>&nbsp;to support us!</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">At our Diabetes Education Center in Mwurire we provided vulnerable young diabetics with&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">6 months</strong>&nbsp;of training on&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">diabetes management</strong>&nbsp;and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">vocational skills</strong>.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">Because diabetes is currently an&nbsp;expensive disease to treat in Rwanda, our goal is to equip&nbsp;selected youth with the skills to manage their disease once they are no longer once they are no longer covered by the&nbsp;<a href=\"http://rwandadiabetes.rw/?page_id=187\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Life for a Child</a>&nbsp;program. The youth are recruited during our&nbsp;<a href=\"http://rwandadiabetes.rw/?page_id=224\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">quarterly hospital visits</a>&nbsp;and proceed to live at the Center, taking courses&nbsp;that range from&nbsp;cooking and gardening to&nbsp;beautician training&nbsp;and agriculture.</p>', '20241024123041.jpg', 'education-center', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:30:41', '2024-10-24 10:30:41'),
(7, 3, 5, 'Public Events', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: center;\">In addition to all of our regular programs and activities, we organize a variety of public and private events throughout the year. From World Diabetes Day and campaigning at the Tour du Rwanda, to the training of health professionals and raising awareness through radio talk shows and newspaper articles,&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">we recognize the importance of spreading our messages to the public</strong>. Diabetes is a largely preventable disease and an&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">informed population</strong>&nbsp;plays a critical role in halting the epidemic.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/01/MVI_6374.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"size-full wp-image-289 aligncenter\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2016/01/MVI_6374.jpg\" alt=\"MVI_6374\" width=\"701\" height=\"300\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2016/01/MVI_6374.jpg 701w, https://rwandadiabetes.rw/wp-content/uploads/2016/01/MVI_6374-300x128.jpg 300w\" sizes=\"(max-width: 701px) 100vw, 701px\" data-pagespeed-url-hash=\"943319369\" style=\"height: auto; max-width: 100%; margin: 0px auto; padding: 0px; border: 0px; clear: both; display: block;\"></a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p>', '20241024123253.jpg', 'public-events', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:32:53', '2024-10-24 10:32:53'),
(8, 3, 5, 'Outreach', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: center;\">In addition to our regular programs and activities, the Rwanda Diabetes Association engages in frequent&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">home and hospital visits</strong>. We have&nbsp;a dedicated team that conducts&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">quarterly visits</strong>&nbsp;to district hospitals in Rwanda. We provide these hospitals with the necessary support,&nbsp;educational information and medical medical supplies. Our home visits&nbsp;serve as a way of connecting with people living with diabetes around the country, raising awareness and diagnosing people in rural areas.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: center;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/01/IMG_1022.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"size-full wp-image-295 aligncenter\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2016/01/IMG_1022.jpg\" alt=\"IMG_1022\" width=\"697\" height=\"300\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2016/01/IMG_1022.jpg 697w, https://rwandadiabetes.rw/wp-content/uploads/2016/01/IMG_1022-300x129.jpg 300w\" sizes=\"(max-width: 697px) 100vw, 697px\" data-pagespeed-url-hash=\"4163605507\" style=\"height: auto; max-width: 100%; margin: 0px auto; padding: 0px; border: 0px; clear: both; display: block;\"></a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p>', '20241024123420.jpg', 'outreach', NULL, NULL, 'PUBLISHED', 0, '2024-10-24 10:34:20', '2024-10-24 10:34:20'),
(9, 3, 6, 'At western province type1 diabetes camp', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">At western province type1 diabetes camp, we are dedicated to creating a supportive and fun environment where individuals living with Type 1 Diabetes can thrive.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Our camp is designed to provide not only a safe space for learning and growth but also a place to build lifelong friendships and gain valuable skills for managing&nbsp;diabetes</p><figure class=\"wp-block-image size-large\" style=\"margin-bottom: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68);\"><img decoding=\"async\" width=\"1024\" height=\"680\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-1024x680.jpg\" alt=\"\" class=\"wp-image-527\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-1024x680.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-300x199.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-768x510.jpg 768w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-1536x1020.jpg 1536w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-2048x1360.jpg 2048w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-27-120x80.jpg 120w\" sizes=\"(max-width: 1024px) 100vw, 1024px\" data-pagespeed-url-hash=\"1007675559\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px; vertical-align: bottom;\"></a></figure><figure class=\"wp-block-gallery has-nested-images columns-default is-cropped wp-block-gallery-1 is-layout-flex wp-block-gallery-is-layout-flex\" style=\"margin-bottom: 0px; gap: var(--wp--style--gallery-gap-default,var(--gallery-block--gutter-size,var(--wp--style--block-gap,.5em))); padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; display: flex; flex-wrap: wrap; align-items: normal; --wp--style--unstable-gallery-gap: var(--wp--style--gallery-gap-default,var(--gallery-block--gutter-size,var(--wp--style--block-gap,.5em))); color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><figure class=\"wp-block-image size-large\" style=\"margin-bottom: 0px; padding: 0px; border: 0px; vertical-align: baseline; display: flex; flex-direction: column; flex-grow: 1; justify-content: center; max-width: 100%; position: relative; width: calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667); align-self: inherit;\"><a href=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68); flex-direction: column; flex: 1 0 0%; display: flex; height: 181.016px; object-fit: cover; width: 272.609px;\"><img decoding=\"async\" width=\"1024\" height=\"680\" data-id=\"526\" src=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-1024x680.jpg\" alt=\"\" class=\"wp-image-526\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-1024x680.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-300x199.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-768x510.jpg 768w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-1536x1020.jpg 1536w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-2048x1360.jpg 2048w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/1-3-120x80.jpg 120w\" sizes=\"(max-width: 1024px) 100vw, 1024px\" data-pagespeed-url-hash=\"3008174174\" style=\"height: 181.016px; max-width: 100%; margin: 0px; padding: 0px; border: 0px; vertical-align: bottom; display: block; width: 272.609px; flex: 1 0 0%; object-fit: cover;\"></a></figure><figure class=\"wp-block-image size-large\" style=\"margin-bottom: 0px; padding: 0px; border: 0px; vertical-align: baseline; display: flex; flex-direction: column; flex-grow: 1; justify-content: center; max-width: 100%; position: relative; width: calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667); align-self: inherit;\"><a href=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(68, 68, 68); flex-direction: column; flex: 1 0 0%; display: flex; height: 181.016px; object-fit: cover; width: 272.609px;\"><img loading=\"lazy\" decoding=\"async\" width=\"1024\" height=\"680\" data-id=\"525\" src=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-1024x680.jpg\" alt=\"\" class=\"wp-image-525\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-1024x680.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-300x199.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-768x510.jpg 768w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-1536x1020.jpg 1536w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-2048x1360.jpg 2048w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0105-120x80.jpg 120w\" sizes=\"(max-width: 1024px) 100vw, 1024px\" data-pagespeed-url-hash=\"1598421151\" style=\"height: 181.016px; max-width: 100%; margin: 0px; padding: 0px; border: 0px; vertical-align: bottom; display: block; width: 272.609px; flex: 1 0 0%; object-fit: cover;\"></a></figure><figure class=\"wp-block-image size-large\" style=\"margin-bottom: 0px; padding: 0px; border: 0px; vertical-align: baseline; display: flex; flex-direction: column; flex-grow: 1; justify-content: center; max-width: 100%; position: relative; width: calc(33.33% - var(--wp--style--unstable-gallery-gap, 16px)*.66667); align-self: inherit;\"><font color=\"#444444\"><span style=\"border-style: initial; border-color: initial; border-image: initial; flex-direction: column; height: 181.016px; width: 272.609px;\"><img loading=\"lazy\" decoding=\"async\" width=\"1024\" height=\"680\" data-id=\"528\" src=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-1024x680.jpg\" alt=\"\" class=\"wp-image-528\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-1024x680.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-300x199.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-768x510.jpg 768w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-1536x1020.jpg 1536w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-2048x1360.jpg 2048w, https://rwandadiabetes.rw/wp-content/uploads/2024/08/DSC0077-120x80.jpg 120w\" sizes=\"(max-width: 1024px) 100vw, 1024px\" data-pagespeed-url-hash=\"1935188649\" style=\"height: 181.016px; max-width: 100%; margin: 0px; padding: 0px; border: 0px; vertical-align: bottom; display: block; width: 272.609px; flex: 1 0 0%; object-fit: cover;\"></span></font></figure></figure>', '20241024125402.jpg', 'at-western-province-type1-diabetes-camp', NULL, NULL, 'PUBLISHED', 1, '2024-10-24 10:54:03', '2024-10-24 10:54:03'),
(10, 3, 8, 'RDA joins the campaign to encourage sports in Rwanda during the Olympic Day', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">On 23rd June, Rwanda Diabetes Association&nbsp;joined&nbsp;Rwanda Olympic Commitee on the Olympic day 2012 at Petit Stade Kigali. Many&nbsp;activities were organised during this event including a walk in Kigali, aerobics&nbsp;and a race for kids. Rwanda Diabetes Association&nbsp; assisted the Rwanda Olympic Committee with preparation.&nbsp;ARD staff&nbsp;provided a free&nbsp;screening and education to the present participants composed&nbsp;of politicians, sportsmen, teachers and students. 7% of the people screened were diagnosed diabetic (high blood sugar)&nbsp;and only one of them was aware about his situation. The speakers emphasised on the importance of physical activities to prevent diabetes and other cardio-vascular diseases.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;The event ended with songs performed by famous singers in Kigali, KITOKO and Dream Boys and the all the kids were singing and dancing along.</p>', '20241028182652.jpg', 'rda-joins-the-campaign-to-encourage-sports-in-rwanda-during-the-olympic-day', NULL, NULL, 'PUBLISHED', 0, '2024-10-28 16:26:52', '2024-10-28 16:26:52'),
(11, 3, 5, 'HEALTH PROFESSIONALS TRAINING ON DIABETES', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Rwanda Diabetes Association is a body that was formed principally to&nbsp;promote both medical and health welfare of people suffering from&nbsp;diabetes in Rwanda. In this regard to the improvement of human&nbsp;resources&nbsp;that is intended to help the Association in the fight and the prevention of diabetes.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The Association in conjunction with the World Diabetes Foundation (WDF) and the Ministry of Health for 5 years have managed to train over 800 Health professionals in Rwanda who have actually played a vital role in the treatment and care&nbsp;towards diabetes patients in the country.</p>', '20241029061917.jpg', 'health-professionals-training-on-diabetes', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 04:19:17', '2024-10-29 04:19:17');
INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(12, 3, 6, 'THE FIRST DIABETES YOUTH CAMP IN RWANDA, FROM 6TH TO 12TH JANUARY 2013', NULL, NULL, '<p align=\"center\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The first diabetes youth camp in Rwanda took place with success at Mwulire Educational Center from 6th to 12<span style=\"margin: 0px; padding: 0px; border: 0px; font-size: 10.5px; vertical-align: baseline; line-height: 0; position: relative; top: -0.5em;\">th</span>&nbsp;January 2013.The camp was attended by 52 diabetes youth under 26 years old from all areas of the country. Organized by the RWANDA DIABETES ASSOCIATION and supported by special guests from&nbsp;&nbsp; GERMANY, Mme Heidi Schmidt- Schmiedebach (Insulin Zum Leben) and JuttaBurger-Busing (Diabetes-Zentrum), together with Rwanda Diabetes Association were the main sponsors of the camp.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04934.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"wp-image-82 alignleft\" alt=\"DSC04934\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04934-1024x768.jpg\" width=\"614\" height=\"461\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04934-1024x768.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04934-300x225.jpg 300w\" sizes=\"(max-width: 614px) 100vw, 614px\" data-pagespeed-url-hash=\"1528474834\" style=\"height: auto; max-width: 100%; margin: 10px 10px 10px 0px; padding: 0px; border: 0px; float: left;\"></a>The reason of this camp was to start to resolve some problems which came from the status diagnosed in most of the young people with diabetic in Rwanda helped by Rwanda Diabetes Association characterized by lack of knowledge about self management vis-à-vis diabetes, loneliness, lack of confidence about their future because many of them stopped schools because of diabetes and stigmatization from themselves and their circle of acquaintances.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The purpose of this camp initiated by Rwanda Diabetes Association was to raise hope of youth with diabetes in Rwanda&nbsp;which&nbsp;is&nbsp;rarely&nbsp;existent&nbsp;in the youth’s diabetes life. The MOTTO word of the first camp in Rwanda was “<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Live better with diabetes“.</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">An experience that will change their lives</i></b><b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"></i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">5 days of diabetes education, sharing experiences and fun</i></b><b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"></i></b><b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\"></i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Making relationship between youth</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Meeting with others from all regions in order to avoid isolation</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Survive counting on their families without depending on them</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Get more information about diabetes</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">–&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Get a chance to ask as much as possible the questions about challenges of their life style.</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The camp was opened officially on its 5th day by the delegate of the Minister,&nbsp;<b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Dr Adolphe Karenzi</b>&nbsp;from the Ministry of Health, Non Communicable Disease department because of his many duties; he could not come on the first day. He encouraged youth with diabetes to follow up carefully their health by following seriously the tips got from the camp and from their treating team; you are the future of Rwanda and we want you to be healthy for its best, he added.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">He saluted ARD initiative and the honor of being partner of such innovative efforts. He ended by saying that the Ministry of Health in collaboration with their partners like ARD will do the best in order to improve the life of diabetes patients and to keep this happening.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The local authorities were represented by the delegate of the mayor who has in his speech guaranteed the authority’s support and security during the activities of camp.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: center;\"><img decoding=\"async\" class=\"wp-image-83 aligncenter\" alt=\"DSC04945\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04945-1024x768.jpg\" width=\"717\" height=\"538\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04945-1024x768.jpg 1024w, https://rwandadiabetes.rw/wp-content/uploads/2013/05/DSC04945-300x225.jpg 300w\" sizes=\"(max-width: 717px) 100vw, 717px\" data-pagespeed-url-hash=\"3255148446\" style=\"height: auto; max-width: 100%; margin: 0px auto; padding: 0px; border: 0px; clear: both; display: block;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><b style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><i style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Opening speech by Dr KARENZI the representative of Ministry of health (left), Crispin Gishoma, coordinator of the camp (right)</i></b></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The ARD representative in his speech, Crispin Gishoma thanked and welcomed participants and guests, he invited the youth to be attentive during the camp in order to have sufficient knowledge about diabetes and to share experiences acquired among them. He invited also the youth to express their fillings and ideas and have fun.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Heidi Schimidit Schimiedebach from Insulin Zum Leben from Germany, the main sponsor of the camp has emphasized on the use of the assets they have to live better with diabetes. According to her own experience as a diabetic and diabetes educator, having diabetes is not the end of life. The objective of the camp is to restore hope so that anything cannot stop your activities. Note that other anonymous German donors supported this camp.</p>', '20241029070026.jpg', 'the-first-diabetes-youth-camp-in-rwanda-from-6th-to-12th-january-2013', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:00:26', '2024-10-29 05:00:26'),
(13, 3, 5, 'DIABETES CONVERSATION MAP IN RWANDA', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">“&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\"><em style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">I would have been dead without ARD’s help, my knowledge about diabetes saved me, before I was desperate and use to have accidents which I did not know the causes and since I was educated, I manage diabetes better, I feel confident, healthier and I can work</em></strong>” witnessed a patient educated using Diabetes Conversation MAP in Rwanda.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Diabetes as an incurable diseases with long term complications, has to be well known by a diabetes patients hence learning to live with it 24hours a day. To avoid complications, it is therefore important and crucial as far as possible for a diabetic to have knowledge about diabetes in order to adopt an appropriate life style</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">To make it happen, Rwanda diabetes Association (ARD) has stepped up effort to help diabetes patients through teaching so as to enhance their knowledge about diabetes disease; as well as improving their welfare</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">METHODOLOGY USED</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Normally within ARD’s responsibilities, education and training about diabetes are priorities and it is done on a daily basis, it is therefore out of this ARD makes a lot efforts for its personnel being trained as well as health professionals from different hospitals in the country, so that it reaches as many as possible patients across the country. Our aim is to inform and educate the best diabetes self follow-up and self management.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Two educators from ARD, Ugirumurera Anne-Marie and Mukamazimpaka Alivera were selected to be trained on Diabetes Conversation Map in Uganda, test, fostering more on diabetes education through the use of the new tool of diabetes education Conversation map tool. The two expert educators on Conversation MAP tool trained other educators in ARD’s staff and this knowledge is kept shared in Rwanda through hospitals.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Here are the names of hospitals the Conversation MAP tool is being used to educate patients after the educators trained the nurses:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Ruhengeri hospital, &nbsp;Nyanza hospital, CS Nyanza, Muhororo hospital, Kibungo hospital, Shyira, Kabaya Gisenyi, Gitwe hospital, Nemba , Ruli hospitals, Ngarama, Clinique iramiro and Muhororo, Gisenyi ,CHUB</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">By now 470 diabetes have been educated and 520 youth with diabetes type 1</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">This work have been accomplished through our partners’ cooperation, namely IDF, Eli Lily, the Ministry of Health and the above mentioned hospitals, by availing nurses as to enable them to participate in this activity.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">ARD faced a number of challenges during this action including limited budget, and the fact that the trained nurses delay in reporting results, which enables to know how successful made it.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">OUR VISION</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Our vision is to extend the program country wide, hospitals, health centers and homes. The more people we reach, the more we save.</p>', '20241029070219.jpg', 'diabetes-conversation-map-in-rwanda', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:02:19', '2024-10-29 05:02:19'),
(14, 3, 5, 'Launch of World Diabetes Day by fighting overweight and discrimination of over-weighted and diabetics people', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Together with the over-weighted people &nbsp;living in Kigali who sometimes fear to show up in public, Rwanda Diabetes Association launched the WDD by encouraging the over-weighted people to make sports and advocate against discrimination of this category of people.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05551.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"alignleft size-medium wp-image-68\" title=\"Over-weighted person from Kigali with a blue circle pin of World Diabetes Day Campaign\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05551-300x225.jpg\" alt=\"\" width=\"300\" height=\"225\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05551-300x225.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05551-1024x768.jpg 1024w\" sizes=\"(max-width: 300px) 100vw, 300px\" data-pagespeed-url-hash=\"3357666652\" style=\"height: auto; max-width: 100%; margin: 10px 10px 10px 0px; padding: 0px; border: 0px; float: left;\"></a></p><div style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Diabetes type 2 as a result of&nbsp;over-weight, this category of people is mostly treated&nbsp;unfavorably&nbsp;the same as other people in the society. The launch event was made into four activities:</div><div style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;-Education about diabetes and nutrition</div><div style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">-swiming</div><div style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">– Screening</div><div style=\"margin: 0px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">– walkAll these main activities were made to show the&nbsp;over-weighted&nbsp;people&nbsp;that&nbsp;exercise is not meant for some particular category of people, everyone can make exercise whatever weight he/she got. Rwanda Diabetes Association wanted to emphasize on how important exercise and a healthy diet is to fight against Diabetes and cardio-vascular diseases. A commitment to make it a&nbsp;weekly&nbsp;event came out of the present people.</div>', '20241029070353.jpg', 'launch-of-world-diabetes-day-by-fighting-overweight-and-discrimination-of-over-weighted-and-diabetics-people', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:03:53', '2024-10-29 05:03:53'),
(15, 3, 5, 'Rwanda Diabetes Association involves the health authorities to the World Diabetes Day campaign', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The World Diabetes Day is the most used opportunity to advocate, educate and make diabetes&nbsp;awareness &nbsp;in Rwanda. Rwanda Diabetes Association with its partners have not yet decided what events will be done on that day but the&nbsp;campaign&nbsp;has already started with a number of activities such as its introduction to the directors of hospitals and other health authorities who are the main actors in the World Diabetes Day.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05221.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"alignleft size-medium wp-image-58\" title=\"SAM_0522\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05221-300x225.jpg\" alt=\"\" width=\"300\" height=\"225\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05221-300x225.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2012/08/SAM_05221-1024x768.jpg 1024w\" sizes=\"(max-width: 300px) 100vw, 300px\" data-pagespeed-url-hash=\"2472613112\" style=\"height: auto; max-width: 100%; margin: 10px 10px 10px 0px; padding: 0px; border: 0px; float: left;\"></a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Youth with diabetes from&nbsp;Kigali who are registered in Life For A Child Program received &nbsp;meters and strips through this campaign&nbsp;launch. The media in Rwanda will also be one of the target to reach in the coming days since their contribution is crucial for the World Diabetes Day success.</p>', '20241029071419.PNG', 'rwanda-diabetes-association-involves-the-health-authorities-to-the-world-diabetes-day-campaign', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:14:20', '2024-10-29 05:14:20'),
(16, 3, 8, 'RDA DIRECTOR FEATURED ON HEALTH ON EARTH', NULL, NULL, '<span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">This month RDA Director, Crispin Gishoma, was featured on the Montreal-based radio station CKUT 90.3FM’s show Health on Earth.&nbsp;On this show,&nbsp;Crispin shares his thoughts on diabetes in Rwanda. You’ll also hear from members of the RDA’s partner organization RIIO. To listen to the episode, click&nbsp;</span><a href=\"http://www.healthonearth.net/2016/05/chronic-diseases-for-majority-world.html\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; color: rgb(52, 152, 219); background-color: rgb(255, 255, 255); font-weight: bold; font-family: &quot;Open Sans&quot;;\">HERE</a><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">.</span>', '20241029071845.jpg', 'rda-director-featured-on-health-on-earth', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:18:45', '2024-10-29 05:18:45'),
(17, 3, 8, 'An exciting and easy organization logo development competition', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The East African Non-Communicable Diseases Alliances (EANCDA) is an umbrella union of national Non-Communicable Disease (NCDs) Alliances from Burundi, Kenya, Rwanda, Tanzania, Uganda and Zanzibar. These are united by the goal of working towards the prevention and control of NCDs in the region. The country alliances are in turn unions of the different national societies of NCDs (such as Cancer Societies, Diabetes Associations, Cardiovascular/Heart Disease Associations) and other related associations and civil society.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/04/Logo-competition-announcement.docx\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Click here</a>&nbsp;for more information about the competition.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/04/Logo-competition-announcement-II.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"alignnone wp-image-387\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2016/04/Logo-competition-announcement-II-150x150.jpg\" alt=\"Logo competition announcement II\" width=\"332\" height=\"332\" data-pagespeed-url-hash=\"3114447710\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\"></a></p>', '20241029072110.png', 'an-exciting-and-easy-organization-logo-development-competition', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:21:10', '2024-10-29 05:21:10'),
(18, 3, 8, 'RDA 2016 Calendar', NULL, NULL, '<span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">RDA welcomes you to it’s activities, for more details&nbsp;</span><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/04/Calendrier-2016-RDA-PLAN2.pdf\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; color: rgb(52, 152, 219); background-color: rgb(255, 255, 255); font-weight: bold; font-family: &quot;Open Sans&quot;;\">click here</a>', '20241029072219.jpg', 'rda-2016-calendar', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:22:20', '2024-10-29 05:22:20'),
(19, 3, 8, 'International conference on NCDs Kigali 2016', NULL, NULL, '<a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/04/POSTER-A2.pdf\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: baseline; color: rgb(52, 152, 219); background-color: rgb(255, 255, 255); font-weight: bold; font-family: &quot;Open Sans&quot;;\">Click here to learn more</a>', '20241029072453.png', 'international-conference-on-ncds-kigali-2016', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:24:53', '2024-10-29 05:24:53'),
(20, 3, 6, 'World Diabetes Day 2015', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Diabetes has reached epidemic proportions worldwide and is associated with a large economic burden, increased risk of cardiovascular disease, and premature mortality.</strong>&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Hyperglycaemia is the hallmark clinical manifestation of diabetes and evolves through a multi factorial aetiology of genetic, environmental, and behavioural enablers.</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">Approximately 90% of diabetes cases are the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">non-insulin-dependent</strong>&nbsp;phenotype, which is characterized by a progressive deterioration in insulin-mediated glucose disposal, particularly by peripheral tissues. The most proximal behavioural cause of insulin resistance is&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">physical inactivity</strong>. Indeed, several streams of scientific research have demonstrated a role for physical activity in the aetiology and prevention of diabetes and its related morbidity. According to Diabetes Atlas 7<span style=\"margin: 0px; padding: 0px; border: 0px; font-size: 10.5px; vertical-align: baseline; line-height: 0; position: relative; top: -0.5em;\">th</span>&nbsp;edition, in sub Saharan countries 62,5% of the community living with diabetes are&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">not diagnosed</strong>. Diabetes awareness through campaigns could enhance knowledge of the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Rwandan people</strong>&nbsp;to diabetes check up and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">prevent onset complications</strong>.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">The&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day</strong>&nbsp;led by the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">International Diabetes Federation</strong>&nbsp;and its member associations around the world and it is always an opportunity to raise awareness and advocate for the diabetes patients. In Rwanda, together with the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Ministry of Health of Rwanda/Rwanda Biomedical Center</strong>,&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Rwanda Diabetes Association</strong>&nbsp;and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Team Type 1</strong>, The&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day</strong>&nbsp;was celebrated around the Cycling tour of Rwanda.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">Rwanda Biomedical Center/NCDs Division in collaboration with&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Rwanda Diabetes Association</strong>&nbsp;and&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Team Type 1</strong>&nbsp;(TT1) did free screenings of Body Mass Index, Blood Pressure, Blood Sugar and many talks-shows and discussions about physical activities and living with diabetes.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">The general objective of the campaign was&nbsp;to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">improve awareness</strong>&nbsp;of Diabetes in Rwanda. However, our specific objectives are:</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">To educate the attendees on the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">modified risk factors prevention</strong>&nbsp;(physical activity and its role on prevention of type 2 diabetes).</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">To voluntarily&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">measure blood sugar, body mass index (BMI) and blood pressure.</strong></li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">A team composed by&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">15 people from RBC and Rwanda Diabetes Association</strong>&nbsp;and another team composed by&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">70 students</strong>&nbsp;(volunteering) from the University of Rwanda conducted free screenings of blood sugar, body mass index (BMI) and blood pressure to the present public and made discussions about the disease.</p>', '20241029072631.jpg', 'world-diabetes-day-2015', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:26:31', '2024-10-29 05:26:31');
INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(21, 3, 6, 'Tour du Rwanda 2015', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">The&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day,</strong>&nbsp;led by the International Diabetes Federation and its member associations around the world, is always an opportunity to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">raise awareness and advocate for the wellbeing of diabetes patients.</strong>&nbsp;In Rwanda, together with the Ministry of Health of Rwanda, the Rwanda Biomedical Center, Rwanda Diabetes Association and Team Type 1, the world Diabetes Day was celebrated around the cycling tour of Rwanda (<a href=\"http://www.tourdurwanda.rw/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Tour du Rwanda</a>).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/03/tour-du-rwanda-2015-route.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"alignleft wp-image-356 size-medium\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2016/03/tour-du-rwanda-2015-route-287x300.jpg\" alt=\"tour-du-rwanda-2015-route\" width=\"287\" height=\"300\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2016/03/tour-du-rwanda-2015-route-287x300.jpg 287w, https://rwandadiabetes.rw/wp-content/uploads/2016/03/tour-du-rwanda-2015-route.jpg 337w\" sizes=\"(max-width: 287px) 100vw, 287px\" data-pagespeed-url-hash=\"1606344068\" style=\"height: auto; max-width: 100%; margin: 10px 10px 10px 0px; padding: 0px; border: 0px; float: left;\"></a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">As seen in the map, the race takes place all over the country. Our team of 15 people from the&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Rwanda Diabetes Association and the Rwanda Biomedical Center</strong>&nbsp;(as well as 70 student volunteers) used this opportunity to raise awareness and offered free screenings for the public at several stops along the race. In Rwamagana we screened a total of 167 people, in Huye we screened 151 people, in Musanze we screened 221 people, in Nyanza we screened 198 people and in Rubavu we screened 145 people. At each stop we provided information on diabetes in Rwanda and screened people for blood pressure, blood glucose, body mass index and physical activity.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">We were joined by our partners at&nbsp;<a href=\"http://teamtype1.org/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Team Type 1</a>,&nbsp;an organization based in Atlanta, Georgia, that strives&nbsp;to instill hope and inspiration for people around the world affected by diabetes. They describe&nbsp;<a href=\"http://teamtype1.org/events-stories/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">their experience</a>&nbsp;below:</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">The&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Tour of Rwanda is one of the most grueling cycling races on the African continent</strong>, covering almost 900 kilometers over difficult, mountainous terrain. For the past four years, the Team Type 1 Foundation has been participating by sending athletes with type 1 diabetes to compete; and not only are the athletes competing, but winning. Racing as Team Type 1, a squad of athletes comprised mostly of athletes with type 1 diabetes, won the Tour of Rwanda in both 2009 and 2010. In 2011, they won 5 stages and in 2012, took second place. The purpose of supporting the Tour of Rwanda and sending athletes with type 1 diabetes to compete is to raise public and government awareness of diabetes and spread hope to people with diabetes in a country where there has traditionally been little. The Foundation also brings hundreds of team jerseys to Rwanda in addition to diabetes testing supplies including blood glucose monitors and test strips to help children with type 1 diabetes in Rwanda Today, in partnership with the Rwandan Diabetes Association (RDA), the Team Type 1 Foundation supports 770 children living with Type 1 Diabetes in<br>Rwanda.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; text-align: justify;\">(Photo source:&nbsp;http://www.tourdurwanda.rw/spip.php?article138)</p>', '20241029072755.jpg', 'tour-du-rwanda-2015', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:27:55', '2024-10-29 05:27:55'),
(22, 3, 6, 'Campus Campaigns', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">To celebrate&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day, 2015</strong>, the Rwanda Diabetes Association, together with the&nbsp;Ministry of Health of Rwanda, the Rwanda Biomedical Center, and Team Type 1, set on a mission to raise awareness throughout the country. With a team comprised of 15 people from the Rwanda Diabetes Association and the Rwanda Biomedical Center, as well as 70 student volunteers, we&nbsp;conducted free screenings of blood sugar, body mass index (BMI) and blood pressure for the public and generated discussions around the disease.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">From November 12th – 14th, 2015, our team conducted screenings (for body mass index, blood pressure, blood glucose and physical activity) at&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">6 campuses across the country</strong>&nbsp;and organized conferences to raise awareness of the disease.</p>', '20241029072857.jpg', 'campus-campaigns', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:28:57', '2024-10-29 05:28:57'),
(23, 3, 6, 'University of Rwanda and ISPAD Trainings', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">On November 7th, 2015, the Rwanda Diabetes Association and its partners&nbsp;organized a one day training for students in&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Rwanda’s Pharmaceutical Students Association (RPSA)</strong>. Students received lessons and information on diabetes and screening techniques for body moss index, blood glucose and blood pressure.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">From November 7th to the 11th, the Rwanda Diabetes Association conducted a&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">International Society for Pediatric and Adolescent Diabetes</strong>&nbsp;(ISPAD) training for&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">30 nurses</strong>&nbsp;from DH on Type 1 diabetes in Rwanda.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">These trainings play an integral part in the campaign leading up to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day 2015.&nbsp;</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">(Photo source:&nbsp;http://rpsa.rw/wp-content/uploads/2015/04/Local-symposium.jpg)</p>', '20241029073002.jpg', 'university-of-rwanda-and-ispad-trainings', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:30:02', '2024-10-29 05:30:02'),
(24, 3, 6, 'UN Staff Screening', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">As part of the national campaign leading up to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day</strong>, the Rwanda Diabetes Association&nbsp;together with the Ministry of Health, Rwanda Biomedical Center (RBC) and Team Type 1 gathered a team to&nbsp;screen United Nations staff and raise awareness about&nbsp;chronic diseases in Kigali, Rwanda on October 29th, 2015.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">With a team composed of&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">people from RBC and the Rwanda Diabetes Association</strong>, we conducted free screenings for blood sugar, body mass index, blood pressure and discussed&nbsp;fitness and health education.</p>', '20241029073119.gif', 'un-staff-screening', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:31:19', '2024-10-29 05:31:19'),
(25, 3, 6, 'World Heart Day 2015', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">As part of the national campaign leading up to&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Diabetes Day</strong>, the Rwanda Diabetes Association&nbsp;together with the Ministry of Health, Rwanda Biomedical Center (RBC) and Team Type 1 gathered a team to raise awareness for&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">World Heart Day</strong>&nbsp;on&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">September 29th, 2015</strong>.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">With a team composed of&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">15 people from RBC and the Rwanda Diabetes Association</strong>&nbsp;as well as&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">70 student volunteers from the University of Rwanda</strong>, we conducted free screenings for blood sugar, body mass index, blood pressure and looked at fitness and education. The screenings took place at Amahoro Stadium in Kigali, Rwanda.&nbsp;<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">We screened 146 people throughout the day!</strong></p>', '20241029073213.png', 'world-heart-day-2015', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:32:13', '2024-10-29 05:32:13'),
(26, 3, 8, 'NCD Screenings in Kigali', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">This week the RDA, in partnership with other international and local organizations, is hosting free NCD screenings in the Car-Free Zone in Kigali’s City Centre. You can come get your blood glucose, blood pressure and vision tested everyday from 10AM – 7PM.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Muze mwese twipimishe dufatanye kurwanya no kwirinda Diyabete!</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><img src=\"https://rwandadiabetes.rw/wp-content/uploads/2016/05/IMG_7197.jpg\" style=\"width: 1471.11px;\"><br></p>', '20241029074507.jpg', 'ncd-screenings-in-kigali', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:45:07', '2024-10-29 05:45:07'),
(27, 3, 8, 'Summer Camp 24-30 July 2016-DIABETES YOUNG LEADERS', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Our 4th annual summer camps for young diabetics is cumming up. Do you want to participate, support? email rwandadiabetes@gmail.com. For more information about the program click&nbsp;<a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/06/Schedule-of-the-4th-diabetes-camp.docx\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">here</a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"http://rwandadiabetes.rw/wp-content/uploads/2016/06/poster-photo.jpg\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\"><img decoding=\"async\" class=\"alignnone size-thumbnail wp-image-405\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2016/06/poster-photo-150x150.jpg\" alt=\"poster photo\" width=\"150\" height=\"150\" data-pagespeed-url-hash=\"3782662968\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\"></a></p>', '20241029074631.jpg', 'summer-camp-24-30-july-2016-diabetes-young-leaders', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:46:31', '2024-10-29 05:46:31'),
(28, 3, 6, '#Blue November 2017', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The final program of the World Diabetes Day 2017 is out, please join us in the campaign to raise awareness about diabetes and advocate for the people living with diabetes:</p><ul style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">&nbsp;Screening of Diabetes and other Non-Communicable Diseases at Health Center level (all) (14th to 18th)</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Prime Minister Office, neighboring Ministries and Institutions</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Mass media campaign through the National Radio Station, Community Radio Stations, Commercial Radio Stations, Rwanda Television, Newspapers</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Kigal<span class=\"text_exposed_show\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">i Run Blue half-marathon – Global Diabetes Walk on 26th Nov</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><span class=\"text_exposed_show\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Lighting Kigali convention center in Blue (13the to 14th)</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><span class=\"text_exposed_show\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Participate in Tour du Rwanda 2017 (12th to 19th)</span></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><span class=\"text_exposed_show\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Umuganda</span></li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Follow us on social media:&nbsp;<a href=\"https://web.facebook.com/RDARwanda\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Facebook</a>&nbsp;and&nbsp;<a href=\"https://twitter.com/rda_rwanda\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">Twitter</a></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><img decoding=\"async\" class=\"alignnone size-thumbnail wp-image-422\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2017/11/Marathon-150x150.jpg\" alt=\"\" width=\"150\" height=\"150\" srcset=\"https://rwandadiabetes.rw/wp-content/uploads/2017/11/Marathon-150x150.jpg 150w, https://rwandadiabetes.rw/wp-content/uploads/2017/11/Marathon-300x300.jpg 300w, https://rwandadiabetes.rw/wp-content/uploads/2017/11/Marathon-768x768.jpg 768w, https://rwandadiabetes.rw/wp-content/uploads/2017/11/Marathon.jpg 960w\" sizes=\"(max-width: 150px) 100vw, 150px\" data-pagespeed-url-hash=\"4233093235\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\">&nbsp;<img decoding=\"async\" class=\"alignnone size-thumbnail wp-image-423\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2017/11/November-150x150.jpg\" alt=\"\" width=\"150\" height=\"150\" data-pagespeed-url-hash=\"1744844831\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\">&nbsp;<img loading=\"lazy\" decoding=\"async\" class=\"alignnone size-thumbnail wp-image-424\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2017/11/World-Diabetes-Day-150x150.jpg\" alt=\"\" width=\"150\" height=\"150\" data-pagespeed-url-hash=\"2342518442\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\"></p>', '20241029074827.jpg', 'blue-november-2017', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:48:27', '2024-10-29 05:48:27'),
(29, 3, 8, 'Support our Crowdfunding campaign to build a new Diabetes Education Centre', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Between 2011 and 2016, our Diabetes Education Centre in Mwulire successfully taught 160 vulnerable young diabetics how to manage their diabetes and how to make a living from various vocational skills such as hairdressing, sewing, baking and agriculture. Many graduates were able to make some money and improved their diabetes management.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">As the owner claimed the land of the centre, it had to be closed in 2016.&nbsp;RDA has started to build a new centre in Gakoni on Lake Muhazi&nbsp;but lack the funds to finish the construction.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Your contribution will help us to save lives of many young adults living with diabetes</strong>, as poverty and lack of skills in addition to poorly managed&nbsp;diabetes is often life-threatening for them. Your support will help them to live better with their condition and to acquire useful&nbsp;skills for their future.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Three classrooms are already built, the kitchen, restaurant and workshop are half-finished. Dormitories and sanitary facilities still need to be built.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Click on the link below to read more about our campaign and to contribute!</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><img decoding=\"async\" class=\"alignnone size-thumbnail wp-image-418\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2017/11/IMG_0434-150x150.jpg\" alt=\"\" width=\"150\" height=\"150\" data-pagespeed-url-hash=\"2289812098\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\">&nbsp; &nbsp;<img decoding=\"async\" class=\"alignnone size-thumbnail wp-image-417\" src=\"http://rwandadiabetes.rw/wp-content/uploads/2017/11/Foto0-150x150.jpg\" alt=\"\" width=\"150\" height=\"150\" data-pagespeed-url-hash=\"1183601767\" style=\"height: auto; max-width: 100%; margin: 0px; padding: 0px; border: 0px;\"></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><a href=\"https://www.generosity.com/education-fundraising/vocational-school-for-youth-with-diabetes-rwanda/x/15459346\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: rgb(52, 152, 219); font-weight: bold;\">https://www.generosity.com/education-fundraising/vocational-school-for-youth-with-diabetes-rwanda/x/15459346</a></p>', '20241029074935.jpg', 'support-our-crowdfunding-campaign-to-build-a-new-diabetes-education-centre', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:49:35', '2024-10-29 05:49:35'),
(30, 3, 5, 'The upcoming diabetes summer camp: THE FUTURE IS MINE', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Rwanda Diabetes Association (RDA) is organizing its seventh youth diabetes summer camp this July 2019. In collaboration with its partners, RDA has been running these camps every year for the past six years.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Children and adolescents living with type 1 diabetes need close attention and require multiple interventions throughout the day. These include but no limited&nbsp; to blood glucose monitoring, insulin injections and adjustments, meal planning and&nbsp; physical activities. A good diabetes education is vital for these activities to help these youth to prevent acute and chronic diabetes complications and live a healthy and productive life, not merely surviving.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">These summer camps offer a unique and exciting opportunity for youth living with diabetes to learn and improve their self-management skills, they provide a safe environment where these youth are enabled to learn to independently self-manage their diabetes as they get precious and constructive feedback and guidance from peers and dedicated health professionals.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The seventh diabetes summer camp will take place from twentieth up to twenty-sixtieth (20-26 July) in Gakoni cell, Gastibo District in the Eastern province. In this 5 days period, RDA will host 70 young diabetics (boys and girls) aged between 14-27 years, from across the country.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">“<strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">THE FUTURE IS MINE</strong>“, will be the theme for this year diabetes summer camp. And like the previous camp, the seventh diabetes summer camp will have a set of educational activities and recreational activities.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Together let us change the face of diabetes and build a brighter future for our youth living with type 1 diabetes.</p>', '20241029075035.jpg', 'the-upcoming-diabetes-summer-camp-the-future-is-mine', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:50:35', '2024-10-29 05:50:35'),
(31, 3, 8, 'Diabetes and the eye', NULL, NULL, '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Diabetic retinopathy</strong></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">In 2015, diabetic retinopathy was the leading cause of vision loss in the world, and 1 in 3 persons with diabetes had one or more signs of diabetes retinopathy.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">In these people with diabetic retinopathy, one third of them had vision threatening diabetic retinopathy.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">With the prevalence of diabetes projected to increase especially in developing countries, diabetic retinopathy (DR) will also increase and might lead to increased cases of vision loss in the age working population with loss in the working force and increased burden for the countries.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">The important clinical risk factors for developing diabetic retinopathy are hyperglycemia, hypertension and duration of the disease.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">There are 2 clinical stages of diabetic retinopathy, the non-proliferative diabetic retinopathy (NPDR) which the early stage, and the proliferative diabetic retinopathy (PDR).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Patients with NPDR are clinical asymptomatic but signs of DR like microaneurysm, hemorrhage and hard exudes can be detected on fundus photography.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">PDR is the advanced stage of DR with neovascularization. At this stage patients might have severe vision impairment caused by bleeding from these new abnormal vessels in the vitreous or caused by traction retinal detachment.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Optimum control of plasma glucose, blood pressure and serum lipid is recommended to minimize the risk or slow down the progression of DR.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Timely screening and treatment of DR is also highly recommended. In type 1 diabetes patients, the American Diabetes Association (ADA) recommends the initial eye examination 5 years after the diagnosis of diabetes, and for type 2 diabetes it is recommended that patients be screening immediately at the time of diagnosis.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Follow up eye examination are scheduled depending on whether or not there is evidence of DR.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">To mark this year world diabetes day which is celebrated on November 14<span style=\"margin: 0px; padding: 0px; border: 0px; font-size: 10.5px; vertical-align: baseline; line-height: 0; position: relative; top: -0.5em;\">th</span>&nbsp;every year, Rwanda Diabetes Association is organizing free DR screening which is taking place at its clinic located at Kinamba.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">During this period, from November 11-15, diabetes patients will be screened for DR. They will also have their plasma glucose and blood pressure checked and will be provided guidance and advices depending on their results.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">Everyone is welcome.</p>', '20241029075257.jpg', 'diabetes-and-the-eye', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:52:57', '2024-10-29 05:52:57'),
(32, 3, 6, 'Uruhare rw’ibigo bidakora mu nzego z’ubuzima mu gufasha abarwayi ba diyabete mu Rwanda.', NULL, NULL, '<span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Mu rwego rwo kwizihiza umunsi mpuzamahanga ngarukamwaka wo kurwanya Diyabete Ecobank nk’urwego rw’ abashoramali rudakora ku buzima yifuje kwifatanya na Rwanda Diabetes Association mu kwizihiza uwo munsi uba 14/11 za buri mwaka .</span><br style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\"><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Mu gushyigikira Uruhare RDA igira mu bukangurambaga ku ndwara ya Diyabete no kwita ku barwayi ba Diyabete</span><br style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\"><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Ecobank yateye inkunga Rwanda Diabetes Association ya 5,000,000 frw izayifasha mu bikorwa byayo bya buri munsi</span><br style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\"><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Iyo nkunga yatangiwe ku cyicaro gikuru cya Ecobank mu muhango wo gukangurira abakozi ba Ecobank mu kwipimisha ku bushake indwara zitandura harimo na Diyabete</span><br style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\"><span style=\"color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: 14px;\">Inkunga yakiriwe hari Umuyobozi was Ecobank,Umuyobozi wa RBC na President Fondateur was Rwanda Diabetes Association ariwe wakiriye iyo nkunga.</span>', '20241029075759.jpg', 'uruhare-rwibigo-bidakora-mu-nzego-zubuzima-mu-gufasha-abarwayi-ba-diyabete-mu-rwanda', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 05:57:59', '2024-10-29 05:57:59'),
(33, 3, 6, 'Umunsi Mpuzamahanga wo Kurwanya Indwara ya Diyabete 14 Ugushyingo 2021', NULL, NULL, '<p class=\"has-medium-font-size\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: var(--wp--preset--font-size--medium) !important;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; font-weight: bold;\"><span class=\"has-inline-color has-vivid-cyan-blue-color\" style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; color: var(--wp--preset--color--vivid-cyan-blue) !important;\">INSANGANYAMATSIKO</span>: UBUVUZI BW’INDWARA YA DIYABETE KURI BOSE. Bidakozwe none byazakorwa ryari?</strong></p><ul class=\"has-normal-font-size wp-block-list\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: var(--wp--preset--font-size--normal); vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Gusuzumwa Diyabete hakiri kare</strong></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Kubona imiti ikwiye ku gihe</strong></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Kubona uburyo bwo kwikurikirana ku murwayi wa Diyabate</strong></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Kubona ubufasha bwo kwiyakira no kubana neza na Diyabete</strong></li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; font-weight: bold;\">Kubona indyo ikwiye no gukora imyitozo ngororamubiri</strong></li></ul>', '20241029080421.jpg', 'umunsi-mpuzamahanga-wo-kurwanya-indwara-ya-diyabete-14-ugushyingo-2021', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 06:04:21', '2024-10-29 06:04:21');
INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(34, 3, 6, 'World Diabetes Day 2021', NULL, NULL, '<p class=\"has-medium-font-size\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;; font-size: var(--wp--preset--font-size--medium) !important;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; font-size: 20px; vertical-align: baseline; font-weight: bold;\"><em style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline;\">Early Diabetes screening</em></strong></p><ul class=\"wp-block-list\" style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 20px; padding: 0px; border: 0px; font-size: 15px; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\"><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Access to medicines</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Access to self-monitoring</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Access to psychological support</li><li style=\"margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; line-height: 1.8em;\">Access to healthy diet and physical activity</li></ul><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">#IfNotNowWhen campaign</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; border: 0px; font-size: 14px; vertical-align: top; font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1.8em; overflow-wrap: break-word; color: rgb(119, 119, 119); font-family: &quot;Open Sans&quot;;\">#WorldDiabetesDay</p>', '20241029080534.jpg', 'world-diabetes-day-2021', NULL, NULL, 'PUBLISHED', 0, '2024-10-29 06:05:34', '2024-10-29 06:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `poster` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `engagement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `title`, `poster`, `content`, `created_at`, `updated_at`, `engagement`) VALUES
(1, 'Rwanda Diabetes Association involves the health authorities to the World Diabetes Day campaign', '20241031130514.jpg', '<span style=\"color: rgb(108, 117, 125); font-family: system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus quas optio reiciendis deleniti voluptatem facere sequi, quia, est sed dicta aliquid quidem facilis culpa iure perferendis? Dolor ad quia deserunt.</span>', '2024-10-31 11:05:15', '2024-10-31 11:05:15', 1),
(2, 'T1D Community Fund', '20241122064907.jpg', '<div>support the vulnerable type 1 diabetes to access to medical insurance and training the parents who have</div><div>the children living with type 1 diabetes under 14 years’ old</div>', '2024-11-22 04:49:08', '2024-11-22 04:49:08', 1),
(3, 'DEI:CGM', '20241122065509.jpg', '<div>To assess the feasibility of using the real-time Dexcom G6 CGM system in patients with type 1 diabetes</div><div>treated with multiple daily injection insulin therapy</div>', '2024-11-22 04:55:09', '2024-11-22 04:55:09', 1),
(6, 'WDF', '20241122071235.jpg', '<div>Improve the diabetes care/self-care for the children and youth living with diabetes in Rwanda</div><div>-Quarterly visits to the District Hospitals</div><div>-Diabetes Summer camps</div><div>Improve the registration and monitoring of type 1 diabetes patient through the establishment of an</div><div>electronic registry in order to enhance patient follow up, monitoring, and care</div>', '2024-11-22 05:12:36', '2024-11-22 05:12:36', 1),
(7, 'LFAC: BASAGLAR STUDY', '20241122080737.jpg', '<div>Improvement in study participants’ glycaemic control (HbA1c), reduction in serious adverse events</div><div>(severe hypoglycaemia and hyperglycaemia/Diabetic Ketoacidosis (DKA)), and improved quality of life.</div>', '2024-11-22 06:07:38', '2024-11-22 06:07:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `title`, `content`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Rwanda Diabetes Association involves the health authorities to the World Diabetes Day campaign', NULL, '20241031104524.pdf', '2024-10-29 11:15:42', '2024-10-31 08:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-12-15 14:18:15', '2020-12-15 14:18:15'),
(3, 'Manager', 'Website Admin', '2020-12-21 09:25:06', '2020-12-21 09:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/December2020/Ml6x5ThKKXvPZ2MevPVo.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'RNCDA', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Rwanda NCD Alliance Dashboard', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `photo` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `headline` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(3, 1, 'eric mugisha', 'kabosierik@gmail.com', 'users/default.png', NULL, '$2y$10$ndOpdxpB5Hx3O68.HdEm2uoFcP2rrgwzC0Vzyt90ipHDErnFGoDee', 'LbayyHdLe1lXjARathHlcmwp7SVCaG8noFmO5Tf7hE5gYlZYzGgmSC82GIsS', NULL, NULL, '2024-11-04 16:03:26'),
(6, NULL, 'admin', 'rwandadiabetes@gmail.com', 'users/default.png', NULL, '$2y$10$iX0y1e47e980yjj2D7IxB.3ODhu2FnJXwZlZfOaI14bHcgkYON9H.', NULL, NULL, '2024-11-04 17:38:35', '2024-11-04 17:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `department` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `title`, `photo`, `department`, `created_at`, `updated_at`) VALUES
(2, 'Crispin Gishoma', 'Director', '20241101060115.jpg', 'BOARD MEMBERS', '2024-11-01 04:01:15', '2024-11-01 04:01:15'),
(3, 'Hitimana Viateur', 'Nurse', '20241105113831.jpeg', 'Staff COMMITTEE', '2024-11-05 09:38:31', '2024-11-05 09:38:31'),
(4, 'Niyonshuti Dieudonne', 'Pharmacist', '20241105120558.jpeg', 'Staff COMMITTEE', '2024-11-05 10:05:58', '2024-11-05 10:05:58'),
(5, 'Muhayimana lydie', 'Biomedical laboratory scientist', '20241106111147.jpeg', 'Staff COMMITTEE', '2024-11-06 09:11:47', '2024-11-06 09:11:47'),
(6, 'kayitare emmanuel', 'Nurse', '20241120062624.jpeg', 'Staff COMMITTEE', '2024-11-20 04:26:24', '2024-11-20 04:26:24'),
(7, 'Manzi Aime', 'Medical Doctor', '20250115065238.jpeg', 'Staff COMMITTEE', '2025-01-15 04:52:38', '2025-01-15 04:52:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel_items`
--
ALTER TABLE `carousel_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `engagements`
--
ALTER TABLE `engagements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ncd_news`
--
ALTER TABLE `ncd_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
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
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_types`
--
ALTER TABLE `post_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel_items`
--
ALTER TABLE `carousel_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `engagements`
--
ALTER TABLE `engagements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ncd_news`
--
ALTER TABLE `ncd_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
