-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 sep. 2020 à 13:40
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_adresse`
--

DROP TABLE IF EXISTS `t_adresse`;
CREATE TABLE IF NOT EXISTS `t_adresse` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `designation` varchar(90) COLLATE utf8_bin NOT NULL,
  `ville` varchar(90) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `t_adresse`
--

INSERT INTO `t_adresse` (`id`, `designation`, `ville`) VALUES
(1, 'ssssssssssssssss', 'wwwwwwwwwwwwwwwwww'),
(2, 'hhhhhhhhhhhhhhhhhhh', 'bbbbbbbbbbbbbbbbbbb'),
(3, 'qqqqqqqqqqqqqqq', 'oooooooooooooooooooo'),
(4, 'bbbgggggggggggggggggg', 'eeeeeeeeeeeeeeeeeeeeeeeeee'),
(5, 'pppppppppppppppppppp', 'pp1111111111111111111111111'),
(6, 'fffffffffffffffffff', '1411111111444444444444444444'),
(7, 'ppppppppppppppppppppppppppppp444444444444444444', '4ffffffffffffffffffff777777777777777777'),
(8, 'iiiiiiiiiiiiiiiiiiiiiiiii666666666666', 'qqqqqqqqqqqqqqqqqqqqqqq777777777777777');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
