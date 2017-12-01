-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Dez-2017 às 17:37
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academica`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `caminho` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `titulo`, `imagem`, `caminho`) VALUES
(1, 'Banner', 'SLIDE.jpg', 'http://comberweb.com.br/projetos/academica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `logo`, `nome`, `caminho`) VALUES
(1, 'academica.jpg', 'Academica', 'http://comberweb.com.br/projetos/academica/'),
(2, 'academica_1.jpg', 'Academica', 'http://comberweb.com.br/projetos/academica/'),
(3, 'academica_2.jpg', 'Academica', 'http://comberweb.com.br/projetos/academica/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

CREATE TABLE `configuracoes` (
  `id` int(11) NOT NULL,
  `logo_header` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `logo_header`, `facebook`, `twitter`, `instagram`, `copyright`) VALUES
(1, 'logo_1.png', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/', '© COPYRIGHT 2017 - ACADEMICA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `email_formulario` varchar(255) NOT NULL,
  `mapa` varchar(400) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `whatsapp` varchar(255) NOT NULL,
  `email_contato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `titulo`, `email_formulario`, `mapa`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `telefone`, `whatsapp`, `email_contato`) VALUES
(1, 'Acadêmica', 'email_formulario', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14652.687922636522!2d-52.093555!3d-23.345783050302995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ed2b4dd64a0303%3A0x6b440858dbdb9e34!2sR.+Her%C3%B3is+de+Monte+Castelo%2C+136+-+Centro%2C+Mandagua%C3%A7u+-+PR%2C+87160-000!5e0!3m2!1spt-BR!2sbr!4v1512063959537', 'Rua Heróis de Monte Castelo', '136', 'Sala 03 ', 'Centro', 'Mandaguaçu', 'PR', '44 3245 3765', '44 3245 3765', 'contato@academica.adm.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tipo` int(11) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `carga_horaria` varchar(255) NOT NULL,
  `requisitos` text NOT NULL,
  `localidade` varchar(255) NOT NULL,
  `link_matricula` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `tipo`, `slug`, `imagem`, `descricao`, `carga_horaria`, `requisitos`, `localidade`, `link_matricula`) VALUES
(1, 'Gestão de Pessoas', 1, 'gestao-de-pessoas', 'consultoria.png', '<p>Aperfei&ccedil;oe suas habilidades nos c&aacute;lculos de rescis&otilde;es trabalhistas e esteja atualizado quanto &agrave;s principais pr&aacute;ticas relacionadas &agrave; &aacute;rea.</p>', '15h', '<ul style=\"list-style-type: square;\">\r\n<li>Ensino Fundamental completo</li>\r\n<li>Experi&ecirc;ncia ou conhecimento em c&aacute;lculo de rescis&atilde;o trabalhista.</li>\r\n</ul>', 'Mandaguaçu-PR', 'http://comberweb.com.br/projetos/academica/informacoes'),
(2, 'Contabilidade', 2, 'contabilidade', 'teste.jpg', '<p>Aperfei&ccedil;oe suas habilidades nos c&aacute;lculos de rescis&otilde;es trabalhistas e esteja atualizado quanto &agrave;s principais pr&aacute;ticas relacionadas &agrave; &aacute;rea.</p>', '20h', '<ul style=\"list-style-type: square;\">\r\n<li>Ensino Fundamental completo</li>\r\n</ul>', 'Curitiba - PR', 'http://comberweb.com.br/projetos/academica/'),
(3, 'Treinamento', 1, 'treinamento', 'treinamento.jpg', '<p>Treinamento</p>', '20h', '<ul>\r\n<li>Ensino fundamental Completo</li>\r\n</ul>', 'Maringá - PR', 'http://comberweb.com.br/projetos/academica/'),
(4, 'Consultoria', 2, 'consultoria', 'consultoria_1.png', '<p>Consultoria</p>', '30h', '<ul style=\"list-style-type: square;\">\r\n<li>Ensino Fundamental Completo</li>\r\n</ul>', 'Mandaguaçu-PR', 'http://comberweb.com.br/projetos/academica/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `titulo_objetivo` varchar(255) NOT NULL,
  `texto_objetivo` text NOT NULL,
  `titulo_missao` varchar(255) NOT NULL,
  `texto_missao` text NOT NULL,
  `titulo_equipe` varchar(255) NOT NULL,
  `texto_equipe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `banner`, `texto`, `titulo_objetivo`, `texto_objetivo`, `titulo_missao`, `texto_missao`, `titulo_equipe`, `texto_equipe`) VALUES
