<!-- PSR-7 e os Middlewares - Daniel Gimenes -->
                <section>
                    <h1>PSR-7 e os Middlewares</h1>
                </section>

                <section>
                    <h2>PSR-7 e a <a>revolução</a> dos Middlewares</h2>
                </section>

                <section>
                    <h2>Daniel Gimenes</h2>
                    <ul>
                        <li>Trabalha com PHP há aproximadamente 6 anos</li>
                        <li>Engenheiro de Software na Maestrooo</li>
                        <li>Graduando em Sistemas de Informação pela UNISAL</li>
                        <li>ZF <3</li>
                    </ul>
                    <p><a href="http://twitter.com/danizord">@Danizord</a></p>
                </section>

                <section>
                    <blockquote>&ldquo;PHP was built for the web&rdquo;</blockquote>
                </section>

                <section>
                    <h2>Protocolo HTTP</h2>
                    <ul>
                        <li>Client/Server</li>
                        <li>Request/Response</li>
                    </ul>
                </section>

                <section>
                    <h2>Request</h2>
                    <pre><code class="http">
POST /path HTTP/1.1
Host: exemplo.com.br
Accept: text/html

Boa tarde, tudo bem com o senhor?
                    </code></pre>
                </section>

                <section>
                    <h2>Response</h2>
                    <pre><code class="http">
HTTP/1.1 200 OK
Content-Type: text/html

Eae mano! Eu to bão, e vc?
                    </code></pre>
                </section>

                <section>
                    <p>Como o <a>PHP</a> trabalha com o protocolo <a>HTTP?</a></p>
                </section>

                <section>
                    <h2>HTTP Request URI</h2>
                    <ul class="fragment">
                        <li>$_SERVER['SCHEME'];</li>
                        <li>$_SERVER['HTTP_X_FORWARDED_PROTO'];</li>
                        <li>$_SERVER['HOST'];</li>
                        <li>$_SERVER['SERVER_NAME'];</li>
                        <li>$_SERVER['SERVER_ADDR'];</li>
                        <li>$_SERVER['REQUEST_URI'];</li>
                        <li>$_SERVER['UNENCODED_URL'];</li>
                        <li>$_SERVER['HTTP_X_ORIGINAL_URL'];</li>
                        <li>$_SERVER['ORIG_PATH_INFO'];</li>
                        <li>$_SERVER['QUERY_STRING'];</li>
                    </ul>
                </section>

                <section>
                    <h2>HTTP Request Headers</h2>
                    <ul>
                        <li>Também estão no $_SERVER, com o prefixo "HTTP_"</li>
                        <li>Mas nem todos estão prefixados</li>
                        <li>Normalização contraintuitiva</li>
                    </ul>
                </section>

                <section>
                    <h2>$_POST</h2>
                    <ul>
                        <li class="fragment">Obviamente, só funciona com o método POST</li>
                        <li class="fragment">
                            Só funciona se o content type for
                            <ul>
                                <li>application/x-www-form-urlencoded</li>
                                <li>form/multipart</li>
                            </ul>
                        </li>
                    </ul>
                </section>

                <section>
                    <h2>File uploads</h2>
                    <ul>
                        <li class="fragment">$_FILES</li>
                        <li class="fragment">Só com funciona com o método POST</li>
                    </ul>
                </section>

                <section>
                    <h2>File uploads</h2>
                    <p>O que você espera:</p>
                    <pre><code class="php">
[
    'files' => [
        0 => [
            'name' => 'file0.txt',
            'type' => 'text/plain',
            /* etc. */
        ],
        1 => [
            'name' => 'file1.html',
            'type' => 'text/html',
            /* etc. */
        ],
    ],
];
                    </code></pre>
                </section>

                <section>
                    <h2>File uploads</h2>
                    <p>É isso que o PHP te dá:</p>
                    <pre><code class="php">
