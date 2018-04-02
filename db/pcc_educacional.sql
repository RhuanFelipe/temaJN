-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Abr-2018 às 16:12
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pcc_educacional`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

CREATE TABLE IF NOT EXISTS `bairro` (
  `id_bairro` int(11) NOT NULL AUTO_INCREMENT,
  `nome_bairro` varchar(150) NOT NULL,
  `cep_bairro` int(8) NOT NULL,
  PRIMARY KEY (`id_bairro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `desc_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado`
--

CREATE TABLE IF NOT EXISTS `chamado` (
  `id_chamado` int(11) NOT NULL,
  `protocolo_chamado` int(11) NOT NULL,
  `assunto_protocolo` int(11) NOT NULL,
  `data_abertura` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE IF NOT EXISTS `cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` varchar(100) NOT NULL,
  PRIMARY KEY (`id_cidade`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE IF NOT EXISTS `curso` (
  `id_curso` int(11) NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(100) NOT NULL,
  `tipo_curso_id` int(11) NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`, `tipo_curso_id`) VALUES
(1, 'ADMINISTRAÇÃO - BACHARELADO', 1),
(2, 'BIOMEDICINA - BACHARELADO', 1),
(3, 'ENGENHARIA DA COMPUTAÇÃO - BACHARELADO', 1),
(4, 'FARMÁCIA - BACHARELADO', 1),
(5, 'PEDAGOGIA - LICENCIATURA', 1),
(6, 'CIÊNCIA DA COMPUTAÇÃO - BACHARELADO', 1),
(7, 'SISTEMAS DE INFORMAÇÃO - BACHARELADO', 1),
(8, 'TURISMO - BACHARELADO', 1),
(9, 'JORNALISMO - BACHARELADO', 1),
(10, 'FILOSOFIA - LICENCIATURA', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `rua_endereco` varchar(200) NOT NULL,
  `numero_endereco` int(11) NOT NULL,
  `complemento_casa` varchar(50) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `bairro_id` int(11) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id_endereco`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pessoa` varchar(200) NOT NULL,
  `cpf_pessoa` varchar(11) NOT NULL,
  `rg_pessoa` varchar(30) NOT NULL,
  `sexo_pessoa` char(1) NOT NULL,
  `nasc_pessoa` date NOT NULL,
  `email_pessoa` varchar(100) DEFAULT NULL,
  `curso_id` int(11) NOT NULL,
  `turno_id` int(11) NOT NULL,
  `turma_id` int(11) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE IF NOT EXISTS `requerimento` (
  `id_requerimento` int(11) NOT NULL AUTO_INCREMENT,
  `desc_requerimento` varchar(150) NOT NULL,
  `tipo_requerimento_id` int(11) NOT NULL,
  PRIMARY KEY (`id_requerimento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `id_semestre` int(11) NOT NULL AUTO_INCREMENT,
  `desc_semestre` int(11) NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE IF NOT EXISTS `telefone` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero_telefone` varchar(13) NOT NULL,
  `tipo_telefone` char(1) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_curso`
--

CREATE TABLE IF NOT EXISTS `tipo_curso` (
  `id_tipo_curso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_curso` varchar(150) NOT NULL,
  PRIMARY KEY (`id_tipo_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tipo_curso`
--

INSERT INTO `tipo_curso` (`id_tipo_curso`, `tipo_curso`) VALUES
(1, 'GRADUAÇÃO PRESENCIAL'),
(2, 'DOUTORADO'),
(3, 'GRADUAÇÃO EAD'),
(4, 'MESTRADO'),
(5, 'NÍVEL TÉCNICO'),
(6, 'NÍVEL TÉCNICO - EAD'),
(7, 'NÍVEL TÉCNICO - PRONATEC'),
(8, 'PÓS GRADUAÇÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_requerimento`
--

CREATE TABLE IF NOT EXISTS `tipo_requerimento` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_requerimento` varchar(150) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tipo_requerimento`
--

INSERT INTO `tipo_requerimento` (`id_tipo`, `tipo_requerimento`) VALUES
(1, 'ACADÊMICO'),
(2, 'ESTRUTURA FISICA'),
(3, 'FINANCEIRO'),
(4, 'OUVIDORIA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_solicitacao`
--

CREATE TABLE IF NOT EXISTS `tipo_solicitacao` (
  `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_solicitacao` varchar(150) NOT NULL,
  PRIMARY KEY (`id_solicitacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tipo_solicitacao`
--

INSERT INTO `tipo_solicitacao` (`id_solicitacao`, `tipo_solicitacao`) VALUES
(1, 'RECLAMAÇÃO'),
(2, 'SOLICITAÇÃO'),
(3, 'SUGESTÃO'),
(4, 'ELOGIO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `sala_turma` varchar(50) NOT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_turno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE IF NOT EXISTS `unidade` (
  `id_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `desc_unidade` varchar(150) NOT NULL,
  PRIMARY KEY (`id_unidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id_unidade`, `desc_unidade`) VALUES
(1, 'UNINABUCO - RECIFE'),
(2, 'UNINASSAU - RECIFE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `matricula_usuario` int(11) NOT NULL,
  `senha_usuario` varchar(200) NOT NULL,
  `ativo_usuario` char(1) NOT NULL,
  `nivel_id` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula_usuario`, `senha_usuario`, `ativo_usuario`, `nivel_id`) VALUES
(1, 11032395, '123', '1', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;