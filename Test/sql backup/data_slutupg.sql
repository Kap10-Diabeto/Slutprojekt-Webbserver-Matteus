-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 03:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_slutupg`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `titel` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `content` varchar(5000) NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `titel`, `content`, `date`) VALUES
(27, 'Johan Ã¤r bÃ¤st', 'johan gillar anime tiddies', 'Wednesday 3rd of April 2019 11:42:23 AM'),
(28, 'Samuel moberg', 'fake confirmed?', 'Wednesday 3rd of April 2019 11:44:52 AM'),
(29, 'Katt', 'Katt (Felis catus), Ã¤ven kÃ¤nd som tamkatt, Ã¤r ett relativt litet, smygjagande rovdjur i familjen kattdjur och ett vanligt sÃ¤llskapsdjur i stora delar av vÃ¤rlden. Falbkatten (Felis silvestris lybica), en underart till vildkatten (Felis silvestris), blev tidigt domesticerad av mÃ¤nniskan som nyttodjur fÃ¶r att hÃ¥lla efter skadedjur eller fÃ¶r sÃ¤llskap, bÃ¥de pÃ¥ landet och i stadsmiljÃ¶. Till havs har man sedan gammalt haft skeppskatter som skyddade mot gnagarangrepp pÃ¥ tÃ¥g och i proviantfÃ¶rrÃ¥d. Dessutom kan katter vara underhÃ¥llande fÃ¶r mÃ¥nga mÃ¤nniskor med sin tillgivenhet och anvÃ¤nds Ã¤ven i terapeutiskt syfte vid psykisk ohÃ¤lsa. Dock begrÃ¤nsas anvÃ¤ndningen av att mÃ¥nga mÃ¤nniskor fÃ¥r allergireaktioner mot Ã¤mnen i kattens saliv, urin eller talgkÃ¶rtlar. PÃ¥ mÃ¥nga platser runt om i vÃ¤rlden, speciellt pÃ¥ Ã¶ar, utgÃ¶r introducerade katter ett stort hot mot andra djur, exempelvis markhÃ¤ckande fÃ¥glar.', 'Monday 8th of April 2019 01:52:48 PM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Kap', 'snap'),
(5, 'bajspojken', 'a1a8db834a8f2f2317974e061269bc2c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`,`titel`,`date`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
