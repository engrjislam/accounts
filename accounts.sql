-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2017 at 06:26 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `countries_name` varchar(64) NOT NULL DEFAULT '',
  `countries_iso_code_2` char(2) NOT NULL DEFAULT '',
  `countries_iso_code_3` char(3) NOT NULL DEFAULT '',
  `address_format_id` int(11) NOT NULL DEFAULT '0',
  `countries_status` enum('Y','N') NOT NULL,
  PRIMARY KEY (`country_id`),
  KEY `idx_countries_name_zen` (`countries_name`),
  KEY `idx_address_format_id_zen` (`address_format_id`),
  KEY `idx_iso_2_zen` (`countries_iso_code_2`),
  KEY `idx_iso_3_zen` (`countries_iso_code_3`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `countries_name`, `countries_iso_code_2`, `countries_iso_code_3`, `address_format_id`, `countries_status`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 1, 'Y'),
(2, 'Albania', 'AL', 'ALB', 1, 'Y'),
(3, 'Algeria', 'DZ', 'DZA', 1, 'Y'),
(4, 'American Samoa', 'AS', 'ASM', 1, 'Y'),
(5, 'Andorra', 'AD', 'AND', 1, 'Y'),
(6, 'Angola', 'AO', 'AGO', 1, 'Y'),
(7, 'Anguilla', 'AI', 'AIA', 1, 'Y'),
(8, 'Antarctica', 'AQ', 'ATA', 1, 'Y'),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 1, 'Y'),
(10, 'Argentina', 'AR', 'ARG', 1, 'Y'),
(11, 'Armenia', 'AM', 'ARM', 1, 'Y'),
(12, 'Aruba', 'AW', 'ABW', 1, 'Y'),
(13, 'Australia', 'AU', 'AUS', 1, 'Y'),
(14, 'Austria', 'AT', 'AUT', 5, 'Y'),
(15, 'Azerbaijan', 'AZ', 'AZE', 1, 'Y'),
(16, 'Bahamas', 'BS', 'BHS', 1, 'Y'),
(17, 'Bahrain', 'BH', 'BHR', 1, 'Y'),
(18, 'Bangladesh', 'BD', 'BGD', 1, 'Y'),
(19, 'Barbados', 'BB', 'BRB', 1, 'Y'),
(20, 'Belarus', 'BY', 'BLR', 1, 'Y'),
(21, 'Belgium', 'BE', 'BEL', 1, 'Y'),
(22, 'Belize', 'BZ', 'BLZ', 1, 'Y'),
(23, 'Benin', 'BJ', 'BEN', 1, 'Y'),
(24, 'Bermuda', 'BM', 'BMU', 1, 'Y'),
(25, 'Bhutan', 'BT', 'BTN', 1, 'Y'),
(26, 'Bolivia', 'BO', 'BOL', 1, 'Y'),
(27, 'Bosnia and Herzegowina', 'BA', 'BIH', 1, 'Y'),
(28, 'Botswana', 'BW', 'BWA', 1, 'Y'),
(29, 'Bouvet Island', 'BV', 'BVT', 1, 'Y'),
(30, 'Brazil', 'BR', 'BRA', 1, 'Y'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 1, 'Y'),
(32, 'Brunei Darussalam', 'BN', 'BRN', 1, 'Y'),
(33, 'Bulgaria', 'BG', 'BGR', 1, 'Y'),
(34, 'Burkina Faso', 'BF', 'BFA', 1, 'Y'),
(35, 'Burundi', 'BI', 'BDI', 1, 'Y'),
(36, 'Cambodia', 'KH', 'KHM', 1, 'Y'),
(37, 'Cameroon', 'CM', 'CMR', 1, 'Y'),
(38, 'Canada', 'CA', 'CAN', 2, 'Y'),
(39, 'Cape Verde', 'CV', 'CPV', 1, 'Y'),
(40, 'Cayman Islands', 'KY', 'CYM', 1, 'Y'),
(41, 'Central African Republic', 'CF', 'CAF', 1, 'Y'),
(42, 'Chad', 'TD', 'TCD', 1, 'Y'),
(43, 'Chile', 'CL', 'CHL', 1, 'Y'),
(44, 'China', 'CN', 'CHN', 1, 'Y'),
(45, 'Christmas Island', 'CX', 'CXR', 1, 'Y'),
(46, 'Cocos (Keeling) Islands', 'CC', 'CCK', 1, 'Y'),
(47, 'Colombia', 'CO', 'COL', 1, 'Y'),
(48, 'Comoros', 'KM', 'COM', 1, 'Y'),
(49, 'Congo', 'CG', 'COG', 1, 'Y'),
(50, 'Cook Islands', 'CK', 'COK', 1, 'Y'),
(51, 'Costa Rica', 'CR', 'CRI', 1, 'Y'),
(52, 'Cote D''Ivoire', 'CI', 'CIV', 1, 'Y'),
(53, 'Croatia', 'HR', 'HRV', 1, 'Y'),
(54, 'Cuba', 'CU', 'CUB', 1, 'Y'),
(55, 'Cyprus', 'CY', 'CYP', 1, 'Y'),
(56, 'Czech Republic', 'CZ', 'CZE', 1, 'Y'),
(57, 'Denmark', 'DK', 'DNK', 1, 'Y'),
(58, 'Djibouti', 'DJ', 'DJI', 1, 'Y'),
(59, 'Dominica', 'DM', 'DMA', 1, 'Y'),
(60, 'Dominican Republic', 'DO', 'DOM', 1, 'Y'),
(61, 'Timor-Leste', 'TL', 'TLS', 1, 'Y'),
(62, 'Ecuador', 'EC', 'ECU', 1, 'Y'),
(63, 'Egypt', 'EG', 'EGY', 1, 'Y'),
(64, 'El Salvador', 'SV', 'SLV', 1, 'Y'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 1, 'Y'),
(66, 'Eritrea', 'ER', 'ERI', 1, 'Y'),
(67, 'Estonia', 'EE', 'EST', 1, 'Y'),
(68, 'Ethiopia', 'ET', 'ETH', 1, 'Y'),
(69, 'Falkland Islands (Malvinas)', 'FK', 'FLK', 1, 'Y'),
(70, 'Faroe Islands', 'FO', 'FRO', 1, 'Y'),
(71, 'Fiji', 'FJ', 'FJI', 1, 'Y'),
(72, 'Finland', 'FI', 'FIN', 1, 'Y'),
(73, 'France', 'FR', 'FRA', 1, 'Y'),
(75, 'French Guiana', 'GF', 'GUF', 1, 'Y'),
(76, 'French Polynesia', 'PF', 'PYF', 1, 'Y'),
(77, 'French Southern Territories', 'TF', 'ATF', 1, 'Y'),
(78, 'Gabon', 'GA', 'GAB', 1, 'Y'),
(79, 'Gambia', 'GM', 'GMB', 1, 'Y'),
(80, 'Georgia', 'GE', 'GEO', 1, 'Y'),
(81, 'Germany', 'DE', 'DEU', 5, 'Y'),
(82, 'Ghana', 'GH', 'GHA', 1, 'Y'),
(83, 'Gibraltar', 'GI', 'GIB', 1, 'Y'),
(84, 'Greece', 'GR', 'GRC', 1, 'Y'),
(85, 'Greenland', 'GL', 'GRL', 1, 'Y'),
(86, 'Grenada', 'GD', 'GRD', 1, 'Y'),
(87, 'Guadeloupe', 'GP', 'GLP', 1, 'Y'),
(88, 'Guam', 'GU', 'GUM', 1, 'Y'),
(89, 'Guatemala', 'GT', 'GTM', 1, 'Y'),
(90, 'Guinea', 'GN', 'GIN', 1, 'Y'),
(91, 'Guinea-bissau', 'GW', 'GNB', 1, 'Y'),
(92, 'Guyana', 'GY', 'GUY', 1, 'Y'),
(93, 'Haiti', 'HT', 'HTI', 1, 'Y'),
(94, 'Heard and Mc Donald Islands', 'HM', 'HMD', 1, 'Y'),
(95, 'Honduras', 'HN', 'HND', 1, 'Y'),
(96, 'Hong Kong', 'HK', 'HKG', 1, 'Y'),
(97, 'Hungary', 'HU', 'HUN', 1, 'Y'),
(98, 'Iceland', 'IS', 'ISL', 1, 'Y'),
(99, 'India', 'IN', 'IND', 1, 'Y'),
(100, 'Indonesia', 'ID', 'IDN', 1, 'Y'),
(101, 'Iran (Islamic Republic of)', 'IR', 'IRN', 1, 'Y'),
(102, 'Iraq', 'IQ', 'IRQ', 1, 'Y'),
(103, 'Ireland', 'IE', 'IRL', 1, 'Y'),
(104, 'Israel', 'IL', 'ISR', 1, 'Y'),
(105, 'Italy', 'IT', 'ITA', 1, 'Y'),
(106, 'Jamaica', 'JM', 'JAM', 1, 'Y'),
(107, 'Japan', 'JP', 'JPN', 1, 'Y'),
(108, 'Jordan', 'JO', 'JOR', 1, 'Y'),
(109, 'Kazakhstan', 'KZ', 'KAZ', 1, 'Y'),
(110, 'Kenya', 'KE', 'KEN', 1, 'Y'),
(111, 'Kiribati', 'KI', 'KIR', 1, 'Y'),
(112, 'Korea, Democratic People''s Republic of', 'KP', 'PRK', 1, 'Y'),
(113, 'Korea, Republic of', 'KR', 'KOR', 1, 'Y'),
(114, 'Kuwait', 'KW', 'KWT', 1, 'Y'),
(115, 'Kyrgyzstan', 'KG', 'KGZ', 1, 'Y'),
(116, 'Lao People''s Democratic Republic', 'LA', 'LAO', 1, 'Y'),
(117, 'Latvia', 'LV', 'LVA', 1, 'Y'),
(118, 'Lebanon', 'LB', 'LBN', 1, 'Y'),
(119, 'Lesotho', 'LS', 'LSO', 1, 'Y'),
(120, 'Liberia', 'LR', 'LBR', 1, 'Y'),
(121, 'Libyan Arab Jamahiriya', 'LY', 'LBY', 1, 'Y'),
(122, 'Liechtenstein', 'LI', 'LIE', 1, 'Y'),
(123, 'Lithuania', 'LT', 'LTU', 1, 'Y'),
(124, 'Luxembourg', 'LU', 'LUX', 1, 'Y'),
(125, 'Macao', 'MO', 'MAC', 1, 'Y'),
(126, 'Macedonia, The Former Yugoslav Republic of', 'MK', 'MKD', 1, 'Y'),
(127, 'Madagascar', 'MG', 'MDG', 1, 'Y'),
(128, 'Malawi', 'MW', 'MWI', 1, 'Y'),
(129, 'Malaysia', 'MY', 'MYS', 1, 'Y'),
(130, 'Maldives', 'MV', 'MDV', 1, 'Y'),
(131, 'Mali', 'ML', 'MLI', 1, 'Y'),
(132, 'Malta', 'MT', 'MLT', 1, 'Y'),
(133, 'Marshall Islands', 'MH', 'MHL', 1, 'Y'),
(134, 'Martinique', 'MQ', 'MTQ', 1, 'Y'),
(135, 'Mauritania', 'MR', 'MRT', 1, 'Y'),
(136, 'Mauritius', 'MU', 'MUS', 1, 'Y'),
(137, 'Mayotte', 'YT', 'MYT', 1, 'Y'),
(138, 'Mexico', 'MX', 'MEX', 1, 'Y'),
(139, 'Micronesia, Federated States of', 'FM', 'FSM', 1, 'Y'),
(140, 'Moldova', 'MD', 'MDA', 1, 'Y'),
(141, 'Monaco', 'MC', 'MCO', 1, 'Y'),
(142, 'Mongolia', 'MN', 'MNG', 1, 'Y'),
(143, 'Montserrat', 'MS', 'MSR', 1, 'Y'),
(144, 'Morocco', 'MA', 'MAR', 1, 'Y'),
(145, 'Mozambique', 'MZ', 'MOZ', 1, 'Y'),
(146, 'Myanmar', 'MM', 'MMR', 1, 'Y'),
(147, 'Namibia', 'NA', 'NAM', 1, 'Y'),
(148, 'Nauru', 'NR', 'NRU', 1, 'Y'),
(149, 'Nepal', 'NP', 'NPL', 1, 'Y'),
(150, 'Netherlands', 'NL', 'NLD', 1, 'Y'),
(151, 'Netherlands Antilles', 'AN', 'ANT', 1, 'Y'),
(152, 'New Caledonia', 'NC', 'NCL', 1, 'Y'),
(153, 'New Zealand', 'NZ', 'NZL', 1, 'Y'),
(154, 'Nicaragua', 'NI', 'NIC', 1, 'Y'),
(155, 'Niger', 'NE', 'NER', 1, 'Y'),
(156, 'Nigeria', 'NG', 'NGA', 1, 'Y'),
(157, 'Niue', 'NU', 'NIU', 1, 'Y'),
(158, 'Norfolk Island', 'NF', 'NFK', 1, 'Y'),
(159, 'Northern Mariana Islands', 'MP', 'MNP', 1, 'Y'),
(160, 'Norway', 'NO', 'NOR', 1, 'Y'),
(161, 'Oman', 'OM', 'OMN', 1, 'Y'),
(162, 'Pakistan', 'PK', 'PAK', 1, 'Y'),
(163, 'Palau', 'PW', 'PLW', 1, 'Y'),
(164, 'Panama', 'PA', 'PAN', 1, 'Y'),
(165, 'Papua New Guinea', 'PG', 'PNG', 1, 'Y'),
(166, 'Paraguay', 'PY', 'PRY', 1, 'Y'),
(167, 'Peru', 'PE', 'PER', 1, 'Y'),
(168, 'Philippines', 'PH', 'PHL', 1, 'Y'),
(169, 'Pitcairn', 'PN', 'PCN', 1, 'Y'),
(170, 'Poland', 'PL', 'POL', 1, 'Y'),
(171, 'Portugal', 'PT', 'PRT', 1, 'Y'),
(172, 'Puerto Rico', 'PR', 'PRI', 1, 'Y'),
(173, 'Qatar', 'QA', 'QAT', 1, 'Y'),
(174, 'Reunion', 'RE', 'REU', 1, 'Y'),
(175, 'Romania', 'RO', 'ROU', 1, 'Y'),
(176, 'Russian Federation', 'RU', 'RUS', 1, 'Y'),
(177, 'Rwanda', 'RW', 'RWA', 1, 'Y'),
(178, 'Saint Kitts and Nevis', 'KN', 'KNA', 1, 'Y'),
(179, 'Saint Lucia', 'LC', 'LCA', 1, 'Y'),
(180, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 1, 'Y'),
(181, 'Samoa', 'WS', 'WSM', 1, 'Y'),
(182, 'San Marino', 'SM', 'SMR', 1, 'Y'),
(183, 'Sao Tome and Principe', 'ST', 'STP', 1, 'Y'),
(184, 'Saudi Arabia', 'SA', 'SAU', 1, 'Y'),
(185, 'Senegal', 'SN', 'SEN', 1, 'Y'),
(186, 'Seychelles', 'SC', 'SYC', 1, 'Y'),
(187, 'Sierra Leone', 'SL', 'SLE', 1, 'Y'),
(188, 'Singapore', 'SG', 'SGP', 4, 'Y'),
(189, 'Slovakia (Slovak Republic)', 'SK', 'SVK', 1, 'Y'),
(190, 'Slovenia', 'SI', 'SVN', 1, 'Y'),
(191, 'Solomon Islands', 'SB', 'SLB', 1, 'Y'),
(192, 'Somalia', 'SO', 'SOM', 1, 'Y'),
(193, 'South Africa', 'ZA', 'ZAF', 1, 'Y'),
(194, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 1, 'Y'),
(195, 'Spain', 'ES', 'ESP', 3, 'Y'),
(196, 'Sri Lanka', 'LK', 'LKA', 1, 'Y'),
(197, 'St. Helena', 'SH', 'SHN', 1, 'Y'),
(198, 'St. Pierre and Miquelon', 'PM', 'SPM', 1, 'Y'),
(199, 'Sudan', 'SD', 'SDN', 1, 'Y'),
(200, 'Suriname', 'SR', 'SUR', 1, 'Y'),
(201, 'Svalbard and Jan Mayen Islands', 'SJ', 'SJM', 1, 'Y'),
(202, 'Swaziland', 'SZ', 'SWZ', 1, 'Y'),
(203, 'Sweden', 'SE', 'SWE', 1, 'Y'),
(204, 'Switzerland', 'CH', 'CHE', 1, 'Y'),
(205, 'Syrian Arab Republic', 'SY', 'SYR', 1, 'Y'),
(206, 'Taiwan', 'TW', 'TWN', 1, 'Y'),
(207, 'Tajikistan', 'TJ', 'TJK', 1, 'Y'),
(208, 'Tanzania, United Republic of', 'TZ', 'TZA', 1, 'Y'),
(209, 'Thailand', 'TH', 'THA', 1, 'Y'),
(210, 'Togo', 'TG', 'TGO', 1, 'Y'),
(211, 'Tokelau', 'TK', 'TKL', 1, 'Y'),
(212, 'Tonga', 'TO', 'TON', 1, 'Y'),
(213, 'Trinidad and Tobago', 'TT', 'TTO', 1, 'Y'),
(214, 'Tunisia', 'TN', 'TUN', 1, 'Y'),
(215, 'Turkey', 'TR', 'TUR', 1, 'Y'),
(216, 'Turkmenistan', 'TM', 'TKM', 1, 'Y'),
(217, 'Turks and Caicos Islands', 'TC', 'TCA', 1, 'Y'),
(218, 'Tuvalu', 'TV', 'TUV', 1, 'Y'),
(219, 'Uganda', 'UG', 'UGA', 1, 'Y'),
(220, 'Ukraine', 'UA', 'UKR', 1, 'Y'),
(221, 'United Arab Emirates', 'AE', 'ARE', 1, 'Y'),
(222, 'United Kingdom', 'GB', 'GBR', 6, 'Y'),
(223, 'United States', 'US', 'USA', 2, 'Y'),
(224, 'United States Minor Outlying Islands', 'UM', 'UMI', 1, 'Y'),
(225, 'Uruguay', 'UY', 'URY', 1, 'Y'),
(226, 'Uzbekistan', 'UZ', 'UZB', 1, 'Y'),
(227, 'Vanuatu', 'VU', 'VUT', 1, 'Y'),
(228, 'Vatican City State (Holy See)', 'VA', 'VAT', 1, 'Y'),
(229, 'Venezuela', 'VE', 'VEN', 1, 'Y'),
(230, 'Viet Nam', 'VN', 'VNM', 1, 'Y'),
(231, 'Virgin Islands (British)', 'VG', 'VGB', 1, 'Y'),
(232, 'Virgin Islands (U.S.)', 'VI', 'VIR', 1, 'Y'),
(233, 'Wallis and Futuna Islands', 'WF', 'WLF', 1, 'Y'),
(234, 'Western Sahara', 'EH', 'ESH', 1, 'Y'),
(235, 'Yemen', 'YE', 'YEM', 1, 'Y'),
(236, 'Serbia', 'RS', 'SRB', 1, 'Y'),
(238, 'Zambia', 'ZM', 'ZMB', 1, 'Y'),
(239, 'Zimbabwe', 'ZW', 'ZWE', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(128) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `surname` varchar(16) NOT NULL,
  `added_by` int(11) NOT NULL,
  `added_date` datetime NOT NULL,
  `modified_by` int(11) NOT NULL,
  `modified_date` datetime NOT NULL,
  `fax` varchar(32) NOT NULL,
  `email` varchar(64) NOT NULL,
  `website` varchar(32) NOT NULL,
  `address` varchar(128) NOT NULL,
  `city` varchar(32) NOT NULL,
  `state` varchar(32) NOT NULL,
  `country_id` int(11) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `telephone` varchar(32) NOT NULL,
  `skype` varchar(32) NOT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `sex` enum('F','M') NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `company`, `first_name`, `last_name`, `surname`, `added_by`, `added_date`, `modified_by`, `modified_date`, `fax`, `email`, `website`, `address`, `city`, `state`, `country_id`, `mobile`, `telephone`, `skype`, `status`, `sex`) VALUES
