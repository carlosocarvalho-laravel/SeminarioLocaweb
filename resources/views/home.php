<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Automação Residencial com PHP</title>

		<meta name="description" content="Automação Residencial com PHP">
		<meta name="author" content="Diego Pires">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="<?php echo $websocketsAddress; ?>" data-mode="<?php echo $mode; ?>">

		<div class="reveal">
            <div class="users-counter"></div>

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

               <!--  <section>
                    <h2>http://<?php echo $host; ?></h2>
                    <h1>Palestra interativa!</h1>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <h4>Instruções para Palestrantes!</h4>
                </section>

				<section class="sound-comecar">
					<h1>Bem vindo ao guia de Palestrantes para o Seminário Locaweb PHPSP</h1>
				</section>
				<section>
					<h2>Instruções Iniciais!</h2>
                    <p>Estamos usando Reveal.js para criar os slides, você pode acessar a documentação oficial do projeto <a href="https://github.com/hakimel/reveal.js">aqui</a></p>
                    <p>Mas é muito simples criar seus slides, basta usar marcação HTML simples. Nos deixamos algumas coisas prontas para você também.</p>
                    <p>O arquivo de slides está armazenadoe em "resources/views/home.php" dentro desse projeto, é nesse arquivo que você deve incluir os seus slides</p>
				</section>

				<section>
					<h2>Código</h2>
                    <p>para inserir trechos de código no slide basta seguir a seguinte formação:</p>
					<pre>
                        <code class="HTML" data-trim>
&lt;pre&gt;
    &lt;code class="php" data-trim&gt;
    &lt;/code&gt;
