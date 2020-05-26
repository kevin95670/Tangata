-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'Entreprise'
-- 
-- ---

DROP TABLE IF EXISTS Entreprise;
    
CREATE TABLE Entreprise (
  id INTEGER NOT NULL AUTO_INCREMENT,
  logo VARCHAR(255) NULL DEFAULT NULL,
  titre VARCHAR(255) NULL DEFAULT NULL,
  description VARCHAR(255) NULL DEFAULT NULL,
  ville VARCHAR(255) NULL DEFAULT NULL,
  creation INTEGER NULL DEFAULT NULL,
  collaborateur INTEGER NULL DEFAULT NULL,
  ageMoyen INTEGER NULL DEFAULT NULL,
  tauxHomme INTEGER NULL DEFAULT NULL,
  tauxFemme INTEGER NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'Offre'
-- 
-- ---

DROP TABLE IF EXISTS Offre;
    
CREATE TABLE Offre (
  id INTEGER NOT NULL AUTO_INCREMENT,
  image VARCHAR(255) NOT NULL DEFAULT 'NULL',
  titre VARCHAR(255) NOT NULL DEFAULT 'NULL',
  description VARCHAR(1000) NOT NULL DEFAULT 'NULL',
  mobiliteReduite BINARY NOT NULL DEFAULT '0',
  malentendant BINARY NOT NULL DEFAULT '0',
  malvoyant BINARY NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
);

-- ---
-- Table 'Evenement'
-- 
-- ---

DROP TABLE IF EXISTS Evenement;
    
CREATE TABLE Evenement (
  id INTEGER NOT NULL AUTO_INCREMENT,
  image VARCHAR(255) NULL DEFAULT NULL,
  titre VARCHAR(255) NULL DEFAULT NULL,
  date DATE NULL DEFAULT NULL,
  adresse VARCHAR(500) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'Specialisation'
-- 
-- ---

DROP TABLE IF EXISTS Specialisation;
    
CREATE TABLE Specialisation (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'Partenaire'
-- 
-- ---

DROP TABLE IF EXISTS Partenaire;
    
CREATE TABLE Partenaire (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NULL DEFAULT NULL,
  logo VARCHAR(255) NULL DEFAULT NULL,
  description VARCHAR(1000) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'Entreprise_evenement'
-- 
-- ---

DROP TABLE IF EXISTS Entreprise_evenement;
    
CREATE TABLE Entreprise_evenement (
  id_entreprise INTEGER NOT NULL,
  id_evenement INTEGER NOT NULL
);

-- ---
-- Table 'Entreprise_offre'
-- 
-- ---

DROP TABLE IF EXISTS Entreprise_offre;
    
CREATE TABLE Entreprise_offre (
  id_entreprise INTEGER NOT NULL,
  id_offre INTEGER NOT NULL
);

-- ---
-- Table 'Partenaire_entreprise'
-- 
-- ---

DROP TABLE IF EXISTS Partenaire_entreprise;
    
CREATE TABLE Partenaire_entreprise (
  id_partenaire INTEGER NOT NULL,
  id_entreprise INTEGER NOT NULL
);

-- ---
-- Table 'Specialisation_partenaire'
-- 
-- ---

DROP TABLE IF EXISTS Specialisation_partenaire;
    
CREATE TABLE Specialisation_partenaire (
  id_partenaire INTEGER NOT NULL,
  id_specialisation INTEGER NOT NULL
);

-- ---
-- Table 'Competence'
-- 
-- ---

DROP TABLE IF EXISTS Competence;
    
CREATE TABLE Competence (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'offre_competence'
-- 
-- ---

DROP TABLE IF EXISTS offre_competence;
    
CREATE TABLE offre_competence (
  id_offre INTEGER NOT NULL,
  id_competence INTEGER NOT NULL
);

-- ---
-- Table 'Contact'
-- 
-- ---

DROP TABLE IF EXISTS Contact;
    
CREATE TABLE Contact (
  id INTEGER NOT NULL AUTO_INCREMENT,
  id_entreprise INTEGER NOT NULL,
  nom VARCHAR(255) NULL DEFAULT NULL,
  poste VARCHAR(255) NULL DEFAULT NULL,
  mail VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'offre_diplome'
-- 
-- ---

DROP TABLE IF EXISTS offre_diplome;
    
CREATE TABLE offre_diplome (
  id_offre INTEGER NOT NULL,
  id_diplome INTEGER NOT NULL
);

-- ---
-- Table 'Diplome'
-- 
-- ---

DROP TABLE IF EXISTS Diplome;
    
CREATE TABLE Diplome (
  id INTEGER NOT NULL AUTO_INCREMENT,
  nom VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'Etude'
-- 
-- ---

DROP TABLE IF EXISTS Etude;
    
CREATE TABLE Etude (
  id INTEGER NOT NULL AUTO_INCREMENT,
  id_offre INTEGER NOT NULL,
  nom VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Table 'offre_experience'
-- 
-- ---

DROP TABLE IF EXISTS offre_experience;
    
CREATE TABLE offre_experience (
  id_offre INTEGER NOT NULL,
  id_experience INTEGER NOT NULL
);

-- ---
-- Table 'Experience'
-- 
-- ---

DROP TABLE IF EXISTS Experience;
    
CREATE TABLE Experience (
  id INTEGER NOT NULL AUTO_INCREMENT,
  description VARCHAR(255) NULL DEFAULT NULL,
  PRIMARY KEY (id)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE Entreprise_evenement ADD FOREIGN KEY (id_entreprise) REFERENCES Entreprise (id);
ALTER TABLE Entreprise_evenement ADD FOREIGN KEY (id_evenement) REFERENCES Evenement (id);
ALTER TABLE Entreprise_offre ADD FOREIGN KEY (id_entreprise) REFERENCES Entreprise (id);
ALTER TABLE Entreprise_offre ADD FOREIGN KEY (id_offre) REFERENCES Offre (id);
ALTER TABLE Partenaire_entreprise ADD FOREIGN KEY (id_partenaire) REFERENCES Partenaire (id);
ALTER TABLE Partenaire_entreprise ADD FOREIGN KEY (id_entreprise) REFERENCES Entreprise (id);
ALTER TABLE Specialisation_partenaire ADD FOREIGN KEY (id_partenaire) REFERENCES Partenaire (id);
ALTER TABLE Specialisation_partenaire ADD FOREIGN KEY (id_specialisation) REFERENCES Specialisation (id);
ALTER TABLE offre_competence ADD FOREIGN KEY (id_offre) REFERENCES Offre (id);
ALTER TABLE offre_competence ADD FOREIGN KEY (id_competence) REFERENCES Competence (id);
ALTER TABLE Contact ADD FOREIGN KEY (id_entreprise) REFERENCES Entreprise (id);
ALTER TABLE offre_diplome ADD FOREIGN KEY (id_offre) REFERENCES Offre (id);
ALTER TABLE offre_diplome ADD FOREIGN KEY (id_diplome) REFERENCES Diplome (id);
ALTER TABLE Etude ADD FOREIGN KEY (id_offre) REFERENCES Offre (id);
ALTER TABLE offre_experience ADD FOREIGN KEY (id_offre) REFERENCES Offre (id);
ALTER TABLE offre_experience ADD FOREIGN KEY (id_experience) REFERENCES Experience (id);