CREATE DATABASE `MelhorIdadeSA` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `Contato` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Data` date NOT NULL,
  `Hora` time NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mensagem` varchar(350) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `Pagina` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Link` varchar(30) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Corpo` varchar(500) NOT NULL,
  `Ativo` bit(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

CREATE TABLE `ResponsavelIdoso` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `ResponsavelCPF` varchar(11) NOT NULL,
  `ResponsavelNome` varchar(60) NOT NULL,
  `ResponsavelEmail` varchar(50) NOT NULL,
  `ResponsavelTelefone` varchar(9) NOT NULL,
  `ResponsavelDDD` varchar(3) NOT NULL,
  `IdosoCPF` varchar(11) NOT NULL,
  `IdosoNome` varchar(60) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `ResponsavelCPF_UNIQUE` (`ResponsavelCPF`),
  UNIQUE KEY `IdosoCPF_UNIQUE` (`IdosoCPF`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `Usuarios` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Senha` varchar(150) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `Perfil` varchar(10) NOT NULL DEFAULT 'Admin',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
