-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2020 at 08:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `discription`, `image`, `time`) VALUES
(12, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '37949thumb-11.jpg', '2020-07-16 16:32:10'),
(9, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '86313thumb-02.jpg', '2020-07-16 16:28:25'),
(10, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '73528thumb-12.jpg', '2020-07-16 16:29:46'),
(11, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '21664thumb-08.jpg', '2020-07-16 16:30:47'),
(13, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '97813thumb-09.jpg', '2020-07-16 16:32:21'),
(14, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '19031thumb-09.jpg', '2020-07-16 16:32:21'),
(15, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '26899thumb-03.jpg', '2020-07-16 16:32:29'),
(16, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '97073thumb-07.jpg', '2020-07-16 16:32:48'),
(17, 'Card title', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', '12182thumb-08.jpg', '2020-07-16 16:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `plan_id`, `image`) VALUES
(4, 6, 'Aerial4.jpg'),
(3, 6, 'Aerial.jpg'),
(5, 7, 'beachfront_property.jpg'),
(6, 7, 'karon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `plan_detail`
--

CREATE TABLE `plan_detail` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sqft` varchar(100) NOT NULL,
  `floor` int(11) NOT NULL,
  `beds` int(11) NOT NULL,
  `bath` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_detail`
--

INSERT INTO `plan_detail` (`id`, `category_id`, `sqft`, `floor`, `beds`, `bath`) VALUES
(7, 2, '1', 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `subcategory_id`, `product_name`, `price`, `title`, `image`, `date`) VALUES
(2, 8, 3, 'carbonell', 12, 'mechanical', '1647thumb-14.jpg', '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `img` varchar(200) NOT NULL DEFAULT '',
  `width` varchar(20) NOT NULL DEFAULT '',
  `depth` varchar(20) NOT NULL DEFAULT '',
  `story` varchar(20) NOT NULL DEFAULT '',
  `created_at` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `img`, `width`, `depth`, `story`, `created_at`) VALUES
(1, 'Title', '26899thumb-03.jpg', '30', '60', '2', ''),
(2, 'Title2', '12182thumb-08.jpg', '30', '60', '2', ''),
(3, 'Title3', '97073thumb-07.jpg', '30', '60', '2', ''),
(4, 'Title4', '86313thumb-02.jpg', '30', '60', '2', ''),
(5, 'Title5', '26899thumb-03.jpg', '30', '60', '2', ''),
(6, 'Title6', '97073thumb-07.jpg', '30', '60', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `image`) VALUES
(2, 'Contemporary House Plan', 'Three Floor House Design', '9755388-land-and-house-koh-kaew-phuket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_detail`
--

CREATE TABLE `service_detail` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `plot_size` int(11) NOT NULL,
  `sqft` int(11) NOT NULL,
  `direaction` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_detail`
--

INSERT INTO `service_detail` (`id`, `service_id`, `plot_size`, `sqft`, `direaction`, `price`, `image`) VALUES
(3, 2, 300, 1352, 'North Facing', '30000', '73432kata2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `subcategory_name`, `image`, `date`) VALUES
(3, 8, 'carbonell', '403787.jpg', '2020-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'anshu', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_detail`
--
ALTER TABLE `plan_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_detail`
--
ALTER TABLE `service_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plan_detail`
--
ALTER TABLE `plan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_detail`
--
ALTER TABLE `service_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