(1, 'XYZ', 'Johirul', 'Islam', 'Johir', 1, '2017-02-12 14:35:45', 1, '2017-02-15 08:15:41', 'fax', 'engr.jislam@gmail.com', 'http://www.xyzsoft.com', 'Gulshan', 'Dhaka', 'Dhaka', 13, '01789123456', '1234567', 'johir.sk', 'Y', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE IF NOT EXISTS `login_history` (
  `history_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `login_date` datetime NOT NULL,
  `login_status` enum('Y','N','R','F') NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`history_id`, `user_id`, `user_name`, `ip_address`, `login_date`, `login_status`) VALUES
(1, 0, 'admin', '127.0.0.1', '2017-02-11 00:44:02', 'N'),
(2, 0, 'admin', '127.0.0.1', '2017-02-11 00:44:26', 'N'),
(3, 0, 'admin', '127.0.0.1', '2017-02-11 00:44:56', 'N'),
(4, 1, 'admin', '127.0.0.1', '2017-02-11 00:46:06', 'Y'),
(5, 1, 'admin', '127.0.0.1', '2017-02-11 00:47:49', 'Y'),
(6, 1, 'admin', '127.0.0.1', '2017-02-11 00:47:56', 'Y'),
(7, 1, 'admin', '127.0.0.1', '2017-02-11 00:50:58', 'Y'),
(8, 0, 'johir', '127.0.0.1', '2017-02-11 00:52:02', 'N'),
(9, 0, 'superadmin', '127.0.0.1', '2017-02-11 00:52:15', 'N'),
(10, 1, 'admin', '127.0.0.1', '2017-02-11 00:52:26', 'Y'),
(11, 1, 'admin', '127.0.0.1', '2017-02-11 01:01:30', 'Y'),
(12, 1, 'admin', '127.0.0.1', '2017-02-11 01:02:29', 'Y'),
(13, 1, 'admin', '127.0.0.1', '2017-02-11 19:54:44', 'Y'),
(14, 1, 'admin', '127.0.0.1', '2017-02-12 20:45:30', 'Y'),
(15, 1, 'admin', '127.0.0.1', '2017-02-13 05:08:04', 'Y'),
(16, 0, 'superadmin', '127.0.0.1', '2017-02-13 20:13:49', 'N'),
(17, 1, 'admin', '127.0.0.1', '2017-02-13 20:13:52', 'Y'),
(18, 1, 'admin', '127.0.0.1', '2017-02-13 21:25:57', 'Y'),
(19, 1, 'admin', '127.0.0.1', '2017-02-13 22:10:21', 'Y'),
(20, 1, 'admin', '127.0.0.1', '2017-02-15 05:44:21', 'Y'),
(21, 0, 'superadmin', '127.0.0.1', '2017-02-16 06:27:32', 'N'),
(22, 1, 'admin', '127.0.0.1', '2017-02-16 06:27:43', 'Y'),
(23, 1, 'admin', '127.0.0.1', '2017-02-16 13:35:30', 'Y'),
(24, 1, 'admin', '127.0.0.1', '2017-02-17 06:13:00', 'Y'),
(25, 1, 'admin', '127.0.0.1', '2017-02-17 08:11:29', 'Y'),
(26, 1, 'admin', '127.0.0.1', '2017-02-17 10:42:18', 'Y'),
(27, 1, 'admin', '127.0.0.1', '2017-02-17 14:28:26', 'Y'),
(28, 1, 'admin', '127.0.0.1', '2017-02-17 14:29:56', 'Y'),
(29, 1, 'admin', '127.0.0.1', '2017-02-18 06:44:50', 'Y'),
(30, 1, 'admin', '127.0.0.1', '2017-02-18 14:31:24', 'Y'),
(31, 1, 'admin', '127.0.0.1', '2017-02-19 06:22:13', 'Y'),
(32, 1, 'admin', '127.0.0.1', '2017-02-20 06:45:24', 'Y'),
(33, 1, 'admin', '127.0.0.1', '2017-02-22 06:38:23', 'Y'),
(34, 1, 'admin', '127.0.0.1', '2017-02-22 09:01:03', 'Y'),
(35, 1, 'admin', '127.0.0.1', '2017-02-23 05:57:42', 'Y'),
(36, 1, 'admin', '127.0.0.1', '2017-02-23 13:13:19', 'Y'),
(37, 1, 'admin', '127.0.0.1', '2017-02-23 13:23:21', 'Y'),
(38, 1, 'admin', '127.0.0.1', '2017-02-24 06:31:28', 'Y'),
(39, 1, 'admin', '127.0.0.1', '2017-02-25 06:13:44', 'Y'),
(40, 1, 'admin', '127.0.0.1', '2017-02-25 10:37:54', 'Y'),
(41, 1, 'admin', '127.0.0.1', '2017-02-26 06:52:26', 'Y'),
(42, 1, 'admin', '127.0.0.1', '2017-02-26 07:12:36', 'Y'),
(43, 1, 'admin', '127.0.0.1', '2017-02-26 14:38:49', 'Y'),
(44, 1, 'admin', '127.0.0.1', '2017-02-27 06:41:01', 'Y'),
(45, 1, 'admin', '127.0.0.1', '2017-03-01 06:43:19', 'Y'),
(46, 1, 'admin', '127.0.0.1', '2017-03-01 11:44:54', 'Y'),
(47, 1, 'admin', '127.0.0.1', '2017-03-02 05:45:03', 'Y'),
(48, 1, 'admin', '127.0.0.1', '2017-03-02 06:54:28', 'Y'),
(49, 1, 'admin', '127.0.0.1', '2017-03-02 12:35:10', 'Y'),
(50, 1, 'admin', '127.0.0.1', '2017-03-03 07:15:10', 'Y'),
(51, 1, 'admin', '127.0.0.1', '2017-03-03 12:51:29', 'Y'),
(52, 1, 'admin', '127.0.0.1', '2017-03-04 08:54:56', 'Y'),
(53, 1, 'admin', '127.0.0.1', '2017-03-05 06:50:42', 'Y'),
(54, 1, 'admin', '127.0.0.1', '2017-03-05 07:05:58', 'Y'),
(55, 1, 'admin', '127.0.0.1', '2017-03-05 09:58:03', 'Y'),
(56, 1, 'admin', '127.0.0.1', '2017-03-09 06:35:20', 'Y'),
(57, 1, 'admin', '127.0.0.1', '2017-03-09 06:59:12', 'Y'),
(58, 1, 'admin', '127.0.0.1', '2017-03-09 10:56:01', 'Y'),
(59, 1, 'admin', '127.0.0.1', '2017-03-09 11:03:51', 'Y'),
(60, 1, 'admin', '127.0.0.1', '2017-03-10 06:04:11', 'Y'),
(61, 1, 'admin', '127.0.0.1', '2017-03-11 06:03:52', 'Y'),
(62, 0, 'superadmin', '127.0.0.1', '2017-03-11 08:30:28', 'N'),
(63, 2, 'superadmin', '127.0.0.1', '2017-03-11 08:30:40', 'Y'),
(64, 2, 'superadmin', '127.0.0.1', '2017-03-12 06:01:24', 'Y'),
(65, 0, 'admin', '127.0.0.1', '2017-03-12 06:11:22', 'N'),
(66, 1, 'admin', '127.0.0.1', '2017-03-12 06:11:41', 'Y'),
(67, 2, 'superadmin', '127.0.0.1', '2017-03-12 08:18:38', 'Y'),
(68, 2, 'superadmin', '127.0.0.1', '2017-03-13 08:02:48', 'Y'),
(69, 2, 'superadmin', '127.0.0.1', '2017-03-17 14:31:04', 'Y'),
(70, 2, 'superadmin', '127.0.0.1', '2017-03-19 12:44:15', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reset_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `super_admin` int(1) NOT NULL DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `email`, `full_name`, `reset_key`, `super_admin`, `active`) VALUES
(1, 'johir', 'PibFO5qQX88qkTXlLTxkccAYw/8eWkXGtCAr2V2bgwE=', 'johirul.islam@engineer.com', 'Johir', '', 1, 1),
(2, 'superadmin', 'PibFO5qQX88qkTXlLTxkccAYw/8eWkXGtCAr2V2bgwE=', 'engr.jislam@gmail.com', 'Superadmin', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE IF NOT EXISTS `user_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(32) NOT NULL,
  `group_description` varchar(160) NOT NULL,
  `group_perm` text NOT NULL,
  `date_added` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`group_id`, `group_name`, `group_description`, `group_perm`, `date_added`, `last_modified`) VALUES
(1, 'Admin', 'Site Admin', 'a:8:{s:14:"is_super_admin";s:1:"1";s:14:"login_anywhere";s:1:"1";s:14:"users_own_view";s:1:"1";s:16:"users_own_update";s:1:"1";s:10:"users_view";s:1:"1";s:9:"users_add";s:1:"1";s:10:"users_edit";s:1:"1";s:12:"users_delete";s:1:"1";}', '2012-10-05 09:34:55', '2014-11-12 13:17:29'),
(3, 'Member', 'Company staff', 'a:25:{s:14:"is_super_admin";s:1:"1";s:14:"login_anywhere";s:1:"1";s:14:"users_own_view";s:1:"1";s:16:"users_own_update";s:1:"1";s:16:"subscribers_view";s:1:"1";s:15:"subscribers_add";s:1:"1";s:16:"subscribers_edit";s:1:"1";s:15:"categories_view";s:1:"1";s:14:"categories_add";s:1:"1";s:15:"categories_edit";s:1:"1";s:10:"users_view";s:1:"1";s:9:"users_add";s:1:"1";s:10:"users_edit";s:1:"1";s:13:"campaign_view";s:1:"1";s:12:"campaign_add";s:1:"1";s:13:"campaign_edit";s:1:"1";s:9:"smtp_view";s:1:"1";s:8:"smtp_add";s:1:"1";s:9:"smtp_edit";s:1:"1";s:14:"templates_view";s:1:"1";s:13:"templates_add";s:1:"1";s:14:"templates_edit";s:1:"1";s:10:"roles_view";s:1:"1";s:9:"roles_add";s:1:"1";s:10:"roles_edit";s:1:"1";}', '2012-10-06 13:58:30', '2014-11-12 13:17:17');

-- --------------------------------------------------------

--
-- Table structure for table `web_setting`
--

CREATE TABLE IF NOT EXISTS `web_setting` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `com_name` varchar(30) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `web_address` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `web_setting`
--

INSERT INTO `web_setting` (`id`, `com_name`, `address`, `email`, `web_address`, `status`) VALUES
(1, 'Accounts', 'House # 8, Road # 6, BLK "E"\r\nNiketon, Gulshan - 1, Dhaka 1213\r\nPhone: (+880-2) 985-9720\r\nFax: (+880-2)-881-3993', 'info@nrb.com', 'www.nrb.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
