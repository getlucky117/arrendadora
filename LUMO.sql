CREATE DATABASE  IF NOT EXISTS `lumo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `lumo`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: lumo
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.33-MariaDB

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
-- Table structure for table `carro`
--

DROP TABLE IF EXISTS `carro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carro` (
  `idcarro` int(11) NOT NULL,
  `ncarro` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcarro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carro`
--

LOCK TABLES `carro` WRITE;
/*!40000 ALTER TABLE `carro` DISABLE KEYS */;
INSERT INTO `carro` VALUES (1,'kia Rio','425654','80'),(2,'Kia ceratos','123456','90'),(3,'Kia picanto','852789','60');
/*!40000 ALTER TABLE `carro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `factura` (
  `idfactura` int(11) NOT NULL AUTO_INCREMENT,
  `nomcarro` varchar(45) DEFAULT NULL,
  `matricula` varchar(45) DEFAULT NULL,
  `tot` varchar(45) DEFAULT NULL,
  `nomcompra` varchar(45) DEFAULT NULL,
  `cedulaf` varchar(45) DEFAULT NULL,
  `fechacompra` varchar(45) DEFAULT NULL,
  `fechaentrega` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idfactura`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `factura`
--

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;
INSERT INTO `factura` VALUES (1,'kia Rio','425654','160','jose','4798283','2',''),(2,'Kia picanto','852789','120','jose','4798283','2',''),(3,'Kia picanto','852789','0','jose','4798283','',''),(4,'kia Rio','425654','240','jose','4798283','3',''),(5,'kia Rio','425654','240','jose','4798283','3',''),(6,'Kia ceratos','123456','180','jose','4798283','2',''),(7,'Kia ceratos','123456','270','jose','4-798-283','3',''),(8,'Kia ceratos','123456','180','jose','4-798-283','2',''),(9,'Kia ceratos','123456','270','jose','4-798-283','3',''),(10,'Kia ceratos','123456','360','jose','4-798-283','4',''),(11,'Kia ceratos','123456','270','jose','4-798-283','3',''),(12,'Kia ceratos','123456','630','jose','4-798-283','7',''),(13,'Kia picanto','852789','540','jose','4798283','9',''),(14,'Kia picanto','852789','600','anel','125','10',''),(15,'Kia ceratos','123456','180','anel','125','2',''),(16,'Kia ceratos','123456','180','anel','125','2',''),(17,'kia Rio','425654','160','anel','125','2',''),(18,'kia Rio','425654','160','anel','125','2',''),(19,'Kia ceratos','123456','270','jose','4-798-283','3',''),(20,'Kia picanto','852789','180','manuel','2532451','3',''),(21,'Kia ceratos','123456','180','manuel','2532451','2',''),(22,'Kia ceratos','123456','180','anel','125','2','');
/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `contra` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  `cedula` varchar(45) DEFAULT NULL,
  `adcontra` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'jose','123','gomez@hotma.com','el tucan','2','4798283',''),(2,'anel','123','anel@hotma.com','los algrao','2','125',''),(3,'','','','','2','',''),(4,'anel gomez','123','correo@c.com',' la casa','2','123587',''),(5,'manuel','123','manuel@hotmail.com','david chiriqui  el tucan','2','2532451',''),(6,'nelson','123','nelson@h.com','aguaduclce','2','69420','');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-17 20:56:20
