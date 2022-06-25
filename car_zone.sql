-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 يونيو 2022 الساعة 12:35
-- إصدار الخادم: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_zone`
--

-- --------------------------------------------------------

--
-- بنية الجدول `cars`
--

CREATE TABLE `cars` (
  `id_car` int(1) NOT NULL,
  `car_comp` varchar(25) NOT NULL,
  `made_year` smallint(6) NOT NULL,
  `fuel_type` varchar(10) NOT NULL,
  `price` int(11) NOT NULL,
  `doors` tinyint(4) NOT NULL,
  `clinder` smallint(6) NOT NULL,
  `color` varchar(10) NOT NULL,
  `km` int(11) NOT NULL,
  `car_state` varchar(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `car_des` text NOT NULL,
  `car_adds` text NOT NULL,
  `city` varchar(10) NOT NULL,
  `img_1` varchar(50) NOT NULL,
  `img_2` varchar(50) NOT NULL,
  `img_3` varchar(50) NOT NULL,
  `img_4` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `car_type` varchar(25) NOT NULL,
  `car_city` varchar(15) NOT NULL,
  `push_type` varchar(15) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gear` varchar(15) NOT NULL,
  `seats` tinyint(4) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_img` varchar(50) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `cars`
--

INSERT INTO `cars` (`id_car`, `car_comp`, `made_year`, `fuel_type`, `price`, `doors`, `clinder`, `color`, `km`, `car_state`, `title`, `car_des`, `car_adds`, `city`, `img_1`, `img_2`, `img_3`, `img_4`, `user_id`, `car_type`, `car_city`, `push_type`, `phone`, `gear`, `seats`, `u_name`, `u_img`, `time`) VALUES
(1, 'bmw', 2018, 'بنزين', 200000000, 2, 2, 'احمر', 565656, 'مستعملة', 'جميلة', 'قالبة ', 'شتنسلبشسي', 'حماة', 'product-6-370x270.jpg', '', '', '', 1, 'سيدان', 'حمص', 'شد أمامي', '0999999999', 'عادي', 2, 'محمود عنجاري', 'team_03.jpg', '2022-06-20 00:00:00'),
(2, 'bmw', 2018, 'بنزين', 1000000000, 4, 2, 'ازرق', 45645, 'مستعملة', 'kahdkad', 'kasdhfkash', 'ksadhfikf', 'حماة', 'F1.jpg', 'F2.jpg', 'F3.jpg', 'F4.jpg', 4, 'سيدان', 'حماة', 'شد أمامي', '0999999999', 'عادي', 4, 'محمد المصري', 'team_05.jpg', '2022-06-20 00:00:00'),
(3, 'KIA', 2021, 'بنزين', 250000000, 4, 2, 'احمر', 45645, 'مستعملة', 'كيا ريو نضيفة', 'بخ زنار فقط', 'فتحة سقف', 'دمشق', 'images (5).jpg', 'images (4).jpg', 'images (3).jpg', '2010-2011-kia-rio-10-04-2010-EF6DBW.jpg', 1, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 4, 'محمود عنجاري', 'team_03.jpg', '2022-06-21 00:00:00'),
(4, 'hyundai', 2006, 'بنزين', 65000000, 4, 2, 'رمادي', 50000, 'مستعملة', 'فيرنا خارقة ', 'كاملة مسكرة برا جوا', 'مانع انزلاق - جنط كروم', 'حماة', 'v2.jpg', 'v1.jpg', 'v3.jpg', '', 1, 'رياضية', 'حماة', 'شد أمامي', '0999999999', 'عادي', 4, 'محمود عنجاري', 'team_03.jpg', '2022-06-21 00:00:00'),
(5, 'BMW', 2018, 'بنزين', 25000000, 2, 3, 'ازرق', 45645, 'مستعملة', 'vbnvn', 'vbnbvnvb', 'vbnvnb', 'دمشق', 's1.jpg', 's2.jpg', 's3.jpg', 's4.jpg', 1, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'محمود عنجاري', 'team_03.jpg', '2022-06-21 00:00:00'),
(6, 'BMW', 2018, 'بنزين', 250000000, 4, 6, 'أزرق', 0, 'جديدة', 'بي إم دبليو m5', 'جديدة بالورق', 'نظام صوت بايونير - جنط كروم', 'حماة', 'product-5-370x270.jpg', 'blog-5-370x270.jpg', 'blog-6-370x270.jpg', '', 3, 'سيدان', 'حماة', 'شد أمامي', '0999999999', 'عادي', 4, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 00:00:00'),
(7, 'KIA', 2021, 'بنزين', 50000000, 4, 3, 'أسود', 45645, 'مستعملة', 'kjkjhgkhjgk', 'nbvbnvn', 'vbnbvnv', 'دمشق', 'product-3-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 4, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 13:40:31'),
(8, 'BMW', 1975, 'بنزين', 2147483647, 2, 3, 'رمادي', 50, 'مستعملة', '555555555555555555', '555555555555555555555555555555', '55', 'دمشق', 'product-4-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '5555555555', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 13:55:56'),
(9, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'احمر', 45645, 'مستعملة', '11111111111111111111111111', '111111111111111111111111111111', '1111111111', 'دمشق', 'product-1-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 19:17:44'),
(10, 'BMW', 2018, 'بنزين', 7777777, 2, 3, 'احمر', 45645, 'مستعملة', '7777777777777777', '777777777777', '7', 'دمشق', 'blog-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '7777777777', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 19:19:16'),
(11, 'BMW', 2018, 'بنزين', 777777777, 2, 3, 'احمر', 45645, 'مستعملة', '7', '7', '7', 'دمشق', 'blog-image-fullscren-1-1920x700.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '7777777777', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 19:19:36'),
(12, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'رمادي', 77, 'مستعملة', '777777777', '7777777', '7', 'دمشق', 'product-details-1-740x540.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '5444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 19:20:12'),
(13, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', '1', '1111111111111111111', '1111111111111', 'دمشق', 'blog-4-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '1111111111', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 22:44:29'),
(14, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:17'),
(15, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:20'),
(16, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:24'),
(17, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:28'),
(18, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:32'),
(19, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:36'),
(20, 'BMW', 2021, 'بنزين', 888888888, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-5-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-21 23:09:39'),
(21, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'احمر', 45645, 'مستعملة', '5', '8', '8', 'دمشق', 'blog-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:02:51'),
(22, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'احمر', 45645, 'مستعملة', '5', '8', '8', 'دمشق', 'blog-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:02:55'),
(23, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'احمر', 45645, 'مستعملة', '5', '8', '8', 'دمشق', 'blog-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:02:58'),
(24, 'BMW', 2021, 'بنزين', 2147483647, 2, 3, 'احمر', 45645, 'مستعملة', '5', '8', '8', 'دمشق', 'blog-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:03:01'),
(26, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:14'),
(27, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:16'),
(28, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:19'),
(29, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:21'),
(30, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:23'),
(31, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:24'),
(32, 'Audi', 2018, 'بنزين', 2147483647, 2, 3, 'أزرق', 45645, 'مستعملة', 's', 's', 's', 'دمشق', 'product-6-370x270.jpg', '', '', '', 3, 'سيدان', 'دمشق', 'شد أمامي', '4444444444', 'عادي', 2, 'يامن الملي', 'product-6-370x270.jpg', '2022-06-22 00:04:26'),
(33, 'BMW', 2018, 'بنزين', 2147483647, 4, 6, 'ازرق', 45645, 'مستعملة', '44444444444', '44', '44', 'دمشق', 'product-5-370x270.jpg', '', '', '', 2, 'سيدان', 'دمشق', 'شد أمامي', '0999999999', 'عادي', 4, 'ياسين أشرفي', 'team_05.jpg', '2022-06-22 13:33:27'),
(34, 'BMW', 2018, 'بنزين', 8787897, 2, 3, 'رمادي', 594894, 'مستعملة', 'd', 'd', 'd', 'دمشق', 'blog-5-370x270.jpg', '', '', '', 2, 'سيدان', 'دمشق', 'شد أمامي', '3333333333', 'عادي', 2, 'ياسين أشرفي', 'team_05.jpg', '2022-06-23 01:16:27');

-- --------------------------------------------------------

--
-- بنية الجدول `comment`
--

CREATE TABLE `comment` (
  `c_id` int(1) NOT NULL,
  `u_id` int(11) DEFAULT NULL,
  `u_img` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `comment`
--

INSERT INTO `comment` (`c_id`, `u_id`, `u_img`, `u_name`, `comment`) VALUES
(0, 3, 'product-6-370x270.jpg', 'يامن الملي', 'جميل جداً'),
(1, 2, 'user.png', 'عبدالله باظو', 'موقع رائع يسهل عناء البحث'),
(2, 4, 'user.png', 'محمد المصري', 'جميل جدا لقد وفرت علي الجهد و الوقت شكرا لكم');

-- --------------------------------------------------------

--
-- بنية الجدول `reports`
--

CREATE TABLE `reports` (
  `id_rep` int(1) NOT NULL,
  `rep_type` varchar(25) NOT NULL,
  `id_car` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `reports`
--

INSERT INTO `reports` (`id_rep`, `rep_type`, `id_car`, `id_user`) VALUES
(2, 'مزيف', 131, 1),
(3, 'مزيف', 131, 1),
(4, 'مزيف', 131, 0),
(5, 'غير لائق', 130, 2),
(6, 'مزيف', 130, 2),
(7, 'انتحال شخصية', 0, 2),
(8, 'غير لائق', 2, 2),
(9, 'مزيف', 2, 2),
(10, 'مزيف', 1, 2),
(11, 'مزيف', 1, 2),
(12, 'مزيف', 129, 2);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id_user` int(1) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `role` varchar(15) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id_user`, `f_name`, `l_name`, `password`, `email`, `phone`, `role`, `img`) VALUES
(1, 'محمود', 'عنجاري', '3', 'ma7mood@gmail.com', '3454353453', 'super-admin', 'team_03.jpg'),
(2, 'ياسين', 'أشرفي', '123', 'yassen@gmail.com', '0999999999', 'user', 'team_05.jpg'),
(3, 'يامن', 'الملي', '4', 'yamen@gmail.com', '4444444444', 'user', 'product-6-370x270.jpg'),
(4, 'محمد', 'المصري', '123', 'yamen1@gmail.com', '1111111111', 'admin', 'team_05.jpg'),
(5, 'عبد الله ', 'باظو', '123', 'abd@gmail.com', '3333333333', 'user', 'product-1-370x270.jpg'),
(6, 'ياسين', 'الملي', 'mmm11111111', 'yassen1@gmail.com', '0999999999', 'user', 'user.png'),
(7, 'يامن', 'أِشرفي', 'gdfgdfgf434234', 'yamen12@gmail.com', '0999999999', 'user', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id_car`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id_rep`),
  ADD KEY `id_car` (`id_car`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id_car` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id_rep` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id_user`);

--
-- القيود للجدول `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`id_car`) REFERENCES `cars` (`id_car`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
