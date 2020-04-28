<!DOCTYPE html>
<html lang="pt-br" itemscope itemtype="https://schema.org/WebSite">
    <head>
        <!--o title é o nome que aparece quando passo mouse na aba do navegador-->
        <title>Consultório de Fisioterapia - Thiago José</title>
        <!--Aqui o modelo de de caracteres indicados para o uso do c cedilha e acentualão em portugues-->
        <meta charset="UTF-8">
        <!--Aqui a adaptação do site para uso de celular-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">



        <meta name="description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside Treinamentos.">
        <meta name="robots" content="index, follow">

        <link rel="canonical" href="https://www.upinside.com.br/projects/html5_css3/">

        <meta itemprop="name" content="Projeto Prático HTML5 e CSS3 Essentials">
        <meta itemprop="description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside Treinamentos.">
        <meta itemprop="image" content="https://www.upinside.com.br/projects/html5_css3/_img/post.jpg">
        <meta itemprop="url" content="https://www.upinside.com.br/projects/html5_css3/">

        <meta property="og:url" content="https://www.upinside.com.br/projects/html5_css3/" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Projeto Prático HTML5 e CSS3 Essentials" />
        <meta property="og:description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside Treinamentos." />
        <meta property="og:image" content="https://www.upinside.com.br/projects/html5_css3/_img/post.jpg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="fb:app_id" content="1981931985380360" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="article:author" content="https://www.facebook.com/guhweb" />
        <meta property="article:publisher" content="https://www.facebook.com/upinside" />

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:domain" content="https://www.upinside.com.br">
        <meta name="twitter:creator" content="@guuweb">
        <meta name="twitter:title" content="Projeto Prático HTML5 e CSS3 Essentials">
        <meta name="twitter:description" content="Projeto Prático do curso HTML5 e CSS3 Essentials criado pela UpInside Treinamentos.">
        <meta name="twitter:image" content="https://www.upinside.com.br/projects/html5_css3/_img/post.jpg">
        <meta name="twitter:url" content="https://www.upinside.com.br/projects/html5_css3/">

        <!--TODOS LINKS ABAIXO SÃO EXPLICADOS NA AULA 05.02-->
        <!--Aqui o link do meu fonticon, cliquei nele que estava dentro da pasta _cdn e arastei para dentro do head-->
        <link href="_cdn/fonticon.css" rel="stylesheet" type="text/css"/>
        <!--Aqui é a fonte do meu site, coloco a informação aqui no index e um outra informação relacionada à fonte no meu boot-->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
        <!--Aqui o link do meu boot, cliquei nele que estava dentro da pasta _cdn e arastei para dentro do head-->
        <link href="_cdn/boot.css" rel="stylesheet" type="text/css"/>
        <!--Aqui o link do meu style, cliquei nele que estava dentro da pasta _cdn e arastei para dentro do head-->
        <link href="_cdn/style.css" rel="stylesheet" type="text/css"/>

        <!--Aqui o link dos icones q tenho no site-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    </head>

    <!--A teg body é o corpo do meu documento, aqui fica tudo q pode ser visto no site pelo usuário.-->
    <body>
        <!--MENU DO SITE-->
        <!--1ºMARCAÇÃO =  A tag header é o cabeçalho -->
        <!--Aqui vou fazer a dobra de menu do menu site sera uma div com 100% de largura e o conteúdo onde vou distribuir os elementos-->
        <!--AULA 05.03-->
        <!--2º ESTILIZAÇÃO = 
        Passo um class e um seletor que será o .main_header, 
        esse é meu cabeçalho principal eu trabalho com ele no style onde escolho a cor e a largura--> 
        <header class="main_header">

            <!--2º ESTILIZAÇÃO = Aqui vou passar uma div para estilizar o content que fica a logo e o menu, 
            essa div é para esilizar o conteúdo do menu-->
            <!-- passo o mone de main_header_content eu trabalho com ele no style onde escolho a largura máxima, margem e  -->
            <div class="main_header_content">

                <!--LOGOTIPO-->

                <!--1º MARCAÇÃO Aqui escolho a tag a para um link de navegação e o href que indica onde o local q vai ao clicar na imagem-->
                <!--2º ESTILIZAÇÃO = Aqui vou passar um class para logo e vou estilizar so a logo-->
                <!-- passo o class e o mone logo-->
                <a href="#" class="logo">
                    <!--1º MARCAÇÃO Aqui escolho a tag img para colocar uma imagem e para indicar o caminho
                     que está  minha logo a tag src, passo o escrito que surge ao passar o mouse sobre ela com alt e em title -->
                    <img src="_img/Logositeconsultorio.png" alt="Bem vindo ao site do Consultório de Fisioterapia - Thiago José" title="Bem vindo ao site do Consultório de Fisioterapia - Thiago José">
                </a>

                <!--MENU-->
                <!--1º MARCAÇÃO = aqui escolho a tag de navegação do menu a tag nav-->
                <!--2º ESTILIZAÇÃO = Aqui vou passar um class e um main_header_content_menu e vou estilizar so o menu-->
                <!-- passo o class e o mone main_header_content_menu-->
                <nav class="main_header_content_menu">
                    <!--1º MARCAÇÃO = aqui escolho a tag de lista não ordenada do meu menu a tag ul-->
                    <ul>
                        <!--1º MARCAÇÃO = aqui escolho a mrcação de cada menu e sua navegação-->
                        <li><a href="inicio" title="Consultório de Fisioterapia" class="radius">INÍCIO</a></li>
                        <li><a href="sobre" title="Sobre o Thiago José - Fisioterapeuta método busquet Manipulação fascial stecco" class="radius">SOBRE</a></li>
                        <li><a href="servicos" title="O serviço de Fisioterapia do Thiago José" class="radius">SERVIÇO</a></li>
                        <li><a href="http://www.ergogerais.com/blog" title="Blog do Thiago José - Fisioterapeuta" target="_blank" class="radius">BLOG</a></li>
                        <li><a href="http://www.ergogerais.com/atendimento-domiciliar" title="atendimento-domiciliar" target="_blank" class="radius">DOMICILIAR</a></li>
                        <li><a href="agendar" title="Agendar horário" class="btn-grey radius">AGENDAR HORÁRIO</a></li>
                        <li><a href="e-mail" title="Enviar e-mail para o consultório de fisioterapia" class="radius">E-MAIL</a></li>
                    </ul>
                </nav>


                <nav class="main_header_content_menu_mobile">
                    <ul>
                        <li><span class="main_header_content_menu_mobile_obj icon-menu icon-notext"></span>
                            <ul class="main_header_content_menu_mobile_sub ds_none">
                                <li><a href="#">Início</a></li>
                                <li><a href="#">Quem somos</a></li>
                                <li><a href="#">Nossos serviços</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>



        <main>         

            <!--Aqui vou colocar uma div com o nome de cta, call to action, essa será a 1º dobra do site-->
            <!--dentro da do main_cta é que tem meu fundo, e está definido no style-->
            <div class="main_cta">
                <!--1º MARCAÇÃO = do article--> 
                <!--Aqui vou ter um article com o conteúdo da minha primeira dobre-->
                <!--2º ESTILIZAÇÃO = aqui estilizo o artigo-->
                <!--vou passar uma class com mais_cta_content-->

                <article class="main_cta_content">
                    <!--Aqui para colocar espaço entre os textos da minha primeira dobra-->
                    <div class="main_cta_content_spacer">              
                        <header>
                            <h1>No consultório, trabalho com técnicas de terapia manual, 
                                com intuito de proporcionar um tratamento global e eficaz.</h1>
                            <p> Conheça mais sobre o trabalho</p>
                            <p><a href="#" class="btn">Saiba mais</a></p>
                        </header>
                    </div>     
                </article>
            </div>

            <article class="container bg-cristal">
                <div class="content">
                    <header class="sectiontitle">
                        <h4>No consultório trabalho com diversos tipos de disfunções, para o tratamento, identifico a causa do problema
                             afim de gerar uma melhora para o problema que trouxe o paciente. Os atendimentos são individualizados
                            por um período de 60 a 90 minutos</h4>
                    </header>
                    <article class="box box-medium1 radius al-center">
                        <i class="fas fa-graduation-cap"></i>                 
                        <h2>FORMAÇÃO</h2>
                        <p class="tagline3">Thiago formou-se em Fisioterapia no ano de 2007. Especializou e estuda técnicas de terapia manual, as quais utiliza nos tratamentos em consultório.<br>
                            Tecnicas e conceitos como o <p>
                            <a href="https://www.metodobusquet.com/guia/profissional.php?x=10" title="página do Metodo Busquet" target="_blank"><i>Método Busquet</i></a>, a 
                            <a href="https://www.fascialmanipulation.com/" title="página da Manipulação fascial Stecco" target="_blank"><i>Manifulação Fascial Stecco</i></a> e o 
                            <a href="https://www.abfascias.com.br/" title="página da Academina Brasileira de Fáscias" target="_blank"><i>Academia Brasileira de Fáscias</i><p>.
                                    São utilizados no atendimento.</p>
                    </article>
                    <article class="box box-medium1 radius al-center">
                        <i class="fas fa-id-card-alt"></i>                     
                        <h2>ATENDIMENTO</h2>
                        <p class="tagline3">O atendimento no consultório é feito com horário agendado. Na primeira consulta realiza-se uma avaliação detalhada com objetivo de encontrar a causa da disfunção do paciente e suas compensações.<br>
                            Após a avaliação, inicia-se o tratamento. O tempo de cada atendimento varia de 50 min a 1h e 30 min.</p>
                    </article>
                    <article class="box box-medium1 radius last al-center">
                        <i class="fas fa-calendar-check"></i>
                        <h2>AGENDAMENTO</h2>
                        <p class="tagline3">Para agendar horário você pode telefone ou enviar mensagem pelo whatsapp através do número (031) 99117-8704 se desejar pode agendar aqui mesmo pelo site. Click <a class="j_agendar" href="agendar" title="Agendar horário">AQUI</a> para agendar o seu horário e conheça melhor o nosso trabalho! Em carater emergêncial, atendemos em fim de semana e feriado (consulte condições).</p>
                    </article>
                    <div class="clear"></div>
                </div>
            </article>

            <!--Aqui será a segunda dobra do site, irá conter a uma foto do autor e uma brave descrição-->

            <div class="main_autor al-center">

                <header class="sectiontitle">
                    <h1>Olá, seja bem vindo!</h1>
                </header>
                <article class="main_autor_content">
                    <article class="box box-foto al-center">        
                        <img itemprop="image" class="round fl-left boxshadow" src="_img/_thiago-4-2019.png" alt="[Thiago José, Fisioterapeuta]" title="Thiago José"/>
                        <h1>Thiago José</h1>
                        <p class="tagline">FISIOTERAPEUTA CREFITO 4 Nº104361F/RE004472</p>
                    </article>

                    <article class="box box-apresentacao last">       
                        <div class="articletitle">
                            <h1>Conheça <span itemprop="name">Thiago José</span> Fisioterapeuta responsável pelo Consultório</h1>
                            <p class="tagline">Apaixonado com o funcionamento do corpo humano. É formado em Fisioterapia e trabalha com técnicas de terapia manual, desde 2007!</p>
                            <p class="tagline">Em 2011 montou o <span itemprop="affiliation">Consultório de Fisioterapia</span>, e como <span itemprop="jobTitle">Fisioterapeuta</span> vem desenvolvendo seu trabalho com o objetivo de proporcionar o melhor tratamento para seus clientes e oferecer o que existe de melhor na área.</p>
                            <p class="tagline"><span itemprop="description">Eterno aluno, dedica parte do seu tempo para se aprimorar na arte de tratar as pessoas com queixa de dores.</span></p>
                            <p class="tagline">Também tem um blog com diversas informações sobre tratamentos e dúvidas respondidas. Caso tenha interesse em visitá-lo é só clicar nesse link: <a href="http://www.ergogerais.com/blog" title="Blog do Thiago José - Fisioterapeuta" target="_blank">meu Blog</a>.</p>
                            <p class="tagline">Se você quiser conhecer um pouco mais sobre a minha história como Fisioterapeuta é só clicar nesse link.<a href="http://www.ergogerais.com/blog" title="Blog do Thiago José - Fisioterapeuta" target="_blank"> Quero saber mais sobre o Thiago</a></p>
                            <p class="tagline">Nessa página, você vai conhecer sobre o meu trabalho como fisioterapeuta e o local em que atendo.</p>
                        </div>
                    </article>

                    <!--                    <ul class="main_bus_person">
                                            <li><a itemprop="url" class="boxshadow" target="_blank" href="https://www.facebook.com/ThiagoJoseFisioterapia/" title="Thiago José No Facebook!">No Facebook</a></li>
                                            <li><a itemprop="url" class="boxshadow g" target="_blank" href="https://plus.google.com/b/108998675953129955759/108998675953129955759" title="Thiago José No Google+!">No Google+</a></li>
                                            <li><a itemprop="url" class="boxshadow m" href="mailto:Thiago José <thiagomundo@hotmail.com>" title="Enviar E-mail ParaThiago José">Por E-mail</a></li>
                                        </ul>-->
                </article>  
                <div class="box-line"></div>
                <div class="clear"></div>
                </article>
            </div>




            <section class="main_service">
                <article>
                    <a href="#">
                        <img src="_img/post.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <h1>Gestão ergonômica</h1>
                    <p>A gestão ergonômica é a implantção da ergonomia e acompanhamento do seu desenvolvimento dentra da empresa</p>

                    <h2><a href="#" class="title">A gestão esgonômica é </a></h2>
                </article>
                <article>
                    <a href="#">
                        <img src="_img/post.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <h1>Assistência Juridica</h1>
                    <p>A Análise de nexo causal </p>

                    <h2><a href="#" class="title">Nosa assistênci tcnica é</a></h2>
                </article>
                <article>
                    <a href="#">
                        <img src="_img/post.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                    </a>
                    <h1>Treinamentos e palestras</h1>
                    <p></p>

                    <h2><a href="#" class="title">Desenvolvemos diversos treinamento e palestras</a></h2>
                </article>
                <!--                <article>
                                    <a href="#">
                                        <img src="_img/post.jpg" alt="Lorem Ipsum is simply" title="Lorem Ipsum is simply">
                                    </a>
                                    <h1>Gestão ergonômica</h1>
                                    <p>A gestão ergonômica é a implantção da ergonomia e acompanhamento do seu desenvolvimento dentra da empresa</p>
                
                                    <h2><a href="#" class="title">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></h2>
                                </article>-->
            </section>

            <article class="main_optin">
                <div class="main_optin_content">
                    <header>
                        <h1>Quer receber todas as novidades em seu e-mail?</h1>
                        <p>Informe seu nome e e-mail no campo ao lado e clique em Ok!</p>
                    </header>

                    <form>
                        <input type="text" placeholder="Seu nome">
                        <input type="email" placeholder="Seu e-mail">
                        <button type="submit">Ok!</button>
                    </form>
                </div>
            </article>

            <section class="main_course">
                <header class="main_course_header">
                    <img src="_img/LOGO-EG200.png" alt="Ergogerais - Ergonomia e Fisioterapia do Trabalho" title="Ergogerais - Ergonomia e Fisioterapia do Trabalho">
                    <h1 class="icon-office">Gestão Ergonômica</h1>
                </header>

                <article class="main_service">
                    <p>A gestão ergonômica é um modelo que visa atender a empresa em sua plenitude, o resultado esperado
                        é resolver e orientar a empresa a respeito da demanda apontada. A ergonômia no modelo de gestão 
                        proporciona um serviço eficaz, pois o ergonomista se dedica ao longo de um período para realizar 
                        as ações dentro da empresa, a presença desse profissional paraticipando da dinâmica da empresa 
                        proporciona um serviço de alta qualidade e baixo custo para empresa contratante. </p>
                </article>
            </section>
            <section class="main_course">
                <header class="main_course_header">
                    <img src="_img/LOGO-EG200.png" alt="Ergogerais - Ergonomia e Fisioterapia do Trabalho" title="Ergogerais - Ergonomia e Fisioterapia do Trabalho">
                    <h1 class="icon-pencil2">Assistência jurídica</h1>
                </header>

                <article class="main_service">
                    <p>A gestão ergonômica é um modelo que visa atender a empresa em sua plenitude, o resultado esperado
                        é resolver e orientar a empresa a respeito da demanda apontada. A ergonômia no modelo de gestão 
                        proporciona um serviço eficaz, pois o ergonomista se dedica ao longo de um período para realizar 
                        as ações dentro da empresa, a presença desse profissional paraticipando da dinâmica da empresa 
                        proporciona um serviço de alta qualidade e baixo custo para empresa contratante. </p>
                </article>
            </section>
            <section class="main_course">
                <header class="main_course_header">
                    <img src="_img/LOGO-EG200.png" alt="Ergogerais - Ergonomia e Fisioterapia do Trabalho" title="Ergogerais - Ergonomia e Fisioterapia do Trabalho">
                    <h1 class="icon-shift">Palestras e Treinamentos</h1>
                </header>

                <article class="main_service">
                    <p>A gestão ergonômica é um modelo que visa atender a empresa em sua plenitude, o resultado esperado
                        é resolver e orientar a empresa a respeito da demanda apontada. A ergonômia no modelo de gestão 
                        proporciona um serviço eficaz, pois o ergonomista se dedica ao longo de um período para realizar 
                        as ações dentro da empresa, a presença desse profissional paraticipando da dinâmica da empresa 
                        proporciona um serviço de alta qualidade e baixo custo para empresa contratante. </p>
                </article>
            </section>




            <div class="main_school">
                <section class="main_school_content">
                    <header class="main_school_header">
                        <h1>Bem vindo a ERGOGERAIS Ergonomia e Fisioeterapia do trabalho</h1>
                        <p>A sua empresa de ergonomia e saúde do trabalhador que oferece soluções para você/p>
                    </header>

                    <div class="main_school_content_left">
                        <article class="main_school_content_left_content">
                            <header>
                                <p><span class="icon-facebook"><a href="#">Facebook</a></span> <span class="icon-google-plus2"><a href="#">Google+</a></span> <span class="icon-twitter"><a href="#">Twitter</a></span></p>
                                <h2>Tudo o que você precisa para ser um WebMaster Full Stack em um só lugar</h2>
                            </header>

                            <p>Desde 2010 a UpInside vem criando os melhores cursos do mercado, entregamos ao aluno conhecimento prático e testado sem enrolação. Você tem acesso a aulas com a melhor qualidade, recursos que aceleram seu aprendizado e muito mais...</p>

                            <p>Que tal estudar, e ter o certificado da escola eleita a melhor do Brasil com reconhecimento em mais de 17 países pela Latin American Quality Institute?</p>
                        </article>

                        <section class="main_school_list">
                            <header>
                                <h2>Confira nossos Prêmios</h2>
                            </header>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Qualidade e Excelência - Master Pesquisas</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Qualidade e Atendimento - Master Pesquisas</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Prêmio Diamante - Master Pesquisas</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Estrela do Sul - Master Pesquisas</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Medalha de Ouro a Excelência - LAQI</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Brazil Quality Certification - LAQI</h3>
                                </header>
                            </article>

                            <article>
                                <header>
                                    <h3 class="icon-trophy">Melhor Plataforma EAD - Digital Awards</h3>
                                </header>
                            </article>
                        </section>
                    </div>

                    <div class="main_school_content_right">
                        <img src="_img/upinside.jpg" alt="UpInside Treinamentos" title="UpInside Treinamentos">
                    </div>

                    <article class="main_school_address">
                        <header>
                            <h2 class="icon-map2">Nos Encontre</h2>
                        </header>

                        <p>Rua Huberto Rohden, 100 - Campeche - Florianópolis/SC - +55 48 3371-5879</p>
                    </article>
                </section>
            </div>

            <section class="main_tutor">
                <div class="main_tutor_content">
                    <header>
                        <h1>Conheça o Gustavo Web, seu tutor nesse Curso</h1>
                        <p>Eu vou te ajudar a criar sua webpage em HTML5 e CSS3</p>
                    </header>

                    <div class="main_tutor_content_img">
                        <img src="_img/gustavoweb.jpg" alt="Imagem do Gustavo Web" title="Imagem do Gustavo Web">
                    </div>

                    <article class="main_tutor_content_history">
                        <header>
                            <h2>Formado em Ciência da Computação e Apaixonado por Web</h2>
                        </header>

                        <p>Como muitos, comecei na programação por conta dos jogos! Com o tempo, o amor pela programação foi crescendo a ponto de tomar como profissão e me especializar na área. Hoje, com a bagagem que tenho, compartilho meu conhecimento com todos os alunos da UpInside Treinamentos</p>
                    </article>

                    <section class="main_tutor_social_network">
                        <header>
                            <h2>Me siga nas redes sociais</h2>
                        </header>

                        <article>
                            <header>
                                <h3><a href="#" class="icon-facebook">Meu Facebook</a></h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3><a href="#" class="icon-facebook2">Minha FanPage</a></h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3><a href="#" class="icon-google-plus2">Meu Google+</a></h3>
                            </header>
                        </article>

                        <article>
                            <header>
                                <h3><a href="#" class="icon-instagram">Meu Instagram</a></h3>
                            </header>
                        </article>
                    </section>
                </div>
            </section>

        </main>

        <section class="main_optin_footer">
            <div class="main_optin_footer_content">
                <header>
                    <h1>Quer receber nosso conteúdo exclusivo? Assina nossa lista VIP :)</h1>
                </header>

                <article>
                    <header>
                        <h2><a href="#" class="btn">Entrar para a Lista VIP</a></h2>
                    </header>
                </article>
            </div>
        </section>

        <section class="main_footer">
            <header>
                <h1>Quer saber mais?</h1>
            </header>

            <article class="main_footer_our_pages">
                <header>
                    <h2>Nossas Páginas</h2>
                </header>

                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">A Escola</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </article>

            <article class="main_footer_links">
                <header>
                    <h2>Links Úteis</h2>
                </header>

                <ul>
                    <li><a href="#">Política de Privacidade</a></li>
                    <li><a href="#">Aviso Legal</a></li>
                    <li><a href="#">Termos de Uso</a></li>
                </ul>
            </article>

            <article class="main_footer_about">
                <header>
                    <h2>Sobre o Projeto</h2>
                </header>

                <p>Aprenda a trabalhar com HTML5 e CSS3 para desenvolver seus projetos e entregar páginas que estejam dentro dos padrões da WEB seguindo as boas práticas!</p>
            </article>
        </section>

        <footer class="main_footer_rights">
            <p>Todos os Direitos Reservados a UpInside Treinamentos ®</p>
        </footer>

        <script src="_cdn/jquery-3.3.1.min.js" type="text/javascript"></script>
        <script src="_cdn/main.js" type="text/javascript"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-28001194-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-28001194-13');
        </script>

        <!-- Global site tag (gtag.js) - AdWords: 1008830755 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=AW-1008830755"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'AW-1008830755');
        </script>

        <!-- Facebook Pixel Code -->
        <script>
            !function (f, b, e, v, n, t, s)
            {
                if (f.fbq)
                    return;
                n = f.fbq = function () {
                    n.callMethod ?
                            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq)
                    f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                    'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1450700175034406');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1450700175034406&ev=PageView&noscript=1"
                       /></noscript>
        <!-- End Facebook Pixel Code -->


    </body>
