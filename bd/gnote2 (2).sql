-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3309
-- Généré le : mer. 22 juin 2022 à 11:02
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gnote2`
--

-- --------------------------------------------------------

--
-- Structure de la table `abondonner`
--

DROP TABLE IF EXISTS `abondonner`;
CREATE TABLE IF NOT EXISTS `abondonner` (
  `CodeABD` int NOT NULL AUTO_INCREMENT,
  `CodeET` int NOT NULL,
  `MatriculeET` varchar(50) NOT NULL,
  PRIMARY KEY (`CodeABD`),
  KEY `CodeET` (`CodeET`,`MatriculeET`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `abondonner`
--

INSERT INTO `abondonner` (`CodeABD`, `CodeET`, `MatriculeET`) VALUES
(1, 2, '20inp1'),
(2, 3, '20inp2');

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `CodeAbs` int NOT NULL AUTO_INCREMENT,
  `HeureAbs` varchar(30) NOT NULL,
  PRIMARY KEY (`CodeAbs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `annee scolaire`
--

DROP TABLE IF EXISTS `annee scolaire`;
CREATE TABLE IF NOT EXISTS `annee scolaire` (
  `Code AnSc` int NOT NULL AUTO_INCREMENT,
  `LibelleAnSc` varchar(15) NOT NULL,
  PRIMARY KEY (`Code AnSc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

DROP TABLE IF EXISTS `appartenir`;
CREATE TABLE IF NOT EXISTS `appartenir` (
  `CodeET` int NOT NULL,
  `CodeCLS` int NOT NULL,
  `CodeAnSc` int NOT NULL,
  KEY `CodeET` (`CodeET`,`CodeCLS`,`CodeAnSc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `apprendre`
--

DROP TABLE IF EXISTS `apprendre`;
CREATE TABLE IF NOT EXISTS `apprendre` (
  `CodeCLS` int NOT NULL,
  `CodeMAT` int NOT NULL,
  KEY `CodeCLS` (`CodeCLS`),
  KEY `CodeMAT` (`CodeMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `apprendre`
--

INSERT INTO `apprendre` (`CodeCLS`, `CodeMAT`) VALUES
(1, 10),
(4, 7),
(5, 4),
(28, 8),
(28, 11),
(30, 8);

-- --------------------------------------------------------

--
-- Structure de la table `bulletin`
--

DROP TABLE IF EXISTS `bulletin`;
CREATE TABLE IF NOT EXISTS `bulletin` (
  `CodeBLT` int NOT NULL AUTO_INCREMENT,
  `LibelleBLT` varchar(20) NOT NULL,
  `CodeDE` int NOT NULL,
  `CodeET` int NOT NULL,
  PRIMARY KEY (`CodeBLT`),
  KEY `CodeDe` (`CodeDE`,`CodeET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cahier d'appel`
--

DROP TABLE IF EXISTS `cahier d'appel`;
CREATE TABLE IF NOT EXISTS `cahier d'appel` (
  `CodeCA` int NOT NULL AUTO_INCREMENT,
  `LibelleCA` varchar(15) NOT NULL,
  PRIMARY KEY (`CodeCA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cahier_texte`
--

DROP TABLE IF EXISTS `cahier_texte`;
CREATE TABLE IF NOT EXISTS `cahier_texte` (
  `CodeCT` int NOT NULL AUTO_INCREMENT,
  `LibelleCT` varchar(15) NOT NULL,
  `CodeDe` int NOT NULL,
  `CodeDGE` int NOT NULL,
  `CodeCLS` int NOT NULL,
  `CodeInsp` int NOT NULL,
  PRIMARY KEY (`CodeCT`),
  KEY `CodeDe` (`CodeDe`,`CodeDGE`,`CodeCLS`,`CodeInsp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `CodeCLS` int NOT NULL AUTO_INCREMENT,
  `LibelleCLS` varchar(30) NOT NULL,
  `NombreEleveCLS` varchar(50) NOT NULL,
  `CodeFIL` int NOT NULL,
  PRIMARY KEY (`CodeCLS`),
  KEY `CodeFIL` (`CodeFIL`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`CodeCLS`, `LibelleCLS`, `NombreEleveCLS`, `CodeFIL`) VALUES
(1, 'TS-STIC-EIT2', '', 1),
(4, 'TS-STIC1A', '', 1),
(5, 'TS-SITC-INFO3', '', 1),
(28, 'TS-STIC-INFO2', '', 1),
(29, 'TS-MA1', '', 2),
(30, 'TS-EAI1', '', 2),
(31, 'TS-PMSI1', '', 2),
(32, 'TS-STGP', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `corriger`
--

DROP TABLE IF EXISTS `corriger`;
CREATE TABLE IF NOT EXISTS `corriger` (
  `CodeProf` int NOT NULL,
  `CodeRPT` int NOT NULL,
  KEY `CodeProf` (`CodeProf`,`CodeRPT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cycles`
--

DROP TABLE IF EXISTS `cycles`;
CREATE TABLE IF NOT EXISTS `cycles` (
  `CodeCY` int NOT NULL AUTO_INCREMENT,
  `LibelleCY` varchar(15) NOT NULL,
  PRIMARY KEY (`CodeCY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `de`
--

DROP TABLE IF EXISTS `de`;
CREATE TABLE IF NOT EXISTS `de` (
  `CodeDE` int NOT NULL AUTO_INCREMENT,
  `NomDE` varchar(50) NOT NULL,
  `PrenomDE` varchar(50) NOT NULL,
  `TelDE` varchar(50) NOT NULL,
  `EmailDE` varchar(50) NOT NULL,
  `LoginDE` varchar(50) NOT NULL,
  `PaswdDE` varchar(50) NOT NULL,
  PRIMARY KEY (`CodeDE`),
  UNIQUE KEY `EmailDE` (`EmailDE`),
  UNIQUE KEY `LoginDE` (`LoginDE`),
  UNIQUE KEY `PaswdDE` (`PaswdDE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `de`
--

INSERT INTO `de` (`CodeDE`, `NomDE`, `PrenomDE`, `TelDE`, `EmailDE`, `LoginDE`, `PaswdDE`) VALUES
(1, 'Kpo', 'Loua', '01020304', 'kpoloua@inphb.ci', 'kpo', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `dge`
--

DROP TABLE IF EXISTS `dge`;
CREATE TABLE IF NOT EXISTS `dge` (
  `CodeDGE` int NOT NULL AUTO_INCREMENT,
  `NomDGE` varchar(15) NOT NULL,
  `PrenomDGE` varchar(15) NOT NULL,
  `TelDGE` varchar(15) NOT NULL,
  `EmailDGE` varchar(15) NOT NULL,
  `LoginDGE` varchar(15) NOT NULL,
  `PaswdDGE` varchar(15) NOT NULL,
  PRIMARY KEY (`CodeDGE`),
  UNIQUE KEY `LoginDGE` (`LoginDGE`),
  UNIQUE KEY `PaswdDGE` (`PaswdDGE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `dge`
--

INSERT INTO `dge` (`CodeDGE`, `NomDGE`, `PrenomDGE`, `TelDGE`, `EmailDGE`, `LoginDGE`, `PaswdDGE`) VALUES
(1, 'Tano', 'Aka', '010203', 'tanoaka@gmail.c', 'tano', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `diplome`
--

DROP TABLE IF EXISTS `diplome`;
CREATE TABLE IF NOT EXISTS `diplome` (
  `CodeDPLM` int NOT NULL AUTO_INCREMENT,
  `LibelleDPLM` varchar(15) NOT NULL,
  `Statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`CodeDPLM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `diriger`
--

DROP TABLE IF EXISTS `diriger`;
CREATE TABLE IF NOT EXISTS `diriger` (
  `CodeDe` int NOT NULL,
  `CodeFIL` int NOT NULL,
  `CodeCY` int NOT NULL,
  KEY `CodeDe` (`CodeDe`,`CodeFIL`,`CodeCY`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `donner`
--

DROP TABLE IF EXISTS `donner`;
CREATE TABLE IF NOT EXISTS `donner` (
  `CodeET` int NOT NULL,
  `CodeProf` int NOT NULL,
  `CodeAbs` int NOT NULL,
  KEY `CodeET` (`CodeET`,`CodeProf`,`CodeAbs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `CodeEcole` int NOT NULL AUTO_INCREMENT,
  `LibelleEcole` varchar(15) NOT NULL,
  `LocEcole` varchar(15) NOT NULL,
  `CodeDGE` int NOT NULL,
  PRIMARY KEY (`CodeEcole`),
  KEY `CodeDGE` (`CodeDGE`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecole`
--

INSERT INTO `ecole` (`CodeEcole`, `LibelleEcole`, `LocEcole`, `CodeDGE`) VALUES
(1, 'ESI', 'Centre', 1);

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `CodeProf` int NOT NULL,
  `CodeMAT` int NOT NULL,
  KEY `CodeProf` (`CodeProf`,`CodeMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`CodeProf`, `CodeMAT`) VALUES
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 11),
(2, 7),
(2, 13),
(3, 4),
(3, 7),
(3, 12);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `CodeET` int NOT NULL AUTO_INCREMENT,
  `MatriculeET` varchar(50) NOT NULL,
  `NomET` varchar(50) NOT NULL,
  `PrenomET` varchar(50) NOT NULL,
  `NumeroParent` varchar(50) NOT NULL,
  `NumeroTuteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `EmailET` varchar(225) NOT NULL,
  `LoginET` varchar(50) NOT NULL,
  `PaswdET` varchar(50) NOT NULL,
  `Photo` text NOT NULL,
  `CodeCLS` int NOT NULL,
  PRIMARY KEY (`CodeET`,`MatriculeET`),
  UNIQUE KEY `LoginET` (`LoginET`),
  UNIQUE KEY `PaswdET` (`PaswdET`),
  KEY `CodeCLS` (`CodeCLS`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`CodeET`, `MatriculeET`, `NomET`, `PrenomET`, `NumeroParent`, `NumeroTuteur`, `EmailET`, `LoginET`, `PaswdET`, `Photo`, `CodeCLS`) VALUES
(1, '20inp', 'Kouassy', 'Besse Aude', '010203', '030201', 'aude.kouassy@gmail.com', 'aude', '1234', 'aude.jpg', 1),
(3, '20inp1', 'Koffi', 'A&B', '54545421545', '4545457875', 'node.js@gmail', 'node', '12345', 'avatar.png', 1),
(4, '20inp2', 'Python', 'py', '48454545', '454545', 'py@python.Tk', 'python', '123456', 'avatar4.png', 2),
(7, '20inp3', 'Kacou', 'Abel', '12345', '12345', 'kacou@gmail.com', 'kacou', 'kacou', 'avatar5.png', 2),
(9, '20inp7', 'Madou', 'Hope', '142576', '785666', 'kombohope@gmail.com', 'hope', 'hope', 'IMG-20210420-WA0065.jpg', 5),
(10, '20inp7', 'Yatoura', 'Abdoul Kader', '125365478', '145799363', 'Yatoura@gmail.com', 'yatoura', 'yatoura', 'IMG-20210420-WA0054.jpg', 3),
(11, '20inp9', 'Mihan', 'Zlanca Nto', '1432323', '562653265', 'mihan@gmail.com', 'mihan', 'mihan', 'IMG-20210420-WA0040.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `faire`
--

DROP TABLE IF EXISTS `faire`;
CREATE TABLE IF NOT EXISTS `faire` (
  `CodeET` int NOT NULL,
  `CodePRO` int NOT NULL,
  `CodeRPT` int NOT NULL,
  KEY `CodeET` (`CodeET`,`CodePRO`,`CodeRPT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `CodeFIL` int NOT NULL AUTO_INCREMENT,
  `LibelleFIL` varchar(15) NOT NULL,
  `CodeEcole` int NOT NULL,
  `CodeINSP` int NOT NULL,
  PRIMARY KEY (`CodeFIL`),
  KEY `CodeEcole` (`CodeEcole`),
  KEY `CodeINSP` (`CodeINSP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`CodeFIL`, `LibelleFIL`, `CodeEcole`, `CodeINSP`) VALUES
(1, 'STIC', 1, 1),
(2, 'STGI', 1, 2),
(3, 'STGP', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `inspecter`
--

DROP TABLE IF EXISTS `inspecter`;
CREATE TABLE IF NOT EXISTS `inspecter` (
  `CodeInsp` int NOT NULL,
  `CodeCLS` int NOT NULL,
  KEY `CodeInsp` (`CodeInsp`,`CodeCLS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inspecteur`
--

DROP TABLE IF EXISTS `inspecteur`;
CREATE TABLE IF NOT EXISTS `inspecteur` (
  `CodeINSP` int NOT NULL AUTO_INCREMENT,
  `NomINSP` varchar(50) NOT NULL,
  `PrenomINSP` varchar(50) NOT NULL,
  `TelINSP` varchar(50) NOT NULL,
  `EmailINSP` varchar(225) NOT NULL,
  `LoginINSP` varchar(50) NOT NULL,
  `PswdINSP` varchar(50) NOT NULL,
  PRIMARY KEY (`CodeINSP`),
  UNIQUE KEY `LoginINSP` (`LoginINSP`),
  UNIQUE KEY `PswdINSP` (`PswdINSP`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inspecteur`
--

INSERT INTO `inspecteur` (`CodeINSP`, `NomINSP`, `PrenomINSP`, `TelINSP`, `EmailINSP`, `LoginINSP`, `PswdINSP`) VALUES
(1, 'Kouame', 'Rodrigez', '01020304', 'kouamerodri@gmail.com', 'kouame', '1234'),
(2, 'Koffi', 'Bernadette', '2114512312', 'koffibernadette@inphb.ci', 'berna', 'berna'),
(3, 'Yaa', 'Alice', '12254464', 'yaa@inphb.ci', 'yaa', 'alice');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `CodeMAT` int NOT NULL AUTO_INCREMENT,
  `LibelleMAT` varchar(15) NOT NULL,
  `CoeffMAT` varchar(15) NOT NULL,
  `VolumeMAT` varchar(15) NOT NULL,
  `CodeSMTRE` int NOT NULL,
  `CodeUE` int NOT NULL,
  PRIMARY KEY (`CodeMAT`),
  KEY `CodeSMTRE` (`CodeSMTRE`),
  KEY `CodeUE` (`CodeUE`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`CodeMAT`, `LibelleMAT`, `CoeffMAT`, `VolumeMAT`, `CodeSMTRE`, `CodeUE`) VALUES
(4, 'window server', '2', '26', 1, 1),
(5, 'électronique de', '2', '24', 2, 2),
(7, 'électronique nu', '2', '24', 2, 2),
(8, 'python', '2', '24', 2, 1),
(9, 'Language C', '2', '24', 1, 1),
(10, 'EPS', '2', '24', 2, 3),
(11, 'CV', '1', '24', 1, 2),
(12, 'Sécurité inform', '2', '16', 2, 2),
(13, 'Optical fiber', '2', '24', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messagede`
--

DROP TABLE IF EXISTS `messagede`;
CREATE TABLE IF NOT EXISTS `messagede` (
  `CodeMsgDE` int NOT NULL AUTO_INCREMENT,
  `DescMsg` text NOT NULL,
  `CodeDE` int NOT NULL,
  `CodeINSP` int NOT NULL,
  PRIMARY KEY (`CodeMsgDE`),
  KEY `CodeDE` (`CodeDE`,`CodeINSP`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messagede`
--

INSERT INTO `messagede` (`CodeMsgDE`, `DescMsg`, `CodeDE`, `CodeINSP`) VALUES
(1, 'Bonjour monsieur l\'inspecteur le bulletin de l\'étudiant KOUASSY est disponible.', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messageinsp`
--

DROP TABLE IF EXISTS `messageinsp`;
CREATE TABLE IF NOT EXISTS `messageinsp` (
  `CodeMsgINSP` int NOT NULL AUTO_INCREMENT,
  `DescMsg` text NOT NULL,
  `CodeINSP` int NOT NULL,
  `CodeET` int NOT NULL,
  PRIMARY KEY (`CodeMsgINSP`),
  KEY `CodeINSP` (`CodeINSP`,`CodeET`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messageinsp`
--

INSERT INTO `messageinsp` (`CodeMsgINSP`, `DescMsg`, `CodeINSP`, `CodeET`) VALUES
(1, 'Bonjour Monsieur, Est ce que mon bulletin est disponible?', 1, 1),
(5, 'Bonsoir Monsieur je passerai le repupéré       ', 1, 1),
(6, '             bonjour ', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `CodeNTE` int NOT NULL AUTO_INCREMENT,
  `DescriptionNTE` varchar(25) NOT NULL,
  `CoefficientNTE` varchar(15) NOT NULL,
  `CodeET` int NOT NULL,
  `ValeurNTE` double NOT NULL,
  `MatriculeET` varchar(50) NOT NULL,
  `CodeMAT` int NOT NULL,
  `CodeCLS` int DEFAULT '0',
  PRIMARY KEY (`CodeNTE`),
  KEY `CodeMAT` (`CodeMAT`),
  KEY `CodeNTE` (`CodeNTE`,`CodeET`),
  KEY `MatriculeET` (`MatriculeET`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`CodeNTE`, `DescriptionNTE`, `CoefficientNTE`, `CodeET`, `ValeurNTE`, `MatriculeET`, `CodeMAT`, `CodeCLS`) VALUES
(2, 'interrogation', '1', 4, 17, '20inp00915', 4, 1),
(3, 'interrogation', '1', 1, 18, '20inp00915', 5, 2),
(41, 'Intérrogation', '1', 9, 19, '20inp7', 4, 41),
(42, 'Devoir', '2', 9, 18, '20inp7', 4, 42),
(43, 'TP', '2', 9, 19, '20inp7', 4, 43),
(46, 'Orale', '1', 0, 12, '20inp9', 7, 46),
(64, 'Intérrogation', '2', 11, 20, '20inp9', 7, 64),
(65, 'Intérrogation', '2', 11, 3, '20inp9', 7, 65),
(68, 'Intérrogation', '4', 11, 18, '20inp9', 7, 68),
(69, 'Exposé', '2', 11, 12, '20inp9', 7, 69),
(70, 'Intérrogation', '1', 11, 1, '20inp9', 7, 70),
(71, 'BE', '1', 11, 12, '20inp9', 7, 71),
(72, 'BE', '1', 11, 12, '20inp9', 7, 72),
(73, 'Intérrogation', '1', 11, 12, '20inp9', 7, 73),
(74, 'Intérrogation', '2', 1, 16, '20inp', 10, 0),
(75, 'Intérrogation', '2', 1, 18, '20inp', 10, 0),
(76, 'Intérrogation', '2', 3, 16, '20inp1', 10, 0),
(77, 'Intérrogation', '2', 3, 17, '20inp1', 10, 0);

-- --------------------------------------------------------

--
-- Structure de la table `octroyer`
--

DROP TABLE IF EXISTS `octroyer`;
CREATE TABLE IF NOT EXISTS `octroyer` (
  `CodeET` int NOT NULL,
  `CodeDPLM` int NOT NULL,
  `CodeEcole` int NOT NULL,
  `DateDPLM` date NOT NULL,
  KEY `CodeET` (`CodeET`,`CodeDPLM`,`CodeEcole`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `CodeProf` int NOT NULL AUTO_INCREMENT,
  `NomProf` varchar(20) NOT NULL,
  `PrenomProf` varchar(20) NOT NULL,
  `TelProf` varchar(20) NOT NULL,
  `EmailProf` varchar(15) NOT NULL,
  `LoginProf` varchar(10) NOT NULL,
  `PaswdProf` varchar(20) NOT NULL,
  PRIMARY KEY (`CodeProf`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`CodeProf`, `NomProf`, `PrenomProf`, `TelProf`, `EmailProf`, `LoginProf`, `PaswdProf`) VALUES
(1, 'Taoré', 'Souleyman', '0877663399', 'traore@gmail.co', 'traoré', '1234'),
(2, 'Kouadio', 'Lamber', '0988776655', 'kouadio@inphb.c', 'koua', '1234'),
(3, 'Konan', 'N\'dri', '0899887766', 'konan@inphb.ci', 'konan', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `CodePRO` int NOT NULL AUTO_INCREMENT,
  `LibellePRO` varchar(15) NOT NULL,
  `CoefficientPRO` varchar(15) NOT NULL,
  `NotePRO` varchar(20) NOT NULL,
  PRIMARY KEY (`CodePRO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `CodeRPT` int NOT NULL AUTO_INCREMENT,
  `DescrptionRPT` varchar(15) NOT NULL,
  `TypeRPT` varchar(15) NOT NULL,
  PRIMARY KEY (`CodeRPT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reponse`
--

DROP TABLE IF EXISTS `reponse`;
CREATE TABLE IF NOT EXISTS `reponse` (
  `CodeMsgET` int NOT NULL AUTO_INCREMENT,
  `DescMsg` text NOT NULL,
  `CodeMsgINSP` int NOT NULL,
  `CodeINSP` int NOT NULL,
  `CodeET` int NOT NULL,
  `CodeDE` int NOT NULL,
  PRIMARY KEY (`CodeMsgET`),
  KEY `CodeMsgINSP` (`CodeMsgINSP`,`CodeINSP`,`CodeET`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `reponse`
--

INSERT INTO `reponse` (`CodeMsgET`, `DescMsg`, `CodeMsgINSP`, `CodeINSP`, `CodeET`, `CodeDE`) VALUES
(1, 'Bonjour Kouassy votre bulletin est disponible vous pouvez passer le récupérer\r\n                                ', 1, 1, 1, 0),
(2, 'Bien recu', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

DROP TABLE IF EXISTS `seance`;
CREATE TABLE IF NOT EXISTS `seance` (
  `CodeSC` int NOT NULL AUTO_INCREMENT,
  `VolumeSC` varchar(20) NOT NULL,
  `TypeSC` varchar(15) NOT NULL,
  `PieceJointeSC` varchar(15) NOT NULL,
  `DetailSC` varchar(15) NOT NULL,
  `CodeCT` int NOT NULL,
  `CodeMAT` int NOT NULL,
  PRIMARY KEY (`CodeSC`),
  KEY `CodeCT` (`CodeCT`,`CodeMAT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
CREATE TABLE IF NOT EXISTS `semestre` (
  `CodeSMTRE` int NOT NULL AUTO_INCREMENT,
  `LibelleSMTRE` varchar(20) NOT NULL,
  PRIMARY KEY (`CodeSMTRE`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`CodeSMTRE`, `LibelleSMTRE`) VALUES
(1, 'Semestre1'),
(2, 'Semestre2');

-- --------------------------------------------------------

--
-- Structure de la table `suivre`
--

DROP TABLE IF EXISTS `suivre`;
CREATE TABLE IF NOT EXISTS `suivre` (
  `CodeET` int NOT NULL,
  KEY `CodeET` (`CodeET`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ue`
--

DROP TABLE IF EXISTS `ue`;
CREATE TABLE IF NOT EXISTS `ue` (
  `CodeUE` int NOT NULL AUTO_INCREMENT,
  `DescriptionUE` varchar(15) NOT NULL,
  `CoefficientUE` varchar(15) NOT NULL,
  PRIMARY KEY (`CodeUE`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ue`
--

INSERT INTO `ue` (`CodeUE`, `DescriptionUE`, `CoefficientUE`) VALUES
(1, 'electronique', '2'),
(2, 'informatique', '4'),
(3, 'sport', '1.5'),
(4, 'Reseaux', '2'),
(5, 'mecanique', '3');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprendre`
--
ALTER TABLE `apprendre`
  ADD CONSTRAINT `apprendre_ibfk_1` FOREIGN KEY (`CodeCLS`) REFERENCES `classe` (`CodeCLS`),
  ADD CONSTRAINT `apprendre_ibfk_2` FOREIGN KEY (`CodeMAT`) REFERENCES `matiere` (`CodeMAT`);

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`CodeSMTRE`) REFERENCES `semestre` (`CodeSMTRE`),
  ADD CONSTRAINT `matiere_ibfk_2` FOREIGN KEY (`CodeUE`) REFERENCES `ue` (`CodeUE`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`CodeMAT`) REFERENCES `matiere` (`CodeMAT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
