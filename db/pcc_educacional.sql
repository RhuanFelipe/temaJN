-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2018 às 23:06
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
  `nasc_pessoa` date NOT NULL,
  `email_pessoa` varchar(100) DEFAULT 'teste@hotmail.com',
  `curso_id` int(11) NOT NULL DEFAULT '0',
  `turno_id` int(11) NOT NULL DEFAULT '0',
  `turma_id` int(11) NOT NULL DEFAULT '0',
  `periodo` char(1) NOT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome_pessoa`, `cpf_pessoa`, `rg_pessoa`, `sexo_pessoa`, `nasc_pessoa`, `email_pessoa`, `curso_id`, `turno_id`, `turma_id`, `periodo`) VALUES
(1, 'Rhuan Felipe da Silva', '11122233344', '333444555', 'm', '1991-05-18', 'rhuanfelsilva@gmail.com', 7, 3, 1, ''),
(2, 'Marcelo Diaz', '111111111', '1111111', 'm', '1975-04-09', 'teste@gmail.com', 7, 0, 0, ''),
(3, 'Marina Carla', '11223344556', '12345678', 'f', '1994-04-23', 'teste@hotmail.com', 2, 2, 1, ''),
(4, 'patricia carla', '11122233344', '1111111', 'f', '1992-05-25', 'teste@gmail.com', 0, 0, 0, ''),
(5, 'João Mathias', '11111111111', '11111111', 'm', '2018-05-01', 'teste@gmail.com', 1, 3, 1, ''),
(16, 'Anderson Felipe da Costa', '89457937716', '69947512', 'm', '1996-05-01', 'Anderson@gmail.com', 1, 3, 1, ''),
(17, 'Carlos Jose de Lima', '21622143779', '38098746', 'm', '1997-02-11', 'Jose@gmail.com', 1, 3, 1, ''),
(18, 'Carlos Luiz da Silva', '82582266140', '43525783', 'm', '1995-08-21', 'Carlos@gmail.com', 1, 1, 1, ''),
(19, 'Vitoria Andrade Pessoa', '21431442534', '34834716', 'f', '1997-02-11', 'Vitoria@gmail.com', 1, 3, 1, ''),
(20, 'Juliana Silva Bezerra', '47861856712', '73035406', 'f', '1998-09-23', 'Juliana@gmail.com', 1, 1, 1, ''),
(21, 'Ricardo Junior', '73178735780', '47302154', 'm', '2000-02-01', 'Junior@gmail.com', 2, 3, 1, ''),
(22, 'Fabio Henrique', '34887378106', '41232154', 'm', '2001-05-25', 'Fabio@gmail.com', 2, 3, 1, ''),
(23, 'Fernanda Maria', '12561414612', '42602154', 'f', '1997-11-14', 'Fernanda@gmail.com', 2, 3, 1, ''),
(24, 'Julia Alves', '78307678153', '47302987', 'f', '2000-12-24', 'Alves@gmail.com', 2, 3, 1, ''),
(25, 'Ingrid Fernanda', '20688189490', '47978554', 'f', '1999-10-21', 'Ingrid@gmail.com', 2, 3, 1, ''),
(26, 'Beatriz Silva', '73171343578', '47992154', 'f', '1990-02-11', 'Beatriz@gmail.com', 3, 3, 1, ''),
(27, 'Laura Ferreira', '34876578106', '11232154', 'f', '1994-05-15', 'Laura@gmail.com', 3, 3, 1, ''),
(28, 'Maria Pereira', '12561097612', '22602154', 'f', '1994-11-24', 'Pereira@gmail.com', 3, 3, 1, ''),
(29, 'Miguel Alves', '12307678153', '33302987', 'm', '1994-12-24', 'Miguel@gmail.com', 3, 3, 1, ''),
(30, 'Lucas Fernandes', '45688189490', '48978554', 'm', '1999-10-21', 'Fernandes@gmail.com', 3, 3, 1, ''),
(31, 'Gabriel Junior', '79787357801', '49302154', 'm', '1999-02-01', 'Junior99@gmail.com', 4, 3, 1, ''),
(32, 'Enzo Henrique', '65487378106', '43232154', 'm', '1997-05-25', 'Enzo@gmail.com', 4, 1, 1, ''),
(33, 'Rafael Costa', '12001414612', '42612154', 'm', '1997-11-14', 'Rafael@gmail.com', 4, 3, 1, ''),
(34, 'Mariana Magáli', '79877678153', '47398987', 'm', '2000-12-24', 'Martins@gmail.com', 4, 1, 1, ''),
(35, 'Isabela Fernanda', '20788189490', '47978764', 'f', '1999-10-21', 'Isabela@gmail.com', 4, 1, 1, ''),
(36, 'Camila Sousa', '73179735780', '47365154', 'f', '1997-02-01', 'Sousa@gmail.com', 5, 2, 1, ''),
(37, 'Fabio Gomes', '34898378106', '13232154', 'm', '1997-05-25', 'Fabio97@gmail.com', 5, 2, 1, ''),
(38, 'Fernanda Almeida', '12560914612', '44602154', 'f', '1997-11-14', 'Almeida@gmail.com', 5, 3, 1, ''),
(39, 'Davi Alves', '13307678153', '67312987', 'm', '2000-12-24', 'Davi@gmail.com', 5, 3, 1, ''),
(40, 'Ingrid Valentina', '44468818949', '47768554', 'f', '1999-10-21', 'Valentina@gmail.com', 5, 3, 1, ''),
(41, 'Junior Ricardo', '73334873578', '47302987', 'm', '1997-02-01', 'Ricardo@gmail.com', 6, 3, 1, ''),
(42, 'Bruno Henrique', '34887378199', '41256754', 'm', '1993-05-25', 'Bruno@gmail.com', 6, 3, 1, ''),
(43, 'Fernanda Nunes', '12561414688', '45602154', 'f', '1993-11-14', 'Nunes@gmail.com', 6, 1, 1, ''),
(44, 'Julia Nunes', '78307678113', '47366987', 'f', '1993-12-24', 'NunesJ@gmail.com', 6, 1, 1, ''),
(45, 'Leticia Fernanda', '44688189490', '47977554', 'f', '1993-10-21', 'Leticia@gmail.com', 6, 1, 1, ''),
(46, 'Luana Silva', '77178735780', '473888154', 'f', '1993-02-01', 'Luana@gmail.com', 7, 3, 1, ''),
(47, 'Luana Gomes', '33887378106', '41299754', 'f', '1993-05-25', 'GomesL@gmail.com', 7, 3, 1, ''),
(48, 'Fernanda Alves', '00561414612', '49852154', 'f', '1993-11-14', 'Fernanda1@gmail.com', 7, 3, 1, ''),
(49, 'Julia Ribeiro', '00307678153', '47302987', 'f', '1993-12-24', 'Ribeiro@gmail.com', 7, 3, 1, ''),
(50, 'Ingrid Lopes', '00688189490', '49798554', 'f', '1999-10-21', 'Lopes2@gmail.com', 7, 2, 1, ''),
(51, 'Helena Oliveira', '09178735780', '47203154', 'f', '1993-02-01', 'Helena@gmail.com', 8, 2, 1, ''),
(52, 'Samuel Henrique', '34886378106', '12342154', 'm', '2000-05-25', 'Samuel@gmail.com', 8, 1, 1, ''),
(53, 'Rodrigo Costa', '04561414612', '42604567', 'm', '1997-11-14', 'Costa@gmail.com', 8, 1, 1, ''),
(54, 'Rebeca Alves', '79907678153', '47308903', 'f', '2000-12-24', 'Rebeca@gmail.com', 8, 1, 1, ''),
(55, 'Diego Maradona', '20098189490', '47987654', 'm', '1996-10-21', 'Diego@gmail.com', 8, 3, 1, ''),
(56, 'John Lenon', '73170835780', '47309154', 'm', '1993-02-01', 'John93@gmail.com', 9, 3, 1, ''),
(57, 'Daniel Jose', '34887370706', '41224154', 'm', '1993-05-25', 'Daniel@gmail.com', 9, 2, 1, ''),
(58, 'Gabriel Jesus', '12560614612', '42888215', 'm', '1997-11-14', 'Gabriel99@gmail.com', 9, 1, 1, ''),
(59, 'Aline Alves', '78307058153', '47002987', 'f', '1996-12-24', 'Aline93@gmail.com', 9, 1, 1, ''),
(60, 'Lorena Fernanda', '20677189490', '47900554', 'f', '1996-10-21', 'Lorena@gmail.com', 9, 1, 1, ''),
(61, 'Ronaldo Nazario', '73678735780', '47302054', 'm', '1990-02-01', 'Ronaldo@gmail.com', 10, 3, 1, ''),
(62, 'Ana Maria', '34997378106', '01232154', 'f', '1964-05-25', 'Ana@gmail.com', 10, 3, 1, ''),
(63, 'Fatima Bernardes', '12576414612', '52602164', 'f', '1985-11-14', 'Fatima@gmail.com', 10, 3, 1, ''),
(64, 'Maria Julia', '02307678153', '47403987', 'f', '1996-12-24', 'Julia95@gmail.com', 10, 2, 1, ''),
(65, 'Ronalda Mariana', '01688189490', '47933456', 'f', '1992-10-21', 'Ronalda@gmail.com', 10, 1, 1, ''),
(66, 'Monica Mattos', '11122233344', '1111111', 'f', '1991-06-05', 'teste@hotmail.com', 1, 0, 0, ''),
(67, 'Kátia de João', '11111111111', '11111111', 'm', '1990-06-19', 'teste@hotmail.com', 2, 0, 0, ''),
(68, 'Jean da Silva', '11122233344', '1111111', 'm', '1988-06-28', 'teste@hotmail.com', 3, 0, 0, ''),
(69, 'Rafael Carvalho', '11111111111', '11111111', 'm', '1992-05-01', 'teste@hotmail.com', 4, 0, 0, ''),
(70, 'Marta Soarez', '11122233344', '1111111', 'f', '1992-05-25', 'teste@hotmail.com', 5, 0, 0, ''),
(71, 'teste', '', '', 'm', '0000-00-00', 'rhuan.silva@informata.com.br', 4, 1, 0, '3'),
(72, 'jean nascimento', '', '', 'm', '0000-00-00', 'rhuan.silva@informata.com.br', 1, 1, 0, '4'),
(74, 'Messi da Silva', '', '', 'm', '0000-00-00', 'rhuan.silva@informata.com.br', 3, 2, 0, '5'),
(75, 'Cristiano Ronaldo Bale', '', '', 'm', '0000-00-00', 'tiemfocoweb@gmail.com', 9, 3, 0, '5');

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
  `matricula_usuario` int(11) NOT NULL,
  `senha_usuario` varchar(200) NOT NULL,
  `ativo_usuario` char(1) NOT NULL DEFAULT '1',
  `nivel_id` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula_usuario`, `senha_usuario`, `ativo_usuario`, `nivel_id`) VALUES
