-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 10 Ιαν 2026 στις 23:59:50
-- Έκδοση διακομιστή: 10.4.32-MariaDB
-- Έκδοση PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `profile`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `reservations`
--

CREATE TABLE `reservations` (
  `room` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `people` int(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `terms` int(11) NOT NULL COMMENT 'ΑΝ =1 τοτε συναινει'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `reservations`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room` varchar(100) NOT NULL,
  `people` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `difficulty` varchar(100) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `rooms`
--

INSERT INTO `rooms` (`room_id`, `room`, `people`, `price`, `duration`, `theme`, `difficulty`, `photo`, `description`) VALUES
(1, 'Haunted house', '2-6', 60, '75min', 'Horror', 'Hard', 'haunted.png', 'Ένα εγκαταλελειμμένο αρχοντικό γεμάτο μυστικά. Βρες στοιχεία, λύσε γρίφους και απόδρασε πριν κλείσουν οι πόρτες.'),
(2, 'Secret Lab', '2-6', 40, '60min', 'Sci-Fi', 'medium', 'lab.png', 'Το εργαστήριο είναι σε lockdown. Βρες τον κωδικό, ενεργοποίησε τα συστήματα και άνοιξε την έξοδο πριν τελειώσει ο χρόνος.'),
(3, 'Bank Heist', '2-6', 20, '60min', 'Action', 'easy', 'bank.png', 'Μπες στην τράπεζα, άνοιξε το θησαυροφυλάκιο και φύγε πριν σε πιάσουν. Γρήγοροι γρίφοι, fun αποστολή και teamwork.');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `reservations`
--
ALTER TABLE `reservations`
  ADD UNIQUE KEY `time` (`time`);

--
-- Ευρετήρια για πίνακα `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD UNIQUE KEY `room` (`room`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `firstname` (`firstname`,`lastname`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
