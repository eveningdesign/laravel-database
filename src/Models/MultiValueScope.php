<?php

namespace EveningDesign\Database\Models;

trait MultiValueScope
{
    public function applyMultiValueToQuery($query, $column, $value)
    {
        if (empty($value)) {
            return $query;
        }
        if (is_array($value)) {
            return $query->whereIn($column, $value);
        }
        return $query->where($column, $value);
    }
}
