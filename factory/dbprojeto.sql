-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13/06/2024 às 00:53
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
  `AdmId` int(11) NOT NULL,
  `Nome` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `administradores`
--

INSERT INTO `administradores` (`AdmId`, `Nome`, `Email`, `Senha`) VALUES
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
  `Lote` varchar(50) NOT NULL,
  `CategoriaId` int(11) NOT NULL,
  `FornecedorId` int(11) NOT NULL,
  `Quantidade` int(11) NOT NULL,
  `fotoProduto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`ProdutoId`, `NomeProduto`, `PorcaoUnidadeKg`, `PrecoUnitario`, `Lote`, `CategoriaId`, `FornecedorId`, `Quantidade`, `fotoProduto`) VALUES
(1, 'Peito de frango', 1, 52, 'e3r23r', 1, 2, 1000, 'corte1_aves.png'),
(2, 'Coxa de frango', 1, 7.29, 'e3rrer3', 1, 2, 1000, 'corte2_aves.png'),
(3, 'Pé de frango', 1, 7.99, 'e3rrer3', 1, 2, 1000, 'corte3_aves.png'),
(4, 'Coração de frango', 1, 37.9, 'e3r23r', 1, 2, 1000, 'corte4_aves.png'),
(5, 'Asas de frango', 1, 19.94, 'e3rrer3', 1, 2, 1000, 'corte5_aves.png'),
(6, 'Contra filé', 1, 32.99, 'e3r23r', 2, 3, 1000, 'corte1_bovinos.png'),
(7, 'Costela', 1, 34.19, 'e3rrer3', 2, 3, 1000, 'corte2_bovinos.png'),
(8, 'Patinho', 1, 40.99, 'e3rrer3', 2, 3, 1000, 'corte3_bovinos.png'),
(9, 'Maminha', 1, 33.99, 'e3rrer3', 2, 3, 1000, 'corte4_bovinos.png'),
(10, 'Picanha', 1, 58.5, 'e3rrer3', 2, 3, 1000, 'corte5_bovinos.png'),
(11, 'Linguiça', 1, 36.99, 'e3r23r', 3, 2, 1000, 'corte1_suinos.png'),
(12, 'Lombo', 1, 30, 'e3r23r', 3, 3, 1000, 'corte2_suinos.png'),
(13, 'Costelinha', 1, 16.79, 'e3r23r', 3, 2, 1000, 'corte3_suinos.png'),
(14, 'Pernil', 1, 27.89, 'e3r23r', 3, 2, 1000, 'corte4_suinos.png'),
(15, 'Bisteca', 1, 13.78, 'e3rrer3', 3, 2, 1000, 'corte5_suinos.png'),
(16, 'Caranguejo', 1, 86.9, 'e3r23r', 4, 3, 1000, 'corte1_frutos.png'),
(17, 'Camarão', 1, 84.9, 'e3rrer3', 4, 3, 1000, 'corte2_frutos.png'),
(18, 'Lula', 1, 89, 'e3rrer3', 4, 3, 1000, 'corte3_frutos.png'),
(19, 'Tilápia', 1, 59.98, 'e3r23r', 4, 3, 1000, 'corte4_frutos.png'),
(20, 'Ostras', 1, 60, 'e3rrer3', 4, 3, 1000, 'corte5_frutos.png'),
(21, 'Parmesão', 1, 81.67, 'e3r23r', 6, 1, 1000, 'corte1_queijos.png'),
(22, 'Mussarela', 1, 57.6, 'e3rrer3', 6, 1, 1000, 'corte2_queijos.png'),
(23, 'Cheddar', 1, 59.6, 'e3rrer3', 6, 1, 1000, 'corte3_queijos.png'),
(24, 'Gorgonzola', 1, 114.68, 'e3rrer3', 6, 1, 1000, 'corte4_queijos.png'),
(25, 'Provolone', 1, 98.56, 'e3r23r', 6, 1, 1000, 'corte5_queijos.png');

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
(3, 'Fogonoboi', '(11) 99999-9999', 'fogonoboi@gmail'),
(6, 'Lacta', '567546789', 'lacta@gmail.com');

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
  ADD PRIMARY KEY (`AdmId`),
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
  MODIFY `AdmId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ProdutoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
