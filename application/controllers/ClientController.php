
<?php

class ClientController extends Zend_Controller_Action
{
    // Afficher la liste des clients
    public function indexAction()
    {
        $clientModel = new Application_Model_Client();

        $clients = $clientModel->getAllClients();

        $this->view->clients = $clients;
    }

    // Supprimer un client
    public function supprimerAction()
    {
        $clientModel = new Application_Model_Client();

        $id = (int) $this->_getParam('id');

        $clientModel->removeClient($id);

        // Retourner à la liste des clients
        $this->_redirect('/client/index');
    }
}
