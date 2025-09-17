
//JS Handy Menü
// Funktion zum Anzeigen des Menüs
function showMenu() {
    // Sucht das Element erst, wenn die Funktion aufgerufen wird. Das ist sicher.
    var navLinks = document.getElementById("navLinks");
    if (navLinks) { // Sicherheitsprüfung, falls das Element doch mal fehlt
        navLinks.style.right = "0";
    }
}
// Funktion zum Verstecken des Menüs
function hideMenu() {
    // Sucht das Element erst, wenn die Funktion aufgerufen wird.
    var navLinks = document.getElementById("navLinks");
    if (navLinks) { // Sicherheitsprüfung
        navLinks.style.right = "-200px";
    }
}

//Cookiefläche
// Funktion, die aufgerufen wird, wenn der Cookie-Button geklickt wird
function cookiesClicked() {
    const cookieBanner = document.querySelector('.cookie');
    if (cookieBanner) {
        cookieBanner.parentNode.removeChild(cookieBanner);
    }
    document.cookie = "CookieBy=CodingNepal; max-age=" + 60 * 60 * 24 * 30 + "; path=/";
    sessionStorage.setItem('cookieAccepted', 'true');
}

// Überprüfen, ob das Cookie gesetzt ist oder ob das Banner bereits akzeptiert wurde
window.onload = () => {
    const cookieBanner = document.querySelector('.cookie');
    if (cookieBanner && document.cookie.indexOf("CookieBy=CodingNepal") === -1 && !sessionStorage.getItem('cookieAccepted')) {
        cookieBanner.classList.remove('hide');
    }
}

// Funktion, um den "Ablehnen"-Button zu bewegen
const rejectButton = document.getElementById('rejectBtn');
if (rejectButton) {
    rejectButton.onmouseover = moveBtn;
}
function moveBtn() {
    const btn = document.getElementById('rejectBtn');
    const div = btn.parentElement;
    btn.style.bottom = Math.random() * (div.offsetHeight - btn.offsetHeight - 15) + 5 + "px";
    btn.style.right = Math.random() * (div.offsetWidth - btn.offsetWidth - 15) + 5 + "px";
}

// API-Witz des Tages!
// Asynchrone Funktion zum Abrufen eines Witzes von der API
async function fetchJoke() {
    const jokeElement = document.getElementById('joke');
    if (!jokeElement) {
        return;
    }

    try {
        const response = await fetch('https://v2.jokeapi.dev/joke/Any?lang=de');
        if (!response.ok) {
            throw new Error('Netzwerkantwort war nicht ok');
        }
        const data = await response.json();
        const joke = data.joke || `${data.setup} ... ${data.delivery}`;
        jokeElement.innerText = joke;
    } catch (error) {
        jokeElement.innerText = 'Fehler beim Laden des Witzes.';
        console.error('Fehler:', error);
    }
}
// Rufe die Funktion `fetchJoke` auf
fetchJoke();

//Sticky Header
// Fügt einen Event-Listener hinzu, der auf das Scroll-Ereignis des Fensters reagiert.
window.addEventListener('scroll', function() {
    // Holt sich das <nav>-Element aus dem HTML.
    const nav = document.querySelector('nav');
    
    // Prüft, ob die vertikale Scroll-Position größer als 50 Pixel ist.
    // Das bedeutet, der User hat schon ein kleines Stück nach unten gescrollt.
    if (window.scrollY > 50) {
        // Wenn ja, füge die CSS-Klasse 'scrolled' zur Navigation hinzu.
        nav.classList.add('scrolled');
    } else {
        // Wenn nicht (der User ist wieder ganz oben), entferne die Klasse wieder.
        nav.classList.remove('scrolled');
    }
});

//Flash-Nachrichten ausblenden
// Funktion, die die Nachricht sucht und den Timer startet
function handleFlashMessage() {
    // Sucht nach dem Element mit der Klasse .flash-message
    const flashMessage = document.querySelector('.flash-message');

    // Prüft, ob ein solches Element überhaupt auf der Seite existiert
    if (flashMessage) {
        // Wenn ja, starte einen 3-Sekunden-Timer
        setTimeout(() => {
            // Nach 3 Sekunden, füge die Klasse .fade-out hinzu, um die
            // CSS-Animation (das Ausblenden) zu starten
            flashMessage.classList.add('fade-out');
        }, 3000); // 3000 Millisekunden = 3 Sekunden
    }
}

// Dieser Teil stellt sicher, dass die Funktion erst ausgeführt wird,
// wenn das gesamte HTML-Dokument geladen und bereit ist.
if (document.readyState === 'loading') {
    // Seite lädt noch, wir warten auf das "fertig" Signal.
    document.addEventListener('DOMContentLoaded', handleFlashMessage);
} else {
    // Seite ist bereits fertig geladen, wir können die Funktion sofort ausführen.
    handleFlashMessage();
}