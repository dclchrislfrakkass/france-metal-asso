-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : cl1-sql23
-- Généré le :  mer. 20 fév. 2019 à 16:35
-- Version du serveur :  10.1.37-MariaDB-1~jessie
-- Version de PHP :  7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p1216_5`
--

-- --------------------------------------------------------

--
-- Structure de la table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'Sicca', '$P$BRxFfWenyBTFWPWiQbjyVXH5HHzcfb/', 'sicca', 'laurent.juy@gameria.fr', '', '2017-12-03 17:00:36', '', 0, 'Sicca'),
(2, 'Kermhit', '$P$BdjQkJCIu2yp9LsB7WJ3OySgACBg7k0', 'kermhit', 'france.metal.asso@gmail.com', 'http://france-metal.fr', '2017-12-22 22:56:23', '1542837303:$P$B098wtSyzwJKMKYo8/.p6LsCM/cPJj0', 0, 'Kermhit'),
(3, 'aformac', '$P$BuDdKjjm0TEBgNlDhuhtA1aSYlXrAW.', 'aformac', 'laurent.juy@ameria2.fr', '', '2019-02-08 14:28:50', '1549636131:$P$B1fkBedyxlAvK.CCc40j1Wg6CPV85I.', 0, 'Bob winner'),
(4, 'Rahan', '$P$BZzgXt2OJg7g.nuYl4LodTGAW8/dE3/', 'rahan', 'sicca@laposte.net', '', '2019-02-11 09:55:33', '', 0, 'Rahan'),
(5, 'Rahan18', '$P$BeYSHNG7KG5.WSrJbneQwwg0ZU855c1', 'rahan18', 'sicca.ameria@gmail.com', '', '2019-02-11 10:00:39', '', 0, 'Rahan18'),
(6, 'Ameria', '$P$BlmnePa9B7RkQHP1PskxbYzcJVUEQh/', 'ameria', 'laurent.juy@ameria.fr', '', '2019-02-14 15:33:32', '', 0, 'Ameria'),
(7, 'frakkass', '$P$BSE6ZJFkx4p8fYSJHIbbunSJUfo.zd0', 'frakkass', 'lacroixchris57@gmail.com2', '', '2019-02-15 08:33:24', '', 0, 'frakkass'),
(8, 'fabou', '$P$BeDKL70R4WZmjDu5u22THJaJsEe81Y/', 'fabou', 'fabou21@free.fr', '', '2019-02-15 09:14:11', '', 0, 'fabou'),
(9, 'Fred', '$P$B5/31BQgnm6tw1NPh5Xr0PIEpUSr9r1', 'fred', 'exonet3i@gmail.com', '', '2019-02-15 15:53:57', '', 0, 'Fred'),
(10, 'sicca18', '$P$Bv8v4FdcYNXq2OQIkC/u9sNRRbmB5.1', 'sicca18', 'laurent.juy2@gmail.com', '', '2019-02-18 08:36:14', '', 0, 'sicca18'),
(11, 'hrthrt', '$P$BKrSiiGZ1UDL5u4G6O/aEOEJbfXguj1', 'hrthrt', 'jhgj@jghjghj.com', '', '2019-02-18 09:12:30', '', 0, 'hrthrt'),
(12, 'sicca2', '$P$BXRDlCtdFtY6Ox9HScp.yogvJ2/2fk.', 'sicca2', 'laurent.juy3@gmail.com', '', '2019-02-18 11:04:34', '', 0, 'sicca2'),
(13, 'sicca18000', '$P$Buj2nkvayOEjmuMoxWkKxXXZGkqULE.', 'sicca18000', 'laurent.juy4@gmail.com', '', '2019-02-18 11:31:39', '', 0, 'sicca18000'),
(14, 'Sicca20', '$P$BgYnjPwplMC7cbMP6UNESKqD1Aw.r3/', 'sicca20', 'laurent.juy9@gmail.com', '', '2019-02-19 10:40:46', '', 0, 'Sicca20'),
(15, 'Sicca21', '$P$BdnSt.HxTSgTYfilzwpQhLUxNtN8yg.', 'sicca21', 'laurent.juy17@gmail.com', '', '2019-02-19 13:58:06', '', 0, 'Sicca21'),
(16, 'Sicca22', '$P$BZ8sNwNtchBgKK.fWb/AdmbSjkDgjs1', 'sicca22', 'laurent.juy@gmail.com', '', '2019-02-19 14:29:06', '', 0, 'Sicca22'),
(17, 'frakkassTheBeast', '$P$BanbA1KoNZgCVyW98/0cT79DeMg3lT/', 'frakkassthebeast', 'lacroixchris57@gmail.com', '', '2019-02-20 09:21:16', '', 0, 'frakkassTheBeast');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
