-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 03:31 PM
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
-- Database: `db_batch_19`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch_19`
--

CREATE TABLE `tbl_batch_19` (
  `catagory_id` int(5) NOT NULL,
  `catagory_name` varchar(100) NOT NULL,
  `catagory_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_batch_19`
--

INSERT INTO `tbl_batch_19` (`catagory_id`, `catagory_name`, `catagory_description`, `publication_status`) VALUES
(1, 'abar jigay', 'basi kotha kobi na. akdom khaya falamu.                ', 1),
(2, 'name', 'kono kotha kobi na.                ', 1),
(3, '', '', 0),
(4, '', '', 0),
(5, 'amar catagory', 'There will go some text.  ', 1),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, 'country', 'there are so many country. ', 1),
(10, 'country', 'there are so many country. ', 1),
(11, 'mahade', 'this is description', 1),
(12, 'Bangladesh', 'Bangladesh is a land of rivers. ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image`
--

CREATE TABLE `tbl_image` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_image`
--

INSERT INTO `tbl_image` (`image_id`, `image_name`, `product_image`) VALUES
(1, 'sign', 'day18/image/signature.jpg'),
(2, 'fbphoto', 'day18/image/fbphoto.jpg'),
(3, 'photo', 'day18/image/fbphoto_1.jpg'),
(4, 'bigphoto', 'day18/image/photo - Copy.jpg'),
(5, 'myphoto', 'day18/image/photo.jpg'),
(6, 'photo 1', 'day18/image/front-page-team-1.jpg'),
(7, 'photo 2', 'day18/image/front-page-team-2.jpg'),
(8, 'photo 3', 'day18/image/front-page-team-3.jpg'),
(9, 'banner 1', 'day18/image/banner-3.jpg'),
(10, '', 'day18/image/images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_batch_19`
--
ALTER TABLE `tbl_batch_19`
  ADD PRIMARY KEY (`catagory_id`);

--
-- Indexes for table `tbl_image`
--
ALTER TABLE `tbl_image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_batch_19`
--
ALTER TABLE `tbl_batch_19`
  MODIFY `catagory_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_image`
--
ALTER TABLE `tbl_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
