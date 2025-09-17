<?php $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/kontakt.css') ?>">
<?php $this->endSection() ?>

<!--Erfolgs- oder Fehlermeldungen anzuzeigen-->
<?php if (session()->getFlashdata('success')): ?>
    <div class="flash-message success">
        <?= session()->getFlashdata('success') ?>
    </div>
<?php endif; ?>

<?php if (session()->getFlashdata('error')): ?>
    <div class="flash-message error">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

<section class="header">
    <div class="text-box">
    <h1>Kontakte</h1>
    </div>
</section>

<!--Kontaktbeschreibung-->
<section class = "kontakt">
    <div class="row">
        <div class="kontakt-col">
            <div>
                <i class="fas fa-home"></i>
                <span>
                    <h5>Panoramastr. 14, 75031 Eppingen</h5>
                    <p>Deutschland, Badnerland</p>
                </span>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <span>
                    <h5><a href="tel:01715761110">0171 / 5761110</a></h5>
                    <p>Wir sind fast immer erreichbar</p>
                </span>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <span>
                    <h5><a href="mailto:info@buergerpark-eppingen.de">info@buergerpark-eppingen.de</a></h5>
                    <p>Schreib uns gerne eine Mail!</p>
                </span>
            </div>
            <div>
                <i class="fab fa-instagram"></i>
                <span>
                    <h5><a href="https://www.instagram.com/buergerpark_eppingen/">buergerpark_eppingen</a></h5>
                    <p>Schaue gerne bei unserem Instagram vorbei!</p>
                </span>
            </div>
        </div>
    
    <!--Kontaktformular-->
    <div class="kontakt-col">
    <form action="<?= site_url('kontakt/senden') ?>" method="post">
        
        <?= csrf_field() ?> 
        
        <input type="text" name="name" placeholder="Gib deinen Namen an" required>
        <input type="email" name="email" placeholder="Gib deine Email an" required>
        <input type="text" name="betreff" placeholder="Gib deinen Betreff an" required>
        <textarea rows="8" name="nachricht" placeholder="Deine Nachricht" required></textarea>
        <button type="submit" class="hero-btn red-btn">Sende Nachricht</button>
    </form>
</div>
</div>
</section>

<!--Google Maps-->
<section class = "maps">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3282.9665471408343!2d8.909924912661424!3d49.142478371252665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479784dfee426343%3A0x51ba2404d12e68de!2sPanoramastra%C3%9Fe%2014%2C%2075031%20Eppingen!5e1!3m2!1sde!2sde!4v1727945929063!5m2!1sde!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
</section>