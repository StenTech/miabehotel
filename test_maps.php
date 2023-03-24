<?php

use GuzzleHttp\Client;

// Clé API Google Maps
$apiKey = 'YOUR_API_KEY';

// Coordonnées de Lomé
$latitude = 6.1319;
$longitude = 1.2221;

// Nombre maximum de résultats à retourner
$maxResults = 200;

// URL de l'API Google Maps
$url = "https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=$latitude,$longitude&radius=50000&type=lodging&key=$apiKey&rankby=prominence&maxresults=$maxResults";

// Envoyer une requête HTTP à l'API Google Maps
$client = new Client();
$response = $client->get($url);

// Analyser la réponse JSON
$results = json_decode($response->getBody(), true)['results'];

// Parcourir les résultats et extraire les informations requises
foreach ($results as $result) {
    $name = $result['name'];
    $latitude = $result['geometry']['location']['lat'];
    $longitude = $result['geometry']['location']['lng'];
    $description = $result['vicinity'];
    $stars = isset($result['rating']) ? $result['rating'] : null;

    // Afficher les informations de l'hôtel
    echo "Nom : $name\n";
    echo "Latitude : $latitude\n";
    echo "Longitude : $longitude\n";
    echo "Description : $description\n";
    echo "Nombre d'étoiles : $stars\n";
    echo "\n";
}
