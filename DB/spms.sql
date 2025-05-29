-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2025 at 01:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spms`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `creationDate`, `updationDate`) VALUES
(12, ' cups', '2025-02-06 15:30:17', '2025-03-13 19:07:36'),
(14, 'hot kit', '2025-02-07 05:08:23', '2025-02-11 16:21:05'),
(18, 'reuseble pad', '2025-02-15 03:08:32', '2025-02-15 03:08:50'),
(23, 'pads', '2025-03-14 20:25:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `emailhi` varchar(255) NOT NULL,
  `email_he` varchar(150) NOT NULL,
  `contactNo1` varchar(255) NOT NULL,
  `contactNo2` varchar(255) NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `emailhi`, `email_he`, `contactNo1`, `contactNo2`, `address`) VALUES
(1, 'admin1', 'yadavhimani026@gmail.com', 'rathodhappy007@gmail.com', '9925273745', '8980823032', 'mangadh,palitana-gariyadhar-hwy');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `name`, `image`, `date`) VALUES
(1, 'xl1', 'uploads/xl1.jpg', '2025-03-03 10:56:47'),
(2, 'xl2', 'uploads/xl2.jpg', '2025-03-03 10:57:04'),
(3, 'xxl1', 'uploads/xxl1.jpeg', '2025-03-03 10:57:20'),
(4, 'xxl2', 'uploads/xxl2.jpg', '2025-03-03 10:57:33'),
(5, 'Pads', 'uploads/xxxl1.jpg', '2025-03-13 19:31:24'),
(6, 'Hyginene Pads', 'uploads/c1.jpg', '2025-03-14 20:30:29'),
(7, 'Hyginene Pads', 'uploads/c1.jpg', '2025-03-14 20:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contactno` varchar(150) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `image` varchar(400) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `contactno`, `password`, `role`, `date`, `image`, `address`) VALUES
(1, 'himani', 'himani@gmail.com', '2324', 'himu@123', 'admin', '0000-00-00', 'uploads/WhatsApp Image 2024-07-18 at 14.14.01_ab5393c3.jpg', 'managadh'),
(5, 'jone', 'jone@gmail.com', '12345678', 'paresh', 'user', '0000-00-00', 'uploads/testimonial-1.jpg', 'uk'),
(6, 'ram', 'ram@gmail.com', '1234567878', 'ram@1212', 'user', '2025-03-03', 'uploads/testimonial-3.jpg', 'jamngar'),
(7, 'hemu', 'hemu@gmail.com', '2147483647', '123', 'user', '2025-03-03', 'uploads/u1.jpg', 'bhavnagar'),
(10, 'harshita', 'harshita@gmail.com', '6576543243', 'haru@123', 'user', '2025-03-07', 'uploads/harshita.jpg', 'palitana'),
(12, 'matu', 'Matu@1212', '5654668654', 'matu@123', 'user', '2025-03-09', 'uploads/matu.jpg', 'jaspara,palitana'),
(13, 'hemakshi', 'hemu@gmail.com', '8980823032', 'hemu@002', 'admin', '2025-03-12', 'uploads/hemu.jpg', 'bhavnagar'),
(14, 'maitri', 'maitri@gmail.com', '8000418626', 'didi@123', 'user', '2025-03-12', 'uploads/maitri.jpg', 'Ahemdabad'),
(15, 'happy', 'happy@gmail.com', '7884552662', 'happy@123', 'user', '2025-03-13', 'uploads/test3.jpg', 'vadodra'),
(16, 'himu', 'himu@gmail.co', '9427558761', 'himu@111', 'user', '2025-03-14', '', 'palitana');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contactno` varchar(150) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `total` int(30) NOT NULL,
  `pay_method` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pay_status` varchar(20) NOT NULL,
  `order_status` varchar(20) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `p_id`, `name`, `address`, `contactno`, `email`, `quantity`, `total`, `pay_method`, `pay_status`, `order_status`, `order_date`) VALUES
