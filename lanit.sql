-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 19 2022 г., 21:19
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lanit`
--

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `message` text NOT NULL,
  `userclass` text NOT NULL DEFAULT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `name`, `message`, `userclass`) VALUES
(1, 'admin', 'Привет!', 'other'),
(2, 'aboba@aboba.ru', 'Добрый день!', 'other'),
(3, 'admin', 'Возникла проблема с оплатой', 'other'),
(4, 'admin', 'Решаем проблему', 'self'),
(5, 'admin', 'Понял спасибо!', 'other'),
(15, 'jusi', 'Добрый день решаем проблему!', 'self'),
(20, 'isip_m.v.vasilev@mpt.ru', 'Добрый день!', 'other'),
(21, 'isip_m.v.vasilev@mpt.ru', 'Добрый день! возникли вопросы?', 'self');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `img`) VALUES
(1, 'Спустя 37 лет в Windows 1.0 найдено первое «пасхальное яйцо»', 'Энтузиаст-программист Лукас Брукс обнаружил во время изучения недр операционной системы Windows 1.0 ее первое «пасхальное яйцо». Эксперты предполагали, что нечто подобное там должно быть, но потребовалось 37 лет, чтобы его найти.', '2.jpg'),
(2, 'Google даст всем желающим попробовать Chrome OS Flex', 'С началом пандемии субсидирование образования во всем мире резко сократилось, следствием чего стало падение спроса на ноутбуки Chromebook (которые традиционно считаются гаджетами для студентов — прим. ред. Техкульт).', '1.jpg'),
(3, 'Apple зарабатывает на видеоиграх больше чем Nintendo', 'Корпорация Apple не числится среди гигантов индустрии видеоигр, свои громкие проекты в этой сфере не создает и изданием игр не занимается. Однако ухитряется снимать изрядную часть сливок и зарабатывает куда больше многих ведущих игроков на рынке. Все дело в продажах через App Store – по данным издания Wall Street Journal, чистая прибыль яблочной компании в 2019-м превзошла совокупные показатели Sony, Microsoft, Activision Blizzard и Nintendo.', '3.jpg'),
(4, 'Google даст всем желающим попробовать Chrome OS Flex', 'С началом пандемии субсидирование образования во всем мире резко сократилось, следствием чего стало падение спроса на ноутбуки Chromebook (которые традиционно считаются гаджетами для студентов — прим. ред. Техкульт).', '1.jpg'),
(5, 'Спустя 37 лет в Windows 1.0 найдено первое «пасхальное яйцо»', 'Энтузиаст-программист Лукас Брукс обнаружил во время изучения недр операционной системы Windows 1.0 ее первое «пасхальное яйцо». Эксперты предполагали, что нечто подобное там должно быть, но потребовалось 37 лет, чтобы его найти.', '2.jpg'),
(6, 'Apple зарабатывает на видеоиграх больше чем Nintendo', 'Корпорация Apple не числится среди гигантов индустрии видеоигр, свои громкие проекты в этой сфере не создает и изданием игр не занимается. Однако ухитряется снимать изрядную часть сливок и зарабатывает куда больше многих ведущих игроков на рынке. Все дело в продажах через App Store – по данным издания Wall Street Journal, чистая прибыль яблочной компании в 2019-м превзошла совокупные показатели Sony, Microsoft, Activision Blizzard и Nintendo.', '3.jpg'),
(7, 'Apple зарабатывает на видеоиграх больше чем Nintendo', 'Корпорация Apple не числится среди гигантов индустрии видеоигр, свои громкие проекты в этой сфере не создает и изданием игр не занимается. Однако ухитряется снимать изрядную часть сливок и зарабатывает куда больше многих ведущих игроков на рынке. Все дело в продажах через App Store – по данным издания Wall Street Journal, чистая прибыль яблочной компании в 2019-м превзошла совокупные показатели Sony, Microsoft, Activision Blizzard и Nintendo.', '3.jpg'),
(8, 'Спустя 37 лет в Windows 1.0 найдено первое «пасхальное яйцо»', 'Энтузиаст-программист Лукас Брукс обнаружил во время изучения недр операционной системы Windows 1.0 ее первое «пасхальное яйцо». Эксперты предполагали, что нечто подобное там должно быть, но потребовалось 37 лет, чтобы его найти.', '2.jpg'),
(9, 'Google даст всем желающим попробовать Chrome OS Flex', 'С началом пандемии субсидирование образования во всем мире резко сократилось, следствием чего стало падение спроса на ноутбуки Chromebook (которые традиционно считаются гаджетами для студентов — прим. ред. Техкульт).', '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `img` varchar(500) NOT NULL,
  `category` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `img`, `category`) VALUES
(1, 'Программное обеспечение Microsoft Office Home and Business 2021 T5D-03484', '3500', '1.png', 'Microsoft'),
(2, '1С:Предприниматель 8', '10000', '2.png', '1C'),
(3, 'Программное обеспечение Весовой терминал от Мидл', '4000', '3.png', 'MIDLE'),
(5, 'Windows 8.1 Pro Pack', '2500', '4.png', 'Microsoft'),
(16, 'Microsoft Windows XP Professional SP2/SP3', '3500', '5.png', 'Microsoft'),
(17, 'Программное обеспечение Весовой терминал от Мидл', '4000', '3.png', 'MIDLE'),
(18, '1С:Предприниматель 8', '10000', '2.png', '1C'),
(19, 'Программное обеспечение Microsoft Office Home and Business 2021 T5D-03484', '3500', '1.png', 'Microsoft');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `status` text NOT NULL DEFAULT 'В стадии проверки',
  `username` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `text`, `status`, `username`) VALUES
(5, 'Товар соответствует цене. Все супер!', 'проверено', 'jusi'),
(6, 'Лучший сервис!', 'В стадии проверки', 'jusi@jusi'),
(9, 'Все супер!', 'проверено', 'isip_m.v.vasilev@mpt.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2022-05-03 21:59:07'),
(14, 'isip_m.v.vasilev@mpt.ru', 'isip_m.v.vasilev@mpt.ru', '1404b79ab0f80607982cf2cb4346d9b7', '2022-06-19 14:26:44'),
(15, 'aboba@aboba.ru', 'aboba@aboba.ru', '501d20a6701002d4f710dd3b5f1e1eb5', '2022-07-05 13:40:57'),
(16, '1111111111111@1111111.com', '1111111111111@1111111.com', '5dc14c566196b4c803c08e3ed2cf58df', '2022-07-05 13:41:16');

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `jobtitle` text NOT NULL,
  `img` text NOT NULL DEFAULT 'user.png',
  `vk` text NOT NULL,
  `tg` text NOT NULL,
  `git` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`id`, `name`, `jobtitle`, `img`, `vk`, `tg`, `git`) VALUES
(1, 'Марков Никита', 'Старший разработчик', '1.jpg', 'https://vk.com/mcmakk', 'https://t.me/mcmackkk', ''),
(2, 'Павел Ларичев', 'Back-End разработчик', '2.jpg', 'https://vk.com/iamalreadydead', 'https://t.me/iamalreadydead', ''),
(3, 'Александр Чербунин', '?', '3.jpg', 'https://vk.com/ascherbunin', 'https://t.me/ascher', ''),
(4, 'Александр Тронов', 'Директор отдела', 'user.png', 'https://vk.com/id2743150', 'https://t.me/', '');

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `worker`
--
ALTER TABLE `worker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
