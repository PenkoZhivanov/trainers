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
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `cityid` int(11) NOT NULL,
  `city_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityid`, `city_name`) VALUES
(1, 'Айтос'),
(2, 'Аксаково'),
(3, 'Алфатар'),
(4, 'Антоново'),
(5, 'Априлци'),
(6, 'Ардино'),
(7, 'Асеновград'),
(8, 'Ахелой'),
(9, 'Ахтопол'),
(10, 'Балчик'),
(11, 'Банкя'),
(12, 'Банско'),
(13, 'Баня'),
(14, 'Батак'),
(15, 'Батановци'),
(16, 'Белене'),
(17, 'Белица'),
(18, 'Белово'),
(19, 'Белоградчик'),
(20, 'Белослав'),
(21, 'Берковица'),
(22, 'Благоевград'),
(23, 'Бобов дол'),
(24, 'Бобошево'),
(25, 'Божурище'),
(26, 'Бойчиновци'),
(27, 'Болярово'),
(28, 'Борово'),
(29, 'Ботевград'),
(30, 'Брацигово'),
(31, 'Брегово'),
(32, 'Брезник'),
(33, 'Брезово'),
(34, 'Брусарци'),
(35, 'Бургас'),
(36, 'Бухово'),
(37, 'Българово'),
(38, 'Бяла (област Варна)'),
(39, 'Бяла (област Русе)'),
(40, 'Бяла Слатина'),
(41, 'Бяла черква'),
(42, 'Варна'),
(43, 'Велики Преслав'),
(44, 'Велико Търново'),
(45, 'Велинград'),
(46, 'Ветово'),
(47, 'Ветрен'),
(48, 'Видин'),
(49, 'Враца'),
(50, 'Вълчедръм'),
(51, 'Вълчи дол'),
(52, 'Върбица'),
(53, 'Вършец'),
(54, 'Габрово'),
(55, 'Генерал Тошево'),
(56, 'Главиница'),
(57, 'Глоджево'),
(58, 'Годеч'),
(59, 'Горна Оряховица'),
(60, 'Гоце Делчев'),
(61, 'Грамада'),
(62, 'Гулянци'),
(63, 'Гурково'),
(64, 'Гълъбово'),
(65, 'Две могили'),
(66, 'Дебелец'),
(67, 'Девин'),
(68, 'Девня'),
(69, 'Джебел'),
(70, 'Димитровград'),
(71, 'Димово'),
(72, 'Добринище'),
(73, 'Добрич'),
(74, 'Долна баня'),
(75, 'Долна Митрополия'),
(76, 'Долна Оряховица'),
(77, 'Долни Дъбник'),
(78, 'Долни чифлик'),
(79, 'Доспат'),
(80, 'Драгоман'),
(81, 'Дряново'),
(82, 'Дулово'),
(83, 'Дунавци'),
(84, 'Дупница'),
(85, 'Дългопол'),
(86, 'Елена'),
(87, 'Елин Пелин'),
(88, 'Елхово'),
(89, 'Етрополе'),
(90, 'Завет'),
(91, 'Земен'),
(92, 'Златарица'),
(93, 'Златица'),
(94, 'Златоград'),
(95, 'Ивайловград'),
(96, 'Игнатиево'),
(97, 'Искър'),
(98, 'Исперих'),
(99, 'Ихтиман'),
(100, 'Каблешково'),
(101, 'Каварна'),
(102, 'Казанлък'),
(103, 'Калофер'),
(104, 'Камено'),
(105, 'Каолиново'),
(106, 'Карлово'),
(107, 'Карнобат'),
(108, 'Каспичан'),
(109, 'Кермен'),
(110, 'Килифарево'),
(111, 'Китен'),
(112, 'Клисура'),
(113, 'Кнежа'),
(114, 'Козлодуй'),
(115, 'Койнаре'),
(116, 'Копривщица'),
(117, 'Костандово'),
(118, 'Костенец'),
(119, 'Костинброд'),
(120, 'Котел'),
(121, 'Кочериново'),
(122, 'Кресна'),
(123, 'Криводол'),
(124, 'Кричим'),
(125, 'Крумовград'),
(126, 'Крън'),
(127, 'Кубрат'),
(128, 'Куклен'),
(129, 'Кула'),
(130, 'Кърджали'),
(131, 'Кюстендил'),
(132, 'Левски'),
(133, 'Летница'),
(134, 'Ловеч'),
(135, 'Лозница'),
(136, 'Лом'),
(137, 'Луковит'),
(138, 'Лъки'),
(139, 'Любимец'),
(140, 'Лясковец'),
(141, 'Мадан'),
(142, 'Маджарово'),
(143, 'Малко Търново'),
(144, 'Мартен'),
(145, 'Мелник'),
(146, 'Мездра'),
(147, 'Меричлери'),
(148, 'Мизия'),
(149, 'Момин проход'),
(150, 'Момчилград'),
(151, 'Монтана'),
(152, 'Мъглиж'),
(153, 'Неделино'),
(154, 'Несебър'),
(155, 'Николаево'),
(156, 'Никопол'),
(157, 'Нова Загора'),
(158, 'Нови Искър'),
(159, 'Нови пазар'),
(160, 'Обзор'),
(161, 'Омуртаг'),
(162, 'Опака'),
(163, 'Оряхово'),
(164, 'Павел баня'),
(165, 'Павликени'),
(166, 'Пазарджик'),
(167, 'Панагюрище'),
(168, 'Перник'),
(169, 'Перущица'),
(170, 'Петрич'),
(171, 'Пещера'),
(172, 'Пирдоп'),
(173, 'Плачковци'),
(174, 'Плевен'),
(175, 'Плиска'),
(176, 'Пловдив'),
(177, 'Полски Тръмбеш'),
(178, 'Поморие'),
(179, 'Попово'),
(180, 'Пордим'),
(181, 'Правец'),
(182, 'Приморско'),
(183, 'Провадия'),
(184, 'Първомай'),
(185, 'Раднево'),
(186, 'Радомир'),
(187, 'Разград'),
(188, 'Разлог'),
(189, 'Ракитово'),
(190, 'Раковски'),
(191, 'Рила'),
(192, 'Роман'),
(193, 'Рудозем'),
(194, 'Русе'),
(195, 'Садово'),
(196, 'Самоков'),
(197, 'Сандански'),
(198, 'Сапарева баня'),
(199, 'Свети Влас'),
(200, 'Свиленград'),
(201, 'Свищов'),
(202, 'Своге'),
(203, 'Севлиево'),
(204, 'Сеново'),
(205, 'Септември'),
(206, 'Силистра'),
(207, 'Симеоновград'),
(208, 'Симитли'),
(209, 'Славяново'),
(210, 'Сливен'),
(211, 'Сливница'),
(212, 'Сливо поле'),
(213, 'Смолян'),
(214, 'Смядово'),
(215, 'Созопол'),
(216, 'Сопот'),
(217, 'София'),
(218, 'Средец'),
(219, 'Стамболийски'),
(220, 'Стара Загора'),
(221, 'Стражица'),
(222, 'Стралджа'),
(223, 'Стрелча'),
(224, 'Суворово'),
(225, 'Сунгурларе'),
(226, 'Сухиндол'),
(227, 'Съединение'),
(228, 'Сърница'),
(229, 'Твърдица'),
(230, 'Тервел'),
(231, 'Тетевен'),
(232, 'Тополовград'),
(233, 'Троян'),
(234, 'Трън'),
(235, 'Тръстеник'),
(236, 'Трявна'),
(237, 'Тутракан'),
(238, 'Търговище'),
(239, 'Угърчин'),
(240, 'Хаджидимово'),
(241, 'Харманли'),
(242, 'Хасково'),
(243, 'Хисаря'),
(244, 'Цар Калоян'),
(245, 'Царево'),
(246, 'Чепеларе'),
(247, 'Червен бряг'),
(248, 'Черноморец'),
(249, 'Чипровци'),
(250, 'Чирпан'),
(251, 'Шабла'),
(252, 'Шивачево'),
(253, 'Шипка'),
(254, 'Шумен'),
(255, 'Ябланица'),
(256, 'Якоруда'),
(257, 'Ямбол');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countryid` int(11) NOT NULL,
  `country_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countryid`, `country_name`) VALUES
(1, 'България'),
(2, 'Австрия'),
(3, 'Албания'),
(4, 'Андора'),
(5, 'Армения'),
(6, 'Азербайджан'),
(7, 'Беларус'),
(8, 'Белгия'),
(9, 'Босна и Херцеговина'),
(10, 'Ватикана'),
(11, 'Великобритания'),
(12, 'Германия'),
(13, 'Грузия'),
(14, 'Гърция'),
(15, 'Дания'),
(16, 'Естония'),
(17, 'Ирландия'),
(18, 'Исландия'),
(19, 'Испания'),
(20, 'Италия'),
(21, 'Казахстан'),
(22, 'Кипър'),
(23, 'Латвия'),
(24, 'Литва'),
(25, 'Лихтенщайн'),
(26, 'Люксембург'),
(27, 'Малта'),
(28, 'Молдова'),
(29, 'Монако'),
(30, 'Нидерландия'),
(31, 'Норвегия'),
(32, 'Полша'),
(33, 'Португалия'),
(34, 'Румъния'),
(35, 'Русия'),
(36, 'Сан Марино'),
(37, 'Северна Македония'),
(38, 'Словакия'),
(39, 'Словения'),
(40, 'Сърбия'),
(41, 'Турция'),
(42, 'Украйна'),
(43, 'Унгария'),
(44, 'Финландия'),
(45, 'Франция'),
(46, 'Хърватия'),
(47, 'Черна гора'),
(48, 'Чехия'),
(49, 'Швеция'),
(50, 'Швейцария');

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

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(11) NOT NULL,
  `sport_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `sport_name`) VALUES
