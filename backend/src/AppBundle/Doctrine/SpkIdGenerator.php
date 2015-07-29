<?php

namespace AppBundle\Doctrine;

use AppBundle\Service\IdGeneratorService;
use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Id\AbstractIdGenerator;
use PDO;

class SpkIdGenerator extends AbstractIdGenerator
{

    private $generator;

    function __construct()
    {
        $this->generator = new IdGeneratorService(new PDO("odbc:mssql", "LinuxUser", "frank#50"));
    }

    /**
     * Generates an identifier for an entity.
     *
     * @param EntityManager $em
     * @param \Doctrine\ORM\Mapping\Entity $entity
     *
     * @return mixed
     */
    public function generate(EntityManager $em, $entity)
    {
        return $this->generator->getId($em->getClassMetadata(get_class($entity))->getTableName());
    }
}