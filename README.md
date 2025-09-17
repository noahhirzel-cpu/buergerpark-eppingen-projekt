# Projekt: Webseite "Freunde des Bürgerparks Eppingen e.V."

Dies ist die Ersatzleistung für die Vorlesung "Verteilte Systeme".

## Autor
* **Name:** Noah Hirzel
* **Kurs:** WI23A1

## Setup-Anleitung

1.  Das Projektverzeichnis auf einem lokalen Server (z.B. XAMPP im `htdocs`-Ordner) platzieren.
2.  Eine leere MySQL-Datenbank erstellen.
3.  Die Datei `env` im Projektverzeichnis zu `.env` kopieren.
4.  Die `.env`-Datei öffnen und die Datenbank-Zugangsdaten (`database.default.*`) sowie die Mail-Zugangsdaten (`MAIL_USERNAME`, `MAIL_PASSWORD`) eintragen.
5.  Ein Terminal im Projektverzeichnis öffnen und `composer install` ausführen, um alle Abhängigkeiten zu installieren.
6.  Den Befehl `php spark migrate` ausführen, um die Datenbanktabellen zu erstellen.
7.  Die Webseite über den `public`-Ordner im Browser aufrufen.

## Admin-Zugang
Ein Admin-Account kann über die `/register`-Seite erstellt werden. Nach dem Login können unter `/beitraege` die Beiträge verwaltet werden.