<?php

namespace DalTest\AbstractFactory;

use Dal\AbstractFactory\ModelAbstractFactory;
use Zend\Test\PHPUnit\Controller\AbstractHttpControllerTestCase;

class ModelAbstractFactoryTest extends AbstractHttpControllerTestCase
{
	public function setUp()
	{
		$this->setApplicationConfig(
				include __DIR__ . '/../../config/application.config.php'
		);
		parent::setUp();
	}
	
    public function testCanCreateServiceWithName()
    {
    	$model_abstract_factory = new ModelAbstractFactory();
    	$serviceManager = $this->getApplicationServiceLocator();
    	$out = $model_abstract_factory->canCreateServiceWithName($serviceManager, 'dal-test_model_table', 'dal-test_model_table');
    	
    	$this->assertTrue($out);
    }

    public function testCreateServiceWithName()
    {
    	$model_abstract_factory = new ModelAbstractFactory();
    	$serviceManager = $this->getApplicationServiceLocator();
    	$out = $model_abstract_factory->createServiceWithName($serviceManager, 'dal-test_model_table', 'dal-test_model_table');
    	 
    	$this->assertInstanceOf('Mock\Model\Table' , $out);
    }
}
