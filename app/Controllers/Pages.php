<?php

namespace App\Controllers;

require ROOTPATH . 'vendor/autoload.php';

use App\Models\BeitragModel;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Pages extends BaseController
{

    private function checkAuth()
    {
        if (! session()->get('isLoggedIn')) {
            // Wenn der Benutzer NICHT eingeloggt ist, wird er zum Login umgeleitet.
            return redirect()->to('/login')->send();
        }
    }

    // Baut die STARTSEITE zusammen
    public function index()
    {
        // URL der öffentlichen Witz-API
    $witzApiUrl = 'https://official-joke-api.appspot.com/random_joke';

    
try {
    // cURL-Request, um den Witz zu holen
    $curl = curl_init($witzApiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // Setzt einen Timeout von 5 Sekunden. Wenn die API nicht antwortet, bricht es ab.
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 5); 
    $response = curl_exec($curl);

    // Prüft, ob bei der Anfrage ein Fehler aufgetreten ist
    if (curl_errno($curl)) {
        throw new \Exception('cURL-Fehler: ' . curl_error($curl));
    }
    
    curl_close($curl);

    // Die JSON-Antwort in ein PHP-Array umwandeln
    $witzData = json_decode($response, true);

    // Prüft, ob die Antwort die erwarteten Teile "setup" und "punchline" enthält
    if (isset($witzData['setup']) && isset($witzData['punchline'])) {
        $data['witz'] = $witzData['setup'] . ' - ' . $witzData['punchline'];
    } else {
        // Wenn nicht, werfen einen Fehler, damit der catch-Block greift
        throw new \Exception('Ungültige API-Antwort.');
    }

} catch (\Exception $e) {
    // Fallback, wenn die API mal nicht erreichbar ist oder die Antwort falsch ist
    $data['witz'] = 'Hoppla! Der Witz des Tages konnte leider nicht geladen werden.';
    log_message('error', 'Fehler beim Abrufen des Witzes: ' . $e->getMessage());
}


    $data['title'] = 'Herzlich Willkommen';

    echo view('templates/header', $data);
    echo view('pages/home', $data); 
    echo view('templates/footer');
    }

    // Baut die "ÜBER UNS"-SEITE zusammen
    public function ueberUns()
    {
        $data['title'] = 'Über Uns';

        echo view('templates/header', $data);
        echo view('pages/ueber-uns');
        echo view('templates/footer');
    }

    // Baut die "EVENTS"-SEITE zusammen
    public function events()
    {
        $data['title'] = 'Events';

        echo view('templates/header', $data);
        echo view('pages/events');
        echo view('templates/footer');
    }

    // NEU: ÖFFENTLICHE SEITE für alle Besucher
    public function aktuelles()
    {
        $beitragModel = new \App\Models\BeitragModel();
        $data = [
            'beitraege' => $beitragModel->orderBy('erstellt_am', 'DESC')->findAll(),
            'title'     => 'Aktuelles'
        ];
        echo view('templates/header', $data);
        echo view('pages/aktuelles', $data);
        echo view('templates/footer');
    }

    // GESCHÜTZT: Admin-Seite zum Verwalten der Beiträge
    public function beitraege()
    {
        $this->checkAuth(); // Nur für eingeloggte Benutzer
        $beitragModel = new \App\Models\BeitragModel();
        $data = [
            'beitraege' => $beitragModel->orderBy('erstellt_am', 'DESC')->findAll(),
            'title'     => 'Beiträge verwalten'
        ];
        echo view('templates/header', $data);
        echo view('pages/beitraege', $data);
        echo view('templates/footer');
    }

    // Zeigt das Formular zum Erstellen eines neuen Beitrags an
    public function beitragNeu()
    {
        $this->checkAuth();
        $data['title'] = 'Neuer Beitrag';

        echo view('templates/header', $data);
        echo view('pages/beitrag_neu'); 
        echo view('templates/footer');
    }

    // Speichert einen neuen Beitrag in der Datenbank
    public function beitragSpeichern()
    {
        $this->checkAuth();
        helper(['form']);

        $rules = [
            'titel'  => 'required|min_length[3]|max_length[128]',
            'inhalt' => 'required|min_length[10]'
        ];

        if ($this->validate($rules)) {
            // Validierung war erfolgreich.
            $beitragModel = new \App\Models\BeitragModel();

            $data = [
                'titel'       => $this->request->getPost('titel'),
                'inhalt'      => $this->request->getPost('inhalt'),
                'erstellt_am' => date('Y-m-d H:i:s'),
            ];

            // Daten werden gespeichert...
            $beitragModel->save($data);

            // ...und der Nutzer wird zur Übersichtsseite weitergeleitet.
            return redirect()->to('/beitraege');

        } else {
            // Validierung ist fehlgeschlagen.
            $data['validation'] = $this->validator;
            $data['title'] = 'Neuer Beitrag';

            echo view('templates/header', $data);
            echo view('pages/beitrag_neu', $data);
            echo view('templates/footer');
        }
    }

    // Zeigt das Formular zum Bearbeiten eines Beitrags an
    public function beitragBearbeiten($id = null)
    {
        $this->checkAuth();
        $beitragModel = new \App\Models\BeitragModel();
        $data['beitrag'] = $beitragModel->find($id); // 'find()' holt einen einzelnen Eintrag anhand der ID

        if (empty($data['beitrag'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Kann den Beitrag mit der ID '. $id .' nicht finden.');
        }

        $data['title'] = 'Beitrag bearbeiten';

        echo view('templates/header', $data);
        echo view('pages/beitrag_bearbeiten', $data); // Wir erstellen diese View gleich
        echo view('templates/footer');
    }

    // Speichert die Änderungen eines Beitrags
    public function beitragUpdate($id = null)
    {
        $this->checkAuth();
        helper(['form']);
        $rules = [
            'titel'  => 'required|min_length[3]|max_length[128]',
            'inhalt' => 'required|min_length[10]'
        ];

        if ($this->validate($rules)) {
            $beitragModel = new \App\Models\BeitragModel();
            $data = [
                'titel'  => $this->request->getPost('titel'),
                'inhalt' => $this->request->getPost('inhalt'),
            ];

            $beitragModel->update($id, $data); // 'update()' aktualisiert den Eintrag mit der gegebenen ID

            return redirect()->to('/beitraege');
        } else {
            // Validierung fehlgeschlagen, Formular erneut anzeigen
            $data['validation'] = $this->validator;
            return $this->beitragBearbeiten($id); // Ruft die Bearbeiten-Funktion erneut auf, um das Formular mit Fehlern anzuzeigen
        }
    }

    // Löscht einen Beitrag aus der Datenbank
    public function beitragLoeschen($id = null)
    {
        $this->checkAuth();
        $beitragModel = new \App\Models\BeitragModel();

        // 'delete()' ist die eingebaute Funktion von CodeIgniter, um einen Eintrag zu löschen
        $beitragModel->delete($id); 

        // Zurück zur Übersichtsseite weiterleiten
        return redirect()->to('/beitraege');
    }

    // Baut die "BILDERGALERIE"-SEITE zusammen
    public function bildergalerie()
    {
        $data['title'] = 'Bildergalerie';

        echo view('templates/header', $data);
        echo view('pages/bildergalerie');
        echo view('templates/footer');
    }

    // Baut die "KONTAKT"-SEITE zusammen
    public function kontakt()
    {
        $data['title'] = 'Kontakt';
        
        echo view('templates/header', $data);
        echo view('pages/kontakt');
        echo view('templates/footer');
    }

    //Kontaktformular
    public function handleContactForm()
    {
        // Die Validierung bleibt genau gleich
        $rules = [
            'name'      => 'required',
            'email'     => 'required|valid_email',
            'betreff'   => 'required',
            'nachricht' => 'required'
        ];
        if (! $this->validate($rules)) {
            return redirect()->to('/kontakt')->withInput()->with('errors', 'Bitte füllen Sie alle Felder korrekt aus.');
        }

        // PHPMailer initialisieren
        $mail = new PHPMailer(true);

        try {
            // -- Server-Einstellungen für Gmail --
            
            $mail->SMTPDebug = 2; 
            
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = getenv('MAIL_USERNAME'); 
            $mail->Password   = getenv('MAIL_PASSWORD'); 
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // -- Empfänger --
            $mail->setFrom('noah.hirzel@gmail.com', 'Kontaktformular Webseite');
            $mail->addAddress('noah.hirzel@gmail.com');
            $mail->addReplyTo($this->request->getPost('email'), $this->request->getPost('name'));

            // -- Inhalt --
            $mail->isHTML(false);
            $mail->Subject = "Neue Kontaktanfrage: " . $this->request->getPost('betreff');
            $mail->Body    = "Neue Nachricht vom Kontaktformular:\n\n" .
                             "Name: " . $this->request->getPost('name') . "\n" .
                             "E-Mail: " . $this->request->getPost('email') . "\n\n" .
                             "Nachricht:\n" . $this->request->getPost('nachricht');

            $mail->send();
            session()->setFlashdata('success', 'Vielen Dank! Deine Nachricht wurde erfolgreich gesendet.');

        } catch (Exception $e) {
            session()->setFlashdata('error', "Nachricht konnte nicht gesendet werden. Fehler: {$mail->ErrorInfo}");
        }

        return redirect()->to('/kontakt');
    }

    // Baut die "AGB"-SEITE zusammen
    public function agb()
    {
        $data['title'] = 'AGB';

        echo view('templates/header', $data);
        echo view('pages/agb');
        echo view('templates/footer');
    }

    // Baut die "IMPRESSUM"-SEITE zusammen
    public function impressum()
    {
        $data['title'] = 'Impressum';

        echo view('templates/header', $data);
        echo view('pages/impressum');
        echo view('templates/footer');
    }

    // Baut die "DATENSCHUTZ"-SEITE zusammen
    public function datenschutz()
    {
        $data['title'] = 'Datenschutzerklärung';
        
        echo view('templates/header', $data);
        echo view('pages/datenschutz');
        echo view('templates/footer');
    }
}