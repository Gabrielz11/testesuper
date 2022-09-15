-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Set-2022 às 23:25
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbsuper`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `ano_nascimento` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info`
--

INSERT INTO `info` (`id`, `cpf`, `genero`, `ano_nascimento`) VALUES
(1, '16798125050', 'M', 1976),
(2, '59875804045', 'M', 1960),
(3, '04707649025', 'F', 1988),
(4, '21142450040', 'M', 1954),
(5, '83257946074', 'F', 1970),
(6, '07583509025', 'M', 1972);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `usuario` varchar(50) DEFAULT NULL,
  `maior_50_anos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultado`
--

INSERT INTO `resultado` (`usuario`, `maior_50_anos`) VALUES
('Luke Skywalke - M', 'NÃO'),
('Bruce Wayne - M', 'SIM'),
('Diane Prince - F', 'NÃO'),
('Bruce Banner - M', 'SIM'),
('Harley Quinn - F', 'SIM'),
('Peter Parke - M', 'NÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) DEFAULT NULL,
  `cpf` varchar(255) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `cpf`, `nome`) VALUES
(3, '04707649025', 'Diane Prince'),
(6, '07583509025', 'Peter Parke'),
(1, '16798125050', 'Luke Skywalke'),
(4, '21142450040', 'Bruce Banner'),
(2, '59875804045', 'Bruce Wayne'),
(5, '83257946074', 'Harley Quinn');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
