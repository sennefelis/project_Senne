-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 24 mrt 2017 om 14:53
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpopdracht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`id`, `username`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'xLaura', 'laura', 'van bael', 'laura@gmail.com', '$2y$12$l2SSs0YQNgddkPsD6/jpk.RU3WA2ewNwzeSGNUE0GsdvANMbFAI8i'),
(2, '', '', '', '', '$2y$12$EakNxEkrtvmAO8Fkl2454.fZ5HJnN0pvZ9EufKGTJnRjN4N9NeFum'),
(3, '', '', '', '', '$2y$12$XUCmC5hk.j7KvZlSH.533eFt6y1vZhzDqh00leEYQo/i/xkeRQ2BC'),
(4, '', '', '', '', '$2y$12$S5My9cdLyU96xrh2mRB5NOzzoXhKV06ZfqaGBQuP2gsmiQik0nco.'),
(5, '', '', '', '', '$2y$12$jrMpJQI2lLCy1ntagfWB8OwCUOQOvimea98NRlhO.jEXevWdYbGNe'),
(6, 'davy', 'davy', 'ceupens', 'davy@gmail.com', '$2y$12$TIll.UR3uygXZHKqovRJnOm9fzbT1LRyOlfQKsVTylbZNtfTi1vT.'),
(7, 'xLaura', 'Laura', 'Van Bael', 'laura@gmail.com', '$2y$12$nm5FLZiEqdEM1dTcvU29IuDBC0Z/hTM3UEPbV/omuaHVper18NupK'),
(8, 'xLaura', 'Laura', 'Van Bael', 'laura@gmail.com', '$2y$12$4ViPHBMckKp6.YNBXV6CLeSpH3J./9ZWR/2w4kCoMKrtP8q4ex48a'),
(9, '', '', '', '', '$2y$12$oK9/rOF43vWzik7JvxXcbOvsPk3CMvT8ASOLRVFJKyMDy.DRfdAlm');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
