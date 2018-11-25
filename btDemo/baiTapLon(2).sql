-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 21, 2018 at 09:13 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baiTapLon`
--

-- --------------------------------------------------------

--
-- Table structure for table `datHang`
--

CREATE TABLE `datHang` (
  `id` int(10) UNSIGNED NOT NULL,
  `idNguoiBan` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idSanPham` int(11) DEFAULT NULL,
  `tenUser` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diaChi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soDienThoai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `tenSanPham` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangThai` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datHang`
--

INSERT INTO `datHang` (`id`, `idNguoiBan`, `idUser`, `idSanPham`, `tenUser`, `diaChi`, `soDienThoai`, `created_at`, `tenSanPham`, `trangThai`, `image`) VALUES
(7, 2, 3, 2, 'dai1', 'ha noi', '123123', NULL, 'hihi', 1, '/img/16864722_1904359909797622_5703436415118557290_n.jpg'),
(8, 2, 3, 4, 'dai1', 'ha noi', '123123', NULL, 'ahihi123', 1, '/img/Capture1.PNG'),
(9, 2, 3, 4, 'dai1', 'ha noi', '123123', NULL, 'ahihi123', 1, '/img/Capture1.PNG'),
(10, 2, 3, 6, 'dai1', 'ha noi', '123123', NULL, 'ahihi', 1, '/img/wallhaven-254486.jpg'),
(11, 2, 3, 4, 'dai1', 'ha noi', '123123', NULL, 'ahihi123', 1, '/img/Capture1.PNG'),
(12, 2, 3, 3, 'dai1', 'ha noi 123', '123123', NULL, 'qădqwe', 1, '/img/16864633_977804145653420_4175548413541192230_n.jpg'),
(13, 2, 4, 3, 'thang', 'ha noi', '123', NULL, 'qădqwe', 1, '/img/16864633_977804145653420_4175548413541192230_n.jpg'),
(14, 5, 3, 5, 'dai1', 'ha noi 123', '123123', NULL, 'Case máy tính', 0, '/img/index.jpeg');

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
(3, '2018_06_17_035306_san_pham', 2),
(4, '2018_06_18_035306_san_pham', 3),
(5, '2018_06_17_110442_create_table_thong_bao', 4),
(6, '2018_06_17_160923_dat_hang', 5);

-- --------------------------------------------------------

--
-- Table structure for table `noiDung`
--

CREATE TABLE `noiDung` (
  `id` int(10) UNSIGNED NOT NULL,
  `noiDung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNguoiBan` int(11) DEFAULT NULL,
  `idAdmin` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noiDung`
--

INSERT INTO `noiDung` (`id`, `noiDung`, `idNguoiBan`, `idAdmin`, `idUser`, `created_at`) VALUES
(1, 'co 1 don hang noi dai1 mua Case máy tính', 5, NULL, NULL, NULL),
(2, 'san pham Case máy tính dat hang thanh cong', NULL, NULL, 3, NULL),
(3, 'san pham may tin dang cho phe duyet', NULL, 1, NULL, NULL),
(4, 'san pham may tin khong duoc phe duyet', 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenSanPham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chiTiet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNguoiBan` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `public` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tenSanPham`, `chiTiet`, `image`, `idNguoiBan`, `soLuong`, `created_at`, `public`, `gia`) VALUES
(1, 'Điện thoại', 'Điện thoại 123123 ádasd', '/img/HLQX2.jpeg', 5, 123, NULL, 1, 100000),
(2, 'Máy tính bàn', 'Máy tính bàn qă asdasd ad', '/img/dell-inspiron-3647st-i93nd9.gif', 5, 213, NULL, 1, 2100000),
(3, 'Laptop', 'Laptop 123123 12312', '/img/acer-ra-mat-sieu-may-tinh-predator-chi-danh-cho-game-thu-dai-gia.jpg', 5, 123, NULL, 1, 123123123),
(4, 'Laptop2', 'Laptop2 Laptop2', '/img/Canadiens_Coreset_FrontRight_MineralSilver_win10.jpg', 5, 123, NULL, 1, 1231231231),
(5, 'Case máy tính', 'Case máy tính Case máy tính', '/img/index.jpeg', 5, 123, NULL, 1, 123123123),
(6, 'may tin', '131', '/img/Canadiens_Coreset_FrontRight_MineralSilver_win10.jpg', 2, 123, NULL, 3, 123);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soDienThoai` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `diaChi`, `soDienThoai`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$pSbuzOUsBSonJEYuduXsIOQPyfaZdAGhd8PpU4HWGpjWU1h3VGfO2', 'hanoi', 123123, 3, 'LaIfJDjcK3xsMb5PWylEx0hg4OKiKyvuZjqxMQTawcz61yQwZXJ5j9XudOik', '2018-06-16 19:22:04', '2018-06-20 01:50:40'),
(2, 'dai21', 'dai2@gmail.com', '$2y$10$ITc2P5GdPO7NFiU1iAtUX.UoZUlhqTQpfF6/5d358W7./eSkznyxe', '123123', 123123, 2, 'rOvGBGOJZ2pWAXuvhwvwjQI4qocJYkSNGxTWFTkcFavW4qilKk3ELngzehrq', '2018-06-16 20:12:21', '2018-06-18 04:19:52'),
(3, 'dai1', 'dai1@gmail.com', '$2y$10$OORUAnauTLPYLYJ0Z1r8euO4gKx/AkxGOGnnYgKYY/7qmCkMPkyh2', 'ha noi 123', 123123, 1, 'b9BB9NoAi23EtRB1gNjbv4QxD9FpKWla17Hb0bGSqLZFNZCuB5rjgm2Vz54h', '2018-06-17 08:01:23', '2018-06-18 06:06:33'),
(4, 'thang', 'thang@gmail.com', '$2y$10$F7wc2SmdNAMTuLq6rDthkuc3491lvpBDDwd9hjgcOwridTK01jBPy', 'ha noi', 123, 1, '2EUrsCCqoY31iwA3d0g35ANWWKTnrNWbQkFVezkBJTphu6FP3jzsOvWfSZoH', '2018-06-20 01:44:56', '2018-06-20 01:44:56'),
(5, 'nguoi ban 1', 'nb123@gmail.com', '$2y$10$P.WTz8tecySHLcmgP3R1yuY6bjno.SzQ1Ob2Pb4biLf5MPO.mMV8a', 'nguoi ban 1', 123123, 2, 'HKmAWgOUyaawcURLPbCPJP7jq3Dtw3sPKFh02VTtLrRzgc6EmmAdEkU55kUA', '2018-06-20 19:54:33', '2018-06-20 19:54:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datHang`
--
ALTER TABLE `datHang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noiDung`
--
ALTER TABLE `noiDung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
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
-- AUTO_INCREMENT for table `datHang`
--
ALTER TABLE `datHang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `noiDung`
--
ALTER TABLE `noiDung`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
