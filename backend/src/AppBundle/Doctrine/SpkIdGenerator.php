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
    const WIN_DSN = "sqlsrv:server=10.65.103.150 ; Database=Developer";
    const DSN = "odbc:mssql";

    private $generator;
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
        return $this->getGenerator()->getId($em->getClassMetadata(get_class($entity))->getTableName());
    }

    /**
     * @return IdGeneratorService
     */
    private function getGenerator()
    {
        if (!$this->generator) {
            $dsn = $this->constructDsn();
            $this->generator = new IdGeneratorService(new PDO($dsn, "LinuxUser", "frank#50"));
        }
        return $this->generator;
    }


    private function constructDsn()
    {
        if (stristr(PHP_OS, 'WIN')) {
            return SpkIdGenerator::WIN_DSN;
        } else {
            return SpkIdGenerator::DSN;
        }
    }
}