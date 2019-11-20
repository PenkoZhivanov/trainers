-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2019 at 06:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainers`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `subtitle` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `subtitle`, `content`, `author`, `date_created`) VALUES
(1, 'Новина едно', 'баси и новината', '<p>Какво търсим:</p>\r\n\r\nКреативност, инициативност и лично отношение\r\nЗа разработчици: Добри познания по програмиране: ООП, алгоритми и структури от данни\r\nЗа QA инженери: Познания по добрите QA практики, тестване и процеси, писане на автоматични end-to-end тестове\r\nЗа системни администратори: Познания свързани с Linux, мрежи и скриптови езици', 1, '2019-10-17 10:20:25'),
(2, 'Новина две', 'хубава ноооовинъ', 'Какво търсим:\r\nКреативност, инициативност и лично отношение\r\nЗа разработчици: Добри познания по програмиране: ООП, алгоритми и структури от данни\r\nЗа QA инженери: Познания по добрите QA практики, тестване и процеси, писане на автоматични end-to-end тестове\r\nЗа системни администратори: Познания свързани с Linux, мрежи и скриптови езици', 2, '2019-10-17 10:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
