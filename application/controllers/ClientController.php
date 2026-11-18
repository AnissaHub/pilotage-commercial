
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

    //Ajouter un client
    public function ajouterAction()
    {
        // Vérifier si le formulaire a été envoyé
        if ($this->getRequest()->isPost()) {

            // Récupérer les données du formulaire
            $data = array(
                'nom'          => $this->_getParam('nom'),
                'prenom'       => $this->_getParam('prenom'),
                'email'        => $this->_getParam('email'),
                'telephone'    => $this->_getParam('telephone'),
                'type_client'  => $this->_getParam('type_client'),
                'date_creation' => date('Y-m-d H:i:s')
            );



            // Envoyer les données au modèle
            $clientModel = new Application_Model_Client();
            $clientModel->addClient($data);

            // Retourner à la liste des clients
            $this->_redirect('/client/index');
        }
    }
}
