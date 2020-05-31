CREATE DATABASE form_php;
USE form_php;

CREATE TABLE `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(15) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `data_cadastro` datetime NOT NULL,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

INSERT INTO `form_php`.`contato`
(`idcontato`,
`nome`,
`email`,
`telefone`,
`descricao`,
`data_cadastro`)
VALUES
(<{idcontato: }>,
<{nome: }>,
<{email: }>,
<{telefone: }>,
<{descricao: }>,
<{data_cadastro: }>);
