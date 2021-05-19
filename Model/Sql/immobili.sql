-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 14, 2021 alle 15:52
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.6
-- DEFINIZIONE DATABASE
DROP DATABASE IF EXISTS immobili;
CREATE DATABASE IF NOT EXISTS Immobili CHARACTER SET = 'utf8';
USE immobili;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immobili`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `dettagliannessi`
--

CREATE TABLE `dettagliannessi` (
  `idDettagliAnnesso` int(4) NOT NULL,
  `codTipoAnnesso` int(4) NOT NULL,
  `codimmobile` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `dettagliannessi`
--

INSERT INTO `dettagliannessi` (`idDettagliAnnesso`, `codTipoAnnesso`, `codimmobile`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 1),
(4, 1, 7),
(5, 1, 4),
(6, 5, 5),
(7, 4, 7),
(8, 1, 3),
(9, 2, 2),
(10, 1, 8),
(11, 1, 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `immobili`
--

CREATE TABLE `immobili` (
  `IdImmobili` int(4) NOT NULL,
  `descrizione` varchar(30) NOT NULL,
  `vani` int(4) NOT NULL,
  `superficie` int(3) NOT NULL,
  `prezzo` int(10) NOT NULL,
  `CE` varchar(4) NOT NULL,
  `anno` int(5) NOT NULL,
  `CodTipoImmobili` int(4) NOT NULL,
  `CodProprietari` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `immobili`
--

INSERT INTO `immobili` (`IdImmobili`, `descrizione`, `vani`, `superficie`, `prezzo`, `CE`, `anno`, `CodTipoImmobili`, `CodProprietari`) VALUES
(1, 'Scafati', 10, 80, 500000, 'A4', 1984, 1, 4),
(2, 'Vico Equense', 4, 150, 250000, 'C', 1970, 3, 6),
(3, 'Sorrento', 6, 220, 700000, 'A', 2010, 2, 1),
(4, 'Meta', 5, 60, 100000, 'F', 1990, 1, 2),
(5, 'Torre Annunziata', 1, 300, 400000, 'G', 2003, 3, 4),
(6, 'C/Mare', 2, 40, 500000, 'A3', 1950, 2, 5),
(7, 'Sorrento', 4, 130, 300000, 'A+', 2000, 4, 3),
(8, 'Gragnano', 7, 270, 450000, 'B', 1965, 1, 6);

-- --------------------------------------------------------

--
-- Struttura della tabella `proprietari`
--

CREATE TABLE `proprietari` (
  `IdProprietari` int(4) NOT NULL,
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `proprietari`
--

INSERT INTO `proprietari` (`IdProprietari`, `Nome`, `Cognome`) VALUES
(1, 'Daniele', 'Criscuolo'),
(2, 'Carmine', 'Ilario'),
(3, 'Antonio', 'Malafronte'),
(4, 'Mario', 'De Angelis'),
(5, 'Francesco', 'Sicignano'),
(6, 'Alex', 'Briuolo');

-- --------------------------------------------------------

--
-- Struttura della tabella `tipoannesso`
--

CREATE TABLE `tipoannesso` (
  `idTipoAnnesso` int(4) NOT NULL,
  `Descrizione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tipoannesso`
--

INSERT INTO `tipoannesso` (`idTipoAnnesso`, `Descrizione`) VALUES
(1, 'Garage'),
(2, 'Cantina'),
(3, 'Giardino'),
(4, 'Soffitta'),
(5, 'Box');

-- --------------------------------------------------------

--
-- Struttura della tabella `tipoimmobile`
--

CREATE TABLE `tipoimmobile` (
  `IdTipoImmobile` int(4) NOT NULL,
  `descrizione` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `tipoimmobile`
--

INSERT INTO `tipoimmobile` (`IdTipoImmobile`, `descrizione`) VALUES
(1, 'Appartamento'),
(2, 'Negozio'),
(3, 'Ufficio'),
(4, 'Villa');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `dettagliannessi`
--
ALTER TABLE `dettagliannessi`
  ADD PRIMARY KEY (`idDettagliAnnesso`),
  ADD KEY `codTipoAnnesso` (`codTipoAnnesso`),
  ADD KEY `codimmobile` (`codimmobile`);

--
-- Indici per le tabelle `immobili`
--
ALTER TABLE `immobili`
  ADD PRIMARY KEY (`IdImmobili`),
  ADD KEY `CodTipoImmobili` (`CodTipoImmobili`),
  ADD KEY `CodProprietari` (`CodProprietari`);

--
-- Indici per le tabelle `proprietari`
--
ALTER TABLE `proprietari`
  ADD PRIMARY KEY (`IdProprietari`);

--
-- Indici per le tabelle `tipoannesso`
--
ALTER TABLE `tipoannesso`
  ADD PRIMARY KEY (`idTipoAnnesso`);

--
-- Indici per le tabelle `tipoimmobile`
--
ALTER TABLE `tipoimmobile`
  ADD PRIMARY KEY (`IdTipoImmobile`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `dettagliannessi`
--
ALTER TABLE `dettagliannessi`
  MODIFY `idDettagliAnnesso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT per la tabella `immobili`
--
ALTER TABLE `immobili`
  MODIFY `IdImmobili` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `proprietari`
--
ALTER TABLE `proprietari`
  MODIFY `IdProprietari` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT per la tabella `tipoannesso`
--
ALTER TABLE `tipoannesso`
  MODIFY `idTipoAnnesso` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT per la tabella `tipoimmobile`
--
ALTER TABLE `tipoimmobile`
  MODIFY `IdTipoImmobile` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `dettagliannessi`
--
ALTER TABLE `dettagliannessi`
  ADD CONSTRAINT `dettagliannessi_ibfk_1` FOREIGN KEY (`codimmobile`) REFERENCES `immobili` (`IdImmobili`),
  ADD CONSTRAINT `dettagliannessi_ibfk_2` FOREIGN KEY (`codTipoAnnesso`) REFERENCES `tipoannesso` (`idTipoAnnesso`);

--
-- Limiti per la tabella `immobili`
--
ALTER TABLE `immobili`
  ADD CONSTRAINT `immobili_ibfk_1` FOREIGN KEY (`CodTipoImmobili`) REFERENCES `tipoimmobile` (`IdTipoImmobile`),
  ADD CONSTRAINT `immobili_ibfk_2` FOREIGN KEY (`CodProprietari`) REFERENCES `proprietari` (`IdProprietari`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
