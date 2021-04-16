-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2017 at 10:52 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thepearlshousedinein`
--
CREATE DATABASE IF NOT EXISTS `thepearlshousedinein` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `thepearlshousedinein`;

-- --------------------------------------------------------

--
-- Table structure for table `allergicdisease`
--

DROP TABLE IF EXISTS `allergicdisease`;
CREATE TABLE IF NOT EXISTS `allergicdisease` (
  `alleId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `alleName` varchar(20) NOT NULL,
  PRIMARY KEY (`alleId`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergicdisease`
--

INSERT INTO `allergicdisease` (`alleId`, `alleName`) VALUES
(1, 'Meat'),
(2, 'Gluten'),
(3, 'Nuts'),
(4, 'Shellfish'),
(5, 'Dairy');

-- --------------------------------------------------------

--
-- Table structure for table `allergiclist`
--

DROP TABLE IF EXISTS `allergiclist`;
CREATE TABLE IF NOT EXISTS `allergiclist` (
  `alleId` int(6) UNSIGNED NOT NULL,
  `menuId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergiclist`
--

INSERT INTO `allergiclist` (`alleId`, `menuId`) VALUES
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `allergicrestriction`
--

DROP TABLE IF EXISTS `allergicrestriction`;
CREATE TABLE IF NOT EXISTS `allergicrestriction` (
  `servId` int(6) UNSIGNED NOT NULL,
  `alleId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chef`
--

DROP TABLE IF EXISTS `chef`;
CREATE TABLE IF NOT EXISTS `chef` (
  `userId` int(6) UNSIGNED NOT NULL,
  `chefExpertise` varchar(50) NOT NULL,
  `chefRecognitionAwrd` varchar(80) NOT NULL,
  `chefDescription` varchar(350) DEFAULT NULL,
  `chefStatus` char(1) NOT NULL,
  `chefBankAccNum` char(12) NOT NULL,
  `chefBankAccName` varchar(30) NOT NULL,
  `chefBankName` varchar(15) NOT NULL,
  `chefRevenue` decimal(6,2) DEFAULT NULL,
  `chefCancelRate` decimal(4,2) DEFAULT NULL,
  `chefServRate` decimal(3,2) DEFAULT NULL,
  `chefPunctuality` decimal(3,2) DEFAULT NULL,
  `chefMenuQuality` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chef`
--

INSERT INTO `chef` (`userId`, `chefExpertise`, `chefRecognitionAwrd`, `chefDescription`, `chefStatus`, `chefBankAccNum`, `chefBankAccName`, `chefBankName`, `chefRevenue`, `chefCancelRate`, `chefServRate`, `chefPunctuality`, `chefMenuQuality`) VALUES
(4, 'French & Asian Cuisine', 'Top World Chef 2017', 'Through his leadership, mexican and asian cuisine and fine dining have both evolved to spark a new contemporary genre best described as the core philosophy of Chef Sukumar. Being intrinsic to high quality service, his exploration is successfully demonstrated through the delectable, delicious and luscious servings available for you.', 't', '232212115654', 'Sukumar', 'Maybank', '5200.00', '4.00', '5.00', '4.00', '5.00'),
(5, 'Chinese cuisine', 'Penang Traditional Food Champion', 'Having 12 years of experience as the chef of the most famous restaurant in Penang - Jade Chinese Cuisine', 'a', '192232994354', 'Julia Wong', 'CIMB Bank', NULL, NULL, NULL, NULL, NULL),
(6, 'Asian Cuisine', 'Local Penang Chef Of Choice 2016', 'Owned a restaurant since 2009, serving over 9000 customers.', 't', '232367579009', 'Sim Jia Wei', 'Maybank', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chefrecommendation`
--

DROP TABLE IF EXISTS `chefrecommendation`;
CREATE TABLE IF NOT EXISTS `chefrecommendation` (
  `custId` int(6) UNSIGNED NOT NULL,
  `chefId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

DROP TABLE IF EXISTS `conversation`;
CREATE TABLE IF NOT EXISTS `conversation` (
  `convId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `msgId` int(6) UNSIGNED NOT NULL,
  `custId` int(6) UNSIGNED NOT NULL,
  `chefId` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`convId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cuisine`
--

DROP TABLE IF EXISTS `cuisine`;
CREATE TABLE IF NOT EXISTS `cuisine` (
  `cuisineId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cuisineName` varchar(40) NOT NULL,
  `cuisineDesc` varchar(150) DEFAULT NULL,
  `chefId` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`cuisineId`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisine`
--

INSERT INTO `cuisine` (`cuisineId`, `cuisineName`, `cuisineDesc`, `chefId`) VALUES
(1, 'Pan-fried Chinese Pancakes', NULL, 6),
(2, 'Chef John\'s Shrimp Toast', NULL, 6),
(3, 'Honey Walnut Shrimp', NULL, 6),
(4, 'Chinese Chicken Fried Rice', NULL, 6),
(5, 'Hot and Sour Soup with Bean Sprouts', NULL, 6),
(6, 'Chinese Corn Soup', NULL, 6),
(7, 'Chicken Curry Puffs', NULL, 5),
(8, 'Malaysian Lady Fingers (Okra)', NULL, 5),
(9, 'Simple Malaysian Fried Chicken', NULL, 5),
(10, 'Malaysian Mango Chicken Curry', NULL, 5),
(11, 'Caramel Macchiato Ice Cream', NULL, 5),
(12, 'Cream Puffs ', NULL, 5),
(13, 'Vegetarian Carrot Cake', 'A heavenly, homespun dessert perfect for a party or just simply for the family!', 4),
(14, 'Malaysian Tangy Noodle Salad', NULL, 4),
(15, 'Malaysian Indian-Style Goat Curry', 'This recipe is the star dish every Diwali at Indian home in Malaysia. Serve over rice or with Indian breads such as naan or chapati.', 4),
(16, 'Fried Rice with Marmite', NULL, 4),
(17, 'Pineapple Orange Sorbet ', 'A refreshing, light frozen citrus sorbet. Easy to make and fat free.', 4),
(18, 'Mango Sorbet', NULL, 4),
(19, 'Fresh Tomato Salsa', NULL, 4),
(20, 'Great Chicken Taquitos', NULL, 4),
(21, 'Enchiladas Verdes', NULL, 4),
(22, 'Carne Asada Tacos or Al Pastor Tacos', NULL, 4),
(23, 'Baked Flan', NULL, 4),
(24, 'Avocado Lime Cheesecake', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cuisineclass`
--

DROP TABLE IF EXISTS `cuisineclass`;
CREATE TABLE IF NOT EXISTS `cuisineclass` (
  `cClassId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cClassName` varchar(12) NOT NULL,
  `cClassPrice` decimal(4,2) NOT NULL,
  PRIMARY KEY (`cClassId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisineclass`
--

INSERT INTO `cuisineclass` (`cClassId`, `cClassName`, `cClassPrice`) VALUES
(1, 'Majestic', '39.00'),
(2, 'Lavish', '59.00'),
(3, 'Sumptuous', '79.00'),
(4, 'Grand Deluxe', '99.00');

-- --------------------------------------------------------

--
-- Table structure for table `cuisinecourse`
--

DROP TABLE IF EXISTS `cuisinecourse`;
CREATE TABLE IF NOT EXISTS `cuisinecourse` (
  `cuisineId` int(6) UNSIGNED NOT NULL,
  `menuId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuisinecourse`
--

INSERT INTO `cuisinecourse` (`cuisineId`, `menuId`) VALUES
(1, 1),
(3, 1),
(5, 1),
(2, 2),
(4, 2),
(6, 2),
(7, 3),
(9, 3),
(11, 3),
(8, 4),
(10, 4),
(12, 4),
(13, 5),
(15, 5),
(17, 5),
(14, 6),
(16, 6),
(18, 6),
(19, 7),
(21, 7),
(22, 7),
(20, 8),
(22, 8),
(24, 8);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `userId` int(6) UNSIGNED NOT NULL,
  `memId` int(6) UNSIGNED DEFAULT NULL,
  `custCreditCardNum` char(16) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`userId`, `memId`, `custCreditCardNum`) VALUES
(1, 1, '1674572476857889'),
(3, NULL, '1226344387795765'),
(2, NULL, '2232165576768899');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `eventId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `eventName` varchar(30) NOT NULL,
  PRIMARY KEY (`eventId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventId`, `eventName`) VALUES
(1, 'Family Dining'),
(2, 'House-warming'),
(3, 'Birthday Party'),
(4, 'Romantic Dining');

-- --------------------------------------------------------

--
-- Table structure for table `eventpurpose`
--

DROP TABLE IF EXISTS `eventpurpose`;
CREATE TABLE IF NOT EXISTS `eventpurpose` (
  `eventId` int(6) UNSIGNED NOT NULL,
  `menuId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventpurpose`
--

INSERT INTO `eventpurpose` (`eventId`, `menuId`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 3),
(1, 4),
(1, 5),
(2, 5),
(4, 5),
(1, 6),
(1, 7),
(4, 7),
(4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `memId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `memExprityDate` date NOT NULL,
  PRIMARY KEY (`memId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`memId`, `memExprityDate`) VALUES
(1, '2020-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `menudesigned`
--

DROP TABLE IF EXISTS `menudesigned`;
CREATE TABLE IF NOT EXISTS `menudesigned` (
  `menuId` int(6) UNSIGNED NOT NULL,
  `memId` int(6) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menuproposal`
--

DROP TABLE IF EXISTS `menuproposal`;
CREATE TABLE IF NOT EXISTS `menuproposal` (
  `menuId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menuGlocalCuisType` varchar(25) NOT NULL,
  `menuName` varchar(30) NOT NULL,
  `cClassId` int(6) UNSIGNED NOT NULL,
  `chefId` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`menuId`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menuproposal`
--

INSERT INTO `menuproposal` (`menuId`, `menuGlocalCuisType`, `menuName`, `cClassId`, `chefId`) VALUES
(1, 'Malaysian', 'Classical Asian', 1, 6),
(2, 'Malaysian', 'Chicken, Shrimp, Soup!', 2, 6),
(3, 'Malaysian', 'Kampung Delicacies', 1, 5),
(4, 'Malaysian', 'When Eastern Meets Western', 1, 5),
(5, 'Malaysian', 'Sukumar Secret Recipe', 1, 4),
(6, 'Malaysian', 'Simple yet Complete Malaysian', 1, 4),
(7, 'Mexican', 'The Mexicana', 2, 4),
(8, 'Mexican', 'Mexican\'s Toxic Food ', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `msgId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `msgMessage` varchar(150) NOT NULL,
  `msgDateTime` datetime NOT NULL,
  `userId` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`msgId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
CREATE TABLE IF NOT EXISTS `schedule` (
  `schId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `schType` char(1) NOT NULL,
  `schStartDateTime` datetime NOT NULL,
  `schEndDateTime` datetime NOT NULL,
  `chefId` int(6) UNSIGNED NOT NULL,
  PRIMARY KEY (`schId`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `servId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `custId` int(6) UNSIGNED NOT NULL,
  `chefId` int(6) UNSIGNED NOT NULL,
  `menuId` int(6) UNSIGNED NOT NULL,
  `schId` int(6) UNSIGNED NOT NULL,
  `servLocation` varchar(150) NOT NULL,
  `servDateTime` datetime NOT NULL,
  `servStatus` char(1) NOT NULL,
  `eventId` int(6) UNSIGNED NOT NULL,
  `paxCount` int(2) NOT NULL,
  `cClassId` int(6) UNSIGNED NOT NULL,
  `globalCuisineType` varchar(25) NOT NULL,
  PRIMARY KEY (`servId`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`servId`, `custId`, `chefId`, `menuId`, `schId`, `servLocation`, `servDateTime`, `servStatus`, `eventId`, `paxCount`, `cClassId`, `globalCuisineType`) VALUES
(1, 1, 4, 1, 1, 'Gelugor', '2017-12-15 15:30:25', 'c', 2, 3, 1, 'Malaysian'),
(4, 2, 4, 2, 2, 'Gelugor', '2017-12-22 18:00:00', 'b', 2, 4, 1, 'Malaysian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userFName` varchar(20) NOT NULL,
  `userLName` varchar(20) NOT NULL,
  `userEmail` varchar(25) NOT NULL,
  `userAddress` varchar(150) DEFAULT NULL,
  `userPassword` varchar(15) NOT NULL,
  `userContactNumber` char(11) NOT NULL,
  `userType` char(1) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userFName`, `userLName`, `userEmail`, `userAddress`, `userPassword`, `userContactNumber`, `userType`) VALUES
(1, 'Amy', 'Sim', 'amy@gmail.com', '10-6-2, Desa University,\r\nSungai Dua,\r\nPenang.', 'qwerty', '60194006238', 'u'),
(2, 'Chee Hoo', 'Pang', 'chpang@gmail.com', '8-10-7, Desa University,\r\nJalan Sg Dua', 'qwerty', '60128675465', 'u'),
(3, 'Damia', 'Fantastic', 'damia@yahoo.com', '3-1-4, U Heights,\r\nJalan Sg Dua', 'qwerty', '60162456784', 'u'),
(4, 'Sukumar', 'Letchmunan', 'sukumar@gmail.com', 'Gurney Places', 'qwerty', '60132245656', 'h'),
(5, 'Julia', 'Wong', 'julia@gmail.com', '3-4, the River Heights,\r\nJln Sg Dua', 'qwerty', '60176688945', 'h'),
(6, 'Jia Wei', 'Sim', 'harvyaron@gmail.com', '10-6-2, Desa University', 'qwerty', '60124457894', 'h');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
