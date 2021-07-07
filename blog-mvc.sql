-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lip 2021, 14:55
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `blog-mvc`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(400) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `category_id`, `title`, `text`, `status`, `created_at`) VALUES
(7, 13, 4, 'Wyspa Tajemnic', 'Szeryf federalny Daniels stara się dowiedzieć, jakim sposobem z zamkniętej celi w pilnie strzeżonym szpitalu dla chorych psychicznie przestępców zniknęła pacjentka.', 1, '2021-07-03 14:50:50'),
(8, 13, 4, 'Obecność 3: NA ROZKAZ DIABŁA', 'Rok 1981. Małżeństwo Warren bada sprawę mężczyzny oskarżonego o morderstwo. Sprawca jednak utrzymuje, że za zbrodnie odpowiedzialny jest potężny demon, władający jego ciałem.', 1, '2021-07-03 14:51:47'),
(9, 13, 5, 'Myszy i ludzie', 'Piękna opowieść o bezwarunkowej przyjaźni, ludzkich tęsknotach i marzeniach.\r\nGeorge Milton i Lennie Small to niezwykły tandem przyjaciół. George jest silnym mężczyzną, a podążający w ślad za nim Lennie – upośledzonym gigantem o umysłowości małego dziecka. Niezdarny i nieświadomy własnej siły fizycznej nie potrafi dostosować się do społecznych norm i co chwila sprowadza na siebie i George’a mniejsze lub większe nieszczęścia. Nie mogąc znaleźć dla siebie miejsca, przyjaciele przemierzają pogrążone w Wielkim Kryzysie Stany w poszukiwaniu zarobku i akceptacji. Ich marzeniem i celem, do którego dążą, jest własna farma, na której mogliby wspólnie hodować króliki.', 1, '2021-07-03 14:52:30'),
(11, 13, 8, 'Artykuł do usunięcia', 'test', 4, '2021-07-03 14:53:07');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(4, 'Filmy'),
(5, 'Książki'),
(8, 'Kategoria do usunięcia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'Jan', 'jan.kowalski@wp.pl', '$2y$10$Q/dtSJR4k.5sclwcfA2gdOkAJcyQCSBPXQfpQGbt6S95qOxjYbVZO'),
(10, 'Paweł', 'pawcio1337@o2.pl', '$2y$10$W3myC4BCn8jAty2qISd/duFYhZ.pseH2C4U.veGN/aI8URUtWcmBO'),
(11, 'Karol', 'karol@gmail.com', '$2y$10$c8Xda2ufJrStr8knY5zy/uIzYabeWS2.JT5ySbWfu9QBwgPFpviiO'),
(12, 'Julia', 'julka22@wp.pl', '$2y$10$l2aTb4bZKkzciS3WfrrojesnuRawF0IPY9rzWjHPvXRoQsJpU26Fu'),
(13, 'Krzysztof', 'kon@on.pl', '$2y$10$ZiBPhjHF4Oz5eyaTbknu3usiMWiJz6Zpt1OTNSaahTXpcnSlYU7yW');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
