-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 20 Mai 2019 à 10:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `allo2`
--

-- --------------------------------------------------------

--
-- Structure de la table `appartient`
--

CREATE TABLE IF NOT EXISTS `appartient` (
  `Id_genre` int(11) NOT NULL,
  `Id_film` int(11) NOT NULL,
  PRIMARY KEY (`Id_genre`,`Id_film`),
  KEY `Appartient_film0_FK` (`Id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `appartient`
--

INSERT INTO `appartient` (`Id_genre`, `Id_film`) VALUES
(1, 3),
(2, 4),
(1, 5),
(3, 6),
(2, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `Id_film` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_du_film` varchar(100) NOT NULL,
  `Affiche_du_film` varchar(50) NOT NULL,
  `Trailer` varchar(250) NOT NULL,
  `Date_de_sortie` date NOT NULL,
  `Duree` time NOT NULL,
  `Synopsis` varchar(250) NOT NULL,
  PRIMARY KEY (`Id_film`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`Id_film`, `Nom_du_film`, `Affiche_du_film`, `Trailer`, `Date_de_sortie`, `Duree`, `Synopsis`) VALUES
(3, 'Batman The dark knight', 'img/3.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/wrcaivEjWCo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2008-08-13', '00:00:00', 'Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l''appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur associa'),
(4, 'Interstellar', 'img/4.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/VaOijhK3CRU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2014-11-05', '00:00:00', 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire. '),
(5, 'Zootopie', 'img/5.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/VxO0hDNFmFg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2016-02-17', '00:00:00', 'Zootopia est une ville qui ne ressemble à aucune autre : seuls les animaux y habitent ! On y trouve des quartiers résidentiels élégants comme le très chic Sahara Square, et d’autres moins hospitaliers comme le glacial Tundratown. Dans cette incroyabl'),
(6, 'Ready player one', 'img/6.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/oYGkAMHCOC4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2018-03-15', '00:00:00', '2045. Le monde est au bord du chaos. Les êtres humains se réfugient dans l''OASIS, univers virtuel mis au point par le brillant et excentrique James Halliday. Avant de disparaître, celui-ci a décidé de léguer son immense fortune à quiconque découvrira'),
(7, 'Forrest Gump', 'img/7.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/XU0gnq4E0o0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '1994-10-05', '00:00:00', 'Quelques décennies d''histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l''étrange odyssée d''un homme simple et pur, Forrest Gump.'),
(8, 'Le parrain', 'img/8.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/ktCk487JeMw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '1972-03-15', '00:00:00', 'En 1945, à New York, les Corleone sont une des cinq familles de la mafia. Don Vito Corleone, "parrain" de cette famille, marie sa fille à un bookmaker. Sollozzo, " parrain " de la famille Tattaglia, propose à Don Vito une association dans le trafic d'),
(9, 'Django Unchained', 'img/9.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/K2XjgsfzDrU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2013-01-13', '00:00:00', 'Dans le sud des États-Unis, deux ans avant la guerre de Sécession, le Dr King Schultz, un chasseur de primes allemand, fait l’acquisition de Django, un esclave qui peut l’aider à traquer les frères Brittle, les meurtriers qu’il recherche. Schultz pro'),
(10, 'Le seigneur des anneaux', 'img/10.jpg', '<iframe width="560" height="315" src="https://www.youtube.com/embed/nalLU8i4zgs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '2001-12-19', '00:00:00', 'Dans ce chapitre de la trilogie, le jeune et timide Hobbit, Frodon Sacquet, hérite d''un anneau. Bien loin d''être une simple babiole, il s''agit de l''Anneau Unique, un instrument de pouvoir absolu qui permettrait à Sauron, le Seigneur des ténèbres, de ');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `Id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `Genre` varchar(250) NOT NULL,
  PRIMARY KEY (`Id_genre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`Id_genre`, `Genre`) VALUES
(1, 'action'),
(2, 'sf'),
(3, 'animation'),
(4, 'fantastique'),
(5, 'drame'),
(6, 'comédie');

-- --------------------------------------------------------

--
-- Structure de la table `identite`
--

CREATE TABLE IF NOT EXISTS `identite` (
  `Id_identite` int(11) NOT NULL AUTO_INCREMENT,
  `Genre` varchar(250) NOT NULL,
  PRIMARY KEY (`Id_identite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`) VALUES
(1, 'marco', 'marco@gmail.com', 'marco'),
(2, 'giselle', 'giselle@gmail.com', '3f54f502ffcb747cc14a4cef1a4d963696b1415a'),
(3, 'admin', 'admin@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
(4, 'luc', 'luc@gmail.com', '217ff41da78a0f7bb84f09051522c3b079644480');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id_user` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(250) NOT NULL,
  `Prenom` varchar(250) NOT NULL,
  `Mail` varchar(250) NOT NULL,
  `Pseudo` varchar(250) NOT NULL,
  `MDP` varchar(250) NOT NULL,
  `Id_identite` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_user`),
  KEY `User_Identite_FK` (`Id_identite`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Id_user`, `Nom`, `Prenom`, `Mail`, `Pseudo`, `MDP`, `Id_identite`) VALUES
(1, 'john', 'smith', 'blablablou@prout.com', 'johnny', '', NULL),
(2, 'admin', '', '', '', 'admin', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `appartient`
--
ALTER TABLE `appartient`
  ADD CONSTRAINT `Appartient_film0_FK` FOREIGN KEY (`Id_film`) REFERENCES `film` (`Id_film`),
  ADD CONSTRAINT `Appartient_Genre_FK` FOREIGN KEY (`Id_genre`) REFERENCES `genre` (`Id_genre`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `User_Identite_FK` FOREIGN KEY (`Id_identite`) REFERENCES `identite` (`Id_identite`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
