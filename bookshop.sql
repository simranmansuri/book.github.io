-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2018 at 08:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookshop1`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(15) NOT NULL,
  `proid` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `prices` int(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `proid`, `sid`, `title`, `quantity`, `prices`, `img`, `created_at`, `updated_at`) VALUES
(2, '16', '7250b9d3e1f0d4eea2c5b58c6e69e7f4', 'Say You&#39;re Sorry', 5, 200, 'e341ad1.jpg', '2018-04-30 22:26:22', '0000-00-00 00:00:00'),
(3, '17', '7250b9d3e1f0d4eea2c5b58c6e69e7f4', 'I Dare You', 4, 200, '543bde5.jpg', '2018-04-30 22:30:15', '0000-00-00 00:00:00'),
(4, '19', '7250b9d3e1f0d4eea2c5b58c6e69e7f4', 'Girl, Wash Your Face', 4, 200, 'c0efa18.jpg', '2018-05-01 18:05:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'bestsellers', '2018-04-30 18:24:22', '0000-00-00 00:00:00'),
(5, 'coomingsoon', '2018-04-30 19:03:10', '0000-00-00 00:00:00'),
(6, 'newreleases', '2018-04-30 19:03:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(25) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 'saddam237870@gmail.com', 45555, 'dfsdf', 'sdfsdfsdfsdf', '2018-04-28 19:02:15', '0000-00-00 00:00:00'),
(3, 'john', 'john@gmail.com', 4416546, 'dfasdf', 'dsdfsdfasdf', '2018-04-28 20:45:44', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `oldprices` int(50) NOT NULL,
  `prices` int(50) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `oldprices`, `prices`, `authors`, `description`, `img`, `cat`, `created_at`, `updated_at`) VALUES
(13, 'The Modern Fundamentals of Golf', 150, 100, ' Anthony  Delvin', 'A timeless classic with nearly one million copies in print, Ben Hoganâ€™s Five Lessons outlines the building blocks of winning golf from one of the all-time masters of the sportâ€”fully illustrated with drawings and diagrams to improve your game instantly', '9f85d56.jpg', 0, '2018-04-30 20:40:48', '0000-00-00 00:00:00'),
(14, 'Brown Bear Book & Squirty', 250, 200, 'nelle johnson', 'readers for 25 years. It has transformed the lives of Presidents and CEOs, educators, parents, and students â€” in short, millions of people of all ages and occupations have benefited from Dr. Covey&#39;s 7 Habits book. And, it can transform you.', '2566eb6.jpg', 6, '2018-04-30 19:07:23', '0000-00-00 00:00:00'),
(15, 'First Things First', 350, 300, 'Stephen R. Covey', 'ke to give them? Far from the traditional &#34;be-more-efficient&#34; time-management book with shortcut techniques, First Things First shows you how to look at your use of time totally differently. Using this book will help you create balance between you', '043d573.jpg', 5, '2018-04-30 19:07:19', '0000-00-00 00:00:00'),
(16, 'Say You&#39;re Sorry', 240, 200, 'Melinda Leigh', 'Another winner from Melinda Leigh! Say You&#39;re Sorry showcases Leighâ€™s talent for blending mystery, romance, and nail-biting suspense.', 'e341ad1.jpg', 2, '2018-04-30 19:07:30', '0000-00-00 00:00:00'),
(17, 'I Dare You', 250, 200, 'Ilsa Madden-Mills', 'Another touchdown for Ilsa Madden-Mills! I DARE YOU is sexy, and it has all the ingredients to make you hug your kindle. You will LOVE nerdy Delaney, you&#39;ll fall hard for Maverick (the cocky jock with a heart of gold). It&#39;s glittery sports romance', '543bde5.jpg', 5, '2018-04-30 19:07:33', '0000-00-00 00:00:00'),
(18, 'Beneath a Scarlet Sky', 250, 200, 'Mark Sullivan', 'Based on the true story of a forgotten hero, the USA Today and #1 Amazon Charts bestseller Beneath a Scarlet Sky is the triumphant, epic tale of one young manâ€™s incredible courage and resilience during one of historyâ€™s darkest hours.', 'b22cceb.jpg', 6, '2018-04-30 19:07:40', '0000-00-00 00:00:00'),
(19, 'Girl, Wash Your Face', 250, 200, 'Rachel Hollis', 'With wry wit and hard-earned wisdom, popular online personality and founder of TheChicSite.com founder Rachel Hollis helps readers break free from the lies keeping them from the joy-filled and exuberant life they are meant to have.', 'c0efa18.jpg', 5, '2018-04-30 19:20:01', '0000-00-00 00:00:00'),
(20, 'Before We Were Yourss', 450, 400, 'Lisa Wingate ', 'NEW YORK TIMES BESTSELLER â€¢ For readers of Orphan Train and The Nightingale comes a â€œthought-provoking [and] complex tale about two families, two generations apart . . . based on a notorious true-life scandal.â€*', '7bdabd5.jpg', 6, '2018-04-30 19:20:08', '0000-00-00 00:00:00'),
(21, 'this is bestseller', 150, 100, 'saddam', 'hello this is bestseller', 'bd449b0.jpg', 5, '2018-04-30 19:20:14', '0000-00-00 00:00:00'),
(22, 'this is category post', 250, 200, 'category', '', 'd2b9091.jpg', 2, '2018-04-29 19:43:52', '0000-00-00 00:00:00'),
(24, 'last post ', 150, 100, 'saimon', 'hello this is ', 'cdb24be.jpg', 6, '2018-04-30 20:21:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(15) NOT NULL,
  `proid` int(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `proid`, `rating`, `name`, `email`, `description`, `created_at`, `updated_at`) VALUES
(1, 16, 5, 'saddam', 'saddam237870@gmail.com', 'dfasfasdf', '2018-05-01 07:07:58', '0000-00-00 00:00:00'),
(3, 16, 3, 'sdfsadf', 'saddam237870@gmail.com', 'dsfasdfa', '2018-05-01 15:44:17', '0000-00-00 00:00:00'),
(5, 17, 5, 'sdsefsd', 'saddam237870@gmail.com', 'dfasdfasdf', '2018-05-01 07:14:27', '0000-00-00 00:00:00'),
(6, 21, 2, 'sfsd', 'saddam237870@gmail.com', 'vffdf', '2018-05-01 15:44:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `books` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `name`, `url`, `email`, `books`, `description`, `created_at`, `updated_at`) VALUES
(7, 'saddam', 'http://www.saddamwp.com', 'saddam237870@gmail.com', 'sdfasdfa', 'sdsasdffadfasdfasd', '2018-04-28 19:20:10', '0000-00-00 00:00:00'),
(8, 'saddam', 'http://www.saddamwp.com', 'saddam237870@gmail.com', 'dfadf', 'dfasdfasdf', '2018-04-28 20:44:58', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `writters`
--

CREATE TABLE `writters` (
  `id` int(15) NOT NULL,
  `title` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writters`
