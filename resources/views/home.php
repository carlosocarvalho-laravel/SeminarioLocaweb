<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>5 Seminario Locaweb PHPSP</title>

		<meta name="description" content="Slied 5 Seminario Locaweb PHPSP">
		<meta name="author" content="PHPSP">

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

                <section>
                    <h2>http://<?php echo $host; ?></h2>
                    <h1>Palestra interativa!</h1>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <h4>Instruções para Palestrantes!</h4>
                </section>

				<section>
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

                <section class="sound-suspense02">
                    <p>Som</p>
                    <p>Para adcionar sons, você deve alterar o arquivo "public/js/modules/sound.js" e incluir uma classe sound-* na section</p>
                    <p>Use esse slide como exemplo</p>
                </section>

                <section>
                    <p>Mantenha Esses Slides</p>
                    <p>Insira seus slides após esse slide e mantenha os slides de exemplo para que outros palestrantes possam ver também</p>
                    <p>Envie-nos um Pull Request até 10/01/2016</p>
                </section>

                <section class="poll" data-number="pannel" data-change="true">
                    <p>Decida Sobre o Painel</p>
                    <div class="button-level" data-value="keep">
                        <span>Mantenha o Tema (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="change">
                        <span>Troque de Tema (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <?php if ($mode == 'presenter') : ?>
                        <div class="button-level" data-value="clean">
                            <span>limpar Dados (<b>0</b>)</span>
                            <div class="level red"></div>
                        </div>
                    <?php endif; ?>
                </section>

                <section class="raffle" data-number="pannel" data-change="true">
                    <h2 class="winner-message"></h2>
                    <p>Vencedor</p>
                    <p class="winner-nickname"></p>

                    <?php if ($mode == 'presenter') : ?>
                        <div class="button-level" data-value="raffle">
                            <span>Sortear</span>
                            <div class="level green"></div>
                        </div>
                    <?php endif; ?>
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
                    //{ src: 'plugin/zoom-js/zoom.js', async: true },
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
            } else {
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
            }

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize(revealConfig);
		</script>

	</body>
</html>
