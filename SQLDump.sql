-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2024 at 09:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliotek`
--

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `annee_publication` int(11) NOT NULL,
  `isbn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `auteur`, `categorie`, `annee_publication`, `isbn`) VALUES
(1, '1984', 'George Orwell', 'Science-Fiction', 1949, '9780451524935'),
(2, 'Le Meilleur des mondes', 'Aldous Huxley', 'Science-Fiction', 1932, '9780099477464'),
(3, 'Les Misérables', 'Victor Hugo', 'Classique', 1862, '9782070409180'),
(4, 'Le Petit Prince', 'Antoine de Saint-Exupéry', 'Littérature Jeunesse', 1943, '9782070612757'),
(5, 'Harry Potter à l\'école des sorciers', 'J.K. Rowling', 'Fantastique', 1997, '9780747532699'),
(6, 'Le Seigneur des Anneaux', 'J.R.R. Tolkien', 'Fantastique', 1954, '9780261102385'),
(7, 'Don Quichotte', 'Miguel de Cervantes', 'Classique', 1605, '9780142437230'),
(8, 'L\'Étranger', 'Albert Camus', 'Philosophie', 1942, '9782070360023'),
(9, 'Fahrenheit 451', 'Ray Bradbury', 'Science-Fiction', 1953, '9781451673319'),
(10, 'La Métamorphose', 'Franz Kafka', 'Classique', 1915, '9783150093568'),
(11, 'Moby Dick', 'Herman Melville', 'Aventure', 1851, '9781503280786'),
(12, 'Crime et Châtiment', 'Fiodor Dostoïevski', 'Classique', 1866, '9780140449136'),
(13, 'Le Nom de la Rose', 'Umberto Eco', 'Historique', 1980, '9780156001311'),
(14, 'Dune', 'Frank Herbert', 'Science-Fiction', 1965, '9780441172719'),
(15, 'Les Fleurs du mal', 'Charles Baudelaire', 'Poésie', 1857, '9782070413118');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
