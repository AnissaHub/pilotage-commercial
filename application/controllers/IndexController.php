<?php

class IndexController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $venteModel = new Application_Model_Vente();

        $this->view->chiffreAffaires = $venteModel->getChiffreAffairesParMois();
    }
}
