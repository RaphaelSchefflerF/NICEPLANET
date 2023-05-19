-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Maio-2023 às 16:46
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtor`
--

DROP TABLE IF EXISTS `produtor`;
CREATE TABLE IF NOT EXISTS `produtor` (
  `idProdutor` int NOT NULL AUTO_INCREMENT,
  `nomeProdutor` varchar(100) NOT NULL,
  `cpfProdutor` varchar(15) NOT NULL,
  PRIMARY KEY (`idProdutor`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtor`
--

INSERT INTO `produtor` (`idProdutor`, `nomeProdutor`, `cpfProdutor`) VALUES
(1, 'Raphael Henrique Scheffler Ferreira', '078.484.061-05'),
(2, 'henrique', '345235324');

-- --------------------------------------------------------

--
-- Estrutura da tabela `propriedade`
--

DROP TABLE IF EXISTS `propriedade`;
CREATE TABLE IF NOT EXISTS `propriedade` (
  `idPropriedade` int NOT NULL AUTO_INCREMENT,
  `nomePropriedade` varchar(150) NOT NULL,
  `cadastroRural` int NOT NULL,
  PRIMARY KEY (`idPropriedade`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `propriedade`
--

INSERT INTO `propriedade` (`idPropriedade`, `nomePropriedade`, `cadastroRural`) VALUES
(1, 'My Farm', 1235);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `nomeUsuario` varchar(150) NOT NULL,
  `senha` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `email`, `nomeUsuario`, `senha`) VALUES
(1, 'teste@teste', 'teste', 'teste'),
(2, 'ra@gmail.com', 'teste', 'rafa'),
(3, 'henrique@123', 'henrique', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
