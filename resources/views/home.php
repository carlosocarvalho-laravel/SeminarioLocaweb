<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>5 Seminario Locaweb PHPSP</title>

		<meta name="description" content="Slide 5 Seminario Locaweb PHPSP">
		<meta name="author" content="PHPSP">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
    <link rel="stylesheet" href="css/diego.css">
    <link rel="stylesheet" href="css/marcel.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:700,900' rel='stylesheet' type='text/css'>
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

            function toggleFullScreen() {
              var noSleep = new NoSleep();
              noSleep.enable();
                if ((document.fullScreenElement && document.fullScreenElement !== null) ||
                    (!document.mozFullScreen && !document.webkitIsFullScreen)) {
                    if (document.documentElement.requestFullScreen) {
                        document.documentElement.requestFullScreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullScreen) {
                        document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                    }
                } else {
                    if (document.cancelFullScreen) {
                  document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                  document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                  document.webkitCancelFullScreen();
                }
              }
            }
		</script>

        <style>
            .medium-poll{
                float: left;
                width: 28%;
                font-size: 0.5em;
            }

            .medium-poll:nth-child(3), .medium-poll:nth-child(6){
                float: right;
                margin-right: 0px;;
            }

            .medium-poll span{
                padding: 40px 20px;
                font-size: 60%;
            }

            .button-level.small-poll{
                clear: both;
            }

            .button-level.small-poll span b{
                display: none;
            }
        </style>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="<?php echo $websocketsAddress; ?>" data-mode="<?php echo $mode; ?>">
    <img onclick="toggleFullScreen();" src="images/fullscreen.png" style="position: fixed;bottom: 1em;right: 1em;width:2em; z-index: 9999999;">

		<div class="reveal">
            <div class="users-counter"></div>

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

                <section>
                    <h2>5 Seminario Locaweb PHPSP!</h2>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <p><a href="http://seminariophpsp.jelasticlw.com.br/">http://seminariophpsp.jelasticlw.com.br/</a></p>
                    <h4><a href="https://github.com/PHPSP/docs/blob/master/codigo-de-conduta.md">Código de Conduta</a></h4>
                </section>

                <!-- Programação Funcional em PHP -->
                <!-- Marcel Gonçalves dos Santos -->

                <!-- slide-01 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-01.jpeg">
                </section>

                <!-- slide-02 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-02.jpeg">
                </section>

                <!-- slide-03 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-03.jpeg">
                </section>

                <!-- slide-04 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-04.jpeg">
                </section>

                <!-- slide-05 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-05.jpeg">
                </section>

                <!-- pool-01 -->
                <section data-background="#424242" class="poll functional-poll" data-number="funcional-1">
                    <h1 class="poll-title">Pergunta!</h1>
                    <p class="poll-question">Você sabe o que é programação funcional?</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <!-- slide-06 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-06.jpeg">
                </section>

                <!-- slide-07 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-07.jpeg">
                </section>

                <!-- slide-08 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-08.jpeg">
                </section>

                <!-- slide-09 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-09.jpeg">
                </section>

                <!-- slide-10 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-10.jpeg">
                </section>

                <!-- slide-11 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-11.jpeg">
                </section>

                <!-- slide-12 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-12.jpeg">
                </section>

                <!-- slide-13 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-13.jpeg">
                </section>

                <!-- slide-14 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-14.jpeg">
                </section>

                <!-- slide-15 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-15.jpeg">
                </section>

                <!-- slide-16 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-16.jpeg">
                </section>

                <!-- slide-17 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-17.jpeg">
                </section>

                <!-- slide-18 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-18.jpeg">
                </section>

                <!-- slide-19 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-19.jpeg">
                </section>

                <!-- slide-20 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-20.jpeg">
                </section>

                <!-- slide-21 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-21.jpeg">
                </section>

                <!-- slide-22 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-22.jpeg">
                </section>

                <!-- slide-23 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-23.jpeg">
                </section>

                <!-- slide-24 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-24.jpeg">
                </section>

                <!-- slide-25 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-25.jpeg">
                </section>

                <!-- slide-26 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-26.jpeg">
                </section>

                <!-- slide-27 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-27.jpeg">
                </section>

                <!-- slide-28 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-28.jpeg">
                </section>

                <!-- slide-29 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-19.jpeg">
                </section>

                <!-- slide-30 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-30.jpeg">
                </section>

                <!-- slide-31 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-31.jpeg">
                </section>

                <!-- pool-02 -->
                <section data-background="#424242" class="poll functional-poll" data-number="2">
                    <h1 class="poll-title">Pergunta!</h1>
                    <p class="poll-question">A função do slide anterior é uma função pura?</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <!-- slide-32 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-32.jpeg">
                </section>

                <!-- slide-33 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-33.jpeg">
                </section>

                <!-- slide-34 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-34.jpeg">
                </section>

                <!-- slide-35 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-35.jpeg">
                </section>

                <!-- slide-36 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-36.jpeg">
                </section>

                <!-- slide-37 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-37.jpeg">
                </section>

                <!-- slide-38 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-38.jpeg">
                </section>

                <!-- slide-39 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-39.jpeg">
                </section>

                <!-- slide-40 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-40.jpeg">
                </section>

                <!-- slide-41 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-41.jpeg">
                </section>

                <!-- slide-42 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-42.jpeg">
                </section>

                <!-- slide-43 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-43.jpeg">
                </section>

                <!-- slide-44 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-44.jpeg">
                </section>

                <!-- slide-45 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-45.jpeg">
                </section>

                <!-- pool-03 -->
                <section data-background="#424242" class="poll functional-poll" data-number="3">
                    <h1 class="poll-title">Pergunta!</h1>
                    <p class="poll-question">Qual será o resultado de <code>print $sayHello('John')</code> do slide anterior?</p>

                    <div class="button-level" data-value="hello-john">
                        <span>Hello John! (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="hello">
                        <span>Hello ! (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <!-- slide-46 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-46.jpeg">
                </section>

                <!-- slide-47 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-47.jpeg">
                </section>

                <!-- slide-48 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-48.jpeg">
                </section>

                <!-- slide-49 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-49.jpeg">
                </section>

                <!-- slide-50 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-50.jpeg">
                </section>

                <!-- slide-51 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-51.jpeg">
                </section>

                <!-- slide-52 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-52.jpeg">
                </section>

                <!-- slide-53 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-53.jpeg">
                </section>

                <!-- slide-54 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-54.jpeg">
                </section>

                <!-- slide-55 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-55.jpeg">
                </section>

                <!-- slide-56 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-56.jpeg">
                </section>

                <!-- slide-57 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-57.jpeg">
                </section>

                <!-- slide-58 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-58.jpeg">
                </section>

                <!-- slide-59 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-59.jpeg">
                </section>

                <!-- slide-60 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-60.jpeg">
                </section>

                <!-- slide-61 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-61.jpeg">
                </section>

                <!-- slide-62 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-62.jpeg">
                </section>

                <!-- slide-63 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-63.jpeg">
                </section>

                <!-- slide-64 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-64.jpeg">
                </section>

                <!-- slide-65 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-65.jpeg">
                </section>

                <!-- slide-66 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-66.jpeg">
                </section>

                <!-- slide-67 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-67.jpeg">
                </section>

                <!-- slide-68 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-68.jpeg">
                </section>

                <!-- slide-69 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-69.jpeg">
                </section>

                <!-- slide-70 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-70.jpeg">
                </section>

                <!-- slide-71 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-71.jpeg">
                </section>

                <!-- slide-72 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-72.jpeg">
                </section>

                <!-- slide-73 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-73.jpeg">
                </section>

                <!-- slide-74 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-74.jpeg">
                </section>

                <!-- slide-75 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-75.jpeg">
                </section>

                <!-- slide-76 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-76.jpeg">
                </section>

                <!-- slide-77 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-77.jpeg">
                </section>

                <!-- slide-78 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-78.jpeg">
                </section>

                <!-- slide-79 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-79.jpeg">
                </section>

                <!-- slide-80 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-80.jpeg">
                </section>

                <!-- slide-81 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-81.jpeg">
                </section>

                <!-- slide-82 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-82.jpeg">
                </section>

                <!-- slide-83 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-83.jpeg">
                </section>

                <!-- slide-84 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-84.jpeg">
                </section>

                <!-- slide-85 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-85.jpeg">
                </section>

                <!-- slide-86 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-86.jpeg">
                </section>

                <!-- slide-87 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-87.jpeg">
                </section>

                <!-- slide-88 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-88.jpeg">
                </section>

                <!-- slide-89 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-89.jpeg">
                </section>

                <!-- slide-90 -->
                <section data-background="#424242">
                    <img src="images/funcional/slide-90.jpeg">
                </section>

                <!-- React Além dos Websockets -->
                <!-- Nickolas "Nawarian" -->
                <section>
                  <section>
                    <h2>
                      React além dos WebSockets
                    </h2>
                    <pre><code class="php">
$seminarioLocaweb = new BigMuthaFuckinEvent(new \DateTime());

$seminarioLocaweb->setMadnessMode(true);
                      </code></pre>

                      <a href="https://joind.in/talk/23fb1">https://joind.in/talk/23fb1</a>

                  </section>

                  <section id="nawarian">
                    <h2>
                      Níckolas Daniel da Silva
                    </h2>
                    <div>
                      <div style="float: left">
                        <img data-src="http://eventos.locaweb.com.br/files/2015/12/N%C3%ADckolas-Daniel-da-Silva.jpg">
                      </div>
                      <div style="float: right; width: 18em;">
                        <ul>
                          <li>
                            Bombeiro de Software há 4 anos
                          </li>
                          <li>
                            Análise e Desenvolvimento de Sistemas [UNIFIEO]
                          </li>
                          <li>
                            Engenharia de Software Orientada para Serviços [IBTA]
                          </li>
                        </ul>
                      </div>
                    </div>

                    <small style="margin-top: 2em;">
                      <a href="http://nawarian.xyz" target="_new">
                        http://nawarian.xyz
                      </a>
                      |
                      <a href="http://git.io/vEe0o" target="_new">
                        http://git.io/vEe0o
                      </a>
                      |
                      <a href="http://phpsp.org.br" target="_new">
                        http://phpsp.org.br
                      </a>
                    </small>
                  </section>
                </section>

                <section id="introducao">
                  <section>
                    <h2>
                      Como costumamos programar
                    </h2>
                    <p>
                      Vamos registrar um novo jogador!
                    </p>
                    <pre><code class="php">
try {
    $mapper = $this->getMapper();

    $player = new Model\Player();
    $player->decorate($data); // dados do jogador

    $mapper->player->persist($player); // Player + atributos
    $this->createInventory($player); // Inventário 30x30 [slots]
    $this->createSkillset($player); // Skills + Níveis

    $mapper->flush();
    return (new JsonResponse($player));
} catch (\Exception $e) {
    return (new JsonResponse(new Error($e)));
}
                      </code></pre>
                  </section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/01.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/02.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/03.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/04.png"></section>
                  <section>
                    <h2>
                      Este código é...
                    </h2>
                    <aside style="float: left;">
                      <img src="images/reclamando.gif" alt="">
                    </aside>
                    <ul style="float: right; width: 15em;">
                      <li>
                        <strong>Síncrono</strong>: toda operação depende da diretamente anterior,
                        e o resultado final é o único que importa
                      </li>
                      <li>
                        <strong>Acoplado</strong>: toda operação só executa se sua anterior
                        também executar com sucesso
                      </li>
                      <li>
                        <strong>Catastrófico</strong>: uma falha invalida todo o progresso,
                        independentemente de seu nível de gravidade
                      </li>
                      <li>
                        <strong>Pouco responsivo</strong>: não há noção de completitude,
                        sucesso ou falhas
                      </li>
                    </ul>
                  </section>
                  <section data-background="images/processo-batch.gif">

                  </section>
                  <section>
                    <h2>
                      Qual o problema?
                    </h2>
                    <p>
                      A maior fraqueza desse modelo é o custo de programação para
                      fornecer feedback ao usuário de forma decente. <br><br>
                      Além disso, adotar processos com o formato de batch cria
                      sensação de lentidão e impotência no progresso das operações.
                    </p>
                  </section>
                </section>

                <section>
                  <section>
                    <h2>
                      Uma abordagem diferente
                    </h2>
                    <p>
                      Em vez de executar um monte de procedimentos de uma vez,
                      que tal separar um pouco mais as responsabilidades?
                    </p>
                  </section>
                  <section>
                    <h2>
                      Uma cara diferente para fazer o mesmo
                    </h2>
                    <pre><code class="php">
createPlayerFromRequest(\stdClass $request) { /*...*/ }
createInventory(Model\Player $player) { /*...*/ }
createSkillset(Model\Player $player) { /*...*/ }

try {
  $player = createPlayerFromRequest($data);
  createInventory($player);
  createSkillset($player);

  return (new JsonResponse($player));
} catch (\Exception $e) {
  return (new JsonResponse(new Error($e)));
}
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Mesmo sendo diferente, este código ainda é<br>
                      <strong>catastrófico</strong> e <strong>pouco responsivo</strong>.
                      <br><br>
                      Apesar disto, ficou menos <strong>acoplado</strong>.
                      Mas ainda é <strong>síncrono</strong>...
                    </p>
                  </section>
                  <section>
                    <h2>
                      Catastrófico e Pouco Responsivo...
                    </h2>
                    <pre><code class="php">
try {
  $player = createPlayerFromRequest($data);
  createInventory($player); // 60 ms
  createSkillset($player); // 120 ms

  // Tudo certo *-*
  return (new JsonResponse($player)); // 180 ms
} catch (InventoryCreationException $e) {
  // Deu erro no inventário
} catch (SkillsetCreationException $e) {
  // Deu erro na criação das habilidades
} catch (PlayerCreationException $e) {
  // Deu erro ao criar personagem :O
} catch (\Exception $e) {
  // Aqui deu ruim mesmo!
}
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Eu já posso indicar se o problema foi na
                      criação do jogador, do inventário ou das habilidades.
                    </p>
                    <h3 class="fragment fade-in">
                      Mas por que diabos eu tenho de criar um inventário
                      e SÓ DEPOIS criar as habilidades?
                    </h3>
                  </section>
                  <section>
                    <h2>
                      Imagina só se...
                    </h2>
                    <p>
                      ...essas coisas acontecessem ao <strong>mesmo</strong> tempo
                    </p>
                    <pre><code class="php">
createPlayerAccount(\stdClass $request) {
  // $player = createPlayerFromRequest($request); (...)
  return all([
    createInventory($player), // 60 ms
    createSkillset($player) // 120 ms
  ]);
}

createPlayerAccount($data) // 120 ms
    ->then(function (Model\Player $player) {}) // :D
    ->otherwise(function (InventoryCreationException $e) {}) // :/
    ->otherwise(function (SkillsetCreationException $e) {}) // :(
    ->otherwise(function (\Exception $e) {}); // TToTT

                    </code></pre>

                  </section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/01.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/02.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/03.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/04.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/05.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/06.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/07.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/08.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/09.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/10.png"></section>
                  <section>
                    <p>
                      Trabalhar com processos em <strong>paralelo</strong> cria uma gama
                      de possibilidades! <br>
                      <strong>React PHP</strong> veio para realizar este sonho
                    </p>
                  </section>
                </section>

                <section id="slide-sonho">
                  <h2 style="color: #fff">
                    Quê que dá pra gente fazer com esse "sonho" aí
                  </h2>
                  <canvas id="react-sonho" style="border: 1px solid #000;"></canvas>
                </section>

                <section>
                  <section>
                    <h2>
                      Nossos conceitos chave são <strong>assíncrono</strong> e <strong>paralelo</strong>!
                    </h2>
                    <p>
                      Vamos conhecer agora as ferramentas React de acordo com estes conceitos.
                    </p>
                  </section>
                </section>
                <section>
                  <section>
                    <h2>
                      Event Loop
                    </h2>
                  </section>

                  <section>
                    <h2>
                      EventLoop - O maestro
                    </h2>
                    <p>
                      É o grande responsável por controlar os processos
                      paralelos. Possui, atualmente, quatro implementações:
                    </p>
                    <ul>
                      <li>LibEventLoop (<a href="http://php.net/manual/en/book.libevent.php" target="_new">LibEvent</a>)</li>
                      <li>LibEvLoop (<a href="https://github.com/m4rw3r/php-libev" target="_new">Libev</a>)</li>
                      <li>ExtEventLoop (<a href="http://php.net/manual/en/book.event.php" target="_new">Event</a>)</li>
                      <li>StreamSelect (standalone)</li>
                    </ul>
                    <p>
                      A <a href="https://github.com/reactphp/event-loop/blob/master/src/Factory.php" target="_new">EventLoop\Factory</a> utiliza exatamente esta ordem para adivinhar o EventLoop disponível para seu sistema.
                    </p>
                  </section>
                  <section>
                    <h2>
                      EventLoop - Básico
                    </h2>
                    <p>
                      Trata-se de um loop infinito* que, a cada ciclo, executa
                      três grupos de processos quando disponíveis:
                      <ul>
                        <li>Timers (One-off/Periodics)</li>
                        <li>Ticks (Next/Future)</li>
                        <li>Callbacks de Streams</li>
                      </ul>
                    </p>
                  </section>
                  <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>

                  <section>
                    <h2>
                      Timers
                      <br>
                      <small>
                        One-off/Periodics
                      </small>
                    </h2>
                    <pre><code class="php">
$loop = React\EventLoop\Factory::create();
// Executa {$callback01} infinitamente a cada {$n} segundos
$eterno = $loop->addPeriodicTimer($n, $callback01);

// Executa uma única vez, daqui a 5 segundos
$unico = $loop->addTimer(
    5,
    function () use ($loop, $eterno) {
      if ($loop->isTimerActive($eterno)) {
        // Pára de inserir {$eterno} na fila
        $loop->canceltimer($eterno);
      }
    }
);
$loop->run();
                    </code></pre>
                  </section>
                  <section>
                    <h2>
                      Ticks
                      <br>
                      <small>
                        Future/Next
                      </small>
                    </h2>
                    <pre><code class="php">
$loop = React\EventLoop\Factory::create();

$nextTickCallback = function () {/*...*/};
$futureTickCallback = function () {/*...*/};

// Estes callbacks serão jogados para uma fila de execução
$loop->nextTick($nextTickCallback);
$loop->futureTick($futureTickCallback);

$loop->run();
                    </code></pre>
                  </section>

          <section>
            <h2>
              Callbacks de Streams
            </h2>
            <pre><code class="php">
$loop = React\EventLoop\Factory::create();

$streamTal = getStream(); // resource
stream_set_blocking($streamTal, 0);

$loop->addReadStream($streamTal, function ($streamTal, $loop) {
  // O que fazer quando $streamTal está pronto para leitura
});

$loop->addWriteStream($streamTal, function ($streamTal, $loop) {
  // O que fazer quando $streamTal está pronto para gravação
});

$loop->run();
            </code></pre>
          </section>
          <section>
            <p>
              Todos estes adicionam execuções à fila do EventLoop. <br>
              <strong>Este é o coração do React PHP.</strong>
            </p>
          </section>
          <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>
                </section>
        <section>
          <section>
            <h2>
              Streams
            </h2>
          </section>
          <section data-background="images/minions.gif">
            <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em">
              <h2>
                Streams - Os Minions
              </h2>
              <p>
                De nada adianta um Gru que orquestre todo o trabalho se não
                há quem o realize.
              </p>
            </div>
          </section>
          <section>
            <h2>
              React\Stream
            </h2>
            <p>
              Este pacote contém dois itens principais:
            </p>
            <ul>
              <li>Buffer</li>
              <li>Stream</li>
            </ul>
            <p>
              A partir deste tópico começaremos a abordar processos <strong>paralelos</strong>
              e <strong>assíncronos</strong>.
            </p>
          </section>
          <section>
            <h2>
              Buffer
            </h2>
            <p>
              Buffers são os responsáveis por nos comunicar com processos
              de I/O, facilitando a escrita em <strong>resources</strong>.
            </p>
            <pre><code class="php">
// Exemplo de variável do tipo *resource*
$resource = fopen('arquivo.txt', 'w+');

$buffer = new React\Stream\Buffer($resource, $loop);
$buffer->write('Hello, buffer!');
            </code></pre>
            <p>
              A implementação da classe Buffer vai além da simples escrita:<br>
              Buffer também se preocupa com o tamanho dos itens a serem
              escritos e particiona a escrita entre os ciclos do EventLoop.
            </p>
          </section>
          <section>
            <h2>Stream</h2>
            <p>
              Já os streams são nossos heróis de leitura e escrita de <strong>resources</strong>.
              Os utilizamos através do <strong>on()</strong>, <strong>write()</strong>
              e <strong>pipe()</strong>:
            </p>
            <pre><code class="php">
$phpsp = fopen('http://phpsp.org.br', 'r');
$saida = fopen('./saida.html', 'w+');
$callback = function ($data) {/*...*/};

$reader = new React\Stream\Stream($phpsp, $loop);
$writer = new React\Stream\Stream($saida, $loop);
$reader->on('data', $callback);

$reader->pipe($writer);
            </code></pre>
          </section>
          <section>
            <h2>
              Streams! Streams everywhere!
            </h2>
            <p>
              Os Streams e Buffers operam com todo tipo de <strong>resource</strong>.
              Portanto sockets, I/O de arquivos e quaisquer outros tipos de streams
              que façam leitura ou escrita.
            </p>
            <pre><code class="php">
// Um OtServer em PHP?? Quem sabe?! O.o
$sock = stream_socket_server('tcp://0.0.0.0:7171');
$server = new React\Stream\Stream($sock, $loop);

$server->on('data', function($data) use ($sock) {
  // Um readable resource => new Stream($clientSock) *-*
  $clientSock = stream_socket_accept($sock);
});
            </code></pre>
          </section>
        </section>
        <section>
          <section>
            <h2>Sockets</h2>
          </section>
          <section>
            <h2>
              Socket - O canal
            </h2>
            <p>
              React\Socket serve justamente para simplificar a criação de
              servidores utilizando o protocolo TCP/IP.
            </p>
          </section>
          <section>
            <p>
              Lembram deste trecho de código?
            </p>
            <pre><code class="php">
// Um OtServer em PHP?? Quem sabe?! O.o
$sock = stream_socket_server('tcp://0.0.0.0:7171');
$server = new React\Stream\Stream($sock, $loop);

$server->on('data', function($data) use ($sock) {
  // Um readable resource => new Stream($clientSock) *-*
  $clientSock = stream_socket_accept($sock);
});
            </code></pre>
            <p>
              Parece até simples se você não precisa identificar as conexões,
              organizar os fluxos de entrada e saída, buffers e tudo mais.
            </p>
          </section>
          <section>
            <h2>
              React\Socket
            </h2>
            <pre><code class="php">
$stdOut = new React\Stream\Stream(STDOUT, $loop);
$server = new React\Socket\Server($loop);

$server->on('connection', function ($conn) use ($stdOut) {
  // Alguém se conectou!! *-*
  $conn->write('Olá, intruso! >_<');

  $conn->pipe($stdOut);
});

$server->listen(7171, '0.0.0.0');
            </code></pre>
          </section>
        </section>
        <section>
          <section data-background="images/telecurso-revisao.gif"></section>
          <section>
            <h2>
              React PHP
            </h2>
            <p>
              Fazendo o resumão de tudo, <strong>React PHP</strong>:
              <ul>
                <li class="fragment fade-in">
                  Tem um EventLoop que organiza as execuções
                </li>
                <li class="fragment fade-in">
                  Tem Streams, que ajudam a manipular I/O
                </li>
                <li class="fragment fade-in">
                  Tem Sockets, que nos permite comunicar por rede
                </li>
                <li class="fragment fade-in">
                  Tem uma boa abstração para trabalhar com <strong>resources</strong>
                </li>
              </ul>
            </p>
          </section>
          <section>
            <h2>
              Nota: React PHP lida com <strong>resources</strong>
            </h2>
            <p>
              Portanto os resultados de <strong>popen()</strong>,
              <strong>fopen()</strong>, <strong>stream_socket_server()</strong>,
              <strong>inotify_init()</strong>, e outros, poderão ser manipulados
              dentro do código PHP de forma facilitada.
            </p>
          </section>
          <section>
            <p>
              Se eu tenho acesso a I/O, subprocessos e rede, o que
              é que eu não posso fazer!?
            </p>
          </section>
          <section data-background="images/hell-yeah.gif"></section>
          <section>
            <p>
              Nada <br>
              <strong class="fragment fade-in">:)</strong>
            </p>
          </section>
        </section>
        <section data-background="images/ross.gif">
          <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em" class="fragment fade-in">
            <p>
              Legal, legal...
            </p>
            <p class="fragment fade-in">
              Isso é só a base do React PHP, agora vamos à parte interessante!!
            </p>
          </div>
        </section>
        <section>
          <h2>
            Cases legais e marotos!
          </h2>
        </section>
        <section>
          <section>
            <h2>
              Case 01: Logging não bloqueante
            </h2>
            <p>
              Através de sockets ou mesmo de subprocessos somos capazes
              de realizar o logging de aplicações sem aumentar drasticamente
              o tempo de execução.
              <br>
              O Código abaixo ilustra uma aplicação com subprocessos.
            </p>
          </section>
          <section>
            <h2>
              Exemplo chulo com Monolog:
            </h2>
            <small>
              Esta ferramenta roda como linha de comando
            </small>
            <pre><code class="php">
// $ php log.php meuArquivo.log 'Texto para o log'
require_once dirname(__FILE__).'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = $loggerName = $argv[1]; // meuArquivo.log
$textToLog = $argv[2]; // Texto para o log

$log = new Logger($loggerName);
$log->pushHandler(new StreamHandler($logFile), Logger::WARNING);

$log->addInfo($textToLog);
            </code></pre>
          </section>
          <section>
            <h2>
              Utilizando log.php
            </h2>
            <pre><code class="php">
use React\ChildProcess\Process;

$loop = React\EventLoop\Factory::create();
$stdIn = new React\Stream\Stream(STDIN, $loop);

$stdIn->on('data', function($input) use ($loop) {
  $comando = "php log.php input.log '{$input}'";
  (new Process($comando))->start($loop);
});

$loop->run();
            </code></pre>
          </section>
          <section data-background-size="42%" data-background="images/logging/01.png"></section>
          <section data-background-size="42%" data-background="images/logging/02.png"></section>
          <section data-background-size="42%" data-background="images/logging/03.png"></section>
          <section data-background-size="42%" data-background="images/logging/04.png"></section>
          <section data-background-size="42%" data-background="images/logging/05.png"></section>
        </section>
        <section>
          <section>
            <h2>
              Case 02: PHPBot - Automação de tarefas
            </h2>
            <small>
              <a href="https://github.com/nawarian/PHPBot" target="_new">
                https://github.com/nawarian/PHPBot
              </a>
            </small>
            <p>
              Computadores com Windows possuem a Win32 API que, dentre outas coisas,
              permite o envio de eventos de periféricos como teclado e mouse. <br>
              Para computadores com sistemas Unix-like que utilizem o X11, podemos utilizar
              a libx11 para alcançar o mesmo resultado.
            </p>
          </section>
          <section>
            <h2>
              Implementação
            </h2>
            <p>
              O PHP não tem acesso à Win32API sem utilizar extensões, para isto <strong>python</strong>
              se mostrou útil.
              Para o X11 ainda não existe uma biblioteca em PHP, mas a ferramenta de linha de comando <strong>xdotool</strong>
              já oferece tudo o que precisamos. <br>
              Trata-se portando de uma série de subprocessos chamados de forma organizada.
            </p>
          </section>
          <section>
            <h2>Exemplo: runando no Tibia :)</h2>
            <pre><code class="php">
