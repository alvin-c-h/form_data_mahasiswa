CREATE DATABASE IF NOT EXISTS prak_sistem_terdistribusi;
USE prak_sistem_terdistribusi;
CREATE TABLE IF NOT EXISTS `mahasiswa` (`id_mahasiswa` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,`name` varchar(80) NOT NULL,`NIM` int(11) NOT NULL,`email` varchar(80) NOT NULL,`address` varchar(200) NOT NULL,`phone` varchar(30) NOT NULL)