<?php


namespace AppBundle\Tests\Controller;


use Doctrine\ORM\EntityManager;
use \Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Helper class to help manager transaction for each test,
 * database needs to be initialized once before whole test suite
 */
abstract class DatabaseTest extends WebTestCase
{
    /**
     * helper to acccess EntityManager
     */
    protected $em;
    /**
     * Helper to access test Client
     */
    protected $client;

    /**
     * Before each test we start a new transaction
     * everything done in the test will be canceled ensuring isolation et speed
     */
    protected function setUp()
    {
        parent::setUp();
        $this->client = $this->createClient();
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
        $this->em->rollback();
        $this->em->close();
    }
}