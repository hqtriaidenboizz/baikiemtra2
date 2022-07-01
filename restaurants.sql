-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 07:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhahang`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `price`, `img`, `description`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Thad Rowe II', 16625012, 'https://www.gannett-cdn.com/presto/2019/04/11/PMJS/07c31601-0ae4-4f03-8422-3836525995bb-depcol17-punchbow-fries.JPG?crop=3647,2051,x1,y3129&width=3200&height=1800&format=pjpg&auto=webp', 'Ducimus soluta et voluptate quibusdam quaerat.', 'Zackery Lockman DDS', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(2, 'Miss Angelita Romaguera III', 18804645, 'https://i.ytimg.com/vi/pOlftwO0CJg/maxresdefault.jpg', 'Impedit qui rerum voluptas dolore voluptatem nihil mollitia.', 'Prof. Demond Lakin', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(3, 'Prof. Alphonso Schmitt', 49144685, 'https://thecozyapron.com/wp-content/uploads/2018/03/baja-fish-tacos_thecozyapron_1.jpg', 'Magnam eum tempora in enim.', 'Abdullah Bernier', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(4, 'Ms. Leonie Pacocha Jr.', 89601807, 'https://3f4c2184e060ce99111b-f8c0985c8cb63a71df5cb7fd729edcab.ssl.cf2.rackcdn.com/media/14055/fishtacoswithmango-avocadosalsa.jpg', 'Sit consequuntur quos error velit repudiandae dolore sit a.', 'Guiseppe Breitenberg', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(5, 'Zella Bechtelar', 75910437, 'https://media-cdn.tripadvisor.com/media/photo-s/14/48/ea/28/tuna-poke-tacos-in-a.jpg', 'Perspiciatis quis molestias est blanditiis.', 'Jarred Wyman', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(6, 'Mina Donnelly', 895719, 'https://assets.epicurious.com/photos/54ac3a546529d92b2c039503/1:1/w_600%2Ch_600/51235670_charred-octopus-taco_1x1.jpg', 'Recusandae tenetur doloremque enim sit ea.', 'Dr. Elta O\'Conner', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(7, 'Jana Gibson', 59187660, 'https://mealplannerpro.com/images/recipes/2106/941390.jpg', 'Et occaecati sunt rerum voluptatem sapiente.', 'Charlene Frami', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(8, 'Dr. Ivah Torphy', 59647478, 'https://www.rotinrice.com/wp-content/uploads/2011/08/MatchaIceCream-1.jpg', 'Doloribus voluptatem qui est quo sit dolor error.', 'Dr. Abe Doyle', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(9, 'Gretchen Kuhic', 51773620, 'https://static1.squarespace.com/static/518fe5d1e4b0d1dfab80579a/518fe739e4b06bff89803f68/53cf88ace4b050e4c4d2bdc5/1407620423216/?format=1500w', 'Ipsa qui non perspiciatis unde tenetur est similique.', 'Alexandrine Yundt', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(10, 'Lorna Raynor DDS', 78804227, 'https://th.bing.com/th/id/OIP.fXy4fUkxeRJtsvtcMTfrqwHaFj?pid=ImgDet&w=610&h=458&rs=1', 'Ut quia animi neque odit eaque totam laudantium.', 'Kelsi Klocko', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(11, 'Mr. Russell Runolfsdottir V', 64560985, 'https://th.bing.com/th/id/R.1ca041e29f62f2c3988e49f24306c2cf?rik=aaMixALHk%2bn8VA&riu=http%3a%2f%2ffeenix.co.in%2fwp-content%2fuploads%2f2018%2f01%2fchicken-651.jpg&ehk=qFn2WXldNmPWl2kxvSupmWiVJxzqXlxj%2bPd3t%2b9bnnc%3d&risl=&pid=ImgRaw&r=0', 'Ducimus facilis fugiat vero consectetur.', 'Everardo Kub Jr.', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(12, 'Justine Upton', 20766695, 'https://food.fnr.sndimg.com/content/dam/images/food/fullset/2019/5/24/VB906_Zoodle-Panzanella_s4x3.jpg.rend.hgtvcom.616.462.suffix/1558720499210.jpeg', 'Cumque doloremque ut architecto eveniet voluptas nesciunt.', 'Glenda Kunze', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(13, 'Caitlyn Dietrich', 35499868, 'https://th.bing.com/th/id/R.97987b684b49e1f6c8155197ed78a3f9?rik=7A8kEOCTPKpkLQ&riu=http%3a%2f%2falphafinefoods.com%2fwp-content%2fuploads%2f2016%2f01%2fchicken-meat.jpg&ehk=%2fUzb7mkHQ7HDeuE0PxKhbNbU0hw2%2fg%2fxzR3qYh9eJC4%3d&risl=&pid=ImgRaw&r=0', 'Eum eveniet aspernatur et aut laudantium.', 'Miss Alexanne Connelly', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(14, 'Ahmed Emard', 5725056, 'https://lh3.googleusercontent.com/-cP2pcDxw0pHXwvBOhiDJFzXLMJ4RPUKbUZXSBz9gztzuRuOGiuHTCzDdCyGtQdcofw1CjelRD3Bj2TjioYGTA=w2212-h1244-c-rj-v1-e365', 'Eveniet delectus officiis expedita laboriosam vitae distinctio excepturi dignissimos.', 'Miss Amber Bernier', '2022-06-30 20:04:34', '2022-06-30 20:04:34'),
(15, 'Kacey VonRueden Jr.', 55184227, 'https://th.bing.com/th/id/OIP.PZVD6LBAfRfBXl7IaHAOTwHaE8?pid=ImgDet&rs=1', 'Aut neque a dolores velit dicta recusandae officiis est.', 'Lavina Wehner', '2022-06-30 20:04:34', '2022-06-30 20:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
