<?php
namespace AppBundle\Service;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;

use JMS\DiExtraBundle\Annotation\Inject;
use JMS\DiExtraBundle\Annotation\InjectParams;
use JMS\DiExtraBundle\Annotation\Service;

/**
 * @Service("stein.db.id_generator")
 */
class IdGeneratorService
{
    private $connection;
    private $host;
    private $user;
    private $password;

    /**
     * @InjectParams({
     *     "host" = @Inject("%database_host%"),
     *     "user" = @Inject("%database_user%"),
     *     "password" = @Inject("%database_password%")
     * })
     * @param $host
     * @param $user
     * @param $password
     */
    function __construct($host, $user, $password)
    {
        $this->host = $host;
        $this->user = $user;
        $this->password = $password;
        $this->connect();
    }


    /**
     * @param String $tableName
     * @return String
     * @throws \Exception
     */
    public function getId($tableName)
    {
        $sql = "
DECLARE @NEW_ID VARCHAR(12);
EXEC SYSDBA.SLXNEWID
@TABLE=" . $tableName . ",
@ID = @NEW_ID OUTPUT;
SELECT @NEW_ID as ID
";
        $resource = mssql_query($sql, $this->connection);
        if ($resource) {
            $result = mssql_fetch_array($resource);
            return $result["ID"];
        }
        throw new \Exception("Generate ID failed");

//        $dbh = new \PDO("dblib:host=mssql;dbname=Developer", "LinuxUser", "frank#50");
//
//        $sth = $dbh->prepare("EXEC ?= SYSDBA.SLXNEWID @TABLE=?, @ID = ?");
//        $sth = $dbh->prepare("{CALL SYSDBA.SLXNEWID(?,?)}");
//        $sth = $dbh->prepare($sql);
//        $str = "SPK_INVESTMENT";
//        $name = '';
//        $name1 = '';
//        $sth->bindParam(1, $name1, \PDO::PARAM_STR, 12);
//        $sth->bindParam(2, $str);
//        $sth->bindParam(3, $name, \PDO::PARAM_STR, 12);
//        $f = $sth->execute();
//        $all = $sth->fetchAll();
//        echo 1;
//        die;
//        $sql = "EXEC SYSDBA.SLXNEWID @TABLE='SPK_INVESTMENT',@ID = ? OUTPUT";
//        $stmt = $this->connection->prepare($sql);
//        $stmt->bindValue("TABLE_NAME", $tableName);
//        $b = $stmt->execute();
//
//        $statement = $this->connection->prepare($sql);
//
//        $statement->bindParam('id',$id,\PDO::P & \PDO::PARAM_INPUT_OUTPUTARA        $statement->bindParam(1,$id,\PDO::PARAM_STR );
//M_STR);
//        $outputArray = $statement->execute();
//        $f=$statement->fetchAll();
//        $c=$stmt->rowCount();
//        $d=$stmt->fetchColumn(0);
//        $a = $stmt->fetchAll();
//        return $a
//;
    }

    private function connect()
    {
        $this->connection = mssql_connect($this->host, $this->user, $this->password);
    }
}