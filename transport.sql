-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2016 at 11:10 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(11) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `cparty` varchar(50) NOT NULL,
  `copeningbal` int(100) NOT NULL,
  `cadress` varchar(200) NOT NULL,
  `ccity` varchar(50) NOT NULL,
  `cdistrict` varchar(50) NOT NULL,
  `cstate` varchar(50) NOT NULL,
  `cpin` int(6) NOT NULL,
  `cphone1` int(11) NOT NULL,
  `cphone2` int(11) NOT NULL,
  `cfax1` int(11) NOT NULL,
  `cfax2` int(11) NOT NULL,
  `cemail1` varchar(20) NOT NULL,
  `cemail2` varchar(20) NOT NULL,
  `consignname` varchar(50) NOT NULL,
  `consingername` varchar(50) NOT NULL,
  `cwebsite` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `ctype`, `cparty`, `copeningbal`, `cadress`, `ccity`, `cdistrict`, `cstate`, `cpin`, `cphone1`, `cphone2`, `cfax1`, `cfax2`, `cemail1`, `cemail2`, `consignname`, `consingername`, `cwebsite`) VALUES
(1, 'Credit', 'SURAJ DHANAWE', 1000, 'SOLAPUR', 'SOLAPUR', 'SOLAPUR', 'SOLAPUR', 413102, 213456213, 213456213, 0, 0, 'suraj93116@gmail.com', 'suraj93116@gmail.com', 'Shrinath', 'Dyanamics', 'suraj93116@gmail.com'),
(2, 'Debitor', 'X PVT LTD', 3000, 'PUNE', 'PUNE', 'PUNE', 'PUNE', 413133, 1234567890, 1234567890, 1234567890, 1234567890, 'suraj93116@gmail.com', 'suraj93116@gmail.com', 'Shrinath', 'Dyanamics', 'suraj93116@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `disel`
--

CREATE TABLE `disel` (
  `did` int(10) NOT NULL,
  `dslip` varchar(100) NOT NULL,
  `slipdate` date NOT NULL,
  `dvehical` varchar(100) NOT NULL,
  `ddriver` varchar(500) NOT NULL,
  `dpump` varchar(500) NOT NULL,
  `dfrom` varchar(500) NOT NULL,
  `dto` varchar(500) NOT NULL,
  `dqunity_ordered` int(255) NOT NULL,
  `dqunity_actual` int(255) NOT NULL,
  `dstart_reading` int(255) NOT NULL,
  `dend_reading` int(255) NOT NULL,
  `dtotal_km` int(100) NOT NULL,
  `davg` int(100) NOT NULL,
  `drate` int(100) NOT NULL,
  `damount` int(100) NOT NULL,
  `dremark` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `distric` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `lic_no` varchar(10) NOT NULL,
  `lic_exp_date` date NOT NULL,
  `ref_1_name` varchar(50) NOT NULL,
  `ref_1_address` varchar(100) NOT NULL,
  `ref_1_phone` varchar(10) NOT NULL,
  `ref_2_name` varchar(50) NOT NULL,
  `ref_2_address` varchar(100) NOT NULL,
  `ref_2_phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `iid` int(11) NOT NULL,
  `ino` int(11) NOT NULL,
  `idate` date NOT NULL,
  `iparty` varchar(50) NOT NULL,
  `iinvtotal` int(50) NOT NULL,
  `icharges` int(10) NOT NULL,
  `itotalwithcharges` int(10) NOT NULL,
  `itotalwithservtax` int(10) NOT NULL,
  `ieducess` int(10) NOT NULL,
  `ihsccess` int(10) NOT NULL,
  `igrandtotal` int(10) NOT NULL,
  `inetamt` int(10) NOT NULL,
  `iremark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`iid`, `ino`, `idate`, `iparty`, `iinvtotal`, `icharges`, `itotalwithcharges`, `itotalwithservtax`, `ieducess`, `ihsccess`, `igrandtotal`, `inetamt`, `iremark`) VALUES
(5, 0, '0000-00-00', 'SHRINATH', 0, 1200, 0, 0, 0, 0, 0, 0, ''),
(6, 3, '2016-09-13', 'SHRINATH', 0, 500, 200500, 100, 100, 100, 300, 200800, 'ghh'),
(7, 7, '2016-09-26', 'SHRINATH', 0, 500, 200500, 100, 100, 100, 300, 200800, 'ghh'),
(8, 8, '2016-09-07', '', 120000, 2100, 122100, 0, 0, 0, 0, 122100, 'W'),
(9, 9, '0000-00-00', 'Shrinath', 200000, 100, 200100, 0, 0, 0, 0, 200100, '');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `cityid` int(10) NOT NULL,
  `cityname` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`cityid`, `cityname`, `state`, `district`) VALUES
(1, 'SOLAPUR', 'MAHARASHTRA', 'SOLAPUR');

-- --------------------------------------------------------

--
-- Table structure for table `lorryreceipt`
--

