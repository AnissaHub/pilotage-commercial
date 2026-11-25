<?php

class ErrorController extends Zend_Controller_Action
{
    public function errorAction()
    {
        // Désactiver le rendu automatique de la vue
        $this->_helper->viewRenderer->setNoRender(true);

        // Récupérer l'erreur initiale
        $errors = $this->_getParam('error_handler');

        if ($errors && isset($errors->exception)) {

            $exception = $errors->exception;

            echo '<h1>Erreur initiale Zend Framework</h1>';

            echo '<pre>';
            echo htmlspecialchars(
                $exception->getMessage(),
                ENT_QUOTES,
                'UTF-8'
            );
            echo '</pre>';

            echo '<h2>Fichier et ligne</h2>';

            echo '<pre>';
            echo $exception->getFile();
            echo ' : ';
            echo $exception->getLine();
            echo '</pre>';

            echo '<h2>Trace</h2>';

            echo '<pre>';
            echo htmlspecialchars(
                $exception->getTraceAsString(),
                ENT_QUOTES,
                'UTF-8'
            );
            echo '</pre>';
        }
    }
}