[
    'files' => [
        'name' => [
            0 => 'file0.txt',
            1 => 'file1.html',
        ],
        'type' => [
            0 => 'text/plain',
            1 => 'text/html',
        ],
        /* etc. */
    ],
];
                    </code></pre>
                </section>

                <section>
                    <h2>Streams</h2>
                    <ul>
                        <li class="fragment">O PHP fornece abstrações para os streams de entrada e saída</li>
                        <li class="fragment">Até o PHP 5.6, o php://input é read-once</li>
                        <li class="fragment">php://output - "Headers already sent"</li>
                    </ul>
                </section>

                <section>
                    <h2>Framework é para os fracos</h2>
                    <p class="fragment">Você pode implementar tudo isso <a>na mão!</a></p>
                    <img src="/images/danizord/nope.gif" class="fragment">
                </section>
                <section>
                    <p>Ok, então vamos escolher uma <a>abstração</a> do HTTP</p>
                    <ul class="fragment">
                        <li class="fragment">Aura\Http</li>
                        <li class="fragment">Illuminate\Http</li>
                        <li class="fragment">React\Http</li>
                        <li class="fragment">Respect\Rest</li>
                        <li class="fragment">Symfony\HttpFoundation</li>
                        <li class="fragment">Zend\Http</li>
                        <li class="fragment">...</li>
                    </ul>
                </section>

                <section>
                    <h2>Zend\Http</h2>
                    <ul>
                        <li>Zend\Http\Request</li>
                        <li>Zend\Http\Response</li>
                    </ul>
                </section>

                <section data-background="#ffffff" data-transition="slide-in fade-out">
                    <p><img src="/images/danizord/zend-req-app-res.png"></p>
                    <p style="color:black">
                        <span class="fragment">Problem?</span>
                        <span class="fragment"> Dependência</span>
                    </p>
                    <p style="color:red" class="fragment">Acoplamento :(</p>
                </section>

                <section data-background="#ffffff" data-transition="fade-in slide-out">
                    <p><img src="/images/danizord/zend-req-guard-app-res.png"></p>
                    <p style="color:black">
                        <span class="fragment">Interoperabilidade?</span>
                    </p>
                    <p style="color:red" class="fragment">Not today :(</p>
                </section>

                <section data-background="/images/danizord/php-fig-bg.jpg">
                    <h1>PHP-FIG</h1>
                    <h2>The PHP Framework Interop Group</h2>
                </section>

                <section data-background="/images/danizord/php-fig-bg.jpg">
                    <h1>PSR-7</h1>
                </section>

                <section>
                    <ul>
                        <li>Psr\Http\Message\MessageInterface</li>
                        <li>Psr\Http\Message\RequestInterface</li>
                        <li>Psr\Http\Message\ResponseInterface</li>
                        <li>Psr\Http\Message\ServerRequestInterface</li>
                        <li>Psr\Http\Message\StreamInterface</li>
                        <li>Psr\Http\Message\UploadedFileInterface</li>
                        <li>Psr\Http\Message\UriInterface</li>
                    </ul>
                </section>

                <section data-background="#ffffff">
                    <img src="/images/danizord/psr-7-interfaces.png">
                </section>

                <section data-background="#ffffff">
                    <p><img src="/images/danizord/psr-req-app-res.png"></p>
                    <p style="color:black">
                        <span class="fragment">Depende da abstração.</span>
                        <span class="fragment">Permite variar a implementação.</span>
                    </p>
                    <p style="color:blue" class="fragment">Aí sim! :D</p>
                </section>

                <section data-background="#ffffff">
                    <p><img src="/images/danizord/psr-req-guard-app-res.png"></p>
                    <p style="color:black" class="fragment">Depende da abstração.</p>
                    <p style="color:black" class="fragment">Funciona com qualquer implementação.</p>
                    <p style="color:blue" class="fragment">Funciona em qualquer framework.</p>
                </section>

                <section data-background="/images/danizord/whoa.gif">
                </section>

                <section>
                    <h2>Até ontem:</h2>
                    <ul>
                        <li class="fragment">Laravel package: Entrust</li>
                        <li class="fragment">Symfony bundle: SecurityBundle</li>
                        <li class="fragment">Zend Framework module: ZfcRbac</li>
                    </ul>
                </section>

                <section>
                    <h2>De hoje em diante:</h2>
                    <h1 class="fragment">Middlewares</h1>
                </section>

                <section data-background="#ffffff">
                    <img src="/images/danizord/lambda.png">
                </section>

                <section>
                    <h2>Assinaturas de middlewares</h2>
                    <pre class="fragment"><code class="hljs php" data-trim>
function (ServerRequestInterface $request): ResponseInterface
                    </code></pre>

                    <pre class="fragment"><code class="hljs php" data-trim>
function (
    ServerRequestInterface $request,
    ResponseInterface $response
): ResponseInterface
                    </code></pre>

                    <pre class="fragment"><code class="hljs php" data-trim>
function (
    ServerRequestInterface $request,
    ResponseInterface $response,
    callable $next
): ResponseInterface
                    </code></pre>
                </section>

                <section>
                    <h2>Unix philosophy</h2>
                </section>

                <section>
                    <h2>Middleware dispatchers</h2>
                    <ul>
                        <li>Relay</li>
                        <li>Slim 3</li>
                        <li>Penny</li>
                        <li>Zend\Stratigility</li>
                    </ul>
                </section>

                <section>
                    <h1>?</h1>
                </section>

                <section>
                    <h2>Obrigado!</h2>
                    <p>Daniel Gimenes</p>
                    <p><a href="http://twitter.com/danizord">http://twitter.com/Danizord</a></p>
                    <p><a href="http://github.com/danizord">http://github.com/Danizord</a></p>
                    <p>Feedback plx: <a href=https://joind.in/talk/c05e3">https://joind.in/talk/c05e3</a></p>
                </section>