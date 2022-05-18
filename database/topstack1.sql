-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 08:32 PM
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
-- Database: `topstack1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `des` varchar(255) DEFAULT NULL,
  `img` varchar(200) DEFAULT NULL,
  `userid` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `des`, `img`, `userid`) VALUES
(25, 'TAJ MAHAL', 'An immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal emperor Shah Jahan in memory of his favourite wife', 'IMG-6283e20ac90722.90583023.jpg', 4),
(26, 'Ladakh', 'Bounded by the Karakoram and Himalayan mountains, Ladhak is the largest province in the state of Jammu and Kashmir. The landscape of Ladhak, a high altitude desert, is defined by craggy, barren cliffs and plateaus. ', 'IMG-6283e4c61f9894.08699168.jpg', 4),
(27, 'Tiger Hill, Darjeeling', 'Tiger hill is famous for sunrise view, as on your right hand side there is sunrise hue is coming up in sky and its first rays touches Kachenjunga mountain on your left side gives you different shades.', 'IMG-6283e71858b8c9.21086101.jpg', 4),
(28, 'Jaisalmer Fort', 'The history of Jaiselmer fort is well-known. It takes atleast two hours to have a complete look inside the fort. So, take time and come to visit. Apart from the fort there are other amazing small heritage places nearby the fort which is also a must visit.', 'IMG-6283e805088605.35376795.jpg', 5),
(29, 'Kiala Forest, Shimla', 'The forest is quite dense with occasional viwe of leopards which are mostly visible during the evening and night. Should travel in group for better experience.', 'IMG-6283e9a4ec6a05.80223085.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sl_no` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `com` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `userid` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `cpass` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`userid`, `name`, `email`, `pass`, `cpass`) VALUES
(2, 'user', 's@gmail.com', '123456789', '123456789'),
(3, 'admin', 'a@gmail.com', '25d55ad283aa400af464c76d713c07ad', '12345678'),
(4, 'Sourav Das', 'souravdas4102000@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789'),
(5, 'Sourav Das', 'das.sourav4102000@gmail.com', '25f9e794323b453885f5181f1b624d0b', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sl_no` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `userid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `sign` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
