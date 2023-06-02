
-- Estrutura da tabela `local`
--

CREATE TABLE `local` (
  `id_local` int(3) UNSIGNED NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Inserindo Dados
--

INSERT INTO `local` (`id_local`, `cidade`, `endereco`, `bairro`) VALUES
(1, 'Brasília', 'Qd 12 Área especial 01, lote 5', 'Sobradinho'),
(2, 'Brasília', 'Qd 13 Área especial 02, lote 3', 'Asa Sul'),
(3, 'Brasília', 'Qd 14 Área especial 03, lote 6', 'Santa Maria'),
(4, 'Brasília', 'Qd 16 Área especial 04, lote 10', 'Jardim Botânico');

