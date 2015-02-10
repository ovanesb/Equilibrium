<?php 

    namespace Equilibrium\Controller\Plugin\Factory;

    use Equilibrium\Controller\Plugin\EquilPlug;
    
    use Zend\ServiceManager\ServiceLocatorInterface;
    use Zend\ServiceManager\FactoryInterface;

    class EquilibPluginFactory implements FactoryInterface
    {
        public function createService(ServiceLocatorInterface $pluginManager)
        {
            $serviceManager = $pluginManager->getServiceLocator();

            return new EquilPlug($serviceManager->get('Zend\Db\Adapter\Adapter'));
        }
    }