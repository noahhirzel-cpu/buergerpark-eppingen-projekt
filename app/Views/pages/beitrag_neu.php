<section class="header">
    <div class="text-box">
        <h1>Neuen Beitrag erstellen</h1>
    </div>
</section>

<section class="kontakt"> <div class="row">
        <div class="kontakt-col">
            <form action="<?= site_url('beitraege/speichern') ?>" method="post">

                <?= csrf_field() ?> 
                
                <?php if(isset($validation)):?>
                    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif;?>
                
                <input type="text" name="titel" placeholder="Titel des Beitrags" required>

                <textarea rows="8" name="inhalt" placeholder="Inhalt des Beitrags" required></textarea>

                <button type="submit" class="hero-btn red-btn">Beitrag speichern</button>
            </form>
        </div>
    </div>
</section>