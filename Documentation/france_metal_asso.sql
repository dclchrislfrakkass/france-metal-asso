-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 05 fév. 2019 à 15:32
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `france_metal_asso`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE `album` (
  `idAlbum_Album` int(9) NOT NULL,
  `nomAlbum_Album` varchar(250) DEFAULT NULL,
  `dateSortie_Album` varchar(25) DEFAULT NULL,
  `label_Album` varchar(250) DEFAULT NULL,
  `lienEcouteAlbum_Album` varchar(250) DEFAULT NULL,
  `note_Album` int(9) DEFAULT NULL,
  `idStyleSecondaire_StyleSecondaire` int(9) DEFAULT NULL,
  `idGroupe_Groupe` int(9) DEFAULT NULL,
  `idDepartement_Departement` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `album`
--

INSERT INTO `album` (`idAlbum_Album`, `nomAlbum_Album`, `dateSortie_Album`, `label_Album`, `lienEcouteAlbum_Album`, `note_Album`, `idStyleSecondaire_StyleSecondaire`, `idGroupe_Groupe`, `idDepartement_Departement`) VALUES
(1, 'The Diving Mask', 'oct.-18', 'Unique Leader Records', 'https://dysmorphicmetal.bandcamp.com', NULL, 1, 1, NULL),
(2, 'Necrobreed', 'févr.-17', 'Season Of Mist', 'http://benighted.bandcamp.com', NULL, NULL, 2, NULL),
(3, 'Gutter Perdition', 'févr.-18', 'XenoKorp', 'https://defenestration44.bandcamp.com/', NULL, 3, 3, NULL),
(4, 'Scourge Of Demonic Incantations', 'avr.-18', '', 'https://ironflesh.bandcamp.com/merch', NULL, 3, 4, NULL),
(5, 'MMXVII', 'févr.-18', '', 'https://abyssalvacuum.bandcamp.com/releases', NULL, 4, 5, NULL),
(6, 'L\' esprit Des Vents', 'mars-18', 'Les Acteurs de l\'Ombre Productions', 'https://thoseopposedrecords.bandcamp.com/album/la-cit-des-vents', NULL, 5, 6, NULL),
(7, 'The Stench Of Death', 'janv.-18', 'Solstice Promotion', 'https://www.spirit-of-metal.com/fr/band/Mortis_Mutilati', NULL, 5, 7, NULL),
(8, 'Viscères', 'janv.-17', 'Wooaaargh, Troffea records et HELL-J Industries.', 'https://btkmetal.bandcamp.com', NULL, 6, 8, NULL),
(9, 'AN INFINITE LANDSCAPE', 'oct.-18', 'Unsigned', '', NULL, 7, 9, NULL),
(10, 'Mortal Prosternation', 'oct.-18', '', 'https://aeonpatronist.bandcamp.com', NULL, 8, 10, NULL),
(11, 'Castle Of Dust', 'oct.-18', '', 'https://godagainsthumanity.bandcamp.com', NULL, 5, 11, NULL),
(12, 'Into My Hell', 'janv.-18', 'GREAT DANE RECORDS', 'https://warkunt.bandcamp.com', NULL, 10, 12, NULL),
(13, 'Ce qui fut, Ce qui est, Ce qui sera', 'oct.-18', 'Goathorned Productions', 'https://malepeste.bandcamp.com/album/ce-qui-fut-ce-qui-est-ce-qui-sera', NULL, 5, 13, NULL),
(14, 'CERCLE', 'sept.-18', 'Autoproduction', '', NULL, 5, 14, NULL),
(15, 'Another Earth', 'sept.-18', '', 'https://voraphilya.bandcamp.com', NULL, 9, 15, NULL),
(16, 'Symposium of Torments', 'mai-18', 'Epictural Production', 'www.epictural.fr', NULL, 5, 16, NULL),
(17, 'The Divine Triumph', 'oct.-18', 'Jive Epic / Sony Music Entertainment', 'https://open.spotify.com/album/3Sb1iylWQIuw9iaQmGqcE6', NULL, 10, 17, NULL),
(18, 'Occultation Full HD', 'sept.-18', 'Egregor Records', '', NULL, NULL, 18, NULL),
(19, 'Human Trap', 'sept.-18', '', 'https://temptfate31.bandcamp.com', NULL, 10, 19, NULL),
(20, 'Solar Eruption', 'sept.-18', 'Unsigned', '', NULL, 12, 20, NULL),
(21, 'En tournée sur l\'automne 2018 en Europe', 'janv.-18', 'Metal Blade Records', '', NULL, 26, 21, NULL),
(22, 'Calvary', 'sept.-18', 'Klonosphere / Season of Mist.', 'https://propheticscourge.bandcamp.com/releases', NULL, 10, 22, NULL),
(23, 'Way To Carcosa', 'sept.-18', 'Dark Faery Records', 'https://mindimperium.bandcamp.com', NULL, 14, 23, NULL),
(24, 'NINE LEVELS', 'avr.-18', 'darkTunes Music Group', 'https://darktunes.bandcamp.com/album/eleven', NULL, 15, 24, NULL),
(25, 'Sadraen .. on Tour !!!!', 'janv.-18', 'M & O Music (Label)', 'https://www.instagram.com/sadraen', NULL, 26, 25, NULL),
(26, 'FREITOT', 'mai-18', 'label Mystick', 'https://www.deezer.com/fr/album/63075802', NULL, 17, 26, NULL),
(27, 'A Gate Toward Freedom', 'mars-18', '', 'https://utopiandespair1.bandcamp.com/releases', NULL, 18, 27, NULL),
(29, 'Nebula Septem', 'janv.-18', 'Les Acteurs de l\'Ombre Productions', 'https://monolithe.bandcamp.com', NULL, 19, 29, NULL),
(30, 'The Dead Years', 'janv.-18', 'Total Rust', 'https://mourningdawn.bandcamp.com/album/the-dead-years', NULL, 19, 30, NULL),
(31, 'Under Punishment\'s Tree', 'févr.-18', 'Bad Reputation', '', NULL, 51, 31, NULL),
(32, 'Roskov', 'janv.-18', '', '', NULL, 21, 32, NULL),
(33, 'Left To Wither', 'janv.-18', '', 'https://lefttowither.bandcamp.com/releases', NULL, 22, 33, NULL),
(34, 'So Said The Snake', 'janv.-18', 'Head Records', 'https://mudweiser.bandcamp.com', NULL, 21, 34, NULL),
(35, 'Globular Cluster', 'oct.-18', '', '\"https://dogfries.bandcamp.com', NULL, 23, 35, NULL),
(36, 'DEMO MMXVII', 'janv.-18', 'Chaos Records', 'https://epitaphe.bandcamp.com/releases', NULL, 24, 36, NULL),
(37, 'Attendre la mort', 'mars-18', 'Autoproduction', 'https://blackboxwarning.bandcamp.com/releases', NULL, 25, 63, NULL),
(38, 'Disqualifié', 'avr.-18', '', 'https://baculum666.bandcamp.com/album/disqualifi', NULL, 26, 38, NULL),
(39, 'Melt', 'nov.-18', 'FatCat Land records', 'https://melt4.bandcamp.com/album/melt-2', NULL, 27, 39, NULL),
(40, 'Wreck Plus', 'déc.-18', 'Autoproduction', 'http://www.wreckplus.bandcamp.com', NULL, 28, 40, NULL),
(41, 'The Silent Frontier', 'nov.-18', 'Valkyrie Rising', '', NULL, 29, 41, NULL),
(42, 'Did you ever say farewell', 'nov.-18', '', 'http://onewithme.bandcamp.com', NULL, 30, 42, NULL),
(43, 'Obession et The god within', 'oct.-18', '', 'http://www.soundcloud.com/theraphosa', NULL, 98, 43, NULL),
(44, 'A Place To Die', 'oct.-18', '', 'http://tinyurl.com/APTD-Deezer', NULL, 98, 44, NULL),
(45, 'DESTROYING DA STAGE/SECRET PLACE', 'oct.-18', 'GHOST PROD/MYSTYK PROD', 'https://twitter.com/scarlean', NULL, 90, 45, NULL),
(46, 'Rust Theory', 'nov.-18', 'Black Desert Records', 'https://rusttheory.bandcamp.com', NULL, 33, 46, NULL),
(47, 'MASTER of GIALLO', 'juin-18', 'Dark Star Records', 'https://www.facebook.com/ObszonGeschopfOfficial', NULL, 34, 47, NULL),
(48, 'DARK CARD', 'oct.-18', '', 'https://seasonoftears.bandcamp.com', NULL, 35, 48, NULL),
(49, 'DIE', 'juin-18', 'Adipocere Records', 'https://open.spotify.com/album/3pc39PjNTsrs1sxS7C0HLQ', NULL, 36, 49, NULL),
(50, 'DISASTER MYOPIA', 'sept.-18', '', 'https://open.spotify.com/artist/30vi0U2nQKRy10d5ifaqFY', NULL, 37, 50, NULL),
(51, 'The Page', 'oct.-18', 'Scarlet Records', 'http://whyzdom.bigcartel.com', NULL, 38, 51, NULL),
(52, 'Owe Nothing', 'sept.-18', 'Autoproduction', '', NULL, 98, 52, NULL),
(53, 'Damocles', 'janv.-18', 'M.U.S.I.C Records', 'https://open.spotify.com/artist/14O6pFhZXj9B1JFcAZ3OSs', NULL, 39, 53, NULL),
(54, 'K. K. K. in Your Head', 'janv.-18', 'M & O Music (Label)', '', NULL, 40, 54, NULL),
(55, 'Souffre avec moi', 'sept.-18', 'Go Music/ Jump Music/ Elyxprod', 'https://elyx.bandcamp.com', NULL, 119, 55, NULL),
(56, 'Crosses and Crossroads', 'août-18', 'Music Records', 'https://www.deezer.com/fr/artist/15069239', NULL, 42, 56, NULL),
(57, 'Slaves and Snakes', 'sept.-18', 'Deadlight Entertainment, Terrain Vague et MALLEVS RECORDS.', 'https://www.deezer.com/fr/album/72591752', NULL, 43, 57, NULL),
(58, 'Album', 'mai-18', '', 'https://soundcloud.com/monsters-4', NULL, 49, 66, NULL),
(59, 'Dogs of God', 'mars-18', '', '', NULL, NULL, 59, NULL),
(60, 'Dynasteia Klub', 'févr.-18', 'Season of Mist', 'https://open.spotify.com/album/5ME7iyxvJbKM0gyOPgIyXI', NULL, 45, 60, NULL),
(61, 'Love and Hate', 'févr.-18', 'Autoprod', 'https://www.metalorgie.com/groupe/Moon-Prototype', NULL, NULL, 61, NULL),
(62, 'Resurrection', 'juin-18', '', 'https://negative-ritual.wixsite.com/negative-ritual', NULL, 46, 62, NULL),
(63, 'Attendre la mort', 'mars-18', '', '', NULL, 25, 63, NULL),
(64, 'Crawl To Paradise', 'janv.-18', 'Recuiem Prod', 'https://www.instagram.com/ezoxofficial', NULL, 47, 64, NULL),
(65, 'Awakening', 'avr.-18', 'Autoproduction', '', NULL, 48, 65, NULL),
(66, 'Album', 'mars-18', 'Independant', 'https://open.spotify.com/album/66FhdWTDxVzOPuUEXtY7Xe', NULL, 49, 66, NULL),
(67, 'Aion', 'mars-18', '', 'https://open.spotify.com/artist/4LMOrQtDq76ar9W4d2FsRk', NULL, 50, 67, NULL),
(68, 'Martyr', 'mars-18', '', 'http://darkcorpus.free.fr', NULL, 115, 68, NULL),
(69, 'Origin', 'mai-18', 'Overpowered Records', 'https://overcharger.bandcamp.com/releases', NULL, 51, 69, NULL),
(71, 'Sapere Aude', 'mars-18', 'Red Light Records', 'http://twitter.com/tarldtheband', NULL, 52, 71, NULL),
(72, 'A Wake Up Nightmare', 'janv.-18', '', 'https://recedantsomnia.bandcamp.com/album/a-waked-up-nightmare', NULL, 53, 72, NULL),
(73, 'STIIGMA', 'févr.-18', 'Klonosphere / Diorama Records', 'https://beyondthestyx.bandcamp.com/', NULL, 54, 99, NULL),
(74, 'Omen Of The Banshee', 'janv.-18', '', 'https://twitter.com/wrcollapse', NULL, 55, 74, NULL),
(75, 'Lions', 'févr.-18', '', 'http://www.twitter.com/InArkadiaTweets Catégorie', NULL, 56, 75, NULL),
(76, 'Concept', 'janv.-18', 'Imminence Records', 'https://twitter.com/oomesquad/', NULL, 57, 76, NULL),
(77, 'Porn generation', 'sept.-18', '', 'https://irya.bandcamp.com/releases', NULL, 58, 77, NULL),
(78, 'A STORY OF A FALLEN YOUTH', 'avr.-18', 'DIY', 'http://www.deezer.com/album/60171402', NULL, 54, 78, NULL),
(79, 'Linger Over, Linger On', 'mars-18', 'Useless Pride Records', 'https://thegreatdivide.bandcamp.com/album/linger-over-linger-on', NULL, 59, 79, NULL),
(80, 'Agony', 'avr.-18', 'DON’T TRUST THE HYPE', 'https://killforpeace.bandcamp.com/', NULL, 54, 80, NULL),
(81, 'Antagonism of the Soul', 'janv.-18', '', 'https://twitter.com/InsolvencyBand', NULL, 57, 81, NULL),
(82, 'In Sheep\'s Clothing', 'sept.-18', '', 'https://open.spotify.com/artist/4qqEz', NULL, 60, 82, NULL),
(83, 'Absence et First Breath', 'janv.-18', '', '', NULL, 61, 83, NULL),
(84, 'Since She left and stole my pride', 'nov.-18', 'Autoproduction', '', NULL, 62, 84, NULL),
(85, 'Stuck', 'déc.-18', '', '', NULL, NULL, 85, NULL),
(86, 'The Rosary', 'nov.-18', '13 Guillotines Records.', '', NULL, 54, 86, NULL),
(87, 'PERSONAL WAR', 'oct.-18', '', 'https://piedbouche.bandcamp.com', NULL, 54, 87, NULL),
(88, 'La grande Terreur', 'nov.-18', 'Terrain Vague', 'http://pilori.bandcamp.com', NULL, 64, 88, NULL),
(89, 'Sanctuary', 'nov.-18', 'M&0 Music', 'https://open.spotify.com/album/3fE4ae6i4AQj4LnNUXRpx2', NULL, 65, 89, NULL),
(90, 'A DAME TO KILL FOR', 'oct.-18', 'Uproar for Veneration records', '', NULL, NULL, 90, NULL),
(91, 'Tyrant', 'oct.-18', 'The Orchard Music (au nom de We Are Triumphant Records)', 'http://www.wearetriumphant.com', NULL, NULL, 91, NULL),
(92, 'Prungk est désormais sur You Tube en nov 2018', 'nov.-18', '', 'http://prungk.bandcamp.com', NULL, 67, 92, NULL),
(93, 'Wasteland', 'oct.-18', '', 'http://bit.ly/2wbcTML', NULL, 68, 93, NULL),
(94, 'CLAIR OBSCUR', 'sept.-18', 'Send The Wood Music', 'https://open.spotify.com/album/58H89wybUCFnSjkjYQcJda', NULL, NULL, 94, NULL),
(95, 'We Are', 'oct.-18', '', '', NULL, NULL, 95, NULL),
(96, 'Winchester', 'oct.-18', '', 'http://thorninfleshband.bandcamp.com', NULL, NULL, 96, NULL),
(97, 'Hocus Pocus', 'oct.-18', 'Unsigned', 'https://open.spotify.com/album/09Td81', NULL, NULL, 97, NULL),
(98, 'Fight Back', 'oct.-18', '', 'https://syndrom.bandcamp.com/releases', NULL, 69, 98, NULL),
(99, 'Neoblivion', 'juil.-18', 'Klonosphere / Diorama Records', 'https://beyondthestyx.bandcamp.com', NULL, 70, 99, NULL),
(100, 'No Landmark In The Void', 'janv.-18', 'Seven Years A Weak Records', '', NULL, 71, 100, NULL),
(102, 'De sueur et de rage', 'janv.-18', '', '', NULL, NULL, 102, NULL),
(103, 'Telostigma', 'janv.-18', '', 'http://spellbinding.bandcamp.com', NULL, 98, 103, NULL),
(104, 'Les dés sont jetés', 'janv.-18', 'unsigned', 'http://digitalnova.bandcamp.com/', NULL, NULL, 104, NULL),
(105, 'Fallen', 'nov.-18', 'D.I.Y', 'http://www.instagram.com/exceptone_of', NULL, 98, 105, NULL),
(106, 'Whisky Love', 'févr.-18', '', '', NULL, 75, 106, NULL),
(107, 'Sonic Bloom', 'févr.-18', 'Send The Wood Music', 'https://www.indiemusic.fr/holispark-sonic-bloom/', NULL, 76, 107, NULL),
(108, 'A Tough Road For The Heart', 'févr.-18', 'Season of Mist', '', NULL, 77, 108, NULL),
(109, 'Echoes of Asymmetry', 'nov.-18', '', 'https://moonshineoversight.bandcamp.com/releases', NULL, 101, 109, NULL),
(110, ' Fist Leaf', 'mai-18', 'DBD Studio', '', NULL, 79, 110, NULL),
(111, 'Circles Of Pain', 'nov.-18', 'Autoproduction', 'https://davidslame1.bandcamp.com/', NULL, 80, 111, NULL),
(112, 'Uyuni\'s Lullaby', 'nov.-18', 'Independent band.', '', NULL, 119, 112, NULL),
(113, 'Planet Cyclone', 'janv.-18', 'Andy Cyclone', '', NULL, 82, 113, NULL),
(114, 'Slave To Rock\'Roll', 'nov.-18', 'Franck Carducci', 'http://www.franckcarducci.com', NULL, 83, 114, NULL),
(115, 'Back to Principia', 'déc.-18', 'Mii Recording Studio', 'https://open.spotify.com/artist/1eCq5', NULL, 101, 115, NULL),
(116, 'What\'s up Rock', 'janv.-18', '', '', NULL, 84, 116, NULL),
(117, 'Album\' 17', 'nov.-18', 'Xplose Music Prod', 'https://www.xplosemusic.com/album-detail/5bf717aab582e12dc1e03942', NULL, 75, 117, NULL),
(118, 'Act 1: Desires', 'nov.-18', '', 'http://m.oi.e-design.studio/', NULL, 85, 118, NULL),
(119, '(The Wreck Age II\" (Insanity)', 'nov.-18', 'imusician_digital (au nom de MindProduction)', 'https://open.spotify.com/artist/4a0gdBWmhq0srNiMJ0Mk9t', NULL, 86, 119, NULL),
(120, 'Quoi Après', 'août-18', '', '', NULL, NULL, 120, NULL),
(121, 'TOKKOTAI - SIN CARA', 'sept.-18', 'Record Union', 'https://revolveglasgow.bandcamp.com/', NULL, NULL, 121, NULL),
(122, 'Gimme someone to hate', 'févr.-18', 'Autoproduction', '', NULL, 89, 122, NULL),
(123, 'On The Other Side', 'sept.-18', '2018 GARDEN PRODUCTION', 'https://sidhofficial.bandcamp.com/', NULL, 98, 123, NULL),
(124, 'Deus Ex Machina', 'sept.-18', '', 'https://www.deezer.com/fr/album/44559341', NULL, 90, 124, NULL),
(125, 'Duality', 'janv.-18', 'M & O Music (Label)', '', NULL, NULL, 125, NULL),
(126, 'Skah’s limbo', 'sept.-18', 'M & O Music (Label)', 'https://skahinall.bandcamp.com/releases', NULL, 91, 126, NULL),
(127, 'Bad Ghost', 'sept.-18', '', '', NULL, NULL, 127, NULL),
(128, 'LAZARE', 'sept.-18', '', 'https://www.wolvemusic.bandcamp.com', NULL, 93, 128, NULL),
(129, 'Imperium delecta', 'sept.-18', 'Khaos Division Prod', 'https://wergeld.bandcamp.com/releases', NULL, NULL, 129, NULL),
(131, 'The Thousand Faces Of Lies', 'oct.-18', 'M & O Music (Label)', 'http://deathdecline.bandcamp.com', NULL, 94, 131, NULL),
(132, 'Carmela', 'nov.-18', '', '', NULL, 95, 132, NULL),
(133, 'Liquidators', 'févr.-18', 'music-records.fr', 'https://lebowskii.bandcamp.com/album/liquidators', NULL, 96, 133, NULL),
(134, 'Resilience', 'févr.-18', 'Rock Of Angels Records', '', NULL, 104, 134, NULL),
(135, 'Deadland', 'janv.-18', '', 'https://arteryfrance.bandcamp.com/album/deadland', NULL, 96, 157, NULL),
(136, 'Abandon Of The Self', 'mars-18', 'Debemur Morti Productions', '', NULL, 98, 136, NULL),
(137, 'Ophelian Fields', 'févr.-18', 'Lion Music Records Label', '', NULL, 99, 137, NULL),
(138, 'Ignoramus', 'févr.-18', '', 'https://krodha.bandcamp.com', NULL, 100, 138, NULL),
(139, 'Standing Waves', 'févr.-18', '', 'https://blackneondistrict.bandcamp.com/releases', NULL, 101, 139, NULL),
(140, 'White Colossus', 'mars-18', 'Apathia Records', 'https://disconnectedmetal.bandcamp.com', NULL, 101, 140, NULL),
(141, 'Vulnerant Omnes Ultima Necat', 'mars-18', '', '', NULL, 96, 141, NULL),
(142, 'AMZERA', 'déc.-18', 'Autoprod', 'https://amzera.bandcamp.com', NULL, 102, 142, NULL),
(143, 'II- Memories', 'janv.-18', 'Send The Woohd Music et Season of Mist', '', NULL, 103, 143, NULL),
(144, 'Machine Nation', 'févr.-18', 'VERYCORDS / MIGHTY MUSIC / SPIRITUAL BEAST', '', NULL, 104, 144, NULL),
(145, 'Blood Eagle', 'oct.-18', '', 'https://bellator.bandcamp.co', NULL, NULL, 145, NULL),
(146, 'Overcome', 'févr.-18', 'WARMAUDIO DECINES', 'https://strivers.bandcamp.com/releases', NULL, 98, 146, NULL),
(147, 'Blank', 'oct.-18', 'MAJOR ARCANA RECORDS', 'https://sonicwinter.bandcamp.com', NULL, 106, 147, NULL),
(148, 'Substance Rêve', 'avr.-18', 'Sliptrick Records', 'https://voightkampff.bandcamp.com/album/more-human-than-huma', NULL, NULL, 148, NULL),
(149, 'Old-school thrash metal', 'oct.-18', 'Great Dane Records', 'https://www.spirit-of-metal.com/fr/band/Scrotum_(FRA)', NULL, NULL, 149, NULL),
(150, 'Darkening Light', 'févr.-18', '', '', NULL, 107, 150, NULL),
(151, 'Ghost Rider', 'oct.-18', '', 'http://www.bornagainmetalband.co', NULL, 108, 151, NULL),
(152, 'Above the Stars', 'févr.-18', '', '', NULL, 109, 152, NULL),
(153, 'Asphyxia', 'oct.-18', '', '', NULL, 110, 153, NULL),
(154, 'World On Fire', 'sept.-18', '', '', NULL, 111, 154, NULL),
(155, 'WE KICK YOUR ASS', 'sept.-18', 'MUSIC VALENTIN', '', NULL, 96, 155, NULL),
(156, 'Freaktion', 'sept.-18', '', '', NULL, 112, 156, NULL),
(157, 'Deep Nature', 'oct.-18', '', 'https://twitter.com/arteryfrance', NULL, NULL, 157, NULL),
(158, 'UNIVERS SALE', 'oct.-18', '', '', NULL, NULL, 158, NULL),
(160, 'An Zero (Février 2018)', 'févr.-18', '', 'https://oestre.bandcamp.com/', NULL, 114, 160, NULL),
(161, '(F)unfair (Mars 2018)', 'mars-18', 'Fantaizic', 'https://duskofdelusion.bandcamp.com/releases', NULL, 115, 161, NULL),
(162, 'Love ★ Hate', 'janv.-18', '', 'https://moonprototype.bandcamp.com', NULL, 116, 162, NULL),
(163, 'Simple Appareil (Avril 2018)', 'avr.-18', 'At(h)ome', 'http://www.lofofora.com', NULL, 117, 163, NULL),
(164, ' [Lanscape] (Avril 2018)', 'avr.-18', 'Dooweet et Season Of Mist', 'https://radiumvalley.bandcamp.com/album/mutagenesis-01', NULL, 118, 164, NULL),
(165, 'Aftermath (Mars 2018)', 'mars-18', '', 'https://waysofficiel.bandcamp.com/releases', NULL, 119, 165, NULL),
(166, '‘The Final Cut’ (janvier 2018)', 'janv.-18', '', '', NULL, 120, 166, NULL),
(167, 'Mars 2018 EP \" Break Your Body \"', 'mars-18', '', 'http://shaarghot.bigcartel.com', NULL, 120, 167, NULL),
(168, 'Projet de clip avec don Nov 2018 \"Superhero\"', 'nov.-18', '', 'https://www.initialdatamusic.com', NULL, 121, 168, NULL),
(169, 'Clip \" Okay (The Blue Freestyle)\" Juin 2018', 'juin-18', 'Indépendant', 'http://instagram.com/wildmightyfreaks', NULL, 122, 169, NULL),
(170, 'Dernier clip Sept 2018 -THE LEGEND OF ZELDA', 'sept.-18', 'darkTunes Music Group (world wide)', 'http://smarturl.it/SHCplanB', NULL, NULL, 170, NULL),
(171, 'Nouveau Clip Oct 2018 \"Sad Habits\"', 'oct.-18', '', 'https://soundcloud.com/monsutaband', NULL, 124, 171, NULL),
(172, 'Nouvel Album \"Maniac\" 26 Oct 2018', 'oct.-18', 'VERYCORDS', 'https://open.spotify.com/album/0UHnWtRu6EFUUm31UjCaLk', NULL, 125, 172, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `a_voté_pour`
--

CREATE TABLE `a_voté_pour` (
  `idAlbum_Album` int(9) NOT NULL,
  `idMembre_membre` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `idDepartement_Departement` int(9) NOT NULL,
  `nomDepartement_Departement` varchar(250) DEFAULT NULL,
  `idRegion_Region` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `idGroupe_Groupe` int(9) NOT NULL,
  `nomGroupe_Groupe` varchar(250) DEFAULT NULL,
  `lien_Groupe` varchar(250) DEFAULT NULL,
  `mail_Groupe` varchar(250) DEFAULT NULL,
  `telephone_Groupe` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`idGroupe_Groupe`, `nomGroupe_Groupe`, `lien_Groupe`, `mail_Groupe`, `telephone_Groupe`) VALUES
(1, 'DYSMORPHIC', 'https://www.facebook.com/dysmorphicband', 'dysmorphic@hotmail.fr', ''),
(2, 'Benighted', 'https://www.facebook.com/brutalbenighted', 'ronny@redback-promotion.com\n', ''),
(3, 'Defenestration', 'https://www.facebook.com/pg/Defenestration44', '', ''),
(4, 'Iron Flesh', 'https://www.facebook.com/pg/IronFlesh', 'diskarial@msn.com', ''),
(5, 'Abyssal Vacuum', 'https://www.facebook.com/pg/AbyssalVacuum', '', ''),
(6, 'Aorlhac', 'https://www.facebook.com/Aorlhac', 'aorlhac@hotmail.fr', ''),
(7, 'Mortis Mutilati', 'https://www.facebook.com/Mortis.Mutilati.Official', 'contact.mortismutilati@gmail.com', ''),
(8, 'BTK (Bind Torture Kill)', 'https://www.facebook.com/pg/BTK.bind.torture.kill.metal', 'btk.bindtorturekill@hotmail.fr', ''),
(9, 'Swarmageddon', 'https://www.facebook.com/SWRMGDDN', 'swarmageddon.band@gmail.com', ''),
(10, 'Aeon Patronist', 'https://www.facebook.com/AeonPatronist', 'aeonpatronist@gmail.com', ''),
(11, 'God against humanity', 'https://www.facebook.com/God-against-humanity-542042019573344', '', ''),
(12, 'Warkunt', 'https://www.facebook.com/warkunt/', 'warkunt.official@gmail.com', '06 30 08 54 69'),
(13, 'Malepeste et Dysylumn', 'https://www.facebook.com/propheticscourge/', '', ''),
(14, 'Finis Omnivm', 'https://www.facebook.com/finisomnivm/', 'finisomnium.band@gmail.com', ''),
(15, 'Voraphilya', 'https://www.facebook.com/VoraphilyaMetalBand/', 'voraphilyaofficial@gmail.com', ''),
(16, 'Karne', 'https://www.facebook.com/karnebm/', 'karne@outlook.fr', ''),
(17, 'ACOD', 'https://www.facebook.com/acodband/', 'acod@hotmail.fr', ''),
(18, 'Dysylumn', 'https://www.facebook.com/Dysylumn/', '', ''),
(19, 'Tempt Fate', 'https://www.facebook.com/temptfate31/', 'contact.temptfate@gmail.com', ''),
(20, 'Solar Eruption', 'https://www.facebook.com/solareruptionofficial/', 'contact@solareruptionofficial.com', ''),
(21, 'Fractal Universe', 'https://www.facebook.com/fractaluniverseband/', 'fractaluniverseband@gmail.com', ''),
(22, 'Prophetic Scourge', 'https://www.facebook.com/propheticscourge/', 'propheticscourge@gmail.com', ''),
(23, 'Mind Imperium', 'https://www.facebook.com/MindImperiumMetal/', 'contact@mindimperium.com', '06 64 45 05 10'),
(24, 'CHABTAN', 'https://www.facebook.com/officialchabtan/', 'chabtan@hotmail.fr', ''),
(25, 'Sadraen', 'https://www.facebook.com/sadraenofficial/', 'contact@sadraen.com', '07 50 49 16 16'),
(26, 'Freitot', 'https://www.facebook.com/freitot/', '', ''),
(27, 'Utopian Despair', 'https://www.facebook.com/utopiandespair/', 'aleph@hotmail.fr', ''),
(29, 'Monolithe', 'https://www.facebook.com/pg/monolithedoom', 'Blandine / LADLO : blandine@lesacteursdelombre.com / Prescillia / MONOLITHE : prescillia.bourguignon@gmail.com', ''),
(30, 'Mourning Dawn', 'https://www.facebook.com/pg/MourningDawn', 'pokemonslaughter@hotmail.com', ''),
(31, 'Red Mourning', 'https://www.facebook.com/pg/RedMourning', 'rpmprod@gmail.com', ''),
(32, 'Walnut Grove Dc', 'https://www.facebook.com/pg/walnutgrovedc', 'walnutgrovedc@gmail.com', ''),
(33, 'Left To Wither', 'https://www.facebook.com/pg/lefttowither', 'leftowither@gmail.com', ''),
(34, 'Mudweiser', 'https://www.facebook.com/pg/Mudweiser-160736803969841', '', ''),
(35, 'Dogfries', 'https://www.facebook.com/dogfriesband', 'dogfries.music@gmail.com', ''),
(36, 'Epitaphe', 'https://www.facebook.com/epitaphemetal', '', ''),
(37, 'Black box warning', 'https://www.facebook.com/blackboxwarningmusic', '', ''),
(38, 'Baculum', 'https://www.facebook.com/baculumdoom', '', ''),
(39, 'MELT', 'https://www.facebook.com/wearemelt', 'melt.prog@gmail.com', ''),
(40, 'Wreck Plus', 'https://www.facebook.com/wreckplus', 'band@wreckplus.com', ''),
(41, 'Veil of Mist', 'https://www.facebook.com/veilofmist', 'veilofmist.contact@gmail.com', ''),
(42, 'One With Me', 'https://www.facebook.com/onewithme', '', ''),
(43, 'Theraphosa', 'https://www.facebook.com/theraphosamusic', 'contact@theraphosa.fr', ''),
(44, 'A Place To Die', 'https://www.facebook.com/APlaceToDi', '', ''),
(45, 'Scarlean', 'https://www.facebook.com/Scarlean/', 'scarleanband@yahoo.fr', ''),
(46, 'Rust Theory', 'https://www.facebook.K48com/rusttheor', 'contact@rusttheory.com', ''),
(47, 'Obszön Geschöpf', 'https://www.facebook.com/ObszonGeschopfOfficial/', 'obszon.geschopf@yahoo.fr', ''),
(48, 'Season Of Tears', 'https://www.facebook.com/SeasonOfTears/', 'seasonoftearsband@gmail.com', ''),
(49, 'Rosenkreuz', 'https://www.facebook.com/officialrosenkreuz/', 'rosenkreuz@outlook.com', ''),
(50, 'SLAVEYES', 'https://www.facebook.com/slaveyes1/', 'slaveyes49@gmail.com', ''),
(51, 'WHYZDOM', 'https://www.facebook.com/WHYZDOMproject/', '', ''),
(52, 'NOTHING BUT ECHOES', 'https://www.facebook.com/WEareNOTHINGBUTECHOES/', 'contact@wearenothingbutechoes.com', ''),
(53, 'Voice Of Winter', 'https://www.facebook.com/vow.page/', '666vow@gmail.com', '01 75 18 46 44'),
(54, 'LECKS Inc.', 'https://www.facebook.com/LECKSInc/', 'lecks@hotmail.fr', '06 63 37 84 49'),
(55, 'Elyx', 'https://www.facebook.com/elyxproject/', 'elyx_project@outlook.com', '06 95 01 03 79'),
(56, 'Black Juju Inc.', 'https://www.facebook.com/elyxproject/', '', '01 77 03 13 65'),
(57, 'Nuisible', 'https://www.facebook.com/nuisiblehxc/', 'nuisiblehxc@hotmail.com', ''),
(58, 'Monsters', 'https://www.facebook.com/Monsterslament/', 'monsterz@orange.fr', ''),
(59, 'FIT of RAGE', 'https://www.facebook.com/fitofrage/', 'fitofrage2010@gmail.com', '09 83 22 35 46'),
(60, 'Pavillon Rouge', 'https://www.facebook.com/LuxDiscipline/', 'sarah@dooweet.org', ''),
(61, 'MOON PROTOTYPE', '', '', ''),
(62, 'Negative Ritual', 'https://www.facebook.com/negativeritual/', 'drumagressor@gmail.com', ''),
(63, 'Black box warning', 'https://www.facebook.com/blackboxwarningmusic/', 'lananiklas@gmail.com', ''),
(64, 'EZOX', 'https://www.facebook.com/EZOX-427112267431140/', 'ezoxofficiel@gmail.com', ''),
(65, 'The Fractal Illusion', 'https://www.facebook.com/TheFractalIllusion/', '', ''),
(66, 'Twisted Oaks', 'https://www.facebook.com/twistedoaksband/', 'twistedoakscontact@gmail.com', ''),
(67, 'Penumbra', 'https://www.facebook.com/penumbra.band.official/', 'penumbra.fr@gmail.com', ''),
(68, 'Dark Corpus', '', 'darkcorpus@free.fr', ''),
(69, 'Overcharger', 'https://www.facebook.com/Overcharger-114318028659511/', 'Kriss@maximumtourmusic.com', ''),
(71, 'The Amsterdam Red-Light District', 'https://www.facebook.com/pg/tarldtheband', 'tarldtheband@gmail.com', ''),
(72, 'Recedant Somnia', 'https://www.facebook.com/pg/recedantsomniaband', 'recedantsomnia.band@gmail.com', ''),
(73, 'beyond the Styx', 'https://www.facebook.com/pg/BTSTYX', 'beyondthestyx@hotmail.fr', ''),
(74, 'When Reasons Collapse', 'https://www.facebook.com/pg/WhenReasonsCollapse', 'wrcollapse@gmail.com', ''),
(75, 'In Arkadia', 'https://www.facebook.com/pg/InArkadiaOfficial', 'inarkadiaofficial@gmail.com', ''),
(76, 'Out Of My Eyes', 'https://www.facebook.com/pg/oomesquad', 'outofmyeyes@outlook.fr', ''),
(77, 'Irya', 'https://www.facebook.com/iryamusic/', 'iryametal@gmail.com', ''),
(78, 'Eighters', 'https://www.facebook.com/eightersHxC/', 'eightersbooking@gmail.com', ''),
(79, 'The Great Divide', 'https://www.facebook.com/pg/thegreatdivide', '', ''),
(80, 'Kill For Peace', 'https://www.facebook.com/pg/KILLFORPEACE', '', ''),
(81, 'NSOLVENCY', 'https://www.facebook.com/InsolvencyBand/', 'insolvency@hotmail.fr', ''),
(82, 'Midnight Blackout', '', 'midnightblackoutband@gmail.com', ''),
(83, 'Behind The Woods', 'https://www.facebook.com/Behind-The-Woods-1414430945529031/', '', ''),
(84, 'old', 'https://www.facebook.com/YoldRockBand/', '', ''),
(85, 'Desperhate', 'https://www.facebook.com/Desperhate/', 'organdescent@gmail.com', '06 95 70 18 77'),
(86, 'WALK AWAY', 'https://www.facebook.com/walkawaycult/', 'walkawaycult13@gmail.com', ''),
(87, 'PIEDBOUCHE -', 'https://www.facebook.com/piedbouche.hxc/', 'piedbouche.hxc@gmail.com', ''),
(88, 'Pilori', 'https://www.facebook.com/pilori.band/', 'pilori.contact@gmail.com', ''),
(89, 'Virgil', 'https://www.facebook.com/virgil.metal/', '', ''),
(90, 'AVA WOLFE', 'https://www.facebook.com/AVAWOLFEBAND/', 'management@avawolfeband.com', '06 42 92 80 63'),
(91, 'FRCTRD', 'https://www.facebook.com/wearefrctrd/', 'frctrdband@gmail.com', ''),
(92, 'Prungk', 'https://www.facebook.com/Prungk/', '', ''),
(93, 'JOKVS', 'https://www.facebook.com/JOKVSBAND/', 'www.jokvsband@gmail.com', ''),
(94, 'It Came From Beneath', 'https://www.facebook.com/icfbtheband/', 'icfbtheband@gmail.com', '06 86 16 19 63'),
(95, 'Purge Of Sanity', 'https://www.facebook.com/POSofficialBand/', 'purgeofsanityofficial@gmail.com', ''),
(96, 'THORN IN FLESH', 'https://www.facebook.com/THORN-IN-FLESH-629390827197881/', 'thorninfleshmusic@gmail.com', ''),
(97, 'Solar Eruption', 'https://www.facebook.com/solareruptionofficial/', 'contact@solareruptionofficial.com', ''),
(98, 'Syndrom', 'https://www.facebook.com/BandSyndrom/', 'syndrombandfr@gmail.com', '06 77 82 44 27'),
(99, 'beyond the Styx', 'https://www.facebook.com/BTSTYX/', 'beyondthestyx@hotmail.fr', ''),
(100, 'AFAR', 'https://www.facebook.com/weareAFAR/', 'weareafar@gmail.com', ''),
(102, 'Barrakuda', 'https://www.barrakuda.fr/', 'barrakudabox@gmail.com', '06 28 25 95 62'),
(103, 'Spellbinding', 'https://www.facebook.com/spellbinding02/', '', ''),
(104, 'Digital nova', 'https://www.facebook.com/digitalnovarock/', '', ''),
(105, 'Except One', 'https://www.facebook.com/ExceptOneOfficial/', 'exceptoneofficial@gmail.com', ''),
(106, 'Katraz', 'https://www.facebook.com/Katraz-1742835485932380/', 's.manguine@gmail.com', ''),
(107, 'Holispark', 'https://www.facebook.com/pg/holisparkband', 'holisparkband@gmail.com', ''),
(108, 'Blinding Sparks', 'https://www.facebook.com/blindingsparks/', 'contact@blindingsparks.com', ''),
(109, 'Moonshine Oversight', 'https://www.facebook.com/MoonshineOversight/', 'moonshineoversight@gmail.com', ''),
(110, 'Sendwood', 'https://www.facebook.com/sendwoodwtf/', '', ''),
(111, 'David SLAME Project', 'https://www.facebook.com/davidslame13/', 'dslame@gmail.com', '06 67 88 66 07'),
(112, 'Far Away', 'https://www.facebook.com/FAwayBand', 'farawaybooking@gmail.com', '06 16 85 08 48'),
(113, 'Andy Cyclone', 'https://www.facebook.com/andycycloneshred/', '', ''),
(114, 'Franck Carducci', 'https://www.facebook.com/franckcarducci/', 'prod@franckcarducci.com', ''),
(115, 'Attraction Theory', 'https://www.facebook.com/AttractionTheory/', 'attractiontheory.official@gmail.com', '06 22 56 75 99'),
(116, 'Dead Bones Bunny', 'https://www.facebook.com/deadbonesbunny/', 'deadbonesbunny@gmail.com', '06 51 37 77 48'),
(117, 'Yann Armellino & El Butcho', 'https://www.facebook.com/Yann-Armellino-El-Butcho-165360693890783/', 'sylvie.merchncom@outlook.fr', ''),
(118, 'M\'oÏ', 'https://www.facebook.com/MoiiGlamRockGrunge/', 'm.oii@yahoo.com', ''),
(119, 'Crackmind', 'https://www.facebook.com/crackmind/', 'crackmind@crackmind.com', ''),
(120, 'Gunless', 'https://www.facebook.com/gunlessgroupe/', 'gunless.contact@gmail.com', '06 34 11 87 26'),
(121, 'REVOLVE', 'https://www.facebook.com/REVOLVEmetal/', 'revolveflpp@gmail.com', ''),
(122, 'WDPofficiel', 'https://www.facebook.com/WDPofficiel/', 'wdpofficiel@gmail.com', ''),
(123, 'Sidh', 'https://www.facebook.com/sidhbandpage/', '', ''),
(124, 'Cæsium', 'https://www.facebook.com/caesium55/', 'caesium@live.fr', '06 78 34 37 74'),
(125, 'Redshift', 'https://www.facebook.com/redshiftmusicband/', 'contact@redshift-band.com', ''),
(126, 'Skahinall', 'https://www.facebook.com/skahinall/', 'skahinallband@gmail.com', '06 89 81 54 66'),
(127, 'Ghost Opera', 'https://www.facebook.com/Ghost.Opera.Rockband/', 'ghostopera@live.fr', ''),
(128, 'WOLVE', 'https://www.facebook.com/wolveofficial/', 'wolveband@gmail.com', ''),
(129, 'Wergled', 'https://www.facebook.com/Wergeldlied/', '', ''),
(131, 'Death Decline', 'https://www.facebook.com/deathdecline/', 'deathdecline@hotmail.com', '(0)663378449'),
(132, 'Resolve', 'https://www.facebook.com/resolveofficial/', 'resolveofficial@gmail.com', ''),
(133, 'Lebowskii', 'https://www.facebook.com/Lebowskiiband', '', ''),
(134, 'öblivïon', 'https://www.facebook.com/Oblivionband', 'rockcityba@gmail.com', ''),
(135, 'Artery', 'https://www.facebook.com/pg/arteryfrance', 'thierry.desvars1@gmail.com', ''),
(136, 'Eryn Non Dae', 'https://www.facebook.com/pg/ERYNNONDAEofficial', 'Franck : end.theband@gmail.com', ''),
(137, 'Seyminhol', 'https://www.facebook.com/pg/Seyminhol', 'seyminhol@hotmail.com', ''),
(138, 'Krõdha', 'https://www.facebook.com/pg/KrodhaMusic', 'contact.krodha@gmail.com', ''),
(139, 'Black Neon District', 'https://www.facebook.com/pg/BlackNeonDistrict', 'blackneondistrict@gmail.com', ''),
(140, 'Disconnected', 'https://www.facebook.com/DisconnectedMetal', 'disconnected_music@yahoo.fr', ''),
(141, 'The Cleaner', 'https://www.facebook.com/pg/thecleaner.band', 'management.thecleaner@gmail.com', '06-47-14-19-45'),
(142, 'Amzera', 'https://www.facebook.com/pg/AmzeraBand', 'amzera@orange.fr', ''),
(143, 'Kozh Dall Division', 'https://www.facebook.com/Kozh-Dall-Division-1737466603166170', ' ', ''),
(144, 'Manigance', 'https://www.facebook.com/pg/Manigance-366384643187', 'manigancemanagement@gmail.com', ''),
(145, 'Bellator', '', 'bellator.contactfr@gmail.com', ''),
(146, 'Strivers', 'https://www.facebook.com/pg/STRIVERSBAND', '', ''),
(147, 'Sonic Winter', 'https://www.facebook.com/SonicWinter', 'sonicwinter.musicband@gmail.com', ''),
(148, 'Voight Kampff', 'https://www.facebook.com/robotbleugroupe', 'voightkband@gmail.com', ''),
(149, 'Scrotum', 'https://www.facebook.com/pg/Scrotum-540757425951065', '', ''),
(150, 'Melted Space', 'https://www.facebook.com/meltedspace', 'melted-space@live.fr', ''),
(151, 'BORN AGAIN', 'https://www.facebook.com/bornagainheavy/', '', ''),
(152, 'Walpurgis', 'https://www.facebook.com/walpurgisofficial/', 'walpurgis3004@gmail.com', ''),
(153, 'Kheos', 'https://www.facebook.com/KheosBandOfficial/', 'kheos59@gmail.com', ''),
(154, 'RIFF', 'https://www.facebook.com/riff83/', 'celian19@orange.fr', ''),
(155, 'Psychoïd', 'Psychoïd Thrash metal', 'psychoidband@psychoid.fr', '01 75 18 46 44'),
(156, 'Sphæra', 'https://www.facebook.com/SphaeraBand/', 'sphaera.contact@gmail.com', ''),
(157, 'Artery', 'https://www.facebook.com/arteryfrance/', 'arteryfrancecontact@gmail.com', ''),
(158, 'GRAZED', 'https://www.facebook.com/GRAZEDofficial/', 'grazed@hotmail.fr', ''),
(160, 'Oestre', 'https://www.facebook.com/Oestrefr', '', ''),
(161, 'Dusk Of Delusion', 'https://www.facebook.com/Duskofdelusion', 'booking@fantaizic.fr', ''),
(162, 'Moon Prototype', 'https://www.facebook.com/pg/the.moon.prototype/about/?ref=page_internal', 'moonprototype@gmail.com', ''),
(163, 'Lofofora', 'https://www.facebook.com/pg/Lofofora/about/?ref=page_internal', 'manager: phil.baseprod@wanadoo.fr', ''),
(164, 'Radium Valley', 'https://www.facebook.com/pg/radiumvalleyofficial/about/?ref=page_internal', 'radiumvalley@gmail.com', ''),
(165, 'Ways.', 'https://www.facebook.com/pg/thisisways/about/?ref=page_internal', 'waysofficiel@gmail.com', ''),
(166, 'Kamera Obscura', 'http://kameraobscura.info', 'contact.kameraobscura@gmail.com', ''),
(167, 'Shaârghot', 'https://www.facebook.com/shaarghot/', '', ''),
(168, 'Initial Data', '', 'initialdataofficiel@gmail.com', ''),
(169, 'Wild Mighty Freaks', 'https://www.facebook.com/wildmightyfreaksofficial/', 'ayite@bemavocorp.com', '06 78 26 12 04'),
(170, 'Smash Hit Combo', '', 'smashhitcombo@gmail.com', ''),
(171, 'MONSUTĀ', '', 'contact@monsuta.fr', ''),
(172, 'Mass Hysteria', '', 'sabrina.cohenaiello@verycords.fr', '');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `idMembre_membre` int(9) NOT NULL,
  `Pseudo_membre` varchar(250) DEFAULT NULL,
  `email_membre` varchar(250) DEFAULT NULL,
  `motDePasse_membre` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `idRegion_Region` int(9) NOT NULL,
  `nomRegion_Region` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `styleprincipal`
--

CREATE TABLE `styleprincipal` (
  `idStylePrincipal_StylePrincipal` int(9) NOT NULL,
  `nomStylePrincipal_StylePrincipal` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `styleprincipal`
--

INSERT INTO `styleprincipal` (`idStylePrincipal_StylePrincipal`, `nomStylePrincipal_StylePrincipal`) VALUES
(1, 'STYLE METAL EXTREME'),
(2, 'STYLE METAL DARK AMBIENT ATMO'),
(3, 'STYLE HARDCORE PUNK'),
(4, 'STYLE METAL HARD ROCK'),
(5, 'STYLE METAL HEAVY TRASH'),
(6, 'STYLE METAL FUSION');

-- --------------------------------------------------------

--
-- Structure de la table `stylesecondaire`
--

CREATE TABLE `stylesecondaire` (
  `idStyleSecondaire_StyleSecondaire` int(9) NOT NULL,
  `nomStyleSecondaire_StyleSecondaire` varchar(250) DEFAULT NULL,
  `idStylePrincipal_StylePrincipal` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `stylesecondaire`
--

INSERT INTO `stylesecondaire` (`idStyleSecondaire_StyleSecondaire`, `nomStyleSecondaire_StyleSecondaire`, `idStylePrincipal_StylePrincipal`) VALUES
(1, 'Technical Death Metal', 1),
(2, 'Brutal Death / Grind', 1),
(3, 'Death', 1),
(4, 'Cavernous and Deep Black Metal', 1),
(5, 'Black Metal', 1),
(6, 'Death / Hardcore', 1),
(7, 'Modern melodic death metal', 1),
(8, 'Black/Death/Oriental/Progressif', 1),
(9, 'Melodic Death Metal', 1),
(10, 'Death Metal', 1),
(11, 'Progressive Black / Death Metal', 1),
(12, 'Brutal Death', 1),
(13, 'Progressive Death Metal', 1),
(14, 'Melodic Groove Metal, Death Metal', 1),
(15, 'Modern Death Metal', 1),
(17, 'death metal old school', 1),
(18, 'Doom / Death / Black Metal', 1),
(19, 'Doom', 2),
(20, 'Southern Metal', 2),
(21, 'Stoner', 2),
(22, 'Post / Screamo / Sludge', 2),
(23, 'Metal psychedelique', 2),
(24, 'Death / Doom', 2),
(25, 'Sludge', 2),
(26, 'Progressive Death Metal', 2),
(27, 'Dark Rock', 2),
(28, 'Retro-Futuristic Metal', 2),
(29, 'Dark Progressive Metal', 2),
(30, 'Ambient Doom', 2),
(31, 'Metal', 2),
(32, 'Alternative Metal', 2),
(33, 'Massive Rock / Alternative Metal', 2),
(34, 'Horror Ebm Metal / Industrial Groove Metal', 2),
(35, 'Symphonic Death Metal', 2),
(36, 'Metal Industriel Gothique', 2),
(37, 'Experimental Metal', 2),
(38, 'Female Fronted Metal with huge orchestra and choir', 2),
(39, 'Metal from Nowhere', 2),
(40, 'Metal Industriel Expérimental', 2),
(41, 'Métal alternatif', 2),
(42, 'Cold wave Métal / Doom', 2),
(43, 'Darkthrone', 2),
(44, 'Metal Alternatif', 2),
(45, 'Metal - Electro', 2),
(46, 'gothic rock and metal, new wave, coldwave, movie music.', 2),
(47, 'Metal Melodique', 2),
(48, 'Djenty metal', 2),
(49, 'Rock Stoner progressif', 2),
(50, 'Gothic Metal', 2),
(51, 'Southern Metal', 2),
(52, 'Rock Alternatif Punk Hardcore', 3),
(53, 'Cold Punk Hardcore D-Beat', 3),
(54, 'Hardcore', 3),
(55, 'Metalcore / Deathcore', 3),
(56, 'Blackcore', 3),
(57, 'Metalcore', 3),
(58, 'Modern Metal / Metalcore / Hardcore', 3),
(59, 'Hardcore Punk', 3),
(60, 'Post Hardcore / Math Rock', 3),
(61, 'Metalcore Melodique', 3),
(62, 'Rock Alternatif / Post Grunge', 3),
(63, 'Thrash / HxC / Metalcore', 3),
(64, 'Blackened Crust/Grind/Hardcore', 3),
(65, 'Blackened Deathcore', 3),
(66, 'Rock / Metal / Mathcore', 3),
(67, 'Progressive Rock Punk', 3),
(68, 'Rock Alternatif / Hard Rock / Math Rock', 3),
(69, 'Pop hardcore', 3),
(70, 'Hardcore Metal crossover', 3),
(71, 'post -Melodic hardcore', 3),
(72, 'Rock / Hard Rock', 4),
(73, 'Metal', 4),
(74, 'Rock / Métal / Prog', 4),
(75, 'Hard-Rock', 4),
(76, 'Rock Hard Rock', 4),
(77, 'Post Rock', 4),
(78, 'Metal Progressif', 4),
(79, 'Rock WTF', 4),
(80, 'Rock Metal', 4),
(81, 'Metal Alternatif', 4),
(82, 'Shredding', 4),
(83, 'Theatrical Rock', 4),
(84, 'Rockabilly Metal', 4),
(85, 'Glam Rock / Grunge', 4),
(86, 'Authentic, Hard-Rock, Metal', 4),
(87, 'Rock / Alternatif', 4),
(88, 'Metal / Rock\r\n', 4),
(89, 'Heavy-Rock / Metal', 4),
(90, 'Alternative Metal', 4),
(91, 'Rock / Hard Rock / Metal', 4),
(92, 'Rock / Metal Prog', 4),
(93, 'Rock Alternatif', 4),
(94, 'Metal / Death Metal / Thrash Metal', 5),
(95, 'Metal Zone', 5),
(96, 'thrash metal', 5),
(97, 'Heavy Power Metal', 5),
(98, 'Metal', 5),
(99, 'Metal progressif mélodique', 5),
(100, 'Metal progressif alternatif', 5),
(101, 'Metal Progressif', 5),
(102, 'Thrash Death Metal Old School', 5),
(103, 'Thrash Death Metal Moderne Mélodique', 5),
(104, 'Heavy Power Metal', 5),
(105, 'Trash de guerre', 5),
(106, 'Rock / Alternative / Progressive Rock / Electronica / Indie / Pop / Blues', 5),
(107, 'Opera Metal', 5),
(108, 'heavy, melodic and powerful metal', 5),
(109, 'Heavy / Black / Doom Metal', 5),
(110, 'Modern Metal', 5),
(111, 'Metal / Independant', 5),
(112, 'Metal / Progressif', 5),
(113, 'Trash death metal', 5),
(114, 'Metal expérimental Indus', 6),
(115, 'Neo Metal', 6),
(116, 'Metal Indus Experimental', 6),
(117, 'Metal Fusion', 6),
(118, 'Electro Goth / Darkwave', 6),
(119, 'Metal Alternatif', 6),
(120, 'Electro Metal', 6),
(121, 'Electro Rock Alternatif', 6),
(122, 'Metal - Trap - Hip Hop - Rock', 6),
(123, 'Rapcore / Nu metal / Deathcore', 6),
(124, 'Nu Metal', 6),
(125, 'Metal / Rock / Electro', 6);

-- --------------------------------------------------------

--
-- Structure de la table `titre`
--

CREATE TABLE `titre` (
  `idTitre_Titre` int(9) NOT NULL,
  `nomTitre_Titre` varchar(250) DEFAULT NULL,
  `clip_Titre` varchar(250) DEFAULT NULL,
  `lienEcouteTitre_Titre` varchar(250) DEFAULT NULL,
  `idAlbum_Album` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `titre`
--

INSERT INTO `titre` (`idTitre_Titre`, `nomTitre_Titre`, `clip_Titre`, `lienEcouteTitre_Titre`, `idAlbum_Album`) VALUES
(1, NULL, 'https://youtu.be/2xEcBxCTzaQ https://youtu.be/kpHVEhb-H_8', 'https://dysmorphicmetal.bandcamp.com https://www.youtube.com/watch?v=kpHVEhb-H_8 Unique Leader Records', 1),
(2, NULL, 'https://youtu.be/oPDH83tFa9o https://youtu.be/eiGPTltI_PA', 'http://benighted.bandcamp.com https://www.youtube.com/channel/UCBisgB-4zTJBjCjdvkLVgOw Season Of Mist', 2),
(3, NULL, 'https://youtu.be/N8nEqmNMQUQ https://youtu.be/LoBDPYcTDLs', 'https://defenestration44.bandcamp.com/ https://www.youtube.com/channel/UCl-RyYyps2yrGvv9C_hNXpg XenoKorp', 3),
(4, NULL, 'https://youtu.be/ekY4614rngw https://youtu.be/wQXye8-h9jY', 'https://ironflesh.bandcamp.com/merch https://www.youtube.com/user/harm0nia ', 4),
(5, NULL, 'https://youtu.be/qGHYpG0ebp0 https://youtu.be/jJLsrxaRov8', 'https://abyssalvacuum.bandcamp.com/releases https://www.youtube.com/watch?v=qGHYpG0ebp0 ', 5),
(6, NULL, 'https://youtu.be/sRtk6dm1IS0 https://youtu.be/ss9uMxXht9U', 'https://thoseopposedrecords.bandcamp.com/album/la-cit-des-vents https://www.youtube.com/user/AORLHAC Les Acteurs de l\'Ombre Productions', 6),
(7, NULL, 'https://youtu.be/rrBUFqjOsC0 https://youtu.be/r9RqiNP4WsM', 'https://www.spirit-of-metal.com/fr/band/Mortis_Mutilati https://youtu.be/1UhPTjd300c Solstice Promotion', 7),
(8, NULL, 'https://www.youtube.com/watch?v=AiRWar-Q_8E https://youtu.be/WZUQTZ_-Ufs', 'https://btkmetal.bandcamp.com https://www.youtube.com/channel/UChc4kAsH-OfBgteP8pYwX8w Wooaaargh, Troffea records et HELL-J Industries.', 8),
(9, NULL, 'https://youtu.be/ypCa24RBjKs https://youtu.be/aH-rudLK-oI', ' https://www.youtube.com/channel/UChMW78ZtpYAaz6jgBNhu5iQ Unsigned', 9),
(10, NULL, 'https://www.youtube.com/watch?v=EljpnrtwhaI https://www.youtube.com/watch?v=A3uHxDL4xOw', 'https://aeonpatronist.bandcamp.com https://www.youtube.com/channel/UCB3KI7P1uW1jsp4LzbkeJSQ ', 10),
(11, NULL, 'https://youtu.be/uoe0RHXcQ3Q ', 'https://godagainsthumanity.bandcamp.com https://www.youtube.com/channel/UCVtTrZhaCq7YrQNoGxPsCXw ', 11),
(12, NULL, 'https://youtu.be/bFNSHcSz4PE https://youtu.be/k59McwWVkdo', 'https://warkunt.bandcamp.com https://www.youtube.com/channel/UCCIGIud0BoHumuCq_1wXETg GREAT DANE RECORDS', 12),
(13, NULL, 'https://youtu.be/iniqkCYv4Qk ', 'https://malepeste.bandcamp.com/album/ce-qui-fut-ce-qui-est-ce-qui-sera  Goathorned Productions', 13),
(14, NULL, 'https://youtu.be/5BdtI3Q8ZAA https://youtu.be/9eGELnnjRUQ', ' https://www.youtube.com/channel/UCt7c_7gAVVNF7Ss9cPGQB5g Autoproduction', 14),
(15, NULL, 'https://youtu.be/-VjNVMu7mGY https://youtu.be/XsBN6aj9rj4', 'https://voraphilya.bandcamp.com https://www.youtube.com/channel/UCqX-QWHKwUYKIeWL-f_CERA ', 15),
(16, NULL, 'https://youtu.be/1pEpPZsC7KM https://youtu.be/YI1It1xEm7k', 'www.epictural.fr https://www.youtube.com/watch?v=1pEpPZsC7KM&t=2s Epictural Production', 16),
(17, NULL, 'https://youtu.be/f0x11bh21Z0 https://youtu.be/gQu8LQYYKmY', 'https://open.spotify.com/album/3Sb1iylWQIuw9iaQmGqcE6 https://www.youtube.com/channel/UCbBfE_MASHGLUkC36h533AA Jive Epic / Sony Music Entertainment', 17),
(18, NULL, 'https://youtu.be/TJwm98jbNM8 https://youtu.be/f6umPH0a1_Y', ' https://www.youtube.com/channel/UCl4U0rquz3OjZ1fViHgqCNQ Egregor Records', 18),
(19, NULL, 'https://youtu.be/e8wK37_NT4s https://youtu.be/Cw1-yGzUECM', 'https://temptfate31.bandcamp.com https://www.youtube.com/channel/UCBRwqxQ88108y2raf7l_pGQ ', 19),
(20, NULL, 'https://youtu.be/qb36PJ0xpq8 https://youtu.be/xdhw6FyvveI', ' https://www.youtube.com/channel/UC3kDGDtDdG2nNiQlOiD9cZw Unsigned', 20),
(21, NULL, 'https://youtu.be/W7s1-XRdeIs https://youtu.be/VIzb4I7SboA', ' https://www.youtube.com/user/FractalUniverseMetal Metal Blade Records', 21),
(22, NULL, 'https://youtu.be/Thh5mvFQGRo https://youtu.be/UiXsMEKRu3E', 'https://propheticscourge.bandcamp.com/releases https://www.youtube.com/channel/UCJSUkKUMJIz1MnhgoS8mxGA Klonosphere / Season of Mist.', 22),
(23, NULL, 'https://youtu.be/RcOg_rjwgmE https://youtu.be/jPKnbgxj0yQ', 'https://mindimperium.bandcamp.com https://www.youtube.com/channel/UCN6yhR32MjURtxLcmaZhAiA Dark Faery Records', 23),
(24, NULL, 'https://youtu.be/s13aQJXljaw https://youtu.be/Lu16uqxAzhE', 'https://darktunes.bandcamp.com/album/eleven https://www.youtube.com/channel/UCzRzt1Vj_VWjpyg2X-vO49g darkTunes Music Group', 24),
(25, NULL, 'https://youtu.be/uZUAtga_yOA Orphan Lord', 'https://www.instagram.com/sadraen https://www.youtube.com/watch?v=uZUAtga_yOA M & O Music (Label)', 25),
(26, NULL, 'https://youtu.be/_vm1YDj1hhc https://youtu.be/fEwuDS-pOLE', 'https://www.deezer.com/fr/album/63075802 https://www.youtube.com/channel/UC103tiCal_uOftW_ob0aYpw label Mystick', 26),
(27, NULL, 'https://youtu.be/AoZyR2RQ6n8 https://youtu.be/lSCHzM0KmF0', 'https://utopiandespair1.bandcamp.com/releases https://www.youtube.com/channel/UCjXwQPl6719PMynn3Vm-WfA ', 27),
(29, NULL, 'https://www.youtube.com/watch?v=OG3FJwX-7VU ', 'https://monolithe.bandcamp.com https://www.youtube.com/channel/UC7NewNbrtlNohq4sOc-EA8Q Les Acteurs de l\'Ombre Productions', 29),
(30, NULL, 'https://youtu.be/LFJdXIVlkio https://youtu.be/K9q9kvjlOKg', 'https://mourningdawn.bandcamp.com/album/the-dead-years https://www.youtube.com/channel/UCVOXq3GfeGgEE--vUCtjeDw Total Rust', 30),
(31, NULL, 'https://youtu.be/CZPefGlX99U https://youtu.be/kLL-XR1Cx0U', ' https://www.youtube.com/channel/UCPS2y8INKKim3IsS9PoglIA Bad Reputation', 31),
(32, NULL, 'https://youtu.be/0mDg3QmLZBo https://youtu.be/w7B7s51rLGo', ' https://www.youtube.com/channel/UClbQFYv-27ZAn28FLCzqahg ', 32),
(33, NULL, 'https://youtu.be/4qlSseS00VU https://youtu.be/6mSvX304tGQ', 'https://lefttowither.bandcamp.com/releases https://www.youtube.com/channel/UC39lZ2YtXJeNZ4VuuzkQefg ', 33),
(34, NULL, 'https://youtu.be/uRiMAcJjXsA https://www.youtube.com/watch?v=N04dmoczFI8', 'https://mudweiser.bandcamp.com https://www.youtube.com/channel/UCT_hrQ66ymSmRzMoHkwR0Iw Head Records', 34),
(35, NULL, 'https://youtu.be/snB9rpq2h9g https://youtu.be/v5j5TtMPk3U', '\"https://dogfries.bandcamp.com https://www.youtube.com/channel/UCNJWS6KAS6-dQq9S7mR2qXA ', 35),
(36, NULL, 'https://youtu.be/CIk678MWoD4 ', 'https://epitaphe.bandcamp.com/releases  Chaos Records', 36),
(37, NULL, 'https://youtu.be/5cq3aZsrT0E https://www.youtube.com/watch?v=5AuCQ6-kxL0', 'https://blackboxwarning.bandcamp.com/releases https://www.youtube.com/channel/UCO-A9pC8TuQg0w3n3cOgzhA Autoproduction', 63),
(38, NULL, 'https://youtu.be/HHU2RPAjW8A https://youtu.be/Wf873EKo0uk', 'https://baculum666.bandcamp.com/album/disqualifi https://www.youtube.com/channel/UCJXFK-0Ce6H-knZD5lTgInA ', 38),
(39, NULL, 'https://youtu.be/1ls0eNrEL6I https://youtu.be/cT-rvuZX76o', 'https://melt4.bandcamp.com/album/melt-2 https://www.youtube.com/channel/UC2znoC51w_8uln0ylvvaZ0A FatCat Land records', 39),
(40, NULL, 'https://youtu.be/yJXCO7bVUww https://www.youtube.com/watch?v=uWeZEpRVHus', 'http://www.wreckplus.bandcamp.com https://www.youtube.com/user/wreckplusdigitalbox Autoproduction', 40),
(41, NULL, 'https://youtu.be/YQ-k_DCRTeQ https://youtu.be/tjIxLQxNPkw', ' https://www.youtube.com/user/wistfulJB Valkyrie Rising', 41),
(42, NULL, 'https://youtu.be/dZL_vqUUQPU ', 'http://onewithme.bandcamp.com  ', 42),
(43, NULL, 'https://youtu.be/TRzMIOPlDLM https://youtu.be/eJC6aglf0C', 'http://www.soundcloud.com/theraphosa https://www.youtube.com/channel/UCDaRiwYHXhze6IjquG8OCRg ', 43),
(44, NULL, 'https://youtu.be/bO2eZbaUHUU https://youtu.be/BfErNTbXB9w', 'http://tinyurl.com/APTD-Deezer https://www.youtube.com/channel/UCP53QLJbdEatNKNRvoeA0RA ', 44),
(45, NULL, 'https://youtu.be/IImKo5Kxq40 https://youtu.be/PZKLqhV2sH0', 'https://twitter.com/scarlean https://www.youtube.com/channel/UCHOnOxvRnRQ6qxLVthgAesg GHOST PROD/MYSTYK PROD', 45),
(46, NULL, 'https://youtu.be/lut0bHhKXhY https://youtu.be/omxD2onGxMw', 'https://rusttheory.bandcamp.com https://www.youtube.com/channel/UCB16kAbiVA_Gym5au5ztfSw Black Desert Records', 46),
(47, NULL, 'https://youtu.be/G-keUg-QHr8 https://youtu.be/Vu79_bnpAAI', 'https://www.facebook.com/ObszonGeschopfOfficial https://www.youtube.com/channel/UCnWgUXjZOLoZ1OrrdC_KUjw Dark Star Records', 47),
(48, NULL, 'https://youtu.be/x2RcbwCyLEMy https://youtu.be/_aTgGhpABGs', 'https://seasonoftears.bandcamp.com https://www.youtube.com/channel/UC2NfIsFe5KZ8rtqOmD5NZxQ ', 48),
(49, NULL, 'https://youtu.be/ELHkFq6zkIk https://youtu.be/NHcBr2FvOZM', 'https://open.spotify.com/album/3pc39PjNTsrs1sxS7C0HLQ https://www.youtube.com/channel/UCeSYJlLOwP5JfKJgP5cFn-A Adipocere Records', 49),
(50, NULL, 'https://youtu.be/q8g6TjmJsPM https://youtu.be/qSRBwdqVKXA', 'https://open.spotify.com/artist/30vi0U2nQKRy10d5ifaqFY https://www.youtube.com/channel/UC2q5M5Ikc5AK6PTghDKxnpA ', 50),
(51, NULL, 'https://youtu.be/CTxQZL1K5jY ', 'http://whyzdom.bigcartel.com https://www.youtube.com/channel/UC1cpad0b9MBEUyH0ITXkJcA Scarlet Records', 51),
(52, NULL, 'https://youtu.be/oCxeXA30re8 https://www.youtube.com/watch?v=3qybe3LqhlQ', ' https://www.youtube.com/channel/UCDlIgHN1ukMQ6Azh6LldVZA Autoproduction', 52),
(53, NULL, 'https://youtu.be/fX4dD_aPwd0 https://youtu.be/gs3m45fracY', 'https://open.spotify.com/artist/14O6pFhZXj9B1JFcAZ3OSs https://www.youtube.com/channel/UCwNXzWZkF8nQO3OsbLK2_Yw M.U.S.I.C Records', 53),
(54, NULL, 'https://www.youtube.com/watch?v=lsxby-rFZ6Y https://www.facebook.com/LECKSInc/videos/906004769560429', ' https://www.youtube.com/channel/UCMq5Lu9RFmTkIsP3x7RGm6Q M & O Music (Label)', 54),
(55, NULL, 'https://youtu.be/c3mYrhAWzOI https://youtu.be/GLrF0ryiUFw', 'https://elyx.bandcamp.com https://www.youtube.com/channel/UCpPX7Vfkn289y25vQxHSafA Go Music/ Jump Music/ Elyxprod', 55),
(56, NULL, 'https://youtu.be/8ZIL5l3WuoQ https://youtu.be/AQReZtf8pUM', 'https://www.deezer.com/fr/artist/15069239 https://www.youtube.com/channel/UChpTguZ5DKYRNI5XR3iBV2Q Music Records', 56),
(57, NULL, 'https://youtu.be/DBcuPcYBsHY https://www.youtube.com/watch?v=0pRaocvriHE', 'https://www.deezer.com/fr/album/72591752 https://www.youtube.com/channel/UCoQ0Eg6YA3bntRG_Vr36jRA Deadlight Entertainment, Terrain Vague et MALLEVS RECORDS.', 57),
(58, NULL, 'https://youtu.be/cOdmg2jbDs0 https://youtu.be/cOdmg2jbDs0', 'https://soundcloud.com/monsters-4  ', 66),
(59, NULL, 'https://youtu.be/ws5hmHTk8O0 https://youtu.be/iEbo1iRziME', ' https://www.youtube.com/channel/UCGzxWlDLOvlYDtA4EYYXoLA ', 59),
(60, NULL, 'https://youtu.be/mTV6Oc3fDSQ ', 'https://open.spotify.com/album/5ME7iyxvJbKM0gyOPgIyXI https://www.youtube.com/channel/UCKBuRKIW6flcLEjgdRJcoIA Season of Mist', 60),
(61, NULL, 'https://youtu.be/neND497Cb70 ', 'https://www.metalorgie.com/groupe/Moon-Prototype  Autoprod', 162),
(62, NULL, 'https://youtu.be/cnrWaj6RQhQ https://youtu.be/yvP9KTTzI-k', 'https://negative-ritual.wixsite.com/negative-ritual https://negative-ritual.wixsite.com/negative-ritual ', 62),
(63, NULL, 'https://youtu.be/5cq3aZsrT0E https://youtu.be/BGb_YMsApbc', ' https://www.youtube.com/channel/UCYGC4jfswBaa0HsjQl0rQNQ ', 63),
(64, NULL, 'https://youtu.be/9FyhrHbEvQw https://youtu.be/eisSmUStn7o', 'https://www.instagram.com/ezoxofficial https://www.youtube.com/channel/UC449RiEvW3Dtj66B3UODfNw Recuiem Prod', 64),
(65, NULL, 'https://youtu.be/3TNMuO_vtNI https://youtu.be/kr4jPSkSP9o', ' https://www.youtube.com/channel/UCACTk1dYHmINyuVG7mS9tcQ Autoproduction', 65),
(66, NULL, 'https://youtu.be/EfkBIQGgq4w https://youtu.be/IcBPGhGuwUw', 'https://open.spotify.com/album/66FhdWTDxVzOPuUEXtY7Xe https://www.youtube.com/user/twistedoaksband Independant', 66),
(67, NULL, 'https://youtu.be/lVQQyAhnNY0 https://youtu.be/I2oqATWjnvU', 'https://open.spotify.com/artist/4LMOrQtDq76ar9W4d2FsRk https://www.youtube.com/channel/UCkG7UmmWkMDTpP_MujZod6g ', 67),
(68, NULL, 'https://youtu.be/Mp3cW5AcNak https://youtu.be/flhNMlFz9gQ', 'http://darkcorpus.free.fr  ', 68),
(69, NULL, 'https://youtu.be/pZu3Ok94R3o https://youtu.be/CxrHQK49FIM', 'https://overcharger.bandcamp.com/releases https://www.youtube.com/user/overchargermusic Overpowered Records', 69),
(71, NULL, 'https://www.youtube.com/watch?v=gscVADAE7XY https://youtu.be/Wkd2GcaEuQ0', 'http://twitter.com/tarldtheband https://www.youtube.com/channel/UCICEec22452qp6bMVP9yMtA Red Light Records', 71),
(72, NULL, 'https://www.youtube.com/watch?v=oapBFcc2vI8 https://youtu.be/HmkRMU2_qNw', 'https://recedantsomnia.bandcamp.com/album/a-waked-up-nightmare https://www.youtube.com/channel/UCLMPNjsmua-ybcO9byKWn2w ', 72),
(73, NULL, 'https://www.youtube.com/watch?v=9Ba_O_cU7CM https://youtu.be/R2nqrB3ljhs', 'https://beyondthestyx.bandcamp.com/ https://www.youtube.com/channel/UCtFL6fY12jIY99IGwrYQ7ow Klonosphere / Diorama Records', 73),
(74, NULL, 'https://www.youtube.com/watch?v=FAeQ27HOkbk https://youtu.be/elc6mS6O4JE', 'https://twitter.com/wrcollapse https://www.youtube.com/channel/UCZwbiS3RHl8KXrs4nf186jA ', 74),
(75, NULL, 'https://www.youtube.com/watch?v=hn8VCyD8Cvo https://youtu.be/iX71vSxj9aI', 'http://www.twitter.com/InArkadiaTweets Catégorie https://www.youtube.com/channel/UCB1rEN8GgYgW0rW5AYouWnQ ', 75),
(76, NULL, 'https://www.youtube.com/watch?v=g5Cn9LYzV1A https://www.youtube.com/watch?v=XT2-RIpwdl4', 'https://twitter.com/oomesquad/ https://www.youtube.com/channel/UCw0yZoDWb9sunNBYs4An39w Imminence Records', 76),
(77, NULL, 'https://youtu.be/L2TejKg4jdU https://youtu.be/934zEpvBWkg', 'https://irya.bandcamp.com/releases https://www.youtube.com/channel/UCNpvLTFj19cc4iBpgkZ2RUQ ', 77),
(78, NULL, 'https://youtu.be/jphPMqBeE6c https://youtu.be/frP4_SDCqsg', 'http://www.deezer.com/album/60171402 https://www.youtube.com/channel/UCouYjF_mnoIYNmLzoQBgVkw DIY', 78),
(79, NULL, 'https://www.youtube.com/watch?v=it2Qyq1Oejw https://youtu.be/4raKYkugNg4', 'https://thegreatdivide.bandcamp.com/album/linger-over-linger-on https://www.youtube.com/channel/UC0WPgQh79RRD7M2j-Q_4JFQ Useless Pride Records', 79),
(80, NULL, 'https://www.youtube.com/watch?v=sJ2Qv8JcxMs https://youtu.be/NiENp8WQ70M', 'https://killforpeace.bandcamp.com/ https://www.youtube.com/channel/UChq92Bv_stt_c_S1NFcHKiA DON’T TRUST THE HYPE', 80),
(81, NULL, 'https://www.youtube.com/watch?v=OelO4oNw8xI https://youtu.be/1PlCD54_ok8', 'https://twitter.com/InsolvencyBand https://www.youtube.com/channel/UC2W6PM_uKqYB8sPonznLNCg ', 81),
(82, NULL, 'https://youtu.be/ejrgDm6XmN0 https://youtu.be/qUMHRdZ9c8s', 'https://open.spotify.com/artist/4qqEz https://www.youtube.com/channel/UCx90Hj9K0VOPsVcSsDb6Tyw ', 82),
(83, NULL, 'https://www.facebook.com/1414430945529031/videos/2054274281287785 https://www.facebook.com/1414430945529031/videos/506412883190328/', '  ', 83),
(84, NULL, 'https://www.facebook.com/YoldRockBand/videos/2315659705333843/ https://www.facebook.com/YoldRockBand/videos/1033681220148093', '  Autoproduction', 84),
(85, NULL, 'https://youtu.be/8r9j7tdXy5E ', ' https://www.youtube.com/channel/UCXdoI9r-C8dcxhmOM0nbwOQ ', 85),
(86, NULL, 'https://youtu.be/FCnNgVliwZE https://youtu.be/g5k5Qxfs16Q', ' https://www.youtube.com/channel/UCwWhf7cFSu6WYh_pOftVRCw 13 Guillotines Records.', 86),
(87, NULL, 'https://youtu.be/Xn_RUQJNe0U https://youtu.be/ENRchtlr0Jk', 'https://piedbouche.bandcamp.com https://www.youtube.com/channel/UCVydr4yVjZl_XowbuwDsYsw ', 87),
(88, NULL, 'https://youtu.be/WyvNaq7R5G4 https://youtu.be/JrxylJPAhtA', 'http://pilori.bandcamp.com https://www.youtube.com/channel/UCLppHWogrlR0RrgliN_sp9g Terrain Vague', 88),
(89, NULL, 'https://youtu.be/19gSkeilumM https://youtu.be/CxZZlVtF2Sk', 'https://open.spotify.com/album/3fE4ae6i4AQj4LnNUXRpx2 https://www.youtube.com/channel/UCLmNGciku8Flzio_lDThV0 M&0 Music', 89),
(90, NULL, 'https://youtu.be/E4wxyU-WKaw https://youtu.be/4DOAOFv71NI', ' https://www.youtube.com/channel/UCEfckiJnmGAAq0SFcWg4hNw Uproar for Veneration records', 90),
(91, NULL, ' https://youtu.be/S1SXoFz-F0E', 'http://www.wearetriumphant.com https://www.youtube.com/channel/UCyK9TNAbcGrUoarmxKLJu7A The Orchard Music (au nom de We Are Triumphant Records)', 91),
(92, NULL, 'https://youtu.be/Ejj7JpPt5jI https://youtu.be/lvoZ1Ef4HkY', 'http://prungk.bandcamp.com https://www.youtube.com/channel/UCTMRJrjfAZy9b9rIXOdQGQA ', 92),
(93, NULL, 'https://youtu.be/f7N7ooSk72k https://youtu.be/QipoZylOHow', 'http://bit.ly/2wbcTML https://www.youtube.com/channel/UCbn5yvsqSG_18JR3y6jNp4w ', 93),
(94, NULL, 'https://youtu.be/Uh1tlBUu5Bc https://youtu.be/CLD2g3alMtc', 'https://open.spotify.com/album/58H89wybUCFnSjkjYQcJda https://www.youtube.com/user/icfbtheband Send The Wood Music', 94),
(95, NULL, 'https://youtu.be/lxCpuMrXH78 https://youtu.be/RZtlXqYC81Y', ' https://www.youtube.com/channel/UC7eYfWRye-UJ01u_UV9kueg ', 95),
(96, NULL, 'https://youtu.be/oTpETkh-xMo https://youtu.be/jyGTurt6PnE', 'http://thorninfleshband.bandcamp.com https://www.youtube.com/channel/UCazeTZpYlOZRzZ5PZbYdGhQ ', 96),
(97, NULL, 'https://youtu.be/xdhw6FyvveI https://youtu.be/ms5jaP0KvEs', 'https://open.spotify.com/album/09Td81 https://www.youtube.com/channel/UC3kDGDtDdG2nNiQlOiD9cZw Unsigned', 97),
(98, NULL, 'https://youtu.be/LzuodX1i-fA https://youtu.be/N1-upexkQV0', 'https://syndrom.bandcamp.com/releases https://www.youtube.com/channel/UChIgxSByQl8k3iI21cpl9Sw ', 98),
(99, NULL, 'https://youtu.be/oLsH50kSKF0 https://youtu.be/9Ba_O_cU7CM', 'https://beyondthestyx.bandcamp.com https://www.youtube.com/channel/UCtFL6fY12jIY99IGwrYQ7ow Klonosphere / Diorama Records', 99),
(100, NULL, 'https://youtu.be/Yp31sNPWlnw https://youtu.be/8NQlWatDx84', ' https://www.youtube.com/channel/UCbb_dLqZ5XDyB1fIrq0KNjg Seven Years A Weak Records', 100),
(102, NULL, 'https://youtu.be/i11W_jGQBMw https://youtu.be/W-Ifedgv0Wc', ' https://www.youtube.com/watch?v=i11W_jGQBMw ', 102),
(103, NULL, 'https://youtu.be/CdFlwmOU2qs https://youtu.be/yJO9j-dWZMQ', 'http://spellbinding.bandcamp.com https://www.youtube.com/channel/UCRp0HZ7WfAegW2s5JwSpb3Q ', 103),
(104, NULL, 'https://youtu.be/4gNlbzgTVbU https://youtu.be/mfoiqMszT64', 'http://digitalnova.bandcamp.com/ https://www.youtube.com/channel/UCU1CNjZpY2TKWizheC_ER0Q unsigned', 104),
(105, NULL, 'https://youtu.be/2pSZBYqBSpo https://youtu.be/hV9vSyydENY', 'http://www.instagram.com/exceptone_of https://www.youtube.com/channel/UCE9Y4J57YEs1V3ufo7qo48A D.I.Y', 105),
(106, NULL, 'https://youtu.be/yXlNLWUUG_E https://youtu.be/cKtaKovU4vw', ' https://www.youtube.com/channel/UCwWOM-w83z7a8jmlh-ygZxw ', 106),
(107, NULL, 'https://www.youtube.com/watch?v=6d6UHTFHRmI https://youtu.be/XvBD7DtlwlM', 'https://www.indiemusic.fr/holispark-sonic-bloom/ https://www.youtube.com/channel/UCcI3hkXNBf3drhV0ruIZxOw Send The Wood Music', 107),
(108, NULL, 'https://youtu.be/d97EAFbm-8E ', ' https://www.youtube.com/user/BlindingSparks/videos Season of Mist', 108),
(109, NULL, 'https://youtu.be/RSE6rQvl26s https://youtu.be/_ekJ-dAC-pE', 'https://moonshineoversight.bandcamp.com/releases https://www.youtube.com/channel/UCgZqGAoBKWsvcWzXnEt-Wdw ', 109),
(110, NULL, 'https://youtu.be/63XcCoZHVes https://youtu.be/GO21rGFlvXs', ' https://www.youtube.com/results?search_query=sendwood DBD Studio', 110),
(111, NULL, 'https://youtu.be/T9HhoeDaWPQ https://youtu.be/xp9-CzqicRY', 'https://davidslame1.bandcamp.com/ https://www.youtube.com/channel/UCLcMjyy3zmq5sgy1hyaQbNg Autoproduction', 111),
(112, NULL, 'https://youtu.be/fKD0XIOyg6A https://youtu.be/Tikh6INn0U0', ' https://www.youtube.com/channel/UCsYH0QtfYngQUNTZ3dFj5qQ Independent band.', 112),
(113, NULL, 'https://youtu.be/QtL6UikmIoo https://youtu.be/lRfwczSdnX4', ' https://www.youtube.com/channel/UCu0oT-Ml9HD0WRVp0-IiN7A Andy Cyclone', 113),
(114, NULL, 'https://youtu.be/ABqI1VTYgJA https://youtu.be/J4O4TVwm1ZI', 'http://www.franckcarducci.com https://www.youtube.com/user/BassFranky/videos Franck Carducci', 114),
(115, NULL, 'https://youtu.be/j5P5Wt6kvaE https://youtu.be/ZVAzn4cllvE', 'https://open.spotify.com/artist/1eCq5 https://www.youtube.com/channel/UCxc7y4bijJC0cU8NnMKZHMw Mii Recording Studio', 115),
(116, NULL, 'https://youtu.be/wH4NQiyhZ9s https://youtu.be/ycmoGt9vc-k', ' https://www.youtube.com/channel/UC_5mt4tgckALMJBaCgmp_3g ', 116),
(117, NULL, 'https://youtu.be/DM9janYmadc https://youtu.be/ROONFbUfFRg', 'https://www.xplosemusic.com/album-detail/5bf717aab582e12dc1e03942 https://www.youtube.com/channel/UCd7PJLZ-BHnv1yZkDE-1bBQ Xplose Music Prod', 117),
(118, NULL, 'https://youtu.be/eCe5drYUecM https://youtu.be/C1ljykxsN2o', 'http://m.oi.e-design.studio/ https://www.youtube.com/channel/UCbG6ichvA7dhbX6mN83j8IQ ', 118),
(119, NULL, 'https://youtu.be/tIxEjHT6_uE https://youtu.be/c_fvQn48SXs', 'https://open.spotify.com/artist/4a0gdBWmhq0srNiMJ0Mk9t https://www.youtube.com/channel/UC1oT9egmUsiwi_5i3R0QgkA imusician_digital (au nom de MindProduction)', 119),
(120, NULL, 'https://youtu.be/Zc6NqCXHJws https://youtu.be/taYYWhSyD9I', ' https://www.youtube.com/channel/UCl1f4X7Hxu847IGKFX2swpQ ', 120),
(121, NULL, 'https://youtu.be/FUDoQ_RTzzc https://youtu.be/pBvdCz7y1r8', 'https://revolveglasgow.bandcamp.com/ https://www.youtube.com/channel/UCa8xCfD-D-GqFNRMbtVZvrg Record Union', 121),
(122, NULL, 'https://youtu.be/kmCRYD2Kcco https://youtu.be/yva-Rop_hjU', ' https://www.youtube.com/channel/UCNMOmdcQ4IooTea7WsXe5hg Autoproduction', 122),
(123, NULL, 'https://youtu.be/gAcTZr0oqIo https://youtu.be/pzG6UlkgKiE', 'https://sidhofficial.bandcamp.com/ https://www.youtube.com/channel/UCdjeE1n6jPC-7Ak4ZTbenKw 2018 GARDEN PRODUCTION', 123),
(124, NULL, 'https://youtu.be/-CT69DGOVx0 https://youtu.be/XTnxMMghgTg', 'https://www.deezer.com/fr/album/44559341 https://www.youtube.com/channel/UCvtwdhmaWVsY0psGgcVwk8Q ', 124),
(125, NULL, 'https://youtu.be/Ykz4QdfFJbY https://youtu.be/Yne55WM7DpI', ' https://www.youtube.com/channel/UCvbszaMGRIy_odbucR9YFxw M & O Music (Label)', 125),
(126, NULL, 'https://youtu.be/1ksg52dIOTA https://youtu.be/L9q9M8huWKc', 'https://skahinall.bandcamp.com/releases https://www.youtube.com/channel/UCh8KQ1yn1q9uGfjnj0-pC0w M & O Music (Label)', 126),
(127, NULL, 'https://youtu.be/CUNSJ7pbl3E https://www.facebook.com/Ghost.Opera.Rockband/videos/1044894268865184/', '  ', 127),
(128, NULL, 'https://youtu.be/aRIuZJq3mXw https://youtu.be/7E8__XeSyWw', 'https://www.wolvemusic.bandcamp.com https://www.youtube.com/channel/UCIEnwlL6O5ZForPKyG9bkEg ', 128),
(129, NULL, 'https://www.facebook.com/Wergeldlied/videos/2058819977736343/ https://www.facebook.com/Wergeldlied/videos/198196874461821/', 'https://wergeld.bandcamp.com/releases https://www.youtube.com/channel/UCQRNQFTXntNjiBVcnLmxpRw Khaos Division Prod', 129),
(130, NULL, ' ', '  ', 135),
(131, NULL, 'https://youtu.be/IaJ2UHiTa0 https://youtu.be/fljejaym1', 'http://deathdecline.bandcamp.com https://www.youtube.com/channel/UCOPbA2FwUgjqw9VPS7jnQM M & O Music (Label)', 131),
(132, NULL, 'https://youtu.be/tjIEX5bf-Y ', ' https://www.youtube.com/channel/UCjPKJ8qDA8hsK2asFDFN5a ', 132),
(133, NULL, 'https://youtu.be/xjaBU1lsock https://youtu.be/JziEMHgw67U', 'https://lebowskii.bandcamp.com/album/liquidators https://www.youtube.com/channel/UCd96PYBn7AVj-GngdyThRSA music-records.fr', 133),
(134, NULL, 'https://youtu.be/rAd-p3pzwm0 ', '  Rock Of Angels Records', 134),
(135, NULL, ' ', 'https://arteryfrance.bandcamp.com/album/deadland  ', 135),
(136, NULL, 'https://www.youtube.com/watch?v=NqKdNguwnQg https://www.youtube.com/watch?v=v13iB1MSDCo', ' https://www.youtube.com/channel/UCQrIqN-rS5bx82ZnXPhxRdg Debemur Morti Productions', 136),
(137, NULL, 'https://www.youtube.com/watch?v=wM7UcDpj0j0 ', ' https://www.youtube.com/watch?v=A6FwngkmYvA Lion Music Records Label', 137),
(138, NULL, 'https://youtu.be/D0aNJ3VTYd8 https://youtu.be/zEjt2adGSk0', 'https://krodha.bandcamp.com https://www.youtube.com/channel/UCDwRaK46lAORNJgkaIFptOA ', 138),
(139, NULL, 'https://youtu.be/4022iYfLGq8 https://youtu.be/3TmK2Z_956c', 'https://blackneondistrict.bandcamp.com/releases https://www.youtube.com/channel/UCGr9Oaz2OzPz9YaNOBOsi3A ', 139),
(140, NULL, 'https://youtu.be/uJlp5yIshr0 https://youtu.be/sVJQEmlFxBs', 'https://disconnectedmetal.bandcamp.com https://www.youtube.com/user/DisconnectedMetal Apathia Records', 140),
(141, NULL, 'https://www.youtube.com/watch?v=Kl87F2gjQt4 ', ' https://www.youtube.com/channel/UCRosGRf6Vu1oQRRFkJqflzw ', 141),
(142, NULL, 'https://youtu.be/zzvx03Fz4lY https://youtu.be/o6QhDbFDOuQ', 'https://amzera.bandcamp.com https://www.youtube.com/channel/UCW1idFZWtV-M_9i-8LDX-p Autoprod', 142),
(143, NULL, 'https://youtu.be/XtzywI2_938 https://youtu.be/jcZXDH8ZTSM', ' ttps://www.youtube.com/channel/UCBrqjWJIqY78ifPxRhjCaAQ Send The Woohd Music et Season of Mist', 143),
(144, NULL, 'https://www.youtube.com/wtch?v=PKuOIeSUNCk ttps://youtu.be/Iu7PIXJ9qWQ', ' https://www.youtube.com/channel/UCVnmylR0a0rST_4NXge2-ig VERYCORDS / MIGHTY MUSIC / SPIRITUAL BEAST', 144),
(145, NULL, 'https://www.youtube.com/watch?v=tNHoeopNqsE&t=9s https://youtu.be/yloBUAcG0Wk', 'https://bellator.bandcamp.co https://www.youtube.com/channel/UC4MRcjefryw ', 145),
(146, NULL, 'https://www.facebook.com/STRIVERSBAND/videos/1367543000016387 ', 'https://strivers.bandcamp.com/releases  WARMAUDIO DECINES', 146),
(147, NULL, 'https://www.youtube.com/watch?v=T3zCRlIV0OE&feature=youtu.b https://youtu.be/HrjN8mXPrus', 'https://sonicwinter.bandcamp.com ttps://www.youtube.com/channel/UCxiZjtqIqREzfWm5tYEx1gw MAJOR ARCANA RECORDS', 147),
(148, NULL, 'https://youtu.be/uMYFoExfg- https://youtu.be/iYS-6WHW0UE', 'https://voightkampff.bandcamp.com/album/more-human-than-huma https://www.youtube.com/channel/UCJrpHGaWBqzO-bVRyW7Bgyw Sliptrick Records', 148),
(149, NULL, 'https://youtu.be/Yu9sx8OekQM https://youtu.be/fwhh-dyPzEE', 'https://www.spirit-of-metal.com/fr/band/Scrotum_(FRA)  Great Dane Records', 149),
(150, NULL, 'https://youtu.be/HxVu9ecfYPA?list=OLAK5uy_lBPHhlg1lhAkIEKx11vxLXFZQfcrSGYMg https://www.youtube.com/watch?v=nzQ_1PmFi44', '  ', 150),
(151, NULL, 'ttps://yoI157utu.be/pV4iqcU988Q https://youtu.be/TGsFoMhH-3s', 'http://www.bornagainmetalband.co https://www.youtube.com/channel/UC-DZAG157fDUHdog1rhCCMO2qkA ', 151),
(152, NULL, 'https://youtu.be/UOe4jH9MVis https://youtu.be/Cw6BdXtmsXs', ' ttps://www.youtube.com/channel/UCw8Mdxu_u_ysqYU7VvYzNsA ', 152),
(153, NULL, 'https://youtu.be/IJkVIrNxWo8 https://youtu.be/GcqvhEc9Asc', ' https://www.youtube.com/channel/UCjRM6Vs-Ti0dvpkFGnTwHDQ ', 153),
(154, NULL, 'https://youtu.be/w4PvgQO5YdU https://youtu.be/oP3qfNa-KqU', ' https://www.youtube.com/channel/UCcBXdzKWKdcGQZqsa8C0FGw ', 154),
(155, NULL, 'https://youtu.be/hdNEhdXEQg ', ' https://www.youtube.com/channel/UCmwee_3x-S7NpfoejXFgaCQ MUSIC VALENTIN', 155),
(156, NULL, 'https://youtu.be/PV5VzP5crQ8 https://youtu.be/LHgq2nZmOxc', ' https://www.youtube.com/channel/UC2uTqosvxybO0cMvozqJVew ', 156),
(157, NULL, 'ttps://youtu.be/B7lh1pu9kK8 ttps://youtu.be/WP51fzK4OV0', 'https://twitter.com/arteryfrance https://www.youtube.com/user/16thierry16 ', 157),
(158, NULL, 'https://youtu.be/RNjdi_1_ibc https://youtu.be/moG1W0iLC04', ' ttps://www.youtube.com/channel/UCC7CMfgPtV0FttwFaAboDww ', 158),
(159, NULL, ' ', '  ', 135),
(160, NULL, 'https://youtu.be/uMDIaR2b46U ', 'https://oestre.bandcamp.com/ https://www.youtube.com/channel/UCUddwtecm4fRYcatcXI-Lxg ', 160),
(161, NULL, 'https://youtu.be/LTJIYttxBZY https://youtu.be/oSOxdgNKZ0s', 'https://duskofdelusion.bandcamp.com/releases https://www.youtube.com/channel/UC-ktc1XzCRXlAquGsBFr6nQ Fantaizic', 161),
(162, NULL, 'https://youtu.be/neND497Cb70 ', 'https://moonprototype.bandcamp.com https://www.youtube.com/channel/UCYM7oEPVrL_iK89FFrHnfuA ', 162),
(163, NULL, 'https://www.youtube.com/watch?v=z6Q5JHGaU5A&feature=youtu.be https://youtu.be/km5ta8OdxjA', 'http://www.lofofora.com https://www.youtube.com/user/lofoforaofficiel At(h)ome', 163),
(164, NULL, 'https://youtu.be/N2u0u66MbVI https://youtu.be/_FZuoNObddE', 'https://radiumvalley.bandcamp.com/album/mutagenesis-01 https://www.youtube.com/channel/UC2FbJbIuxdsW9vywpUgaTNQ Dooweet et Season Of Mist', 164),
(165, NULL, 'https://www.youtube.com/watch?v=GY9nC6tISwY https://youtu.be/Sn_oeD5OFaA', 'https://waysofficiel.bandcamp.com/releases https://www.youtube.com/channel/UC4-c9Yfoh4TkHI7YW5oSy_g ', 165),
(166, NULL, 'https://youtu.be/TC3IofFXbSc https://youtu.be/25FH1duQ_00', ' https://www.youtube.com/channel/UClTrFgft1RSsJgg1YUBuDKA ', 166),
(167, NULL, 'https://youtu.be/p3l8A_i_pK0 https://youtu.be/8iPD-85zoH4', 'http://shaarghot.bigcartel.com https://www.youtube.com/channel/UCoNxJTk1tc12iN2ADTy7ZdQ ', 167),
(168, NULL, 'https://youtu.be/-50Bjeu8RC4 https://youtu.be/e2OQa7xf1yQ', 'https://www.initialdatamusic.com https://www.youtube.com/channel/UCf5RbeJ7rp5QSN4l356HHJQ ', 168),
(169, NULL, 'https://youtu.be/pmdHjbvHkBc https://youtu.be/NC_sGD4lIY8', 'http://instagram.com/wildmightyfreaks https://www.youtube.com/channel/UCfytbrC2xNh3NNkTUXb-MVA Indépendant', 169),
(170, NULL, 'https://youtu.be/i8sV9ziiK-Q https://youtu.be/-KQlMg0bFHw', 'http://smarturl.it/SHCplanB https://www.youtube.com/channel/UCnhQLlMDfg8BgJJEqWuNGYw darkTunes Music Group (world wide)', 170),
(171, NULL, 'https://youtu.be/Nogu09E1WJE https://youtu.be/HZr0FPNR5j0', 'https://soundcloud.com/monsutaband https://www.youtube.com/channel/UC-bC4Da5AJ95qyeCRGIoKBg ', 171),
(172, NULL, 'https://youtu.be/p6uRIfs0JOk?list=PLyseo58Sy9AyGYQzCpCobkK-Ol4Q7mj9j https://youtu.be/p6uRIfs0JOk?list=RDp6uRIfs0JOk', 'https://open.spotify.com/album/0UHnWtRu6EFUUm31UjCaLk https://www.youtube.com/watch?v=p6uRIfs0JOk&list=PLyseo58Sy9AyGYQzCpCobkK-Ol4Q7mj9j VERYCORDS', 172),
(173, NULL, ' ', '  ', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum_Album`),
  ADD KEY `FK_Album_idStyleSecondaire_StyleSecondaire` (`idStyleSecondaire_StyleSecondaire`),
  ADD KEY `FK_Album_idGroupe_Groupe` (`idGroupe_Groupe`),
  ADD KEY `FK_Album_idDepartement_Departement` (`idDepartement_Departement`);

--
-- Index pour la table `a_voté_pour`
--
ALTER TABLE `a_voté_pour`
  ADD PRIMARY KEY (`idAlbum_Album`,`idMembre_membre`),
  ADD KEY `FK_a_voté_pour_idMembre_membre` (`idMembre_membre`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`idDepartement_Departement`),
  ADD KEY `FK_Departement_idRegion_Region` (`idRegion_Region`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`idGroupe_Groupe`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`idMembre_membre`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`idRegion_Region`);

--
-- Index pour la table `styleprincipal`
--
ALTER TABLE `styleprincipal`
  ADD PRIMARY KEY (`idStylePrincipal_StylePrincipal`);

--
-- Index pour la table `stylesecondaire`
--
ALTER TABLE `stylesecondaire`
  ADD PRIMARY KEY (`idStyleSecondaire_StyleSecondaire`),
  ADD KEY `FK_StyleSecondaire_idStylePrincipal_StylePrincipal` (`idStylePrincipal_StylePrincipal`);

--
-- Index pour la table `titre`
--
ALTER TABLE `titre`
  ADD PRIMARY KEY (`idTitre_Titre`),
  ADD KEY `FK_Titre_idAlbum_Album` (`idAlbum_Album`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `idAlbum_Album` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT pour la table `a_voté_pour`
--
ALTER TABLE `a_voté_pour`
  MODIFY `idAlbum_Album` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `idDepartement_Departement` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `idGroupe_Groupe` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `idMembre_membre` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `idRegion_Region` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `styleprincipal`
--
ALTER TABLE `styleprincipal`
  MODIFY `idStylePrincipal_StylePrincipal` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `stylesecondaire`
--
ALTER TABLE `stylesecondaire`
  MODIFY `idStyleSecondaire_StyleSecondaire` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT pour la table `titre`
--
ALTER TABLE `titre`
  MODIFY `idTitre_Titre` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `FK_Album_idDepartement_Departement` FOREIGN KEY (`idDepartement_Departement`) REFERENCES `departement` (`idDepartement_Departement`),
  ADD CONSTRAINT `FK_Album_idGroupe_Groupe` FOREIGN KEY (`idGroupe_Groupe`) REFERENCES `groupe` (`idGroupe_Groupe`),
  ADD CONSTRAINT `FK_Album_idStyleSecondaire_StyleSecondaire` FOREIGN KEY (`idStyleSecondaire_StyleSecondaire`) REFERENCES `stylesecondaire` (`idStyleSecondaire_StyleSecondaire`);

--
-- Contraintes pour la table `a_voté_pour`
--
ALTER TABLE `a_voté_pour`
  ADD CONSTRAINT `FK_a_voté_pour_idAlbum_Album` FOREIGN KEY (`idAlbum_Album`) REFERENCES `album` (`idAlbum_Album`),
  ADD CONSTRAINT `FK_a_voté_pour_idMembre_membre` FOREIGN KEY (`idMembre_membre`) REFERENCES `membre` (`idMembre_membre`);

--
-- Contraintes pour la table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `FK_Departement_idRegion_Region` FOREIGN KEY (`idRegion_Region`) REFERENCES `region` (`idRegion_Region`);

--
-- Contraintes pour la table `stylesecondaire`
--
ALTER TABLE `stylesecondaire`
  ADD CONSTRAINT `FK_StyleSecondaire_idStylePrincipal_StylePrincipal` FOREIGN KEY (`idStylePrincipal_StylePrincipal`) REFERENCES `styleprincipal` (`idStylePrincipal_StylePrincipal`);

--
-- Contraintes pour la table `titre`
--
ALTER TABLE `titre`
  ADD CONSTRAINT `FK_Titre_idAlbum_Album` FOREIGN KEY (`idAlbum_Album`) REFERENCES `album` (`idAlbum_Album`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
