-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02-Jun-2022 às 13:50
-- Versão do servidor: 10.3.32-MariaDB-log-cll-lve
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ticombr_teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_contratos`
--

CREATE TABLE `tab_contratos` (
  `id` int(11) NOT NULL,
  `id_locatario` int(11) NOT NULL,
  `id_locador` int(11) NOT NULL,
  `id_imovel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_imoveis`
--

CREATE TABLE `tab_imoveis` (
  `id` int(11) NOT NULL,
  `id_prorietario` int(11) NOT NULL,
  `endereco` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_locadores`
--

CREATE TABLE `tab_locadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `repasse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_locadores`
--

INSERT INTO `tab_locadores` (`id`, `nome`, `email`, `telefone`, `repasse`) VALUES
(1, 'LUIZ F P CARVALHO', 'asd', '2125044720', 0),
(2, 'asas', 'asas', 'asas', 0),
(3, 'asdasdasd', 'asdasda', 'sdasdasd', 0),
(4, 'asdasdas', 'dasd', 'sadasdas', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_locatarios`
--

CREATE TABLE `tab_locatarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tab_locatarios`
--

INSERT INTO `tab_locatarios` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'asdasd', 'asd', 'asd'),
(5, 'asd', 'asds', 'sad'),
(10, 'LUIZ F P CARVALHO', 'maktublol01@gmail.com', '2125044720'),
(11, 'asdasdas', 'dasdasdasd', 'asdasdasd');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tab_contratos`
--
ALTER TABLE `tab_contratos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tab_imoveis`
--
ALTER TABLE `tab_imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tab_locadores`
--
ALTER TABLE `tab_locadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `tab_locatarios`
--
ALTER TABLE `tab_locatarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tab_contratos`
--
ALTER TABLE `tab_contratos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_imoveis`
--
ALTER TABLE `tab_imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tab_locadores`
--
ALTER TABLE `tab_locadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tab_locatarios`
--
ALTER TABLE `tab_locatarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
