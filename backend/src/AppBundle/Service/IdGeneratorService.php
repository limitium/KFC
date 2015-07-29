<?php
namespace AppBundle\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;
use PDO;

class IdGeneratorService
{
    private $pdo;

    function __construct(Pdo $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @param String $tableName
     * @return String
     * @throws \Exception
     */
    public function getId($tableName)
    {
        $stmt_execID = 'DECLARE
                         @NEW_ID VARCHAR(12);
                         EXEC SYSDBA.SLXNEWID
                         @TABLE=?,
                         @ID = @NEW_ID OUTPUT
                         SELECT @NEW_ID as ID';

        $stid = $this->pdo->prepare($stmt_execID);
        $stid->bindParam(1, $tableName);
        $stid->execute();
        return $stid->fetchColumn(0);
    }
}