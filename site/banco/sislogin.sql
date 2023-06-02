
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(256) NOT NULL,
  `novaSenha` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Inserir pessoas 

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`, `status`, `novaSenha`) VALUES
(3, 'guilherme', 'guicoelho2408@gmail.com', '8eb53d8b6d23b6c96a6d8cf6845420ff', '1', '1', ''),
(4, 'gui test', 'guitest@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', '2', '1', '');

