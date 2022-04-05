-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 05 avr. 2022 à 02:18
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `metatrip`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

CREATE TABLE `abonnement` (
  `Ida` int(11) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Prix_a` varchar(110) NOT NULL,
  `Date_achat` date NOT NULL,
  `Date_expiration` date NOT NULL,
  `Etat` varchar(20) NOT NULL,
  `Ref_paiment` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnement`
--

INSERT INTO `abonnement` (`Ida`, `Type`, `Prix_a`, `Date_achat`, `Date_expiration`, `Etat`, `Ref_paiment`) VALUES
(1, 'Gold', '90', '2010-09-11', '2011-10-01', 'Etat', 1),
(2, 'Gold', '90', '2010-09-11', '2011-10-01', 'Etat', 1),
(3, 'Bronze', '50', '2022-02-01', '2022-02-09', 'A', 1),
(4, 'Silver', '70', '2022-02-08', '2022-02-02', 'A', 1),
(10, 'Silver', '11', '2022-03-02', '2022-03-04', 'aa', 1),
(11, 'Silver', '10', '2022-03-02', '2022-03-03', '5', 1),
(17, 'Silver', '17', '2022-03-17', '2022-03-03', 'hia', 1),
(18, 'Bronze', '11', '2022-03-11', '2022-03-17', 'wow', 1),
(19, 'Gold', '29', '2022-03-10', '2022-03-11', 'gold', 1),
(20, 'Gold', '27', '2022-03-19', '2022-03-05', 'ee', 1),
(21, 'Silver', '77', '2022-03-17', '2022-03-09', 'eee', 1),
(22, 'Gold', '12', '2022-03-03', '2022-03-03', 'YALUNA', 1),
(23, 'Gold', '12', '2022-03-11', '2022-03-10', 'www', 1),
(24, 'Gold', '13', '2022-03-18', '2022-03-11', 'gg', 1),
(25, 'Gold', '13', '2022-03-18', '2022-03-11', 'gg', 1),
(26, 'Silver', '12', '2022-03-10', '2022-03-11', 'qqq', 1),
(27, 'Silver', '12', '2022-03-03', '2022-03-04', 'ee', 1),
(28, 'Silver', '11', '2022-03-11', '2022-03-10', 'qq', 1),
(29, 'Bronze', '11', '2022-03-09', '2022-03-03', 'ww', 1),
(30, 'Silver', '11', '2022-03-11', '2022-03-10', 'qq', 1),
(31, 'Gold', '11', '2022-03-10', '2022-03-11', 'ww', 1),
(32, 'Silver', '11', '2022-03-11', '2022-03-04', 'qqq', 1),
(33, 'Bronze', '11', '2022-03-03', '2022-03-11', 'qq', 1),
(99, 'Bronze', '144', '2022-03-10', '2022-03-25', 'Non payè', 1),
(124, 'Gold', '150DT', '2022-03-01', '2022-03-31', 'Non payé', 1),
(129, 'Bronze', '50DT', '2022-03-02', '2022-04-01', 'Non payé', 1),
(133, 'Silver', '100DT', '2022-03-25', '2022-04-24', 'Non payé', 1),
(134, 'Gold', '150DT', '2022-03-19', '2022-04-18', 'Non payé', 1),
(135, 'Gold', '150DT', '2022-03-31', '2022-04-30', 'Non payé', 1),
(136, 'Gold', '150DT', '2022-03-25', '2022-04-24', 'Non payé', 1),
(137, 'Silver', '100DT', '2022-03-18', '2022-04-17', 'Non payé', 1),
(138, 'Bronze', '50DT', '2022-03-25', '2022-04-24', 'Non payé', 1),
(139, 'Bronze', '50DT', '2022-03-25', '2022-04-24', 'Non payé', 1),
(140, 'Silver', '100DT', '2022-03-01', '2022-03-31', 'Non payé', 1),
(141, 'Gold', '150DT', '2022-03-01', '2022-03-31', 'Non payé', 1),
(142, 'Gold', '150DT', '2022-03-25', '2022-04-24', 'Non payé', 1),
(143, 'Gold', '150DT', '2022-03-01', '2022-03-31', 'Non payé', 1),
(999, 'Gold', '150DT', '2022-03-01', '2022-03-31', 'Non payé', 1);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `idc` int(11) NOT NULL,
  `numc` int(20) NOT NULL,
  `image` varchar(40) NOT NULL,
  `type` varchar(20) NOT NULL,
  `etat` enum('DISPO','INDISPO') NOT NULL,
  `idh` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `idch` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `description` varchar(20) NOT NULL,
  `etatDispo` enum('DISPO','INDISPO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `Ide` int(11) NOT NULL,
  `Type_event` varchar(20) NOT NULL,
  `Chanteur` varchar(20) NOT NULL,
  `Adresse` varchar(20) NOT NULL,
  `Date_event` date NOT NULL,
  `prix_e` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hotel`
--

CREATE TABLE `hotel` (
  `Idh` int(11) NOT NULL,
  `Nom_hotel` varchar(20) NOT NULL,
  `Nb_etoiles` int(11) NOT NULL,
  `Adresse` varchar(50) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `localisationvoyage`
--

CREATE TABLE `localisationvoyage` (
  `Idlocalisation` int(11) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `idv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `Ref_paiement` int(11) NOT NULL,
  `Date_paiement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_event`
--

CREATE TABLE `reservation_event` (
  `Idrev` int(11) NOT NULL,
  `Nb_pers` int(11) NOT NULL,
  `Ide` int(11) NOT NULL,
  `Idu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_hotel`
--

CREATE TABLE `reservation_hotel` (
  `Idrh` int(11) NOT NULL,
  `Nb_nuitees` int(11) NOT NULL,
  `Nb_personnes` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Idu` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `Date_depart` date DEFAULT NULL,
  `Date_arrivee` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_voiture`
--

CREATE TABLE `reservation_voiture` (
  `Idrvoit` int(11) NOT NULL,
  `prix_rent` float NOT NULL,
  `Trajet` varchar(20) NOT NULL,
  `Idu` int(11) NOT NULL,
  `Idvoit` int(11) NOT NULL,
  `idch` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_voyage`
--

CREATE TABLE `reservation_voyage` (
  `Idrv` int(11) NOT NULL,
  `Date_depart` date NOT NULL,
  `Date_arrivee` date NOT NULL,
  `etat` varchar(20) NOT NULL,
  `Idu` int(11) DEFAULT NULL,
  `Idv` int(11) DEFAULT NULL,
  `Ref_paiement` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation_voyage`
--

INSERT INTO `reservation_voyage` (`Idrv`, `Date_depart`, `Date_arrivee`, `etat`, `Idu`, `Idv`, `Ref_paiement`) VALUES
(7, '2022-02-16', '2022-02-16', 'Paye', 26, 97, 0),
(9, '2022-02-16', '2022-02-16', 'NonPaye', 26, 18, 0),
(10, '2020-09-01', '2050-09-01', 'Paye', 26, 97, 0),
(11, '2050-09-01', '2050-09-01', 'Paye', 26, 97, 0),
(12, '2022-03-15', '2022-03-15', 'NonPaye', 842, 605, 0),
(13, '2022-03-10', '2022-03-10', 'NonPaye', 843, 97, 0),
(14, '2024-04-01', '2024-04-01', 'NonPaye', 842, 605, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sponsor`
--

CREATE TABLE `sponsor` (
  `ids` int(11) NOT NULL,
  `nomsponsor` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `date_sp` date NOT NULL,
  `prix_sp` float NOT NULL,
  `ide` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Idu` int(11) NOT NULL,
  `Cin` varchar(20) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Email` varchar(38) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Role` int(11) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Idu`, `Cin`, `Nom`, `Prenom`, `Tel`, `Email`, `Password`, `Image`, `Role`, `dateNaissance`) VALUES
(26, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(42, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(43, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(45, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(47, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', 'e882b72bccfc2ad578c27b0d9b472a14', 'image', 0, '2011-10-01'),
(48, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(49, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(50, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(51, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(52, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(53, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(54, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(55, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(56, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(57, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(58, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(59, '196525', 'ssss', 'cxx', '2568435', 'fares@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(60, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(61, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(62, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(63, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(64, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(65, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(66, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(67, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(68, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(69, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(70, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(71, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(73, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(74, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(75, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(76, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(77, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(78, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(811, '199525', 'ssss', 'cxx', '2568435', 'nex@live.fr', '25d55ad283aa400af464c76d713c07ad', 'image', 0, '2011-10-01'),
(812, '195', 'flam', 'fares', '256845', 'flam@live.fr', '0000', 'image', 0, '2010-09-11'),
(813, '195', 'flam', 'fares', '256845', 'flam@live.fr', '0000', 'image', 0, '2010-09-11'),
(814, '5866', 'dafdouf', 'zakzouk', '5895', 'zak@live.fr', '0000', 'image', 0, '2011-10-01'),
(815, '195', 'nex', 'nex', '256845', 'nex@live.fr', 'aaaa', 'image', 0, '2010-09-11'),
(816, '195', 'nex', 'nex', '256845', 'nex@live.fr', 'aaaa', 'image', 0, '2010-09-11'),
(817, '195', 'nex', 'nex', '256845', 'nex@live.fr', 'aaaa', 'image', 0, '2010-09-11'),
(818, '9638850', 'flam', 'med', '98222555', 'faresnex@esprit.tn', 'flamnex', 'fares.jpg', 0, '2020-02-07'),
(819, '111112222', 'ben s3id', 'nexus', '92666777', '7anda3li@easy.tn', '2d1c78a165d1f3a5444caf4afe8e2d72', 'nex.png', 0, '1999-02-02'),
(820, '9638850', 'si med flamedin', 'medssssss', '98222555', 'faresnex@esprit.tn', '2bef74e451a79914b1fc65e56fac5164', 'nexxs.jpg', 0, '2020-02-07'),
(821, '99998888', 'fares', 'lam', '98305054', 'fares@esprit.com', '594f803b380a41396ed63dca39503542', 'fares.png', 0, '2022-02-22'),
(822, '999999', 'fzzffez', 'fzfzf', '4444444', 'aaaa@a.tn', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'aaaa.jpg', 0, '2022-02-09'),
(823, '9993333', 'dafdafafa', 'fafafafafa', '90114475', 'fafafa@gmail.tn', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'dada.jpg', 0, '2006-03-09'),
(824, '12345678', 'aaa', 'bbbb', '5555555', 'aaaa@aaa.tn', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'aaa.jpg', 0, '2001-02-03'),
(825, '12345879', 'azzazaz', 'zzzzzzzzzz', '98665541', 'fares@esprit.tn', '5d793fc5b00a2348c3fb9ab59e5ca98a', 'fares.png', 0, '2000-02-02'),
(826, '11223344', 'lamloum', 'fares', '98665580', 'fareslamloum@gmail.com', 'ab4f63f9ac65152575886860dde480a1', 'fares.png', 0, '2000-02-07'),
(827, '1236987', 'lamloum', 'fares', '98663217', 'flam@gmail.com', '54965f9cd7e81588669cbbb393950569', 'fares.jpg', 0, '2000-02-07'),
(828, '1230000', 'lamloum', 'fares', '98332140', 'fareslam@esprit.tn', '74b87337454200d4d33f80c4663dc5e5', 'fares.png', 0, '2000-07-08'),
(831, '199525', 'ssss', 'cxx', '2568435', 'fares.lamloum@esprit.tn', '550e1bafe077ff0b0b67f4e32f29d751', 'image', 0, '2011-10-01'),
(835, '09634840', 'sdsdsd', 'sdsdsdsd', '53084352', '69sxxxx@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'C:\\\\Users\\\\medal\\\\OneDrive\\\\Images\\\\000.jpg', 0, '2022-03-01'),
(836, '12345678', 'bs', 'dali', '53084352', 'test@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'C:\\\\Users\\\\medal\\\\OneDrive\\\\Images\\\\000.jpg', 0, '2022-03-08'),
(840, '11223340', 'lamloum', 'fares', '98226682', 'fareslamloum@esprit.tn', '4a7d1ed414474e4033ac29ccb8653d9b', 'C:\\\\Users\\\\FLAM\\\\Desktop\\\\flam.jpg', 1, '2022-03-07'),
(842, '09632540', 'dali', 'dali', '23282360', 'daliv', '0000', 'C:\\\\Users\\\\FLAM\\\\Desktop\\\\chat.jpg', 0, '2022-03-08'),
(843, '00112233', 'snoussi', 'med aziz', '98335654', 'aziz@esprit.tn', '4a7d1ed414474e4033ac29ccb8653d9b', 'C:\\\\Users\\\\FLAM\\\\Desktop\\\\flam.jpg', 0, '2022-03-01'),
(844, '110066', 'lamloum', 'fares', '98663210', 'fareslamloum@gmail.fr', '337be3074ca499c5a397b2888c3dcda0', 'image', 0, '2011-10-01'),
(845, '994406', 'fares', 'lamloum', '20444895', 'lamloum@gmail.com', 'af4dff190111fab70a4380122abd7e99', 'image', 0, '2000-10-01');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `Idvoit` int(11) NOT NULL,
  `Matricule` varchar(50) NOT NULL,
  `Puissance_fiscalle` int(11) NOT NULL,
  `Image_v` varchar(50) NOT NULL,
  `Modele` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `Idv` int(11) NOT NULL,
  `Pays` varchar(20) NOT NULL,
  `Image_pays` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`Idv`, `Pays`, `Image_pays`) VALUES
(18, 'espagne', 'c://espagne.png'),
(97, 'istanbul', 'c://antalya.png'),
(98, 'tounis', 'c://maroc.png'),
(99, 'tounis', 'c://maroc.png'),
(100, 'tounis', 'c://maroc.png'),
(169, 'espagne', 'c://espagne.png'),
(198, 'espagne', 'c://espagne.png'),
(199, 'espagne', 'c://espagne.png'),
(369, 'tounis', 'c://maroc.png'),
(399, 'tounis', 'c://berlin.png'),
(499, 'tounis', 'c://berlin.png'),
(501, 'tounis', 'c://berlin.png'),
(509, 'tounis', 'c://berlin.png'),
(599, 'tounis', 'c://berlin.png'),
(600, 'allemagne', 'c://berlin.png'),
(601, 'gafsa', 'c://beja.png'),
(602, 'gafsa', 'c://beja.png'),
(603, 'gafsa', 'c://beja.png'),
(604, 'gafsa', 'c://beja.png'),
(605, 'gafsa', 'c://beja.png'),
(606, 'gafsa', 'c://beja.png');

-- --------------------------------------------------------

--
-- Structure de la table `voyage_organise`
--

CREATE TABLE `voyage_organise` (
  `Idvo` int(11) NOT NULL,
  `Prix_billet` float NOT NULL,
  `Airline` varchar(20) NOT NULL,
  `Nb_nuitees` int(11) NOT NULL,
  `etatVoyage` varchar(255) NOT NULL DEFAULT 'INDISPO',
  `nbplaces` int(11) NOT NULL,
  `Idv` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage_organise`
--

INSERT INTO `voyage_organise` (`Idvo`, `Prix_billet`, `Airline`, `Nb_nuitees`, `etatVoyage`, `nbplaces`, `Idv`) VALUES
(78, 170.6, 'nex', 3, 'DISPO', 0, 18),
(79, 990.6, 'sounay', 3, 'DISPO', 0, 369),
(80, 170.6, 'nex', 3, 'DISPO', 0, 369),
(81, 10.6, 'flam', 3, 'INDISPO', 0, 369),
(82, 170.6, 'nex', 3, 'INDISPO', 0, 600),
(84, 170.6, 'nex', 3, 'INDISPO', 0, 605),
(85, 170.6, 'nexdd', 3, 'DISPO', 0, 97),
(86, 170.6, 'nexdd', 3, 'INDISPO', 0, 605),
(87, 170.6, 'nexdd', 3, 'INDISPO', 0, 605);

-- --------------------------------------------------------

--
-- Structure de la table `voyage_virtuel`
--

CREATE TABLE `voyage_virtuel` (
  `Idvv` int(11) NOT NULL,
  `Image_v` varchar(255) NOT NULL,
  `Idv` int(11) DEFAULT NULL,
  `Ida` int(11) DEFAULT NULL,
  `Video` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyage_virtuel`
--

INSERT INTO `voyage_virtuel` (`Idvv`, `Image_v`, `Idv`, `Ida`, `Video`, `Nom`) VALUES
(1, '../../images/img2.jpeg', 97, 1, 'Streaming', 'Istanbul'),
(2, '../../images/imggg.jpeg', 199, 4, 'Video', 'Madrid'),
(3, '../../images/imgg.jpeg', 600, 29, 'Streaming', 'Dubai'),
(412, '../../images/louvre.jpeg', 199, 2, 'Video', 'Paris');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`Ida`),
  ADD KEY `Ida` (`Ida`),
  ADD KEY `FK_pai` (`Ref_paiment`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`idc`),
  ADD KEY `idc` (`idc`),
  ADD KEY `idh` (`idh`);

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`idch`),
  ADD KEY `idch` (`idch`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`Ide`);

--
-- Index pour la table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`Idh`);

--
-- Index pour la table `localisationvoyage`
--
ALTER TABLE `localisationvoyage`
  ADD PRIMARY KEY (`Idlocalisation`),
  ADD KEY `idv` (`idv`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`Ref_paiement`);

--
-- Index pour la table `reservation_event`
--
ALTER TABLE `reservation_event`
  ADD PRIMARY KEY (`Idrev`),
  ADD KEY `Idrev` (`Idrev`),
  ADD KEY `Fk_eve` (`Ide`),
  ADD KEY `Fk_usr` (`Idu`);

--
-- Index pour la table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  ADD PRIMARY KEY (`Idrh`),
  ADD KEY `Idrh` (`Idrh`),
  ADD KEY `FK_u` (`Idu`),
  ADD KEY `fk_chh` (`idc`);

--
-- Index pour la table `reservation_voiture`
--
ALTER TABLE `reservation_voiture`
  ADD PRIMARY KEY (`Idrvoit`),
  ADD KEY `Idrvoit` (`Idrvoit`),
  ADD KEY `FK_resu` (`Idu`),
  ADD KEY `FK_resv` (`Idvoit`),
  ADD KEY `FK_CHAUFF` (`idch`);

--
-- Index pour la table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  ADD PRIMARY KEY (`Idrv`),
  ADD KEY `FK_reusr` (`Idu`),
  ADD KEY `Idrv` (`Idrv`),
  ADD KEY `FKPAY` (`Ref_paiement`),
  ADD KEY `FK_resvoy` (`Idv`);

--
-- Index pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `sponsor_ibfk_1` (`ide`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Idu`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`Idvoit`),
  ADD KEY `Idvoit` (`Idvoit`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`Idv`);

--
-- Index pour la table `voyage_organise`
--
ALTER TABLE `voyage_organise`
  ADD PRIMARY KEY (`Idvo`),
  ADD KEY `FK_vo` (`Idv`);

--
-- Index pour la table `voyage_virtuel`
--
ALTER TABLE `voyage_virtuel`
  ADD PRIMARY KEY (`Idvv`),
  ADD UNIQUE KEY `Idvv` (`Idvv`),
  ADD KEY `FK_abb` (`Ida`),
  ADD KEY `FK_vv` (`Idv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `Ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `idch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=667;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `Ide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `Idh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `localisationvoyage`
--
ALTER TABLE `localisationvoyage`
  MODIFY `Idlocalisation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `reservation_event`
--
ALTER TABLE `reservation_event`
  MODIFY `Idrev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  MODIFY `Idrh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `reservation_voiture`
--
ALTER TABLE `reservation_voiture`
  MODIFY `Idrvoit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  MODIFY `Idrv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `Idu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=846;

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `Idvoit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6891;

--
-- AUTO_INCREMENT pour la table `voyage`
--
ALTER TABLE `voyage`
  MODIFY `Idv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55556;

--
-- AUTO_INCREMENT pour la table `voyage_organise`
--
ALTER TABLE `voyage_organise`
  MODIFY `Idvo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `voyage_virtuel`
--
ALTER TABLE `voyage_virtuel`
  MODIFY `Idvv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FK_pai` FOREIGN KEY (`Ref_paiment`) REFERENCES `paiement` (`Ref_paiement`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `FK_C509E4FFFABF6E74` FOREIGN KEY (`idh`) REFERENCES `hotel` (`Idh`);

--
-- Contraintes pour la table `localisationvoyage`
--
ALTER TABLE `localisationvoyage`
  ADD CONSTRAINT `FK_7CBDD6B8B05317` FOREIGN KEY (`idv`) REFERENCES `voyage` (`Idv`);

--
-- Contraintes pour la table `reservation_event`
--
ALTER TABLE `reservation_event`
  ADD CONSTRAINT `Fk_eve` FOREIGN KEY (`Ide`) REFERENCES `evenement` (`Ide`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Fk_usr` FOREIGN KEY (`Idu`) REFERENCES `user` (`Idu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation_hotel`
--
ALTER TABLE `reservation_hotel`
  ADD CONSTRAINT `FK_u` FOREIGN KEY (`Idu`) REFERENCES `user` (`Idu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation_voiture`
--
ALTER TABLE `reservation_voiture`
  ADD CONSTRAINT `FK_CHAUFF` FOREIGN KEY (`idch`) REFERENCES `chauffeur` (`idch`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_resu` FOREIGN KEY (`Idu`) REFERENCES `user` (`Idu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_resv` FOREIGN KEY (`Idvoit`) REFERENCES `voiture` (`Idvoit`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reservation_voyage`
--
ALTER TABLE `reservation_voyage`
  ADD CONSTRAINT `FK_776CC0CE38FD15F7` FOREIGN KEY (`Idv`) REFERENCES `voyage` (`Idv`),
  ADD CONSTRAINT `FK_776CC0CEA1F4444D` FOREIGN KEY (`Idu`) REFERENCES `user` (`Idu`);

--
-- Contraintes pour la table `sponsor`
--
ALTER TABLE `sponsor`
  ADD CONSTRAINT `sponsor_ibfk_1` FOREIGN KEY (`ide`) REFERENCES `evenement` (`Ide`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voyage_organise`
--
ALTER TABLE `voyage_organise`
  ADD CONSTRAINT `FK_22CA7F3238FD15F7` FOREIGN KEY (`Idv`) REFERENCES `voyage` (`Idv`);

--
-- Contraintes pour la table `voyage_virtuel`
--
ALTER TABLE `voyage_virtuel`
  ADD CONSTRAINT `FK_abb` FOREIGN KEY (`Ida`) REFERENCES `abonnement` (`Ida`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_vv` FOREIGN KEY (`Idv`) REFERENCES `voyage` (`Idv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
