-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 04:09 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `esewa`
--

CREATE TABLE `esewa` (
  `pid` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `t_seat` int(100) NOT NULL,
  `amt` int(30) NOT NULL,
  `tx_amt` int(20) NOT NULL,
  `psd` int(10) NOT NULL,
  `pdc` int(23) DEFAULT 0,
  `t_amt` int(30) NOT NULL,
  `tm` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `esewa`
--

INSERT INTO `esewa` (`pid`, `username`, `t_seat`, `amt`, `tx_amt`, `psd`, `pdc`, `t_amt`, `tm`) VALUES
(1, 'admin', 2, 600, 78, 6, 0, 684, ''),
(2, 'admin', 3, 900, 117, 9, 0, 1026, ''),
(9, 'admin', 4, 1200, 156, 12, 0, 1368, ''),
(15, 'admin', 5, 1500, 195, 15, 0, 1710, ''),
(17, 'admin', 6, 1800, 234, 18, 0, 2052, ''),
(20, 'this', 1, 300, 39, 3, 0, 342, ''),
(26, 'admin', 6, 1800, 234, 18, 0, 2052, ''),
(41, 'admin', 7, 2100, 273, 21, 0, 2394, ''),
(55, 'dummy', 0, 0, 0, 0, 0, 0, ''),
(58, 'admin', 7, 2100, 273, 21, 0, 2394, ''),
(59, 'dummy', 1, 300, 39, 3, 0, 342, ''),
(60, 'admin', 7, 2100, 273, 21, 0, 2394, ''),
(61, 'dummy', 1, 300, 39, 3, 0, 342, ''),
(63, 'admin', 7, 2100, 273, 21, 0, 2394, ''),
(65, 'dummy', 1, 300, 39, 3, 0, 342, ''),
(68, 'ram', 1, 300, 39, 3, 0, 342, '18:16'),
(69, 'ram', 2, 600, 78, 6, 0, 684, '18:18'),
(71, 'ram', 2, 600, 78, 6, 0, 684, '18:20'),
(72, 'ram', 2, 600, 78, 6, 0, 684, '18:21'),
(73, 'admin', 7, 2100, 273, 21, 0, 2394, '14:14'),
(74, 'admin', 7, 2100, 273, 21, 0, 2394, '16:45'),
(75, 'admin', 7, 2100, 273, 21, 0, 2394, '16:46'),
(76, 'ram', 2, 600, 78, 6, 0, 684, '16:58'),
(77, 'ram', 2, 600, 78, 6, 0, 684, '17:11'),
(78, 'admin', 7, 2100, 273, 21, 0, 2394, '17:13'),
(79, 'admin', 7, 2100, 273, 21, 0, 2394, '17:19'),
(80, 'admin', 7, 2100, 273, 21, 0, 2394, '17:57'),
(81, 'admin', 7, 2100, 273, 21, 0, 2394, '18:04'),
(82, 'admin', 7, 2100, 273, 21, 0, 2394, '18:22'),
(83, 'admin', 7, 2100, 273, 21, 0, 2394, '12:51'),
(84, 'admin', 7, 2100, 273, 21, 0, 2394, '12:59'),
(85, 'admin', 7, 2100, 273, 21, 0, 2394, '13:40'),
(86, 'admin', 7, 2100, 273, 21, 0, 2394, '13:44'),
(87, 'admin', 7, 2100, 273, 21, 0, 2394, '16:42'),
(88, 'admin', 7, 2100, 273, 21, 0, 2394, '16:51'),
(89, 'admin', 7, 2100, 273, 21, 0, 2394, '16:53'),
(90, 'admin', 7, 2100, 273, 21, 0, 2394, '13:54'),
(91, 'rukesh', 2, 1400, 182, 14, 0, 1596, '9:23'),
(92, 'rukesh', 2, 1400, 182, 14, 0, 1596, '10:45'),
(93, 'user', 2, 1000, 130, 10, 0, 1140, '14:51'),
(94, 'khusu', 1, 700, 91, 7, 0, 798, '21:33'),
(95, 'user', 1, 500, 65, 5, 0, 570, '21:44'),
(96, 'user', 1, 700, 91, 7, 0, 798, '10:38'),
(97, 'user', 1, 700, 91, 7, 0, 798, '17:31'),
(98, 'user', 1, 700, 91, 7, 0, 798, '17:31'),
(99, 'user', 1, 700, 91, 7, 0, 798, '17:32'),
(100, 'user', 1, 700, 91, 7, 0, 798, '17:36'),
(101, 'user', 2, 0, 0, 0, 0, 0, '21:25'),
(102, 'user', 2, 0, 0, 0, 0, 0, '21:32'),
(103, 'user', 3, 0, 0, 0, 0, 0, '21:32'),
(104, 'user', 3, 0, 0, 0, 0, 0, '21:33');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `movieId` int(4) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL,
  `trailer` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`movieId`, `Name`, `image`, `trailer`) VALUES
