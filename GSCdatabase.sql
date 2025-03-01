-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 01, 2025 at 10:50 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsc_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Customer_ID` int NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(30) DEFAULT NULL,
  `LastName` varchar(30) DEFAULT NULL,
  `Email` varchar(30) NOT NULL,
  `PhoneNumber` varchar(12) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1038 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_ID`, `FirstName`, `LastName`, `Email`, `PhoneNumber`) VALUES
(1001, 'Thong', 'Hao Hong', 'Hao_hong1@hotmail.com', '0129001299'),
(1002, 'Kamaruddin', 'Nasruddin', 'Kamaruddin00@gmail.com', '0109432112'),
(1003, 'Hani', 'Mohammed Abdullah', 'Hani__1@gmail.com', '01155098732'),
(1004, 'Ashwinder', 'Raj Singh', 'Ashwinder90@yahoo.com', '0126607980'),
(1005, 'Firdaus', 'bin Jamaluddin', 'Firdaus_jamaluddin@outlook.com', '0103977789'),
(1006, 'Siti Aminah', 'Binti Aziz', 'Sitiaminah_aziz@gmail.com', '0161122345'),
(1007, 'Farhanah', 'Mohamad', 'Farhanah_123@gmail.com', '0172001432'),
(1008, 'Lee', 'Chong Wei', 'Chongwei321@gmail.com', '0124508978'),
(1009, 'Tony', 'Fernandes', 'Tony_f1@yahoo.com', '0110392456'),
(1010, 'Thinaah', 'Muralitharan', 'Thinaaaah_3@gmail.com', '0123354498'),
(1011, 'Wei Ling', 'Tan', 'TanWeiLing47@gmail.com', '0123001299'),
(1012, 'Devan', 'Selvaraj', 'DevanSelva32@gmail.com', '0109432456'),
(1013, 'Aisha', 'Binti Zahid', 'AishaZahid91@yahoo.com', '0115501234'),
(1014, 'Jason', 'Lim', 'LimJason84@hotmail.com', '0126604567'),
(1015, 'Mageshwaran', 'Vijay', 'MageshVijay76@gmail.com', '0103977456'),
(1016, 'Amirah', 'Binti Kadir', 'AmirahKadir58@gmail.com', '0161125678'),
(1017, 'Chandra', 'Kumar', 'ChandraKumar39@yahoo.com', '0172001890'),
(1018, 'Chong', 'Sook Yee', 'ChongSookYee22@gmail.com', '0124506789'),
(1019, 'Krishna', 'Murthy', 'KrishnaMurthy85@yahoo.com', '0110392567'),
(1020, 'Priya', 'D/O Rajendran', 'PriyaRajen44@gmail.com', '0123356789'),
(1021, 'Low', 'Kok Wei', 'LowKokWei93@hotmail.com', '0145678345'),
(1022, 'Rajesh', 'Nair', 'RajeshNair69@gmail.com', '0137890123'),
(1023, 'Siti', 'Fatimah', 'SitiFatimah72@yahoo.com', '0146789012'),
(1024, 'Yusuf', 'Bin Idris', 'YusufIdris53@gmail.com', '0158912378'),
(1025, 'Wong', 'Mei Ling', 'WongMeiLing64@hotmail.com', '0163456729'),
(1026, 'Saravanan', 'Muthu', 'SaravananMuthu57@gmail.com', '0177890345'),
(1027, 'Nurul', 'Hidayah', 'NurulHidayah76@yahoo.com', '0189126789'),
(1028, 'Thiagarajan', 'Sundram', 'ThiagarajanSundram38@gmail.com', '0191237890'),
(1029, 'Yee Fong', 'Lee', 'LeeYeeFong29@hotmail.com', '0112349087'),
(1030, 'Lionel', 'Messi', 'Lionelmessi115@gmail.com', '01112041138'),
(1031, 'Jones', 'Indiana', 'INDJ4482@yahoo.com', '0129990989'),
(1032, 'Cristiano', 'Ronaldo', 'ronaldo45@gmail.com', '01134449069'),
(1033, 'Tom', 'Christopher', 'christom222@gmail.com', '01155990928'),
(1034, 'Teoh', 'Sze Er', 'zollybin@gmail.com', '01111111111'),
(1035, 'Tom', 'Christopher', 'christom222@gmail.com', '01155990928'),
(1036, 'Thong', 'Hao Hong', 'haohong0127@gmail.com', '0109450225'),
(1037, 'Thong', 'Hao Hong', 'haohong0127@gmail.com', '0109450225');

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

