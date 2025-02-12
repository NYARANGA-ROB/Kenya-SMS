<?php

namespace Bridge\Src\Helpers;

use Symfony\Component\HttpFoundation\Request;

class MenuInfo
{

    public const MENU_SCHOOL_SETUP = 'masterpages/menus/school_and_setup.twig';
    public const MENU_EXAM_CENTER = 'masterpages/menus/exam_center.twig';
    public const MENU_STUDENT_CENTER = 'masterpages/menus/student_center.twig';
    public const MENU_SCHOOL_REPORTS = 'masterpages/menus/reports.twig';
    public const MENU_SYSTEM_SETTINGS = 'masterpages/menus/settings.twig';
    public const MENU_FEE_MANAGEMNT = 'masterpages/menus/fee_management.twig';
    public const MENU_CLASS_MANAGEMNT = 'masterpages/menus/class_management.twig';

    public const MENU_HRM_CENTER = 'masterpages/menus/hrm_center.twig';
    public const MENU_STAFF_MANAGEMENT = 'masterpages/menus/staff_management.twig';
    public const MENU_MESSAGING = 'masterpages/menus/messaging.twig';

    public const STRUCT_MENU = 'menu';
    public const STRUCT_MENU_ID = 'MenuId';
    public const STRUCT_MENU_ROUTE = 'route';
    public const STRUCT_MENU_LABEL = 'label';
    public const STRUCT_MENU_PARAMS = 'parameters';
    public const STRUCT_MENU_ICON_CLASS = 'iconClass';
    public const STRUCT_MENU_ICON_IMAGE_URL = 'iconImageUrl';
    public const STRUCT_MENU_ONCLICK_ATTRIBUTE = 'OnClick';
    public const STRUCT_MENU_CSS_CLASS_ATTRIBUTE = 'class';

    public const STRUCT_CHILD_MENU_ID = 'childId';

    public const MENU_CONFIG = '../config/menus.yaml';


}