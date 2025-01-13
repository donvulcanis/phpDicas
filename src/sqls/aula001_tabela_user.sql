SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `user_mail` varchar(128) NOT NULL,
  `user_type` char(16) NOT NULL DEFAULT 'Cliente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user` (`user_id`, `user_name`, `user_mail`, `user_type`) VALUES
(1, 'João da Silva', 'joao@silva.com', 'Cliente'),
(2, 'Maria de Souza', 'maria@souza.com', 'Cliente');

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_mail` (`user_mail`);

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
