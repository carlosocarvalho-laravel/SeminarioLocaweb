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