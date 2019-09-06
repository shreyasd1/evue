-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 06:49 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `electricity`
--

DROP TABLE IF EXISTS `electricity`;
CREATE TABLE IF NOT EXISTS `electricity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ampere` text NOT NULL,
  `Date_p` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `electricity`
--

INSERT INTO `electricity` (`id`, `ampere`, `Date_p`) VALUES
(1, '2', '2019-07-30 18:30:00'),
(2, '25', '2019-07-30 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(1, '::1', 'shahrukh@gmail.com', '2019-09-06 06:38:42');

-- --------------------------------------------------------

--
-- Table structure for table `master_status`
--

DROP TABLE IF EXISTS `master_status`;
CREATE TABLE IF NOT EXISTS `master_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_status`
--

INSERT INTO `master_status` (`id`, `status`) VALUES
(1, 'on '),
(2, 'off');

-- --------------------------------------------------------

--
-- Table structure for table `mydevice`
--

DROP TABLE IF EXISTS `mydevice`;
CREATE TABLE IF NOT EXISTS `mydevice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `mac_add` text NOT NULL,
  `status` int(11) NOT NULL,
  `Current` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mydevice`
--

INSERT INTO `mydevice` (`id`, `location`, `mac_add`, `status`, `Current`, `action`) VALUES
(11, 'home', 'sdg', 2, 234, 0),
(9, 'mbd', 'asd123', 2, 189, 1),
(4, 'hall', 'sd123', 1, 278, 2),
(7, 'toilet', 'sd234', 2, 50, 1),
(12, 'bathroom', 'asdfg', 2, 123, 0),
(13, 'bathroom', 'msklmsd', 2, 147, 0),
(14, 'sdfsdf', 'sdvdfsdfs', 1, 47, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `reviewed_by` varchar(50) NOT NULL,
  `likes` text NOT NULL,
  `dislikes` text NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rating`, `review`, `user_id`, `reviewed_by`, `likes`, `dislikes`, `time`) VALUES
(1, 4, '“I felt slightly disappointed, it could have been much better. I was also not happy with the partnership between Kedar and Dhoni, it was very slow. ', 0, '15', ',15,16', '', '2019-09-05 00:52:20'),
(2, 3, '“I felt slightly disappointed, it could have been much better. I was also not happy with the partnership between Kedar and Dhoni, it was very slow. We batted 34 overs of spin bowling and scored 119 runs. ', 0, '15', ',15,16', '', '2019-09-05 00:52:30'),
(3, 5, 'nice', 0, '15', ',15,16', '', '2019-09-05 18:59:10'),
(4, 5, 'goood', 0, '15', ',15', ',16', '2019-09-05 19:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_class`
--

DROP TABLE IF EXISTS `tb_class`;
CREATE TABLE IF NOT EXISTS `tb_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_class`
--

INSERT INTO `tb_class` (`id`, `class`) VALUES
(1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mac`
--

DROP TABLE IF EXISTS `tb_mac`;
CREATE TABLE IF NOT EXISTS `tb_mac` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mac_add` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mac`
--

INSERT INTO `tb_mac` (`id`, `mac_add`) VALUES
(1, 'asd12'),
(5, 'def23'),
(7, 'def23'),
(6, 'sd');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL DEFAULT '1' COMMENT '0 =Superadmin, 1 = Hotels Admin, 2 = Hotels Staff',
  `hotel_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `profile_image` text COLLATE utf8_bin NOT NULL,
  `facebook_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `google_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '1',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `hotel_id`, `username`, `password`, `email`, `name`, `gender`, `profile_image`, `facebook_id`, `google_id`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`) VALUES
(1, 0, 0, '', '$2a$08$OCEBVweuVPXSFy0zcOpdqee.rqiP6DCgYyqcQfxwfAVzlRMGjv966', 'admin@gmail.com', 'Administrator', 'female', '', '', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '162.158.165.167', '2019-02-09 12:08:07', '2017-09-04 09:36:35', '2019-02-09 12:08:07'),
(2, 1, 0, '', '', 'mayurp58@gmail.com', 'Mayur Rajendra Pawar', 'male', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/19642531_1454062487984663_8612302738416332697_n.jpg?oh=854d7a89261fd716b9a184ffc14533e7&oe=5A3D8E56', '1513029612087950', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-08 14:44:04'),
(3, 1, 0, '', '', 'mpawar.mayur@gmail.com', 'Mayur Pawar', 'male', 'https://lh6.googleusercontent.com/-ZF4D-xhVW_k/AAAAAAAAAAI/AAAAAAAAACw/5gI3cNV2D6U/photo.jpg', '', '113870195670736219466', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-08 14:46:51'),
(4, 1, 0, '', '', 'suhas.mahajan95@gmail.com', 'Suhas Mahajan', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '107528644825957803442', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-08 14:50:56'),
(5, 1, 0, '', '', 'sneha.pokharkar@raisoni.net', 'Sneha Pokharkar', '', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '115592277543232819605', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-09 09:33:39'),
(6, 1, 0, '', '', 'akshaykankal@gmail.com', 'Akshay Kankal', 'male', 'https://lh4.googleusercontent.com/-S7R-HREOL6E/AAAAAAAAAAI/AAAAAAAAnCc/EQi3V9G6MjI/photo.jpg', '', '111502473317117113316', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-08-27 05:08:05'),
(7, 1, 0, '', '', 'subhash.mahajan123@gmail.com', 'Subhash Mahajan', 'male', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '111139289472551150779', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-15 03:02:33'),
(8, 1, 0, '', '', 'moffset.raver@gmail.com', 'Pramod Mahajan', 'male', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '100463472718188806764', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-10-26 13:32:51'),
(9, 1, 0, '', '', 'rahul.kankal@gmail.com', 'Rahul Kankal', 'male', 'https://lh4.googleusercontent.com/-SD5arReNNd0/AAAAAAAAAAI/AAAAAAAAArw/619qLsna_3o/photo.jpg', '', '103839231094543600425', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-01-09 07:12:44'),
(10, 1, 0, '', '', 'amitparmar9483@gmail.com', 'Amit Parmar', 'male', 'https://lh6.googleusercontent.com/-dk0lLAP5bT4/AAAAAAAAAAI/AAAAAAAAI0A/rFC72JSzz1U/photo.jpg', '', '108902103615474386574', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-02-15 13:57:40'),
(11, 1, 0, '', '', '29051998.amruta@gmail.com', 'AMRUTA MAINDARGI', '', 'https://lh5.googleusercontent.com/-t2SL8DwMxa8/AAAAAAAAAAI/AAAAAAAAAAA/ACevoQP1vMBdZUJYAVPkVgplOFhpgi4N8g/mo/photo.jpg', '', '106541518860463639511', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-11 12:17:51'),
(12, 1, 0, '', '', 'khanshahrukh204@gmail.com', 'Shahrukh Khan', '', 'https://lh4.googleusercontent.com/-YiuxjxVlp-4/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rcPGN7VjYiIf4H49qC_odnjyhQV9Q/photo.jpg', '', '100452437614315224382', 1, 0, NULL, NULL, NULL, NULL, NULL, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-07-24 08:11:13'),
(13, 1, 0, '', '$2a$08$gE/Zk0lXMy.XfQpiWPGRGOtpbqdU6/cklH6MOj/zyl2ICpBySWYtK', 'shahrukh12@gmail.com', 'shahrukh', 'male', '', '', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '192.168.1.7', '2019-07-31 11:22:08', '2019-07-31 11:21:48', '2019-07-31 05:52:08'),
(15, 1, 0, '', '$2a$08$EBTO3qR2luhrgCdS95h58uH/WpRpWmaYtNduZghwpMEmU6f4dXKVO', 'shreyashdeshmukh618@gmail.com', 'Shreyash Deshmukh', '', 'https://lh3.googleusercontent.com/a-/AAuE7mC6QdBNVhNgAcknq-zGaXaw7fZKBTQte374IZ3q-w', '', '111900821815234640316', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-06 11:17:00', '2019-09-01 12:18:29', '2019-09-06 05:47:00'),
(16, 1, 0, '', '$2a$08$sbbUpmgsZdR9Wnq0TZabnu/52kj1uNe9PfYBCkMeaiLmr4H3dkWhy', 'shahrukh1@gmail.com', 'shahrukh', 'male', '', '', '', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2019-09-06 12:08:47', '2019-09-04 12:43:58', '2019-09-06 06:38:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

DROP TABLE IF EXISTS `user_autologin`;
CREATE TABLE IF NOT EXISTS `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`key_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 1, NULL, NULL),
(23, 13, NULL, NULL),
(24, 15, NULL, NULL),
(25, 16, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
