<section class="header">
    <div class="text-box">
        <h1>Registrieren</h1>
    </div>
</section>
<section class="kontakt">
    <div class="row">
        <div class="kontakt-col">
            <form action="<?= site_url('auth/versucheRegister') ?>" method="post">
                <?= csrf_field() ?>
                <input type="text" name="username" placeholder="Benutzername" required>
                <input type="password" name="password" placeholder="Passwort" required>
                <button type="submit" class="hero-btn red-btn">Registrieren</button>
            </form>
        </div>
    </div>
</section>