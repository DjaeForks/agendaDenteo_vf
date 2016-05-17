<?php

namespace UsersBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class DefaultControllerTest extends \PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
{
    $this->setHost('localhost');
    $this->setPort(4444);
    $this->setBrowserUrl('http://http://e-compta.mit.co.ma/facture/9/new_facture');

}
    public function tearDown()
    {
        $this->stop();

    }


}
