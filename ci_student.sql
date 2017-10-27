-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 07:12 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll` int(11) NOT NULL,
  `reg` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `sessions` varchar(11) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `blood` varchar(11) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `reg`, `email`, `mobile`, `sessions`, `religion`, `blood`, `birthdate`, `gender`, `dept`, `sem`, `address`, `img`) VALUES
(22, 'Husne Ara', 225570, 551520, 'husneara@gmail.com', '01712345678', '2015-16', 'Islam', 'AB(+)', '1998-01-19', 'Female', 'Textile', '3rd', 'Farabari Thakurgaon', ''),
(23, 'Habib', 300299, 100223, '', '01712345678', '2014-15', 'Islam', '', '1998-05-21', 'Male', 'Mechanical', '5th', 'Tatipara, Thakurgaon', ''),
(24, 'Humayun Kabir', 753159, 159753, 'humayun@gmail.com', '01712345678', '2013-14', 'Hindu', '', '1998-07-18', 'Male', 'Electrical', '3rd', 'Ghoshpara, Thakurgaon', ''),
(21, 'Saju', 800128, 128800, '', 'saju1@gmail.com', '2015-16', 'Islam', 'A(-)', '1998-02-11', 'Male', 'Mechanical', '3rd', 'Sarkarpara, Thakurgaon', 'images/800128.jpg'),
(20, 'Raju', 800741, 769330, 'raju@gmail.com', '01712345678', '2013-14', 'Islam', 'A(+)', '1995-10-11', 'Male', 'Electrical', '4th', 'Thakurgaon Sadar', 'images/800741.jpg'),
(29, 'Shahin', 800765, 768589, '', '01712345678', '2014-15', 'Islam', 'B(+)', '1998-04-19', 'Male', 'Textile', '7th', 'Farabari Thakurgaon', ''),
(19, 'Saiful', 800766, 769331, 'msar.2056@outlook.com', '01712345678', '2014-15', 'Islam', 'O(-)', '1998-03-09', 'Male', 'Computer', '6th', 'Thakurgaon Road ', 'images/800766.jpg'),
(25, 'Sharif', 800779, 777896, 'sharif@gmail.com', '01712345678', '2013-14', 'Islam', 'A(-)', '1997-04-22', 'Male', 'Computer', '5th', 'Ashrampara Thakurgaon', ''),
(27, 'Kulsum', 800780, 789666, 'kulsum@gmail.com', '01712345678', '2013-14', 'Islam', '', '2000-03-14', 'Female', 'Computer', '5th', 'Thakurgaon Road ', ''),
(26, 'Kabir', 800800, 700701, 'kabir@gmail.com', '01712345678', '2013-14', 'Islam', '', '1997-07-13', 'Male', 'Electrical', '7th', 'Shibgonj, Thakurgaon', ''),
(28, 'Anowar', 800802, 700802, '', '01712345678', '2013-14', 'Islam', 'B(+)', '1997-01-13', 'Male', 'Mechanical', '5th', 'Dinajpur Sadar', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `useremail`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`roll`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
