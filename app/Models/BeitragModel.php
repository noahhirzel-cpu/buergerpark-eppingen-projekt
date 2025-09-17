<?php

namespace App\Models;

use CodeIgniter\Model;

class BeitragModel extends Model
{
    protected $table = 'beitraege';
    protected $primaryKey = 'id';
    protected $allowedFields = ['titel', 'inhalt', 'erstellt_am'];

    // Diese getBeitraege() Funktion ist optional, da wir
    // die eingebauten Funktionen wie findAll() direkt nutzen können.
    // Du kannst sie aber für komplexere Abfragen später drin lassen.
    public function getBeitraege()
    {
        return $this->findAll();
    }
}