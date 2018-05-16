-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: adecco-1-2018
-- ------------------------------------------------------
-- Server version	5.7.22-0ubuntu0.16.04.1

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
-- Table structure for table `campionato`
--

DROP TABLE IF EXISTS `campionato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `campionato` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `team1` varchar(45) NOT NULL,
  `team2` varchar(45) NOT NULL,
  `championship` varchar(45) NOT NULL,
  `result` varchar(50) NOT NULL,
  `date` int(10) unsigned NOT NULL,
  `giornata` int(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campionato`
--

LOCK TABLES `campionato` WRITE;
/*!40000 ALTER TABLE `campionato` DISABLE KEYS */;
INSERT INTO `campionato` VALUES (5,'juve','milan','serie a','3-0',20180509,1);
/*!40000 ALTER TABLE `campionato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `alpha2code` char(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capital` varchar(100) DEFAULT NULL,
  `population` int(11) DEFAULT NULL,
  `flag` varchar(1000) NOT NULL,
  PRIMARY KEY (`alpha2code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES ('00','Ciao','Uella',1000,'https://images.everyeye.it/img-notizie/crash-bandicoot-sony-pubblica-un-immagine-twitter-v2-258919-1280x720.jpg'),('10','Sonic','Nintendo',2000,'https://www.cinematographe.it/wp-content/uploads/2018/02/sonic-246b6a5a9313ca6a933a0fddc9bbb5ae9.jpg'),('AD','Andorra','Andorra la Vella',78014,'https://restcountries.eu/data/and.svg'),('AE','United Arab Emirates','Abu Dhabi',9856000,'https://restcountries.eu/data/are.svg'),('AF','Afghanistan','Kabul',27657145,'https://restcountries.eu/data/afg.svg'),('AG','Antigua and Barbuda','Saint John\'s',86295,'https://restcountries.eu/data/atg.svg'),('AI','Anguilla','The Valley',13452,'https://restcountries.eu/data/aia.svg'),('AL','Albania','Tirana',2886026,'https://restcountries.eu/data/alb.svg'),('AM','Armenia','Yerevan',2994400,'https://restcountries.eu/data/arm.svg'),('AO','Angola','Luanda',25868000,'https://restcountries.eu/data/ago.svg'),('AQ','Antarctica','',1000,'https://restcountries.eu/data/ata.svg'),('AR','Argentina','Buenos Aires',43590400,'https://restcountries.eu/data/arg.svg'),('AS','American Samoa','Pago Pago',57100,'https://restcountries.eu/data/asm.svg'),('AT','Austria','Vienna',8725931,'https://restcountries.eu/data/aut.svg'),('AU','Australia','Canberra',24117360,'https://restcountries.eu/data/aus.svg'),('AW','Aruba','Oranjestad',107394,'https://restcountries.eu/data/abw.svg'),('AX','Åland Islands','Mariehamn',28875,'https://restcountries.eu/data/ala.svg'),('AZ','Azerbaijan','Baku',9730500,'https://restcountries.eu/data/aze.svg'),('BA','Bosnia and Herzegovina','Sarajevo',3531159,'https://restcountries.eu/data/bih.svg'),('BB','Barbados','Bridgetown',285000,'https://restcountries.eu/data/brb.svg'),('BD','Bangladesh','Dhaka',161006790,'https://restcountries.eu/data/bgd.svg'),('BE','Belgium','Brussels',11319511,'https://restcountries.eu/data/bel.svg'),('BF','Burkina Faso','Ouagadougou',19034397,'https://restcountries.eu/data/bfa.svg'),('BG','Bulgaria','Sofia',7153784,'https://restcountries.eu/data/bgr.svg'),('BH','Bahrain','Manama',1404900,'https://restcountries.eu/data/bhr.svg'),('BI','Burundi','Bujumbura',10114505,'https://restcountries.eu/data/bdi.svg'),('BJ','Benin','Porto-Novo',10653654,'https://restcountries.eu/data/ben.svg'),('BL','Saint Barthélemy','Gustavia',9417,'https://restcountries.eu/data/blm.svg'),('BM','Bermuda','Hamilton',61954,'https://restcountries.eu/data/bmu.svg'),('BN','Brunei Darussalam','Bandar Seri Begawan',411900,'https://restcountries.eu/data/brn.svg'),('BO','Bolivia (Plurinational State of)','Sucre',10985059,'https://restcountries.eu/data/bol.svg'),('BQ','Bonaire, Sint Eustatius and Saba','Kralendijk',17408,'https://restcountries.eu/data/bes.svg'),('BR','Brazil','Brasília',206135893,'https://restcountries.eu/data/bra.svg'),('BS','Bahamas','Nassau',378040,'https://restcountries.eu/data/bhs.svg'),('BT','Bhutan','Thimphu',775620,'https://restcountries.eu/data/btn.svg'),('BV','Bouvet Island','',0,'https://restcountries.eu/data/bvt.svg'),('BW','Botswana','Gaborone',2141206,'https://restcountries.eu/data/bwa.svg'),('BY','Belarus','Minsk',9498700,'https://restcountries.eu/data/blr.svg'),('BZ','Belize','Belmopan',370300,'https://restcountries.eu/data/blz.svg'),('CA','Canada','Ottawa',36155487,'https://restcountries.eu/data/can.svg'),('CC','Cocos (Keeling) Islands','West Island',550,'https://restcountries.eu/data/cck.svg'),('CD','Congo (Democratic Republic of the)','Kinshasa',85026000,'https://restcountries.eu/data/cod.svg'),('CF','Central African Republic','Bangui',4998000,'https://restcountries.eu/data/caf.svg'),('CG','Congo','Brazzaville',4741000,'https://restcountries.eu/data/cog.svg'),('CH','Switzerland','Bern',8341600,'https://restcountries.eu/data/che.svg'),('CI','Côte d\'Ivoire','Yamoussoukro',22671331,'https://restcountries.eu/data/civ.svg'),('CK','Cook Islands','Avarua',18100,'https://restcountries.eu/data/cok.svg'),('CL','Chile','Santiago',18191900,'https://restcountries.eu/data/chl.svg'),('CM','Cameroon','Yaoundé',22709892,'https://restcountries.eu/data/cmr.svg'),('CN','China','Beijing',1377422166,'https://restcountries.eu/data/chn.svg'),('CO','Colombia','Bogotá',48759958,'https://restcountries.eu/data/col.svg'),('CR','Costa Rica','San José',4890379,'https://restcountries.eu/data/cri.svg'),('CU','Cuba','Havana',11239004,'https://restcountries.eu/data/cub.svg'),('CV','Cabo Verde','Praia',531239,'https://restcountries.eu/data/cpv.svg'),('CW','Curaçao','Willemstad',154843,'https://restcountries.eu/data/cuw.svg'),('CX','Christmas Island','Flying Fish Cove',2072,'https://restcountries.eu/data/cxr.svg'),('CY','Cyprus','Nicosia',847000,'https://restcountries.eu/data/cyp.svg'),('CZ','Czech Republic','Prague',10558524,'https://restcountries.eu/data/cze.svg'),('DE','Germany','Berlin',81770900,'https://restcountries.eu/data/deu.svg'),('DJ','Djibouti','Djibouti',900000,'https://restcountries.eu/data/dji.svg'),('DK','Denmark','Copenhagen',5717014,'https://restcountries.eu/data/dnk.svg'),('DM','Dominica','Roseau',71293,'https://restcountries.eu/data/dma.svg'),('DO','Dominican Republic','Santo Domingo',10075045,'https://restcountries.eu/data/dom.svg'),('DZ','Algeria','Algiers',40400000,'https://restcountries.eu/data/dza.svg'),('EC','Ecuador','Quito',16545799,'https://restcountries.eu/data/ecu.svg'),('EE','Estonia','Tallinn',1315944,'https://restcountries.eu/data/est.svg'),('EG','Egypt','Cairo',91290000,'https://restcountries.eu/data/egy.svg'),('EH','Western Sahara','El Aaiún',510713,'https://restcountries.eu/data/esh.svg'),('ER','Eritrea','Asmara',5352000,'https://restcountries.eu/data/eri.svg'),('ES','Spain','Madrid',46438422,'https://restcountries.eu/data/esp.svg'),('ET','Ethiopia','Addis Ababa',92206005,'https://restcountries.eu/data/eth.svg'),('FI','Finland','Helsinki',5491817,'https://restcountries.eu/data/fin.svg'),('FJ','Fiji','Suva',867000,'https://restcountries.eu/data/fji.svg'),('FK','Falkland Islands (Malvinas)','Stanley',2563,'https://restcountries.eu/data/flk.svg'),('FM','Micronesia (Federated States of)','Palikir',102800,'https://restcountries.eu/data/fsm.svg'),('FO','Faroe Islands','Tórshavn',49376,'https://restcountries.eu/data/fro.svg'),('FR','France','Paris',66710000,'https://restcountries.eu/data/fra.svg'),('GA','Gabon','Libreville',1802278,'https://restcountries.eu/data/gab.svg'),('GB','United Kingdom of Great Britain and Northern Ireland','London',65110000,'https://restcountries.eu/data/gbr.svg'),('GD','Grenada','St. George\'s',103328,'https://restcountries.eu/data/grd.svg'),('GE','Georgia','Tbilisi',3720400,'https://restcountries.eu/data/geo.svg'),('GF','French Guiana','Cayenne',254541,'https://restcountries.eu/data/guf.svg'),('GG','Guernsey','St. Peter Port',62999,'https://restcountries.eu/data/ggy.svg'),('GH','Ghana','Accra',27670174,'https://restcountries.eu/data/gha.svg'),('GI','Gibraltar','Gibraltar',33140,'https://restcountries.eu/data/gib.svg'),('GL','Greenland','Nuuk',55847,'https://restcountries.eu/data/grl.svg'),('GM','Gambia','Banjul',1882450,'https://restcountries.eu/data/gmb.svg'),('GN','Guinea','Conakry',12947000,'https://restcountries.eu/data/gin.svg'),('GP','Guadeloupe','Basse-Terre',400132,'https://restcountries.eu/data/glp.svg'),('GQ','Equatorial Guinea','Malabo',1222442,'https://restcountries.eu/data/gnq.svg'),('GR','Greece','Athens',10858018,'https://restcountries.eu/data/grc.svg'),('GS','South Georgia and the South Sandwich Islands','King Edward Point',30,'https://restcountries.eu/data/sgs.svg'),('GT','Guatemala','Guatemala City',16176133,'https://restcountries.eu/data/gtm.svg'),('GU','Guam','Hagåtña',184200,'https://restcountries.eu/data/gum.svg'),('GW','Guinea-Bissau','Bissau',1547777,'https://restcountries.eu/data/gnb.svg'),('GY','Guyana','Georgetown',746900,'https://restcountries.eu/data/guy.svg'),('HK','Hong Kong','City of Victoria',7324300,'https://restcountries.eu/data/hkg.svg'),('HM','Heard Island and McDonald Islands','',0,'https://restcountries.eu/data/hmd.svg'),('HN','Honduras','Tegucigalpa',8576532,'https://restcountries.eu/data/hnd.svg'),('HR','Croatia','Zagreb',4190669,'https://restcountries.eu/data/hrv.svg'),('HT','Haiti','Port-au-Prince',11078033,'https://restcountries.eu/data/hti.svg'),('HU','Hungary','Budapest',9823000,'https://restcountries.eu/data/hun.svg'),('ID','Indonesia','Jakarta',258705000,'https://restcountries.eu/data/idn.svg'),('IE','Ireland','Dublin',6378000,'https://restcountries.eu/data/irl.svg'),('IL','Israel','Jerusalem',8527400,'https://restcountries.eu/data/isr.svg'),('IM','Isle of Man','Douglas',84497,'https://restcountries.eu/data/imn.svg'),('IN','India','New Delhi',1295210000,'https://restcountries.eu/data/ind.svg'),('IO','British Indian Ocean Territory','Diego Garcia',3000,'https://restcountries.eu/data/iot.svg'),('IQ','Iraq','Baghdad',37883543,'https://restcountries.eu/data/irq.svg'),('IR','Iran (Islamic Republic of)','Tehran',79369900,'https://restcountries.eu/data/irn.svg'),('IS','Iceland','Reykjavík',334300,'https://restcountries.eu/data/isl.svg'),('IT','Italy','Rome',60665551,'https://restcountries.eu/data/ita.svg'),('JE','Jersey','Saint Helier',100800,'https://restcountries.eu/data/jey.svg'),('JM','Jamaica','Kingston',2723246,'https://restcountries.eu/data/jam.svg'),('JO','Jordan','Amman',9531712,'https://restcountries.eu/data/jor.svg'),('JP','Japan','Tokyo',126960000,'https://restcountries.eu/data/jpn.svg'),('KE','Kenya','Nairobi',47251000,'https://restcountries.eu/data/ken.svg'),('KG','Kyrgyzstan','Bishkek',6047800,'https://restcountries.eu/data/kgz.svg'),('KH','Cambodia','Phnom Penh',15626444,'https://restcountries.eu/data/khm.svg'),('KI','Kiribati','South Tarawa',113400,'https://restcountries.eu/data/kir.svg'),('KM','Comoros','Moroni',806153,'https://restcountries.eu/data/com.svg'),('KN','Saint Kitts and Nevis','Basseterre',46204,'https://restcountries.eu/data/kna.svg'),('KP','Korea (Democratic People\'s Republic of)','Pyongyang',25281000,'https://restcountries.eu/data/prk.svg'),('KR','Korea (Republic of)','Seoul',50801405,'https://restcountries.eu/data/kor.svg'),('KW','Kuwait','Kuwait City',4183658,'https://restcountries.eu/data/kwt.svg'),('KY','Cayman Islands','George Town',58238,'https://restcountries.eu/data/cym.svg'),('KZ','Kazakhstan','Astana',17753200,'https://restcountries.eu/data/kaz.svg'),('LA','Lao People\'s Democratic Republic','Vientiane',6492400,'https://restcountries.eu/data/lao.svg'),('LB','Lebanon','Beirut',5988000,'https://restcountries.eu/data/lbn.svg'),('LC','Saint Lucia','Castries',186000,'https://restcountries.eu/data/lca.svg'),('LI','Liechtenstein','Vaduz',37623,'https://restcountries.eu/data/lie.svg'),('LK','Sri Lanka','Colombo',20966000,'https://restcountries.eu/data/lka.svg'),('LR','Liberia','Monrovia',4615000,'https://restcountries.eu/data/lbr.svg'),('LS','Lesotho','Maseru',1894194,'https://restcountries.eu/data/lso.svg'),('LT','Lithuania','Vilnius',2872294,'https://restcountries.eu/data/ltu.svg'),('LU','Luxembourg','Luxembourg',576200,'https://restcountries.eu/data/lux.svg'),('LV','Latvia','Riga',1961600,'https://restcountries.eu/data/lva.svg'),('LY','Libya','Tripoli',6385000,'https://restcountries.eu/data/lby.svg'),('M0','Mario','Funghettolandia',10000,'https://mario.nintendo.com/assets/img/home/intro/mario-pose2.png'),('MA','Morocco','Rabat',33337529,'https://restcountries.eu/data/mar.svg'),('MC','Monaco','Monaco',38400,'https://restcountries.eu/data/mco.svg'),('MD','Moldova (Republic of)','Chișinău',3553100,'https://restcountries.eu/data/mda.svg'),('ME','Montenegro','Podgorica',621810,'https://restcountries.eu/data/mne.svg'),('MF','Saint Martin (French part)','Marigot',36979,'https://restcountries.eu/data/maf.svg'),('MG','Madagascar','Antananarivo',22434363,'https://restcountries.eu/data/mdg.svg'),('MH','Marshall Islands','Majuro',54880,'https://restcountries.eu/data/mhl.svg'),('MK','Macedonia (the former Yugoslav Republic of)','Skopje',2058539,'https://restcountries.eu/data/mkd.svg'),('ML','Mali','Bamako',18135000,'https://restcountries.eu/data/mli.svg'),('MM','Myanmar','Naypyidaw',51419420,'https://restcountries.eu/data/mmr.svg'),('MN','Mongolia','Ulan Bator',3093100,'https://restcountries.eu/data/mng.svg'),('MO','Macao','',649100,'https://restcountries.eu/data/mac.svg'),('MP','Northern Mariana Islands','Saipan',56940,'https://restcountries.eu/data/mnp.svg'),('MQ','Martinique','Fort-de-France',378243,'https://restcountries.eu/data/mtq.svg'),('MR','Mauritania','Nouakchott',3718678,'https://restcountries.eu/data/mrt.svg'),('MS','Montserrat','Plymouth',4922,'https://restcountries.eu/data/msr.svg'),('MT','Malta','Valletta',425384,'https://restcountries.eu/data/mlt.svg'),('MU','Mauritius','Port Louis',1262879,'https://restcountries.eu/data/mus.svg'),('MV','Maldives','Malé',344023,'https://restcountries.eu/data/mdv.svg'),('MW','Malawi','Lilongwe',16832910,'https://restcountries.eu/data/mwi.svg'),('MX','Mexico','Mexico City',122273473,'https://restcountries.eu/data/mex.svg'),('MY','Malaysia','Kuala Lumpur',31405416,'https://restcountries.eu/data/mys.svg'),('MZ','Mozambique','Maputo',26423700,'https://restcountries.eu/data/moz.svg'),('NA','Namibia','Windhoek',2324388,'https://restcountries.eu/data/nam.svg'),('NC','New Caledonia','Nouméa',268767,'https://restcountries.eu/data/ncl.svg'),('NE','Niger','Niamey',20715000,'https://restcountries.eu/data/ner.svg'),('NF','Norfolk Island','Kingston',2302,'https://restcountries.eu/data/nfk.svg'),('NG','Nigeria','Abuja',186988000,'https://restcountries.eu/data/nga.svg'),('NI','Nicaragua','Managua',6262703,'https://restcountries.eu/data/nic.svg'),('NL','Netherlands','Amsterdam',17019800,'https://restcountries.eu/data/nld.svg'),('NO','Norway','Oslo',5223256,'https://restcountries.eu/data/nor.svg'),('NP','Nepal','Kathmandu',28431500,'https://restcountries.eu/data/npl.svg'),('NR','Nauru','Yaren',10084,'https://restcountries.eu/data/nru.svg'),('NU','Niue','Alofi',1470,'https://restcountries.eu/data/niu.svg'),('NZ','New Zealand','Wellington',4697854,'https://restcountries.eu/data/nzl.svg'),('OM','Oman','Muscat',4420133,'https://restcountries.eu/data/omn.svg'),('PA','Panama','Panama City',3814672,'https://restcountries.eu/data/pan.svg'),('PE','Peru','Lima',31488700,'https://restcountries.eu/data/per.svg'),('PF','French Polynesia','Papeetē',271800,'https://restcountries.eu/data/pyf.svg'),('PG','Papua New Guinea','Port Moresby',8083700,'https://restcountries.eu/data/png.svg'),('PH','Philippines','Manila',103279800,'https://restcountries.eu/data/phl.svg'),('PK','Pakistan','Islamabad',194125062,'https://restcountries.eu/data/pak.svg'),('PL','Poland','Warsaw',38437239,'https://restcountries.eu/data/pol.svg'),('PM','Saint Pierre and Miquelon','Saint-Pierre',6069,'https://restcountries.eu/data/spm.svg'),('PN','Pitcairn','Adamstown',56,'https://restcountries.eu/data/pcn.svg'),('PR','Puerto Rico','San Juan',3474182,'https://restcountries.eu/data/pri.svg'),('PS','Palestine, State of','Ramallah',4682467,'https://restcountries.eu/data/pse.svg'),('PT','Portugal','Lisbon',10374822,'https://restcountries.eu/data/prt.svg'),('PW','Palau','Ngerulmud',17950,'https://restcountries.eu/data/plw.svg'),('PY','Paraguay','Asunción',6854536,'https://restcountries.eu/data/pry.svg'),('QA','Qatar','Doha',2587564,'https://restcountries.eu/data/qat.svg'),('RE','Réunion','Saint-Denis',840974,'https://restcountries.eu/data/reu.svg'),('RO','Romania','Bucharest',19861408,'https://restcountries.eu/data/rou.svg'),('RS','Serbia','Belgrade',7076372,'https://restcountries.eu/data/srb.svg'),('RU','Russian Federation','Moscow',146599183,'https://restcountries.eu/data/rus.svg'),('RW','Rwanda','Kigali',11553188,'https://restcountries.eu/data/rwa.svg'),('SA','Saudi Arabia','Riyadh',32248200,'https://restcountries.eu/data/sau.svg'),('SB','Solomon Islands','Honiara',642000,'https://restcountries.eu/data/slb.svg'),('SC','Seychelles','Victoria',91400,'https://restcountries.eu/data/syc.svg'),('SD','Sudan','Khartoum',39598700,'https://restcountries.eu/data/sdn.svg'),('SE','Sweden','Stockholm',9894888,'https://restcountries.eu/data/swe.svg'),('SG','Singapore','Singapore',5535000,'https://restcountries.eu/data/sgp.svg'),('SH','Saint Helena, Ascension and Tristan da Cunha','Jamestown',4255,'https://restcountries.eu/data/shn.svg'),('SI','Slovenia','Ljubljana',2064188,'https://restcountries.eu/data/svn.svg'),('SJ','Svalbard and Jan Mayen','Longyearbyen',2562,'https://restcountries.eu/data/sjm.svg'),('SK','Slovakia','Bratislava',5426252,'https://restcountries.eu/data/svk.svg'),('SL','Sierra Leone','Freetown',7075641,'https://restcountries.eu/data/sle.svg'),('SM','San Marino','City of San Marino',33005,'https://restcountries.eu/data/smr.svg'),('SN','Senegal','Dakar',14799859,'https://restcountries.eu/data/sen.svg'),('SO','Somalia','Mogadishu',11079000,'https://restcountries.eu/data/som.svg'),('SR','Suriname','Paramaribo',541638,'https://restcountries.eu/data/sur.svg'),('SS','South Sudan','Juba',12131000,'https://restcountries.eu/data/ssd.svg'),('ST','Sao Tome and Principe','São Tomé',187356,'https://restcountries.eu/data/stp.svg'),('SV','El Salvador','San Salvador',6520675,'https://restcountries.eu/data/slv.svg'),('SX','Sint Maarten (Dutch part)','Philipsburg',38247,'https://restcountries.eu/data/sxm.svg'),('SY','Syrian Arab Republic','Damascus',18564000,'https://restcountries.eu/data/syr.svg'),('SZ','Swaziland','Lobamba',1132657,'https://restcountries.eu/data/swz.svg'),('TC','Turks and Caicos Islands','Cockburn Town',31458,'https://restcountries.eu/data/tca.svg'),('TD','Chad','N\'Djamena',14497000,'https://restcountries.eu/data/tcd.svg'),('TF','French Southern Territories','Port-aux-Français',140,'https://restcountries.eu/data/atf.svg'),('TG','Togo','Lomé',7143000,'https://restcountries.eu/data/tgo.svg'),('TH','Thailand','Bangkok',65327652,'https://restcountries.eu/data/tha.svg'),('TJ','Tajikistan','Dushanbe',8593600,'https://restcountries.eu/data/tjk.svg'),('TK','Tokelau','Fakaofo',1411,'https://restcountries.eu/data/tkl.svg'),('TL','Timor-Leste','Dili',1167242,'https://restcountries.eu/data/tls.svg'),('TM','Turkmenistan','Ashgabat',4751120,'https://restcountries.eu/data/tkm.svg'),('TN','Tunisia','Tunis',11154400,'https://restcountries.eu/data/tun.svg'),('TO','Tonga','Nuku\'alofa',103252,'https://restcountries.eu/data/ton.svg'),('TR','Turkey','Ankara',78741053,'https://restcountries.eu/data/tur.svg'),('TT','Trinidad and Tobago','Port of Spain',1349667,'https://restcountries.eu/data/tto.svg'),('TV','Tuvalu','Funafuti',10640,'https://restcountries.eu/data/tuv.svg'),('TW','Taiwan','Taipei',23503349,'https://restcountries.eu/data/twn.svg'),('TZ','Tanzania, United Republic of','Dodoma',55155000,'https://restcountries.eu/data/tza.svg'),('UA','Ukraine','Kiev',42692393,'https://restcountries.eu/data/ukr.svg'),('UG','Uganda','Kampala',33860700,'https://restcountries.eu/data/uga.svg'),('UM','United States Minor Outlying Islands','',300,'https://restcountries.eu/data/umi.svg'),('US','United States of America','Washington, D.C.',323947000,'https://restcountries.eu/data/usa.svg'),('UY','Uruguay','Montevideo',3480222,'https://restcountries.eu/data/ury.svg'),('UZ','Uzbekistan','Tashkent',31576400,'https://restcountries.eu/data/uzb.svg'),('VA','Holy See','Rome',451,'https://restcountries.eu/data/vat.svg'),('VC','Saint Vincent and the Grenadines','Kingstown',109991,'https://restcountries.eu/data/vct.svg'),('VE','Venezuela (Bolivarian Republic of)','Caracas',31028700,'https://restcountries.eu/data/ven.svg'),('VG','Virgin Islands (British)','Road Town',28514,'https://restcountries.eu/data/vgb.svg'),('VI','Virgin Islands (U.S.)','Charlotte Amalie',114743,'https://restcountries.eu/data/vir.svg'),('VN','Viet Nam','Hanoi',92700000,'https://restcountries.eu/data/vnm.svg'),('VU','Vanuatu','Port Vila',277500,'https://restcountries.eu/data/vut.svg'),('WF','Wallis and Futuna','Mata-Utu',11750,'https://restcountries.eu/data/wlf.svg'),('WS','Samoa','Apia',194899,'https://restcountries.eu/data/wsm.svg'),('XK','Republic of Kosovo','Pristina',1733842,'https://restcountries.eu/data/kos.svg'),('YE','Yemen','Sana\'a',27478000,'https://restcountries.eu/data/yem.svg'),('YT','Mayotte','Mamoudzou',226915,'https://restcountries.eu/data/myt.svg'),('ZA','South Africa','Pretoria',55653654,'https://restcountries.eu/data/zaf.svg'),('ZM','Zambia','Lusaka',15933883,'https://restcountries.eu/data/zmb.svg'),('ZW','Zimbabwe','Harare',14240168,'https://restcountries.eu/data/zwe.svg');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game`
--

DROP TABLE IF EXISTS `game`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `developer` varchar(100) NOT NULL,
  `publisher_id` int(10) NOT NULL,
  `genre_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `multiplayer` tinyint(1) NOT NULL,
  `singleplayer` tinyint(1) NOT NULL,
  `launch_date` date NOT NULL,
  `image` varchar(4000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id_121424_idx` (`genre_id`),
  KEY `publisher_id_12_idx` (`publisher_id`),
  CONSTRAINT `genre_id_121424` FOREIGN KEY (`genre_id`) REFERENCES `game_genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `publisher_id_12` FOREIGN KEY (`publisher_id`) REFERENCES `publishers` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game`
--

LOCK TABLES `game` WRITE;
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` VALUES (1,'Deus Ex: Mankind Divided','Eidos Montreal',2,38,0,1,'2017-08-23','https://images-na.ssl-images-amazon.com/images/I/81P3rmr4CEL._SL1500_.jpg');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `game_genre`
--

DROP TABLE IF EXISTS `game_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `game_genre` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `game_genre`
--

LOCK TABLES `game_genre` WRITE;
/*!40000 ALTER TABLE `game_genre` DISABLE KEYS */;
INSERT INTO `game_genre` VALUES (24,'Action'),(25,'Adventure'),(26,'Casual'),(27,'FPS'),(28,'Hidden Object'),(29,'Horror'),(30,'Indie'),(31,'Life Simulation'),(32,'MMO'),(33,'Open World'),(34,'Platformer'),(35,'Point & Click'),(36,'Puzzle'),(37,'Racing'),(38,'RPG'),(39,'Simulation'),(40,'Sport'),(41,'Story Rich'),(42,'Strategy'),(43,'Survival'),(44,'Third-Person Shooter'),(45,'Visual Novel'),(46,'VR');
/*!40000 ALTER TABLE `game_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gym`
--

DROP TABLE IF EXISTS `gym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gym` (
  `idgym` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL,
  `sex` char(1) NOT NULL,
  `ranking` int(11) NOT NULL,
  PRIMARY KEY (`idgym`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gym`
--

LOCK TABLES `gym` WRITE;
/*!40000 ALTER TABLE `gym` DISABLE KEYS */;
/*!40000 ALTER TABLE `gym` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manga`
--

DROP TABLE IF EXISTS `manga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manga` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `manga` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `genre_id` int(10) unsigned NOT NULL,
  `released_date` date NOT NULL,
  `frequency` varchar(45) NOT NULL,
  `cover` varchar(4000) NOT NULL,
  `anime` varchar(3) DEFAULT NULL,
  `vote_anime` tinyint(2) unsigned DEFAULT NULL,
  `released_date_anime` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genre_id_123456789_idx` (`genre_id`),
  CONSTRAINT `genre_id_123456789` FOREIGN KEY (`genre_id`) REFERENCES `manga_genres` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manga`
--

LOCK TABLES `manga` WRITE;
/*!40000 ALTER TABLE `manga` DISABLE KEYS */;
INSERT INTO `manga` VALUES (1,'One Piece','Eiichiro oda',2,'1997-07-19','Weekly','https://images-na.ssl-images-amazon.com/images/I/71gqYK-DFHL.jpg','Yes',9,'1999-10-20');
/*!40000 ALTER TABLE `manga` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manga_genres`
--

DROP TABLE IF EXISTS `manga_genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manga_genres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `genre` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manga_genres`
--

LOCK TABLES `manga_genres` WRITE;
/*!40000 ALTER TABLE `manga_genres` DISABLE KEYS */;
INSERT INTO `manga_genres` VALUES (1,'Arti Marziali'),(2,'Avventura'),(3,'Azione'),(4,'Bambini'),(5,'Combattimento'),(6,'Commedia'),(7,'Crimine'),(8,'Cucina'),(9,'Demenziale'),(10,'Demoni'),(11,'Drammatico'),(12,'Ecchi'),(13,'Erotico'),(14,'Fantascienza'),(15,'Fantastico'),(16,'Fantasy'),(17,'Fiaba'),(18,'Gang Giovanili'),(19,'Gender Bender'),(20,'Giallo'),(21,'Gioco'),(22,'Guerra'),(23,'Guro'),(24,'Harem'),(25,'Hentai'),(26,'Horror'),(27,'Legal Drama'),(28,'Lolicon'),(29,'Magia'),(30,'Majokko'),(31,'Mecha'),(32,'Mistero'),(33,'Musica'),(34,'Parodia'),(35,'Politica'),(36,'Poliziesco'),(37,'Psicologico'),(38,'Raccolta'),(39,'Reverse-harem'),(40,'Scolastico'),(41,'Sentimentale'),(42,'Shotacon'),(43,'Sketch Comedy'),(44,'Slice of Life'),(45,'Smut'),(46,'Soprannaturale'),(47,'Sperimentale'),(48,'Splatter'),(49,'Sport'),(50,'Storico'),(51,'Supereroi'),(52,'Tamarro'),(53,'Thriller'),(54,'Visual Novel'),(55,'Western'),(56,'Umorismo'),(57,'Violenza'),(58,'Antologia');
/*!40000 ALTER TABLE `manga_genres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `progetto_cooperazione`
--

DROP TABLE IF EXISTS `progetto_cooperazione`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `progetto_cooperazione` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) NOT NULL,
  `project_type` varchar(300) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `project_manager` varchar(200) NOT NULL,
  `comunity_name` varchar(100) NOT NULL,
  `number_of_families` int(11) NOT NULL,
  `class_transport` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `countries_2039429834284_idx` (`country_code`),
  KEY `transport_3838393_idx` (`class_transport`),
  CONSTRAINT `countries_2039429834284` FOREIGN KEY (`country_code`) REFERENCES `countries` (`alpha2code`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `transport_3838393` FOREIGN KEY (`class_transport`) REFERENCES `transport` (`id_transport`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `progetto_cooperazione`
--

LOCK TABLES `progetto_cooperazione` WRITE;
/*!40000 ALTER TABLE `progetto_cooperazione` DISABLE KEYS */;
INSERT INTO `progetto_cooperazione` VALUES (2,'PE','echo','aa','bb','ss',11,1);
/*!40000 ALTER TABLE `progetto_cooperazione` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publishers`
--

DROP TABLE IF EXISTS `publishers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `publishers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `office` varchar(255) NOT NULL,
  `programmers` varchar(255) NOT NULL,
  `foundation_date` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publishers`
--

LOCK TABLES `publishers` WRITE;
/*!40000 ALTER TABLE `publishers` DISABLE KEYS */;
INSERT INTO `publishers` VALUES (1,'Sony Santa Monica','Santa Monica','0-10','1999-01-01'),(2,'Square Enix','Tokyo','more than 30','2003-04-01');
/*!40000 ALTER TABLE `publishers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `squadre`
--

DROP TABLE IF EXISTS `squadre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `squadre` (
  `idsquadre` int(50) NOT NULL,
  `nome_squadra` varchar(45) DEFAULT NULL,
  `città` varchar(45) DEFAULT NULL,
  `stemma` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsquadre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `squadre`
--

LOCK TABLES `squadre` WRITE;
/*!40000 ALTER TABLE `squadre` DISABLE KEYS */;
INSERT INTO `squadre` VALUES (1,'Juventus','Torino','https://bit.ly/2DThF5Y'),(2,'Napoli','Napoli','https://bit.ly/2Gdwdgy'),(3,'Roma','Roma','https://bit.ly/2IiRbw8'),(4,'Lazio','Roma','https://bit.ly/2jUShnb'),(5,'Inter','Milano','https://bit.ly/2GfDKv5'),(6,'Milan','Milano','https://bit.ly/2KkOgnf'),(7,'Atalanta','Bergamo','https://bit.ly/2KkAwZI'),(8,'Fiorentina','Firenze','https://bit.ly/2KkAPUm'),(9,'Sampdoria','Genova',''),(10,'Torino','Torino','https://bit.ly/2L15d7u'),(11,'Sassuolo','Sassuolo','https://bit.ly/2Gf6zYG'),(12,'Genoa','Genova','https://bit.ly/2jUSBSV'),(13,'Bologna','Bologna','https://bit.ly/2wIncws'),(14,'Chievo','Chievo','https://bit.ly/2IdG1wF'),(15,'Udinese','Udinese','https://bit.ly/2rFO36s'),(16,'Cagliari','Cagliari','https://bit.ly/2IEpotp'),(17,'Spal','Ferrara','https://bit.ly/2Ihw29G'),(18,'Crotone','Crotone','https://bit.ly/2GeJIwr'),(19,'Verona','Verona','https://bit.ly/2IkLuha'),(20,'Benevento','Benevento','https://bit.ly/2jU7PHW');
/*!40000 ALTER TABLE `squadre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transport`
--

DROP TABLE IF EXISTS `transport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transport` (
  `id_transport` int(11) NOT NULL AUTO_INCREMENT,
  `means_of_transport` varchar(300) NOT NULL,
  PRIMARY KEY (`id_transport`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transport`
--

LOCK TABLES `transport` WRITE;
/*!40000 ALTER TABLE `transport` DISABLE KEYS */;
INSERT INTO `transport` VALUES (1,'macchina');
/*!40000 ALTER TABLE `transport` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-14 17:59:50
