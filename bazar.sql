-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Fev-2017 às 19:56
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bazar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE IF NOT EXISTS `caixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_abertura` datetime NOT NULL,
  `valor_abertura` decimal(10,2) DEFAULT NULL,
  `data_fechamento` datetime NOT NULL,
  `valor_fechamento` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `data_abertura`, `valor_abertura`, `data_fechamento`, `valor_fechamento`) VALUES
(1, '2017-02-20 14:12:05', '45.00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Blusa'),
(2, 'Vestido'),
(3, 'Croped'),
(4, 'Body'),
(5, 'short'),
(6, 'conjunto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `telefone` int(11) NOT NULL,
  `instagram` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `telefone`, `instagram`) VALUES
(1, 'Padrão', 2147483647, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `foto` varchar(40) NOT NULL,
  `sexo` int(11) NOT NULL,
  `data` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id`, `nome`, `sobrenome`, `foto`, `sexo`, `data`) VALUES
(1, 'Diego', 'Serra', 'diego.jpg', 0, '2017-01-25 20:27:18'),
(2, 'Aline', 'Bastos', 'aline.jpg', 1, '2017-01-25 20:29:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `int` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `novo` tinyint(1) NOT NULL DEFAULT '0',
  `vendido` double NOT NULL,
  `preco_custo` decimal(10,2) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`int`),
  KEY `id_user` (`id_user`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`int`, `nome`, `descricao`, `preco`, `data`, `id_user`, `foto`, `novo`, `vendido`, `preco_custo`, `id_categoria`) VALUES
(12, 'Blusa Cinza', 'Blusa Cinza Manga longa', '10.00', '2017-02-14 18:46:30', 1, '554bca0921e9255c6a64347776892cf4.jpg', 0, 1, '5.00', 1),
(14, 'Croped', 'Croped rosa ', '10.00', '2017-02-15 13:43:19', 1, '338c4b14bf17b5843cb54a58bbe5f085.jpg', 1, 1, '5.00', 3),
(15, 'Blusa Manga', 'Manga longa Cinza', '5.00', '2017-02-15 14:58:59', 1, '8253d967ce30ef6fb95267ff19076b2b.jpg', 0, 1, '2.00', 1),
(16, 'Short', 'Short saia jeans. ', '15.00', '2017-02-17 18:06:35', 1, 'd0a9f7a0f76f0a81c8bd312c9964318b.jpg', 1, 1, '1.00', 5),
(17, 'Conj. Em bengaline ', 'Conj. Em bengaline Rosa', '30.00', '2017-02-17 19:26:45', 1, '854599e91c53988114d716f320fd7484.jpg', 1, 1, '10.00', 6),
(18, 'Conj. Em bengaline ', 'Conj. Em bengaline Rosa', '30.00', '2017-02-17 19:26:51', 1, '8537c6bb71b769f9064a89719fe1ddbe.jpg', 0, 1, '10.00', 6),
(19, 'Moto x', 'Moto x usado', '180.00', '2017-02-20 12:48:08', 1, 'b01ec09122a41ba954eb90673ec5b547.jpg', 0, 1, '3.00', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `id_facebook` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `role`, `id_facebook`) VALUES
(1, 'dieos', 'iIHwcNBWH6ncLRHxskkXXndLf2L_aT9L', '$2y$13$.YYlkkwSuVHRhTzELX4g..E0de/TQQdc4suA0M8wuVddvoP6ikqne', NULL, 'dieos2@gmail.com', 10, 1424098148, 1424098148, 30, 0),
(2, 'dieos2', 'iIHwcNBWH6ncLRHxskkXXndLf2L_aT9L', '$2y$13$.YYlkkwSuVHRhTzELX4g..E0de/TQQdc4suA0M8wuVddvoP6ikqne', NULL, 'dieos2@gmail.com', 10, 1424098148, 1424098148, 10, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` decimal(10,2) NOT NULL,
  `data` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_caixa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_caixa` (`id_caixa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `valor`, `data`, `id_cliente`, `id_caixa`) VALUES
(1, '15.00', '2017-02-20 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

CREATE TABLE IF NOT EXISTS `venda_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `id_venda` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produto` (`id_produto`,`id_venda`),
  KEY `id_venda` (`id_venda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `perfil`
--
ALTER TABLE `perfil`
  ADD CONSTRAINT `perfil_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`id_caixa`) REFERENCES `caixa` (`id`);

--
-- Limitadores para a tabela `venda_produto`
--
ALTER TABLE `venda_produto`
  ADD CONSTRAINT `venda_produto_ibfk_2` FOREIGN KEY (`id_venda`) REFERENCES `venda` (`id`),
  ADD CONSTRAINT `venda_produto_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`int`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
