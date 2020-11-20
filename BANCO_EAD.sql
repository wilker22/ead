-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2019 às 17:43
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plataforma_ead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula`
--

CREATE TABLE `aula` (
  `id_aula` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `aula` varchar(150) NOT NULL,
  `duracao_aula` varchar(10) NOT NULL,
  `embed_youtube` varchar(30) NOT NULL,
  `embed_vimeo` varchar(30) NOT NULL,
  `slug_aula` varchar(150) NOT NULL,
  `ativo_aula` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aula`
--

INSERT INTO `aula` (`id_aula`, `id_curso`, `aula`, `duracao_aula`, `embed_youtube`, `embed_vimeo`, `slug_aula`, `ativo_aula`) VALUES
(3237, 1, 'Aula 01 - Apresentação', '07min18s', 'mNXr3Pstz64', '', 'aula-00-apresentacao', 'N'),
(3238, 1, 'Aula 02 - Orientações Iniciais', '02min24s', 'mNXr3Pstz64', '', 'aula-01-orientacoes-iniciais', 'N'),
(3239, 1, 'Aula 03 - Conceitos de Variáveis', '05min33s', 'mNXr3Pstz64', '', 'aula-aula-01-conceituando-variaveis', 'S'),
(3240, 1, 'Aula 04 - Regras de identificadores', '06min21s', 'mNXr3Pstz64', '', 'aula-02-regra-para-identificadores', 'S'),
(3241, 1, 'Aula 05 - Palavras reservadas', '02min00s', 'mNXr3Pstz64', '', 'aula-03-lista-de-palavras-reservadas', 'S'),
(3243, 9, 'Aula 06 - Tipos de Variáveis', '08min25s', 'mNXr3Pstz64', '', 'aula-04-tipos-de-variaveis', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aula_assistida`
--

CREATE TABLE `aula_assistida` (
  `id_aula_assistida` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `data_assistida` date NOT NULL,
  `hora_assistida` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `cliente` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `data_cadastro` date NOT NULL,
  `ativo_cliente` varchar(1) NOT NULL DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `cliente`, `endereco`, `cidade`, `bairro`, `uf`, `cep`, `foto`, `email`, `senha`, `telefone`, `data_cadastro`, `ativo_cliente`) VALUES
(1, 'Manoel Jailton Sousa do Nascimento', '', '', '', '', '', '', 'mjailton@gmail.com', '1234', '', '0000-00-00', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_curso`
--

CREATE TABLE `cliente_curso` (
  `id_curso_cliente` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_matricula` date NOT NULL,
  `hora_matricula` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_curso`
--

INSERT INTO `cliente_curso` (`id_curso_cliente`, `id_curso`, `id_cliente`, `data_matricula`, `hora_matricula`) VALUES
(1, 1, 1, '2018-10-01', '00:00:00'),
(2, 2, 1, '2018-09-05', '00:00:00'),
(3, 3, 1, '2018-09-01', '00:00:00'),
(4, 4, 1, '2018-09-05', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_aula` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data_comentario` date NOT NULL,
  `hora_comentario` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(11) NOT NULL,
  `curso` varchar(150) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `duracao` varchar(20) NOT NULL,
  `slug` varchar(150) NOT NULL,
  `descricao` text NOT NULL,
  `embed` varchar(30) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `ativo_curso` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `curso`, `imagem`, `duracao`, `slug`, `descricao`, `embed`, `preco`, `ativo_curso`) VALUES
(1, 'Formação Matemática Completo', 'formacao-matematica.jpg', '10h15min', 'curso-de-matematica', '', '', '0.00', 'S'),
(2, 'Formação JavaScript', 'formacao-javascript.jpg', '', 'formacao-javascript', '0', '', '0.00', 'S'),
(3, 'Formação JQuery', 'formacao-jquery.jpg', '', 'formacao-jquery', '0', '', '0.00', 'S'),
(4, 'Projeto PHP Prime', 'php-prime-completo.jpg', '', 'curso-de-php-completo', '0', '', '497.00', 'S'),
(5, 'CSS Prime', 'css-prime.jpg', '', 'curso-de-css-completo', 'Curso Completo de Css passo a passo', '', '0.00', ''),
(6, 'Android Prime', 'andoride-prime.jpg', '', 'curso-de-android', '0', '', '0.00', ''),
(7, 'JSF Prime', 'jsf-01.jpg', '', 'curso-jsf-completo', '0', '', '0.00', ''),
(8, 'ASPNET', 'aspnet_csharp.jpg', '', 'curso-aspnet', '', '', '157.00', 'S'),
(9, 'Formação Front-End Completo', 'frontend-start.jpg', '', 'front-end-completo', '', '', '0.00', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `download`
--

CREATE TABLE `download` (
  `id_download` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `titulo_download` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE `resposta` (
  `id_resposta` int(11) NOT NULL,
  `id_comentario` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `data_resposta` date NOT NULL,
  `hora_resposta` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indexes for table `aula_assistida`
--
ALTER TABLE `aula_assistida`
  ADD PRIMARY KEY (`id_aula_assistida`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `cliente_curso`
--
ALTER TABLE `cliente_curso`
  ADD PRIMARY KEY (`id_curso_cliente`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id_resposta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3244;

--
-- AUTO_INCREMENT for table `aula_assistida`
--
ALTER TABLE `aula_assistida`
  MODIFY `id_aula_assistida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente_curso`
--
ALTER TABLE `cliente_curso`
  MODIFY `id_curso_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
