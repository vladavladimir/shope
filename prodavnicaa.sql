-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 06:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodavnicaa`
--

-- --------------------------------------------------------

--
-- Table structure for table `sneakers`
--

CREATE TABLE `sneakers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sneakers`
--

INSERT INTO `sneakers` (`id`, `name`, `size`, `color`, `gender`, `picture`, `price`) VALUES
(1, 'Nike', '45', 'black', 'male', 'http://www.sportizmo.rs/slike/25093/skechers-patike-synergy-women-1-480x400.jpg', 1129.99),
(2, 'Addidas', '19', 'Pink', 'female', 'https://www.kurir.rs/data/images/2017/10/14/08/1302685_screenshot-3_ls.jpg', 100.55),
(3, 'Nike', '40', 'Orange', 'Male', 'https://scontent.fbeg3-1.fna.fbcdn.net/v/t1.0-9/39860_150536171623755_5276637_n.jpg?_nc_cat=111&ccb=3&_nc_sid=85a577&_nc_ohc=EQbGgixWBOwAX9SeR5n&_nc_ht=scontent.fbeg3-1.fna&oh=d89a6a6daf8b1e7f24df4b6186512f9e&oe=604D24BB', 55.99),
(4, 'Addidas', '44', 'White', 'Male', 'https://static.limundoslike.com/slikaSPORT-PATIKE-SA-SLIKE--243889861v280h210.jpg', 75.99),
(5, 'Ellese', '36', 'Green', 'Female', 'https://s.cdnmpro.com/202965476/p/l/8/muske-patike-m612-crne~501638.jpg', 88.5),
(6, 'Addidas', '42', 'Blue', 'Female', 'https://www.harpersbazaar.rs/storage/posts/thumbnail/2018/Aug/5302/sportski-chic-u-jesenjoj-sezoni-nike-x-supreme-linija-patika.jpg', 89.99),
(7, 'Foot', '35', 'Pink', 'Male', 'https://static.limundoslike.com/slikaSkecers-GoFlex-WALK-Patike-za-trening-224303791v280h210.jpg', 99.99);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `addres` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `addres`, `email`, `password`) VALUES
(1, '1234', '5678', '4321', '8765', '1616', '$2y$10$BDOzMp68NSPypMkraS4fr.hwgMUXfPx0l7YhJh9l3Ml00cKLyLVWi'),
(2, 'Vladimir', 'Markovic', 'vlada', 'Posavska 16', 'vladimir@vlada.com', '$2y$10$r9ehsx9.iuFLfwz3rD63/O9DZrbAggWbvReeD7yvCXjl/1JnuFxNW'),
(3, 'Marija', 'Markovic', 'mara', 'Posavska', 'mara@markovic.com', '$2y$10$mP/H8J40etp4mqhnP4yJguVG/OLlCAOr2EsnhOdhr6Ur2GotofAK2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
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
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
