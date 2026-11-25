
<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initApp()
    {
        // Initialisation générale
    }

    protected function _initAutoload()
    {
        $autoloader = new Zend_Application_Module_Autoloader(array(
            'namespace' => 'Application',
            'basePath'  => APPLICATION_PATH
        ));

        return $autoloader;
    }

    protected function _initDatabase()
    {
        $db = $this->getPluginResource('db')->getDbAdapter();

        $db->getConnection();

        Zend_Registry::set('db', $db);

        return $db;
    }
}
