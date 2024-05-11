-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2024 at 08:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `acaddetails`
--

CREATE TABLE `acaddetails` (
  `id` int(10) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `department` varchar(30) DEFAULT NULL,
  `phdSupervisor` varchar(30) DEFAULT NULL,
  `yearOfJoining` int(4) DEFAULT NULL,
  `dateOfThesis` varchar(30) NOT NULL,
  `dateOfAward` varchar(30) NOT NULL,
  `titleOfThesis` varchar(100) DEFAULT NULL,
  `school10th` varchar(100) DEFAULT NULL,
  `school12th` varchar(100) DEFAULT NULL,
  `yearOfPass10th` int(4) DEFAULT NULL,
  `yearOfPass12th` int(4) DEFAULT NULL,
  `percentage10th` float DEFAULT NULL,
  `percentage12th` float DEFAULT NULL,
  `division10th` varchar(10) DEFAULT NULL,
  `division12th` varchar(10) DEFAULT NULL,
  `pg_deg` varchar(50) NOT NULL,
  `pg_uni` varchar(50) NOT NULL,
  `pg_branch` varchar(50) NOT NULL,
  `pg_yoj` int(11) NOT NULL,
  `pg_yoc` int(11) NOT NULL,
  `pg_duration` int(11) NOT NULL,
  `pg_cgpa` double NOT NULL,
  `pg_div` varchar(20) NOT NULL,
  `ug_deg` varchar(30) NOT NULL,
  `ug_uni` varchar(50) NOT NULL,
  `ug_branch` varchar(50) NOT NULL,
  `ug_yoj` int(11) NOT NULL,
  `ug_yoc` int(4) NOT NULL,
  `ug_duration` int(4) NOT NULL,
  `ug_cgpa` double NOT NULL,
  `ug_div` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acaddetails`
--

INSERT INTO `acaddetails` (`id`, `university`, `department`, `phdSupervisor`, `yearOfJoining`, `dateOfThesis`, `dateOfAward`, `titleOfThesis`, `school10th`, `school12th`, `yearOfPass10th`, `yearOfPass12th`, `percentage10th`, `percentage12th`, `division10th`, `division12th`, `pg_deg`, `pg_uni`, `pg_branch`, `pg_yoj`, `pg_yoc`, `pg_duration`, `pg_cgpa`, `pg_div`, `ug_deg`, `ug_uni`, `ug_branch`, `ug_yoj`, `ug_yoc`, `ug_duration`, `ug_cgpa`, `ug_div`) VALUES
(1, '840-508-9239', '13391 Carole Passage', 'Pariatur dignissimos omnis quo', 522, '10/05/2024', '492-551-0851', 'Human Markets Coordinator', 'A numquam vel soluta.', 'Nesciunt totam molestias est repellendus.', 0, 0, 829, 233, 'Sunt ', 'Sunt ', '2024-12-15 09:12:51', 'Corrupti illum ipsa facilis nam cum alias numquam.', 'Voluptatum laborum provident eaque esse ipsum.', 0, 0, 2024, 899, 'Reiciendis unde dign', '2024-04-11 18:02:28', 'Ipsa natus nihil itaque adipisci maiores eius vel.', 'Commodi minima quibusdam quas doloribus.', 0, 0, 2023, 390, 'Sint velit');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `awardedBy` varchar(30) DEFAULT NULL,
  `year` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `name`, `awardedBy`, `year`) VALUES
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0),
(1, 'Mollitia nostrum doloribus con', 'Eaque doloribus dolor ratione ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bestpublications`
--

CREATE TABLE `bestpublications` (
  `id` int(10) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `impactFactor` varchar(8) DEFAULT NULL,
  `doi` varchar(30) NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bestpublications`
--

INSERT INTO `bestpublications` (`id`, `author`, `title`, `name`, `year`, `impactFactor`, `doi`, `status`) VALUES
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', ''),
(1, 'Facilis quisquam voluptas voluptatum consequuntur ', 'Investor Creative Director', 'Accusantium inventore modi sunt ratione blanditiis', 0, '0', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookchapter`
--

CREATE TABLE `bookchapter` (
  `id` int(10) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `yop` int(4) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookchapter`
--

INSERT INTO `bookchapter` (`id`, `author`, `title`, `yop`, `isbn`) VALUES
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison    ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison      ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison      ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison        ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison      ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison        ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison        ', 0, 'Id provident consequ'),
(1, 'Illum ullam officia tenetur corrupti quia blanditi', 'Senior Integration Liaison          ', 0, 'Id provident consequ');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `yop` int(4) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author`, `title`, `yop`, `isbn`) VALUES
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent    ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent      ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent      ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent        ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent      ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent        ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent        ', 0, 'Eligendi laudantium '),
(1, 'Neque laudantium occaecati error repellendus ratio', 'Product Paradigm Agent          ', 0, 'Eligendi laudantium ');

-- --------------------------------------------------------

--
-- Table structure for table `consultancyprojects`
--

CREATE TABLE `consultancyprojects` (
  `id` int(10) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `period` int(4) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consultancyprojects`
--

INSERT INTO `consultancyprojects` (`id`, `organization`, `title`, `amount`, `period`, `role`, `status`) VALUES
(1, 'Indian Institute of Technology Patna', 'Chief Tactics Coordinator', 0, 7, 'Principal Investigator', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `degreedetails`
--

CREATE TABLE `degreedetails` (
  `id` int(10) NOT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `university` varchar(50) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `yearOfJoining` int(4) DEFAULT NULL,
  `yearOfCompletion` int(4) DEFAULT NULL,
  `duration` int(4) DEFAULT NULL,
  `cgpa` float DEFAULT NULL,
  `division` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degreedetails`
--

INSERT INTO `degreedetails` (`id`, `degree`, `university`, `branch`, `yearOfJoining`, `yearOfCompletion`, `duration`, `cgpa`, `division`) VALUES
(1, 'PGDCA', 'IIT Bombay', 'Accountancy', 2009, 2011, 2, 95.8, '1st');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(10) NOT NULL,
  `phd_cert` varchar(100) NOT NULL,
  `best_cert` varchar(100) NOT NULL,
  `pg_docs` varchar(100) NOT NULL,
  `ug_docs` varchar(100) NOT NULL,
  `docs_12` varchar(100) NOT NULL,
  `docs_10` varchar(100) NOT NULL,
  `pay_slip` varchar(100) NOT NULL,
  `noc` varchar(100) NOT NULL,
  `post_phd` varchar(100) NOT NULL,
  `relevant` varchar(100) NOT NULL,
  `sign` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `phd_cert`, `best_cert`, `pg_docs`, `ug_docs`, `docs_12`, `docs_10`, `pay_slip`, `noc`, `post_phd`, `relevant`, `sign`) VALUES
(1, 'documents/ID_Card.jpg', 'documents/bonafide.pdf', '', '', '', 'documents/cpu3.png', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employmentdetails`
--

CREATE TABLE `employmentdetails` (
  `id` int(10) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `dateOfJoining` varchar(30) NOT NULL  ,
  `dateOfLeaving` varchar(30) NOT NULL  ,
  `duration` int(4) DEFAULT NULL,
  `areaOfSpecialization` varchar(250) DEFAULT NULL,
  `currentAreaOfResearch` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employmentdetails`
--

INSERT INTO `employmentdetails` (`id`, `position`, `organization`, `status`, `dateOfJoining`, `dateOfLeaving`, `duration`, `areaOfSpecialization`, `currentAreaOfResearch`) VALUES
(1, '2fvedw', 'wdfewdvg ed', 'State Government', 'dqecdws', 'ewvedw', 0, '0', 'fvrcds');

-- --------------------------------------------------------

--
-- Table structure for table `employmenthistory`
--

CREATE TABLE `employmenthistory` (
  `id` int(10) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `dateOfJoining` varchar(30) NOT NULL  ,
  `dateOfLeaving` varchar(30) NOT NULL  ,
  `duration` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employmenthistory`
--

INSERT INTO `employmenthistory` (`id`, `position`, `organization`, `dateOfJoining`, `dateOfLeaving`, `duration`) VALUES
(1, 'Repellendus sapiente placeat m', 'Id quae ex blanditiis debitis quam quis est.', '0000-00-00', '0000-00-00', 2024);

-- --------------------------------------------------------

--
-- Table structure for table `industrialexperience`
--

CREATE TABLE `industrialexperience` (
  `id` int(10) NOT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `workprofile` varchar(50) DEFAULT NULL,
  `dateOfJoining` varchar(30) NOT NULL  ,
  `dateOfLeaving` varchar(30) NOT NULL  ,
  `duration` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industrialexperience`
--

INSERT INTO `industrialexperience` (`id`, `organization`, `workprofile`, `dateOfJoining`, `dateOfLeaving`, `duration`) VALUES
(1, 'Eaque doloribus dolor ratione veniam error distinctio.    ', 'regtfb    ', 'wqdfgbn   ', 'wefrtgb    ', 89),
(1, 'Sint libero quo fugit.    ', 'regtfb    ', 'Eligendi vero molestiae magni ', 'qsdwefg    ', 9);

-- --------------------------------------------------------

--
-- Table structure for table `memprofsociety`
--

CREATE TABLE `memprofsociety` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memprofsociety`
--

INSERT INTO `memprofsociety` (`id`, `name`, `status`) VALUES
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington'),
(1, 'Simone Camacho', 'Washington');

-- --------------------------------------------------------

--
-- Table structure for table `patents`
--

CREATE TABLE `patents` (
  `id` int(10) NOT NULL,
  `inventor` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `patentNo` int(10) DEFAULT NULL,
  `dof` varchar(30) DEFAULT NULL,
  `dop` varchar(30) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patents`
--

INSERT INTO `patents` (`id`, `inventor`, `title`, `country`, `patentNo`, `dof`, `dop`, `status`) VALUES
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol'),
(1, 'aDPbbK2GrjgP0Uf', 'Global Program Associate', 'Morocco', 77, '0000-00-00', '0000-00-00', 'Vero vitae recusandae rerum nesciunt quod amet mol');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `AdvertisementNumber` varchar(50) NOT NULL,
  `ApplicationNumber` int(10) NOT NULL,
  `DateofApplication` date NOT NULL,
  `Department_School` varchar(30) NOT NULL,
  `PostAppliedfor` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `MiddleName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) NOT NULL,
  `Nationality` varchar(20) NOT NULL,
  `DateofBirth` date NOT NULL,
  `MaritalStatus` varchar(10) NOT NULL,
  `IDProof` varchar(20) DEFAULT NULL,
  `Gender` varchar(10) NOT NULL,
  `Category` varchar(10) DEFAULT NULL,
  `UpdateIDProof` varchar(100) NOT NULL,
  `FathersName` varchar(30) NOT NULL,
  `Filename` varchar(100) NOT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Street` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `Country` varchar(20) DEFAULT NULL,
  `PIN_ZIP` int(10) DEFAULT NULL,
  `State1` varchar(20) DEFAULT NULL,
  `Street1` varchar(20) DEFAULT NULL,
  `City2` varchar(20) DEFAULT NULL,
  `Country1` varchar(20) DEFAULT NULL,
  `PIN_ZIP1` int(10) DEFAULT NULL,
  `Mobile` int(10) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `AlternateMobile` int(10) DEFAULT NULL,
  `AlternateEmail` varchar(30) DEFAULT NULL,
  `LandlineNumber` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `AdvertisementNumber`, `ApplicationNumber`, `DateofApplication`, `Department_School`, `PostAppliedfor`, `FirstName`, `MiddleName`, `LastName`, `Nationality`, `DateofBirth`, `MaritalStatus`, `IDProof`, `Gender`, `Category`, `UpdateIDProof`, `FathersName`, `Filename`, `State`, `Street`, `City`, `Country`, `PIN_ZIP`, `State1`, `Street1`, `City2`, `Country1`, `PIN_ZIP1`, `Mobile`, `Email`, `AlternateMobile`, `AlternateEmail`, `LandlineNumber`) VALUES
(1, 'IITP/FACREC-CSE/2024/JULY/01', 1, '2024-05-10', 'Computer Engineering', 'Associate Professor', 'Nora', 'Shayne Klock', 'Fatehi', ' Indian', '2024-12-04', 'Unmarried', 'OTHERS', 'Other', 'Tajikistan', 'userdetails/ID_Card.jpg', 'Kevon22', 'userdetails/photo.jpg', 'Kansas', '3285 Alva Cape', 'Brookline', 'Benin', 57799, 'New York', '1264 Drew Pass', 'Norwalk', 'Japan', 50661, 362157002, 'uday@gmail.com', 256425622, 'your.email+fakedata26605@gmail', 289327613);

-- --------------------------------------------------------

--
-- Table structure for table `pg_supervision`
--

CREATE TABLE `pg_supervision` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `yop` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pg_supervision`
--

INSERT INTO `pg_supervision` (`id`, `name`, `title`, `role`, `status`, `yop`) VALUES
(1, 'Neque autem blanditiis accusan', 'Lead Solutions Supervisor  ', 'Co-Supervisor', '', 0),
(1, 'Neque autem blanditiis accusan', 'Lead Solutions Supervisor   ', 'Co-Supervisor', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phd_supervision`
--

CREATE TABLE `phd_supervision` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `yop` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phd_supervision`
--

INSERT INTO `phd_supervision` (`id`, `name`, `title`, `role`, `status`, `yop`) VALUES
(1, 'Eiusmod iure laborum', '751-833-1704  ', 'Co-Supervisor', 'Pennsylvania  ', 210),
(1, 'Eiusmod iure laborum', '751-833-1704   ', 'Co-Supervisor', 'Pennsylvania   ', 210);

-- --------------------------------------------------------

--
-- Table structure for table `professionaltraining`
--

CREATE TABLE `professionaltraining` (
  `id` int(10) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `year` int(4) DEFAULT NULL,
  `duration` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE `referees` (
  `id` int(11) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `position1` varchar(30) NOT NULL,
  `asso_ref1` varchar(30) NOT NULL,
  `insti1` varchar(50) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `contact1` varchar(20) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `position2` varchar(30) NOT NULL,
  `asso_ref2` varchar(30) NOT NULL,
  `insti2` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `contact2` varchar(20) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `position3` varchar(30) NOT NULL,
  `asso_ref3` varchar(30) NOT NULL,
  `insti3` varchar(50) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `contact3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `referees`
--

INSERT INTO `referees` (`id`, `name1`, `position1`, `asso_ref1`, `insti1`, `email1`, `contact1`, `name2`, `position2`, `asso_ref2`, `insti2`, `email2`, `contact2`, `name3`, `position3`, `asso_ref3`, `insti3`, `email3`, `contact3`) VALUES
(1, 'Forest Greenholt', 'Placeat adipisci ipsa nesciunt', 'Thesis Supervisor', 'Modi illum atque at ducimus sit.', 'your.email+fakedata66746@gmail.com', '610-947-3456', 'Saul Schaden', 'Quod ab delectus quis incidunt', 'Research Collaborator', 'Porro sequi quos amet suscipit earum amet cumque.', 'your.email+fakedata43291@gmail.com', '636-767-8874', 'Isidro Runte', 'Deleniti odit natus.', 'Other', 'Eum aliquid fugit minima repellendus numquam.', 'your.email+fakedata48842@gmail.com', '210-056-1921');

-- --------------------------------------------------------

--
-- Table structure for table `relinfo`
--

CREATE TABLE `relinfo` (
  `id` int(10) NOT NULL,
  `reContri` varchar(500) DEFAULT NULL,
  `teContri` varchar(500) DEFAULT NULL,
  `otherRelevant` varchar(500) DEFAULT NULL,
  `profService` varchar(500) DEFAULT NULL,
  `journalPub` varchar(500) DEFAULT NULL,
  `cnfPub` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relinfo`
--

INSERT INTO `relinfo` (`id`, `reContri`, `teContri`, `otherRelevant`, `profService`, `journalPub`, `cnfPub`) VALUES
(1, 'South Carolina', 'Oklahoma', 'Ex inventore neque similique adipisci pariatur provident.', 'Laudantium ratione corporis laborum deleniti ab voluptas repudiandae ratione repudiandae.', 'bkhvjcgfugyfqtucfwdewj', 'Quod expedita corrupti vel quia.');

-- --------------------------------------------------------

--
-- Table structure for table `researchexperience`
--

CREATE TABLE `researchexperience` (
  `id` int(10) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `institute` varchar(100) DEFAULT NULL,
  `supervisor` varchar(30) DEFAULT NULL,
  `dateOfJoining` varchar(30) NOT NULL  ,
  `dateOfLeaving` varchar(30) NOT NULL  ,
  `duration` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `researchexperience`
--

INSERT INTO `researchexperience` (`id`, `position`, `institute`, `supervisor`, `dateOfJoining`, `dateOfLeaving`, `duration`) VALUES
(1, 'Porro excepturi officia perspi', 'Maryland                        ', 'Autem ab magni unde eveniet ma', '0000-00-00                    ', '0000-00-00                    ', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `sponsoredprojects`
--

CREATE TABLE `sponsoredprojects` (
  `id` int(10) NOT NULL,
  `agency` varchar(100) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `period` int(4) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsoredprojects`
--

INSERT INTO `sponsoredprojects` (`id`, `agency`, `title`, `amount`, `period`, `role`, `status`) VALUES
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts'),
(1, 'Fuga et ad iste.', 'Direct Solutions Analyst', 0, 0, 'Co-investigator', 'Massachusetts');

-- --------------------------------------------------------

--
-- Table structure for table `summpublication`
--

CREATE TABLE `summpublication` (
  `id` int(10) NOT NULL,
  `noOfIntJnlPps` int(4) NOT NULL DEFAULT 0,
  `noOfIntCnfPps` int(4) NOT NULL DEFAULT 0,
  `noOfNatCnfPps` int(4) NOT NULL DEFAULT 0,
  `noOfNatJnlPps` int(4) NOT NULL DEFAULT 0,
  `noOfPatents` int(4) NOT NULL DEFAULT 0,
  `noOfBooks` int(4) NOT NULL DEFAULT 0,
  `noOfBookChpt` int(4) NOT NULL DEFAULT 0,
  `googleLink` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summpublication`
--

INSERT INTO `summpublication` (`id`, `noOfIntJnlPps`, `noOfIntCnfPps`, `noOfNatCnfPps`, `noOfNatJnlPps`, `noOfPatents`, `noOfBooks`, `noOfBookChpt`, `googleLink`) VALUES
(1, 1, 1, 1, 1, 1, 1, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `teachingexperience`
--

CREATE TABLE `teachingexperience` (
  `id` int(10) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `employer` varchar(30) DEFAULT NULL,
  `courseTaught` varchar(30) DEFAULT NULL,
  `ug_pg` varchar(30) DEFAULT NULL,
  `noOfStudents` int(4) NOT NULL,
  `dateOfJoining` varchar(30)  ,
  `dateOfLeaving` varchar(30)  ,
  `duration` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachingexperience`
--

INSERT INTO `teachingexperience` (`id`, `position`, `employer`, `courseTaught`, `ug_pg`, `noOfStudents`, `dateOfJoining`, `dateOfLeaving`, `duration`) VALUES
(1, 'Pariatur neque sunt voluptatum', 'Corrupti nihil numquam tempora', 'Serbia  ', 'Ea quibusdam labore distinctio', 539, '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ug_supervision`
--

CREATE TABLE `ug_supervision` (
  `id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `role` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `yop` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ug_supervision`
--

INSERT INTO `ug_supervision` (`id`, `name`, `title`, `role`, `status`, `yop`) VALUES
(1, 'Cumque laborum assumenda.  ', 'Customer Data Designer  ', 'Co-Supervisor', '', 0),
(1, 'Cumque laborum assumenda.   ', 'Customer Data Designer   ', 'Co-Supervisor', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Category` enum('ur','obc','sc','st','pwd','ews') DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `Category`, `Password`) VALUES
(1, 'jhvg', 'freg', 'uday@gmail.com', 'ur', 'uday');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acaddetails`
--
ALTER TABLE `acaddetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employmentdetails`
--
ALTER TABLE `employmentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referees`
--
ALTER TABLE `referees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relinfo`
--
ALTER TABLE `relinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summpublication`
--
ALTER TABLE `summpublication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
