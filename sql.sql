-- MySQL dump 10.13  Distrib 5.7.11, for Win32 (AMD64)
--
-- Host: localhost    Database: preval
-- ------------------------------------------------------
-- Server version	5.7.11

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contenu`
--

DROP TABLE IF EXISTS `contenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dateajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL DEFAULT 'Nouvel article',
  `texte` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contenu`
--

LOCK TABLES `contenu` WRITE;
/*!40000 ALTER TABLE `contenu` DISABLE KEYS */;
INSERT INTO `contenu` VALUES (6,'2022-05-14 18:21:09','Définition simple du réchauffement climatique','     Le réchauffement climatique est un phénomène global de transformation du climat caractérisé par une augmentation générale des températures moyennes (notamment liée aux activités humaines), et qui modifie durablement les équilibres météorologiques et les écosystèmes.Lorsque l’on en parle aujourd’hui, il s’agit du phénomène d’augmentation des températures qui se produit sur Terre depuis 100 à 150 ans. Depuis le début de la Révolution Industrielle, les températures moyennes sur terre ont en effet augmenté plus ou moins régulièrement. En 2016, la température moyenne sur la planète terre était environ 1 à 1.5 degrés au dessus des températures moyennes de l’ère pré-industrielle (avant 1850).'),(7,'2022-05-14 14:46:18','     Définition scientifique du réchauffement climatique  ','De façon plus précise, lorsque l’on parle du réchauffement climatique, on parle de l’augmentation des températures liées à l’activité industrielle et notamment à l’effet de serre : on parle donc parfois du réchauffement climatique dit « d’origine anthropique » (d’origine humaine). Il s’agit donc d’une forme dont les causes ne sont pas naturelles mais économiques et industrielles.De nombreux scientifiques étudient ce phénomène et tentent de comprendre comment les activités des sociétés humaines provoque ce réchauffement. Ces scientifiques sont regroupés au sein du GIEC (Groupe International d’Experts sur le Climat), et ils publient régulièrement des rapports étudiant l’évolution du réchauffement climatique (voir plus bas).'),(8,'2022-05-14 14:46:46','l’effet de serre        ','Les premières suppositions sur l’effet de serre sont faites par le scientifique Jacques Fourier en 1824. Plusieurs scientifiques après lui vont étudier et tenter de quantifier le phénomène, comme Claude Pouillet et John Tyndall. Mais la première expérience de validation et de quantification précise de l’effet de serre est faite par le scientifique Svante Arrhenius à la fin du XIXème siècle. Dans les années 1890, il découvre qu’un air riche en gaz carbonique retient plus la chaleur des rayonnements solaires, ce qui conduit à une augmentation de la température de l’air. Il en conclut que si l’on rejette dans l’atmosphère de grandes quantités de carbone (à cause des activités industrielles fonctionnant par la combustion du charbon), l’air va se charger en CO2 et retenir plus de chaleur. Les premières estimations de l’augmentation des températures faites par Arrhenius ou d’autres scientifiques de l’époque comme le géologue Thomas Chamberlin sont les suivantes : si l’on double la quantité de gaz à effet de serre dans l’atmosphère, la température moyenne augmentera de 5 degrés. En 1901, Gustaf Ekholm utilise pour la première fois le terme « effet de serre » pour décrire le phénomène.Pendant plusieurs décennies ces découvertes ne sont pas prises au sérieux dans la communauté scientifique. À l’époque beaucoup de spécialistes estiment que la nature pouvait s’auto-réguler et que l’impact de l’homme était minime. Notamment, beaucoup de scientifiques pensaient que le surplus de CO2 serait de toute façon absorbé par l’océan, ce qui est vrai, mais pas totalement. Toutefois, la thèse de la possibilité d’un réchauffement climatique lié aux gaz à effet de serre (dont le gaz carbonique) finit par être validée dans les années 1940 par Gilbert Plass. À l’aide des technologies modernes, il prouve de façon définitive que la concentration de gaz à effet de serre dans l’atmosphère influe sur la capacité de l’air à retenir les rayons infrarouges et la chaleur. Ce sont les premières définitions du réchauffement climatique.'),(9,'2022-05-14 18:21:30','Fonte des glaces','     En tant qu’êtres humains, nous comptons en permanence sur la nature que ce soit pour la santé, l’alimentation, ou le bien-être général. Une pression telle en réalité que nous la repoussons sans cesse bien au-delà de ce qu’elle peut nous offrir. Et tandis que nous luttons contre la pollution plastique ou la déforestation, il y a aussi les glaces qui fondent à l’autre bout du monde, et dont la disparition progressive à des conséquences dramatiques. \r\nLa fonte des glaces, c’est un peu la représentation ultime du réchauffement climatique. Nous avons beaucoup de choses à retenir d’elle, et encore plus à faire pour tenter de la freiner. Cet article fera le point sur ce que l’on sait aujourd’hui de la fonte des glaces, et sur les projets mis en œuvre pour préserver au maximum ce qui peut l’être.\r\n\r\nDe manière générale, les années qui viennent de s’écouler ont été les plus chaudes jamais enregistrées depuis 1850. L’année 2018, à elle seule, a battu 77 records de chaleur à travers le monde.\r\n\r\nRésultat, les glaces fondent partout sur la planète et même beaucoup plus vite que prévu. Au Groenland et en Antarctique, la saison des fontes commence de plus en plus tôt tandis qu’au Canada, dans les régions arctiques, le pergélisol dégèle si rapidement que les équipements scientifiques laissés sur place sont emportés par les eaux. \r\n\r\nDans les régions polaires du globe comme en Antarctique, on constate depuis quelques années que la quantité de glaces flottant à la surface de l’eau augmente. Pour autant, cela ne signifie pas que la fonte des glaces s’est inversée, bien au contraire. Ce qui importe en réalité dans les analyses, ce n’est pas le nombre mais la masse des glaces en question et ces glaces marines flottantes sont tout juste assez épaisses pour permettre le passage des animaux. \r\n\r\nD’un autre côté, par définition, ce ne sont pas les glaces marines qui participeront à l’élévation du niveau des mers. Ce sont les glaces terrestres qui sont le plus à craindre ici. En fondant, les glaciers laissent s’échapper d’énormes quantités d’eau douce qui finiront par se mélanger à l’eau salée. L’augmentation du niveau des mers serait ainsi d’environ 3 mm par an.\r\n\r\nBien sûr, le phénomène est en partie naturel mais le réchauffement climatique l’a accéléré et généralisé. Les zones jusque-là épargnées comme l’Antarctique commencent à subir les conséquences de la hausse des températures. Les glaces fondent et s’écoulent à la fois par le haut sous l’effet des températures, mais aussi par le bas, puisque l’eau des océans s’est elle aussi réchauffée\r\n\r\nAutrement dit, les effets du changement climatique ont largement dépassé les frontières des seuls pays émetteurs de gaz à effet de serre. L’Antarctique, qui n’accueille pourtant aucune population humaine permanente, a gagné près de 3°C en 50 ans tandis qu’en Arctique, le réchauffement global est deux fois plus important que sur le reste de la planète. Et le phénomène se poursuit encore, d’autant plus préoccupant que l’on estime aujourd’hui que le réchauffement mondial pourrait dépasser les 5°C.       ');
/*!40000 ALTER TABLE `contenu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-15  0:03:15
