-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 juin 2022 à 09:51
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `database`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` varchar(225) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(225) NOT NULL,
  `date_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `texte`, `auteur`, `date_publication`) VALUES
(3, 'How Experts Figure What to Focus On', 'There are many benefits to reading more books, but perhaps my favorite is this: A good book can give you a new way to interpret your past experiences. Whenever you learn a new mental model or idea, it\'s like the “software” in your brain gets updated. Suddenly, you can run all of your old data points through a new program. You can learn new lessons from old moments. As Patrick O\'Shaughnessy says, Reading changes the past.     Of course, this is only true if you internalize and remember insights from the books you read. Knowledge will only compound if it is retained. In other words, what matters is not simply reading more books, but getting more out of each book you read.     Gaining knowledge is not the only reason to read, of course. Reading for pleasure or entertainment can be a wonderful use of time, but this article is about reading to learn. With that in mind, I\'d like to share some of the best reading comprehension strategies I’ve found.\"', 'rania', '2022-07-10'),
(5, 'The Ultimate Productivity Hack is Saying No', 'The ultimate productivity hack is saying no. Not doing something will always be faster than doing it. For example, there is no meeting that goes faster than not having a meeting at all.     This is not to say you should never attend another meeting, but the truth is that we say yes to many things we don\'t actually want to do. There are many meetings held that don\'t need to be held. There is a lot of code written that could be deleted.     How often do people ask you to do something and you just reply, Sure thing. Three days later, you\'re overwhelmed by how much is on your to-do list. We become frustrated by our obligations even though we were the ones who said yes to them in the first place.', 'emna', '2022-06-24'),
(11, 'What is Creativity?', 'fdghjk', 'emna', '2022-06-12'),
(12, 'What is Creativity?', 'The creative process is the act of making new connections between old ideas or recognizing relationships between concepts.    Creative thinking is not about generating something new from a blank slate, but rather about taking what is already present and combining those bits and pieces in a way that has not been done previously.      While being creative isn\'t easy, nearly all great ideas follow a similar creative process.   In 1940, an advertising executive named James Webb Young published a short guide titled, A Technique for Producing Ideas.      Young believed the process of creative connection always occurred in five steps.', 'emna', '2022-06-02'),
(13, 'The Ultimate Productivity Hack is Saying No', 'The ultimate productivity hack is saying no. Not doing something will always be faster than doing it. For example, there is no meeting that goes faster than not having a meeting at all.     This is not to say you should never attend another meeting, but the truth is that we say yes to many things we don\'t actually want to do. There are many meetings held that don\'t need to be held. There is a lot of code written that could be deleted.     How often do people ask you to do something and you just reply, Sure thing. Three days later, you\'re overwhelmed by how much is on your to-do list. We become frustrated by our obligations even though we were the ones who said yes to them in the first place.', 'samar', '2022-05-22');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `texte` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `date_publication` date NOT NULL,
  `article_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `texte`, `auteur`, `date_publication`, `article_id`) VALUES
(18, 'med', 'jonny depp', '2022-06-04', 12),
(19, 'med', 'jonny depp', '2022-06-04', 12),
(20, 'emna', 'leonardo', '2022-06-04', 12),
(21, 'emna', 'leonardo', '2022-06-17', 12),
(22, 'emna', 'emna', '2022-06-04', 12),
(23, 'ilyes', 'ilyes', '2022-06-02', 13),
(24, 'ilyes2', 'ilyes2', '2022-06-08', 13),
(25, 'ilyes2', 'ilyes2', '2022-06-08', 13),
(26, 'emna', 'emna', '2022-06-07', 13),
(27, 'emna', 'emna', '2022-06-07', 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
