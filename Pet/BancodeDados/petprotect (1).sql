-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Nov-2014 às 17:44
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `petprotect`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idAdm` int(11) NOT NULL AUTO_INCREMENT,
  `loginAdmin` varchar(30) NOT NULL,
  `senhaAdmin` varchar(30) NOT NULL,
  PRIMARY KEY (`idAdm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`idAdm`, `loginAdmin`, `senhaAdmin`) VALUES
(7, 'patricia', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `idAgenda` int(11) NOT NULL AUTO_INCREMENT,
  `horaEntrada` time NOT NULL,
  `horaSaida` time NOT NULL,
  `idPet` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`idAgenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pets`
--

CREATE TABLE IF NOT EXISTS `pets` (
  `idPet` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `NomePet` varchar(50) NOT NULL,
  `IdColeira` int(11) NOT NULL,
  `portePet` varchar(10) NOT NULL,
  `tipodepet` varchar(50) NOT NULL,
  PRIMARY KEY (`idPet`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `LoginUsuario` varchar(60) NOT NULL,
  `senhaUsuario` varchar(15) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `LoginUsuario`, `senhaUsuario`, `telefone`, `email`) VALUES
(35, 'patricia', '123', '51-81331412', 'patibborges@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
