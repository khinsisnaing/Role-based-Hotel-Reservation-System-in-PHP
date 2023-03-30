-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 05:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksn_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(15) NOT NULL,
  `guest_id` int(15) NOT NULL,
  `room_id` int(15) NOT NULL,
  `bookingdate` datetime NOT NULL,
  `reservedate` date NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `total` int(15) NOT NULL,
  `discount` int(15) NOT NULL,
  `prepaid` int(15) NOT NULL,
  `remainprice` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `guest_id`, `room_id`, `bookingdate`, `reservedate`, `checkin`, `checkout`, `total`, `discount`, `prepaid`, `remainprice`) VALUES
(1, 1, 8, '2022-09-14 12:16:00', '2022-09-22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 10000, 0),
(3, 3, 6, '2022-09-22 09:10:00', '2022-09-30', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(15) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_nrc` varchar(100) NOT NULL,
  `guest_dob` date NOT NULL,
  `guest_gender` varchar(10) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_phone` bigint(15) NOT NULL,
  `guest_address` text NOT NULL,
  `adult` int(5) NOT NULL,
  `child` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `guest_name`, `guest_nrc`, `guest_dob`, `guest_gender`, `guest_email`, `guest_phone`, `guest_address`, `adult`, `child`) VALUES
(1, 'Moe Moe', '', '0000-00-00', '', '', 94307080666, '', 0, 0),
(3, 'Htut Khaung', '', '0000-00-00', '', '', 998887711, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(15) NOT NULL,
  `booking_id` int(15) NOT NULL,
  `guest_id` int(15) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_nrc` varchar(100) NOT NULL,
  `guest_phone` bigint(20) NOT NULL,
  `room_no` int(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_price` int(15) NOT NULL,
  `prepaid` int(15) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `subtotal` int(15) NOT NULL,
  `discount` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `booking_id`, `guest_id`, `guest_name`, `guest_nrc`, `guest_phone`, `room_no`, `room_type`, `room_price`, `prepaid`, `checkin`, `checkout`, `subtotal`, `discount`, `total`) VALUES
(1, 2, 2, 'Zaw Zaw', '12233', 9887766, 102, 'Single Room ', 35000, 15000, '2022-10-27 10:38:00', '2022-10-28 10:38:00', 20000, 0, 20000),
(2, 5, 5, 'Khin', '345678%^&222', 12121212, 101, 'Single Room ', 35000, 1000, '2022-11-25 13:23:00', '2022-11-26 22:24:00', 34000, 0, 33999);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(15) NOT NULL,
  `room_no` varchar(10) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `room_price` int(15) NOT NULL,
  `room_max` int(5) NOT NULL,
  `room_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_type`, `room_price`, `room_max`, `room_description`) VALUES
