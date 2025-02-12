<?php
namespace Bridge\Src\Functions;
use App\Controller\ExamCenterController;
use App\Entity\ExamHeader;
use Bridge\Src\Helpers\SystemAlertMessages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ExamScheduleDelegate
{

    public static function canPopulateSchedule( ExamHeader $examHeader, $form )
    {
        $startDate = strtotime($examHeader->getExamStartDate());
        $endDate = strtotime($examHeader->getExamEndDate());
        $examDate = strtotime($form->get('ExamDate')->getData());

        if ($examDate < $startDate or $examDate > $endDate) {
           return false;
        }

        return true;
    }

    public  static function CheckScheduleStartEndTimediffExceedsLimit( $start ,$end)
    {
        $start = strtotime($start);
        $end = strtotime($end);

        if((($start - $end) * -1) > 9000){
            return true;
        }
        return  false;
    }
}