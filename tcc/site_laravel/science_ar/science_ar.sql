-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2023 às 21:14
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `science_ar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`id_admin`, `id_user`) VALUES
(1, 1),
(2, 2),
(12, 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE `answers` (
  `id_answer` bigint(20) UNSIGNED NOT NULL,
  `id_question` bigint(20) UNSIGNED NOT NULL,
  `text_answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id_answer`, `id_question`, `text_answer`, `correct`) VALUES
(137, 41, 'A) Acre, Amapá, Amazonas, Pará, Roraima, Maranhão, Mato Grosso, Rondônia, Sergipe e Tocantins.', 0),
(138, 41, 'B) Amazonas, Pará, Roraima, Maranhão, Ceará, Mato Grosso e Rondônia.', 0),
(139, 41, 'C) Acre, Amapá, Amazonas, Pará, Roraima, Maranhão, Mato Grosso, Rondônia e Tocantins.', 1),
(140, 41, 'D) Acre, Amapá, Amazonas, Pará, Roraima, Maranhão, Mato Grosso, Mato Grosso do Sul, Rio Grande do Sul, Rondônia e Tocantins.', 0),
(141, 42, 'A) 75%', 0),
(142, 42, 'B) 85%', 1),
(143, 42, 'C) 65%', 0),
(144, 42, 'D) 70%', 0),
(145, 43, 'A) Matas de terra seca, matas de várzea e matas de igapó.', 0),
(146, 43, 'B) Matas de terra vermelha, matas de várzea e matas de ígapo.', 0),
(147, 43, 'C) Matas de terra firme, matas de varzia e matas de igápo.', 0),
(148, 43, 'D) Matas de terra firme, matas de várzea e matas de igapó.', 1),
(149, 44, 'A) Ficam em regiões altas, por isso, são inundadas pelos rios e sua vegetação sempre é seca, possuindo árvores de grande porte.', 1),
(150, 44, 'B) Ficam nas regiões baixas, sendo sempre inundada e sua vegetação é baixa, possuindo arbustos e cipós.', 0),
(151, 44, 'C) Possui as características das outras duas regiões.', 0),
(152, 45, 'A) Ficam em regiões altas, por isso, são inundadas pelos rios e sua vegetação sempre é seca.', 0),
(153, 45, 'B) Possui as características das outras duas regiões.', 0),
(154, 45, 'C) Ficam nas regiões baixas, sendo sempre inundada e sua vegetação é baixa, possuindo arbustos e cipós.', 1),
(155, 46, 'A) Ficam em regiões altas, por isso, são inundadas pelos rios e sua vegetação sempre é seca, possuindo árvores de grande porte.', 0),
(156, 46, 'B) Possui as características das outras duas regiões.', 1),
(157, 46, 'C) Ficam nas regiões baixas, sendo sempre inundada e sua vegetação é baixa, possuindo arbustos e cipós.', 0),
(158, 47, 'A) 40%', 0),
(159, 47, 'B) 35%', 0),
(160, 47, 'C) 30%', 0),
(161, 47, 'D) 20%', 1),
(162, 48, 'A) Rio Amazonas, Rio Tapajós, Rio Madeira, Rio Negro.', 1),
(163, 48, 'B) Rio Amazonas, Rio Juruá, Rio Tapajós, Rio Madeira.', 0),
(164, 48, 'C) Rio Amazonas, Rio Negro, Rio Trombetas.', 0),
(165, 48, 'D) Rio Amazonas, Rio Purus, Rio Branco.', 0),
(166, 49, 'A) Rios de águas claras, rios de águas barrentas e rios de águas vermelhas.', 0),
(167, 49, 'B) Rios de águas claras, rios de águas barrentas e rios de águas pretas.', 1),
(168, 49, 'C) Rios de águas salgadas, rios de águas vermelhas, rios de águas claras.', 0),
(169, 49, 'D) Rios de águas agitadas, rios de águas pretas, rios de águas rasas.', 0),
(170, 50, 'A) Correto.', 1),
(171, 50, 'B) Incorreto.', 0),
(172, 51, 'A) Apenas a I, II e III estão corretas.', 0),
(173, 51, 'B) Apenas a IV está incorreta.', 0),
(174, 51, 'C) Apenas a II, IV e V estão incorretas.', 0),
(175, 51, 'D) Apenas a I, II e IV estão corretas.', 1),
(176, 52, 'A) 20%', 0),
(177, 52, 'B) 22%', 1),
(178, 52, 'C) 30%', 0),
(179, 52, 'D) 32%', 0),
(180, 53, 'A) O segundo maior bioma brasileiro.', 1),
(181, 53, 'B) O maior bioma brasileiro.', 0),
(182, 53, 'C) O quarto maior bioma brasileiro.', 0),
(183, 53, 'D) O menor bioma brasileiro.', 0),
(184, 54, 'A) Apenas a II está correta.', 0),
(185, 54, 'B) Apenas a II está correta.', 0),
(186, 54, 'C) Apenas a I está correta.', 1),
(187, 54, 'D) Todas as alternativas estão corretas.', 0),
(188, 55, 'A) Setembro a dezembro.', 0),
(189, 55, 'B) Julho a novembro.', 0),
(190, 55, 'C) Janeiro a abril.', 0),
(191, 55, 'D) Maio a setembro.', 1),
(192, 56, 'A) Maio e outubro.', 0),
(193, 56, 'B) Outubro a abril.', 1),
(194, 56, 'C) Fevereiro a julho.', 0),
(195, 56, 'D) Maio e setembro.', 0),
(196, 57, 'A) Devido à ausência de limitações ambientais.', 0),
(197, 57, 'B) Devido à sua proximidade com oceanos.', 0),
(198, 57, 'C) Devido à sua alta pluviosidade.', 0),
(199, 57, 'D) Devido à sua limitação com outros biomas.', 1),
(200, 58, 'A) Lobo-guará.', 0),
(201, 58, 'B) Arara-azul.', 1),
(202, 58, 'C) Veado-campeiro.', 0),
(203, 58, 'D) Tucano.', 0),
(204, 59, 'A) Argissolo.', 0),
(205, 59, 'B) Latossolo.', 1),
(206, 59, 'C) Podzólico.', 0),
(207, 59, 'D) Planossolo.', 0),
(208, 60, 'A) Devido à falta de chuvas na região.', 0),
(209, 60, 'B) Devido à baixa permeabilidade dos solos.', 0),
(210, 60, 'C) Devido à intensidade da atividade agrícola na região.', 0),
(211, 60, 'D) Devido à alta porosidade e permeabilidade dos solos.', 1),
(260, 74, 'A) Pernambuco.', 0),
(261, 74, 'B) Sergipe.', 0),
(262, 74, 'C) Ceará.', 1),
(263, 74, 'D) Tocantins.', 0),
(264, 75, 'A) Tropical semiárido.', 1),
(265, 75, 'B) Subtropical.', 0),
(266, 75, 'C) Equatorial.', 0),
(267, 75, 'D) Tropical.', 0),
(268, 76, 'A) Emergente, subarbustivo e herbáceo.', 0),
(269, 76, 'B) Arbóreo, arbustivo e herbáceo.', 1),
(270, 76, 'C) Arbóreo, subarbustivo e herbáceo.', 0),
(271, 76, 'D) Epifítico, arbustivo e herbáceo.', 0),
(272, 77, 'A) Entre 5 e 10 metros; Entre 2 e 5 metros; Acima de 10 metros.', 0),
(273, 77, 'B) Entre 8 e 12 metros; Entre 2 e 8 metros; Abaixo de 2 metros.', 0),
(274, 77, 'C) Entre 10 e 12 metros; Entre 5 e 8 metros; Acima de 8 metros.', 0),
(275, 77, 'D) Entre 8 e 12 metros; Entre 2 e 5 metros; Abaixo de 2 metros.', 1),
(276, 78, 'A) Folhas pequenas, largas e secas.', 0),
(277, 78, 'B) Folhas modificadas, folhas caídas e armazenamento de água.', 1),
(278, 78, 'C) Folhas modificadas, espinhos, folhas secas.', 0),
(279, 78, 'D) Folhas pequenas, folhas caídas e armazenamento de água.', 0),
(280, 79, 'A) Região, regime de chuvas e qualidade dos solos.', 1),
(281, 79, 'B) Região, temperatura e qualidade dos solos.', 0),
(282, 79, 'C) Altitude regional, temperatura e fatores abióticos.', 0),
(283, 79, 'D) Região, regime de chuvas e fatores abióticos.', 0),
(284, 80, 'A) Catingueira, jacarandá e bambu.', 0),
(285, 80, 'B) Pinheiro, macambira e bambu.', 0),
(286, 80, 'C) Mandacaru, catingueira e macambira.', 1),
(287, 80, 'D) Coqueiro, mandacaru e bananeira.', 0),
(288, 81, 'A) Atividade predominantemente diurna.', 0),
(289, 81, 'B) Comportamentos migratórios.', 1),
(290, 81, 'C) Preferência por ambientes aquáticos.', 0),
(291, 81, 'D) Desenvolvimento de hábitos alpinos.', 0),
(292, 82, 'A) Profundos e ricos em matéria orgânica.', 0),
(293, 82, 'B) Rasos e ricos em matéria orgânica.', 0),
(294, 82, 'C) Profundos e pobres em matéria orgânica.', 0),
(295, 82, 'D) Rasos e pobres em matéria orgânica.', 1),
(296, 83, 'A) Trigo, arroz, lentilha e banana.', 0),
(297, 83, 'B) Milho, feijão, trigo e caju.', 0),
(298, 83, 'C) Licuri, umbu, caju e maracujá.', 1),
(299, 83, 'D) Maçã, uva, tâmara e jenipapo.', 0),
(300, 84, 'A) Eles têm água durante o ano todo.', 0),
(301, 84, 'B) Eles fluem apenas nos períodos de chuva e secam na estação seca.', 1),
(302, 84, 'C) Eles são alimentados por nascentes de águas profundas.', 0),
(303, 84, 'D) Eles são muito largos e profundos.', 0),
(304, 85, 'A) Rio Poti.', 1),
(305, 85, 'B) Rio Jaguaribe.', 0),
(306, 85, 'C) Rio São Francisco.', 0),
(307, 85, 'D) Rio Negro.', 0),
(320, 89, 'A) Chile e Equador.', 0),
(321, 89, 'B) Uruguai e Paraguai.', 0),
(322, 89, 'C) Paraguai e Bolívia.', 1),
(323, 89, 'D) Argentina e Colômbia.', 0),
(324, 90, 'A) Cerca de 20000 espécies.', 0),
(325, 90, 'B) Mais de 100 espécies.', 0),
(326, 90, 'C) Aproximadamente 1000 espécies.', 0),
(327, 90, 'D) Mais de 2000 espécies.', 1),
(328, 91, 'A) Agricultura e turismo.', 1),
(329, 91, 'B) Plantas apícolas.', 0),
(330, 91, 'C) Pastagens nativas.', 0),
(331, 91, 'D) Plantas comestíveis e medicinais.', 0),
(332, 92, 'A) Pampa, Mata Atlântica e Cerrado.', 0),
(333, 92, 'B) Mata Atlântica e Floresta Amazônica.', 0),
(334, 92, 'C) Floresta Amazônica e Pampa.', 0),
(335, 92, 'D) Cerrado, Floresta Amazônica e Mata Atlântica.', 1),
(336, 93, 'A) Árvores espinhosas.', 0),
(337, 93, 'B) Árvores tortuosas de baixo porte.', 0),
(338, 93, 'C) Árvores de porte médio e grande.', 1),
(339, 93, 'D) Árvores cactáceas.', 0),
(340, 94, 'A) Vegetais aquáticos.', 1),
(341, 94, 'B) Vegetação de manguezal.', 0),
(342, 94, 'C) Vegetação desértica.', 0),
(343, 94, 'D) Vegetação mediterrânea.', 0),
(344, 95, 'A) Jaú.', 1),
(345, 95, 'B) Pintado.', 0),
(346, 95, 'C) Dourado.', 0),
(347, 95, 'D) Piranha.', 0),
(348, 96, 'A) Fevereiro até julho, caindo garoa constantemente e temperaturas baixas.', 0),
(349, 96, 'B) Abril até setembro, possui ausência de chuva e temperaturas elevadas.', 1),
(350, 96, 'C) Outubro até março, possui ausência de chuva e temperaturas baixas.', 0),
(351, 96, 'D) Abril e até setembro, chuva constante e temperaturas elevadas.', 0),
(352, 97, 'A) Devido às suas planícies alagadas.', 1),
(353, 97, 'B) Por causa da diversidade de fauna.', 0),
(354, 97, 'C) Pela presença de animais endêmicos.', 0),
(355, 97, 'D) Devido à forte chuva no verão.', 0),
(356, 98, 'A) Erosão pluvial.', 0),
(357, 98, 'B) Decomposição acelerada.', 0),
(358, 98, 'C) Lixiviação.', 1),
(359, 98, 'D) Fotossíntese intensa.', 0),
(360, 99, 'A) Areias brancas e arenitos.', 0),
(361, 99, 'B) Chernossolos e Andossolos.', 0),
(362, 99, 'C) Latossolos e Nitossolos.', 0),
(363, 99, 'D) Planossolos, Espodossolos e Gleissolos.', 1),
(364, 100, 'A) Brejos e lagoas.', 0),
(365, 100, 'B) Rios e campos alagados.', 1),
(366, 100, 'C) Pântanos.', 0),
(367, 100, 'D) Baías.', 0),
(637, 116, 'A) Acontecimentos causados pelo ser humano, onde a natureza se adapta a esses acontecimentos e repetem os fenômenos de tempo em tempo.', 0),
(638, 116, 'B) Acontecimento natural, que não teve intervenção humana, sendo causada pela própria natureza.', 1),
(639, 116, 'C) Acontecimentos naturais, causada pela própria natureza, ocorrendo em tempos específicos.', 0),
(640, 116, 'D) Acontecimentos naturais, que ocorre apenas com água.', 0),
(641, 117, 'A) Furacão e ciclone.', 0),
(642, 117, 'B) Terremoto.', 0),
(643, 117, 'C) Vulcões, tufão, avalanches, furacões e ciclone.', 0),
(644, 117, 'D) Tsunami, terremotos, vulcões, avalanches, furacões e tornados.', 1),
(645, 118, 'A)	Furacão', 0),
(646, 118, 'B)	Redemoinho', 0),
(647, 118, 'C)	Tornado', 1),
(648, 118, 'D)	Avalanche', 0),
(649, 119, 'A) Avalanche.', 1),
(650, 119, 'B) Terremoto.', 0),
(651, 119, 'C) Furacão.', 0),
(652, 119, 'D) Deslizamento de terra.', 0),
(653, 120, 'A) Pode ocorrer pelo aumento do nível do mar.', 0),
(654, 120, 'B) Pode ocorrer pelo movimento das correntes oceânicas.', 0),
(655, 120, 'C) Ocorre pelas ações humanas, por explosões dentro do mar.', 0),
(656, 120, 'D) Ocorre através de erupções vulcânicas, terremotos etc.', 1),
(657, 121, 'A) Ocorre pelos meteoros que ultrapassam a atmosfera da Terra e caem no solo, causando o tremor.', 0),
(658, 121, 'B) Ocorre pelo movimento das placas tectônicas da crosta terrestre, que se movem ou se friccionam.', 1),
(659, 121, 'C) Ocorre através da erupção dos vulcões, assim tremendo a terra.', 0),
(660, 121, 'D) Ocorre através dos furacões que faz a terra tremor através da energia transmitida para o solo.', 0),
(661, 122, 'A) Tufão: Noroeste do Pacífico; Furacão: Atlântico e nordeste do Pacífico; Ciclone: Sul do Pacífico e Oceano Índico.', 1),
(662, 122, 'B) Tufão: Noroeste e nordeste do Pacífico; Furacão: Atlântico e sul do Pacífico; Ciclone: Oceano Índico.', 0),
(663, 122, 'C) Tufão: Noroeste, nordeste e sul do Pacífico; Furacão: Oceano Índico; Ciclone: Atlântico.', 0),
(664, 122, 'D) Tufão: Atlântico e Oceano Índico; Furacão: Nordeste e Sul do Pacífico; Ciclone: Noroeste do Pacífico.', 0),
(665, 123, 'A) Tornado de neve, causado pela ação humana.', 0),
(666, 123, 'B) Acumulo de neve, fenômeno em que cai muita neve, impossibilitando o movimento nas ruas.', 0),
(667, 123, 'C) Acumulo de neve, de gelo e detritos, se movimentando de forma violenta, precipitando-se em direção a um vale.', 1),
(668, 123, 'D) Acumulo de pedras que se movimentam diretamente para o vale.', 0),
(717, 131, 'A) Calor é uma forma de energia que sempre flui de um objeto mais frio para um mais quente.', 0),
(718, 131, 'B) Calor é energia transferida de um objeto para outro pela diferença de temperatura entre eles.', 1),
(719, 131, 'C) Calor é uma medida da quantidade total de partículas em um objeto.', 0),
(720, 131, 'D) Calor é um tipo de energia armazenada nos átomos de um objeto.', 0),
(721, 132, 'A) Calor sensível: é quando a temperatura de um corpo muda, mas sem mudar fisicamente; Calor latente: é quando a temperatura de um corpo muda o estado físico dele.', 1),
(722, 132, 'B) Calor sensível e calor latente são termos semelhantes que se referem à quantidade de calor necessária para qualquer alteração em um corpo.', 0),
(723, 132, 'C) Calor sensível: ocorre quando um corpo muda de temperatura sem mudar fisicamente; Calor latente: é a mudança de fase sem alteração de temperatura.', 0),
(724, 132, 'D) Calor latente: se refere apenas à energia térmica necessária para aumentar a temperatura de um corpo; Calor sensível: é quando a temperatura leva à mudança de fase.', 0),
(725, 133, 'A) 2. Condução e convecção.', 0),
(726, 133, 'B) 4. Condução, convecção, fusão e radiação.', 0),
(727, 133, 'C) 3. Condução, convecção e radiação.', 1),
(728, 133, 'D) 4. Condução, radiação, convecção e condensação.', 0),
(729, 134, 'A) Transferência de calor em um fluído que ocorre em virtude de um deslocamento de massa do próprio fluido;', 1),
(730, 134, 'B) Transferência de calor através de um corpo, pela movimentação das suas partículas.', 0),
(731, 134, 'C) Transferência de calor para um objeto por meio natural, através da luz solar.', 0),
(732, 134, 'D) Transferência de calor em líquidos, através da movimentação das partículas.', 0),
(733, 135, 'A) É quando as moléculas do objeto são diferentes das moléculas da fonte de calor.', 0),
(734, 135, 'B) É caracterizado pelo transporte de matéria entre regiões de um fluído em razão da diferença de densidade.', 0),
(735, 135, 'C) É quando o calor se espalha através de ondas eletromagnéticas.', 0),
(736, 135, 'D) Quando o calor passa de molécula a molécula do material.', 1),
(737, 136, 'A) É a transferência de calor através do contato de um objeto com outro.', 0),
(738, 136, 'B) É a transmissão de calor por meio de ondas eletromagnéticas.', 1),
(739, 136, 'C) É a transferência de calor causada pela densidade do objeto a outro.', 0),
(740, 136, 'D) É a transmissão de calor causado através das moléculas agitadas de um objeto encontrado com outro.', 0),
(741, 137, 'A) Quando as moléculas de um determinado corpo estão agitadas, deixando assim seu estado frio.', 0),
(742, 137, 'B) Quando as moléculas de um corpo estão em repouso.', 0),
(743, 137, 'C) É um objeto que não pode ser feito através de convecção ou radiação, apenas condução.', 0),
(744, 137, 'D) É todo elemento capaz de produzir o aumento de temperatura de outro corpo é uma fonte de calor.', 1),
(745, 138, 'A) É a maneira como nosso corpo compreende a velocidade do vento.', 0),
(746, 138, 'B) É a maneira como nosso corpo percebe a temperatura do ar.', 1),
(747, 138, 'C) É a temperatura exata do ar', 0),
(748, 138, 'D) É a maneira como qualquer ser vivo compreende a temperatura do ar.', 0),
(749, 139, 'A) O vento não influencia em nada, não tem nada a ver com temperatura.', 0),
(750, 139, 'B) O vento intensifica a evaporação da água, que provoca o abaixamento da temperatura da água, dando a sensação de frio, mas apenas à noite.', 0),
(751, 139, 'C) O vento intensifica a evaporação da água, que provoca o abaixamento da temperatura da água. Assim, dando a sensação de frio.', 1),
(752, 139, 'D) O vento aquece o corpo, deixando a sensação térmica mais quente.', 0),
(753, 140, 'A) 5 estados.', 0),
(754, 140, 'B) 10 estados.', 0),
(755, 140, 'C) 15 estados.', 0),
(756, 140, 'D) 17 estados.', 1),
(757, 141, 'A) 12,5%', 1),
(758, 141, 'B) 10,5%', 0),
(759, 141, 'C) 8%', 0),
(760, 141, 'D) 5%', 0),
(761, 142, 'A) Floresta Regenerativa.', 0),
(762, 142, 'B) Mata Limpa.', 0),
(763, 142, 'C) Mata Virgem.', 1),
(764, 142, 'D) Floresta Secundária.', 0),
(765, 143, 'A) Predomínio de espécies exóticas.', 0),
(766, 143, 'B) Presença de orquídeas e cactos nas copas das árvores.', 1),
(767, 143, 'C) Árvores de altura limitada.', 0),
(768, 143, 'D) Ausência completa de biodiversidade.', 0),
(769, 144, 'A) Uma floresta intocada pelo homem.', 0),
(770, 144, 'B) Uma área onde houve atividade humana, como agricultura e extrativismo vegetal.', 1),
(771, 144, 'C) Uma floresta primária em estágio inicial de crescimento.', 0),
(772, 144, 'D) Uma reserva natural.', 0),
(773, 145, 'A) Estágio inicial, estágio médio e estágio avançado.', 1),
(774, 145, 'B) Estágio primário, estágio secundário e estágio terciário.', 0),
(775, 145, 'C) Estágio inicial, estágio maduro e estágio primitivo.', 0),
(776, 145, 'D) Estágio um, estágio dois e estágio três.', 0),
(777, 146, 'A) Até 5 anos.', 0),
(778, 146, 'B) Até 10 anos.', 1),
(779, 146, 'C) Até 20 anos.', 0),
(780, 146, 'D) Até 30 anos.', 0),
(781, 147, 'A) Até 50 anos.', 0),
(782, 147, 'B) Até 100 anos.', 0),
(783, 147, 'C) Até 200 anos.', 1),
(784, 147, 'D) Até 300 anos.', 0),
(785, 148, 'A) Permanece constante.', 0),
(786, 148, 'B) Diminui.', 0),
(787, 148, 'C) Aumenta gradualmente.', 1),
(788, 148, 'D) Se destroem.', 0),
(789, 149, 'A) Pequenas vegetações arbustivas.', 0),
(790, 149, 'B) Espécies endêmicas.', 0),
(791, 149, 'C) Matéria orgânica.', 0),
(792, 149, 'D) Grandes árvores.', 1),
(793, 150, 'A) O solo fica fértil para as vegetações.', 1),
(794, 150, 'B) O solo perde sua fertilidade.', 0),
(795, 150, 'C) O solo torna-se estéril.', 0),
(796, 150, 'D) O solo endurece e se torna inabitável.', 0),
(797, 151, 'A) É uma floresta de copa baixa.', 0),
(798, 151, 'B) É uma floresta de copa alta.', 1),
(799, 151, 'C) É uma floresta homogênea.', 0),
(800, 151, 'D) É uma floresta de vegetação rasteira.', 0),
(801, 152, 'A) Cinco.', 0),
(802, 152, 'B) Seis.', 0),
(803, 152, 'C) Sete.', 1),
(804, 152, 'D) Nove.', 0),
(805, 153, 'A) Amazonas e Tocantins.', 0),
(806, 153, 'B) São Francisco e Paraíba do Sul.', 1),
(807, 153, 'C) Paraná e Madeira.', 0),
(808, 153, 'D) Araguaia e Xingu.', 0),
(809, 154, 'A) A presença de desertos.', 0),
(810, 154, 'B) A altitude elevada das montanhas.', 0),
(811, 154, 'C) As grandes árvores que geram sombra e umidade.', 1),
(812, 154, 'D) A ausência de vegetação.', 0),
(813, 155, 'A) Variação extrema de calor e frio.', 0),
(814, 155, 'B) Verões quentes e invernos rigorosos.', 0),
(815, 155, 'C) Invernos quentes e verões frios.', 0),
(816, 155, 'D) Temperaturas médias e umidade do ar elevadas durante o ano todo.', 1),
(817, 156, 'A) Um pequeno oceano antigo, que se formou devido ao derretimento de uma geleira.', 0),
(818, 156, 'B) Um grande vulcão, que se formou através de uma cratera no solo.', 0),
(819, 156, 'C) Um supercontinente, que se formou através da junção dos continentes.', 1),
(820, 157, 'A) São pedaços de terra na superfície que se movem lentamente. Isso causa terremotos quando elas se chocam ou se afastam rapidamente.', 0),
(821, 157, 'B) São grandes blocos rochosos semirrígidos que formam a crosta terrestre e que se movem. Seu movimento causa terremotos quando colidem ou deslizam umas contra as outras.', 1),
(822, 157, 'C) São grandes peças de gelo que estão na Terra e se movimentam. Isso leva a terremotos quando elas colidem ou se movem de lado.', 0),
(823, 158, 'A) 10 placas tectônicas.', 0),
(824, 158, 'B) 14 placas tectônicas.', 1),
(825, 158, 'C) 5 placas tectônicas.', 0),
(826, 159, 'A) Placa Norte-Americana e Placa Australiana.', 1),
(827, 159, 'B) Placa da Carolina e Placa das Marianas.', 0),
(828, 159, 'C) Placa do Ande do Norte e Placa de Scotia', 0),
(829, 160, 'A) 5', 0),
(830, 160, 'B) 3', 1),
(831, 160, 'C) 1', 0),
(832, 161, 'A) Placas Oceânicas.', 0),
(833, 161, 'B) Placas Continentais.', 0),
(834, 161, 'C) Placas Oceânicas e Continentais.', 1),
(835, 162, 'A) Se movimentam pelas altas temperaturas que existem no interior da Terra.', 1),
(836, 162, 'B) Se movimentam pela influência das atividades humanas, como construção de cidades.', 0),
(837, 162, 'C) Se movimentam por causa das correntes oceânicas, que faz com que as placas tectônicas se movimentem em várias velocidades.', 0),
(880, 86, 'A) Norte.', 0),
(881, 86, 'B) Nordeste.', 0),
(882, 86, 'C) Centro-Oeste.', 1),
(883, 86, 'D) Sudeste.', 0),
(884, 87, 'A) Menos de 1%, o menor bioma.', 0),
(885, 87, 'B) Aproximadamente 2%, o menor bioma.', 1),
(886, 87, 'C) Cerca de 5%, o segundo menor bioma.', 0),
(887, 87, 'D) Mais de 10%, o terceiro menor bioma.', 0),
(888, 88, 'A) Mato Grosso.', 1),
(889, 88, 'B) Mato Grosso do Sul.', 0),
(890, 88, 'C) São Paulo.', 0),
(891, 88, 'D) Minas Gerais.', 0),
(892, 61, 'A) Minas Gerais.', 0),
(893, 61, 'B) Rio Grande do Sul.', 1),
(894, 61, 'C) Paraná.', 0),
(895, 61, 'D) Santa Catarina.', 0),
(896, 62, 'A) Primavera e Verão.', 0),
(897, 62, 'B) Outono e Inverno.', 0),
(898, 62, 'C) Verão e Inverno.', 1),
(899, 62, 'D) Outono e Primavera.', 0),
(900, 63, 'A) Rio da Prata e Rio Uruguai.', 1),
(901, 63, 'B) Rio Juruá e Rio Negro.', 0),
(902, 63, 'C) Rio da Prata e Rio Negro.', 0),
(903, 63, 'D) Rio Madeira e Rio Uruguai.', 0),
(904, 64, 'A) Bacia Hidrográfica do Atlântico Leste e Bacia do Rio Paraná.', 0),
(905, 64, 'B) Bacia do Rio Tapajós e Bacia do Rio da Prata.', 0),
(906, 64, 'C) Bacia do Rio Solimões e Bacia do Rio do Ouro.', 0),
(907, 64, 'D) Bacia Hidrográfica Costeira do Sul e Bacia do Rio da Prata.', 1),
(908, 65, 'A) Planalto da Serra; Planície costeira; Cordilheira dos Andes; Depressão central.', 0),
(909, 65, 'B) Planalto da campanha; Depressão central; planalto sul-rio-grandense; planície costeira.', 1),
(910, 65, 'C) Planalto da Serra; Planície costeira; Depressão central.', 0),
(911, 65, 'D) Planalto da campanha; planalto sul-rio-grandense; planície costeira.', 0),
(912, 66, 'A) Planícies, suave ondulado, ou seja, é formado por regiões com presenças de colinas.', 1),
(913, 66, 'B) Planalto, área elevada, geralmente mais plana do que as montanhas circundantes.', 0),
(914, 66, 'C) Depressão, terrenos mais baixos do que as áreas circundantes.', 0),
(915, 66, 'D) Planície, extensão de terra relativamente plana e nivelada, com pouca variação de altitude.', 0),
(916, 67, 'A) Indústria Pesqueira.', 0),
(917, 67, 'B) Turismo.', 0),
(918, 67, 'C) Produções agrícolas.', 1),
(919, 67, 'D) Exploração de minérios.', 0),
(920, 68, 'A) Cacau, café, chá, soja e milho.', 0),
(921, 68, 'B) Uva, banana, milho e açaí.', 0),
(922, 68, 'C) Trigo, arroz, lentilha e soja.', 0),
(923, 68, 'D) Trigo, arroz, milho, soja e uva.', 1),
(924, 69, 'A) Pindaíba, xique-xique, juazeiro e cacto.', 0),
(925, 69, 'B) Flechilhas, nhavandaí, algarrobo e cabelos-de-porco.', 1),
(926, 69, 'C) Pequi, jatobá, capim dourado e buriti.', 0),
(927, 69, 'D) Seringueira, cipó-azougue e cumaru.', 0),
(928, 70, 'A) Correto.', 0),
(929, 70, 'B) Incorreto.', 1),
(930, 71, 'A) Correto.', 1),
(931, 71, 'B) Incorreto.', 0),
(932, 72, 'A) Se deslocam sazonalmente entre diferentes regiões.', 0),
(933, 72, 'B) Exclusivas de uma região, não encontradas em outras lugares.', 1),
(934, 72, 'C) Foram introduzidas em uma região fora de sua área nativa.', 0),
(935, 72, 'D) Não existem mais em nenhuma parte do mundo devido à extinção.', 0),
(936, 73, 'A) Leão marinho e gavião real.', 0),
(937, 73, 'B) Gato do mato e carcará.', 0),
(938, 73, 'C) Jabuti e cachorro do mato.', 0),
(939, 73, 'D) Sapinho-de-barriga-vermelha e beija-flor-de-barba-azul.', 1),
(1014, 193, 'A) Elementos naturais presentes na atmosfera que promovem a propagação do fogo.', 0),
(1015, 193, 'B) Substâncias ou materiais que tem energia armazenada em si, podendo ser queimados ou oxidados para liberar calor e produzir energia utilizável.', 1),
(1016, 193, 'C) Recursos renováveis usados na produção de eletricidade a partir da luz do sol.', 0),
(1017, 193, 'D) Matéria-prima para a fabricação de tintas e pigmentos.', 0),
(1018, 194, 'A) Recursos energéticos derivados de fontes fósseis.', 0),
(1019, 194, 'B) Energia gerada a partir da fissão nuclear em usinas atômicas.', 0),
(1020, 194, 'C) Combustíveis líquidos obtidos a partir da destilação do ar atmosférico.', 0),
(1021, 194, 'D) Fontes de energia que podem ser regeneradas naturalmente em um curto período.', 1),
(1022, 195, 'A) Etanol e biodiesel.', 0),
(1023, 195, 'B) Geotérmica e biomassa.', 0),
(1024, 195, 'C) Carvão mineral e petróleo.', 1),
(1025, 195, 'D) Eólica e hidroelétrica.', 0),
(1026, 196, 'A) São feitos a partir de matéria orgânica vegetal e animal fossilizada, levando muito tempo para se renovarem.', 1),
(1027, 196, 'B) São combustíveis produzidos a partir de biomassa.', 0),
(1028, 196, 'C) São fontes de energia que podem ser naturalmente reabastecidas em um curto período de tempo.', 0),
(1029, 196, 'D) São combustíveis sintéticos criados em laboratórios a partir de materiais orgânicos.', 0),
(1030, 197, 'A) Carvão e petróleo.', 0),
(1031, 197, 'B) Gás natural e energia nuclear.', 0),
(1032, 197, 'C) Gás de xisto e urânio.', 0),
(1033, 197, 'D) Biocombustíveis e geotérmica.', 1),
(1034, 198, 'A) Resultado.', 0),
(1035, 198, 'B) Trabalho.', 1),
(1036, 198, 'C) Energia final.', 0),
(1037, 198, 'D) Energia convertida.', 0),
(1038, 199, 'A) Verdadeiro.', 1),
(1039, 199, 'B) Falso.', 0),
(1040, 200, 'A) São instalações industriais que geram eletricidade a partir da queima de combustíveis fósseis ou fissão nuclear.', 1),
(1041, 200, 'B) São usinas que geram eletricidade a partir da energia cinética da água em movimento.', 0),
(1042, 200, 'C) São usinas que geram eletricidade a partir da luz por meio de painéis fotovoltaicos ou sistemas térmicos.', 0),
(1043, 200, 'D) São usinas que geram eletricidade pelo calor que vem do interior da Terra.', 0),
(1044, 201, 'A) Motor a combustão interna.', 0),
(1045, 201, 'B) Usina termoelétrica.', 0),
(1046, 201, 'C) Máquina de pigmentos.', 1),
(1047, 201, 'D) Máquinas a vapor.', 0),
(1048, 202, 'A) Eles não se esgotam como os combustíveis não-renováveis.', 0),
(1049, 202, 'B) É considerada crucial para alcançar metas ambientais e promover a sustentabilidade a longo prazo.', 0),
(1050, 202, 'C) Sua queima produz menos emissões de gases de efeito estufa, ajudando a combater as mudanças climáticas.', 0),
(1051, 202, 'D) Todas as alternativas estão corretas.', 1),
(1152, 203, 'A) 6', 0),
(1153, 203, 'B) 7', 0),
(1154, 203, 'C) 8', 1),
(1155, 203, 'D) 9', 0),
(1156, 204, 'A) Via Láctea.', 1),
(1157, 204, 'B) Andrômeda.', 0),
(1158, 204, 'C) Galáxia do Triângulo.', 0),
(1159, 204, 'D) Galáxia de Bernard.', 0),
(1160, 205, 'A) Terra.', 0),
(1161, 205, 'B) Marte.', 0),
(1162, 205, 'C) Vênus.', 0),
(1163, 205, 'D) Mercúrio.', 1),
(1164, 206, 'A) Terra.', 0),
(1165, 206, 'B) Vênus', 1),
(1166, 206, 'C) Marte.', 0),
(1167, 206, 'D) Júpiter', 0),
(1168, 207, 'A) Urano.', 0),
(1169, 207, 'B) Saturno.', 0),
(1170, 207, 'C) Marte.', 0),
(1171, 207, 'B) Netuno.', 1),
(1172, 208, 'A) Júpiter.', 1),
(1173, 208, 'B) Netuno.', 0),
(1174, 208, 'C) Marte.', 0),
(1175, 208, 'D) Urano', 0),
(1176, 209, 'A) Terra, Marte, Saturno e Netuno.', 0),
(1177, 209, 'B) Mercúrio, Vênus, Terra e Marte.', 1),
(1178, 209, 'C) Júpiter, Saturno, Urano e Netuno.', 0),
(1179, 209, 'D) Vênus, Urano, Mercúrio e Júpiter.', 0),
(1180, 210, 'A) Mercúrio, Júpiter, Netuno e Saturno.', 0),
(1181, 210, 'B) Júpiter, Saturno, Urano e Marte.', 0),
(1182, 210, 'C) Vênus, Terra, Saturno e Netuno.', 0),
(1183, 210, 'D) Júpiter, Saturno, Urano e Netuno.', 1),
(1184, 211, 'A) Compostos principalmente por hélio e hidrogênio', 0),
(1185, 211, 'B) Feitos predominantemente de rochas, ferro e metais pesados', 1),
(1186, 211, 'C) Possuem atmosferas densas e extensas', 0),
(1187, 211, 'D) São os maiores planetas do sistema solar', 0),
(1188, 212, 'A) São compostos principalmente por rochas e metais pesados', 0),
(1189, 212, 'B) Têm atmosferas densas e compactas', 0),
(1190, 212, 'C) Possuem órbitas mais próximas ao Sol', 0),
(1191, 212, 'D) São formados principalmente por gases como hélio e hidrogênio', 1),
(1192, 213, 'A) Planetas mais densos estão naturalmente mais distantes do Sol', 0),
(1193, 213, 'B) A densidade dos planetas não está relacionada à sua posição em relação ao Sol', 0),
(1194, 213, 'C) Planetas menos densos tendem a estar mais próximos do Sol', 1),
(1195, 213, 'D) A densidade planetária é constante em todo o sistema solar', 0),
(1196, 214, 'A) Predominantemente hélio', 0),
(1197, 214, 'B) Principalmente metais pesados', 0),
(1198, 214, 'C) Composta por oxigênio e nitrogênio', 0),
(1199, 214, 'D) Formado principalmente por hidrogênio e hélio', 1),
(1200, 215, 'A) Cerca de 5.000°C', 0),
(1201, 215, 'B) Aproximadamente 1.000.000°C', 0),
(1202, 215, 'C) Atinge cerca de 15.000.000°C', 1),
(1203, 215, 'D) Varia conforme a estação do ano', 0),
(1204, 216, 'A) Cromosfera', 0),
(1205, 216, 'B) Coroa Solar', 0),
(1206, 216, 'C) Núcleo', 0),
(1207, 216, 'D) Fotosfera', 1),
(1208, 217, 'A) Em órbitas fixas ao redor dos planetas', 0),
(1209, 217, 'B) De forma aleatória no espaço', 1),
(1210, 217, 'C) Em trajetórias elípticas ao redor do Sol', 0),
(1211, 217, 'D) Seguindo padrões previsíveis de movimento', 0),
(1212, 218, 'A) A proximidade com outros corpos celestes', 0),
(1213, 218, 'B) Uma reação química proveniente do contato com a radiação solar', 1),
(1214, 218, 'C) A presença de atmosfera ao redor dos cometas', 0),
(1215, 218, 'D) A liberação de gases pelo núcleo cometário', 0),
(1216, 219, 'A) Torna-se um satélite', 0),
(1217, 219, 'B) É chamado de meteoro', 1),
(1218, 219, 'C) Transforma-se em um asteróide', 0),
(1219, 219, 'D) Ganha uma cauda luminosa', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_30_212356_create_admins_table', 1),
(6, '2023_07_30_212521_create_students_table', 1),
(7, '2023_07_30_212636_create_quizzes_table', 1),
(8, '2023_07_30_212829_create_questions_table', 1),
(9, '2023_07_30_212953_create_answers_table', 1),
(10, '2023_07_30_213101_create_quizzes_answered_table', 1),
(11, '2023_07_30_213310_create_questions_answered_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions`
--

