-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 05:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clarkbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` int(11) NOT NULL,
  `key_name` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `value` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `key_name`, `name`, `value`) VALUES
(1, 'user_role', 'Administrator', 'admin'),
(2, 'user_role', 'User', 'user'),
(3, 'post_mood', 'Happy', 'happy'),
(4, 'post_mood', 'Sad', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `page_name`, `date`) VALUES
(1, 23, 'Home', '2016-12-22 23:51:37'),
(2, 23, 'Home', '2016-12-22 23:51:38'),
(3, 23, 'Home', '2016-12-22 23:51:40'),
(4, 23, 'Register', '2016-12-22 23:58:22'),
(5, 23, 'Post', '2016-12-22 23:59:03'),
(6, 23, 'Post', '2016-12-22 23:59:07'),
(7, 23, 'Post', '2016-12-22 23:59:08'),
(8, 23, 'Register', '2016-12-22 23:59:09'),
(9, 23, 'Home', '2016-12-22 23:59:10'),
(10, 23, 'Home', '2016-12-22 23:59:49'),
(11, 23, 'Logout', '2016-12-22 23:59:51'),
(12, 0, 'Logout', '2016-12-23 00:00:19'),
(13, 0, 'Login', '2016-12-23 00:00:20'),
(14, 0, 'Login', '2016-12-23 00:00:26'),
(15, 23, 'Home', '2016-12-23 00:00:26'),
(16, 23, 'Profile', '2016-12-23 00:02:58'),
(17, 23, 'Profile', '2016-12-23 00:03:17'),
(18, 23, 'Home', '2016-12-23 00:03:19'),
(19, 23, 'Admin', '2016-12-23 00:03:45'),
(20, 23, 'Admin', '2016-12-23 00:09:00'),
(21, 23, 'Admin', '2016-12-23 00:10:21'),
(22, 23, 'Admin', '2016-12-23 00:10:38'),
(23, 23, 'Admin', '2016-12-23 00:10:53'),
(24, 23, 'Admin', '2016-12-23 00:12:04'),
(25, 23, 'Admin', '2016-12-23 00:12:35'),
(26, 23, 'Admin', '2016-12-23 00:13:12'),
(27, 23, 'Admin', '2016-12-23 00:15:49'),
(28, 23, 'Admin', '2016-12-23 00:16:11'),
(29, 23, 'Admin', '2016-12-23 00:17:51'),
(30, 23, 'Admin', '2016-12-23 00:18:28'),
(31, 23, 'Admin', '2016-12-23 00:19:11'),
(32, 23, 'Admin', '2016-12-23 00:19:38'),
(33, 23, 'Admin', '2016-12-23 00:20:23'),
(34, 23, 'Admin', '2016-12-23 00:20:58'),
(35, 23, 'Home', '2016-12-23 00:21:06'),
(36, 23, 'Register', '2016-12-23 00:21:07'),
(37, 23, 'Register', '2016-12-23 00:21:22'),
(38, 23, 'Logout', '2016-12-23 00:21:26'),
(39, 0, 'Login', '2016-12-23 00:21:27'),
(40, 0, 'Login', '2016-12-23 00:21:34'),
(41, 0, 'Login', '2016-12-23 00:21:40'),
(42, 31, 'Home', '2016-12-23 00:21:40'),
(43, 31, 'Admin', '2016-12-23 00:21:45'),
(44, 31, 'Home', '2016-12-23 00:21:47'),
(45, 31, 'Admin', '2016-12-23 00:21:48'),
(46, 31, 'Home', '2016-12-23 00:24:50'),
(47, 31, 'Register', '2016-12-23 00:27:20'),
(48, 31, 'Home', '2016-12-23 00:27:25'),
(49, 31, 'Post', '2016-12-23 00:27:27'),
(50, 31, 'Home', '2016-12-23 00:30:24'),
(51, 31, 'Post', '2016-12-23 00:30:28'),
(52, 31, 'Post', '2016-12-23 00:30:37'),
(53, 31, 'Home', '2016-12-23 00:30:37'),
(54, 31, 'Logout', '2016-12-23 00:30:41'),
(55, 0, 'Login', '2016-12-23 00:30:42'),
(56, 0, 'Login', '2016-12-23 00:30:49'),
(57, 23, 'Home', '2016-12-23 00:30:49'),
(58, 23, 'Post', '2016-12-23 00:30:51'),
(59, 23, 'Post', '2016-12-23 00:31:15'),
(60, 23, 'Home', '2016-12-23 00:31:15'),
(61, 23, 'Home', '2016-12-23 00:50:56'),
(62, 23, 'Home', '2016-12-23 01:37:58'),
(63, 23, 'Home', '2016-12-23 06:08:24'),
(64, 23, 'Home', '2016-12-23 06:08:26'),
(65, 23, 'Home', '2016-12-23 06:08:26'),
(66, 23, 'Home', '2016-12-23 06:08:27'),
(67, 23, 'Home', '2016-12-23 06:08:27'),
(68, 23, 'Home', '2016-12-23 06:08:28'),
(69, 23, 'Home', '2016-12-23 17:22:35'),
(70, 23, 'Home', '2016-12-23 17:29:09'),
(71, 23, 'Home', '2016-12-23 17:30:18'),
(72, 23, 'Home', '2016-12-23 17:30:30'),
(73, 23, 'Logout', '2016-12-23 18:01:52'),
(74, 0, 'Home', '2016-12-23 18:01:54'),
(75, 0, 'Login', '2016-12-23 18:17:16'),
(76, 0, 'Login', '2016-12-23 18:17:25'),
(77, 23, 'Home', '2016-12-23 18:17:25'),
(78, 23, 'Home', '2016-12-23 18:17:29'),
(79, 23, 'Home', '2016-12-23 18:17:30'),
(80, 23, 'Home', '2016-12-23 18:17:31'),
(81, 23, 'Home', '2016-12-23 18:17:33'),
(82, 23, 'Logout', '2016-12-23 18:17:40'),
(83, 0, 'Home', '2016-12-23 18:17:42'),
(84, 0, 'Home', '2016-12-23 18:20:27'),
(85, 0, 'Home', '2016-12-23 18:20:47'),
(86, 0, 'Home', '2016-12-23 18:20:50'),
(87, 0, 'Login', '2016-12-23 18:20:56'),
(88, 0, 'Home', '2016-12-23 18:21:24'),
(89, 0, 'Home', '2016-12-23 18:21:24'),
(90, 0, 'Home', '2016-12-23 18:55:04'),
(91, 0, 'Register', '2016-12-23 18:55:09'),
(92, 0, 'Home', '2016-12-23 18:55:17'),
(93, 0, 'Register', '2016-12-24 00:46:15'),
(94, 0, 'Home', '2016-12-24 00:46:23'),
(95, 0, 'Home', '2016-12-24 00:46:25'),
(96, 0, 'Home', '2016-12-24 05:14:39'),
(97, 0, 'Home', '2016-12-24 17:37:40'),
(98, 0, 'Register', '2016-12-24 17:37:59'),
(99, 0, 'Register', '2016-12-24 17:38:35'),
(100, 0, 'Login', '2016-12-24 17:38:45'),
(101, 0, 'Login', '2016-12-24 17:38:56'),
(102, 32, 'Home', '2016-12-24 17:38:56'),
(103, 32, 'Post', '2016-12-24 17:39:20'),
(104, 32, 'Post', '2016-12-24 17:39:39'),
(105, 32, 'Home', '2016-12-24 17:39:39'),
(106, 32, 'Admin', '2016-12-24 17:40:07'),
(107, 32, 'Home', '2016-12-24 17:40:45'),
(108, 32, 'Post', '2016-12-24 17:40:49'),
(109, 32, 'Post', '2016-12-24 17:41:01'),
(110, 32, 'Home', '2016-12-24 17:41:01'),
(111, 32, 'Logout', '2016-12-24 17:41:06'),
(112, 0, 'Home', '2016-12-24 17:41:08'),
(113, 0, 'Login', '2016-12-24 17:41:32'),
(114, 0, 'Login', '2016-12-24 17:41:41'),
(115, 19, 'Home', '2016-12-24 17:41:42'),
(116, 19, 'Post', '2016-12-24 17:41:44'),
(117, 19, 'Post', '2016-12-24 17:41:52'),
(118, 19, 'Home', '2016-12-24 17:41:52'),
(119, 19, 'Profile', '2016-12-24 17:42:01'),
(120, 19, 'Profile', '2016-12-24 17:42:11'),
(121, 19, 'Home', '2016-12-24 17:42:13'),
(122, 19, 'Profile', '2016-12-24 17:42:24'),
(123, 19, 'Profile', '2016-12-24 17:42:35'),
(124, 19, 'Home', '2016-12-24 17:42:37'),
(125, 19, 'Home', '2016-12-24 17:43:02'),
(126, 19, 'Home', '2016-12-24 17:48:03'),
(127, 19, 'Home', '2016-12-24 17:48:05'),
(128, 19, 'Home', '2016-12-24 17:48:10'),
(129, 19, 'Logout', '2016-12-24 17:48:13'),
(130, 0, 'Home', '2016-12-24 17:48:15'),
(131, 0, 'Register', '2016-12-24 17:51:43'),
(132, 0, 'Register', '2016-12-24 17:52:15'),
(133, 0, 'Login', '2016-12-24 17:52:28'),
(134, 0, 'Login', '2016-12-24 17:52:36'),
(135, 33, 'Home', '2016-12-24 17:52:36'),
(136, 33, 'Post', '2016-12-24 17:53:05'),
(137, 33, 'Post', '2016-12-24 17:53:21'),
(138, 33, 'Home', '2016-12-24 17:53:21'),
(139, 33, 'Home', '2016-12-24 17:53:25'),
(140, 33, 'Post', '2016-12-24 17:53:41'),
(141, 33, 'Post', '2016-12-24 17:53:55'),
(142, 33, 'Home', '2016-12-24 17:53:55'),
(143, 33, 'Profile', '2016-12-24 17:54:17'),
(144, 33, 'Profile', '2016-12-24 17:54:34'),
(145, 33, 'Home', '2016-12-24 17:54:36'),
(146, 33, 'Admin', '2016-12-24 17:54:55'),
(147, 33, 'Admin', '2016-12-24 17:57:20'),
(148, 33, 'Home', '2016-12-24 17:57:40'),
(149, 33, 'Logout', '2016-12-24 17:57:43'),
(150, 0, 'Home', '2016-12-24 17:57:45'),
(151, 0, 'Login', '2016-12-24 17:57:48'),
(152, 0, 'Login', '2016-12-24 17:57:55'),
(153, 33, 'Home', '2016-12-24 17:57:55'),
(154, 33, 'Home', '2016-12-24 17:57:56'),
(155, 33, 'Home', '2016-12-24 17:57:57'),
(156, 33, 'Home', '2016-12-24 17:57:59'),
(157, 33, 'Logout', '2016-12-24 17:58:00'),
(158, 0, 'Home', '2016-12-24 17:58:02'),
(159, 0, 'Register', '2016-12-24 18:15:42'),
(160, 0, 'Register', '2016-12-24 18:16:06'),
(161, 0, 'Home', '2016-12-24 18:16:14'),
(162, 0, 'Register', '2016-12-24 18:16:16'),
(163, 0, 'Register', '2016-12-24 18:16:30'),
(164, 0, 'Login', '2016-12-24 18:16:38'),
(165, 0, 'Login', '2016-12-24 18:16:46'),
(166, 35, 'Home', '2016-12-24 18:16:46'),
(167, 35, 'Profile', '2016-12-24 18:17:11'),
(168, 35, 'Profile', '2016-12-24 18:17:31'),
(169, 35, 'Home', '2016-12-24 18:17:33'),
(170, 35, 'Post', '2016-12-24 18:17:47'),
(171, 35, 'Post', '2016-12-24 18:17:55'),
(172, 35, 'Home', '2016-12-24 18:17:55'),
(173, 35, 'Profile', '2016-12-24 18:18:15'),
(174, 35, 'Profile', '2016-12-24 18:18:21'),
(175, 35, 'Home', '2016-12-24 18:18:23'),
(176, 35, 'Home', '2016-12-24 18:18:51'),
(177, 35, 'Post', '2016-12-24 18:18:55'),
(178, 35, 'Post', '2016-12-24 18:19:06'),
(179, 35, 'Home', '2016-12-24 18:19:06'),
(180, 35, 'Logout', '2016-12-24 18:19:10'),
(181, 0, 'Home', '2016-12-24 18:19:14'),
(182, 0, 'Login', '2016-12-24 18:19:23'),
(183, 0, 'Login', '2016-12-24 18:19:29'),
(184, 20, 'Home', '2016-12-24 18:19:29'),
(185, 20, 'Post', '2016-12-24 18:19:38'),
(186, 20, 'Post', '2016-12-24 18:19:52'),
(187, 20, 'Home', '2016-12-24 18:19:52'),
(188, 20, 'Post', '2016-12-24 18:20:02'),
(189, 20, 'Post', '2016-12-24 18:20:19'),
(190, 20, 'Home', '2016-12-24 18:20:19'),
(191, 20, 'Logout', '2016-12-24 18:20:30'),
(192, 0, 'Login', '2016-12-24 18:20:32'),
(193, 0, 'Login', '2016-12-24 18:20:49'),
(194, 23, 'Home', '2016-12-24 18:20:49'),
(195, 23, 'Admin', '2016-12-24 18:20:54'),
(196, 23, 'Home', '2016-12-24 18:21:31'),
(197, 23, 'Register', '2016-12-24 18:21:42'),
(198, 23, 'Post', '2016-12-24 18:21:45'),
(199, 23, 'Profile', '2016-12-24 18:21:47'),
(200, 23, 'Profile', '2016-12-24 18:21:56'),
(201, 23, 'Home', '2016-12-24 18:21:59'),
(202, 23, 'Post', '2016-12-24 18:22:02'),
(203, 23, 'Post', '2016-12-24 18:22:10'),
(204, 23, 'Home', '2016-12-24 18:22:10'),
(205, 23, 'Profile', '2016-12-24 18:22:16'),
(206, 23, 'Profile', '2016-12-24 18:22:20'),
(207, 23, 'Home', '2016-12-24 18:22:23'),
(208, 0, 'Home', '2017-04-16 15:23:29'),
(209, 0, 'Home', '2017-04-16 15:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `content` varchar(2000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `the_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `hidden` tinyint(1) NOT NULL,
  `mood` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `user_id`, `the_date`, `hidden`, `mood`) VALUES
