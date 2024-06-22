-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table sekolah.siswa: ~4 rows (approximately)
REPLACE INTO `siswa` (`id_siswa`, `nama`, `jenis_kelamin`, `alamat`, `nomorHP`) VALUES
	(1, 'Agung', 'laki-laki', 'JL.Koral', '0821313'),
	(2, 'Midah', 'perempuan', 'JL.Kemnaker', '0821313'),
	(3, 'Rama', 'laki-laki', 'JL.Pemuda', '0812124'),
	(9, 'Karinasdasd', 'laki-laki', 'samkotzxcxzc', '0123422');

-- Dumping data for table sekolah.users: ~3 rows (approximately)
REPLACE INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
	(1, 'Administrator', 'admin', 'admin'),
	(2, 'Viany Ramadhany', 'rama', 'rama'),
	(3, 'luar', 'luar', 'luar');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
