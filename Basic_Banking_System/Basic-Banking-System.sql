SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Dhanya', 'Arya', 1400),
('Diksha', 'Mounika', 1250),
('Tanmai', 'Swapna', 1500),
('Arya', 'Nehalika', 1400),
('Mounika', 'Dhanya', 1130),
('Adi Lakshmi', 'madhuri', 1250);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Arya', 'arya@gmail.com', 25000),
('Nehalika', 'neha@gmail.com', 23500),
('Dhanya', 'dhanya@gmail.com', 10000),
('Diksha', 'diksha@gmail.com', 33950),
('Mounika', 'mounika@gmail.com', 32000),
('Tanmai', 'tanmai@gmail.com', 31500),
('Adi Lakshmi', 'adi@gmail.com', 31000),
('Madhuri', 'madhuri@gmail.com', 21050),
('Trupti', 'trupti@gmail.com', 23800),
('Swapna', 'swapna@gmail.com', 21800);
COMMIT;
