-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 02:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `massage`) VALUES
(1, 'tanzir', 'tanzirnur@gmail.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(2, 'masum billah', 'user@gmail.com', 'Investment', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour'),
(3, 'Computer', 'user@gmail.com', 'Bussiness planing', 'I agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planing'),
(4, 'Computer', 'admin@idbbisew.com', 'Investment Planing', 'I agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planing'),
(5, 'Computer', 'admin@idbbisew.com', 'Investment Planing', 'I agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planing'),
(6, 'Computer', 'admin@idbbisew.com', 'Investment Planing', 'I agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planing'),
(7, 'toyata002', 'admin@idbbisew.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(8, 'toyata002', 'admin@idbbisew.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(9, 'toyata002', 'admin@idbbisew.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(10, 'toyata002', 'admin@idbbisew.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(11, 'toyata002', 'admin@idbbisew.com', 'Bussiness planing', 'I agree with you shareing my buessness planing'),
(12, 'Tanzir ', 'tanzir0167@gmail.com', 'Investment Planing', 'I agree with you shareing my buessness pl aningI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planingI agree with you shareing my buessness planing');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fathers_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mothers_name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `village` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_office1` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_brith` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `fathers_name`, `mothers_name`, `village`, `post_office1`, `gender`, `date_of_brith`, `thana`, `district`, `blood_group`, `qualification`, `phone`, `email`, `amount1`, `image`) VALUES
(14, 'Md.Nur-E-Alam', 'Md.Abdul Aziz', 'Nilufa Yeasmin', 'Upadi North', 'Boalia', 'Man', '1992-01-05', 'Matlab', 'Chandpur', 'O+', 'MBA', '01674437137', 'tanzirnur@gmail.com', '45000', 'IMG_0572.JPG'),
(15, 'Abdul Baten', 'Monir Bokaul', 'xyz', 'Upadi North', 'Boalia', 'Man', '2019-01-15', 'Matlab', 'Chandpur', 'O+', 'Degree', '01811329282', 'baten@gmail.com', '50000', 'FB_IMG_1546623675361.jpg'),
(16, 'Rinku Karmakar', 'xyz karmakar', 'xyz', 'Upadi North', 'Boalia', '', '2019-01-08', 'Matlab', 'Chandpur', 'O+', 'Mastras', '016744', 'rinku@gmail.com', '50000', 'FB_IMG_1546623594557.jpg'),
(17, 'Anower Miazi', 'Md.Abdul Khair', 'Zaheda Begum', 'Uppadi Daksin', 'Boalia', 'Man', '2019-01-08', 'Matlab', 'Chandpur', 'B+', 'Mastras', '01824449529', 'miazianower79@gmail.com', '50000', 'FB_IMG_1546624241655.jpg'),
(18, 'Ibrahim Hossian', 'Shirajul Islam', 'Honofa Begum', 'Poilpara', 'Matlab', 'Man', '2019-01-08', 'Matlab', 'Chandpur', 'a+', 'MBA', '01684246589', 'ibrahimhossian@gmail.com', '52000', 'FB_IMG_1546624179313.jpg'),
(19, 'Tarequl Islam', 'Abdul Aziz', 'Nilufa Yeasmin', 'Upadi North', 'Boalia', 'Man', '2019-01-01', 'Matlab', 'Chandpur', 'O+', 'BBA', '01684076507', 'tuhin@gmail.com', '52000', 'FB_IMG_1546624329260.jpg'),
(20, 'Abdul Mannan          ', 'Abdul Jabbar', 'Kulsoma', 'Upadi North', 'Boalia', '', '2019-01-08', 'Matlab', 'Chandpur', 'B+', 'S.S.C', '01859740741', 'mannan@gmail.com', '50000', 'FB_IMG_1546624203315.jpg'),
(21, 'Shakil Miazi', 'Solayman Miazi', 'aysha Begum', 'Upadi North', 'Boalia', 'Man', '2019-01-08', 'Matlab', 'Chandpur', 'B+', 'MBA', '0185679482', 'shakilahamad@gmail.com', '50000', 'FB_IMG_1546629651729.jpg'),
(22, 'Shakil 2', 'Ahamed Ali', 'Josna Banu', 'Upadi North', 'Boalia', 'Man', '2019-01-08', 'Matlab', 'Chandpur', 'a+', 'H.S.C', '0185976842', 'sakil@gmail.com', '50000', 'FB_IMG_1546623954852.jpg'),
(23, 'Hossian Ahamad', 'Monir Hossian', 'Josna Banu', 'Upadi North', 'Boalia', 'Man', '2019-01-03', 'Matlab', 'Chandpur', 'B+', 'S.S.C', '168794588', 'hossainahamed@gmail.com', '50000', 'FB_IMG_1546624148900.jpg'),
(25, 'BM Al-Amin', 'Abul Bashar', 'Ranu Begum', 'Donarpar', 'Matlab', 'Man', '2019-01-15', 'Matlab', 'Chandpur', 'O+', 'Degree', '01913601437', 'Alaminsvafl@gmail.com', '50000', 'FB_IMG_1546623749968.jpg'),
(32, 'Fuad Hasan', 'Mostofa Miazi', 'Ranu Begum', 'Upadi', 'Boalia', 'Man', '2019-01-09', 'Matlab', 'Chandpur', 'O+', 'Diploma', '01913601437', 'fauad@gmail.com', '50000', 'FB_IMG_1546623714565.jpg'),
(33, 'Sharif Prodan', 'Abul Bashar', 'Ranu Begum', 'Bohori', 'Boalia', 'Man', '2019-01-23', 'Matlab', 'Chandpur', 'B+', 'Degree', '01913601437', 'sarif@gmail.com', '50000', 'FB_IMG_1546624049144.jpg'),
(34, 'Robel Hossain', 'abul hasan', 'Josna Banu', 'Upadi', 'Boalia', 'Man', '2019-01-09', 'Matlab', 'Chandpur', 'O+', 'Degree', '01859740741', 'robule@gmail.com', '50000', 'FB_IMG_1546624073634.jpg'),
(35, 'Parbez Miazi', 'Mostofa Miazi', 'Ranu Begum', 'Upadi North', 'Boalia', 'Man', '2019-01-22', 'Matlab', 'Chandpur', 'B+', 'Diploma', '01913601437', 'parvez@gmail.com', '50000', 'FB_IMG_1546623772819.jpg'),
(36, 'Shoel Mal', 'abul hasan', 'xyz', 'Upadi North', 'Boalia', 'Man', '2019-01-15', 'Matlab', 'Chandpur', 'O+', 'Degree', '01913601437', 'shohel@gmail.com', '50000', 'FB_IMG_1546624291130.jpg'),
(37, 'Jabbar Jowel', 'Akbar Ali', 'Shayra Banu', 'Uppadi Daksin', 'Boalia', 'Man', '2019-01-15', 'Matlab', 'Chandpur', 'B+', 'S .S .C.', '01859740741', 'jabbarjowel@gmail.com', '50000', 'FB_IMG_1546624015352.jpg'),
(38, 'Jowel Molla', 'Monir Hossian', 'Ranu Begum', 'Uppadi Daksin', 'Boalia', 'Man', '2019-01-10', 'Matlab', 'Chandpur', 'O+', 'MBA', '01913601437', 'jowelmolla@gmail.com', '50000', 'FB_IMG_1546624118593.jpg'),
(39, 'Abdul Baten 2', 'Monir Hossian', 'Ranu Begum', 'Upadi North', 'Boalia', 'Man', '2019-01-16', 'Matlab', 'Chandpur', 'O+', 'Degree', '01811329282', 'baten@gmail.com', '45000', 'FB_IMG_1546623675361.jpg'),
(40, 'Rinku Karmakar 2', 'xyz Karmakar 2', 'xyz 2', 'Uppadi Daksin', 'Boalia', 'Man', '2019-01-15', 'Matlab', 'Chandpur', 'a+', 'Mastras', '01913601437', 'rinku@gmail.com', '50000', 'FB_IMG_1546623594557.jpg'),
(41, 'Anower Miazi 2', 'Abul Bashar', 'Josna Banu', 'Uppadi Daksin', 'Boalia', 'Man', '2019-01-02', 'Matlab', 'Chandpur', 'B+', 'Mastras', '01913601437', 'anowerhossain@gmail.com', '45000', 'FB_IMG_1546624241655.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
