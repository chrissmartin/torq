-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 07:12 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanvim3a_torq`
--
CREATE DATABASE IF NOT EXISTS `kanvim3a_torq` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kanvim3a_torq`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `bid` int(11) NOT NULL,
  `bname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table to store car brand names';

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`bid`, `bname`) VALUES
(1, 'Maruti Suzuki'),
(2, 'Honda'),
(3, 'Toyota'),
(4, 'Nissan'),
(5, 'Volkswagen'),
(6, 'Mercedes Benz'),
(7, 'BMW'),
(8, 'Audi'),
(9, 'Ford'),
(10, 'Land Rover');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `cid` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `bid` int(11) NOT NULL,
  `vyear` varchar(4) NOT NULL,
  `petrol` int(11) NOT NULL,
  `diesel` int(11) NOT NULL,
  `minprice` float NOT NULL,
  `maxprice` float NOT NULL,
  `compact` int(1) NOT NULL,
  `sedan` int(1) NOT NULL,
  `family` int(1) NOT NULL,
  `suv` int(1) NOT NULL,
  `luxury` int(1) NOT NULL,
  `sport` int(11) NOT NULL,
  `auto` int(11) NOT NULL,
  `manual` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `highways` int(11) NOT NULL,
  `offroad` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`cid`, `cname`, `bid`, `vyear`, `petrol`, `diesel`, `minprice`, `maxprice`, `compact`, `sedan`, `family`, `suv`, `luxury`, `sport`, `auto`, `manual`, `city`, `highways`, `offroad`, `description`) VALUES
(1, 'Jazz', 2, '2015', 1, 1, 5.6, 9, 1, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 'Honda''s city car with tons of space and a good feature set, albeit priced high.'),
(2, 'Swift', 1, '2014', 1, 1, 4.5, 7.4, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 'India''s favorite hatch has a very long waiting period. Its due for a refresh very soon. Swift is one of the best selling cars in the country.'),
(3, 'City', 2, '2014', 1, 1, 8.1, 12.4, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 'Best selling sedan under 15 Lakhs in India. Very much value for money and Honda''s dependent service network network adds to peace of mind.'),
(4, 'Vento', 5, '2015', 1, 1, 8.2, 13.1, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 'A car that appeals to the youth, is sporty and makes sense for driving enthusiasts'),
(5, 'Innova Crysta', 3, '2016', 1, 1, 13.7, 20.8, 0, 0, 1, 0, 0, 0, 1, 1, 0, 1, 1, 'Innova is back as Innova Crysta in its 2016 avatar. Toyota has succesfully made an already good car even better'),
(6, 'Ertiga', 1, '2013', 1, 1, 6.2, 8.7, 0, 0, 1, 0, 0, 0, 1, 1, 1, 1, 0, 'Maruti Suzuki aims at first time MUV buyers with the Ertiga'),
(7, 'Terrano', 4, '2015', 0, 1, 10, 13, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 'Hot selling SUV attempt from Nissan has both pros and cons. But the positives far outweigh the negatives'),
(8, 'Aspire', 9, '2016', 1, 1, 5.3, 8.2, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 'Aspire is the compact sedan derived from the popular Ford Figo with a powerful engine to boot'),
(9, 'E Class', 6, '2014', 1, 1, 50.2, 130, 0, 1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 'Best for the chauffeur driven business man, the E Class boasts of an excellent rear bench'),
(10, 'i8', 7, '2016', 1, 0, 210, 210, 0, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 'Made from environment friendly components, the i8 is no slouch in the performance department'),
(11, 'R8', 8, '2014', 1, 0, 260, 260, 0, 0, 0, 0, 1, 1, 1, 0, 0, 1, 0, 'An R8 is... well , an R8. Rip open the Tarmac!!!'),
(12, 'Range Rover Sport', 10, '2015', 1, 1, 110, 200, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 'Perfect family and sport');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `vid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `vname` varchar(40) NOT NULL,
  `eco` float NOT NULL,
  `price` float NOT NULL,
  `topspeed` int(11) NOT NULL,
  `acc` float NOT NULL,
  `displ` int(11) NOT NULL,
  `maxpow` varchar(20) NOT NULL,
  `maxtorq` varchar(20) NOT NULL,
  `fueltype` varchar(10) NOT NULL,
  `turnrad` float NOT NULL,
  `nocyl` int(11) NOT NULL,
  `turbo` int(11) NOT NULL,
  `gearbox` varchar(40) NOT NULL,
  `seatcap` int(11) NOT NULL,
  `l` float NOT NULL,
  `w` float NOT NULL,
  `h` float NOT NULL,
  `wb` float NOT NULL,
  `gc` float NOT NULL,
  `kerbweight` int(11) NOT NULL,
  `fuelcap` int(11) NOT NULL,
  `boot` int(11) NOT NULL,
  `tyresize` varchar(10) NOT NULL,
  `tyretype` varchar(30) NOT NULL,
  `ac` int(11) NOT NULL,
  `ps` varchar(11) NOT NULL,
  `rearvent` int(11) NOT NULL,
  `startswitch` int(11) NOT NULL,
  `powerout` int(11) NOT NULL,
  `transmission` varchar(11) NOT NULL,
  `navisystem` varchar(40) NOT NULL,
  `audio` varchar(40) NOT NULL,
  `speaker` varchar(30) NOT NULL,
  `bluetooth` int(11) NOT NULL,
  `lowfuel` int(11) NOT NULL,
  `autoclimate` int(11) NOT NULL,
  `readinglamp` int(11) NOT NULL,
  `rearhr` int(11) NOT NULL,
  `rearar` int(11) NOT NULL,
  `seatmaterial` varchar(20) NOT NULL,
  `cupholder` int(11) NOT NULL,
  `vanity` int(11) NOT NULL,
  `cruise` int(11) NOT NULL,
  `ts` int(11) NOT NULL,
  `suspfr` varchar(40) NOT NULL,
  `susprr` varchar(40) NOT NULL,
  `steeringcontrol` int(11) NOT NULL,
  `emission` varchar(20) NOT NULL,
  `wtime` varchar(30) NOT NULL,
  `wdist` varchar(30) NOT NULL,
  `abs` int(11) NOT NULL,
  `parksensor` int(11) NOT NULL,
  `rcamera` int(11) NOT NULL,
  `airbags` int(11) NOT NULL,
  `smartkey` int(11) NOT NULL,
  `dnrvm` int(11) NOT NULL,
  `immobilizer` int(11) NOT NULL,
  `frbrake` varchar(20) NOT NULL,
  `rrbrake` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`vid`, `cid`, `vname`, `eco`, `price`, `topspeed`, `acc`, `displ`, `maxpow`, `maxtorq`, `fueltype`, `turnrad`, `nocyl`, `turbo`, `gearbox`, `seatcap`, `l`, `w`, `h`, `wb`, `gc`, `kerbweight`, `fuelcap`, `boot`, `tyresize`, `tyretype`, `ac`, `ps`, `rearvent`, `startswitch`, `powerout`, `transmission`, `navisystem`, `audio`, `speaker`, `bluetooth`, `lowfuel`, `autoclimate`, `readinglamp`, `rearhr`, `rearar`, `seatmaterial`, `cupholder`, `vanity`, `cruise`, `ts`, `suspfr`, `susprr`, `steeringcontrol`, `emission`, `wtime`, `wdist`, `abs`, `parksensor`, `rcamera`, `airbags`, `smartkey`, `dnrvm`, `immobilizer`, `frbrake`, `rrbrake`) VALUES