(12, 'Antim', '1.jfif', 'https://www.youtube.com/embed/XFKz1DACGdE'),
(23, 'Sooryavanshi', '2.jfif', 'https://www.youtube.com/embed/u5r77-OQwa8'),
(56, 'satyamev', '3.jfif', 'https://www.youtube.com/embed/e6VZiwlzhSw');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE `hall` (
  `seat|_id` int(100) NOT NULL,
  `showOrderId` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `seat` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`seat|_id`, `showOrderId`, `username`, `seat`) VALUES
(1, 21, 'user', 'A6'),
(2, 21, 'user', 'B6'),
(3, 21, 'user', 'B5'),
(4, 19, 'user', 'A4'),
(5, 19, 'user', 'A5');

-- --------------------------------------------------------

--
-- Table structure for table `movielist`
--

CREATE TABLE `movielist` (
  `movieId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Director` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `imdb` varchar(100) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `trailerLink` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movielist`
--

INSERT INTO `movielist` (`movieId`, `Name`, `Genre`, `Director`, `Description`, `image`, `imdb`, `image2`, `trailerLink`) VALUES
(14, 'Cherry', 'Action', 'Joe Russo, Anthony Russo', 'Cherry (Tom Holland) drifts from college dropout to army medic in Iraq-anchored only by his one true love, Emily (Ciara Bravo). But after returning from the war with PTSD, his life spirals into drugs.', 'cherry.jfif', '6.6', 'cherry2.jpeg.', 'https://www.youtube.com/embed/Nt_wyydppg8'),
(13, 'Godzilla vs Kong', 'Action', 'Adam Wingard', 'Fearsome monsters Godzilla and King Kong square off in an epic battle for the ages, while humanity looks to wipe out both of the creatures and take back the planet once and for all.', 'godzilla vs. kong.jfif', '7.9', 'god.png', 'https://www.youtube.com/embed/odM92ap8_c0'),
(15, 'The Old Guard', 'Action', 'Gina Prince-Bythewood', 'A group of mercenaries, all centuries-old immortals with the ablity to heal themselves, discover someone is onto their secret, and they must fight to protect their freedom.', 'oldguard.jfif', '6.6', 'old.jpg', 'https://www.youtube.com/embed/aK-X2d0lJ_s'),
(16, 'Free Guy', 'Comedy', 'Shawn Levy', 'A bank teller called Guy realizes he is a background character in an open world video game called Free City that will soon go offline.', 'freeguy.jfif', '7.5', 'free.jpg', 'https://www.youtube.com/embed/X2m-08cOAbc'),
(19, 'Venom 2', 'Action', 'Andy Serkis', 'Venom: Let There Be Carnage is an upcoming American superhero film based on the Marvel Comics character Venom, produced by Columbia Pictures in association with Marvel and Tencent Pictures', 'venom2.jfif', '7.5', 'venom.jpg', 'https://www.youtube.com/embed/-FmWuCgJmxo'),
(26, 'Spider-Man: No Way Home', 'Action', 'Jon Watts', 'Spider-Man: No Way Home is an upcoming American superhero film based on the Marvel Comics character Spider-Man, co-produced by Columbia Pictures and Marvel Studios, and distributed by Sony Pictures Releasing', 'sp.jpg', '7.5', 'spiderman.jpg', 'https://www.youtube.com/embed/JfVOs4VSpmA');

-- --------------------------------------------------------

--
-- Table structure for table `showorder`
--

CREATE TABLE `showorder` (
  `showOrderId` int(11) NOT NULL,
  `date` date NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `theater` varchar(255) NOT NULL,
  `movieName` varchar(255) NOT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showorder`
--

INSERT INTO `showorder` (`showOrderId`, `date`, `timeslot`, `theater`, `movieName`, `price`) VALUES
(19, '2021-09-01', '8:00am', 'hall1', 'Godzilla vs Kong', 500),
(21, '2021-08-31', '8:00am', 'hall2', 'Cherry', 700);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `otp` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `otp`) VALUES
(23, 'kusmadon', 'urusakusma@gmail.com', '89408677e28109394470f4db8f722ba0', '56216'),
(44, 'rukesh', 'rukesh.shrestha545@gmail.com', '58157a158dbb6b384fc179d2bac65295', '13032'),
(45, 'user', 'kojurohan24@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '86561'),
(46, 'khusu', 'khususujan00@gmail.com', 'deea473c3db265290360940fa73d505f', '29004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esewa`
--
ALTER TABLE `esewa`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD UNIQUE KEY `movieId` (`movieId`);

--
-- Indexes for table `hall`
--
ALTER TABLE `hall`
  ADD PRIMARY KEY (`seat|_id`);

--
-- Indexes for table `movielist`
--
ALTER TABLE `movielist`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `showorder`
--
ALTER TABLE `showorder`
  ADD PRIMARY KEY (`showOrderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `esewa`
--
ALTER TABLE `esewa`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `hall`
--
ALTER TABLE `hall`
  MODIFY `seat|_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movielist`
--
ALTER TABLE `movielist`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `showorder`
--
ALTER TABLE `showorder`
  MODIFY `showOrderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
