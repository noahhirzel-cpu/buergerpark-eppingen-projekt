<?php

namespace App\Controllers;
use App\Models\UserModel;

class AuthController extends BaseController
{
    // Die URL des externen Identity Providers (aus den Vorlesungsunterlagen)
    private $idp_url = "https://idp-dhbw.beultemo.de/index.php";

    // Zeigt die Login-Seite an (hast du schon)
    public function login()
    {
        $data['title'] = 'Login';
        echo view('templates/header', $data);
        echo view('pages/login');
        echo view('templates/footer');
    }

    // Verarbeitet die Login-Anfrage mit der LOKALEN Datenbank
    public function versucheLogin()
    {
        // 1. Daten aus dem Formular holen
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // 2. Model laden und Benutzer in der Datenbank suchen
        $userModel = new UserModel();
        $user = $userModel->where('username', $username)->first();

        // 3. Benutzer gefunden UND Passwort korrekt?
        // password_verify() vergleicht das eingegebene Passwort mit dem Hash in der Datenbank.
        if ($user && password_verify($password, $user['password_hash'])) {
            // Login war erfolgreich!

            // Wichtige Benutzer-Infos in der Session speichern
            session()->set([
                'isLoggedIn' => true,
                'username'   => $user['username'],
                'userId'     => $user['id']
            ]);

            // Zur geschützten Beitragsseite weiterleiten
            return redirect()->to('/');
        } else {
            // Login fehlgeschlagen
            session()->setFlashdata('error', 'Benutzername oder Passwort sind falsch.');
            return redirect()->to('/login');
        }
    }

    // Zeigt die Registrierungs-Seite an
    public function register()
    {
        $data['title'] = 'Registrieren';
        echo view('templates/header', $data);
        echo view('pages/register');
        echo view('templates/footer');
    }

    // Verarbeitet die Registrierung
    public function versucheRegister()
    {
        $userModel = new \App\Models\UserModel(); // Dieses Model erstellen wir gleich

        $data = [
            'username' => $this->request->getPost('username'),
            // WICHTIG: Passwort wird sicher gehasht!
            'password_hash' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ];

        $userModel->save($data);
        return redirect()->to('/login')->with('message', 'Registrierung erfolgreich! Du kannst dich jetzt anmelden.');
    }

    public function logout()
    {
        session()->destroy(); // Löscht die komplette Session
        return redirect()->to('/login');
    }
    
}