<section class="header">
<div class="text-box">
    <h1>Herzlich Willkommen</h1>
    <p>Die Stadt, der Park und du!</p>   
    <a href="<?= site_url('ueber-uns') ?>" class="hero-btn">Hier erfahrst du mehr über uns!</a>
</div>
</section>

<section class="news">
    <h1>Aktuelles</h1>
    <p>Sei auf dem neusten Stand, was im Rahmen des Vereins passiert.</p>
    
    <div class="row">
        <div class="news-col">
            <h3>Jahreshauptversammlung 2024</h3>
            <p>Im Rahmen der Jahreshauptversammlung wurden am 02.03.2024 turnusgemäß Wahlen der Vorstandschaft durchgeführt. Mit neuem Konzept leitet als zukünftiger 1. Vorsitzender Jens Mühling mit dem Verein „Freunde des Bürgerparks Eppingen“ einen Generationenumbruch ein.
                Dabei soll der Bürgerpark in verschiedenen Bereichen belebt werden und der Verein sowohl landschaftlich/gärtnerisch, als auch gesellschaftlich/kulturell und sportlich/bewegungsorientiert breit aufgestellt werden.
        </div>
        <div class="news-col">
            <h3>Interview im SWR</h3>
            <p> Die Möglichkeiten des ehemaligen Gartenschaugeländes sollen genutzt, Spaß und gute Laune bei „Jung und Alt“ und Lust auf Ehrenamt machen.
                Vor allem soll das Gefühl und Erlebte aus dem Gartenschau-Sommer 2022 mitgenommen werden.</p>
            <img src="<?= base_url('assets/images/Interview.png') ?>" alt="Interview mit SWR">
        </div>
        <div class="news-col">
            <h3>Frühschoppen</h3>
            <p>Im Rahmen der Jahreshauptversammlung wurden am 02.03.2023 turnusgemäß Wahlen der Vorstandschaft durchgeführt. Mit neuem Konzept leitet als zukünftiger 1. Vorsitzender Jens Mühling mit dem Verein „Freunde des Bürgerparks Eppingen“ einen Generationenumbruch ein.
                Dabei soll der Bürgerpark in verschiedenen Bereichen belebt werden und der Verein sowohl landschaftlich/gärtnerisch, als auch gesellschaftlich/kulturell und sportlich/bewegungsorientiert breit aufgestellt werden.</p>
        </div>
    </div>
</section>

<div class="witz">
    <h1>Witz des Tages</h1>
    <div id="joke" class="joke-box">
        <p><?= isset($witz) ? esc($witz) : 'Witz konnte nicht geladen werden.' ?></p>
    </div>
    <button onclick="fetchJoke()" class="hero-btn">Neuer Witz</button>
</div>

<section class="events">
    <h1>Unsere Events</h1>
    <p>Wir organisieren regelmäßig verschiedene Veranstaltungen und Events, um die Gemeinschaft zu stärken und den Park zu beleben.
        <br>Von Pflanzaktionen über Sommerfeste bis hin zu kulturellen Veranstaltungen – bei uns ist für jeden etwas dabei!</p>
    
        <div class="row">
            <div class="events-col">
                <img src="<?= base_url('assets/images/Weinstand.png') ?>" alt="Weinstand">
                <div class="layer">
                    <h3>Weinstand</h3>
                </div>
            </div>
            <div class="events-col">
                <img src="<?= base_url('assets/images/Diner_en_Blonc.png') ?>" alt="Diner en Blonc">
                <div class="layer">
                    <h3>Diner en Blonc</h3>
                </div>
            </div>
            <div class="events-col">
                <img src="<?= base_url('assets/images/Gartenarbeit.png') ?>" alt="Gartenarbeit">
                <div class="layer">
                    <h3>Gartenarbeit</h3>
                </div>
            </div>
        </div>
        <a href="<?= site_url('events') ?>" class="hero-btn">Erfahre mehr über unsere Events!</a>

</section>

<section class = "beitritt">
    <h1>Du willst nichts mehr verpassen? <br>Dann trete hier unserer WhatsApp-Community bei und sei immer auf dem neusten Stand!</h1>
    <a href="https://chat.whatsapp.com/IOHNlgmncCp2yQafZdfPUi" class="hero-btn" target="_blank" rel="noopener noreferrer">Komm in die Gruppe!</a>
</section>

<section class="vorstandschaft">
    <h1>Unsere Vorstandschaft</h1>
    <p>Ehrenamtliche Arbeit mit Freude und Leidenschaft!</p>

    <div class="row">
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Vorstand_Jens.png') ?>" alt="1.Vorstand">
            <div class="layer">
                <h3>1. Vorsitzender<br>Jens Mühling</h3>
            </div>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Vorstand_Pflaumi.png') ?>" alt="2.Vorstand">
            <div class="layer">
                <h3>2. Vorsitzender<br>Uwe Pflaumer</h3>
            </div>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Vorstandschaft1.png') ?>" alt="Vorstandschaft">
            <div class="layer">
                <h3>Vorstand</h3>                    
            </div>
        </div>
    </div>
    <a href="<?= site_url('aktuelles') ?>" class="hero-btn">Erfahre mehr Beiträge!</a>
    <p></p>
</section>

<div class="cookie hide">
    <div class="cookie">
        <img src="<?= base_url('assets/images/buepa_icon_2000_1600.png') ?>" alt="BüPA-Logo">
        <div class="cookie-content">
            <h1>Cookies</h1>
            <p>Alle Informationen dazu finden Sie in unserer Datenschutzerklärung.</p>
            <button class="hero-btn" onclick="cookiesClicked()">Akzeptieren</button>        
            <button class="hero-btn" id="rejectBtn">Ablehnen</button>
            <br><a href="<?= site_url('datenschutz') ?>">Lerne mehr</a>
        </div>
    </div>
</div>