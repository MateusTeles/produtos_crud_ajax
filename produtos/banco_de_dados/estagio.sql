-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2016 at 07:27 AM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estagio`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `descricao`, `preco`) VALUES
(1, 'Bola de Futebol', 4, 'Bola de Futebol Oficial', '200.00'),
(3, 'Xbox One', 5, 'Xbox One Novinho em Folha', '1499.00'),
(5, 'TelevisÃ£o 32 Polegadas', 5, 'Tv Full HD', '1390.00'),
(7, 'Teclado', 4, 'Um teclado apenas', '45.00'),
(8, 'Pc Gamer', 2, 'Pc para jogos muito forte', '5000.00'),
(9, 'Camisa do Corinthians', 45, 'Camisa Oficial do Corinthians', '200.00'),
(11, 'Bola de Gude', 10, 'Bolinha de gude para crianÃ§as', '4.00'),
(12, 'Asus Zenfone 2', 4, 'Celular 4g', '1200.00'),
(13, 'Impressora Hp', 5, 'Impressora Jato de Tinta', '400.00'),
(16, 'Notebook i5', 5, 'Notebook i5 4 gigas de memÃ³ria', '2000.00'),
(17, 'FIFA 17', 20, 'Novo FIFA 17 da EA Sports', '199.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
