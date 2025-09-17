<section class="header">
    <div class="text-box">
        <h1>Beiträge</h1>
    </div>
</section>

<section class="beiträge">
    <div class="row">
        <div class="beiträge-col">

            <?php if (! empty($beitraege) && is_array($beitraege)): ?>
                <?php foreach ($beitraege as $beitrag): ?>
                    <article class="beitrag-item">
                        <h1><?= esc($beitrag['titel']) ?></h1>
                        <p><?= nl2br(esc($beitrag['inhalt'])) ?></p>
                    </article>
                <?php endforeach; ?>
            <?php else: ?>
                <article class="beitrag-item">
                    <h1>Keine Beiträge gefunden</h1>
                    <p>Es sind momentan keine Beiträge verfügbar.</p>
                </article>
            <?php endif; ?>

        </div>
        <div class="beiträge-col">
            <img src="<?= base_url('assets/images/Beisammensein.png') ?>" alt="Beisammensein" class="beitrag-bild">
        </div>
    </div>
</section>