<?php
namespace App\Controllers;
use App\Models\BeitragModel;
use CodeIgniter\API\ResponseTrait;

class ApiController extends BaseController
{
    use ResponseTrait;


    // Private Helfer-Funktion, um den Key zu prüfen
    private function checkApiKey($key = null)
    {
        if ($key === null || $key !== $this->apiKey) {
            return false;
        }
        return true;
    }

    
    public function beitraege($key = null) // Nimmt den Key aus der URL entgegen
    {
        // Prüfe den API-Key
        if (! $this->checkApiKey($key)) {
            // Wenn der Key falsch ist, gib eine Fehlermeldung zurück
            return $this->failUnauthorized('Invalid API Key');
        }

        // Wenn der Key korrekt ist, fahre wie gewohnt fort
        $model = new BeitragModel();
        $data = $model->orderBy('erstellt_am', 'DESC')->findAll();

        return $this->respond($data);
    }
}