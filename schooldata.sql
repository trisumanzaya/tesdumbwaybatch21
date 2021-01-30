-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2021 at 03:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldata`
--

-- --------------------------------------------------------

--
-- Table structure for table `school_tb`
--

CREATE TABLE `school_tb` (
  `id` int(11) NOT NULL,
  `NPSN` varchar(100) NOT NULL,
  `name_school` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `logo_school` varchar(1000) NOT NULL,
  `school_level` varchar(100) NOT NULL,
  `status_school` varchar(200) NOT NULL,
  `user_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_tb`
--

INSERT INTO `school_tb` (`id`, `NPSN`, `name_school`, `address`, `logo_school`, `school_level`, `status_school`, `user_id`) VALUES
(1, '10800707', 'SMAN 1 Natar', 'JL. DAHLIA III NATAR', 'https://sman1natar.sch.id/media_library/image_sliders/6a0e4c30054cca786e8f8247716cc36e.png', 'A', 'Negri', '1'),
(2, '10807020', 'SMAN 1 BANDAR LAMPUNG', 'JL.JENDERAL SUDIRMAN NO.41', 'https://upload.wikimedia.org/wikipedia/commons/2/2f/Logo_Smansa2.png', 'A', 'Negri', '2'),
(3, '10806686', 'SMP N 1 BARADATU', 'Jl. Gajah Mada No. 25', 'https://s.sim.siap-online.com//upload/sekolah/10806686.150330195159.png', 'A', 'Negri', '3'),
(4, '10810288', 'YADIKA', 'JL. SITARA NO. 84 MUARA PUTIH, Muara Putih, Kec. Natar, Kab. Lampung Selatan Prov. Lampung', 'https://lh3.googleusercontent.com/proxy/Bdj6x0Q1LnPQ3djz3FtWRAfJhcNK4ShvFh_O4Lzj39y-7LfvtIQBvf5J_XQkCzdTMxuWHp34OLvbf_j_xh528rVvDl7P45wfNxX1L3_CoXyk', 'B', 'Swasta', '4');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'depri', 'depri@gmail.com', '12345678'),
(2, 'imam ', 'iman@gmail.com', 'asdfghjk'),
(3, 'tri', 'tri@gmail.com', '87654321'),
(4, 'yoga', 'yoga@gmail.com', 'zxcvbnm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `school_tb`
--
ALTER TABLE `school_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `school_tb`
--
ALTER TABLE `school_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
