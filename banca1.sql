-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2023 at 08:10 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banca1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banca`
--

CREATE TABLE `banca` (
  `id_banca` int(11) NOT NULL,
  `num_banca` varchar(100) NOT NULL,
  `id_localitate` int(11) NOT NULL,
  `id_regiunea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banca`
--

INSERT INTO `banca` (`id_banca`, `num_banca`, `id_localitate`, `id_regiunea`) VALUES
(1, 'MOLDOVA - AGROINDBANK', 1, 1),
(2, 'OTP Bank', 1, 1),
(3, 'COMERTBANK', 1, 1),
(4, 'EuroCreditBank', 1, 1),
(5, 'ENERGBANK', 1, 1),
(6, 'EXIMBANK', 1, 1),
(7, 'FinComBank', 1, 1),
(8, 'Moldindconbank', 1, 1),
(9, 'ProCredit Bank', 1, 1),
(10, 'BCR Chisinau', 1, 1),
(11, 'VICTORIABANK', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `indecele`
--

CREATE TABLE `indecele` (
  `id_indece` int(11) NOT NULL,
  `id_bancii` int(11) NOT NULL,
  `dobinda_f` float NOT NULL,
  `dobinda_j` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indecele`
--

INSERT INTO `indecele` (`id_indece`, `id_bancii`, `dobinda_f`, `dobinda_j`) VALUES
(1, 1, 6.53, 9),
(2, 2, 6, 8.5),
(3, 3, 6.2, 15.5),
(4, 4, 7.26, 9),
(5, 5, 7.26, 14.5),
(6, 6, 6.64, 18.18),
(7, 7, 6.74, 8),
(8, 8, 7.14, 8),
(9, 9, 4.87, 16),
(10, 10, 6.86, 15),
(11, 11, 8, 17);

-- --------------------------------------------------------

--
-- Table structure for table `localitatea`
--

