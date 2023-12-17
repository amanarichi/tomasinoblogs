-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 12:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomasinoblogsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(8) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Announcements', 'TomasinoBlogs\' admin Announcements and General Website Announcements'),
(2, 'College of Information and Computing Sciences', ''),
(4, 'College of Nursing', ''),
(5, 'College of Tourism and Hospitality Management', ''),
(6, 'Faculty of Engineering', ''),
(7, 'College of Accountancy', ''),
(8, 'College of Architecture', ''),
(9, 'Faculty of Arts and Letters', ''),
(10, 'Faculty of Civil Law', ''),
(11, 'College of Commerce and Business Administration', ''),
(12, 'College of Education', ''),
(13, 'College of Fine Arts and Design', ''),
(14, 'Graduate School', ''),
(15, 'Graduate School of Law', ''),
(16, 'Faculty of Medicine and Surgery', ''),
(17, 'Conservatory of Music', ''),
(18, 'Faculty of Pharmacy', ''),
(19, 'Institute of Physical Education and Athletics', ''),
(20, 'College of Rehabilitation Sciences', ''),
(21, 'College of Science', ''),
(22, 'Faculty of Canon Law', ''),
(23, 'Faculty of Philosophy', ''),
(24, 'Faculty of Sacred Theology', ''),
(25, 'Senior High School', ''),
(26, 'Junior High School', ''),
(27, 'Education High School', ''),
(33, 'UAAP Season 86', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `approved` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `filename`, `caption`, `approved`) VALUES
(1, '65742f6f21e9b_Capture.PNG', '', 0),
(2, '65743067da76e_Deft.jpg', 'Best ADC!', 0),
(3, '657433c21eb05_KANON_April_2023.webp', 'KANON', 0),
(4, '657433d1461dc_FontaineHydroculus.PNG', 'GENSHIN', 0),
(5, '65771bba77905_IMG_9763.JPG', 'This is my first day as a junior high school thomasian in 2016!', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(8) NOT NULL,
  `post_content` text NOT NULL,
  `post_date` datetime NOT NULL,
  `post_topic` int(8) NOT NULL,
  `post_by` int(8) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_content`, `post_date`, `post_topic`, `post_by`, `approved`) VALUES
(84, 'Carless Day', '2023-12-18 01:35:24', 69, 2, 1),
(85, 'THE TIGRESSES BRING HOME THE CROWN TO ESPAÑA AFTER 17 YEARS! 🐯🏆', '2023-12-18 01:36:49', 70, 2, 1),
(86, 'Calling all 3rd and 4th Year Students! 🎓 Dive into an unparalleled opportunity to kickstart your career journey at 𝗖𝗮𝗿𝗲𝗲𝗿 𝗥𝗼𝗮𝗱𝘀𝗵𝗼𝘄 𝟮𝟬𝟮𝟯! This event is set to be a game-changer, bringing together an array of leading companies eager to discover and nurture your unique talents and potential.', '2023-12-18 01:37:48', 71, 2, 1),
(87, 'In a notable victory at the UAAP (University Athletic Association of the Philippines) on November 30, 2023, second-year nursing student John Carlos Aniciete secured the bronze medal in judo, showcasing his exceptional talent and dedication to the sport. ', '2023-12-18 01:40:13', 72, 2, 1),
(88, 'The UST College of Tourism and Hospitality Management was invited by the Tourism Promotions Board (TPB) last December 9, 2023 for the Philippine Motorcycle Tourism 2nd Anniversary Celebration Vloggers\' Conference 2023 (3:00-5:00PM) and  Philippine Motorcycle Tourism 2nd Anniversary Celebration Riders\' Night 2023 (6:00-11:30PM) at the World Trade Center Tent, Pasay City.', '2023-12-18 01:41:00', 73, 2, 1),
(89, 'Congratulations to UST CFAD Alumnus, Dino Dimar Dno Dmr for winning the Head On People’s Choice 2023 Portrait Award! Head On Photo Festival is the leading photography organization in Australia. The annual festival is run by Head On Foundation, a non-profit organization that provided multi-faceted platform for nationally and internationally acclaimed artists as well as emerging talent acroos all genres in photography', '2023-12-18 01:42:55', 74, 2, 1),
(90, 'That was amazing!', '2023-12-18 01:43:37', 73, 1, 1),
(91, 'I am excited to attend this event!!\r\n', '2023-12-18 01:45:17', 71, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE `tb_upload` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(150) NOT NULL,
  `approved` int(2) NOT NULL,
  `blog_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `name`, `image`, `approved`, `blog_by`) VALUES
