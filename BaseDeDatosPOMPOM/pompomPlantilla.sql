-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2024 a las 22:30:29
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pompom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Info` longtext NOT NULL,
  `Album` varchar(50) NOT NULL,
  `Imagen_Fondo` longtext NOT NULL,
  `Imagen_Tarjetas` longtext NOT NULL,
  `Imagen_Carusel` longtext NOT NULL,
  `GeneroID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`ID`, `Nombre`, `Info`, `Album`, `Imagen_Fondo`, `Imagen_Tarjetas`, `Imagen_Carusel`, `GeneroID`) VALUES
(1, 'Taylor Swift', 'Taylor Alison Swift es una cantante, compositora, productora, directora, actriz y empresaria estadounidense; es conocida mundialmente por sus numerosos y exitosos álbumes que saltan de género en género a lo largo de su carrera, sin embargo, fue el género country con el que comenzó su exitosa carrera musical.', '1989', 'Imagenes/taylorSwifft.svg', 'Imagenes/TaylorCard.svg', 'Imagenes/Taylorpfp..svg', 5),
(2, 'Tim Mc Graw', 'Tim McGraw es un artista reconocido en el género country que además ha trabajado como actor, productor musical y ha participado en la banda sonora de numerosas películas. Su estatus continuado como uno de los cantantes de country más consolidados queda demostrado una y otra vez en sus giras, para las que se agotan las entradas. Su décimo álbum de estudio, Southern Voice, salió a la venta el pasado 20 de octubre.', 'Standing Room Only', 'Imagenes/TIM.svg', 'Imagenes/timCard.svg', 'https://cdns-images.dzcdn.net/images/cover/e011c0f0ba1d6719706f4286028cbe84/200x200.jpg', 2),
(3, 'Dolly Parton', 'Dolly Rebecca Parton (Sevierville, Tennessee; 19 de enero de 1946) es una cantante, compositora, actriz, productora, escritora, filántropa y empresaria estadounidense. Está considerada como una de las mejores cantantes de la música country, así como una de las principales figuras artísticas de este género. Durante más de cinco décadas, ha sido reconocida su faceta innovadora, en particular por sus trabajos de las años 1970 y 1980, y por su peculiar voz; se hace referencia a ella frecuentemente como ', 'Rockstar', 'Imagenes/dolly-parton.svg', 'Imagenes/DollyCard.svg', 'Imagenes/DollyPfP.svg', 1),
(4, 'Willie Nelson', 'Willie Hugh Nelson (Abbott, Texas, 29 de abril de 1933) es un cantante, compositor y guitarrista estadounidense de country. El éxito en la crítica de sus álbumes Shotgun Willie (1973), Red Headed Stranger (1975) y Stardust (1978) convirtieron a Nelson en uno de los artistas más reconocidos de la música country. Es una de las principales figuras del outlaw country', 'Red Headed Stranger', 'Imagenes/Willie.svg', 'Imagenes/26WILLIE-NELSON-STYLE-01-lvmp-articleLarge.webp', 'Imagenes/williePFP.svg', 4),
(13, 'Hatsune Miku', 'Miku Hatsune (CV01/初音ミク Hatsune Miku?) conocida mayormente como Hatsune Miku o simplemente Miku, es una cantante virtual para el sintonizador desarrollado por Yamaha, VOCALOID2, VOCALOID3 y VOCALOID4, así como para el programa desarrollado por Crypton Future Media, Piapro Studio. Su imagen, de una chica de antropomorfismo moe de 16 años, llega a ser considerada y personificada como una de las más famosas idol virtuales japonesas a nivel mundial, desarrollada por Crypton Future Media con la voz de la seiyuu Saki Fujita para la segunda versión del programa de sintetización de voz VOCALOID.', 'Sekai', 'https://i.pinimg.com/originals/51/53/19/5153192eeaf43bbe1996c0610d093302.jpg', 'https://i.pinimg.com/564x/8c/67/0e/8c670e09ad1a7c4c4b58e6ced8022258.jpg', 'https://upload.wikimedia.org/wikipedia/en/6/68/Miku_Flick_AppStore-Icon.png', 3),
(24, 'Sofia Carson', 'Sofia Lauren Daccarett Char​​ ​​ conocida artísticamente como Sofia Carson, es una actriz, bailarina, cantante y compositora estadounidense de ascendencia colombiana. Su primera aparición en televisión fue como actriz invitada en la serie de Disney Channel Austin & Ally.', 'Purple Hearts', 'https://peopleenespanol.com/thmb/38SG-lJYKyuwF3AnXQZwNU4C3LU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/sofia-image-1-2000-788995b42e31428f82180a0f2cd2c763.jpg', 'https://m.media-amazon.com/images/M/MV5BMGM1NjE5NjItMjE1My00MzAwLThhYjctNzc3NzIwMmI4OGIxXkEyXkFqcGdeQXVyMzk3NzMxNTI@._V1_FMjpg_UX1000_.jpg', 'https://cdns-images.dzcdn.net/images/cover/424449ff95f335dabcd7f33f3790d825/200x200.jpg', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `ID` int(11) NOT NULL,
  `ArtistaID` int(11) NOT NULL,
  `source` longtext NOT NULL,
  `titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`ID`, `ArtistaID`, `source`, `titulo`) VALUES
(1, 1, 'Musica/No Es Que No Te Quiera.mp3', 'cruel summer'),
(2, 1, 'Musica/No Es Que No Te Quiera.mp3', 'blank space'),
(3, 1, 'Musica/No Es Que No Te Quiera.mp3', 'fortnight'),
(4, 1, 'Musica/No Es Que No Te Quiera.mp3', 'lover'),
(5, 2, 'Musica/No Es Que No Te Quiera.mp3', 'its your love'),
(6, 2, 'Musica/No Es Que No Te Quiera.mp3', 'dont take the girl'),
(7, 2, 'Musica/No Es Que No Te Quiera.mp3', 'something like that'),
(8, 2, 'Musica/No Es Que No Te Quiera.mp3', 'i like it, i love it'),
(9, 3, 'Musica/No Es Que No Te Quiera.mp3', 'islands in the stream'),
(10, 3, 'Musica/No Es Que No Te Quiera.mp3', 'jolene'),
(11, 3, 'Musica/No Es Que No Te Quiera.mp3', 'powerful women'),
(12, 3, 'Musica/No Es Que No Te Quiera.mp3', 'i will always love you'),
(13, 4, 'Musica/No Es Que No Te Quiera.mp3', 'always on my mind'),
(14, 4, 'Musica/No Es Que No Te Quiera.mp3', 'seven spanish angels'),
(15, 4, 'Musica/No Es Que No Te Quiera.mp3', 'blue eyes crying in the rain'),
(16, 4, 'Musica/No Es Que No Te Quiera.mp3', 'highwayman'),
(17, 13, 'Musica/No Es Que No Te Quiera.mp3', 'ogyarinizer'),
(18, 13, 'Musica/No Es Que No Te Quiera.mp3', 'gomenne gomenne'),
(19, 13, 'Musica/No Es Que No Te Quiera.mp3', 'mellomelloid'),
(20, 13, 'Musica/No Es Que No Te Quiera.mp3', 'triple baka'),
(22, 24, '', 'CancionSofi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `ID` int(11) NOT NULL,
  `Campo` varchar(250) NOT NULL,
  `Valor` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`ID`, `Campo`, `Valor`) VALUES
(21, 'Comentarios', '¿Tienes algún comentario?, dejánoslo saber\r\n            ¡Gracias por visitar nuestro sitio web de música! Valoramos tus comentarios y consultas. No dudes en ponerte en contacto con nosotros utilizando los siguientes métodos:\r\n            Conéctate con nosotros en las redes sociales para obtener las últimas actualizaciones, noticias y contenido exclusivo:'),
(22, 'Instagram', 'https://www.instagram.com/'),
(23, 'Facebook', 'https://www.facebook.com/'),
(24, 'Telefono', '7226922503'),
(25, 'Problemas', '¿Tienes algún problema?, comentalo y haznos saber cómo ayudarte\r\n            Para obtener ayuda con pedidos, problemas de cuenta o cualquier otra consulta relacionada con el soporte, comunícate con nuestro equipo de soporte al cliente:'),
(26, 'servicios', '/Evidencia2/Pompompurin/About.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`ID`, `Nombre`) VALUES
(1, 'Romance'),
(2, 'Folk'),
(3, 'Instrumental'),
(4, 'Rock Country'),
(5, 'Pop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nosotros`
--

CREATE TABLE `nosotros` (
  `ID` int(11) NOT NULL,
  `Campo` varchar(250) NOT NULL,
  `Valor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `nosotros`
--

INSERT INTO `nosotros` (`ID`, `Campo`, `Valor`) VALUES
(1, 'bienvenida', '¡Bienvenido/a a POM POM ! Somos apasionados de la música y estamos dedicados a brindarte la mejor experiencia posible. Conoce más sobre quiénes somos y qué hacemos:'),
(2, 'mision', 'Nuestra misión conectar a los amantes de la música con sus artistas favoritos, descubrir nueva música y crear una comunidad vibrante.'),
(3, 'vision', 'Nuestra como empresa mundial es hacer llegar la música country a cada rincón del mundo, así como impulsar pequeños artistas a lograr sus objetivos artísticos'),
(4, 'nosotros', 'Somos un equipo de entusiastas de la música, desarrolladores web, diseñadores y creadores de contenido dedicados a traerte lo último y lo mejor en el mundo de la música.'),
(5, 'facebook', 'https://www.facebook.com/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Artistas_GeneroID` (`GeneroID`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_Canciones_ArtistaID` (`ArtistaID`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `nosotros`
--
ALTER TABLE `nosotros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD CONSTRAINT `fk_Artistas_GeneroID` FOREIGN KEY (`GeneroID`) REFERENCES `generos` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `fk_Canciones_ArtistaID` FOREIGN KEY (`ArtistaID`) REFERENCES `artistas` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
