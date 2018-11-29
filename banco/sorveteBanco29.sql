-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 04:34
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorvete`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sorvete`
--

CREATE TABLE `sorvete` (
  `nomeSor` varchar(25) DEFAULT NULL,
  `sabor` varchar(100) DEFAULT NULL,
  `quantidade` bigint(25) DEFAULT NULL,
  `validade` year(4) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `dt_ent_es` year(4) DEFAULT NULL,
  `for_cnpj` varchar(25) DEFAULT NULL,
  `user_cpf` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `sorvete`
--

INSERT INTO `sorvete` (`nomeSor`, `sabor`, `quantidade`, `validade`, `id`, `dt_ent_es`, `for_cnpj`, `user_cpf`) VALUES
('MaracujÃ¡', 'Maracuja', 20, 2020, 30, 2018, ' 163614', '10848256948'),
('Uva', 'Uva', 35, 2019, 33, 2018, ' 315334', '13896952789'),
('Marta Rocha', 'MaracujÃ¡ e Leite Condensado', 40, 2020, 34, 2019, ' 315334', '10848256948'),
('Menta', 'menta', 20, 2019, 35, 2016, ' 163614', '10848256948'),
('Flocos', 'Baunilha com Chocolate', 30, 2021, 36, 2018, ' 163614', '10848256948'),
('Morango', 'Morango', 25, 2019, 37, 2017, ' 163614', '10848256948');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sorvete`
--
ALTER TABLE `sorvete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `for_cnpj` (`for_cnpj`),
  ADD KEY `user_cpf` (`user_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sorvete`
--
ALTER TABLE `sorvete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `sorvete`
--
ALTER TABLE `sorvete`
  ADD CONSTRAINT `sorvete_ibfk_1` FOREIGN KEY (`for_cnpj`) REFERENCES `fornecedor` (`cnpj`),
  ADD CONSTRAINT `sorvete_ibfk_2` FOREIGN KEY (`user_cpf`) REFERENCES `usuario` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
