-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Fev-2020 às 21:10
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `calculoimposto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

CREATE TABLE `imovel` (
  `id` int(11) NOT NULL,
  `proprietario_id` int(11) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `area_do_terreno` decimal(10,0) NOT NULL,
  `area_construida` decimal(10,0) NOT NULL,
  `area_total` decimal(10,0) NOT NULL,
  `aliquota` decimal(10,0) NOT NULL,
  `valor_venal_terreno` decimal(10,0) NOT NULL,
  `valor_venal_construcao` decimal(10,0) NOT NULL,
  `valor_venal_total` decimal(10,0) NOT NULL,
  `aliquota_aplicada` decimal(10,0) NOT NULL,
  `valor_do_imposto` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `proprietario_id`, `endereco`, `area_do_terreno`, `area_construida`, `area_total`, `aliquota`, `valor_venal_terreno`, `valor_venal_construcao`, `valor_venal_total`, `aliquota_aplicada`, `valor_do_imposto`) VALUES
(2, 1, 'RUA 2, 135', '166', '82', '0', '1', '50000', '105000', '0', '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietario`
--

CREATE TABLE `proprietario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `proprietario`
--

INSERT INTO `proprietario` (`id`, `nome`, `endereco`) VALUES
(1, 'Paulo Victor Rebouças Pereira UPDATE', 'Rua 02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `imovel`
--
ALTER TABLE `imovel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proprietario_id_fk` (`proprietario_id`);

--
-- Índices para tabela `proprietario`
--
ALTER TABLE `proprietario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imovel`
--
ALTER TABLE `imovel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `proprietario`
--
ALTER TABLE `proprietario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imovel`
--
ALTER TABLE `imovel`
  ADD CONSTRAINT `proprietario_id_fk` FOREIGN KEY (`proprietario_id`) REFERENCES `proprietario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
