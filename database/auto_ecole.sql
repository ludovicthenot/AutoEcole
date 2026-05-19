CREATE DATABASE IF NOT EXISTS auto_ecole
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE auto_ecole;

CREATE TABLE IF NOT EXISTS eleves (
  id_eleve INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  prenom VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  telephone VARCHAR(20),
  type_permis VARCHAR(50),
  mot_de_passe VARCHAR(255) NOT NULL,
  date_inscription DATE DEFAULT (CURRENT_DATE)
);
