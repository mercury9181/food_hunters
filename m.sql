-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 21, 2018 at 07:55 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'mimi', '12345'),
(2, 'nasim', '54321'),
(3, 'rahat', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `boithok`
--

CREATE TABLE `boithok` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boithok`
--

INSERT INTO `boithok` (`id`, `p_name`, `image`, `price`) VALUES
(0, 'chocolate shake ', 'product_image/boithok/chocolate_shake.jpg', 230);

-- --------------------------------------------------------

--
-- Table structure for table `cream_and_spice`
--

CREATE TABLE `cream_and_spice` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cream_and_spice`
--

INSERT INTO `cream_and_spice` (`id`, `p_name`, `image`, `price`) VALUES
(1, 'club sandwich', 'product_image/cream_and_spice/club_sandwich.jpg', 200),
(2, 'Coke', 'product_image/cream_and_spice/coke.jpg', 30),
(3, 'Deep dish pizza', 'product_image/cream_and_spice/deep_dish_pizza.jpg', 1150),
(11, 'burger', 'product_image/cream_and_spice/burger.jpg', 230);

-- --------------------------------------------------------

--
-- Table structure for table `espresso`
--

CREATE TABLE `espresso` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `espresso`
--

INSERT INTO `espresso` (`id`, `p_name`, `image`, `price`) VALUES
(1, 'cappuchino', 'product_image/espresso/cappuccino.jpg', 180),
(2, 'Grilled chicken', 'product_image/espresso/grilled_chicken.jpg', 250),
(3, 'club sandwich', 'product_image/espresso/club_sandwich.jpg', 170),
(6, 'burger', 'product_image/espresso/burger.jpg', 222),
(8, 'Flaming pasta', 'product_image/espresso/flaming_pasta.jpg', 400);

-- --------------------------------------------------------

--
-- Table structure for table `orders_up`
--

CREATE TABLE `orders_up` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_up`
--

INSERT INTO `orders_up` (`id`, `p_name`, `image`, `price`) VALUES
(1, 'Rice bowl', 'product_image/orders_up/rice_bowl.jpg', 250),
(4, 'sushi', 'product_image/orders_up/sushi.jpg', 350),
(5, 'Smoked Sandwich', 'product_image/orders_up/club_sandwich.jpg', 250),
(6, 'naga pasta', 'product_image/orders_up/naga_pasta.jpg', 350);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`) VALUES
(1, 'cream_and_spice'),
(2, 'espresso'),
(3, 'orders_up'),
(11, 'boithok');

-- --------------------------------------------------------

--
-- Table structure for table `review_cream_and_spice`
--

CREATE TABLE `review_cream_and_spice` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_cream_and_spice`
--

INSERT INTO `review_cream_and_spice` (`id`, `name`, `review`, `rating`) VALUES
(5, 'meem', 'lala', 4),
(6, 'mimi', 'valai ase restaurant ta', 5);

-- --------------------------------------------------------

--
-- Table structure for table `review_espresso`
--

CREATE TABLE `review_espresso` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_orders_up`
--

CREATE TABLE `review_orders_up` (
  `id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `review` varchar(1000) NOT NULL,
  `rating` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_orders_up`
--

INSERT INTO `review_orders_up` (`id`, `name`, `review`, `rating`) VALUES
(1, 'meem', 'this is a good restaurant', 3),
(2, 'swad', 'not bad', 4),
(3, 'mimi', 'this is a faltu restaurant !!! i was not satisfied', 1),
(4, 'bhbon', 'collinos er pizza mal!!!', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'meem', 'mercury9181@gmail.com', '12345'),
(2, 'mizan', 'mercury9181@gmail.com', '12345'),
(3, 'swad', 'mercury9181@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boithok`
--
ALTER TABLE `boithok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cream_and_spice`
--
ALTER TABLE `cream_and_spice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `espresso`
--
ALTER TABLE `espresso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_up`
--
ALTER TABLE `orders_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_cream_and_spice`
--
ALTER TABLE `review_cream_and_spice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_espresso`
--
ALTER TABLE `review_espresso`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_orders_up`
--
ALTER TABLE `review_orders_up`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cream_and_spice`
--
ALTER TABLE `cream_and_spice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `espresso`
--
ALTER TABLE `espresso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_up`
--
ALTER TABLE `orders_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review_cream_and_spice`
--
ALTER TABLE `review_cream_and_spice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review_espresso`
--
ALTER TABLE `review_espresso`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_orders_up`
--
ALTER TABLE `review_orders_up`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
