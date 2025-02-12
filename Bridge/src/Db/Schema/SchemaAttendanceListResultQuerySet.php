<?php

namespace Bridge\Src\Db\Schema;

use App\Service\SystemSQL;
use Bridge\Src\Db\SystemSQLProvider;
use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\HttpFoundation\Request;

class SchemaAttendanceListResultQuerySet
{


    /**
     * @param SystemSQL $SQL
     * @param array $parameters
     * @return mixed a result set or null
     */
    public  static function getAttendanceList (SystemSQL $SQL,array $parameters): mixed
    {
        $rsm = new ResultSetMapping();

        $rsmMap = [
            'StudentName' =>'StudentName',
            'SectionName' =>'SectionName',
            'DateMarked' => 'DateMarked',
            'Remarks' => 'Remarks',
            'SessionId' => 'SessionId',
            'IsPresentMorning' => 'IsPresentMorning',
            'IsPresentEvening' => 'IsPresentEvening',
        ];
        $rsm = SystemSQLProvider::addScalarMapping($rsm,$rsmMap);
        return $SQL ->execSQLProcedure(SystemSQLProvider::STORED_PROCEDURE_App_GetAttendanceList,$rsm,$parameters);
    }
}