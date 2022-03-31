-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2022 às 22:30
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testrgb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbd_conteudo`
--

CREATE TABLE `tbd_conteudo` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `tbd_conteudo`
--

INSERT INTO `tbd_conteudo` (`id`, `descricao`, `img`) VALUES
(1, 'Lorem ipsum dolor 1', 'imagens/img1.jpg'),
(2, 'Lorem ipsum dolor 2', 'imagens/img2.jpg'),
(3, 'Lorem ipsum dolor 3', 'imagens/img3.jpg'),
(4, 'Lorem ipsum dolor 4', 'imagens/img4.jpg'),
(5, 'Lorem ipsum dolor 5', 'imagens/img5.jpg'),
(6, 'Lorem ipsum dolor 6', 'imagens/img6.jpg'),
(7, 'Lorem ipsum dolor 7', 'imagens/img7.jpg'),
(8, 'Lorem ipsum dolor 8', 'imagens/img8.jpg'),
(9, 'Lorem ipsum dolor 9', 'imagens/img9.jpg'),
(10, 'Lorem ipsum dolor 10', 'imagens/img10.jpg'),
(11, 'Lorem ipsum dolor 11', 'imagens/img11.jpg'),
(12, 'Lorem ipsum dolor 12', 'imagens/img12.jpg'),
(13, 'Lorem ipsum dolor 13', 'imagens/img13.jpg'),
(14, 'Lorem ipsum dolor 14', 'imagens/img14.jpg'),
(15, 'Lorem ipsum dolor 15', 'imagens/img15.jpg'),
(16, 'Lorem ipsum dolor 16', 'imagens/img16.jpg'),
(17, 'Lorem ipsum dolor 17', 'imagens/img17.jpg'),
(18, 'Lorem ipsum dolor 18', 'imagens/img18.jpg'),
(19, 'Lorem ipsum dolor 19', 'imagens/img19.jpg'),
(20, 'Lorem ipsum dolor 20', 'imagens/img20.jpg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbd_conteudo`
--
ALTER TABLE `tbd_conteudo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbd_conteudo`
--
ALTER TABLE `tbd_conteudo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
