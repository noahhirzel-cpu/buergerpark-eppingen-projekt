<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route für die Startseite
$routes->get('/', 'Pages::index');

// Route für die neue, öffentliche Beitragsseite
$routes->get('aktuelles', 'Pages::aktuelles');

// Routen für die statischen Seiten
$routes->get('ueber-uns', 'Pages::ueberUns');
$routes->get('events', 'Pages::events');
$routes->get('bildergalerie', 'Pages::bildergalerie');
$routes->get('kontakt', 'Pages::kontakt');
$routes->post('kontakt/senden', 'Pages::handleContactForm');
$routes->get('agb', 'Pages::agb');
$routes->get('impressum', 'Pages::impressum');
$routes->get('datenschutz', 'Pages::datenschutz');

// --- GESCHÜTZTER ADMIN-BEREICH ---
// Diese Routen sind nur für eingeloggte Benutzer gedacht
$routes->get('beitraege', 'Pages::beitraege');
$routes->get('beitraege/neu', 'Pages::beitragNeu');
$routes->post('beitraege/speichern', 'Pages::beitragSpeichern');
$routes->get('beitraege/bearbeiten/(:num)', 'Pages::beitragBearbeiten/$1');
$routes->post('beitraege/update/(:num)', 'Pages::beitragUpdate/$1');
$routes->get('beitraege/loeschen/(:num)', 'Pages::beitragLoeschen/$1');

// --- AUTHENTIFIZIERUNG & REGISTRIERUNG ---
$routes->get('/login', 'AuthController::login');
$routes->post('/auth/versucheLogin', 'AuthController::versucheLogin');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/register', 'AuthController::register');
$routes->post('/auth/versucheRegister', 'AuthController::versucheRegister');

// --- API ROUTE ---
$routes->get('/api/beitraege/(:any)', 'ApiController::beitraege/$1');