--

INSERT INTO `writters` (`id`, `title`, `name`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Gernalism', 'Saima Akter', 'f8eb397.jpg', '2018-04-28 11:00:50', '0000-00-00 00:00:00'),
(2, 'Pets', 'Alison Rattle', '3857983.jpg', '2018-04-28 10:42:42', '0000-00-00 00:00:00'),
(3, 'Philosophy', 'Paul Cattermole', 'a442d22.jpg', '2018-04-28 10:43:12', '0000-00-00 00:00:00'),
(4, 'Politics', 'Bapsi Sidhwa', '2b6e0db.jpg', '2018-04-28 10:44:27', '0000-00-00 00:00:00'),
(5, 'Travel Guides', 'Maxim Gorky', '6866b23.jpg', '2018-04-28 10:45:13', '0000-00-00 00:00:00'),
(6, 'True Crime', 'Gayle Forman', 'c8d001f.jpg', '2018-04-28 10:45:45', '0000-00-00 00:00:00'),
(7, 'Woman Studies', 'Franz Kafka', '08d0895.jpg', '2018-04-28 10:46:46', '0000-00-00 00:00:00'),
(8, 'technology writter', 'saddam', 'ae386c8.jpg', '2018-04-28 16:55:31', '0000-00-00 00:00:00'),
(9, 'technology ', 'saddam', '5b31445.jpg', '2018-04-28 20:44:11', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `writters`
--
ALTER TABLE `writters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `writters`
--
ALTER TABLE `writters`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
