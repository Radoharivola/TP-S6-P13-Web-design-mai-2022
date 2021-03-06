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
INSERT INTO `contenu` VALUES (6,'2022-05-14 18:21:09','D??finition simple du r??chauffement climatique','     Le r??chauffement climatique est un ph??nom??ne global de transformation du climat caract??ris?? par une augmentation g??n??rale des temp??ratures moyennes (notamment li??e aux activit??s humaines), et qui modifie durablement les ??quilibres m??t??orologiques et les ??cosyst??mes.Lorsque l???on en parle aujourd???hui, il s???agit du ph??nom??ne d???augmentation des temp??ratures qui se produit sur Terre depuis 100 ?? 150 ans. Depuis le d??but de la R??volution Industrielle, les temp??ratures moyennes sur terre ont en effet augment?? plus ou moins r??guli??rement. En 2016, la temp??rature moyenne sur la plan??te terre ??tait environ 1 ?? 1.5 degr??s au dessus des temp??ratures moyennes de l?????re pr??-industrielle (avant 1850).'),(7,'2022-05-14 14:46:18','     D??finition scientifique du r??chauffement climatique  ','De fa??on plus pr??cise, lorsque l???on parle du r??chauffement climatique, on parle de l???augmentation des temp??ratures li??es ?? l???activit?? industrielle et notamment ?? l???effet de serre : on parle donc parfois du r??chauffement climatique dit ?? d???origine anthropique ?? (d???origine humaine). Il s???agit donc d???une forme dont les causes ne sont pas naturelles mais ??conomiques et industrielles.De nombreux scientifiques ??tudient ce ph??nom??ne et tentent de comprendre comment les activit??s des soci??t??s humaines provoque ce r??chauffement. Ces scientifiques sont regroup??s au sein du GIEC (Groupe International d???Experts sur le Climat), et ils publient r??guli??rement des rapports ??tudiant l?????volution du r??chauffement climatique (voir plus bas).'),(8,'2022-05-14 14:46:46','l???effet de serre        ','Les premi??res suppositions sur l???effet de serre sont faites par le scientifique Jacques Fourier en 1824. Plusieurs scientifiques apr??s lui vont ??tudier et tenter de quantifier le ph??nom??ne, comme Claude Pouillet et John Tyndall. Mais la premi??re exp??rience de validation et de quantification pr??cise de l???effet de serre est faite par le scientifique Svante Arrhenius ?? la fin du XIX??me si??cle. Dans les ann??es 1890, il d??couvre qu???un air riche en gaz carbonique retient plus la chaleur des rayonnements solaires, ce qui conduit ?? une augmentation de la temp??rature de l???air. Il en conclut que si l???on rejette dans l???atmosph??re de grandes quantit??s de carbone (?? cause des activit??s industrielles fonctionnant par la combustion du charbon), l???air va se charger en CO2 et retenir plus de chaleur. Les premi??res estimations de l???augmentation des temp??ratures faites par Arrhenius ou d???autres scientifiques de l?????poque comme le g??ologue Thomas Chamberlin sont les suivantes : si l???on double la quantit?? de gaz ?? effet de serre dans l???atmosph??re, la temp??rature moyenne augmentera de 5 degr??s. En 1901, Gustaf Ekholm utilise pour la premi??re fois le terme ?? effet de serre ?? pour d??crire le ph??nom??ne.Pendant plusieurs d??cennies ces d??couvertes ne sont pas prises au s??rieux dans la communaut?? scientifique. ?? l?????poque beaucoup de sp??cialistes estiment que la nature pouvait s???auto-r??guler et que l???impact de l???homme ??tait minime. Notamment, beaucoup de scientifiques pensaient que le surplus de CO2 serait de toute fa??on absorb?? par l???oc??an, ce qui est vrai, mais pas totalement. Toutefois, la th??se de la possibilit?? d???un r??chauffement climatique li?? aux gaz ?? effet de serre (dont le gaz carbonique) finit par ??tre valid??e dans les ann??es 1940 par Gilbert Plass. ?? l???aide des technologies modernes, il prouve de fa??on d??finitive que la concentration de gaz ?? effet de serre dans l???atmosph??re influe sur la capacit?? de l???air ?? retenir les rayons infrarouges et la chaleur. Ce sont les premi??res d??finitions du r??chauffement climatique.'),(9,'2022-05-14 18:21:30','Fonte des glaces','     En tant qu?????tres humains, nous comptons en permanence sur la nature que ce soit pour la sant??, l???alimentation, ou le bien-??tre g??n??ral. Une pression telle en r??alit?? que nous la repoussons sans cesse bien au-del?? de ce qu???elle peut nous offrir. Et tandis que nous luttons contre la pollution plastique ou la d??forestation, il y a aussi les glaces qui fondent ?? l???autre bout du monde, et dont la disparition progressive ?? des cons??quences dramatiques. \r\nLa fonte des glaces, c???est un peu la repr??sentation ultime du r??chauffement climatique. Nous avons beaucoup de choses ?? retenir d???elle, et encore plus ?? faire pour tenter de la freiner. Cet article fera le point sur ce que l???on sait aujourd???hui de la fonte des glaces, et sur les projets mis en ??uvre pour pr??server au maximum ce qui peut l?????tre.\r\n\r\nDe mani??re g??n??rale, les ann??es qui viennent de s?????couler ont ??t?? les plus chaudes jamais enregistr??es depuis 1850. L???ann??e 2018, ?? elle seule, a battu 77 records de chaleur ?? travers le monde.\r\n\r\nR??sultat, les glaces fondent partout sur la plan??te et m??me beaucoup plus vite que pr??vu. Au Groenland et en Antarctique, la saison des fontes commence de plus en plus t??t tandis qu???au Canada, dans les r??gions arctiques, le perg??lisol d??g??le si rapidement que les ??quipements scientifiques laiss??s sur place sont emport??s par les eaux. \r\n\r\nDans les r??gions polaires du globe comme en Antarctique, on constate depuis quelques ann??es que la quantit?? de glaces flottant ?? la surface de l???eau augmente. Pour autant, cela ne signifie pas que la fonte des glaces s???est invers??e, bien au contraire. Ce qui importe en r??alit?? dans les analyses, ce n???est pas le nombre mais la masse des glaces en question et ces glaces marines flottantes sont tout juste assez ??paisses pour permettre le passage des animaux. \r\n\r\nD???un autre c??t??, par d??finition, ce ne sont pas les glaces marines qui participeront ?? l?????l??vation du niveau des mers. Ce sont les glaces terrestres qui sont le plus ?? craindre ici. En fondant, les glaciers laissent s?????chapper d?????normes quantit??s d???eau douce qui finiront par se m??langer ?? l???eau sal??e. L???augmentation du niveau des mers serait ainsi d???environ 3 mm par an.\r\n\r\nBien s??r, le ph??nom??ne est en partie naturel mais le r??chauffement climatique l???a acc??l??r?? et g??n??ralis??. Les zones jusque-l?? ??pargn??es comme l???Antarctique commencent ?? subir les cons??quences de la hausse des temp??ratures. Les glaces fondent et s?????coulent ?? la fois par le haut sous l???effet des temp??ratures, mais aussi par le bas, puisque l???eau des oc??ans s???est elle aussi r??chauff??e\r\n\r\nAutrement dit, les effets du changement climatique ont largement d??pass?? les fronti??res des seuls pays ??metteurs de gaz ?? effet de serre. L???Antarctique, qui n???accueille pourtant aucune population humaine permanente, a gagn?? pr??s de 3??C en 50 ans tandis qu???en Arctique, le r??chauffement global est deux fois plus important que sur le reste de la plan??te. Et le ph??nom??ne se poursuit encore, d???autant plus pr??occupant que l???on estime aujourd???hui que le r??chauffement mondial pourrait d??passer les 5??C.       ');
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
