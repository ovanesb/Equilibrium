<?php

namespace EquilibriumTest\Controller;

use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class EquilibriumControllerTest extends AbstractHttpControllerTestCase
{
    public function setUp()
    {
        $this->setApplicationConfig(
            include '/var/www/Equilibrium/config/application.config.php'
        );
        parent::setUp();
    }
    
    
    public function testIndexActionCanBeAccessed()
    {
        

        $this->dispatch('/equilibrium');
        $this->assertResponseStatusCode(200);

        $this->assertModuleName('Equilibrium');
        $this->assertControllerName('Equilibrium\Controller\Equilibrium');
        $this->assertControllerClass('EquilibriumController');
        $this->assertMatchedRouteName('equilibrium');
    }
    
    
}