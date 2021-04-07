-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Fev-2021 às 16:41
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecomoney`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

DROP TABLE IF EXISTS `conta`;
CREATE TABLE IF NOT EXISTS `conta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `primeiro_nome` varchar(40) NOT NULL,
  `ultimo_nome` varchar(40) NOT NULL,
  `nome_conta` varchar(40) NOT NULL,
  `preco_em_reais` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`id`, `id_usuario`, `primeiro_nome`, `ultimo_nome`, `nome_conta`, `preco_em_reais`) VALUES
(2, 12, 'Beatriz', 'Pereira', 'Conta de Ã¡gua', 150);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

DROP TABLE IF EXISTS `perfil`;
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL,
  `primeiro_nome` varchar(20) NOT NULL,
  `ultimo_nome` varchar(20) NOT NULL,
  `salario` float NOT NULL,
  `qnt_pessoa` int(11) NOT NULL,
  `renda_familiar` float NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `primeiro_nome`, `ultimo_nome`, `salario`, `qnt_pessoa`, `renda_familiar`, `foto`) VALUES
(8, 'Jhenifer', 'Pires', 1000, 2, 2000, ''),
(7, 'Jhenifer', 'Pires', 1000, 2, 2000, ''),
(12, 'Beatriz', 'Pereira', 1000, 2, 1500, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primeiro_nome` varchar(20) NOT NULL,
  `ultimo_nome` varchar(20) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `confirmacao_senha` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `primeiro_nome`, `ultimo_nome`, `uf`, `cidade`, `email`, `senha`, `confirmacao_senha`) VALUES
(12, 'Beatriz', 'Pereira', 'SP', 'Araraquara', 'teste@gmail.com', '1234', '1234'),
(4, 'Rafaelly', 'Camargo', 'SP', 'Araraquara', 'ecomoney.financa@gmail.com', '123', '123'),
(8, 'Jhenifer', 'Pires', 'MG', 'Araraquara', 'blabla@gmail.com', '123', '123'),
(7, 'Jhenifer', 'Pires', 'SP', 'Araraquara', 'jhenifer@gmail.com', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
