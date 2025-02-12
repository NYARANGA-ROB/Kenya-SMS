<?php

namespace Bridge\Src\Db;

class ResultMapping
{

    public  static  function  getOneResultByColumnName(string $columnName, int $index, $data)
    {
        return $data [$index][$columnName];
    }
}