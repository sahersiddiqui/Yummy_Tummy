-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2017 at 07:07 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hungrypet`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `date` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Id`, `Name`, `Email`, `ContactNo`, `Message`, `date`) VALUES
(9, 'Nashra shaikh', 'falakkhan613@gmail.com', '9305005929', 'Your charges are very reasonable..', '1-4-17'),
(15, 'Sanjeev', 'sanjeev@gmail.com', '23242423', 'I am totally Happy with your servie.', '2-04-17'),
(16, 'Tanushri', 'tanu@gmail.com', '658276482', 'you must increse your varieties of food.', '3-04-17'),
(17, 'Ashutosh', 'ashu@gmail.com', '43546516', 'This is the best portal i have ever seen for tiffin service.', '5-04-17'),
(18, 'Ajay', 'ajay@gmail.com', '54921615', 'I love Your tasty and delicious food.', '10-0417'),
(19, 'Imran', 'imran@gmail.com', '6516516', 'Your Service is very Punctual..', '11-04-17'),
(20, 'shreya', 'shreya@gmail.com', '5416165', 'Your food is Very Tasty and healthy.I am Very satisfied with your service.', '12-04-17'),
(21, 'Saumya', 'samsahr@gmail.com', '76375278528', 'This is the best portal.', '13-04-17'),
(22, 'Saher', 'saher.siddiqui15@gmail.com', '57681666', 'your food was very tasty and delicious..', '13-04-17 10:29:04 PM');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `LCount` int(10) NOT NULL,
  `UType` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `date`, `LCount`, `UType`) VALUES
(2, 'saher@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '05/05/2017, 17:22', 41, 'user'),
(3, 'shr@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12/04/17 ,07:04 ', 1, 'user'),
(4, 'shreya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 ', 1, 'user'),
(5, 'suman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 ', 1, 'user'),
(6, 'anam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 ', 1, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mealplan`
--

CREATE TABLE IF NOT EXISTS `mealplan` (
  `id` int(10) DEFAULT NULL,
  `stndveg` varchar(20) DEFAULT NULL,
  `stndnonveg` varchar(20) DEFAULT NULL,
  `miniveg` varchar(20) DEFAULT NULL,
  `mininonveg` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealplan`
--

INSERT INTO `mealplan` (`id`, `stndveg`, `stndnonveg`, `miniveg`, `mininonveg`) VALUES
(1, '4 Roti', '4 Roti', '3 Roti', '3 Roti'),
(2, '1 Dal', '1 Dal', '1 Dal', '1 Dal'),
(3, '1 Veg Sabji', '1 Non-Veg Sabji', '1 Veg Sabji', '1 Non-Veg sabji'),
(4, '1 Rice', '1 Rice', '', ''),
(4, '1Salad/Raita/Dessert', '1Salad/Raita/Dessert', '', ''),
(6, 'Rs 80* per meal', 'Rs 90* per meal', 'Rs 70* per meal', 'Rs 80* per meal');

-- --------------------------------------------------------

--
-- Table structure for table `ordernow`
--

CREATE TABLE IF NOT EXISTS `ordernow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Timing` varchar(50) NOT NULL,
  `MealType` varchar(50) NOT NULL,
  `MealPlan` varchar(50) NOT NULL,
  `Package` varchar(50) NOT NULL,
  `StartDate` varchar(20) NOT NULL,
  `Area` varchar(50) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `ordernow`
--

INSERT INTO `ordernow` (`id`, `Timing`, `MealType`, `MealPlan`, `Package`, `StartDate`, `Area`, `Address`, `Amount`) VALUES
(19, 'Breakfast', 'veg', 'Standard', 'weekly', '2017-04-30', 'Amausi', '1234 amausi airport lucknow', ''),
(20, 'Breakfast', 'veg', 'Standard', 'weekly', '2017-04-30', 'Bijnaur', 'yagdj', ''),
(21, 'Breakfast', 'veg', 'Standard', 'weekly', '2017-04-30', 'Bijnaur', 'yagdj', ''),
(22, 'Breakfast', 'veg', 'Standard', 'weekly', '2017-04-30', 'Bijnaur', 'yagdj', ''),
(23, 'Lunch', 'Nonveg', 'Mini', 'monthly', '2017-04-30', 'Dilkhusha Garden', 'jytgkjhb', ''),
(24, 'Lunch', 'Nonveg', 'Mini', 'weekly', '2017-04-30', 'Daliganj', 'jvtuiyvkyu', ''),
(25, 'Lunch', 'Veg', 'Standard', 'weekly', '2017-04-30', 'Civil Lines', 'nakhas', '550'),
(26, 'Breakfast', 'Veg', 'Mini', 'weekly', '2017-05-03', 'Chowk', 'chowk', '480'),
(27, 'Dinner', 'Nonveg', 'Standard', 'daily', '2017-05-03', 'Daliganj', '486/116,daliganj lko', '90'),
(28, 'Breakfast', 'Veg', 'Standard', 'weekly', '2017-05-06', 'Dilkhusha Garden', 'Lucknow', '550');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Date` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Email` (`Email`),
  UNIQUE KEY `Id` (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `Mobile`, `Email`, `Password`, `Date`) VALUES
(15, 'saher', 46161, 'saher@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '09/04/17 '),
(16, 'admin', 989815, 'admin1995@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12/04/17 ,07:04 '),
(17, 'shreya', 6618681, 'shreya@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 '),
(18, 'suman', 87687168, 'suman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 '),
(19, 'anam', 7168167, 'anam@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '29/04/17 ,09:04 ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
