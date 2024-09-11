<?php 

function fetchDataFromApis($api_url) {
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

function fetchDataFromApi($api_url) {
    // Vérification de la validité de l'URL
    if (!filter_var($api_url, FILTER_VALIDATE_URL)) {
        return 'URL invalide.';
    }

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
    $data = @file_get_contents($api_url, false, $context);

    // Vérification si la récupération des données a échoué
    if ($data === FALSE) {
        return 'Erreur lors de la récupération des données depuis l\'API.';
    }

    // Décodage des données JSON
    $result = json_decode($data, true);

    // Vérification si le décodage JSON a échoué
    if (json_last_error() !== JSON_ERROR_NONE) {
        return 'Erreur lors du décodage des données JSON.';
    }

    return $result;
}
