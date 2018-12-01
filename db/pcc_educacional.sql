-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2018 às 14:46
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
  `id_chamado` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo_chamado` int(11) DEFAULT NULL,
  `assunto_chamado` text NOT NULL,
  `data_abertura` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `tipo_curso_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `unidade_id` int(11) NOT NULL,
  `tipo_requerimento_id` int(11) NOT NULL,
  `grupo_requerimento_id` int(11) NOT NULL,
  `requerimento_id` int(11) NOT NULL,
  `status` char(1) DEFAULT '9',
  `pessoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id_chamado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Extraindo dados da tabela `chamado`
--

INSERT INTO `chamado` (`id_chamado`, `protocolo_chamado`, `assunto_chamado`, `data_abertura`, `categoria_id`, `usuario_id`, `tipo_curso_id`, `curso_id`, `unidade_id`, `tipo_requerimento_id`, `grupo_requerimento_id`, `requerimento_id`, `status`, `pessoa_id`) VALUES
(4, NULL, 'DIPLOMA RASURADO', '2018-11-17 11:37:01', NULL, 9, 1, 1, 1, 1, 1, 2, '1', 29),
(5, NULL, 'EMISAO DA DECLARAÃ‡ÃƒO', '2018-11-17 12:58:24', NULL, 9, 1, 1, 1, 2, 6, 19, '0', 31),
(6, NULL, 'BOLETO PAGO EM ABERTO.', '2018-11-17 13:02:28', NULL, 9, 1, 1, 1, 1, 3, 9, '1', 32),
(7, NULL, 'REVISÃƒO DE NOTA', '2018-11-17 13:03:45', NULL, 9, 1, 1, 1, 2, 7, 24, '1', 33),
(8, NULL, 'PERDEU A CARTÃƒO DE ACESSO', '2018-11-17 13:05:42', NULL, 9, 1, 1, 1, 2, 6, 23, '1', 34),
(9, NULL, 'SEM VAGA.', '2018-11-17 13:10:26', NULL, 10, 1, 2, 1, 1, 4, 14, '1', 35),
(10, NULL, 'BOLETO DO MÃŠS ATUAL, SEM DESCONTO', '2018-11-17 13:13:42', NULL, 10, 1, 2, 1, 1, 3, 11, '1', 36),
(11, NULL, 'SEM COMUNICAÃ‡ÃƒO COM O COORDENADOR', '2018-11-17 13:15:10', NULL, 10, 1, 2, 1, 1, 1, 1, '1', 37),
(12, NULL, 'ANTERCIPAR O TCC', '2018-11-17 13:18:21', NULL, 10, 1, 2, 1, 2, 7, 26, '0', 38),
(13, NULL, 'ACESSO NÃƒO PERMITIDO', '2018-11-17 13:20:01', NULL, 10, 1, 2, 2, 1, 2, 7, '0', 39),
(14, NULL, 'APRESENTAR CERTIFICADO', '2018-11-17 13:31:06', NULL, 9, 1, 2, 1, 1, 5, 17, '9', 40),
(15, NULL, 'DAR ENTRADA NO DIPLOMA', '2018-11-17 13:36:55', NULL, 9, 1, 2, 1, 1, 1, 2, '9', 41),
(16, NULL, 'ACESSIBILIDADE A SALA', '2018-11-17 13:47:44', NULL, 9, 1, 2, 1, 1, 4, 13, '9', 42),
(17, NULL, '10 DIAS QUE A NOTA NÃƒO FOI LANÃ‡ADA', '2018-11-17 13:50:58', NULL, 9, 1, 1, 1, 1, 1, 4, '9', 43),
(18, NULL, 'ENTREGA', '2018-11-17 13:55:43', NULL, 9, 1, 1, 1, 2, 8, 30, '9', 44),
(19, NULL, 'ENTRADA EM HORA', '2018-11-17 14:03:34', NULL, 11, 1, 7, 1, 1, 1, 3, '1', 32),
(20, NULL, 'DENUNCIA', '2018-11-17 14:04:23', NULL, 11, 1, 1, 1, 1, 2, 8, '0', 37),
(21, NULL, 'LIMPEZA', '2018-11-17 14:05:14', NULL, 11, 1, 1, 1, 1, 4, 15, '9', 34),
(22, NULL, 'MUDANÃ‡A', '2018-11-17 14:05:56', NULL, 11, 1, 7, 1, 2, 7, 25, '1', 44),
(23, NULL, 'NÃƒO RESOLVIDA', '2018-11-17 14:06:59', NULL, 11, 1, 2, 1, 2, 8, 29, '1', 33),
(24, NULL, 'SOLICITAÃ‡ÃƒO', '2018-11-17 14:07:34', NULL, 11, 1, 2, 1, 2, 6, 21, '1', 37),
(25, NULL, 'CONCLUSÃƒO', '2018-11-17 14:08:10', NULL, 11, 1, 1, 1, 2, 6, 20, '9', 31),
(26, NULL, 'MUDAR DE CURSO', '2018-11-17 14:09:05', NULL, 11, 1, 1, 1, 2, 7, 25, '1', 36),
(27, NULL, '3 ANOS DE ESPERA', '2018-11-17 14:10:48', NULL, 11, 1, 2, 1, 1, 1, 2, '1', 35),
(28, NULL, 'DAR ENTRADA', '2018-11-17 14:13:15', NULL, 11, 2, 11, 1, 2, 7, 27, '1', 45),
(29, NULL, 'SOLICITAR', '2018-11-17 14:24:20', NULL, 11, 2, 11, 1, 2, 6, 19, '1', 46),
(30, NULL, 'MAIS DE 2 SEMANAS E NAO FOI LANÃ‡ADA A NOTA', '2018-11-17 14:25:03', NULL, 11, 1, 1, 1, 1, 1, 4, '9', 32),
(31, NULL, 'LIMPEZA', '2018-11-17 14:26:10', NULL, 11, 1, 1, 1, 1, 4, 15, '1', 43),
(32, NULL, 'ACORDO', '2018-11-17 14:27:31', NULL, 11, 1, 1, 1, 2, 8, 31, '1', 47),
(33, NULL, 'AGUARDO', '2018-11-17 14:28:05', NULL, 11, 1, 2, 2, 1, 1, 2, '0', 36),
(34, NULL, 'EMISSAO', '2018-11-17 14:28:47', NULL, 11, 1, 2, 1, 2, 6, 21, '1', 38),
(35, NULL, 'SOLICITAÃ‡ÃƒO ATRASADA', '2018-11-17 14:31:14', NULL, 11, 1, 1, 1, 1, 1, 2, '1', 48),
(36, NULL, 'SOLICITAÃ‡ÃƒO', '2018-11-17 14:32:45', NULL, 11, 1, 1, 1, 2, 6, 19, '0', 49),
(37, NULL, 'ACESSO', '2018-11-17 14:33:42', NULL, 11, 1, 1, 1, 1, 1, 1, '1', 38),
(38, NULL, 'ENTREGA ATRASADA', '2018-11-17 14:34:17', NULL, 11, 1, 2, 1, 1, 1, 2, '1', 39),
(39, NULL, 'ATRASO', '2018-11-17 14:34:57', NULL, 11, 1, 2, 1, 1, 3, 9, '1', 29),
(40, NULL, 'DIFICULDADE', '2018-11-17 14:36:19', NULL, 11, 1, 1, 1, 1, 1, 1, '1', 50),
(41, NULL, 'SOLICITAÃ‡ÃƒO', '2018-11-17 14:37:03', NULL, 11, 1, 1, 1, 2, 6, 23, '1', 31),
(42, NULL, 'SOLICITO', '2018-11-17 14:38:33', NULL, 11, 1, 2, 1, 2, 6, 19, '0', 48),
(43, NULL, 'KKK', '2018-11-17 14:40:21', NULL, 11, 1, 1, 1, 3, 9, 33, '0', 43),
(44, NULL, 'EMISSÃƒO', '2018-11-17 14:41:08', NULL, 11, 1, 2, 1, 2, 8, 30, '1', 45),
(45, NULL, 'SOLICITAÃ‡ÃƒO', '2018-11-17 14:41:49', NULL, 11, 1, 1, 1, 2, 6, 19, '1', 47),
(46, NULL, 'TERMINO DE CORSO', '2018-11-17 14:43:47', NULL, 11, 1, 2, 1, 2, 6, 20, '1', 51),
(47, NULL, 'ATRASO', '2018-11-17 14:44:21', NULL, 11, 1, 1, 1, 1, 1, 2, '1', 34),
(48, NULL, 'REVISÃƒO', '2018-11-17 14:45:02', NULL, 11, 1, 1, 1, 2, 7, 24, '0', 46),
(49, NULL, 'SEM DESCONTO', '2018-11-17 14:45:52', NULL, 11, 1, 2, 1, 1, 3, 9, '1', 41),
(50, NULL, 'ENTREGA', '2018-11-17 14:46:29', NULL, 11, 1, 1, 1, 2, 6, 21, '1', 49),
(51, NULL, 'OCUPADO', '2018-11-17 14:47:16', NULL, 11, 1, 1, 1, 1, 4, 14, '1', 42),
(52, NULL, 'SOLICITAÃ§Ã£O', '2018-11-17 14:48:05', NULL, 11, 1, 1, 1, 2, 7, 27, '0', 35),
(53, NULL, 'ENTREGA', '2018-11-17 14:48:49', NULL, 11, 1, 1, 1, 2, 6, 19, '1', 36),
(54, NULL, 'TESTE', '2018-11-27 00:14:38', NULL, 9, 1, 1, 1, 1, 1, 1, '1', 36),
(55, NULL, 'TESTE', '2018-11-27 00:15:04', NULL, 9, 1, 7, 1, 1, 2, 6, '0', 45),
(56, NULL, 'CHAMADO ABERTO', '2018-12-01 08:10:40', NULL, 9, 1, 1, 1, 1, 1, 1, '0', 32),
(57, NULL, 'FOI ABERTO O CHAMADO', '2018-12-01 10:38:01', NULL, 9, 1, 7, 1, 1, 1, 1, '9', 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado_resposta`
--

