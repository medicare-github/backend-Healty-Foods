-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2019 at 07:58 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(75) NOT NULL,
  `profile` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `nama`, `gender`, `alamat`, `email`, `profile`) VALUES
(26, 59, 'Bilal', 'Laki-Laki', 'jalan raya bayan', 'bilal@gmail.com', 'avatar04.png'),
(27, 60, 'Rian', 'Laki-Laki', 'jalan raya bayan', 'Rian@gmail.com', 'avatar3.png'),
(28, 63, 'medicare', 'Laki-Laki', 'jalan raya bayan', 'medi@gmail.com', '1.jpg'),
(30, 66, 'Wahyuni', 'Perempuan', 'jalan raya bayan', 'wahyuni@gmail.com', 'user4-128x128.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_produk`
--

CREATE TABLE `customer_produk` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_produk`
--

INSERT INTO `customer_produk` (`id`, `customer_id`, `produk_id`, `jumlah`, `created_at`) VALUES
(3, 26, 16, 10, '2019-07-29 01:43:32'),
(4, 26, 19, 15, '2019-07-29 01:43:49'),
(5, 26, 20, 7, '2019-07-29 01:43:49'),
(6, 27, 18, 3, '2019-07-29 01:44:06'),
(7, 27, 19, 7, '2019-07-29 01:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `profile` varchar(50) DEFAULT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `user_id`, `nama_depan`, `nama_belakang`, `email`, `gender`, `alamat`, `tempat_lahir`, `profile`, `tgl_lahir`) VALUES
(10, 56, 'medi', 'care', 'drmedicare@gmail.com', 'laki-laki', 'Jalan Raya Tanjung Bayan Mataram', 'Lokok kelungkung', 'download.jpeg', '1998-12-31'),
(13, 62, 'Yani', 'saputri', 'dr.Yan@gmail.com', 'perempuan', 'Bima Lah', 'Bima', 'lady-dr.jpg', '1998-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Desert', 'Untuk menghilangkan Haus', '2019-07-23 01:06:44', '2019-07-23 04:11:34'),
(2, 'Lunch', 'Makan siang', '2019-07-23 02:40:21', '2019-07-23 09:40:21'),
(3, 'Dinner', 'makan malam', '2019-07-22 19:48:53', '2019-07-23 02:48:53'),
(4, 'Healty Girl', 'Khusus Untuk Cewek', '2019-07-22 19:53:40', '2019-07-23 02:53:40'),
(5, 'Healty Boy', 'Makanan Khusus Pria', '2019-07-22 19:59:35', '2019-07-23 02:59:35');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `kategori_id`, `harga`, `deskripsi`, `nama_toko`, `alamat_toko`, `photo`, `created_at`, `updated_at`) VALUES
(16, 'Grande Sturbucks', 1, 20000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mc Healty', 'Jalan Raya Bayan', 'grande-starbucks-to-go-cup-on-table-royalty-free-image-458726871-1538756537.jpg', '2019-07-27 19:44:23', '2019-07-27 19:44:24'),
(17, 'Garcia muay thai chicken and veggies', 2, 75000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mc Healty', 'Jalan Raya Bayan', 'Garcia-muay-thai-chicken-and-veggies.jpg', '2019-07-27 19:47:56', '2019-07-27 19:47:56'),
(18, 'tie dye frappuccino', 1, 25000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mc Healty', 'Jalan Raya Bayan', 'sbx20190709-tie-dye-frappuccino-1562774394.png', '2019-07-27 19:48:48', '2019-07-27 19:48:48'),
(19, 'clean eating desert', 1, 20000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mc Healty', 'Jalan Raya bayan', 'clean-eating-desert.png', '2019-07-27 19:49:48', '2019-07-27 19:49:48'),
(20, 'singapur salad', 4, 25000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Mc Healty', 'Jalan Raya Bayan', 'singapu sala.png', '2019-07-27 19:50:48', '2019-07-27 19:50:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(55, 'admin', 'medic', 'adminmedi@gmail.com', NULL, '$2y$10$LJx4Wd9AhXGMoxD9cuuxremPI.AMQynOeFle4MnUJ66nYwkN3/p4C', 'w9wIoDIafc4Dz7R81ag2RyXrVUzn71vqEYesOKc6ZgV6c51xRtcBbh9YV16e', '2019-07-28 18:37:53', '2019-07-28 18:37:53'),
(56, 'doctor', 'medi', 'drmedicare@gmail.com', NULL, '$2y$10$jdb3LPJQhMPzX6ixmuCsVOzh8DrhSJ0nobpo0H/QtTmJ0sWiKb0jO', 'w9wJqjalr5CFGgj5TSrd7avtwYhK7P5K1aULiMSJW25d0huheB2ArdKdLh3p', '2019-07-28 18:39:41', '2019-07-28 18:39:41'),
(59, 'guest', 'Bilal', 'bilal@gmail.com', NULL, '$2y$10$ig7/pee5QqwDh6gj6mq/Lu3hcMuGCWIbdNC60iCcHdmr3giuFcqIW', 'pZjHhFUkSqH3jYe7N4kea9NLsJf7koxrI37KxK3XQnpft9Hhn1rNmB8VFYO3', '2019-07-28 18:42:20', '2019-07-28 18:42:20'),
(60, 'guest', 'Rian', 'Rian@gmail.com', NULL, '$2y$10$qU2/uJY5zbKPqgS7C4mTHe31vF7MLJg//NXyyxf1pkD6VRFBRzKjG', 'xVMwOOulfeDDpjhaOvgQfRUEberIn2YVJOSGtC2zaJUfZtfTKhhSBZwvaUGn', '2019-07-28 18:43:08', '2019-07-28 18:43:08'),
(62, 'doctor', 'Yan', 'dr.Yan@gmail.com', NULL, '$2y$10$GPIaY356YmqMIYAj/Yv25OgMh.56uUxl35YxPzjXzNv8hzHhismcm', 'Lk4JLYSHlBaRe5GTA0PmNkJiVAnhhxhJ9IdPz28SkLDJgbOI1vd7G2Cp5vAd', '2019-07-28 18:56:33', '2019-07-28 18:56:33'),
(63, 'guest', 'medicare', 'medi@gmail.com', NULL, '$2y$10$gsHgjzMluY/bVIxUra6r1uLjYPr/mTcxMsigBMxZLLmWdG.YSCaO.', 'koi9HUwDVhTIEtg9p4n57Ewd4bS61Vgkw8FwoJgnXgpmkDkzoQWNpzOXeudR', '2019-07-28 20:53:56', '2019-07-28 20:53:56'),
(66, 'guest', 'Wahyuni', 'wahyuni@gmail.com', NULL, '$2y$10$3Rt5gYbGEjyfpYMEtNzTi.d280JTm.HphvxESbTHA0W8kCeqpStMq', 'Om5O2DMzyWCsycSeddcCbLo0Tw5Del8q8deEYERqzEGpj2m9gaaosC2CIojh', '2019-07-28 20:57:35', '2019-07-28 20:57:35'),
(68, 'admin', 'Arian saputra', 'arian@gmail.com', NULL, '$2y$10$qWiLdPT4j3SvEqhbWhwJ5uuCVSyhwbH9zvq9NOqi2AnWAgNwkuIvG', '0eRZ838wlQq5jeWDvE7moRdFCzxeqMtMf0GUVdvy1nxPNQ90OZJWNmQhRrT8', '2019-07-28 22:27:04', '2019-07-28 22:27:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_produk`
--
ALTER TABLE `customer_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `produk_id` (`produk_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
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
-- Indexes for table `produk`
--
ALTER TABLE `produk`
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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer_produk`
--
ALTER TABLE `customer_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_produk`
--
ALTER TABLE `customer_produk`
  ADD CONSTRAINT `customer_produk_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`),
  ADD CONSTRAINT `customer_produk_ibfk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
