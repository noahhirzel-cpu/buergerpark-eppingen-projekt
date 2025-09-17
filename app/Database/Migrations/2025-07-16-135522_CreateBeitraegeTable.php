<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBeitraegeTable extends Migration
{
    public function up()
    {
        // Definiert die Struktur der 'beitraege' Tabelle
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'titel' => [
                'type'       => 'VARCHAR',
                'constraint' => '128',
            ],
            'inhalt' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'erstellt_am' => [
                'type'    => 'DATETIME',
                'null'    => true,
            ],
        ]);
        // Setzt 'id' als Primärschlüssel
        $this->forge->addKey('id', true);
        // Erstellt die Tabelle
        $this->forge->createTable('beitraege');
    }

    public function down()
    {
        // Löscht die Tabelle, falls die Migration rückgängig gemacht wird
        $this->forge->dropTable('beitraege');
    }
}