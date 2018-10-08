-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.35-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para onclickphptest
CREATE DATABASE IF NOT EXISTS `onclickphptest` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `onclickphptest`;

-- Copiando estrutura para tabela onclickphptest.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_id` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(60) NOT NULL,
  `cli_cpf` varchar(14) NOT NULL,
  `cli_data_nascimento` date NOT NULL,
  `cli_telefone` varchar(15) DEFAULT NULL,
  `cli_email` varchar(100) DEFAULT NULL,
  `cli_senha` varchar(256) NOT NULL,
  `cli_data_cadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cli_id`),
  KEY `cli_nome` (`cli_nome`),
  KEY `cli_cpf` (`cli_cpf`),
  KEY `cli_data_cadastro` (`cli_data_cadastro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
-- Copiando estrutura para tabela onclickphptest.cliente_endereco
CREATE TABLE IF NOT EXISTS `cliente_endereco` (
  `end_id` int(11) NOT NULL AUTO_INCREMENT,
  `end_id_cliente_fk` int(11) NOT NULL,
  `end_titulo` varchar(30) DEFAULT NULL,
  `end_rua` varchar(60) DEFAULT NULL,
  `end_numero` varchar(5) DEFAULT NULL,
  `end_complemento` varchar(30) DEFAULT NULL,
  `end_bairro` varchar(60) DEFAULT NULL,
  `end_cidade` varchar(60) DEFAULT NULL,
  `end_estado` char(2) DEFAULT NULL,
  `end_data_cadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `end_ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`end_id`),
  KEY `end_id_cliente_fk` (`end_id_cliente_fk`),
  KEY `end_data_cadastro` (`end_data_cadastro`),
  KEY `end_cidade` (`end_cidade`,`end_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
