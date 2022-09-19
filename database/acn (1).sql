-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 08, 2022 at 08:13 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acn`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `day` varchar(500) NOT NULL,
  `breakfast` varchar(500) NOT NULL,
  `lunch` varchar(500) NOT NULL,
  `dinner` varchar(500) NOT NULL,
  `tiffin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `day`, `breakfast`, `lunch`, `dinner`, `tiffin`) VALUES
(1, 'Monday', 'Poha, papaya, chocos, moong, mango', 'Malai.kofta, cabbage chana dal, garlic chutney, curd rice,sol.kadhi', 'Beetroot sabji, mix sprouts, dal.kolhapuri, veg soup, besan ladoo, egg briyani', 'Dabeli, ice tea, orange'),
(2, 'Tuesday', 'Methi paratha, curd, banana, apple , corn', 'Paneer tikka masala, karela fry, pasta pulav, Kandi pudi, aloo papad,nimbu Pani, chicken sukha', 'Carrot beans sabji, dum aloo, dal tadka,soup, imarti, macher jhol', 'Veg noodles, pineapple juice'),
(3, 'Wednesday', 'Idli, green chana, kiwi, watermelon', 'Chole, aloo jeera puri, corn pulav , Masoor dal, mango chutney, sabudana papad, chaas, chicken makhanwala', 'Mix Saag, tomato sev, chilka moong dal, Sindhi kadhi, lapsi sheera, egg bhurji rice', 'Bread Poha, chiku, cold coffee'),
(4, 'Thursday', 'Sabudana, chocos, mixed sprouts, muskmelon, orange', 'Bhindi masala, black chana, veg pulav, toot dal, thecha, ragi papad, roof afza, egg masala', 'Raw banana, veg handi, Masoor dal, tomato soup, Kala jamun, chicken Chettinad', 'Vada sambhar, mango milkshake'),
(5, 'Friday', 'Mix veg paratha, tomato chutney, groundnut, corn, chiku', 'Lauki chana.dal, rajma masala, masala bhat, dal fry, till.chutney, aloo papad, aam Panna, chicken lollipop', 'Soya bhurji, paneer butter masala, Akha Masoor dal,. ajwain Paratha, sambhar,malpua, chicken grav', 'juice, green tea , spinach sandwich'),
(6, 'Saturday', 'Upma, matki sprouts, papaya, strawberry', 'Suraj chana, veg korma, methi rice, panchratan dal,salsa, rasna, fry papad,fish fry', 'Bhaigan bharta, Jowar roti, methi pithla, SADA Varan, black watana, garlic rasam, mango icecream, fish sticks', 'Pani Puri, masala doodh'),
(7, 'Sunday', 'Uttapam, chana sprout', 'Mushroom babycorn masala, pumpkin sabji, besibilly rice, chilka moong dal, schzewan chutney, lassi, kurdai chicken', 'Gobhi masala subji, matki usal, dal chana,manchow soup, rice kheer, egg paratha', 'Samosa, ice tea');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `Id` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Contact_no` varchar(50) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `razorpay_payment_id` varchar(100) NOT NULL,
  `Amount` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`Id`, `Name`, `Contact_no`, `Email`, `order_id`, `razorpay_payment_id`, `Amount`, `Status`, `room_id`, `payment_date`) VALUES
(1, 'Chhayank Singh', '8108068904', 'chhayank.singh2912@gmail.com', 'order_I681sabYJOiIJ0', 'pay_I682FmJfKioESa', '10000', 'success', 1, '2021-10-06 16:50:15'),
(2, 'Aniket Singh', '8108068904', 'singhaniket1501@gmail.com', 'order_I6Rjl4cJ0hID9U', 'pay_I6RjxUfoFpJgDw', '8000', 'success', 3, '2021-10-07 12:28:15'),
(3, 'NAMIT SINGH', '8655588668', 'namit2000.singh@gmail.com', 'order_I67EzzN75H2XuN', 'pay_I67FGTqIiM6cve', '7000', 'success', 2, '2021-10-06 17:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) NOT NULL,
  `room_no` int(11) NOT NULL,
  `fees` int(11) NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(10) NOT NULL,
  `vacancy` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `room_no`, `fees`, `posting_date`, `type`, `vacancy`) VALUES
(1, 1, 101, 10000, '2021-10-18 11:14:01', 'AC', 'occupied by student-id=4'),
(2, 1, 102, 7000, '2021-10-13 08:49:01', 'NON-AC', 'occupied by student-id=2'),
(3, 2, 103, 8000, '2021-10-18 11:46:18', 'AC', 'occupied by student-id=5'),
(4, 2, 104, 6500, '2021-10-06 16:29:42', 'NON-AC', 'vacant'),
(5, 3, 201, 6500, '2021-09-29 12:27:36', 'AC', 'vacant'),
(6, 3, 202, 5000, '2021-09-29 12:28:15', 'NON-AC', 'vacant'),
(7, 4, 203, 6000, '2021-09-29 12:29:37', 'AC', 'vacant'),
(8, 4, 204, 4000, '2021-09-30 07:07:19', 'NON-AC', 'vacant'),
(10, 1, 110, 1000, '2021-10-18 11:43:27', 'AC', 'Vacant');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `number` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(650) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `gender`, `dob`, `number`, `email`, `password`, `address`) VALUES
(1, 'CHHAYANK SINGH', 'Male', '2001-12-29', '8108068904', 'chhayank.singh2912@gmail.com', 'Chhayank@123', 'C/301, Shi Darshan bldg no.2, Ostwal nagari, Central park, Nallasopara'),
(2, 'ANIKET SINGH', 'Male', '2002-01-15', '9518530925', 'singhaniket1501@gmail.com', 'Aniket@123', 'E/102, Harmony CHS, Yashwant Viva Township, Nallasopara (East)'),
(3, 'NAMIT SINGH', 'Male', '2000-08-04', '8655588668', 'namit2000.singh@gmail.com', 'Namit@123', 'A/304, CHS, Malad (East)'),
(4, 'Namit Singh', 'Male', '2000-09-04', '8655588668', 'abx@gmail.com', 'Namit@123', 'Malad'),
(5, 'Karan Singh', 'Male', '2000-09-04', '8655588668', 's1032190678@gmail.com', 'Namit@123', 'Malad'),
(6, 'Karan S Singh', 'Male', '2000-09-04', '8655588668', 's1032190678@gmail.com', 'Namit@123', 'Malad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
