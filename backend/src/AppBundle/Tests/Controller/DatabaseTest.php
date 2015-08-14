<?php


namespace AppBundle\Tests\Controller;


use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Client;
use \Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Routing\Router;

/**
 * Helper class to help manager transaction for each test,
 * database needs to be initialized once before whole test suite
 */
abstract class DatabaseTest extends WebTestCase
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var Router
     */
    protected $router;

    /**
     * Before each test we start a new transaction
     * everything done in the test will be canceled ensuring isolation et speed
     */
    protected function setUp()
    {
        parent::setUp();
        $this->client = $this->createClient();
        $this->router = $this->client->getContainer()->get('router');
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager();
//        $this->em->beginTransaction();
    }

    /**
     * After each test, a rollback reset the state of
     * the database
     */
    protected function tearDown()
    {
        parent::tearDown();
//        $this->em->rollback();
//        $this->em->close();
    }
}