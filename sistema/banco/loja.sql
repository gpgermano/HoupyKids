-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12/10/2023 às 18:46
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

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nome_url` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `itens` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `nome`, `nome_url`, `imagem`, `itens`) VALUES
(17, 'masculino Bermudas', 'masculino-bermudas', 'Captura de tela 2023-06-18 211911.png', NULL),
(18, 'feminino', 'feminino', 'Captura de tela 2023-06-18 211911.png', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `telefone` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `rua` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numero` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `complemento` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cidade` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `estado` varchar(5) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cep` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(1, 'Karina Werner', '112.564.563-25', 'karina@live.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'kakakak', '456.654.564-56', 'kakakaka@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'a', '654.654.654-65', 'a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'kevin', '564.564.564-56', 'kevin@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `emails`
--

CREATE TABLE `emails` (
  `id_email` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ativo` varchar(5) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `emails`
--

INSERT INTO `emails` (`id_email`, `nome`, `email`, `ativo`) VALUES
(1, 'GUILHERME PICLER GERMANO', 'guibagermano@gmail.com', 'Sim'),
(5, 'kevin', 'kevin@gmail.com', 'Sim'),
(6, 'asasd', 'asdasd@gmail.com', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sub_categorias`
--

CREATE TABLE `sub_categorias` (
  `id_subCategoria` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `nome_url` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `imagem` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `itens` int NOT NULL,
  `id_categoria` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sub_categorias`
--

INSERT INTO `sub_categorias` (`id_subCategoria`, `nome`, `nome_url`, `imagem`, `itens`, `id_categoria`) VALUES
(1, 'teste', 'tenis', 'sem-foto.jpg', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `senha_crip` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `nivel` varchar(20) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `cpf`, `email`, `senha`, `senha_crip`, `nivel`) VALUES
(2, 'Admina', '000.000.000-50', 'guilhermepgermano@outlook.com', '123', '202cb962ac59075b964b07152d234b70', 'Admin'),
(6, 'kevin', '564.564.564-56', 'kevin@gmail.com', '123', '202cb962ac59075b964b07152d234b70', 'Cliente');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id_email`);

--
-- Índices de tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`id_subCategoria`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `emails`
--
ALTER TABLE `emails`
  MODIFY `id_email` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `id_subCategoria` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
