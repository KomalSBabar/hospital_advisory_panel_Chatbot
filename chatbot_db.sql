-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 09:59 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(5) NOT NULL,
  `question` text NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'hi||hello||hey||hola', 'Hello , How are you'),
(2, 'I am good||wau||what about you||what about u||fine', 'Ok , How can i help you'),
(3, 'having issue||not feeling well||need some information related to query||having any query||', 'Select one of the options bellow about how you feel.'),
(4, 'bye', 'bye , have a nice day'),
(5, 'felling stresed||Pain or discomfort in your chest , arm, neck , stomach', 'Its sign of stable angina'),
(6, 'discomfort in your chest , arm, neck , stomach', 'Its sign of stable angina'),
(7, 'What is sign of stable angina ?', 'Angina is a pain or discomfort in your chest, arm, neck, stomach or jaw that happens when the blood supply to your heart becomes restricted because of your arteries becoming narrowed. This clogging is called atheroma. Angina is a symptom of coronary heart disease, not an illness in itself.'),
(8, 'Pain in Pelvic region', 'This leads to some serious issue need to contact gynecologist.'),
(9, 'Back Pain or Headache', 'It does not seems much serious issue you can go at medic store and buy medicine for this if not still feel well you can contact doctor. '),
(10, 'ok', 'is there any other question'),
(11, 'No||Nope', 'Ohk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
