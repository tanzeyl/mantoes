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
  `paperTag` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `prices` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

INSERT INTO `inStock` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

INSERT INTO `stock` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

INSERT INTO `used` (`id`, `leatherFootballGrain`, `leatherLiningSplitCG`, `CGThokerGrain`, `leatherCrustSweadSplit`, `PUCloth`, `lycraClothWith3mmFoam`, `libertyClothWith3mmFoam`, `8mmFoamForCounter`, `15mmFoamForCollarBand`, `1inchHalterNivaad`, `2inchNivaadW`, `19mmTungBinding`, `600mmEyelet`, `hook`, `7mmJamButton`, `150cmShoeLace`, `1.8mmTPSheet`, `3.5mmLeatherBoardBanwar`, `13mmTingle`, `softner`, `3mmSocks`, `heel`, `galli`, `kachchaSolutionForClosing`, `pakkaSolutionForClosing`, `solutionForMoulding`, `100cmShoeLace`, `polyetheneBag`, `polyetheneBagWhite`, `carton`, `jhall`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `inStock`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `inStock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `used`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `used`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