DROP TABLE IF EXISTS `hall`;
CREATE TABLE IF NOT EXISTS `hall` (
  `Hall_No` int NOT NULL,
  `TotalSeats` int NOT NULL,
  `TotalRow` int NOT NULL,
  `TotalColumn` int NOT NULL,
  PRIMARY KEY (`Hall_No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`Hall_No`, `TotalSeats`, `TotalRow`, `TotalColumn`) VALUES
(1, 50, 5, 10),
(2, 30, 5, 6),
(3, 60, 5, 12),
(4, 40, 5, 8),
(5, 80, 5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `Movie_ID` int NOT NULL,
  `MovieName` varchar(50) DEFAULT NULL,
  `MovieDirector` varchar(25) NOT NULL,
  `MovieGenre` varchar(25) NOT NULL,
  `MovieDescription` varchar(300) NOT NULL,
  `MovieDuration` int NOT NULL,
  PRIMARY KEY (`Movie_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`Movie_ID`, `MovieName`, `MovieDirector`, `MovieGenre`, `MovieDescription`, `MovieDuration`) VALUES
(1, 'The Fall Guy', 'David Leitch', 'Adventure', 'A Hollywood stuntman who works as a bounty hunter by night, using his stunt skills in his night-time escapades.', 125),
(2, 'I Saw The TV Glow', 'Jane Schoenburn', 'Horror', 'Teen outcasts bond over a horror TV show which blurs reality after its mysterious cancellation.', 100),
(3, 'Jeanne du Barry', 'Maïwenn', 'Historical', 'A historical drama about Jeanne du Barry, who rises from obscurity to become the favorite of King Louis XV.', 116),
(4, 'Star Wars: Episode I - The Phantom Menace', 'Liam Neeson', 'Action', 'A re-release of the sci-fi epic where Jedi knights face unexpected challenges on the planet Naboo.', 131),
(5, 'Dragonkeeper', 'Salvador Simó', 'Adventure', 'An animated story of a girl in ancient China who protects a dragon egg on a perilous journey across the country.', 110);

-- --------------------------------------------------------

--
-- Table structure for table `moviescreenings`
--

DROP TABLE IF EXISTS `moviescreenings`;
CREATE TABLE IF NOT EXISTS `moviescreenings` (
  `Screenings_ID` int NOT NULL AUTO_INCREMENT,
  `ShowtimeDate` date NOT NULL,
  `Showtime` time NOT NULL,
  `Movie_ID` int DEFAULT NULL,
  `Hall_No` int DEFAULT NULL,
  PRIMARY KEY (`Screenings_ID`),
  KEY `Movie_ID` (`Movie_ID`),
  KEY `Hall_No` (`Hall_No`)
) ENGINE=MyISAM AUTO_INCREMENT=124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `moviescreenings`
--

INSERT INTO `moviescreenings` (`Screenings_ID`, `ShowtimeDate`, `Showtime`, `Movie_ID`, `Hall_No`) VALUES
(101, '2024-05-10', '14:00:00', 3, 3),
(102, '2024-05-10', '17:00:00', 1, 1),
(103, '2024-05-10', '20:00:00', 3, 2),
(104, '2024-05-11', '14:00:00', 2, 4),
(105, '2024-05-11', '17:00:00', 5, 5),
(106, '2024-05-11', '20:00:00', 4, 2),
(107, '2024-05-12', '14:00:00', 2, 2),
(108, '2024-05-12', '17:00:00', 4, 3),
(109, '2024-05-12', '20:00:00', 1, 5),
(110, '2024-05-13', '14:00:00', 5, 4),
(111, '2024-05-13', '17:00:00', 3, 1),
(112, '2024-05-13', '20:00:00', 2, 4),
(113, '2024-05-14', '14:00:00', 2, 2),
(114, '2024-05-14', '17:00:00', 4, 5),
(115, '2024-05-14', '20:00:00', 5, 1),
(116, '2024-05-15', '14:00:00', 5, 2),
(117, '2024-05-15', '17:00:00', 1, 5),
(118, '2024-05-15', '20:00:00', 4, 2),
(119, '2024-06-06', '11:00:00', 2, 5),
(120, '2024-06-08', '14:00:00', 5, 1),
(121, '2024-06-06', '15:00:00', 1, 2),
(122, '2024-06-05', '10:00:00', 3, 1),
(123, '2024-06-28', '10:00:00', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `Seat_ID` char(4) NOT NULL,
  `SeatRow` char(1) NOT NULL,
  `SeatClass` varchar(25) NOT NULL,
  `SeatPrice` float NOT NULL,
  `Hall_No` int DEFAULT NULL,
  PRIMARY KEY (`Seat_ID`),
  KEY `Hall_No` (`Hall_No`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`Seat_ID`, `SeatRow`, `SeatClass`, `SeatPrice`, `Hall_No`) VALUES
('1A01', 'A', 'Premium', 25, 1),
('1A02', 'A', 'Premium', 25, 1),
('1A03', 'A', 'Premium', 25, 1),
('1A04', 'A', 'Premium', 25, 1),
('1A05', 'A', 'Premium', 25, 1),
('1A06', 'A', 'Premium', 25, 1),
('1A07', 'A', 'Premium', 25, 1),
('1A08', 'A', 'Premium', 25, 1),
('1A09', 'A', 'Premium', 25, 1),
('1A10', 'A', 'Premium', 25, 1),
('1B01', 'B', 'Premium', 25, 1),
('1B02', 'B', 'Premium', 25, 1),
('1B03', 'B', 'Premium', 25, 1),
('1B04', 'B', 'Premium', 25, 1),
('1B05', 'B', 'Premium', 25, 1),
('1B06', 'B', 'Premium', 25, 1),
('1B07', 'B', 'Premium', 25, 1),
('1B08', 'B', 'Premium', 25, 1),
('1B09', 'B', 'Premium', 25, 1),
('1B10', 'B', 'Premium', 25, 1),
('1C01', 'C', 'Deluxe', 18, 1),
('1C02', 'C', 'Deluxe', 18, 1),
('1C03', 'C', 'Deluxe', 18, 1),
('1C04', 'C', 'Deluxe', 18, 1),
('1C05', 'C', 'Deluxe', 18, 1),
('1C06', 'C', 'Deluxe', 18, 1),
('1C07', 'C', 'Deluxe', 18, 1),
('1C08', 'C', 'Deluxe', 18, 1),
('1C09', 'C', 'Deluxe', 18, 1),
('1C10', 'C', 'Deluxe', 18, 1),
('1D01', 'D', 'Economy', 12, 1),
('1D02', 'D', 'Economy', 12, 1),
('1D03', 'D', 'Economy', 12, 1),
('1D04', 'D', 'Economy', 12, 1),
('1D05', 'D', 'Economy', 12, 1),
('1D06', 'D', 'Economy', 12, 1),
('1D07', 'D', 'Economy', 12, 1),
('1D08', 'D', 'Economy', 12, 1),
('1D09', 'D', 'Economy', 12, 1),
('1D10', 'D', 'Economy', 12, 1),
('1E01', 'E', 'Economy', 12, 1),
('1E02', 'E', 'Economy', 12, 1),
('1E03', 'E', 'Economy', 12, 1),
('1E04', 'E', 'Economy', 12, 1),
('1E05', 'E', 'Economy', 12, 1),
('1E06', 'E', 'Economy', 12, 1),
('1E07', 'E', 'Economy', 12, 1),
('1E08', 'E', 'Economy', 12, 1),
('1E09', 'E', 'Economy', 12, 1),
('1E10', 'E', 'Economy', 12, 1),
('2A01', 'A', 'Premium', 25, 2),
('2A02', 'A', 'Premium', 25, 2),
('2A03', 'A', 'Premium', 25, 2),
('2A04', 'A', 'Premium', 25, 2),
('2A05', 'A', 'Premium', 25, 2),
('2A06', 'A', 'Premium', 25, 2),
('2B01', 'B', 'Premium', 25, 2),
('2B02', 'B', 'Premium', 25, 2),
('2B03', 'B', 'Premium', 25, 2),
('2B04', 'B', 'Premium', 25, 2),
('2B05', 'B', 'Premium', 25, 2),
('2B06', 'B', 'Premium', 25, 2),
('2C01', 'C', 'Deluxe', 18, 2),
('2C02', 'C', 'Deluxe', 18, 2),
('2C03', 'C', 'Deluxe', 18, 2),
('2C04', 'C', 'Deluxe', 18, 2),
('2C05', 'C', 'Deluxe', 18, 2),
('2C06', 'C', 'Deluxe', 18, 2),
('2D01', 'D', 'Economy', 12, 2),
('2D02', 'D', 'Economy', 12, 2),
('2D03', 'D', 'Economy', 12, 2),
('2D04', 'D', 'Economy', 12, 2),
('2D05', 'D', 'Economy', 12, 2),
('2D06', 'D', 'Economy', 12, 2),
('2E01', 'E', 'Economy', 12, 2),
('2E02', 'E', 'Economy', 12, 2),
('2E03', 'E', 'Economy', 12, 2),
('2E04', 'E', 'Economy', 12, 2),
('2E05', 'E', 'Economy', 12, 2),
('2E06', 'E', 'Economy', 12, 2),
('3A01', 'A', 'Premium', 25, 3),
('3A02', 'A', 'Premium', 25, 3),
('3A03', 'A', 'Premium', 25, 3),
('3A04', 'A', 'Premium', 25, 3),
('3A05', 'A', 'Premium', 25, 3),
('3A06', 'A', 'Premium', 25, 3),
('3A07', 'A', 'Premium', 25, 3),
('3A08', 'A', 'Premium', 25, 3),
('3A09', 'A', 'Premium', 25, 3),
('3A10', 'A', 'Premium', 25, 3),
('3A11', 'A', 'Premium', 25, 3),
('3A12', 'A', 'Premium', 25, 3),
('3B01', 'B', 'Premium', 25, 3),
('3B02', 'B', 'Premium', 25, 3),
('3B03', 'B', 'Premium', 25, 3),
('3B04', 'B', 'Premium', 25, 3),
('3B05', 'B', 'Premium', 25, 3),
('3B06', 'B', 'Premium', 25, 3),
('3B07', 'B', 'Premium', 25, 3),
('3B08', 'B', 'Premium', 25, 3),
('3B09', 'B', 'Premium', 25, 3),
('3B10', 'B', 'Premium', 25, 3),
('3B11', 'B', 'Premium', 25, 3),
('3B12', 'B', 'Premium', 25, 3),
('3C01', 'C', 'Deluxe', 18, 3),
('3C02', 'C', 'Deluxe', 18, 3),
('3C03', 'C', 'Deluxe', 18, 3),
('3C04', 'C', 'Deluxe', 18, 3),
('3C05', 'C', 'Deluxe', 18, 3),
('3C06', 'C', 'Deluxe', 18, 3),
('3C07', 'C', 'Deluxe', 18, 3),
('3C08', 'C', 'Deluxe', 18, 3),
('3C09', 'C', 'Deluxe', 18, 3),
('3C10', 'C', 'Deluxe', 18, 3),
('3C11', 'C', 'Deluxe', 18, 3),
('3C12', 'C', 'Deluxe', 18, 3),
('3D01', 'D', 'Economy', 12, 3),
('3D02', 'D', 'Economy', 12, 3),
('3D03', 'D', 'Economy', 12, 3),
('3D04', 'D', 'Economy', 12, 3),
('3D05', 'D', 'Economy', 12, 3),
('3D06', 'D', 'Economy', 12, 3),
('3D07', 'D', 'Economy', 12, 3),
('3D08', 'D', 'Economy', 12, 3),
('3D09', 'D', 'Economy', 12, 3),
('3D10', 'D', 'Economy', 12, 3),
('3D11', 'D', 'Economy', 12, 3),
('3D12', 'D', 'Economy', 12, 3),
('3E01', 'E', 'Economy', 12, 3),
('3E02', 'E', 'Economy', 12, 3),
('3E03', 'E', 'Economy', 12, 3),
('3E04', 'E', 'Economy', 12, 3),
('3E05', 'E', 'Economy', 12, 3),
('3E06', 'E', 'Economy', 12, 3),
('3E07', 'E', 'Economy', 12, 3),
('3E08', 'E', 'Economy', 12, 3),
('3E09', 'E', 'Economy', 12, 3),
('3E10', 'E', 'Economy', 12, 3),
('3E11', 'E', 'Economy', 12, 3),
('3E12', 'E', 'Economy', 12, 3),
('4A01', 'A', 'Premium', 25, 4),
('4A02', 'A', 'Premium', 25, 4),
('4A03', 'A', 'Premium', 25, 4),
('4A04', 'A', 'Premium', 25, 4),
('4A05', 'A', 'Premium', 25, 4),
('4A06', 'A', 'Premium', 25, 4),
('4A07', 'A', 'Premium', 25, 4),
('4A08', 'A', 'Premium', 25, 4),
('4B01', 'B', 'Premium', 25, 4),
('4B02', 'B', 'Premium', 25, 4),
('4B03', 'B', 'Premium', 25, 4),
('4B04', 'B', 'Premium', 25, 4),
('4B05', 'B', 'Premium', 25, 4),
('4B06', 'B', 'Premium', 25, 4),
('4B07', 'B', 'Premium', 25, 4),
('4B08', 'B', 'Premium', 25, 4),
('4C01', 'C', 'Deluxe', 18, 4),
('4C02', 'C', 'Deluxe', 18, 4),
('4C03', 'C', 'Deluxe', 18, 4),
('4C04', 'C', 'Deluxe', 18, 4),
('4C05', 'C', 'Deluxe', 18, 4),
('4C06', 'C', 'Deluxe', 18, 4),
('4C07', 'C', 'Deluxe', 18, 4),
('4C08', 'C', 'Deluxe', 18, 4),
('4D01', 'D', 'Economy', 12, 4),
('4D02', 'D', 'Economy', 12, 4),
('4D03', 'D', 'Economy', 12, 4),
('4D04', 'D', 'Economy', 12, 4),
('4D05', 'D', 'Economy', 12, 4),
('4D06', 'D', 'Economy', 12, 4),
('4D07', 'D', 'Economy', 12, 4),
('4D08', 'D', 'Economy', 12, 4),
('4E01', 'E', 'Economy', 12, 4),
('4E02', 'E', 'Economy', 12, 4),
('4E03', 'E', 'Economy', 12, 4),
('4E04', 'E', 'Economy', 12, 4),
('4E05', 'E', 'Economy', 12, 4),
('4E06', 'E', 'Economy', 12, 4),
('4E07', 'E', 'Economy', 12, 4),
('4E08', 'E', 'Economy', 12, 4),
('5A01', 'A', 'Premium', 25, 5),
('5A02', 'A', 'Premium', 25, 5),
('5A03', 'A', 'Premium', 25, 5),
('5A04', 'A', 'Premium', 25, 5),
('5A05', 'A', 'Premium', 25, 5),
('5A06', 'A', 'Premium', 25, 5),
('5A07', 'A', 'Premium', 25, 5),
('5A08', 'A', 'Premium', 25, 5),
('5A09', 'A', 'Premium', 25, 5),
('5A10', 'A', 'Premium', 25, 5),
('5A11', 'A', 'Premium', 25, 5),
('5A12', 'A', 'Premium', 25, 5),
('5A13', 'A', 'Premium', 25, 5),
('5A14', 'A', 'Premium', 25, 5),
('5A15', 'A', 'Premium', 25, 5),
('5A16', 'A', 'Premium', 25, 5),
('5B01', 'B', 'Premium', 25, 5),
('5B02', 'B', 'Premium', 25, 5),
('5B03', 'B', 'Premium', 25, 5),
('5B04', 'B', 'Premium', 25, 5),
('5B05', 'B', 'Premium', 25, 5),
('5B06', 'B', 'Premium', 25, 5),
('5B07', 'B', 'Premium', 25, 5),
('5B08', 'B', 'Premium', 25, 5),
('5B09', 'B', 'Premium', 25, 5),
('5B10', 'B', 'Premium', 25, 5),
('5B11', 'B', 'Premium', 25, 5),
('5B12', 'B', 'Premium', 25, 5),
('5B13', 'B', 'Premium', 25, 5),
('5B14', 'B', 'Premium', 25, 5),
('5B15', 'B', 'Premium', 25, 5),
('5B16', 'B', 'Premium', 25, 5),
('5C01', 'C', 'Deluxe', 18, 5),
('5C02', 'C', 'Deluxe', 18, 5),
('5C03', 'C', 'Deluxe', 18, 5),
('5C04', 'C', 'Deluxe', 18, 5),
('5C05', 'C', 'Deluxe', 18, 5),
('5C06', 'C', 'Deluxe', 18, 5),
('5C07', 'C', 'Deluxe', 18, 5),
('5C08', 'C', 'Deluxe', 18, 5),
('5C09', 'C', 'Deluxe', 18, 5),
('5C10', 'C', 'Deluxe', 18, 5),
('5C11', 'C', 'Deluxe', 18, 5),
('5C12', 'C', 'Deluxe', 18, 5),
('5C13', 'C', 'Deluxe', 18, 5),
('5C14', 'C', 'Deluxe', 18, 5),
('5C15', 'C', 'Deluxe', 18, 5),
('5C16', 'C', 'Deluxe', 18, 5),
('5D01', 'D', 'Economy', 12, 5),
('5D02', 'D', 'Economy', 12, 5),
('5D03', 'D', 'Economy', 12, 5),
('5D04', 'D', 'Economy', 12, 5),
('5D05', 'D', 'Economy', 12, 5),
('5D06', 'D', 'Economy', 12, 5),
('5D07', 'D', 'Economy', 12, 5),
('5D08', 'D', 'Economy', 12, 5),
('5D09', 'D', 'Economy', 12, 5),
('5D10', 'D', 'Economy', 12, 5),
('5D11', 'D', 'Economy', 12, 5),
('5D12', 'D', 'Economy', 12, 5),
('5D13', 'D', 'Economy', 12, 5),
('5D14', 'D', 'Economy', 12, 5),
('5D15', 'D', 'Economy', 12, 5),
('5D16', 'D', 'Economy', 12, 5),
('5E01', 'E', 'Economy', 12, 5),
('5E02', 'E', 'Economy', 12, 5),
('5E03', 'E', 'Economy', 12, 5),
('5E04', 'E', 'Economy', 12, 5),
('5E05', 'E', 'Economy', 12, 5),
('5E06', 'E', 'Economy', 12, 5),
('5E07', 'E', 'Economy', 12, 5),
('5E08', 'E', 'Economy', 12, 5),
('5E09', 'E', 'Economy', 12, 5),
('5E10', 'E', 'Economy', 12, 5),
('5E11', 'E', 'Economy', 12, 5),
('5E12', 'E', 'Economy', 12, 5),
('5E13', 'E', 'Economy', 12, 5),
('5E14', 'E', 'Economy', 12, 5),
('5E15', 'E', 'Economy', 12, 5),
('5E16', 'E', 'Economy', 12, 5);

-- --------------------------------------------------------

--
-- Table structure for table `seat_ticketsales`
--

DROP TABLE IF EXISTS `seat_ticketsales`;
CREATE TABLE IF NOT EXISTS `seat_ticketsales` (
  `ST_ID` int NOT NULL AUTO_INCREMENT,
  `Ticket_ID` int DEFAULT NULL,
  `Seat_ID` char(6) DEFAULT NULL,
  PRIMARY KEY (`ST_ID`),
  KEY `Ticket_ID` (`Ticket_ID`),
  KEY `Seat_ID` (`Seat_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=211 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `seat_ticketsales`
--

INSERT INTO `seat_ticketsales` (`ST_ID`, `Ticket_ID`, `Seat_ID`) VALUES
(101, 1, '1A02'),
(102, 1, '1A03'),
(103, 2, '3C12'),
(104, 3, '3B10'),
(105, 3, '3B09'),
(106, 3, '3B08'),
(107, 3, '3B07'),
(108, 4, '2D02'),
(109, 4, '2D03'),
(110, 5, '4C07'),
(111, 6, '2E01'),
(112, 6, '2E02'),
(113, 7, '2C01'),
(114, 7, '2C02'),
(115, 7, '2C03'),
(116, 7, '2C04'),
(117, 7, '2C05'),
(118, 8, '1D08'),
(119, 8, '1D09'),
(120, 9, '2C06'),
(121, 9, '2C05'),
(122, 9, '2C04'),
(123, 10, '2D02'),
(124, 11, '3D12'),
(125, 11, '3D11'),
(126, 11, '3D10'),
(127, 11, '3D09'),
(128, 12, '4C06'),
(129, 12, '4C05'),
(130, 13, '5A13'),
(131, 13, '5A12'),
(132, 13, '5A11'),
(133, 14, '2D02'),
(134, 15, '4C08'),
(135, 15, '4C07'),
(136, 16, '5B03'),
(137, 16, '5B04'),
(138, 16, '5B05'),
(139, 16, '5B06'),
(140, 17, '5C01'),
(141, 17, '5C02'),
(142, 18, '5D10'),
(143, 18, '5D11'),
(144, 18, '5D12'),
(145, 19, '2C01'),
(146, 20, '4E04'),
(147, 20, '4E05'),
(148, 21, '2D03'),
(149, 21, '2D04'),
(150, 21, '2D05'),
(151, 22, '4C06'),
(152, 22, '4C05'),
(153, 22, '4C04'),
(154, 22, '4C03'),
(155, 23, '3B01'),
(156, 23, '3B02'),
(157, 24, '4E01'),
(158, 24, '4E02'),
(159, 24, '4E03'),
(160, 24, '4E04'),
(161, 24, '4E05'),
(162, 25, '1C01'),
(163, 26, '3A01'),
(164, 26, '3A02'),
(165, 27, '5C15'),
(166, 27, '5C14'),
(167, 27, '5C13'),
(168, 28, '5D01'),
(169, 28, '5D02'),
(170, 28, '5D03'),
(171, 28, '5D04'),
(172, 29, '1C05'),
(173, 30, '2D05'),
(174, 30, '2D06'),
(175, 31, '1E05'),
(176, 31, '1E06'),
(177, 31, '1E07'),
(178, 32, '5C01'),
(179, 32, '5C02'),
(180, 32, '5C03'),
(181, 32, '5C04'),
(182, 33, '2B06'),
(183, 33, '2B05'),
(184, 34, '1D01'),
(185, 34, '1D02'),
(186, 34, '1D03'),
(187, 34, '1D04'),
(188, 34, '1D05'),
(189, 35, '3C02'),
(190, 36, '2A04'),
(191, 36, '2A05'),
(192, 37, '2C06'),
(193, 37, '2C05'),
(194, 37, '2C04'),
(195, 38, '2E01'),
(196, 38, '2E02'),
(197, 38, '2E03'),
(198, 38, '2E04'),
(199, 39, '5C04'),
(200, 40, '1A02'),
(201, 41, '1B06'),
(202, 42, '1B04'),
(203, 43, '1C04'),
(204, 203, '1C05'),
(205, 204, '1C06'),
(206, 44, '5A09'),
(207, 206, '5C08'),
(208, 207, '5E05'),
(209, 45, '1A03'),
(210, 46, '2A03');

-- --------------------------------------------------------

--
-- Table structure for table `ticketsales`
--

DROP TABLE IF EXISTS `ticketsales`;
CREATE TABLE IF NOT EXISTS `ticketsales` (
  `Ticket_ID` int NOT NULL AUTO_INCREMENT,
  `AmountPaid` float NOT NULL,
  `DatePurchase` date NOT NULL,
  `CC_Info` varchar(4) NOT NULL,
  `Screenings_ID` int DEFAULT NULL,
  `Customer_ID` int DEFAULT NULL,
  PRIMARY KEY (`Ticket_ID`),
  KEY `Screenings_ID` (`Screenings_ID`),
  KEY `Customer_ID` (`Customer_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ticketsales`
--

INSERT INTO `ticketsales` (`Ticket_ID`, `AmountPaid`, `DatePurchase`, `CC_Info`, `Screenings_ID`, `Customer_ID`) VALUES
(1, 50, '2024-05-01', '2001', 111, 1001),
(2, 18, '2024-05-01', '1083', 108, 1002),
(3, 100, '2024-05-01', '4542', 101, 1003),
(4, 36, '2024-05-01', '0239', 103, 1004),
(5, 18, '2024-05-01', '1221', 104, 1005),
(6, 50, '2024-05-01', '0395', 107, 1006),
(7, 90, '2024-05-01', '9078', 118, 1007),
(8, 24, '2024-05-02', '8809', 102, 1008),
(9, 54, '2024-05-02', '7695', 106, 1009),
(10, 12, '2024-05-02', '5096', 118, 1010),
(11, 48, '2024-05-02', '4332', 101, 1011),
(12, 36, '2024-05-03', '3679', 104, 1012),
(13, 75, '2024-05-03', '0912', 105, 1013),
(14, 12, '2024-05-03', '1231', 107, 1014),
(15, 36, '2024-05-04', '5509', 110, 1015),
(16, 100, '2024-05-04', '5942', 109, 1016),
(17, 36, '2024-05-04', '1564', 109, 1017),
(18, 36, '2024-05-04', '0090', 114, 1018),
(19, 18, '2024-05-05', '4432', 113, 1019),
(20, 24, '2024-05-06', '3123', 112, 1020),
(21, 36, '2024-05-06', '7767', 113, 1021),
(22, 72, '2024-05-06', '6563', 110, 1022),
(23, 50, '2024-05-06', '0392', 101, 1023),
(24, 60, '2024-05-06', '6622', 104, 1024),
(25, 18, '2024-05-07', '3445', 102, 1025),
(26, 50, '2024-05-07', '4044', 108, 1026),
(27, 54, '2024-05-07', '5654', 110, 1027),
(28, 48, '2024-05-07', '4512', 117, 1028),
(29, 18, '2024-05-07', '3033', 115, 1029),
(30, 24, '2024-05-07', '2097', 116, 1030),
(31, 36, '2024-05-07', '4567', 111, 1031),
(32, 72, '2024-05-07', '7787', 105, 1032),
(33, 50, '2024-05-07', '2022', 106, 1001),
(34, 60, '2024-05-08', '1231', 102, 1031),
(35, 18, '2024-05-08', '2034', 101, 1022),
(36, 50, '2024-05-09', '1110', 103, 1028),
(37, 54, '2024-05-09', '3266', 118, 1024),
(38, 48, '2024-05-09', '0121', 106, 1009),
(39, 18, '2024-05-09', '1231', 109, 1005),
(40, 25, '2024-05-26', '4567', 102, 1030),
(41, 25, '2024-05-26', '4400', 102, 1032),
(42, 25, '2024-05-28', '4444', 102, 1033),
(43, 54, '2024-05-28', '4567', 102, 1034),
(44, 55, '2024-06-03', '1234', 117, 1035),
(45, 25, '2024-06-03', '4567', 102, 1036),
(46, 25, '2024-06-04', '4567', 113, 1037);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
