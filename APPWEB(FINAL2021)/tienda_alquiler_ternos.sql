-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2021 a las 03:44:56
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_alquiler_ternos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'POLICARPIO'),
(2, 'LEONARDO'),
(3, 'MILANO'),
(4, 'ITALIANO'),
(6, 'INTERNACIONAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_image` varchar(200) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `total_amt` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amt`) VALUES
(22, 16, '0', 1, 'CORBATA DORADA', 'GOLDTIE.png', 1, 78, 78),
(23, 17, '0', 1, 'CORBATA MORADA', 'TIE2.jpg', 1, 47, 47),
(24, 2, '0', 1, 'TERNO CLASICO GRIS', 'TERNOGRIS.jpg', 1, 61, 61),
(25, 3, '0', 1, 'TERNO CLASICO VERDE', 'TERNOVERDEOSCURO.jpg', 1, 65, 65),
(26, 20, '0', 2, ' CALZADOS FORMALES', 'CALZADO1.jpg', 1, 74, 74);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'TERNO CABALLEROS'),
(2, 'VESTIDO Y TERNO DAMAS'),
(3, 'ACCESORIO CABALLEROS\r\n'),
(4, 'ACCESORIO DAMAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 1, 2, 'TERNO CLASICO', 56, 'TERNO EN NEGRO', 'TERNONEGRO.jpg', 'TERNO ITALIANO'),
(2, 1, 3, 'TERNO CLASICO GRIS', 61, 'TERNO CLASICO GRIS', 'TERNOGRIS.jpg', 'TERNO MILANO'),
(3, 1, 3, 'TERNO CLASICO VERDE', 65, ' TERNO CLASICO VERDE OSCURO', 'TERNOVERDEOSCURO.jpg', 'TERNO MILANO'),
(4, 1, 3, ' TERNO DE VESTIR', 57, ' TERNO   BLANCO', 'TERNOCONBRILLO.jpg', 'TERNO MILANO'),
(5, 1, 2, 'TERNO DE VESTIR AZUL', 73, 'TERNO DE VESTIR', 'TERNODISEADO.jpg', 'TERNO MILANO DE VESTIR'),
(6, 1, 1, 'TERNO DE BODA', 89, 'TERNO DE BODA NUEVO', 'BESTTERNO.jpg', 'TERNO MEXICANO'),
(7, 1, 1, 'TERNO AZULMARINO', 68, 'TERNO DE VESTIR', 'TERNOAZULMARINO.jpg', 'TERNO MEXICANO'),
(8, 1, 4, 'TERNO DE BODA', 92, 'TERNO CLASICO DE BODA', 'TERNO.jpg', 'TERNOS PERUANOS'),
(9, 1, 3, 'TERNO CLASICO NEGRO', 44, 'TERNO NEGRO', 'TERNODEVESTIR.jpg', 'TERNO MEXICANO'),
(10, 2, 6, 'VESTIDO VERDE', 58, ' VESTIDO PARA DAMAS', 'VESTIDOVERDE.jpg', 'VESTIDO VERDE'),
(11, 2, 6, 'VESTIDO ROJO NUEVO', 75, 'VESTIDO ROJO', 'VESTIDO11.jpg', 'VESTIDO COLOR ROJO'),
(12, 2, 6, 'VESTIDO DE BODA', 120, ' VESTIDO DE BODA NUEVO', 'VESTIDOBLANCO.jpg', 'VESTIDO BLANCO'),
(13, 2, 6, 'VESTIDO DE FIESTA', 130, 'VESTIDO CELESTE', 'VESTIDO.jpg', 'VESTIDO NUEVO CELESTE'),
(14, 2, 6, ' TERNO DE DAMA', 59, 'TERNO ROJO', 'TERNODAMA1.jpg', 'TERNO DE DAMA COLOR ROJO'),
(15, 2, 6, 'TERNO VERDE CASUAL', 63, 'TERNO DAMAS', 'TERNODAMAVERDE.jpg', 'TERNO COLOR VERDE'),
(16, 3, 6, 'CORBATA DORADA', 78, 'CORBATA DORADA', 'GOLDTIE.png', 'CORBATA DORADA PRIMIUM'),
(17, 3, 6, 'CORBATA MORADA', 47, 'CORBATA CASUAL', 'TIE2.jpg', 'CORBATA CASUAL'),
(19, 3, 6, 'CORBATA FORMAL', 40, 'CORBATA CLASICA NEGRO', 'TIE4.jpg', 'CORBATA NEGRO'),
(20, 3, 6, ' CALZADOS FORMALES', 74, 'CALZADO CLASICO NEGRO', 'CALZADO1.jpg', 'CALZADO CLASICO EN CUERO'),
(21, 3, 6, ' CALZADO DE VESTIR', 93, 'CLAZADO CLASICO AMARILLO ', 'CALZADO4.jpg', 'CALZADO DE CUERO AMARILLO'),
(22, 4, 6, 'BOLZO CASUAL', 95, 'BOLZO BLANCO Y NEGRO', 'BOLZO1.jpg', 'BOLZO DE CUERO'),
(23, 4, 6, 'CARTERA DE MODA', 143, 'CARTERNA ROJO', 'carteraslide.jpg', 'CARTERA ROJO CASUAL'),
(24, 4, 6, 'CARTERA DE MODA', 134, 'CARTERA DE MODA NARANJA', 'BOLZO4.jpg', 'CARTERA ITALIANO'),
(25, 4, 6, 'TACONES DE MODA', 156, 'TACONES EN CUERO', 'DAMATACOS.jpg', 'TACONES EN NEGRO'),
(26, 4, 6, 'TACOS CON PUNTA', 110, 'TACONES AZULES CUERO', 'DAMABLUE.jpg', 'TACONES EN CUERO AZUL'),
(27, 4, 6, 'CALZADOS DAMA FORMAL', 46, 'CALZADO EN NEGRO', 'DAMASHOES.jpg', 'CALZADO NEGREO EN CUERO'),
(33, 6, 2, 'TERNO CASUAL', 52, 'TERNO NEGRO CASUAL', 'TERNO2.jpg', 'TERNO CASUAL'),
(34, 6, 4, 'CALZADO DE MODA', 116, 'CALZADO DE CUERO', 'CALZADO3.jpg', 'CALZADO CUERO NEGRO'),
(38, 6, 4, 'CORBATA CASUAL', 47, 'CORBATA CON FRANJAS', 'TIE3.jpg', 'CORBATA PREMIUM'),
(40, 2, 6, 'TERNO DAMA CLASICO', 45, 'TERNO FORMAL', 'TERNODAMA2.jpg', 'TERNO FORMAL NEGRO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `region` varchar(35) NOT NULL,
  `dni` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `region`, `dni`) VALUES
(1, 'martin', 'cortez', 'martincortez969@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '956783456', 'san juan de lurigancho', 'Lima', 71797012),
(2, 'lino', 'llalli borda', 'kawasakillalli@gmail.com', '25f9e794323b453885f5181f1b624d0b', '934761267', 'Andahuaylas Av. peru 123', 'Apurimac', 71797030);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