CREATE TABLE `questions` (
  `id_question` bigint(20) UNSIGNED NOT NULL,
  `id_quiz` bigint(20) UNSIGNED NOT NULL,
  `text_question` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id_question`, `id_quiz`, `text_question`) VALUES
(41, 31, 'Quais são os estado em a que Amazônia ocupa?'),
(42, 31, 'Nos rios amazônicos estão ______ das espécies de peixes de toda a América do Sul. Complete a frase escolhendo a opção correta.'),
(43, 31, 'A vegetação da Amazônia está dividida em partes. Quais são elas?'),
(44, 31, 'Qual é a característica das Matas de terra seca?'),
(45, 31, 'Qual é a característica da Matas de igapó?'),
(46, 31, 'Qual é a característica das Matas de várzea?'),
(47, 31, 'Na Amazônia possui a maior bacia hidrográfica do mundo, a Bacia Amazônica, que detém ____ da água doce do planeta. Complete a frase, escolhendo a opção correta.'),
(48, 31, 'Quais são os principais rios do Bioma amazônico?'),
(49, 31, 'Quais são os tipos de rios existentes no Bioma Amazônia?'),
(50, 31, 'As planícies são constantemente inundadas pelos rios.'),
(51, 32, 'Observe e responda:   \r\nI. Goiás, Mato Grosso, Mato Grosso do Sul, Bahia.   \r\nII. Paraná, Rondônia, Piauí, Amapá, São Paulo.   \r\nIII. Rio de Janeiro, Sergipe, Tocantins, Goiás.   \r\nIV. Amazonas, Roraima, Maranhão, Roraima, Distrito Federal.   \r\nV. Santa Catarina, Paraná, Mata Grosso, Mato Grosso do Sul.'),
(52, 32, 'Qual é a porcentagem próxima do território brasileiro que o cerrado ocupa?'),
(53, 32, 'Qual é a sua classificação de tamanho entre os biomas brasileiros?'),
(54, 32, 'Observe e responda. Qual os tipos de estratos de plantas que existem no Cerrado? I. Estrato arbóreo e lenhoso. II. Estrato seco e arbóreo. III. Estrato lenhoso e seco.'),
(55, 32, 'Quais são os meses em que inicia e termina o período seco no Cerrado?'),
(56, 32, 'Quais são os meses em que inicia e termina o período chuvoso No Cerrado?'),
(57, 32, 'Por que a fauna do Cerrado é tão diversificada em comparação com outros biomas?'),
(58, 32, 'Qual dos seguintes animais NÃO é um exemplo da fauna do Cerrado?'),
(59, 32, 'Qual é o nome do tipo de solo que é ácido, possui coloração avermelhada e é pobre em nutrientes?'),
(60, 32, 'Por que os solos no Cerrado são suscetíveis a processos de lixiviação?'),
(61, 33, 'A campanha gaúcha ocupa uma região do Brasil. Qual é a região?'),
(62, 33, 'Quais são as estações do ano que predominam nesse bioma?'),
(63, 33, 'Quais são os principais rios que compõem a rede hidrográfica dos campos sulinos?'),
(64, 33, 'Quais são as duas bacias hidrográficas presentes na região do Pampa?'),
(65, 33, 'Quais são os domínios geomorfológicos do sul-rio-grandense mencionados no bioma?'),
(66, 33, 'O relevo predominante na região do Pampa é caracterizado por quais características?'),
(67, 33, 'Além da pecuária extensiva, qual outra atividade econômica se destaca na região do Pampa?'),
(68, 33, 'Quais são as principais produções agrícolas cultivadas na região?'),
(69, 33, 'Quais são algumas das plantas específicas que podem ser encontradas no Pampa?'),
(70, 33, 'Segue a afirmação: A vegetação é predominantemente campestre, formada por plantas lenhosas.'),
(71, 33, 'Segue a afirmação: A vegetação é predominantemente campestre, formada por plantas herbáceos.'),
(72, 33, 'O que significa o termo \"espécies endêmicas\"?'),
(73, 33, 'Quais são os exemplos de espécies de animais endêmicos mencionadas na região?'),
(74, 34, 'Qual é o estado em que a Caatinga está presente?'),
(75, 34, 'O bioma apresenta um clima _______________.'),
(76, 34, 'Quais são os três estratos que existem?'),
(77, 34, 'Qual é a faixa de altura para cada um deles? Arbóreo, arbustivo e herbáceo.'),
(78, 34, 'Que tipo de características de adaptação a vegetação apresenta para lidar com o longo período de seca?'),
(79, 34, 'Quais são alguns fatores que influenciam a variação no período de floração na Caatinga?'),
(80, 34, 'Além dos cactos, quais são outros exemplos de plantas notáveis na flora da Caatinga?'),
(81, 34, 'Qual é uma característica comum dos animais da fauna da Caatinga em relação à adaptação ao clima?'),
(82, 34, 'De acordo com o Sistema Brasileiro de Classificação dos Solos, como os solos da Caatinga são geralmente caracterizados em termos de profundidade e riqueza em matéria orgânica?'),
(83, 34, 'Quais dos seguintes produtos agrícolas são mencionados como sendo cultivados na Caatinga, adaptados às características do solo e clima?'),
(84, 34, 'O que significa dizer que a maioria dos rios na Caatinga é \"intermitente\" ou \"temporário\"?'),
(85, 34, 'Qual é o nome do rio mencionado que é perene?'),
(86, 35, 'Em que região do Brasil o Pantanal está localizado?'),
(87, 35, 'Qual porcentagem do território brasileiro o Pantanal ocupa e qual sua colocação nos biomas?'),
(88, 35, 'Em qual estado o Pantanal ocupa 25% do território?'),
(89, 35, 'Além do Brasil, em quais outros países se encontra o Pantanal?'),
(90, 35, 'Quantas espécies de plantas foram listadas pela Embrapa?'),
(91, 35, 'A flora do Pantanal tem altos potenciais econômicos. Selecione a que não faz parte desse potencial.'),
(92, 35, 'A vegetação do Pantanal é diversificada devido às suas ligações com qual outro bioma?'),
(93, 35, 'Quais tipos de árvores são comuns na vegetação do Pantanal devido à sua proximidade com a Floresta Amazônica?'),
(94, 35, 'Qual é a vegetação típica presente no Pantanal?'),
(95, 35, 'Qual dos seguintes animais é considerado o maior peixe da região do Pantanal?'),
(96, 35, 'Quando começa o inverno e quais são as suas características?'),
(97, 35, 'Por que o Pantanal recebe o nome de \"Pantanal\"?'),
(98, 35, 'Qual processo contribui para o baixo grau de fertilidade dos solos no Pantanal, devido à lavagem da camada superficial do solo?'),
(99, 35, 'Quais são os principais tipos de solos encontrados no Pantanal, de acordo com a Embrapa?'),
(100, 35, 'Toda água que cai no verão, forma áreas inundadas. Escolha a alternativa que não faz parte dessas áreas.'),
(116, 56, 'O que são fenômenos da natureza?'),
(117, 56, 'Quais são os principais fenômenos da natureza?'),
(118, 56, 'Como chamamos o fenômeno natural que formam colunas de ar em rotação que descem das nuvens até a superfície terrestre.'),
(119, 56, 'Qual o fenômeno onde pode ocorrer um deslizamento de neve?'),
(120, 56, 'Por quais motivos pode ocorrer tsunamis?'),
(121, 56, 'Como ocorre o terremoto?'),
(122, 56, 'Quais regiões chamamos de Tufão, Furacão e Ciclone?'),
(123, 56, 'Sobre o Avalanche: O que acontece com esse fenômeno?'),
(131, 58, 'O que é calor para a ciência?'),
(132, 58, 'Qual a diferença entre calor sensível e calor latente?'),
(133, 58, 'Quantos tipos de transmissão de calor existem? Quais são eles?'),
(134, 58, 'O que é convecção?'),
(135, 58, 'O que é condução?'),
(136, 58, 'O que é radiação?'),
(137, 58, 'O que torna algo uma fonte de calor?'),
(138, 58, 'O que é sensação térmica?'),
(139, 58, 'Como o vento influencia na percepção da sensação térmica?'),
(140, 59, 'Quantos estados brasileiros possuem território coberto pelo bioma?'),
(141, 59, 'Selecione a opção correta sobre a frase: O bioma ocupava 15% do território brasileiro, mas devido as ações humanas restam apenas ____.'),
(142, 59, 'Como é chamada a floresta que é intocada pelos seres humanos ou onde a ação humana não desequilibrou a relação dos seres vivos?'),
(143, 59, 'Escolha a características principal da Floresta Primária.'),
(144, 59, 'O que é uma floresta secundária?'),
(145, 59, 'Quais são os avanços de regeneração em uma floresta secundária?'),
(146, 59, 'Quanto tempo pode durar o estágio inicial de regeneração em uma floresta secundária?'),
(147, 59, 'Quanto tempo pode demorar para uma floresta secundária atingir o patamar da floresta primária após o estágio médio?'),
(148, 59, 'O que acontece com a biodiversidade no estágio avançado de regeneração?'),
(149, 59, 'O que compõe o dossel da floresta na Mata Atlântica?'),
(150, 59, 'Qual é o resultado da absorção de matéria orgânica pelo solo?'),
(151, 59, 'Qual é a principal característica da vegetação na Mata Atlântica em relação à estratificação?'),
(152, 59, 'Quantas das grandes bacias hidrográficas do Brasil estão localizadas no bioma?'),
(153, 59, 'Quais são alguns dos rios que alimentam as bacias hidrográficas na Mata Atlântica?'),
(154, 59, 'O que gera os microclimas ao longo da Mata Atlântica?'),
(155, 59, 'Qual é a característica das temperaturas na Mata Atlântica ao longo do ano?'),
(156, 60, 'O que foi a pangeia e como ela se formou?'),
(157, 60, 'O que são placas tectônicas?'),
(158, 60, 'A crosta terrestre possui placas tectônicas principais. Quantas são?'),
(159, 60, 'No texto, é citado alguns exemplos de placas menores. Escolha a opção incorreta.'),
(160, 60, 'Quantos tipos de placas existem?'),
(161, 60, 'Sobre o tipo de placas: Qual tipo de placa que podemos encontrar no assoalho oceânico quanto sob os continentes?'),
(162, 60, 'Por que as placas tectônicas se mexem?'),
(193, 63, 'O que são combustíveis?'),
(194, 63, 'O que são combustíveis renováveis?'),
(195, 63, 'Quais das opções NÃO apresentam exemplos de combustíveis renováveis:'),
(196, 63, 'O que são combustíveis não-renováveis?'),
(197, 63, 'Quais das opções NÂO apresentam exemplos de combustíveis não-renováveis:'),
(198, 63, 'Como é chamada a porção de energia que uma máquina térmica foi capaz de converter em energia mecânica?'),
(199, 63, 'Ao fim do processo, a substância de trabalho sempre volta ao seu estado inicial.'),
(200, 63, 'O que são usinas termoelétricas?'),
(201, 63, 'Quais das opções NÃO apresentam exemplos que máquinas térmicas?'),
(202, 63, 'Escolha a alternativa correta sobre os combustíveis renováveis.'),
(203, 64, 'Qual é o número total de planetas no sistema solar?'),
(204, 64, 'Em qual galáxia está localizado o sistema solar?'),
(205, 64, 'Qual é o planeta mais próximo do Sol no sistema solar?'),
(206, 64, 'Qual é o planeta que ocupa a terceira posição a partir do Sol no sistema solar?'),
(207, 64, 'Qual é o planeta mais distante do Sol no sistema solar? Resposta:'),
(208, 64, 'Qual é o planeta gigante gasoso que ocupa a quinta posição a partir do Sol?'),
(209, 64, 'Quais são os quatro planetas do sistema solar que são caracterizados como planetas telúricos ou rochosos?'),
(210, 64, 'Quais são os quatro planetas do sistema solar que são classificados como planetas jovianos ou gasosos?'),
(211, 64, 'Qual característica define os planetas telúricos?'),
(212, 64, 'O que diferencia os planetas jovianos dos telúricos?'),
(213, 64, 'Qual é a relação entre a densidade e a proximidade ao Sol?'),
(214, 64, 'Qual é a composição principal do Sol?'),
(215, 64, 'Qual a temperatura aproximada no núcleo do Sol?'),
(216, 64, 'O fenômeno conhecido como mancha solar é observado em qual parte visível do Sol?'),
(217, 64, 'Como ocorre a movimentação dos asteroides no espaço?'),
(218, 64, 'O que causa a luminosidade da cauda dos cometas?'),
(219, 64, 'O que acontece quando um meteoroide entra na atmosfera da Terra?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions_answered`
--

CREATE TABLE `questions_answered` (
  `id_question_answered` bigint(20) UNSIGNED NOT NULL,
  `id_quiz_answered` bigint(20) UNSIGNED NOT NULL,
  `id_answer` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `questions_answered`
--

INSERT INTO `questions_answered` (`id_question_answered`, `id_quiz_answered`, `id_answer`) VALUES
(68, 19, 140),
(69, 19, 142),
(70, 19, 148),
(71, 19, 149),
(72, 19, 154),
(73, 19, 156),
(74, 19, 161),
(75, 19, 163),
(76, 19, 167),
(77, 19, 170);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quizzes`
--

CREATE TABLE `quizzes` (
  `id_quiz` bigint(20) UNSIGNED NOT NULL,
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_quiz` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `quizzes`
--

INSERT INTO `quizzes` (`id_quiz`, `id_admin`, `title`, `description`, `img_quiz`, `created_at`, `updated_at`) VALUES
(31, 2, 'Bioma Amazônia', 'Aprenda sobre a incrível Amazônia!', 'img/img_quiz/31.png', '2023-09-01 19:52:53', '2023-09-12 23:28:10'),
(32, 2, 'Bioma Cerrado', 'Aprenda mais sobre o bioma.', 'img/img_quiz/32.png', '2023-09-01 20:08:50', '2023-09-12 23:31:44'),
(33, 2, 'Bioma Pampa', 'Descubra mais sobre o bioma.', 'img/img_quiz/33.png', '2023-09-01 20:24:10', '2023-09-20 06:11:29'),
(34, 2, 'Bioma Caatinga', 'Aprenda mais sobre a Caatinga.', 'img/img_quiz/34.png', '2023-09-01 22:46:46', '2023-09-20 06:28:52'),
(35, 2, 'Bioma Pantanal', 'Conheça mais sobre a vegetação e animais do Pantanal.', 'img/img_quiz/35.png', '2023-09-01 23:05:01', '2023-09-01 23:05:01'),
(56, 2, 'Fenômenos da Natureza', 'Conheça mais sobre os fenômenos da natureza', 'img/img_quiz/56.png', '2023-09-12 23:08:33', '2023-09-12 23:08:33'),
(58, 2, 'Calor e Sensação Térmica', 'Venha aprender mais sobre os temas!', 'img/img_quiz/58.png', '2023-09-19 22:21:11', '2023-09-19 22:21:11'),
(59, 2, 'Mata Atlântica', 'Vamos conhecer mais sobre esse grande bioma.', 'img/img_quiz/59.png', '2023-09-20 04:02:57', '2023-09-20 04:02:57'),
(60, 2, 'Placas Tectônicas', 'Aprenda sobre essas imensas placas.', 'img/img_quiz/60.png', '2023-09-20 04:32:46', '2023-09-20 04:44:39'),
(63, 2, 'Máquinas Térmicas e Combustíveis.', 'Veja mais ....', 'img/img_quiz/63.png', '2023-09-20 20:02:07', '2023-09-20 20:13:17'),
(64, 2, 'Sistema Solar', 'Responda o quiz e teste seu conhecimento sobre os planetas.', 'img/img_quiz/64.png', '2023-10-06 15:48:34', '2023-10-06 15:48:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quizzes_answered`
--

CREATE TABLE `quizzes_answered` (
  `id_quiz_answered` bigint(20) UNSIGNED NOT NULL,
  `id_quiz` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `quizzes_answered`
--

INSERT INTO `quizzes_answered` (`id_quiz_answered`, `id_quiz`, `id_user`, `created_at`, `updated_at`) VALUES
(19, 31, 2, '2023-09-12 23:39:15', '2023-09-12 23:39:15');

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE `students` (
  `id_student` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`id_student`, `id_user`) VALUES
(1, 4),
(9, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Science AR', 'sciencear@gmail.com', NULL, '$2y$10$fXvdknMCgkBkXQC84nfH..4jnVpA6QCZBzOJ2Tbr5mNgumTTIb9Ha', NULL, 'img/img_account/1.gif', '2023-08-11 19:31:17', '2023-08-11 19:31:17'),
(2, 'João Enrique', 'joao@gmail.com', NULL, '$2y$10$aAleo0WVklisXq4DKGR0Eus6WJcl6HHOzPy1RrsAP.14/C6mBq90.', NULL, 'img/img_account/2.png', '2023-08-11 19:31:17', '2023-08-31 16:48:51'),
(4, 'Sarah', 'sarah@gmail.com', NULL, '$2y$10$OmC.sy/AGrMxNzSnnKt/neIaYDil49MCxyY2sS/vlrePXdhvB4LzK', NULL, 'img/img_account/img_account.png', '2023-08-11 19:31:17', '2023-08-11 19:31:17'),
(20, 'Tânia Carol', 'tania.fernandez@gmail', NULL, '$2y$10$lLzgwvEPo5JXOG5JuD/TS.HJkoajbj48rufo7QCJhmcvCuzxNpil.', 'DnMbnoKwbQZneGFxt3alAH792KCf76r9GO81ez3sKutMFLWuJAXPYk7XVKSV', 'img/img_account/img_account.png', '2023-09-06 03:18:32', '2023-09-06 03:18:32'),
(21, 'julia', 'julia@gmail.com', NULL, '$2y$10$tUkuZTr3.Hu6pSE5SG1zfuAYASelN7KSBF3IkxIcWTC2GLXrSm9Jy', NULL, 'img/img_account/img_account.png', '2023-10-06 20:52:27', '2023-10-06 20:52:27');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `admins_id_user_foreign` (`id_user`);

--
-- Índices para tabela `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`),
  ADD KEY `answers_id_question_foreign` (`id_question`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`),
  ADD KEY `questions_id_quiz_foreign` (`id_quiz`);

--
-- Índices para tabela `questions_answered`
--
ALTER TABLE `questions_answered`
  ADD PRIMARY KEY (`id_question_answered`),
  ADD KEY `questions_answered_id_quiz_answered_foreign` (`id_quiz_answered`),
  ADD KEY `questions_answered_id_answer_foreign` (`id_answer`);

--
-- Índices para tabela `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id_quiz`),
  ADD KEY `quizzes_id_admin_foreign` (`id_admin`);

--
-- Índices para tabela `quizzes_answered`
--
ALTER TABLE `quizzes_answered`
  ADD PRIMARY KEY (`id_quiz_answered`),
  ADD UNIQUE KEY `quizzes_answered_id_user_id_quiz_unique` (`id_user`,`id_quiz`),
  ADD KEY `quizzes_answered_id_quiz_foreign` (`id_quiz`);

--
-- Índices para tabela `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `students_id_user_foreign` (`id_user`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1220;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;

--
-- AUTO_INCREMENT de tabela `questions_answered`
--
ALTER TABLE `questions_answered`
  MODIFY `id_question_answered` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT de tabela `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id_quiz` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `quizzes_answered`
--
ALTER TABLE `quizzes_answered`
  MODIFY `id_quiz_answered` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `students`
--
ALTER TABLE `students`
  MODIFY `id_student` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_id_question_foreign` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`);

--
-- Limitadores para a tabela `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_id_quiz_foreign` FOREIGN KEY (`id_quiz`) REFERENCES `quizzes` (`id_quiz`);

--
-- Limitadores para a tabela `questions_answered`
--
ALTER TABLE `questions_answered`
  ADD CONSTRAINT `questions_answered_id_answer_foreign` FOREIGN KEY (`id_answer`) REFERENCES `answers` (`id_answer`),
  ADD CONSTRAINT `questions_answered_id_quiz_answered_foreign` FOREIGN KEY (`id_quiz_answered`) REFERENCES `quizzes_answered` (`id_quiz_answered`);

--
-- Limitadores para a tabela `quizzes`
--
ALTER TABLE `quizzes`
  ADD CONSTRAINT `quizzes_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`);

--
-- Limitadores para a tabela `quizzes_answered`
--
ALTER TABLE `quizzes_answered`
  ADD CONSTRAINT `quizzes_answered_id_quiz_foreign` FOREIGN KEY (`id_quiz`) REFERENCES `quizzes` (`id_quiz`),
  ADD CONSTRAINT `quizzes_answered_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Limitadores para a tabela `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
