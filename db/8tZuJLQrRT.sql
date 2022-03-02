-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 02, 2022 at 03:52 PM
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
-- Table structure for table `inStock`
--

CREATE TABLE `inStock` (
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
-- Dumping data for table `inStock`
--

INSERT INTO `inStock` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `pairs`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`, `sideRubberSticker`, `heelRubberSticker`, `tungClothSticker`, `paperBand`, `paperTag`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`, `sideRubberSticker`, `heelRubberSticker`, `tungClothSticker`, `paperBand`, `paperTag`) VALUES
(1, 3, 1.25, 3, 0.5, 7.5, 90, 110, 150, 225, 210, 210, 300, 0.15, 0.4, 0.25, 1.75, 310, 75, 60, 80, 115, 2, 2, 80, 160, 180, 1.75, 8, 160, 250, 50, 1.5, 1.5, 1.25, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
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
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `pairs`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`, `sideRubberSticker`, `heelRubberSticker`, `tungClothSticker`, `paperBand`, `paperTag`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `used`
--

CREATE TABLE `used` (
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
  `paperTag` float NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `used`
--

INSERT INTO `used` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `pairs`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`, `sideRubberSticker`, `heelRubberSticker`, `tungClothSticker`, `paperBand`, `paperTag`, `type`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'DMS Boot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inStock`
--
ALTER TABLE `inStock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `used`
--
ALTER TABLE `used`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inStock`
--
ALTER TABLE `inStock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `used`
--
ALTER TABLE `used`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