(1, 1, '1.5 E i DTEC (Diesel)', 27.3, 694900, 172, 13.7, 1498, '98.6bhp@3600rpm', '200Nm@1750rpm', 'Diesel', 5.1, 4, 0, '6 Speed', 5, 3955, 1694, 1544, 2530, 165, 1130, 40, 354, '175/70 R14', 'Tubeless, Radial', 1, '1', 0, 0, 0, 'Manual', 'No', 'No', '0', 0, 1, 0, 0, 1, 0, 'Fabric', 6, 0, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 0, 'BS IV', '2 Years', '40000 Kms', 1, 0, 0, 0, 0, 0, 0, 'Disc', 'Drum'),
(2, 1, '1.2 E i VTEC (Petrol)', 18.7, 559900, 172, 13.7, 1199, '88.7bhp@6000rpm', '110Nm@4800rpm', 'Petrol', 5.1, 4, 0, '5 Speed', 5, 3955, 1694, 1544, 2530, 165, 1007, 40, 354, '175/70 R14', 'Tubeless, Radial', 1, '1', 0, 0, 0, 'Manual', 'No', 'No', '0', 0, 1, 0, 0, 1, 0, 'Fabric', 6, 0, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 0, 'BS IV', '2 Years', '40000 Kms', 0, 0, 0, 0, 0, 0, 0, 'Disc', 'Drum'),
(3, 2, 'LDI(Diesel)', 25.2, 596555, 155, 14.8, 1248, '74bhp@4000rpm', '190Nm@2000rpm', 'Diesel', 4.8, 4, 0, '5 Speed', 5, 3850, 1695, 1530, 2430, 170, 1505, 42, 204, '165/80 R14', 'Tubeless Tyres', 1, '1', 0, 0, 1, 'Manual', 'No', 'No', '0', 0, 1, 0, 0, 1, 0, 'Fabric', 6, 0, 0, 0, 'MacPherson Strut', 'Torison Beam', 0, 'BS IV', '2 Years', '40000 Kms', 0, 0, 0, 0, 0, 0, 1, 'Ventilated Disc', 'Drum'),
(4, 2, 'LXI(Petrol)', 20.4, 475616, 165, 12.6, 1197, '83.11bhp@6000rpm', '115Nm@4000rpm', 'Petrol', 4.8, 4, 0, '5 Speed', 5, 3850, 1695, 1530, 2430, 170, 1415, 42, 204, '165/80 R14', 'Tubeless Tyres', 1, '1', 0, 0, 1, 'Manual', 'No', 'No', '0', 0, 1, 0, 0, 1, 0, 'Fabric', 6, 0, 0, 0, 'MacPherson Strut', 'Torison Beam', 0, 'BS IV', '2 Years', '40000 Kms', 0, 0, 0, 0, 0, 0, 1, 'Ventilated Disc', 'Drum'),
(5, 2, 'ZXI(Petrol)', 20.4, 636601, 160, 12.3, 1197, '83.11bhp@6000rpm', '115Nm@4000rpm', 'Petrol', 4.8, 4, 0, '5 Speed', 5, 3850, 1695, 1530, 2430, 170, 1415, 42, 204, '185/65 R15', 'Tubeless Tyres', 1, '1', 0, 1, 1, 'Manual', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torison Beam', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 0, 2, 0, 1, 1, 'Ventilated Disc', 'Drum'),
(6, 11, 'V10 Plus(Petrol)', 7.75, 25500000, 205, 3.2, 5204, '601.4bhp@8250rpm', '560Nm@6500rpm', 'Petrol', 5.9, 10, 0, '7 Speed', 2, 4426, 2037, 1240, 2650, 110, 1555, 73, 112, '245/35 R19', 'Tubeless,Radial', 1, '1', 0, 1, 1, 'Automatic', 'Yes', 'Yes with FM, USB & AUX', '8', 1, 1, 1, 0, 0, 0, 'Leather', 4, 1, 1, 1, 'Sport', 'Sport', 1, 'Euro VI', '2 Years', 'Unlimited Kms', 1, 1, 1, 6, 1, 1, 1, 'Disc', 'Disc'),
(7, 10, 'Hybrid(Petrol)', 47.45, 21400000, 250, 4.4, 1499, '231bhp@5800rpm', '320Nm@3700rpm', 'Petrol', 6.15, 3, 1, '6 Speed', 4, 4689, 1942, 1291, 2800, 117, 1560, 42, 154, '195/50 R20', 'Tubeless,Radial', 1, '1', 0, 1, 1, 'Automatic', 'Yes', 'Yes with FM, USB & AUX', '6', 1, 1, 1, 0, 1, 0, 'Leather', 4, 1, 1, 1, 'Adaptive', 'Adaptive', 1, 'EU 6', '2 Years', 'Unlimited Kms', 1, 1, 1, 6, 1, 1, 1, 'Disc', 'Disc'),
(8, 3, 'i VTEC E(Petrol)', 17.8, 816900, 195, 10, 1497, '117.3bhp@6600rpm', '145Nm@4600rpm', 'Petrol', 5.3, 4, 0, '5 Speed', 5, 4440, 1695, 1495, 2600, 165, 1029, 40, 510, '175/65 R15', 'Tubeless,Radial', 1, '1', 0, 0, 1, 'Manual', 'No', 'No', '0', 0, 1, 0, 0, 1, 0, 'Fabric', 6, 0, 0, 0, 'MacPherson Strut', 'Torsion Beam', 0, 'BS IV', '2 Years', '40000 Kms', 1, 0, 0, 2, 0, 1, 1, 'Disc', 'Drum'),
(9, 3, 'i VTEC CVT SV(Petrol)', 18, 1044800, 195, 10, 1497, '117.3bhp@6600rpm', '145Nm@4600rpm', 'Petrol', 5.3, 4, 0, '5 Speed CVT', 5, 4440, 1695, 1495, 2600, 165, 1065, 40, 510, '175/65 R15', 'Tubeless,Radial', 1, '1', 1, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 1, 'Fabric', 8, 1, 1, 0, 'MacPherson Strut', 'Torsion Beam', 1, 'BS IV', '2 Years', '40000 Kms', 1, 0, 0, 2, 0, 1, 1, 'Disc', 'Drum'),
(10, 3, 'i DTec VX Option(Diesel)', 26, 1248800, 175, 10, 1498, '98.6bhp@3600rpm', '200Nm@1750rpm', 'Diesel', 5.3, 4, 1, '6 Speed', 5, 4440, 1695, 1495, 2600, 165, 1165, 40, 510, '175/65 R15', 'Tubeless,Radial', 1, '1', 1, 1, 1, 'Automatic', 'Yes', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 1, 1, 1, 'Leather', 8, 1, 1, 1, 'MacPherson Strut', 'Torsion Beam', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 1, 1, 1, 'Disc', 'Drum'),
(11, 1, '1.2 V AT i VTEC(Petrol)', 19, 826600, 172, 13.7, 1199, '88.7bhp@6000rpm', '110Nm@4800rpm', 'Petrol', 5.1, 4, 0, '5 Speed', 5, 3955, 1694, 1544, 2530, 165, 1066, 40, 354, '175/65 R15', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(12, 5, '2.8 ZX AT (Diesel)', 15.4, 2077930, 172, 13.7, 2755, '171.5bhp@3400rpm', '360Nm@1200-3400rpm', 'Diesel', 5.4, 4, 0, '6 Speed', 5, 4735, 1830, 1795, 2750, 178, 1870, 55, 450, '215/55 R17', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Leather', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(13, 7, 'XV Premium 110 PS (Diesel)', 19.01, 1315300, 168, 13, 1461, '108.5bhp@3900rpm', '248Nm@2250rpm', 'Diesel', 5.2, 4, 0, '6 Speed', 5, 4331, 2000, 1671, 2673, 200, 1500, 50, 475, '215/65 R16', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Manual', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(14, 6, 'SHVS ZDI Plus (Diesel)', 24.52, 871476, 160, 13.3, 1248, '88.5bhp@4000rpm', '200Nm@1750rpm', 'Diesel', 5.2, 4, 0, '5 Speed', 5, 4265, 1695, 1685, 2740, 185, 1265, 45, 135, '185/65 R15', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(15, 4, '1.5 TDI Highline AT', 21.5, 1260600, 180, 11, 1498, '103.5bhp@4400rpm', '250Nm@1500-2500rpm', 'Diesel', 5.4, 4, 1, '7 Speed', 5, 4390, 1699, 1467, 2553, 163, 1233, 55, 494, '185/60 R15', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(16, 8, '1.5 TDCi Titanium Plus (Diesel)', 25.83, 789850, 170, 11.6, 1498, '99bhp@3750rpm', '215Nm@1750-3000rpm', 'Diesel', 4.9, 4, 0, '5 Speed', 5, 3995, 1695, 1525, 2491, 174, 1195, 40, 359, '175/65 R14', 'Tubeless, Radial', 1, '1', 0, 0, 1, 'Automatic', 'No', 'Yes with FM, USB & AUX', '4', 1, 1, 1, 0, 1, 0, 'Fabric', 6, 1, 0, 0, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 2, 0, 1, 1, 'Disc', 'Drum'),
(17, 9, 'E250 CDI Avantgarde (Diesel)', 13, 5070000, 242, 7.6, 2143, '204bhp@4200rpm', '500Nm@1600-1800rpm', 'Diesel', 5.3, 4, 1, '7 Speed', 5, 4879, 2071, 1474, 2874, 123, 1800, 80, 540, '245/45 R17', 'Tubeless, Radial', 1, '1', 1, 1, 1, 'Automatic', 'Yes', 'Yes with FM, USB & AUX', '11', 1, 1, 1, 1, 1, 1, 'Leather', 8, 1, 1, 1, 'MacPherson Strut', 'Torsion Beam Axle', 1, 'BS IV', '2 Years', '40000 Kms', 1, 1, 1, 8, 1, 1, 1, 'Disc', 'Disc'),
(18, 12, 'HSE (Diesel)', 12.65, 15149300, 210, 7.2, 2993, '288.3bhp@4000rpm', '600Nm@2000rpm', 'Diesel', 6.05, 6, 1, '8 Speed', 5, 4850, 2220, 1780, 2923, 295, 2115, 80, 784, '255/55 R20', 'Tubeless,Radial', 1, '1', 1, 1, 1, 'Automatic', '1', 'Yes with FM, USB & AUX', '19', 1, 1, 1, 1, 1, 1, 'Leather', 12, 1, 1, 1, 'Air Suspension', 'Air Suspension', 1, 'Euro V', '3 Years', '100000 Kms', 1, 1, 1, 10, 1, 1, 1, 'Ventilated Disc', 'Ventilated Disc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `vname` (`vname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
