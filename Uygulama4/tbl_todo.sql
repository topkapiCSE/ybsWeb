-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 23 Ara 2022, 12:35:22
-- Sunucu sürümü: 10.4.27-MariaDB
-- PHP Sürümü: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ybs`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `tbl_todo`
--

INSERT INTO `tbl_todo` (`id`, `value`, `created_at`) VALUES
(9, 'Deneme 1', '2022-12-23 14:13:09'),
(10, 'Deneme 2', '2022-12-23 14:13:16'),
(11, 'Deneme 2', '2022-12-23 14:22:07'),
(12, '123', '2022-12-23 14:22:11'),
(13, 'Topkapi', '2022-12-23 14:22:44'),
(14, 'asdasdas', '2022-12-23 14:23:08'),
(15, '1231254123', '2022-12-23 14:23:13'),
(16, '12512312312', '2022-12-23 14:23:15'),
(17, '512312541251241251512412512 12 51234123', '2022-12-23 14:23:19'),
(18, '512312541251241251512412512 12 51234123', '2022-12-23 14:26:25'),
(19, 'İstanbul', '2022-12-23 14:28:44'),
(20, 'İstanbul', '2022-12-23 14:29:25'),
(21, 'asdasdas', '2022-12-23 14:29:31'),
(22, '123123', '2022-12-23 14:29:33');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `tbl_todo`
--
ALTER TABLE `tbl_todo`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `tbl_todo`
--
ALTER TABLE `tbl_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
