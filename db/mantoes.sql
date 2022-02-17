-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2022 at 01:42 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mantoes`
--

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

DROP TABLE IF EXISTS `rawmaterial`;
CREATE TABLE IF NOT EXISTS `rawmaterial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leatherFootballGrain` float NOT NULL,
  `leatherLiningSplitCG` float NOT NULL,
  `CGThokerGrain` float NOT NULL,
  `leatherCrustSweadSplit` float NOT NULL,
  `PUCloth` float NOT NULL,
  `lycraClothWith3mmFoam` float NOT NULL,
  `libertyClothWith3mmFoam` float NOT NULL,
  `8mmFoamForCounter` float NOT NULL,
  `8mmFoamForCollarBand` float NOT NULL,
  `1inchHalterNivaad` float NOT NULL,
  `2inchNivaadW` float NOT NULL,
  `19mmTungBinding` float NOT NULL,
  `600mmEyelet` float NOT NULL,
  `hook` float NOT NULL,
  `7mmJamButton` float NOT NULL,
  `150cmShoeLace` float NOT NULL,
  `1.8mmTPSheet` float NOT NULL,
  `3.5mmLeatherBoardBanwar` float NOT NULL,
  `13mmTingle` float NOT NULL,
  `softner` float NOT NULL,
  `3mmSocks` float NOT NULL,
  `heel` float NOT NULL,
  `galli` float NOT NULL,
  `kachchaSolutionForClosing` float NOT NULL,
  `pakkaSolutionForClosing` float NOT NULL,
  `solutionForMoulding` float NOT NULL,
  `100cmShoeLace` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `8mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
