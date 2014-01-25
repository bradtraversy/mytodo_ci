-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2014 at 07:41 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mytodo_ci`
--
CREATE DATABASE IF NOT EXISTS `mytodo_ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mytodo_ci`;

-- --------------------------------------------------------

--
-- Table structure for table `lists`
--

CREATE TABLE IF NOT EXISTS `lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(255) NOT NULL,
  `list_body` text NOT NULL,
  `list_user_id` varchar(255) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `lists`
--

INSERT INTO `lists` (`id`, `list_name`, `list_body`, `list_user_id`, `create_date`) VALUES
(4, 'Kids & Family', 'Family events, drop off and pick up times for the kids sports and events', '2', '2013-09-25 22:27:33'),
(5, 'Work Related', 'Tasks that need to be done for work. Meetings, projects, etc', '2', '2013-09-25 22:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_name` varchar(255) NOT NULL,
  `task_body` text NOT NULL,
  `list_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_name`, `task_body`, `list_id`, `due_date`, `create_date`, `is_complete`) VALUES
(19, 'Pickup Nick at Baseball', 'Pick Nicky up at baseball at 5pm at the field', 4, '2013-09-28', '2013-09-25 22:29:47', 0),
(20, 'Drop Bri off At School', 'Bring Brianna to school. Leave at 8:20', 4, '2013-09-27', '2013-09-25 22:30:19', 0),
(21, 'Ethan''s Birthday Party', 'Bring Brianna to Ethans party at 77 Oak st', 4, '2013-09-29', '2013-09-25 22:31:00', 0),
(22, 'Friday Meeting', 'Meet with boss on Friday at noon', 5, '2013-09-27', '2013-09-25 22:31:32', 0),
(23, 'Project One Due', 'Project One is due by the 5th of October', 5, '2013-10-05', '2013-09-25 22:32:08', 0),
(24, 'Project Two Due', 'Project One is due by the 15th of December', 5, '2013-12-15', '2013-09-25 22:32:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `register_date`) VALUES
(2, 'Brad', 'Traversy', 'techguyinfo@gmail.com', 'BradT', '162b826c13cebd8806b1e114edecfcc9', '2013-09-25 22:04:41');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
