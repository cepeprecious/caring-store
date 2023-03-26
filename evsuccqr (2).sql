-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 11:29 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evsuccqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(32) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `pass_raw` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `employee_id` int(32) NOT NULL,
  `employee_number` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `mi` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `cp_num` varchar(255) NOT NULL,
  `qr_code` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`employee_id`, `employee_number`, `fname`, `lname`, `mi`, `address`, `department`, `cp_num`, `qr_code`, `date_registered`) VALUES
(10, 'YU072418JLE', 'Jake Lander', 'Yu', 'E', 'Carigara', 'IT', '09455890205', 'YuJake Lander.png', 'February 02, 2021'),
(11, 'B030114BB', 'Benjie', 'Basilan', 'B', 'Carigara', 'Security', '', 'BasilanBenjie.png', 'February 02, 2021'),
(12, 'C062314GF', 'Gavino', 'Camarines', 'F', 'Carigara', 'Admin', '', 'CamarinesGavino.png', 'February 02, 2021'),
(13, 'C082614RS', 'Rodjie', 'Costelo', 'S', 'Tunga', 'Security', '', 'CosteloRodjie.png', 'February 02, 2021'),
(14, 'D121217RD', 'Renato', 'Dollete', 'D', 'Carigara', 'Admin', '', 'DolleteRenato.png', 'February 02, 2021'),
(15, 'E051111JA', 'Joseph', 'Espos', 'A', '', 'Security', '', 'EsposJoseph.png', 'February 02, 2021'),
(16, 'F030514AL', 'Ampilo', 'Flores', 'L', '', 'Security', '', 'FloresAmpilo.png', 'February 02, 2021'),
(17, 'I030109R', 'Reymund', 'Indita', '', '', 'Admin', '', 'InditaReymund.png', 'February 02, 2021'),
(18, 'o020221DAC', 'Dan Albert', 'Oriol', 'C', '', 'Admin', '', 'OriolDan Albert.png', 'February 02, 2021'),
(19, 'O061917KH', 'Kenneth', 'Oriol', 'H', '', 'Admin', '', 'OriolKenneth.png', 'February 02, 2021'),
(20, 'O040711AC', 'Aguilino', 'Ortula', 'C', '', 'Admin', '', 'OrtulaAguilino.png', 'February 02, 2021'),
(21, 'T072014LA', 'Leonides', 'Tadefa', 'A', '', 'Admin', '', 'TadefaLeonides.png', 'February 02, 2021'),
(22, 'T070319TA', 'Triumfo', 'Tadefa', 'A', '', 'Admin', '', 'TadefaTriumfo.png', 'February 02, 2021'),
(23, 'T081719AB', 'Antonio', 'Tecson Jr.', 'B', 'Carigara', 'Security', '', 'Tecson Jr.Antonio.png', 'February 02, 2021'),
(24, 'V071713RE', 'Rizaldy', 'Villanueva', 'E', '', 'Admin', '', 'VillanuevaRizaldy.png', 'February 02, 2021'),
(25, 'A082420NB', 'Nicolein', 'Abejar', 'B', 'Barugo', 'Admin', '', 'AbejarNicolein.png', 'February 02, 2021'),
(26, 'D101618GAD', 'Glecy Ann', 'Dellera', 'D', 'Carigara', 'Admin', '', 'DelleraGlecy Ann.png', 'February 02, 2021'),
(27, 'F100214ND', 'Noime', 'Fin', 'D', '', 'Admin', '', 'FinNoime.png', 'February 02, 2021'),
(28, 'F120317SMV', 'Shiela Marie', 'Flores', 'V', '', 'Admin', '', 'FloresShiela Marie.png', 'February 02, 2021'),
(29, 'H012819CHT', 'Charlene Hazel', 'Hilves', 'T', 'Capoocan', 'Admin', '', 'HilvesCharlene Hazel.png', 'February 02, 2021'),
(30, 'L041620RJA', 'Rhea Joy', 'Llagas', 'A', 'Carigara', 'Admin', '', 'LlagasRhea Joy.png', 'February 02, 2021'),
(31, 'N020617JRM', 'Jane Rose', 'Near', 'M', 'Capoocan', 'Admin', '', 'NearJane Rose.png', 'February 02, 2021'),
(32, 'N070119SD', 'Syrine', 'Nivera', 'D', 'Carigara', 'Admin', '', 'NiveraSyrine.png', 'February 02, 2021'),
(33, 'P070517XS', 'Xandra', 'Pore', 'S', '', 'Admin', '', 'PoreXandra.png', 'February 02, 2021'),
(34, 'Q072417NA', 'Nikki', 'Quidlat', 'A', '', 'Admin', '', 'QuidlatNikki.png', 'February 02, 2021'),
(35, 'S080618IO', 'Ivy', 'Sabay', 'O', '', 'Admin', '', 'SabayIvy.png', 'February 02, 2021'),
(36, 'S070717MF', 'Minerva', 'Sonon', 'F', '', 'Admin', '', 'SononMinerva.png', 'February 02, 2021'),
(37, 'S012616RC', 'Rachel', 'Sorima', 'C', '', 'Admin', '', 'SorimaRachel.png', 'February 02, 2021'),
(39, 'O010721RO', 'Raffy', 'Orogan', 'O', 'Carigara', 'Admin', '', 'OroganRaffy.png', 'February 02, 2021'),
(40, 'A070115RM', 'Ryan', 'Aguilos', 'M', 'Carigara', 'Fisheries', '', 'AguilosRyan.png', 'February 02, 2021'),
(41, 'A091511AA', 'Amelita', 'Ariza', 'A', 'Barugo', 'IT', '', 'ArizaAmelita.png', 'February 02, 2021'),
(42, 'B072517DDS', 'Dindo Duane', 'Biscante', 'S', 'Carigara', 'Education', '', 'BiscanteDindo Duane.png', 'February 02, 2021'),
(43, 'C010698RT', 'Randy', 'Cantila', 'T', '', 'Fisheries', '', 'CantilaRandy.png', 'February 02, 2021'),
(44, 'C070115KE', 'Kristine', 'Clemencio', 'E', '', 'Education', '', 'ClemencioKristine.png', 'February 02, 2021'),
(45, 'C070110RD', 'Rustom', 'Clemente', 'D', '', 'IT', '', 'ClementeRustom.png', 'February 02, 2021'),
(46, 'C080417AG', 'Anthony', 'Cotoner', 'G', 'Tunga', 'IT', '', 'CotonerAnthony.png', 'February 02, 2021'),
(47, 'D080417RT', 'Romil', 'Dandan', 'T', 'Carigara', 'Fisheries', '', 'DandanRomil.png', 'February 02, 2021'),
(48, 'D070115RD', 'Rubia', 'Dy', 'D', 'Barugo', 'Entrep', '', 'DyRubia.png', 'February 02, 2021'),
(49, 'E061482EM', 'Ester', 'Eslira', 'M', '', 'Admin', '', 'EsliraEster.png', 'February 02, 2021'),
(50, 'F111395GS', 'Gaudencio', 'Fernandez', 'S', 'Carigara', 'Fisheries', '', 'FernandezGaudencio.png', 'February 02, 2021'),
(51, 'F010284RA', 'Rosabella', 'Ferreras', 'A', '', 'Education', '', 'FerrerasRosabella.png', 'February 02, 2021'),
(52, 'H061389JL', 'Juliet', 'Hanopol', 'L', '', 'Education', '', 'HanopolJuliet.png', 'February 02, 2021'),
(53, 'L080172EO', 'Eduvigis', 'Leaño', 'O', '', 'Fisheries', '', 'LeañoEduvigis.png', 'February 02, 2021'),
(54, 'M072010MLM', 'Ma. Loida', 'Marquez', 'Marpa', '', 'Entrep', '', 'MarquezMa. Loida.png', 'February 02, 2021'),
(55, 'M070182MSF', 'Ma. Socorro', 'Mazo', 'F', '', 'Education', '', 'MazoMa. Socorro.png', 'February 02, 2021'),
(56, 'M101590OO', 'Otilia', 'Misagal', 'O', '', 'Fisheries', '', 'MisagalOtilia.png', 'February 02, 2021'),
(57, 'N100217MAP', 'Mark Anthony', 'Narciso', 'P', '', 'Education', '', 'NarcisoMark Anthony.png', 'February 02, 2021'),
(58, 'N072517KLE', 'Kareen Lynn', 'Negado', 'E', '', 'Education', '', 'NegadoKareen Lynn.png', 'February 02, 2021'),
(59, 'P061884TA', 'Teresita', 'Padilla', 'A', 'Barugo', 'Education', '', 'PadillaTeresita.png', 'February 02, 2021'),
(60, 'Q070114EB', 'Elvera', 'Quilaquil', 'B', '', 'Entrep', '', 'QuilaquilElvera.png', 'February 02, 2021'),
(61, 'S071588AM', 'Amelita', 'Sari', 'M', 'Tunga', 'Education', '', 'SariAmelita.png', 'February 02, 2021'),
(62, 'S070717HE', 'Hazmin', 'Sonon', 'E', 'Barugo', 'Education', '', 'SononHazmin.png', 'February 02, 2021'),
(63, 'T080417MC', 'Mark', 'Tiston', 'C', 'Carigara', 'Entrep', '', 'TistonMark.png', 'February 02, 2021'),
(64, 'Z060595EM', 'Elena', 'Zabala', 'M', '', 'Education', '', 'ZabalaElena.png', 'February 02, 2021'),
(65, 'B050285HS', 'Herminigildo', 'Badion', 'S', 'Tacloban City', 'Admin', '', 'BadionHerminigildo.png', 'February 02, 2021'),
(66, 'B010298JM', 'Julian', 'Bacaltos', 'M', 'Carigara', 'Admin', '', 'BacaltosJulian.png', 'February 02, 2021'),
(67, 'B030506GS', 'Glen', 'Banzuelo', 'S', '', 'Admin', '', 'BanzueloGlen.png', 'February 02, 2021'),
(68, 'B090595RN', 'Bardiago', 'Rosendo', 'N', '', 'Admin', '', 'RosendoBardiago.png', 'February 02, 2021'),
(69, 'D031102PP', 'Pamela', 'Digman', 'P', '', 'Admin', '', 'DigmanPamela.png', 'February 02, 2021'),
(70, 'L090705LF', 'Lenie', 'Llaneta', 'F', '', 'Admin', '', 'LlanetaLenie.png', 'February 02, 2021'),
(71, 'P070107KR', 'Moriel', 'Kathy', 'P', '', 'Admin', '', 'KathyMoriel.png', 'February 02, 2021'),
(72, 'N010111MN', 'Mario', 'Naadat', 'N', '', 'Admin', '', 'NaadatMario.png', 'February 02, 2021'),
(73, 'O070813DF', 'Dennisa Marie', 'Ognilla', 'F', '', 'Admin', '', 'OgnillaDennisa Marie.png', 'February 02, 2021'),
(74, 'O021403DJ', 'Dante', 'Oriol', 'J', '', 'Admin', '', 'OriolDante.png', 'February 02, 2021'),
(75, 'T010405EG', 'Edsel', 'Teñoso', 'G', '', 'Admin', '', 'TeñosoEdsel.png', 'February 02, 2021'),
(76, 'D010421MS', 'Miguel', 'Dy', 'S', 'Carigara', '', '', 'DyMiguel.png', 'February 02, 2021'),
(77, 'G010119MC', 'Mary Jane', 'Geraldo', 'C', 'Barugo', 'Entrep', '', 'GeraldoMary Jane.png', 'February 02, 2021'),
(79, 'R010804SB', 'Santiago', 'Ricacho', 'B', 'Carigara', 'Admin', '', 'RicachoSantiago.png', 'February 02, 2021'),
(80, 'M111620EM', 'Elbert', 'Mabolo', 'E', 'Carigara', 'Admin', '', 'MaboloElbert.png', 'February 02, 2021'),
(81, 'B010282AB', 'Antonio', 'Lacanaria', 'B', 'Tacloban City', '', '', 'LacanariaAntonio.png', 'February 02, 2021'),
(82, 'R071304AD', 'Amy', 'Ripalda', 'D', 'Tacloban City', '', '', 'RipaldaAmy.png', 'February 02, 2021'),
(83, 'D010499EV', 'Edgar', 'Dacoycoy', 'V', 'Barugo', 'Security', '', 'DacoycoyEdgar.png', 'February 02, 2021'),
(84, 'N010917AD', 'ANGIELICA MAY', 'NEGADO', 'D', 'Carigara', 'Budget', '', 'NEGADOANGIELICA MAY.png', 'February 02, 2021'),
(85, 'A111218LDV', 'Loraine', 'Aguilas', 'V', '', 'Education', '', 'AguilasLoraine.png', 'March 03, 2021'),
(86, 'A080519AB', 'Enrique', 'Arintoc, Jr.', 'B', '', 'Education', '', 'Arintoc, Jr.Enrique.png', 'March 03, 2021'),
(87, 'B080519BC', 'Bonifacio', 'Bardiago III', 'C', '', 'Education', '', 'Bardiago IIIBonifacio.png', 'March 03, 2021'),
(88, 'B080519MI', 'Maria Joyce', 'Basi', '', '', 'Education', '', 'BasiMaria Joyce.png', 'March 03, 2021'),
(89, 'B010514MP', 'Mary Ann', 'Bautista', 'P', '', 'Education', '', 'BautistaMary Ann.png', 'March 03, 2021'),
(90, 'B080618VD', 'Vina', 'Brier', 'D', '', 'Education', '', 'BrierVina.png', 'March 03, 2021'),
(91, 'C071616EQ', 'Erwin', 'Canabe', 'Q', '', 'Education', '', 'CanabeErwin.png', 'March 03, 2021'),
(92, 'C080618AT', 'Anabelle', 'Cerezo', 'T', '', 'Education', '', 'CerezoAnabelle.png', 'March 03, 2021'),
(93, 'D080618SA', 'Sanny', 'Dante', 'A', '', 'Education', '', 'DanteSanny.png', 'March 03, 2021'),
(94, 'G060713LL', 'Leo', 'De Guzman', 'L', '', 'Education', '', 'De GuzmanLeo.png', 'March 03, 2021'),
(95, 'D080519AM', 'Abegail', 'Dela Cruz', 'M', '', 'Education', '', 'Dela CruzAbegail.png', 'March 03, 2021'),
(96, 'E080618CDS', 'Christian Dave', 'Ergina', 'S', '', 'IT', '', 'ErginaChristian Dave.png', 'March 03, 2021'),
(97, 'F061515CF', 'Christian', 'Flores', 'F', '', 'IT', '', 'FloresChristian.png', 'March 03, 2021'),
(98, 'G080519LC', 'Lojean', 'Grama', 'C', '', 'Education', '', 'GramaLojean.png', 'March 03, 2021'),
(99, 'I100520HY', 'Hannah', 'Insigne', 'Y', '', 'Education', '', 'InsigneHannah.png', 'March 03, 2021'),
(100, 'L080519RO', 'Rodrigo', 'Lacaba', 'O', '', 'Education', '', 'LacabaRodrigo.png', 'March 03, 2021'),
(101, 'L080618MAP', 'Ma. Alyssa', 'Lanante', 'P', '', 'Education', '', 'LananteMa. Alyssa.png', 'March 03, 2021'),
(102, 'M100520MT', 'Manny', 'Macaso', 'T', '', 'Education', '', 'MacasoManny.png', 'March 03, 2021'),
(103, 'M111218CDC', 'Charmaine', 'Magno', 'C', '', 'Education', '', 'MagnoCharmaine.png', 'March 03, 2021'),
(104, 'M100520JD', 'Jessa', 'Miaga', 'D', '', 'Education', '', 'MiagaJessa.png', 'March 03, 2021'),
(105, 'N080618AM', 'Andrew Mark', 'Niemes', '', '', 'Education', '', 'NiemesAndrew Mark.png', 'March 03, 2021'),
(106, 'N120615JA', 'Jason', 'Nitura', '', '', 'IT', '', 'NituraJason.png', 'March 03, 2021'),
(107, 'O080618DR', 'Devine Salvie', 'Obero', 'R', '', 'Education', '', 'OberoDevine Salvie.png', 'March 03, 2021'),
(108, 'O080618KJ', 'Kent Joseph', 'Ortula', '', '', 'Education', '', 'OrtulaKent Joseph.png', 'March 03, 2021'),
(109, 'O061315RC', 'Ricky', 'Oyzon', 'C', '', 'Education', '', 'OyzonRicky.png', 'March 03, 2021'),
(110, 'P080519MA', 'Mark Gerald', 'Paeste', '', '', 'Education', '', 'PaesteMark Gerald.png', 'March 03, 2021'),
(111, 'P080618BR', 'Bon Ryan', 'Pelaez', '', '', 'Education', '', 'PelaezBon Ryan.png', 'March 03, 2021'),
(112, 'P071017RN', 'Rannie', 'Peruda', 'N', '', 'Education', '', 'PerudaRannie.png', 'March 03, 2021'),
(113, 'Q080618KJC', 'Kristine Joy', 'Quilla', 'C', '', 'Education', '', 'QuillaKristine Joy.png', 'March 03, 2021'),
(114, 'R080618AMN', 'Amanda May', 'Ramos', 'N', '', 'Education', '', 'RamosAmanda May.png', 'March 03, 2021'),
(116, 'R061917LAL', 'Loise Ada', 'Reyes', 'L', '', 'Education', '', 'ReyesLoise Ada.png', 'March 03, 2021'),
(117, 'S080618AL', 'Ariel', 'Sabalberino', 'L', '', 'Entrep', '', 'SabalberinoAriel.png', 'March 03, 2021'),
(118, 'S111014AQ', 'Alfie', 'Narciso', 'S', '', 'Entrep', '', 'NarcisoAlfie.png', 'March 03, 2021'),
(119, 'S100520LO', 'Ludylyn', 'Sanopo', 'P', '', 'Education', '', 'SanopoLudylyn.png', 'March 03, 2021'),
(120, 'T080618AL', 'Athena', 'Tiston', 'L', '', 'IT', '', 'TistonAthena.png', 'March 03, 2021'),
(121, 'U080618JC', 'Janine', 'Urmeneta', 'C', '', 'Education', '', 'UrmenetaJanine.png', 'March 03, 2021'),
(122, 'U080519MJF', 'Mary Jane', 'Urmeneta', '', '', 'Education', '', 'UrmenetaMary Jane.png', 'March 03, 2021'),
(123, 'D080519LM', 'Loise', 'De La Peña', 'M', '', 'Education', '', 'De La PeñaLoise.png', 'March 03, 2021'),
(124, 'R020320RB', 'Rommel', 'Reyes', 'T', '', '', '', 'ReyesRommel.png', 'March 03, 2021'),
(125, 'P090720RR', 'Ronalyn', 'Padoga', 'R', '', '', '', 'PadogaRonalyn.png', 'March 03, 2021'),
(126, 'O012020CH', 'Clarissa', 'Oriol', 'H', '', '', '', 'OriolClarissa.png', 'March 03, 2021'),
(127, 'M080519AN', 'Aiza', 'Macalalag', 'N', '', 'Education', '', 'MacalalagAiza.png', 'March 03, 2021'),
(128, 'M080519NA', 'Nenita', 'Macalinao', 'A', '', 'Entrep', '', 'MacalinaoNenita.png', 'March 03, 2021'),
(129, 'L100520EB', 'Essany', 'Lumogda', 'B', '', 'Fisheries', '', 'LumogdaEssany.png', 'March 03, 2021'),
(130, 'E020419JAL', 'Julie Ann', 'Evano', 'L', '', 'Education', '', 'EvanoJulie Ann.png', 'March 03, 2021'),
(131, 'M100520MT', 'Mel', 'Magallanes', 'T', '', 'Education', '', 'MagallanesMel.png', 'March 03, 2021'),
(132, 'S100520MTM', 'Ma. Theresa', 'Salamida', 'M', '', 'Fisheries', '', 'SalamidaMa. Theresa.png', 'March 03, 2021'),
(133, 'C070982LO', 'Lolita', 'Clemencio', 'O', 'Carigara', 'Education', '', 'ClemencioLolita.png', 'March 03, 2021'),
(134, 'C020320IC', 'Ines', 'Cantila', 'C', '', '', '', 'CantilaInes.png', 'March 03, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_scans`
--

CREATE TABLE `tbl_scans` (
  `scan_id` int(11) NOT NULL,
  `employee_no` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `scan_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_scans`
--

INSERT INTO `tbl_scans` (`scan_id`, `employee_no`, `fullname`, `dept`, `address`, `scan_date`) VALUES
(1, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 07:52 AM'),
(2, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 07:52 AM'),
(3, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 07:53 AM'),
(4, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 07:53 AM'),
(5, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 07:53 AM'),
(6, 'F010284RA', 'Rosabella A Ferreras', 'Education', '', 'March 03, 2021 | 07:55 AM'),
(7, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 07:58 AM'),
(8, 'O040711AC', 'Aguilino C Ortula', 'Admin', '', 'March 03, 2021 | 07:59 AM'),
(9, 'S071588AM', 'Amelita M Sari', 'Education', 'Tunga', 'March 03, 2021 | 08:00 AM'),
(10, 'F100214ND', 'Noime D Fin', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(11, 'F100214ND', 'Noime D Fin', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(12, 'O070813DF', 'Dennisa Marie F Ognilla', 'Admin', '', 'March 03, 2021 | 08:08 AM'),
(13, 'N010111MN', 'Mario N Naadat', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(14, 'L041620RJA', 'Rhea Joy A Llagas', 'Admin', 'Carigara', 'March 03, 2021 | 08:27 AM'),
(15, 'G010119MC', 'Mary Jane C Geraldo', 'Entrep', 'Barugo', 'March 03, 2021 | 08:27 AM'),
(16, 'E061482EM', 'Ester M Eslira', 'Admin', '', 'March 03, 2021 | 08:28 AM'),
(17, 'Z060595EM', 'Elena M Zabala', 'Education', '', 'March 03, 2021 | 08:36 AM'),
(18, 'T080417MC', 'Mark C Tiston', 'Entrep', 'Carigara', 'March 03, 2021 | 08:45 AM'),
(19, 'H061389JL', 'Juliet L Hanopol', 'Education', '', 'March 03, 2021 | 09:24 AM'),
(20, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:31 AM'),
(21, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(22, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(23, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(24, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(25, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(26, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(27, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(28, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(29, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(30, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(31, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:00 AM'),
(32, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(33, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(34, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(35, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(36, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(37, 'N070119SD', 'Syrine D Nivera', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(38, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 08:01 AM'),
(39, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 08:01 AM'),
(40, 'O040711AC', 'Aguilino C Ortula', 'Admin', '', 'March 03, 2021 | 08:01 AM'),
(41, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:02 AM'),
(42, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(43, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(44, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(45, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(46, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(47, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(48, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(49, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:03 AM'),
(50, 'O040711AC', 'Aguilino C Ortula', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(51, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(52, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(53, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(54, 'P070107KR', 'Moriel P Kathy', 'Admin', '', 'March 03, 2021 | 08:05 AM'),
(55, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 08:05 AM'),
(56, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:06 AM'),
(57, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:06 AM'),
(58, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:06 AM'),
(59, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(60, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(61, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(62, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(63, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(64, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(65, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(66, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:09 AM'),
(67, 'D121217RD', 'Renato D Dollete', 'Admin', 'Carigara', 'March 03, 2021 | 08:09 AM'),
(68, 'H012819CHT', 'Charlene Hazel T Hilves', 'Admin', 'Capoocan', 'March 03, 2021 | 08:13 AM'),
(69, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 08:14 AM'),
(70, 'YU072418JLE', 'Jake Lander E Yu', 'IT', 'Carigara', 'March 03, 2021 | 07:01 AM'),
(71, 'E051111JA', 'Joseph A Espos', 'Security', '', 'March 03, 2021 | 07:01 AM'),
(72, 'C062314GF', 'Gavino F Camarines', 'Admin', 'Carigara', 'March 03, 2021 | 07:08 AM'),
(73, 'C062314GF', 'Gavino F Camarines', 'Admin', 'Carigara', 'March 03, 2021 | 07:08 AM'),
(74, 'T070319TA', 'Triumfo A Tadefa', 'Admin', '', 'March 03, 2021 | 07:12 AM'),
(75, 'U080519MJF', 'Mary Jane  Urmeneta', 'Education', '', 'March 03, 2021 | 07:22 AM'),
(76, 'M100520JD', 'Jessa D Miaga', 'Education', '', 'March 03, 2021 | 07:30 AM'),
(77, 'N010111MN', 'Mario N Naadat', 'Admin', '', 'March 03, 2021 | 07:31 AM'),
(78, 'T072014LA', 'Leonides A Tadefa', 'Admin', '', 'March 03, 2021 | 07:34 AM'),
(79, 'T072014LA', 'Leonides A Tadefa', 'Admin', '', 'March 03, 2021 | 07:34 AM'),
(80, 'T072014LA', 'Leonides A Tadefa', 'Admin', '', 'March 03, 2021 | 07:34 AM'),
(81, 'O040711AC', 'Aguilino C Ortula', 'Admin', '', 'March 03, 2021 | 07:35 AM'),
(82, 'Q072417NA', 'Nikki A Quidlat', 'Admin', '', 'March 03, 2021 | 07:35 AM'),
(83, 'D101618GAD', 'Glecy Ann D Dellera', 'Admin', 'Carigara', 'March 03, 2021 | 07:35 AM'),
(84, 'L080519RO', 'Rodrigo O Lacaba', 'Education', '', 'March 03, 2021 | 07:36 AM'),
(85, 'O061315RC', 'Ricky C Oyzon', 'Education', '', 'March 03, 2021 | 07:36 AM'),
(86, 'B080519MI', 'Maria Joyce  Basi', 'Education', '', 'March 03, 2021 | 07:36 AM'),
(87, 'B080519MI', 'Maria Joyce  Basi', 'Education', '', 'March 03, 2021 | 07:36 AM'),
(88, 'V071713RE', 'Rizaldy E Villanueva', 'Admin', '', 'March 03, 2021 | 07:43 AM'),
(89, 'P070517XS', 'Xandra S Pore', 'Admin', '', 'March 03, 2021 | 07:43 AM'),
(90, 'A082420NB', 'Nicolein B Abejar', 'Admin', 'Barugo', 'March 03, 2021 | 07:43 AM'),
(91, 'I030109R', 'Reymund  Indita', 'Admin', '', 'March 03, 2021 | 07:44 AM'),
(92, 'S080618IO', 'Ivy O Sabay', 'Admin', '', 'March 03, 2021 | 07:47 AM'),
(93, 'S080618IO', 'Ivy O Sabay', 'Admin', '', 'March 03, 2021 | 07:47 AM'),
(94, 'A111218LDV', 'Loraine V Aguilas', 'Education', '', 'March 03, 2021 | 07:47 AM'),
(95, 'G080519LC', 'Lojean C Grama', 'Education', '', 'March 03, 2021 | 07:48 AM'),
(96, 'L090705LF', 'Lenie F Llaneta', 'Admin', '', 'March 03, 2021 | 07:50 AM'),
(97, 'D121217RD', 'Renato D Dollete', 'Admin', 'Carigara', 'March 03, 2021 | 07:51 AM'),
(98, 'M080519AN', 'Aiza N Macalalag', 'Education', '', 'March 03, 2021 | 07:51 AM'),
(99, 'M080519AN', 'Aiza N Macalalag', 'Education', '', 'March 03, 2021 | 07:51 AM'),
(100, 'D031102PP', 'Pamela P Digman', 'Admin', '', 'March 03, 2021 | 07:52 AM'),
(101, 'D031102PP', 'Pamela P Digman', 'Admin', '', 'March 03, 2021 | 07:52 AM'),
(102, 'P080519MA', 'Mark Gerald  Paeste', 'Education', '', 'March 03, 2021 | 07:53 AM'),
(103, 'P080519MA', 'Mark Gerald  Paeste', 'Education', '', 'March 03, 2021 | 07:53 AM'),
(104, 'D031102PP', 'Pamela P Digman', 'Admin', '', 'March 03, 2021 | 07:53 AM'),
(105, 'P090720RR', 'Ronalyn R Padoga', '', '', 'March 03, 2021 | 07:54 AM'),
(106, 'P090720RR', 'Ronalyn R Padoga', '', '', 'March 03, 2021 | 07:54 AM'),
(107, 'P090720RR', 'Ronalyn R Padoga', '', '', 'March 03, 2021 | 07:54 AM'),
(108, 'Q070114EB', 'Elvera B Quilaquil', 'Entrep', '', 'March 03, 2021 | 07:56 AM'),
(109, 'Q070114EB', 'Elvera B Quilaquil', 'Entrep', '', 'March 03, 2021 | 07:56 AM'),
(110, 'Q070114EB', 'Elvera B Quilaquil', 'Entrep', '', 'March 03, 2021 | 07:56 AM'),
(111, 'Q070114EB', 'Elvera B Quilaquil', 'Entrep', '', 'March 03, 2021 | 07:56 AM'),
(112, 'D080417RT', 'Romil T Dandan', 'Fisheries', 'Carigara', 'March 03, 2021 | 07:57 AM'),
(113, 'D080417RT', 'Romil T Dandan', 'Fisheries', 'Carigara', 'March 03, 2021 | 07:57 AM'),
(114, 'D080417RT', 'Romil T Dandan', 'Fisheries', 'Carigara', 'March 03, 2021 | 07:57 AM'),
(115, 'D080417RT', 'Romil T Dandan', 'Fisheries', 'Carigara', 'March 03, 2021 | 07:57 AM'),
(116, 'F120317SMV', 'Shiela Marie V Flores', 'Admin', '', 'March 03, 2021 | 07:58 AM'),
(117, 'O080618KJ', 'Kent Joseph  Ortula', 'Education', '', 'March 03, 2021 | 08:01 AM'),
(118, 'L041620RJA', 'Rhea Joy A Llagas', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(119, 'L041620RJA', 'Rhea Joy A Llagas', 'Admin', 'Carigara', 'March 03, 2021 | 08:01 AM'),
(120, 'M111218CDC', 'Charmaine C Magno', 'Education', '', 'March 03, 2021 | 08:04 AM'),
(121, 'M111218CDC', 'Charmaine C Magno', 'Education', '', 'March 03, 2021 | 08:04 AM'),
(122, 'M080519NA', 'Nenita A Macalinao', 'Entrep', '', 'March 03, 2021 | 08:05 AM'),
(123, 'M080519NA', 'Nenita A Macalinao', 'Entrep', '', 'March 03, 2021 | 08:05 AM'),
(124, 'S071588AM', 'Amelita M Sari', 'Education', 'Tunga', 'March 03, 2021 | 08:05 AM'),
(125, 'O061917KH', 'Kenneth H Oriol', 'Admin', '', 'March 03, 2021 | 08:06 AM'),
(126, 'P061884TA', 'Teresita A Padilla', 'Education', 'Barugo', 'March 03, 2021 | 08:09 AM'),
(127, 'P061884TA', 'Teresita A Padilla', 'Education', 'Barugo', 'March 03, 2021 | 08:09 AM'),
(128, 'P061884TA', 'Teresita A Padilla', 'Education', 'Barugo', 'March 03, 2021 | 08:09 AM'),
(129, 'B010514MP', 'Mary Ann P Bautista', 'Education', '', 'March 03, 2021 | 08:09 AM'),
(130, 'B010514MP', 'Mary Ann P Bautista', 'Education', '', 'March 03, 2021 | 08:09 AM'),
(131, 'F100214ND', 'Noime D Fin', 'Admin', '', 'March 03, 2021 | 08:10 AM'),
(132, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:11 AM'),
(133, 'B030506GS', 'Glen S Banzuelo', 'Admin', '', 'March 03, 2021 | 08:11 AM'),
(134, 'N072517KLE', 'Kareen Lynn E Negado', 'Education', '', 'March 03, 2021 | 08:13 AM'),
(135, 'N072517KLE', 'Kareen Lynn E Negado', 'Education', '', 'March 03, 2021 | 08:13 AM'),
(136, 'C070115KE', 'Kristine E Clemencio', 'Education', '', 'March 03, 2021 | 08:14 AM'),
(137, 'D080519AM', 'Abegail M Dela Cruz', 'Education', '', 'March 03, 2021 | 08:20 AM'),
(138, 'R061917LAL', 'Loise Ada L Reyes', 'Education', '', 'March 03, 2021 | 08:21 AM'),
(139, 'G010119MC', 'Mary Jane C Geraldo', 'Entrep', 'Barugo', 'March 03, 2021 | 08:23 AM'),
(140, 'C080618AT', 'Anabelle T Cerezo', 'Education', '', 'March 03, 2021 | 08:25 AM'),
(141, 'S012616RC', 'Rachel C Sorima', 'Admin', '', 'March 03, 2021 | 08:28 AM'),
(142, 'F010284RA', 'Rosabella A Ferreras', 'Education', '', 'March 03, 2021 | 08:29 AM'),
(143, 'A080519AB', 'Enrique B Arintoc, Jr.', 'Education', '', 'March 03, 2021 | 09:08 AM'),
(144, 'A080519AB', 'Enrique B Arintoc, Jr.', 'Education', '', 'March 03, 2021 | 09:08 AM'),
(145, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:09 AM'),
(146, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:09 AM'),
(147, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:09 AM'),
(148, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:09 AM'),
(149, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:10 AM'),
(150, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:11 AM'),
(151, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 09:13 AM'),
(152, 'E020419JAL', 'Julie Ann L Evano', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(153, 'E020419JAL', 'Julie Ann L Evano', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(154, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(155, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(156, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(157, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:27 AM'),
(158, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(159, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(160, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(161, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(162, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(163, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:28 AM'),
(164, 'B080519BC', 'Bonifacio C Bardiago III', 'Education', '', 'March 03, 2021 | 09:32 AM'),
(165, 'E020419JAL', 'Julie Ann L Evano', 'Education', '', 'March 03, 2021 | 09:37 AM'),
(166, 'C070110RD', 'Rustom D Clemente', 'IT', '', 'March 03, 2021 | 09:48 AM'),
(167, 'C070110RD', 'Rustom D Clemente', 'IT', '', 'March 03, 2021 | 09:48 AM'),
(168, 'C070110RD', 'Rustom D Clemente', 'IT', '', 'March 03, 2021 | 09:49 AM'),
(169, 'F030514AL', 'Ampilo L Flores', 'Security', '', 'March 03, 2021 | 11:41 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tbl_scans`
--
ALTER TABLE `tbl_scans`
  ADD PRIMARY KEY (`scan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(32) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `employee_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `tbl_scans`
--
ALTER TABLE `tbl_scans`
  MODIFY `scan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
