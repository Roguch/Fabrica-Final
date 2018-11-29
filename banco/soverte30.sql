-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Nov-2018 às 02:14
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Estrutura da tabela `controle`
--

CREATE TABLE `controle` (
  `user_cpf` varchar(25) DEFAULT NULL,
  `idSor` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `descricao` varchar(50) DEFAULT NULL,
  `quantidade` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `nome` varchar(15) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `telefone` int(15) DEFAULT NULL,
  `cnpj` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`nome`, `email`, `telefone`, `cnpj`) VALUES
('Kibon', 'kibon.bon@gmail.com', 388427531, ' 163614'),
('Chiquinho ', 'chiqu.sorv@gmail.com', 379579472, ' 2542727'),
('Paviloche', 'pavivi@gmail.com', 2147483647, ' 315334'),
('JundiÃ¡', 'jundia.sor@gmail.com', 468273482, ' 3515151'),
('Freddo', 'freedo@gmail.com', 839273929, ' 366243'),
('Ice Mellow', 'immell@gmail.com', 2147483647, ' 5318571');

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
('Uva', 'Uva', 38, 2019, 33, 2018, ' 315334', '13896952789'),
('Marta Rocha', 'MaracujÃ¡ e Leite Condensado', 40, 2020, 34, 2019, ' 315334', '10848256948');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_user`
--

CREATE TABLE `tipo_user` (
  `id_tip_user` int(5) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_user`
--

INSERT INTO `tipo_user` (`id_tip_user`, `descricao`) VALUES
(0, 'gerente'),
(1, 'funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(80) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `telefone` varchar(25) DEFAULT NULL,
  `nome` varchar(15) DEFAULT NULL,
  `cpf` varchar(25) NOT NULL,
  `tip_user_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `login`, `senha`, `telefone`, `nome`, `cpf`, `tip_user_id`) VALUES
('leobonito@gmail.com', 'leosinho', '12345678', '4799672637', 'Leosinho', '01389767152', 1),
('test@gmail.com', 'marcos', '12345678', '34662501', 'Marcos', '10848256948', 0),
('test03@gmail.com', 'dabyboy', 'qwe123456', '34662506', 'Daniel', '10848256991', 1),
('androne@gmail.com', 'androne', '12345678', '5372890561', 'Andre', '1389274619', 1),
('taina@gmail.com', 'tainazinha', '123456789', '4789076527', 'Taina', '13896952789', 0),
('andrefernandes1885@gmail.com', 'andre', '123456789', '4789638253', 'AndrÃ©', '39791396196', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `controle`
--
ALTER TABLE `controle`
  ADD KEY `user_cpf` (`user_cpf`),
  ADD KEY `idSor` (`idSor`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`cnpj`);

--
-- Indexes for table `sorvete`
--
ALTER TABLE `sorvete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `for_cnpj` (`for_cnpj`),
  ADD KEY `user_cpf` (`user_cpf`);

--
-- Indexes for table `tipo_user`
--
ALTER TABLE `tipo_user`
  ADD PRIMARY KEY (`id_tip_user`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `tip_user_id` (`tip_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sorvete`
--
ALTER TABLE `sorvete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `controle`
--
ALTER TABLE `controle`
  ADD CONSTRAINT `controle_ibfk_1` FOREIGN KEY (`user_cpf`) REFERENCES `usuario` (`cpf`),
  ADD CONSTRAINT `controle_ibfk_2` FOREIGN KEY (`idSor`) REFERENCES `sorvete` (`id`);

--
-- Limitadores para a tabela `sorvete`
--
ALTER TABLE `sorvete`
  ADD CONSTRAINT `sorvete_ibfk_1` FOREIGN KEY (`for_cnpj`) REFERENCES `fornecedor` (`cnpj`),
  ADD CONSTRAINT `sorvete_ibfk_2` FOREIGN KEY (`user_cpf`) REFERENCES `usuario` (`cpf`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tip_user_id`) REFERENCES `tipo_user` (`id_tip_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
