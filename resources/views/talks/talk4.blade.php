<!-- Slides JWT -->
                <!-- Ivan Rosolen -->
                <section data-on-start="@p4" data-slide-name="jwt"  data-slide-uid="@ivanrosolen">
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

                