(1, '101', 'Single Room ', 35000, 2, 'Two Single Beds'),
(2, '102', 'Single Room ', 35000, 2, 'Two Single Beds'),
(3, '103', 'Double Room', 35000, 2, 'One Double Bed'),
(4, '104', 'Double Room', 35000, 2, 'One Double Bed'),
(5, '105', 'Single Room ', 35000, 2, 'Two Single Beds'),
(6, '106', 'Single Room', 35000, 2, 'Two Single Beds'),
(7, '107', 'Double Room', 35000, 2, 'One Double Bed'),
(8, '108', 'Double Room', 35000, 2, 'One Double Bed'),
(9, '109', 'Family Room', 40000, 4, 'One Double Bed, Two Single Beds'),
(10, '110', 'Family Room ', 40000, 4, 'Four Single Beds'),
(11, '201', 'Deluxe Single Room', 43000, 2, 'Two Single Beds'),
(12, '202', 'Deluxe Single Room', 43000, 2, 'Two Single Beds'),
(13, '203', 'Deluxe Double Room', 43000, 3, 'One Double Bed'),
(14, '204', 'Deluxe Double Room', 43000, 3, 'One Double Bed'),
(15, '205', 'Deluxe Single Room', 43000, 2, 'Two Single Beds'),
(16, '206', 'Deluxe Single Room', 43000, 2, 'Two Single Beds'),
(17, '207', 'Deluxe Double Room', 43000, 3, 'One Double Bed'),
(18, '208', 'Deluxe Double Room', 43000, 3, 'One Double Bed'),
(19, '209', 'Deluxe Family Room', 50000, 5, 'One Double Bed, Two Single Beds'),
(20, '210', 'Deluxe Family Room', 50000, 5, 'Four Single Beds'),
(21, '301', 'Super Deluxe Room 1', 65000, 3, 'King Mattress Size Bed, Great View, Buffet Dinner'),
(22, '302', 'Super Deluxe Room 2', 65000, 3, 'King Mattress Size Bed, Great View, Buffet Dinner'),
(23, '303', 'Super Deluxe Room 3', 63000, 3, 'Queen Mattress Size Bed, Great View, Buffet Dinner'),
(24, '304', 'Super Deluxe Room 4', 63000, 3, 'Queen Mattress Size Bed, Great View, Buffet Dinner'),
(25, '305', 'Super Deluxe Room 5', 59000, 2, 'Two Single Beds, Great View'),
(26, '306', 'Super Deluxe Room 6', 59000, 2, 'Two Single Beds, Great View'),
(27, '307', 'Super Deluxe Room 7', 59000, 3, 'One Double Bed, Great View'),
(28, '308', 'Super Deluxe Room 8', 59000, 3, 'One Double Bed, Great View');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(15) NOT NULL,
  `staff_name` varchar(100) NOT NULL,
  `staff_nrc` varchar(100) NOT NULL,
  `staff_dob` date NOT NULL,
  `staff_gender` varchar(10) NOT NULL,
  `staff_address` text NOT NULL,
  `staff_phone` bigint(100) NOT NULL,
  `staff_role` varchar(20) NOT NULL,
  `staff_salary` int(15) NOT NULL,
  `staff_workinghr` varchar(30) NOT NULL,
  `staff_entry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `staff_nrc`, `staff_dob`, `staff_gender`, `staff_address`, `staff_phone`, `staff_role`, `staff_salary`, `staff_workinghr`, `staff_entry`) VALUES
(1, 'Khin Khin', '1/ThaTha(N)189877', '2000-08-14', 'Female', 'Taungoo', 988898889, 'Manager', 1000000, 'Morning Shift', '2016-07-23'),
(2, 'Danny Simmons', 'AA775-67-5887', '1982-11-27', 'Male', 'Kalaw', 959342410851, 'Guard', 250000, 'Morning Shift', '2020-05-13'),
(3, 'Aisha Roth', '123454444#$%', '1999-03-12', 'Female', 'Kalaw', 9888161753, 'Housekeeper', 200000, 'Evening Shift', '2019-05-23'),
(4, 'Jimmy', '12345#$%JJ', '1998-02-13', 'Male', 'Bagan', 977766661, 'Receptionist', 400000, 'Night Shift', '2019-05-12'),
(5, 'Lwin Lwin', 'AD633-86-3515', '1997-04-17', 'Female', 'Kalaw', 95944555671, 'Receptionist', 400000, 'Evening Shift', '2018-03-31'),
(6, 'Zin Zin', 'SD181-57-5685', '1999-07-23', 'Female', 'Mandalay', 95988775544, 'Receptionist', 300000, 'Morning Shift', '2022-09-15'),
(7, 'Yi Win', 'YY676-43-2613', '1986-07-23', 'Female', 'Ywa Ngan', 988888666661, 'Housekeeper', 300000, 'Morning Shift', '2019-05-23'),
(8, 'Wai Wai', '353-46-5881', '1990-06-12', 'Female', 'Kalaw', 976767633, 'Housekeeper', 300000, 'Night Shift', '2018-07-12'),
(9, 'Kyaw Kyaw', 'KKW795-67-55687', '1993-09-08', 'Male', 'Kalaw', 98863362, 'Guard', 250000, 'Evening Shift', '2020-04-12'),
(10, 'Min Kyaw', 'MK677-999-0', '1989-05-05', 'Male', 'Kalaw', 9755666423, 'Guard', 250000, 'Night Shift', '2020-06-23'),
(11, 'Yazar', 'YY12345#$%', '1989-04-12', 'Male', 'Kalaw', 9598877712, 'Worker', 300000, 'Morning Shift', '2018-07-15'),
(12, 'Thiha', 'TH876-44-6558', '1989-12-23', 'Male', 'Kalaw', 988988267, 'Worker', 300000, 'Evening Shift', '2018-07-31'),
(13, 'Myat Kyaw', '014-22-7658MK', '1990-11-07', 'Male', 'Kalaw', 9647778002, 'Worker', 300000, 'Night Shift', '2018-08-08'),
(14, 'Maung Maung', '531-33-1203MG', '1991-09-09', 'Male', 'Kalaw', 977788446, 'Worker', 300000, '1', '2019-08-23'),
(15, 'Aye Thandar', 'ATT478-23-7071', '1995-05-07', 'Female', 'Kalaw', 971235092, 'Housekeeper', 200000, '1', '2020-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `role`, `created_date`) VALUES
(1, 'ksn', 'khin@gmail.com', 'khinmanager148', 'Manager', '2022-07-25 09:59:27'),
(3, 'jimmy', 'jimmy@gmail.com', 'jimmyreceptionist@123', 'Receptionist', '2022-07-25 09:33:49'),
(4, 'khin', 'khin@gmail.com', 'khin', 'Manager', '2022-07-25 10:21:08'),
(5, 'Lwin Lwin', 'lwin@gmail.com', 'lwin', 'Receptionist', '2022-07-25 10:22:00'),
(6, 'Zin Zin', 'zinzintesting@gmail.com', 'zinzintesting', 'Receptionist', '2022-09-27 23:17:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
