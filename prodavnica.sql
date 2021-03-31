-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2021 at 08:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prodavnica`
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
(2, 'Addidas', '19', 'Pink', 'female', 'https://www.google.com/imgres?imgurl=http%3A%2F%2Fwww.djaksport.com%2Fimage.aspx%3FimageId%3D138946&imgrefurl=http%3A%2F%2Fwww.djaksport.com%2Fpuma-muske-lfs-patika-puma-ignite-limitless-sr-netfit-n57999&tbnid=KHUbhCoBGIkAeM&vet=12ahUKEwjLi-WSuuLuAhWu2-AK', 100.55),
(3, 'Nike', '40', 'Orange', 'Male', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.kupindoslike.com%2FNike-Air-Max-Invigor-muske-patike-SPORTLINE_slika_O_99683407.jpg&imgrefurl=https%3A%2F%2Fwww.kupindo.com%2FPatike%2F54744679_Nike-Air-Max-Invigor-muske-patike-SPORTLINE&tbnid=eg5', 55.99),
(4, 'Addidas', '44', 'White', 'Male', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fs.cdnmpro.com%2F396466939%2Fp%2Fl%2F3%2Fdecije-patike-c020733-sive~24953.jpg&imgrefurl=https%3A%2F%2Fwww.obucagazela.rs%2Fkupi%2Fdecije-patike-c020733-sive-4504&tbnid=q-GaIN1kKXzE2M&vet=12ahUKEwjLi-WSuuLu', 75.99),
(5, 'Ellese', '36', 'Green', 'Female', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.kupindoslike.com%2FADIDAS-PATIKE_slika_O_37529349.jpg&imgrefurl=https%3A%2F%2Fwww.kupindo.com%2FPatike%2F26492861_ADIDAS-PATIKE&tbnid=Ajp7Z9vGPa-eNM&vet=12ahUKEwjLi-WSuuLuAhWu2-AKHdSwBysQMygcegUIAR', 88.5),
(6, 'Addidas', '42', 'Blue', 'Female', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.kupindoslike.com%2FPatike-Nike-Air-Max-bas-te-sa-slike_slika_O_39584497.jpg&imgrefurl=https%3A%2F%2Fwww.kupindo.com%2FPatike%2F27434277_Patike-Nike-Air-Max-bas-te-sa-slike&tbnid=fPUo1A6LkH7L1M&vet=', 89.99),
(7, 'Foot', '35', 'Pink', 'Male', 'https://www.google.com/imgres?imgurl=https%3A%2F%2Flookaside.fbsbx.com%2Flookaside%2Fcrawler%2Fmedia%2F%3Fmedia_id%3D150536014957104&imgrefurl=https%3A%2F%2Ffr-fr.facebook.com%2FNajsmje%25C5%25A1nije-I-Najbizarnije-Cipele-I-Patike-Na-Svijetu-26-Slika-1505', 99.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
