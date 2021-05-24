-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 04:04 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwu`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `announcement` varchar(1000) NOT NULL,
  `date_post` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `announcement`, `date_post`) VALUES
(4, 'MALAPIT NA MATAPOS WAG ATAT HAHAHAHA', '2019-02-07'),
(5, 'BAGSIC tt', '2019-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `college_k12_logo`
--

CREATE TABLE `college_k12_logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(1000) NOT NULL,
  `course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_k12_logo`
--

INSERT INTO `college_k12_logo` (`id`, `logo`, `course`) VALUES
(3, 'pwu.png', 'BSTM'),
(5, 'LOGO OFFICIAL ABM.png', 'ABM'),
(6, 'LOGO OFFICIAL CULINARY.png', 'CULINARY'),
(7, 'LOGO OFFICIAL HRS.png', 'HRS'),
(8, 'LOGO OFFICIAL ICT.png', 'ICT'),
(9, 'LOGO OFFICIAL STEM.png', 'STEM'),
(11, 'LOGO OFFICIAL TOURISM.png', 'TRS');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_name`, `level`, `duration`) VALUES
(1, 'BSIS', 'College', '4y'),
(2, 'BSTM', 'College', '4y'),
(3, 'BSHRM', 'College', '4y'),
(4, 'BSAIS', 'College', '4y'),
(5, 'ACT', 'College', '2y'),
(6, 'STEM', 'Senior High School', '2y'),
(7, 'ABM', 'Senior High School', '2y'),
(8, 'GAS', 'College', '2y'),
(9, 'HRS', 'Senior High School', '2y'),
(10, 'CULINARY', 'Senior High School', '2y'),
(11, 'TRS', 'Senior High School', '2y'),
(12, 'ICT', 'Senior High School', '2y'),
(13, 'HOSPITALITY TECH', 'TESDA', '3y'),
(14, 'TOURISM TECH', 'TESDA', '3y'),
(15, 'PRACTICAL NURSING', 'TESDA', '2y'),
(16, 'CAREGIVING', 'TESDA', '6m');

-- --------------------------------------------------------

--
-- Table structure for table `event_pics`
--

CREATE TABLE `event_pics` (
  `id` int(11) NOT NULL,
  `picture` varchar(1000) NOT NULL,
  `date_posted` date NOT NULL,
  `caption` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_pics`
--

INSERT INTO `event_pics` (`id`, `picture`, `date_posted`, `caption`) VALUES
(3, 'DSC_2649.JPG', '2019-02-26', 'taruc'),
(5, '58445078_331330477581249_9181353968071081984_n.jpg', '2019-05-15', 'HAHAHHAHA'),
(6, '489880.jpg', '2019-05-23', '');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `fac_id` int(11) NOT NULL,
  `fac_content` varchar(1000) NOT NULL,
  `fac_caption` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`fac_id`, `fac_content`, `fac_caption`) VALUES
(2, '292875_happy-fairy-tail-wallpaper.jpg', 'fairytails neko'),
(3, 'close-up-colors-concrete-2053903.jpg', 'TASTE');

-- --------------------------------------------------------

--
-- Table structure for table `fac_chart`
--

CREATE TABLE `fac_chart` (
  `id` int(11) NOT NULL,
  `fac_img` varchar(1000) NOT NULL,
  `department` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_chart`
--

INSERT INTO `fac_chart` (`id`, `fac_img`, `department`) VALUES
(1, 'college.jpg', 'college'),
(2, 'shs.jpg', 'Shs');

-- --------------------------------------------------------

--
-- Table structure for table `org_pres`
--

CREATE TABLE `org_pres` (
  `id` int(11) NOT NULL,
  `org_pic` varchar(1000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `course` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `org_pres`
--

INSERT INTO `org_pres` (`id`, `org_pic`, `name`, `course`) VALUES
(7, 'marevilla.png', 'marevillas', 'BSTM'),
(8, 'received_1678915125575482.jpeg', 'riggs', 'BSTM');

-- --------------------------------------------------------

--
-- Table structure for table `prom_vid`
--

CREATE TABLE `prom_vid` (
  `id` int(11) NOT NULL,
  `vids` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prom_vid`
--

INSERT INTO `prom_vid` (`id`, `vids`) VALUES
(2, 'Powtoon title defense.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(1) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `mname`, `lname`, `username`, `password`) VALUES
(2, 'Admin', 'A', 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college_k12_logo`
--
ALTER TABLE `college_k12_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_pics`
--
ALTER TABLE `event_pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `fac_chart`
--
ALTER TABLE `fac_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `org_pres`
--
ALTER TABLE `org_pres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prom_vid`
--
ALTER TABLE `prom_vid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `college_k12_logo`
--
ALTER TABLE `college_k12_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `event_pics`
--
ALTER TABLE `event_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fac_chart`
--
ALTER TABLE `fac_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `org_pres`
--
ALTER TABLE `org_pres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prom_vid`
--
ALTER TABLE `prom_vid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
