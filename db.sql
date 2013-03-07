-- MySQL dump 10.13  Distrib 5.5.29, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: ferramenta
-- ------------------------------------------------------
-- Server version	5.5.29-0ubuntu0.12.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `custom`
--

DROP TABLE IF EXISTS `custom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `custom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(25) NOT NULL,
  `pagina` varchar(11) NOT NULL,
  `conteudo` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `custom`
--

LOCK TABLES `custom` WRITE;
/*!40000 ALTER TABLE `custom` DISABLE KEYS */;
INSERT INTO `custom` VALUES (1,'descritivo','comunicacao','Esse é o texto descritivo sobre Comunicação.'),(2,'frase','comunicacao','\"Quem não se comunica se extrumbica\"'),(3,'descritivo','comunic_int','Texto que o Lucas fez'),(4,'descritivo','comunic_ext','Texto que o Macarena tem que fazer');
/*!40000 ALTER TABLE `custom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paginas`
--

DROP TABLE IF EXISTS `paginas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paginas` (
  `id` varchar(11) NOT NULL COMMENT 'nome sem acento',
  `titulo` varchar(30) NOT NULL,
  `pai` varchar(11) NOT NULL,
  `alt` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paginas`
--

LOCK TABLES `paginas` WRITE;
/*!40000 ALTER TABLE `paginas` DISABLE KEYS */;
INSERT INTO `paginas` VALUES ('ajuda_com_i','Ajuda - Comunicação Interna','comunic_int',''),('comunicacao','Comunicação','',''),('comunic_ext','Comunicação Externa','comunicacao',''),('comunic_int','Comunicação Interna','comunicacao',''),('divulgacao','Divulgação','comunic_ext',''),('manifesto','Manifesto','comunic_ext','');
/*!40000 ALTER TABLE `paginas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perguntas`
--

DROP TABLE IF EXISTS `perguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enunciado` text NOT NULL,
  `imagem` int(11) NOT NULL COMMENT 'id da imagem',
  `tipo` varchar(11) NOT NULL COMMENT 'tipo de input',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perguntas`
--

LOCK TABLES `perguntas` WRITE;
/*!40000 ALTER TABLE `perguntas` DISABLE KEYS */;
INSERT INTO `perguntas` VALUES (1,'Nível de conhecimento técnico de internet',0,'radio'),(2,'Quanto tempo por semana o grupo disponibiliza para o planejamento?',0,'radio'),(3,'Quantas pessoas tem no grupo?',0,'text');
/*!40000 ALTER TABLE `perguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respostas_possiveis`
--

DROP TABLE IF EXISTS `respostas_possiveis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respostas_possiveis` (
  `pergunta` int(11) NOT NULL,
  `resposta` varchar(25) NOT NULL,
  `alt` text NOT NULL COMMENT 'ajuda para responder'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respostas_possiveis`
--

LOCK TABLES `respostas_possiveis` WRITE;
/*!40000 ALTER TABLE `respostas_possiveis` DISABLE KEYS */;
INSERT INTO `respostas_possiveis` VALUES (1,'Mal','Você sequer sabe como entrar no seu e-mail sem ajuda.'),(1,'básico','Você acessa seus e-mails, usa as redes sociais, mas não sabe reconhecer um spam, uma corrente ou um link malicioso.'),(1,'Foda','Você é membro do Anonymous... (juramos não contar pra ninguém)'),(2,'pouco','1 dia por semana.'),(2,'médio','3 dias por semana'),(2,'muito','Todo dia.'),(3,'2','Coloque um número.');
/*!40000 ALTER TABLE `respostas_possiveis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respotas`
--

DROP TABLE IF EXISTS `respotas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respotas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` int(11) NOT NULL COMMENT 'id da pergunta',
  `respota` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respotas`
--

LOCK TABLES `respotas` WRITE;
/*!40000 ALTER TABLE `respotas` DISABLE KEYS */;
/*!40000 ALTER TABLE `respotas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vinculo`
--

DROP TABLE IF EXISTS `vinculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vinculo` (
  `pagina` varchar(11) NOT NULL COMMENT 'id da página',
  `pergunta` int(11) NOT NULL COMMENT 'id da pergunta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vinculo`
--

LOCK TABLES `vinculo` WRITE;
/*!40000 ALTER TABLE `vinculo` DISABLE KEYS */;
INSERT INTO `vinculo` VALUES ('ajuda_com_i',1),('ajuda_com_i',3),('ajuda_com_i',2);
/*!40000 ALTER TABLE `vinculo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-02-28 20:07:52
