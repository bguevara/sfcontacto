<?php

namespace AppBundle\Utils;

use Symfony\Component\DependencyInjection\ContainerAware;

class ChangeDatabase extends ContainerAware {
    
    public function switchDatabase($dbName) 
    {
      $connection = $this->container->get(sprintf('doctrine.dbal.%s_connection', 'default'));
      $connection->close();

      $refConn = new \ReflectionObject($connection);
      $refParams = $refConn->getProperty('_params');
      $refParams->setAccessible('public'); //we have to change it for a moment

      $params = $refParams->getValue($connection);
      switch ($dbName){
        case 'default':
            $params['dbname'] = $dbName;
            $params['user'] = 'root';
            $params['password'] = '16557544';
            break;
        case 'copy':
            $params['dbname'] = 'basepruebapost';
            $params['user'] = 'root';
            $params['password'] = '16557544';
            break;        
      }      

      $refParams->setAccessible('private');
      $refParams->setValue($connection, $params);
      $this->container->get('doctrine')->resetEntityManager(sprintf('%s_manager', 'default')); // for sure (unless you like broken transactions)
    }
}