(1, 'parallax_1.jpg', '<p>A Acad&ecirc;mica Consultoria &eacute; uma empresa especializada em Consultoria e Assessoria Tribut&aacute;ria e Jur&iacute;dica, com servi&ccedil;os voltados para atender a &oacute;rg&atilde;os p&uacute;blicos, empresas privadas, contabilistas, e tamb&eacute;m a pessoas f&iacute;sicas que buscam prevenir e regularizar pend&ecirc;ncias junto &agrave; Receita Federal. Dispomos de uma estrutura moderna e inteligente, preparada para atender os nossos clientes com toda transpar&ecirc;ncia, seguran&ccedil;a e credibilidade, j&aacute; que possu&iacute;mos amplo conhecimento na Legisla&ccedil;&atilde;o e no Fisco Previdenci&aacute;rio.</p>', 'Objetivo', '<p>Nosso objetivo &eacute; desenvolver um trabalho personalizado que consiste em, analisar individualmente cada caso, detectar poss&iacute;veis problemas, e apontar solu&ccedil;&otilde;es eficientes, que garantam a total regularidade das obriga&ccedil;&otilde;es fiscais de nossos clientes.</p>', 'Missão', '<p>A miss&atilde;o da Acad&ecirc;mica Consultoria &eacute; manter-se totalmente informada e atualizada sobre todos os detalhes normativos e operacionais que regem a Legisla&ccedil;&atilde;o Previdenci&aacute;ria e seus tr&acirc;mites burocr&aacute;ticos, visando prestar um servi&ccedil;o de excel&ecirc;ncia, com total compet&ecirc;ncia e agilidade, agindo na necessidade espec&iacute;fica de cada setor</p>', 'Nossa Equipe', '<p>Temos uma equipe formada por profissionais especializados e gabaritados, que est&atilde;o em constante aprendizado, aperfei&ccedil;oamento e capacita&ccedil;&atilde;o, que conferem aos mesmos, todos os requisitos necess&aacute;rios para dar uma assessoria completa.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `informativos`
--

CREATE TABLE `informativos` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `informativos`
--

INSERT INTO `informativos` (`id`, `data`, `descricao`) VALUES
(1, '30/11/2017', '<h4 class=\"margin-zero MarginT1p\">Or&ccedil;amento aprova destina&ccedil;&atilde;o de R$ 2,5 bilh&otilde;es para o Fies</h4>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id`, `nome`, `caminho`) VALUES
(1, 'Home', 'http://comberweb.com.br/projetos/academica/'),
(2, 'Certidão da SEFAZ', 'http://comberweb.com.br/projetos/academica/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_clientes`
--

CREATE TABLE `pagina_clientes` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagina_clientes`
--

INSERT INTO `pagina_clientes` (`id`, `texto`) VALUES
(1, '<p class=\"size18 Light\">A complexidade dos trabalhos e os rigores administrativos e jur&iacute;dicos contidos na Legisla&ccedil;&atilde;o Previdenci&aacute;ria exigem a contrata&ccedil;&atilde;o de uma empresa altamente especializada, com total habilidade no assunto. Portanto, a escolha correta do profissional, &eacute; fundamental para que a institui&ccedil;&atilde;o n&atilde;o seja exposta a risco eminente de falhas.</p>\r\n<p class=\"size18 Light\">E a Acad&ecirc;mica Consultoria possui hoje, todos os atributos necess&aacute;rios para desenvolver trabalhos com garantia de excelentes resultados.</p>\r\n<p class=\"size18 Light\">A satisfa&ccedil;&atilde;o dos nossos clientes &eacute; o nosso sucesso!</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_cursos`
--

CREATE TABLE `pagina_cursos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagina_cursos`
--

INSERT INTO `pagina_cursos` (`id`, `titulo`, `texto`) VALUES
(1, 'Saiba tudo sobre nossos cursos.', '<p>Nossa empresa tem o melhor em cursos para sua empresa, utilizando ferramentas inovadoras voc&ecirc; ir&aacute; se surpreender! clique e conhe&ccedil;a mais de cada curso.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina_inicial`
--

CREATE TABLE `pagina_inicial` (
  `id` int(11) NOT NULL,
  `titulo_objetivo` varchar(255) NOT NULL,
  `texto_objetivo` text NOT NULL,
  `titulo_parallax` varchar(255) NOT NULL,
  `texto_parallax` text NOT NULL,
  `titulo_parallax_2` varchar(255) NOT NULL,
  `texto_parallax_2` text NOT NULL,
  `imagem_parallax` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pagina_inicial`
--

INSERT INTO `pagina_inicial` (`id`, `titulo_objetivo`, `texto_objetivo`, `titulo_parallax`, `texto_parallax`, `titulo_parallax_2`, `texto_parallax_2`, `imagem_parallax`) VALUES
(1, 'Nosso Objetivo', 'É desenvolver um trabalho personalizado que consiste em, analisar individualmente cada caso, detectar possíveis problemas, e apontar soluções eficientes, que garantam a total regularidade das obrigações fiscais de nossos clientes.', 'METODOLOGIA APLICADA', 'A metodologia utilizada é a de aulas expositivas, apresentação de casos práticos, modelos de procedimentos inovadores com aferição de resultados, dentro do tema escolhido.', 'RECURSOS INSTRUCIONAIS', 'Recursos de multimídia, demonstrações de casos concretos e apostilas.', 'parallax.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `banner`, `texto`) VALUES
(1, 'parallax_2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a egestas nulla. Quisque non ultricies sem. Nunc arcu velit, viverra eu lacinia sed, vehicula eget libero. Praesent vel mauris a mi consectetur dignissim at vel mi. Nullam iaculis nulla mi, ac dignissim libero eleifend id. Aenean auctor fringilla viverra. Nulla facilisi. Quisque laoreet urna nulla, aliquet finibus est gravida et. Maecenas vehicula diam non dolor molestie suscipit. Proin cursus tortor ligula, sit amet feugiat turpis eleifend eget. Aenean tincidunt sodales ex quis euismod. Nulla facilisi.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `senha` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Comberweb', 'admin@comberweb.com.br', '$2a$08$OTgzNDIzNDY1OWMyYjFiN.yYHdpt1qavIM3lV9WfRxCOWqA.GU6gy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configuracoes`
--
ALTER TABLE `configuracoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informativos`
--
ALTER TABLE `informativos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_clientes`
--
ALTER TABLE `pagina_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_cursos`
--
ALTER TABLE `pagina_cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagina_inicial`
--
ALTER TABLE `pagina_inicial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `configuracoes`
--
ALTER TABLE `configuracoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informativos`
--
ALTER TABLE `informativos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pagina_clientes`
--
ALTER TABLE `pagina_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_cursos`
--
ALTER TABLE `pagina_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pagina_inicial`
--
ALTER TABLE `pagina_inicial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
