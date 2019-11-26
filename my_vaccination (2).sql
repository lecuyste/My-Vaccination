-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 26 nov. 2019 à 09:39
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_vaccination`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthDate` date DEFAULT NULL,
  `birthLoc` varchar(255) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `sang` varchar(255) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `modifiedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUser`, `nom`, `prenom`, `mail`, `password`, `birthDate`, `birthLoc`, `poids`, `taille`, `sang`, `role`, `createdAt`, `modifiedAt`) VALUES
(1, 'Bignoli', 'Michel', 'mbignoli@gmail.com', '$2y$10$xhhuQC9jrXO5KRWWeektBuaJ6C5fDs9Y0slI6SDAVx5I67bOcnrcy', '0000-00-00', '', 0, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '', '', '', '', '1973-02-12', 'Bolbec', 3500, 50, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Machin', 'Bernard', 'b.machin@free.fr', '$2y$10$e9dm.xtior2CSUirbmP8DuKdPkLJPVPYd4t1xHiUaxPz0fvrlGHs6', '0000-00-00', '', 0, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'belier', 'john', 'john.belier@gmail.com', '$2y$10$GPdPrNT8mrjuN1OAzPvvBeHeWpGzIOKSwbI2dQ3.WrY3.i1D5yXle', '0000-00-00', '', 0, 0, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'jacquouille', 'albert', 'jacqouille.a@gmail.com', '$2y$10$wCK.LwtdL0C/IrsgYBato.3iNiFpY3Iq2DcUbhly78ShDxqw7vPmO', '0000-00-00', '', 0, NULL, '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '', '', '', '', '1985-05-12', 'Eu', 3585, 33, '/&gt;\r\n            &lt;label for=', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '', '', '', '', '1985-05-12', 'Eu', 3585, 33, '/&gt;\r\n            &lt;label for=', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '', '', '', '', '1985-02-12', 'Caen', 3985, 45, '&lt;br /&gt;\r\n&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: sang in &lt;b&gt;D:ProgrammexampphtdocsBCI1myVaccinationincludeformRenseignement.php&lt;/b&gt; on line &lt;b&gt;39&lt;/b&gt;&lt;br /&gt;\r\n/&gt;\r\n            &lt;label for=', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Canard', 'Benedicte', 'bcanard@free.fr', '$2y$10$yxdpymJ0XSNQaXmdiunL3exv7zLvBb7n0zZ2Q1D5DIbguemtbE5zu', NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '', '', '', '', '1998-07-14', 'Rouen', 4050, 39, '&lt;br /&gt;\r\n&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: sang in &lt;b&gt;D:ProgrammexampphtdocsBCI1myVaccinationincludeformRenseignement.php&lt;/b&gt; on line &lt;b&gt;39&lt;/b&gt;&lt;br /&gt;\r\n/&gt;\r\n            &lt;label for=', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '', '', '', '', '1998-02-13', 'Bolbec', 4200, 45, '/&gt;\r\n            &lt;label for=', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '', '', '', '', '1998-02-13', 'Bolbec', 4200, 45, '/&gt;\r\n            &lt;label for=', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '', '', '', '', '1985-05-14', 'Caen', 3865, 42, 'B+', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Lambert', 'Kevin', 'lambertk@free.fr', '$2y$10$9xNyOm5gmxOTuTB7sNKHz.67HaHlY7MZYSywkgAwff0vt1b4gY21K', NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Bignoli', 'Michel', 'b.michel@free.com', '$2y$10$dlZLjsXIjVsFBwqOnAgpye9V8qMiH4Z6m4ae9r2QH9jmsR.FsySY2', NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bignoli', 'Michel', 'bignolim@hotmail.fr', '$2y$10$BCHsaNd.5IBi65yakWryY.33vNONxvKTv6W28cuXQbGTofOXVbhuC', NULL, NULL, NULL, NULL, NULL, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Breton', 'Bernard', 'b.b@free.fr', '$2y$10$9QKcEAEtnDQ7kMcdPPdodeuSoTZ6gVThsxKBi8zY5Y1xgrxCmNSz.', '1974-06-15', 'Dieppe', 2, 2, 'AB-', 1, '2019-11-25 11:44:40', '2019-11-25 14:56:38'),
(18, 'Admin', 'Admin', 'admin@gmail.com', '$2y$10$vIZizLRHQuTfMyKkAQnQGeAjRDhL200U.ERFDlyVWOamp1JuoZyqS', NULL, NULL, NULL, NULL, NULL, 2, '2019-11-25 14:18:24', NULL),
(19, 'Laramet', 'Kevin', 'laramet.k@gmail.com', '$2y$10$gbcGuFa1g1nkT9r1WsTnxOGUczp7yixzrmMyDS2dXmxEVKJgGbOae', '1985-06-13', 'Dieppe', 3500, 42, 'AB+', 1, '2019-11-25 15:54:52', '2019-11-25 16:21:00'),
(20, 'Bernouilli', 'Roger', 'br@free.fr', '$2y$10$fVw4TF5vS4inud/7YAqZp.YbtSE.73yortlP4scaqav0EQPkQ/VTS', '1956-11-14', 'Calais', 3850, 48, 'B+', 1, '2019-11-25 16:28:38', '2019-11-25 16:30:39'),
(21, 'Bougie', 'Mickael', 'bm@free.fr', '$2y$10$aKCLWflmqiFSMV5UtrFVtewRpUUoVtxnvjCb8iQZkr5hICR3QJIuu', NULL, NULL, NULL, NULL, NULL, 1, '2019-11-25 17:39:20', NULL),
(22, 'Pacher', 'Nora', 'pn@free.fr', '$2y$10$s0wQVQrUervT494GqYnBJOPMo/dYmkucZ4THibkhSfmXH0mgUXB8G', NULL, NULL, NULL, NULL, NULL, 1, '2019-11-25 17:40:34', NULL),
(23, 'Roland', 'Melina', 'rm@free.fr', '$2y$10$V2Zpb59VnnpnOY2nFquN7eWQRfjgr62o5NGZ0AOt5FaX7nAKtvJx2', '1986-12-31', 'Rouen', 3452, 48, 'AB+', 1, '2019-11-25 17:41:49', '2019-11-25 17:42:31'),
(24, 'Gerard', 'Raymond', 'gerardraymond@gmail.com', '$2y$10$NcZ.TDW7jELX9Bp894zt3uo79RfRWbFHolqb.wTmvFJelbgVbADdq', '1990-05-04', 'Bolbec', 1, 10, 'AB+', 1, '2019-11-25 17:51:09', '2019-11-25 17:53:55'),
(25, 'Lafuite', 'Cédric', 'cedric.l@gmail.com', '$2y$10$NPThC2VJ8qFutRfGrWGeXe3xUz8UcxTFvQot7K0QFe.DBY5GOnH0q', NULL, NULL, NULL, NULL, NULL, 1, '2019-11-26 09:20:02', NULL),
(26, 'Dera', 'Camille', 'dera.c@free.fr', '$2y$10$6LG/95KCknBVzS/S4NDdCePAB41iEHgab.iM5Is46xXj36UALmmba', NULL, NULL, NULL, NULL, NULL, 1, '2019-11-26 09:22:44', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
