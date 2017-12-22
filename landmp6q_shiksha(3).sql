-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2017 at 09:35 AM
-- Server version: 5.6.22-72.0-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `landmp6q_shiksha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`) VALUES
(1, 'admin', 'testexpinator@gmail.com', 'admin1234', 'c4ca4238a0b923820dcc509a6f75849b', '2017-12-21 05:03:47');

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE IF NOT EXISTS `apps_countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `created_at`) VALUES
(1, 'MBA', '2017-12-22 07:48:53'),
(2, 'ENGINEERING', '2017-12-22 07:49:02'),
(3, 'DESIGN', '2017-12-22 07:49:09'),
(4, 'IT&SOFTWARE', '2017-12-22 07:49:17'),
(5, 'LAW', '2017-12-22 07:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `college_category`
--

CREATE TABLE IF NOT EXISTS `college_category` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college_id` int(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `college_category`
--

INSERT INTO `college_category` (`id`, `college_id`, `category_id`, `created_at`) VALUES
(1, 1, '5', '2017-12-22 08:18:45'),
(2, 1, '5', '2017-12-22 08:18:45'),
(3, 1, '5', '2017-12-22 08:18:45'),
(4, 1, '5', '2017-12-22 08:18:45'),
(5, 1, '5', '2017-12-22 08:18:45'),
(6, 1, '5', '2017-12-22 08:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `college_contact`
--

CREATE TABLE IF NOT EXISTS `college_contact` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college_id` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_contact`
--

INSERT INTO `college_contact` (`id`, `college_id`, `contact`, `email`, `website`, `created_at`) VALUES
(1, 1, '9814538487', 'testexpinator@gmail.com', 'www.kdf1.com', '2017-12-22 07:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `college_exam`
--

CREATE TABLE IF NOT EXISTS `college_exam` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `college_id` int(111) NOT NULL,
  `exam_id` varchar(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `college_facility`
--

CREATE TABLE IF NOT EXISTS `college_facility` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `college_id` int(111) NOT NULL,
  `library` longtext NOT NULL,
  `cafetaria` longtext NOT NULL,
  `hostel` longtext NOT NULL,
  `sport` longtext NOT NULL,
  `gym` longtext NOT NULL,
  `classroom` longtext NOT NULL,
  `labs` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_facility`
--

INSERT INTO `college_facility` (`id`, `college_id`, `library`, `cafetaria`, `hostel`, `sport`, `gym`, `classroom`, `labs`, `created_at`) VALUES
(1, 1, 'Knowledge Management Centre (KMC) at National Institute of Design, Ahmedabad has print, digital, audio-visual materials. It has best collection of books, periodicals and other non book resources from all corners of the world. Apart from this, the centre has a large collection of the student diploma projects, craft documentation reports and other research projects. The KMC has also showcases the design prototypes. KMC has subscription to e-databases like ACM Digital Library, EBSCO : Art and Architecture , EBSCO : Communication and Mass Media, Euromonitor International Passport GMID , Grove Art Online, Jstor database, Newspaper Direct, Proquest: Art and Architecture in Video, Proquest: Arts and Humanities, Proquest: Vogue Archive etc. KMC has a access to e-books form Cambridge University Press, Cengage, CRC press, Intellet, Oxford Handbooks etc. Its also has access to several e-journals from popular publishers like Taylor & Francis, Wile, Sage Publication etc.', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls HostelNational Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', 'National Institute of Design, Ahmedabad provides hostel to all out-stationed B.Des. students.Hostel accommodation is allocated only for a year and students have to apply for reallocation every year. Subscription to mess facilities is compulsory for all hostel residents. Local students cannot apply for hostel accommodation. Rooms are semi furnished with a bed, a desk, a chair and storage space for each student.\r\n\r\nAvailable facilities :\r\n\r\n    Boys Hostel\r\n        In-Campus Hostel\r\n    Girls Hostel', '2017-12-22 07:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `college_name`
--

CREATE TABLE IF NOT EXISTS `college_name` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` int(20) NOT NULL COMMENT '1=>private,2=>govt',
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `establishment` int(111) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `college_name`
--

INSERT INTO `college_name` (`id`, `college`, `slug`, `type`, `image`, `location`, `country`, `establishment`, `created_at`) VALUES
(1, 'National Institute of Design, Ahmedabad', 'national_institute_of_design,_ahmedabad', 1, '72788.advertisement.gif', 'India', 'India', 1988, '2017-12-22 08:18:45');

-- --------------------------------------------------------

--
-- Table structure for table `college_ranking`
--

CREATE TABLE IF NOT EXISTS `college_ranking` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college_id` varchar(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `ranking` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `status` int(20) NOT NULL COMMENT '1=>verify,2=>pending,3=>disapprove',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL COMMENT '1=>full time,2=>part time,3=>virtual classes',
  `duration` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `highlight` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `course_require`
--

CREATE TABLE IF NOT EXISTS `course_require` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `course_id` int(111) NOT NULL,
  `college_id` int(111) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `total_seat` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `college_id` int(255) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `exam` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `reg_start_date` varchar(255) NOT NULL,
  `reg_end_date` varchar(255) NOT NULL,
  `reg_available_from` varchar(255) NOT NULL,
  `exam_date` varchar(255) NOT NULL,
  `result_date` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `college_id` int(111) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `college_id`, `image`, `created_at`) VALUES
(10, 1, '88380.a.jpg', '2017-12-22 08:13:26'),
(8, 1, '13080.a - Copy.gif', '2017-12-22 08:13:26'),
(14, 1, '95911.after admin panel.png', '2017-12-22 08:13:26'),
(15, 1, '40419.ahmedabad.jpg', '2017-12-22 08:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL COMMENT '1=>verify,2=>pending,3=>decline',
  `block_status` varchar(20) NOT NULL COMMENT '1=>block,2=>unblock',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `web_page_setting`
--

CREATE TABLE IF NOT EXISTS `web_page_setting` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `logo_image` varchar(255) NOT NULL,
  `footer_contact` varchar(255) NOT NULL,
  `footer_timing` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
