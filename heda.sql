-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2015 at 12:27 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `heda`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `regionid` bigint(20) DEFAULT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `title`, `regionid`, `deleted`) VALUES
('AD', 'Andorra', 2, 0),
('AE', 'United Arab Emirates', 2, 0),
('AF', 'Afghanistan', 2, 0),
('AG', 'Antigua and Barbuda', 2, 0),
('AI', 'Anguilla', 2, 0),
('AL', 'Albania', 2, 0),
('AM', 'Armenia', 2, 0),
('AN', 'Netherlands Antilles', 2, 0),
('AO', 'Angola', 2, 0),
('AQ', 'Antarctica', 2, 0),
('AR', 'Argentina', 2, 0),
('AS', 'American Samoa', 2, 0),
('AT', 'Austria', 2, 0),
('AU', 'Australia', 2, 0),
('AW', 'Aruba', 2, 0),
('AX', 'Aland', 2, 0),
('AZ', 'Azerbaijan', 2, 0),
('BA', 'Bosnia and Herzegovina', 2, 0),
('BB', 'Barbados', 2, 0),
('BD', 'Bangladesh', 2, 0),
('BE', 'Belgium', 2, 0),
('BF', 'Burkina Faso', 2, 0),
('BG', 'Bulgaria', 2, 0),
('BH', 'Bahrain', 2, 0),
('BI', 'Burundi', 1, 0),
('BJ', 'Benin', 2, 0),
('BM', 'Bermuda', 2, 0),
('BN', 'Brunei Darussalam', 2, 0),
('BO', 'Bolivia', 2, 0),
('BR', 'Brazil', 2, 0),
('BS', 'Bahamas', 2, 0),
('BT', 'Bhutan', 2, 0),
('BV', 'Bouvet Island', 2, 0),
('BW', 'Botswana', 2, 0),
('BY', 'Belarus', 2, 0),
('BZ', 'Belize', 2, 0),
('CA', 'Canada', 2, 0),
('CC', 'Cocos (Keeling) Islands', 2, 0),
('CD', 'DRC', 1, 0),
('CF', 'Central African Republic', 2, 0),
('CG', 'Congo (DRC)', 2, 0),
('CH', 'Switzerland', 2, 0),
('CI', 'Cote d''Ivoire', 2, 0),
('CK', 'Cook Islands', 2, 0),
('CL', 'Chile', 2, 0),
('CM', 'Cameroon', 2, 0),
('CN', 'China', 2, 0),
('CO', 'Colombia', 2, 0),
('CR', 'Costa Rica', 2, 0),
('CS', 'Serbia and Montenegro', 2, 0),
('CU', 'Cuba', 2, 0),
('CV', 'Cape Verde', 2, 0),
('CX', 'Christmas Island', 2, 0),
('CY', 'Cyprus', 2, 0),
('CZ', 'Czech Republic', 2, 0),
('DE', 'Germany', 2, 0),
('DJ', 'Djibouti', 2, 0),
('DK', 'Denmark', 2, 0),
('DM', 'Dominica', 2, 0),
('DO', 'Dominican Republic', 2, 0),
('DZ', 'Algeria', 2, 0),
('EC', 'Ecuador', 2, 0),
('EE', 'Estonia', 2, 0),
('EG', 'Egypt', 2, 0),
('EH', 'Western Sahara', 2, 0),
('ER', 'Eritrea', 2, 0),
('ES', 'Spain', 2, 0),
('ET', 'Ethiopia', 2, 0),
('FI', 'Finland', 2, 0),
('FJ', 'Fiji', 2, 0),
('FK', 'Falkland Islands', 2, 0),
('FM', 'Micronesia', 2, 0),
('FO', 'Faroe Islands', 2, 0),
('FR', 'France', 2, 0),
('GA', 'Gabon', 2, 0),
('GB', 'United Kingdom', 2, 0),
('GD', 'Grenada', 2, 0),
('GE', 'Georgia', 2, 0),
('GF', 'French Guiana', 2, 0),
('GG', 'Guernsey', 2, 0),
('GH', 'Ghana', 2, 0),
('GI', 'Gibraltar', 2, 0),
('GL', 'Greenland', 2, 0),
('GM', 'Gambia', 2, 0),
('GN', 'Guinea', 2, 0),
('GP', 'Guadeloupe', 2, 0),
('GQ', 'Equatorial Guinea', 2, 0),
('GR', 'Greece', 2, 0),
('GS', 'South Georgia and South Sandwich Islands', 2, 0),
('GT', 'Guatemala', 2, 0),
('GU', 'Guam', 2, 0),
('GW', 'Guinea-Bissau', 2, 0),
('GY', 'Guyana', 2, 0),
('HK', 'Hong Kong', 2, 0),
('HM', 'Heard and McDonald Islands', 2, 0),
('HN', 'Honduras', 2, 0),
('HR', 'Croatia', 2, 0),
('HT', 'Haiti', 2, 0),
('HU', 'Hungary', 2, 0),
('ID', 'Indonesia', 2, 0),
('IE', 'Ireland', 2, 0),
('IL', 'Israel', 2, 0),
('IM', 'Isle of Man', 2, 0),
('IN', 'India', 2, 0),
('IO', 'British Indian Ocean Territory', 2, 0),
('IQ', 'Iraq', 2, 0),
('IR', 'Iran', 2, 0),
('IS', 'Iceland', 2, 0),
('IT', 'Italy', 2, 0),
('JE', 'Jersey', 2, 0),
('JM', 'Jamaica', 2, 0),
('JO', 'Jordan', 2, 0),
('JP', 'Japan', 2, 0),
('KE', 'Kenya', 1, 0),
('KG', 'Kyrgyzstan', 2, 0),
('KH', 'Cambodia', 2, 0),
('KI', 'Kiribati', 2, 0),
('KM', 'Comoros', 2, 0),
('KN', 'Saint Kitts and Nevis', 2, 0),
('KP', 'Korea, North', 2, 0),
('KR', 'Korea, South', 2, 0),
('KW', 'Kuwait', 2, 0),
('KY', 'Cayman Islands', 2, 0),
('KZ', 'Kazakhstan', 2, 0),
('LA', 'Laos', 2, 0),
('LB', 'Lebanon', 2, 0),
('LC', 'Saint Lucia', 2, 0),
('LI', 'Liechtenstein', 2, 0),
('LK', 'Sri Lanka', 2, 0),
('LR', 'Liberia', 2, 0),
('LS', 'Lesotho', 2, 0),
('LT', 'Lithuania', 2, 0),
('LU', 'Luxembourg', 2, 0),
('LV', 'Latvia', 2, 0),
('LY', 'Libya', 2, 0),
('MA', 'Morocco', 2, 0),
('MC', 'Monaco', 2, 0),
('MD', 'Moldova', 2, 0),
('MG', 'Madagascar', 2, 0),
('MH', 'Marshall Islands', 2, 0),
('MK', 'Macedonia', 2, 0),
('ML', 'Mali', 2, 0),
('MM', 'Myanmar', 2, 0),
('MN', 'Mongolia', 2, 0),
('MO', 'Macau', 2, 0),
('MP', 'Northern Mariana Islands', 2, 0),
('MQ', 'Martinique', 2, 0),
('MR', 'Mauritania', 2, 0),
('MS', 'Montserrat', 2, 0),
('MT', 'Malta', 2, 0),
('MU', 'Mauritius', 2, 0),
('MV', 'Maldives', 2, 0),
('MW', 'Malawi', 2, 0),
('MX', 'Mexico', 2, 0),
('MY', 'Malaysia', 2, 0),
('MZ', 'Mozambique', 2, 0),
('NA', 'Namibia', 2, 0),
('NC', 'New Caledonia', 2, 0),
('NE', 'Niger', 2, 0),
('NF', 'Norfolk Island', 2, 0),
('NG', 'Nigeria', 2, 0),
('NI', 'Nicaragua', 2, 0),
('NL', 'Netherlands', 2, 0),
('NO', 'Norway', 2, 0),
('NP', 'Nepal', 2, 0),
('NR', 'Nauru', 2, 0),
('NU', 'Niue', 2, 0),
('NZ', 'New Zealand', 2, 0),
('OM', 'Oman', 2, 0),
('PA', 'Panama', 2, 0),
('PE', 'Peru', 2, 0),
('PF', 'French Polynesia', 2, 0),
('PG', 'Papua New Guinea', 2, 0),
('PH', 'Philippines', 2, 0),
('PK', 'Pakistan', 2, 0),
('PL', 'Poland', 2, 0),
('PM', 'Saint Pierre and Miquelon', 2, 0),
('PN', 'Pitcairn', 2, 0),
('PR', 'Puerto Rico', 2, 0),
('PS', 'Palestine', 2, 0),
('PT', 'Portugal', 2, 0),
('PW', 'Palau', 2, 0),
('PY', 'Paraguay', 2, 0),
('QA', 'Qatar', 2, 0),
('RE', 'Reunion', 2, 0),
('RO', 'Romania', 2, 0),
('RU', 'Russian Federation', 2, 0),
('RW', 'Rwanda', 1, 0),
('SA', 'Saudi Arabia', 2, 0),
('SB', 'Solomon Islands', 2, 0),
('SC', 'Seychelles', 2, 0),
('SD', 'Sudan', 2, 0),
('SE', 'Sweden', 2, 0),
('SG', 'Singapore', 2, 0),
('SH', 'Saint Helena', 2, 0),
('SI', 'Slovenia', 2, 0),
('SJ', 'Svalbard and Jan Mayen Islands', 2, 0),
('SK', 'Slovakia', 2, 0),
('SL', 'Sierra Leone', 2, 0),
('SM', 'San Marino', 2, 0),
('SN', 'Senegal', 2, 0),
('SO', 'Somalia', 2, 0),
('SR', 'Suriname', 2, 0),
('SS', 'South Sudan', 1, 0),
('ST', 'Sao Tome and Principe', 2, 0),
('SV', 'El Salvador', 2, 0),
('SY', 'Syria', 2, 0),
('SZ', 'Swaziland', 2, 0),
('TC', 'Turks and Caicos Islands', 2, 0),
('TD', 'Chad', 2, 0),
('TF', 'French Southern Lands', 2, 0),
('TG', 'Togo', 2, 0),
('TH', 'Thailand', 2, 0),
('TJ', 'Tajikistan', 2, 0),
('TK', 'Tokelau', 2, 0),
('TL', 'Timor-Leste', 2, 0),
('TM', 'Turkmenistan', 2, 0),
('TN', 'Tunisia', 2, 0),
('TO', 'Tonga', 2, 0),
('TR', 'Turkey', 2, 0),
('TT', 'Trinidad and Tobago', 2, 0),
('TV', 'Tuvalu', 2, 0),
('TW', 'Taiwan', 2, 0),
('TZ', 'Tanzania', 2, 0),
('UA', 'Ukraine', 2, 0),
('UG', 'Uganda', 1, 0),
('UM', 'United States Minor Outlying Islands', 2, 0),
('US', 'United States of America', 2, 0),
('UY', 'Uruguay', 2, 0),
('UZ', 'Uzbekistan', 2, 0),
('VA', 'Vatican City', 2, 0),
('VC', 'Saint Vincent and the Grenadines', 2, 0),
('VE', 'Venezuela', 2, 0),
('VG', 'Virgin Islands, British', 2, 0),
('VI', 'Virgin Islands, U.S.', 2, 0),
('VN', 'Vietnam', 2, 0),
('VU', 'Vanuatu', 2, 0),
('WF', 'Wallis and Futuna Islands', 2, 0),
('WS', 'Samoa', 2, 0),
('YE', 'Yemen', 2, 0),
('YT', 'Mayotte', 2, 0),
('ZA', 'South Africa', 2, 0),
('ZM', 'Zambia', 2, 0),
('ZW', 'Zimbabwe', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE IF NOT EXISTS `county` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `countryid` varchar(10) NOT NULL DEFAULT 'KE',
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`id`, `name`, `countryid`, `date_added`, `deleted`) VALUES
(1, 'BOMET', 'KE', '2015-06-23 10:33:48', 0),
(2, 'BUNGOMA', 'KE', '2015-06-23 10:33:48', 0),
(3, 'BUSIA', 'KE', '2015-06-23 10:33:48', 0),
(4, 'ELGEYO/MARAKWET', 'KE', '2015-06-23 10:33:48', 0),
(5, 'EMBU', 'KE', '2015-06-23 10:33:48', 0),
(6, 'GARISSA', 'KE', '2015-06-23 10:33:48', 0),
(7, 'HOMA BAY', 'KE', '2015-06-23 10:33:48', 0),
(8, 'ISIOLO', 'KE', '2015-06-23 10:33:48', 0),
(9, 'KAJIADO', 'KE', '2015-06-23 10:33:48', 0),
(10, 'KAKAMEGA', 'KE', '2015-06-23 10:33:48', 0),
(11, 'KERICHO', 'KE', '2015-06-23 10:33:48', 0),
(12, 'KIAMBU', 'KE', '2015-06-23 10:33:48', 0),
(13, 'KILIFI', 'KE', '2015-06-23 10:33:48', 0),
(14, 'KIRINYAGA', 'KE', '2015-06-23 10:33:48', 0),
(15, 'KISII', 'KE', '2015-06-23 10:33:48', 0),
(16, 'KISUMU', 'KE', '2015-06-23 10:33:48', 0),
(17, 'KITUI', 'KE', '2015-06-23 10:33:48', 0),
(18, 'KWALE', 'KE', '2015-06-23 10:33:48', 0),
(19, 'LAIKIPIA', 'KE', '2015-06-23 10:33:48', 0),
(20, 'LAMU', 'KE', '2015-06-23 10:33:48', 0),
(21, 'MACHAKOS', 'KE', '2015-06-23 10:33:48', 0),
(22, 'MAKUENI', 'KE', '2015-06-23 10:33:48', 0),
(23, 'MANDERA', 'KE', '2015-06-23 10:33:48', 0),
(24, 'MARSABIT', 'KE', '2015-06-23 10:33:48', 0),
(25, 'MERU', 'KE', '2015-06-23 10:33:48', 0),
(26, 'MIGORI', 'KE', '2015-06-23 10:33:48', 0),
(27, 'MOMBASA', 'KE', '2015-06-23 10:33:48', 0),
(28, 'MURANGA', 'KE', '2015-06-23 10:33:48', 0),
(29, 'NAIROBI', 'KE', '2015-06-23 10:33:48', 0),
(30, 'NAKURU', 'KE', '2015-06-23 10:33:48', 0),
(31, 'NANDI', 'KE', '2015-06-23 10:33:48', 0),
(32, 'NAROK', 'KE', '2015-06-23 10:33:48', 0),
(33, 'NYAMIRA', 'KE', '2015-06-23 10:33:48', 0),
(34, 'NYANDARUA', 'KE', '2015-06-23 10:33:48', 0),
(35, 'NYERI', 'KE', '2015-06-23 10:33:48', 0),
(36, 'SAMBURU', 'KE', '2015-06-23 10:33:48', 0),
(37, 'SIAYA', 'KE', '2015-06-23 10:33:48', 0),
(38, 'TAITA TAVETA', 'KE', '2015-06-23 10:33:48', 0),
(39, 'TANA RIVER', 'KE', '2015-06-23 10:33:48', 0),
(40, 'THARAKA - NITHI', 'KE', '2015-06-23 10:33:48', 0),
(41, 'TRANS NZOIA', 'KE', '2015-06-23 10:33:48', 0),
(42, 'TURKANA', 'KE', '2015-06-23 10:33:48', 0),
(43, 'UASIN GISHU', 'KE', '2015-06-23 10:33:48', 0),
(44, 'VIHIGA', 'KE', '2015-06-23 10:33:48', 0),
(45, 'WAJIR', 'KE', '2015-06-23 10:33:48', 0),
(46, 'WEST POKOT', 'KE', '2015-06-23 10:33:48', 0),
(47, 'BARINGO', 'KE', '2015-06-23 10:33:48', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hedausersdetails`
--

CREATE TABLE IF NOT EXISTS `hedausersdetails` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `countryid` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `roleid` varchar(30) NOT NULL,
  `phoneNo` varchar(30) NOT NULL,
  `emailaddress` varchar(30) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hedausersdetails`
--

INSERT INTO `hedausersdetails` (`userID`, `firstname`, `surname`, `username`, `password`, `gender`, `countryid`, `county`, `roleid`, `phoneNo`, `emailaddress`, `deleted`) VALUES
(4, 'Robert', 'Ouko', 'rohuru', 'roba3042', 'Female', 'KE', 'NAIROBI', '2', '254714360799', 'rohuru@yahoo.com', 0),
(5, 'Robert', 'Ohuru', 'rohuru', 'roba3042', 'Male', 'KE', 'MOMBASA', '2', '254714360799', 'rohuru@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `respondentsdetails`
--

CREATE TABLE IF NOT EXISTS `respondentsdetails` (
  `respondentID` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `county` varchar(30) NOT NULL,
  `ward` varchar(30) NOT NULL,
  `nearestTown` varchar(30) NOT NULL,
  `gpsValues` int(11) NOT NULL,
  `householdLocation` varchar(30) NOT NULL,
  `phoneNo` int(11) NOT NULL,
  `householdTenure` varchar(30) NOT NULL,
  `connected` varchar(4) NOT NULL,
  `solarPanelPower` int(11) NOT NULL,
  `biogasDigestorPower` int(11) NOT NULL,
  `dieselGeneratorPower` int(11) NOT NULL,
  `batterySystemPower` int(11) NOT NULL,
  `windPower` int(11) NOT NULL,
  `charcoalUse` int(11) NOT NULL,
  `firewoodUse` int(11) NOT NULL,
  `paraffinUse` int(11) NOT NULL,
  `briquttesUse` int(11) NOT NULL,
  `lpgUse` int(11) NOT NULL,
  `solarBulbsNo` int(11) NOT NULL,
  `electricBulbsNo` int(11) NOT NULL,
  `koroboiNo` int(11) NOT NULL,
  `paraffinLampNo` int(11) NOT NULL,
  `gasLampNo` int(11) NOT NULL,
  `batteryTorchNo` int(11) NOT NULL,
  `blackwhiteTvNo` int(11) NOT NULL,
  `colouredTvNo` int(11) NOT NULL,
  `mobilePhoneNo` int(11) NOT NULL,
  `radioNo` int(11) NOT NULL,
  `dvdPlayerNo` int(11) NOT NULL,
  `fridgeNo` int(11) NOT NULL,
  `electricWaterHeaterNo` int(11) NOT NULL,
  `computerNo` int(11) NOT NULL,
  `electricIronboxNo` int(11) NOT NULL,
  `householdSize` int(11) NOT NULL,
  `householdType` int(11) NOT NULL,
  `roofStructure` int(11) NOT NULL,
  `wallStructure` int(11) NOT NULL,
  `drinkingWaterSource` int(11) NOT NULL,
  `householdRooms` int(11) NOT NULL,
  `earningPeopleNo` int(11) NOT NULL,
  `mainSourceOfIncome` int(11) NOT NULL,
  `totalIncome` int(11) NOT NULL,
  PRIMARY KEY (`respondentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `date_added`, `deleted`) VALUES
(1, 'Enumerator', '2015-06-23 11:30:23', 0),
(2, 'EED User', '2015-06-23 11:30:23', 0),
(3, 'Data User (Customer)', '2015-06-23 11:30:49', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