CREATE TABLE `lorryreceipt` (
  `lid` int(11) NOT NULL,
  `lno` int(50) NOT NULL,
  `ldate` date NOT NULL,
  `lveh_no` varchar(30) NOT NULL,
  `lfrom` varchar(50) NOT NULL,
  `lto` varchar(50) NOT NULL,
  `ldist` int(10) NOT NULL,
  `ldaysreq` int(10) NOT NULL,
  `lconname` varchar(50) NOT NULL,
  `lconiname` varchar(50) NOT NULL,
  `lpackage` int(10) NOT NULL,
  `lmethods` varchar(5) NOT NULL,
  `lweight` int(10) NOT NULL,
  `ldesc` varchar(100) NOT NULL,
  `linvoice1` int(10) NOT NULL,
  `linvoice2` int(10) NOT NULL,
  `linvoice3` int(10) NOT NULL,
  `linvoice4` int(10) NOT NULL,
  `lqty` int(10) NOT NULL,
  `lidate` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ino` int(20) NOT NULL,
  `rate` int(20) NOT NULL,
  `perc` int(20) NOT NULL,
  `subtot` int(20) NOT NULL,
  `loading` int(20) NOT NULL,
  `unload` int(20) NOT NULL,
  `stat` int(20) NOT NULL,
  `tail` int(20) NOT NULL,
  `detention` int(20) NOT NULL,
  `delivery` int(20) NOT NULL,
  `other` int(20) NOT NULL,
  `totalcharge` int(20) NOT NULL,
  `lrtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lorryreceipt`
--

INSERT INTO `lorryreceipt` (`lid`, `lno`, `ldate`, `lveh_no`, `lfrom`, `lto`, `ldist`, `ldaysreq`, `lconname`, `lconiname`, `lpackage`, `lmethods`, `lweight`, `ldesc`, `linvoice1`, `linvoice2`, `linvoice3`, `linvoice4`, `lqty`, `lidate`, `status`, `ino`, `rate`, `perc`, `subtot`, `loading`, `unload`, `stat`, `tail`, `detention`, `delivery`, `other`, `totalcharge`, `lrtotal`) VALUES
(10, 12, '0000-00-00', 'MH 42 H 1023', 'SOLAPUR', 'SOLAPUR', 12, 1, 'Shrinath', 'Shrinath', 23, 'Kg', 200, 'ksss', 12, 11, 123, 12, 2, '2016-08-31', 0, 9, 100, 100, 20000, 20, 10, 10, 10, 10, 0, 0, 60, 20060),
(11, 13, '0000-00-00', 'MH 42 H 1023', 'SOLAPUR', 'SOLAPUR', 50, 2, 'Shrinath', 'Shrinath', 23, 'Kg', 2000, '', 1, 1, 1, 1, 1, '2016-08-16', 0, 9, 100, 100, 200000, 0, 0, 0, 0, 100, 0, 0, 100, 200100),
(12, 14, '0000-00-00', 'MH 42 H 1023', 'SOLAPUR', 'SOLAPUR', 1000, 10, 'Shrinath', 'Shrinath', 10, 'Nos.', 1000, 'aa', 0, 0, 0, 0, 0, '2016-09-06', 1, 7, 200, 100, 200000, 100, 100, 100, 100, 100, 0, 0, 500, 200500),
(13, 17, '0000-00-00', 'MH 42 H 1023', 'SOLAPUR', 'SOLAPUR', 200, 12, 'Dyanamics', 'Dyanamics', 20, 'Kg', 20, 'SUGAR', 12, 15, 16, 17, 4, '2016-09-05', 1, 9, 100, 100, 2000, 100, 100, 20, 300, 20, 0, 0, 540, 2540),
(14, 25, '2016-09-05', 'MH 42 H 1023', 'SOLAPUR', 'SOLAPUR', 12, 12, '12', 'Dyanamics', 20, 'Nos.', 200, 'SUGAR', 22, 22, 22, 22, 12, '2016-09-05', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `paddress` varchar(200) NOT NULL,
  `pcity` varchar(20) NOT NULL,
  `pdistrict` varchar(20) NOT NULL,
  `pstate` varchar(50) NOT NULL,
  `ppincode` int(6) NOT NULL,
  `laddress` varchar(200) NOT NULL,
  `lcity` varchar(20) NOT NULL,
  `ldistrict` varchar(20) NOT NULL,
  `lstate` varchar(50) NOT NULL,
  `lpincode` int(6) NOT NULL,
  `pmobile` int(10) NOT NULL,
  `landline` int(11) NOT NULL,
  `pfax` int(11) NOT NULL,
  `pemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `name`, `paddress`, `pcity`, `pdistrict`, `pstate`, `ppincode`, `laddress`, `lcity`, `ldistrict`, `lstate`, `lpincode`, `pmobile`, `landline`, `pfax`, `pemail`) VALUES
(1, 'gsdf', 'sdfg', 'dfg', 'dfgs', 'dfg', 5656, 'dfds', 'fgh', 'fgh', 'fgh', 11111, 11111, 1111, 1111, '54645');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(50) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `purchdate` date NOT NULL,
  `model` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `regno`, `purchdate`, `model`, `company`) VALUES
(1, 'MH 42 H 1023', '2016-08-11', 'TATA', 'TATA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`iid`),
  ADD UNIQUE KEY `ino` (`ino`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `lorryreceipt`
--
ALTER TABLE `lorryreceipt`
  ADD PRIMARY KEY (`lid`),
  ADD UNIQUE KEY `lno` (`lno`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lorryreceipt`
--
ALTER TABLE `lorryreceipt`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
