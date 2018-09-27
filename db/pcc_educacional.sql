-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 27-Set-2018 às 21:05
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
  `assunto_chamado` varchar(200) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamado_resposta`
--

CREATE TABLE IF NOT EXISTS `chamado_resposta` (
  `id_chamado` int(11) NOT NULL,
  `data_fechamento` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `assunto_chamado` text NOT NULL
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

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
(8, 'SOLICITAÃ‡ÃƒO FINACEIRA', 2, '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

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
(9, 'RECLAMAAÃ‡ÃƒO SOBRE BOLETO', 3, '1'),
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
(32, 'ANTECIPAÃ‡ÃƒO DE MENSALIDADE', 8, '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `telefone`
--

INSERT INTO `telefone` (`id_telefone`, `numero_telefone`, `tipo_telefone`, `pessoa_id`) VALUES
(1, '8132022222', '1', 71),
(2, '8132022222', '1', 72),
(3, '8132022222', '1', 74),
(4, '8132022222', '1', 75);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_curso`
--

CREATE TABLE IF NOT EXISTS `tipo_curso` (
  `id_tipo_curso` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_curso` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_tipo_curso`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_curso`
--

INSERT INTO `tipo_curso` (`id_tipo_curso`, `tipo_curso`, `ativo`) VALUES
(1, 'GRADUAÃ‡ÃƒO PRESENCIAL', '1'),
(2, 'GRADUAÃ‡ÃƒO EAD', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_requerimento`
--

CREATE TABLE IF NOT EXISTS `tipo_requerimento` (
  `id_requerimento` int(11) NOT NULL AUTO_INCREMENT,
  `opt_requerimento` varchar(150) NOT NULL,
  `ativo` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_requerimento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo_requerimento`
--

INSERT INTO `tipo_requerimento` (`id_requerimento`, `opt_requerimento`, `ativo`) VALUES
(1, 'RECLAMAÃ‡ÃƒO', '1'),
(2, 'SOLICITAÃ‡ÃƒO', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `unidade`
--

INSERT INTO `unidade` (`id_unidade`, `desc_unidade`, `ativo`) VALUES
(1, 'UNINABUCO - RECIFE', '1'),
(2, 'UNINASSAU - PAULISTA', '1');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