CREATE TABLE IF NOT EXISTS `chamado_resposta` (
  `id_chamado` int(11) NOT NULL,
  `data_fechamento` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `assunto_chamado` text NOT NULL,
  `motivo_id` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_chamado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chamado_resposta`
--

INSERT INTO `chamado_resposta` (`id_chamado`, `data_fechamento`, `status`, `id_usuario`, `assunto_chamado`, `motivo_id`) VALUES
(4, '2018-11-17 14:57:36', 1, 19, 'DIPLOMA NÃƒO ESTA PRONTO', NULL),
(5, '2018-11-17 14:57:17', 0, 19, 'ALUNO NÃƒO ESPEROU SER ATENDIDO', '1'),
(6, '2018-11-17 14:56:55', 1, 19, 'BOLETO ATUALIZADO', NULL),
(7, '2018-11-17 14:56:43', 1, 19, 'REVISÃƒO SOLICITADA', NULL),
(8, '2018-11-17 14:56:30', 1, 19, 'CARTÃƒO SOLICITADO', NULL),
(9, '2018-11-17 15:04:27', 1, 21, 'RESOLVIDO.', NULL),
(10, '2018-11-17 15:04:17', 1, 21, 'RESOLVIDO COM O FINANCEIRO', NULL),
(11, '2018-11-17 15:03:59', 1, 21, 'FALTA DE COMUNICAÃ‡ÃƒO', NULL),
(12, '2018-11-17 15:03:41', 0, 21, 'POR PROBLEMAS PESSOAIS, NÃƒO PUDE ATENDER', '1'),
(13, '2018-11-17 15:03:07', 0, 21, 'ALUNO NÃƒO ESPEROU SER ATENDIDO', '1'),
(19, '2018-11-17 14:58:54', 1, 20, 'ENTREGUE.', NULL),
(20, '2018-11-17 14:56:09', 0, 19, 'ALUNO DESISTIU', '2'),
(22, '2018-11-17 14:58:35', 1, 20, 'MUJDANÃ‡A DE CURSO OK.', NULL),
(23, '2018-11-17 15:02:31', 1, 21, 'RESOLVIDO', NULL),
(24, '2018-11-17 15:02:06', 1, 21, 'ENTREGUE', NULL),
(26, '2018-11-17 14:55:43', 1, 19, 'MUDANÃ‡A DE CURSO OK.', NULL),
(27, '2018-11-17 15:01:58', 1, 21, 'ENTREGUE', NULL),
(28, '2018-11-17 15:05:29', 1, 28, 'ANTECIPADA', NULL),
(29, '2018-11-17 15:05:17', 1, 28, 'ENTREGUE', NULL),
(31, '2018-11-17 14:55:22', 1, 19, 'INFORMAÃ‡ÃƒO PASSADA AO RESPONSAVEL', NULL),
(32, '2018-11-17 14:54:59', 1, 19, 'RESOLVIDO.', NULL),
(33, '2018-11-17 15:01:50', 0, 21, 'ALUNO RETORNA OUTRO DIA', '2'),
(34, '2018-11-17 15:01:30', 1, 21, 'ENTREGUE', NULL),
(35, '2018-11-17 14:54:48', 1, 19, 'DIPLOMA ENTREGUE', NULL),
(36, '2018-11-17 14:54:38', 0, 19, 'ALUNO NÃƒO ESPEROU SER ATENDIDO', '2'),
(37, '2018-11-17 14:54:11', 1, 19, 'RESOLVIDO', NULL),
(38, '2018-11-17 15:01:09', 1, 21, 'DIPLOMA NÃƒO ESTÃ PRONTO', NULL),
(39, '2018-11-17 15:00:45', 1, 21, 'BOLETO ATUALIZADO', NULL),
(40, '2018-11-17 14:54:00', 1, 19, 'MAL COMUNICAÃ‡ÃƒO, RESOLVIDO', NULL),
(41, '2018-11-17 14:53:37', 1, 19, 'CARTÃƒO SOLICITADO', NULL),
(42, '2018-11-17 15:00:32', 0, 21, 'ALUNO NÃƒO PODE ESPERAR SER ATENDIDO', '1'),
(43, '2018-11-17 14:53:24', 0, 19, 'ALUNO DESISTIU', '1'),
(44, '2018-11-17 15:00:09', 1, 21, 'ENTREGUE', NULL),
(45, '2018-11-17 14:53:05', 1, 19, 'DECLARAÃ‡ÃƒO ENTREGUE', NULL),
(46, '2018-11-17 14:59:59', 1, 21, 'DECLARAÃ‡ÃƒO ENTREGUE', NULL),
(47, '2018-11-17 14:52:50', 1, 19, 'DIPLONA NÃƒO ESTÃ PRONTO.', NULL),
(48, '2018-11-17 14:52:22', 0, 19, 'PRAZO ESGOTADO', '2'),
(49, '2018-11-17 14:59:47', 1, 21, 'BOLETO ATUALIZADO', NULL),
(50, '2018-11-17 14:51:51', 1, 19, 'DECLARAÃ‡ÃƒO ENTREGUE', NULL),
(51, '2018-11-17 14:51:21', 1, 19, 'RESOLVIDO', NULL),
(52, '2018-11-17 14:51:07', 0, 19, 'ANTECIPAÃ‡ÃƒO NÃƒO Ã‰ POSSIVEL.', '1'),
(53, '2018-11-17 14:50:35', 1, 19, 'RESOLVIDO, ENTREGE.', NULL),
(54, '2018-11-27 00:15:31', 1, 19, 'TESTE', NULL),
(55, '2018-11-27 00:15:50', 0, 20, 'TESTE', '1'),
(56, '2018-12-01 08:11:06', 0, 19, 'CANCELADO', '1');

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
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `nome_curso`, `tipo_curso_id`, `ativo`) VALUES
(1, 'ADMINISTRAÃ‡ÃƒO - BACHARELADO', 1, '1'),
(2, 'BIOMEDICINA - BACHARELADO', 1, '1'),
(3, 'ENGENHARIA DA COMPUTAÃ‡ÃƒO - BACHARELADO', 1, '1'),
(4, 'FARMÃCIA - BACHARELADO', 1, '1'),
(5, 'PEDAGOGIA - LICENCIATURA', 1, '1'),
(6, 'CIÃŠNCIA DA COMPUTAÃ‡ÃƒO - BACHARELADO', 1, '1'),
(7, 'SISTEMAS DE INFORMAÃ‡ÃƒO - BACHARELADO', 1, '1'),
(8, 'TURISMO - BACHARELADO', 1, '1'),
(9, 'JORNALISMO - BACHARELADO', 1, '1'),
(10, 'FILOSOFIA - LICENCIATURA', 1, '1'),
(11, 'CONSTRUÃ‡ÃƒO CIVIL', 2, '1');

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
-- Estrutura da tabela `grupo_requerimento`
--

CREATE TABLE IF NOT EXISTS `grupo_requerimento` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `desc_grupo` varchar(150) NOT NULL,
  `tipo_requerimento_id` int(11) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `grupo_requerimento`
--

INSERT INTO `grupo_requerimento` (`id_grupo`, `desc_grupo`, `tipo_requerimento_id`, `ativo`) VALUES
(1, 'ACADÃŠMICO', 1, '1'),
(2, 'BIBLIOTECA', 1, '1'),
(3, 'FINANCEIRO', 1, '1'),
(4, 'ESTRUTURA FÃSICA', 1, '1'),
(5, 'EVENTOS / CONGRESSOS', 1, '1'),
(6, 'EMISSÃƒO DE DOCUMENTOS', 2, '1'),
(7, 'SOLICITAÃ‡ÃƒO ACADÃŠMICA', 2, '1'),
(8, 'SOLICITAÃ‡ÃƒO FINACEIRA', 2, '1'),
(9, 'PARENTESCO', 3, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motivo`
--

CREATE TABLE IF NOT EXISTS `motivo` (
  `id_motivo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_motivo` varchar(150) NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_motivo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `motivo`
--

INSERT INTO `motivo` (`id_motivo`, `nome_motivo`, `ativo`) VALUES
(1, 'NÃƒO INFORMADO', 1),
(2, 'MOTIVOS PESSOAIS', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE IF NOT EXISTS `nivel` (
  `id_nivel` int(11) NOT NULL AUTO_INCREMENT,
  `nome_nivel` varchar(100) NOT NULL,
  PRIMARY KEY (`id_nivel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`id_nivel`, `nome_nivel`) VALUES
(1, 'coordenador'),
(2, 'atendente'),
(3, 'aluno'),
(4, 'admin');

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
  `email_pessoa` varchar(100) DEFAULT 'teste@hotmail.com',
  `curso_id` int(11) NOT NULL DEFAULT '0',
  `turno_id` int(11) NOT NULL DEFAULT '0',
  `turma_id` int(11) NOT NULL DEFAULT '0',
  `periodo` char(1) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome_pessoa`, `cpf_pessoa`, `rg_pessoa`, `sexo_pessoa`, `email_pessoa`, `curso_id`, `turno_id`, `turma_id`, `periodo`, `ativo`) VALUES
(8, 'ADMIN', '', '', '', 'admin@hotmail.com', 0, 0, 0, '', '1'),
(9, 'MARIA ALICE', '', '', 'F', 'MARIA@GMAIL.COM', 0, 0, 0, '', '1'),
(10, 'CIBELE SILVA', '', '', 'F', 'CIB@GMAIL.COM', 0, 0, 0, '', '1'),
(11, 'CARMEN SILVA', '', '', 'F', 'CARMEN@GMAIL.COM', 0, 0, 0, '', '1'),
(12, 'ANDREZA OLIVEIRA', '', '', 'F', 'ANDR2@GMAIL.COM', 0, 0, 0, '', '1'),
(13, 'MATEUS SILVA', '', '', 'M', 'MA@GMAIL.COM', 0, 0, 0, '', '1'),
(14, 'CARLOS ANTONIO', '', '', 'M', 'CARLOS@HOTMAIL.COM', 0, 0, 0, '', '1'),
(15, 'MANUELA MARTINS', '', '', 'M', 'MANU@GMAIL.COM', 0, 0, 0, '', '1'),
(16, 'CINTIA SILVA', '', '', 'F', 'CIN@GMAIL.COM', 0, 0, 0, '', '1'),
(17, 'ANDERSON ANTONIO', '', '', 'M', 'AND@GMAIL.COM', 0, 0, 0, '', '1'),
(18, 'JOSE CARLOS', '', '', 'M', 'JOSE@HOTMAIL.COM', 0, 0, 0, '', '1'),
(19, 'JOSE MARIO', '', '', 'M', 'ZE@GMAIL.COM,', 1, 0, 0, '', '1'),
(20, 'ARLINDO CORREIA', '', '', 'M', 'ARLIN@GMAIL.COM', 7, 0, 0, '', '1'),
(21, 'SOLANO ALVES', '', '', 'M', 'SOL@GMAIL.COM', 2, 0, 0, '', '1'),
(22, 'ANDRE SILVA', '', '', 'M', 'ANDRE@GMAIL.COM', 4, 0, 0, '', '1'),
(23, 'ANDREA ANDRADE', '', '', 'F', 'ANDRADE@GMAIL.COM', 5, 0, 0, '', '1'),
(24, 'VITOR GABRIEL', '', '', 'M', 'VIC@GMAIL.COM', 6, 0, 0, '', '1'),
(25, 'TALES GAEL', '', '', 'M', 'TALES@GMAIL.COM', 8, 0, 0, '', '1'),
(26, 'TALES GABRIEL', '', '', 'M', 'GABRI@GMAIL.COM', 9, 0, 0, '', '1'),
(27, 'TALES DOMINIC', '', '', 'M', 'FILOSOFIA@GMAIL.COM', 10, 0, 0, '', '1'),
(28, 'TÃ©O HENRIQUE', '', '', 'M', 'TEO@GMAIL.COM', 11, 0, 0, '', '1'),
(29, 'ANA CLARA', '', '', 'F', 'ANA@GMAIL.COM', 1, 1, 0, '1', '1'),
(30, 'ANA LIMA', '', '', 'F', 'ANA@GMAIL.COM', 1, 1, 0, '1', '1'),
(31, 'ANA LUIZA', '', '', 'F', 'ANALUIZA@GMAIL.COM', 1, 2, 0, '1', '1'),
(32, 'ANA CRISTINA', '', '', 'F', 'PAULA@GMAIL.COM', 1, 1, 0, '3', '1'),
(33, 'ANA CAROLINA', '', '', 'F', 'CAROL@GMAIL.COM', 1, 1, 0, '5', '1'),
(34, 'MARIA HELENA', '', '', 'F', 'HELENA@GMAIL.COM', 1, 3, 0, '6', '1'),
(35, 'ANA MARIA', '', '', 'F', 'ANABIO@GMAIL.COM', 2, 2, 0, '4', '1'),
(36, 'ANA ROSA', '', '', 'M', 'ROSA@GMAIL.COM', 2, 1, 0, '5', '1'),
(37, 'MARIA LUÃ­SA', '', '', 'F', 'LU@GMAIL.COM', 2, 1, 0, '5', '1'),
(38, 'MARIA EMÃ­LIA', '', '', 'F', 'EMI@GMAIL.COM', 2, 2, 0, '6', '1'),
(39, 'MARIA LÃºCIA', '', '', 'F', 'LULU@GMAIL.COM', 2, 3, 0, '6', '1'),
(40, 'MARIA EDUARDA', '', '', 'F', 'DU@GMAIL.COM', 3, 2, 0, '3', '1'),
(41, 'MARIA HELENA', '', '', 'F', 'HEL2GMAIL.COM', 3, 2, 0, '3', '1'),
(42, 'MARIA PAULA', '', '', 'F', 'OAUKA@GMAIL.COM', 3, 1, 0, '7', '1'),
(43, 'MARIA APARECIDA', '', '', 'F', 'APARECIDA@GMAIL.COM', 3, 2, 0, '1', '1'),
(44, 'MARIA AUGUSTA', '', '', 'F', 'AU@GMAIL.COM', 3, 1, 0, '5', '1'),
(45, 'CARLA CRISTINA', '', '', 'F', 'CARLA@GMAIL.COM', 11, 1, 0, '5', '1'),
(46, 'ELIS REGINA', '', '', 'F', 'ELIS@GMAIL.COM', 11, 2, 0, '3', '1'),
(47, 'GLÃ³RIA CRISTINA', '', '', 'F', 'GLO@GMAIL.COM', 1, 1, 0, '3', '1'),
(48, 'EDUARDO LIMA', '', '', 'M', 'EDUARDO@HOTMAIL.COM', 1, 2, 0, '8', '1'),
(49, 'ISABEL REGINA', '', '', 'F', 'ISA@GMAIL.COM', 1, 2, 0, '4', '1'),
(50, 'ANNA MARIA', '', '', 'M', 'ANNA@GMAIL.COM', 2, 1, 0, '1', '1'),
(51, 'ALICE MARIA', '', '', 'F', 'ALICE@GMAAIL.COM', 2, 3, 0, '8', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `requerimento`
--

CREATE TABLE IF NOT EXISTS `requerimento` (
  `id_requerimento` int(11) NOT NULL AUTO_INCREMENT,
  `desc_requerimento` varchar(150) NOT NULL,
  `grupo_requerimento_id` int(11) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_requerimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Extraindo dados da tabela `requerimento`
--

INSERT INTO `requerimento` (`id_requerimento`, `desc_requerimento`, `grupo_requerimento_id`, `ativo`) VALUES
(1, 'COORDENADOR DO CURSO', 1, '1'),
(2, 'DIPLOMA', 1, '1'),
(3, 'ATIVIDADE COMPLEMENTAR ', 1, '1'),
(4, 'LANÃ‡AMENTO DE NOTA ', 1, '1'),
(5, 'PROFESSORES', 1, '1'),
(6, 'ACERVO', 2, '1'),
(7, 'ACESSO A BIBLIOTECA', 2, '1'),
(8, 'QUALIDADE NO ATENDIMENTO DA BIBLIOTECA', 2, '1'),
(9, 'RECLAMAÃ‡ÃƒO SOBRE BOLETO', 3, '1'),
(10, 'RECLAMAÃ‡ÃƒO SOBRE FINANCIAMENTO ', 3, '1'),
(11, 'RECLAMÃ‡ÃƒO SOBRE MENSALIDADES', 3, '1'),
(12, 'RECLAMAÃ‡ÃƒO SOBRE NEGOCIAÃ‡ÃƒO FINANCEIRA', 3, '1'),
(13, 'ACESSIBILIDADE', 4, '1'),
(14, 'ESTACIONAMENTO', 4, '1'),
(15, 'BANHEIROS', 4, '1'),
(16, 'LIMPEZA', 4, '1'),
(17, 'CERTIFICADO DE CONGRESSO', 5, '1'),
(18, 'INSCRIÃ‡ÃƒO EM EVENTOS E CONGRESSO', 5, '1'),
(19, 'DECLARAÃ‡ÃƒO DE VINCULO', 6, '1'),
(20, 'DECLARAÃ‡ÃƒO DE QUITAÃ‡ÃƒO', 6, '1'),
(21, 'DECLARAÃ‡ÃƒO DE FREQUÃŠNCIA ', 6, '1'),
(22, 'DECLARAÃ‡ÃƒO DE CONCLUSÃƒO DO CURSO', 6, '1'),
(23, '2Âª VIA CARTÃƒO ACESSO', 6, '1'),
(24, 'REVISÃƒO DE PROVA ', 7, '1'),
(25, 'MUDANÃ‡A DE CURSO', 7, '1'),
(26, 'ANTECIPAÃ‡ÃƒO DE BANCA DE TCC', 7, '1'),
(27, 'COLAÃ‡ÃƒO DE GRAU EM GABINETE ', 7, '1'),
(28, 'DADOS CADASTRAIS VIA PORTAL', 7, '1'),
(29, 'NEGOCIAÃ‡ÃƒO FINANCEIRA (VIA TELEFONE)', 8, '1'),
(30, 'DECLARAÃ‡ÃƒO DE NADA CONSTA', 8, '1'),
(31, 'COMPENSAÃ‡ÃƒO DE CRÃ‰DITO', 8, '1'),
(32, 'ANTECIPAÃ‡ÃƒO DE MENSALIDADE', 8, '1'),
(33, 'TROCA DE TITULARIDADE', 9, '1');

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
-- Estrutura da tabela `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id_status` int(11) NOT NULL,
  `tipo_status` varchar(30) NOT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id_status`, `tipo_status`) VALUES
(9, 'aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE IF NOT EXISTS `telefone` (
  `id_telefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero_telefone` varchar(13) NOT NULL,
  `tipo_telefone` char(1) NOT NULL,
  `pessoa_id` int(11) NOT NULL,
  PRIMARY KEY (`id_telefone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`id_telefone`, `numero_telefone`, `tipo_telefone`, `pessoa_id`) VALUES
(5, '11111111111', '1', 29),
(6, '11111111111', '1', 30),
(7, '22222222222', '1', 31),
(8, '55555555555', '1', 32),
(9, '33333333333', '1', 33),
(10, '55555555555', '1', 34),
(11, '88888888888', '1', 35),
(12, '99999999999', '1', 36),
(13, '66666666666', '1', 37),
(14, '54887742255', '1', 38),
(15, '54225587745', '1', 39),
(16, '81447755695', '1', 40),
(17, '66666666666', '1', 41),
(18, '66666666666', '1', 42),
(19, '22222222222', '1', 43),
(20, '88888888888', '1', 44),
(21, '33333333333', '1', 45),
(22, '44444444444', '1', 46),
(23, '66666666666', '1', 47),
(24, '00000000000', '1', 48),
(25, '98888888888', '1', 49),
(26, '00000000000', '1', 50),
(27, '88888888888', '1', 51);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_curso`
--

CREATE TABLE IF NOT EXISTS `tipo_curso` (
  `id_tipo_curso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_curso` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tipo_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_curso`
--

INSERT INTO `tipo_curso` (`id_tipo_curso`, `tipo_curso`, `ativo`) VALUES
(1, 'GRADUAÃ‡ÃƒO PRESENCIAL', '1'),
(2, 'GRADUAÃ‡ÃƒO EAD', '1'),
(3, 'TÃ‰CNICO', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_requerimento`
--

CREATE TABLE IF NOT EXISTS `tipo_requerimento` (
  `id_requerimento` int(11) NOT NULL AUTO_INCREMENT,
  `opt_requerimento` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_requerimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tipo_requerimento`
--

INSERT INTO `tipo_requerimento` (`id_requerimento`, `opt_requerimento`, `ativo`) VALUES
(1, 'RECLAMAÃ‡ÃƒO', '1'),
(2, 'SOLICITAÃ‡ÃƒO', '1'),
(3, 'PESSOAIS ', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `id_turma` int(11) NOT NULL AUTO_INCREMENT,
  `sala_turma` varchar(50) NOT NULL,
  PRIMARY KEY (`id_turma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`id_turma`, `sala_turma`) VALUES
(1, '406');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
  `id_turno` int(11) NOT NULL AUTO_INCREMENT,
  `nome_turno` varchar(50) NOT NULL,
  PRIMARY KEY (`id_turno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `turno`
--

INSERT INTO `turno` (`id_turno`, `nome_turno`) VALUES
(1, 'manhã'),
(2, 'tarde'),
(3, 'noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unidade`
--

CREATE TABLE IF NOT EXISTS `unidade` (
  `id_unidade` int(11) NOT NULL AUTO_INCREMENT,
  `desc_unidade` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_unidade`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id_unidade`, `desc_unidade`, `ativo`) VALUES
(1, 'UNINABUCO - RECIFE', '1'),
(2, 'UNINASSAU - PAULISTA', '1'),
(3, 'CARUARU UNINABUCO', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `matricula_usuario` varchar(11) NOT NULL,
  `senha_usuario` varchar(200) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  `nivel_id` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula_usuario`, `senha_usuario`, `ativo`, `nivel_id`) VALUES
(8, 'admin', '202cb962ac59075b964b07152d234b70', '1', 4),
(9, '11111111', '202cb962ac59075b964b07152d234b70', '1', 2),
(10, '22222222', '202cb962ac59075b964b07152d234b70', '1', 2),
(11, '33333333', '202cb962ac59075b964b07152d234b70', '1', 2),
(12, '44444444', '202cb962ac59075b964b07152d234b70', '1', 2),
(13, '55555555', '202cb962ac59075b964b07152d234b70', '1', 2),
(14, '66666666', '202cb962ac59075b964b07152d234b70', '1', 2),
(15, '77777777', '202cb962ac59075b964b07152d234b70', '1', 2),
(16, '88888888', '202cb962ac59075b964b07152d234b70', '1', 2),
(17, '99999999', '202cb962ac59075b964b07152d234b70', '1', 2),
(18, '11111110', '202cb962ac59075b964b07152d234b70', '1', 2),
(19, '78533723', '202cb962ac59075b964b07152d234b70', '1', 1),
(20, '95466512', '202cb962ac59075b964b07152d234b70', '1', 1),
(21, '73180948', '202cb962ac59075b964b07152d234b70', '1', 1),
(22, '73912267', '202cb962ac59075b964b07152d234b70', '1', 1),
(23, '74643586', '202cb962ac59075b964b07152d234b70', '1', 1),
(24, '75374904', '202cb962ac59075b964b07152d234b70', '1', 1),
(25, '76106223', '202cb962ac59075b964b07152d234b70', '1', 1),
(26, '76837541', '202cb962ac59075b964b07152d234b70', '1', 1),
(27, '77568860', '202cb962ac59075b964b07152d234b70', '1', 1),
(28, '78300179', '202cb962ac59075b964b07152d234b70', '1', 1),
(29, '10080021', '', '1', 3),
(30, '10080021', '', '1', 3),
(31, '10079067', '', '1', 3),
(32, '10078113', '', '1', 3),
(33, '10077159', '', '1', 3),
(34, '10076205', '', '1', 3),
(35, '10075251', '', '1', 3),
(36, '10074297', '', '1', 3),
(37, '10073343', '', '1', 3),
(38, '10072389', '', '1', 3),
(39, '10071435', '', '1', 3),
(40, '10070481', '', '1', 3),
(41, '10069527', '', '1', 3),
(42, '10068573', '', '1', 3),
(43, '10067619', '', '1', 3),
(44, '10066665', '', '1', 3),
(45, '10065711', '', '1', 3),
(46, '10064757', '', '1', 3),
(47, '10063803', '', '1', 3),
(48, '10062849', '', '1', 3),
(49, '10061895', '', '1', 3),
(50, '10060941', '', '1', 3),
(51, '10059987', '', '1', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