(42, 14, 39, 'maitri', 'Ahemdabad', '8000418626', 'maitri@gmail.com', 1, 549, 'online', 'success', 'Confirm', '2025-03-12'),
(43, 15, 38, 'happy', 'vadodra', '7884552662', 'happy@gmail.com', 1, 289, 'cash', '', 'Confirm', '2025-03-14'),
(44, 12, 40, 'matu', 'jaspara,palitana', '5654668654', 'matu@gmail.com', 1, 505, 'cash', '', 'Cancle', '2025-03-14'),
(47, 12, 38, 'matu', 'jaspara,palitana', '5654668654', 'matu@gmail.com', 1, 289, 'online', '', 'Confirm', '2025-03-14'),
(48, 12, 39, 'matu', 'jaspara,palitana', '5654668654', 'matu@gmail.com', 1, 549, 'online', '', '', '2025-03-14'),
(49, 6, 32, 'ram', 'jamngar', '1234567878', 'ram@gmail.com', 1, 290, 'cash', 'success', 'Confirm', '2025-03-14'),
(50, 6, 41, 'ram', 'jamngar', '1234567878', 'ram@gmail.com', 1, 131, 'cash', '', '', '2025-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productDescription` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `productImage` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `shippingCharge` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `postingTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productPrice`, `productDescription`, `productImage`, `shippingCharge`, `category_id`, `postingTime`, `updationTime`) VALUES
(32, 'Freedom heavy flow pads ', 240, 'Freedom heavy flow pads', 'uploads/pro1.jpeg', 50, 18, '2025-02-15 16:23:49', '2025-03-13 19:26:38'),
(38, ' Sirona Reusable Menstrual Cup', 239, ' Sirona Reusable Menstrual Cup ', 'uploads/pro15.jpg', 50, 12, '2025-03-03 10:48:52', '2025-03-09 08:17:05'),
(39, ' Evona Heating Hot Water Bag', 499, ' Evona Heating Bag Hot Water Bag', 'uploads/pro19.jpg', 50, 14, '2025-03-03 10:49:24', '2025-03-14 16:41:40'),
(40, 'Re:Pad Reusable Sanitary Pads', 455, 'Re:Pad Reusable Sanitary Pads', 'uploads/pro5.jpeg', 50, 18, '2025-03-05 11:31:09', '2025-03-07 07:16:44'),
(41, 'Stayfree Secure Cottony Wings', 81, 'Stayfree Secure Cottony Wings', 'uploads/pro14.webp', 50, 18, '2025-03-13 19:16:23', NULL),
(43, 'Healthshine Ice Bag and Hot Bag', 270, 'Healthshine Ice Bag and Hot Bag', 'uploads/pro22.jpg', 50, 14, '2025-03-14 20:28:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `profession` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `image`, `description`, `profession`) VALUES
(1, 'Divya Aarya', 'uploads/test1.jpeg', 'The best sanitary pads I have used so far. They are so soft and fluffy.I would recommend these pads to everyone. No rashes or leakages.', 'Manager'),
(2, 'matu', 'uploads/matu.jpg', 'They provide a clean and comfortable way to absorb menstrual flow, preventing leaks and embarrassment.', 'Manager'),
(3, 'maitri', 'uploads/maitri.jpg', 'good this product', 'clint'),
(4, 'ram', 'uploads/testimonial-3.jpg', 'product is very good', 'Worker');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `image`, `description`) VALUES
(3, 'Individual Approach', 'uploads/s2.jpeg', ' The material used in sanitary pads is crucial for those with sensitive skin. Look for pads made with soft,  hypoallergenic materials that are free from harsh chemicals and  fragrances. Butterfly pads, for instance, are designed with the comfort of sensit'),
(4, 'Re:Pads', 'uploads/s3.jpeg', 'Re:Pads are made from breathable, waterproof fabric with quick-drying fleece.  They are also treated to be antibacterial and protect against yeast and bacterial infections.  Re:Pads are available in different sizes and absorbencies to suit different flow '),
(5, 'Quality Maintain ', 'uploads/s1.jpeg', 'Good Absorbency. One of the most important elements of a good sanitary pad is the ability to absorb a large volume of  blood in a short span of time.Blood absorbed should also be locked into the centre core, eliminating the chance of backflow.no leakage, '),
(7, 'Delivery To Any Point', 'uploads/s5.jpeg', 'Using a delivery service can save you a tremendous amount of time.  Instead of having an employee drive an item or report across town, an experienced delivery service  can do it for you.service because it is highly reliable and makes timely deliveries in ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
