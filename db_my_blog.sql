-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 03:33 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_my_blog`
--

CREATE TABLE `tbl_my_blog` (
  `blog_id` int(5) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `blog_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_my_blog`
--

INSERT INTO `tbl_my_blog` (`blog_id`, `blog_title`, `author_name`, `blog_description`, `publication_status`) VALUES
(1, 'Natural Beauty', 'amar name', 'The natural beauty of Bangladesh.', 1),
(2, 'Politics', 'mahade', 'Politics e politics cholce.', 1),
(3, 'nai title', 'name komu na', 'kisu lekmu na.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_my_blog`
--
ALTER TABLE `tbl_my_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_my_blog`
--
ALTER TABLE `tbl_my_blog`
  MODIFY `blog_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
