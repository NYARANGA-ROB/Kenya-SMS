<?php
namespace Bridge\Src\Db;

use Doctrine\ORM\Query\ResultSetMapping;

class SystemSQLProvider
{
    const STORED_PROCEDURE_App_RemoveClassroom = 'dbo.App_RemoveClassroom';
    const STORED_PROCEDURE_Check_CanAddClassRooms = 'dbo.Check_CanAddClassRooms';
    const STORED_PROCEDURE_App_GetAttendanceList ='dbo.App_GetAttendanceList';
    const STORED_PROCEDURE_App_StatisticsDashboardA = 'dbo.App_StatisticsDashboardA';
    const STORED_PROCEDURE_DBO_Sp_GetStudentCountBySection = 'dbo.Sp_GetStudentCountBySection';
    CONST SQL_NATIVE_SEARCH_EXAM_HEADER = 'dbo.Search_ExamHeader';
    CONST STORED_PROCEDURE_DEACTIVATE_STUDENTS = 'dbo.App_DeactivateStudents';
    const STORED_PROCEDURE_Activate_Deactivated_Students = 'dbo.App_ActivateDeactivateStudents';

    public static function addScalarMapping(ResultSetMapping $resultSetMapping,array $map): ResultSetMapping
    {
        foreach ( $map as $columnName => $alias)
        {
            $resultSetMapping ->addScalarResult($columnName,$alias);
        }

        return $resultSetMapping;
    }
}