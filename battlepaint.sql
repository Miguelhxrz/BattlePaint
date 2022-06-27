-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2022 a las 06:11:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `battlepaint`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventory`
--

CREATE TABLE `inventory` (
  `id_user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `id_nft` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `inventory`
--

INSERT INTO `inventory` (`id_user`, `id_nft`) VALUES
('1MzlmZ11VFjR', 'ZKE7qbK36'),
('1MzlmZ11VFjR', '5OuQJrBbO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marketplace`
--

CREATE TABLE `marketplace` (
  `nft_token` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marketplace`
--

INSERT INTO `marketplace` (`nft_token`) VALUES
('5OuQJrBbO'),
('ByB5QZsEA'),
('qtkVKX9gU'),
('ZKE7qbK36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nft`
--

CREATE TABLE `nft` (
  `token` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `power` int(3) NOT NULL,
  `class` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `rank` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `owner` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `price` int(100) NOT NULL,
  `img_c` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img_p` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `nft`
--

INSERT INTO `nft` (`token`, `name`, `power`, `class`, `rank`, `owner`, `price`, `img_c`, `img_p`) VALUES
('5OuQJrBbO', 'Meiko', 120, 'tank', 'S', 'PedritoSola', 10, '../public/card_img/Gabriela_card.png', '../public/presentation_img/Gabriela_presentation.png'),
('ByB5QZsEA', 'Reilong', 111, 'tank', 'S', 'PedritoSola', 111, '../public/card_img/rei_card.png', '../public/presentation_img/rei_presentation.png'),
('qtkVKX9gU', 'Reilong', 500, 'assassin', 'S', 'PedritoSola', 110, '../public/card_img/rei_card.png', '../public/presentation_img/rei_presentation.png'),
('ZKE7qbK36', 'Taekwon', 120, 'tank', 'S', 'PedritoSola', 120, '../public/card_img/taekwon_card.png', '../public/presentation_img/taekwon_presentation.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `birth` date NOT NULL,
  `gender` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `balance` int(100) NOT NULL,
  `binance` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `birth`, `gender`, `balance`, `binance`) VALUES
('1MzlmZ11VFjR', 'MiguxlHxrz', '28021899', 'miguelherzdev@gmail.com', '2000-02-15', 'Male', 790, ''),
('admin00', 'admin123', 'admin', 'admin@gmail.com', '0000-00-00', 'Other', 0, ''),
('OKUwpE6rIclt', 'PedritoSola', 'pedrito123', 'pedrit1234@gmail.com', '1990-12-30', 'Male', 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`nft_token`);

--
-- Indices de la tabla `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`token`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
