-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 يوليو 2022 الساعة 22:51
-- إصدار الخادم: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- بنية الجدول `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `todo_id` bigint(20) UNSIGNED NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `todo_id`, `comments`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'dasdasdasdad', '2022-06-23 05:50:26', '2022-06-23 05:50:26'),
(2, 1, 7, 'dasdasdasdas212222', '2022-06-23 05:54:02', '2022-06-23 05:54:02'),
(3, 1, 7, 'comment 3', '2022-06-23 05:54:09', '2022-06-23 05:54:09'),
(4, 1, 5, 'werwer', '2022-06-24 11:50:32', '2022-06-24 11:50:32'),
(5, 1, 7, 'new comment by raji', '2022-07-05 16:00:12', '2022-07-05 16:00:12'),
(6, 1, 6, 'raji with leen comment', '2022-07-05 16:00:52', '2022-07-05 16:00:52'),
(7, 15, 21, 'new comment', '2022-07-12 10:06:55', '2022-07-12 10:06:55'),
(8, 1, 21, 'can you see my comment', '2022-07-12 10:09:25', '2022-07-12 10:09:25');

-- --------------------------------------------------------

--
-- بنية الجدول `inbox`
--

CREATE TABLE `inbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2022_06_20_055330_create_permission_tables', 2),
(6, '2022_06_20_083800_create_todos_table', 3),
(7, '2022_06_21_070246_alter_todo_table_01', 4),
(8, '2022_06_22_092325_alter_todo_table_02', 5),
(9, '2022_06_23_063606_create_comments_table', 6);

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `prodact`
--

CREATE TABLE `prodact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discripe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `prodact`
--

INSERT INTO `prodact` (`id`, `name`, `img`, `discripe`, `created_at`, `updated_at`, `price`, `type`) VALUES
(1, 'shoe', 'https://assetscdn1.paytm.com/images/catalog/product/F/FO/FOORED-CHIEF-RUREDC200989CF37E48/1564559981945_18.jpg', 'this is shoe brown', NULL, '2022-07-10 08:40:40', '20$', 'shoe'),
(2, 'shoe1', 'https://media.cnn.com/api/v1/images/stellar/prod/allbirds-sneakers-review-wool-runnerjpg.jpg?q=h_1090,w_1938,x_0,y_0', 'this is shoe', NULL, '2022-07-10 08:37:38', '30$', 'shoe'),
(3, 'shoe', 'https://m.media-amazon.com/images/I/419YDCW46hL.jpg', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(4, 'shoe', 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/2ceac5b7-8d81-4421-8857-be18f06b0d42/jordan-ma2-shoe-1lDRFl.png', 'this is shoe', NULL, NULL, '20$', 'shoe'),
(5, 'shoe', 'https://www.eatthis.com/wp-content/uploads/sites/4/2021/06/slow-man-shoes.jpg?quality=82&strip=1', 'this is shoe', NULL, NULL, '12$', 'shoe'),
(6, 'shoe', 'https://images.creator-prod.zmags.com/image/upload/q_auto,dpr_2.625,f_auto/c_scale,w_300/62a8dcbda3dd514376019bef.jpeg', 'this is shoe', NULL, NULL, '40$', 'shoe'),
(7, 'shoe', 'https://in.ecco.com/dw/image/v2/BCNL_PRD/on/demandware.static/-/Sites-ecco/default/dwfe92ea2c/productimages/470113-60294-main.jpg?sw=425&sh=425&sm=fit&q=75', 'this is pink shoe', NULL, NULL, '15$', 'shoe'),
(8, 'shoe', 'https://media1.popsugar-assets.com/files/thumbor/aeSIEC2kDxK9J6rDNQl6nj44SkE/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2021/12/30/848/n/1922564/9ee0af1a609a9682_netimgNrxkW1/i/Fluid-Formation-ECCO-Soft-7-Slip-On-Sneakers.webp', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(9, 'shoe', 'https://media.kohlsimg.com/is/image/kohls/5215212_Navy?wid=240&hei=240&op_sharpen=1', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(10, 'shoe', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUVYVKgdEAsSdkN-ad-qKvrAfC4qQF_n_brz6TIttNK7kWJguOoY-sSc0krC75wqVCMag&usqp=CAU', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(11, 'shoe', 'https://qvc.scene7.com/is/image/QVC/a/73/a451773.001?$aempdlarge$', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(12, 'shoe', 'https://production-ecom-shoecarnival.demandware.net/dw/image/v2/BBSZ_PRD/on/demandware.static/-/Sites-scvl-master-catalog/default/dwf5d8ce8b/108346_229785_1.jpg', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(13, 'shoe', 'https://m.media-amazon.com/images/I/71D9ImsvEtL._UY500_.jpg', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(14, 'shoe', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8ufQsTnfNID2eGQ5KTeQImnXgpusy3fIf9viPGm4UfUbvxPlw3mARk_sDBZ-OglyBKxA&usqp=CAU', 'this is shoe', NULL, NULL, '15$', 'shoe'),
(15, 'shoe', 'https://production-ecom-shoecarnival.demandware.net/dw/image/v2/BBSZ_PRD/on/demandware.static/-/Sites-scvl-master-catalog/default/dw44b1a6e7/118191_246329_1.jpg', 'new shoe', NULL, NULL, '10$', 'shoe'),
(16, 'computer', 'https://cdn.britannica.com/77/170477-050-1C747EE3/Laptop-computer.jpg', 'computer', NULL, NULL, '400$', 'computer'),
(17, 'computer', 'https://support.apple.com/library/content/dam/edam/applecare/images/en_US/mac/macos-monterey-connect-display-hero.png\r\n', 'computer', NULL, NULL, '1200$', 'computer'),
(20, 'computer', 'https://pc-samenstellen.nl/files/catalog/product/image/361/Budget%20Game%20Computer-lc700b.png', 'new prodact', '2022-07-10 09:28:40', '2022-07-13 17:37:42', '300$', 'computer');

-- --------------------------------------------------------

--
-- بنية الجدول `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '2022-06-20 03:46:08', '2022-06-20 03:46:08'),
(2, 'Editor', 'editor', '2022-06-20 03:46:08', '2022-06-20 03:46:08');

