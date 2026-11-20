<?php

class Application_Model_Vente
{
    protected $_db;

    public function __construct()
    {
        $this->_db = Zend_Registry::get('db');
    }

    public function getAllVentes()
    {

        return $this->_db->fetchAll('SELECT * FROM ventes');
    }

    // protected $_db : stocke la connexion à la base de données.
    // Zend_Registry::get('db') : récupère la connexion enregistrée dans le Bootstrap.


    public function getChiffreAffairesParMois()
    {
        return $this->_db->fetchAll("
        SELECT
            MONTH(date_vente) AS mois,
            SUM(montant) AS chiffre_affaires
        FROM ventes
        GROUP BY MONTH(date_vente)
        ORDER BY mois ASC
    ");
    }
}