(27, 'Yay! My first post!', 29, '2016-12-22 20:05:49', 1, 'Happy'),
(29, 'Bruce and Bob are super cool dudes.', 23, '2016-12-22 20:05:49', 1, 'Happy'),
(36, 'ClarkBook deleted my post!', 35, '2016-12-24 18:19:06', 0, 'sad'),
(37, 'I really enjoy the teachers in the CTEC Department!', 20, '2016-12-24 18:19:52', 0, 'happy'),
(38, 'Somebody cooked fish in the microwave!', 20, '2016-12-24 18:20:19', 0, 'sad'),
(39, 'I love Clark College!', 23, '2016-12-24 18:22:10', 0, 'happy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `role`) VALUES
(1, 'Bruce', 'Elgort', 'bruce.elgort@gmail.com', '', ''),
(2, 'Gayle', 'Elgort', 'gayle.elgort@gmail.com', '', ''),
(7, 'Bruce', 'sdfsdf', 'bruce@b.com', '', ''),
(9, 'ga', 'afdsdf', 'ga@ga.com', '', ''),
(10, 'sdfaf', 'asfsaff', 'sdfsadfsadf@b.com', '', ''),
(11, 'asdfljadf;j', 'sdfsladfsadfsadfsa', 'sdfsdfasf@dkdkd.com', '', ''),
(12, 'sdfsdfsadf', 'sdfasdfasdf', 'ddddd@ddd.com', '', ''),
(13, 'sdfsadfasdfsdaf', 'sadfsadfsadfsdfas', 'bee@dddd.com', 'd81965400b6b1129f9afdd53e546a22e156a55a00ef2589839480e6d96a3580c3cf9db8c4b659637e8dbfd1cffbbe047e41b49a99e7fac83a7a6a89adeeb0aa2', ''),
(14, 'sdfsadfafgggg', 'sdfsdfasdfsadfsadf', 'sfddfsdaffdsfda@dsfsadfd.com', 'a49a4fb5f9e359fe546ffa48351bb94dd9207d3c888d8089a588a87f91fe1076c8bed98ab022fc63895d14281cc1125cb43e6f644bd4d148dd04f495713af594', ''),
(15, 'sdfsafff', 'sdfsdfsdfasdfsdafsa', 'bddkdkd@kdkdd.com', 'd716a4188569b68ab1b6dfac178e570114cdf0ea3a1cc0e31486c3e41241bc6a76424e8c37ab26f096fc85ef9886c8cb634187f4fddff645fb099f1ff54c6b8c', ''),
(16, 'Bruce', 'belgort', 'belgort@clark.edu', '9ac3e514215a1578592aba965a866560f331c51ba54677d7a41fb553e621bbb527c1f1ff9bd24953049ccd3b031259d1b5d74e55493b33fe7e88f9cb399c8394', ''),
(17, 'Chris', 'Martin', 'chris@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', ''),
(19, 'Gayle', 'Elgorte', 'gayle.elgort@elguji.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(20, 'Bob', 'Hughes', 'bob@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'user'),
(21, 'Chris', 'Martin', 'c@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(23, 'Tim', 'Cook', 'tcook@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(24, 'Erin', 'Varner', 'erin@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(29, 'Tucker', 'Elgort', 'tucker@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(30, 'Robert', 'Hughes', 'bobh@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(31, 'Tucker', 'Elgort', 'tucker@dog.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(32, 'Dave', 'Clark', 'dave@clark.edu', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(33, 'Brucie', 'Elgort', 'bruce@bruceelgort.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin'),
(35, 'Erin', 'Good', 'erin@erin.com', 'f4866841127d9b87c3313094f118a1c0ca71260cabf83818716834a27da681214808e9a89c7ed818a40d0e4ba7f7668ab0944a48ed8e03c10b0de9f509509aaa', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
