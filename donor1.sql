-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 05:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor1`
--

-- --------------------------------------------------------

--
-- Table structure for table `donorinfo`
--

CREATE TABLE `donorinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `age` int(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Contact_number` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `Covid19_affected` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorinfo`
--

INSERT INTO `donorinfo` (`id`, `name`, `Date_of_birth`, `age`, `bloodgroup`, `gender`, `Contact_number`, `email`, `address`, `Covid19_affected`) VALUES
(4, 'Mursalin Amin', '2001-03-05', 19, 'O+', 'Male', '+8801978654789', 'mursalin@gmail.com', 'Mohammadpur,Dhaka', 'Negative'),
(8, 'Jannatul Ferdous', '1994-03-02', 27, 'A-', 'Female', '+8801897564567', 'jannatul@gmail.com', 'Basabo,Dhaka', 'Negative'),
(11, 'Mustakim Ferdous', '1995-06-28', 26, 'A-', 'Male', '+8801897563425', 'mustakim@gmail.com', 'Savar,Dhaka', 'Positive'),
(13, 'Irin Akter', '1991-09-10', 30, 'B+', 'Female', '+8801456709891', 'irin@gmail.com', 'Mymensingh', 'Positive'),
(14, 'Jesmin Akter', '1991-11-21', 30, 'B-', 'Female', '+8801987653456', 'jesmin@gmail.com', 'Gazipur', 'Negative'),
(16, 'Aminul Haque', '1986-03-08', 35, 'O+', 'Male', '+8801345789456', 'aminul@gmail.com', 'Tikatuli,Dhaka', 'Negative'),
(18, 'Arshad Ali', '1986-04-19', 35, 'O-', 'Male', '+8801894567800', 'arshad@gmail.com', 'Mohammadpur,Dhaka', 'Negative'),
(19, 'Samiha Islam', '2001-05-16', 20, 'AB+', 'Female', '+8801890876545', 'samiha@gmail.com', 'Savar,Dhaka', 'Negative'),
(21, 'Zabir Ahmed', '2000-06-12', 21, 'AB+', 'Male', '+8801348790876', 'zabir@gmail.com', 'Dhanmondi,Dhaka', 'Negative'),
(22, 'Samira Alam', '1999-12-30', 22, 'AB+', 'Female', '+8801987564567', 'esha@gmail.com', 'Gopibag,Dhaka', 'Negative'),
(23, 'Rakibul Hasan', '1994-02-09', 27, 'AB-', 'Male', '+8801567845678', 'rakib@gmail.com', 'Rangpur', 'Negative'),
(25, 'Abir Mahmud', '2002-07-27', 19, 'AB+', 'Male', '+8801987452345', 'abir@gmail.com', 'Rangpur', 'Negative'),
(26, 'Sumaiya Mahmud', '1997-01-31', 24, 'AB-', 'Female', '+8801965345672', 'sumaiya@gmail.com', 'Tangail', 'Negative'),
(27, 'Natasha Abedin', '1996-10-22', 25, 'AB-', 'Female', '+8801978563425', 'natasha@gmail.com', 'Narayanganj', 'Negative'),
(38, 'Maksuda Begum', '1986-03-03', 35, 'O+', 'Female', '+8801678956768', 'maksuda@gmail.com', 'Adabor,Dhaka', 'Negative'),
(39, 'Masuma Sultana', '1985-09-04', 36, 'B+', 'Female', '+8801890764560', 'masuma@gmail.com', 'Khilgaon,Dhaka', 'Negative'),
(40, 'Afrin Jahan Eva', '1999-05-31', 22, 'A-', 'Female', '+8801895367834', 'eva@gmail.com', 'Savar,Dhaka', 'Negative'),
(42, 'Jewel Mohammad', '1986-08-21', 35, 'A-', 'Male', '+8801426789098', 'jewel@gmail.com', 'Mirpur,Dhaka', 'Negative'),
(43, 'Md Sahal', '2000-03-09', 21, 'B+', 'Male', '+8801567856789', 'sahal@gmail.com', 'Khilgaon,Dhaka', 'Negaive'),
(44, 'Abrar Ali', '2003-01-31', 18, 'B-', 'Male', '+8801987456790', 'abrar@gmail.com', 'Adabor,Dhaka', 'Negative'),
(46, 'Sumaiya Binte Shahid', '2000-11-17', 21, 'AB-', 'Female', '+8801768945673', 'sumaiya@gmail.com', 'Tangail', 'Negative'),
(47, 'Rabita Amin', '2000-06-26', 21, 'O+', 'Female', '+8801967894567', 'rabita@gmail.com', 'Shekhertek,Dhaka', 'Negative'),
(48, 'Aminul Islam', '1990-02-15', 31, 'B+', 'Male', '+8801986754566', 'aminul@gmail.com', 'Dhaka', 'Positive'),
(49, 'Samia amin', '1990-04-28', 31, 'A+', 'Female', '+8801456745635', 'samia@gmail.com', 'Savar,Dhaka', 'Positive'),
(50, 'Wahida Tasnim', '1989-05-27', 32, 'A+', 'Female', '+8801923674537', 'wahida@gmail.com', 'Gopibag,Dhaka', 'Negative'),
(51, 'Israt Adrita', '1990-06-14', 31, 'A+', 'Female', '+8801786543287', 'israt@gmail.com', 'Motijheel,Dhaka', 'Negative'),
(52, 'Tasmia Sultana', '1990-08-25', 31, 'A+', 'Female', '+8801452678935', 'sa@gmail.com', 'Dhaka', 'Negative'),
(54, 'Rafi Alam', '1996-10-11', 25, 'AB-', 'Male', '+8801987456378', 'rafi@gmail.com', 'Rajshahi', 'Negative'),
(55, 'Kazi Hasibur Rahman', '1995-05-22', 26, 'AB+', 'Male', '+8801789674523', 'hasib@gmail.com', 'Shylet', 'Negative'),
(56, 'Masum Haque', '1980-12-12', 41, 'A-', 'Male', '+8801789765426', 'masum@gmail.com', 'Khulna', 'Negative'),
(58, 'Anika Tasnim', '2002-02-17', 18, 'AB-', 'Female', '+8801764537689', 'anikat@gmail.com', 'Gopibag,Dhaka', 'Positive'),
(60, 'Sania Rahman Sheikh', '2001-02-10', 20, 'A+', 'Female', '+8801987564567', 'sania@gmail.com', 'Dhanmondi,Dhaka', 'Positive'),
(63, 'Rezwan Ahmed', '1995-08-10', 26, 'A+', 'Male', '+8801676345278', 'rezwan@gmail.com', 'Dhanmondi,Dhaka', 'Positive'),
(64, 'Marsia Binte Mahbub', '1990-12-10', 30, 'O-', 'Female', '+8801987567849', 'marsia@gmil.com', 'Mohammadpur,Dhaka', 'Negative'),
(67, 'Tanjima Tonny', '1980-01-10', 41, 'O-', 'Female', '+8801987563456', 'tanjima@gmail.com', 'Tikatuli,Dhaka', 'Positive'),
(68, 'rr', '2000-02-10', 21, 'A+', 'Male', '+8801987456789', 'ratri@gmail.com', 'Dhaka', 'negative'),
(69, 'samira', '2005-02-10', 15, 'A+', 'Female', '+8801967563456', 'sam@gmail.com', 'Dhaka', 'negative'),
(70, 'S Alam', '2021-09-08', 35, 'A+', 'Female', '+8801978564367', 's@gmail.com', 'dhaka', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` varchar(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `D.O.B` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Blood Group` varchar(10) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Name`, `Email`, `D.O.B`, `Gender`, `Blood Group`, `Address`, `City`, `Mobile`) VALUES
('1761', 'Afrin Jahan Eva', 'afrineva@gmail.com', '1999-12-28', 'Female', 'A+', 'C.R.P,Savar', 'Dhaka', 1987564323),
('1767', 'Rabita Amin', 'rabita@gmail.com', '1999-06-26', 'Female', 'O+', 'Shekhertek,Mohammadpur', 'Dhaka', 1976456789),
('1785', 'Md Sahal', 'sahal@gmail.com', '1999-06-28', 'Male', 'B+', 'Khilgaon', 'Dhaka', 1567849087),
('', 'Taneir Arani', 'arani@gmail.com', '21-10-1999', 'Female', 'A+', 'Mirpur:01', 'Dhaka', 1987456789);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` varchar(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `D.O.B` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Blood Group` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Mobile` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `Name`, `Email`, `D.O.B`, `Gender`, `Blood Group`, `Address`, `City`, `Mobile`) VALUES
('1761', 'Afrin Jahan Eva', 'afrineva@gmail.com', '1999-12-28', 'Female', 'A+', 'C.R.P,Savar', 'Dhaka', 1878653478),
('1767', 'Rabita Amin', '1767', '1999-06-26', 'Female', 'O+', 'Shekhertek,Mohammadpur', 'Dhaka', 1786456734),
('1785', 'Md Sahal', 'sahal@gmail.com', '1999-06-28', 'Male', 'B+', 'Khilgaon', 'Dhaka', 1578945673);

-- --------------------------------------------------------

--
-- Table structure for table `newdonor`
--

CREATE TABLE `newdonor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Contact_number` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newdonor`
--

INSERT INTO `newdonor` (`id`, `name`, `age`, `bloodgroup`, `gender`, `Contact_number`, `email`, `address`) VALUES
(1, 'ssssss', 0, '', '', 0, '', ''),
(2, '', 0, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `id` int(10) NOT NULL,
  `name` varchar(60) NOT NULL,
  `Date_of_birth` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bloodgroup` varchar(60) NOT NULL,
  `Contact_number` varchar(14) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Covid19_affected` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`id`, `name`, `Date_of_birth`, `age`, `gender`, `bloodgroup`, `Contact_number`, `address`, `Covid19_affected`) VALUES
(1, 'Murshid Ali', '05.10.1997', 24, 'Male', 'A-', '+8801978653456', 'Khilgaon,Dhaka', 'Negative'),
(2, 'Marzia Mahabub', '12.12.1986', 35, 'Female', 'A-', '+8801567835674', 'Mohammadpur,Dhaka', 'Negative'),
(3, 'Masuma Sultana', '01.06.1990', 31, 'Female', 'B+', '+8801976853467', 'Narayanganj', 'Negative'),
(4, 'Saidur Rahman', '03.08.1980', 41, 'Male', 'A+', '+8801767845632', 'Dhanmondi,Dhaka', 'Negative'),
(5, 'Tahmina Amin', '03.09.1985', 36, 'Female', 'B-', '+8801578490367', 'Dhanmondi,Dhaka', 'Negative'),
(6, 'Abrar Ali', '24.04.1990', 31, 'Male', 'A-', '+8801768490936', 'Adabor,Dhaka', 'Positive'),
(7, 'Enamul Haque', '10.12.1985', 35, 'Male', 'A+', '+8801897563467', 'Gopibag,Dhaka', 'Positive'),
(10, 'Shahin Dewan', '12.08.1980', 41, 'Male', 'AB-', '+8801978653452', 'Tikatuli,Dhaka', 'Positive'),
(11, 'Mursalin Amin', '05.06.1990', 30, 'Male', 'AB-', '+8801676543456', 'Tangail', 'Negative'),
(12, 'Wahida Tasnim', '12.02.1990', 31, 'Female', 'A+', '+8801678984567', 'Dhaka', 'Positive'),
(14, 'Wahida Tasnim', '25.03.1998', 21, 'Female', 'B+', '+8801786458367', 'Gopibag,Dhaka', 'Negative'),
(15, 'Wahida Tasnim', '25.03.1998', 21, 'Female', 'B+', '+8801786458367', 'Gopibag,Dhaka', 'Negative'),
(16, 'Samira Alam', '15.02.1997', 22, 'Female', 'AB-', '+8801987567434', 'Barishal', 'Negative'),
(17, 'Samira Alam', '15.02.1997', 22, 'Female', 'AB-', '+8801987567434', 'Barishal', 'Negative'),
(18, 'Israt Jahan', '12.03.1990', 31, 'Female', 'AB-', '+8801789086754', 'Mohammadpur,Dhaka', 'Negative'),
(19, 'Israt Jahan', '12.03.1990', 31, 'Female', 'AB-', '+8801789086754', 'Mohammadpur,Dhaka', 'Negative');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donorinfo`
--
ALTER TABLE `donorinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newdonor`
--
ALTER TABLE `newdonor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donorinfo`
--
ALTER TABLE `donorinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `newdonor`
--
ALTER TABLE `newdonor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `receiver`
--
ALTER TABLE `receiver`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
