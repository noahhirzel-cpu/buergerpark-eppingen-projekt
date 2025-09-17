<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bürgerpark Eppingen - Die Stadt, der Park und du!</title>

    <meta name="description" content="Der offizielle Webauftritt des Vereins Freunde des Bürgerparks Eppingen e.V. Hier finden Sie aktuelle Informationen, Events und Neuigkeiten rund um den Bürgerpark.">
    <meta name="keywords" content="Bürgerpark, Eppingen, Verein, Freunde des Bürgerparks, Gartenschau, Events, Gemeinschaft">


    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/lightbox.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/ueberuns.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/events.css') ?>">    
    <link rel="stylesheet" href="<?= base_url('assets/css/beiträge.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/bildergalerie.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/kontakt.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/impressum.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/agb.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/datenschutzerklaerung.css') ?>">






    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="icon" href="<?= base_url('assets/images/buepa_icon_2000_1600.png') ?>" type="image/png">
</head>
<body>
    
        <nav>
            <a href="<?= site_url('/') ?>"><img src='<?= base_url('assets/images/büpa_logo_voll.png') ?>' alt="Bürgerpark Logo"></a>
            
            <div class="nav-links" id="navLinks">
                <i class="fas fa-times-circle" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="<?= site_url('/') ?>">Home</a></li>
                    <li><a href="<?= site_url('ueber-uns') ?>">Über uns</a></li>
                    <li><a href="<?= site_url('events') ?>">Events</a></li>

                    <?php if (session()->get('isLoggedIn')): ?>
                        <li><a href="<?= site_url('beitraege') ?>">Beiträge verwalten</a></li>
                        <li><a href="<?= site_url('logout') ?>">Logout</a></li>
                    <?php else: ?>
                        <li><a href="<?= site_url('aktuelles') ?>">Beiträge</a></li>
                        <li><a href="<?= site_url('bildergalerie') ?>">Bildergalerie</a></li>
                        <li><a href="<?= site_url('kontakt') ?>">Kontakt</a></li>
                        <li><a href="<?= site_url('login') ?>">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
            <i class="fas fa-bars" onclick="showMenu()"></i>
        </nav>
