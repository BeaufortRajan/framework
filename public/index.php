<?php

    /**
     * ----------------------------------------------------
     * Bienvenue dans notre framework fait maison
     * 
     * L'index.php représente le "FrontController"
     * Ses rôles : 
     *              - Charger le fichier de configuration
     *              - Créer une nouvelle instance du noyau
     *              - Récupérer la réponse qui sera ensuite 
     *                envoyée au navigateur
     * ----------------------------------------------------
    */


    // Chargement du fichier de configuration
    require_once dirname(__DIR__) . "/config/bootstrap.php";
    
    dd($_SERVER);
    if ( $_SERVER['REQUEST_URI'] == "/" ) 
    {
        // dd("page d'accueil");
    }
    else 
    {
        dd("l'utilisateur veut accéder à une autre page");
    }

    



    // Création d'une nouvelle instance du noyau de l'application
    $kernel = new App\Kernel($container);

    // Soumission de la requête au noyau
    // Récupération de la réponse
    $response=$kernel->handleRequest();

    // Envoi de la réponse au navigateur
