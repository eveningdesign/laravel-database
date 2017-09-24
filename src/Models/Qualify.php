<?php

namespace EveningDesign\Database\Models;

trait Qualify
{
    public static function q($columnName)
    {
        return sprintf("%s.%s", self::TABLE, $columnName);
    }
}