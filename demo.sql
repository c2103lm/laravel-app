DROP DATABASE IF EXISTS laravel;
CREATE DATABASE `laravel` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
use laravel;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `status` tinyint DEFAULT '0',
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` date null
) ENGINE = InnoDB;

