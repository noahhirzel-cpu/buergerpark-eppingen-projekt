# Projekt: Webseite "Freunde des Bürgerparks Eppingen e.V."

Die Ersatzleistung für die Vorlesung "Verteilte Systeme".

## Autor
* **Name:** Noah Hirzel
* **Kurs:** WI23A1

## Setup-Anleitung

1.  **Repository klonen:** Das Projektverzeichnis mit dem folgenden Befehl auf den lokalen Rechner herunterladen:
    `git clone https://github.com/noahhirzel-cpu/buergerpark-eppingen-projekt.git`

2.  **Server platzieren:** Den heruntergeladenen Ordner auf einem lokalen Server (z.B. XAMPP im `htdocs`-Ordner) platzieren.

3.  **Datenbank erstellen:** Eine leere MySQL-Datenbank anlegen.

4.  **.env-Datei erstellen:** Die Datei `env` im Projektverzeichnis zu `.env` kopieren.

5.  **Konfiguration:** Die `.env`-Datei öffnen und die Datenbank-Zugangsdaten (`database.default.*`) sowie die Mail-Zugangsdaten (`MAIL_USERNAME`, `MAIL_PASSWORD`) eintragen.

6.  **Abhängigkeiten installieren:** Ein Terminal im Projektverzeichnis öffnen und `composer install` ausführen.

7.  **Datenbank migrieren:** Den Befehl `php spark migrate` ausführen, um die Datenbanktabellen zu erstellen.

8.  **Starten:** Die Webseite über den `public`-Ordner im Browser aufrufen.

## Admin-Zugang
Ein Admin-Account kann über die `/register`-Seite erstellt werden. Nach dem Login können unter `/beitraege` die Beiträge verwaltet werden.