(1, 11032395, '123', '1', 3),
(2, 11111111, '123', '1', 1),
(3, 12345678, '123', '1', 3),
(4, 87654321, '123', '1', 2),
(5, 81625366, '123', '1', 3),
(6, 30151367, '123', '1', 3),
(7, 86672973, '123', '1', 3),
(8, 70965576, '123', '1', 3),
(9, 13546753, '123', '1', 3),
(10, 15832520, '123', '1', 3),
(11, 71685801, '123', '1', 3),
(12, 61236572, '123', '1', 3),
(13, 84335327, '123', '1', 3),
(14, 38037109, '123', '1', 3),
(15, 87188720, '123', '1', 3),
(16, 86468505, '123', '1', 3),
(17, 65866089, '123', '1', 3),
(18, 31140137, '123', '1', 3),
(19, 38198853, '123', '1', 3),
(20, 56036377, '123', '1', 3),
(21, 80014038, '123', '1', 3),
(22, 79516601, '123', '1', 3),
(23, 92483520, '123', '1', 3),
(24, 29315186, '123', '1', 3),
(25, 98654174, '123', '1', 3),
(26, 17541504, '123', '1', 3),
(27, 18447876, '123', '1', 3),
(28, 15679932, '123', '1', 3),
(29, 43661499, '123', '1', 3),
(30, 29589844, '123', '1', 3),
(31, 12966919, '123', '1', 3),
(32, 74505615, '123', '1', 3),
(33, 86911010, '123', '1', 3),
(34, 50036621, '123', '1', 3),
(35, 22915650, '123', '1', 3),
(36, 15167237, '123', '1', 3),
(37, 50277710, '123', '1', 3),
(38, 63256836, '123', '1', 3),
(39, 45169067, '123', '1', 3),
(40, 97039794, '123', '1', 3),
(41, 56365970, '123', '1', 3),
(42, 36254891, '123', '1', 3),
(43, 26602173, '123', '1', 3),
(44, 29498291, '123', '1', 3),
(45, 74862671, '123', '1', 3),
(46, 55517578, '123', '1', 3),
(47, 64089966, '123', '1', 3),
(48, 71917724, '123', '1', 3),
(49, 29830933, '123', '1', 3),
(50, 53308105, '123', '1', 3),
(51, 45074470, '123', '1', 3),
(52, 33673096, '123', '1', 3),
(53, 92416381, '123', '1', 3),
(54, 81372070, '123', '1', 3),
(55, 44729614, '123', '1', 3),
(56, 74139404, '123', '1', 3),
(57, 34494019, '123', '1', 3),
(58, 74084472, '123', '1', 3),
(59, 31631470, '123', '1', 3),
(60, 26916510, '123', '1', 3),
(61, 77938842, '123', '1', 3),
(62, 15820313, '123', '1', 3),
(63, 62088013, '123', '1', 3),
(64, 78704834, '123', '1', 3),
(65, 94625854, '123', '1', 3),
(66, 12341234, '123', '1', 1),
(67, 43214321, '123', '1', 1),
(68, 11110000, '123', '1', 1),
(69, 11223344, '123', '1', 1),
(70, 44332211, '123', '1', 1),
(71, 61358023, '', '1', 3),
(72, 22496076, '', '1', 3),
(73, 123, '123', '1', 4),
(74, 58845295, '', '1', 3),
(75, 73446368, '', '1', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
