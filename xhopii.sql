-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/06/2024 às 04:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `xhopii`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(15) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(66) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `senha`) VALUES
('54760751866', 'Ian', 'Gabriel', '2006-05-03', '18999999999', 'euamoaescola@gmail.com', '1234'),
('54760751866', 'Ian', 'Gabriel', '2006-05-03', '18999999999', 'euamoaescola@gmail.com', '1234'),
('54760751866', 'Ian', 'Gabriel', '2006-05-03', '18999999999', 'euamoaescola@gmail.com', '1234'),
('1983849823', 'Mario', 'Luigi', '2000-01-31', '189999999999', 'nintendo@gmail.com', '1234'),
('1029384756', 'Gabriel', 'Camargo', '2006-04-06', '99999999998', 'camargocamargo@gmail.com', 'Camargo'),
('73850274839', 'Fabricio', 'Junior', '1999-09-11', '73850274839', 'fabinhojr@gmail.com', '123456'),
('5476075989', 'Iana', 'Barbosita', '2006-05-03', '18999999999', 'ianbielbia223@gmail.com', 'amobrasil');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `cpf` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sobrenome` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(66) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `salario` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`cpf`, `nome`, `sobrenome`, `dataNascimento`, `telefone`, `email`, `salario`) VALUES
('12345678900', 'João', 'Costa', '2000-10-31', '18999999999', 'joaojones@gmail.com', '5000'),
('54777777777', 'João', 'Costa', '2000-10-31', '18999999999', 'joaojones@gmail.com', '5000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `nome` varchar(50) NOT NULL,
  `fabricante` varchar(50) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `imagem` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`nome`, `fabricante`, `descricao`, `valor`, `quantidade`, `imagem`) VALUES
('gdfhj,mn.;', 'dzfxgvchbjnkm', 'dzxfcgvhbjnm3456', '43', '46', 0x70726f6475746f312e6a7067),
('Camargo', 'Camargos', 'Camargo!!!', '18', '35', 0x696d616765202831292e706e67),
('Camargo', 'Amarg', 'eryer', '46', '00', 0x70726f6475746f352e6a7067),
('Scott', 'Scotts', 'Robos', '18', '35', 0x73746f632e77656270);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
