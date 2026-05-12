<?php
    // Déclaration des routes de la partie front
    $page = $_GET['page'] ?? 'home';

    switch ($page) {
        case 'home':
            require 'home.php';
            break;

        case 'about':
            require 'about.php';
            break;
    }