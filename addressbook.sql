-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2019 at 04:02 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `uid` int(11) DEFAULT NULL,
  `rid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'ACTIVE',
  `relation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`uid`, `rid`, `name`, `email`, `phone`, `address`, `status`, `relation`) VALUES
(1, 10, 'added to rohit soni', 'abc@l.com', '7878787894', 'dsd', 'ACTIVE', 'csc'),
(9, 11, 'x', 'rohitsoni.010@gmail.com', '1111111111', 'E-8, Atwalnagar-3rd', 'ACTIVE', 'eee'),
(9, 12, 'wqe', 'qw@sdsd.ddq', '474717411', 'ddddccc', 'ACTIVE', 'c'),
(7, 22, 'a', 'a@a.com', '154844894', 'swdssw', 'ACTIVE', 'Father'),
(7, 23, 'Rohit soni', 'rohitsoni.010@gmail.com', '4856879798', 'E-8, Atwalnagar-3rd', 'ACTIVE', 'Brother'),
(7, 24, 'b', 'b@g.com', '58765658', 'weqwerq', 'ACTIVE', 'Sister'),
(7, 25, 'tr', 'tuur@yruti.cuiho', '455454787', 'erwyut', 'ACTIVE', 'Family relation'),
(7, 26, 'ituutecui', 'ygfvkfyu@vruy.com', '999999999', 'jvutikvt', 'ACTIVE', 'Mother');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rid` int(11) NOT NULL,
  `imageid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`uid`, `name`, `rid`, `imageid`) VALUES
(7, 'THankyou.jpg', 22, 1),
(7, 'qoctest1.jpg', 22, 2),
(7, 'qoc.jpg', 22, 3),
(7, 'Screenshot (1).png', 24, 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0' COMMENT '0 if menu is root level or menuid if this is child on any menu',
  `link` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0 for disabled menu or 1 for enabled menu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `parent_id`, `link`, `status`) VALUES
(1, 'Contacts', 0, 'contact.php', '1'),
(2, 'Gallery', 0, 'gallery.php?id=\".$rid.\"', '1'),
(3, 'Your Profile', 0, 'profile.php', '1'),
(4, 'About Us', 0, '', '1'),
(5, 'Add Contact', 1, 'add.php', '1'),
(6, 'View', 2, 'gallery.php', '1'),
(7, 'Add', 2, 'gallery.php', '1'),
(8, 'View', 3, 'profile.php', '1'),
(10, 'More options', 0, '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `rid` (`rid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
