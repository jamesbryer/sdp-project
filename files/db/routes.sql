-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 21, 2023 at 09:33 AM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routes`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `users_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `users_id`, `route_id`) VALUES
(1, 'Hello! This is a test comment from James!', 1, 2),
(2, 'Hi! This is a second test comment!', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `route_id`, `users_id`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `start_lat` float NOT NULL,
  `start_long` float NOT NULL,
  `end_lat` float NOT NULL,
  `end_long` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `start_lat`, `start_long`, `end_lat`, `end_long`) VALUES
(2, 51.1125, -0.522022, 51.1145, -0.562823),
(3, 51.0783, -0.477678, 51.0728, -0.516473),
(4, 50.9187, -0.564064, 50.8933, -0.574973),
(5, 51.0722, -0.574846, 51.1082, -0.569763),
(6, 51.0494, -0.431864, 51.0854, -0.456171),
(7, 50.523, -4.82174, 50.6084, -4.69062),
(8, 51.4711, -2.69073, 51.4737, -2.69998),
(9, 51.0626, -0.515284, 51.0236, -0.480036),
(10, 51.4781, -0.115473, 51.4516, -0.0371949),
(11, 51.0567, -0.312769, 51.0373, -0.322726),
(12, 51.455, -0.108606, 51.3891, -0.0097291);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` tinytext NOT NULL,
  `users_pwd` longtext NOT NULL,
  `users_email` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, 'James', '$2y$10$6Uf65LY.CNFQ.q1blwajveg02eWfqGu/V4t1zrA/8MfIsh5O3S5bG', 'james@test.com'),
(2, 'jasmine', '$2y$10$VSQEMQRyoSDOKAcS/yS2TeH.jDZtt0bFv29XpSWCo5ypsw/KVtir6', 'jasmine@test.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_user_id_and_route_id` (`users_id`,`route_id`),
  ADD KEY `route_id` (`route_id`,`users_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
