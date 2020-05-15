-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 28/06/2019 às 14h47min
-- Versão do Servidor: 5.5.19
-- Versão do PHP: 5.4.0RC4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `starpet`
--
CREATE DATABASE `starpet1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `starpet`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`idadmin`, `nome`, `endereco`, `email`, `sexo`, `login`, `senha`) VALUES
(1, 'Rafael Leonan', 'Vila Velha ', 'Rafa@gmail.com', 'masculino', 'login', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaconsulta`
--

CREATE TABLE IF NOT EXISTS `categoriaconsulta` (
  `idcategoriaconsulta` int(11) NOT NULL AUTO_INCREMENT,
  `descricaol` varchar(45) NOT NULL,
  PRIMARY KEY (`idcategoriaconsulta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categoriaconsulta`
--

INSERT INTO `categoriaconsulta` (`idcategoriaconsulta`, `descricaol`) VALUES
(1, 'banho e tosa'),
(2, 'revisão geral'),
(3, 'cirurgia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriaproduto`
--

CREATE TABLE IF NOT EXISTS `categoriaproduto` (
  `idcategoriaproduto` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`idcategoriaproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categoriaproduto`
--

INSERT INTO `categoriaproduto` (`idcategoriaproduto`, `descricao`) VALUES
(1, 'higine'),
(2, 'ração'),
(3, 'saúde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoriavenda`
--

CREATE TABLE IF NOT EXISTS `categoriavenda` (
  `idcategoriavenda` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  PRIMARY KEY (`idcategoriavenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `categoriavenda`
--

INSERT INTO `categoriavenda` (`idcategoriavenda`, `descricao`) VALUES
(1, 'a dinheiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `catfornecedor`
--

CREATE TABLE IF NOT EXISTS `catfornecedor` (
  `idCatfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(100) NOT NULL,
  PRIMARY KEY (`idCatfornecedor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `catfornecedor`
--

INSERT INTO `catfornecedor` (`idCatfornecedor`, `descricao`) VALUES
(1, 'higiene'),
(2, 'ração'),
(3, 'saúde');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `imagem` varchar(145) DEFAULT NULL,
  `cpf` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nome`, `endereco`, `email`, `senha`, `imagem`, `cpf`, `cep`, `telefone`) VALUES
(1, 'nathan junior', 'pk pkpkpkpkpkp', 'nat@gmail.com', 'senha333', NULL, '123.123.123-00', '1234-987', '(85) 9 8899-7878');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idcomentario` int(11) NOT NULL AUTO_INCREMENT,
  `corpo` varchar(145) NOT NULL,
  `validado` tinyint(1) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `data` date NOT NULL,
  `avaliacao` int(11) NOT NULL,
  PRIMARY KEY (`idcomentario`),
  KEY `fk_comentario_cliente1_idx` (`cliente_idcliente`),
  KEY `fk_comentario_produto1_idx` (`produto_idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`idcomentario`, `corpo`, `validado`, `cliente_idcliente`, `produto_idproduto`, `data`, `avaliacao`) VALUES
(1, 'yuyu', 1, 1, 1, '2019-06-28', 5),
(2, 'trr', 1, 1, 1, '2019-06-28', 5),
(3, 'rtr', 1, 1, 1, '2019-06-28', 5),
(4, '76765', 1, 1, 1, '2019-06-28', 5),
(5, '656', 1, 1, 1, '2019-06-28', 5),
(6, 'trtrtrt', 1, 1, 2, '2019-06-28', 5),
(7, 't676', 1, 1, 2, '2019-06-28', 5),
(8, 'trtr', 1, 1, 2, '2019-06-28', 5),
(9, 'tytty', 1, 1, 2, '2019-06-28', 5),
(10, 'gklkglhg', 1, 1, 2, '2019-06-28', 5),
(11, 'digite', 1, 1, 2, '2019-06-28', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `idCompra` int(11) NOT NULL AUTO_INCREMENT,
  `Compracol` varchar(45) DEFAULT NULL,
  `fornecedor_idfornecedor` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  PRIMARY KEY (`idCompra`),
  KEY `fk_Compra_fornecedor1_idx` (`fornecedor_idfornecedor`),
  KEY `fk_Compra_produto1_idx` (`produto_idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `idconsulta` int(11) NOT NULL AUTO_INCREMENT,
  `dta_consulta` varchar(45) NOT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  `veterinario_idveterinario` int(11) NOT NULL,
  `categoriaconsulta_idcategoriaconsulta` int(11) NOT NULL,
  `horario` varchar(45) NOT NULL,
  `pet_idpet` int(11) NOT NULL,
  PRIMARY KEY (`idconsulta`),
  KEY `fk_consulta_cliente_idx` (`cliente_idcliente`),
  KEY `fk_consulta_veterinario1_idx` (`veterinario_idveterinario`),
  KEY `fk_consulta_categoriaconsulta1_idx` (`categoriaconsulta_idcategoriaconsulta`),
  KEY `fk_consulta_pet1_idx` (`pet_idpet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `consulta`
--

INSERT INTO `consulta` (`idconsulta`, `dta_consulta`, `cliente_idcliente`, `veterinario_idveterinario`, `categoriaconsulta_idcategoriaconsulta`, `horario`, `pet_idpet`) VALUES
(1, '2019-06-30', 1, 2, 2, '20:18', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `des_notasaida`
--

CREATE TABLE IF NOT EXISTS `des_notasaida` (
  `iddes_notasaida` int(11) NOT NULL AUTO_INCREMENT,
  `produto_idproduto` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  PRIMARY KEY (`iddes_notasaida`),
  KEY `fk_des_notasaida_produto1_idx` (`produto_idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `des_notasaida`
--

INSERT INTO `des_notasaida` (`iddes_notasaida`, `produto_idproduto`, `qtd`) VALUES
(1, 1, 10),
(2, 2, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `desc_venda`
--

CREATE TABLE IF NOT EXISTS `desc_venda` (
  `iddesc_venda` int(11) NOT NULL AUTO_INCREMENT,
  `qtd` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  `venda_idvenda` int(11) NOT NULL,
  PRIMARY KEY (`iddesc_venda`),
  KEY `fk_desc_venda_produto1_idx` (`produto_idproduto`),
  KEY `fk_desc_venda_venda1_idx` (`venda_idvenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `desc_venda`
--

INSERT INTO `desc_venda` (`iddesc_venda`, `qtd`, `produto_idproduto`, `venda_idvenda`) VALUES
(1, 10, 1, 1),
(2, 12, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE IF NOT EXISTS `estoque` (
  `idestoque` int(11) NOT NULL AUTO_INCREMENT,
  `qtd` int(11) NOT NULL,
  `produto_idproduto` int(11) NOT NULL,
  PRIMARY KEY (`idestoque`,`produto_idproduto`),
  KEY `fk_estoque_produto1_idx` (`produto_idproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`idestoque`, `qtd`, `produto_idproduto`) VALUES
(1, 150, 1),
(2, 150, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idfornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(150) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `Catfornecedor_idCatfornecedor` int(11) NOT NULL,
  `end` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(145) NOT NULL,
  PRIMARY KEY (`idfornecedor`),
  KEY `fk_fornecedor_Catfornecedor1_idx` (`Catfornecedor_idCatfornecedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nfentrada`
--

CREATE TABLE IF NOT EXISTS `nfentrada` (
  `idNFentrada` int(11) NOT NULL AUTO_INCREMENT,
  `Compra_idCompra` int(11) NOT NULL,
  `valor_uni` float NOT NULL,
  `valor_total` varchar(45) NOT NULL,
  `dta_entrega` date NOT NULL,
  PRIMARY KEY (`idNFentrada`),
  KEY `fk_NFentrada_Compra1_idx` (`Compra_idCompra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_saida`
--

CREATE TABLE IF NOT EXISTS `nota_saida` (
  `idNOTA_SAIDA` int(11) NOT NULL AUTO_INCREMENT,
  `venda_idvenda` int(11) NOT NULL,
  `dta` date NOT NULL,
  `des_notasaida_iddes_notasaida` int(11) NOT NULL,
  PRIMARY KEY (`idNOTA_SAIDA`),
  KEY `fk_NOTA_SAIDA_venda1_idx` (`venda_idvenda`),
  KEY `fk_NOTA_SAIDA_des_notasaida1_idx` (`des_notasaida_iddes_notasaida`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `nota_saida`
--

INSERT INTO `nota_saida` (`idNOTA_SAIDA`, `venda_idvenda`, `dta`, `des_notasaida_iddes_notasaida`) VALUES
(1, 1, '2019-06-28', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE IF NOT EXISTS `pet` (
  `idpet` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `peso` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `info_add` varchar(45) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  PRIMARY KEY (`idpet`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `pet`
--

INSERT INTO `pet` (`idpet`, `nome`, `raca`, `peso`, `idade`, `info_add`, `sexo`) VALUES
(1, 'pet yy', 'raca boa', '85', '13', '', 'fêmea');

-- --------------------------------------------------------

--
-- Estrutura da tabela `petfavorito`
--

CREATE TABLE IF NOT EXISTS `petfavorito` (
  `idpetfavorito` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `raca` varchar(45) NOT NULL,
  `peso` varchar(45) NOT NULL,
  `idade` int(11) NOT NULL,
  `info_add` varchar(45) NOT NULL,
  `fotopet` varchar(45) DEFAULT NULL,
  `cliente_idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idpetfavorito`),
  KEY `fk_petfavorito_cliente1_idx` (`cliente_idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `petfavorito`
--

INSERT INTO `petfavorito` (`idpetfavorito`, `nome`, `raca`, `peso`, `idade`, `info_add`, `fotopet`, `cliente_idcliente`) VALUES
(1, 'nathan junior pet', 'Raca', '12 Kg', 12, 'melhor pet', NULL, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `info_aditiva` varchar(300) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `categoriaproduto_idcategoriaproduto` int(11) NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`idproduto`,`categoriaproduto_idcategoriaproduto`),
  KEY `fk_produto_categoriaproduto1_idx` (`categoriaproduto_idcategoriaproduto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `nome`, `info_aditiva`, `descricao`, `imagem`, `categoriaproduto_idcategoriaproduto`, `valor`) VALUES
(1, 'anti pulgas', 'mata todas as pulgas do seu pet', '35 ml de muito prazer para o seu pet', '5d1602a82c461.jpg', 3, 12),
(2, 'banho a seco', 'compre isso e o banho de seu pet vai ficar show', 'descriicao,descriicaodescriicaodescriicaodescriicaodescriicaodescriicaodescriicao', '5d16030608340.jpg', 1, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `idvenda` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_idcliente` int(11) NOT NULL,
  `categoriavenda_idcategoriavenda` int(11) NOT NULL,
  `tot_recebido` double NOT NULL,
  `data` varchar(45) NOT NULL,
  PRIMARY KEY (`idvenda`),
  KEY `fk_venda_cliente1_idx` (`cliente_idcliente`),
  KEY `fk_venda_categoriavenda1_idx` (`categoriavenda_idcategoriavenda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`idvenda`, `cliente_idcliente`, `categoriavenda_idcategoriavenda`, `tot_recebido`, `data`) VALUES
(1, 1, 1, 100, '28/06/2019');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario`
--

CREATE TABLE IF NOT EXISTS `veterinario` (
  `idveterinario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `imagem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idveterinario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `veterinario`
--

INSERT INTO `veterinario` (`idveterinario`, `nome`, `endereco`, `email`, `login`, `senha`, `telefone`, `imagem`) VALUES
(1, 'Ricardo Alburquerque', 'bem ali', 'email@gmail.com', 'loginmassa', 'senhashowpraroubar', '87878798989', NULL),
(2, 'Carlos Elmen', 'bezerra de menezes', 'elme@gmail.com', 'login888', 'senha333', '(85) 9 8899-7878', NULL);

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `fk_comentario_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comentario_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Compra_fornecedor1` FOREIGN KEY (`fornecedor_idfornecedor`) REFERENCES `fornecedor` (`idfornecedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Compra_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `fk_consulta_cliente` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_consulta_veterinario1` FOREIGN KEY (`veterinario_idveterinario`) REFERENCES `veterinario` (`idveterinario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_consulta_categoriaconsulta1` FOREIGN KEY (`categoriaconsulta_idcategoriaconsulta`) REFERENCES `categoriaconsulta` (`idcategoriaconsulta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_consulta_pet1` FOREIGN KEY (`pet_idpet`) REFERENCES `pet` (`idpet`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `des_notasaida`
--
ALTER TABLE `des_notasaida`
  ADD CONSTRAINT `fk_des_notasaida_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `desc_venda`
--
ALTER TABLE `desc_venda`
  ADD CONSTRAINT `fk_desc_venda_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_desc_venda_venda1` FOREIGN KEY (`venda_idvenda`) REFERENCES `venda` (`idvenda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `estoque`
--
ALTER TABLE `estoque`
  ADD CONSTRAINT `fk_estoque_produto1` FOREIGN KEY (`produto_idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD CONSTRAINT `fk_fornecedor_Catfornecedor1` FOREIGN KEY (`Catfornecedor_idCatfornecedor`) REFERENCES `catfornecedor` (`idCatfornecedor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `nfentrada`
--
ALTER TABLE `nfentrada`
  ADD CONSTRAINT `fk_NFentrada_Compra1` FOREIGN KEY (`Compra_idCompra`) REFERENCES `compra` (`idCompra`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `nota_saida`
--
ALTER TABLE `nota_saida`
  ADD CONSTRAINT `fk_NOTA_SAIDA_venda1` FOREIGN KEY (`venda_idvenda`) REFERENCES `venda` (`idvenda`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_NOTA_SAIDA_des_notasaida1` FOREIGN KEY (`des_notasaida_iddes_notasaida`) REFERENCES `des_notasaida` (`iddes_notasaida`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `petfavorito`
--
ALTER TABLE `petfavorito`
  ADD CONSTRAINT `fk_petfavorito_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_categoriaproduto1` FOREIGN KEY (`categoriaproduto_idcategoriaproduto`) REFERENCES `categoriaproduto` (`idcategoriaproduto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `fk_venda_cliente1` FOREIGN KEY (`cliente_idcliente`) REFERENCES `cliente` (`idcliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_venda_categoriavenda1` FOREIGN KEY (`categoriavenda_idcategoriavenda`) REFERENCES `categoriavenda` (`idcategoriavenda`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
