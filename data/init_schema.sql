-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 02:50 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_net`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Table structure for table `friendship_status`
--

CREATE TABLE `friendship_status` (
  `follower_id` varchar(100) NOT NULL,
  `following_id` varchar(100) NOT NULL,
  `are_friends` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Rock'),
(2, 'Jazz'),
(3, 'Blues'),
(4, 'Hip Hop'),
(5, 'Heavy Metal'),
(6, 'Reggae');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` bigint(20) NOT NULL,
  `user_id` varchar(100) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_edited` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `content`, `created_at`, `last_edited`) VALUES
(1, '17112286525db7ca5de4c1e0.83456551', 'Hello there this is my first post', '2019-10-29 18:37:46', NULL),
(2, '17112286525db7ca5de4c1e0.83456551', 'Hello there this is my second post', '2019-10-29 18:42:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_preferred_genres`
--

CREATE TABLE `user_preferred_genres` (
  `user_id` varchar(100) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_preferred_genres`
--

INSERT INTO `user_preferred_genres` (`user_id`, `genre_id`) VALUES
('17112286525db7ca5de4c1e0.83456551', 4),
('6599942025db7d23a3638f7.88548144', 4),
('6651092055db7d56947db46.32259599', 2),
('6693543605dcf8129c1b315.47775539', 3),
('6693543605dcf8129c1b315.47775539', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` varchar(100) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image_url` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `image_url`) VALUES
('17112286525db7ca5de4c1e0.83456551', 'Sithum', 'Pathirana', 'SIthumKaushitha', 'sithumkaushitha@gmail.com', '$2y$10$CcqofPGiojhvITbZicali.OfgLZN9h3avH7j9O0Q9cQM7bF3WoF3e', ''),
('18867197505db7c6069b0aa4.50031429', 'Sithum', 'Pathirana', 'SIthumKajjushitha', 'sithumkaujjshitha@gmail.com', '$2y$10$R/tpFYmIAo5/2n3ofC2Lf.jmI7z0yK3yLfdMI2jP.94RXKVWlkIQS', ''),
('6599942025db7d23a3638f7.88548144', 'df', 'dfs', 'SIthumKaushithafd', 'sinkmatdfhers@gmail.com', '$2y$10$e/a53xdE8HSr7dVPFKFgIuyaLEg1T92XaZpUfKj8tg50W7GNVG6Ye', ''),
('6651092055db7d56947db46.32259599', 'dfs', 'dsfsf', 'SIthumKaudffshitha', 'sithudfdsfsfmkaushitha@gmail.com', '$2y$10$9qQhz/0rEgK7xpjT7KHAn.wBjdTS5RsN253ek2jLaQix3s6.PM.Ku', ''),
('6693543605dcf8129c1b315.47775539', 'kanchana', 'Madugeeth', 'kanchana123', 'dfsdff@gmail.com', '$2y$10$jAZtdjh9oKxRVXP6hXOTn.EgzUrDJkCaquqyqF8bQNRYVmH.IrYey', ''),
('7919761235db598e76d2f77.83780195', 'Sithum', 'Pathirana', 'SIthusmKaushitha', 'sithsumkausshitha@gmail.com', '$2y$10$nmRw24eh.pssV.qazhvOT.138rzfxV9WTJw7dfhD9hnZOj3z6njiy', ''),
('9147379595db59601df6307.97901742', 'Geeth', 'Pathirana', 'Sinkmathers', 'sinkmathers@gmail.com', '$2y$10$aDfsQ0SM7cfoM5PGEGi8J.wDKg8xhCxqyvZfwvcDkUI2qxNIjAInu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `friendship_status`
--
ALTER TABLE `friendship_status`
  ADD PRIMARY KEY (`follower_id`,`following_id`),
  ADD KEY `following_id` (`following_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_preferred_genres`
--
ALTER TABLE `user_preferred_genres`
  ADD PRIMARY KEY (`user_id`,`genre_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `friendship_status`
--
ALTER TABLE `friendship_status`
  ADD CONSTRAINT `friendship_status_ibfk_1` FOREIGN KEY (`follower_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `friendship_status_ibfk_2` FOREIGN KEY (`following_id`) REFERENCES `user_profile` (`user_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`);

--
-- Constraints for table `user_preferred_genres`
--
ALTER TABLE `user_preferred_genres`
  ADD CONSTRAINT `user_preferred_genres_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `user_preferred_genres_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
