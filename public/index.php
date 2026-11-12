<?php

// 1. Chemin vers le dossier "application"
defined('APPLICATION_PATH')
    || define('APPLICATION_PATH', realpath(dirname(__DIR__) . '/application'));

// 2. Environnement : "development" si rien n'est défini
defined('APPLICATION_ENV')
    || define('APPLICATION_ENV', getenv('APPLICATION_ENV') ?: 'development');

// 3. Dit à PHP où chercher les classes Zend_*
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(dirname(__DIR__) . '/vendor/shardj/zf1-future/library'),
    get_include_path(),
)));

// 4. Charge la classe Zend_Application
require_once 'Zend/Application.php';

// 5. Crée l'application : environnement + fichier de configuration
$application = new Zend_Application(
    APPLICATION_ENV,
    APPLICATION_PATH . '/configs/application.ini'
);

// 6. Initialise (bootstrap) puis traite la requête (run)
$application->bootstrap()->run();
