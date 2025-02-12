<?php

namespace Bridge\Src\Helpers;
use Symfony\Component\Yaml\Yaml;

class Config{

    public static function getConfigFromYaml(string $path, string $config):mixed
    {
        $value = Yaml::parseFile($path);
        return $value[$config];
    }
}