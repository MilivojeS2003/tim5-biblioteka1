-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 10:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ictcorte_biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `Id` int(11) NOT NULL,
  `ImePrezime` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `Biografija` varchar(4128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`Id`, `ImePrezime`, `Biografija`) VALUES
(1, 'Vilijam Šekspir', 'Vilijam Šekspir bio je jedan od najvećih pisaca i dramaturga na engleskom jeziku. Ono što ga ?ini velikim piscem i jednim od najboljih pisaca svih vremena je to što su njegove drame bogate politi?kim, moralnim i društvenim temama. Njegovi junaci su nosioci viših moralnih ideja, a u svojim delima Šekspir razmatra pitanja koja se ti?u stvaralaštva, umetnosti, sveta i njegovog na?ina funkcionisanja.\r\n'),
(2, 'Dante Aligijeri', 'Dante je veliki italijanski pesnik, zalagao se za pisanje na narodnom jeziku i bio osniva? strofe od tri stiha, tzv. tercine. Dante se ?esto naziva ,,ocem italijanskog jezika“ i u Italiji ga oslovljavaju sa Il Sommo Poeta (vrhovni pesnik). Dante je jedan od najve?ih pisaca zbog svog velikog uticaja na kasnije pesnike, kao što su ?oser i Milton.'),
(3, 'Fjodor Dostojevski', 'Dostojevski važi za jednog od najuticajnijih pisaca ruske književnosti. Njegov realizam grani?i se sa modernizmom zbog toga što je radnja njegovih romana  u osnovi i dalje realisti?ka, sa naracijom kao dominantnim književnim postupkom. Me?utim, na?in na koji gradi dramati?ne dijaloge, filozofske rasprave i polifoniju romana ?ini ga prete?om modernizma. On je tako?e i osniva? psihološkog romana. Zbog svih ovih razloga, Dostojevski je svakako jedan od najve?ih pisaca ikada.'),
(4, 'Lav Tolstoj', 'Sama ?injenica da je Tolstoj proglašen za najboljeg pisca u poslednjih 200 godina od strane 125 ameri?kih i britanskih književnika je dovoljan razlog da se Tolstoj na?e na ovoj listi. Bio je najve?i realista XIX veka i u svoja dva dela  Ana Karenjina i Rat i mirna maestralan na?in opisao je duboku, psihološku i društvenu pozadinu Rusije i njenog društva u XIX veku. '),
(5, 'Džejms Džojs', 'Džejms Džojs je eksperimentisanjem u narativnoj tehnici i strukturi romana i primeni toka svesti utemeljio nov pravac u modernoj književnosti. Njegovo rad uticao je na razvoj književne proze XX veka. '),
(6, 'Vilijam Fokner', 'Vilijam Fokner je jedan od najve?ih ameri?kih romanopisaca. U njegovim romanima dominantna je tragi?na vizija života u kojoj vlada sudbina. Fokner je pisao o škakljivim temama poput incesta, ubistva, silovanja, lin?a, bratoubistva da bi istražio samo zlo u ?oveku. Njegov uticaj na svetsku književnost je ogroman, dovoljno je re?i da su posleratna ameri?ka, zapadnoevropska i lationameri?ka literatura nezamislive bez Foknera.'),
(7, 'Ivo Andri?', 'Ivo Andri? je nesumnjivo jedan od najboljih pisac ikada. ?injenica da je dobio Nobelovu nagradu 1961. godine to potvr?uje, ali to nije jedini razlog. Njegovo stvaralaštvo je zna?ajno po mnogo ?emu, ali u srpskoj književnosti izdvaja ga to što je na izvanredan na?in uspeo da prikaže one neizrecive nagone u ?oveku koji su izvan njegove svesti i volje. Prikazao je kako ti nagoni pritiskaju ?oveka i zbog toga ga nazivaju modernim psihoanaliti?arem u našoj savremenoj književnosti.'),
(8, '?arls Dikens', 'Osniva? socijalnog realizma i najve?i pisac viktorijanskog perioda, ?arls Dikens svakako zaslužuje da se na?e na ovoj listi. Uvek je dizao glas protiv nepravde i zbog toga su junaci njegovih romana ?esto pripadali nižem socijalnom staležu. Napisao je ?etrnaest romana i svi oni se ubrajaju u popularne naslove svetske književnosti. '),
(9, 'Franc Kafka', 'Franca Kafku kritika smatra jednim od najve?ih pisaca XX veka. Pripadao je avangardi, posebno stilom pisanja, ali je svojim delovanjem uticao na kasniji modernizam, pogotovu na egzistencijalizam. Njegovi likovi nalaze se u konstantnom sukobu sa svetom i ose?aju se zarobljeno, zbunjeno, puni krivice i ne mogu shvatiti svet. Kafkin uticaj je ogroman, bio bi potreban ceo jedan rad da se posveti  samo tome koliko je uticao na potonje književnike i književnost. Dovoljno je re?i da se koristi termin post-kafkijanska književnost da bi se shvatio obim uticaja koji je izvršio. '),
(10, 'Tomas Man', 'Tomas Man bio je nema?ki pripoveda? i romanopisac. Sve njegove pri?e i romani predstavljaju varijacije jedne iste teme. One se bave pojedincem, obi?no umetnikom koji pokušava da se izbori sa besmislenoš?u postojanja. Njegovo pripovedanje je pomalo kitnjasto, ali svaka pri?a ili roman nosi u sebi duboku simboli?ku poruku. '),
(11, 'Virdžinija Vulf', 'Virdžinija Vulf je jedan od najvažnijih pisaca modernizma i osniva? feministi?ke kritike. Smatrala je da pisci treba da pišu o obi?nim ljudima i obi?nim stvarima koje zaista ?ine život. Velike teme su grandiozne, istoriju pišu pobednici, ali ko ?e pisati o malim ljudima, o svakodnevnim stvarima? Zbog toga, njeni romani su izuzetno eksperimentalni: postoji više mesta radnji, koja je uglavnom svakodnevna, prisutan je lirizam, a njeni likovi su u stanju stalnog preipsitivanja sopstvenog postojanja.'),
(12, 'Anton Pavlovi? ?ehov', 'Anton Pavlovi? ?ehov je zaista majstor kratke pri?e. On je u nekim pri?ama uspeo da prikaže ono što je na hiljade strana prikazivao Tolstoj. ?ehov je znao kako da pogodi suštinu u samo par re?enica, kako da prikaže ljudske patnje, želje, nadanja na malom prostoru. Zbog toga je on veliki pisac malih pri?a. \r\n\r\n'),
(13, 'Onore de Balzak', 'Onore de Balzak smatra se prete?om književnog realizma jer je u svom delu posve?ivao pažnju detaljima, posebno detaljima kojima bi trebalo da ilustruje svoje likove. Umeo je da iskoristi likove iz prethodnih književnosti poput škrtice, nesretnih ljubavnika, propalih karijerista i uvede ih u novu modu književnosti koja ?e u evropskoj književnosti dobiti naziv realizam. \r\n\r\n'),
(14, 'Horhe Luis Borhes', 'Horhe Luis Borhes je svojim radom obeležio hispanoameri?ku književnost i uticao na svetske književne tokove. Uglavnom je pisao kratke pri?e, ali je bio i esejista, scenarista, književni kriti?ar i prevodilac. U njegovim delima primetan je uticaj simbolizma, naturalizma, mitologije, matematike i teologije. Veliki uticaj imao je na latinoameri?ke pisce kao što su Kortasar, Ljosa, Fuentes i drugi koji se nazivaju prvi borhesovci.'),
(15, 'Marsel Prust', 'Marsel Prust je najpoznatiji po svom delu ,,U traganju za izgubljenim vremenom“ koje je napisao u 7 tomova i izdavao u periodu od 14 godina. To delo je ostavilo duboki trag u evropskoj književnosti XX veka i izvršilo veliki uticaj na mnoge potonje književnike. Teme kojima se bavio u ovom kapitalnom delu bile su ljubomora i ljubav, telesnost, nestalnost odnosa me?u ljudima, problemati?nost identiteta i dr. Prust je ostvario jedno od najve?ih dela u istoriji književnosti koje se može postaviti na sam vrh književnosti. \r\n\r\n'),
(16, 'Žoze Saramago', 'Žoze Saramago se smatra najve?im portugalskim piscem i jednim od najuticajnijih pisaca današnjice. U svojim delima Saramago se bavio ozbiljnim temama, ?esto pristupaju?i ?oveku sa velikom dozom saose?anja. Njegovi likovi teže da se me?usobno povežu i izgrade svoju li?nost kako bi pronašli dostojanstvo i smisao postojanja van svih ekonomskih i politi?kih okvira.\r\n\r\n'),
(17, 'Gabrijel Garsija Markes', 'Markesovo stvaralaštvo uticalo je na to da latinoameri?ka literatura do?e u centar pažnje svetske kulturne javnosti šezdesetih godina XX veka. On je pisac tzv. magi?nog realizma, žanra u kojem se stvarno i magi?no prepli?u sa svakodnevnom egzistencijom. Zna?ajan je i po tome što koristi nove pripovedne postupke kao što je unutrašnji monolog i kombinuje ih sa tradicionalnim tehnikama realizma. \r\n\r\n'),
(18, 'Semjuel Beket', 'Semjuel Beket bio je irski dramaturg koji je pisao o ljudskom postojanju i otu?enosti ljudi u jednom modernom svetu. On prikazuje pesimisti?ku viziju sveta, ?ovek je neko ko ve?no ?eka spasenje i njegovo ?ekanje ispunjeno je patnjom i tugom. On je pravi predstavnik apsurda, jer njegove drame deluju kao da se na njima dešava jedno veliko ništa.\r\n\r\n'),
(19, 'Johan Volfang Gete', 'Johan Volfang Gete bio je najzna?ajniji predstavnik evropskog neoklasicizma i romantizma krajem XVIII i po?etkom XIX veka. Njegova dela imala su veliki uticaj na stvaranje kasnijih muzi?kih i dramskih komada. Geteov uticaj je bio ogroman jer je shvatio da je došlo do promene u evropskom senzibilitetu, do sve ve?eg fokusa na smisao i emotivnost. To ne zna?i da je on bio previše emotivan, on je pohvalio suzdržanost i smatrao da je svaki višak preteran. '),
(20, 'Umberto Eko', 'Umberto Eko bio je italijanski pisac, kriti?ar, filozof i profesor semiotike. Ekova dela zasnivaju se na konceptu intertekstualnosti, odnosno povezanosti svih književnih dela. ?esto je navodio Džojsa i Borhesa, kao dva autora koji su najviše uticali na njegov rad.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `autors`
--

CREATE TABLE `autors` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `ImePrezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biografija` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autors`
--

INSERT INTO `autors` (`Id`, `ImePrezime`, `Biografija`, `created_at`, `updated_at`) VALUES
(1, 'Vilijam Šekspir', 'Vilijam Šekspir bio je jedan od najvećih pisaca i ..', NULL, '2021-05-10 14:47:29'),
(2, 'Dante Aligijeri', 'Dante je veliki italijanski pesnik, zalagao se za ...', NULL, NULL),
(3, 'Fjodor Dostojevski', 'Dostojevski važi za jednog od najuticajnijih pisac...', '2021-05-09 11:58:57', '2021-05-09 11:58:57');

-- --------------------------------------------------------

--
-- Table structure for table `format`
--

CREATE TABLE `format` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `format`
--

INSERT INTO `format` (`Id`, `Naziv`) VALUES
(1, 'A0'),
(2, 'A1'),
(3, 'A2'),
(4, 'A3'),
(5, 'A4'),
(6, 'A5'),
(7, 'A6'),
(8, 'A7'),
(9, 'A8'),
(10, 'A9'),
(11, 'A10'),
(12, 'B0'),
(13, 'B1'),
(14, 'B2'),
(15, 'B3'),
(16, 'B4'),
(17, 'B5'),
(18, 'B6'),
(19, 'B7'),
(20, 'B8'),
(21, 'B9'),
(22, 'B10'),
(23, 'C1'),
(24, 'C2'),
(25, 'C3'),
(26, 'C4'),
(27, 'C5'),
(28, 'C6'),
(29, 'C7'),
(30, 'C8'),
(31, 'C9'),
(32, 'C10'),
(33, 'D0'),
(34, 'D1'),
(35, 'D2'),
(36, 'D3'),
(37, 'D4'),
(38, 'D5'),
(39, 'D6'),
(40, 'D7'),
(41, 'D8'),
(42, 'D9'),
(43, 'D10');

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `Foto` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Naslovna` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `globalnavarijabla`
--

CREATE TABLE `globalnavarijabla` (
  `Id` int(11) NOT NULL,
  `Varijabla` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Vrijednost` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `globalnavarijabla`
--

INSERT INTO `globalnavarijabla` (`Id`, `Varijabla`, `Vrijednost`) VALUES
(1, 'ROK_POZAJMLJIVANJA', '20'),
(2, 'ROK_REZERVACIJE', '20'),
(3, 'ROK_PREKORACENJA', '5');

-- --------------------------------------------------------

--
-- Table structure for table `izdavac`
--

CREATE TABLE `izdavac` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `izdavac`
--

INSERT INTO `izdavac` (`Id`, `Naziv`) VALUES
(1, 'Adižes'),
(2, 'Admiral Books'),
(3, 'Aed studio'),
(4, 'Aerie books ltd'),
(5, 'Agencija Mati?'),
(6, 'Agencija Obradovi?'),
(7, 'AGM knjiga'),
(8, 'Agora Zrenjanin'),
(9, 'Akademija'),
(10, 'Bata'),
(11, 'Batatisak'),
(12, 'BDR media'),
(13, 'Beobook'),
(14, 'Beogradska knjiga'),
(15, 'Beoknjiga'),
(16, 'Centar VAM'),
(17, '?arobna knjiga'),
(18, '?igoja štampa'),
(19, 'Data Control'),
(20, 'Dejadora'),
(21, 'Dobar naslov'),
(22, 'Eden'),
(23, 'Ethos'),
(24, 'Evoluta'),
(25, 'Finesa'),
(26, 'Geopoetika'),
(27, 'Globosino'),
(28, 'Grafi?ki kolektiv'),
(29, 'Grafoprint'),
(30, 'Harizma'),
(31, 'Hesperia'),
(32, 'Ikonos'),
(33, 'Interprint'),
(34, 'Istarska naklada'),
(35, 'Jasen'),
(36, 'Jugoslovenska knjiga'),
(37, 'Književna zajednica Novog Sada'),
(38, 'Kulturni centar Novi Sad'),
(39, 'Legenda ?a?ak'),
(40, 'Matematiskop'),
(41, 'Medicinska knjiga ?a?ak'),
(42, 'Muzej grada Beograda'),
(43, 'Neopress'),
(44, 'Oktoih'),
(45, 'Partizanska knjiga'),
(46, 'Peši? i sinovi'),
(47, 'Porodi?ni bukvar'),
(48, 'Publikum'),
(49, 'Radni?ka štampa'),
(50, 'Slobodna knjiga'),
(51, 'Srpska Evropa');

-- --------------------------------------------------------

--
-- Table structure for table `izdavacs`
--

CREATE TABLE `izdavacs` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavacs`
--

INSERT INTO `izdavacs` (`Id`, `Naziv`, `created_at`, `updated_at`) VALUES
(2, 'Admiral Books', '2021-05-08 15:05:50', '2021-05-08 15:05:50'),
(3, 'Finesa', '2021-05-08 15:22:26', '2021-05-08 15:22:26'),
(4, 'Bata', '2021-05-08 15:23:00', '2021-05-08 15:23:00'),
(6, 'Akademija', '2021-05-08 16:01:43', '2021-05-08 16:01:43'),
(7, 'AGM knjiga', '2021-05-08 16:11:25', '2021-05-08 16:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `izdavanje`
--

CREATE TABLE `izdavanje` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `IzdaoKorisnikId` int(11) DEFAULT NULL,
  `PozajmioKorisnikId` int(11) DEFAULT NULL,
  `DatumIzdavanja` date DEFAULT NULL,
  `DatumVracanja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `izdavanjestatus`
--

CREATE TABLE `izdavanjestatus` (
  `Id` int(11) NOT NULL,
  `IzdavanjeId` int(11) DEFAULT NULL,
  `StatusKnjigeId` int(11) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `jezik`
--

CREATE TABLE `jezik` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jezik`
--

INSERT INTO `jezik` (`Id`, `Naziv`) VALUES
(1, 'Kineski'),
(2, 'Mandarinski'),
(3, 'Spanski'),
(4, 'Engleski'),
(5, 'Hindi'),
(6, 'Arapski'),
(7, 'Portuglaski'),
(8, 'Bengalski'),
(9, 'Ruski'),
(10, 'Japanski'),
(11, 'Javanski'),
(12, 'Njemacki'),
(13, 'Korejski'),
(14, 'Francuski'),
(15, 'Persijski');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija`
--

CREATE TABLE `kategorija` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Ikonica` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Opis` varchar(2048) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `kategorija`
--

INSERT INTO `kategorija` (`Id`, `Naziv`, `Ikonica`, `Opis`) VALUES
(1, 'Umjetnost i fotografija', NULL, NULL),
(2, 'Biografije i memoari', NULL, NULL),
(3, 'Posao i ulaganje', NULL, NULL),
(4, 'Knjige za djecu', NULL, NULL),
(5, 'Kuvari, hrana i vino', NULL, NULL),
(6, 'Istorija', NULL, NULL),
(7, 'Knjizevnost i beletristika', NULL, NULL),
(8, 'Misterija i neizvjesnost', NULL, NULL),
(9, 'Romansa', NULL, NULL),
(10, 'Naucna fantastika i fantazija', NULL, NULL),
(11, 'Tinejdzeri i mladi', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knjiga`
--

CREATE TABLE `knjiga` (
  `Id` int(11) NOT NULL,
  `Naslov` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `BrojStrana` int(11) DEFAULT NULL,
  `PismoId` int(11) DEFAULT NULL,
  `JezikId` int(11) DEFAULT NULL,
  `PovezId` int(11) DEFAULT NULL,
  `FormatId` int(11) DEFAULT NULL,
  `IzdavacId` int(11) DEFAULT NULL,
  `DatumIzdavanja` date DEFAULT NULL,
  `ISBN` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `UkupnoPrimjeraka` int(11) DEFAULT NULL,
  `IzdatoPrimjeraka` int(11) DEFAULT NULL,
  `RezervisanoPrimjeraka` int(11) DEFAULT NULL,
  `Sadrzaj` varchar(4128) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `knjigaautor`
--

CREATE TABLE `knjigaautor` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `AutorId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `knjigakategorija`
--

CREATE TABLE `knjigakategorija` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `KategorijaId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `knjigazanr`
--

CREATE TABLE `knjigazanr` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `ZanrId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `Id` int(11) NOT NULL,
  `TipKorisnikaId` int(11) DEFAULT NULL,
  `ImePrezime` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `JMBG` varchar(14) COLLATE utf8_bin DEFAULT NULL,
  `Email` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `KorisnickoIme` varchar(64) COLLATE utf8_bin DEFAULT NULL,
  `Sifra` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Foto` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`Id`, `TipKorisnikaId`, `ImePrezime`, `JMBG`, `Email`, `KorisnickoIme`, `Sifra`, `Foto`) VALUES
(1, NULL, 'Ksenija A?imovi?', NULL, 'acimovic.ksenija.s3a.8159@ets-pg.edu.me', 'acimovic.ksenija', NULL, NULL),
(2, NULL, 'Bogdan Babovi?', NULL, 'babovic.bogdan.s3a.1009@ets-pg.edu.me', '	\r\nbabovic.bogda', NULL, NULL),
(3, NULL, 'Tatjana Be?i?', NULL, 'becic.tatjana.s3a.6000@ets-pg.edu.me', 'becic.tatjana', NULL, NULL),
(4, NULL, 'Vasilije Božari?', NULL, 'bozaric.vasilije.s3a.1005@ets-pg.edu.me', 'bozaric.vasilije', NULL, NULL),
(5, NULL, 'Said Dautovi?', NULL, 'dautovic.said.s3a.1005@ets-pg.edu.me', 'dautovic.said', NULL, NULL),
(6, NULL, 'Helena Dragaš', NULL, 'dragas.helena.s3a.6007@ets-pg.edu.me', 'dragas.helena', NULL, NULL),
(7, NULL, 'Sara Hodži?', NULL, 'hodzic.sara.s3a.6008@ets-pg.edu.me', 'hodzic.sara', NULL, NULL),
(8, NULL, 'Petar Jovanovi?', NULL, 'jovanovic.petar.s3a.0018@ets-pg.edu.me', 'jovanovic.petar', NULL, NULL),
(9, NULL, 'Petar Kasalica', NULL, 'kasalica.petar.s3a.1023@ets-pg.edu.me', 'kasalica.petar', NULL, NULL),
(10, NULL, 'Nemanja Koruga', NULL, 'koruga.nemanja.s3a.2995@ets-pg.edu.me', 'koruga.nemanja', NULL, NULL),
(11, NULL, 'Vuk Krkelji?', NULL, 'krkeljic.vuk.s3a.1029@ets-pg.edu.me', 'krkeljic.vuk', NULL, NULL),
(12, NULL, '?or?e Kruš?i?', NULL, 'kruscic.djordje.s3a.1017@ets-pg.edu.me', 'kruscic.djordje', NULL, NULL),
(13, NULL, 'Balša Maraš', NULL, 'maras.balsa.s3a.1027@ets-pg.edu.me', 'maras.balsa', NULL, NULL),
(14, NULL, 'Dragan Mijatovi?', NULL, 'mijatovic.dragan.s3a.1026@ets-pg.edu.me', 'mijatovic.dragan', NULL, NULL),
(15, NULL, 'Aleksa Miks', NULL, 'miks.aleksa.s3a.1098@ets-pg.edu.me', 'miks.aleksa', NULL, NULL),
(16, NULL, 'Vujo Pajkovi?', NULL, 'pajkovic.vujo.s3a.1986@ets-pg.edu.me', 'pajkovic.vujo', NULL, NULL),
(17, NULL, 'Jovan Popovi?', NULL, 'popovic.jovan.s3a.1006@ets-pg.edu.me', 'popovic.jovan', NULL, NULL),
(18, NULL, 'Ivan Radulovi?', NULL, 'radulovic.ivan.s3a.1050@ets-pg.edu.me', 'radulovic.ivan', NULL, NULL),
(19, NULL, 'Anel Ramovi?', NULL, 'ramovic.anel.s3a.1036@ets-pg.edu.me', 'ramovic.anel', NULL, NULL),
(20, NULL, 'Milivoje Sin?i?', NULL, 'sindjic.milivoje.s3a.1048@ets-pg.edu.me', 'sindjic.milivoje', NULL, NULL),
(21, NULL, 'Dejan Šlivan?anin', NULL, 'sljivancanin.dejan.s3a.3009@ets-pg.edu.me', 'sljivancanin.dejan', NULL, NULL),
(22, NULL, 'Andrej Šofranac', NULL, 'sofranac.andrej.s3a.0016@ets-pg.edu.me', 'sofranac.andrej', NULL, NULL),
(23, NULL, 'Ivana Vujoševi?', NULL, 'vujosevic.ivana.s3a.6034@ets-pg.edu.me', 'vujosevic.ivana', NULL, NULL),
(24, NULL, 'Lorenco-Adelin Alboiu ', NULL, 'alboiu.lorenco-adelin.s3b.0519@ets-pg.edu.me', '	\r\nalboiu.lorenco-adelin', NULL, NULL),
(25, NULL, 'Arben ?okovi?', NULL, 'djokovic.arben.s3b.1068@ets-pg.edu.me', 'djokovic.arben', NULL, NULL),
(26, NULL, 'Draško ?urovi?', NULL, 'djurovic.drasko.s3b.1014@ets-pg.edu.me', 'djurovic.drasko', NULL, NULL),
(27, NULL, 'Matija Drobnjak', NULL, 'drobnjak.matija.s3b.1010@ets-pg.edu.me', 'drobnjak.matija', NULL, NULL),
(28, NULL, 'Andrej Filipovi?', NULL, 'filipovic.andrej.s3b.0145@ets-pg.edu.me', 'filipovic.andrej', NULL, NULL),
(29, NULL, 'Armin Koljenovi?', NULL, 'koljenovic.armin.s3b.1010@ets-pg.edu.me', 'koljenovic.armin', NULL, NULL),
(30, NULL, 'Davor Lakovi?', NULL, 'lakovic.davor.s3b.1016@ets-pg.edu.me', 'lakovic.davor', NULL, NULL),
(31, NULL, 'Nikola Lazovi?', NULL, 'lazovic.nikola.s3b.1010@ets-pg.edu.me', '	\r\nlazovic.nikola', NULL, NULL),
(32, NULL, 'Anton Ljucovi?', NULL, 'ljucovic.anton.s3b.1018@ets-pg.edu.me', 'ljucovic.anton', NULL, NULL),
(33, NULL, 'Aleksa Mini?', NULL, 'minic.aleksa.s3b.1017@ets-pg.edu.me', 'minic.aleksa', NULL, NULL),
(34, NULL, 'Marija Perovi?', NULL, 'perovic.marija.s3b.6027@ets-pg.edu.me', 'perovic.marija', NULL, NULL),
(35, NULL, 'Vasilije Popovi?', NULL, 'popovic.vasilije.s3b.1004@ets-pg.edu.me', 'popovic.vasilije', NULL, NULL),
(36, NULL, 'Nemanja Radeti?', NULL, 'radetic.nemanja.s3b.1032@ets-pg.edu.me', 'radetic.nemanja', NULL, NULL),
(37, NULL, 'Rako?evi? Vasilije', NULL, 'rakocevic.vasilije.s3b.1031@ets-pg.edu.me', 'rakocevic.vasilije', NULL, NULL),
(38, NULL, 'Petar Roksandic', NULL, 'roksandic.petar.s3b.1001@ets-pg.edu.me', 'roksandic.petar', NULL, NULL),
(39, NULL, 'Dejan Rosandic', NULL, 'rosandic.dejan.s3b.1006@ets-pg.edu.me', '\r\n\r\nrosandic.dejan', NULL, NULL),
(40, NULL, 'Darijan Škrijelj', NULL, 'skrijelj.darijan.s3b.1004@ets-pg.edu.me', 'skrijelj.darijan', NULL, NULL),
(41, NULL, 'Mirko Tanjevi?', NULL, 'tanjevic.mirko.s3b.1000@ets-pg.edu.me', 'tanjevic.mirko', NULL, NULL),
(42, NULL, 'Aleksa Tomi?', NULL, 'tomic.aleksa.s3b.1009@ets-pg.edu.me', '	\r\ntomic.aleksa', NULL, NULL),
(43, NULL, 'Aleksa Vuk?evi?', NULL, 'vukcevic.aleksa.s3b.1018@ets-pg.edu.me', 'vukcevic.aleksa', NULL, NULL),
(44, NULL, '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `korisniklogin`
--

CREATE TABLE `korisniklogin` (
  `Id` int(11) NOT NULL,
  `KorisnikId` int(11) DEFAULT NULL,
  `Vrijeme` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `korisniks`
--

CREATE TABLE `korisniks` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `tipkorisnika_id` bigint(20) UNSIGNED NOT NULL,
  `ImePrezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JMBG` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `KorisnickoIme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sifra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisniks`
--

INSERT INTO `korisniks` (`Id`, `tipkorisnika_id`, `ImePrezime`, `Email`, `JMBG`, `KorisnickoIme`, `Sifra`, `Foto`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ksenija Acimovic', 'ksenija@gmail', NULL, 'ksenija123', NULL, NULL, NULL, NULL),
(2, 1, 'Ivan Ivanovic', 'ivan@gmail.com', NULL, 'ivan123', NULL, NULL, NULL, NULL),
(3, 1, 'Vlado Vladic', 'ime@ime.com', '1234567890123', 'vlado123', 'sifra123', NULL, '2021-05-10 13:13:41', '2021-05-10 13:13:41'),
(9, 1, 'Vlado Vladic hhhhh', 'ime@ime.com', '1234567890123', 'vlado123', 'sifra123', NULL, '2021-05-10 14:45:56', '2021-05-10 14:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_05_08_164810_create_izdavacs_table', 1),
(2, '2021_05_09_100829_create_autors_table', 2),
(4, '2021_05_09_132624_create_autors_table', 3),
(5, '2021_05_10_100419_create_tipkorisnikas_table', 4),
(6, '2021_05_10_115517_create_tipkorisnikas_table', 5),
(7, '2021_05_10_115607_create_korisniks_table', 6),
(8, '2021_05_10_131639_create_tipkorisnikas_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `pismo`
--

CREATE TABLE `pismo` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pismo`
--

INSERT INTO `pismo` (`Id`, `Naziv`) VALUES
(1, 'Fenicki alfabet'),
(2, 'Grcki alfabet'),
(3, 'Latinica'),
(4, 'Karolinška miniskula'),
(5, 'Goti?ka miniskula'),
(6, 'Humanisti?ka miniskula'),
(7, 'Glagoljica'),
(8, 'Ćirilica'),
(9, 'Kritsko linearno pismo'),
(10, 'Hebrejsko kvadrati?no pismo'),
(11, 'Devangari'),
(12, 'Arapsko pismo'),
(13, 'Klinasto pismo'),
(14, 'Egipatski hijeroglifi'),
(15, 'Kinesko pismo');

-- --------------------------------------------------------

--
-- Table structure for table `povez`
--

CREATE TABLE `povez` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `povez`
--

INSERT INTO `povez` (`Id`, `Naziv`) VALUES
(1, 'Zi?ana spirala'),
(2, 'Plasticna spirala'),
(3, 'Meki povez'),
(4, 'Tvrdi povez'),
(5, 'Heftanje'),
(6, 'Klamovanje');

-- --------------------------------------------------------

--
-- Table structure for table `razlogzatvaranjarezervacije`
--

CREATE TABLE `razlogzatvaranjarezervacije` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `razlogzatvaranjarezervacije`
--

INSERT INTO `razlogzatvaranjarezervacije` (`Id`, `Naziv`) VALUES
(1, 'Rezervacija istekla'),
(2, 'Rezervacija odbijena'),
(3, 'Rezervacija otkazana'),
(4, 'Knjiga izdata');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacija`
--

CREATE TABLE `rezervacija` (
  `Id` int(11) NOT NULL,
  `KnjigaId` int(11) DEFAULT NULL,
  `ZaKorisnikaId` int(11) DEFAULT NULL,
  `RezervisaoKorisnikId` int(11) DEFAULT NULL,
  `DatumPodnosenja` date DEFAULT NULL,
  `DatumRezervacije` date DEFAULT NULL,
  `DatumZatvaranja` date DEFAULT NULL,
  `RazlogZatvaranjaId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `rezervacijastatus`
--

CREATE TABLE `rezervacijastatus` (
  `Id` int(11) NOT NULL,
  `RezervacijaId` int(11) DEFAULT NULL,
  `StatusRezervacijeId` int(11) DEFAULT NULL,
  `Datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `statusknjige`
--

CREATE TABLE `statusknjige` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `statusknjige`
--

INSERT INTO `statusknjige` (`Id`, `Naziv`) VALUES
(1, 'Rezervisana'),
(2, 'Izdata'),
(3, 'Vracena'),
(4, 'Vraćena sa prekoračenjem');

-- --------------------------------------------------------

--
-- Table structure for table `statusrezervacije`
--

CREATE TABLE `statusrezervacije` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `statusrezervacije`
--

INSERT INTO `statusrezervacije` (`Id`, `Naziv`) VALUES
(1, 'Rezervisana'),
(2, 'Na čekanju'),
(3, 'Odbijena'),
(4, 'Zatvorena');

-- --------------------------------------------------------

--
-- Table structure for table `tipkorisnika`
--

CREATE TABLE `tipkorisnika` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tipkorisnika`
--

INSERT INTO `tipkorisnika` (`Id`, `Naziv`) VALUES
(1, 'Bibliotekar'),
(2, 'Ucenik');

-- --------------------------------------------------------

--
-- Table structure for table `tipkorisnikas`
--

CREATE TABLE `tipkorisnikas` (
  `Id` bigint(20) UNSIGNED NOT NULL,
  `Naziv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tipkorisnikas`
--

INSERT INTO `tipkorisnikas` (`Id`, `Naziv`, `created_at`, `updated_at`) VALUES
(1, 'Bibliotekar', NULL, NULL),
(2, 'Učenik', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `Id` int(11) NOT NULL,
  `Naziv` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Ikonica` varchar(256) COLLATE utf8_bin DEFAULT NULL,
  `Opis` varchar(2048) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`Id`, `Naziv`, `Ikonica`, `Opis`) VALUES
(1, 'Ljubavni romani', NULL, NULL),
(2, 'Dijete i zdrav zivot', NULL, NULL),
(3, 'Domaca knjizevnost', NULL, NULL),
(4, 'Djecija knjizevnost', NULL, NULL),
(5, 'Fantastika', NULL, NULL),
(6, 'Horor', NULL, NULL),
(7, 'Istorijski roman', NULL, NULL),
(8, 'Savremena knjizevnost', NULL, NULL),
(9, 'Popularna beletristika', NULL, NULL),
(10, 'Politika i ekonomija', NULL, NULL),
(11, 'Samousavrsavanja / Popularna psihologija', NULL, NULL),
(12, 'Tinejdzerska knjizevnost', NULL, NULL),
(13, 'Triler', NULL, NULL),
(14, 'Strip', NULL, NULL),
(15, 'Avantura', NULL, NULL),
(16, 'Biografija', NULL, NULL),
(17, 'Bojanke', NULL, NULL),
(18, 'Bojanke za odrasle', NULL, NULL),
(19, 'De?je knjige', NULL, NULL),
(20, 'Doma?i autori', NULL, NULL),
(21, 'Drama', NULL, NULL),
(22, 'Duh i telo', NULL, NULL),
(23, 'E-knjige', NULL, NULL),
(24, 'Enciklopedije', NULL, NULL),
(25, 'Epska fantastika', NULL, NULL),
(26, 'Erotika', NULL, NULL),
(27, 'Filmovane knjige', NULL, NULL),
(28, 'Filozofija', NULL, NULL),
(29, 'Interaktivna knjiga', NULL, NULL),
(30, 'Klasici', NULL, NULL),
(31, 'Komedija', NULL, NULL),
(32, 'Kriminalistika', NULL, NULL),
(33, 'Kuvari', NULL, NULL),
(34, 'Marketing i menadžment', NULL, NULL),
(35, 'Mitologije', NULL, NULL),
(36, 'Muzika', NULL, NULL),
(37, 'Poezija', NULL, NULL),
(38, 'Popularna nauka', NULL, NULL),
(39, 'Popularna psihologija', NULL, NULL),
(40, 'Potpisane knjige', NULL, NULL),
(41, 'Pri?e', NULL, NULL),
(42, 'Psihologija', NULL, NULL),
(43, 'Publicistika', NULL, NULL),
(44, 'Putopisi', NULL, NULL),
(45, 'Slikovnice', NULL, NULL),
(46, 'Sport', NULL, NULL),
(47, 'Teorije zavere', NULL, NULL),
(48, 'Tinejdž', NULL, NULL),
(49, 'Trileri', NULL, NULL),
(50, 'Umetnost', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `autors`
--
ALTER TABLE `autors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `format`
--
ALTER TABLE `format`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`);

--
-- Indexes for table `globalnavarijabla`
--
ALTER TABLE `globalnavarijabla`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `izdavac`
--
ALTER TABLE `izdavac`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `izdavacs`
--
ALTER TABLE `izdavacs`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `izdavanje`
--
ALTER TABLE `izdavanje`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`),
  ADD KEY `IzdaoKorisnikId` (`IzdaoKorisnikId`),
  ADD KEY `PozajmioKorisnikId` (`PozajmioKorisnikId`);

--
-- Indexes for table `izdavanjestatus`
--
ALTER TABLE `izdavanjestatus`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IzdavanjeId` (`IzdavanjeId`),
  ADD KEY `StatusKnjigeId` (`StatusKnjigeId`);

--
-- Indexes for table `jezik`
--
ALTER TABLE `jezik`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `kategorija`
--
ALTER TABLE `kategorija`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PismoId` (`PismoId`),
  ADD KEY `JezikId` (`JezikId`),
  ADD KEY `PovezId` (`PovezId`),
  ADD KEY `FormatId` (`FormatId`),
  ADD KEY `IzdavacId` (`IzdavacId`);

--
-- Indexes for table `knjigaautor`
--
ALTER TABLE `knjigaautor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`),
  ADD KEY `AutorId` (`AutorId`);

--
-- Indexes for table `knjigakategorija`
--
ALTER TABLE `knjigakategorija`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`),
  ADD KEY `KategorijaId` (`KategorijaId`);

--
-- Indexes for table `knjigazanr`
--
ALTER TABLE `knjigazanr`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`),
  ADD KEY `ZanrId` (`ZanrId`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TipKorisnikaId` (`TipKorisnikaId`);

--
-- Indexes for table `korisniklogin`
--
ALTER TABLE `korisniklogin`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KorisnikId` (`KorisnikId`);

--
-- Indexes for table `korisniks`
--
ALTER TABLE `korisniks`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `korisniks_tipkorisnika_id_index` (`tipkorisnika_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pismo`
--
ALTER TABLE `pismo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `povez`
--
ALTER TABLE `povez`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `razlogzatvaranjarezervacije`
--
ALTER TABLE `razlogzatvaranjarezervacije`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rezervacija`
--
ALTER TABLE `rezervacija`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KnjigaId` (`KnjigaId`),
  ADD KEY `ZaKorisnikaId` (`ZaKorisnikaId`),
  ADD KEY `RezervisaoKorisnikId` (`RezervisaoKorisnikId`),
  ADD KEY `RazlogZatvaranjaId` (`RazlogZatvaranjaId`);

--
-- Indexes for table `rezervacijastatus`
--
ALTER TABLE `rezervacijastatus`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RezervacijaId` (`RezervacijaId`),
  ADD KEY `StatusRezervacijeId` (`StatusRezervacijeId`);

--
-- Indexes for table `statusknjige`
--
ALTER TABLE `statusknjige`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `statusrezervacije`
--
ALTER TABLE `statusrezervacije`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tipkorisnikas`
--
ALTER TABLE `tipkorisnikas`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `autors`
--
ALTER TABLE `autors`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `format`
--
ALTER TABLE `format`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `globalnavarijabla`
--
ALTER TABLE `globalnavarijabla`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `izdavac`
--
ALTER TABLE `izdavac`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `izdavacs`
--
ALTER TABLE `izdavacs`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `izdavanje`
--
ALTER TABLE `izdavanje`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izdavanjestatus`
--
ALTER TABLE `izdavanjestatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jezik`
--
ALTER TABLE `jezik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategorija`
--
ALTER TABLE `kategorija`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knjigaautor`
--
ALTER TABLE `knjigaautor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knjigakategorija`
--
ALTER TABLE `knjigakategorija`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `knjigazanr`
--
ALTER TABLE `knjigazanr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `korisniklogin`
--
ALTER TABLE `korisniklogin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `korisniks`
--
ALTER TABLE `korisniks`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pismo`
--
ALTER TABLE `pismo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `povez`
--
ALTER TABLE `povez`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `razlogzatvaranjarezervacije`
--
ALTER TABLE `razlogzatvaranjarezervacije`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rezervacija`
--
ALTER TABLE `rezervacija`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rezervacijastatus`
--
ALTER TABLE `rezervacijastatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statusknjige`
--
ALTER TABLE `statusknjige`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statusrezervacije`
--
ALTER TABLE `statusrezervacije`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipkorisnika`
--
ALTER TABLE `tipkorisnika`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipkorisnikas`
--
ALTER TABLE `tipkorisnikas`
  MODIFY `Id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
