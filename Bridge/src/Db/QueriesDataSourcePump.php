<?php

namespace Bridge\Src\Db;

use App\Service\SystemSQL;
use Doctrine\ORM\Query\ResultSetMapping;

class QueriesDataSourcePump
{
    private $systemSQL;
    private $rsm;
    private string $nativeSql;
    private array $parameters;

    public  function __construct(SystemSQL $systemSQL, ResultSetMapping $resultSetMapping,string $sql, array $parameters =[])
    {
        $this ->systemSQL = $systemSQL;
        $this->rsm = $resultSetMapping;
        $this->nativeSql = $sql;
        $this->parameters = $parameters;
    }

    public function exec()
    {
      return  $this ->systemSQL ->execSQLProcedure(
            $this->nativeSql,$this->rsm,$this->parameters
        );
    }
}