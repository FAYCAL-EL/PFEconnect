-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 jan. 2022 à 16:32
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionpfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `prenom` varchar(100) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `id_enseignant` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`prenom`, `nom`, `address`, `password`, `photo`, `id_enseignant`) VALUES
('Ibrahim', 'BOUMAZZOU', 'ibrahim.boumazzou@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 1),
('Moulay Othman', 'ABOUTAFAIL', 'moulayothman.aboutafail@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 2),
('Nabil', 'HMINA', 'nabil.hmina@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 3),
('Hassan', 'MHARZI', 'h.mharzi@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 4),
('Driss', 'GRETETE', 'driss.gretete@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 5),
('Mostafa', 'MASLOUHI', 'mostafa.maslouhi@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 6),
('Abdellah', 'ABOUABDELLAH', 'abdellah.abouabdellah@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 7),
('Moulay Taib', 'BELGHITI', 'moulaytaib.belghiti@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 8),
('Habiba', 'CHAOUI', 'habiba.chaoui@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 9),
('Abdelmajid', 'ELOUADI', 'abdelmajid.elouadi@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 10),
('Norelislam', 'EL HAMI', 'norelislam.elhami@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 11),
('Youssef', 'BENTALEB', 'youssef.bentaleb@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 12),
('Khalid', 'CHOUGDALI', 'khalid.chougdali@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 13),
('Samir', 'BELFKIH', 'samir.belfkih@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 14),
('Ilham', 'OUMAIRA', 'ilham.oumaira@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 15),
('Aouatif', 'AMINE', 'aouatif.amine@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 16),
('Anas', 'BOUAYAD', 'anas.bouayad@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 17),
('Younes', 'EL BOUZEKRI EL IDRISSI', 'y.elbouzekri@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 18),
('Ayoub', 'AIT LAHCEN', 'ayoub.aitlahcen@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 19),
('Hanaa', 'HACHIMI', 'hanaa.hachimi@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 20),
('Rachid', 'BANNARI', 'rachid.bannari@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 21),
('Samira', 'MABTOUL', 'samira.mabtoul@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 22),
('Laila', 'EL ABBADI', 'laila.elabbadi@uit.ac.ma', 'AZERTY', 'default_photo.jpg', 23);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(11) NOT NULL,
  `nom_entreprise` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `encadrant` varchar(50) DEFAULT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `numapogee` int(8) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(19) DEFAULT NULL,
  `email` varchar(41) DEFAULT NULL,
  `diplôme` varchar(7) DEFAULT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`numapogee`, `nom`, `prenom`, `email`, `diplôme`, `password`, `photo`) VALUES
(14000130, 'SAHRAOUI DOUKKALI', 'SAAD', 'saad.sahraouidoukkali@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(15006663, 'ZIAT', 'OUSSAMA', 'oussama.ziat@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16000022, 'EL AASSALI', 'IMADEDDINE', 'imadeddine.elaassali@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16000050, 'EL HALABI', 'AYOUB', 'ayoub.elhalabi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16000086, 'ARZIKI', 'ISMAIL', 'ismail.arziki@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16000109, 'AKIL', 'OMAR', 'omar.akil@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16000234, 'ELHADIOUIA', 'LEILA', 'leila.elhadiouia@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16000360, 'AMARIR', 'ISMAIL', 'ismail.amarir@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16003897, 'HANSALA', 'SALMA', 'salma.hansala@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16003987, 'BENGHABRIT', 'MOHAMMED', 'mohammed.benghabrit@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16004718, 'LAMMARI', 'SAFOUANE', 'safouane.lammari@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16004719, 'ZEKRI', 'AMAL', 'amal.zekri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(16004865, 'LAMSAOURI', 'HAMZA', 'hamza.lamsaouri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(16004931, 'TEBAA', 'MOHAMMED SAAD', 'mohammedsaad.tebaa@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17000543, 'LAKTAIBI', 'ANASS', 'anass.laktaibi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17000549, 'GOUMIDI', 'ABDERRAZZAK', 'abderrazzak.goumidi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17000711, 'GLIOULA', 'HIND', 'hind.glioula@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17003110, 'FAIZ', 'HAJAR', 'hajar.faiz@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17003784, 'KERDOUD', 'MOUAD', 'mouad.kerdoud@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17004061, 'SRAISAH', 'OUMAIMA', 'oumaima.sraisah@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004178, 'AZZOUZI', 'ABDELLAH', 'abdellah.azzouzi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17004304, 'ALEM', 'AYOUB', 'ayoub.alem@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004329, 'KANDIL', 'YAHIA', 'yahia.kandil@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004423, 'EL GHARBI', 'DOUAA', 'douaa.elgharbi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004484, 'ALIOUA', 'SALIM', 'salim.alioua@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004527, 'KADIMI', 'HAMZA', 'hamza.kadimi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17004680, 'BENNANI', 'YASSINE', 'yassine.bennani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004777, 'BERRAGRAGUI', 'HASSAN', 'hassan.berragragui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17004960, 'BENAYADA', 'OUSSAMA', 'oussama.benayada@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17004998, 'LAHMAMI', 'AYOUB', 'ayoub.lahmami@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005155, 'LAHRIZI', 'TAHA', 'taha.lahrizi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005162, 'EL BADAOUI', 'OMAR', 'omar.elbadaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005194, 'MOUNTIJ', 'YASSER', 'yasser.mountij@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005215, 'ELKHDADI', 'AHMED', 'ahmed.elkhdadi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005227, 'ERRAZGOUNI', 'SAAD', 'saad.errazgouni@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005242, 'OUADRHIRI IDRISSI AZZOUZI', 'ZAKARIA', 'zakaria.ouadrhiriidrissiazzouzi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005256, 'EL OUARTITI', 'MOHSINE', 'mohsine.elouartiti@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005269, 'ELHARSI', 'HAMZA', 'hamza.elharsi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005414, 'EL FEKAK', 'ISMAIL', 'ismail.elfekak@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005436, 'FAIK', 'ABDELKHALEK', 'abdelkhalek.faik@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005468, 'SIDATE', 'EL MAHDI', 'elmahdi.sidate@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005529, 'TABCHI', 'ISSAM', 'issam.tabchi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005537, 'ZEAIKOR', 'YOUSSEF', 'youssef.zeaikor@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005624, 'HMADE', 'ABDELLAH', 'abdellah.hmade@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005686, 'HILIA', 'ANAS', 'anas.hilia@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005721, 'BENKIRANE', 'SOUKAINA', 'soukaina.benkirane@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005778, 'BAKOUR', 'KAWTAR', 'kawtar.bakour@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005812, 'BENADDI', 'OUAFAA', 'ouafaa.benaddi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005819, 'BENSAMDI', 'IMANE', 'imane.bensamdi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17005831, 'JABAR', 'YOUNESS', 'youness.jabar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005847, 'JARHNI', 'AMINE', 'amine.jarhni@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005893, 'JEBBAR', 'ABDENNOUR', 'abdennour.jebbar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005934, 'BENKADDOUR', 'ASSMA', 'assma.benkaddour@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17005975, 'BEKKALI', 'KAWTAR', 'kawtar.bekkali@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006134, 'BENTASSIL', 'ZINEB', 'zineb.bentassil@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006149, 'GHAZI', 'NERMINE', 'nermine.ghazi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006198, 'GOUZA', 'SALMA', 'salma.gouza@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006221, 'KRAIA', 'ZINEB', 'zineb.kraia@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006314, 'EL JAAOUANI', 'ZAHRA', 'zahra.eljaaouani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006335, 'EL GHALI', 'RANIA', 'rania.elghali@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006391, 'MRABET', 'SALMA', 'salma.mrabet@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006468, 'EL AAZAOUZI', 'IKRAM', 'ikram.elaazaouzi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006481, 'SAFI', 'OUMAIMA', 'oumaima.safi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006518, 'ES SEBBANI', 'KAWTAR', 'kawtar.essebbani@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006533, 'SAFRAOUI', 'CHAIMAE', 'chaimae.safraoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006537, 'EL KHANFRI', 'HAJAR', 'hajar.elkhanfri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006549, 'FENNIRI', 'JIHAN', 'jihan.fenniri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006550, 'SABER', 'OUMAIMA', 'oumaima.saber@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006654, 'HADIRI', 'SALOUA', 'saloua.hadiri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006687, 'TAYMOULI', 'ICHRAQ', 'ichraq.taymouli@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006694, 'TADGHOUTI', 'NOUHAILA', 'nouhaila.tadghouti@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006732, 'RADI', 'HAJAR', 'hajar.radi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006800, 'JALAL', 'ACHRAF', 'achraf.jalal@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006833, 'SAHLI', 'OMAYMA', 'omayma.sahli@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006848, 'MOULAHID', 'KAWTAR', 'kawtar.moulahid@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006852, 'FRIKICH', 'RANIA', 'rania.frikich@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006870, 'TERFAS', 'CHAIMAE', 'chaimae.terfas@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006903, 'RHAZI', 'YASSINE', 'yassine.rhazi1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006940, 'MOUSTAHIB', 'OMAR', 'omar.moustahib@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006953, 'R GUIBI', 'CHAIMAA', 'chaimaa.rguibi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006955, 'BOUGATTAYA', 'SOUKAINA', 'soukaina.bougattaya@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006965, 'MAATI', 'KENZA', 'kenza.maati@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006970, 'MELHAOUI', 'RIHAB', 'rihab.melhaoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17006980, 'MOSSALLI', 'WIAM', 'wiam.mossalli@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17006986, 'ELAJAJE', 'MALAK', 'malak.elajaje@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007004, 'OUBELKACEM', 'MANAL', 'manal.oubelkacem@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007007, 'BOUDAD', 'LATIFA', 'latifa.boudad@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007017, 'IFKIRNE', 'KENZA', 'kenza.ifkirne@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17007030, 'NOUMA', 'IBTISSAM', 'ibtissam.nouma@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17007548, 'ZAOUI', 'MANAL', 'manal.zaoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007567, 'BOUTRIG', 'OUMNIA', 'oumnia.boutrig@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007577, 'ABOULHASSANE', 'NIAMA', 'niama.aboulhassane@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007639, 'EL MESBAHI', 'AYA', 'aya.elmesbahi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17007831, 'EL MOUHTARIM', 'AYMANE', 'aymane.elmouhtarim@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17008374, 'BARAKAT', 'ZINEB NOHAILA', 'zinebnohaila.barakat@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17008695, 'EBOU EL HASSANI', 'AHMED MAHMOUD', 'ahmedmahmoud.ebouelhassani@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17008796, 'NDIAYE', 'DIOR', 'dior.ndiaye@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(17009577, 'ABOU', 'MAWUFEMO JOSUE', 'mawufemo.abou@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(17010439, 'LOGMO ADMEO', 'GOLVEN CALIN', 'golvencalin.logmoadmeo@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000008, 'EL HAOUARI', 'ATIKA', 'ATIKA.ELHAOUARI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000024, 'DDALLA', 'YOUSRA', 'YOUSRA.DDALLA@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000025, 'ZIYANE', 'NOUHAILA', 'nouhaila.ziyane@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000029, 'LAHLOU', 'HAJAR', 'hajar.lahlou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000037, 'EL HANI', 'MOHAMED ACHRAF', 'mohamedachraf.elhani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000041, 'BENZIANE', 'DOUNIA', 'dounia.benziane@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000045, 'AIT MANSOUR', 'ZINEB', 'ZINEB.AITMANSOUR@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000047, 'EL BAKKOURI', 'IMANE', 'IMANE.ELBAKKOURI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000052, 'TIGRIOUI', 'RHITA', 'rhita.tigrioui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000054, 'TLEMCANI', 'CHAYMA', 'CHAYMA.TLEMCANI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000062, 'ELHARTI', 'CHAYMAA', 'chaymaa.elharti@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000081, 'EL AZZAOUI', 'MAROUA', 'MAROUA.ELAZZAOUI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000087, 'ZALLAFI', 'NADA', 'NADA.ZALLAFI@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000091, 'JIRRARI', 'DOHA', 'DOHA.JIRRARI@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000099, 'EL MRHARRAZ', 'SALMA', 'SALMA.ELMRHARRAZ@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000103, 'DAHBI', 'HOUDA', 'dahbi.houda@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000104, 'ELKORRI', 'OUISSAL', 'OUISSAL.ELKORRI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000111, 'ZAHI', 'ABIR', 'abir.zahi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000141, 'OUKASSOU', 'ILHAM', 'ILHAM.OUKASSOU@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000146, 'ALAOUI', 'ABDELLAH', 'ABDELLAH.ALAOUI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000155, 'AQUIL', 'ASMAE', 'asmae.aquil@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000157, 'AOUZAL', 'OUMAIMA', 'oumaima.aouzal@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000158, 'AIT HMADOUCH', 'RANIA', 'RANIA.AITHMADOUCH@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000161, 'OUETTAS', 'INTISSAR', 'INTISSAR.OUETTAS@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000163, 'ELMESSAOUDI', 'KHADIJA', 'KHADIJA.ELMESSAOUDI@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000167, 'EL ATTAOUI', 'MOHAMED', 'mohamed.elattaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000168, 'MEZOIR', 'OUSSAMA', 'oussama.mezoir@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000173, 'ZAHI', 'YOUSSEF', 'YOUSSEF.ZAHI1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000176, 'SARDI', 'IHSSANE', 'IHSSANE.SARDI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000179, 'ZEROUAL', 'AIMEN', 'aimen.zeroual@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000183, 'KASSI', 'AYOUB', 'AYOUB.KASSI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000184, 'OUJAA', 'YASSINE', 'yassine.oujaa@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000187, 'EL HAJJI', 'LOUBNA', 'loubna.elhajji@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000190, 'BENSSABAHIA', 'MANAL', 'manal.benssabahia@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000193, 'EL AMRANI', 'MANAL', 'MANAL.ELAMRANI1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000194, 'BENSAID', 'MERYEM', 'MERYEM.BENSAID@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000197, 'NASRI', 'ANAS', 'anas.nasri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000199, 'NAJOUI', 'MOHAMMED', 'mohammed.najoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000203, 'FADILI', 'AYOUB', 'AYOUB.FADILI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000205, 'EL HADY', 'ZAKARIA', 'ZAKARIA.ELHADY@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000212, 'ALLALOU', 'ABDELHAKIM', 'abdelhakim.allalou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18000215, 'EL YOUSFI-ALAOUI', 'MOHAMMED', 'MOHAMMED.ELYOUSFI-ALAOUI@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18000218, 'LAFDALI', 'HAMZA', 'hamza.lafdali@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18002375, 'FRIHAT', 'TAOUFIK', 'taoufik.frihat@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18004591, 'STITOU', 'NIZAR', 'nizar.stitou@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18005018, 'AMAL', 'AYOUB', 'ayoub.amal@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006294, 'EL GARAA', 'AYOUB', 'ayoub.elgaraa@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006305, 'LOUDINI', 'ABDELMALEK', 'abdelmalek.loudini@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006321, 'ABOURRICHE', 'YOUNESS', 'youness.abourriche@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006355, 'BARGACH', 'HAMZA', 'hamza.bargach1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006364, 'BENDEFA', 'AHMED KHALIL', 'ahmedkhalil.bendefa@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006385, 'ED-DARHRI', 'EL HASSAN', 'elhassan.eddarhri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006400, 'ECHTOUKI', 'MOHAMED', 'mohamed.echtouki@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006439, 'EL AMRANI', 'AYMAN', 'ayman.elamrani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006452, 'EL HASSNAOUI', 'AOUS', 'aous.elhassnaoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006457, 'EL MEKKAOUI', 'OMAR', 'omar.elmekkaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006469, 'FETTOUKH', 'ACHRAF', 'achraf.fettoukh@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006624, 'FANNOUCH', 'AYMEN', 'aymen.fannouch@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006665, 'HANYF', 'OTHMANE', 'othmane.hanyf@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006727, 'LAMZALZY', 'ABDELLAH', 'abdellah.lamzalzy@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006772, 'ASSMOUGUE', 'ASMAE', 'asmae.assmougue@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006791, 'AL OUARDI', 'SALMA', 'salma.alouardi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006816, 'MAZOUZI', 'SAAD', 'saad.mazouzi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006817, 'AGNAOU', 'MINA', 'mina.agnaou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18006909, 'BOUTLANE', 'MERYEM', 'meryem.boutlane@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18006997, 'BOUTAIB', 'MOHAMED', 'mohamed.boutaib@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007012, 'BENGELOUNE', 'HIBA', 'hiba.bengeloune@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007055, 'JARJER', 'FATIMA', 'fatima.jarjer@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007070, 'EL MOUJOUDI', 'OUMAIMA', 'oumaima.elmoujoudi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007102, 'EL HAJJI', 'MOUNA', 'mouna.elhajji@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007124, 'EL GUEROUANI', 'MANAL', 'manal.elguerouani1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007150, 'MASROUR', 'OUMAYMA', 'oumayma.masrour@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007157, 'MOUMNI', 'CHAIMAE', 'chaimae.moumni@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007169, 'MOFAKIR', 'NISRINE', 'nisrine.mofakir@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007282, 'FAROUQ', 'SOMIA', 'somia.farouq@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007304, 'HAYTOM', 'IKRAME', 'ikrame.haytom@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007311, 'HASSINA', 'YOUSRA', 'yousra.hassina@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007427, 'ELAITARI', 'SOUKAINA', 'soukaina.elaitari@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007440, 'BELLAALA', 'MOHAMED', 'mohamed.bellaala@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007488, 'ZIZI', 'LINA', 'lina.zizi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007854, 'OURAZZOUQ', 'FATIMA EZZAHRA', 'fatimaezzahra.ourazzouq@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007869, 'OUMAMI', 'MARYAM', 'maryam.oumami@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007916, 'STITOU', 'NARJIS', 'narjis.stitou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007933, 'SMINA', 'NOUHAILA', 'nouhaila.smina@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007936, 'ZOUHRI', 'FARAH', 'farah.zouhri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007937, 'TIBARI', 'ZINEB', 'zineb.tibari@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18007992, 'EL MOUSSAOUI', 'HAIFAE', 'haifae.elmoussaoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18007996, 'ABOUZBIBA', 'WAFAE', 'wafae.abouzbiba@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18008029, 'KHATTABI', 'AMAL', 'amal.khattabi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18008065, 'EL AZHARY', 'SOUKAINA', 'soukaina.elazhary@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18008290, 'SADRAOUI', 'HIBAT ALLAH', 'hibatallah.sadraoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009005, 'EL HAOUARI', 'FAHD', 'fahd.elhaouari@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009006, 'ESSAOUDI', 'FATIMA', 'fatima.essaoudi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009015, 'BERBACH', 'MALIK', 'malik.berbach@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009387, 'GHARBI', 'IHSSANE', 'ihssane.gharbi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009404, 'VALL KHEIR', 'ZEINEBOU', 'zeinebou.vallkheir@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009444, 'LAAMARTI', 'AKRAM', 'akram.laamarti@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009449, 'M KHAITIR CHIEKH', 'MAMINA', 'mamina.mkhaitirchiekh@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009494, 'BENJALLOUL', 'MONTASSIR', 'montassir.benjalloul1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009497, 'AZIZ', 'OUSSAMA', 'oussama.aziz@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009590, 'MARRAKCHI', 'AHMED AYMEN', 'ahmedaymen.marrakchi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009963, 'YAHYAOUI', 'ISMAIL', 'ismail.yahyaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18009966, 'EL HAJJI', 'HASNAA', 'hasnaa.elhajji@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18009968, 'EL GHABI', 'SAFAE', 'safae.elghabi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010142, 'PIBA', 'KOKO JEAN HUGUES', 'kokojeanhugues.piba@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010184, 'TIOTSOP FOGUE', 'ADRIANO', 'adriano.tiotsopfogue@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18010233, 'AIT ABBOU', 'HOUYAME', 'houyame.aitabbou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010332, 'AZZI', 'ALAA-EDDINE', 'alaaeddine.azzi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010337, 'ATARRACHI', 'HALIMA', 'halima.atarrachi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010404, 'ELAZIZI', 'CHAIMAE', 'elazizi.chaimae@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(18010496, 'OUBAHASSOU', 'SANAE', 'oubahassou.sanae@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(18010603, 'ECH-CHOUQI', 'NADA', 'echchouqi.nada@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000006, 'GUENDOULA', 'NOUR-EL HOUDA', 'nour-elhouda.guendoula@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000009, 'SOUKAINI', 'ADIL', 'adil.soukaini@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000010, 'OUKECHI', 'CHAIMAE', 'chaimae.oukechi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000013, 'OHASSAN', 'MOHAMED SAAD', 'mohamedsaad.ohassan@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000015, 'OUSSI', 'YASSINE', 'yassine.oussi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000018, 'DEFAOUI', 'OMAR', 'omar.defaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000030, 'KABBA', 'AYMANE', 'aymane.kabba@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000033, 'FAHIM', 'AHMED', 'ahmed.fahim@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000034, 'EL KAABA', 'MOHAMED AMINE', 'mohamedamine.elkaaba@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000035, 'ZNIBER', 'ALI', 'ali.zniber@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000036, 'OUARDI', 'IKHLASSE', 'ikhlasse.ouardi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000037, 'BENZEKRI', 'ANAS', 'anas.anasbenzekri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000043, 'AGGOUR', 'SARAH', 'sarah.aggour@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000047, 'FENNIRI', 'ABDELJALIL', 'abdeljalil.fenniri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000049, 'BERRAS', 'NAJWA', 'najwa.berras@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000053, 'BENALI', 'MOUAD', 'mouad.benali1@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000056, 'DELLALE', 'SOUKAINA', 'soukaina.dellale@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000058, 'DRIAI', 'IMANE', 'imane.driai@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000061, 'MOUAD', 'NOUHAILA', 'nouhaila.mouad@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000063, 'OUGAAMOU', 'MEHDI', 'mehdi.mehdiougaamou@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000066, 'MKADMI', 'OUMKALTOUM', 'oumkaltoum.mkadmi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000067, 'SAAD', 'OUSSAMA', 'oussama.saad@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000076, 'OUAHI', 'KHAOULA', 'khaoula.ouahi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000077, 'LOUZAOUI', 'SAFAA', 'safaa.louzaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000078, 'SOUINIA', 'KELTOUM', 'keltoum.souinia@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000080, 'GAIZI', 'HABIBA', 'habiba.gaizi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000081, 'SOFIANE', 'CHARAF EDDINE', 'charafeddine.sofiane@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000086, 'TAZI', 'HAMZA', 'hamza.tazi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000088, 'TAIB', 'HICHAM', 'hicham.taib@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000095, 'QANNOUF', 'MUSTAPHA', 'mustapha.qannouf1@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000097, 'KERCHAOUI', 'OMAR', 'omar.kerchaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000098, 'RIFAY', 'WASSIM', 'wassim.rifay@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000099, 'IMANI', 'FADI', 'fadi.imani@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000100, 'BENSAR', 'OUMAIMA', 'oumaima.bensar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000102, 'HMOUDAT', 'OUSSAMA', 'oussama.hmoudat@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000126, 'ETTAIEK', 'LAMYAE', 'lamyae.ettaiek@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000127, 'EL HIRECH', 'GHIZLANE', 'ghizlane.elhirech@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000137, 'LAGHRISSI', 'MOHAMED', 'mohamed.laghrissi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000141, 'ABOUSAADIA', 'ANAS', 'anas.abousaadia@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000145, 'BENOUAHI', 'OMAR', 'omar.benouahi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000147, 'BOUTAHLI', 'BILAL', 'bilal.boutahli@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000151, 'BOUNASSEH', 'ABDESSAMAD', 'abdessamad.bounasseh@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000157, 'EL-OTHMANI', 'YOUSSEF', 'youssef.el-othmani@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000167, 'EL HASSOUNI', 'MERYEM', 'meryem.elhassouni1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000168, 'EL FAKER', 'LAMIAE', 'lamiae.elfaker@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000169, 'EL ABASSI', 'MALAK', 'malak.elabassi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000170, 'EL OUAHHABY', 'CHAIMAE', 'chaimae.elouahhaby@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000177, 'DAIBAZI', 'ASMAE', 'asmae.daibazi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000182, 'LOUADNI', 'CHAIMAA', 'chaimaa.louadni@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000186, 'LAGHDIRI', 'CHAIMAA', 'chaimaa.laghdiri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000188, 'BENDEROUACH', 'KARIMA', 'karima.benderouach@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000191, 'JEBBAR', 'NASSIMA', 'nassima.jebbar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000192, 'IDRI', 'KHAWLA', 'khawla.idri@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000194, 'TOULALI', 'MERYEM', 'meryem.toulali@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000217, 'FRIAIN', 'IMAN', 'iman.friain@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000218, 'FRIAIN', 'OMAYMA', 'omayma.friain@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19000243, 'CHABANA', 'HAMZA', 'hamza.chabana@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19000244, 'BENSALIM', 'YOUSRA', 'yousra.bensalim@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19002414, 'BAHAMMOU', 'TAHA', 'taha.bahammou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19003672, 'ZIRARI', 'MOHAMED', 'mohamed.zirari@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19006950, 'RAFILI', 'SALMA', 'salma.rafili@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19006997, 'MOUSSADIK', 'MEHDI', 'mehdi.moussadik@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19007144, 'OUDADA', 'AYOUB', 'ayoub.oudada@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19007215, 'MOTASSIM', 'AHMED TAHA', 'ahmedtaha.motassim@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19007217, 'ACHAOUI', 'YOUNES', 'younes.achaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19007233, 'EL FEKAK', 'SALMA', 'salma.elfekak@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19007468, 'RAKNI', 'MOHAMED ABDELBASSET', 'mohamedabdelbasset.rakni@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19007523, 'ESSALMANI', 'YASMINE', 'yasmine.essalmani@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19007697, 'MOUSSAFI', 'AYOUB', 'ayoub.moussafi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008604, 'MOUGTAHIDI', 'SALMA', 'salma.mougtahidi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008615, 'LARROUSSI', 'SARA', 'sara.larroussi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008618, 'ZENZOULI', 'IKRAM', 'ikram.zenzouli@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008624, 'AIT OUAKRIM', 'MERYEM', 'meryem.aitouakrim@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008627, 'KOURTAH', 'NADA', 'nada.kourtah@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008634, 'LACHIA', 'SALMA', 'salma.lachia@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008652, 'BENKERROUM', 'MARWA', 'marwa.benkerroum@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008663, 'SAMIR', 'TAHA', 'taha.samir@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008666, 'AHCINE', 'CHAYMAA', 'chaymaa.ahcine@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008672, 'BENASSER', 'HASSAN AYOUB', 'hassanayoub.benasser@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008673, 'OUBENMOH', 'YASSINE', 'yassine.oubenmoh@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008679, 'EL AISSI', 'NOUHAILA', 'nouhaila.elaissi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008684, 'SINAA', 'HAMZA', 'hamza.sinaa@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008695, 'DRIOUICH', 'MOHAMMED', 'mohammed.driouich1@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19008711, 'EL OURRAT', 'FAYCAL', 'faycal.elourrat@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19008915, 'QAFFSSAOUI', 'MAROUANE', 'marouane.qaffssaoui@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19009650, 'BOUOUZM', 'YASSINE', 'yassine.bououzm@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19010041, 'SMINA', 'OUMAIMA', 'oumaima.smina@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19010618, 'BAHAMAD', 'IMANE', 'imane.bahamad@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19010827, 'SAIDNI', 'INASS', 'inass.saidni@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19010867, 'LAZHAR', 'NADA', 'nada.lazhar@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19010961, 'MOUMNI', 'YAHYA', 'yahya.moumni@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19010967, 'BRIBRI', 'HIND', 'hind.bribri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19010973, 'RAIHANI', 'YOUSSRA', 'youssra.raihani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011023, 'BOUHADDOU', 'MARWANE', 'marwane.bouhaddou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011034, 'ATAOUI', 'NIZAR', 'nizar.ataoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011038, 'OUKHRID', 'AMAL', 'amal.oukhrid@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011043, 'NOR', 'NAJLAE', 'najlae.nor@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011053, 'CHIKANDO SINOU', 'EMILIE OLIVE', 'emilieolive.chikandosinou@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011058, 'BARIK', 'HAYTAM', 'haytam.barik@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19011062, 'MERIZAK', 'HOUSSAM', 'houssam.merizak@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19011064, 'EL HAMZAOUI', 'ABDERRAHIM', 'abderrahim.elhamzaoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011072, 'FOUKHAR', 'ILIASS', 'iliass.foukhar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19011086, 'CHEMRIH', 'YASSINE', 'yassine.chemrih@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011102, 'BENJELLOUN', 'HAMZA', 'hamza.benjelloun@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19011104, 'BIROUK', 'NOURA', 'noura.birouk@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011115, 'TIZIT', 'MOUAD', 'mouad.tizit@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011119, 'ENAGRE', 'FATIMA ZAHRA', 'fatimazahra.enagre@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011141, 'MZALI', 'SALMA', 'salma.mzali@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011142, 'BAHNIF', 'ILYAS', 'ilyas.bahnif@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011156, 'AIT EL KOUCH', 'ANASS', 'anass.aitelkouch@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19011200, 'BOUKHSSIBI', 'HIBA', 'hiba.boukhssibi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011252, 'ZOETYANDE', 'NERKIETA NAFISSATOU', 'nerkietanafissatou.zoetyande@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011266, 'ZOUNGRANA YVES ALBAN', 'SOM-BE-WENDE', 'som-be-wende.zoungranayvesalban@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19011462, 'BELHAJ-SOULAMI', 'KENZA', 'kenza.belhaj-soulami@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(19012018, 'JNIHA', 'IMANE', 'imane.jniha@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(19015220, 'DEKPE', 'KOSSI ELOLO BERNARD', 'kossielolobernard.dekpe@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20000307, 'M\'HIN', 'NIMA', 'nima.mhin@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20000844, 'BELHAJ', 'MAJDA', 'majda.belhaj1@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(20000852, 'LBARRAH', 'YAHYA', 'yahya.lbarrah@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20000857, 'CHLAGUE', 'OUMAIMA', 'oumaima.chlague@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(20000861, 'EL MRIHY', 'SOUHAIL', 'souhail.elmrihy@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20005505, 'SAFI', 'EL MEHDI', 'elmehdi.safi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20005536, 'JEMMAL', 'SOUFIANE', 'soufiane.jemmal@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20005731, 'BEKRINE', 'OUSSAMA', 'oussama.bekrine@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20006692, 'BOUAINE', 'OMAR', 'omar.bouaine@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(20006852, 'CHTAIBI', 'FATIMA-EZZAHRAE', 'fatima-ezzahrae.chtaibi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(20010521, 'SAHMI', 'IHSSAN', 'ihssan.sahmi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20011375, 'KHADDAM', 'CHAIMAE', 'chaimae.khaddam@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(20012111, 'ZEROUALI', 'IBTISSAM', 'ibtissam.zerouali@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20012117, 'BOUSSERRHINE', 'ZIYAD', 'ziyad.bousserrhine@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(20013993, 'BAKHIL', 'AISSA', 'aissa.bakhil@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21011657, 'KENBOUCH', 'FATIMA', 'fatima.kenbouch@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21011748, 'SAIDI', 'ZAKARIAE', 'zakariae.saidi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015271, 'EL KHCHINE', 'MOHAMED', 'mohamed.elkhchine1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015519, 'BITI', 'AYMANE', 'aymane.biti@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015770, 'ATIR', 'ZAYNAB', 'zaynab.atir@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015868, 'MEZIANE ZERHOUNI', 'HASSAN', 'hassan.mezianezerhouni@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015880, 'ELOMARI', 'ZAKARIAE', 'zakariae.elomari@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21015881, 'JEBBOUR', 'WIAM', 'wiam.jebbour@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21015883, 'LAATITINE', 'KHADIJA', 'khadija.laatitine@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015885, 'AGHRAZ', 'OUARDA', 'ouarda.aghraz@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21015929, 'HAMMADI', 'MASSINA', 'massina.hammadi@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015938, 'AIT BELAID', 'IKRAM', 'ikram.aitbelaid@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21015951, 'CHEGDANI', 'SARA', 'sara.chegdani@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21017117, 'GHOUMMAID', 'MOHAMMED', 'mohammed.ghoummaid@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017126, 'ADRAOUI', 'ANAS', 'anas.adraoui1@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21017164, 'ABOU EL HAOUL', 'HOUSSAM EDDINE', 'houssameddine.abouelhaoul@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017206, 'BENAIDA', 'ZINEB', 'zineb.benaida@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21017268, 'KAMI', 'YASMINE', 'yasmine.kami@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017281, 'MOUHAOUIR', 'HAMZA', 'hamza.mouhaouir@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017537, 'TAHER', 'IKRAM', 'ikram.taher@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017620, 'JALAL', 'MOHAMED', 'mohamed.jalal1@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017629, 'ELASSRAOUI', 'HOUSSAM', 'houssam.elassraoui@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21017808, 'GHALLOUDI', 'ADAM', 'adam.ghalloudi@uit.ac.ma', 'NDIGEDU', 'AZERTY', 'default_photo.jpg'),
(21017854, 'CHAGRI', 'ANASS', 'anass.chagri@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg'),
(21017855, 'LAZAAR', 'KHAOULA', 'khaoula.lazaar@uit.ac.ma', 'NDIGEIN', 'AZERTY', 'default_photo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id_ficher` int(11) NOT NULL,
  `rapport_initial` varchar(50) DEFAULT NULL,
  `rapport_final` varchar(50) DEFAULT NULL,
  `presentation` varchar(50) DEFAULT NULL,
  `attestation` varchar(50) DEFAULT NULL,
  `fiche_evaluation` varchar(50) DEFAULT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(11) NOT NULL,
  `sujet` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `binome` varchar(50) DEFAULT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `stage_encadre`
--

CREATE TABLE `stage_encadre` (
  `id_etudiant` int(11) NOT NULL,
  `id_enseignant` int(11) NOT NULL,
  `validation` tinyint(1) NOT NULL DEFAULT 0,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE `technologie` (
  `id_technologie` int(11) NOT NULL,
  `id_etudiant` int(8) DEFAULT NULL,
  `technologie` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id_enseignant`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`numapogee`);

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id_ficher`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `stage_encadre`
--
ALTER TABLE `stage_encadre`
  ADD PRIMARY KEY (`id_etudiant`,`id_enseignant`),
  ADD KEY `id_enseignant` (`id_enseignant`);

--
-- Index pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`id_technologie`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id_enseignant` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `id_technologie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `entreprise_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`numapogee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fichier_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`numapogee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `stage_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`numapogee`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `stage_encadre`
--
ALTER TABLE `stage_encadre`
  ADD CONSTRAINT `stage_encadre_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`numapogee`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stage_encadre_ibfk_2` FOREIGN KEY (`id_enseignant`) REFERENCES `enseignant` (`id_enseignant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD CONSTRAINT `technologie_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiant` (`numapogee`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
