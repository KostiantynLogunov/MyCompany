-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2018 г., 18:49
-- Версия сервера: 5.7.16
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `lkmc`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cases`
--

CREATE TABLE `cases` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `screens` int(10) UNSIGNED NOT NULL,
  `front` text NOT NULL,
  `back` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cases`
--

INSERT INTO `cases` (`id`, `name`, `text`, `screens`, `front`, `back`) VALUES
(1, 'MINIMUM', 'Landing page application with static page', 7, 'up to 950$', ''),
(2, 'STANDARD', 'Application with basic functional parts(news, promo, static page)', 7, '1950$', '970$'),
(3, 'OPTIMAL', 'Medium application with extended and partly customizable functional parts ', 15, '3800$', '1350$'),
(4, 'VIP', 'Big application with a fully customizable functional parts ', 25, '9100$', '2970$');

-- --------------------------------------------------------

--
-- Структура таблицы `methodologies`
--

CREATE TABLE `methodologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `methodologies`
--

INSERT INTO `methodologies` (`id`, `name`, `text`, `image`) VALUES
(1, 'Agile', 'Agile software development describes a set of values and principles for software development under which requirements and solutions evolve through the collaborative effort of self-organizing cross-functional teams. It advocates adaptive planning, evolutionary development, early delivery, and continuous improvement, and it encourages rapid and flexible response to change. These principles support the definition and continuing evolution of many software development methods.', 'agile4.png'),
(2, 'SCRUM', 'About SCRUM !Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.', 'scrum.png'),
(3, 'Kanban ', 'About Kanban! Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text.', 'Kanban.png');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_09_28_075920_create_table_pages', 1),
(4, '2017_09_28_080000_create_table_services', 1),
(5, '2017_09_28_080046_create_table_portfolios', 1),
(6, '2017_09_28_080126_create_table_peoples', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `name`, `alias`, `text`, `about`, `images`, `created_at`, `updated_at`) VALUES
(1, 'home', 'home', '<h2>WEB DEVELOPMENT EXPERTS</h2>\r\n<h5>WE ENGINEER, DESIGN, DEVELOP, MAINTAIN AND DISCUSS HIGH QUALITY WEBSITES.</h5>', 'Since 2017, we have helped many customers from other countries cross the world. Our highly optimized work flow and friendly customer service helped us to be one of the top web development service provider in industry. Development and maintenance of a lot websites tough us some of the greatest optimization and quality control lessons. We dont just Design and Develop Websites, we also do Web Apps, AMS (Association Management System), Social Media Sites, Membership Sites, Landing Pages and a lot more. We do anything and everything as long as it’s with wordpress. Give us a call, drop us an email or visit our contact us page for free consultation and instant quote of your next project.\r\nWe are focused on niche, unsophisticated customer friendly web development & digital marketing solutions. We promise to be a trustworthy partner for you with our conviction, swift approach, advanced idea and prominent management.\r\n<h5>OUR VISION</h5>\r\nTo always be in pursuit of excellence and to be global leaders in providing strategic planning for robust and cost-effective web solutions.\r\n“In a free enterprise, the community is not just another stake holder in business, but is in fact the very purpose of its existence.”\r\nWe are inspired by these words of Mr. J.N. Tata the father of Indian industry.  LKMC LLC pledges to be an ethical organisation. We are committed to make this organisation not only profitable business but also the one which gives back to the society and of course a great place to work.\r\n<h5>OUR BELIEF</h5>\r\nTo create value for our clients as well as to our employees.\r\nNever start with diffidence, Always start with confidence.\r\nWhat we do, we do well with a systematic approach.\r\nInnovation with simplicity. Always offer the best.\r\nWork efficiently and be committed in heart and mind.\r\nTo have the courage to admit when we’re wrong and to change.\r\nLeverage collective genius to shape a better future.\r\nInspire creativity, passion, optimism and fun.\r\n<h5>OUR MISSION</h5>\r\nPeople: Be a great place to work where people are inspired to be just awesome.\r\nProducts & Services: Bring to the world a portfolio of quality products and services, which can be honest addition to the list of must have essentials.\r\nPartners: create true value for their investments.\r\nPlanet: Be a responsible organisation that is ethical and does no evil.\r\nProfit: Maximizing returns with versatile innovations, smart strategies and resourcefulness.\r\nProductivity: Be a highly dedicated, amicable, lean and swift organization.', 'main_device_image.png', NULL, NULL),
(3, 'about us', 'aboutUs', '<h3>WE LOVE CODING AWESOME WEBSITES.</h3>\r\n<br>\r\n<p>LKMC LLC web Solution has been operational since May 2017 and has been providing complete web & internet marketing solutions to its clients ever since. We are focused on niche, unsophisticated customer friendly web development & digital marketing solutions. We promise to be a trustworthy partner for you with our conviction, swift approach, advanced idea and prominent management.</p>\r\n<br>\r\n<p>LKMC LLC is a turnkey internet solutions provider who solve business IT problems ranging from hosting and websites to boutique software development and complex third party systems integration.  We offer custom solutions for businesses across Australia. PWS leverage the benefits of offshore outsourcing where necessary, combined with local support and service that you can trust to get the job done.\r\n</p> <br>\r\n<p>\r\nWe have a collection of highly skilled and passionate individuals that come from different industries, technologies, and disciplines. With our expertise, PWS delivers exceptional results driven by a powerful local insight at an affordable price.</p>', '', 'about-img.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `peoples`
--

CREATE TABLE `peoples` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `peoples`
--

INSERT INTO `peoples` (`id`, `name`, `position`, `images`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Kostiantyn Logunov', 'Chief Executive Officer', 'ia.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.', NULL, NULL),
(2, 'Michael Choohno', 'Team Lead', 'mi.jpg', '\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.', NULL, NULL),
(3, 'Ilona Pavlik', 'Designer', 'disaner.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin cursus. Dolor sit amet, consectetur adipiscing elit proin consequat.\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `portfolios`
--

INSERT INTO `portfolios` (`id`, `name`, `images`, `filter`, `created_at`, `updated_at`) VALUES
(1, 'www.sports.bwin.com', 'portfolio.png', 'WEB', NULL, NULL),
(2, 'www.intita.com', 'portfolio2.png', 'WEB', NULL, NULL),
(3, 'www.gisinfo.net', 'portfolio3.png', 'WEB', NULL, NULL),
(4, 'www.smartfarming.ua', 'portfolio4.png', 'mobile', NULL, NULL),
(5, 'www.gisagro.com.ua', 'portfolio5.png', 'web ', NULL, NULL),
(6, 'www.vki.vin.ua', 'portfolio6.png', 'WEB', NULL, NULL),
(7, 'www.asocialpanel.com', 'portfolio7.png', 'WEB', NULL, NULL),
(8, 'www.alfahadliker.com', 'portfolio8.png', 'mobile', NULL, NULL),
(9, 'www.scraperq8.com/Home.aspx', 'portfolio9.png', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`, `text`, `icon`, `created_at`, `updated_at`) VALUES
(20, 'Web applications', 'We create web sites of any complexity and functionality. Using the newest available technologies (including adaptive page-proofs) we do our best to make not just convenient site, but the site with lovely design, simple and intuitive interface and efficient implementation of marketing tasks.', 'web4.png', NULL, NULL),
(21, 'Android applications\r\n', 'We develop both simple and complex applications for Google Play Market, applications with server sides and so on. All applications can be adapted for the multiplicity of Android devices and OS versions. Operate with widgets, geolocation, push-notifications, adjustable configuration of your application.', 'android4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `technologies`
--

CREATE TABLE `technologies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `technologies`
--

INSERT INTO `technologies` (`id`, `name`, `text`, `image`) VALUES
(1, 'С#.NET', '', 'dot net4.png'),
(2, 'ASP.NET', '', 'dot net.png'),
(3, 'php', '', 'php2.png'),
(4, 'laravel', '', 'laravel.png'),
(5, 'Javascript', '', 'javascript4.png'),
(6, 'TypeScript', '', 'TypeScript.png'),
(7, 'AngularJS', '', 'angularjs.png'),
(8, 'jQuery', '', 'jquery2.png'),
(9, 'HTML5', '', 'HTML5.png'),
(10, 'CSS3', '', 'css3.png'),
(11, 'Bootstrap', '', 'bootstraplogo.png'),
(12, 'MySQL', '', 'mysql.png'),
(13, 'MSSQL', '', 'MSSQL.png'),
(14, 'WebApi', '', 'webapi3.png'),
(15, 'Linux', '', 'linux3.png');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `methodologies`
--
ALTER TABLE `methodologies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `peoples`
--
ALTER TABLE `peoples`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `technologies`
--
ALTER TABLE `technologies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `methodologies`
--
ALTER TABLE `methodologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `peoples`
--
ALTER TABLE `peoples`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT для таблицы `technologies`
--
ALTER TABLE `technologies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
