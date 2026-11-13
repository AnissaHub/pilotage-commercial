<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initApp()
    {
        // Initialisation générale de l'application
    }

    protected function _initDatabase()
    {
        // Récupération de la connexion à la base de données
        $db = $this->getPluginResource('db')->getDbAdapter();

        // Vérification de la connexion
        $db->getConnection();

        return $db;
    }
}
