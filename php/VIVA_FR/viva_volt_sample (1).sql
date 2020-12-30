-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2020 at 12:56 PM
-- Server version: 10.1.47-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viva_volt_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(100) NOT NULL,
  `title` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `url` varchar(300) COLLATE utf8_croatian_ci DEFAULT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE `background` (
  `id` int(11) NOT NULL,
  `type` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_type`
--

CREATE TABLE `category_type` (
  `cat_id` tinyint(4) NOT NULL,
  `cat_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `cat_num` int(10) NOT NULL DEFAULT '1',
  `cat_img` text COLLATE utf8_croatian_ci,
  `cat_bg` varchar(10) COLLATE utf8_croatian_ci DEFAULT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `category_type`
--

INSERT INTO `category_type` (`cat_id`, `cat_name`, `cat_num`, `cat_img`, `cat_bg`, `deleteflag`) VALUES
(1, 'Watch', 1, '20201224073615_1-Watch.png', NULL, 0),
(2, 'Read', 2, '20201224073624_2-Reading.png', NULL, 0),
(3, 'Quiz', 3, '20201224073633_3-Quiz.png', NULL, 0),
(4, 'Listen 1', 1, '20201229040950_7-lesting-300.png', NULL, 0),
(5, 'Listen 2', 1, '20201229042723_7-lesting-300.png', NULL, 0),
(6, 'Speak 1', 3, '20201229072228_5-Speaking.png', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chaptername`
--

CREATE TABLE `chaptername` (
  `id` int(10) NOT NULL,
  `chapT_name` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `chap_image` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `chap_content` text COLLATE utf8_croatian_ci,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `chap_index` int(11) NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `chaptername`
--

INSERT INTO `chaptername` (`id`, `chapT_name`, `slug`, `chap_image`, `chap_content`, `class_id`, `subject_id`, `series_id`, `module_id`, `chap_index`, `deleteflag`) VALUES
(1, 'Did You Know This?', 'did-you-know-this-7', '20201224105952.jpeg', 'Did you know what special ability a salamander has? Or what makes a crocodile’s teeth unique? Let’s read this page and find out.', 3, 7, 1, 2, 0, 0),
(2, 'Great Indians', 'great-indians-7', '20201224110015.jpeg', 'These great freedom fighters fought for us and gave our countrymen the freedom\\\\r\\\\nto live happily. They are popularly known by their nicknames. Let us read more\\\\r\\\\nabout them.', 3, 7, 2, 2, 0, 0),
(3, 'Listening', 'listening-7', '20201229070833.png', '', 3, 7, 0, 3, 0, 0),
(4, 'Our Solar System', 'our-solar-system-7', '20201224092518.jpeg', 'The earth is one of many heavenly bodies in outer space. Let’s learn about some of them today.', 3, 7, 3, 2, 0, 0),
(5, 'Months of the Year', 'months-of-the-year-7', '20201224093815.jpeg', 'A year has a total of twelve months. Every month has something special in store. Let’s read more to find out.', 3, 7, 4, 2, 0, 0),
(6, 'Great Buildings', 'great-buildings-7', '20201224101527.jpeg', 'Let’s learn about some famous and important buildings from around the world today.', 3, 7, 5, 2, 0, 0),
(7, 'Word Fun', 'word-fun-7', '20201224111134.jpeg', 'Nouns are names of animals, people, things and places around us. But sometimes some names become so popular that people start using them as action words.', 3, 7, 6, 2, 0, 0),
(8, 'Puzzle Time', 'puzzle-time-7', '20201228042911.jpeg', 'Puzzles are fun ways to make people think. They can help sharpen our minds and learn new things. Let’s look at some puzzles from around the world today.', 3, 7, 7, 2, 0, 0),
(9, 'Road Safety', 'road-safety-7', '20201228044801.jpeg', 'Our cities, towns and villages are paved by roads. They are very important, and we need them to get from one place to another.', 3, 7, 8, 2, 0, 0),
(11, 'Amazing Creatures', 'amazing-creatures-7', '20201228053935.jpeg', 'The wild world of jungles is full of creatures with amazing skills and talents. Let’s read about them today.', 3, 7, 1, 2, 0, 0),
(12, 'A World Tour', 'a-world-tour-7', '20201228070525.jpeg', 'Let’s go on a world tour and discover some amazing places and landforms.', 3, 7, 5, 2, 0, 0),
(13, 'Our Music', 'our-music-7', '20201228072017.jpeg', 'India is a diverse country. Its different regions, people, languages and traditions come together in many beautiful forms.', 3, 7, 2, 2, 0, 0),
(14, 'Indian Sportswomen', 'indian-sportswomen-7', '20201228073203.jpeg', 'Indian sportswomen have made the country proud with several international victories. Let’s read about some of them today.', 3, 7, 9, 2, 0, 0),
(15, 'Their Strange Ways', 'their-strange-ways-7', '20201228084346.jpeg', 'Some famous people in history had strange and puzzling habits. Let’s read about them today.', 3, 7, 4, 2, 0, 0),
(16, 'Friends with Feathers', 'friends-with-feathers-7', '20201228100512.jpeg', 'There are thousands of birds around us. Some soar skywards, while some are expert swimmers, and some are even faster than cheetahs.', 3, 7, 1, 2, 0, 0),
(17, 'Flag Quiz', 'flag-quiz-7', '20201228102318.jpeg', 'Every country has its own national flag. The citizens of a country feel proud when they see their national flag. It is hoisted on special occasions.', 3, 7, 5, 2, 0, 0),
(18, 'Great Inventions', 'great-inventions-7', '20201228103837.jpeg', 'Our world is full of so many important machines. Every one of them was the result of some great inventor’s hard work.', 3, 7, 3, 2, 0, 0),
(19, 'Brainpower', 'brainpower-7', '20201228111211.jpeg', 'Let’s learn about the alphabetical order today.', 3, 7, 7, 2, 0, 0),
(20, 'Care for Animals', 'care-for-animals-7', '20201228114431.jpeg', 'Just like us, animals feel both love and pain. It is our duty to take care of them. Do not throw stones at the stray dogs because they also feel pain.', 3, 7, 8, 2, 0, 0),
(21, 'Matchless Animals', 'matchless-animals-7', '20201229061830.jpeg', 'Nature has blessed each animal with a special skill. Some animals can jump very high, some can run very fast and some can swim very fast.', 3, 7, 1, 2, 0, 0),
(22, 'Classical Dances', 'classical-dances-7', '20201229061937.jpeg', 'India has a rich cultural heritage. Our languages, food, clothes, stories, songs and dances are all part of this rich heritage.', 3, 7, 2, 2, 0, 0),
(23, 'Electricity', 'electricity-7', '20201229062043.jpeg', 'Hospitals, offices, factories and many important places cannot function without electricity.', 3, 7, 3, 2, 0, 0),
(24, 'Animal Sounds ', 'animal-sounds-7', '20201229062331.jpeg', 'Animals make different sounds and noises to talk to each other. Let’s look at some of them today.', 3, 7, 6, 2, 0, 0),
(25, 'National Games', 'national-games-7', '20201229062436.jpeg', 'Many games are played around the world. Every country has its own national game. Let’s learn about some national games.', 3, 7, 9, 2, 0, 0),
(26, 'Speaking', 'speaking-7', '20201229072055.png', '', 3, 7, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city`, `state_id`) VALUES
(1, 'North and Middle Andaman', 32),
(2, 'South Andaman', 32),
(3, 'Nicobar', 32),
(4, 'Adilabad', 1),
(5, 'Anantapur', 1),
(6, 'Chittoor', 1),
(7, 'East Godavari', 1),
(8, 'Guntur', 1),
(9, 'Hyderabad', 1),
(10, 'Kadapa', 1),
(11, 'Karimnagar', 1),
(12, 'Khammam', 1),
(13, 'Krishna', 1),
(14, 'Kurnool', 1),
(15, 'Mahbubnagar', 1),
(16, 'Medak', 1),
(17, 'Nalgonda', 1),
(18, 'Nellore', 1),
(19, 'Nizamabad', 1),
(20, 'Prakasam', 1),
(21, 'Rangareddi', 1),
(22, 'Srikakulam', 1),
(23, 'Vishakhapatnam', 1),
(24, 'Vizianagaram', 1),
(25, 'Warangal', 1),
(26, 'West Godavari', 1),
(27, 'Anjaw', 3),
(28, 'Changlang', 3),
(29, 'East Kameng', 3),
(30, 'Lohit', 3),
(31, 'Lower Subansiri', 3),
(32, 'Papum Pare', 3),
(33, 'Tirap', 3),
(34, 'Dibang Valley', 3),
(35, 'Upper Subansiri', 3),
(36, 'West Kameng', 3),
(37, 'Barpeta', 2),
(38, 'Bongaigaon', 2),
(39, 'Cachar', 2),
(40, 'Darrang', 2),
(41, 'Dhemaji', 2),
(42, 'Dhubri', 2),
(43, 'Dibrugarh', 2),
(44, 'Goalpara', 2),
(45, 'Golaghat', 2),
(46, 'Hailakandi', 2),
(47, 'Jorhat', 2),
(48, 'Karbi Anglong', 2),
(49, 'Karimganj', 2),
(50, 'Kokrajhar', 2),
(51, 'Lakhimpur', 2),
(52, 'Marigaon', 2),
(53, 'Nagaon', 2),
(54, 'Nalbari', 2),
(55, 'North Cachar Hills', 2),
(56, 'Sibsagar', 2),
(57, 'Sonitpur', 2),
(58, 'Tinsukia', 2),
(59, 'Araria', 4),
(60, 'Aurangabad', 4),
(61, 'Banka', 4),
(62, 'Begusarai', 4),
(63, 'Bhagalpur', 4),
(64, 'Bhojpur', 4),
(65, 'Buxar', 4),
(66, 'Darbhanga', 4),
(67, 'Purba Champaran', 4),
(68, 'Gaya', 4),
(69, 'Gopalganj', 4),
(70, 'Jamui', 4),
(71, 'Jehanabad', 4),
(72, 'Khagaria', 4),
(73, 'Kishanganj', 4),
(74, 'Kaimur', 4),
(75, 'Katihar', 4),
(76, 'Lakhisarai', 4),
(77, 'Madhubani', 4),
(78, 'Munger', 4),
(79, 'Madhepura', 4),
(80, 'Muzaffarpur', 4),
(81, 'Nalanda', 4),
(82, 'Nawada', 4),
(83, 'Patna', 4),
(84, 'Purnia', 4),
(85, 'Rohtas', 4),
(86, 'Saharsa', 4),
(87, 'Samastipur', 4),
(88, 'Sheohar', 4),
(89, 'Sheikhpura', 4),
(90, 'Saran', 4),
(91, 'Sitamarhi', 4),
(92, 'Supaul', 4),
(93, 'Siwan', 4),
(94, 'Vaishali', 4),
(95, 'Pashchim Champaran', 4),
(96, 'Bastar', 36),
(97, 'Bilaspur', 36),
(98, 'Dantewada', 36),
(99, 'Dhamtari', 36),
(100, 'Durg', 36),
(101, 'Jashpur', 36),
(102, 'Janjgir-Champa', 36),
(103, 'Korba', 36),
(104, 'Koriya', 36),
(105, 'Kanker', 36),
(106, 'Kawardha', 36),
(107, 'Mahasamund', 36),
(108, 'Raigarh', 36),
(109, 'Rajnandgaon', 36),
(110, 'Raipur', 36),
(111, 'Surguja', 36),
(112, 'Diu', 29),
(113, 'Daman', 29),
(114, 'Central Delhi', 25),
(115, 'East Delhi', 25),
(116, 'New Delhi', 25),
(117, 'North Delhi', 25),
(118, 'North East Delhi', 25),
(119, 'North West Delhi', 25),
(120, 'South Delhi', 25),
(121, 'South West Delhi', 25),
(122, 'West Delhi', 25),
(123, 'North Goa', 26),
(124, 'South Goa', 26),
(125, 'Ahmedabad', 5),
(126, 'Amreli District', 5),
(127, 'Anand', 5),
(128, 'Banaskantha', 5),
(129, 'Bharuch', 5),
(130, 'Bhavnagar', 5),
(131, 'Dahod', 5),
(132, 'The Dangs', 5),
(133, 'Gandhinagar', 5),
(134, 'Jamnagar', 5),
(135, 'Junagadh', 5),
(136, 'Kutch', 5),
(137, 'Kheda', 5),
(138, 'Mehsana', 5),
(139, 'Narmada', 5),
(140, 'Navsari', 5),
(141, 'Patan', 5),
(142, 'Panchmahal', 5),
(143, 'Porbandar', 5),
(144, 'Rajkot', 5),
(145, 'Sabarkantha', 5),
(146, 'Surendranagar', 5),
(147, 'Surat', 5),
(148, 'Vadodara', 5),
(149, 'Valsad', 5),
(150, 'Ambala', 6),
(151, 'Bhiwani', 6),
(152, 'Faridabad', 6),
(153, 'Fatehabad', 6),
(154, 'Gurgaon', 6),
(155, 'Hissar', 6),
(156, 'Jhajjar', 6),
(157, 'Jind', 6),
(158, 'Karnal', 6),
(159, 'Kaithal', 6),
(160, 'Kurukshetra', 6),
(161, 'Mahendragarh', 6),
(162, 'Mewat', 6),
(163, 'Panchkula', 6),
(164, 'Panipat', 6),
(165, 'Rewari', 6),
(166, 'Rohtak', 6),
(167, 'Sirsa', 6),
(168, 'Sonepat', 6),
(169, 'Yamuna Nagar', 6),
(170, 'Palwal', 6),
(171, 'Bilaspur', 7),
(172, 'Chamba', 7),
(173, 'Hamirpur', 7),
(174, 'Kangra', 7),
(175, 'Kinnaur', 7),
(176, 'Kulu', 7),
(177, 'Lahaul and Spiti', 7),
(178, 'Mandi', 7),
(179, 'Shimla', 7),
(180, 'Sirmaur', 7),
(181, 'Solan', 7),
(182, 'Una', 7),
(183, 'Anantnag', 8),
(184, 'Badgam', 8),
(185, 'Bandipore', 8),
(186, 'Baramula', 8),
(187, 'Doda', 8),
(188, 'Jammu', 8),
(189, 'Kargil', 8),
(190, 'Kathua', 8),
(191, 'Kupwara', 8),
(192, 'Leh', 8),
(193, 'Poonch', 8),
(194, 'Pulwama', 8),
(195, 'Rajauri', 8),
(196, 'Srinagar', 8),
(197, 'Samba', 8),
(198, 'Udhampur', 8),
(199, 'Bokaro', 34),
(200, 'Chatra', 34),
(201, 'Deoghar', 34),
(202, 'Dhanbad', 34),
(203, 'Dumka', 34),
(204, 'Purba Singhbhum', 34),
(205, 'Garhwa', 34),
(206, 'Giridih', 34),
(207, 'Godda', 34),
(208, 'Gumla', 34),
(209, 'Hazaribagh', 34),
(210, 'Koderma', 34),
(211, 'Lohardaga', 34),
(212, 'Pakur', 34),
(213, 'Palamu', 34),
(214, 'Ranchi', 34),
(215, 'Sahibganj', 34),
(216, 'Seraikela and Kharsawan', 34),
(217, 'Pashchim Singhbhum', 34),
(218, 'Ramgarh', 34),
(219, 'Bidar', 9),
(220, 'Belgaum', 9),
(221, 'Bijapur', 9),
(222, 'Bagalkot', 9),
(223, 'Bellary', 9),
(224, 'Bangalore Rural District', 9),
(225, 'Bangalore Urban District', 9),
(226, 'Chamarajnagar', 9),
(227, 'Chikmagalur', 9),
(228, 'Chitradurga', 9),
(229, 'Davanagere', 9),
(230, 'Dharwad', 9),
(231, 'Dakshina Kannada', 9),
(232, 'Gadag', 9),
(233, 'Gulbarga', 9),
(234, 'Hassan', 9),
(235, 'Haveri District', 9),
(236, 'Kodagu', 9),
(237, 'Kolar', 9),
(238, 'Koppal', 9),
(239, 'Mandya', 9),
(240, 'Mysore', 9),
(241, 'Raichur', 9),
(242, 'Shimoga', 9),
(243, 'Tumkur', 9),
(244, 'Udupi', 9),
(245, 'Uttara Kannada', 9),
(246, 'Ramanagara', 9),
(247, 'Chikballapur', 9),
(248, 'Yadagiri', 9),
(249, 'Alappuzha', 10),
(250, 'Ernakulam', 10),
(251, 'Idukki', 10),
(252, 'Kollam', 10),
(253, 'Kannur', 10),
(254, 'Kasaragod', 10),
(255, 'Kottayam', 10),
(256, 'Kozhikode', 10),
(257, 'Malappuram', 10),
(258, 'Palakkad', 10),
(259, 'Pathanamthitta', 10),
(260, 'Thrissur', 10),
(261, 'Thiruvananthapuram', 10),
(262, 'Wayanad', 10),
(263, 'Alirajpur', 11),
(264, 'Anuppur', 11),
(265, 'Ashok Nagar', 11),
(266, 'Balaghat', 11),
(267, 'Barwani', 11),
(268, 'Betul', 11),
(269, 'Bhind', 11),
(270, 'Bhopal', 11),
(271, 'Burhanpur', 11),
(272, 'Chhatarpur', 11),
(273, 'Chhindwara', 11),
(274, 'Damoh', 11),
(275, 'Datia', 11),
(276, 'Dewas', 11),
(277, 'Dhar', 11),
(278, 'Dindori', 11),
(279, 'Guna', 11),
(280, 'Gwalior', 11),
(281, 'Harda', 11),
(282, 'Hoshangabad', 11),
(283, 'Indore', 11),
(284, 'Jabalpur', 11),
(285, 'Jhabua', 11),
(286, 'Katni', 11),
(287, 'Khandwa', 11),
(288, 'Khargone', 11),
(289, 'Mandla', 11),
(290, 'Mandsaur', 11),
(291, 'Morena', 11),
(292, 'Narsinghpur', 11),
(293, 'Neemuch', 11),
(294, 'Panna', 11),
(295, 'Rewa', 11),
(296, 'Rajgarh', 11),
(297, 'Ratlam', 11),
(298, 'Raisen', 11),
(299, 'Sagar', 11),
(300, 'Satna', 11),
(301, 'Sehore', 11),
(302, 'Seoni', 11),
(303, 'Shahdol', 11),
(304, 'Shajapur', 11),
(305, 'Sheopur', 11),
(306, 'Shivpuri', 11),
(307, 'Sidhi', 11),
(308, 'Singrauli', 11),
(309, 'Tikamgarh', 11),
(310, 'Ujjain', 11),
(311, 'Umaria', 11),
(312, 'Vidisha', 11),
(313, 'Ahmednagar', 12),
(314, 'Akola', 12),
(315, 'Amrawati', 12),
(316, 'Aurangabad', 12),
(317, 'Bhandara', 12),
(318, 'Beed', 12),
(319, 'Buldhana', 12),
(320, 'Chandrapur', 12),
(321, 'Dhule', 12),
(322, 'Gadchiroli', 12),
(323, 'Gondiya', 12),
(324, 'Hingoli', 12),
(325, 'Jalgaon', 12),
(326, 'Jalna', 12),
(327, 'Kolhapur', 12),
(328, 'Latur', 12),
(329, 'Mumbai City', 12),
(330, 'Mumbai suburban', 12),
(331, 'Nandurbar', 12),
(332, 'Nanded', 12),
(333, 'Nagpur', 12),
(334, 'Nashik', 12),
(335, 'Osmanabad', 12),
(336, 'Parbhani', 12),
(337, 'Pune', 12),
(338, 'Raigad', 12),
(339, 'Ratnagiri', 12),
(340, 'Sindhudurg', 12),
(341, 'Sangli', 12),
(342, 'Solapur', 12),
(343, 'Satara', 12),
(344, 'Thane', 12),
(345, 'Wardha', 12),
(346, 'Washim', 12),
(347, 'Yavatmal', 12),
(348, 'Bishnupur', 13),
(349, 'Churachandpur', 13),
(350, 'Chandel', 13),
(351, 'Imphal East', 13),
(352, 'Senapati', 13),
(353, 'Tamenglong', 13),
(354, 'Thoubal', 13),
(355, 'Ukhrul', 13),
(356, 'Imphal West', 13),
(357, 'East Garo Hills', 14),
(358, 'East Khasi Hills', 14),
(359, 'Jaintia Hills', 14),
(360, 'Ri-Bhoi', 14),
(361, 'South Garo Hills', 14),
(362, 'West Garo Hills', 14),
(363, 'West Khasi Hills', 14),
(364, 'Aizawl', 15),
(365, 'Champhai', 15),
(366, 'Kolasib', 15),
(367, 'Lawngtlai', 15),
(368, 'Lunglei', 15),
(369, 'Mamit', 15),
(370, 'Saiha', 15),
(371, 'Serchhip', 15),
(372, 'Dimapur', 16),
(373, 'Kohima', 16),
(374, 'Mokokchung', 16),
(375, 'Mon', 16),
(376, 'Phek', 16),
(377, 'Tuensang', 16),
(378, 'Wokha', 16),
(379, 'Zunheboto', 16),
(380, 'Angul', 17),
(381, 'Boudh', 17),
(382, 'Bhadrak', 17),
(383, 'Bolangir', 17),
(384, 'Bargarh', 17),
(385, 'Baleswar', 17),
(386, 'Cuttack', 17),
(387, 'Debagarh', 17),
(388, 'Dhenkanal', 17),
(389, 'Ganjam', 17),
(390, 'Gajapati', 17),
(391, 'Jharsuguda', 17),
(392, 'Jajapur', 17),
(393, 'Jagatsinghpur', 17),
(394, 'Khordha', 17),
(395, 'Kendujhar', 17),
(396, 'Kalahandi', 17),
(397, 'Kandhamal', 17),
(398, 'Koraput', 17),
(399, 'Kendrapara', 17),
(400, 'Malkangiri', 17),
(401, 'Mayurbhanj', 17),
(402, 'Nabarangpur', 17),
(403, 'Nuapada', 17),
(404, 'Nayagarh', 17),
(405, 'Puri', 17),
(406, 'Rayagada', 17),
(407, 'Sambalpur', 17),
(408, 'Subarnapur', 17),
(409, 'Sundargarh', 17),
(410, 'Karaikal', 27),
(411, 'Mahe', 27),
(412, 'Puducherry', 27),
(413, 'Yanam', 27),
(414, 'Amritsar', 18),
(415, 'Bathinda', 18),
(416, 'Firozpur', 18),
(417, 'Faridkot', 18),
(418, 'Fatehgarh Sahib', 18),
(419, 'Gurdaspur', 18),
(420, 'Hoshiarpur', 18),
(421, 'Jalandhar', 18),
(422, 'Kapurthala', 18),
(423, 'Ludhiana', 18),
(424, 'Mansa', 18),
(425, 'Moga', 18),
(426, 'Mukatsar', 18),
(427, 'Nawan Shehar', 18),
(428, 'Patiala', 18),
(429, 'Rupnagar', 18),
(430, 'Sangrur', 18),
(431, 'Ajmer', 19),
(432, 'Alwar', 19),
(433, 'Bikaner', 19),
(434, 'Barmer', 19),
(435, 'Banswara', 19),
(436, 'Bharatpur', 19),
(437, 'Baran', 19),
(438, 'Bundi', 19),
(439, 'Bhilwara', 19),
(440, 'Churu', 19),
(441, 'Chittorgarh', 19),
(442, 'Dausa', 19),
(443, 'Dholpur', 19),
(444, 'Dungapur', 19),
(445, 'Ganganagar', 19),
(446, 'Hanumangarh', 19),
(447, 'Juhnjhunun', 19),
(448, 'Jalore', 19),
(449, 'Jodhpur', 19),
(450, 'Jaipur', 19),
(451, 'Jaisalmer', 19),
(452, 'Jhalawar', 19),
(453, 'Karauli', 19),
(454, 'Kota', 19),
(455, 'Nagaur', 19),
(456, 'Pali', 19),
(457, 'Pratapgarh', 19),
(458, 'Rajsamand', 19),
(459, 'Sikar', 19),
(460, 'Sawai Madhopur', 19),
(461, 'Sirohi', 19),
(462, 'Tonk', 19),
(463, 'Udaipur', 19),
(464, 'East Sikkim', 20),
(465, 'North Sikkim', 20),
(466, 'South Sikkim', 20),
(467, 'West Sikkim', 20),
(468, 'Ariyalur', 21),
(469, 'Chennai', 21),
(470, 'Coimbatore', 21),
(471, 'Cuddalore', 21),
(472, 'Dharmapuri', 21),
(473, 'Dindigul', 21),
(474, 'Erode', 21),
(475, 'Kanchipuram', 21),
(476, 'Kanyakumari', 21),
(477, 'Karur', 21),
(478, 'Madurai', 21),
(479, 'Nagapattinam', 21),
(480, 'The Nilgiris', 21),
(481, 'Namakkal', 21),
(482, 'Perambalur', 21),
(483, 'Pudukkottai', 21),
(484, 'Ramanathapuram', 21),
(485, 'Salem', 21),
(486, 'Sivagangai', 21),
(487, 'Tiruppur', 21),
(488, 'Tiruchirappalli', 21),
(489, 'Theni', 21),
(490, 'Tirunelveli', 21),
(491, 'Thanjavur', 21),
(492, 'Thoothukudi', 21),
(493, 'Thiruvallur', 21),
(494, 'Thiruvarur', 21),
(495, 'Tiruvannamalai', 21),
(496, 'Vellore', 21),
(497, 'Villupuram', 21),
(498, 'Dhalai', 22),
(499, 'North Tripura', 22),
(500, 'South Tripura', 22),
(501, 'West Tripura', 22),
(502, 'Almora', 33),
(503, 'Bageshwar', 33),
(504, 'Chamoli', 33),
(505, 'Champawat', 33),
(506, 'Dehradun', 33),
(507, 'Haridwar', 33),
(508, 'Nainital', 33),
(509, 'Pauri Garhwal', 33),
(510, 'Pithoragharh', 33),
(511, 'Rudraprayag', 33),
(512, 'Tehri Garhwal', 33),
(513, 'Udham Singh Nagar', 33),
(514, 'Uttarkashi', 33),
(515, 'Agra', 23),
(516, 'Allahabad', 23),
(517, 'Aligarh', 23),
(518, 'Ambedkar Nagar', 23),
(519, 'Auraiya', 23),
(520, 'Azamgarh', 23),
(521, 'Barabanki', 23),
(522, 'Badaun', 23),
(523, 'Bagpat', 23),
(524, 'Bahraich', 23),
(525, 'Bijnor', 23),
(526, 'Ballia', 23),
(527, 'Banda', 23),
(528, 'Balrampur', 23),
(529, 'Bareilly', 23),
(530, 'Basti', 23),
(531, 'Bulandshahr', 23),
(532, 'Chandauli', 23),
(533, 'Chitrakoot', 23),
(534, 'Deoria', 23),
(535, 'Etah', 23),
(536, 'Kanshiram Nagar', 23),
(537, 'Etawah', 23),
(538, 'Firozabad', 23),
(539, 'Farrukhabad', 23),
(540, 'Fatehpur', 23),
(541, 'Faizabad', 23),
(542, 'Gautam Buddha Nagar', 23),
(543, 'Gonda', 23),
(544, 'Ghazipur', 23),
(545, 'Gorkakhpur', 23),
(546, 'Ghaziabad', 23),
(547, 'Hamirpur', 23),
(548, 'Hardoi', 23),
(549, 'Mahamaya Nagar', 23),
(550, 'Jhansi', 23),
(551, 'Jalaun', 23),
(552, 'Jyotiba Phule Nagar', 23),
(553, 'Jaunpur District', 23),
(554, 'Kanpur Dehat', 23),
(555, 'Kannauj', 23),
(556, 'Kanpur Nagar', 23),
(557, 'Kaushambi', 23),
(558, 'Kushinagar', 23),
(559, 'Lalitpur', 23),
(560, 'Lakhimpur Kheri', 23),
(561, 'Lucknow', 23),
(562, 'Mau', 23),
(563, 'Meerut', 23),
(564, 'Maharajganj', 23),
(565, 'Mahoba', 23),
(566, 'Mirzapur', 23),
(567, 'Moradabad', 23),
(568, 'Mainpuri', 23),
(569, 'Mathura', 23),
(570, 'Muzaffarnagar', 23),
(571, 'Pilibhit', 23),
(572, 'Pratapgarh', 23),
(573, 'Rampur', 23),
(574, 'Rae Bareli', 23),
(575, 'Saharanpur', 23),
(576, 'Sitapur', 23),
(577, 'Shahjahanpur', 23),
(578, 'Sant Kabir Nagar', 23),
(579, 'Siddharthnagar', 23),
(580, 'Sonbhadra', 23),
(581, 'Sant Ravidas Nagar', 23),
(582, 'Sultanpur', 23),
(583, 'Shravasti', 23),
(584, 'Unnao', 23),
(585, 'Varanasi', 23),
(586, 'Birbhum', 24),
(587, 'Bankura', 24),
(588, 'Bardhaman', 24),
(589, 'Darjeeling', 24),
(590, 'Dakshin Dinajpur', 24),
(591, 'Hooghly', 24),
(592, 'Howrah', 24),
(593, 'Jalpaiguri', 24),
(594, 'Cooch Behar', 24),
(595, 'Kolkata', 24),
(596, 'Malda', 24),
(597, 'Midnapore', 24),
(598, 'Murshidabad', 24),
(599, 'Nadia', 24),
(600, 'North 24 Parganas', 24),
(601, 'South 24 Parganas', 24),
(602, 'Purulia', 24),
(603, 'Uttar Dinajpur', 24);

-- --------------------------------------------------------

--
-- Table structure for table `cross`
--

CREATE TABLE `cross` (
  `id` int(11) NOT NULL,
  `set_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `cross` varchar(2000) COLLATE utf8_croatian_ci NOT NULL,
  `myque` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `myans` text COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(50) NOT NULL,
  `appId` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `userId` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `Feedback` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackWorkshop`
--

CREATE TABLE `feedbackWorkshop` (
  `id` int(11) NOT NULL,
  `workshopId` int(11) NOT NULL,
  `feedback` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` tinyint(4) NOT NULL,
  `title` text COLLATE utf8_croatian_ci NOT NULL,
  `backgound` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `queWindow` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `level` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `color` varchar(25) COLLATE utf8_croatian_ci NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(100) NOT NULL,
  `type` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `userId` int(100) DEFAULT NULL,
  `audio_id` int(100) DEFAULT NULL,
  `set_id` int(100) DEFAULT NULL,
  `question` text COLLATE utf8_croatian_ci,
  `quetionFill` text COLLATE utf8_croatian_ci,
  `mcq` longtext COLLATE utf8_croatian_ci,
  `qLeft` text COLLATE utf8_croatian_ci,
  `qRight` text COLLATE utf8_croatian_ci,
  `qAnswer` text COLLATE utf8_croatian_ci,
  `answer` text COLLATE utf8_croatian_ci,
  `mylist` text COLLATE utf8_croatian_ci NOT NULL,
  `myans` text COLLATE utf8_croatian_ci NOT NULL,
  `color` text COLLATE utf8_croatian_ci NOT NULL,
  `md_list` longtext COLLATE utf8_croatian_ci NOT NULL,
  `3d_list` longtext COLLATE utf8_croatian_ci NOT NULL,
  `text` text COLLATE utf8_croatian_ci,
  `solutions` mediumtext COLLATE utf8_croatian_ci,
  `url` varchar(300) COLLATE utf8_croatian_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `label` varchar(1000) COLLATE utf8_croatian_ci DEFAULT NULL,
  `flowchart` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `gameId` tinyint(4) NOT NULL,
  `cdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  `screen` tinyint(4) NOT NULL DEFAULT '0',
  `openLock` int(11) NOT NULL DEFAULT '0',
  `orderNo` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `screen`, `openLock`, `orderNo`) VALUES
(1, 'vid', 3, 0, 1, '<p>Did You Know This?</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/16301426_1_Did_You_Know_This.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 11:13:20', 0, 0, 0, NULL),
(2, 'ebookUpload', 3, 0, 2, '<p>Did You Know This?</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVsNlRucEZlVTVVUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 11:18:31', 0, 0, 0, NULL),
(3, 'mch', 3, 0, 3, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>scorpion<\\/p>\",\"<p>crocodile<\\/p>\",\"<p>salamander<\\/p>\",\"<p>walrus<\\/p>\",\"<p>chameleon<\\/p>\",\"\",\"\"]', '[\"<p>Its venom is the most expensive liquid.<\\/p>\",\"<p>gets new teeth every month<\\/p>\",\"<p>breathes through its skin<\\/p>\",\"<p>has long tusks<\\/p>\",\"<p>has a tongue that is twice as long as its body<\\/p>\",\"\",\"\"]', '[\"<p>Its venom is the most expensive liquid.<\\/p>\",\"<p>gets new teeth every month<\\/p>\",\"<p>breathes through its skin<\\/p>\",\"<p>has long tusks<\\/p>\",\"<p>has a tongue that is twice as long as its body<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 11:25:07', 0, 0, 0, NULL),
(4, 'vid', 3, 0, 4, '<p>Great Indians</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/18066351_2-Great_Indians.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:10:25', 0, 0, 0, NULL),
(5, 'ebookUpload', 3, 0, 5, '<p>Great Indians</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVrd1RXcEZlVTFVU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:12:03', 0, 0, 0, NULL),
(6, 'mcq', 3, 0, 6, '<p>To which Indian leader is the Statue of Unity dedicated?</p>', '[\"\",\"\"]', '[\"<p>Subhas Chandra Bose<\\/p>\",\"<p>Bhagat Singh<\\/p>\",\"<p>Vallabhbhai Patel<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:13:08', 0, 0, 0, NULL),
(7, 'mcq', 3, 0, 6, '<p>By what name is Lala Lajpat Rai fondly known?</p>', '[\"\",\"\"]', '[\"<p>Punjab Kesari<\\/p>\",\"<p>Shaheed-e-Azam<\\/p>\",\"<p>Iron Man of India<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:13:54', 0, 0, 0, NULL),
(8, 'mcq', 3, 0, 6, '<p>Which Indian leader stood up for the Indians in South Africa?</p>', '[\"\",\"\"]', '[\"<p>Indira Gandhi<\\/p>\",\"<p>Jawaharlal Nehru<\\/p>\",\"<p>Mahatma Gandhi<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:14:40', 0, 0, 0, NULL),
(9, 'mcq', 3, 0, 6, '<p>What is Sarojini Naidu also known as?</p>', '[\"\",\"\"]', '[\"<p>Nightingale of India<\\/p>\",\"<p>Ba<\\/p>\",\"<p>Poetess of India<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:15:37', 0, 0, 0, NULL),
(10, 'mcq', 3, 0, 6, '<p>_____________ died at a very young age of 23.</p>', '[\"\",\"\"]', '[\"<p>Subhas Chandra Bose<\\/p>\",\"<p>Vallabhbhai Patel<\\/p>\",\"<p>Bhagat Singh<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-23 12:16:18', 0, 0, 0, NULL),
(11, 'mcq', 3, 1, 7, '<p>Listen to the audio and click on one word you hear:</p>', '[\"\",\"\"]', '[\"<p>beautiful<\\/p>\",\"<p>good<\\/p>\",\"<p>terrible<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/12912579_EF03_CH3_Q1_1.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 06:43:51', 0, 0, 0, NULL),
(12, 'mcq', 3, 1, 7, '<p>Listen to the audio and click on one word you hear:</p>', '[\"\",\"\"]', '[\"<p>near<\\/p>\",\"<p>best<\\/p>\",\"<p>dear<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/13098895_EF03_CH3_Q1_2.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 07:24:52', 0, 0, 0, NULL),
(13, 'mcq', 3, 1, 7, '<p>Listen to the audio and click on one word you hear:</p>', '[\"\",\"\"]', '[\"guest\",\"parcel\",\"pizza\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/1742397_EF03_CH3_Q1_3.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 07:27:19', 0, 0, 0, NULL),
(14, 'mcq', 3, 1, 7, '<p>Listen to the audio and click on one word you hear:</p>', '[\"\",\"\"]', '[\"<p>eight<\\/p>\",\"<p>ate<\\/p>\",\"<p>seven<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/96228_EF03_CH3_Q1_4.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 07:29:56', 0, 0, 0, NULL),
(15, 'mcq', 3, 1, 7, '<p>Listen to the audio and click on one word you hear:</p>', '[\"\",\"\"]', '[\"<p>smell<\\/p>\",\"<p>perfume<\\/p>\",\"<p>scent<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/6663016_EF03_CH3_Q1_5.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 07:32:26', 0, 0, 0, NULL),
(16, 'vid', 3, 0, 8, '<p>Our Solar System</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/5242001_3-Our-Solar-System.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:09:06', 0, 0, 0, NULL),
(17, 'ebookUpload', 3, 0, 9, '<p>Our Solar System</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVrd1RYcEZlVTVVVlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:10:42', 0, 0, 0, NULL),
(18, 'mcq', 3, 0, 10, '<p>A _______ is an object in space which moves around a planet in an orbit.</p>', '[\"\",\"\"]', '[\"<p>space<\\/p>\",\"<p>satellite<\\/p>\",\"<p>star<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:11:33', 0, 0, 0, NULL),
(19, 'mcq', 3, 0, 10, '<p>A group of stars forming interesting patterns is called a _______.</p>', '[\"\",\"\"]', '[\"<p>constellation<\\/p>\",\"<p>galaxy<\\/p>\",\"<p>solar system<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:12:12', 0, 0, 0, NULL),
(20, 'mcq', 3, 0, 10, '<p>The sun is a star as it has its own _______.</p>', '[\"\",\"\"]', '[\"<p>light<\\/p>\",\"<p>moon<\\/p>\",\"<p>day and night<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:12:54', 0, 0, 0, NULL),
(21, 'mcq', 3, 0, 10, '<p>Planet _______ is the closest to the sun.</p>', '[\"\",\"\"]', '[\"<p>Earth<\\/p>\",\"<p>Venus<\\/p>\",\"<p>Mercury<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:13:38', 0, 0, 0, NULL),
(22, 'mcq', 3, 0, 10, '<p>The sun and its family of planets are called the _______.</p>', '[\"\",\"\"]', '[\"<p>galaxy<\\/p>\",\"<p>space<\\/p>\",\"<p>solar system<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:14:19', 0, 0, 0, NULL),
(23, 'ebookUpload', 3, 0, 12, '<p>Months of the Year</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVrd1RtcEZlVTFxWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:50:26', 0, 0, 0, NULL),
(24, 'mch', 3, 0, 13, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Father&rsquo;s Day<\\/p>\",\"<p>World Population Day<\\/p>\",\"<p>Children&rsquo;s Day<\\/p>\",\"<p>Christmas<\\/p>\",\"<p>Earth Day<\\/p>\",\"\",\"\"]', '[\"<p>June<\\/p>\",\"<p>July<\\/p>\",\"<p>November<\\/p>\",\"<p>December<\\/p>\",\"<p>April<\\/p>\",\"\",\"\"]', '[\"<p>June<\\/p>\",\"<p>July<\\/p>\",\"<p>November<\\/p>\",\"<p>December<\\/p>\",\"<p>April<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:53:49', 0, 0, 0, NULL),
(25, 'mcq', 3, 0, 13, '<p>We celebrate Teachers&rsquo; Day in the month of __________.</p>', '[\"\",\"\"]', '[\"<p>September<\\/p>\",\"<p>October<\\/p>\",\"<p>November<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:55:08', 0, 0, 0, NULL),
(26, 'mcq', 3, 0, 13, '<p>__________ has the least number of days.</p>', '[\"\",\"\"]', '[\"<p>July<\\/p>\",\"<p>January<\\/p>\",\"<p>February<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:55:56', 0, 0, 0, NULL),
(27, 'mcq', 3, 0, 13, '<p>We celebrate __________ in the month of January.</p>', '[\"\",\"\"]', '[\"<p>Independence Day<\\/p>\",\"<p>Republic Day<\\/p>\",\"<p>Gandhi Jayanti<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:56:36', 0, 0, 0, NULL),
(28, 'mcq', 3, 0, 13, '<p>__________ is the fifth month of the year.</p>', '[\"\",\"\"]', '[\"<p>May<\\/p>\",\"<p>April<\\/p>\",\"<p>March<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:57:12', 0, 0, 0, NULL),
(29, 'mcq', 3, 0, 13, '<p>World Population Day is observed on the __________ day of July.</p>', '[\"\",\"\"]', '[\"<p>fifteenth<\\/p>\",\"<p>eleventh<\\/p>\",\"<p>thirteenth<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 09:57:52', 0, 0, 0, NULL),
(30, 'vid', 3, 0, 14, '<p>Great Buildings</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/11931807_2-1-Great-Buildings.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:22:18', 0, 0, 0, NULL),
(31, 'ebookUpload', 3, 0, 11, '<p>Great Buildings</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVrd1QwUkZlVTFFVVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:22:55', 0, 0, 0, NULL),
(32, 'mcq', 3, 0, 15, '<p>Which is the world&rsquo;s most visited museum?</p>', '[\"\",\"\"]', '[\"<p>Louvre<\\/p>\",\"<p>Hagia Sophia<\\/p>\",\"<p>Potala Palace<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:23:50', 0, 0, 0, NULL),
(33, 'mcq', 3, 0, 15, '<p>&lsquo;Rose City&rsquo; is the other name of this city.</p>', '[\"\",\"\"]', '[\"<p>Chichen Itza<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"<p>Petra<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:24:38', 0, 0, 0, NULL),
(34, 'mcq', 3, 0, 15, '<p>Which monument also served as the temple of Maya snake god Kukulkan?</p>', '[\"\",\"\"]', '[\"<p>Chichen Itza<\\/p>\",\"<p>El Castillo<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:25:20', 0, 0, 0, NULL),
(35, 'mcq', 3, 0, 15, '<p>Where is the White House located?</p>', '[\"\",\"\"]', '[\"<p>New York<\\/p>\",\"<p>Florida<\\/p>\",\"<p>Washington,D.C.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:26:01', 0, 0, 0, NULL),
(36, 'mcq', 3, 0, 15, '<p>This building was once the residence of the Dalai Lama.</p>', '[\"\",\"\"]', '[\"<p>Potala Palace<\\/p>\",\"<p>Al-Khazneh<\\/p>\",\"<p>Angkor Wat<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 10:26:52', 0, 0, 0, NULL),
(37, 'vid', 3, 0, 16, '<p>Word Fun</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/11038374_2-2-Word-Fun-24.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 11:18:30', 0, 0, 0, NULL),
(38, 'ebookUpload', 3, 0, 17, '<p>Word Fun</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVreFRVUkZlVTFVVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 11:19:12', 0, 0, 0, NULL),
(39, 'mch', 3, 0, 18, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>loves honey<\\/p>\",\"<p>works with paint<\\/p>\",\"<p>Australia<\\/p>\",\"<p>produces food<\\/p>\",\"<p>sit comfortably<\\/p>\",\"\",\"\"]', '[\"<p>bear<\\/p>\",\"<p>artist<\\/p>\",\"<p>kangaroo<\\/p>\",\"<p>farmer<\\/p>\",\"<p>armchair<\\/p>\",\"\",\"\"]', '[\"<p>bear<\\/p>\",\"<p>artist<\\/p>\",\"<p>kangaroo<\\/p>\",\"<p>farmer<\\/p>\",\"<p>armchair<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-24 11:21:32', 0, 0, 0, NULL),
(40, 'mch', 3, 0, 21, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Striped in yellow and black, this insect can sting you back.<\\/p>\",\"<p>I&rsquo;m a book with a long story.<\\/p>\",\"<p>A young sheep I am, will grow up and be a ram.<\\/p>\",\"<p>In me you store water, to use it now and after.<\\/p>\",\"<p>The blue planet &ndash; none&rsquo;s better than it!<\\/p>\",\"\",\"\"]', '[\"<p>wasp<\\/p>\",\"<p>novel<\\/p>\",\"<p>lamb<\\/p>\",\"<p>tank<\\/p>\",\"<p>earth<\\/p>\",\"\",\"\"]', '[\"<p>wasp<\\/p>\",\"<p>novel<\\/p>\",\"<p>lamb<\\/p>\",\"<p>tank<\\/p>\",\"<p>earth<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:35:17', 0, 0, 0, NULL),
(41, 'ebookUpload', 3, 0, 20, '<p>Puzzle Time</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVreFRWUkZlVTVFUlQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:41:53', 0, 0, 0, NULL),
(42, 'tnf', 3, 0, 23, '<p>We should not wear seatbelts while travelling in a car.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:50:58', 0, 0, 0, NULL),
(43, 'tnf', 3, 0, 23, '<p>We can play on the main road even if there are vehicles passing by.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:51:31', 0, 0, 0, NULL),
(44, 'tnf', 3, 0, 23, '<p>It is important to look left, right and then left before crossing a road.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:52:14', 0, 0, 0, NULL),
(45, 'tnf', 3, 0, 23, '<p>It is okay to lean outside the window of a running bus.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:52:45', 0, 0, 0, NULL),
(46, 'tnf', 3, 0, 23, '<p>There are separate lanes for cycles.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:53:18', 0, 0, 0, NULL),
(47, 'vid', 3, 0, 19, '<p>Road Safety</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/15064858_2-4-Road-Safety.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 04:58:33', 0, 0, 0, NULL),
(48, 'ebookUpload', 3, 0, 22, '<p>Road Safety</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVreFQwUkZlVTFVVVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 05:00:04', 0, 0, 0, NULL),
(49, 'mcq', 3, 0, 25, '<p>The crown-like projection on a seahorse&rsquo;s head is known as ___________.</p>', '[\"\",\"\"]', '[\"<p>coronet<\\/p>\",\"<p>colonel<\\/p>\",\"<p>kernel<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 05:42:13', 0, 0, 0, NULL),
(50, 'mcq', 3, 0, 25, '<p>Chimpanzees are _______.</p>', '[\"\",\"\"]', '[\"<p>rodents<\\/p>\",\"<p>apes<\\/p>\",\"<p>marsupials<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 06:43:21', 0, 0, 0, NULL),
(51, 'mcq', 3, 0, 25, '<p>Butter tea, which is made of yak&rsquo;s milk, is a popular drink in ___________.</p>', '[\"\",\"\"]', '[\"<p>Taiwan<\\/p>\",\"<p>Tibet<\\/p>\",\"<p>Mongolia<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 06:44:04', 0, 0, 0, NULL),
(52, 'mcq', 3, 0, 25, '<p>____________ can sleep in standing position.</p>', '[\"\",\"\"]', '[\"<p>Polar bears<\\/p>\",\"<p>Chimpanzees<\\/p>\",\"<p>Horses<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 06:44:49', 0, 0, 0, NULL),
(53, 'mcq', 3, 0, 25, '<p>A ______________ changes its colour to blend with its surroundings.</p>', '[\"\",\"\"]', '[\"<p>chameleon<\\/p>\",\"<p>mole<\\/p>\",\"<p>porcupine<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 06:45:27', 0, 0, 0, NULL),
(54, 'vid', 3, 0, 26, '<p>Amazing Creatures</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/7217286_3-1-Amazing-Creatures.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 06:55:55', 0, 0, 0, NULL),
(55, 'mch', 3, 0, 28, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>the largest river by volume<\\/p>\",\"<p>the highest cricket ground<\\/p>\",\"<p>the highest mountain peak<\\/p>\",\"<p>the biggest hot desert<\\/p>\",\"<p>the tallest man-made structure<\\/p>\",\"\",\"\"]', '[\"<p>Amazon<\\/p>\",\"<p>Chail<\\/p>\",\"<p>Everest<\\/p>\",\"<p>Sahara<\\/p>\",\"<p>Burj Khalifa<\\/p>\",\"\",\"\"]', '[\"<p>Amazon<\\/p>\",\"<p>Chail<\\/p>\",\"<p>Everest<\\/p>\",\"<p>Sahara<\\/p>\",\"<p>Burj Khalifa<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:09:32', 0, 0, 0, NULL),
(56, 'vid', 3, 0, 27, '<p>A World Tour</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/5290548_3-2-_A_World_Tour.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:15:10', 0, 0, 0, NULL),
(57, 'vid', 3, 0, 29, '<p>Our Music</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/4128332_3-3-Our-Music.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:24:20', 0, 0, 0, NULL),
(58, 'mch', 3, 0, 30, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Late Ustad Bismillah Khan<\\/p>\",\"<p>Late Kunnakudi Vaidyanathan<\\/p>\",\"<p>Pandit Shiv kumar Sharma<\\/p>\",\"<p>Ustad Zakir Hussain<\\/p>\",\"<p>Pandit Hariprasad Chaurasia<\\/p>\",\"\",\"\"]', '[\"<p>shehnai<\\/p>\",\"<p>violin<\\/p>\",\"<p>santoor<\\/p>\",\"<p>tabla<\\/p>\",\"<p>flute<\\/p>\",\"\",\"\"]', '[\"<p>shehnai<\\/p>\",\"<p>violin<\\/p>\",\"<p>santoor<\\/p>\",\"<p>tabla<\\/p>\",\"<p>flute<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:26:47', 0, 0, 0, NULL),
(59, 'mch', 3, 0, 31, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Mithali Raj<\\/p>\",\"<p>Lalita Babar<\\/p>\",\"<p>Dipa Karmakar<\\/p>\",\"<p>Heena Sidhu<\\/p>\",\"<p>Akanksha Singh<\\/p>\",\"\",\"\"]', '[\"<p>cricket<\\/p>\",\"<p>running<\\/p>\",\"<p>gymnastics<\\/p>\",\"<p>shooting<\\/p>\",\"<p>basketball<\\/p>\",\"\",\"\"]', '[\"<p>cricket<\\/p>\",\"<p>running<\\/p>\",\"<p>gymnastics<\\/p>\",\"<p>shooting<\\/p>\",\"<p>basketball<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:38:46', 0, 0, 0, NULL),
(60, 'vid', 3, 0, 32, '<p>Indian Sportswomen</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/2561409_3-4-Indian-sportswomen.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 07:40:54', 0, 0, 0, NULL),
(61, 'vid', 3, 0, 33, '<p>Their Strange Ways</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/15653113_3-5-Their-Strange-Ways.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 08:48:50', 0, 0, 0, NULL),
(62, 'mch', 3, 0, 34, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>Thomas Alva Edison<\\/p>\",\"<p>Ludwig van Beethoven<\\/p>\",\"<p>Napoleon Bonaparte<\\/p>\",\"<p>Agatha Christie<\\/p>\",\"<p>Isaac Newton<\\/p>\",\"\",\"\"]', '[\"<p>inventor<\\/p>\",\"<p>composer<\\/p>\",\"<p>political leader<\\/p>\",\"<p>writer<\\/p>\",\"<p>scientist<\\/p>\",\"\",\"\"]', '[\"<p>inventor<\\/p>\",\"<p>composer<\\/p>\",\"<p>political leader<\\/p>\",\"<p>writer<\\/p>\",\"<p>scientist<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 08:52:21', 0, 0, 0, NULL),
(63, 'ebookUpload', 3, 0, 35, '<p>Amazing Creatures</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkVreFQxUkZlVTE2VFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 09:30:25', 0, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `screen`, `openLock`, `orderNo`) VALUES
(64, 'ebookUpload', 3, 0, 36, '<p>A World Tour</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkUxM1RWUkZlVTFFU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 09:31:54', 0, 0, 0, NULL),
(65, 'ebookUpload', 3, 0, 37, '<p>Our Music</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkUxM1RsUkZlVTFFYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 09:36:10', 0, 0, 0, NULL),
(66, 'ebookUpload', 3, 0, 38, '<p>Indian Sportswomen</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkZFeFRucEZlVTE2UVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 09:37:40', 0, 0, 0, NULL),
(67, 'ebookUpload', 3, 0, 39, '<p>Their Strange Ways</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkZWM1RYcEZlVTVFU1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 09:38:54', 0, 0, 0, NULL),
(68, 'mcq', 3, 0, 40, '<p>Which of the following features belongs to the penguin?</p>', '[\"\",\"\"]', '[\"<p>It has a waddling walk.<\\/p>\",\"<p>It is a scavenger.<\\/p>\",\"<p>It is the largest flightless bird.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:10:36', 0, 0, 0, NULL),
(69, 'mcq', 3, 0, 40, '<p>Which bird is considered a symbol of peace?</p>', '[\"\",\"\"]', '[\"<p>owl<\\/p>\",\"<p>swan<\\/p>\",\"<p>dove<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:11:20', 0, 0, 0, NULL),
(70, 'mcq', 3, 0, 40, '<p>In old times, _________ used to serve as carriers of messages.</p>', '[\"\",\"\"]', '[\"<p>parrots<\\/p>\",\"<p>pigeons<\\/p>\",\"<p>peacocks<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:12:07', 0, 0, 0, NULL),
(71, 'mcq', 3, 0, 40, '<p>Which of the following is the second tallest bird in the world?</p>', '[\"\",\"\"]', '[\"<p>emu<\\/p>\",\"<p>kiwi<\\/p>\",\"<p>goose<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:12:48', 0, 0, 0, NULL),
(72, 'mcq', 3, 0, 40, '<p>Which among the following is a waterbird?</p>', '[\"\",\"\"]', '[\"<p>eagle<\\/p>\",\"<p>duck<\\/p>\",\"<p>turkey<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:13:28', 0, 0, 0, NULL),
(73, 'mch', 3, 0, 40, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>kiwi<\\/p>\",\"<p>eagle<\\/p>\",\"<p>penguin<\\/p>\",\"<p>swan<\\/p>\",\"<p>peacock<\\/p>\",\"\",\"\"]', '[\"<p>New Zealand<\\/p>\",\"<p>talons<\\/p>\",\"<p>Antarctica<\\/p>\",\"<p>goddess Saraswati<\\/p>\",\"<p>India<\\/p>\",\"\",\"\"]', '[\"<p>New Zealand<\\/p>\",\"<p>talons<\\/p>\",\"<p>Antarctica<\\/p>\",\"<p>goddess Saraswati<\\/p>\",\"<p>India<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:15:32', 0, 0, 0, NULL),
(74, 'ebookUpload', 3, 0, 41, '<p>Friends with Feathers</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkUwd1RsUkZlVTE2V1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:16:57', 0, 0, 0, NULL),
(75, 'vid', 3, 0, 44, '<p>Flag Quiz</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/8682821_4-2-Flag-Quiz.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:28:31', 0, 0, 0, NULL),
(76, 'ebookUpload', 3, 0, 43, '<p>Flag Quiz</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkUweFRucEZlVTE2V1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:29:27', 0, 0, 0, NULL),
(77, 'mcq', 3, 0, 42, '<p>What is the name given to the symbol that represents a person, family, corporation or country?</p>', '[\"\",\"\"]', '[\"<p>court of arms<\\/p>\",\"<p>coat of arms<\\/p>\",\"<p>coat of alms<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:31:03', 0, 0, 0, NULL),
(78, 'mcq', 3, 0, 42, '<p>What is special about the flags of Cyprus and Kosovo?</p>', '[\"\",\"\"]', '[\"<p>They do not have rectangular flags.<\\/p>\",\"<p>The only two flags with leaves on them.<\\/p>\",\"<p>The only two flags with their country&rsquo;s map on them.<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:31:57', 0, 0, 0, NULL),
(79, 'mcq', 3, 0, 42, '<p>Which country&rsquo;s flag has a white dragon holding jewels in its claws?</p>', '[\"\",\"\"]', '[\"<p>Malaysia<\\/p>\",\"<p>Bhutan<\\/p>\",\"<p>Vietnam<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:32:43', 0, 0, 0, NULL),
(80, 'mcq', 3, 0, 42, '<p>Which country&rsquo;s national flag used to have a golden hammer and sickle and a golden-bordered star on a red background?</p>', '[\"\",\"\"]', '[\"<p>Maldives<\\/p>\",\"<p>Mexico<\\/p>\",\"<p>USSR<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:33:20', 0, 0, 0, NULL),
(81, 'mcq', 3, 0, 42, '<p>Which country&rsquo;s flag has a yellow 14-pointed star on a blue background?</p>', '[\"\",\"\"]', '[\"<p>Malaysia<\\/p>\",\"<p>Maldives<\\/p>\",\"<p>Mexico<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:33:56', 0, 0, 0, NULL),
(82, 'vid', 3, 0, 45, '<p>Great Inventions</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/19310031_4-3-Great-Inventions.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 10:42:43', 0, 0, 0, NULL),
(83, 'mch', 3, 0, 47, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>The Wright Brothers<\\/p>\",\"<p>John Logie Baird<\\/p>\",\"<p>Alexander Graham Bell<\\/p>\",\"<p>Karl Benz<\\/p>\",\"<p>Walter Hunt<\\/p>\",\"\",\"\"]', '[\"<p>aeroplane<\\/p>\",\"<p>television<\\/p>\",\"<p>telephone<\\/p>\",\"<p>car<\\/p>\",\"<p>safety pin<\\/p>\",\"\",\"\"]', '[\"<p>aeroplane<\\/p>\",\"<p>television<\\/p>\",\"<p>telephone<\\/p>\",\"<p>car<\\/p>\",\"<p>safety pin<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:06:54', 0, 0, 0, NULL),
(84, 'ebookUpload', 3, 0, 46, '<p>Great Inventions</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkZWM1QwUkZlVTFxYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:07:53', 0, 0, 0, NULL),
(85, 'ebookUpload', 3, 0, 48, '<p>Brainpower</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkZFd1RrUkZlVTVVVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:16:41', 0, 0, 0, NULL),
(86, 'mcq', 3, 0, 49, '<p>Which of the following is in alphabetical order?</p>', '[\"\",\"\"]', '[\"<p>great, book, cat, table<\\/p>\",\"<p>cat, great, book, table<\\/p>\",\"<p>book, cat, great, table<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:17:44', 0, 0, 0, NULL),
(87, 'mcq', 3, 0, 49, '<p>Which of the following is a festival?</p>', '[\"\",\"\"]', '[\"<p>Easter<\\/p>\",\"<p>Sunday<\\/p>\",\"<p>July<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:18:33', 0, 0, 0, NULL),
(88, 'mcq', 3, 0, 49, '<p>What will you get if you join two semicircles?</p>', '[\"\",\"\"]', '[\"<p>an oval<\\/p>\",\"<p>a circle<\\/p>\",\"<p>another semicircle<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:19:13', 0, 0, 0, NULL),
(89, 'mcq', 3, 0, 49, '<p>What will you add to a glass of lime juice to make it chilled?</p>', '[\"\",\"\"]', '[\"<p>sugar<\\/p>\",\"<p>water<\\/p>\",\"<p>ice<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:19:58', 0, 0, 0, NULL),
(90, 'mcq', 3, 0, 49, '<p>Which of the following is in alphabetical order?</p>', '[\"\",\"\"]', '[\"<p>city, place, maize, drum<\\/p>\",\"<p>city, drum, maize, place<\\/p>\",\"<p>city, drum, place, maize<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:20:39', 0, 0, 0, NULL),
(91, 'vid', 3, 0, 50, '<p>Care for Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/10246806_4-5Care-for-Animals.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:49:17', 0, 0, 0, NULL),
(92, 'ebookUpload', 3, 0, 51, '<p>Care for Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFJOUkZWNFRWUkZlVTVFWnowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:49:46', 0, 0, 0, NULL),
(93, 'tnf', 3, 0, 52, '<p>Animals feel both love and pain like humans do.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:50:16', 0, 0, 0, NULL),
(94, 'tnf', 3, 0, 52, '<p>We should not play with our pets as they can be dangerous.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:50:36', 0, 0, 0, NULL),
(95, 'tnf', 3, 0, 52, '<p>It is a good habit to feed birds.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:50:55', 0, 0, 0, NULL),
(96, 'tnf', 3, 0, 52, '<p>Stray dogs should be pelted with stones.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:51:11', 0, 0, 0, NULL),
(97, 'tnf', 3, 0, 52, '<p>We should respect life in all forms.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-28 11:51:30', 0, 0, 0, NULL),
(99, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>bill<\\/p>\",\"<p>steal<\\/p>\",\"<p>house<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/17447592_1-2-1.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:12:00', 0, 0, 0, NULL),
(100, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>flower<\\/p>\",\"<p>race<\\/p>\",\"<p>computer<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/15112492_1-2-2.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:13:53', 0, 0, 0, NULL),
(101, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>garden<\\/p>\",\"<p>cheese<\\/p>\",\"<p>cake<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/7965893_1-2-3.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:15:50', 0, 0, 0, NULL),
(102, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>lake<\\/p>\",\"<p>river<\\/p>\",\"<p>salt<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/16867339_1-2-4.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:17:25', 0, 0, 0, NULL),
(103, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>bike<\\/p>\",\"<p>cart<\\/p>\",\"<p>learn<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/16070979_1-2-5.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:19:13', 0, 0, 0, NULL),
(104, 'mcq', 3, 1, 53, '<p>Listen to the audio and click the word that rhymes:</p>', '[\"\",\"\"]', '[\"<p>kid<\\/p>\",\"<p>candy<\\/p>\",\"<p>snow<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/6453494_1-2-6.mp3', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 05:20:45', 0, 0, 0, NULL),
(105, 'ebookUpload', 3, 0, 55, '<p>Matchless Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFZOVkVWNVRYcEZlVTVVUVQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:28:33', 0, 0, 0, NULL),
(106, 'vid', 3, 0, 54, '<p>Matchless Animals</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/18187641_5-1-Matchless-Animals.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:31:25', 0, 0, 0, NULL),
(107, 'tnf', 3, 0, 56, '<p>The zunzuncito is the other name for a marmoset.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:32:03', 0, 0, 0, NULL),
(108, 'tnf', 3, 0, 56, '<p>The hummingbird is the fastest flying bird on the planet.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:32:23', 0, 0, 0, NULL),
(109, 'tnf', 3, 0, 56, '<p>Komodo dragons are found in Indonesia.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:32:41', 0, 0, 0, NULL),
(110, 'tnf', 3, 0, 56, '<p>Giantwētāis found only in Australia.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:33:10', 0, 0, 0, NULL),
(111, 'tnf', 3, 0, 56, '<p>Pygmy marmosets are monkeys.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:33:34', 0, 0, 0, NULL),
(112, 'ebookUpload', 3, 0, 58, '<p>Classical Dances</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFZOVkVWNVRtcEZlVTE2V1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"0\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:37:12', 0, 0, 0, NULL),
(113, 'vid', 3, 0, 57, '<p>Classical Dances</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/5239116_5-2-Classical-Dances.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:38:56', 0, 0, 0, NULL),
(114, 'mch', 3, 0, 59, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>sattriya<\\/p>\",\"<p>kathak<\\/p>\",\"<p>mohiniyattam<\\/p>\",\"<p>kuchipudi<\\/p>\",\"<p>bharatanatyam<\\/p>\",\"\",\"\"]', '[\"<p>Assam<\\/p>\",\"<p>Uttar Pradesh<\\/p>\",\"<p>Kerala<\\/p>\",\"<p>Andhra Pradesh\\/Telangana<\\/p>\",\"<p>Tamil Nadu<\\/p>\",\"\",\"\"]', '[\"<p>Assam<\\/p>\",\"<p>Uttar Pradesh<\\/p>\",\"<p>Kerala<\\/p>\",\"<p>Andhra Pradesh\\/Telangana<\\/p>\",\"<p>Tamil Nadu<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:40:59', 0, 0, 0, NULL),
(115, 'ebookUpload', 3, 0, 60, '<p>Electricity</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFZOVkVWNVRucEZlVTFVVFQwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:43:45', 0, 0, 0, NULL),
(116, 'tnf', 3, 0, 61, '<p>Bhadla Solar Park is located in Jaipur, Rajasthan.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:44:29', 0, 0, 0, NULL),
(117, 'tnf', 3, 0, 61, '<p>Kurnool Ultra Mega Solar Park is located in Andhra Pradesh.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:44:47', 0, 0, 0, NULL),
(118, 'tnf', 3, 0, 61, '<p>The largest solar power plant in the world is Pavagada Solar Park.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:45:10', 0, 0, 0, NULL),
(119, 'tnf', 3, 0, 61, '<p>Bhadla Solar Park is the world&rsquo;s largest solar park in the world.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 't', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:45:30', 0, 0, 0, NULL),
(120, 'tnf', 3, 0, 61, '<p>NP Kunta Ultra Mega Solar Park is located in Rajasthan.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', 'f', '[]', '{\"t\":\"\",\"f\":\"\"}', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:45:53', 0, 0, 0, NULL),
(121, 'ebookUpload', 3, 0, 63, '<p>Animal Sounds</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFZOVkVWNVQwUkZlVTFxYXowPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:48:46', 0, 0, 0, NULL),
(122, 'vid', 3, 0, 62, '<p>Animal Sounds</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/14735809_5-4-Animal-Sounds.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:50:41', 0, 0, 0, NULL),
(123, 'mch', 3, 0, 64, '<p>Match the following.</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"<p>croak<\\/p>\",\"<p>hoot<\\/p>\",\"<p>squeak<\\/p>\",\"<p>bleat<\\/p>\",\"<p>neigh<\\/p>\",\"\",\"\"]', '[\"<p>frog<\\/p>\",\"<p>owl<\\/p>\",\"<p>bat<\\/p>\",\"<p>sheep<\\/p>\",\"<p>horse<\\/p>\",\"\",\"\"]', '[\"<p>frog<\\/p>\",\"<p>owl<\\/p>\",\"<p>bat<\\/p>\",\"<p>sheep<\\/p>\",\"<p>horse<\\/p>\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:52:29', 0, 0, 0, NULL),
(124, 'ebookUpload', 3, 0, 66, '<p>National Games</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://orchid.vivadigitalindia.net/v/VFdwQmVFMXFTVFZOVkVWNVQxUkZlVTFVV1QwPQ', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:55:43', 0, 0, 0, NULL),
(125, 'vid', 3, 0, 65, '<p>National Games</p>', '[\"\",\"\"]', '[\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', NULL, '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', 'https://sunflower.vivadigitalindia.net/media/file_manager/8409797_5-5-National-games.mp4', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:57:33', 0, 0, 0, NULL),
(126, 'mcq', 3, 0, 67, '<p>Volleyball is the national game of __________.</p>', '[\"\",\"\"]', '[\"<p>India and Sri Lanka<\\/p>\",\"<p>Sri Lanka and Nepal<\\/p>\",\"<p>India and Nepal<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '1', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 06:59:25', 0, 0, 0, NULL),
(127, 'mcq', 3, 0, 67, '<p>The national sport of Canada is __________.</p>', '[\"\",\"\"]', '[\"<p>ice hockey<\\/p>\",\"<p>baseball<\\/p>\",\"<p>basketball<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 07:00:17', 0, 0, 0, NULL),
(128, 'mcq', 3, 0, 67, '<p>Capoeira is the national sport of ___________.</p>', '[\"\",\"\"]', '[\"<p>the Philippines<\\/p>\",\"<p>Chile<\\/p>\",\"<p>Brazil<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 07:02:29', 0, 0, 0, NULL),
(129, 'mcq', 3, 0, 67, '<p>__________is a martial art practised in the Philippines.</p>', '[\"\",\"\"]', '[\"<p>Arnis<\\/p>\",\"<p>Charreada<\\/p>\",\"<p>Pato<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '0', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 07:03:40', 0, 0, 0, NULL);
INSERT INTO `list` (`id`, `type`, `userId`, `audio_id`, `set_id`, `question`, `quetionFill`, `mcq`, `qLeft`, `qRight`, `qAnswer`, `answer`, `mylist`, `myans`, `color`, `md_list`, `3d_list`, `text`, `solutions`, `url`, `image`, `label`, `flowchart`, `gameId`, `cdate`, `flag`, `screen`, `openLock`, `orderNo`) VALUES
(130, 'mcq', 3, 0, 67, '<p>Which of the following sports is not played on horsebacks?</p>', '[\"\",\"\"]', '[\"<p>pato<\\/p>\",\"<p>charreada<\\/p>\",\"<p>tejo<\\/p>\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '[\"\",\"\",\"\",\"\",\"\",\"\",\"\"]', '2', '[]', '[]', '[\"#000000\"]', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\",\"ans3\":\"[\\\"\\\"]\",\"ans4\":\"[\\\"\\\"]\",\"ans5\":\"[\\\"\\\"]\",\"ans6\":\"[\\\"\\\"]\"}', '{\"title\":\"[\\\"\\\"]\",\"ans1\":\"[\\\"\\\"]\",\"ans2\":\"[\\\"\\\"]\"}', '', '', '', '', '', '{\"id\":\"[\\\"0\\\"]\",\"root\":\"[\\\"\\\"]\",\"parent\":\"[\\\"\\\"]\",\"show\":\"[\\\"1\\\"]\"}', 0, '2020-12-29 07:04:15', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_chapter`
--

CREATE TABLE `mastar_chapter` (
  `chap_id` int(10) NOT NULL,
  `chap_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_chapter`
--

INSERT INTO `mastar_chapter` (`chap_id`, `chap_name`, `deleteflag`) VALUES
(1, 'Chapter 1', 0),
(2, 'Chapter 2', 0),
(3, 'Chapter 3', 0),
(4, 'Chapter 4', 0),
(5, 'Chapter 5', 0),
(6, 'Chapter 6', 0),
(7, 'Chapter 7', 0),
(8, 'Chapter 8', 0),
(9, 'Chapter 9', 0),
(10, 'Chapter 10', 0),
(11, 'Chapter 11', 0),
(12, 'Chapter 12', 0),
(13, 'Chapter 13', 0),
(14, 'Chapter 14', 0),
(15, 'Chapter 15', 0),
(16, 'Chapter 16', 0),
(17, 'Chapter 17', 0),
(18, 'Chapter 18', 0),
(19, 'Chapter 19', 0),
(20, 'Chapter 20 ', 0),
(21, 'Chapter 21', 0),
(22, 'Chapter 22', 0),
(23, 'Chapter 23', 0),
(24, 'Chapter 24', 0),
(25, 'Chapter 25', 0),
(26, 'Chapter 26', 0),
(27, 'Chapter 27', 0),
(28, 'Chapter 28', 0),
(29, 'Chapter 29', 0),
(30, 'Chapter 30', 0),
(70, 'पाठ 30', 0),
(69, 'पाठ 29', 0),
(68, 'पाठ 28', 0),
(38, 'पाठ 1', 0),
(39, 'पाठ 2', 0),
(67, 'पाठ 27', 0),
(41, 'पाठ 3', 0),
(66, 'पाठ 26', 0),
(44, 'पाठ 4', 0),
(45, 'पाठ 5', 0),
(46, 'पाठ 6', 0),
(47, 'पाठ 7', 0),
(48, 'पाठ 8', 0),
(49, 'पाठ 9', 0),
(50, 'पाठ 10', 0),
(51, 'पाठ 11', 0),
(52, 'पाठ 12', 0),
(53, 'पाठ 13', 0),
(54, 'पाठ 14', 0),
(55, 'पाठ 15', 0),
(56, 'पाठ 16', 0),
(57, 'पाठ 17', 0),
(58, 'पाठ 18', 0),
(59, 'पाठ 19', 0),
(60, 'पाठ 20', 0),
(61, 'पाठ 21', 0),
(62, 'पाठ 22', 0),
(63, 'पाठ 23', 0),
(64, 'पाठ 24', 0),
(65, 'पाठ 25', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_class`
--

CREATE TABLE `mastar_class` (
  `class_id` tinyint(4) NOT NULL,
  `c_img` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `class_name` varchar(30) COLLATE utf8_croatian_ci NOT NULL,
  `class_subject` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_class`
--

INSERT INTO `mastar_class` (`class_id`, `c_img`, `class_name`, `class_subject`, `deleteflag`) VALUES
(1, '20201126054832_claas1.png', 'Class 1', '11', 0),
(2, '20201126054856_2.png', 'Class 2', '1,9,11,12', 0),
(3, '20201126055024_3.png', 'Class 3', '7,11', 0),
(4, '20201126055416_4.png', 'Class 4', '11', 0),
(5, '20201126055107_5.png', 'Class 5', '11', 0),
(6, '20201126055055_6.png', 'Class 6', '10,11', 0),
(7, '20201126055124_7.png', 'Class 7', '11,12', 0),
(8, '20201126055149_8.png', 'Class 8', '11,12', 0),
(9, '20201126074426_9.png', 'Class 9', '11', 0),
(10, '20201126074433_10.png', 'Class 10', '11,12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_series`
--

CREATE TABLE `mastar_series` (
  `series_id` tinyint(4) NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `series_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `series_img` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL DEFAULT '0',
  `module_id` int(11) DEFAULT '0',
  `series_num` int(11) NOT NULL DEFAULT '0',
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_series`
--

INSERT INTO `mastar_series` (`series_id`, `slug`, `series_name`, `series_img`, `subject_id`, `class_id`, `module_id`, `series_num`, `deleteflag`) VALUES
(1, 'life-7', 'Life', '20201224074449_2-life.png', 7, 3, 2, 0, 0),
(2, 'india-7', 'India', '20201224074500_1-india.png', 7, 3, 2, 2, 0),
(3, 'scitech-7', 'Sci-Tech ', '20201224084803_3-sci.png', 7, 3, 2, 2, 0),
(4, 'explore-7', 'Explore', '20201224092806_4-explore.png', 7, 3, 2, 4, 0),
(5, 'world-7', 'World', '20201224100200_5-world.png', 7, 3, 2, 1, 0),
(6, 'literature-7', 'Literature', '20201224110458_6-literature.png', 7, 3, 2, 3, 0),
(7, 'brainwaves-7', 'Brainwaves', '20201228042336_7-brain.png', 7, 3, 2, 2, 0),
(8, 'values-7', 'Values', '20201228044703_8-values.png', 7, 3, 2, 3, 0),
(9, 'sports-7', 'Sports', '20201228073024_9-sports.png', 7, 3, 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mastar_subject`
--

CREATE TABLE `mastar_subject` (
  `sub_id` tinyint(4) NOT NULL,
  `sub_name` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `sub_cover` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `sub_month` varchar(255) COLLATE utf8_croatian_ci NOT NULL DEFAULT '0',
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `mastar_subject`
--

INSERT INTO `mastar_subject` (`sub_id`, `sub_name`, `slug`, `sub_cover`, `sub_month`, `deleteflag`) VALUES
(1, 'English', 'english', 'english.jpg', '0', 0),
(2, 'Science', 'science', 'science.png', '0', 0),
(3, 'Computer', 'computer', NULL, '0', 1),
(4, 'Math', 'math', 'maths.png', '0', 0),
(5, 'Hindi', 'hindi', NULL, '0', 0),
(6, 'Social Studies', 'social-studies', NULL, '0', 1),
(7, 'G.K', 'gk', 'gk.png', '1', 0),
(8, 'EVS', 'evs', NULL, '0', 0),
(9, 'Computer Science', 'computer-science', NULL, '0', 0),
(10, 'Social Science', 'social-science', NULL, '0', 0),
(11, 'G.K TEST', 'gk-test', 'gk.png', '1', 0),
(12, 'Math TEST', 'math-test', 'maths.png', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `master_module`
--

CREATE TABLE `master_module` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `slug` varchar(256) COLLATE utf8_croatian_ci DEFAULT NULL,
  `m_img` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `subject_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `m_num` int(11) NOT NULL,
  `m_url` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `deleteflag` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `master_module`
--

INSERT INTO `master_module` (`m_id`, `m_name`, `slug`, `m_img`, `subject_id`, `class_id`, `m_num`, `m_url`, `deleteflag`) VALUES
(1, 'MODULE 1', 'module-1', '20201222115448_icon.png', 11, 10, 0, '', 0),
(2, 'GK Lessons', 'gk-lessons', '20201224074312_1-gk-lesson.png', 7, 3, 1, '', 0),
(3, 'Listening and Speaking', 'listening-and-speaking', '20201224074333_2-Listing-and-Speaking.png', 7, 3, 2, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8_croatian_ci NOT NULL,
  `notify_desc` text COLLATE utf8_croatian_ci NOT NULL,
  `subject` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `link` text COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notify_logs`
--

CREATE TABLE `notify_logs` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `pushid` int(11) NOT NULL,
  `view` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notify_push`
--

CREATE TABLE `notify_push` (
  `id` int(11) NOT NULL,
  `notifyid` int(11) NOT NULL,
  `notify_title` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `notify_desc` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `sender` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `level` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `school` int(11) NOT NULL DEFAULT '0',
  `class` int(11) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(100) NOT NULL,
  `userId` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `series` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `class` varchar(250) COLLATE utf8_croatian_ci NOT NULL,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('Active','Inactive') COLLATE utf8_croatian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `class` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `subject` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `series` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `chapter` int(100) NOT NULL,
  `chapterTitle` mediumtext COLLATE utf8_croatian_ci,
  `category` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `url` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `year` int(11) NOT NULL DEFAULT '0',
  `month` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `modified` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `flag` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `title`, `image`, `status`, `description`, `class`, `subject`, `series`, `chapter`, `chapterTitle`, `category`, `url`, `year`, `month`, `module`, `modified`, `flag`) VALUES
(1, 'GK Book-3', '', 'Active', '', '3', '7', '1', 1, '1', '1', '', 0, 1, 2, '2020-12-23 10:50:57', 0),
(2, 'GK Book-3', '', 'Active', '', '3', '7', '1', 1, '1', '2', '', 0, 1, 2, '2020-12-23 11:02:17', 0),
(3, 'GK Book-3', '', 'Active', '', '3', '7', '1', 1, '1', '3', '', 0, 1, 2, '2020-12-23 11:02:50', 0),
(4, 'GK Book-3', '', 'Active', '', '3', '7', '2', 2, '2', '1', '', 0, 1, 2, '2020-12-23 12:02:42', 0),
(5, 'GK Book-3', '', 'Active', '', '3', '7', '2', 2, '2', '2', '', 0, 1, 2, '2020-12-23 12:03:35', 0),
(6, 'GK Book-3', '', 'Active', '', '3', '7', '2', 2, '2', '3', '', 0, 1, 2, '2020-12-23 12:04:51', 0),
(7, 'GK Book-3', '', 'Active', '', '3', '7', '', 1, '3', '4', '', 0, 1, 3, '2020-12-24 06:34:32', 0),
(8, 'GK Book-3', '', 'Active', '', '3', '7', '3', 3, '4', '1', '', 0, 1, 2, '2020-12-24 09:06:54', 0),
(9, 'GK Book-3', '', 'Active', '', '3', '7', '3', 3, '4', '2', '', 0, 1, 2, '2020-12-24 09:07:56', 0),
(10, 'GK Book-3', '', 'Active', '', '3', '7', '3', 3, '4', '3', '', 0, 1, 2, '2020-12-24 09:08:17', 0),
(11, 'GK Book-3', '', 'Active', '', '3', '7', '5', 5, '6', '2', '', 0, 2, 2, '2020-12-24 10:16:28', 0),
(12, 'GK Book-3', '', 'Active', '', '3', '7', '4', 4, '5', '2', '', 0, 1, 2, '2020-12-24 09:39:55', 0),
(13, 'GK Book-3', '', 'Active', '', '3', '7', '4', 4, '5', '3', '', 0, 1, 2, '2020-12-24 09:40:25', 0),
(14, 'GK Book-3', '', 'Active', '', '3', '7', '5', 5, '6', '1', '', 0, 2, 2, '2020-12-24 10:16:08', 0),
(15, 'GK Book-3', '', 'Active', '', '3', '7', '5', 5, '6', '3', '', 0, 2, 2, '2020-12-24 10:17:29', 0),
(16, 'GK Book-3', '', 'Active', '', '3', '7', '6', 6, '7', '1', '', 0, 2, 2, '2020-12-24 11:12:23', 0),
(17, 'GK Book-3', '', 'Active', '', '3', '7', '6', 6, '7', '2', '', 0, 2, 2, '2020-12-24 11:12:46', 0),
(18, 'GK Book-3', '', 'Active', '', '3', '7', '6', 6, '7', '3', '', 0, 2, 2, '2020-12-24 11:13:09', 0),
(19, 'GK Book-3', '', 'Active', '', '3', '7', '8', 8, '9', '1', '', 0, 2, 2, '2020-12-28 04:49:10', 0),
(20, 'GK Book-3', '', 'Active', '', '3', '7', '7', 7, '8', '2', '', 0, 2, 2, '2020-12-28 04:31:04', 0),
(21, 'GK Book-3', '', 'Active', '', '3', '7', '7', 7, '8', '3', '', 0, 2, 2, '2020-12-28 04:31:30', 0),
(22, 'GK Book-3', '', 'Active', '', '3', '7', '8', 8, '9', '2', '', 0, 2, 2, '2020-12-28 04:48:33', 0),
(23, 'GK Book-3', '', 'Active', '', '3', '7', '8', 8, '9', '3', '', 0, 2, 2, '2020-12-28 04:50:01', 0),
(24, 'GK Book-3', '', 'Active', '', '3', '7', '1', 1, '10', '3', '', 0, 3, 2, '2020-12-28 05:35:25', 0),
(25, 'GK Book-3', '', 'Active', '', '3', '7', '1', 9, '11', '3', '', 0, 3, 2, '2020-12-28 05:41:03', 0),
(26, 'GK Book-3', '', 'Active', '', '3', '7', '1', 9, '11', '1', '', 0, 3, 2, '2020-12-28 06:49:59', 0),
(27, 'GK Book-3', '', 'Active', '', '3', '7', '5', 10, '12', '1', '', 0, 3, 2, '2020-12-28 07:06:14', 0),
(28, 'GK Book-3', '', 'Active', '', '3', '7', '5', 10, '12', '3', '', 0, 3, 2, '2020-12-28 07:06:42', 0),
(29, 'GK Book-3', '', 'Active', '', '3', '7', '2', 11, '13', '1', '', 0, 3, 2, '2020-12-28 07:22:20', 0),
(30, 'GK Book-3', '', 'Active', '', '3', '7', '2', 11, '13', '3', '', 0, 3, 2, '2020-12-28 07:22:46', 0),
(31, 'GK Book-3', '', 'Active', '', '3', '7', '9', 12, '14', '3', '', 0, 3, 2, '2020-12-28 07:32:38', 0),
(32, 'GK Book-3', '', 'Active', '', '3', '7', '9', 12, '14', '1', '', 0, 3, 2, '2020-12-28 07:36:29', 0),
(33, 'GK Book-3', '', 'Active', '', '3', '7', '4', 13, '15', '1', '', 0, 3, 2, '2020-12-28 08:47:44', 0),
(34, 'GK Book-3', '', 'Active', '', '3', '7', '4', 13, '15', '3', '', 0, 3, 2, '2020-12-28 08:48:08', 0),
(35, 'GK Book-3', '', 'Active', '', '3', '7', '1', 9, '11', '2', '', 0, 3, 2, '2020-12-28 09:25:51', 0),
(36, 'GK Book-3', '', 'Active', '', '3', '7', '5', 10, '12', '2', '', 0, 3, 2, '2020-12-28 09:26:49', 0),
(37, 'GK Book-3', '', 'Active', '', '3', '7', '2', 11, '13', '2', '', 0, 3, 2, '2020-12-28 09:33:05', 0),
(38, 'GK Book-3', '', 'Active', '', '3', '7', '9', 12, '14', '2', '', 0, 3, 2, '2020-12-28 09:33:46', 0),
(39, 'GK Book-3', '', 'Active', '', '3', '7', '4', 13, '15', '2', '', 0, 3, 2, '2020-12-28 09:34:24', 0),
(40, 'GK Book-3', '', 'Active', '', '3', '7', '1', 14, '16', '3', '', 0, 4, 2, '2020-12-28 10:08:50', 0),
(41, 'GK Book-3', '', 'Active', '', '3', '7', '1', 14, '16', '2', '', 0, 4, 2, '2020-12-28 10:09:20', 0),
(42, 'GK Book-3', '', 'Active', '', '3', '7', '5', 15, '17', '3', '', 0, 4, 2, '2020-12-28 10:24:28', 0),
(43, 'GK Book-3', '', 'Active', '', '3', '7', '5', 15, '17', '2', '', 0, 4, 2, '2020-12-28 10:24:58', 0),
(44, 'GK Book-3', '', 'Active', '', '3', '7', '5', 15, '17', '1', '', 0, 4, 2, '2020-12-28 10:25:31', 0),
(45, 'GK Book-3', '', 'Active', '', '3', '7', '3', 16, '18', '1', '', 0, 4, 2, '2020-12-28 10:39:07', 0),
(46, 'GK Book-3', '', 'Active', '', '3', '7', '3', 16, '18', '2', '', 0, 4, 2, '2020-12-28 10:39:28', 0),
(47, 'GK Book-3', '', 'Active', '', '3', '7', '3', 16, '18', '3', '', 0, 4, 2, '2020-12-28 10:40:22', 0),
(48, 'GK Book-3', '', 'Active', '', '3', '7', '7', 17, '19', '2', '', 0, 4, 2, '2020-12-28 11:13:00', 0),
(49, 'GK Book-3', '', 'Active', '', '3', '7', '7', 17, '19', '3', '', 0, 4, 2, '2020-12-28 11:14:31', 0),
(50, 'GK Book-3', '', 'Active', '', '3', '7', '8', 18, '20', '1', '', 0, 4, 2, '2020-12-28 11:47:17', 0),
(51, 'GK Book-3', '', 'Active', '', '3', '7', '8', 18, '20', '2', '', 0, 12, 2, '2020-12-28 11:48:25', 0),
(52, 'GK Book-3', '', 'Active', '', '3', '7', '8', 18, '20', '3', '', 0, 4, 2, '2020-12-28 11:48:03', 0),
(53, 'GK Book-3', '', 'Active', '', '3', '7', '', 1, '3', '5', '', 0, 1, 3, '2020-12-29 04:28:08', 0),
(54, 'GK Book-3', '', 'Active', '', '3', '7', '1', 19, '21', '1', '', 0, 5, 2, '2020-12-29 06:26:11', 0),
(55, 'GK Book-3', '', 'Active', '', '3', '7', '1', 19, '21', '2', '', 0, 5, 2, '2020-12-29 06:26:54', 0),
(56, 'GK Book-3', '', 'Active', '', '3', '7', '1', 19, '21', '3', '', 0, 5, 2, '2020-12-29 06:27:24', 0),
(57, 'GK Book-3', '', 'Active', '', '3', '7', '2', 20, '22', '1', '', 0, 5, 2, '2020-12-29 06:35:07', 0),
(58, 'GK Book-3', '', 'Active', '', '3', '7', '2', 20, '22', '2', '', 0, 5, 2, '2020-12-29 06:35:30', 0),
(59, 'GK Book-3', '', 'Active', '', '3', '7', '2', 20, '22', '3', '', 0, 5, 2, '2020-12-29 06:35:59', 0),
(60, 'GK Book-3', '', 'Active', '', '3', '7', '3', 21, '23', '2', '', 0, 5, 2, '2020-12-29 06:42:30', 0),
(61, 'GK Book-3', '', 'Active', '', '3', '7', '3', 21, '23', '3', '', 0, 5, 2, '2020-12-29 06:42:58', 0),
(62, 'GK Book-3', '', 'Active', '', '3', '7', '6', 22, '24', '1', '', 0, 5, 2, '2020-12-29 06:46:55', 0),
(63, 'GK Book-3', '', 'Active', '', '3', '7', '6', 22, '24', '2', '', 0, 5, 2, '2020-12-29 06:47:24', 0),
(64, 'GK Book-3', '', 'Active', '', '3', '7', '6', 22, '24', '3', '', 0, 5, 2, '2020-12-29 06:47:47', 0),
(65, 'GK Book-3', '', 'Active', '', '3', '7', '9', 23, '25', '1', '', 0, 5, 2, '2020-12-29 06:54:02', 0),
(66, 'GK Book-3', '', 'Active', '', '3', '7', '9', 23, '25', '2', '', 0, 5, 2, '2020-12-29 06:54:32', 0),
(67, 'GK Book-3', '', 'Active', '', '3', '7', '9', 23, '25', '3', '', 0, 5, 2, '2020-12-29 06:54:53', 0),
(68, 'GK Book-3', '', 'Active', '', '3', '7', '', 1, '26', '6', '', 0, 1, 3, '2020-12-29 07:23:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `subject` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `topic` int(11) NOT NULL,
  `act_type` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `total_attempt` int(11) NOT NULL,
  `wrng_attempt` int(11) NOT NULL,
  `right_attempt` int(11) NOT NULL,
  `start_time` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `end_time` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `total_time` time NOT NULL,
  `userid` int(11) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `class`, `subject`, `course`, `topic`, `act_type`, `total_attempt`, `wrng_attempt`, `right_attempt`, `start_time`, `end_time`, `total_time`, `userid`, `created_on`) VALUES
(1, 3, 7, 1, 1, 'mch', 5, 3, 2, '2020-12-24 12:02:40', '2020-12-24 12:02:56', '00:00:16', 2, '2020-12-24 12:02:56'),
(3, 3, 7, 1, 1, 'mch', 5, 5, 0, '2020-12-24 12:04:59', '2020-12-24 12:05:13', '00:00:14', 3, '2020-12-24 12:05:13'),
(4, 3, 7, 3, 3, 'mcq', 5, 3, 2, '2020-12-24 14:45:58', '2020-12-24 14:46:08', '00:00:10', 2, '2020-12-24 14:46:08'),
(6, 3, 7, 4, 4, 'mcq', 5, 2, 3, '2020-12-28 14:24:27', '2020-12-28 14:25:11', '00:00:44', 3, '2020-12-28 14:25:11'),
(8, 3, 7, 1, 14, 'mcq', 5, 3, 2, '2020-12-28 16:00:40', '2020-12-28 16:00:53', '00:00:13', 2, '2020-12-28 16:00:53'),
(11, 3, 7, 3, 3, 'mcq', 5, 4, 1, '2020-12-28 16:50:32', '2020-12-28 16:56:09', '00:05:37', 3, '2020-12-28 16:56:09'),
(16, 3, 7, 0, 1, 'mcq', 5, 2, 0, '2020-12-28 17:10:28', '2020-12-28 17:10:49', '00:00:21', 3, '2020-12-28 17:10:49'),
(17, 3, 7, 5, 5, 'mcq', 5, 3, 2, '2020-12-28 17:22:56', '2020-12-28 17:23:18', '00:00:22', 3, '2020-12-28 17:23:18'),
(19, 3, 7, 4, 4, 'mch', 5, 4, 1, '2020-12-28 17:29:44', '2020-12-28 17:29:58', '00:00:14', 3, '2020-12-28 17:29:58'),
(24, 3, 7, 0, 1, 'mcq', 6, 0, 6, '2020-12-29 10:55:51', '2020-12-29 10:56:17', '00:00:26', 2, '2020-12-29 10:56:17'),
(29, 3, 7, 1, 1, 'mch', 5, 3, 2, '2020-12-29 12:22:15', '2020-12-29 12:22:22', '00:00:07', 1, '2020-12-29 12:22:22'),
(30, 3, 7, 0, 1, 'mcq', 5, 2, 0, '2020-12-29 12:22:42', '2020-12-29 12:22:54', '00:00:12', 1, '2020-12-29 12:22:54'),
(31, 3, 7, 9, 23, 'mcq', 5, 1, 0, '2020-12-29 12:34:50', '2020-12-29 12:35:06', '00:00:16', 2, '2020-12-29 12:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `result_typing`
--

CREATE TABLE `result_typing` (
  `id` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `typing` varchar(1000) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', 105),
(2, 'ASSAM', 105),
(3, 'ARUNACHAL PRADESH', 105),
(4, 'BIHAR', 105),
(5, 'GUJRAT', 105),
(6, 'HARYANA', 105),
(7, 'HIMACHAL PRADESH', 105),
(8, 'JAMMU & KASHMIR', 105),
(9, 'KARNATAKA', 105),
(10, 'KERALA', 105),
(11, 'MADHYA PRADESH', 105),
(12, 'MAHARASHTRA', 105),
(13, 'MANIPUR', 105),
(14, 'MEGHALAYA', 105),
(15, 'MIZORAM', 105),
(16, 'NAGALAND', 105),
(17, 'ORISSA', 105),
(18, 'PUNJAB', 105),
(19, 'RAJASTHAN', 105),
(20, 'SIKKIM', 105),
(21, 'TAMIL NADU', 105),
(22, 'TRIPURA', 105),
(23, 'UTTAR PRADESH', 105),
(24, 'WEST BENGAL', 105),
(25, 'DELHI', 105),
(26, 'GOA', 105),
(27, 'PONDICHERY', 105),
(28, 'LAKSHDWEEP', 105),
(29, 'DAMAN & DIU', 105),
(30, 'DADRA & NAGAR', 105),
(31, 'CHANDIGARH', 105),
(32, 'ANDAMAN & NICOBAR', 105),
(33, 'UTTARAKHAND', 105),
(34, 'JHARKHAND', 105),
(35, 'CHATTISGARH', 105);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `cat` varchar(10) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `typing`
--

CREATE TABLE `typing` (
  `id` int(100) NOT NULL,
  `typing_txt` text COLLATE utf8_croatian_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `u_name` varchar(150) COLLATE utf8_croatian_ci NOT NULL,
  `u_school` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_class` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_sub` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `series` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `u_email` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `u_pass` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_croatian_ci DEFAULT NULL,
  `forgot_pas_key` varchar(30) COLLATE utf8_croatian_ci DEFAULT NULL,
  `parent_mobile` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `creation_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deletflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `u_school`, `u_class`, `u_sub`, `series`, `u_email`, `u_pass`, `password`, `forgot_pas_key`, `parent_mobile`, `image`, `user_type`, `status`, `creation_time`, `deletflag`) VALUES
(2, 'Admin', NULL, NULL, NULL, NULL, 'volt@vivadigitalindia.net', 'fd29b48c9d39724e216a858f4623dc9a', 'Volt@viva02', '39112', '8287080604', 'profile.jpg', 1, 1, '2018-06-22 07:21:21', 0),
(3, 'Abhishek Kumar', NULL, NULL, NULL, NULL, 'abhishek@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080605', 'profile.jpg', 1, 1, '2020-02-04 07:21:21', 0),
(4, 'Sanjay Dubey', NULL, NULL, NULL, NULL, 'sanjay@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 1, 1, '2020-02-04 09:21:29', 0),
(5, 'Asha Rani', NULL, NULL, NULL, NULL, 'asha@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080605', 'profile.jpg', 1, 1, '2020-02-04 07:21:21', 0),
(6, 'Babita Thakur', NULL, NULL, NULL, NULL, 'babita@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 1, 1, '2020-02-04 09:21:29', 0),
(7, 'Heena Yamin', NULL, NULL, NULL, NULL, 'heena@vivadigitalindia.net', 'a57c0cd6430c251ebb19dda161b397ea', 'Volt@0202', '', '8287080606', 'profile.jpg', 1, 1, '2020-02-04 09:21:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_result`
--

CREATE TABLE `user_result` (
  `id` int(100) NOT NULL,
  `userId` int(100) NOT NULL,
  `catId` int(20) NOT NULL,
  `chapId` int(20) NOT NULL,
  `type` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `totalQuestion` int(20) NOT NULL,
  `currectAnswer` int(20) NOT NULL,
  `wrongAnswer` int(20) NOT NULL,
  `creationTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleteflag` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_adminaccount`
--

CREATE TABLE `vt_adminaccount` (
  `vc_id` int(11) NOT NULL,
  `vc_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_profile_pic` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `vc_contact` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_email` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_password` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_status` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_created_date` datetime NOT NULL,
  `vc_viewpass` varchar(100) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_forgotpassword`
--

CREATE TABLE `vt_forgotpassword` (
  `id` int(11) NOT NULL,
  `vc_email` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `vc_TicketNo` varchar(256) COLLATE utf8_croatian_ci NOT NULL,
  `vc_created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_newsreel`
--

CREATE TABLE `vt_newsreel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `news_desc` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `link` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `index_num` int(11) NOT NULL DEFAULT '0',
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_premiumfeatures`
--

CREATE TABLE `vt_premiumfeatures` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `image` text COLLATE utf8_croatian_ci NOT NULL,
  `link` text COLLATE utf8_croatian_ci NOT NULL,
  `index_num` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vt_school`
--

CREATE TABLE `vt_school` (
  `id` int(11) NOT NULL,
  `school_name` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date NOT NULL,
  `city_id` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `accstatus` enum('enabled','disabled') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'enabled',
  `mnthstatus` enum('enabled','disabled') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'enabled',
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_school`
--

INSERT INTO `vt_school` (`id`, `school_name`, `term_start`, `term_end`, `city_id`, `state`, `accstatus`, `mnthstatus`, `status`, `created_on`) VALUES
(1, 'DPS PUBLIC SCHOOL', '2020-07-01', '2021-06-25', 116, 25, 'enabled', 'enabled', 'active', '2020-12-22 09:13:49');

-- --------------------------------------------------------

--
-- Table structure for table `vt_subscribe`
--

CREATE TABLE `vt_subscribe` (
  `id` int(11) NOT NULL,
  `schoolid` int(11) NOT NULL,
  `classid` int(11) NOT NULL,
  `sublist` mediumtext COLLATE utf8_croatian_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_croatian_ci NOT NULL DEFAULT 'active',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_subscribe`
--

INSERT INTO `vt_subscribe` (`id`, `schoolid`, `classid`, `sublist`, `status`, `created_on`) VALUES
(1, 1, 1, '[\"11\"]', 'active', '2020-12-22 09:13:49'),
(2, 1, 3, '[\"7\"]', 'active', '2020-12-24 05:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `vt_useraccount`
--

CREATE TABLE `vt_useraccount` (
  `vc_id` int(11) NOT NULL,
  `vc_name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_lastname` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_username` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_gender` enum('male','female') COLLATE utf8_croatian_ci NOT NULL,
  `vc_dob` varchar(100) COLLATE utf8_croatian_ci NOT NULL DEFAULT '2001-01-01',
  `vc_studentid` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_state` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_city` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_school` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `vc_profile_pic` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `vc_contact` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_email` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_password` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `vc_class` int(2) NOT NULL,
  `vc_sectionclass` varchar(50) COLLATE utf8_croatian_ci NOT NULL DEFAULT 'A',
  `vc_subject` text COLLATE utf8_croatian_ci NOT NULL,
  `vc_status` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_created_date` datetime NOT NULL,
  `vc_viewpass` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `vc_token` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `vc_otp` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_device` varchar(10) COLLATE utf8_croatian_ci NOT NULL,
  `vc_deviceinfo` text COLLATE utf8_croatian_ci NOT NULL,
  `vc_paymentinfo` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `vt_useraccount`
--

INSERT INTO `vt_useraccount` (`vc_id`, `vc_name`, `vc_lastname`, `vc_username`, `vc_gender`, `vc_dob`, `vc_studentid`, `vc_state`, `vc_city`, `vc_school`, `vc_profile_pic`, `vc_contact`, `vc_email`, `vc_password`, `vc_class`, `vc_sectionclass`, `vc_subject`, `vc_status`, `vc_created_date`, `vc_viewpass`, `vc_token`, `vc_otp`, `vc_device`, `vc_deviceinfo`, `vc_paymentinfo`) VALUES
(1, 'Rahul', 'Rajput', 'a0001', 'male', '2000-12-15', 'ASD0001', '25', '116', '1', '', '9716006278', 'rahul.rajput@vivagroupindia.in', '0b3bc9ce555f07d127c6da44337e364f', 3, 'A', '7', 'Active', '2020-12-22 09:15:09', 'Abcd@1234', '', '', '', '', 1),
(2, 'Abhishek', 'Kumar', 'a0002', 'male', '2000-12-15', '', '25', '116', '1', '', '9716626646', 'abhishek.kumar@vivagroupindia.in', '1fd890f5030006b10154c1c731ece799', 3, 'A', '7', 'Active', '2020-12-24 05:38:03', 'Abhi@2020', '', '', '', '', 1),
(3, 'Sreetilak', 'Sambhanda', 'a0003', 'male', '2001-02-28', 'A0003', '25', '116', '1', '', '9716022545', 'sreetilak@vivagroupindia.in', '7f6baaef7a6498c4630a9f4a78bbd805', 3, 'A', '7', 'Active', '2020-12-24 06:14:41', 'Viva@123', '', '', '', '', 1),
(4, 'Narender', 'Kumar', 'a0004', 'male', '2015-06-05', 'A0001', '25', '116', '1', '', '989964f945', 'narender@vivagroupindia.in', '7f6baaef7a6498c4630a9f4a78bbd805', 3, 'A', '7', 'Active', '2020-12-24 07:07:26', 'Viva@123', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vt_user_token`
--

CREATE TABLE `vt_user_token` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `timemodified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_croatian_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `mobile` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `school` varchar(500) COLLATE utf8_croatian_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text COLLATE utf8_croatian_ci,
  `ctime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_type`
--
ALTER TABLE `category_type`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chaptername`
--
ALTER TABLE `chaptername`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cross`
--
ALTER TABLE `cross`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedbackWorkshop`
--
ALTER TABLE `feedbackWorkshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `set_id` (`set_id`);

--
-- Indexes for table `mastar_chapter`
--
ALTER TABLE `mastar_chapter`
  ADD PRIMARY KEY (`chap_id`);

--
-- Indexes for table `mastar_class`
--
ALTER TABLE `mastar_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `mastar_series`
--
ALTER TABLE `mastar_series`
  ADD PRIMARY KEY (`series_id`);

--
-- Indexes for table `mastar_subject`
--
ALTER TABLE `mastar_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `master_module`
--
ALTER TABLE `master_module`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_logs`
--
ALTER TABLE `notify_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notify_push`
--
ALTER TABLE `notify_push`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result_typing`
--
ALTER TABLE `result_typing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `typing`
--
ALTER TABLE `typing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_result`
--
ALTER TABLE `user_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_adminaccount`
--
ALTER TABLE `vt_adminaccount`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_forgotpassword`
--
ALTER TABLE `vt_forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_newsreel`
--
ALTER TABLE `vt_newsreel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_premiumfeatures`
--
ALTER TABLE `vt_premiumfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_school`
--
ALTER TABLE `vt_school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_subscribe`
--
ALTER TABLE `vt_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vt_useraccount`
--
ALTER TABLE `vt_useraccount`
  ADD PRIMARY KEY (`vc_id`);

--
-- Indexes for table `vt_user_token`
--
ALTER TABLE `vt_user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_type`
--
ALTER TABLE `category_type`
  MODIFY `cat_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chaptername`
--
ALTER TABLE `chaptername`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=604;

--
-- AUTO_INCREMENT for table `cross`
--
ALTER TABLE `cross`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbackWorkshop`
--
ALTER TABLE `feedbackWorkshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `mastar_chapter`
--
ALTER TABLE `mastar_chapter`
  MODIFY `chap_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `mastar_class`
--
ALTER TABLE `mastar_class`
  MODIFY `class_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mastar_series`
--
ALTER TABLE `mastar_series`
  MODIFY `series_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mastar_subject`
--
ALTER TABLE `mastar_subject`
  MODIFY `sub_id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `master_module`
--
ALTER TABLE `master_module`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify_logs`
--
ALTER TABLE `notify_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notify_push`
--
ALTER TABLE `notify_push`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `result_typing`
--
ALTER TABLE `result_typing`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `typing`
--
ALTER TABLE `typing`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_result`
--
ALTER TABLE `user_result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_adminaccount`
--
ALTER TABLE `vt_adminaccount`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_forgotpassword`
--
ALTER TABLE `vt_forgotpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_newsreel`
--
ALTER TABLE `vt_newsreel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_premiumfeatures`
--
ALTER TABLE `vt_premiumfeatures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vt_school`
--
ALTER TABLE `vt_school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vt_subscribe`
--
ALTER TABLE `vt_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vt_useraccount`
--
ALTER TABLE `vt_useraccount`
  MODIFY `vc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vt_user_token`
--
ALTER TABLE `vt_user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
