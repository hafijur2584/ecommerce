-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2019 at 09:32 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'super admin',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `avatar`, `phone_no`, `type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, 'super admin', '2019-07-23 23:36:54', '$2y$10$EbJ4aYukshgbBG7nHLDaQ.ZEu7UtupSHv/8SUF8a4fdM.5SjUx4pi', NULL, '2019-07-23 23:36:54', '2019-07-23 23:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_user_id_foreign` (`user_id`),
  KEY `carts_product_id_foreign` (`product_id`),
  KEY `carts_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, NULL, 1, '2019-07-23 14:41:43', '2019-07-23 14:43:31'),
(2, 2, 2, 1, NULL, 1, '2019-07-23 14:41:44', '2019-07-23 14:43:31'),
(3, 3, 2, 2, NULL, 1, '2019-07-23 14:56:41', '2019-07-23 14:56:54'),
(4, 4, 2, 2, NULL, 1, '2019-07-23 14:56:43', '2019-07-23 14:56:54'),
(5, 1, 1, NULL, NULL, 1, '2019-07-24 02:01:35', '2019-07-24 02:01:35');

-- --------------------------------------------------------

--
-- Table structure for table `image_galaries`
--

DROP TABLE IF EXISTS `image_galaries`;
CREATE TABLE IF NOT EXISTS `image_galaries` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_20_193712_create_products_table', 1),
(4, '2019_07_20_194307_create_reviews_table', 2),
(10, '2019_07_21_165556_create_orders_table', 4),
(6, '2019_07_21_165643_create_carts_table', 3),
(11, '2019_07_23_220212_create_admins_table', 5),
(12, '2019_07_24_091900_create_image_galaries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `is_seen_by_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `user_id`, `name`, `phone_no`, `shipping_address`, `payment`, `total_price`, `email`, `is_paid`, `is_completed`, `is_seen_by_admin`, `created_at`, `updated_at`) VALUES
(1, 'PS2540', 2, 'Rakib', '456789', 'test', 'CashOnDelivery', 949, 'rakib@gmail.com', 0, 0, 0, '2019-07-23 14:43:30', '2019-07-23 14:43:30'),
(2, 'PS1563915414', 2, 'Rakib', '456789', 'test', 'CashOnDelivery', 455, 'rakib@gmail.com', 0, 0, 0, '2019-07-23 14:56:54', '2019-07-23 14:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `model`, `color`, `brand`, `price`, `stock`, `description`, `details`, `created_at`, `updated_at`) VALUES
(1, 'voluptatem', '067567', 'dolorum', 'rem', 177, 8, 'Ut quidem minima maxime eos et possimus ipsam. Quia deserunt corporis non. Velit molestiae eum numquam repellendus in aut officiis.', 'Voluptate tempora quae nisi a alias ipsam. Quo et facere alias tempora aut. Excepturi vero non corporis et voluptatem.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(2, 'ut', '0656557', 'ut', 'necessitatibus', 762, 77, 'Temporibus dolores omnis eos quia. Assumenda placeat voluptatum sed dolor. Soluta aut iusto voluptas recusandae. Non dolor hic quaerat nihil magni esse. Quia quia quo fugiat sint perspiciatis.', 'Placeat vel at hic. Sit debitis nulla nisi sit. Et et velit id. Ratione delectus fugit quam tenetur neque facilis.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(3, 'provident', '389789', 'nobis', 'voluptatem', 110, 65, 'Veniam ipsum et autem cupiditate commodi officia. Quam ipsam quaerat sequi eos eius. Vitae quisquam aliquid voluptatem dolor cum nobis possimus molestiae. Impedit consectetur omnis eum praesentium.', 'Rerum est debitis possimus. Ea sed qui dolorem ullam iusto. Deserunt aspernatur possimus et autem error harum explicabo. Modi doloremque ut cupiditate animi nisi enim eaque ut.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(4, 'optio', '62354565', 'sunt', 'quis', 335, 23, 'Autem quia cumque magnam cupiditate quia qui nostrum. Quis voluptas et voluptate error. Iure quia consequatur dolore aut.', 'Distinctio a alias similique ad ducimus quia. Iusto totam minima eius non debitis culpa. Est voluptas voluptas voluptatibus commodi. Tempora officiis quos reiciendis distinctio non tenetur sunt.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(5, 'expedita', '1564465', 'dicta', 'quibusdam', 309, 54, 'Impedit dolor qui quo non harum dicta. Maxime aut est et sunt omnis odio sit. Consequatur ut ea maxime incidunt aut consequatur sunt. Similique deserunt nihil optio perferendis sit rerum quo.', 'Architecto aut maxime adipisci maiores ut. Asperiores cum ut nemo hic. Laborum porro omnis recusandae inventore.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(6, 'qui', '4567898', 'velit', 'ut', 198, 25, 'Reprehenderit incidunt omnis animi neque. Possimus quia beatae quae reprehenderit consectetur. Nemo amet recusandae id et est reprehenderit.', 'Harum ipsam aut impedit aut et. Reiciendis velit incidunt voluptas sint facilis cupiditate tempore. Aut labore corrupti corrupti et.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(7, 'quia', '66865645', 'sint', 'velit', 890, 53, 'Aperiam voluptatibus veritatis distinctio tempore non expedita. Dolores mollitia eligendi est excepturi aut laboriosam. Harum error at quo fuga itaque voluptatem alias. Voluptate saepe accusamus possimus aut eaque natus.', 'Voluptas necessitatibus dignissimos maiores. Dolorem totam et ducimus deserunt. Ut et repellendus quia dolor eligendi veritatis. Consequatur ea id qui dolorum minima.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(8, 'in', '95687678', 'consequatur', 'ut', 405, 64, 'Voluptatum fugiat ut est ea. Laudantium molestias consequatur voluptas. Et distinctio quia sed expedita. Nam beatae consequatur molestiae.', 'Impedit praesentium dolorem inventore aliquid dolore autem. Voluptatibus quasi non maiores error est non. Quis illum magni et labore. Consequatur doloribus ipsam consequatur doloribus qui in fuga. Ea et vel amet.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(9, 'placeat', '778579', 'quia', 'et', 918, 744, 'Quo amet voluptatem quas dolore nostrum. Adipisci quas commodi dolore hic. Ut voluptatem molestiae deserunt doloremque omnis illo. Sunt voluptatibus sit iusto impedit id accusamus.', 'Tenetur explicabo similique voluptatibus facilis. Aut sit occaecati libero quod amet et sit. Fugiat accusamus earum aut earum. Eos quo fugiat dolorum perspiciatis illum assumenda.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(10, 'modi', '19789', 'consequuntur', 'illum', 704, 35, 'Minima molestiae velit in vel. Sapiente in fuga modi consequatur. Quidem ad adipisci molestiae sequi necessitatibus soluta. Sit rerum delectus earum pariatur natus earum quia.', 'Rerum cumque voluptas recusandae quod. Modi exercitationem est qui culpa impedit labore quasi. Et omnis rerum sit explicabo. Magni at occaecati sed ullam doloremque corrupti enim.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(11, 'ut', '556789', 'vel', 'id', 643, 134, 'Quasi sit officiis iure quod. Rem quis dolore officia. Aliquam optio in numquam dolorem ipsa et voluptate perspiciatis.', 'Aut rerum ipsam praesentium quis quaerat tempora nesciunt. Eveniet rem at id consectetur eius quia. Velit dolorem similique possimus aut et et aut tempora.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(12, 'nulla', '289566', 'assumenda', 'est', 510, 645, 'Nisi porro deleniti quasi non nostrum. Voluptas odio dolorem quisquam quia magni. Beatae explicabo reprehenderit consequatur quibusdam sed provident ratione. Unde est quam pariatur.', 'Soluta totam ut voluptas quis. Non dolorem aliquam doloremque nihil fugiat. Quia aut nostrum dolorem dolor. Repellendus veritatis reiciendis consequatur minima.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(13, 'sed', '5548945', 'voluptas', 'incidunt', 809, 834, 'Reprehenderit expedita aut ut expedita iusto pariatur. Numquam illo quo accusamus rem saepe ipsam non. Cupiditate voluptatibus tempora occaecati et dolores quidem laudantium.', 'Non et asperiores architecto dolor inventore reiciendis exercitationem. Debitis aut ex maxime. Occaecati fuga atque ex maxime non ipsam dignissimos.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(14, 'magnam', '7868988', 'ad', 'aut', 272, 45, 'Magnam consectetur quis id nulla maiores ducimus qui. Delectus sit porro pariatur ipsam autem consequatur ipsum. Dolorem dignissimos necessitatibus magni. Ab voluptas id pariatur tempora.', 'Quo veritatis dolore consequatur debitis cumque sit omnis. Autem perferendis aliquid voluptatem est doloremque. Quia cum molestiae odio dolores molestiae. Possimus nemo blanditiis fugiat laboriosam.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(15, 'magni', '37898686', 'et', 'accusantium', 824, 48, 'Dolorum nulla rem autem. Vitae voluptatem minus quo aut corrupti magni qui reprehenderit. Doloribus et vero molestias animi. Dolorem sit non omnis quas velit quam in ipsa.', 'Voluptas architecto vitae impedit omnis pariatur ipsum laborum. Quis modi iure est optio perferendis. Qui illum repellat sit corporis repudiandae est.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(16, 'qui', '978556', 'et', 'inventore', 423, 54, 'Quia reiciendis quae a repellat voluptas. Sit autem illo ex voluptas laudantium deleniti est. Vel repellat quas in quia culpa ea accusantium consequatur. Quia id non nihil saepe qui.', 'Quisquam reprehenderit dolorum saepe quo. Itaque qui consectetur quia eos. Ex est facilis libero voluptate.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(17, 'corrupti', '056566', 'ut', 'voluptatibus', 396, 94, 'Ducimus provident dolorem est tempora rerum. Ut excepturi aut asperiores eum architecto dolores. Deserunt exercitationem et culpa necessitatibus velit rerum. Aperiam aut et odio in. Reprehenderit doloremque molestiae corrupti doloremque exercitationem soluta et.', 'Quia vero deserunt numquam vitae omnis repellendus iste. Porro ducimus quis modi omnis corrupti ea sit. Adipisci natus molestias perferendis facere veniam aut. Ut quod illum et sint deserunt. Ab deserunt non recusandae.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(18, 'accusamus', '36565235', 'est', 'quisquam', 108, 94, 'Et deleniti molestias officia. Quos repudiandae saepe exercitationem. Ut distinctio laboriosam sit enim laboriosam in. Eveniet voluptatum magnam et veniam.', 'Harum voluptas animi adipisci numquam est perspiciatis. Qui reprehenderit esse omnis aut rem. Ad sit excepturi repellendus laboriosam quis.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(19, 'dolorem', '9654565', 'quis', 'unde', 635, 95, 'Iure voluptatem consequatur culpa aut sunt. Distinctio aut eum in mollitia expedita ea totam eaque. Deserunt dolor incidunt nesciunt. Inventore exercitationem voluptate voluptatem alias velit voluptatum. Numquam pariatur non vel quae.', 'Voluptatibus nam est laudantium ut ut repellendus. Non aut ipsum quam aut. Beatae vel omnis quos aut modi ipsum rerum. Aut deleniti deserunt possimus quia.', '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(20, 'laborum', '9654568', 'fugiat', 'vel', 107, 35, 'Consequuntur ut ea eum distinctio. Quaerat iure temporibus id veritatis. Sit modi quas molestiae veritatis possimus voluptates et eius. Ab rerum distinctio sequi omnis exercitationem nisi quis nostrum.', 'Ut omnis et provident et neque quo eius. Perferendis id quia dolores et. Consectetur commodi sit enim sunt aut qui expedita. Voluptate alias aut voluptate qui qui provident fugiat at.', '2019-07-20 14:25:53', '2019-07-20 14:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `customer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_product_id_index` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `customer`, `review`, `star`, `created_at`, `updated_at`) VALUES
(1, 5, 'Gardner Cole', 'Id hic incidunt nemo voluptas eius. Saepe provident impedit ipsa vel ut saepe aut. Nesciunt similique officiis odio fugit nisi debitis aut adipisci.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(2, 19, 'Marina Auer', 'Et repellat ab doloremque recusandae rerum. Officia aliquam cum earum sunt dolorem numquam ipsa iure. Laudantium sed voluptatibus architecto voluptas fugiat est deleniti deserunt. Ad esse sed non eum.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(3, 4, 'Prof. Stuart Streich', 'Occaecati enim velit rerum ea vero. Ab et voluptatem in qui dolor aut. Fugiat aspernatur asperiores reprehenderit maxime voluptate rerum nesciunt.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(4, 9, 'Elmer Dicki', 'Libero facilis alias aliquid ipsam. Labore odit consequatur eius enim repudiandae ab veritatis. Enim et eveniet maiores sunt.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(5, 2, 'Ms. Janis Buckridge', 'Ea nihil in perferendis ipsa. Quidem quo eum laborum atque rem ut et. Est veritatis nemo consectetur.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(6, 7, 'Monserrate Smitham', 'Facilis dolorem nesciunt natus explicabo beatae dolores rerum. In debitis dignissimos rerum dolorem. Quasi optio officia voluptatem rerum sunt dolorum repellendus. Laborum repudiandae cumque et aut delectus rerum recusandae.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(7, 7, 'Miller Harber', 'Amet maxime tenetur ut laudantium voluptatem sequi. Ut deleniti voluptas deleniti et tenetur. Ipsa quasi voluptates corporis sit odit voluptatem sint. Amet et beatae et eius dolorem. Non minus quod libero suscipit ut labore assumenda.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(8, 3, 'Prof. Abdiel Stroman DVM', 'Sed eaque dolor nesciunt magnam. Dignissimos velit quod nobis et ut. Voluptas doloribus dignissimos eum similique dolorum iusto.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(9, 19, 'Kira Sawayn IV', 'Qui esse in est. Non ea praesentium occaecati perferendis. Ut vel autem eveniet rerum unde. Ut eum quod est inventore.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(10, 2, 'Colleen Sipes', 'Non ipsam ut architecto sed reprehenderit tenetur repudiandae. Aliquam et facere modi ex et consequuntur sed ut. Vel distinctio deleniti eum fuga est consequatur.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(11, 6, 'Marlen Frami', 'Rerum praesentium aut aut ullam. Optio magnam animi aspernatur a reiciendis nulla. Eum quos sapiente esse harum labore eaque iste omnis.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(12, 14, 'Tyson Blick PhD', 'Sed eaque non omnis et cumque corporis inventore. Eveniet optio voluptatem aliquam non ratione. Deleniti praesentium libero omnis culpa est.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(13, 16, 'Mr. Edgar Mosciski V', 'Ea mollitia voluptatem quaerat. Quaerat maiores molestias repellendus. Fugiat suscipit optio corrupti illum consequatur perspiciatis. Voluptates occaecati nisi repellendus quia velit voluptatem praesentium maxime. Omnis sed dolorem consectetur excepturi aut.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(14, 16, 'Mr. Julian Nienow II', 'Aperiam et quisquam eos dolores officia ea. Molestiae voluptatem nisi perspiciatis hic tempore nihil. Voluptatibus vel corporis commodi cum rerum.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(15, 18, 'Eldred Jacobson', 'Sint quidem ea iusto praesentium. Et eaque expedita error eaque sint odit. Excepturi maxime adipisci perferendis consequatur.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(16, 19, 'Ms. Jacky Wolf II', 'Explicabo voluptatem assumenda est animi quae. Reiciendis et cum at qui perferendis voluptate. Nam nesciunt ut alias a labore aut. Accusantium vel sunt ipsum qui id adipisci.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(17, 18, 'Tina Shanahan', 'Corporis ut ex inventore rerum magnam dolorum qui. Quod rerum explicabo corporis cupiditate et dignissimos. Distinctio fugit asperiores dolores ipsa eligendi alias.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(18, 16, 'Rosalee Olson PhD', 'Eos expedita aliquid sed in minus deserunt sit. Harum mollitia omnis labore. Pariatur vero saepe tenetur delectus aliquam earum. Sint ipsum sed ut ullam in rerum necessitatibus.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(19, 2, 'Trystan White', 'Nemo dolorem itaque harum autem. Laboriosam vitae sint adipisci modi et. Et dolorem eligendi dolorum ullam impedit quasi. Atque reprehenderit fuga minus.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(20, 1, 'Prof. Colton Auer', 'Consequatur corrupti quia aut hic quia perspiciatis. Sunt placeat voluptas excepturi perferendis ratione aperiam incidunt et. Explicabo consequatur deserunt delectus et.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(21, 4, 'Ciara Schoen', 'Laudantium veritatis veniam quo cupiditate quasi numquam. Odio distinctio delectus quidem sed ut. Nobis consequatur odio impedit velit voluptas. Officia sint illum molestiae amet voluptatem.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(22, 3, 'Willie Goldner', 'Esse dignissimos esse ea nostrum. Quia odit molestiae non distinctio vitae voluptatem ut. Debitis velit non dignissimos tempore et necessitatibus. Fugiat quo mollitia consectetur non architecto qui aspernatur. In ad dolor eum unde aspernatur.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(23, 11, 'Ada Connelly', 'Aut voluptatem laboriosam eaque. Voluptatibus aliquid voluptates omnis recusandae rerum est. Enim quia et enim provident.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(24, 18, 'Vida Lind', 'Quam delectus earum omnis vel magni ut velit. Nobis corrupti itaque aliquam ad qui hic. Doloremque ut maiores dolore quos non quis eligendi magnam. Deleniti ut ea rerum in soluta fuga.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(25, 17, 'Kevon Ankunding', 'Nobis nobis iure reiciendis veniam alias rem fuga nihil. Quasi voluptate quia et reprehenderit ut. Similique corrupti in molestiae repudiandae.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(26, 3, 'Mr. Eddie Schmeler', 'Omnis voluptatibus deserunt aut accusamus quasi. Repudiandae fugit asperiores ut. Pariatur ut praesentium aut ut repellat.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(27, 20, 'Sherwood Aufderhar', 'Exercitationem sed et soluta et. Quis eius optio dolorem voluptate. Vel vitae error quo ducimus occaecati est qui inventore.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(28, 16, 'Asa Hermiston', 'Qui provident repudiandae dicta rerum quam assumenda. Quia optio tenetur fugiat adipisci deserunt saepe quia. Ut ab at optio id optio.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(29, 16, 'Hugh Kuphal III', 'Molestiae neque rem soluta asperiores nisi. Perspiciatis vel enim eaque exercitationem. Nobis ducimus aut soluta illum perferendis.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(30, 16, 'Erica Rutherford DDS', 'Aut delectus minus vel facilis quia consectetur omnis. Ut eius a ea autem inventore. Facilis voluptas molestiae numquam.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(31, 17, 'Prof. Zechariah Dach', 'Dolorum cum non laborum ducimus. Fugit eos culpa asperiores praesentium et. Voluptatem dolores omnis aliquid vitae culpa iure.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(32, 18, 'Ms. Eloise Howell', 'Maiores veritatis porro quasi molestiae et distinctio corporis. Quam libero itaque est sunt. Ut accusantium est sed sed. Excepturi omnis et deleniti commodi architecto adipisci rerum.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(33, 8, 'Ms. Lenna Gutmann V', 'Ipsum qui consequatur quis dolore sunt recusandae ut. Voluptatem ex corporis nulla cumque mollitia.', 4, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(34, 11, 'Viva Blick', 'Maiores quas minima blanditiis quia aliquam. Et magni neque inventore ipsam excepturi et sint voluptas. Rerum et iure et sed ducimus. Repudiandae eveniet qui nam beatae eligendi voluptatem.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(35, 2, 'Lacey McDermott', 'Deleniti ut laudantium eligendi quia et tenetur. Maxime nulla ut et at et ut quos cumque. Rerum dolores rerum magnam. Omnis minima accusamus aliquam.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(36, 13, 'Prof. Dawson Watsica III', 'Aut delectus sapiente rerum harum quo quibusdam. Consequuntur soluta aut placeat. Voluptas quam harum autem rerum dolorem odit fuga. Ratione voluptas animi voluptatem ut.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(37, 1, 'Dr. Gordon Roberts IV', 'Sint voluptatem et ab eos officia. Officia molestiae inventore beatae occaecati est quae. Ut sit laudantium doloremque dolores quia.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(38, 12, 'Dominique Cummings', 'Ea praesentium architecto quasi natus fuga accusantium. Laudantium dolorum corporis laborum quisquam. Quidem alias voluptates aut sunt sed quia.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(39, 6, 'Shemar Welch', 'Voluptatem explicabo aut pariatur voluptates. Dolorem rerum et ex ullam. Dignissimos ad velit nihil. Vero culpa sit distinctio est.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(40, 14, 'Pearl Block', 'Voluptas autem labore sequi amet. Voluptatem iste enim ea vitae unde sequi repellendus. Ullam ipsam est perspiciatis. Autem ea nesciunt deserunt voluptas.', 5, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(41, 1, 'Betty D\'Amore', 'Voluptatibus molestiae cum dolorum rerum maiores. Consequatur impedit aliquid sequi velit consectetur. Itaque est recusandae et enim sunt. Neque possimus nobis quas nihil. Eum ut omnis in veritatis.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(42, 14, 'Lela Sipes', 'Est modi aut quia et. Consequatur excepturi aut dolor minima id repellat culpa eum. Rem quod possimus nihil minima vel tenetur. Quae voluptatum aut vel numquam fugiat nam. Voluptatem maiores temporibus recusandae voluptas.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(43, 13, 'Otha Nolan', 'Impedit dolor laborum est voluptatem aliquid maiores aperiam. Similique sint repellendus maxime non sed. Quam perferendis ad iste rerum voluptatem libero eum error.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(44, 14, 'Maudie Ritchie', 'Amet quam dolor et explicabo sed assumenda. Error eum excepturi soluta in id quae tempora. Molestiae et quod enim amet voluptas omnis. Et nisi dolorum fuga.', 1, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(45, 8, 'Burley Erdman IV', 'Quibusdam odit soluta nisi iste facere. Quisquam eos consequuntur et praesentium rerum voluptatem non omnis. Quibusdam reiciendis velit dignissimos dolore. Minus optio quam rerum sunt dolores. Aut omnis quibusdam voluptates sequi aut est ut.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(46, 17, 'Brent Kling', 'Saepe perferendis fugit alias perferendis vitae impedit modi consequatur. Quo et eos omnis nihil dolorem. Ut qui magni atque doloribus sit.', 2, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(47, 14, 'Muriel Haley', 'Ex ipsam quibusdam assumenda fuga. Et vel quaerat est non. Et consequatur quo voluptatem aut. Aut iste est necessitatibus voluptatem. Corrupti error provident qui.', 3, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(48, 16, 'Ms. Delta Bartoletti Jr.', 'Voluptatibus incidunt dolorem vel. Quia debitis quae aliquam rerum sint animi doloremque dignissimos. Culpa nihil ipsam in tempore consequatur qui. Quae vel id ipsa eum atque.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(49, 11, 'Juwan Bartoletti', 'Consequatur sunt hic non inventore dolor itaque nostrum. Exercitationem excepturi quidem excepturi dolorem autem in. Omnis excepturi qui voluptates est natus totam.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53'),
(50, 16, 'Daren Hoeger', 'Voluptatem suscipit cumque odio ducimus non. Sit odit voluptatem aut a eligendi et. Aspernatur ipsa doloribus et totam id.', 0, '2019-07-20 14:25:53', '2019-07-20 14:25:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hafijur Rahman', 'hafijur2584@gmail.com', NULL, '$2y$10$EbJ4aYukshgbBG7nHLDaQ.ZEu7UtupSHv/8SUF8a4fdM.5SjUx4pi', NULL, '2019-07-23 14:08:36', '2019-07-23 14:08:36'),
(2, 'Rakib', 'rakib@gmail.com', NULL, '$2y$10$0JnjzfV5.y93Oy8stSx63uMqeKheiEgnMpTBsxVtAJHnyrLOre3vK', NULL, '2019-07-23 14:09:25', '2019-07-23 14:09:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
