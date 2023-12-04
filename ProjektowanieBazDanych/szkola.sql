-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 01:05 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele`
--

CREATE TABLE `nauczyciele` (
  `id_nauczyciel` int(11) NOT NULL,
  `imie` varchar(50) NOT NULL,
  `nazwisko` varchar(50) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `pensja` int(11) NOT NULL,
  `ulica` varchar(50) NOT NULL,
  `kod pocztowy` int(5) NOT NULL,
  `miasto` varchar(50) NOT NULL,
  `data_zatrudnienia` date NOT NULL,
  `data_zwolnienia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nauczyciele`
--

INSERT INTO `nauczyciele` (`id_nauczyciel`, `imie`, `nazwisko`, `pesel`, `pensja`, `ulica`, `kod pocztowy`, `miasto`, `data_zatrudnienia`, `data_zwolnienia`) VALUES
(1, 'Jan', 'Kowalski', '12345678901', 3000, 'ul. Szkolna 1', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(2, 'Anna', 'Nowak', '12345678902', 3500, 'ul. Szkolna 2', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(3, 'Piotr', 'Kowalczyk', '12345678903', 4000, 'ul. Szkolna 3', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(4, 'Katarzyna', 'Kaczmarek', '12345678904', 4500, 'ul. Szkolna 4', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(5, 'Tomasz', 'Lewandowski', '12345678905', 5000, 'ul. Szkolna 5', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(6, 'Magdalena', 'Wójcik', '12345678906', 5500, 'ul. Szkolna 6', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(7, 'Marcin', 'Krawczyk', '12345678907', 6000, 'ul. Szkolna 7', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(8, 'Karolina', 'Mazur', '12345678908', 6500, 'ul. Szkolna 8', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(9, 'Michał', 'Kaczmarczyk', '12345678909', 7000, 'ul. Szkolna 9', 25000, 'Kielce', '2022-01-01', '2022-12-31'),
(10, 'Agnieszka', 'Kalinowska', '12345678910', 7500, 'ul. Szkolna 10', 25000, 'Kielce', '2022-01-01', '2022-12-31');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nauczyciele_przedmioty`
--

CREATE TABLE `nauczyciele_przedmioty` (
  `nauczyciel_id` int(11) NOT NULL,
  `przedmiot_id` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przedmioty`
--

CREATE TABLE `przedmioty` (
  `id_przedmiotu` int(11) NOT NULL,
  `nazwa` varchar(50) NOT NULL,
  `oddział` varchar(50) NOT NULL,
  `praktyczny` tinyint(1) NOT NULL,
  `pensum` smallint(6) NOT NULL,
  `liczba_godzin` smallint(6) NOT NULL,
  `nazwisko_nadzorcy` varchar(50) NOT NULL,
  `uwagi` varchar(100) NOT NULL,
  `kanapka` int(11) NOT NULL,
  `szkoła` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przedmioty`
--

INSERT INTO `przedmioty` (`id_przedmiotu`, `nazwa`, `oddział`, `praktyczny`, `pensum`, `liczba_godzin`, `nazwisko_nadzorcy`, `uwagi`, `kanapka`, `szkoła`) VALUES
(1, 'Matematyka', '2A', 0, 30, 60, 'Kowalski', 'Brak uwag', 1, 'Szkoła Podstawowa nr 1'),
(2, 'Fizyka', '2A', 1, 30, 60, 'Nowak', 'Brak uwag', 2, 'Szkoła Podstawowa nr 1'),
(3, 'Chemia', '2A', 1, 30, 60, 'Kowalski', 'Brak uwag', 3, 'Szkoła Podstawowa nr 1'),
(4, 'Historia', '2A', 0, 30, 60, 'Nowak', 'Brak uwag', 4, 'Szkoła Podstawowa nr 1'),
(5, 'Język angielski', '2A', 0, 30, 60, 'Kowalski', 'Brak uwag', 5, 'Szkoła Podstawowa nr 1'),
(6, 'Język niemiecki', '2A', 0, 30, 60, 'Nowak', 'Brak uwag', 6, 'Szkoła Podstawowa nr 1'),
(7, 'Wychowanie fizyczne', '2A', 1, 30, 60, 'Kowalski', 'Brak uwag', 7, 'Szkoła Podstawowa nr 1'),
(8, 'Plastyka', '2A', 1, 30, 60, 'Nowak', 'Brak uwag', 8, 'Szkoła Podstawowa nr 1'),
(9, 'Muzyka', '2A', 0, 30, 60, 'Kowalski', 'Brak uwag', 9, 'Szkoła Podstawowa nr 1'),
(10, 'Informatyka', '2A', 0, 30, 60, 'Nowak', 'Brak uwag', 10, 'Szkoła Podstawowa nr 1');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nauczyciele`
--
ALTER TABLE `nauczyciele`
  ADD PRIMARY KEY (`id_nauczyciel`);

--
-- Indeksy dla tabeli `nauczyciele_przedmioty`
--
ALTER TABLE `nauczyciele_przedmioty`
  ADD KEY `nauczyciel_id` (`nauczyciel_id`,`przedmiot_id`),
  ADD KEY `przedmiot_id` (`przedmiot_id`);

--
-- Indeksy dla tabeli `przedmioty`
--
ALTER TABLE `przedmioty`
  ADD PRIMARY KEY (`id_przedmiotu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nauczyciele`
--
ALTER TABLE `nauczyciele`
  MODIFY `id_nauczyciel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `przedmioty`
--
ALTER TABLE `przedmioty`
  MODIFY `id_przedmiotu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nauczyciele_przedmioty`
--
ALTER TABLE `nauczyciele_przedmioty`
  ADD CONSTRAINT `nauczyciele_przedmioty_ibfk_1` FOREIGN KEY (`nauczyciel_id`) REFERENCES `nauczyciele` (`id_nauczyciel`),
  ADD CONSTRAINT `nauczyciele_przedmioty_ibfk_2` FOREIGN KEY (`przedmiot_id`) REFERENCES `przedmioty` (`id_przedmiotu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
