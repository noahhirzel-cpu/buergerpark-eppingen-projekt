<?= $this->extend('templates/layout') ?>

<?php // CSS-Platzhalter füllen ?>
<?= $this->section('styles') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/events.css') ?>">
<?= $this->endSection() ?>

<?php // Inhalts-Platzhalter füllen ?>
<?= $this->section('content') ?>

<section class="header">
    <div class="text-box">
    <h1>Events</h1>
    </div>
</section>

<!--Pfeiler | class = news ist gleich aufgebaut, wie der Home Screen-->
<section class="news">
    <h1>Was wir tun</h1>
    <p>Was uns auszeichnet, wird in unseren Pfeilern beschrieben.</p>
    
    <div class="row">
        <div class="news-col">
            <h3>sportlich</h3>
            <p>Bei uns steht Bewegung im Mittelpunkt. Ob Fußball, Yoga oder Wandern – wir fördern körperliche Fitness und Spaß an der Bewegung. Gemeinsam erreichen wir unsere sportlichen Ziele und unterstützen uns gegenseitig.</p>
        </div>
        <div class="news-col">
            <h3>gärtnerisch</h3>
            <p> Unser Garten ist ein Ort der Entspannung und des Wachstums. Hier pflanzen wir Blumen, Gemüse und Kräuter, pflegen die Beete und genießen die Natur. Die Gartenarbeit verbindet uns und lässt uns die Früchte unserer gemeinsamen Mühen ernten.</p>
        </div>
        <div class="news-col">
            <h3>gemeinsam</h3>        
            <p>Gemeinschaft wird bei uns großgeschrieben. Wir organisieren regelmäßige Treffen, Feste und Projekte, bei denen jeder willkommen ist. Zusammen schaffen wir eine Atmosphäre des Zusammenhalts und der Freundschaft, in der sich jeder wohlfühlt.</p>
        </div>
    </div>
</section>

<section class="vorstandschaft">
    <h1>Unsere Events</h1>
    <p>Für groß und klein, ob jung oder alt. Jeder kann bei uns vorbeischauen!</p>

    <div class="row">
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Biergarten4.png') ?>" alt="Biergarten am Schwanen">
            <h3>Biergarten am Schwanen</h3>
            <p>Die kleine grüne Oase im Herzen Eppingens ist schon diesen Sommer ein Vorbote der Gartenschau. Der Garten des frisch renovierten Schwanen, der im Blumenjahr den Treffpunkt Baden-Württemberg beheimaten wird, ist ab Juli bei schönem Wetter ein After-Work-Treffpunkt und Wochenendausflugziel.
                <br>Im Schatten ein kühles Getränk mit Freunden genießen, ein Stück Kuchen am Nachmittag oder nach Feierabend etwas leckeres Essen? Das Angebot der Gastronomie lockt mit vielfältigen regionalen Gerichten, vom kleinen Snack für zwischendurch bis zur zünftigen Biergartenmahlzeit.
                <br>Besonders gut lässt es sich in den Sonnenliegen relaxen. Zwischen Kunst und Grün kann man hier in den Abendstunden sorgenfrei die Seele baumeln lassen.</p>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Weinstand.png') ?>" alt="Weinstand">
            <h3>Weinstand beim Festivalsommer</h3>
            <p>Der Weinstand, der von Bürgerpark aufgebaut wurde, war ein Highlight des Sommerfestivals in Eppingen. Mit großer Begeisterung wurde er von allen Bürgern aufgenommen.
               <br>Die gemütliche Atmosphäre und die erlesenen Weine trugen dazu bei, dass der Weinstand zu einem beliebten Treffpunkt für Jung und Alt wurde. Die Besucher genossen die lauen Sommerabende bei einem Glas Wein und guten Gesprächen.
               <br>Besonders hervorzuheben ist die Vielfalt der angebotenen Weine, die von lokalen Winzern stammten. Diese Unterstützung der regionalen Wirtschaft wurde von den Bürgern sehr geschätzt und trug zur besonderen Stimmung bei.
               <br>Der Erfolg des Weinstands zeigt, wie wichtig solche Gemeinschaftsprojekte für das soziale Leben in Eppingen sind. Sie fördern nicht nur den Zusammenhalt, sondern bieten auch eine Plattform für kulturellen Austausch und gemeinsames Erleben.</p>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Gartenarbeit.png') ?>" alt="Gartenarbeit">
            <h3>Gemeinsam bei der Gartenarbeit</h3>
            <p>An einem sonnigen Tag versammeln wir uns, um gemeinsam im Garten zu arbeiten. Mit Schaufeln und Gießkannen bewaffnet, pflanzen wir Blumen, jäten Unkraut und pflegen das Gemüsebeet. Während wir arbeiten, tauschen wir Geschichten aus und genießen die Gesellschaft der anderen.
               <br>Die Kinder helfen begeistert mit, und wir machen eine Pause, um selbstgemachte Snacks zu teilen. Am Ende des Tages bewundern wir stolz unser Werk: ein blühender Garten, der nicht nur schön aussieht, sondern auch Erinnerungen und Freundschaften wachsen lässt.</p>
        </div>
    </div>
