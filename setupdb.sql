-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2019 at 03:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `setupdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:Active',
  `crd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `upd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `status`, `crd`, `upd`) VALUES
(1, 'test', 'admin@gmail.com', '$2y$10$LahNlSMuPR4WJ3jrxRhb7OBggw9Wqg.vd29Js1wBgPw80V/pw5GZW', 1, '2019-03-19 13:14:07', '2019-03-19 13:14:07'),
(2, 'test1', '1a@gmail.com', '$2y$10$AzuEAnmEWeDlBnLiOrPysuxlE1to0vBdHufeXald85x8.Q6/of2Ta', 1, '2019-03-19 13:19:39', '2019-03-19 13:19:39'),
(3, 'test', 'kpop@mailinator.com', '$2y$10$IddF55aau.9oLuKB4UouiuofQJDRIgODFtkE1AE8n2nLR6pv8k3Sa', 1, '2019-03-19 13:20:41', '2019-03-19 13:20:41'),
(4, 'test', 'kpop@gmail.com', '$2y$10$jRp7AJ4Vcs6riyfrrgQMHeqg4VyhthTM2PmbDgOh8rYy66y1PwvWm', 1, '2019-03-19 13:21:43', '2019-03-19 13:21:43'),
(5, 'sdfgfgfg', 'sachinpal.mindiii@gmail.com', '$2y$10$d1C9f3YnXVW/3xuAj6/n6.X4nSogiIZDZPRvPRa.TanL8NUeVkaGa', 1, '2019-03-19 13:23:04', '2019-03-19 13:23:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
