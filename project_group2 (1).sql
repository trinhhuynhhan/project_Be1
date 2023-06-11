-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 04:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_group2`
--

-- --------------------------------------------------------

--
-- Table structure for table `billingaddress`
--

CREATE TABLE `billingaddress` (
  `id_user` varchar(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(150) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip_code` int(20) NOT NULL,
  `phone` int(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `cccd` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `name`, `dob`, `phone`, `address`, `cccd`) VALUES
(3, '', '0', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufactures`
--

CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL,
  `manu_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `manufactures`
--

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(1, 'SamSung'),
(2, 'Apple'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'JBL Speaker'),
(6, 'Acer'),
(7, 'Asus');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(1, 'Samsung Galaxy Z Flip4', 1, 1, 20999000, 'samsungzflip.png', 'Samsung Galaxy Z Flip4 128GB  has officially launched into the technology market, marking Samsung\'s return on the user-oriented path of convenience on folding phones. With increased durability and beautiful design, Flip4 becomes one of the bright spots for the second half of 2022.', 1, '2022-12-10 11:38:42'),
(2, 'iPhone 14 Pro Max 1TB', 2, 1, 43000000, 'ip141tb.png', '                iPhone 14 Pro Max 1TB is the most advanced version of the phone that Apple has launched at the event to introduce new products for 2022. Inheriting all the world\'s leading technologies, the device promises to bring an experience. The best use from gaming to photography, deserves to be the most worth buying phone on the current market.              ', 1, '2022-12-23 02:49:40'),
(3, 'OPPO Reno8 Pro 5G', 4, 1, 18000000, 'opporeno8.png', 'OPPO Reno8 Pro 5G\r\nMediaTek Dimensity 8100 Max chip with 8 cores\r\n\r\nRAM: 12 GB\r\n\r\nCapacity: 256 GB\r\n\r\nRear camera: Main 50 MP & Secondary 8 MP, 2 MP\r\n\r\nFront camera: 32 MP\r\n\r\nBattery 4500 mAh, Charge 80 W', 1, '2022-12-10 11:38:54'),
(4, 'Nokia G21 Phone', 4, 1, 3890000, 'Nokia.png', 'Nokia G21 is the next generation of G series manufactured by Nokia with outstanding improvements such as large screen size, stable performance, providing a smooth experience on daily tasks and long usage time. thanks to the huge battery built into the phone ', 0, '2022-12-10 11:39:03'),
(5, 'Xiaomi Redmi Note 11', 3, 1, 4390000, 'xiaomi.png', 'Phone Xiaomi Redmi Note 11 (4GB/64GB)\r\nSnapdragon 680 Chip\r\n\r\nRAM: 4 GB\r\n\r\nCapacity: 64 GB\r\n\r\nRear camera: Main 50 MP & Secondary 8 MP, 2 MP, 2 MP\r\n\r\nFront camera: 13 MP\r\n\r\nBattery 5000 mAh, Charge 33 W', 0, '2022-12-10 11:39:12'),
(6, 'Mozard BT100 Speaker Black', 5, 2, 895000, 'Mozard.png', 'Mozard BT100 Bluetooth Speaker Black\r\nSolid design, elegant black color\r\nThe Mozard BT100 Bluetooth speaker has a simple design, curved corners embrace the speaker body for a complete design, uses fabric to filter the sound and is covered with leather around to avoid fingerprints. Small Bluetooth speaker form , easy to carry to listen to music for more interesting and exciting trips. \r\n\r\nThe device uses electricity directly , no need to care about the issue of running out of battery, as long as there is a power source, you can connect and use it right away', 1, '2022-12-10 11:39:21'),
(31, 'AirPods Pro (2nd Gen) MagSafe Charge Apple MQD83', 2, 4, 6490000, 'airpods-pro-2.png', 'As for the design, the Apple house retains the familiar design of its predecessors such as: Compact design, delicate corners, elegant white color that completely covers the headset and charging box.\r\n\r\nAirPods Pro 2 - Lightweight, trendy design\r\n\r\nOn the charging box will include:\r\n\r\n- Battery indicator light.\r\n\r\n- Lightning charging port.\r\n\r\n- Small eyelets for hanging ropes.\r\n\r\n- Speaker alert\r\n\r\nIn this version, the charging box is equipped with an additional eyelet for convenient hanging. Thanks to that, you can easily hang it in your backpack and take it anywhere without using a dedicated AirPods case.', 1, '2022-12-21 07:06:06'),
(8, 'Mozard H8030D Speaker Black', 5, 2, 510000, 'MozardH8030D.png', 'Mozard H8030D Bluetooth Speaker BlackT\r\nhe Mozard Bluetooth speaker has a compact, sturdy design that is easy to carry with you when traveling, picnicking,...', 1, '2022-12-10 11:39:39'),
(9, 'Mozard E7 Red Bluetooth Speaker ', 5, 2, 420000, 'MozardE7Red.png', 'Mozard E7 Red Bluetooth speaker possesses a compact design, easy to move, easy to carry, attractive sound, diverse connectivity ports, ...', 0, '2022-12-10 11:39:47'),
(10, 'JBL Partybox 110 Bluetooth Speaker', 5, 2, 11900000, 'JBL110.png', 'JBL Partybox 110 Bluetooth speaker offers a luxurious design, outstanding LED lights, vivid sound quality, ... promises to enhance your music experience.', 1, '2022-12-10 11:39:55'),
(11, 'Samsung Galaxy Book Pro 2021 ', 1, 3, 21000000, 'SsGBook.png', 'Samsung Galaxy Book Pro 15 inch 2021 \r\nThe first thing that impresses when holding the device in hand is its thinness. With the 13.3-inch version weighing 0.87kg and the 15.6-inch version being 1.05kg, a great weight compared to today\'s laptops.', 1, '2022-12-10 11:42:12'),
(12, 'LMacBook Pro 16 M1 Max', 2, 3, 82990000, 'Macbook168tr.png', 'Laptop Apple MacBook Pro 16 M1 Max 2021 10 core-CPU/32GB/1TB SSD/32 core-GPU (MK1A3SA/A) \r\nImpressive with the  Apple MacBook Pro 16 M1 Max 2021 wearing a unique \"new suit\", attracting all eyes with the notch screen that first appeared in the Mac line and hidden inside is a powerful configuration set. great from the advanced M1 Max chip.', 1, '2022-12-10 11:40:13'),
(13, 'Xiaomi 12T 128GB', 3, 1, 12900000, 'Xiaomi12T.png', 'Finally, Xiaomi 12T 256GB has also launched with a break in features when equipped with a new generation high-end chip from MediaTek, promising to be a device that serves well for gaming or handling tasks. High-quality graphics. In addition, the phone has been upgraded with a quality camera-like screen to meet all your usage needs.', 1, '2022-12-10 11:40:20'),
(18, 'Laptop Gaming Acer Nitro 5 AN515-45-R6EV Geforce GTX 1650 4GB AMD R5 5600H 8GB 512GB 15.6', 6, 3, 19490000, 'acer-nitro5-AN515-45-R6EV.png', '                                Laptop Gaming Acer Nitro 5 AN515-45-R6EV Geforce GTX 1650 4GB AMD R5 5600H 8GB 512GB 15.6 144Hz IPS 4-zones Win 11\r\nAcer Nitro 5 AN515-45-R6EV integrates the latest \"weapons\". Including CPU R5 5600H, VGA GTX 1650 for powerful processing performance.\r\nAcer Nitro 5 AN515-45-R6EV has an impressive design with two main black-red colors. The surface is designed to be more aggressive and angular. Currently the typical fighting style of the Nitro series. The 6.3mm ultra-thin screen border gives a feeling of more open space than before.                            ', 1, '2022-12-17 01:12:01'),
(30, 'Apple Watch Series 7 GPS 41mm', 2, 0, 8153000, 'Apple Watch Series 7 GPS 41mm.png', 'sai?', 0, '2022-12-21 06:54:56');

-- --------------------------------------------------------

--
-- Table structure for table `protypes`
--

CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `protypes`
--

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1, 'SmartPhone'),
(2, 'Speaker'),
(3, 'Laptop'),
(4, 'HeadPhone'),
(5, 'Watch'),
(7, 'SmartWatch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'b59c67bf196a4758191e42f76670ceba', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billingaddress`
--
ALTER TABLE `billingaddress`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufactures`
--
ALTER TABLE `manufactures`
  ADD PRIMARY KEY (`manu_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `protypes`
--
ALTER TABLE `protypes`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `manufactures`
--
ALTER TABLE `manufactures`
  MODIFY `manu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `protypes`
--
ALTER TABLE `protypes`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
