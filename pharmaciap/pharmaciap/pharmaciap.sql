-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22-Jun-2019 às 00:31
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmaciap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_tb`
--

CREATE TABLE `produtos_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` text NOT NULL,
  `nome_imagem` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `categoria_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos_tb`
--

INSERT INTO `produtos_tb` (`id`, `nome`, `preco`, `nome_imagem`, `data_cadastro`, `categoria_id`, `usuario_id`, `status`) VALUES
(35, 'Earth Spirit', 'Aprofundado nos penhascos dos planaltos, há um leito de jade sagrado que foi ignorado por muito tempo pelos escavadores das terras altas. Deste material raro, a aparência do grandioso general Kaolin foi esculpida e enterrada em cima de um exército de dez mil homens de pedra – uma força de soldados e sagrados homens, zombadores e acrobatas, todos feitos por artesãos e sepultados há milênios nos confins sombrios da Terra. O que os artesãos não sabiam é que no estranho leito de jade fluía o espírito da Terra – uma força elemental uníssona com o planeta. Quando a força de dentro da jade esculpida encontrou-se desprendida do sangue da vida do mundo, ela reuniu as suas forças ao longo de mil anos e escavou até finalmente libertar-se e banhar-se na luz. Agora o grande Kaolin anda a passos largos nas estradas dos planaltos, lutando pelo espírito da Terra; e em tempos de necessidade invoca resquícios do seu exército sepultado ainda presos no amor do solo.	\r\n', 'earth-spirit.jpg', '2018-09-04 18:16:37', 1, 1, 1),
(59, 'paracetamol', '12', '', '2019-06-21 18:20:15', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nivel` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id`, `nome`, `email`, `matricula`, `senha`, `data_cadastro`, `nivel`, `status`) VALUES
(16, 'j', 'j', 'j', '363b122c528f54df4a0446b6bab05515', '2019-06-21 22:27:40', 1, 1),
(17, 'j', 'j', 't', '363b122c528f54df4a0446b6bab05515', '2019-06-21 22:27:52', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos_tb`
--
ALTER TABLE `produtos_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos_tb`
--
ALTER TABLE `produtos_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