CREATE TABLE `localitatea` (
  `id_locatia` int(11) NOT NULL,
  `num_localitate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `localitatea`
--

INSERT INTO `localitatea` (`id_locatia`, `num_localitate`) VALUES
(1, 'Chisinau'),
(2, 'Ungheni'),
(3, 'Calarasi'),
(4, 'Balti');

-- --------------------------------------------------------

--
-- Table structure for table `regiunea`
--

CREATE TABLE `regiunea` (
  `id_regiune` int(11) NOT NULL,
  `num_regiune` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regiunea`
--

INSERT INTO `regiunea` (`id_regiune`, `num_regiune`) VALUES
(1, 'Municipiu Chisinau'),
(2, 'Raionul Ungheni'),
(3, 'Raionul Calarasi'),
(4, 'Municipiul Balti');

-- --------------------------------------------------------

--
-- Table structure for table `rezultatele`
--

CREATE TABLE `rezultatele` (
  `id_rezultate` int(11) NOT NULL,
  `venit_ian` int(11) NOT NULL,
  `venit_feb` int(11) NOT NULL,
  `venit_mar` int(11) NOT NULL,
  `venit_apr` int(11) NOT NULL,
  `venit_mai` int(11) NOT NULL,
  `venit_iun` int(11) NOT NULL,
  `venit_iul` int(11) NOT NULL,
  `venit_aug` int(11) NOT NULL,
  `venit_sep` int(11) NOT NULL,
  `venit_oct` int(11) NOT NULL,
  `venit_nov` int(11) NOT NULL,
  `venit_dec` int(11) NOT NULL,
  `id_bancii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rezultatele`
--

INSERT INTO `rezultatele` (`id_rezultate`, `venit_ian`, `venit_feb`, `venit_mar`, `venit_apr`, `venit_mai`, `venit_iun`, `venit_iul`, `venit_aug`, `venit_sep`, `venit_oct`, `venit_nov`, `venit_dec`, `id_bancii`) VALUES
(1, 47146469, 89858374, 85423810, 128870943, 72759610, 91229999, 88785569, 88038364, 113739250, 120727524, 126581309, 106758468, 1),
(2, 27906649, 53774928, 51736558, 15604366, 21477147, 22617456, 62504648, 50521003, 58782213, 44649039, 67583630, 100334324, 2),
(3, 79643207, 16425722, 130164210, 19325301, 188946423, 21399168, 233595462, 23581042, 301179092, 24084902, 401513416, 24713749, 3),
(4, 19921746, 2141098, 4843735, 7121810, 9107689, 11936843, 14900616, 17240878, 20248633, 25256274, 29970259, 35034105, 4),
(5, 4918035, 9375579, 13833122, 25411935, 33763329, 45194433, 33977388, 48914440, 66192354, 75581488, 92797816, 97924862, 5),
(6, 8218824, 11609664, 17790196, 23219327, 30525695, 39457678, 52663199, 58106006, 68891064, 81183548, 96624839, 88964983, 6),
(7, 7059121, 10409810, 13760498, 24749890, 30710225, 42157309, 52472746, 62031472, 76539195, 80200109, 97748493, 112370506, 7),
(8, 74409587, 97214194, 120018800, 193079867, 253559643, 359270664, 444928402, 542350287, 674932915, 797148992, 871167965, 878487530, 8),
(9, 8522930, 14263284, 20003637, 30724506, 46195040, 59316809, 70806891, 80639273, 95929577, 101001918, 115086472, 103789850, 9),
(10, 1618674, 9375579, 6823524, 16068405, 27970884, 39804030, 47003181, 58638125, 70420394, 95204409, 102359517, 120688301, 10),
(14, 60348134, 53774928, 97364192, 151453610, 180492819, 252971170, 294671673, 326371929, 407325237, 496988714, 536574467, 617849574, 11);

-- --------------------------------------------------------

--
-- Table structure for table `soldul`
--

CREATE TABLE `soldul` (
  `id_soldul` int(11) NOT NULL,
  `SDPJ` int(11) NOT NULL,
  `SDPF` int(11) NOT NULL,
  `id_bancii` int(11) NOT NULL,
  `capitalul` int(11) NOT NULL,
  `datoria` int(11) NOT NULL,
  `rentabilitate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soldul`
--

INSERT INTO `soldul` (`id_soldul`, `SDPJ`, `SDPF`, `id_bancii`, `capitalul`, `datoria`, `rentabilitate`) VALUES
(1, 38, 61, 1, 24002, 109689, 20),
(2, 29, 60, 3, 963, 3989, 7),
(3, 45, 51, 2, 8461, 52881, 19),
(4, 30, 70, 4, 791, 2271, 10),
(5, 41, 59, 5, 1238, 2563, 12),
(6, 55, 45, 6, 2129, 6430, 9),
(7, 40, 60, 7, 2371, 11855, 16),
(8, 27, 73, 8, 11371, 44575, 21),
(9, 50, 50, 9, 3192, 22181, 16),
(10, 60, 38, 10, 1175, 4968, 23),
(11, 41, 58, 11, 5937, 21849, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tarifele`
--

CREATE TABLE `tarifele` (
  `id_tarifele` int(11) NOT NULL,
  `t_active` float NOT NULL,
  `t_titluri` float NOT NULL,
  `t_credite` float NOT NULL,
  `t_depozite` float NOT NULL,
  `id_banci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tarifele`
--

INSERT INTO `tarifele` (`id_tarifele`, `t_active`, `t_titluri`, `t_credite`, `t_depozite`, `id_banci`) VALUES
(1, 2.55, 3.61, 9.2, 6.45, 1),
(2, 2.87, 3.85, 9.27, 6.55, 2),
(3, 2.87, 3.85, 4.09, 6.55, 3),
(4, 2.76, 6.69, 9.91, 4.01, 4),
(5, 3.87, 5.29, 6.94, 4.04, 5),
(6, 4.46, 7.08, 6.2, 4.08, 6),
(7, 4.92, 11.6, 4.24, 7.56, 7),
(8, 8.66, 0.47, 3.85, 4.19, 8),
(9, 4.92, 4.04, 7.36, 4.24, 9),
(10, 4.83, 8.4, 11.2, 4.73, 10),
(11, 5.95, 8.33, 10.68, 4.61, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banca`
--
ALTER TABLE `banca`
  ADD PRIMARY KEY (`id_banca`),
  ADD KEY `id_localitate` (`id_localitate`),
  ADD KEY `id_regiunea` (`id_regiunea`);

--
-- Indexes for table `indecele`
--
ALTER TABLE `indecele`
  ADD PRIMARY KEY (`id_indece`),
  ADD KEY `id_bancii` (`id_bancii`);

--
-- Indexes for table `localitatea`
--
ALTER TABLE `localitatea`
  ADD PRIMARY KEY (`id_locatia`);

--
-- Indexes for table `regiunea`
--
ALTER TABLE `regiunea`
  ADD PRIMARY KEY (`id_regiune`);

--
-- Indexes for table `rezultatele`
--
ALTER TABLE `rezultatele`
  ADD PRIMARY KEY (`id_rezultate`),
  ADD KEY `id_bancii` (`id_bancii`);

--
-- Indexes for table `soldul`
--
ALTER TABLE `soldul`
  ADD PRIMARY KEY (`id_soldul`),
  ADD KEY `id_bancii` (`id_bancii`);

--
-- Indexes for table `tarifele`
--
ALTER TABLE `tarifele`
  ADD PRIMARY KEY (`id_tarifele`),
  ADD KEY `id_banci` (`id_banci`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banca`
--
ALTER TABLE `banca`
  MODIFY `id_banca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `indecele`
--
ALTER TABLE `indecele`
  MODIFY `id_indece` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `localitatea`
--
ALTER TABLE `localitatea`
  MODIFY `id_locatia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `regiunea`
--
ALTER TABLE `regiunea`
  MODIFY `id_regiune` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rezultatele`
--
ALTER TABLE `rezultatele`
  MODIFY `id_rezultate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `soldul`
--
ALTER TABLE `soldul`
  MODIFY `id_soldul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tarifele`
--
ALTER TABLE `tarifele`
  MODIFY `id_tarifele` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banca`
--
ALTER TABLE `banca`
  ADD CONSTRAINT `banca_ibfk_1` FOREIGN KEY (`id_localitate`) REFERENCES `localitatea` (`id_locatia`),
  ADD CONSTRAINT `banca_ibfk_2` FOREIGN KEY (`id_regiunea`) REFERENCES `regiunea` (`id_regiune`);

--
-- Constraints for table `indecele`
--
ALTER TABLE `indecele`
  ADD CONSTRAINT `indecele_ibfk_1` FOREIGN KEY (`id_bancii`) REFERENCES `banca` (`id_banca`);

--
-- Constraints for table `rezultatele`
--
ALTER TABLE `rezultatele`
  ADD CONSTRAINT `rezultatele_ibfk_1` FOREIGN KEY (`id_bancii`) REFERENCES `banca` (`id_banca`);

--
-- Constraints for table `soldul`
--
ALTER TABLE `soldul`
  ADD CONSTRAINT `soldul_ibfk_1` FOREIGN KEY (`id_bancii`) REFERENCES `banca` (`id_banca`);

--
-- Constraints for table `tarifele`
--
ALTER TABLE `tarifele`
  ADD CONSTRAINT `tarifele_ibfk_1` FOREIGN KEY (`id_banci`) REFERENCES `banca` (`id_banca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
