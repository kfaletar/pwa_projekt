-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 04:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsweek`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(11) NOT NULL,
  `naslov` varchar(64) NOT NULL,
  `sazetak` text NOT NULL,
  `sadrzaj` text NOT NULL,
  `kategorija` varchar(64) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `arhivirati` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `naslov`, `sazetak`, `sadrzaj`, `kategorija`, `slika`, `arhivirati`) VALUES
(1, 'Prva vijest', 'Na plazi super dodji i ti', 'Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. Vani je vruce, dodji na plazu. ', 'US', 'plaja.jpg', 0),
(2, 'Druga vijest', '1232131232323', '123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123123213123', 'World', 'plaja.jpg', 0),
(3, 'hzhzhzhhzhz', 'sdsdsdsdsdsds', 'trtrtrtrtrtrt', 'World', 'pustinja.jpg', 0),
(4, 'cetvrta vijest', 'wewewewewqewe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'World', 'plaja.jpg', 1),
(5, 'peta vijest', 'peta vijestpeta vijest', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'US', 'pustinja.jpg', 1),
(6, 'sesta vijest', 'sdsdsdsdsdsdsd', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'US', 'svijet.png', 0),
(7, 'sedma', 'dsdsdsdsdsdsds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'US', 'titanik.png', 0),
(8, 'osma ', 'dsdsdsdsdsdsds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'World', 'pustinja.jpg', 0),
(9, 'devetaa', 'dsdsdsdsdsdsds', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'US', 'plaja.jpg', 0),
(10, 'deseta', 'trtrrtrtrtr', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse ab dolore minima nobis officia rem corrupti itaque animi consectetur iure autem consequatur illum, blanditiis, dolorem sint debitis architecto exercitationem iusto porro at! Expedita suscipit cumque, assumenda incidunt quod recusandae esse totam ad consequuntur impedit et laboriosam est pariatur veniam porro facilis aliquid, laudantium architecto omnis ea deleniti! Nemo fugiat repellat impedit ab natus ipsa doloribus porro magni neque expedita unde cupiditate fugit voluptates sed adipisci labore, consequuntur, excepturi dignissimos totam illum deserunt architecto minima? Dolore odio sit, facere aliquam nobis incidunt eveniet voluptas reprehenderit. Consequuntur non nisi ut maxime sapiente.\r\n', 'World', 'svijet.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) NOT NULL,
  `prezime` varchar(32) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `razina` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `username`, `password`, `razina`) VALUES
(2, '123', '123', '123', '$2y$10$3jW8jkTKw885m.MjOBA4re4EJAYGGndYHf2MHePWEPGPtoAs6EL8u', 0),
(4, 'admin', 'admin', 'admin', '$2y$10$ktRRKdLXbagX4U7PMMFirO7yI2TZYAwi0MJEiMxmhhvQQU1nNXnDa', 1),
(5, '12345', '12345', '12345', '$2y$10$MHZY3osiWAMOeOStTGE46ejywF.MpOqI7u1TDXvCoDr5OpF/N9srS', 1),
(6, '1234', '1234', '1234', '$2y$10$hkIkNYzkjbM0hQ9Zz8tkAOujTtRO7JiXxSSfkP2frvUJy8EnT7J3K', 1),
(7, '2', '2', '2', '$2y$10$Qhr4T//kq4nKmNXekQCXTOpQy5P0fP9Lk7p1by1Z6jgrHBM0H9NgW', 1),
(8, '1', '1', '1', '$2y$10$Xhm/7hRjULCJUrjrKrsX5OVErtD0wwjdpK1RXi27eqGUum9nk2FjW', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
