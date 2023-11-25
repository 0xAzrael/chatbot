-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 02:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbot_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `id` int(11) NOT NULL,
  `input` text DEFAULT NULL,
  `output` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `responses`
--

INSERT INTO `responses` (`id`, `input`, `output`) VALUES
(1, 'Sino ang pambansang bayani ng Pilipinas?', 'Si Dr. José Protacio Rizal Mercado y Alonzo Realonda (19 Hunyo 1861– 30 Disyembre 1896) ay isang Pilipinong bayani at isa sa pinakatanyag na tagapagtaguyod ng pagbabago sa Pilipinas noong panahon ng pananakop ng mga Kastila.'),
(2, 'Ano ang kabisera ng Pilipinas?', 'Ang kasalukuyang lungsod kabisera, ang Maynila, ay ang kabisera ng bansa sa halos buong kasaysayan nito at pinarangalan / itinalagang muli sa pamamagitan ng isang kautusan ng pangulo noong Hunyo 24, 1976.'),
(3, 'Ano ang pambansang prutas? ng Pilipinas', 'Ang Mangga ay may iba’t ibang uri ngunit halos lahat ay hugis-puso.  Marahil ito ang isa sa mga pinagbasehan kung bakit ito ang naging Pambansang Prutas ng Pilipinas. Maaari kasi itong sumagisag sa pagiging mapagmahal ng mga Pilipino. Ang pangalan ng prutas na ito ay hango sa salitang Tamil na “maangai” o sa salitang Malayalam na “maanga”.  Pinasikat ito ng mga Portugis pagkatapos ng kanilang eksplorasyon sa India kaya naging “manga” sa Portugis. Ang Mangga ay may makinis na balat.  Karamihan ay dilaw ang kulay nito kapag hinog na.  Berde ang kulay nito kapag hilaw pa. Masarap itong kainin, hilaw man o hinog.'),
(4, 'Ano ang pambansang hayop ng Pilipinas?', 'Pambansang hayop ng Pilipinas ang kalabaw. Ito ang pangunahing katulong ng mga magsasaka sa mga gawain sa bukid tulad ng pag-aararo at paghahatid ng mga produkto sa kamalig o pamilihan.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responses`
--
ALTER TABLE `responses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responses`
--
ALTER TABLE `responses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
