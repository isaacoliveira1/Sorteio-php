-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Set-2015 às 22:34
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bingo_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartelas_bingo`
--

CREATE TABLE IF NOT EXISTS `cartelas_bingo` (
  `id_cartela` int(255) NOT NULL AUTO_INCREMENT,
  `id_sorteio` int(255) NOT NULL,
  `valores_cartela` varchar(255) NOT NULL,
  PRIMARY KEY (`id_cartela`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `numeros_sorteados`
--

CREATE TABLE IF NOT EXISTS `numeros_sorteados` (
  `id_numeros_sorteados` int(255) NOT NULL AUTO_INCREMENT,
  `numeros_sorteados` varchar(255) DEFAULT NULL,
  `id_sorteio` int(11) NOT NULL,
  PRIMARY KEY (`id_numeros_sorteados`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorteio`
--

CREATE TABLE IF NOT EXISTS `sorteio` (
  `id_sorteio` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_sorteio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