</section>

<section class="vorstandschaft">
    <div class="row">
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/Diner_en_Blonc.png') ?>" alt="Diner En Blonc">
            <h3>Diner En Blonc</h3>
            <p>Die kleine grüne Oase im Herzen Eppingens ist schon diesen Sommer ein Vorbote der Gartenschau. Der Garten des frisch renovierten Schwanen, der im Blumenjahr den Treffpunkt Baden-Württemberg beheimaten wird, ist ab Juli bei schönem Wetter ein After-Work-Treffpunkt und Wochenendausflugziel.
                <br>Im Schatten ein kühles Getränk mit Freunden genießen, ein Stück Kuchen am Nachmittag oder nach Feierabend etwas leckeres Essen? Das Angebot der Gastronomie lockt mit vielfältigen regionalen Gerichten, vom kleinen Snack für zwischendurch bis zur zünftigen Biergartenmahlzeit.
                <br>Besonders gut lässt es sich in den Sonnenliegen relaxen. Zwischen Kunst und Grün kann man hier in den Abendstunden sorgenfrei die Seele baumeln lassen.</p>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/helferfest.png') ?>" alt="Helferfest">
            <h3>Helferfest</h3>
            <p>Der Weinstand, der von Bürgerpark aufgebaut wurde, war ein Highlight des Sommerfestivals in Eppingen. Mit großer Begeisterung wurde er von allen Bürgern aufgenommen.
               <br>Die gemütliche Atmosphäre und die erlesenen Weine trugen dazu bei, dass der Weinstand zu einem beliebten Treffpunkt für Jung und Alt wurde. Die Besucher genossen die lauen Sommerabende bei einem Glas Wein und guten Gesprächen.
               <br>Besonders hervorzuheben ist die Vielfalt der angebotenen Weine, die von lokalen Winzern stammten. Diese Unterstützung der regionalen Wirtschaft wurde von den Bürgern sehr geschätzt und trug zur besonderen Stimmung bei.
               <br>Der Erfolg des Weinstands zeigt, wie wichtig solche Gemeinschaftsprojekte für das soziale Leben in Eppingen sind. Sie fördern nicht nur den Zusammenhalt, sondern bieten auch eine Plattform für kulturellen Austausch und gemeinsames Erleben.</p>
        </div>
        <div class="vorstandschaft-col">
            <img src="<?= base_url('assets/images/skiausfahrt.png') ?>" alt="Skiausfahrt">
            <h3>Skiausfahrt</h3>
            <p>An einem sonnigen Tag versammeln wir uns, um gemeinsam im Garten zu arbeiten. Mit Schaufeln und Gießkannen bewaffnet, pflanzen wir Blumen, jäten Unkraut und pflegen das Gemüsebeet. Während wir arbeiten, tauschen wir Geschichten aus und genießen die Gesellschaft der anderen.
               <br>Die Kinder helfen begeistert mit, und wir machen eine Pause, um selbstgemachte Snacks zu teilen. Am Ende des Tages bewundern wir stolz unser Werk: ein blühender Garten, der nicht nur schön aussieht, sondern auch Erinnerungen und Freundschaften wachsen lässt.</p>
        </div>
    </div>
</section>

<!--Google Calender | Einsicht für Events (Beispielansicht mit meinem Googlekonto) | Eintrag in Console kann ignoriert werden, keine Beeinträchtigung der Funktionalität | Test mit eigener Mailadresse -->
<section class="calendar">
    <h1>Unser Kalender</h1>
    <p>Damit du immer auf dem neusten Stand bleibst!</p>
    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=1&ctz=Europe%2FBerlin&showPrint=0&showTz=0&showTabs=0&src=bm9haC5oaXJ6ZWxAZ21haWwuY29t&color=%23039BE5" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
</section>
    
