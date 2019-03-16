-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 01:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artikel`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `body`, `judul`, `created_at`, `updated_at`) VALUES
(1, 'Necessitatibus quibusdam omnis nihil voluptate vel sed expedita. Animi voluptas non eum. Ex tempore non harum amet.', 'Ad iste ad magnam quo corporis quo facilis.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(2, 'Expedita in aperiam sunt et repellat dolorem molestias a. Iusto distinctio quam beatae. Saepe reprehenderit iure accusamus.', 'Nihil nobis non ut molestiae.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(3, 'Cumque quia maxime illo. Fugit ea molestias aut necessitatibus vero est. Fuga eos explicabo ratione sunt. Delectus repellendus ut fuga excepturi.', 'Qui animi earum et quis.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(4, 'Ab dolore repellat optio ratione et fuga magni. Autem sed tenetur beatae rerum non veniam excepturi. Ut eos sit sunt est non sequi ut.', 'Dolorem modi a est a illum suscipit odit dolorem.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(5, 'Sit molestiae molestiae incidunt placeat aliquam voluptates impedit. Modi expedita molestiae velit ut impedit sapiente. Enim illum non voluptas itaque sit voluptatem ab.', 'Esse sit modi hic unde perspiciatis architecto.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(6, 'Tenetur perferendis voluptatem illum. Iure ducimus itaque adipisci. Dolorem omnis veniam fuga enim vel est dolor. Deleniti quia praesentium autem harum sed quia itaque.', 'Qui accusamus ea eius dolorem mollitia.', '2019-02-21 21:59:56', '2019-02-21 21:59:56'),
(7, 'Nostrum odit repudiandae iure harum at. Omnis et non minima non id a. Ut numquam tempore debitis ex voluptatum ducimus. Ut facilis aut quo sint.', 'Culpa fugiat aut dolore est.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(8, 'Quia modi iste doloremque quo. Quia et ut sapiente beatae nostrum expedita. Totam unde ullam odio illo itaque rem. Tenetur soluta est omnis dolores molestias possimus numquam.', 'Beatae tenetur rerum est rerum consectetur.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(9, 'Sit eius qui sequi tempore. Et asperiores ut dignissimos necessitatibus. Dolorem officia magni aut.', 'Voluptates amet minima omnis ipsum eos.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(10, 'Voluptas aut consequatur est. Libero voluptate porro unde tempora et ut molestiae. Ducimus dolor quo vero omnis cumque non.', 'Odio voluptas ipsa ad aut eos debitis eos.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(11, 'Placeat animi ea dolorum. Quo corrupti tenetur repudiandae qui nisi eos alias. Et possimus iure quisquam omnis eum. Nesciunt sequi accusamus placeat sunt delectus soluta iure.', 'Similique architecto aut ullam.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(12, 'Ut ullam sit ea impedit. Possimus corporis deleniti ipsam veniam earum vel. A iste dignissimos velit accusamus est.', 'Harum perferendis sint aperiam illum et odio.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(13, 'Est et corrupti dolores saepe. Temporibus omnis odit atque possimus nulla dolorem. Autem non quas quasi quia aut fuga. Delectus tempore qui tempora velit consequatur eos quas.', 'Hic officiis aliquid ipsum est.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(14, 'Ratione et nihil et ut voluptas. Quos possimus dolorum officiis cum temporibus est pariatur. Dignissimos nihil aut et aspernatur maxime.', 'Illum quod id et.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(15, 'Corporis voluptas voluptas quod sit modi rem qui. Delectus vero molestiae voluptatum voluptatem molestiae dolor. In rerum quo nemo dolores dolores. Nulla aut aliquid commodi provident.', 'Ut debitis fuga corrupti non velit est.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(16, 'Similique dolores rerum similique non laborum atque officia. Ut molestias aliquid temporibus consequatur consequatur quis. Possimus maxime ipsam et.', 'Laboriosam veniam aut qui odit culpa.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(17, 'Velit veniam nihil eius perferendis. Rem provident voluptas mollitia voluptas expedita consequatur. Ut a nam qui.', 'Praesentium quis quo qui minima itaque.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(18, 'Provident sint occaecati architecto perferendis voluptatibus at voluptas est. Quod ipsam inventore cumque modi molestiae fuga.', 'Ut molestias nihil commodi et.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(19, 'Eos aliquid nihil aut molestias. Est dolores id blanditiis. Itaque quam facilis nihil voluptas praesentium adipisci at sequi. Sunt architecto iste qui excepturi eos reiciendis nisi.', 'Ullam impedit nihil non.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(20, 'Accusamus voluptate reprehenderit libero numquam. Autem omnis eum deserunt numquam accusamus error. Sit dolorem perspiciatis eum pariatur accusamus. Hic et omnis doloremque.', 'Eos sunt voluptatum aspernatur officia ut.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(21, 'Sint eligendi architecto eligendi et sed. Nobis rerum odit quo voluptatum. Aut natus mollitia deserunt vero.', 'Qui sit id voluptatem voluptatem et esse ut.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(22, 'Ipsum ducimus in consequatur illum libero. Repellendus ullam odio expedita magni. Quasi repudiandae quidem pariatur consequuntur et qui voluptatibus.', 'Quas quae tempore ut sint.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(23, 'Autem ducimus quasi consequatur incidunt et tenetur fugit. Excepturi dolore voluptas odit provident et dignissimos. Doloribus assumenda repudiandae enim sit.', 'Cum dolor at nihil a aut nihil exercitationem.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(24, 'Et assumenda consectetur et tempora a. Placeat ex tempora commodi ut blanditiis. Dolor aperiam id commodi beatae.', 'Dolor veritatis eum asperiores.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(25, 'Voluptatem ducimus occaecati repellat amet. Quidem excepturi aliquid sapiente aliquam est odio. Laboriosam suscipit nobis nobis aut. Aut rerum et dolore cupiditate voluptatem.', 'Ab iste ut aliquid et suscipit.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(26, 'Nam quia odio ea consequatur quis et nihil. Voluptas sed aut qui animi enim voluptatum. Sequi corrupti aut laudantium consectetur dicta quo eveniet.', 'Incidunt quae magnam nihil sit autem.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(27, 'Aut laborum facilis aut omnis qui tenetur. Voluptatem dolor temporibus sint. Tenetur est veniam nobis nisi porro omnis qui. Id harum est dolore quia praesentium exercitationem.', 'Natus dolor odit error ea.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(28, 'Aut esse et beatae. Excepturi provident velit et eius sequi est. Ea et autem reprehenderit. Non facere aut et. At necessitatibus eos eos laudantium aspernatur a commodi. Quae ea quia laborum.', 'Et corporis esse est sint expedita.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(29, 'Est quisquam sequi dolor et soluta. Aut sint et fuga animi voluptatem consequatur blanditiis. Aut id animi laudantium iusto autem consequuntur.', 'Eum vitae nam sapiente a quis.', '2019-02-21 21:59:57', '2019-02-21 21:59:57'),
(30, 'Numquam enim adipisci et a rerum ratione totam. Qui sint quos odit nostrum. Veniam qui sint et sapiente.', 'Est vero iste saepe molestiae quo est aliquid.', '2019-02-21 21:59:57', '2019-02-21 21:59:57');

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
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_02_21_104329_create_artikel__tabel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
