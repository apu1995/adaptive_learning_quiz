-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2016 at 02:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `srno` int(11) NOT NULL,
  `level` varchar(1) NOT NULL,
  `question` varchar(100) NOT NULL,
  `op1` varchar(100) NOT NULL,
  `op2` varchar(100) NOT NULL,
  `op3` varchar(100) NOT NULL,
  `op4` varchar(100) NOT NULL,
  `correct_op` int(11) NOT NULL,
  `answered` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`srno`, `level`, `question`, `op1`, `op2`, `op3`, `op4`, `correct_op`, `answered`) VALUES
(1, 'l', 'Which is not synonym of popular?', 'attractive', 'beloved', 'different', 'famous', 3, b'0'),
(2, 'l', 'What is the synonym for slither?', ' wriggle', 'jump', 'walk', 'laugh', 1, b'0'),
(3, 'l', 'What is the synonym for bizarre?', ' unconventional', 'conventional', 'normal', 'beautiful', 1, b'0'),
(4, 'l', 'What is the synonym for racism?', ' democracy', 'dictatorship', 'secularism', 'chauvinism', 4, b'0'),
(5, 'l', 'What is the synonym for democracy?', ' racism', 'equality', 'dictatorship', 'secular', 2, b'0'),
(6, 'm', 'What is the synonym for frown?', ' sulk', 'smile', 'laugh', 'cry', 1, b'0'),
(7, 'm', 'What is the synonym for stare?', ' peer', 'blink', 'sleep', 'glance', 1, b'0'),
(8, 'm', 'What is the synonym for phobia?', ' liking', 'loathing', 'happiness', 'joy', 2, b'0'),
(9, 'm', 'What is the synonym for alert?', ' lousy', 'sleepy', 'perceptive', 'careless', 3, b'0'),
(10, 'm', 'What is the synonym for lethargic?', ' dazed', 'awake', 'lively', 'happy', 1, b'0'),
(11, 'h', 'What is the synonym for demure?', ' unreserved', 'modest', 'loud', 'happy', 2, b'0'),
(12, 'h', 'What is the synonym for diligent?', ' careless', 'carefull', 'clumsy', 'lazy', 2, b'0'),
(13, 'h', 'What is the synonym for embezzle?', 'steal', 'gift', 'reward', 'give', 1, b'0'),
(14, 'h', 'What is the synonym for flabbergasted?', 'astounded', 'careful', 'fearful', 'happy', 1, b'0'),
(15, 'h', 'What is the synonym for insatiable?', 'unsatisfied', 'careful', 'happy', 'forgiving', 1, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
 ADD PRIMARY KEY (`srno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
