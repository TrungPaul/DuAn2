-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2019 lúc 06:03 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `spatime`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_of_user`
--

CREATE TABLE `booking_of_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `spa_id` int(11) NOT NULL,
  `date_booking` date NOT NULL,
  `time_booking` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `service_detail_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booking_of_user`
--

INSERT INTO `booking_of_user` (`id`, `user_id`, `spa_id`, `date_booking`, `time_booking`, `staff_id`, `service_detail_id`, `date`, `created_at`, `updated_at`) VALUES
(1, 2, 10, '2019-12-01', 9, 2, 5, '0000-00-00 00:00:00', NULL, NULL),
(2, 3, 10, '2019-12-01', 4, 2, 18, '0000-00-00 00:00:00', NULL, NULL),
(3, 4, 10, '2019-11-29', 7, 2, 31, '0000-00-00 00:00:00', NULL, NULL),
(4, 7, 10, '2019-12-13', 5, 2, 37, '0000-00-00 00:00:00', NULL, NULL),
(5, 2, 10, '2019-12-02', 0, 2, 48, '0000-00-00 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lori Dickens', NULL, NULL),
(2, 'Mr. Bryon Jerde', NULL, NULL),
(3, 'Andreanne Zulauf', NULL, NULL),
(4, 'Lowell Cummings', NULL, NULL),
(5, 'Prof. Zelda Treutel', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Hà Nội'),
(2, 'Hồ Chí Minh'),
(3, 'Đà Nẵng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(444, '2014_10_12_000000_create_users_table', 1),
(445, '2014_10_12_100000_create_password_resets_table', 1),
(446, '2019_08_19_000000_create_failed_jobs_table', 1),
(447, '2019_11_04_151552_create_categories_table', 1),
(448, '2019_11_04_151610_create_posts_table', 1),
(449, '2019_11_04_151647_create_contacts_table', 1),
(450, '2019_11_04_151704_create_spas_table', 1),
(451, '2019_11_04_151730_create_staffs_table', 1),
(452, '2019_11_04_151752_create_service_detail_table', 1),
(453, '2019_11_04_151803_create_services_table', 1),
(454, '2019_11_04_151811_create_rate_service_table', 1),
(455, '2019_11_04_151822_create_booking_of_user_table', 1),
(456, '2019_11_05_064539_create_web_settings_table', 1),
(457, '2019_11_11_184233_add_attribute_views_into_posts_table', 1),
(458, '2019_11_19_030905_create_comments_table', 1),
(459, '2019_11_19_101210_add_attribute_description_into_posts_table', 1),
(460, '2019_11_25_143605_create_locations_table', 1),
(461, '2019_11_26_085622_create_replies_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `cate_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `cate_id`, `title`, `image`, `content`, `status`, `created_at`, `updated_at`, `views`, `description`) VALUES
(1, 8, 3, 'eveniet', 'image-seeder.jpg', 'Omnis nulla ea explicabo quas aliquid dignissimos. Praesentium excepturi et quidem in consequatur fugiat autem. Cum aspernatur voluptas in.', 1, NULL, NULL, 0, 'natus'),
(2, 2, 4, 'error', 'image-seeder.jpg', 'Aut magnam occaecati veniam. Ut molestiae hic culpa sint velit consectetur sed repellendus.', 1, NULL, '2019-12-02 06:33:54', 1, 'laboriosam'),
(3, 10, 3, 'voluptas', 'image-seeder.jpg', 'Ut eos aut ad voluptatem nihil fugiat aut. Natus omnis et veniam eum. Consequuntur quaerat quia quis doloribus id sit fugit odit.', 1, NULL, NULL, 0, 'est'),
(4, 4, 2, 'ex', 'image-seeder.jpg', 'Ut eos facilis dignissimos recusandae eveniet laborum. Mollitia ad odit impedit itaque eveniet porro cumque consequatur. Laboriosam quibusdam non voluptas adipisci culpa sequi provident.', 1, NULL, NULL, 0, 'nam'),
(5, 2, 4, 'autem', 'image-seeder.jpg', 'Consequatur magni voluptas optio quae harum qui aliquid. Ab libero quam iure consequuntur at. Dolores est accusamus consequatur non.', 1, NULL, NULL, 0, 'necessitatibus'),
(6, 4, 2, 'pariatur', 'image-seeder.jpg', 'Molestias sit labore dicta qui qui. Incidunt fugiat amet dolor sapiente ut. Nisi nulla laudantium ut aut. Sunt magnam voluptas quia sint sapiente laboriosam.', 1, NULL, NULL, 0, 'suscipit'),
(7, 1, 2, 'hic', 'image-seeder.jpg', 'Earum nihil quisquam molestiae iusto rerum incidunt velit. Dicta similique rem assumenda ex dolorem.', 1, NULL, NULL, 0, 'eum'),
(8, 5, 5, 'vel', 'image-seeder.jpg', 'Libero ut sint officia ea ea magni. Hic ut ut impedit commodi dignissimos culpa incidunt. Est nobis et vitae est id aut iure. Molestias illo consectetur praesentium excepturi.', 1, NULL, NULL, 0, 'nostrum'),
(9, 10, 2, 'aut', 'image-seeder.jpg', 'Porro illum eaque consequuntur et eius ad. Architecto voluptatem ea veniam aut et.', 1, NULL, NULL, 0, 'ipsum'),
(10, 7, 2, 'recusandae', 'image-seeder.jpg', 'Assumenda earum nesciunt in magni voluptas. Sapiente blanditiis molestiae dolorum ut fugit.', 1, NULL, NULL, 0, 'veritatis'),
(11, 10, 4, 'atque', 'image-seeder.jpg', 'Maiores at incidunt quis eligendi quia. Ut sunt distinctio rem magni. Est est animi quis quo reprehenderit dolor aut.', 1, NULL, NULL, 0, 'vel'),
(12, 10, 2, 'quia', 'image-seeder.jpg', 'Quos inventore eos ea perspiciatis eum. Fugit id rerum dolorem ipsam illo. Consequuntur sint vero nemo perspiciatis ipsum dicta.', 1, NULL, NULL, 0, 'minima'),
(13, 3, 1, 'quia', 'image-seeder.jpg', 'Consequuntur ut dicta non et sed facere. Laboriosam totam consequatur vitae ab quos nihil fugiat dolores. Vitae omnis amet nobis dolore sunt.', 1, NULL, NULL, 0, 'vel'),
(14, 5, 1, 'eligendi', 'image-seeder.jpg', 'Eos ab rerum hic velit rerum ducimus voluptatibus. Quibusdam facilis fugiat dolore non provident in repudiandae. Omnis nihil consectetur mollitia nam pariatur iusto.', 1, NULL, NULL, 0, 'sint'),
(15, 10, 2, 'dolore', 'image-seeder.jpg', 'Facere quaerat odio aut velit. Quos quod aut amet delectus omnis quibusdam sed. Voluptas qui necessitatibus maxime illo dolor nisi eius. Consectetur sint vitae modi incidunt.', 1, NULL, NULL, 0, 'distinctio'),
(16, 1, 5, 'ut', 'image-seeder.jpg', 'Dolor magni aliquid nihil soluta id aut saepe. Fugit aut quibusdam laudantium ipsa velit et aut. Eaque sit delectus repellat et.', 1, NULL, NULL, 0, 'dignissimos'),
(17, 2, 3, 'inventore', 'image-seeder.jpg', 'Aut nihil ut earum aut sit est. Quibusdam et omnis ratione at aperiam modi hic atque. Et suscipit molestiae sunt eos.', 1, NULL, NULL, 0, 'distinctio'),
(18, 3, 1, 'rem', 'image-seeder.jpg', 'Voluptates ducimus sint velit et. Enim corrupti accusamus expedita possimus vel ratione facere. Repudiandae commodi omnis sed corporis quas ut fugit. Cupiditate possimus delectus repudiandae non.', 1, NULL, NULL, 0, 'eum'),
(19, 10, 4, 'excepturi', 'image-seeder.jpg', 'Ut dolor est sed corrupti rerum rem tempora perspiciatis. Recusandae autem iusto id quibusdam aspernatur temporibus perspiciatis.', 1, NULL, NULL, 0, 'ad'),
(20, 7, 5, 'corporis', 'image-seeder.jpg', 'Ut maxime id et cupiditate. At est debitis et. Iure quis ea eum mollitia sequi accusamus hic dolor.', 1, NULL, NULL, 0, 'modi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate_service`
--

CREATE TABLE `rate_service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_detail_id` int(11) NOT NULL,
  `number_star` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name_service`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Dịch Vụ Mặt', 'image-seeder.jpg', NULL, NULL),
(2, 'Dịch Vụ Móng', 'image-seeder.jpg', NULL, NULL),
(3, 'Dịch Vụ Body', 'image-seeder.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service_detail`
--

CREATE TABLE `service_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `spa_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `name_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_service` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_service` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service_detail`
--

INSERT INTO `service_detail` (`id`, `spa_id`, `service_id`, `name_service`, `price_service`, `discount`, `detail_service`, `image_service`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Richie Monahan', '533987', '29', 'Ut molestiae doloribus quia nobis inventore saepe. Unde illum qui est iure sunt dolore dolorum officia. Veniam qui ut aut possimus voluptatem porro.', 'image-seeder.jpg', NULL, NULL),
(2, 4, 3, 'Hugh Schmidt', '725601', '45', 'Beatae omnis sint et molestiae. Accusantium pariatur earum magnam in ut.', 'image-seeder.jpg', NULL, NULL),
(3, 3, 3, 'Haley Wehner', '837339', '15', 'Voluptates dolorem quod rem repellendus debitis ducimus deserunt. Magnam quisquam eligendi voluptatum quos ipsa ipsa deserunt. Praesentium qui labore dolores voluptatem minima inventore voluptatem.', 'image-seeder.jpg', NULL, NULL),
(4, 5, 1, 'Betty Treutel MD', '473485', '30', 'Iusto voluptates odit tempore neque dolor ducimus sunt. Quo esse vel voluptas deleniti aut quidem.', 'image-seeder.jpg', NULL, NULL),
(5, 10, 3, 'Queenie Kris', '897161', '23', 'Inventore optio sed porro accusantium dolorem. Reiciendis explicabo facere odit nemo et nobis omnis. Debitis repellendus itaque eveniet. Dolores praesentium distinctio quibusdam quia.', 'image-seeder.jpg', NULL, NULL),
(6, 5, 2, 'Koby Kiehn', '415755', '45', 'Est omnis rerum voluptate aut eum quibusdam blanditiis. Quis aliquam commodi ratione quos et culpa quis. Nihil porro adipisci consequatur porro. Quia voluptatem vero et incidunt provident dolorum.', 'image-seeder.jpg', NULL, NULL),
(7, 2, 1, 'Ms. Micaela Funk DDS', '777897', '40', 'Mollitia rerum iure occaecati cumque molestiae perspiciatis aut. Ut enim enim et necessitatibus. Totam asperiores exercitationem aut quisquam iste. Harum eum nihil asperiores.', 'image-seeder.jpg', NULL, NULL),
(8, 8, 2, 'Rosemary Hayes', '958111', '32', 'Eum in accusamus eaque accusamus unde maxime in distinctio. Non facilis dolores dignissimos sed. Asperiores incidunt dolorum dolores ipsum iusto repudiandae. Nihil quas voluptatem quo eum.', 'image-seeder.jpg', NULL, NULL),
(9, 7, 2, 'Mr. Blake Corwin IV', '399925', '46', 'Mollitia voluptas unde qui sunt exercitationem amet dolores cupiditate. Facere ut nam ut ipsum ut aut. Corporis accusantium unde quis.', 'image-seeder.jpg', NULL, NULL),
(10, 4, 3, 'Deondre Bruen', '439550', '12', 'Nesciunt repudiandae pariatur quibusdam voluptas. Itaque sit voluptatem corporis. Et praesentium ut asperiores quis.', 'image-seeder.jpg', NULL, NULL),
(11, 7, 3, 'Dr. Keanu Schaefer', '875065', '48', 'Assumenda et eveniet recusandae quidem vel sunt. Porro sint praesentium ut voluptates necessitatibus. Cumque dicta quos molestias ex ea.', 'image-seeder.jpg', NULL, NULL),
(12, 2, 2, 'Lonnie Torphy', '799031', '47', 'Sed aperiam est a provident aut ex suscipit. Et dolores totam vero et vitae nobis sequi. Nobis fugit esse autem aut fugiat. Sunt et unde aut.', 'image-seeder.jpg', NULL, NULL),
(13, 3, 1, 'Selena Purdy', '328937', '19', 'Asperiores tempora quo laudantium. Quisquam omnis sint et quaerat aut cumque. Ex quae repudiandae et ut corrupti.', 'image-seeder.jpg', NULL, NULL),
(14, 9, 3, 'Leopoldo Crona', '828183', '18', 'A modi aspernatur suscipit veritatis quibusdam id assumenda. Eius sed quam aliquid cumque fuga blanditiis libero. Ex aut vel sed est tempora consequatur velit. Quasi voluptas enim ut quo.', 'image-seeder.jpg', NULL, NULL),
(15, 8, 1, 'Ruben Barrows MD', '358610', '10', 'Neque dolores et voluptas odit sunt et at. Nam maxime quo aliquam aut et sed voluptatibus. Exercitationem sed voluptates expedita voluptas amet cumque et.', 'image-seeder.jpg', NULL, NULL),
(16, 8, 3, 'Nyasia Ortiz DVM', '305183', '26', 'Perspiciatis ad vel voluptatem earum nobis voluptas ab autem. Dolor placeat exercitationem voluptas sunt alias. Nulla et expedita non.', 'image-seeder.jpg', NULL, NULL),
(17, 2, 2, 'Jessica Schumm', '617028', '31', 'Quia occaecati unde deserunt ullam molestias voluptates. Nesciunt magnam nobis atque consequatur quod eum sit quod. Iste asperiores quis tempora suscipit facere.', 'image-seeder.jpg', NULL, NULL),
(18, 10, 1, 'Doug Grant DDS', '492231', '48', 'Sapiente quia minima ipsa eligendi voluptates et minima. Eos corporis harum quisquam consequatur eum aut. Architecto labore qui impedit error laudantium.', 'image-seeder.jpg', NULL, NULL),
(19, 6, 2, 'Ms. Catherine Quitzon', '525903', '36', 'Repudiandae aut quam et ab et nihil. Dolorem aut ad molestiae voluptatem reiciendis. Velit non aliquam sapiente ut. Porro odio voluptatibus vero vero voluptate est.', 'image-seeder.jpg', NULL, NULL),
(20, 2, 3, 'Peyton Mayert', '411013', '24', 'Assumenda voluptatem et ut nulla fugit. Blanditiis tenetur sapiente autem voluptatem qui dolorum vel. Voluptas dolorem eius commodi ut non inventore aut.', 'image-seeder.jpg', NULL, NULL),
(21, 8, 2, 'Selina Herzog', '704043', '17', 'Impedit animi asperiores est modi in fugiat. Rem cumque asperiores est sequi et rerum. Inventore eos cumque accusamus est. Et veniam vel eligendi quis incidunt.', 'image-seeder.jpg', NULL, NULL),
(22, 4, 3, 'Julianne O\'Reilly III', '732833', '46', 'Voluptate laboriosam omnis qui perferendis odio voluptates est. Voluptatem eaque ipsam eaque error aut numquam. Ipsum non aut qui assumenda sequi ut.', 'image-seeder.jpg', NULL, NULL),
(23, 6, 2, 'Vinnie Botsford', '997513', '20', 'Aut aut quia aut ratione non dolorem. Earum dolorem optio consequatur accusamus. Inventore suscipit possimus reiciendis vel quia et. Consequatur dolorum placeat quod eligendi rerum cupiditate vel.', 'image-seeder.jpg', NULL, NULL),
(24, 6, 1, 'Jordon Heidenreich', '388819', '43', 'Numquam minus quo quis optio et sint. Nisi similique omnis debitis aut enim. Neque ipsa ex et quas.', 'image-seeder.jpg', NULL, NULL),
(25, 1, 1, 'Keith White', '467925', '38', 'Doloribus consequatur sit neque reprehenderit. Expedita consectetur accusantium saepe ullam itaque labore eos est. Labore accusamus cumque iure fuga tenetur.', 'image-seeder.jpg', NULL, NULL),
(26, 9, 2, 'Rose Parker', '500502', '26', 'Temporibus quod sapiente adipisci maxime. Facere qui facilis suscipit eligendi quisquam fugiat reiciendis. Eveniet facilis et iure nemo.', 'image-seeder.jpg', NULL, NULL),
(27, 6, 2, 'Zula Spinka', '716981', '26', 'Dolore dolor ducimus sit ullam nihil culpa corrupti modi. Voluptatem est aut minus aliquam est soluta sit. Tempora qui voluptatibus ipsa enim repellendus qui et. Voluptatem quo nulla ullam quasi.', 'image-seeder.jpg', NULL, NULL),
(28, 5, 1, 'Philip Littel V', '606863', '20', 'Est consequatur rem aut sapiente facilis asperiores nulla. Animi velit hic quasi quis minus. Aliquid dolor iste sit nihil in molestiae dolores. Rerum numquam repudiandae et est adipisci.', 'image-seeder.jpg', NULL, NULL),
(29, 1, 3, 'Dolores Doyle', '377109', '45', 'Incidunt optio et officiis ut praesentium nesciunt. Rerum aut quae veritatis totam eum et quia. Cumque repudiandae similique consectetur et. Odio commodi et expedita voluptas quo sed consectetur.', 'image-seeder.jpg', NULL, NULL),
(30, 1, 3, 'Prof. Bryana Moore II', '538784', '16', 'Placeat vitae doloremque amet deleniti. Cumque impedit est numquam eaque ut et asperiores autem. Aperiam libero quam sunt accusamus vitae molestiae. Quas voluptate aliquid dolor rerum unde saepe.', 'image-seeder.jpg', NULL, NULL),
(31, 10, 2, 'Jacynthe Hill', '721868', '45', 'In mollitia ab quam fugit tenetur voluptas et doloremque. Omnis unde aut et sed. Animi ipsum ut facilis.', 'image-seeder.jpg', NULL, NULL),
(32, 1, 2, 'Mia Keeling DVM', '962337', '16', 'Odit velit repellat non fuga. Magnam sunt dolore quaerat eum. Molestiae molestiae enim quia blanditiis recusandae dolorum. Sapiente eveniet alias nam distinctio velit deserunt.', 'image-seeder.jpg', NULL, NULL),
(33, 9, 2, 'Katelin Bechtelar', '928004', '24', 'Est dolores fugit ut molestias pariatur. Tenetur voluptates ut ipsam eos sint eveniet. Maxime non rerum eos expedita cupiditate.', 'image-seeder.jpg', NULL, NULL),
(34, 4, 2, 'Rory Walsh MD', '675094', '42', 'Est laudantium voluptatibus sed animi. Nesciunt sint debitis dolorem mollitia sapiente corporis possimus.', 'image-seeder.jpg', NULL, NULL),
(35, 1, 1, 'Mr. Robb Greenholt V', '727749', '29', 'Numquam ipsa cumque non commodi quia accusamus aspernatur et. Fuga ipsum est quia eum repellendus. Quia dolorem et culpa vel exercitationem voluptatibus aut.', 'image-seeder.jpg', NULL, NULL),
(36, 8, 3, 'Trycia Howell', '370269', '45', 'Itaque aut earum veritatis aliquid occaecati dolor vitae. Corporis inventore consequuntur mollitia labore dicta. Saepe enim illum temporibus eaque.', 'image-seeder.jpg', NULL, NULL),
(37, 10, 1, 'Vivianne Conroy', '594468', '28', 'Hic cumque aliquam et qui ea omnis rerum. Ut quam rerum adipisci ea est ipsum aperiam. Et est error autem minima. Nesciunt et molestias quas delectus.', 'image-seeder.jpg', NULL, NULL),
(38, 3, 2, 'Mr. Robert Nikolaus II', '948985', '48', 'Doloremque sapiente omnis porro ea. Nostrum eum velit deleniti dolores ex. Qui at soluta laudantium et placeat laboriosam. Sit nam inventore itaque ea aut qui.', 'image-seeder.jpg', NULL, NULL),
(39, 7, 3, 'Dagmar Wisozk', '948943', '21', 'Suscipit enim deleniti temporibus perspiciatis. Minus totam sunt consequatur eum quod aut minima. Eius dolor non repellendus aut suscipit impedit illo. Eius harum molestiae aut minima.', 'image-seeder.jpg', NULL, NULL),
(40, 6, 1, 'Vita Olson', '318303', '44', 'Nisi atque aspernatur excepturi non quo. Consequatur et veritatis voluptate voluptatem in voluptatem. Et aliquid sapiente recusandae expedita. Velit aut quibusdam rerum maxime iusto neque.', 'image-seeder.jpg', NULL, NULL),
(41, 9, 1, 'Lea Beer', '538774', '42', 'Neque repellendus ut repellat animi. Vero non eveniet possimus eos tempore eius ex. Laboriosam magni totam sit eum. Dolores dolor eius amet natus.', 'image-seeder.jpg', NULL, NULL),
(42, 4, 2, 'Robb Hodkiewicz MD', '513747', '31', 'Libero quia nihil sequi explicabo delectus veniam est repellendus. Quam velit est eius voluptatem.', 'image-seeder.jpg', NULL, NULL),
(43, 5, 2, 'Andy DuBuque', '546705', '45', 'Perspiciatis quia et quia ullam aut. Voluptatibus qui beatae eum consectetur minus ut. At iure dolorum deserunt totam in ea. Cum aut non cumque aliquid totam quia modi.', 'image-seeder.jpg', NULL, NULL),
(44, 5, 3, 'Lelah Olson', '823791', '49', 'In veniam quia autem repellendus. Doloremque doloribus eveniet et unde voluptas earum sed. Consectetur quisquam ullam blanditiis harum voluptatibus tempore odio. Aut minima quidem facere qui.', 'image-seeder.jpg', NULL, NULL),
(45, 2, 2, 'Nella Kozey', '354076', '11', 'Fuga aut cumque numquam ea suscipit. Animi nisi non nostrum dolore non eveniet molestiae. Assumenda aspernatur vero vel accusamus.', 'image-seeder.jpg', NULL, NULL),
(46, 9, 1, 'Ethel Waters Jr.', '456774', '23', 'Provident aliquam est dolore. Et sint distinctio sint dolorem voluptates cumque eos. Repellat iure illum voluptas sunt saepe numquam enim.', 'image-seeder.jpg', NULL, NULL),
(47, 4, 1, 'Dr. Tyler Ankunding', '320872', '20', 'Labore et necessitatibus distinctio minima rerum aspernatur. Ad repellendus ut dolorem aspernatur officia odio. Doloremque unde adipisci doloribus.', 'image-seeder.jpg', NULL, NULL),
(48, 10, 1, 'Camila Hansen', '940486', '50', 'Debitis nemo rerum ullam similique aliquam. Hic porro mollitia soluta similique modi ut. Neque in minima sunt dolor beatae officia dolor. Excepturi ut nostrum voluptatum sed sequi ea porro.', 'image-seeder.jpg', NULL, NULL),
(49, 4, 2, 'Ms. Bailee Hammes DDS', '710784', '31', 'Reprehenderit ea enim ut aut minima laborum magnam. Sapiente nihil deserunt hic quos voluptatem. Consequatur fuga non nisi eaque dolorem et eos illum.', 'image-seeder.jpg', NULL, NULL),
(50, 5, 2, 'Eryn Tromp', '864734', '20', 'Debitis totam necessitatibus unde repellat repellat sed vel. Voluptatibus sed provident aut unde. Ut optio commodi vel eius. Quae alias aperiam eaque.', 'image-seeder.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `spas`
--

CREATE TABLE `spas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(11) NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `spas`
--

INSERT INTO `spas` (`id`, `email`, `password`, `name`, `city_id`, `location`, `phone`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'haley.diego@yahoo.com', '$2y$10$jI2k.vVSeCxuB.KAUIGNuemOaYiBZxtFJuxfkzxxHQRktkCyVVkIe', 'Cristal Bednar V', 2, '14883 Veum River\nDickinsonshire, WI 03715', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(2, 'joanny.shields@hotmail.com', '$2y$10$22/ulDoArXF01K9f1jVtZe4eKBNnl/8TFHKAKE4PB6u.NkIP2K9y.', 'Estevan Bergnaum Jr.', 3, '633 King Meadow\nKrystelside, TX 90061-1775', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(3, 'eldora.jast@hotmail.com', '$2y$10$RCKvKOZkHPO/SX9XJ/b2Tu8Gl.N9IayNjvE7.EeQ5EetxSiQHBMta', 'Kiana Kuhn', 3, '4477 Batz Locks\nWest Eloisamouth, OH 36642', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(4, 'rkuvalis@schamberger.com', '$2y$10$OvjvIRRSxuvNyZEkdW4DGe2Q0aYnb2o8aEb6tJ43zRMrnCB7NjiWW', 'Christophe Lind', 3, '548 Murray Trafficway\nEast Adolph, NC 70220', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(5, 'thowell@mclaughlin.com', '$2y$10$.eCsT60Dbw7ejhsKc.6QUOkyD9COktuLXV6mZML3pZFyiMxTAJdlG', 'Marlee Stoltenberg', 2, '7560 Jeanette Ramp\nNorth Louieside, LA 87656', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(6, 'mafalda.jacobi@kub.org', '$2y$10$f6gRwu5qDYMsYBh0G3Gl/eea3eNfL8brovVM9p5u.2wgmLUjLz2ZW', 'Ms. Cecilia Green', 1, '6261 Dicki Drive Suite 783\nKuphalbury, AZ 41006', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(7, 'damaris39@weissnat.com', '$2y$10$NIaOFDclgPtsHPiAgVGlQu8yoLOz1N1Fl7Rx01DleVfRASOJ5yRju', 'Dr. Ervin Russel', 1, '6528 Vandervort Prairie Apt. 359\nMohrberg, ME 38258-5939', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(8, 'lbaumbach@yahoo.com', '$2y$10$AyfYWTSgjDzvbVUie1i5vORWjV0pVrV9Rkd0nzYuK/S0z5bVupZEq', 'Myrtle Miller', 3, '7823 Morar Squares Apt. 722\nLenniefort, NH 49610', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(9, 'hartmann.emmy@schumm.com', '$2y$10$kRueCUBNtY9Sz0vojbBSQun.tuAB0f43xMH48ME5jz23b9owJuYP2', 'Cletus Cormier', 3, '962 Ray Islands Apt. 432\nWest Karlimouth, MI 67967-8192', '0393079176', 'image-seeder.jpg', 1, NULL, NULL),
(10, 'ktremblay@ernser.com1', '$2y$10$hWzGl0WYjUmzjbtysZZvU.SZ2NCt2S0anyu/ut5ULaUNhd59j/Yt2', 'Prof. Blair Kiehn PhD1', 1, '5714 Stoltenberg IslandsTreview, MN 03866', '0393079176', '5de53381670b2-image-seeder.jpg', 1, NULL, '2019-12-02 09:03:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staffs`
--

CREATE TABLE `staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-avatar.png',
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spa_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `avatar`, `gender`, `spa_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'dssad', 'default-avatar.png', 'Nam', 10, 0, '2019-12-02 08:59:45', '2019-12-02 08:59:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default-avatar.png',
  `gender` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `date_of_birth`, `is_active`, `email_verified_at`, `avatar`, `gender`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lawrence Hackett', 'kassandra25@gmail.com', '$2y$10$lkYTWrvoSwsPAIxhnGhA7u2zrnp/Hek8PpdXqw9H5zJw9WmM3/Qz6', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(2, 'Ignatius Lang', 'gregorio31@roberts.org', '$2y$10$4VdIlF0zGS5I19EuSibGuec0TucDvgTGvT96pl7UXhzJvjxOLygWi', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(3, 'Geo Jerde', 'krowe@yahoo.com', '$2y$10$TDXtzM/DGPnhZI6Y9Djd/OYHZEp3NpJeFT3tTLXVcJnSlDFZeV9i6', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(4, 'Loren Bayer', 'jennifer18@gmail.com', '$2y$10$dijChmlp6Piv.y2BKJbCX.tr2eDjvdcZB0Rkx52mB6rljd.d7nMZ.', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(5, 'Morton Gutkowski', 'robyn.kunde@hotmail.com', '$2y$10$nuraq5YZxQUBL.aOv0Qb2.ZC6grmOr33PAx8kpj4iUeph2jhuI2jm', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(6, 'Melany Wolf', 'ycrona@brown.info', '$2y$10$G.04m70gMHncwDmdz.sGn.IObRYsZ7qdrXh9n2dMPa5IIa3p7EfuG', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(7, 'Marco Lind IV', 'adolph.jerde@gmail.com', '$2y$10$yDqbLCj3MZkOcIwrxsPGj.iKUe3x3.sUOZ56Uj8r.FF8brHgynsZS', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(8, 'Quentin Corwin', 'gerhold.rogelio@heaney.net', '$2y$10$zX/C6PebntzkOxsdtR5M6ev0BFPBEfqyVtl7b0UGTHCLnAz1mcKJ2', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(9, 'Mrs. Rachel Wisozk', 'hyatt.devyn@gmail.com', '$2y$10$Kk/FxqfcmF5QbkvjX4P9..u0ymkMzKrdRAXtTIqSeOfY6c.jtmgvK', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL),
(10, 'Tatyana Ruecker', 'gaylord.kellen@weissnat.biz', '$2y$10$Kkcw2fks53vgMIx6ZQEld.x4bmGZtpTEd0Jh.LmTFv0FJlMJxqLm6', '0393079176', '2019-12-02', 0, NULL, 'image-seeder.jpg', 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `web_settings`
--

CREATE TABLE `web_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking_of_user`
--
ALTER TABLE `booking_of_user`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `rate_service`
--
ALTER TABLE `rate_service`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `spas`
--
ALTER TABLE `spas`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking_of_user`
--
ALTER TABLE `booking_of_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=462;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `rate_service`
--
ALTER TABLE `rate_service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `spas`
--
ALTER TABLE `spas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `web_settings`
--
ALTER TABLE `web_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