$dm = PHPBot\DesktopManager\Factory::create($loop);
$runa = $argv[1];

$runar = $dm->createCommandPipeline(
  $dm->wait(.5),
  $dm->keyboard()->sendKey(Keys::ENTER()),
  $dm->wait(.5),
  $dm->keyboard()->type($runa),
  $dm->wait(.5),
  $dm->keyboard()->sendKey(Keys::ENTER()),
  $dm->wait(2)
);

$runar->start()
    ->then($onPipelineEndedCallback);
            </code></pre>
          </section>
          <section>
            <video class="stretch" src="images/phpbot/tibiabot.mp4"></video>
          </section>
        </section>
        <section data-background="images/duvidas-lego.gif">
          <h2>
            <a href="#nawarian">
              Dúvidas?
            </a>
          </h2>
        </section>

                <!-- Slides JWT -->
                <!-- Ivan Rosolen -->
                <section>
                    <h1>JSON WEB TOKEN</h1>
                    <h4>Ivan Rosolen</h4>
                </section>

                <section>
                    <h1>Ivan Rosolen</h1>
                    <p>Graduado em Sistemas de Informa&ccedil;&atilde;o</p>
                    <p>P&oacute;s-graduado em Ger&ecirc;ncia de Projetos</p>
                    <p>Desenvolvedor a 15+ anos</p>
                    <p>Autor de v&aacute;rios PHPT (testes para o PHP)</p>
                    <p>Entusiasta de novas tecnologias</p>
                    <h3>Head of Innovation @ Arizona</h3>
                    <h3>CTO @ Mokation</h3>
                </section>

                <section>
                    <h1>@ivanrosolen</h1>
                </section>

                <section class="poll" data-number="4211">
                    <p>Criei ou utilizei uma API</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section class="poll" data-number="4212">
                    <p>Autentica&ccedil;&atilde;o</p>

                    <div class="button-level" data-value="jwt">
                        <span>JWT (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="oauth">
                        <span>OAuth (<b>0</b>)</span>
                        <div class="level blue"></div>
                    </div>

                    <div class="button-level" data-value="outros">
                        <span>Outros (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section>
                    <h1>Authentication</h1>
                </section>

                <section>
                    <ul>
                        <li>Form Request Post/Get</li>
                        <li>OAuth</li>
                        <li>Key/Hash</li>
                        <li>Plain Text Credentials</li>
                        <li>Session Cookies</li>
                    </ul>
                </section>

                <section>
                    <ul>
                        <li>Data is stored in plain text on the server</li>
                        <li>Filesystem read/write requests</li>
                        <li>Distributed/clustered applications</li>
                        <li>Redis</li>
                        <li>Sticky sessions</li>
                    </ul>
                </section>

                <section>
                    <h1>API</h1>
                </section>

                <section>
                    <ul>
                        <li>Stateless authentication (simplifies horizontal scaling)</li>
                        <li>Prevent (mitigate) Cross-Site Request Forgery (CSRF) attacks</li>
                        <li>Security (https)</li>
                        <li>Authorization: Bearer</li>
                    </ul>
                </section>

                <section>
                    <h2>Authentication vs. Authorization</h2>
                    <h2 class="fragment" data-fragment-index="1">401 unauthorized / 403 forbidden</h2>
                    <h2 class="fragment" data-fragment-index="2">JWT != ACL</h2>
                </section>

                <section>
                    <h1>JOSE</h1>
                </section>

                <section>
                    <h1>JSON Object Signing and Encryption</h1>
                    <ul>
                        <li>JWT</li>
                        <li>JWS</li>
                        <li>JWA</li>
                        <li>JWK</li>
                        <li>JWE</li>
                    </ul>
                </section>

                <section>
                    <h1>Advantages</h1>
                </section>

                <section>
                    <ul>
                        <li>JSON Web Tokens work across different programming languages</li>
                        <li>JWTs are self-contained</li>
                        <li>JWTs can be passed around easily and secure</li>
                        <li>Better control like “one time token” to forgot password, confirm user, request rates, access, etc.</li>
                        <li>One token to rule them all (Stateless)</li>
                    </ul>
                </section>

                <section>
                    <h1>Anatomy</h1>
                </section>

                <section>
                    <h2>header.claims.signature</h2>
                </section>

                <section>
                    <h1>Header</h1>
                    <pre>
                        <code class="json" data-trim>
{
"typ": "JWT",
"alg": "HS256"
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Claims</h1>
                    <ul>
                        <li>iss: The issuer of the token</li>
                        <li>sub: The subject of the token</li>
                        <li>aud: The audience of the token</li>
                        <li>exp: This will define the expiration in NumericDate value. MUST be after the current time</li>
                        <li>nbf: Defines the time before which the JWT MUST NOT be accepted for processing</li>
                        <li>iat: The time the JWT was issued</li>
                        <li>jti: Unique identifier for the JWT</li>
                    </ul>
                    <p><small>Ref.:
                            <a href="http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond" target="_blank">
                                http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond
                            </a></small>
                    </p>
                </section>

                <section>
                    <h2>Payload / Claims</h2>
                    <pre>
                        <code class="json" data-trim>
{
"iss": "ivanrosolen.com",
"exp": 1300819380,
"name": "Ivan Rosolen",
"admin": true
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>JWT</h1>
                        <h4>eyJ0eXAiOiAiSldUIiwiYWxnIjogIkhTMjU2In0=</h4>
                        <h4>.</h4>
                        <h4>eyJpc3MiOiAiaXZhbnJvc29sZW4uY29tIiwiZXhwIjogMTMwMDgxOTM4MCwibmFtZSI6ICJJdmFuIFJvc29sZW4iLCJhZG1pbiI6IHRydWV9</h4>
                        <h4>.</h4>
                </section>

                <section>
                    <h1>JWS</h1>
                    <ul>
                        <li>header</li>
                        <li>claims</li>
                    </ul>
                    <p>payload</p>
                    <p>base64(header) . base64(claims)</p>
                </section>

                <section>
                    <h1>JWA</h1>
                    <ul>
                        <li>secret (hmac sha256, rsa256 ....)</li>
                        <li>encrypt payload with key ‘Xuplau’</li>
                    </ul>
                </section>

                <section>
                    <h1>Signature</h1>
                    <pre>
                        <code class="javascript" data-trim>
var encodedString = base64UrlEncode(header) + "." + base64UrlEncode(payload);

HMACSHA256(encodedString, 'Xuplau');
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>JWT</h1>
                        <h4>eyJ0eXAiOiAiSldUIiwiYWxnIjogIkhTMjU2In0=</h4>
                        <h4>.</h4>
                        <h4>eyJpc3MiOiAiaXZhbnJvc29sZW4uY29tIiwiZXhwIjogMTMwMDgxOTM4MCwibmFtZSI6ICJJdmFuIFJvc29sZW4iLCJhZG1pbiI6IHRydWV9</h4>
                        <h4>.</h4>
                        <h4>M2FjZTM0M2ZiNjhhMzBiOWNiYTkxN2U1Zjk4YjUxOWYzMTY3NGZlMmU4MTIzYjU1NTRkMjNlNjYzOTkyZGU2Nw==</h4>
                </section>

                <section>
                    <h1>Code</h1>
                </section>

                <section>
                    <h1>lcobucci/jwt</h1>
                    <p>Ref.:
                        <a href="https://github.com/lcobucci/jwt" target="_blank">
                            https://github.com/lcobucci/jwt
                        </a>
                    </p>
                </section>

                <section>
                    <h1>New Token</h1>
                    <pre>
                        <code class="php" data-trim>
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
                        </code>
                    </pre>
                </section>

                <section>
                    <pre>
                        <code class="php" data-trim>
$signer  = new Sha256;
$builder = new Builder;

$token   = $builder->setIssuer($config['jwt']['issuer'])
->setAudience($config['jwt']['audience'])
->setId(hash('sha256',$config['jwt']['key'].$login->hash), true)
->setIssuedAt(time())
->setNotBefore(time() - 1)
->setExpiration(time() + 3600)
->set('uid', $login->hash)
->sign($signer, $config['jwt']['key'])
->getToken();

$tmp          = new stdClass;
$tmp->name    = $login->name;
$tmp->hash    = $login->hash;
$tmp->token   = (string) $token;
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Validate/Verify</h1>
                    <pre>
                        <code class="php" data-trim>
use Lcobucci\JWT\ValidationData;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha256;
                        </code>
                    </pre>
                </section>

                <section>
                    <pre>
                        <code class="php" data-trim>
$parser = new Parser;
$token = $parser->parse($token);

$data = new ValidationData;
$data->setIssuer($config['jwt']['issuer']);
$data->setAudience($config['jwt']['audience']);

// unique id - blacklist
$data->setId( hash('sha256', $config['jwt']['key'].$login->hash), true) ;

$signer = new Sha256;

if ( $token->validate($data) !== true ||
$token->verify($signer, $config['jwt']['key']) !== true )
{
return false;
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Warning!</h1>
                    <img class="fragment" data-fragment-index="1" src="images/ivanrosolen/jwt_payload_wtf.png" />
                </section>

                <section>
                    <h1>Demo</h1>
                </section>

                <section>
                    <h1>Github</h1>
                    <ul>
                        <li>Session</li>
                        <li>JWT</li>
                        <li>JOSE</li>
                    </ul>
                    <p>Ref.:
                        <a href="https://github.com/ivanrosolen/crud-demo" target="_blank">
                            https://github.com/ivanrosolen/crud-demo
                        </a>
                    </p>
                </section>

                <section>
                    <h1>Refs</h1>
                </section>

                <section>
                    <h3>Github</h3>
                    <p>
                        <a href="https://github.com/ivanrosolen/crud-demo" target="_blank">
                            https://github.com/ivanrosolen/crud-demo
                        </a>
                    </p>
                </section>

                <section>
                    <h3>JWT</h3>
                    <p>
                        <a href="https://github.com/dwyl/learn-json-web-tokens" target="_blank">
                            https://github.com/dwyl/learn-json-web-tokens
                        </a>
                    </p>
                    <p>
                        <a href="http://jwt.io" target="_blank">
                            http://jwt.io
                        </a>
                    </p>
                    <p>
                        <a href="https://developer.atlassian.com/static/connect/docs/latest/concepts/understanding-jwt.html" target="_blank">
                            https://developer.atlassian.com/.../understanding-jwt.html
                        </a>
                    </p>
                    <p>
                        <a href="http://stackoverflow.com/questions/20588467/how-to-do-stateless-session-less-cookie-less-authentication" target="_blank">
                            http://stackoverflow.com/....less-cookie-less-authentication
                        </a>
                    </p>
                </section>

                <section>
                    <h3>Talks</h3>
                    <p>
                        <a href="http://www.slideshare.net/erickt86/secureapi" target="_blank">
                            Erick Belluci Tedeschi <br>
                            Applying Security Controls on REST APIs
                        </a>
                    </p>
                    <br>
                    <p>
                        <a href="http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond" target="_blank">
                            Luís Cobucci <br>
                            JWT - To authentication and beyond!
                        </a>
                    </p>
                </section>

                <section>
                    <h3>Luís Otávio Cobucci Oblonczyk</h3>
                    <p>
                        <a href="https://github.com/lcobucci/jwt" target="_blank">
                            https://github.com/lcobucci/jwt
                        </a>
                    </p>
                    <p>
                        <a href="https://github.com/Ocramius/PSR7Session" target="_blank">
                            https://github.com/Ocramius/PSR7Session
                        </a>
                    </p>
                </section>

                <section>
                    <h1>????</h1>
                </section>

                <section>
                    <h1>OBRIGADO!</h1>
                    <p>Visite
                        <a href="http://phpsp.org.br" target="_blank">
                            phpsp.org.br
                        </a>
                    </p>
                </section>
                <!-- Slides JWT - Ivan Rosolen -->

                <!-- Painel -->
                <section class="poll" data-number="pannel" data-change="true">
                    <p>Decida Sobre o Painel</p>
                    <div class="button-level" data-value="keep">
                        <span>Mantenha o Tema (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="php7">
                        <span>PHP7 (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="psr7">
                        <span>PSR7 e Demais PSR's (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="frameworks">
                        <span>Frameworks e Microframeworks (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="diversidade">
                        <span>Diversidade na Tecnologia (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="ci">
                        <span>Integração Continua e Deploy (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="testes">
                        <span>Testes de Software (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <?php if ($mode == 'presenter') : ?>
                        <div class="button-level small-poll" data-value="clean">
                            <span>Limpar Dados <b></b></span>
                            <div class="level red"></div>
                        </div>
                    <?php endif; ?>
                </section>

                <!-- PALESTRA AUTOMAÇÃO RESIDENCIAL - DIEGO PIRES//-->
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

                <section class="poll" data-number="arduino-1">
                    <p>Enquete</p>
                    <p>Você já "brincou" ou conhece Arduino?</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
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
                        <table>
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Uno</th>
                                    <th>Mega 2560</th>
                                    <th>Leonardo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Flash (KB)</td>
                                    <td>32</td>
                                    <td>256</td>
                                    <td>32</td>
                                </tr>
                                <tr>
                                    <td>CPU</td>
                                    <td>16 MHz</td>
                                    <td>16 MHz</td>
                                    <td>16 MHz</td>
                                </tr>
                                <tr>
                                    <td>Analog IN/OUT</td>
                                    <td>6/0</td>
                                    <td>16/0</td>
                                    <td>12/0</td>
                                </tr>
                                <tr>
                                    <td>Digital IO/PWN</td>
                                    <td>14/6</td>
                                    <td>54/15</td>
                                    <td>20/7</td>
                                </tr>
                            </tbody>
                        </table>
                        <blockquote style="font-size: 28px;">ArduinoBT, Due, Esplora, Ethernet, Fio, Gemma, Leonardo, LilyPad, LilyPad SimpleSnap, Mega 2560, Mega ADK, Micro, Mini, Nano, Pro, Pro Mini, Uno, Yùn, Zero</blockquote>
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

                <section>
                    <section class="">
                        <h1>Como programar?</h1>
                        <ul>
                            <li data-fragment-index="0" class="fragment visible">IDE (Arduino)</li>
                            <li data-fragment-index="1" class="fragment visible">Linguagem Própria</li>
                        </ul>

                        <aside class="notes">
                            <p>Utiliza uma IDE, uma linguagem baseada em Wiring que é quase um C/C++.</p>
                            <p>Transfere via cabo USB para o Arduino.</p>
                        </aside>
                    </section>

                    <section>
                        <h1>Resumindo</h1>
                        <h3>O que preciso</h3>
                        <ul>
                            <li data-fragment-index="0" class="fragment visible">Placa</li>
                            <li data-fragment-index="1" class="fragment visible">Computador</li>
                            <li data-fragment-index="2" class="fragment visible">Cabo USB</li>
                            <li data-fragment-index="3" style="color: #FF2C2D;" class="fragment visible red">Shield Ethernet / Wifi</li>
                            <li data-fragment-index="4" style="color: #FF2C2D;" class="fragment visible red">Relê(s)</li>
                            <li data-fragment-index="4" style="color: #FF2C2D;" class="fragment visible red">Componentes eletrônicos diversos</li>
                        </ul>

                    </section>

                </section>

                <!-- <section>
                    <section class="">
                        <h1>E isso tudo, é caro?</h1>
                        <table>
                            <thead>
                                <tr>
                                    <th>Arduino Uno</th>
                                    <th>Shield Ethernet</th>
                                    <th>Wifi</th>
                                    <th>Relê</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Flash (KB)</td>
                                    <td>32</td>
                                    <td>256</td>
                                    <td>32</td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </section>     -->


                <section>
                    <section class="">
                        <h1>E onde entra o PHP?</h1>
                        <p>Iremos usar o PHP como um "meio de campo"</p>
                        <p>O PHP intermediará as interações entre a interface WEB e o Arduino</p>

                        <aside class="notes">

                        </aside>
                    </section>

                    <section>
                        <h1>WebSocket</h1>
                        <p>É através do Ratchet que iremos "comandar" o Arduino, enviando e recebendo informações.</p>


                    </section>

                    <section data-background="#ffffff">
                        <img src="images/diagrama-server-client.png" />
                    </section>

                </section>

                <section>
                    <section class="">
                        <h1>Preparando o servidor</h1>

                            <pre><code class="hljs javascript" data-trim>
                            composer require cboden/ratchet
                            </code></pre>

                        <aside class="notes">

                        </aside>
                    </section>

                    <section>
                    <h3>Ajustando o composer.json</h3>
                        <pre><code class="hljs javascript" data-trim>
{
    "autoload": {
        "psr-0": {
            "ServerLocaweb": "src"
        }
    },
    "require": {
        "cboden/ratchet": "^0.3.4"
    }
}
                        </code></pre>


                    </section>
                </section>

                <section>
                    <section class="">
                        <h1>Programando o Servidor</h1>

                        Primeiro vamos criar a classe que será responsável por gerenciar as conexões.<br />
                        Então, de acordo com o composer.json devemos criar a seguinte estrutura de diretórios.

                        <aside class="notes">

                        </aside>
                    </section>

                    <section>
                        <pre><code class="hljs javascript" data-trim>
/
/bin
  |
   -- Onde ficará o "executável" do WebSocket
/src
    /ServerLocaweb
/vendor
  |
   -- Criado automaticamente pelo composer
                        </code></pre>

                    </section>

                    <section class="">
                        <h3>WebSocketServer.php</h3>
                        Deve conter o "padrão" para WebSockets, iniciando da seguinte forma
                        <pre>
                            <code class="hljs php" data-trim>
&lt;?php
namespace ServerLocaweb;
use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class WebSocketServer implements MessageComponentInterface {
                            </code>
                        </pre>
                    </section>


                    <section>
                        <pre>
                            <code class="hljs php" data-trim>
protected $clients;

public function __construct() {
    $this->clients = new \SplObjectStorage;
    echo "Servidor Webocket no ar". PHP_EOL;
}

public function onOpen(ConnectionInterface $conn)
{
    $this->clients->attach($conn);

    echo "Conexão estabelecida\n";
}
                            </code>
                        </pre>
                    </section>

                    <section>
                        <pre>
                            <code class="hljs php" data-trim>

public function onClose(ConnectionInterface $conn)
{
    $this->clients->detach($conn);

    echo "Conexão {$conn->resourceId} foi desconectada".PHP_EOL;
}

public function onError(ConnectionInterface $conn, \Exception $e)
{
    echo "Ocorreu um erro: {$e->getMessage()}".PHP_EOL;

    $conn->close();
}
                            </code>
                        </pre>
                    </section>

                    <section>
                        <pre>
                            <code class="hlphp hlphp php" data-trim>
public function onMessage(ConnectionInterface $from, $msg)
{
    $totalConexoes = count($this->clients) - 1;
    echo sprintf('Conexão %d enviando mensagem "%s" para %d conex%s' . PHP_EOL
        , $from->resourceId, $msg, $numRecv, $numRecv == 1 ? 'ão' : 'ões');

    foreach ($this->clients as $client) {
        if ($from !== $client) {
            $client->send($msg);
        }
    }
}
                            </code>
                        </pre>
                    </section>

                    <section>
                        <pre><code>
&lt;?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use ServerLocaweb\WebSocketServer;

require dirname(__DIR__) . '/vendor/autoload.php';
echo 'Iniciando servidor...' . PHP_EOL;
$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new WebSocketServer()
        )
    ),
    8081
);

$server->run();
                        </code></pre>
                    </section>


                </section>

                <section>
                    <section class="">
                        <h1>Programando o client HTML</h1>
                    </section>

                    <section>
                        <pre>
                            <code class="hlhtml hlhtml html" data-trim>
&lt;script src="js/jquery.min.js">&lt;/script>
                            </code>
                        </pre>

                        <pre>
                            <code class="hlhtml hlhtml html" data-trim>
&lt;h2>Cor Atual &lt;span id="corAtual">&lt;/span>&lt;/h2>
&lt;button class="button-arduino" data-value="amarelo">Amarelo&lt;/button>
&lt;button class="button-arduino" data-value="verde">Verde&lt;/button>
&lt;button class="button-arduino" data-value="azul">Azul&lt;/button>
&lt;button class="button-arduino" data-value="vermelho">Vermelho&lt;/button>
                            </code>
                        </pre>
                    </section>

                    <section>
                        <pre>
                            <code class="hljs hljs js" data-trim>
var conn = new WebSocket('ws://localhost:8081');
conn.onopen = function(e) {
    console.log("Websocket Server Arduino OK!");
};

conn.onmessage = function(e) {

    data = JSON.parse(e.data);
    if (data.type == 'arduino') {
        $("#corAtual").html(data.command);

    }
};
                            </code>
                        </pre>
                    </section>
                    <section>
                        <pre>
                            <code class="hljs hljs js" data-trim>
$(".button-arduino").on('tap click', function(e) {
    e.preventDefault();
    $("#corAtual").html($(this).attr('data-value'));
    objEnviar = {};
    objEnviar.command = $(this).attr('data-value');
    objEnviar.type = 'arduino';
    conn.send(JSON.stringify(objEnviar));
});
                            </code>
                        </pre>
                    </section>
                </section>



                <section>
                    <section class="">
                        <h1>Programando o Arduino</h1>
                        <p>Iremos precisar de algumas bibliotecas adicionais para o Arduino</p>
                        <p>WebSockets</p>
                        <p>ArduinoJson</p>
                    </section>

                    <section>
                        <h1>O básico</h1>
                        <pre><code>
void setup () {
    ...
}

void loop() {
    ...
}
                        </code></pre>
                    </section>

                    <section>
                        <h1>Projeto Final</h1>
                        <pre><code>
#include &lt;Arduino.h>
#include &lt;SPI.h>
#include &lt;Ethernet.h>
#include &lt;WebSocketsClient.h>
#include &lt;stdio.h>
#include &lt;ArduinoJson.h>

#define RED       5
#define GREEN    6
#define BLUE     7
long rgb[3];
long bright[3] = { 107, 67, 256};
long k;
                        </code></pre>
                    </section>

                    <section>
                        <pre><code>
String strJson;
byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress ip(192, 168, 1, 43);
WebSocketsClient webSocket;
                        </code></pre>
                    </section>

                    <section>
                        <pre><code>
void setup () {
  Serial.begin(115200);
  for (k=0; k<3; k++) {
    pinMode(RED + k, OUTPUT);
  }

  Ethernet.begin(mac, ip);
  delay(3000);
  webSocket.begin("192.168.1.33", 8081);
  webSocket.onEvent(webSocketEvent);
}

void loop() {
  webSocket.loop();
}
                        </code></pre>
                    </section>

                    <section>
                        <pre><code>
void webSocketEvent(WStype_t type, uint8_t * payload, size_t length) {
    StaticJsonBuffer<200> jsonBuffer;
    strJson = String((char *)payload);
    JsonObject& root = jsonBuffer.parseObject(strJson);
    const char* command = root["command"];
    const char* typeMens = root["type"];

    ...

}
                        </code></pre>
                    </section>

                    <section>
                        <pre><code>
switch(type) {
  case WStype_DISCONNECTED:
      Serial.println("[WSc] Disconnected!\n");
      delay(5000);
      webSocket.begin("192.168.1.33", 8081);
      break;
  case WStype_CONNECTED:
      break;
  case WStype_TEXT:
      if(String("arduino").equals(typeMens)) {
        if(String("verde").equals(command)) {
          analogWrite(RED,0.01);
          analogWrite(GREEN,255* bright[2]/256);
          analogWrite(BLUE,0.01);
        } else if(String("azul").equals(command)) {
          analogWrite(RED,0.01);
          analogWrite(GREEN,0.01);
          analogWrite(BLUE,255* bright[2]/256);
        } else if(String("vermelho").equals(command)) {
          analogWrite(RED,255* bright[2]/256);
          analogWrite(GREEN,0.01);
          analogWrite(BLUE,0.01);
        } else if(String("amarelo").equals(command)) {
          analogWrite(RED,255* bright[2]/256);
          analogWrite(GREEN,120 * bright[2]/256);
          analogWrite(BLUE,0.01);
        }
      }
      break;
}
                        </code></pre>
                    </section>
                </section>
                <section>
                    <h1>Protoboard</h1>
                    <img src="images/rgb-led-strips-mosfets.png" />
                </section>
                <section>
                    <h1>Resultado Final</h1>
                    <h2>Cor Atual <span id="corAtual"></span></h2>
                    <button class="button-arduino amarelo" data-value="amarelo">Amarelo</button>
                    <button class="button-arduino verde" data-value="verde">Verde</button>
                    <button class="button-arduino azul" data-value="azul">Azul</button>
                    <button class="button-arduino vermelho" data-value="vermelho">Vermelho</button>

                </section>

                <section>
                    <h1>Dúvidas?</h1>
                </section>

                <section>
                    <h1>Obrigado</h1>
                    Avalie <a href="https://legacy.joind.in/16678">https://legacy.joind.in/16678</a><br />
                    <a href="https://github.com/diegocpires/WebsocketLocaweb">https://github.com/diegocpires/WebsocketLocaweb</a><br />
                    <a href="https://github.com/diegocpires/ArduinoLocaweb">https://github.com/diegocpires/ArduinoLocaweb</a><br />

                </section>

                <!-- Sorteio -->
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
                overview: true,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,
                slideNumber: false,
                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
                    { src: 'js/code.min.js', async: true },
                    { src: 'plugin/zoom-js/zoom.js', async: true }
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
    <script src="js/plugins/NoSleep.min.js"></script>

    <script>
      window.onload = function () {
        var reactCanvas = document.getElementById('react-sonho'),
            ctx = reactCanvas.getContext('2d'),
            drawing = false;
        window.toDraw = new Array;
        window.toDrawReceived = new Array;

        var radius = 10;

        window.drawCircle = function (context, x, y) {
          context.fillStyle = '#fff';

          context.beginPath();
          context.moveTo(x, y);
          context.arc(x, y, radius, 0, 2 * Math.PI, false);
          context.fill();
        };

        function toggleDrawing (evt) {
          drawing = !drawing;
          evt.preventDefault();
        }

        window.addEventListener('mouseup', toggleDrawing);
        window.addEventListener('mousedown', toggleDrawing);

        reactCanvas.addEventListener('mousemove', function (e) {
          if (!drawing) return;

          toDraw.push({
            x: e.offsetX + 30,
            y: e.layerY + 30
          });
        });

        setInterval(function () {
          if (window.drawingWs && toDraw.length) {
            window.drawingWs.send(JSON.stringify({
              type: 'coords',
              coords: toDraw
            }));
          }

          var draw = toDraw.concat(toDrawReceived);
          toDrawReceived = new Array;
          toDraw = new Array;

          for (var i in draw) {
            var coords = draw[i];
            drawCircle(ctx, coords.x, coords.y);

            draw.splice(draw.indexOf(coords), 1);
          }
        }, 300);

        window.drawingWs = new WebSocket('ws://'+websocketsAddress);
        window.drawingWs.onopen = function () {
          window.onresize();
        };

        window.drawingWs.onmessage = function (e) {
          var msg = JSON.parse(e.data);

          if (msg.type == 'coords') {
            toDrawReceived = toDrawReceived.concat(msg.coords);
          }
        };

        window.onresize = function () {
          reactCanvas.width = 600;
          reactCanvas.height = 800;
        };

      };
    </script>

	</body>
</html>
