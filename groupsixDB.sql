DROP DATABASE IF EXISTS groupsixDB;

CREATE DATABASE groupsixDB;

USE groupsixDB;

DROP TABLE IF EXISTS groupsix;

CREATE TABLE `groupsix` (
  id int NOT NULL AUTO_INCREMENT,
  first VARCHAR(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  last VARCHAR(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO groupsix (id, first, last) VALUES
(1,	'existingUser',	'existingComment');