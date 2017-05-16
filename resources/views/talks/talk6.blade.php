<!-- PALESTRA AUTOMAÇÃO RESIDENCIAL - DIEGO PIRES//-->
                <section class="" data-on-start="@p6" data-slide-name="automação"  data-slide-uid="@diegopires" id="inicio-diegopires">
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
                        <li><a href="mailto:diegopires@php.net">diegopires@php.net</a></li>
                        <li><a href="https://github.com/diegocpires">https://github.com/diegocpires</a></li>
                    </ul><br />
                </section>

                <section class="">
                    <h3>Participe</h3>
                    <h2>Contribua</h2>
                    <h1>Evolua</h1>
                    <a href="http://phpsp.org.br">phpsp.org.br</a>
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

                <section class="poll" data-number="arduino-2">
                    <p>Enquete</p>
                    <p>Você tem conhecimentos em eletrônica?</p>

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
                            <li data-fragment-index="0" class="fragment visible">Digital<p>Lê e escreve somente dois estados. LOW e HIGH. (em tese)</p></li>
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