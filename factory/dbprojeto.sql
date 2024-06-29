-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/06/2024 às 01:30
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbprojeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `administradores`
--

CREATE TABLE `administradores` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administradores`
--

INSERT INTO `administradores` (`Id`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Joel', 'joel@adm.com', 'joel123'),
(2, 'Antonio', 'antonio@adm.com', 'antonio123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaId` int(11) NOT NULL,
  `NomeCategoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaId`, `NomeCategoria`) VALUES
(1, 'Aves'),
(2, 'Carne Bovina'),
(3, 'Carne Suína'),
(4, 'Frutos do Mar'),
(6, 'Queijos');

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `ProdutoId` int(11) NOT NULL,
  `NomeProduto` varchar(120) NOT NULL,
  `PorcaoUnidadeKg` float NOT NULL,
  `PrecoUnitario` float NOT NULL,
  `CategoriaId` int(11) NOT NULL,
  `FornecedorId` int(11) NOT NULL,
  `fotoProduto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`ProdutoId`, `NomeProduto`, `PorcaoUnidadeKg`, `PrecoUnitario`, `CategoriaId`, `FornecedorId`, `fotoProduto`) VALUES
(42, 'Batata', 1, 1, 1, 1, '_0ee1a2ed-38d5-4264-8e59-105c155eae90.jpeg'),
(43, 'Feijão', 1, 1, 1, 1, '_0ee1a2ed-38d5-4264-8e59-105c155eae90.jpeg'),
(44, 'Maconha', 1, 1, 1, 1, '_0ee1a2ed-38d5-4264-8e59-105c155eae90.jpeg'),
(45, 'Picanha', 1, 1, 1, 1, '_0ee1a2ed-38d5-4264-8e59-105c155eae90.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `FornecedorId` int(11) NOT NULL,
  `NomeFornecedor` varchar(50) NOT NULL,
  `Telefone` varchar(20) NOT NULL,
  `EmailFornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `fornecedores`
--

INSERT INTO `fornecedores` (`FornecedorId`, `NomeFornecedor`, `Telefone`, `EmailFornecedor`) VALUES
(1, 'LeiteAutêntico', '(11) 99999-9990', 'autenticoleite@gmail.com'),
(2, 'FazuelleCortes', '(11) 99999-9999', 'fazuellecortes@gmail.com'),
(3, 'Fogonoboi', '(11) 99999-9999', 'fogonoboi@gmail');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Telefone` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Senha` char(64) NOT NULL,
  `Cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Id`, `Nome`, `Telefone`, `Email`, `Senha`, `Cargo`) VALUES
(3, 'Alan', '(11) 67546764', 'alan@fun.com', 'alan123', 'Auxiliar'),
(4, 'Vinicius', '(11) 758467593', 'vini@fun.com', 'vini123', 'Auxiliar'),
(5, 'Caio', '(11) 83950483', 'caio@fun.com', 'caio123', 'Gerente'),
(6, 'Pedro Lauton', '(11)  748395849', 'lauton@fun.com', 'lauton123', 'Chefe'),
(7, 'Sérgio', '(11) 5784839274', 'sergio@fun.com', 'sergio123', 'CEO');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaId`);

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`ProdutoId`),
  ADD KEY `CategoriaId` (`CategoriaId`),
  ADD KEY `FornecedorId` (`FornecedorId`);

--
-- Índices de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`FornecedorId`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ProdutoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `FornecedorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `estoque_ibfk_1` FOREIGN KEY (`CategoriaId`) REFERENCES `categorias` (`CategoriaId`),
  ADD CONSTRAINT `estoque_ibfk_2` FOREIGN KEY (`FornecedorId`) REFERENCES `fornecedores` (`FornecedorId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
