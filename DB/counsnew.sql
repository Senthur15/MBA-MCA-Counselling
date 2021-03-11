-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 07:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counsnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `allotment`
--

CREATE TABLE `allotment` (
  `email` varchar(30) NOT NULL,
  `c_id` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allotment`
--

INSERT INTO `allotment` (`email`, `c_id`) VALUES
('tell', '3'),
('user@gmail.com', '81'),
('user@gmail.com', '81'),
('user@gmail.com', '81');

-- --------------------------------------------------------

--
-- Table structure for table `mba`
--

CREATE TABLE `mba` (
  `p_key` varchar(10) NOT NULL,
  `category` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `c_code` int(5) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `c_type` varchar(25) NOT NULL,
  `oc` int(11) NOT NULL,
  `bcm` int(11) NOT NULL,
  `bc` int(11) NOT NULL,
  `mbc` int(11) NOT NULL,
  `sca` int(11) NOT NULL,
  `sc` int(11) NOT NULL,
  `st` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mba`
--

INSERT INTO `mba` (`p_key`, `category`, `district`, `c_code`, `c_name`, `c_type`, `oc`, `bcm`, `bc`, `mbc`, `sca`, `sc`, `st`) VALUES
('1', 'GOVT', 'Vellore', 1516, 'Thanthai Periyar Government Institute of Technology, Bagayam, Vellore District 632002', 'MCA', 12, 1, 11, 8, 1, 6, 1),
('2', 'GOVT AIDED (AIDED)', 'Coimbatore', 2006, 'PSG College of Technology (AUTONOMOUS), Peelamedu, Coimbatore District 641004', 'MCA', 9, 1, 7, 5, 1, 4, 0),
('3', 'GOVT AIDED (AIDED)', 'Madurai', 5008, 'Thiagarajar College of Engineering (AUTONOMOUS), Tirupparankundram, Madurai District 625015 ', 'MCA', 8, 1, 7, 5, 1, 4, 1),
('4', 'GOVT AIDED (SS)', 'Coimbatore', 2006, 'PSG College of Technology (AUTONOMOUS), Peelamedu, Coimbatore District 641004', 'MCA (SS)', 8, 1, 7, 5, 1, 4, 0),
('5', 'GOVT AIDED (SS)', 'COimbatore', 2007, 'Coimbatore Institute of Technology (AUTONOMOUS), Civil Aerodrome Post, Coimbatore District 641014', 'MCA (SS)', 11, 1, 9, 7, 1, 5, 1),
('6', 'MIN', 'Chennai', 1101, 'Aalim Muhammed Salegh College of Engineering, Muthapudupet, Avadi IAF, Chennai 600055', 'MCA', 6, 1, 5, 3, 1, 2, 0),
('7', 'MIN', 'Chennai', 1106, 'Jaya Engineering College, Thirunindravur, Chennai 602024', 'MCA', 9, 1, 7, 6, 1, 4, 0),
('8', 'MIN', 'chennai', 1114, 'S A Engineering College, Thiruverkadu, Chennai 600077', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('9', 'MIN', 'Thiruvallur', 1116, 'Sri Venkateswara College of Engineering and Technology, Thirupachur, Thiruvallur District 631203', 'MCA', 14, 2, 12, 9, 1, 7, 1),
('10', 'MIN', 'chennai', 1122, 'Vel Tech High Tech Dr. Rangarajan Dr. Sakunthala Engineering College, Avadi-Alamathi Road, Chennai 600 062', 'MCA', 6, 0, 5, 4, 0, 3, 0),
('11', 'MIN', 'chennai', 1218, 'Sri Muthukumaran Institute of Technology, Near Mangadu, Chennai 600069', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('12', 'MIN', 'chennai', 1225, 'Loyola Institute of Technology, Mevaloorkuppam, B Village, Palanchoor, Nazarethpet Post, Chennai 600123', 'MCA', 15, 2, 13, 10, 1, 7, 0),
('13', 'NM', 'chennai', 1322, 'Dhanalakshmi Srinivasan College of Engineering and Technology, East Coast Road, Poonjeri, Chennai 603104', 'MCA', 10, 1, 8, 6, 1, 4, 0),
('14', 'MIN', 'chennai', 1411, 'Madha Engineering College, Kundrathur, Chennai 600069', 'MCA', 3, 1, 2, 2, 0, 1, 0),
('15', 'MIN', 'Thiruvannamalai', 1503, 'Arulmigu  Meenakshi Amman College of Engineering, Vadamavandal,Thiruvannamalai District 604410', 'MCA', 12, 1, 10, 8, 1, 6, 1),
('16', 'MIN', 'Vellore', 1505, 'C Abdul Hakeem College of Engineering and Technology, Melvisharam, Vellore District 632509', 'MCA', 18, 2, 15, 12, 1, 9, 1),
('17', 'MIN', 'chennai', 1509, 'Meenakshi College of Engineering, Vembuliamman Koil Street, K K Nagar (West), Chennai 600078', 'MCA', 6, 1, 4, 3, 1, 3, 0),
('18', 'MIN', 'Krishnagiri', 2621, 'Er. Perumal Manimekalai College of Engineering, Near Koneripalli, Hosur, Krishnagiri District 635117', 'MCA', 6, 0, 5, 4, 0, 3, 0),
('19', 'MIN', 'Namakkal', 2624, 'Gnanamani College of Technology, Pachal Post, Namakkal District 637018', 'MCA', 12, 1, 9, 7, 1, 5, 1),
('20', 'MIN', 'Cudallore', 3410, 'Krishnaswamy Collge of Engineering and Technology, S Kumarapuram, Cuddalore District 607109', 'MCA', 13, 1, 11, 8, 1, 6, 0),
('21', 'MIN', 'Tiruchirappalli', 3810, 'M.A.M. College of Engineering, Siruganur, Tiruchirappalli District 621105', 'MCA', 3, 0, 3, 2, 0, 1, 0),
('22', 'MIN', 'Perambalur', 3817, 'Roever Engineering College, Elambalur, Perambalur District 621212', 'MCA', 6, 1, 5, 3, 1, 2, 0),
('23', 'MIN', 'Kanyakumari', 4952, 'C S I Institute of Technology, Thovalai, Kanyakumari District 629302', 'MCA', 6, 0, 5, 4, 0, 3, 0),
('24', 'MIN', 'Tirunelveli', 4955, 'Francis Xavier Engineering College (AUTONOMOUS),  Vannarpettai, Tirunelveli District 627003', 'MCA', 6, 1, 5, 3, 1, 2, 0),
('25', 'MIN', 'Tirunelveli', 4966, 'PET Engineering College, Vallioor Post, Tirunelveli District 627117', 'MCA', 6, 0, 5, 4, 0, 3, 0),
('26', 'MIN', 'kanyakumari', 4971, 'St. Xavier Catholic College of Engineering, Chunkankadai, Nagercoil, Kanyakumari District 629807', 'MCA', 12, 1, 10, 8, 1, 6, 0),
('27', 'MIN', 'Tirunelveli', 4973, 'Rajaas Engineering College , Vadakkangulam, Tirunelveli District 627116', 'MCA', 9, 1, 7, 6, 1, 4, 0),
('28', 'MIN', 'kanyakumari', 4977, 'Narayanaguru College of Engineering, Manjalumoodu, Kanyakumari District 629151', 'MCA', 8, 1, 7, 5, 1, 4, 0),
('29', 'MIN', 'Sivagangai', 5904, 'K L N College of Engineering, Pottapalayam, Sivagangai District 630611', 'MCA', 17, 2, 14, 11, 2, 8, 1),
('30', 'MIN', 'Ramanathapuram', 5907, 'Mohamed Sathak Engineering College, Kilakarai, Ramanathapuram District 623806', 'MCA', 10, 1, 8, 6, 1, 4, 0),
('31', 'NM', 'Kancheepuram', 1334, 'ARS College of Engineering, Maraimalai Nagar Post, Kancheepuram District 603209', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('32', 'NM', 'Kancheepuram', 1401, 'Adhiparasakthi Engineering College, Melmaruvathur, Kancheepuram District 603319', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('33', 'NM', 'Kancheepuram', 1409, 'Karpagavinayaga College of Engineering and Technology, Palayanoor Post, Maduranthagam Taluk, Kancheepuram District 603308', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('34', 'NM', 'Villupuram', 1412, 'Mailam Engineering College, Mailam, Villupuram District 604304', 'MCA', 15, 2, 13, 10, 2, 7, 1),
('35', 'NM', 'Thiruvannamalai', 1504, 'Arunai Engineering College, Mathur, Thiruvannamalai District 606603', 'MCA', 18, 2, 14, 11, 1, 8, 1),
('36', 'NM', 'kanyakumari', 1507, 'Ganadipathy Tulsi’s Jain Engineering College, Kaniyambadi, Vellore District 632102', 'MCA', 9, 1, 8, 6, 1, 4, 1),
('37', 'NM', 'Vellore', 1510, 'Priyadarshini Engineering College, Vaniyambadi Post, Vellore District 635751', 'MCA', 15, 2, 13, 10, 2, 7, 1),
('38', 'NM', 'Thiruvannamalai', 1513, 'Sri Balaji Chockalingam Engineering College, Arni, Thiruvannamalai District 632317', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('39', 'NM', 'Kancheepuram', 1517, 'Thirumalai Engineering College, Kilambi, Kancheepuram District 631551', 'MCA', 12, 1, 11, 8, 1, 6, 1),
('40', 'NM', 'Thiruvannamalai', 1518, 'Thiruvalluvar College of Engineering and Technology, Vandavasi, Thiruvannamalai District 604505', 'MCA', 7, 1, 6, 4, 1, 3, 1),
('41', 'NM', 'Krishnagiri', 2601, 'Adhiyamaan  College of Engineering (AUTONOMOUS),  Hosur, Krishnagiri District 635109', 'MCA', 37, 4, 32, 24, 4, 18, 1),
('42', 'NM', 'Namakkal', 2602, 'Annai Mathammal Sheela Enginereing College, Erumapatty Post, Namakkal District 637013', 'MCA', 7, 1, 6, 5, 1, 3, 0),
('43', 'NM', 'Dharmapuri', 2606, 'Jayam College of Engineering and Technology, Nallanur Post, Dharmapuri District 636813', 'MCA', 3, 0, 2, 2, 0, 1, 0),
('44', 'NM', 'Karur', 2608, 'M Kumarasamy College of Engineering (AUTONOMOUS), Thalavapalayam, Karur District 639113', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('45', 'NM', 'Namakkal', 2609, 'Mahendra Engineering College (AUTONOMOUS), Mahendhirapuri, Mallasamudram, Namakkal District 637503', 'MCA', 10, 1, 8, 6, 1, 4, 0),
('46', 'NM', 'Namakkal', 2611, 'Paavai Engineering College (AUTONOMOUS), NH-7, Pachal Post, Namakkal District 637018', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('47', 'NM', 'Namakkal', 2612, 'P G P College of Engineering and Technology, Paramathi Post, Namakkal District 637207', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('48', 'NM', 'Namakkal', 2613, 'K S R College of Engineering (AUTONOMOUS), Tiruchengode, Namakkal District 637209', 'MCA', 16, 1, 13, 10, 2, 7, 1),
('49', 'NM', 'Salem', 2618, 'Sona College of Technology (AUTONOMOUS), Suramangalam Post, Salem District 636005', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('50', 'NM', 'Salem', 2623, 'Mahendra College of Engineering, Minnampalli, Salem District 636106', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('51', 'NM', 'Namakkal', 2627, 'Selvam College of Technology, Pappanaickenpatti Post, Namakkal District 637003', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('52', 'NM', 'Namakkal', 2628, 'Paavai College of Engineering, NH-7, Pachal Post, Namakkal District 637018', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('53', 'NM', 'Namakkal', 2633, 'Vidhya Vikkas College of Engineering and Technology, Varahoorampatti, Tiruchengode, Namakkal District 637 214', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('54', 'NM', 'coimbatore', 2706, 'Dr. Mahalingam College of  Engineering and Technology (AUTONOMOUS), Mackinaickenpatti Post, Pollachi Taluk, Coimbatore District 642003', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('55', 'NM', 'Erode', 2707, 'Erode Sengunthar Engineering College (AUTONOMOUS), Thudupathi Post, Erode District 638057', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('56', 'NM', 'coimbatore', 2708, 'Hindusthan College of Engineering and Technology (AUTONOMOUS), Othakkalmandapam Post, Coimbatore District 641032', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('57', 'NM', 'coimbatore', 2710, 'Karpagam College of Engineering (AUTONOMOUS), Othakkalmandapam, Coimbatore District 641032', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('58', 'NM', 'erode', 2711, 'Kongu Engineering College (AUTONOMOUS), Perundurai, Erode District 638052', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('59', 'NM', 'coimbatore', 2712, 'Kumaraguru College of Technology (AUTONOMOUS), Chinnavedampatti Post, Coimbatore District 641006', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('60', 'NM', 'erode', 2713, 'M P Nachimuthu M Jagannathan Engineering College, Chennimalai, Erode District 638112', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('61', 'NM', 'erode', 2715, 'Nandha Engineering College (AUTONOMOUS), Pitchandampalayam Post, Erode District 638052', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('62', 'NM', 'erode', 2723, 'Velalar College of Engineering and Technology (AUTONOMOUS), Thindal Post, Erode District 638009', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('63', 'NM', 'coimbatore', 2726, 'S N S College of Technology (AUTONOMOUS), Kalappatti Post, Coimbatore District 641035', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('64', 'NM', 'coimbatore', 2750, 'KIT-Kalaignarkarunanidhi Institute of Technology (AUTONOMOUS), Kannampalayam, Coimbatore District 641402', 'MCA', 3, 0, 3, 2, 0, 2, 0),
('65', 'NM', 'erode', 2758, 'J K K Muniraja College of Technology, T N Palayam, Gobi Taluk, Erode District 638506', 'MCA', 6, 1, 5, 4, 1, 3, 0),
('66', 'NM', 'Nagappattinam', 3801, 'A V C College of Engineering, Mannampandal Post, Mayiladuthurai, Nagappattinam District 609305', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('67', 'NM', 'Thiruvarur', 3803, 'Anjalai Ammal-Mahalingam Engineering College, Kovilvenni, Thiruvarur District 614403', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('68', 'NM', 'Perambalur', 3805, 'Dhanalakshmi Srinivasan  Engineering College, Thuraiyur Road, Perambalur District 621212', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('69', 'NM', 'Nagappattinam', 3806, 'E G S Pillay  Engineering College (AUTONOMOUS), Nagapattinam District 611002', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('70', 'NM', 'Tiruchirappalli', 3808, 'Jayaram College of Engineering and Technology , Pagalavadi Post, Tiruchirappalli District 621014', 'MCA', 19, 2, 16, 12, 1, 9, 1),
('71', 'NM', 'Thanjavur', 3814, 'P R Engineering College, Vallam, Thanjavur District 613403', 'MCA', 13, 1, 10, 8, 1, 6, 1),
('72', 'NM', 'Thiruvarur', 3821, 'A R J College of Engineering and Technology, Mannargudi Taluk, Thiruvarur District 614001', 'MCA', 15, 2, 13, 10, 2, 7, 1),
('73', 'NM', 'Ariyalur', 3857, 'Meenakshi Ramaswamy Engineering College, Trichy Main Road,  Thathanur, Udayarpalayam, Ariyalur District 621804', 'MCA', 15, 2, 13, 10, 2, 7, 1),
('74', 'NM', 'Virudhunagar', 4960, 'Mepco Schlenk Engineering College (AUTONOMOUS), Sivakasi, Virudhunagar District 626005', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('75', 'NM', 'Tirunelveli', 4964, 'P S N College of Engineering and Technology (AUTONOMOUS), Melathediyoor, Tirunelveli Dstrict 627152', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('76', 'NM', 'Tirunelveli', 4967, 'S Veerasamy Chettiar College of  Engineering and Technology, Puliangudi Post, Tirunelveli District 627855', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('77', 'NM', 'Tirunelveli', 4968, 'Sardar Raja College of Engineering, Alangulam, Tirunelveli District 627808', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('78', 'NM', 'kanyakumari', 4978, 'Udaya School of Engineering, Ammandivilai Post, Kanyakumari District 629204', 'MCA', 8, 1, 7, 5, 1, 3, 0),
('79', 'NM', 'kanyakumari', 4983, 'Lord Jegannath College of Engineering and Technology, Kumarapuram, Thoppur Post, Kanyakumari District 629402', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('80', 'NM', 'Theni', 5902, 'Bharath Niketan Engineering College, Thimmarasanaickanoor, Aundipatti, Theni District 625536', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('81', 'NM', 'Dindigul', 5910, 'P S N A Colllege of Engineering and Technology, Dindigul District 624622', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('82', 'NM', 'Dindigul', 5913, 'R V S College of Engineering , N Paraipatti Post, Dindigul District 624005', 'MCA', 14, 2, 12, 9, 1, 7, 0),
('83', 'SA', 'Namakkal', 503, 'Excel Business School, (STAND ALONE), New Pallakapalayam, Sankari West (Post), Komarapalayam, Namakkal District 637303', 'MCA', 8, 1, 6, 4, 1, 3, 0),
('84', 'SA', 'coimbatore', 507, 'Nehru Institute of Information Technology and Management (STAND ALONE), Thirumalayampalayam, Coimbatore District 641105', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('85', 'SA', 'Namakkal', 520, 'Vivekanandha Institute of Information and Management Studies for Women (STAND ALONE), Elayampalayam Post, Tiruchengode, Namakkal District 637205', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('86', 'SA', 'salem', 542, 'Vasavi Vidya Trust Group of Institutions, Vysya College Campus, Ramakrishnapuram, Masinaickenpatty, Ayothiyapattinam Post, Salem District 636103', 'MCA', 10, 1, 8, 6, 1, 4, 0),
('87', 'SA', 'Namakkal', 714, 'S S M College of Engineering (MCA STAND ALONE), Komarapalayam, Namakkal District 638183', 'MCA', 19, 2, 16, 12, 1, 9, 1),
('88', 'UNIV', 'chennai', 1, 'University Departments of Anna University, Chennai - CEG Campus, Sardar Patel Road, Guindy, Chennai 600 025', 'MCA', 18, 2, 16, 12, 2, 9, 1),
('89', 'UNIV', 'chennai', 1, 'University Departments of Anna University, Chennai - CEG Campus, Sardar Patel Road, Guindy, Chennai 600 025', 'MCA (EVE)(SS)', 18, 2, 16, 12, 2, 9, 1),
('90', 'UNIV', 'salem', 709, 'Periyar University, Periyar Palkalai Nagar, Salem District 636 011', 'MCA', 5, 1, 4, 3, 0, 2, 0),
('91', 'UNIV', 'chennai', 710, 'University of Madras, Chepauk, Chennai 600005', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('92', 'UNIV', 'Dindigul', 711, 'Mother Teresa Women\'s University, Kodaikanal 624102', 'MCA', 9, 1, 8, 6, 1, 4, 1),
('93', 'UNIV', 'Madurai', 711, 'Mother Teresa Women\'s University Research and Extension Centre, N0.50, Navalar Nagar Second Street, S.S Colony, Madurai', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('94', 'UNIV', 'chennai', 711, 'Mother Teresa Women\'s University Research and Extension Centre, Teachers Training College Campus, Saidapet, Chennai 600015', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('95', 'UNIV', 'coimbatore', 711, 'Mother Teresa Women\'s University Research and Extension Centre, Corporation Boys Government School, R.S Puram, Coimbatore', 'MCA', 10, 1, 8, 6, 1, 4, 0),
('96', 'UNIV', 'coimbatore', 713, 'Bharathiar University, Maruthamalai Main Road, Somayampalayam Village, Coimbatore 641046', 'MCA', 9, 1, 8, 6, 1, 5, 0),
('97', 'UNIV', 'erode', 713, 'Bharathiar University Post Graduate Extension Centre, Erode - 638 001.', 'MCA', 16, 2, 13, 10, 1, 7, 1),
('98', 'UNIV', 'tiruchirappalli', 3011, 'University College of Engineering, BIT Campus, Anna University, Tiruchirappalli 620024', 'MCA (SS)', 18, 2, 16, 12, 2, 9, 1),
('99', 'UNIV', 'Tirunelveli', 4020, 'Anna University Regional Centre Tirunelveli, NGO Colony, Palayamkottai, Tirunelveli District 627005', 'MCA (SS)', 18, 2, 16, 12, 2, 9, 1),
('0', 'Nil', 'Nil', 0, 'No College Selected', 'Nil', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `prefrence`
--

CREATE TABLE `prefrence` (
  `email` varchar(50) NOT NULL,
  `p1` varchar(5) DEFAULT '0',
  `p2` varchar(5) DEFAULT '0',
  `p3` varchar(5) DEFAULT '0',
  `p4` varchar(5) DEFAULT '0',
  `p5` varchar(5) DEFAULT '0',
  `p6` varchar(5) DEFAULT '0',
  `p7` varchar(5) DEFAULT '0',
  `p8` varchar(5) DEFAULT '0',
  `p9` varchar(5) DEFAULT '0',
  `p10` varchar(5) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prefrence`
--

INSERT INTO `prefrence` (`email`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`) VALUES
('Email', '2', '1', '3', '0', '0', '0', '0', '0', '0', '0'),
('Email1', '7', '8', '0', '0', '0', '0', '0', '0', '0', '0'),
('Email22', '2', '1', '3', '0', '0', '0', '0', '0', '0', '0'),
('tell', '3', '4', '5', '0', '0', '0', '0', '0', '0', '0'),
('user@gmail.com', '81', '20', '82', '0', '0', '0', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `c_id` varchar(5) NOT NULL,
  `a_seat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`c_id`, `a_seat`) VALUES
('1', 1),
('2', 0),
('3', 0),
('4', 0),
('5', 1),
('6', 0),
('7', 1),
('8', 2),
('9', 3),
('10', 2),
('11', 1),
('12', 1),
('13', 2),
('14', 2),
('15', 1),
('16', 3),
('17', 2),
('18', 1),
('19', 2),
('20', 3),
('21', 1),
('22', 1),
('23', 3),
('24', 3),
('25', 3),
('26', 2),
('27', 1),
('28', 1),
('29', 0),
('30', 2),
('31', 2),
('32', 1),
('33', 1),
('34', 0),
('35', 0),
('36', 1),
('37', 0),
('38', 1),
('39', 0),
('40', 1),
('41', 1),
('42', 1),
('43', 1),
('44', 2),
('45', 1),
('46', 1),
('47', 1),
('48', 1),
('49', 1),
('50', 2),
('51', 1),
('52', 2),
('53', 1),
('54', 2),
('55', 2),
('56', 1),
('57', 1),
('58', 4),
('59', 1),
('60', 1),
('61', 1),
('62', 2),
('63', 4),
('64', 1),
('65', 2),
('66', 4),
('67', 1),
('68', 1),
('69', 1),
('70', 1),
('71', 3),
('72', 1),
('73', 2),
('74', 1),
('75', 1),
('76', 1),
('77', 1),
('78', 1),
('79', 1),
('80', 1),
('81', 1),
('82', 1),
('83', 1),
('84', 1),
('85', 2),
('86', 3),
('87', 2),
('88', 1),
('89', 1),
('90', 1),
('91', 1),
('92', 2),
('93', 2),
('94', 1),
('95', 1),
('96', 1),
('97', 1),
('98', 3),
('99', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prefrence`
--
ALTER TABLE `prefrence`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
