-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 01/09/2023 às 22:43
-- Versão do servidor: 8.0.30
-- Versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `rua` varchar(80) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(5) DEFAULT NULL,
  `cep` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(1, 'Karina', '000.000.000-34', 'karina@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'karilherme', '050.123.456-65', 'karilherme@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Xiaomi', '654.564.564-56', 'teste123@123.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'GUILHERME PICLER GERMANOs', '054.646.545-64', 'guibagermanos@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE `emails` (
  `id_emails` int NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `ativo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `emails`
--

INSERT INTO `emails` (`id_emails`, `nome`, `email`, `ativo`) VALUES
(1, 'GUILHERME PICLER GERMANO', 'guibagermano@gmail.com', 'Sim'),
(2, 'guilherme', 'guilhermepgermano@gmail.com', 'Sim'),
(3, 'tiago', 'tiagoperini06@gmail.com', 'Sim'),
(4, 'Karina', 'karina@live.com', 'Sim'),
(5, 'karilherme', 'karilherme@live.com', 'Sim'),
(6, 'Xiaomi', 'teste123@123.com', 'Sim'),
(7, 'GUILHERME PICLER GERMANOs', 'guibagermanos@gmail.com', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id_usuarios` int NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `senha_crip` varchar(150) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nome`, `cpf`, `email`, `senha`, `senha_crip`, `nivel`) VALUES
(2, 'Administradores', '000.000.000-00', 'guilhermepgermano@outlook.com', '123', '202cb962ac59075b964b07152d234b70', 'Admin'),
(4, 'teste', '000.000.000-20', 'teste@gmail.com', '154', '1d7f7abc18fcb43975065399b0d1e48e', 'Cliente'),
(5, 'Karina', '000.000.000-34', 'karina@live.com', '030997', '9a3cf41ddf23742a91e3cf37b02935a2', 'Cliente'),
(6, 'karilherme', '050.123.456-65', 'karilherme@live.com', '030997', '9a3cf41ddf23742a91e3cf37b02935a2', 'Cliente'),
(7, 'Xiaomi', '654.564.564-56', 'teste123@123.com', '654', 'ab233b682ec355648e7891e66c54191b', 'Cliente'),
(8, 'GUILHERME PICLER GERMANOs', '054.646.545-64', 'guibagermanos@gmail.com', '154', '1d7f7abc18fcb43975065399b0d1e48e', 'Cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_emails`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `emails`
--
ALTER TABLE `emails`
  MODIFY `id_emails` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
