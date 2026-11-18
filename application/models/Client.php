<?php

class Application_Model_Client
{
    protected $_db;

    public function __construct()
    {
        $this->_db = Zend_Registry::get('db');
    }

    // Afficher la liste des clients
    public function getAllClients()
    {
        return $this->_db->fetchAll('SELECT * FROM clients');
    }

    // Supprimer un client
    public function removeClient($id)
    {
        // Supprimer uniquement le client correspondant à son identifiant
        return $this->_db->delete(
            'clients',
            'id_client = ' . (int) $id
        );
    }

    // Ajouter un client
    public function addClient($data)
    {
        return $this->_db->insert('clients', $data);
    }
    //Modifier un client
}
