-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Nov 2012 um 17:56
-- Server Version: 5.5.27
-- PHP-Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `fhdapp`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE IF NOT EXISTS `personen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nachname` varchar(20) NOT NULL,
  `vorname` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `nachname`, `vorname`, `username`, `password`) VALUES
(1, 'K.', 'Hubert', 'admin', '21232f297a57a5a743894a0e4a801fc3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
