-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2020 at 02:09 PM
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
-- Database: `airline_reservation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `airports`
--

CREATE TABLE `airports` (
  `airport_code` int(11) NOT NULL,
  `airport_name` varchar(255) DEFAULT NULL,
  `airport_location` varchar(255) DEFAULT NULL,
  `other_details` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `booking_agents`
--

CREATE TABLE `booking_agents` (
  `agent_id` int(11) NOT NULL DEFAULT 0,
  `agent_name` varchar(255) DEFAULT NULL,
  `agent_details` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking_agents`
--

INSERT INTO `booking_agents` (`agent_id`, `agent_name`, `agent_details`) VALUES
(1, 'agent_id', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `flight_costs`
--

CREATE TABLE `flight_costs` (
  `flight_number` int(11) NOT NULL DEFAULT 0,
  `aircraft_type_vode` int(11) DEFAULT 0,
  `valid_from_date` datetime DEFAULT NULL,
  `valid_to_date` datetime DEFAULT NULL,
  `flight_cost` decimal(19,4) DEFAULT 0.0000
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flight_schedules`
--

CREATE TABLE `flight_schedules` (
  `flight_number` int(11) NOT NULL DEFAULT 0,
  `airline_code` int(11) DEFAULT 0,
  `usual_aircraft_type_code` int(11) DEFAULT 0,
  `orgin_airport_code` int(11) DEFAULT 0,
  `destination_airport_code` int(11) DEFAULT 0,
  `departure_date_time` datetime DEFAULT NULL,
  `arrival_date_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `itinerarry_legs`
--

CREATE TABLE `itinerarry_legs` (
  `reservation_id` int(11) NOT NULL DEFAULT 0,
  `leg_id` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `itinerarry_reservations`
--

CREATE TABLE `itinerarry_reservations` (
  `reservation_id` int(11) NOT NULL DEFAULT 0,
  `agent_id` int(11) DEFAULT 0,
  `passenger_id` int(11) DEFAULT 0,
  `reservation_status_code` varchar(255) DEFAULT NULL,
  `ticket_type code` varchar(255) DEFAULT NULL,
  `travel_class_code` varchar(255) DEFAULT NULL,
  `date_reservation_mode` varchar(255) DEFAULT NULL,
  `number_in_party` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `legs`
--

CREATE TABLE `legs` (
  `leg_id` int(11) NOT NULL DEFAULT 0,
  `flight_number` int(11) DEFAULT 0,
  `orgin_airport` varchar(255) DEFAULT NULL,
  `destination_airport` varchar(255) DEFAULT NULL,
  `actual_departure_time` datetime DEFAULT NULL,
  `actual_arrival_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `passenger_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone_number` int(11) DEFAULT 0,
  `email_address` varchar(255) NOT NULL,
  `address_lines` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state_province_country` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `other_passenger_details` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL DEFAULT 0,
  `payment_status_code` int(11) DEFAULT 0,
  `payment_date` int(11) DEFAULT 0,
  `payment_amount` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ref_calender`
--

CREATE TABLE `ref_calender` (
  `day_date` datetime NOT NULL,
  `day_number` int(11) DEFAULT 0,
  `business_day_yn` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_payments`
--

CREATE TABLE `reservation_payments` (
  `reservation_id` int(11) NOT NULL DEFAULT 0,
  `payment_id` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `travel_class_capacity`
--

CREATE TABLE `travel_class_capacity` (
  `aircraft_type_code` int(11) NOT NULL DEFAULT 0,
  `travel_class_code` varchar(255) DEFAULT NULL,
  `seat_capacity` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `name`, `password`) VALUES
(2, 'Sajidh', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airports`
--
ALTER TABLE `airports`
  ADD PRIMARY KEY (`airport_code`);

--
-- Indexes for table `booking_agents`
--
ALTER TABLE `booking_agents`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `flight_costs`
--
ALTER TABLE `flight_costs`
  ADD PRIMARY KEY (`flight_number`);

--
-- Indexes for table `flight_schedules`
--
ALTER TABLE `flight_schedules`
  ADD PRIMARY KEY (`flight_number`),
  ADD KEY `airline_code` (`airline_code`),
  ADD KEY `destination_airport_code` (`destination_airport_code`),
  ADD KEY `orgin_airport_code` (`orgin_airport_code`),
  ADD KEY `usual_aircraft_type_code` (`usual_aircraft_type_code`);

--
-- Indexes for table `itinerarry_legs`
--
ALTER TABLE `itinerarry_legs`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `leg_id` (`leg_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `itinerarry_reservations`
--
ALTER TABLE `itinerarry_reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `number_in_party` (`number_in_party`),
  ADD KEY `passenger_id` (`passenger_id`),
  ADD KEY `reservation_status_code` (`reservation_status_code`),
  ADD KEY `ticket_type code` (`ticket_type code`),
  ADD KEY `travel_class_code` (`travel_class_code`);

--
-- Indexes for table `legs`
--
ALTER TABLE `legs`
  ADD PRIMARY KEY (`leg_id`);

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`passenger_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_status_code` (`payment_status_code`);

--
-- Indexes for table `ref_calender`
--
ALTER TABLE `ref_calender`
  ADD PRIMARY KEY (`day_date`);

--
-- Indexes for table `reservation_payments`
--
ALTER TABLE `reservation_payments`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `travel_class_capacity`
--
ALTER TABLE `travel_class_capacity`
  ADD PRIMARY KEY (`aircraft_type_code`),
  ADD KEY `travel_class_code` (`travel_class_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airports`
--
ALTER TABLE `airports`
  MODIFY `airport_code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `passenger_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