-- --------------------------------------------------------

--
-- بنية الجدول `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `todos`
--

CREATE TABLE `todos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `todos`
--

INSERT INTO `todos` (`id`, `name`, `description`, `created_at`, `updated_at`, `user_id`, `status`) VALUES
(5, 'test task', 'dasdasdasdasdas dasdasdasdasd', NULL, '2022-07-09 04:23:08', 1, 2),
(6, 'hjvhjvfyhjgfyugyug', 'vfhjgfyhgfhjgfhjghjghjghjg', NULL, NULL, 4, 2),
(8, 'dasdadsadasd', 'dsadasdasdasdaddasdasds', '2022-06-22 06:49:32', '2022-07-05 16:07:11', 1, 1),
(9, 'qwqwqw', 'qwqw\r\n    	qwewqewqewqewqewqewqewqewqeqwe', '2022-06-24 11:49:35', '2022-07-05 15:45:41', 1, 1),
(10, 'jbraaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:33:45', '2022-07-10 17:33:45', 1, 0),
(11, 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:33:52', '2022-07-10 17:33:52', 1, 0),
(12, 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:33:59', '2022-07-10 17:33:59', 1, 0),
(13, 'zzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 17:34:06', '2022-07-10 17:34:06', 1, 0),
(14, 'zzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 17:34:19', '2022-07-10 17:34:19', 1, 0),
(15, 'zzzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 17:34:27', '2022-07-10 17:34:27', 1, 0),
(16, 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:34:34', '2022-07-10 17:34:34', 1, 0),
(17, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:34:51', '2022-07-10 17:34:51', 1, 0),
(18, 'zzzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 17:35:21', '2022-07-10 17:35:21', 1, 0),
(19, 'zzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 17:35:28', '2022-07-10 17:35:28', 1, 0),
(20, 'aaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-07-10 17:35:35', '2022-07-10 17:35:35', 1, 0),
(21, 'zzzzzzzzzzzzzzzzzz', 'zzzzzzzzzzzzzzzzzzzzzzzzzzz', '2022-07-10 18:23:48', '2022-07-10 18:23:48', 15, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'raji', 'aref@gmail.com', NULL, '$2y$10$ZBc8Q7Roz8z9D3o8gXU3kOu1RIr59vyO83s6r/xgxXgMMi6OlV45i', NULL, '2022-06-19 03:07:51', '2022-06-24 07:40:23', 1),
(3, 'najdat', 'najdat@gmail.com', NULL, '$2y$10$ZBc8Q7Roz8z9D3o8gXU3kOu1RIr59vyO83s6r/xgxXgMMi6OlV45i', NULL, '2022-06-19 06:12:46', '2022-06-19 06:12:46', 0),
(4, 'leen', 'leen@gmail.com', NULL, '$2y$10$GOWipbpBk7UtdPvi8yhXCui04Ep1qRHYPPTlV6FD7OyPuRLOMzv6e', NULL, '2022-06-19 06:21:18', '2022-06-19 06:21:18', 0),
(5, 'jbr', 'jbr123@gmail.com', NULL, '$2y$10$uPJWrlJDOawg0d3PmNdJ8ezmmrZF3bR4BNLXauI0d4zwTOZtf7U9u', NULL, '2022-06-24 11:49:15', '2022-06-24 11:49:15', 0),
(8, 'ali', 'ali@gmail.com', NULL, '$2y$10$nEW3X0aAi6/xqSSuI22DOuVO5PcuRUghlVJglcnkj1MXsVyT4FAjW', NULL, '2022-06-24 17:31:41', '2022-06-24 17:31:41', 0),
(9, 'sfr', 'the-email@example.com', NULL, '$2y$10$HY2hPW3O9q27BkM8EklwBe9xjp1UKT7DjTmL9i6408oleJpYhv112', NULL, '2022-06-27 18:07:11', '2022-06-27 18:07:11', 0),
(10, '11111111', 'the-emaal@example.com', NULL, '$2y$10$vU5UMMfm3EAxhzrEwbojCOZNrSYNMxJeDbphR6ajm.K.gjRI0OVii', NULL, '2022-06-27 18:07:33', '2022-06-27 18:07:33', 0),
(15, 'salma', 'salma@gmail.com', NULL, '$2y$10$ZBc8Q7Roz8z9D3o8gXU3kOu1RIr59vyO83s6r/xgxXgMMi6OlV45i', NULL, '2022-07-04 16:36:24', '2022-07-04 16:36:24', 0),
(16, 'ahmad', 'the-email@example.com1', NULL, '$2y$10$4a5.0dhc7ru10vTHtzhCwek4lJ1RILYHs3JSsIoGiW5UYNWojEsaO', NULL, '2022-07-04 16:37:05', '2022-07-04 16:37:05', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_todo_id_foreign` (`todo_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodact`
--
ALTER TABLE `prodact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prodact`
--
ALTER TABLE `prodact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
