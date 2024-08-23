<?php 

function fetchDataFromApi($api_url) {
    // Configuration des options pour la requête HTTP
    $options = [
        "http" => [
            "header" => "Accept: application/json\r\n",
            "method" => "GET"
        ]
    ];

    // Création du contexte de la requête
    $context = stream_context_create($options);

    // Tentative de récupération des données depuis l'API
    $data = file_get_contents($api_url, false, $context);

    // Vérification si la récupération des données a échoué
    if ($data === FALSE) {
        return 'Erreur lors de la récupération des données depuis l\'API.';
    }

    // Décodage des données JSON
    $result = json_decode($data, true);

    return $result;
} 
