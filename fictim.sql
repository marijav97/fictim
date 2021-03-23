-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fictim`
--

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` int(11) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `image`, `title`, `category_id`) VALUES
(6, 'skincare.jpg', 'Our favorites products for March - 2021', 1),
(7, 'cake.jpg', 'Let\'s cook something!', 3),
(8, 'kourt.jpg', 'Playlists by celebrities', 4),
(9, 'sunglasses.jpg', 'New trends every month', 1),
(10, 'decor.jpg', 'Find inspo for designing your home', 2);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'beauty&style'),
(2, 'decor'),
(3, 'recipes'),
(4, 'playlists');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'Quae sit ipsam ipsum nisi ipsam facere dolor. Eos quo autem sequi repudiandae velit eveniet non. Nulla beatae suscipit vitae illum vel. Dolores aliquid dicta dolorem dolores reiciendis.', 3, 4, NULL, NULL),
(3, 'Labore dolorum amet debitis quis assumenda qui ut accusamus. Repellat repellat odio molestias sed sequi et molestiae.', 1, 9, NULL, NULL),
(4, 'Voluptatem aut earum iste blanditiis reprehenderit dicta. Molestiae et ratione vitae ipsa quo nobis. Cupiditate eaque dolorem sunt est. Non dolorem quia vel et aspernatur earum quae rerum.', 3, 10, NULL, NULL),
(5, 'Perspiciatis quia iure quaerat omnis. Esse unde tempore architecto reiciendis quod. Explicabo non deleniti rerum ut.', 5, 1, NULL, NULL),
(7, 'Officia nihil praesentium quia unde velit. Sint modi magnam ab. Saepe rerum velit omnis ab atque mollitia.', 2, 18, NULL, NULL),
(8, 'Eum voluptas dolores consectetur nobis perferendis amet assumenda. Expedita ut sint necessitatibus aut.', 1, 11, NULL, NULL),
(9, 'Beatae voluptate omnis consequatur rerum natus modi est facere. Quia quis dicta minus ut quis quo impedit. Repellendus quo qui quis eos aut.', 3, 15, NULL, NULL),
(10, 'Unde doloribus modi sint et. Omnis necessitatibus aut aut nesciunt. Porro fugiat quia perspiciatis. Sit fugit suscipit sunt aspernatur consectetur magni qui.', 5, 18, NULL, NULL),
(11, 'Et ut facere ut dolores. Perferendis et et eveniet amet omnis neque alias. Excepturi rem ut ea rerum eaque. Et tenetur iste exercitationem culpa inventore possimus.', 5, 17, NULL, NULL),
(12, 'Est laudantium dolorem est reprehenderit at et atque. Eos ea excepturi voluptatum sed repudiandae. Voluptatem totam eum cupiditate qui.', 3, 7, NULL, NULL),
(13, 'Dolor earum labore sit veniam quibusdam. Delectus rem vel soluta.', 4, 16, NULL, NULL),
(15, 'Facilis quasi fugiat aspernatur voluptates. Fugit ducimus magni rerum quasi eum molestiae incidunt. Nihil et quam libero sed magnam numquam odio. Voluptas et facere atque nisi.', 5, 8, NULL, NULL),
(16, 'Aut magnam alias ad saepe dolorum atque nobis. Dolor minus et ut. Voluptatem consequatur ut aut tenetur. Quia necessitatibus esse cum et voluptates ea sed quibusdam.', 4, 17, NULL, NULL),
(17, 'Omnis corporis similique dicta. Earum est omnis nobis ea iste sint qui. Ipsa et quos aut aspernatur.', 1, 9, NULL, NULL),
(18, 'Aut cumque officiis quasi nesciunt facere nulla. Quasi et suscipit velit omnis inventore iusto sit.', 5, 7, NULL, NULL),
(19, 'Voluptas dolorem aliquam commodi perferendis qui et possimus. Quis dolorum voluptates porro nihil est est omnis. Et eligendi velit cupiditate necessitatibus laudantium ea.', 5, 7, NULL, NULL),
(20, 'Qui sapiente harum ut. Nostrum molestias similique suscipit dolorem recusandae. Repellat enim minima expedita sunt. Maxime in architecto perspiciatis qui consequuntur omnis rerum et.', 2, 13, NULL, NULL),
(21, 'ok seko', 1, 15, '2021-03-13 18:09:13', '2021-03-13 18:09:13'),
(23, 'okk', 2, 21, '2021-03-14 09:44:15', '2021-03-14 09:44:15'),
(24, 'She tried to think back to when the girl had been younger but failed to pinpoint the exact moment when she had become a little too big to pick up and carry.', 1, 27, '2021-03-14 10:01:45', '2021-03-14 10:01:45'),
(25, 'sjadasj', 1, 30, '2021-03-15 10:40:49', '2021-03-15 10:40:49'),
(26, 'Duis sollicitudin condimentum mi vel suscipit.', 15, 26, '2021-03-15 11:28:23', '2021-03-15 11:28:23');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `route`, `name`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', NULL, NULL),
(2, 'posts', 'Posts', NULL, NULL),
(3, 'contact', 'About&contact', NULL, NULL),
(4, 'login-form', 'Login', NULL, NULL),
(5, 'register', 'Register', NULL, NULL);

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
(4, '2021_03_02_143115_create_roles_table', 1),
(5, '2021_03_02_143452_create_menu_table', 1),
(6, '2021_03_02_143535_create_categories_table', 1),
(7, '2021_03_02_143605_create_authors_table', 1),
(8, '2021_03_02_143729_create_posts_table', 1),
(10, '2021_03_02_190851_create_menus_table', 2),
(11, '2021_03_02_193307_create_menus_table', 3),
(12, '2021_03_02_144044_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `intro`, `content`, `image`, `category_id`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Consectetur nam minus ut molestias.', 'Consectetur nam minus ut molestias. Voluptatem dolore autem iure fuga.Consectetur nam minus ut molestias. Voluptatem dolore autem iure fuga.', 'Officiis voluptatibus deserunt ea numquam dolores deleniti repellat. Voluptatem dolore autem iure fuga. Accusamus aut itaque nam natus maxime autem deleniti. \r\nOfficiis voluptatibus deserunt ea numquam dolores deleniti repellat. Voluptatem dolore autem iure fuga. Accusamus aut itaque nam natus maxime autem deleniti.', 'EnrYoXwcU6QEfzYhMxousW5ECJFNPYcE8e3qnAUe.jpg', 1, '2021-03-12 13:03:17', '2021-03-10', 1),
(2, 'Voluptas voluptates vero quaerat ', 'Voluptas voluptates vero quaerat consequatur perspiciatis omnis in quia. Error laudantium soluta omnis nobis. Autem sit non voluptatem explicabo illum odit nisi.', 'Odit dolore sint optio. Maxime voluptas qui quia nihil ipsam voluptatem. Molestiae non nobis voluptatem fugiat. Qui natus numquam ipsum veniam quia et ex.', 'post2.jpg', 3, '2021-03-12 13:03:25', '2021-03-09', 2),
(3, 'Autem et voluptatem corporis nihil ut', 'Autem et voluptatem corporis nihil ut. Natus sed sit nesciunt animi velit perspiciatis. Est ullam eligendi reprehenderit aliquam nostrum ducimus.', 'Esse dolorem quibusdam similique earum. Et sequi dolorem voluptatem molestiae temporibus rerum. Repellendus et distinctio quidem quia.', 'post3.jpg', 1, '2021-03-12 13:03:33', '2021-03-09', 3),
(4, 'Sed aut eum sed eos', 'Sed aut eum sed eos. Est molestiae cupiditate quaerat aut voluptates non ea. Sunt dicta aut porro asperiores sunt autem. Sed consequatur nulla et totam ex doloribus quia.', 'Non qui nulla nisi ipsam est odio. Aut quia ullam voluptatum dolore. Et qui aut quasi. Expedita consequatur labore qui commodi qui. Delectus earum minima tenetur ipsum odio autem consequuntur.', 'post4.jpg', 1, '2021-03-12 13:03:56', '2021-03-09', 4),
(5, 'Non magnam modi eligendi laudantium quam', 'Non magnam modi eligendi laudantium quam. Quas est accusantium qui. Dolorem sit qui nulla hic dolorem.', 'Aut temporibus praesentium consequuntur culpa corrupti. Laboriosam qui voluptatem itaque nihil ratione.', 'post5.jpg', 3, '2021-03-12 13:04:10', '2021-03-09', 5),
(6, 'Vel rerum velit dicta ratione nihil quo', 'Vel rerum velit dicta ratione nihil quo. Quaerat distinctio minima voluptatem aspernatur vitae vitae. Nobis dolores fugit ad culpa assumenda natus ut velit. Corporis quibusdam quia impedit eos incidunt ut.', 'Aut in nobis rerum molestiae sint debitis et. Fugiat ea dolorum adipisci aut odio. Libero itaque architecto culpa nobis eligendi id.', 'post6.jpg', 1, '2021-03-12 13:04:25', '2021-03-09', 1),
(7, 'Sapiente ut in consequuntur vitae qui illum', 'Sapiente ut in consequuntur vitae qui illum. Veritatis eos perferendis accusantium non rerum exercitationem. Ea nihil fugiat illum qui.', 'Adipisci aut rerum beatae molestiae aut facilis ut. Ut qui consectetur unde.', 'post7.jpg', 1, '2021-03-12 13:04:35', '2021-03-09', 2),
(8, 'Reiciendis rerum temporibus dolores', 'Reiciendis rerum temporibus dolores molestias minima quibusdam rerum a. Expedita qui et est deserunt. Ipsa nobis nisi ex est non nesciunt natus totam. Deserunt ipsa cumque aut qui assumenda. Illum est soluta dignissimos et.', 'Repellendus eveniet culpa error repellat at blanditiis officia vel. Magni id blanditiis quod libero in accusantium. Laudantium suscipit quae omnis non labore consequatur ab.', 'post8.jpg', 4, '2021-03-12 13:04:43', '2021-03-09', 2),
(9, 'Consequuntur occaecati deserunt odit', 'Consequuntur occaecati deserunt odit voluptatem provident atque qui. Enim laboriosam omnis fugit sint voluptas autem. Corrupti perspiciatis assumenda dolores autem.', 'Et aut dicta voluptates voluptas voluptate placeat aliquam. Similique ut nobis omnis nemo et aliquam natus. Tempore amet ut sed qui repellat laboriosam.', 'post9.jpg', 2, '2021-03-12 13:04:53', '2021-03-12', 2),
(10, 'Officia ullam exercitationem accusamus optio libero rerum magnam', 'Officia ullam exercitationem accusamus optio libero rerum magnam. Quam magnam saepe hic quia explicabo doloribus iusto. Dolores aut laudantium repellat.', 'Mollitia voluptatem reiciendis dolorum laborum accusantium magni. Voluptatem minus alias ipsa deleniti harum veritatis a eos. Accusantium animi voluptate reiciendis dolor aut accusantium ipsum.', 'post10.jpg', 3, '2021-03-12 13:05:03', '2021-03-09', 3),
(11, 'Occaecati laboriosam aut maxime deserunt', 'Occaecati laboriosam aut maxime deserunt. A quam eaque expedita enim enim et. Hic est nam eum. Molestiae placeat vitae nesciunt ex minus aut corporis.', 'Deleniti quidem nulla et. Voluptatem vel odit dolor facilis. Beatae culpa id enim numquam est porro est. Velit nam cum accusantium qui odit enim.', 'post11.jpg', 1, '2021-03-12 13:05:10', '2021-03-09', 4),
(12, 'Magnam eos libero tempore aliquid eius', 'Magnam eos libero tempore aliquid eius. Quo vel totam et quod et nemo dolores. Et voluptatem voluptatibus eligendi. Laborum hic deserunt temporibus et similique tempora. Minima nostrum alias tempore dicta ex cupiditate.', 'Qui unde expedita sint totam debitis sequi rem. Enim omnis ipsam fuga nam molestiae commodi. Consequatur molestias ipsam nihil.', 'post12.jpg', 2, '2021-03-12 13:05:20', '2021-03-09', 4),
(13, 'Libero eos laudantium aut ad est sed quod eum', 'Libero eos laudantium aut ad est sed quod eum. Nihil voluptatem labore eveniet. Temporibus eos similique quia voluptate. Architecto sed quis velit sed.', 'Eos quia quia quia unde praesentium dignissimos. Tempore accusamus porro et suscipit. Sed reprehenderit aut quod magni magni dolore. Ea voluptas velit excepturi natus.', 'post13.jpg', 1, '2021-03-12 13:05:28', '2021-03-09', 1),
(14, 'Dignissimos sit dicta corrupti dolorem labore iste', 'Dignissimos sit dicta corrupti dolorem labore iste. Voluptatum quasi corrupti vel tenetur rerum quibusdam rerum repellendus. Molestiae illo distinctio suscipit provident ad.', 'Harum ut a quas aliquid fugit. Numquam quia repellendus excepturi iusto. Ut libero consequatur enim qui earum. Et ipsam eum libero distinctio labore et autem optio.', 'post14.jpg', 4, '2021-03-12 13:05:37', '2021-03-09', 1),
(15, 'Est non dolore saepe sit quo qui laudantium', 'Est non dolore saepe sit quo qui laudantium. Nihil similique natus in quo. Sequi odit quo vero voluptatum explicabo quia. Sit vitae cupiditate voluptas molestiae et.', 'Ut doloremque quia eum voluptas quos pariatur. Aspernatur ipsum sint at vel perspiciatis voluptatem aut.', 'post15.jpg', 1, '2021-03-12 13:05:44', '2021-03-09', 5),
(21, 'Donec id nulla purus', 'Nunc auctor dignissim est, nec malesuada augue maximus et. Proin in ex felis. Aenean enim nisl, egestas sed nunc volutpat, pharetra faucibus magna.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id nulla purus. Nunc auctor dignissim est, nec malesuada augue maximus et. Proin in ex felis. Aenean enim nisl, egestas sed nunc volutpat, pharetra faucibus magna. Praesent tempus elementum sapien ullamcorper blandit. Suspendisse turpis est, molestie at ultrices id, volutpat in felis. Ut scelerisque velit nec purus rhoncus vestibulum. Maecenas at justo eget metus vestibulum semper. Nullam ut quam sapien. Proin mollis, metus non tristique dapibus, leo velit iaculis ipsum, finibus pellentesque mauris sem at massa. Morbi porta orci vel orci condimentum, in sodales turpis malesuada.', '604a610cdfcb1_1615487244.jpg', 2, '2021-03-12 13:05:59', '2021-03-11', 4),
(22, 'She', 'Instead of trying to placate her and her unreasonable demands, he just stared at her and watched her meltdown without saying a word.', 'She tried to explain that love wasn\'t like pie. There wasn\'t a set number of slices to be given out. There wasn\'t less to be given to one person if you wanted to give more to another. That after a set amount was given out it would all disappear. She tried to explain this, but it fell on deaf ears.\r\nDave watched as the forest burned up on the hill, only a few miles from her house. The car had been hastily packed and Marta was inside trying to round up the last of the pets. Dave went through his mental list of the most important papers and documents that they couldn\'t leave behind. He scolded himself for not having prepared these better in advance and hoped that he had remembered everything that was needed. He continued to wait for Marta to appear with the pets, but she still was nowhere to be seen.\r\nBarbara had been waiting at the table for twenty minutes. it had been twenty long and excruciating minutes. David had promised that he would be on time today. He never was, but he had promised this one time. She had made him repeat the promise multiple times over the last week until she\'d believed his promise. Now she was paying the price.', 'JcmKhhXwVOVJpxSp7rXzquN2YsmWbwj4n1Yxpv4Y.jpg', 1, '2021-03-14 10:57:43', '2021-03-14', 1),
(23, 'She didn\'t like the food. She never did.', 'The wave crashed and hit the sandcastle head-on. The sandcastle began to melt under the waves force and as the wave receded, half the sandcastle was gone.', 'The rain and wind abruptly stopped, but the sky still had the gray swirls of storms in the distance. Dave knew this feeling all too well. The calm before the storm. He only had a limited amount of time before all Hell broke loose, but he stopped to admire the calmness. Maybe it would be different this time, he thought, with the knowledge deep within that it wouldn\'t.\r\nPink ponies and purple giraffes roamed the field. Cotton candy grew from the ground as a chocolate river meandered off to the side. What looked like stones in the pasture were actually rock candy. Everything in her dream seemed to be perfect except for the fact that she had no mouth.\r\nIt was a rat\'s nest. Not a literal one, but that is what her hair seemed to resemble every morning when she got up. It was going to take at least an hour to get it under control and she was sick and tired of it. She peered into the mirror and wondered if it was worth it. It wasn\'t. She opened the drawer and picked up the hair clippers.', '604bd6df223e4_1615582943.jpg', 3, '2021-03-12 21:05:26', '2021-03-12', 1),
(24, 'The rain and wind abruptly stopped, but the sky still had the gray swirls of storms in the distance.', 'She reached her goal, exhausted. Even more chilling to her was that the euphoria that she thought she\'d feel upon reaching it wasn\'t there.', 'As she sat watching the world go by, something caught her eye. It wasn\'t so much its color or shape, but the way it was moving. She squinted to see if she could better understand what it was and where it was going, but it didn\'t help. As she continued to stare into the distance, she didn\'t understand why this uneasiness was building inside her body. She felt like she should get up and run. If only she could make out what it was. At that moment, she comprehended what it was and where it was heading, and she knew her life would never be the same.\r\nPink ponies and purple giraffes roamed the field. Cotton candy grew from the ground as a chocolate river meandered off to the side. What looked like stones in the pasture were actually rock candy. Everything in her dream seemed to be perfect except for the fact that she had no mouth.\r\nThe wolves stopped in their tracks, sizing up the mother and her cubs. It had been over a week since their last meal and they were getting desperate. The cubs would make a good meal, but there were high risks taking on the mother Grizzly. A decision had to be made and the wrong choice could signal the end of the pack.', '604cc4d709867_1615643863.jpg', 2, '2021-03-13 13:57:43', '2021-03-13', 1),
(25, 'He wondered if he should disclose the truth to his friends', 'It was that terrifying feeling you have as you tightly hold the covers over you with the knowledge that there is something hiding under your bed.', 'I\'ve rented a car in Las Vegas and have reserved a hotel in Twentynine Palms which is just north of Joshua Tree. We\'ll drive from Las Vegas through Mojave National Preserve and possibly do a short hike on our way down. Then spend all day on Monday at Joshua Tree. We can decide the next morning if we want to do more in Joshua Tree or Mojave before we head back.\r\nShe had been told time and time again that the most important steps were the first and the last. It was something that she carried within her in everything she did, but then he showed up and disrupted everything. He told her that she had it wrong. The first step wasn\'t the most important. The last step wasn\'t the most important. It was the next step that was the most important.\r\nThere was something beautiful in his hate. It wasn\'t the hate itself as it was a disgusting display of racism and intolerance. It was what propelled the hate and the fact that although he had this hate, he didn\'t understand where it came from. It was at that moment that she realized that there was hope in changing him.', 'KUof4IQM0gt5h283qfOJO67iXf37BYSVMmQs9xnD.jpg', 3, '2021-03-13 22:56:46', '2021-03-13', 1),
(26, 'Curabitur lobortis fermentum nunc', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet diam a venenatis tincidunt.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer aliquet diam a venenatis tincidunt. Vestibulum vel arcu ante. Aliquam pulvinar pellentesque erat et mattis. Curabitur lobortis fermentum nunc, eget elementum leo blandit eget. Mauris convallis ultrices elit, euismod ultricies mi facilisis non. Nam elementum viverra dolor sit amet aliquet. Sed suscipit vitae dolor a ullamcorper. Cras hendrerit, nibh vitae porta volutpat, elit turpis efficitur mi, at pretium odio lacus sit amet metus. Curabitur at facilisis eros, eu laoreet enim. Suspendisse semper egestas posuere. In sit amet tincidunt nisi. Nulla sit amet vulputate justo. Duis sollicitudin condimentum mi vel suscipit.', 'BfXSjbG6W4ZkDHFBAMoLc0i8xiSe03xrOFEMDEg7.jpg', 1, '2021-03-15 12:28:52', '2021-03-15', 1),
(27, '\"Are you getting my texts???\" she texted to him', 'What were they eating? It didn\'t taste like anything she had ever eaten before and although she was famished, she didn\'t dare ask. She knew the answer would be one she didn\'t want to hear.', 'He had three simple rules by which he lived. The first was to never eat blue food. There was nothing in nature that was edible that was blue. People often asked about blueberries, but everyone knows those are actually purple. He understood it was one of the stranger rules to live by, but it had served him well thus far in the 50+ years of his life.\r\nThere was something special about this little creature. Donna couldn\'t quite pinpoint what it was, but she knew with all her heart that it was true. It wasn\'t a matter of if she was going to try and save it, but a matter of how she was going to save it. She went back to the car to get a blanket and when she returned the creature was gone.\r\nThere was something in the tree. It was difficult to tell from the ground, but Rachael could see movement. She squinted her eyes and peered in the direction of the movement, trying to decipher exactly what she had spied. The more she peered, however, the more she thought it might be a figment of her imagination. Nothing seemed to move until the moment she began to take her eyes off the tree. Then in the corner of her eye, she would see the movement again and begin the process of staring again.', '604deca18b8e2_1615719585.jpg', 1, '2021-03-14 11:00:29', '2021-03-14', 6),
(28, 'Two hundred? Probably not', 'It was a concerning development that he couldn\'t get out of his mind. He\'d had many friends throughout his early years and had fond memories of playing with them, but he couldn\'t understand how it had all stopped.', 'Indescribable oppression, which seemed to generate in some unfamiliar part of her consciousness, filled her whole being with a vague anguish. It was like a shadow, like a mist passing across her soul\'s summer day. It was strange and unfamiliar; it was a mood. She did not sit there inwardly upbraiding her husband, lamenting at Fate, which had directed her footsteps to the path which they had taken. She was just having a good cry all to herself. The mosquitoes made merry over her, biting her firm, round arms and nipping at her bare insteps.\r\nHer mom had warned her. She had been warned time and again, but she had refused to believe her. She had done everything right and she knew she would be rewarded for doing so with the promotion. So when the promotion was given to her main rival, it not only stung, it threw her belief system into disarray. It was her first big lesson in life, but not the last.\r\nIt was a rat\'s nest. Not a literal one, but that is what her hair seemed to resemble every morning when she got up. It was going to take at least an hour to get it under control and she was sick and tired of it. She peered into the mirror and wondered if it was worth it. It wasn\'t. She opened the drawer and picked up the hair clippers.', '604dedd4b76e2_1615719892.jpg', 2, '2021-03-14 11:04:52', '2021-03-14', 6);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marija Vasic', 'marijavasic97@gmail.com', '0606af1f6819d5099e48b7b18d1014ce', 1, NULL, '2021-03-02 15:13:32', NULL),
(2, 'Anja Zubac', 'anjazubac@gmail.com', '9adf49f13ba4590a0d2dfd6f38588250', 2, NULL, '2021-03-01 23:00:00', NULL),
(3, 'Nadja Bozic', 'nadja.bozic99@gmail.com', '51f1eb743d0a688edfca93cc12b78dcc', 2, NULL, NULL, NULL),
(4, 'Katarina Raic', 'kacaraic@gmail.com', '74ca6fe2fe5ac798b3583c0bdbbb0faa', 2, NULL, NULL, NULL),
(5, 'David Pejcic', 'davidp@gmail.com', 'cc03b08233190c0d212c432d2f06687e', 2, NULL, NULL, NULL),
(6, 'Anja Cvetkovski', 'anjacvetkovski@gmail.com', '0d4250ae3b2e09ef878687dc093a79c9', 2, NULL, NULL, NULL),
(11, 'Jelena Vasic', 'jelenavasic85@gmail.com', '67059187a38c0866d8f1f53928ee4600', 2, NULL, NULL, NULL),
(12, 'Jovana Milosevic', 'jomi@gmail.com', '19c65bb4ef5c58446804abee6881899b', 2, NULL, NULL, NULL),
(13, 'Jovana Vasic', 'jovanavasic87@gmail.com', '158de669190a12ef413891af269eaac1', 2, NULL, NULL, '2021-03-15 08:40:33'),
(15, 'Ema Pejcic', 'emap@gmail.com', '105214c70b1471d3e5ae13620cec2c67', 2, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carousels`
--
ALTER TABLE `carousels`
  ADD CONSTRAINT `carousels_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
