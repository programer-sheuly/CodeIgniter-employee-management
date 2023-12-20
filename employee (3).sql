-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 10:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `dep_name`) VALUES
(1, 'database Department'),
(4, 'Web Development'),
(7, 'Net Work '),
(9, 'JAVA Department'),
(11, 'Python'),
(12, 'PhP'),
(13, 'Laravel');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee-id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee-email` varchar(45) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(400) NOT NULL,
  `department` varchar(60) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `leave_from` varchar(50) NOT NULL,
  `leave_to` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `name`, `image`, `department`, `reason`, `leave_from`, `leave_to`, `status`, `description`) VALUES
(1, 'Ratan', '1697702196_c79df7b8368c84b5eb5a.webp', 'NetWork', 'illness', '05/12/2023', '10/12/2023', 'Rejected', 'this is ratans file'),
(2, 'Ratan', '1697702177_eba5607cf67d2ccb6a8a.jpg', 'NetWork', 'illness', '05/12/2023', '10/12/2023', 'Approved', 'this is ratans file'),
(4, 'sheuly', '1697637029_c6232c6e991579558bdb.png', 'C#', 'for illness', '13/10/2023', '10/12/2023', 'Approved', 'fy7ifrtyifytujif'),
(5, 'Ali Ahsan', '1697646733_fd7ccc21d0fdf75ed868.png', 'Larabel ', 'for illness', '01/06/2023', '05/06/2023', 'Approved', 'for illness ali is not attend'),
(6, 'rahim', '1697702346_cb7426aa65fa26cd31a2.webp', 'Java', 'for illness', '15/07/2023', '20/07/2023', 'Rejected', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-10-08-043727', 'App\\Database\\Migrations\\CreateEmployeeTable', 'default', 'App', 1696740820, 1),
(3, '2023-10-10-062056', 'App\\Database\\Migrations\\CreatDepartmentTable', 'default', 'App', 1696919469, 2);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `department` varchar(40) NOT NULL,
  `image` varchar(150) NOT NULL,
  `basic_salary` varchar(100) NOT NULL,
  `allowance` varchar(100) NOT NULL,
  `total_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `employee_name`, `department`, `image`, `basic_salary`, `allowance`, `total_salary`) VALUES
(5, 'Mosharrof', 'PhP', '1697637152_915373fbd116ae443c64.jpg', '25000', '1000', '26000'),
(6, 'Rahim', 'Python', '1697694794_c3a551c2884330eebcef.jpg', '20000', '2000', '22000'),
(7, 'Jahid', 'PhP', '1697701537_27925f7cd876e180f1b4.jpg', '23000', '2000', '25000'),
(8, 'sheuly', 'PhP', '1697700711_24ee43a962de5d449b55.webp', '20000', '2000', '22000');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Joining` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `image`, `email`, `department`, `address`, `Joining`) VALUES
(1, 'sheuly', '1697701796_b29d68d56a604650e24b.png', 'sheuly@gmail.com', 'wdpf', 'dhaka', '16/05/2023'),
(2, 'dfhrfg', '1697701771_3c3852ae5b6ba1df18f3.jpg', 'sheuly@gmail.com', 'wdpf', 'dhaka', '10/04/2023'),
(3, 'Mosharrof', '1697701738_2d89fbffe6bc8f619a1f.jpg', 'mosha@gmail.com', 'PhP', 'Rongpur', '05/06/2023'),
(4, 'Rahim', '1697701726_91d5f0a03d2219b0e38a.webp', 'rahim@gmail.com', 'Database', 'Mirpur', '17/05/2023'),
(5, 'karim', '1697701714_0d33f14830399e56c31a.jpg', 'karim@gmail.com', 'Net Work', 'Savar', '01/02.2023'),
(7, 'Jahid Hossain', '1697701682_894e7e5c92e6e66d7987.jpg', 'jahid@gmail.com', 'C#', 'Kolabagan', '09/08/2023'),
(8, 'Sheuly Akter', '1697698475_f04169ae881d3b2d3b6f.jpg', 'sheuly@gmail.com', 'Database', 'Dhanmondi', '23/12/2023'),
(9, 'abc', '1697698570_0a59927173f5f05b96cc.webp', 'rak@gmail.com', 'PhP', 'Dhanmondi', '09/08/2023');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `password`, `created_at`) VALUES
(1, 'rubel', 'rubel@gmail.com', '12345', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee-id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
