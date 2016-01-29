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