(64, 'First meeting with Sir Mike!', '657c91e9b1aaf.jpg', 1, 'Lorenz'),
(65, 'UAAP Season 86 Kickoff Party at QPav', '657c9241bdc4e.jpg', 1, 'Kirby '),
(66, 'Last day of Prelim Exams!', '657c9257c0dcf.jpg', 1, 'Ravin'),
(67, 'This year\'s Paskuhan Christmas Tree', '657c9270a42e0.jpg', 1, 'Carlos'),
(69, 'Main Building taken from Frasatti Room', '657c92839c6e6.jpg', 1, 'Renzy'),
(70, 'Class picture Day!!', '657c929121507.jpg', 1, 'Cassey'),
(72, 'Opening of lights with my friends!', '657c92a324eff.jpg', 1, 'Ravin'),
(73, 'Agape 2023!!', '657c92ae3a76c.jpg', 1, 'Kirby'),
(83, '2ITH Poster', '657f10a6eaf92.png', 0, 'Cassey'),
(84, '2ITH THY3', '657f1660179d7.jpg', 1, 'Lorenz');

-- --------------------------------------------------------

--
-- Table structure for table `tomasinoblogsdb`
--

CREATE TABLE `tomasinoblogsdb` (
  `id` int(8) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pass` varchar(255) NOT NULL,
  `Birthdate` datetime NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `user_level` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tomasinoblogsdb`
--

INSERT INTO `tomasinoblogsdb` (`id`, `Username`, `Email`, `Pass`, `Birthdate`, `Gender`, `user_level`) VALUES
(1, 'Cassey', 'imcasseydc@gmail.com', 'cassey123', '2004-05-13 00:00:00', 'Male', 1),
(2, 'Renzy', 'renzy@gmail.com', 'renzy123', '2023-11-29 00:00:00', 'Male', 1),
(3, 'Lorenz', 'ralphlorenz.bonifacio.cics@ust.edu.ph', 'qwerty', '2004-07-31 00:00:00', 'Male', 1),
(4, 'GabMontano', 'montano@gmail.com', 'ics2608', '2000-01-01 00:00:00', 'Male', 0),
(10, 'CM', 'cm@gmail.com', '123', '2003-05-14 00:00:00', 'Male', 1),
(15, 'Kanon', 'kanon@jp.co', 'kimura', '2003-01-18 00:00:00', 'Female', 0),
(17, 'Ravin', 'ravin@gmail.com', 'ravin123', '2001-01-01 00:00:00', 'Male', 1),
(18, 'Kirby', 'kirby@gmail.com', 'kirby123', '2001-01-01 00:00:00', 'Male', 1),
(19, 'LeBron', 'lebron@gmail.com', 'kingjames', '1984-12-30 00:00:00', 'Male', 0),
(20, 'TEST1', 'test2@gmail.com', 'test123', '2023-12-05 00:00:00', 'Male', 0),
(22, 'kirbypada', 'pada@gmail.com', 'Netfox123', '2004-02-20 00:00:00', 'Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` datetime NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `approved` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `approved`) VALUES
(69, 'Agape 2023', '2023-12-18 01:35:24', 1, 2, 1),
(70, 'UAAP Women\'s Basketball Champions', '2023-12-18 01:36:49', 33, 2, 1),
(71, 'Career Roadshow 2023', '2023-12-18 01:37:48', 2, 2, 1),
(72, '“Second-Year Nursing Student John Carlos Aniciete Strikes Judo Bronze at UAAP Triumph\"', '2023-12-18 01:40:13', 4, 2, 1),
(73, 'Philippine Motorcycle Tourism 2nd Anniversary Celebration Vloggers\' Conference 2023', '2023-12-18 01:41:00', 5, 2, 1),
(74, 'UST CFAD Alumnus, Dino Dimar Dno Dmr for winning the Head On People’s Choice 2023 Portrait Award!', '2023-12-18 01:42:55', 13, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name_unique` (`cat_name`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_topic` (`post_topic`),
  ADD KEY `post_by` (`post_by`);

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tomasinoblogsdb`
--
ALTER TABLE `tomasinoblogsdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name_unique` (`Username`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `topic_cat` (`topic_cat`),
  ADD KEY `topic_by` (`topic_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `tomasinoblogsdb`
--
ALTER TABLE `tomasinoblogsdb`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`post_topic`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`post_by`) REFERENCES `tomasinoblogsdb` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`topic_cat`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`topic_by`) REFERENCES `tomasinoblogsdb` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_3` FOREIGN KEY (`topic_by`) REFERENCES `tomasinoblogsdb` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `topics_ibfk_4` FOREIGN KEY (`topic_by`) REFERENCES `tomasinoblogsdb` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
