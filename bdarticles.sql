-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : Dim 07 fév. 2021 à 19:10
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `articles`
--

-- --------------------------------------------------------

--
-- Structure de la table `internaute`
--

CREATE TABLE `internaute` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `internaute`
--

INSERT INTO `internaute` (`nom`, `prenom`, `email`) VALUES
('Mohamadou', 'Abdoul-Bagui', 'mhdabdel151@gmail.com'),
('Yaya', 'Kari', 'ykari@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `resume` text NOT NULL,
  `contenu` text NOT NULL,
  `image_news` varchar(50) NOT NULL,
  `date_creation` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `news`
--

INSERT INTO `news` (`id`, `titre`, `resume`, `contenu`, `image_news`, `date_creation`) VALUES
(1, 'CHAN 2020 : Cameroun, Burkina Faso, Mali, 3 pour 2 places&hellip; Le programme de dimanche', 'La pression monte d&rsquo;un cran au CHAN 2020 avec le coup d&rsquo;envoi de la 3e et derni&egrave;re journ&eacute;e de la phase de groupes. Au menu ce dimanche, la poule A o&ugrave; le Cameroun, pays-h&ocirc;te, le Mali et le Burkina Faso peuvent tous pr&eacute;tendre &agrave; une place en quart de finale, tandis que le Zimbabwe est d&eacute;j&agrave; &eacute;limin&eacute;.', '&lt;div style=&quot;text-align: justify;&quot;&gt;Apr&egrave;s sa victoire initiale face aux Warriors (1-0), le Cameroun a &eacute;t&eacute; &lt;b&gt;&lt;font color=&quot;#ff6600&quot;&gt;frein&eacute; par le Mali (1-1)&lt;/font&gt;&lt;/b&gt; qui n&rsquo;est pas pass&eacute; loin de lui faire mordre la poussi&egrave;re. Seule la qualification &eacute;tant envisageable, il faudra donc se ressaisir et assurer au moins un point face au Burkina Faso qui a repris confiance en d&eacute;crochant la&lt;b&gt;&lt;font color=&quot;#ff6600&quot;&gt; premi&egrave;re victoire de son histoire&lt;/font&gt;&lt;/b&gt; dans la comp&eacute;tition face au Zimbabwe (3-1).&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Galvanis&eacute;s par le &lt;b&gt;&lt;font color=&quot;#ff6600&quot;&gt;discours mobilisateur &lt;/font&gt;&lt;/b&gt;de la l&eacute;gende Samuel Eto&rsquo;o &agrave; la veille de ce match capital et port&eacute;s par un stade Ahmadou Ahidjo qui sera acquis &agrave; leur cause, les hommes de Martin Ntoungou Mpile devraient en plus pouvoir compter sur le retour de leur capitaine et star Jacques Zoua,&lt;font color=&quot;#ff6600&quot;&gt; &lt;b&gt;forfait face au Mali&lt;/b&gt;&lt;/font&gt;. &laquo;Nous avons notre destin entre nos mains. Un nul suffit c&rsquo;est vrai, mais nous ne pensons qu&rsquo;&agrave; la victoire&raquo;, a lanc&eacute; le vainqueur de la CAN 2017. &laquo;&lt;i&gt;Jouer notre prochain match face au pays h&ocirc;te, ne sera pas facile certes. Nous allons nous battre et jouer notre football pour gagner et se qualifier en quart de finale&lt;/i&gt;&raquo;, a r&eacute;pondu le s&eacute;lectionneur des Etalons A&rsquo;, Zeydou Zerbo.&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;Une formalit&eacute; pour le Mali ?&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Dans l&rsquo;autre rencontre, le Mali peut lui aussi se contenter d&rsquo;un point face au Zimbabwe &agrave; Douala pour valider son billet. Consid&eacute;r&eacute;s comme l&rsquo;un des favoris pour le titre, les Aigles A&rsquo; devront assumer leur statut face &agrave; un adversaire qui joue sans pression, ce qui ne sera pas forc&eacute;ment un avantage.&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;br&gt;&lt;/div&gt;', 'CHAN 2020.jpg', '2021-01-24 20:43:09'),
(3, 'CHAN 2021 au Cameroun : la Guin&eacute;e peut nourrir des regrets', 'Dans un match d&eacute;cisif pour la qualification en quart de finale, le Syli national de Guin&eacute;e et les Chipolopolos de la Zambie se quittent sur un score de parit&eacute; 1-1, ce samedi 23 janvier 2021, lors de la 2&egrave;me journ&eacute;e du groupe D. Mais, les Guin&eacute;ens peuvent nourrir quelques regrets, apr&egrave;s avoir men&eacute; &agrave; la marque jusque dans les derni&egrave;res minutes, avant de se faire rattraper.', '&lt;div style=&quot;text-align: justify;&quot;&gt;Le choc de la 2&egrave;me journ&eacute;e dans le groupe D a tenu toutes ses promesses au stade omnisports de Limb&eacute;, ce samedi. Zambiens et Guin&eacute;ens se sont livr&eacute; une &lt;font color=&quot;#660066&quot;&gt;bataille de titans&lt;/font&gt;, &agrave; l&rsquo;issue de laquelle aucune des deux &eacute;quipes n&rsquo;est sortie victorieuse. Mais, le Syli national peut nourrir des regrets puisqu&rsquo;il tenait son ticket pour les quarts de finale jusqu&rsquo;&agrave; la 87&egrave;me minute, avant l&rsquo;&eacute;galisation du nouvel entrant Spencer Sautu.Au d&eacute;but de la partie, c&rsquo;est la Zambie qui se montre plus dangereuse, en se procurant les premi&egrave;res occasions. D&rsquo;abord &agrave; la troisi&egrave;me minute, sur&lt;font color=&quot;#660000&quot;&gt; coup franc direct&lt;/font&gt;, mais intercept&eacute; par le portier guin&eacute;en, Moussa Camara. La Guin&eacute;e va finalement pouvoir sortir de son dernier retranchement, pour obtenir sa toute premi&egrave;re occasion &agrave; la 11&egrave;me minute, mais &lt;font color=&quot;#006633&quot;&gt;&lt;b&gt;Yakhouba Gnagna Barry&lt;/b&gt;&lt;/font&gt; n&rsquo;a pas eu la m&ecirc;me r&eacute;ussite que contre la Namibie. C&rsquo;&eacute;tait donc un score nul et vierge de 0-0 &agrave; la mi-temps.&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Au retour des vestiaires, les Zambiens tentent d&rsquo;autres incursions dans la d&eacute;fense guin&eacute;ennes, mais sans succ&egrave;s. Entr&eacute; apr&egrave;s la pause, Victor Kantabadouno parvient &agrave; ouvrir le score en faveur de la Guin&eacute;e (58&rsquo;). Les hommes de &lt;b&gt;&lt;font color=&quot;#ff6633&quot;&gt;Kanfory Lapp&eacute; Bangoura&lt;/font&gt;&lt;/b&gt; pensaient avoir fait le plus difficile, mais les Chipolopolos vont finalement revenir &agrave; la marque, &agrave; trois minutes de la fin du temps r&eacute;glementaire (87&rsquo;). Les deux &eacute;quipes se quittent alors sur le score de parit&eacute; de 1-1.&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;La Guin&eacute;e reste leader du groupe D avec 4 points+3, devant la Zambie (2&egrave;me, 4 pts+2).&amp;nbsp;&lt;/div&gt;', 'Zambie.jpg', '2021-01-24 20:59:07'),
(2, 'CHAN 2020 &ndash; Cameroun : la causerie de patron d&rsquo;Eto&rsquo;o', 'Pays-h&ocirc;te du CHAN 2020, le Cameroun a besoin d&rsquo;un point face au Burkina Faso ce dimanche (20h) pour assurer sa qualification en quart de finale. A la veille de ce match capital, les Lions Indomptables A&rsquo; ont re&ccedil;u la visite de leur glorieux a&icirc;n&eacute;, Samuel Eto&rsquo;o, venu leur prodiguer ses conseils samedi lors de l&rsquo;entra&icirc;nement de veille de match.', '&lt;div style=&quot;text-align: justify;&quot;&gt;&laquo;&lt;i&gt;Nous allons passer, c&rsquo;est la seule chose que vous devez avoir en t&ecirc;te. Demain (aujourd&rsquo;hui) &agrave; 20h, on passe. Une seule mission : &lt;font color=&quot;#cc0000&quot;&gt;on passe !&lt;/font&gt;&raquo;, &lt;/i&gt;a insist&eacute; la l&eacute;gende du FC Barcelone devant le groupe&lt;i&gt;. &laquo;Nous, on a la pression parce que nous sommes dans les tribunes, mais vous n&rsquo;avez pas de pression parce que vous &ecirc;tes l&agrave;, parce que vous jouez, &ccedil;a d&eacute;pend de vos jambes, moi je l&rsquo;ai car je suis dans les tribunes, je dois crier. (&hellip;) C&rsquo;est la seule chose que vous avez &agrave; faire demain, servir votre pays et profiter de ce moment car il ne va pas revenir. Demain, on n&rsquo;a pas &agrave; r&eacute;fl&eacute;chir, on a une seule mission : passer. &lt;font color=&quot;#006600&quot;&gt;27 millions de Camerounais&lt;/font&gt; seront contents&lt;/i&gt;.&raquo;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Un discours de patron qui devrait galvaniser la troupe de Martin Ntoungou Mpile !&lt;/div&gt;', 'Etoo.jpg', '2021-01-24 20:52:52'),
(4, 'LA 1ERE USINE D\'ASSEMBLAGE D\'EQUIPEMENTS ET DE MATERIEL DE GENIE CIVIL A LA CEMAC', 'L\'inauguration de cette unit&eacute; d\'assemblage des &eacute;quipements et mat&eacute;riels du g&eacute;nie civil, a eu lieu le samedi 23 janvier 2021, sous le pr&eacute;sidium du ministre camerounais des Travaux publics ( Mintp ), Emmanuel Nganou Djoumessi. Ce dernier repr&eacute;sentait alors le chef de l\'&Eacute;tat Paul Biya.', '&lt;div style=&quot;text-align: justify;&quot;&gt;La c&eacute;r&eacute;monie &eacute;tait belle, riche en sons et couleurs. Membres du gouvernement, autorit&eacute;s administratives, autorit&eacute;s traditionnelles, op&eacute;rateurs &eacute;conomiques, parlementaires y &eacute;taient. L\'usine d\'assemblage de mat&eacute;riels et &eacute;quipements du g&eacute;nie civil de Tractafri&amp;nbsp; s\'&eacute;tend sur trois hectares, sur la zone industrialo- portuaire du port autonome de &lt;font color=&quot;#660000&quot;&gt;&lt;b&gt;Kribi&lt;/b&gt;&lt;/font&gt;. Cette usine est la toute premi&egrave;re de la Communaut&eacute; &eacute;conomique et mon&eacute;taire d\'Afrique centrale ( Cemac). Elle devra donc approvisionner et le Cameroun, et les autres pays de la sous- r&eacute;gion &lt;b&gt;&lt;font color=&quot;#006600&quot;&gt;(Tchad, Guin&eacute;e- &Eacute;quatoriale, Gabon, Congo et R&eacute;publique Centrafricaine)&lt;/font&gt;&lt;/b&gt;, en mat&eacute;riels et &eacute;quipements de g&eacute;nie civil. Selon les responsables de Tractafric, l\'usine produira pour un d&eacute;but, 250 machines par an, avant d\'accro&icirc;tre sa production en fonction de la m&eacute;t&eacute;o du march&eacute;. L\'usine d\'assemblage de Tractafric dans la zone industrialo- portuaire de Kribi, rend les co&ucirc;ts des engins moins on&eacute;reux,&amp;nbsp; plus comp&eacute;titifs, et va donc certainement stimuler l\'entrepreneuriat du g&eacute;nie civil, du&amp;nbsp; b&acirc;timent,&amp;nbsp; des travaux publics et de&amp;nbsp; l\'agriculture industrielle, dans la sous-r&eacute;gion Afrique centrale. &quot; En choisissant d\'impl&eacute;menter cette entit&eacute; industrielle &agrave; Kribi, au c&oelig;ur du&amp;nbsp; complexe industrialo- portuaire &eacute;ponyme, vous contribuez &agrave; la r&eacute;alisation de la vision d\'un homme, &lt;b&gt;&lt;font color=&quot;#ff6600&quot;&gt;Son Excellence Paul Biya&lt;/font&gt;&lt;/b&gt;, de la communaut&eacute; des affaires et du peuple camerounais&quot;, dira Emmanuel Nganou Djoumessi le Mintp, dans son adresse inaugurale. Et de rench&eacute;rir qu\'il s\'agit&amp;nbsp; &quot; Des &eacute;quipements de g&eacute;nie civil Made in Cameroun, &agrave; des prix comp&eacute;titifs, c\'est un choix pertinent ; le march&eacute; existe; il vous est garanti avec les communes, les r&eacute;gions et bon nombre d\'op&eacute;rateurs institutionnels ou priv&eacute;s, d&egrave;s lors que vous concourez &agrave; la baisse des facteurs de production &eacute;conomique&quot;, non sans rassurer le top management de Tractafric, du soutien de &lt;b&gt;&lt;font color=&quot;#ff6600&quot;&gt;Paul Biya&lt;/font&gt;&lt;/b&gt;&lt;/div&gt;', 'Tractafriq.jpg', '2021-01-24 21:07:14'),
(5, 'CHAN 2021 au Cameroun : le Maroc pour se signaler d&rsquo;entr&eacute;e', 'Le Maroc, tenant du titre, fera son entr&eacute;e face au Togo, ce lundi (16h00 GMT), pour le compte de la 1&egrave;re journ&eacute;e du groupe C de cette 6&egrave;me &eacute;dition du Championnat d&rsquo;Afrique des Nations, organis&eacute;, du 16 janvier au 7 f&eacute;vrier, au Cameroun. Les Lions locaux de l&rsquo;Atlas, qui visent &agrave; nouveau la couronne continentale, esp&egrave;rent r&eacute;ussir leur entr&eacute;e dans cette comp&eacute;tition.', '&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size: 18px; background-color: rgb(255, 255, 255);&quot;&gt;&lt;font style=&quot;&quot; color=&quot;#222222&quot;&gt;Grandissime favori pour sa propre succession, &lt;/font&gt;&lt;b style=&quot;&quot;&gt;&lt;font color=&quot;#990000&quot;&gt;le Maroc &lt;/font&gt;&lt;/b&gt;&lt;font style=&quot;&quot; color=&quot;#222222&quot;&gt;va affronter&lt;/font&gt;&lt;b style=&quot;&quot;&gt;&lt;font color=&quot;#003300&quot;&gt; le Togo&lt;/font&gt;&lt;/b&gt;&lt;font style=&quot;&quot; color=&quot;#222222&quot;&gt;, ce lundi (16h00 GMT), pour le compte de la 1&egrave;re journ&eacute;e du groupe C de cette 6&egrave;me &eacute;dition du Championnat d&rsquo;Afrique des Nations, &lt;/font&gt;&lt;b style=&quot;&quot;&gt;&lt;font color=&quot;#ff9900&quot;&gt;au stade de la R&eacute;unification &agrave; Douala&lt;/font&gt;&lt;/b&gt;&lt;font style=&quot;&quot; color=&quot;#222222&quot;&gt;. Les tenants du titre s&rsquo;appuieront sur une ossature assez proche de la formation qui avait survol&eacute; le CHAN 2018 disput&eacute; sur ses terres. Ainsi, les trois buteurs de la finale contre le Nigeria (4-0) sont pr&eacute;sents. &lt;/font&gt;&lt;b style=&quot;color: rgb(34, 34, 34);&quot;&gt;Zakaria Hadraf, Walid El Karti et Ayoub El Kaabi.&lt;/b&gt;&lt;font style=&quot;&quot; color=&quot;#222222&quot;&gt; Ce dernier avait termin&eacute; meilleur buteur de la pr&eacute;c&eacute;dente &eacute;dition avec 9 r&eacute;alisations, &lt;/font&gt;&lt;b style=&quot;&quot;&gt;&lt;font style=&quot;&quot; color=&quot;#ff0099&quot;&gt;un record...&lt;/font&gt;&lt;/b&gt;&lt;/span&gt;&lt;/div&gt;', 'Atlas.jpg', '2021-01-24 21:11:21'),
(6, 'CHAN-2020 : le Maroc dompte le Cameroun et rejoint le Mali en finale', 'Sans trembler, le Maroc a remport&eacute; 4 &agrave; 0 son duel au sommet face au Cameroun, mercredi en demi-finale du Championnat d\'Afrique des Nations (CHAN). Un doubl&eacute; de Rahimi et des buts de Bouftini et Bemammer ont offert aux Lions de l\'Atlas une place en finale face au Mali.', '&lt;p style=&quot;text-align: justify; margin-bottom: 28px; border: none; line-height: 1.5; font-family: Roboto, Arial, sans-serif;&quot;&gt;&lt;b style=&quot;border: none; color: rgb(0, 167, 227); outline: none;&quot;&gt;&lt;a target=&quot;_self&quot; href=&quot;https://www.france24.com/fr/sports/20210203-chan-2020-un-derby-ouest-africain-et-un-choc-entre-deux-poids-lourds-en-demi-finales&quot; style=&quot;border: none; color: rgb(0, 167, 227); outline: none;&quot;&gt;Tenant du titre contre pays-h&ocirc;te&lt;/a&gt;&lt;/b&gt;. Le duel de Lions entre les deux favoris de la comp&eacute;tition a tenu ses promesses, mercredi 3&amp;nbsp;f&eacute;vrier, en demi-finale du CHAN-2020. M&ecirc;me si, &agrave; la fin, le Maroc s\'impose largement 4 &agrave; 0 face au Cameroun gr&acirc;ce &agrave; des buts sign&eacute;s Bouftini, Rahimi et&amp;nbsp;Bemammer.&lt;/p&gt;&lt;p style=&quot;text-align: justify; margin-bottom: 28px; border: none; line-height: 1.5; font-family: Roboto, Arial, sans-serif;&quot;&gt;&lt;span style=&quot;font-family: Roboto, Arial, sans-serif; font-size: 14px;&quot;&gt;Le match a d&eacute;but&eacute; sans round d\'observation. Le&lt;/span&gt;&lt;b style=&quot;font-size: 14px;&quot;&gt;&amp;nbsp;&lt;a target=&quot;_self&quot; href=&quot;https://www.france24.com/fr/sports/20210130-chan-2020-le-cameroun-et-le-mali-se-qualifient-pour-les-demi-finales&quot; style=&quot;border: none; color: rgb(0, 167, 227); outline: none;&quot;&gt;Cameroun&lt;/a&gt;&amp;nbsp;&lt;/b&gt;&lt;span style=&quot;font-family: Roboto, Arial, sans-serif; font-size: 14px;&quot;&gt;prend l\'initiative et un coup&amp;nbsp;franc d\'Oukine est repouss&eacute; par la d&eacute;fense marocaine (10&lt;/span&gt;&lt;sup&gt;e&lt;/sup&gt;&lt;span style=&quot;font-family: Roboto, Arial, sans-serif; font-size: 14px;&quot;&gt;). Soufiane Rahimi r&eacute;plique rapidement d\'une frappe &agrave; ras-de-terre, parfaitement bloqu&eacute;e par Kerrido&amp;nbsp;(16&lt;/span&gt;&lt;sup&gt;e&lt;/sup&gt;&lt;span style=&quot;font-family: Roboto, Arial, sans-serif; font-size: 14px;&quot;&gt;).&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;text-align: justify; margin-bottom: 28px; border: none; line-height: 1.5; font-family: Roboto, Arial, sans-serif;&quot;&gt;Le gardien marocain sauve les siens in extremis quelques minutes plus tard. Le Maroc joue rapidement un coup franc, prenant de court la d&eacute;fense camerounaise. Seul face &agrave; Kerrido, le capitaine des Lions de l\'Atlas Ayoub El Kaabi &eacute;choue &agrave; concr&eacute;tiser (18&lt;sup&gt;e&lt;/sup&gt;).&lt;/p&gt;', 'mrc.jpg', '2021-02-07 18:00:29'),
(8, 'CHAN 2020 : Mali-Maroc, la finale des extr&ecirc;mes', 'La finale du CHAN 2020 oppose ce dimanche le Maroc, tenant du titre &agrave; la redoutable puissance de feu, &agrave; l&rsquo;outsider, le Mali, qui brille par sa solidit&eacute; d&eacute;fensive.', '&lt;div style=&quot;text-align: justify;&quot;&gt;Tenant du titre, &lt;b&gt;&lt;font color=&quot;#ff0033&quot;&gt;le Maroc &lt;/font&gt;&lt;/b&gt;s&rsquo;avance en grand favori de la finale du CHAN 2020 qui l&rsquo;opposera ce dimanche au &lt;b&gt;&lt;font color=&quot;#ffcc00&quot;&gt;Mali &lt;/font&gt;&lt;/b&gt;au Stade Ahmadou Ahidjo de Yaound&eacute; (coup d&rsquo;envoi &agrave; 19h en temps universel, soit 20h en France).&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Apr&egrave;s avoir pli&eacute; l&rsquo;affaire en quelques minutes contre la Zambie (3-1) en quart de finale puis avoir sorti le pays-h&ocirc;te camerounais sans m&eacute;nagement en demi-finales (4-0), les hommes d&rsquo;Houcine Ammouta n&rsquo;ont plus qu&rsquo;une seule aspiration : devenir les premiers dans l&rsquo;histoire &agrave; soulever le CHAN sur deux &eacute;ditions cons&eacute;cutives, et rejoindre ainsi la RD Congo au palmar&egrave;s des nations les plus titr&eacute;es dans la comp&eacute;tition avec 2 sacres.&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;br&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;Pour y parvenir, les &lt;font color=&quot;#ff0033&quot;&gt;&lt;b&gt;Lions de l&rsquo;Atlas&lt;/b&gt; &lt;/font&gt;locaux s&rsquo;appuieront sur leur attaque de feu avec 13 buts inscrits depuis le d&eacute;but du tournoi, dont 5 pour le seul &lt;b&gt;&lt;font color=&quot;#669900&quot;&gt;Soufiane Rahimi,&lt;/font&gt;&lt;/b&gt; actuel meilleur buteur et probablement meilleur joueur de cette &eacute;dition. Mais les Marocains vont &lt;b style=&quot;&quot;&gt;&lt;font color=&quot;#ffffff&quot; style=&quot;background-color: rgb(204, 153, 51);&quot;&gt;se heurter &agrave; un mur.&lt;/font&gt;&lt;/b&gt;&lt;/div&gt;', 'finale.jpg', '2021-02-07 18:46:07');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `internaute`
--
ALTER TABLE `internaute`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
