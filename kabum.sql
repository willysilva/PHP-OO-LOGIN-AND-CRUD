
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:00";

--
-- Banco de dados: `kabum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `street` varchar(20) NOT NULL,
  `number` varchar(4) NOT NULL,
  `neighborhood` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(2) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `descr` varchar(50) DEFAULT NULL,
  `joined` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`id`, `id_client`, `street`, `number`, `neighborhood`, `city`, `state`, `cep`, `descr`, `joined`) VALUES
(11, 10, 'Rua Alberto Baccarat', '10', 'BoqueirÃ£o', 'Santos', 'SP', '11050050', NULL, '2020-05-05 10:26:57'),
(12, 10, 'Rua Alberto Baccarat', '10', 'BoqueirÃ£o', 'Santos', 'SP', '11050050', NULL, '2020-05-05 10:27:05'),
(13, 9, 'Rua Alberto Baccarat', '150', 'BoqueirÃ£o', 'Santos', 'SP', '11050050', NULL, '2020-05-05 10:27:20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(10) DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `joined` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`ID`, `name`, `cpf`, `rg`, `birth`, `joined`) VALUES
(9, 'JOSÃ‰ DA SILVA', '12345678910', '132156465', '1997-10-10', '2020-05-05 10:12:17'),
(10, 'WILLY SILVA DE SOUZA', '03157345125', '12345654', '1997-03-29', '2020-05-05 10:26:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE `groups` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `permissions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `joined` datetime NOT NULL,
  `userGroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `salt`, `name`, `joined`, `userGroup`) VALUES
(5, 'kabum', '4264e6b93c19ec1ea882c40d1ab900553eb9b40920d2c4d372f7a16bf711066e', 'S[æhŒŠˆ]€Oû69FƒUÈˆÃH¸F9ÁîI¡', 'KABUM', '2020-05-05 13:30:10', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `userssessions`
--

CREATE TABLE `userssessions` (
  `ID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `hash` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_client` (`id_client`);

--
-- Índices para tabela `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- Índices para tabela `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `userssessions`
--
ALTER TABLE `userssessions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `groups`
--
ALTER TABLE `groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `userssessions`
--
ALTER TABLE `userssessions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_client` FOREIGN KEY (`id_client`) REFERENCES `clients` (`ID`);
COMMIT;
