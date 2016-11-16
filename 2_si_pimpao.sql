-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 03:19 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_pimpao`
--

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--
-- in use(#1932 - Table 'si_pimpao.pma__bookmark' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'si_pimpao.pma__bookmark' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--
-- in use(#1932 - Table 'si_pimpao.pma__central_columns' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'si_pimpao.pma__central_columns' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--
-- in use(#1932 - Table 'si_pimpao.pma__column_info' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'si_pimpao.pma__column_info' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--
-- in use(#1932 - Table 'si_pimpao.pma__designer_settings' doesn't exist in engine)
-- Error reading data: (#1932 - Table 'si_pimpao.pma__designer_settings' doesn't exist in engine)

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `ID` int(128) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `codigo` int(128) NOT NULL,
  `preco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`ID`, `nome`, `codigo`, `preco`) VALUES
(2, 'produto1', 796876, 666);

-- --------------------------------------------------------

--
-- Table structure for table `proprietaria`
--

CREATE TABLE `proprietaria` (
  `ID` int(128) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `telefone` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE `venda` (
  `ID` int(128) NOT NULL,
  `valor` float NOT NULL,
  `vendedora` text COLLATE utf8_bin NOT NULL,
  `data` date NOT NULL,
  `tipo` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `venda`
--

INSERT INTO `venda` (`ID`, `valor`, `vendedora`, `data`, `tipo`) VALUES
(1, 666, 'Marjorie', '2016-12-01', 'cheque'),
(2, 3414, 'Pedro', '2015-11-18', 'dinheiro'),
(3, 41234, 'das', '2016-11-15', 'asda'),
(4, 878797, 'bajsgdj', '2016-11-16', 'hdaksh'),
(5, 696927, 'das', '2016-11-19', 'cheque'),
(6, 712362000, 'das', '2016-11-01', 'dahs'),
(7, 21212, 'Maria', '2016-11-16', 'cheque');

-- --------------------------------------------------------

--
-- Table structure for table `vendedora`
--

CREATE TABLE `vendedora` (
  `ID` int(128) NOT NULL,
  `nome` text COLLATE utf8_bin NOT NULL,
  `telefone` text COLLATE utf8_bin NOT NULL,
  `email` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `vendedora`
--

INSERT INTO `vendedora` (`ID`, `nome`, `telefone`, `email`) VALUES
(2, 'Beatriz', '28317298', 'asda@asd.com'),
(3, 'Maria', '238716289', 'va@asda.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `proprietaria`
--
ALTER TABLE `proprietaria`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vendedora`
--
ALTER TABLE `vendedora`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `proprietaria`
--
ALTER TABLE `proprietaria`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vendedora`
--
ALTER TABLE `vendedora`
  MODIFY `ID` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
