--
-- Extraindo dados da tabela `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Business'),
(2, 'Technology'),
(3, 'Retail'),
(4, 'Construction');


--
-- Extraindo dados da tabela `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `company`, `job_title`, `description`, `salary`, `location`, `contact_user`, `contact_email`, `post_date`) VALUES
(1, 1, 'JP Mortage', 'Senior Investor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at elementum enim. In ullamcorper molestie convallis. Praesent luctus rutrum odio eget interdum. Nam interdum dictum nulla,', '90k', 'Boston', 'Brad Traversy', 'brad@gmail.com', '2016-10-12 19:38:51'),
(3, 2, 'Agiw Sistemas', 'Desenvolvedor Fullstack', 'queremos um desenvolvedor tudo em um.\r\n\r\nRequisitos:\r\n-Web Standard;\r\n-Banco de dados SQL Server;\r\n-Linguagem de ProgramaÃ§Ã£o (Java, PHP, Angular X, Node);\r\n-Rotinas Ãgeis;\r\n-Saiba fazer cafÃ©', '4.000,00', 'Sorocaba, SP', 'FabrÃ­cio Henrique', 'contato@agiw.com.br', '2017-09-14 21:04:58'),
(4, 1, 'Agiw Sistemas', 'Analista de ImplantaÃ§Ã£o de Sistemas', '                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat viverra luctus. Nulla ac orci non nisi viverra placerat. Ut at egestas metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id ligula faucibus, aliqua', '3.500,00', 'Sorocaba, SP', 'feijoada', 'contato@agiw.com.br', '2017-09-14 21:24:25');