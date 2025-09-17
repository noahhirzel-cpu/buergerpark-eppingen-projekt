<section class="header">
    <div class="text-box">
        <h1>Login</h1>
        <p>Bitte melde dich an, um die Inhalte zu verwalten.</p>
    </div>
</section>

<section class="kontakt">
    <div class="row">
        <div class="kontakt-col">
            <form action="<?= site_url('auth/versucheLogin') ?>" method="post">

                <?= csrf_field() ?>

                <input type="text" name="username" placeholder="Benutzername" required>
                <input type="password" name="password" placeholder="Passwort" required>

                <button type="submit" class="hero-btn red-btn">Anmelden</button>
            </form>
        </div>
    </div>
</section>