/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.21-MariaDB : Database - embarqueidealsite
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
-- USE `embarqueidealsite`;

/*Table structure for table `configuracoes` */

DROP TABLE IF EXISTS `configuracoes`;

CREATE TABLE `configuracoes` (
  `name` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `phone1` varchar(100) DEFAULT NULL,
  `phone2` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `doc` decimal(19,0) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `pais` varchar(2) DEFAULT NULL,
  `zipcode` int(8) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `configuracoes` */

insert  into `configuracoes`(`name`,`subtitle`,`phone1`,`phone2`,`email`,`doc`,`rua`,`bairro`,`cidade`,`estado`,`pais`,`zipcode`,`instagram`,`youtube`,`facebook`) values 
('Embarque Ideal','Agência de Turismo','+55 12 99999-9999',NULL,'comercial@embarqueideal.com',43,'Avenida teste da silva, 2233 - Apto 201','Rocha Sobrinho','Mesquita','RJ','Br',26554110,'https://instagram.com/embarqueideal',NULL,'https://www.facebook.com/profile.php?id=100091613476387');

/*Table structure for table `contato` */

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `mensagem` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

/*Data for the table `contato` */

insert  into `contato`(`id`,`nome`,`email`,`tel`,`mensagem`,`status`) values 
(1,'asdasdasdasd asdasd','asdasdasd@asdasd.com','2154545454','asdas asdasda asdasdasd',0),
(2,'asdasdasdasd asdasd','asdasdasd@asdasd.com','2154545454','asdas asdasda asdasdasd',0),
(3,'asdasdasdasd asdasd','asdasdasd@asdasd.com','2154545454','asdas asdasda asdasdasd',0),
(4,'asdasdasdasd asdasd','asdasdasd@asdasd.com','2154545454','asdas asdasda asdasdasd',0),
(5,'Julio Testando','juliolobo.info@gmail.com','21 964218122','Testando o envio de contato',0),
(6,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(7,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(8,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(9,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(10,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(11,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(12,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(13,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(14,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0),
(15,'Julio teste','juliolobo.info@gmail.com','21964656455454','asdasda sdasdasdasd',0);

/*Table structure for table `home_topo` */

DROP TABLE IF EXISTS `home_topo`;

CREATE TABLE `home_topo` (
  `arquivo` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `home_topo` */

insert  into `home_topo`(`arquivo`,`titulo`,`subtitulo`) values 
('maldivas.jpg','Conquiste o mundo!','Podemos te ajudar com passagem, hospedagem e muito mais!');

/*Table structure for table `inner_topo` */

DROP TABLE IF EXISTS `inner_topo`;

CREATE TABLE `inner_topo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `arquivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `inner_topo` */

insert  into `inner_topo`(`id`,`arquivo`) values 
(1,'cataratas-do-iguacu.jpg'),
(2,'maxres.jpg'),
(3,'mountain_tourist.jpg');

/*Table structure for table `insta_images` */

DROP TABLE IF EXISTS `insta_images`;

CREATE TABLE `insta_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text NOT NULL,
  `media_url` varchar(500) NOT NULL,
  `permalink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `insta_images` */

/*Table structure for table `insta_videos` */

DROP TABLE IF EXISTS `insta_videos`;

CREATE TABLE `insta_videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text NOT NULL,
  `media_url` varchar(500) NOT NULL,
  `permalink` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `insta_videos` */

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref` varchar(255) DEFAULT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `evento` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL,
  `dt_criado` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6112 DEFAULT CHARSET=utf8mb4;

/*Data for the table `logs` */

insert  into `logs`(`id`,`ref`,`ref_id`,`usuario_id`,`evento`,`texto`,`dt_criado`) values 
(5965,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 00:57:09'),
(5966,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:00:01'),
(5967,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:01:11'),
(5968,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:04:19'),
(5969,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:04:39'),
(5970,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:04:51'),
(5971,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:05:34'),
(5972,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:06:02'),
(5973,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:06:12'),
(5974,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:06:32'),
(5975,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:06:54'),
(5976,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 01:07:51'),
(5977,'users',106,99,'editUser','Editou o campo <b>obs</b> do usuário <b>Julio Teste</b> de <b></b> para <b>  </b>.','2023-08-15 16:18:03'),
(5978,'users',106,99,'editUser','Editou o campo <b>senha</b> do usuário <b>Julio Teste</b> de <b>$2y$10$9NybXExRG4cbRNJXxHFpWeoTxyZHFCQB.5QHVoxgNNLFsatvYeKwm</b> para <b>$2y$10$HuADPoxWOVzukryQ32J5bezsjQaUG06L3L3YuNCODs4MBNDS9qGMC</b>.','2023-08-15 16:18:03'),
(5979,'users',106,99,'editUser','Editou o campo <b>status</b> do usuário <b>Julio Teste</b> de <b>0</b> para <b>1</b>.','2023-08-15 16:18:08'),
(5980,'users',106,99,'delUser','Desativou o Usuário <b>Julio Teste</b>','2023-08-15 16:19:22'),
(5981,'orcamento_arquivos',7,99,'fileDel','Excluiu o arquivo <b>seguro-2023082657.pdf</b>','2023-08-27 00:46:38'),
(5982,'orcamento_arquivos',6,99,'fileDel','Excluiu o arquivo <b>seguro-2023082658.pdf</b>','2023-08-27 00:52:45'),
(5983,'orcamento_arquivos',5,99,'fileDel','Excluiu o arquivo <b>Contrato-assinado-2023082628.docx</b>','2023-08-27 01:02:43'),
(5984,'orcamento_arquivos',4,99,'fileDel','Excluiu o arquivo <b>asdasdasasd-2023082615.docx</b>','2023-08-27 01:05:58'),
(5985,'orcamento_arquivos',3,99,'fileDel','Excluiu o arquivo <b>julio-2023082614.docx</b>','2023-08-27 01:06:05'),
(5986,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 01:12:32'),
(5987,'orcamento_arquivos',8,99,'fileDel','Excluiu o arquivo <b>Seguro-2023082732.pdf</b>','2023-08-27 01:13:17'),
(5988,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 01:14:07'),
(5989,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 02:07:20'),
(5990,'orcamento_arquivos',10,99,'fileDel','Excluiu o arquivo <b>Contrato-Assinado-pelo-cliente-2023082720.docx</b>','2023-08-27 18:49:58'),
(5991,'orcamento_arquivos',9,99,'fileDel','Excluiu o arquivo <b>seguro-2023082707.pdf</b>','2023-08-27 18:50:02'),
(5992,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>1</b> para <b>3</b>.','2023-08-27 19:54:32'),
(5993,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>3</b> para <b>1</b>.','2023-08-27 19:57:40'),
(5994,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>1</b> para <b>3</b>.','2023-08-27 19:57:48'),
(5995,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>3</b> para <b>1</b>.','2023-08-27 19:59:01'),
(5996,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>1</b> para <b>2</b>.','2023-08-27 19:59:39'),
(5997,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>2</b> para <b>1</b>.','2023-08-27 20:02:12'),
(5998,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>1</b> para <b>3</b>.','2023-08-27 20:03:15'),
(5999,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>3</b> para <b>1</b>.','2023-08-27 20:03:24'),
(6000,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>1</b> para <b>3</b>.','2023-08-27 20:03:38'),
(6001,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>3</b> para <b>4</b>.','2023-08-27 20:03:43'),
(6002,'orcamentos',0,99,'editOrcamento','Editou o campo <b>status</b> do do Orçamento do <b></b> de <b>4</b> para <b>1</b>.','2023-08-27 20:03:46'),
(6003,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:35:47'),
(6004,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:37:58'),
(6005,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:39:43'),
(6006,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:42:48'),
(6007,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:44:53'),
(6008,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:45:07'),
(6009,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:46:20'),
(6010,'orcamento_arquivos',17,99,'fileDel','Excluiu o arquivo <b>testetrer-2023082720.docx</b>','2023-08-27 21:46:41'),
(6011,'orcamento_arquivos',16,99,'fileDel','Excluiu o arquivo <b>teste-2023082707.docx</b>','2023-08-27 21:46:44'),
(6012,'orcamento_arquivos',15,99,'fileDel','Excluiu o arquivo <b>teste-2023082753.docx</b>','2023-08-27 21:46:46'),
(6013,'orcamento_arquivos',14,99,'fileDel','Excluiu o arquivo <b>teste-2023082748.docx</b>','2023-08-27 21:46:48'),
(6014,'orcamento_arquivos',13,99,'fileDel','Excluiu o arquivo <b>teste-2023082743.docx</b>','2023-08-27 21:46:50'),
(6015,'orcamento_arquivos',12,99,'fileDel','Excluiu o arquivo <b>teste-2023082758.docx</b>','2023-08-27 21:46:53'),
(6016,'orcamento_arquivos',11,99,'fileDel','Excluiu o arquivo <b>Contrato-2023082747.docx</b>','2023-08-27 21:46:56'),
(6017,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-27 21:47:10'),
(6018,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_preco</b> do do Orçamento do <b></b> de <b></b> para <b>1000,00</b>.','2023-08-29 19:06:32'),
(6019,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_preco</b> do do Orçamento do <b></b> de <b></b> para <b>500,00</b>.','2023-08-29 19:06:32'),
(6020,'orcamentos',0,99,'editOrcamento','Editou o campo <b>total</b> do do Orçamento do <b></b> de <b></b> para <b>1500,00</b>.','2023-08-29 19:06:32'),
(6021,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_qtd</b> do do Orçamento do <b></b> de <b>0</b> para <b>1</b>.','2023-08-29 19:07:03'),
(6022,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_bag10k</b> do do Orçamento do <b></b> de <b>0</b> para <b>1</b>.','2023-08-29 19:07:03'),
(6023,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_bag23k</b> do do Orçamento do <b></b> de <b>0</b> para <b>1</b>.','2023-08-29 19:07:03'),
(6024,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_qtd</b> do do Orçamento do <b></b> de <b>0</b> para <b>2</b>.','2023-08-29 19:07:03'),
(6025,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_bag10k</b> do do Orçamento do <b></b> de <b>0</b> para <b>2</b>.','2023-08-29 19:07:03'),
(6026,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_bag23k</b> do do Orçamento do <b></b> de <b>0</b> para <b>2</b>.','2023-08-29 19:07:03'),
(6027,'orcamento_arquivos',0,99,'','Excluiu o arquivo <b></b>','2023-08-29 20:17:54'),
(6028,'orcamento_arquivos',20,99,'addArquivo','Anexou o arquivo <b>contrato-2023083053.pdf</b>','2023-08-29 20:21:53'),
(6029,'orcamento_arquivos',21,99,'addArquivo','Anexou o arquivo <b>contrato-2023083026.pdf</b>','2023-08-29 20:22:26'),
(6030,'orcamento_arquivos',22,99,'addArquivo','Anexou o arquivo <b>contrato-2023083006.pdf</b>','2023-08-29 21:24:06'),
(6031,'orcamento_arquivos',23,99,'addArquivo','Anexou o arquivo <b>contrato-2023083041.pdf</b>','2023-08-29 21:25:41'),
(6032,'orcamento_arquivos',23,99,'fileDel','Excluiu o arquivo <b>contrato-2023083041.pdf</b>','2023-08-29 21:26:06'),
(6033,'orcamento_arquivos',22,99,'fileDel','Excluiu o arquivo <b>contrato-2023083006.pdf</b>','2023-08-29 21:26:08'),
(6034,'orcamento_arquivos',21,99,'fileDel','Excluiu o arquivo <b>contrato-2023083026.pdf</b>','2023-08-29 21:26:10'),
(6035,'orcamento_arquivos',20,99,'fileDel','Excluiu o arquivo <b>contrato-2023083053.pdf</b>','2023-08-29 21:26:13'),
(6036,'orcamento_arquivos',19,99,'fileDel','Excluiu o arquivo <b>contrato-2023083054.pdf</b>','2023-08-29 21:26:15'),
(6037,'orcamento_arquivos',24,99,'addArquivo','Anexou o arquivo <b>contrato-2023083014.pdf</b>','2023-08-29 21:27:14'),
(6038,'orcamento_arquivos',24,99,'fileDel','Excluiu o arquivo <b>contrato-2023083014.pdf</b>','2023-08-29 21:27:56'),
(6039,'orcamento_arquivos',25,99,'addArquivo','Anexou o arquivo <b>contrato-2023083058.pdf</b>','2023-08-29 21:29:58'),
(6040,'orcamento_arquivos',25,99,'fileDel','Excluiu o arquivo <b>contrato-2023083058.pdf</b>','2023-08-29 21:30:04'),
(6041,'orcamento_arquivos',26,99,'addArquivo','Anexou o arquivo <b>contrato-2023083010.pdf</b>','2023-08-29 21:30:10'),
(6042,'orcamento_arquivos',26,99,'fileDel','Excluiu o arquivo <b>contrato-2023083010.pdf</b>','2023-08-29 21:30:20'),
(6043,'orcamento_arquivos',27,99,'addArquivo','Anexou o arquivo <b>contrato-2023083056.pdf</b>','2023-08-29 21:42:56'),
(6044,'orcamento_arquivos',27,99,'fileDel','Excluiu o arquivo <b>contrato-2023083056.pdf</b>','2023-08-29 21:43:08'),
(6045,'orcamento_arquivos',28,99,'addArquivo','Anexou o arquivo <b>contrato-2023083016.pdf</b>','2023-08-29 21:43:16'),
(6046,'orcamento_arquivos',28,99,'fileDel','Excluiu o arquivo <b>contrato-2023083016.pdf</b>','2023-08-29 21:43:21'),
(6047,'orcamento_arquivos',29,99,'addArquivo','Anexou o arquivo <b>contrato-2023083025.pdf</b>','2023-08-29 21:43:25'),
(6048,'orcamento_arquivos',29,99,'fileDel','Excluiu o arquivo <b>contrato-2023083025.pdf</b>','2023-08-29 21:43:31'),
(6049,'orcamento_arquivos',30,99,'addArquivo','Anexou o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 21:46:00'),
(6050,'orcamento_arquivos',30,99,'fileDel','Excluiu o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 21:46:05'),
(6051,'orcamento_arquivos',31,99,'addArquivo','Anexou o arquivo <b>contrato-2023083047.pdf</b>','2023-08-29 21:46:47'),
(6052,'orcamento_arquivos',31,99,'fileDel','Excluiu o arquivo <b>contrato-2023083047.pdf</b>','2023-08-29 21:46:52'),
(6053,'orcamento_arquivos',32,99,'addArquivo','Anexou o arquivo <b>contrato-2023083036.pdf</b>','2023-08-29 21:52:36'),
(6054,'orcamento_arquivos',32,99,'fileDel','Excluiu o arquivo <b>contrato-2023083036.pdf</b>','2023-08-29 21:52:57'),
(6055,'orcamento_arquivos',33,99,'addArquivo','Anexou o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 21:53:00'),
(6056,'orcamento_arquivos',34,99,'addArquivo','Anexou o arquivo <b>contrato-2023083046.pdf</b>','2023-08-29 21:53:46'),
(6057,'orcamento_arquivos',35,99,'addArquivo','Anexou o arquivo <b>contrato-2023083059.pdf</b>','2023-08-29 21:53:59'),
(6058,'orcamento_arquivos',36,99,'addArquivo','Anexou o arquivo <b>contrato-2023083002.pdf</b>','2023-08-29 21:54:02'),
(6059,'orcamento_arquivos',37,99,'addArquivo','Anexou o arquivo <b>contrato-2023083005.pdf</b>','2023-08-29 21:54:05'),
(6060,'orcamento_arquivos',34,99,'fileDel','Excluiu o arquivo <b>contrato-2023083046.pdf</b>','2023-08-29 21:55:02'),
(6061,'orcamento_arquivos',33,99,'fileDel','Excluiu o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 21:55:04'),
(6062,'orcamento_arquivos',38,99,'addArquivo','Anexou o arquivo <b>contrato-2023083017.pdf</b>','2023-08-29 21:55:17'),
(6063,'orcamento_arquivos',38,99,'fileDel','Excluiu o arquivo <b>contrato-2023083017.pdf</b>','2023-08-29 21:55:25'),
(6064,'orcamento_arquivos',39,99,'addArquivo','Anexou o arquivo <b>contrato-2023083021.pdf</b>','2023-08-29 21:57:21'),
(6065,'orcamento_arquivos',39,99,'fileDel','Excluiu o arquivo <b>contrato-2023083021.pdf</b>','2023-08-29 21:57:38'),
(6066,'orcamento_arquivos',40,99,'addArquivo','Anexou o arquivo <b>contrato-2023083052.pdf</b>','2023-08-29 21:57:52'),
(6067,'orcamento_arquivos',40,99,'fileDel','Excluiu o arquivo <b>contrato-2023083052.pdf</b>','2023-08-29 21:58:01'),
(6068,'orcamento_arquivos',41,99,'addArquivo','Anexou o arquivo <b>contrato-2023083011.pdf</b>','2023-08-29 21:58:11'),
(6069,'orcamento_arquivos',41,99,'fileDel','Excluiu o arquivo <b>contrato-2023083011.pdf</b>','2023-08-29 21:58:24'),
(6070,'orcamento_arquivos',42,99,'addArquivo','Anexou o arquivo <b>contrato-2023083037.pdf</b>','2023-08-29 22:50:37'),
(6071,'orcamento_arquivos',43,99,'addArquivo','Anexou o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 22:52:00'),
(6072,'orcamento_arquivos',43,99,'fileDel','Excluiu o arquivo <b>contrato-2023083000.pdf</b>','2023-08-29 23:04:24'),
(6073,'orcamento_arquivos',42,99,'fileDel','Excluiu o arquivo <b>contrato-2023083037.pdf</b>','2023-08-29 23:04:26'),
(6074,'orcamentos',0,99,'editOrcamento','Editou o campo <b>data_ida</b> do do Orçamento do <b></b> de <b>2023-09-10</b> para <b>10/09/2023</b>.','2023-08-29 23:08:10'),
(6075,'orcamentos',0,99,'editOrcamento','Editou o campo <b>data_volta</b> do do Orçamento do <b></b> de <b>2023-09-30</b> para <b>30/09/2023</b>.','2023-08-29 23:08:10'),
(6076,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_data_ida</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>2023-11-10</b>.','2023-08-29 23:08:10'),
(6077,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_data_volta</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>2023-11-30</b>.','2023-08-29 23:08:10'),
(6078,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_data_ida</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>203-11-10</b>.','2023-08-29 23:08:10'),
(6079,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_data_volta</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>2023-12-01</b>.','2023-08-29 23:08:10'),
(6080,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_ida</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:08:10'),
(6081,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_volta</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:08:10'),
(6082,'orcamentos',0,99,'editOrcamento','Editou o campo <b>data_ida</b> do do Orçamento do <b></b> de <b>10/09/2023</b> para <b>09/10/2023</b>.','2023-08-29 23:08:21'),
(6083,'orcamentos',0,99,'editOrcamento','Editou o campo <b>data_volta</b> do do Orçamento do <b></b> de <b>30/09/2023</b> para <b>31/12/1969</b>.','2023-08-29 23:08:21'),
(6084,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_data_ida</b> do do Orçamento do <b></b> de <b>0203-11-10</b> para <b>2023-11-10</b>.','2023-08-29 23:08:21'),
(6085,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_ida</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:08:21'),
(6086,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_volta</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:08:21'),
(6087,'orcamentos',0,99,'editOrcamento','Editou o campo <b>data_ida</b> do do Orçamento do <b></b> de <b>09/10/2023</b> para <b>10/09/2023</b>.','2023-08-29 23:10:11'),
(6088,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_origem</b> do do Orçamento do <b></b> de <b></b> para <b>Natal</b>.','2023-08-29 23:10:11'),
(6089,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_int_destino</b> do do Orçamento do <b></b> de <b></b> para <b>Orlando</b>.','2023-08-29 23:10:11'),
(6090,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_origem</b> do do Orçamento do <b></b> de <b></b> para <b>Rio de Janeiro</b>.','2023-08-29 23:10:11'),
(6091,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_nac_destino</b> do do Orçamento do <b></b> de <b></b> para <b>Natal</b>.','2023-08-29 23:10:11'),
(6092,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_ida</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:10:11'),
(6093,'orcamentos',0,99,'editOrcamento','Editou o campo <b>pass_rod_data_volta</b> do do Orçamento do <b></b> de <b>0000-00-00</b> para <b>--</b>.','2023-08-29 23:10:11'),
(6094,'orcamento_arquivos',44,99,'addArquivo','Anexou o arquivo <b>contrato-2023083021.pdf</b>','2023-08-29 23:10:21'),
(6095,'orcamento_arquivos',45,99,'addArquivo','Anexou o arquivo <b>contrato-2023083035.pdf</b>','2023-08-29 23:11:35'),
(6096,'orcamento_arquivos',46,99,'addArquivo','Anexou o arquivo <b>contrato-2023083017.pdf</b>','2023-08-29 23:13:17'),
(6097,'orcamento_arquivos',47,99,'addArquivo','Anexou o arquivo <b>contrato-2023083049.pdf</b>','2023-08-29 23:15:49'),
(6098,'orcamento_arquivos',48,99,'addArquivo','Anexou o arquivo <b>contrato-2023083047.pdf</b>','2023-08-29 23:16:47'),
(6099,'orcamento_arquivos',49,99,'addArquivo','Anexou o arquivo <b>contrato-2023083041.pdf</b>','2023-08-29 23:17:41'),
(6100,'orcamento_arquivos',50,99,'addArquivo','Anexou o arquivo <b>contrato-2023083021.pdf</b>','2023-08-29 23:18:21'),
(6101,'orcamento_arquivos',51,99,'addArquivo','Anexou o arquivo <b>contrato-2023083011.pdf</b>','2023-08-29 23:19:11'),
(6102,'orcamento_arquivos',51,99,'fileDel','Excluiu o arquivo <b>contrato-2023083011.pdf</b>','2023-08-29 23:22:34'),
(6103,'orcamento_arquivos',50,99,'fileDel','Excluiu o arquivo <b>contrato-2023083021.pdf</b>','2023-08-29 23:22:36'),
(6104,'orcamento_arquivos',49,99,'fileDel','Excluiu o arquivo <b>contrato-2023083041.pdf</b>','2023-08-29 23:22:38'),
(6105,'orcamento_arquivos',48,99,'fileDel','Excluiu o arquivo <b>contrato-2023083047.pdf</b>','2023-08-29 23:22:41'),
(6106,'orcamento_arquivos',47,99,'fileDel','Excluiu o arquivo <b>contrato-2023083049.pdf</b>','2023-08-29 23:22:43'),
(6107,'orcamento_arquivos',46,99,'fileDel','Excluiu o arquivo <b>contrato-2023083017.pdf</b>','2023-08-29 23:22:46'),
(6108,'orcamento_arquivos',45,99,'fileDel','Excluiu o arquivo <b>contrato-2023083035.pdf</b>','2023-08-29 23:22:49'),
(6109,'orcamento_arquivos',52,99,'addArquivo','Anexou o arquivo <b>contrato-2023083018.pdf</b>','2023-08-29 23:23:18'),
(6110,'orcamento_arquivos',53,99,'addArquivo','Anexou o arquivo <b>contrato-2023083056.pdf</b>','2023-08-29 23:23:56'),
(6111,'orcamento_arquivos',54,99,'addArquivo','Anexou o arquivo <b>contrato-10-2023083040.pdf</b>','2023-08-30 13:09:40');

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `icone` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `nivel` int(11) NOT NULL,
  `pai` int(11) NOT NULL,
  `novo` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ordem` int(3) NOT NULL,
  `multiplo` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menu` */

insert  into `menu`(`id`,`nome`,`icone`,`arquivo`,`nivel`,`pai`,`novo`,`status`,`ordem`,`multiplo`) values 
(1,'Painel de Controle','fa-solid fa-gauge-high','dashboard',1,0,0,1,1,0),
(2,'Clientes','fas fa-user-friends','customers',1,0,0,0,2,0),
(3,'Orçamentos','fa-solid fa-magnifying-glass-dollar','orcamentos',1,0,0,1,3,0),
(4,'Usuários','fa-solid fa-user-gear','#',1,1,0,1,4,1),
(5,'Logs','fa-solid fa-clock-rotate-left','logs',1,0,1,0,9,0),
(6,'Sair','fas fa-sign-out-alt','logout',1,0,0,1,11,0),
(7,'Perfil','fa-solid fa-address-card','profile',1,0,0,1,10,0),
(8,'Permissões','fa-solid fa-list-check','permissions',1,0,0,0,8,0),
(9,'Cargos','fa-solid fa-user-shield','cargos',1,0,0,0,7,0),
(12,'Adicionar usuário','','user',2,4,0,1,2,0),
(13,'Listar usuários','','users',2,4,0,1,1,0);

/*Table structure for table `menu_site` */

DROP TABLE IF EXISTS `menu_site`;

CREATE TABLE `menu_site` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ordem` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menu_site` */

insert  into `menu_site`(`id`,`nome`,`arquivo`,`status`,`ordem`) values 
(1,'Home','home',1,1),
(2,'Nossos Serviços','servicos',1,2),
(3,'Quem Somos','empresa',1,3),
(4,'Política de privacidade','privacidade',1,4),
(5,'Contato','contato',1,5);

/*Table structure for table `niveis` */

DROP TABLE IF EXISTS `niveis`;

CREATE TABLE `niveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4;

/*Data for the table `niveis` */

insert  into `niveis`(`id`,`nome`,`icon`,`status`) values 
(1,'Administrador',NULL,1),
(2,'Vendedor',NULL,1),
(3,'Marketing',NULL,1),
(4,'Equipe',NULL,1),
(99,'Superadmin',NULL,1);

/*Table structure for table `orcamento_arquivos` */

DROP TABLE IF EXISTS `orcamento_arquivos`;

CREATE TABLE `orcamento_arquivos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `uuid` varchar(50) NOT NULL,
  `orcamento_id` int(11) NOT NULL,
  `tipo` varchar(4) NOT NULL,
  `tamanho` varchar(255) NOT NULL,
  `dt_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orcamento_arquivos` */

insert  into `orcamento_arquivos`(`id`,`nome`,`uuid`,`orcamento_id`,`tipo`,`tamanho`,`dt_cadastro`) values 
(18,'testeasas-2023082710.docx','2332125e-d295-4039-a17e-81972d630baa',10,'docx','42.408203125','2023-08-27 21:47:10'),
(44,'contrato-2023083021.pdf','bd3937b9-677b-4e62-b446-bd2ad6530dc7',10,'pdf','20.681640625','2023-08-29 23:10:21'),
(52,'contrato-2023083018.pdf','a5b4d002-4112-400d-ae09-443656ab72d1',10,'pdf','20.9599609375','2023-08-29 23:23:18'),
(53,'contrato-2023083056.pdf','5a289cca-6b97-49de-a699-49902cd97080',10,'pdf','20.9599609375','2023-08-29 23:23:56'),
(54,'contrato-10-2023083040.pdf','d6e51055-c630-4fa2-8eb2-d950e7feddb3',10,'pdf','20.9599609375','2023-08-30 13:09:40');

/*Table structure for table `orcamento_status` */

DROP TABLE IF EXISTS `orcamento_status`;

CREATE TABLE `orcamento_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `ordem` int(2) NOT NULL,
  `cor` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orcamento_status` */

insert  into `orcamento_status`(`id`,`nome`,`status`,`ordem`,`cor`) values 
(1,'Solicitado',1,1,'lightblue'),
(2,'Orçando',1,2,'warning'),
(3,'Proposta Enviada',1,3,'primary'),
(4,'Proposta Recusada',1,4,'danger'),
(5,'Proposta Aceita',1,5,'success');

/*Table structure for table `orcamentos` */

DROP TABLE IF EXISTS `orcamentos`;

CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `origem` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `data_ida` varchar(50) NOT NULL,
  `data_volta` varchar(50) NOT NULL,
  `passageiros` int(10) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `hora` varchar(10) NOT NULL,
  `status` int(3) NOT NULL,
  `valor` int(11) NOT NULL,
  `pagamento` int(2) NOT NULL,
  `obs` text NOT NULL,
  `pass_int_origem` varchar(255) NOT NULL,
  `pass_int_destino` varchar(255) NOT NULL,
  `pass_int_data_ida` date NOT NULL,
  `pass_int_data_volta` date NOT NULL,
  `pass_int_qtd` int(11) NOT NULL,
  `pass_int_bag10k` int(11) NOT NULL,
  `pass_int_bag23k` int(11) NOT NULL,
  `pass_int_preco` varchar(50) NOT NULL,
  `pass_nac_origem` varchar(255) NOT NULL,
  `pass_nac_destino` varchar(255) NOT NULL,
  `pass_nac_data_ida` date NOT NULL,
  `pass_nac_data_volta` date NOT NULL,
  `pass_nac_qtd` int(11) NOT NULL,
  `pass_nac_bag10k` int(11) NOT NULL,
  `pass_nac_bag23k` int(11) NOT NULL,
  `pass_nac_preco` varchar(50) NOT NULL,
  `pass_rod_origem` varchar(255) NOT NULL,
  `pass_rod_destino` varchar(255) NOT NULL,
  `pass_rod_data_ida` date NOT NULL,
  `pass_rod_data_volta` date NOT NULL,
  `pass_rod_qtd` int(11) NOT NULL,
  `pass_rod_preco` varchar(50) NOT NULL,
  `seguro` varchar(50) NOT NULL,
  `assessoria` varchar(50) NOT NULL,
  `taxas` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `dt_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orcamentos` */

insert  into `orcamentos`(`id`,`origem`,`destino`,`data_ida`,`data_volta`,`passageiros`,`nome`,`tel`,`email`,`hora`,`status`,`valor`,`pagamento`,`obs`,`pass_int_origem`,`pass_int_destino`,`pass_int_data_ida`,`pass_int_data_volta`,`pass_int_qtd`,`pass_int_bag10k`,`pass_int_bag23k`,`pass_int_preco`,`pass_nac_origem`,`pass_nac_destino`,`pass_nac_data_ida`,`pass_nac_data_volta`,`pass_nac_qtd`,`pass_nac_bag10k`,`pass_nac_bag23k`,`pass_nac_preco`,`pass_rod_origem`,`pass_rod_destino`,`pass_rod_data_ida`,`pass_rod_data_volta`,`pass_rod_qtd`,`pass_rod_preco`,`seguro`,`assessoria`,`taxas`,`total`,`dt_cadastro`) values 
(1,'rj','go','2023-08-29','2023-09-05',2,'asdas dasda','+55 21 96565656565','asdasdasdasda@asda.com','17:00',5,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,'','','','','','2023-08-24 17:11:51'),
(3,'RJ','Florianópolis','2023-12-26','2024-01-07',1,'Julio Lobo','+55 21999999999','juliolobo.info@gmail.com','17:00',4,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,'','','','','','2023-08-24 17:13:56'),
(5,'Portugal','São Paulo','2023-08-29','2023-09-05',3,'Teste da silva','+55 21999999999','asdasd@asdasd.com','17:00',2,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,'','','','','','2023-08-24 17:16:27'),
(7,'Rio das Ostras','Parati','2023-08-29','2023-09-05',5,'Alex','+55 21465465465','asdasd@asdasd.com','17:00',3,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,'','','','','','2023-08-24 17:17:29'),
(9,'TESTE','teste','2023-08-29','2023-09-05',8,'asdasdasd','+55 219656565','asdasdasd@asdasd.com','17:00',5,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,0,0,'','','','0000-00-00','0000-00-00',0,'','','','','','2023-08-24 17:18:26'),
(10,'Niteroi','Paris','10/09/2023','31/12/1969',5,'Julio Teste','+55 21999999999','asasdasd@aasdasd.com','17:00',1,0,0,'','Natal','Orlando','2023-11-10','2023-11-30',1,1,1,'1000,00','Rio de Janeiro','Natal','2023-11-10','2023-12-01',2,2,2,'500,00','','','0000-00-00','0000-00-00',0,'','','','','1500,00','2023-08-25 00:16:11');

/*Table structure for table `permissoes` */

DROP TABLE IF EXISTS `permissoes`;

CREATE TABLE `permissoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` int(11) NOT NULL,
  `id_niveis` int(11) NOT NULL,
  `listar` int(11) NOT NULL,
  `cadastrar` int(11) NOT NULL,
  `editar` int(11) NOT NULL,
  `excluir` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4;

/*Data for the table `permissoes` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone1` varchar(255) NOT NULL,
  `phone2` varchar(255) NOT NULL,
  `nivel` int(2) NOT NULL DEFAULT 4,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `obs` longtext DEFAULT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`nome`,`email`,`phone1`,`phone2`,`nivel`,`login`,`senha`,`obs`,`status`) values 
(99,'Julio Lobo','juliolobo.info@gmail.com','21 99999-9999','',99,'juliolobo','$2y$10$dGQBsVZ8r1aslCkOWTWbRel8VucW6Q321rNdMnadmvwLEbjGnE7V.','',1),
(100,'Anderson Sato','andersonsato@embarqueideal.com','21 99999-9999','21 99999-9999',1,'andersonsato','$2y$10$oq8W5O9tk2Hi.nlSEbIpnue5X0AtxKYQfeDUlTxDlXb9tR2NabQQq','Testando pra ver como é',1),
(101,'Caroline Lara','carolinelara@embarqueideal.com','12 99999-9999','',1,'carolinelara','$2y$10$K7n8lR4tZM0/fVK8IZhSGuFpcza47pO.rktqtuI8kyGOwUuT6Y.xa','',1),
(105,'Gustavo Amaral','gustavoamaral@embarqueideal.com','21 99999-9999','',1,'gustavoamaral','$2y$10$YubMIx3cRUc.Jf2FL7rwGOswQTQin8yeuijEq/PI7wA28qinpvvPq','              ',1),
(106,'Julio Teste','asdasdasd@asdasd.com','21 46546-5456','',3,'sdasdasd','$2y$10$HuADPoxWOVzukryQ32J5bezsjQaUG06L3L3YuNCODs4MBNDS9qGMC','  ',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
