/*JS Handy Menü*/
// Holt das Element mit der ID "navLinks"
var navLinks = document.getElementById("navLinks");
// Funktion zum Anzeigen des Menüs
function showMenu(){
    navLinks.style.right = "0"; // Setzt die Position des Menüs auf 0, um es anzuzeigen
}
// Funktion zum Verbergen des Menüs
function hideMenu(){
    navLinks.style.right = "-200px"; // Setzt die Position des Menüs auf -200px, um es zu verbergen
}

// Kontaktformular
function handleSubmit(e){
    // Verhindert das Standardverhalten des Formulars (Seitenneuladen)
    e.preventDefault();
   
    // Holt die Werte der Eingabefelder
    const vorname = document.getElementById('vorname').value;
    const nachname = document.getElementById('nachname').value;
    const email = document.getElementById('email').value;
    const anliegen = document.getElementById('anliegen').value;
    const nachricht = document.getElementById('nachricht').value;

    // Erstellt ein Datenobjekt mit den Eingabewerten
    const data = {
        vorname: vorname,
        nachname: nachname,
        email: email,
        anliegen: anliegen,
        nachricht: nachricht
    };

    // Sendet die Daten an eine Funktion zur weiteren Verarbeitung
    sendMessage(data);
}


// Hilfe von Jeanette und Soner
async function sendMessage(data){

    // Sendet eine POST-Anfrage an die angegebene URL
    fetch("https://webhook.site/b238d2a4-e2bc-4010-8b0f-10043e12e528", {
        method: "POST",
        mode: "no-cors", // Kein CORS-Modus (Cross-Origin Resource Sharing)
        body: JSON.stringify(data) // Wandelt das Datenobjekt in einen JSON-String um
    })
   
}