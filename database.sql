/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.21-MariaDB : Database - theaterprint
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `theaterprint`;

/*Table structure for table `order` */

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_nama` varchar(109) NOT NULL,
  `order_file` varchar(109) NOT NULL,
  `order_kertas` int(11) NOT NULL,
  `order_warna` int(11) NOT NULL,
  `order_hal` int(11) NOT NULL,
  `order_sampai` int(11) NOT NULL,
  `order_copy` int(11) NOT NULL,
  `order_tanggal` date NOT NULL,
  `ambil_tanggal` date NOT NULL,
  `order_ket` varchar(509) NOT NULL,
  `order_kontak` varchar(29) NOT NULL,
  `order_harga` int(11) NOT NULL,
  `order_kode` varchar(8) NOT NULL,
  `order_status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `order` */

insert  into `order`(`id`,`order_nama`,`order_file`,`order_kertas`,`order_warna`,`order_hal`,`order_sampai`,`order_copy`,`order_tanggal`,`ambil_tanggal`,`order_ket`,`order_kontak`,`order_harga`,`order_kode`,`order_status`) values 
(1,'','aaa',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(2,'','file/1511617046',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(3,'','file/1511617365Studi Kasus.docx',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(4,'','file/1511617427',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(5,'','file/1511617528docx',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(6,'','file/1511617543.docx',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(7,'','file/1511617690.docx',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(8,'','file/1511617995.docx',0,0,0,0,0,'0000-00-00','0000-00-00','','',0,'',''),
(9,'','file/1511620019.docx',2,2,2,5,2,'0000-00-00','0000-00-00','asu kon','',0,'',''),
(10,'','file/1511620872.docx',1,2,1,2,1,'2017-11-25','0000-00-00','yey','',0,'',''),
(11,'','file/1511620964.docx',1,1,1,1,1,'2017-11-25','0001-01-01','11213','',0,'',''),
(12,'asu','file/1511623131.docx',1,1,1,2,1,'2017-11-25','1234-01-02','asu kon','123',1600,'',''),
(13,'','file/1511623661.docx',1,1,1,2,2,'2017-11-25','0002-02-02','22','',3200,'',''),
(14,'','file/1511623876.docx',1,1,3,3,3,'2017-11-25','0003-12-31','213','',2400,'',''),
(15,'','file/1511624065.docx',1,1,1,1,1,'2017-11-25','0213-01-11','213','',800,'',''),
(16,'','file/1511624811.docx',3,2,12,14,4,'2017-11-25','1997-02-09','asdasdasdasd','',8400,'',''),
(17,'','file/1511624955.docx',1,1,1,2,1,'2017-11-25','0002-02-02','444','',1600,'',''),
(18,'33','file/1511625082.docx',1,1,1,1,1,'2017-11-25','0001-01-01','44','66',800,'',''),
(19,'asu','file/1511625331.docx',1,1,222,2,2,'2017-11-25','0002-02-03','2','123',-350400,'',''),
(20,'555','file/1511625388.docx',1,1,1,2,1,'2017-11-25','0123-02-03','444','111',1600,'','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
