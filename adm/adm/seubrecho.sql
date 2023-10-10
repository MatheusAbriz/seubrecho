

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Dez-2022 às 12:50
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `seubrecho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL COMMENT 'Nome do Administrador',
  `email` varchar(300) NOT NULL COMMENT 'E-mail do Administrador',
  `senha` varchar(64) NOT NULL COMMENT 'senha em sha256',
  `datahora` datetime NOT NULL COMMENT 'data e hora do registro YYYY-MM-DD HH:MM:SS',
  `poder` int(1) NOT NULL COMMENT 'Abrangência do Usuário no sistema',
  `status` int(1) NOT NULL COMMENT '1 - ativo; 0 - inativo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`, `datahora`, `poder`, `status`) VALUES
(1, 'Sysop da Silva', 'sysop@controll.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '2022-08-30 13:32:46', 9, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id_cadastro` int(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_cadastro`, `nome`, `senha`, `email`) VALUES
(2, 'ANA', '12345', 'ANA@GMAIL.COM'),
(1, 'QDXQWDQ', '12345', 'bi@gmail.com'),
(7, 'BIAAAAA', '12345', 'bibis@gmail.com'),
(11, 'BIAAAAAAAAAAAAAAAAAAA', '12345', 'btolentino@gmail.com'),
(8, 'FERNANDO SOUZA', '12345', 'fe@gmail.com'),
(4, 'JACINTOOO', '123456789', 'jacinto@gmail.com'),
(6, 'juraci', '123456789', 'JURACI@gmail.com'),
(10, 'matheus', '12345', 'matheus@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `img` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE `cartao` (
  `id_cartao` int(11) NOT NULL,
  `tipo_cartao` int(1) NOT NULL COMMENT ' 0 - debito 1 - crédito',
  `numero_cartao` int(20) NOT NULL,
  `codigo_cartao` int(20) NOT NULL,
  `nome_titular` varchar(70) NOT NULL,
  `validade_cartao` date NOT NULL,
  `cep` varchar(15) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `complemento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cartao`
--

INSERT INTO `cartao` (`id_cartao`, `tipo_cartao`, `numero_cartao`, `codigo_cartao`, `nome_titular`, `validade_cartao`, `cep`, `endereco`, `complemento`) VALUES
(1, 0, 12345, 123, 'jura', '2022-11-21', '04814-550', '11', 'casa'),
(2, 0, 12345, 123, 'jura', '2022-11-21', '04814-550', '11', 'casa'),
(3, 0, 12345, 123, 'jura', '2022-11-21', '04814-550', '11', 'casa'),
(4, 1, 12345, 123, 'jura', '2022-11-21', '04814-550', '11', 'casa'),
(5, 0, 12345678, 0, '12345678', '0000-00-00', '12345678', 'axa', '12345678'),
(6, 1, 122, 0, '122', '0000-00-00', '122', 'WQDW', '122'),
(7, 1, 3, 0, '3', '0000-00-00', '3', 'EFE', '3'),
(8, 0, 1, 0, '1\'13', '0000-00-00', '1\'13', 'wsdcsd', '1\'13'),
(9, 0, 432, 0, '432', '0000-00-00', '432', 'casA2', '432'),
(10, 0, 0, 0, '\'12', '0000-00-00', '\'12', 'SXW', '\'12'),
(11, 1, 12345678, 0, '12345678', '0000-00-00', '12345678', 'XZ\\ASAS', '12345678'),
(12, 0, 21, 0, '21', '0000-00-00', '21', 'EDE', '21'),
(13, 1, 1, 0, '1', '0000-00-00', '1', 'E', '1'),
(14, 1, 32, 0, '32', '0000-00-00', '32', 'f', '32'),
(15, 1, 32, 0, '32', '0000-00-00', '32', 'f', '32'),
(16, 1, 32, 0, '32', '0000-00-00', '32', 'f', '32'),
(17, 1, 32, 0, '32', '0000-00-00', '32', 'f', '32'),
(18, 1, 32, 0, '32', '0000-00-00', '32', 'f', '32'),
(19, 0, 12321, 0, '12321', '0000-00-00', '12321', 'cdsdf', '12321'),
(20, 0, 12321, 0, '12321', '0000-00-00', '12321', 'cdsdf', '12321'),
(21, 0, 12321, 0, '12321', '0000-00-00', '12321', 'cdsdf', '12321'),
(22, 1, 221, 0, '221', '0000-00-00', '221', 'dw', '221'),
(23, 1, 8789, 0, '8789', '0000-00-00', '8789', 'grbt', '8789'),
(24, 1, 6788, 0, '6788', '0000-00-00', '6788', 'kjj', '6788'),
(25, 1, 32434, 0, '32434', '0000-00-00', '32434', 'rrfwe', '32434'),
(26, 1, 343, 0, '343', '0000-00-00', '343', 'frefger', '343'),
(27, 1, 123, 0, '123', '0000-00-00', '123', 'dsaea', '123'),
(28, 1, 45545, 0, '45545', '0000-00-00', '45545', 'sdf', '45545'),
(29, 1, 565, 0, '565', '0000-00-00', '565', 'tydd', '565'),
(30, 0, 2323, 0, '2323', '0000-00-00', '2323', 'dfsdfsd', '2323'),
(31, 1, 232, 0, '232', '0000-00-00', '232', 'sxcfas', '232'),
(32, 0, 412421, 21421, '412421', '0000-00-00', '412421', '21421', '412421'),
(33, 1, 23423, 0, '23423', '0000-00-00', '23423', 'efef', '23423');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu`
--

CREATE TABLE `menu` (
  `id` int(12) NOT NULL,
  `nome` varchar(100) DEFAULT NULL COMMENT 'nome do link',
  `url` varchar(300) DEFAULT NULL COMMENT 'url da pagina destino',
  `datahora` datetime DEFAULT NULL COMMENT 'data e hora da criacao da pagina',
  `status` int(1) DEFAULT NULL COMMENT '0 INATIVO; 1 ATIVO;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `total` float NOT NULL,
  `nome` varchar(60) NOT NULL,
  `img` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `id_produto`, `email`, `quantidade`, `preco`, `total`, `nome`, `img`) VALUES
(50, 5, 'ANA@GMAIL.COM', 1, '20.00', 20, 'Blusa de manga', ''),
(51, 5, 'ANA@GMAIL.COM', 1, '20.00', 20, 'Blusa de manga', ''),
(52, 4, 'ANA@GMAIL.COM', 1, '19.00', 19, 'Camiseta Rosa', ''),
(53, 5, 'jacinto@gmail.com', 1, '20.00', 20, 'Blusa de manga', ''),
(54, 4, 'jacinto@gmail.com', 1, '19.00', 39, 'Camiseta Rosa', ''),
(55, 6, 'jacinto@gmail.com', 1, '19.00', 58, 'calca', ''),
(56, 4, 'jacinto@gmail.com', 1, '19.00', 19, 'Camiseta Rosa', ''),
(57, 6, 'jacinto@gmail.com', 1, '19.00', 19, 'calca', ''),
(58, 8, 'bi@gmail.com', 1, '25.00', 25, 'Moletom de panda', ''),
(59, 7, 'bi@gmail.com', 1, '20.00', 45, 'Camiseta rosa', ''),
(60, 9, 'bi@gmail.com', 1, '15.00', 15, 'Camiseta lilás', 'fem_sup_lilas.jpeg'),
(61, 8, 'fe@gmail.com', 1, '25.00', 25, 'Moletom de panda', 'fem_sup_moletom.jpeg'),
(62, 7, 'fe@gmail.com', 1, '20.00', 20, 'Camiseta rosa', 'femi_sup_pink.jpeg'),
(63, 16, 'matheus@gmail.com', 1, '22.00', 22, 'Short Branco', 'fem_inf_short_branco.jpeg'),
(64, 9, 'btolentino@gmail.com', 1, '15.00', 15, 'Camiseta lilás', 'fem_sup_lilas.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `condicao` varchar(15) NOT NULL,
  `tamanho` varchar(10) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `promocao` int(1) NOT NULL COMMENT 'padrao: 0, promocao: 1',
  `desc_promocao` int(2) NOT NULL COMMENT 'desconto de promocao em %',
  `novidade` int(1) NOT NULL COMMENT 'padrao: 0, promocao: 1',
  `img` varchar(80) NOT NULL COMMENT 'Imagem',
  `img_lado` varchar(80) NOT NULL COMMENT 'Imagem lado',
  `img_costa` varchar(80) NOT NULL COMMENT 'Imagem costa',
  `datahora` datetime NOT NULL COMMENT 'data e hora do registro YYYY-MM-DD HH:MM:SS',
  `cor` varchar(20) NOT NULL COMMENT 'Cor da roupa',
  `status` int(1) NOT NULL COMMENT '1 - ativo; 0 - inativo',
  `categoria` varchar(30) NOT NULL,
  `destaque` int(1) NOT NULL,
  `valorantigo` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `descricao`, `genero`, `condicao`, `tamanho`, `preco`, `promocao`, `desc_promocao`, `novidade`, `img`, `img_lado`, `img_costa`, `datahora`, `cor`, `status`, `categoria`, `destaque`, `valorantigo`) VALUES
(7, 'Camiseta rosa', 'Camiseta de manga curta rosa, com o pano de algodão, usada mas muito bem conservada                  ', 'Feminino', 'Usado', 'P', '20.00', 1, 3, 0, 'femi_sup_pink.jpeg', 'femi_sup_pink.jpeg', 'femi_sup_pink.jpeg', '2022-12-05 06:23:53', 'Rosa', 1, 'Feminino-sup', 0, NULL),
(8, 'Moletom de panda', '                        ', 'Infantil', 'Nova', 'P', '25.00', 1, 10, 0, 'fem_sup_moletom.jpeg', 'fem_sup_moletom.jpeg', 'fem_sup_moletom.jpeg', '2022-12-07 01:32:57', 'Azul', 1, 'Infantil-sup', 1, '15.00'),
(9, 'Camiseta lilás', 'Camiseta lilás, com o tecido franelado, podendo ter a possibilidade de diversas amarrações, para você montar seu próprio estilo.                      ', 'Feminino', 'Seminovo', 'G', '15.00', 1, 5, 0, 'fem_sup_lilas.jpeg', 'fem_sup_lilas.jpeg', 'fem_sup_lilas.jpeg', '2022-12-05 06:38:53', 'Lílas', 1, 'Feminino-sup', 1, NULL),
(10, 'Cropped Florida', 'Cropped azul, com Florida estampado, pano macio e bem conservado', 'Feminino', 'Usado', 'PP', '10.00', 1, 10, 0, 'fem_sup_azul_florida.jpeg', 'fem_sup_azul_florida.jpeg', 'fem_sup_azul_florida.jpeg', '2022-12-06 02:35:38', 'Azul', 1, 'Feminino-sup', 0, NULL),
(11, 'Cropped Verda', 'Cropped  liso, verde, franelado, ótimo como uma peça coringa.                  ', 'Feminino', 'Nova', 'P', '12.00', 0, 0, 0, 'fem_sup_azul.jpeg', 'fem_sup_azul.jpeg', 'fem_sup_azul.jpeg', '2022-12-06 02:40:22', 'Verde', 1, 'Feminino-sup', 1, NULL),
(12, 'Blusa de gatos', 'Blusa de mangas, da cor roxa com detalhes de gatos em preto.        ', 'Feminino', 'Nova', 'GG', '9.00', 1, 5, 0, 'f8.jpg', 'f8.jpg', 'f8.jpg', '2022-12-06 02:41:57', 'Roxa', 1, 'Feminino-sup', 0, NULL),
(13, 'Cropped branco de mangas', 'Cropped branco de mangas, pano de algodão com detalhes pretos                 ', 'Feminino', 'Seminovo', 'P', '15.00', 0, 0, 0, 'fem_sup_manga_bran.jpeg', 'fem_sup_manga_bran.jpeg', 'fem_sup_manga_bran.jpeg', '2022-12-06 02:44:13', 'Branca', 1, 'Feminino-sup', 0, NULL),
(14, 'Cropped branco bufante ', 'Cropped branco, pano de algodão com mangas bufantes                    ', 'Feminino', 'Nova', 'M', '19.00', 1, 9, 0, 'fem_sup_tomara.jpeg', 'fem_sup_tomara.jpeg', 'fem_sup_tomara.jpeg', '2022-12-06 02:55:50', 'Branco', 1, 'Feminino-sup', 0, NULL),
(15, 'Saia Marrom', '       Saia marrom, com tecido leve de lagodão                 ', 'Feminino', 'Nova', 'M', '20.00', 0, 0, 0, 'fem_inf_saia_marrom.jpeg', 'fem_inf_saia_marrom.jpeg', 'fem_inf_saia_marrom.jpeg', '2022-12-06 03:42:56', 'Marrom', 1, 'Feminino-inf', 0, NULL),
(16, 'Short Branco', 'Short Branco de algodão                         ', 'Feminino', 'Nova', 'M', '22.00', 1, 5, 0, 'fem_inf_short_branco.jpeg', 'fem_inf_short_branco.jpeg', 'fem_inf_short_branco.jpeg', '2022-12-06 03:45:47', 'Branco', 1, 'Feminino-inf', 0, NULL),
(17, 'Saia Branca ', '                 Saia Branca, super bem conservada e com movimento       ', 'Feminino', 'Nova', 'M', '25.00', 1, 10, 0, 'fem_inf_saia_branca.jpeg', 'fem_inf_saia_branca.jpeg', 'fem_inf_saia_branca.jpeg', '2022-12-06 03:54:00', 'Branca', 1, 'Feminino-inf', 1, NULL),
(18, 'Calça Branca', 'Produzida em um tecido leve e macio, a calça branca foi criada especialmente para aqueles que não abrem mão do conforto em seu dia a dia.\r\n\r\nA malha conta com caimento perfeito no corpo, garantindo todo o bem-estar que você merece mesmo nos dias mais quentes.\r\n\r\nEla é perfeita para quem tem um estil', 'Feminino', 'Nova', 'G', '30.00', 1, 5, 0, 'fem_inf_calca_branca.jpeg', 'fem_inf_calca_branca.jpeg', 'fem_inf_calca_branca.jpeg', '2022-12-06 04:02:08', 'Branca', 1, 'Feminino-inf', 1, NULL),
(19, 'Saia verde', 'Saia  verde, com bolso falso e botões, com tecido de algodão                        ', 'Feminino', 'Usado', 'P', '30.00', 0, 0, 0, 'fem_inf_saia_verde.jpeg', 'fem_inf_saia_verde.jpeg', 'fem_inf_saia_verde.jpeg', '2022-12-06 04:06:44', 'Verde', 1, 'Feminino-inf', 1, NULL),
(20, 'Camiseta praiana', '       Camiseta praiana básica.              ', 'Masculino', 'Seminovo', 'm', '20.00', 0, 0, 0, 'f2.jpg', 'f2.jpg', 'f2.jpg', '2022-12-07 01:34:39', 'Verder', 1, 'Masculino-sup', 1, NULL),
(21, 'Camiseta praiana', 'camiseta praiana básica.', 'Masculino', 'Seminovo', 'p', '20.00', 0, 0, 1, 'f3.jpg', 'f3.jpg', 'f3.jpg', '2022-12-07 01:37:08', 'Vermelha', 1, 'Masculino-sup', 1, NULL),
(22, 'Camiseta praiana', 'Camiseta praiana básica.', 'Masculino', 'Usado', 'P', '20.00', 0, 0, 0, 'f4.jpg', 'f4.jpg', 'f4.jpg', '2022-12-07 01:40:24', 'Branca', 1, 'Masculino-sup', 0, NULL),
(23, 'Camiseta praiana', 'Camiseta praiana básica.', 'Masculino', 'Seminovo', 'g', '25.00', 0, 0, 0, 'f5.jpg', 'f5.jpg', 'f5.jpg', '2022-12-07 01:43:17', 'Azul escuro', 1, 'Masculino-sup', 0, NULL),
(24, 'Camisa c/ botões', 'Camiseta modelo duas cores mini bolso c/ botões', 'Masculino', 'Nova', 'm', '30.00', 0, 0, 0, 'f6.jpg', 'f6.jpg', 'f6.jpg', '2022-12-07 01:46:56', 'Bege/Azul', 1, 'Masculino-sup', 0, NULL),
(25, 'Calça florada', 'Calça feminina cinza florada.  ', 'Feminino', 'Usado', 'g', '15.00', 0, 0, 1, 'f7.jpg', 'f7.jpg', 'f7.jpg', '2022-12-07 01:49:48', 'Cinza', 1, 'Feminino-inf', 0, NULL),
(26, 'Saia preta pontos brancos', 'Saia preta usada com pontos brancos feminina', 'Feminino', 'Seminovo', 'm', '30.00', 1, 24, 0, 'fem_inf_saia_bolinha.jpeg', 'fem_inf_saia_bolinha.jpeg', 'fem_inf_saia_bolinha.jpeg', '2022-12-07 01:54:24', 'Preta', 1, 'Feminino-inf', 0, NULL),
(27, 'Saia quadriculada', 'Saia com mini quadrados infantil.', 'Infantil', 'Nova', 'p', '15.00', 0, 0, 0, 'fem_inf_saia_quadriculada.jpeg', 'fem_inf_saia_quadriculada.jpeg', 'fem_inf_saia_quadriculada.jpeg', '2022-12-07 01:58:28', 'Preto & Branco', 1, 'Infantil-inf', 0, NULL),
(28, 'Bermuda preta infantil', 'Bermuda preta infantil simples', 'Infantil', 'Nova', 'p', '35.00', 0, 0, 0, 'fem_inf_short_preto.jpeg', 'fem_inf_short_preto.jpeg', 'fem_inf_short_preto.jpeg', '2022-12-07 02:00:13', 'Preto', 1, 'Infantil-inf', 0, NULL),
(29, 'Calçado feminino velcro', 'Calçado feminino fofo dourado velcro.', 'Infantil', 'Usado', 'p', '23.00', 0, 0, 0, 'calcado-fem-infant.jpg', 'calcado-fem-infant.jpg', 'calcado-fem-infant.jpg', '2022-12-07 02:14:10', 'Dourado', 1, 'Infantil-cal', 0, NULL),
(30, 'Sapatilha delicada feminino infantil', 'Sapatilha delicada feminino infantil rosa      ', 'Infantil', 'Usado', 'p', '25.00', 0, 0, 1, 'calcado-fem-infant-2.jpg', 'calcado-fem-infant-2.jpg', 'calcado-fem-infant-2.jpg', '2022-12-07 02:16:04', 'Rosa', 1, 'Infantil-cal', 0, NULL),
(31, 'Tênis arco-íris', 'tênis arco-íris infantil feminino.', 'Infantil', 'Seminovo', 'p', '15.00', 1, 35, 0, 'calcado-fem-infant-3.jpg', 'calcado-fem-infant-3.jpg', 'calcado-fem-infant-3.jpg', '2022-12-07 02:18:46', 'Rosa', 1, 'Infantil-cal', 0, NULL),
(32, 'sapatilha arco-íris', 'sapatilha arco-íris infantil feminino', 'Infantil', 'Usado', 'p', '15.00', 1, 35, 1, 'calcado-fem-infant-4.jpg', 'calcado-fem-infant-4.jpg', 'calcado-fem-infant-4.jpg', '2022-12-07 02:21:51', 'Branca', 1, 'Infantil-cal', 0, NULL),
(33, 'Tênis urso feminino', 'Tênis urso feminino velcro', 'Infantil', 'Nova', 'p', '25.00', 0, 0, 1, 'calcado-fem-infant-5.jpg', 'calcado-fem-infant-5.jpg', 'calcado-fem-infant-5.jpg', '2022-12-07 02:23:54', 'marrom/rosa', 1, 'Infantil-cal', 0, NULL),
(34, 'Tênis dinossauro masculino', 'Dinossauro infantil masculino', 'Infantil', 'Nova', 'p', '25.00', 0, 0, 0, 'calcado-masc-infant.jpg', 'calcado-masc-infant.jpg', 'calcado-masc-infant.jpg', '2022-12-07 02:26:02', 'Branco', 1, 'Infantil-cal', 0, NULL),
(35, 'Tênis verde masculino', 'Tênis verde masculino velcro.', 'Infantil', 'Seminovo', 'p', '25.00', 0, 0, 0, 'calcado-masc-infant-2.jpg', 'calcado-masc-infant-2.jpg', 'calcado-masc-infant-2.jpg', '2022-12-07 02:27:06', 'Verde', 1, 'Infantil-cal', 0, NULL),
(36, 'Tênis masculino azul', 'tênis masculino velcro azul escuro', 'Masculino', 'Nova', 'p', '25.00', 0, 0, 1, 'calcado-masc-infant-3.jpg', 'calcado-masc-infant-3.jpg', 'calcado-masc-infant-3.jpg', '2022-12-07 02:28:31', 'Azul escuro', 1, 'Infantil-cal', 0, NULL),
(37, 'Camiseta girl power', 'Camiseta girl power feminina infantil', 'Feminino', 'Nova', 'p', '25.00', 0, 0, 0, 'infant-sup-girlpower.jpg', 'infant-sup-girlpower.jpg', 'infant-sup-girlpower.jpg', '2022-12-07 02:36:57', 'branca', 1, 'Infantil-sup', 0, NULL),
(38, 'macacão masculino infantil', 'macacão masculino infantil urso.', 'Infantil', 'Nova', 'p', '35.00', 0, 0, 0, 'macacao-masc-infant.jpg', 'macacao-masc-infant.jpg', 'macacao-masc-infant.jpg', '2022-12-07 02:43:23', 'marrom', 1, 'Infantil-sup', 0, NULL),
(39, 'macacão infantil feminino', 'macacão infantil feminino arco-íris', 'Feminino', 'Nova', 'p', '35.00', 0, 0, 0, 'macacao-femin-infant.jpg', 'macacao-femin-infant.jpg', 'macacao-femin-infant.jpg', '2022-12-07 02:42:07', 'Azul/Branco', 1, 'Infantil-sup', 0, NULL),
(40, 'calça infantil dinossauro', 'calça infantil dinossauro masculino', 'Infantil', 'Usado', 'p', '15.00', 0, 0, 0, 'calca-infantil-masc.jpg', 'calca-infantil-masc.jpg', 'calca-infantil-masc.jpg', '2022-12-07 02:48:45', 'Verde', 1, 'Infantil-inf', 0, NULL),
(41, 'Calça masculina moletom', 'calça moletom masculina cinza', 'Masculino', 'Seminovo', 'p', '20.00', 0, 0, 0, 'calca-masc-infant-moletom.jpg', 'calca-masc-infant-moletom.jpg', 'calca-masc-infant-moletom.jpg', '2022-12-07 02:50:44', 'Cinza', 1, 'Infantil-inf', 0, NULL),
(42, 'calça moletom masculina', 'calça moletom masculina básica.', 'Masculino', 'Usado', 'p', '45.00', 0, 0, 0, 'calca-moletom2.jpg', 'calca-moletom2.jpg', 'calca-moletom2.jpg', '2022-12-07 02:55:12', 'cinza', 1, 'Masculino-inf', 0, NULL),
(43, 'Bota masculino', 'bota masculina preta ', 'Masculino', 'Nova', '39', '50.00', 0, 0, 0, 'bota-masc.jpg', 'bota-masc.jpg', 'bota-masc.jpg', '2022-12-07 02:56:34', 'Preta', 1, 'Masculino-cal', 0, NULL),
(44, 'Calça cargo bege', 'Calça cargo bege', 'Masculino', 'Nova', 'g', '35.00', 0, 0, 0, 'calca-cargo.jpg', 'calca-cargo.jpg', 'calca-cargo.jpg', '2022-12-07 02:58:58', 'Bege', 1, 'Masculino-inf', 0, NULL),
(45, 'Bermuda vários bolsos', 'Bermuda vários bolsos masculino preta', 'Masculino', 'Nova', 'p', '45.00', 0, 0, 1, 'bermuda-masc.jpg', 'bermuda-masc.jpg', 'bermuda-masc.jpg', '2022-12-07 03:00:44', 'Preta', 1, 'Masculino-inf', 1, NULL),
(46, 'Tênis preto', 'tênis preto \"adaption\" seminovo', 'Masculino', 'Seminovo', '38', '55.00', 0, 0, 0, 'tenis-masc.jpg', 'tenis-masc.jpg', 'tenis-masc.jpg', '2022-12-07 03:04:46', 'Preto', 1, 'Masculino-cal', 0, NULL),
(47, 'Sapatilha azul feminina', 'Sapatilha azul feminina nova.        ', 'Feminino', 'Nova', '41', '35.00', 0, 0, 1, 'calcado-femi.jpg', 'calcado-femi.jpg', 'calcado-femi.jpg', '2022-12-07 03:08:19', 'Azul', 1, 'Feminino-cal', 0, NULL),
(48, 'sapatilha feminina ', 'Sapatilha feminina usado', 'Infantil', 'Usado', '35', '20.00', 0, 0, 0, 'sapatilha-fem.jpg', 'sapatilha-fem.jpg', 'sapatilha-fem.jpg', '2022-12-07 03:09:53', 'Rosa', 1, 'Feminino-cal', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `submenu`
--

CREATE TABLE `submenu` (
  `id` int(12) NOT NULL,
  `idmenu` int(12) NOT NULL,
  `nomesub` varchar(100) DEFAULT NULL COMMENT 'nome do link',
  `urlsub` varchar(300) DEFAULT NULL COMMENT 'url da pagina destino',
  `datahora` datetime DEFAULT NULL COMMENT 'data e hora da criacao da pagina',
  `status` int(1) DEFAULT NULL COMMENT '0 INATIVO; 1 ATIVO;'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id_cadastro` (`id_cadastro`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`),
  ADD KEY `id` (`id`),
  ADD KEY `email` (`email`);

--
-- Índices para tabela `cartao`
--
ALTER TABLE `cartao`
  ADD PRIMARY KEY (`id_cartao`);

--
-- Índices para tabela `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `email` (`email`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmenu` (`idmenu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id_cadastro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cartao`
--
ALTER TABLE `cartao`
  MODIFY `id_cartao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `submenu`
--
ALTER TABLE `submenu`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `carrinho_ibfk_1` FOREIGN KEY (`id`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `carrinho_ibfk_2` FOREIGN KEY (`email`) REFERENCES `cadastro` (`email`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cadastro` (`email`);

--
-- Limitadores para a tabela `submenu`
--
ALTER TABLE `submenu`
  ADD CONSTRAINT `submenu_ibfk_1` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
