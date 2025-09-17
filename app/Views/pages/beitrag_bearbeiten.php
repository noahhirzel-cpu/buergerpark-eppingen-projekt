<section class="header">
    <div class="text-box">
        <h1>Beitrag bearbeiten</h1>
    </div>
</section>

<section class="kontakt">
    <div class="row">
        <div class="kontakt-col">
            <form action="<?= site_url('beitraege/update/' . $beitrag['id']) ?>" method="post">
            
                <?= csrf_field() ?>

                <?php if(isset($validation)):?>
                    <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 10px;">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif;?>

                <label for="titel">Titel</label>
                <input type="text" name="titel" value="<?= esc($beitrag['titel']) ?>" required>
                
                <label for="inhalt">Inhalt</label>
                <textarea rows="8" name="inhalt" required><?= esc($beitrag['inhalt']) ?></textarea>
                
                <button type="submit" class="hero-btn red-btn">Änderungen speichern</button>
            </form>
        </div>
    </div>
</section>