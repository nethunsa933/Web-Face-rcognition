-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2020 at 10:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recognizeface`
--

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `studentoldstatus`
--

CREATE TABLE `studentoldstatus` (
  `StudentOldStatus_Id` int(3) NOT NULL,
  `StudentStatus_Id` int(11) NOT NULL,
  `OldStatusName` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `studentoldstatus`
--

INSERT INTO `studentoldstatus` (`StudentOldStatus_Id`, `StudentStatus_Id`, `OldStatusName`) VALUES
(1, 2, 'จบการศึกษา'),
(2, 2, 'พ้นสภาพ'),
(3, 2, 'ย้ายคณะ/ย้ายสาขา'),
(4, 1, 'กำลังศึกษา');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `StudentID` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `egname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IdCardNumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BirthDay` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AcademicYear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Degrees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `StudentOldStatus_Id` int(10) DEFAULT NULL,
  `Tel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `StudentID`, `egname`, `email`, `nickname`, `IdCardNumber`, `BirthDay`, `Faculty`, `Subject`, `AcademicYear`, `Degrees`, `StudentOldStatus_Id`, `Tel`, `Facebook`, `email_verified_at`, `profile_image`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(2, 'นายชินกฤต เสาสีจันทร์', '5904101314', 'Chinnakrit Saoseejan', '5904101314@mju.ac.th', 'ออมนะจ้ะ', '1500201202003', '18 มกราคม 2541', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '2559', 'ปริญญาตรี', 4, '0867282737', 'Chinnakrit Saoseejan', NULL, '/uploads/images/user_1585769118.jpg', '$2y$10$TGNxL2hgJTzs4IlN3fjuBuJYAiufFLoUHatfr7B32JTEGW2GF/IKu', 'autzHCFSUW35Docie3F3O8ZXYYNYmw8ChDmFhC8qaAuuxpnjfx7Xny5ktnyO', '2020-04-01 12:13:12', '2020-04-26 04:48:06', 0),
(4, 'นายพันธกร จอมหงษ์', '5904101339', NULL, '5904101339@mju.ac.th', 'เน๊ต', '1101800950338', '3 เมษายน 2541', 'วิทยาศาสตร์', 'วิทยาการคอมพิวเตอร์', '2559', 'ปริญญาตรี', 4, '0932369315', 'พันธกร จอมหงษ์', NULL, '/uploads/images/_1585771119.jpg', '$2y$10$rIhG6x0O4orkhsT70lWRzepm/jkH7g7FYWeeKZU930cgRBZI05G0O', NULL, '2020-04-01 12:56:37', '2020-04-01 12:59:36', 0),
(10, 'admin', '01', NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$FBeJe.iXFKBR6UomZXFFNee8TSADSNu5WKjkG3nVcekNMbWavnhvy', 'xGcSZLD7O5q5tQAKjwLliacksNkFebXHYc0USfMUYt3fO2xgD6a2p3bq50M7', '2020-04-16 09:11:35', '2020-04-16 09:11:35', 1),
(11, 'admin2', '02', NULL, 'admin2@admin.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$tFNXUvWhO7kkKcDWZnGtyOmqKFeEwswMZ67bZpoYtdnI2yfx/5F4O', NULL, NULL, NULL, 1),
(16, 'admineiei', NULL, NULL, 'eiei@eiei', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$b30MrF5PIlRtSxf7srLxsukis3uLWis/SgIMioM5yhwcrSzd3510y', NULL, NULL, NULL, 1),
(17, 'แอดมินปลื้ม', NULL, NULL, 'ปลื้ม@ปลื้ม', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$16FXqH.YRqsXTwJgeIRndO1YiCQAkqqlh6qnIsb.0l8ZxXN397.XK', NULL, NULL, NULL, 1),
(18, 'admin3', NULL, NULL, 'admin3@admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$DXuN/b2YJdQ1G9cQq/RtouhI20u2RUnRqEBmaOe012fO/Oh547lTW', NULL, NULL, NULL, 1),
(19, 'หมั่งสีโสว', '5804101301', NULL, '5804101301@mju.ac.th', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '$2y$10$lhIS9CxfwCk8OY7c6AfXj.kyIzjEG5M/cq/5gH1d2ktzy0T1/Yq7.', NULL, '2020-04-26 09:17:26', '2020-04-26 09:17:26', 0),
(20, 'ซือเกเหล่าก๊าย', '6004101301', NULL, '6004101301@mju.ac.th', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$Z9dpzvrRTx/To7eLbOWU4eT3VtUu7XRkIWHrkidibKGeUfKyeluCi', NULL, NULL, NULL, 0),
(21, 'หล่ายสีสี', '6104101301', NULL, '6104101301@mju.ac.th', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$9wqEAPNqU50bSv4P0nlmC.foITWj93eHuYlIyAKS4ynlmqVimiyem', NULL, NULL, NULL, 0);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `studentoldstatus`
--
ALTER TABLE `studentoldstatus`
  ADD PRIMARY KEY (`StudentOldStatus_Id`),
  ADD KEY `StudentStatus_Id` (`StudentStatus_Id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `studentoldstatus`
--
ALTER TABLE `studentoldstatus`
  MODIFY `StudentOldStatus_Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
