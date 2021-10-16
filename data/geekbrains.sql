-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Окт 10 2021 г., 18:38
-- Версия сервера: 5.7.34
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `geekbrains`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `img`, `description`) VALUES
(1, 'Балалайка', '350.00', 'balalaika.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(2, 'Матрёшка', '100.50', 'matryoshka.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(3, 'Водка', '200.00', 'vodka.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(4, 'Аккордион', '360.50', 'accordion.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(5, 'Шапка-ушанка', '150.00', 'hat.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(6, 'Мавзолей', '8999.99', 'mausoleum.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(7, 'Спутник', '10000.00', 'sputnik.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.'),
(8, 'Кокошник', '200.40', 'kokoshnik.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore.\r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti. Perspiciatis molestiae qui non ipsam! Soluta, necessitatibus inventore. Atque nesciunt earum placeat aliquam aperiam animi alias autem provident, corrupti vitae quibusdam, voluptatibus eaque et. Earum ipsa minus velit recusandae, harum ex at quaerat veniam officia iste corporis consequatur animi nisi accusantium! Rerum dolor necessitatibus dolorem nisi voluptate minus a possimus velit officiis reprehenderit quos libero, facilis eveniet ad distinctio maxime, maiores laudantium, ut blanditiis consequatur nulla.');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` varchar(255) NOT NULL,
  `completed` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `id_good`, `count`, `name`, `address`, `phone`, `email`, `date`, `id_user`, `completed`) VALUES
(1, 2, 1, 'Сергей Александрович', 'Москва, Улица 1-1', '89991112233', 'serg@serg.ru', '2021-09-30 17:47:49', 'es493kcc6gn0nlnu0kdog3bq45', 1),
(2, 7, 3, 'Сергей Александрович', 'Москва, Улица 1-1', '89991112233', 'serg@serg.ru', '2021-09-30 17:47:49', 'es493kcc6gn0nlnu0kdog3bq45', 1),
(3, 8, 1, 'Сергей Александрович', 'Москва, Улица 1-1', '89991112233', 'serg@serg.ru', '2021-09-30 17:47:49', 'es493kcc6gn0nlnu0kdog3bq45', 1),
(4, 6, 2, 'Анна Васильева', 'Россия, Москва, Ак.Янгеля 7-24', '+79250000000', 'anna@anna.ru', '2021-09-30 17:57:45', 's3qefri7dt69893jpi4thucclt', 1),
(5, 4, 4, 'Геннадий Сербский', 'С-Петербург, Литейный 1-1', '+781820000000', 'gen@spb.ru', '2021-10-02 15:44:56', '04trcq1rufsag311165r6evfl0', 1),
(6, 1, 2, 'Геннадий Сербский', 'С-Петербург, Литейный 1-1', '+781820000000', 'gen@spb.ru', '2021-10-02 15:44:56', '04trcq1rufsag311165r6evfl0', 1),
(7, 8, 1, 'Вера Андреевна', 'Россия, СПб, Садовая 5-6', '+79210000000', 'vera@vera.ru', '2021-10-03 12:59:40', '2aivcs4kjn9k6iu24n37d19kpr', 0),
(8, 5, 2, 'Вера Андреевна', 'Россия, СПб, Садовая 5-6', '+79210000000', 'vera@vera.ru', '2021-10-03 12:59:40', '2aivcs4kjn9k6iu24n37d19kpr', 0),
(9, 7, 2, 'Сергей', 'Москва, Улица 1-1', '89991112233', 'serg@serg.ru', '2021-10-10 18:04:15', 'user1633889055813', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `date`) VALUES
(1, 'Анна Владимировна', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti.', '2021-09-26 14:09:31'),
(2, 'Валерий Кузнецов', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti.', '2021-10-03 08:33:35'),
(3, 'Сергей Васильев', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus aut expedita atque. Illo, iusto accusamus eveniet iste id incidunt quia assumenda cupiditate laboriosam doloremque, vitae neque nisi eaque natus voluptatem possimus labore perferendis deserunt mollitia ratione nemo, ex quisquam hic vel? Sequi quia, fuga qui excepturi asperiores illum fugit necessitatibus facilis ab dicta rerum officia? Maxime mollitia ab itaque, sapiente consequatur non, molestiae laudantium dolorem quod fuga quae similique earum atque sit deleniti beatae cupiditate harum excepturi. Blanditiis ex aliquid optio aspernatur asperiores earum, odit cumque iure error recusandae! In id molestias totam dolores, optio quo sit voluptatem impedit ea at eligendi assumenda, labore iusto aliquam earum rerum quis eius aliquid nemo esse deleniti.', '2021-10-03 16:52:27');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '2',
  `remember` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember`) VALUES
(1, 'admin', 'admin@admin.ru', 'eShop21232f297a57a5a743894a0e4a801fc3eShop', 1, 0),
(2, 'user', 'user@user.ru', 'eShopee11cbb19052e40b07aac0ca060c23eeeShop', 2, 0),
(3, 'Сергей Александрович', 'serg@serg.ru', 'eShop94747a1470803117683bc8fad40ce2eceShop', 2, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
