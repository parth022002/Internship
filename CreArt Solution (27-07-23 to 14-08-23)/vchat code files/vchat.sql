-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 11:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileImage` varchar(255) NOT NULL DEFAULT 'assets/images/defaultImage.png',
  `sessionID` varchar(255) NOT NULL,
  `connectionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `name`, `email`, `password`, `profileImage`, `sessionID`, `connectionID`) VALUES
(1, 'parth', 'Parth Ahuja', 'parthahuja01@gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', 'r17960e6b6pljukbb7veaafkkd', 0),
(2, 'Krishna', 'Krishna Jethava', 'krishnajethava02@gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', 'vbtphv9139scm1tkc89huufos3', 0),
(3, 'Hardik', 'Hardik Pampaniya', 'hardikpampaniya03gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', '0', 0),
(4, 'Palna', 'Palna Raja', 'palnaraja04@gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', '0', 0),
(5, 'Savan', 'Savan Pethani', 'savanpethani05@gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', '0', 0),
(6, 'Harmish', 'Harmish Soni', 'harmishsoni06@gmail.com', '$2y$10$kkehVcQ48OxzCbDSLQMqW.JmHbOWxTODVAqfnFZj21rnG/2Wgr8L2', 'assets/images/defaultImage.png', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
