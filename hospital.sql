-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2024 at 06:19 AM
-- Server version: 8.3.0
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

DROP TABLE IF EXISTS `doctors`;
CREATE TABLE IF NOT EXISTS `doctors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `mobile`, `specialities`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Geeta Kapoor', 'geeta.kapoor@gmail.com', '9123456791', 'Neurology', 'Active', '2024-06-10 04:06:05', '2024-06-10 04:11:05'),
(2, 'Sunita Sharma', 'sunita.sharma@gmail.com', '9123456781', 'Neurology', 'Active', '2024-06-10 04:00:05', '2024-06-10 04:05:05'),
(3, 'Rajesh Kumar', 'rajesh.kumar@gmail.com', '9123456782', 'Orthopedics', 'Inactive', '2024-06-10 04:00:10', '2024-06-10 04:05:10'),
(4, 'Priya Singh', 'priya.singh@gmail.com', '9123456783', 'Dermatology', 'Active', '2024-06-10 04:00:15', '2024-06-10 04:05:15'),
(5, 'Vijay Gupta', 'vijay.gupta@gmail.com', '9123456784', 'Gastroenterology', 'Active', '2024-06-10 04:00:20', '2024-06-10 04:05:20'),
(6, 'Anita Desai', 'anita.desai@gmail.com', '9123456785', 'Endocrinology', 'Inactive', '2024-06-10 04:00:25', '2024-06-10 04:05:25'),
(7, 'Ajay Mehra', 'ajay.mehra@gmail.com', '9123456786', 'Ophthalmology', 'Active', '2024-06-10 04:00:30', '2024-06-10 04:05:30'),
(8, 'Pooja Agarwal', 'pooja.agarwal@gmail.com', '9123456787', 'Psychiatry', 'Active', '2024-06-10 04:00:35', '2024-06-10 04:05:35'),
(9, 'Sanjay Verma', 'sanjay.verma@gmail.com', '9123456788', 'Radiology', 'Inactive', '2024-06-10 04:00:40', '2024-06-10 04:05:40'),
(10, 'Meena Kapoor', 'meena.kapoor@gmail.com', '9123456789', 'Pediatrics', 'Active', '2024-06-10 04:00:45', '2024-06-10 04:05:45'),
(13, 'Amit Shah', 'amit.shah@gmail.com', '9123456790', 'Cardiology', 'Active', '2024-06-10 04:06:00', '2024-06-10 04:11:00'),
(15, 'Rahul Verma', 'rahul.verma@gmail.com', '9123456792', 'Orthopedics', 'Inactive', '2024-06-10 04:06:10', '2024-06-10 04:11:10'),
(16, 'Seema Malhotra', 'seema.malhotra@gmail.com', '9123456793', 'Dermatology', 'Active', '2024-06-10 04:06:15', '2024-06-10 04:11:15'),
(17, 'Vikas Gupta', 'vikas.gupta@gmail.com', '9123456794', 'Gastroenterology', 'Active', '2024-06-10 04:06:20', '2024-06-10 04:11:20'),
(18, 'Anjali Mishra', 'anjali.mishra@gmail.com', '9123456795', 'Endocrinology', 'Inactive', '2024-06-10 04:06:25', '2024-06-10 04:11:25'),
(19, 'Alok Mehta', 'alok.mehta@gmail.com', '9123456796', 'Ophthalmology', 'Active', '2024-06-10 04:06:30', '2024-06-10 04:11:30'),
(20, 'Preeti Agarwal', 'preeti.agarwal@gmail.com', '9123456797', 'Psychiatry', 'Active', '2024-06-10 04:06:35', '2024-06-10 04:11:35'),
(21, 'Sandeep Sharma', 'sandeep.sharma@gmail.com', '9123456798', 'Radiology', 'Inactive', '2024-06-10 04:06:40', '2024-06-10 04:11:40'),
(22, 'Meera Kapoor', 'meera.kapoor@gmail.com', '9123456799', 'Pediatrics', 'Active', '2024-06-10 04:06:45', '2024-06-10 04:11:45'),
(23, 'Nitin Jain', 'nitin.jain@gmail.com', '9123456700', 'Cardiology', 'Active', '2024-06-10 04:06:50', '2024-06-10 04:11:50'),
(24, 'Sarita Yadav', 'sarita.yadav@gmail.com', '9123456701', 'Neurology', 'Active', '2024-06-10 04:06:55', '2024-06-10 04:11:55'),
(25, 'Rohit Khanna', 'rohit.khanna@gmail.com', '9123456702', 'Orthopedics', 'Inactive', '2024-06-10 04:07:00', '2024-06-10 04:12:00'),
(26, 'Sheela Tiwari', 'sheela.tiwari@gmail.com', '9123456703', 'Dermatology', 'Active', '2024-06-10 04:07:05', '2024-06-10 04:12:05'),
(27, 'Vivek Oberoi', 'vivek.oberoi@gmail.com', '9123456704', 'Gastroenterology', 'Active', '2024-06-10 04:07:10', '2024-06-10 04:12:10'),
(28, 'Ankita Singh', 'ankita.singh@gmail.com', '9123456705', 'Endocrinology', 'Inactive', '2024-06-10 04:07:15', '2024-06-10 04:12:15'),
(29, 'Aman Gupta', 'aman.gupta@gmail.com', '9123456706', 'Ophthalmology', 'Active', '2024-06-10 04:07:20', '2024-06-10 04:12:20'),
(30, 'Pooja Rani', 'pooja.rani@gmail.com', '9123456707', 'Psychiatry', 'Active', '2024-06-10 04:07:25', '2024-06-10 04:12:25'),
(31, 'Saurabh Kumar', 'saurabh.kumar@gmail.com', '9123456708', 'Radiology', 'Inactive', '2024-06-10 04:07:30', '2024-06-10 04:12:30'),
(32, 'Meenakshi Sood', 'meenakshi.sood@gmail.com', '9123456709', 'Pediatrics', 'Active', '2024-06-10 04:07:35', '2024-06-10 04:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stocks` int NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`id`, `name`, `stocks`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ventilator', 20, 'Available', '2024-06-10 04:20:00', '2024-06-10 04:25:00'),
(2, 'ECG Machine', 15, 'Available', '2024-06-10 04:20:05', '2024-06-10 04:25:05'),
(3, 'Ultrasound Machine', 10, 'Unavailable', '2024-06-10 04:20:10', '2024-06-10 04:25:10'),
(4, 'Defibrillator', 5, 'Available', '2024-06-10 04:20:15', '2024-06-10 04:25:15'),
(5, 'MRI Scanner', 2, 'Available', '2024-06-10 04:20:20', '2024-06-10 04:25:20'),
(6, 'CT Scanner', 3, 'Unavailable', '2024-06-10 04:20:25', '2024-06-10 04:25:25'),
(7, 'X-Ray Machine', 7, 'Available', '2024-06-10 04:20:30', '2024-06-10 04:25:30'),
(8, 'Anesthesia Machine', 6, 'Available', '2024-06-10 04:20:35', '2024-06-10 04:25:35'),
(9, 'Dialysis Machine', 4, 'Unavailable', '2024-06-10 04:20:40', '2024-06-10 04:25:40'),
(12, 'Cardioverter defibrillator', 16, 'Available', '2024-06-11 01:00:14', '2024-06-11 01:00:14'),
(13, 'Pacemaker', 6, 'Available', '2024-06-11 01:00:50', '2024-06-11 01:00:50'),
(14, 'Left ventricular assist device', 0, 'Unavailable', '2024-06-11 01:01:23', '2024-06-11 01:01:23'),
(15, 'Breast implants', 32, 'Available', '2024-06-11 01:01:52', '2024-06-11 01:01:52'),
(16, 'Cochlear implants', 84, 'Available', '2024-06-11 01:02:10', '2024-06-11 01:02:10'),
(17, 'Intraocular lenses', 3, 'Unavailable', '2024-06-11 01:02:29', '2024-06-11 01:02:29'),
(18, 'Hip implants', 24, 'Available', '2024-06-11 01:02:49', '2024-06-11 01:02:49'),
(19, 'Contraceptive intrauterine devices', 4, 'Available', '2024-06-11 01:03:06', '2024-06-11 01:03:06'),
(20, 'bandages', 500, 'Available', '2024-06-11 04:47:20', '2024-06-11 04:47:20'),
(21, 'sl', 1, 'Available', '2024-06-12 01:08:20', '2024-06-12 01:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
CREATE TABLE IF NOT EXISTS `hospitals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `name`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Apollo Hospital', 'Surat', 'Active', '2024-06-10 04:10:00', '2024-06-10 04:15:00'),
(2, 'Fortis Hospital', 'Delhi', 'Active', '2024-06-10 04:10:05', '2024-06-10 04:15:05'),
(3, 'Max Healthcare', 'Mumbai', 'Inactive', '2024-06-10 04:10:10', '2024-06-10 04:15:10'),
(4, 'Narayana Health', 'Bangalore', 'Active', '2024-06-10 04:10:15', '2024-06-10 04:15:15'),
(5, 'Medanta Hospital', 'Gurgaon', 'Active', '2024-06-10 04:10:20', '2024-06-10 04:15:20'),
(6, 'Kokilaben Hospital', 'Mumbai', 'Inactive', '2024-06-10 04:10:25', '2024-06-10 04:15:25'),
(7, 'Manipal Hospitals', 'Bangalore', 'Active', '2024-06-10 04:10:30', '2024-06-10 04:15:30'),
(8, 'Jaslok Hospital', 'Mumbai', 'Active', '2024-06-10 04:10:35', '2024-06-10 04:15:35'),
(9, 'Artemis Hospital', 'Gurgaon', 'Inactive', '2024-06-10 04:10:40', '2024-06-10 04:15:40'),
(11, 'kk', 'jkkn', 'jnljkn', '2024-06-10 07:05:29', '2024-06-10 07:05:29'),
(12, 'Global Hospital', 'Pune', 'Active', '2024-06-10 04:16:00', '2024-06-10 04:21:00'),
(13, 'Columbia Asia', 'Kolkata', 'Active', '2024-06-10 04:16:05', '2024-06-10 04:21:05'),
(14, 'Wockhardt Hospitals', 'Mumbai', 'Inactive', '2024-06-10 04:16:10', '2024-06-10 04:21:10'),
(15, 'Hiranandani Hospital', 'Mumbai', 'Active', '2024-06-10 04:16:15', '2024-06-10 04:21:15'),
(16, 'Ruby Hall Clinic', 'Pune', 'Active', '2024-06-10 04:16:20', '2024-06-10 04:21:20'),
(17, 'Sahyadri Hospital', 'Pune', 'Inactive', '2024-06-10 04:16:25', '2024-06-10 04:21:25'),
(18, 'Noble Hospital', 'Pune', 'Active', '2024-06-10 04:16:30', '2024-06-10 04:21:30'),
(19, 'Aditya Birla Memorial Hospital', 'Pune', 'Active', '2024-06-10 04:16:35', '2024-06-10 04:21:35'),
(20, 'Cloudnine Hospital', 'Pune', 'Inactive', '2024-06-10 04:16:40', '2024-06-10 04:21:40'),
(21, 'Sancheti Hospital', 'Pune', 'Active', '2024-06-10 04:16:45', '2024-06-10 04:21:45'),
(22, 'KEM Hospital', 'Pune', 'Active', '2024-06-10 04:16:50', '2024-06-10 04:21:50'),
(23, 'Inlaks and Budhrani Hospital', 'Pune', 'Active', '2024-06-10 04:16:55', '2024-06-10 04:21:55'),
(24, 'Hardikar Hospital', 'Pune', 'Inactive', '2024-06-10 04:17:00', '2024-06-10 04:22:00'),
(25, 'Deenanath Mangeshkar Hospital', 'Pune', 'Active', '2024-06-10 04:17:05', '2024-06-10 04:22:05'),
(26, 'Bharati Hospital', 'Pune', 'Active', '2024-06-10 04:17:10', '2024-06-10 04:22:10'),
(27, 'Poona Hospital', 'Pune', 'Inactive', '2024-06-10 04:17:15', '2024-06-10 04:22:15'),
(28, 'Shashwat Hospital', 'Pune', 'Active', '2024-06-10 04:17:20', '2024-06-10 04:22:20'),
(29, 'Jehangir Hospital', 'Pune', 'Active', '2024-06-10 04:17:25', '2024-06-10 04:22:25'),
(30, 'Ranka Hospital', 'Pune', 'Inactive', '2024-06-10 04:17:30', '2024-06-10 04:22:30'),
(31, 'Galaxy Care Hospital', 'Pune', 'Active', '2024-06-10 04:17:35', '2024-06-10 04:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_10_064202_create_hospitals_table', 1),
(5, '2024_06_10_064228_create_equipment_table', 1),
(6, '2024_06_10_064251_create_doctors_table', 1),
(7, '2024_06_10_064310_create_operations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

DROP TABLE IF EXISTS `operations`;
CREATE TABLE IF NOT EXISTS `operations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `doctor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patient` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` int NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `operations`
--

INSERT INTO `operations` (`id`, `doctor`, `hospital`, `patient`, `charge`, `date`, `created_at`, `updated_at`) VALUES
(3, 'Ravi Patel', 'Apollo Hospital', 'Aarav Sharma', 50000, '2024-06-10', '2024-06-10 04:30:00', '2024-06-10 04:35:00'),
(4, 'Sunita Sharma', 'Fortis Hospital', 'Aditi Patel', 45000, '2024-06-11', '2024-06-11 04:30:05', '2024-06-11 04:35:05'),
(5, 'Rajesh Kumar', 'Max Healthcare', 'Vivaan Desai', 60000, '2024-06-12', '2024-06-12 04:30:10', '2024-06-12 04:35:10'),
(6, 'Priya Singh', 'Narayana Health', 'Aanya Gupta', 55000, '2024-06-13', '2024-06-13 04:30:15', '2024-06-13 04:35:15'),
(7, 'Vijay Gupta', 'Medanta Hospital', 'Vihaan Kapoor', 65000, '2024-06-14', '2024-06-14 04:30:20', '2024-06-14 04:35:20'),
(8, 'Anita Desai', 'Kokilaben Hospital', 'Diya Verma', 70000, '2024-06-15', '2024-06-15 04:30:25', '2024-06-15 04:35:25'),
(9, 'Ajay Mehra', 'Manipal Hospitals', 'Arjun Singh', 75000, '2024-06-16', '2024-06-16 04:30:30', '2024-06-16 04:35:30'),
(10, 'Pooja Agarwal', 'Jaslok Hospital', 'Saanvi Mehra', 80000, '2024-06-17', '2024-06-17 04:30:35', '2024-06-17 04:35:35'),
(11, 'Sanjay Verma', 'Artemis Hospital', 'Ishaan Rana', 85000, '2024-06-18', '2024-06-18 04:30:40', '2024-06-18 04:35:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('eiIjKIcD7w6xqKVLdw71dkTn4cEklTnMCmL2fUil', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiend2VlVDNDBzdlpkVDd4Q1ByVHdweGxXd3UwRVRDeWUyUzZ6MzBieSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9vcGVyYXRpb25kYXRhIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1718284052),
('aQONRVPnzXMNdhcYNHFh43DHXDAI5OQcMXdUpOMJ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRW5wZnRpMUJCY3BVN3JLREdQWlhvRzF2NVJlN0ZYZzVCalFnTlNIcyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRkb2N0b3IiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1718345836);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$sn6v./1fbLqlRUHc/rvchuk1BFAc/zJRmk0Fg9kvvzMLGI78iIExK', NULL, '2024-06-10 04:11:01', '2024-06-10 04:11:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
