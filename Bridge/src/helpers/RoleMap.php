<?php

namespace Bridge\Src\Helpers;

class RoleMap
{

    public static function getRole($role)
    {
        $roles = [
            "TEACHER" => "350292DA"
        ];
        return $roles[$role];
    }

}