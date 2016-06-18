CREATE DATABASE `MelhorIdadeSA` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `MelhorIdadeSA`;

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
  `Ativo` bit(1) NOT NULL DEFAULT b'1',
  `DataHoraUpdate` datetime NOT NULL,
  `Posicao` int(11) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Link_UNIQUE` (`Link`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Usuario_UNIQUE` (`Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
ALTER TABLE Pagina AUTO_INCREMENT = 1;
INSERT INTO Pagina (Link, Titulo, Corpo, Posicao, DataHoraUpdate, Ativo) VALUES ('Home','Bem-Vindo!!!','Inicial Teste',1, NOW(), 1);
INSERT INTO Pagina (Link, Titulo, Corpo, Posicao, DataHoraUpdate, Ativo) VALUES ('Sobre','12HD Sobre','12 Homens e um Destino',2, NOW(), 1);
INSERT INTO Pagina (Link, Titulo, Corpo, Posicao, DataHoraUpdate, Ativo) VALUES ('Cadastro','Cadastro','Cadastro Idoso e Responsavel, apenas controle, chama arquivo com form',3, NOW(), 1);
INSERT INTO Pagina (Link, Titulo, Corpo, Posicao, DataHoraUpdate, Ativo) VALUES ('Contato','Contato','Contato de usuarios, apenas controle, chama arquivo com form',4, NOW(), 1);

ALTER TABLE ResponsavelIdoso AUTO_INCREMENT = 1;
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (1,'teste1','teste1',11,12345678,21,'Idoso1');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (2,'teste2','teste2',11,12345678,22,'Idoso2');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (3,'teste3','teste3',11,12345678,23,'Idoso3');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (4,'teste4','teste4',11,12345678,24,'Idoso4');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (5,'teste5','teste5',11,12345678,25,'Idoso5');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (6,'teste6','teste6',11,12345678,26,'Idoso6');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (7,'teste7','teste7',11,12345678,27,'Idoso7');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (8,'teste8','teste8',11,12345678,28,'Idoso8');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (9,'teste9','teste9',11,12345678,29,'Idoso9');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (10,'teste10','teste10',11,12345678,210,'Idoso10');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (11,'teste11','teste11',11,12345678,211,'Idoso11');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (12,'teste12','teste12',11,12345678,212,'Idoso12');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (13,'teste13','teste13',11,12345678,213,'Idoso13');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (14,'teste14','teste14',11,12345678,214,'Idoso14');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (15,'teste15','teste15',11,12345678,215,'Idoso15');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (16,'teste16','teste16',11,12345678,216,'Idoso16');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (17,'teste17','teste17',11,12345678,217,'Idoso17');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (18,'teste18','teste18',11,12345678,218,'Idoso18');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (19,'teste19','teste19',11,12345678,219,'Idoso19');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (20,'teste20','teste20',11,12345678,220,'Idoso20');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (21,'teste21','teste21',11,12345678,221,'Idoso21');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (22,'teste22','teste22',11,12345678,222,'Idoso22');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (23,'teste23','teste23',11,12345678,223,'Idoso23');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (24,'teste24','teste24',11,12345678,224,'Idoso24');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (25,'teste25','teste25',11,12345678,225,'Idoso25');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (26,'teste26','teste26',11,12345678,226,'Idoso26');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (27,'teste27','teste27',11,12345678,227,'Idoso27');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (28,'teste28','teste28',11,12345678,228,'Idoso28');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (29,'teste29','teste29',11,12345678,229,'Idoso29');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (30,'teste30','teste30',11,12345678,230,'Idoso30');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (31,'teste31','teste31',11,12345678,231,'Idoso31');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (32,'teste32','teste32',11,12345678,232,'Idoso32');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (33,'teste33','teste33',11,12345678,233,'Idoso33');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (34,'teste34','teste34',11,12345678,234,'Idoso34');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (35,'teste35','teste35',11,12345678,235,'Idoso35');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (36,'teste36','teste36',11,12345678,236,'Idoso36');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (37,'teste37','teste37',11,12345678,237,'Idoso37');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (38,'teste38','teste38',11,12345678,238,'Idoso38');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (39,'teste39','teste39',11,12345678,239,'Idoso39');
insert into ResponsavelIdoso(ResponsavelCPF, ResponsavelNome, ResponsavelEmail, ResponsavelDDD, ResponsavelTelefone, IdosoCPF, IdosoNome) values (40,'teste40','teste40',11,12345678,240,'Idoso40');
