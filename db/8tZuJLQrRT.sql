-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2022 at 05:09 PM
-- Server version: 8.0.13-4
-- PHP Version: 7.2.24-0ubuntu0.18.04.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `8tZuJLQrRT`
--

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
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
  `polyetheneBag` float NOT NULL,
  `polyetheneBagWhite` float NOT NULL,
  `carton` float NOT NULL,
  `jhall` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `8mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterial`
--

CREATE TABLE `rawmaterial` (
  `id` int(11) NOT NULL,
  `leatherFootballGrain` float NOT NULL,
  `leatherLiningSplitCG` float NOT NULL,
  `CGThokerGrain` float NOT NULL,
  `leatherCrustSweadSplit` float NOT NULL,
  `PUCloth` float NOT NULL,
  `lycraClothWith3mmFoam` float NOT NULL,
  `libertyClothWith3mmFoam` float NOT NULL,
  `8mmFoamForCounter` float NOT NULL,
  `15mmFoamForCollarBand` float NOT NULL,
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
  `pairs` int(11) NOT NULL,
  `polyetheneBag` float NOT NULL,
  `polyetheneBagWhite` float NOT NULL,
  `carton` float NOT NULL,
  `jhall` float NOT NULL,
  `sideRubberSticker` float NOT NULL,
  `heelRubberSticker` float NOT NULL,
  `tungClothSticker` float NOT NULL,
  `paperBand` float NOT NULL,
  `paperTag` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rawmaterial`
--

INSERT INTO `rawmaterial` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `pairs`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`, `sideRubberSticker`, `heelRubberSticker`, `tungClothSticker`, `paperBand`, `paperTag`) VALUES
(1, 9788070, 9970000, 9960000, 9860000, 9998460, 9999000, 9998890, 9999550, 9999900, 9999800, 9999800, 9999900, 9800000, 9840000, 9960000, 9990000, 9999820, 9999500, 9999600, 9999440, 9999640, 9989950, 9989950, 9999570, 9999500, 9999710, 9999950, 10000, 9989950, 9999720, 9999750, 9999750, 9979890, 9979890, 9979890, 9979890, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rawmaterial`
--
ALTER TABLE `rawmaterial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
