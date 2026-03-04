-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/03/2026 às 02:48
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_telas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensagem` text DEFAULT NULL,
  `foto_caminho` varchar(255) DEFAULT NULL,
  `data_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome_completo`, `email`, `telefone`, `mensagem`, `foto_caminho`, `data_envio`) VALUES
(1, 'Felipe Olimpio ', 'felipe@gmail.com', '41985175707', 'Duas Janelas cada janela com 1,20 x 1,20 ', '69a3582133127.jpeg', '2026-02-28 21:03:29'),
(2, 'teste', 'teste@gmail.com', '5161161651561651', 'teste', '', '2026-02-28 21:40:12'),
(3, 'andrea Nascimento dos santos', 'andrea@gmail.com', '41997751566', 'Tres janelas de 1,00 x1,00 no bairo santa felicidade', '69a3610c81300_0.jpeg,69a3610c8e3c1_1.jpeg,69a3610c8ed05_2.jpeg', '2026-02-28 21:41:32'),
(4, 'mais um teste', 'teste@gmail.com', '41985175707', '4 janelas', '', '2026-02-28 21:51:29'),
(5, 'tete', 'teste@gmail.com', '41985175707', 'sndsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', '', '2026-02-28 21:52:13'),
(6, 'Felipe Olimpio', 'felipeolimpio07@gmail.com', '41985175707', 'sorvete', NULL, '2026-03-01 19:00:42'),
(7, 'Felipe Olimpio', 'felipeolimpio07@gmail.com', '41985175707', 'sorvete', '', '2026-03-01 19:14:19'),
(8, 'teste', 'teste@gmail.com', '(41) 98517-5707', 'janela 2,00 x 2,00', '', '2026-03-01 19:15:52'),
(9, 'Andrea Nascimento', 'andrea@gmail.com', '(41) 99775-1566', 'Janela de corres duas folhas', '12d9073789_0.jpeg,11fd6d35de_1.jpeg,22b5ac5f72_2.webp', '2026-03-01 19:24:27'),
(10, 'Andrea Nascimento ', 'Andrea@gmail.com', '(41) 99775-1566', '3 Janelas, moro na região de colombo', '69a8495a11_0.webp,bf7503e734_1.png,f27ff2a892_2.png,77d2a44749_3.jpg,3a9b3c9952_4.webp,89152dc660_5.png,8cfdd64cd5_6.png', '2026-03-01 19:34:34'),
(11, 'Thiago Henrique da silva Gonçalves', 'felipeolimpio07@gmail.com', '(41) 98517-5707', 'Preciso de um orçamento para 5 janelas de 1,20 x 1,20 ', '82f7088f5f_0.png,2b997eec53_1.png,84b522e212_2.png,767d9920a3_3.png,104be871dd_4.png,8d3c188e4e_5.png', '2026-03-02 12:54:20');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `senha`, `nome`, `criado_em`) VALUES
(1, 'admin', '123456', 'Administrador', '2026-03-01 18:10:50');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
