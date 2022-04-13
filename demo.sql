DROP DATABASE demo_php;
CREATE DATABASE `demo_php` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
us demo_php;

CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL UNIQUE,
  `status` tinyint DEFAULT '0'
) ENGINE = InnoDB;

