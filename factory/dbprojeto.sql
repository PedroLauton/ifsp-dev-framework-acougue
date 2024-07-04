-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/07/2024 às 02:24
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
(4, 'Frutos do Mar');

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
(90, 'Peito de frango', 1, 34, 1, 1, '6685e27a4fa21.png'),
(93, 'Pé de frango', 1, 34, 1, 1, '6685d945e01ef.png'),
(94, 'Coração de frango', 1, 36, 1, 1, '6685d96900db1.png'),
(96, 'Contra filé', 1, 45, 2, 2, '6685d9f26035f.png'),
(98, 'Patinho', 1, 76, 2, 2, '6685da3763fad.png'),
(99, 'Maminha', 1, 23, 2, 2, '6685da55b60ff.png'),
(101, 'Linguiça', 1, 23, 3, 1, '6685da96f310c.png'),
(102, 'Lombo', 1, 45, 3, 1, '6685dab906d44.png'),
(104, 'Pernil', 1, 67, 3, 1, '6685daed9d35c.png'),
(105, 'Bisteca', 1, 55, 3, 1, '6685db0364e0e.png'),
(106, 'Caranguejo', 1, 87, 4, 2, '6685db2186d60.png'),
(108, 'Lula', 1, 999, 4, 2, '6685db531518e.png'),
(109, 'Tilápia', 1, 54, 4, 2, '6685db6de6fb1.png'),
(110, 'Ostras', 1, 78, 4, 2, '6685db8543875.png'),
(111, 'Picanha', 1, 999, 2, 2, '6685dc94bd254.png'),
(112, 'Coxa de frango', 1, 34, 1, 1, '6685eb9918f5b.png');

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
(1, 'Fogonoboi', '(11) 99999-9990', 'fogonoboi@gmail.com'),
(2, 'FazuelleCortes', '(11) 99999-9999', 'fazuellecortes@gmail.com');

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
  `Cargo` varchar(50) NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`Id`, `Nome`, `Telefone`, `Email`, `Senha`, `Cargo`, `Foto`) VALUES
(21, 'Pedro', '114534565', 'pedro@func.com', 'pedro123', '4', '6685dd19bf8db.jpeg'),
(22, 'Ana', '11678577546', 'ana@func.com', 'ana123', '3', '6685d6427d295.jpeg'),
(23, 'Paulo', '11678767865', 'paulo@func.com', 'paulo123', '2', '6685d66863c21.jpeg'),
(24, 'Maria', '11847587583', 'maria@func.com', 'maria123', '1', '6685d6855df0d.jpeg');

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
  MODIFY `ProdutoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `FornecedorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

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