&lt;/pre&gt;
                        </code>
                    </pre>
				</section>

				<section class="poll" data-number="1">
                    <p>Enquetes</p>
                    <p>Adicione na tag section um atributo data-number com um valor único para criar enquetes</p>
                    <p>Tambem adicione a classe pool na section</p>
                    <p>Use esse slide como exemplo</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Som</p>
                    <p>Para adcionar sons, você deve alterar o arquivo "public/js/modules/sound.js" e incluir uma classe sound-* na section</p>
                    <p>Use esse slide como exemplo</p>
                </section>

                <section class="sound-suspense02" data-number="1">
                    <p>Mantenha Esses Slides</p>
                    <p>Insira seus slides após esse slide e mantenha os slides de exemplo para que outros palestrantes possam ver também</p>
                    <p>Envie-nos um Pull Request até 10/01/2016</p>
                </section> -->





                <section class="">
                    <h1>Automação Residencial com PHP</h1>
                    <p>Utilizando Arduino e PHP para automatizar a sua residência</p>
                </section>

                <section class="">
                    <h1>O que veremos?</h1>
                    <ol>
                        <li data-fragment-index="0" class="fragment visible">O que é Arduino?</li>
                        <li data-fragment-index="1" class="fragment visible">Aplicações para o Arduino</li>
                        <li data-fragment-index="2" class="fragment visible">Como trabalhar com o Arduino?</li>
                        <li data-fragment-index="3" class="fragment visible">Como integrar com PHP?</li>
                        <li data-fragment-index="4" class="fragment visible">Juntando tudo</li>
                    </ol>
                </section>

                <section class="">
                    <h1>Diego Pires</h1>
                    <ul>
                        <li>15 anos trabalhando com Web</li>
                        <li>Gamer</li>
                        <li>Geek</li>
                        <li>Atualmente Gestor de TI</li>
                    </ul>
                </section>

                <section>
                    <section class="">
                        <h1>O que é Arduino?</h1>                    
                        <blockquote>
                            Arduino é uma plataforma aberta de prototipação eletrônica
                        </blockquote>
                        <aside class="notes">
                            <p>Por ser uma plataforma, ele não é simplesmente um hardware como muitos pensam. A plataforma Arduino é composta por hardware (placa controladora) e software (ambiente de desenvolvimento), ambos muito flexíveis, fáceis de usar e super acessíveis. Ele é uma das principais realizações de um movimento que só cresce no mundo: o movimento makers. São os fazedores. Representantes de uma cultura que uniu o faça-você-mesmo à tecnologia para criar projetos incríveis em todas as áras.</p>
                            <p>O projeto nasceu em 2005 quando estudantes de um curso de Design de Interação na Itália, entre eles Massimo Banzi, resolveram arregaçar as mangas e criar eles mesmos uma alternativa ao hardware do curso, que era caro e complexo para os estudantes.</p>
                        </aside>                        
                    </section>

                    <section>                    
                        <h2>Como assim, Plataforma de Prototipação Eletrônica?</h2>
                        <blockquote data-fragment-index="0" class="fragment visible">
                            Não é apenas o Hardware. É o conjunto composto por Hardware e Software.
                        </blockquote>
                        <aside class="notes">
                            <p>Por ser uma plataforma, ele não é simplesmente um hardware como muitos pensam. A plataforma Arduino é composta por hardware (placa controladora) e software (ambiente de desenvolvimento), ambos muito flexíveis, fáceis de usar e super acessíveis. Ele é uma das principais realizações de um movimento que só cresce no mundo: o movimento makers. São os fazedores. Representantes de uma cultura que uniu o faça-você-mesmo à tecnologia para criar projetos incríveis em todas as áras.</p>
                            <p>O projeto nasceu em 2005 quando estudantes de um curso de Design de Interação na Itália, entre eles Massimo Banzi, resolveram arregaçar as mangas e criar eles mesmos uma alternativa ao hardware do curso, que era caro e complexo para os estudantes.</p>
                        </aside>
                    </section>

                    <section>
                        <h2>História</h2>
                        <ul>
                            <li data-fragment-index="0" class="fragment visible">
                                Nasceu em 2005, na Itália. Uma alternativa ao hardware do curso de Design e Interação que alguns alunos cursavam.
                            </li>
                            <li data-fragment-index="1" class="fragment visible">
                                Desde então o "movimento makers (fazedores)" tem crescido cada vez mais.
                            </li>
                        </ul>
                        <aside class="notes">
                            <p>O projeto nasceu em 2005 quando estudantes de um curso de Design de Interação na Itália, entre eles Massimo Banzi, resolveram arregaçar as mangas e criar eles mesmos uma alternativa ao hardware do curso, que era caro e complexo para os estudantes.</p>
                        </aside>
                    </section>
                </section>

                <section>
                    <section class="">
                        <h1>E como, afinal, funciona?</h1>
                        <blockquote data-fragment-index="0" class="fragment visible">
                            Basicamente? entrada, processamento e saída (como toda linguagem de programação).
                        </blockquote>
                    </section>

                    <section data-background="images/Arduino-Explain.jpg">
                        <aside class="notes">
                            <p>Dessa forma podemos efetuar a leitura e escrita nos pinos digitais e analógicos que o Arduino possui.</p>
                        </aside>
                    </section>

                    <section>
                        <h2>Entrada digital e analógica? Como assim?</h2>
                        <ul>
                            <li data-fragment-index="0" class="fragment visible">Digital<p>Lê e escreve somente dois estados. LOW e HIGH.</p></li>
                            <li data-fragment-index="1" class="fragment visible">Analógica<p>Lê uma infinidade de valores em relação ao tempo.</p></li>
                        </ul>
                        <aside class="notes">
                            <p>Em muitas situações a variação das  grandezas envolvidas acontece de forma analógica. Ou seja, variam continuamente em relação ao tempo e podem assumir infinitos valores dentro de uma faixa. Como exemplo a temperatura, pressão e umidade são grandezas que variam dessa forma.
                            O microcontrolador da Arduino trabalha internamente com dados digitais, portanto é necessário traduzir um sinal analógico para um valor digital. A técnica utilizada para leitura de um sinal analógico pelo Arduino é a conversão analógica digital.</p>
                        </aside>
                    </section>

                    <section>
                        <h2>Variações do Arduino</h2>
                    </section>
                </section>

                <section class="">
                    <h1>Aplicações do Arduino</h1>
                    <p>
                        <span data-fragment-index="0" class="fragment visible">Projetos Musicais</span>
                        <span data-fragment-index="1" class="fragment visible">, Projetos Científicos</span>
                        <span data-fragment-index="2" class="fragment visible">, Automação Residencial</span>
                        <span data-fragment-index="3" class="fragment visible">, Automação de Processos</span>
                        <span data-fragment-index="4" class="fragment visible">, Automação Industrial, etc</span>
                    </p>
                </section>



			</div>

		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
        <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

		<script>
            var mode = $('body').attr('data-mode');
            var websocketsAddress = $('body').attr('data-websockets-address');

            var revealConfig = {
                controls: false,
                progress: true,
                history: false,
                keyboard: false,
                overview: false,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
                    { src: 'js/code.min.js', async: true },
                    { src: 'plugin/zoom-js/zoom.js', async: true },
                    //{ src: 'plugin/notes/notes.js', async: true }
                ],

                multiplex: {
                    secret: 'issoehumsegredo',
                    id: 'nossaqueidlegal',
                    url: websocketsAddress
                },
            };

            if (mode == 'presenter') {
                revealConfig.controls = true;
                revealConfig.keyboard = true;
                revealConfig.touch = true;
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/master.js', async: true });
                revealConfig.dependencies.push({ src: 'plugin/notes/notes.js', async: true });
            } else {
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
            }

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize(revealConfig);
		</script>

	</body>
</html>
