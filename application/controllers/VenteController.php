
<?php

class VenteController extends Zend_Controller_Action
{
    // Afficher la liste des ventes
    public function indexAction()
    {
        $venteModel = new Application_Model_Vente();

        $ventes = $venteModel->getAllVentes();

        $this->view->vente = $ventes;
    }
}