(1, 'СпОрт');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `bio` text NOT NULL,
  `experience` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `waytowork` varchar(255) NOT NULL,
  `workaddress` varchar(255) NOT NULL,
  `worktime` varchar(255) NOT NULL,
  `speciality` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `country` tinyint(11) NOT NULL,
  `city` tinyint(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `medical_story` text DEFAULT NULL,
  `training_experience` text DEFAULT NULL,
  `age` tinyint(4) NOT NULL,
  `weight` tinyint(4) NOT NULL,
  `height` tinyint(4) NOT NULL,
  `target` text DEFAULT NULL,
  `training` text DEFAULT NULL,
  `more_info` text DEFAULT NULL,
  `isAdmin` tinyint(2) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT 'uploads/unknown.jpg',
  `isActive` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `country`, `city`, `address`, `email`, `password`, `medical_story`, `training_experience`, `age`, `weight`, `height`, `target`, `training`, `more_info`, `isAdmin`, `image`, `isActive`) VALUES
(1, 'Пешо', 'Петров', 0, 0, '0', 'nekavuser@abv.bg', '1', 'gsdfgsdfgsdgdfg dg sdg sdfg dsg sdg sdgs d', 'sdfgsdfg sd sdg dgs', 44, 44, 44, 'sdfsdf gs sdfg sdfg sd fsd', 'we wedfsdd sdg dg', 'sd fgsdfgsdfg sdfg fg sdg sdgdfg df', 0, 'uploads/ba.jpg', 0),
(2, 'Тест', 'Тест', 1, 2, '3', 'nekavuser@abv.bg1', '1', '4', '5', 6, 7, 8, '9', '10', '11', 1, 'uploads/unknown.jpg', 0),
(3, 'Тест', 'Тест', 1, 2, '3', 'nekavuser@abv.bg1', '1', '4', '5', 6, 7, 8, '9', '10', '11', 1, 'uploads/unknown.jpg', 0),
(4, 'Тест', 'Тест', 1, 1, 'wqeas', 'nekavuser@abv.bg', '111111', '3', '4', 5, 6, 7, '8', '9', '99', 1, 'uploads/unknown.jpg', 0),
(12, 'Мишо', 'Иванов', 5, 11, 'ул. Бойко Борисов 12', 'misho@abv.bg', '1', 'Няма заболявания', 'Няма опит само плюска', 33, 120, 127, 'Да отслабне', 'НЯМА', 'не искам', 1, 'uploads/unknown.jpg', 0),
(13, 'Иван', 'Георгиев', 1, 76, 'кв. Мазнево бл. 45', 'ivan@abv.bg', '1', 'Намираат се няколко', '10 години ', 28, 76, 127, 'няма', 'няма', 'няма', 1, 'uploads/unknown.jpg', 0),
(14, 'Баш', 'Майстора', 1, 127, 'kyde twa ?', 'maistor@abv.bg', '1', 'tc', 'хич', 16, 111, 127, 'тц', 'тц', 'тц', 1, 'uploads/eFfmdb3.jpg', 0),
(15, 'Kalin', 'Stoyanov', 1, 127, 'str. Pernik 176 B, block 11-12, floor 7, ap. 107', 'k.h.stoyanov@gmail.com', 'omfp12omfp12', 'няма', 'няма', 31, 66, 127, 'няма', 'всеки ден :)', 'бла,бла', 1, 'uploads/unknown.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countryid`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=258;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
