-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2018 at 04:56 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easyfresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Fruit'),
(2, 'Vegetables'),
(3, 'Dairy'),
(4, 'Frozen Meat'),
(5, 'Beer'),
(6, 'Bakery'),
(7, 'Frozen food'),
(8, 'Organic'),
(9, 'Beverages');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `total_price` decimal(5,2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `status`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `total_price`, `created_date`) VALUES
(20, 'delivered', 'Mohd', 'Thabrani', 'bani.buenito@gmail.com', '175501825', 'No 12 kampung naga', '15.00', '2018-05-02 08:53:56'),
(21, 'processing', 'Jamal', 'Abdullah', 'jamal@gmail.com', '0192877272', 'Jitra Kedah', '51.98', '2018-05-02 08:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `measurement` varchar(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `product_id`, `product_name`, `quantity`, `measurement`, `price`, `order_id`) VALUES
(16, 1, 'Tembikai', 1, 'Kg', '15.00', 20),
(17, 2, 'Bananas', 2, 'Kg', '4.99', 21),
(18, 3, 'Fuji Apples', 3, 'Pack (10)', '10.00', 21),
(19, 4, 'Grapes', 1, 'Kg', '12.00', 21);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `measurement` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `stock`, `measurement`, `summary`, `description`, `photo`, `category_id`) VALUES
(1, 'Tembikai', '15.00', 1000, 'Kg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, magnam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur perspiciatis blanditiis quibusdam, beatae ipsa, ad molestiae pariatur voluptatum doloremque tempore enim ea recusandae quod sapiente quaerat nulla!', '/images/uploads/tembikai.jpeg', 1),
(2, 'Bananas', '4.99', 1000, 'Kg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, magnam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur perspiciatis blanditiis quibusdam, beatae ipsa, ad molestiae pariatur voluptatum doloremque tempore enim ea recusandae quod sapiente quaerat nulla', '/images/uploads/banana.jpeg', 1),
(3, 'Fuji Apples', '10.00', 10000, 'Pack (10)', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur perspiciatis blanditiis quibusdam, beatae ipsa', 'Sad molestiae pariatur voluptatum doloremque tempore enim ea recusandae quod sapiente quaerat nulla', '/images/uploads/apples.jpeg', 1),
(4, 'Grapes', '12.00', 1000, 'Kg', 'Molestiae pariatur voluptatum doloremque tempore enim ea recusandae quod sapiente quaerat nulla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur perspiciatis blanditiis quibusdam, beatae ipsa, ad molestiae pariatur voluptatum doloremque tempore enim ea recusandae quod sapiente quaerat nulla! Earum nostrum, fugiat nisi. Amet nostrum neque autem in, error adipisci enim dignissimos odit, ratione quibusdam, esse vero quisquam. Nisi, officia a maxime.', '/images/uploads/grapes.jpeg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@easyfresh.com', 'admin'),
(4, 'izzan', 'izzan@easyfresh.com', 'izzan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
