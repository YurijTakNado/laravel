<?php

namespace App;

class Filter {

    // Название таблицы.
    static protected $tableName;
    // Свойство поиска сквозного.
    static protected $str = '';
    // Массив данных которые пройдут валидацию и дойдут в фильтр, но их нужно исключить.
    static protected $except = ['str', 'perPage', 'sort', 'page', 'by'];

    // Формирование строкового фильтра.
    static public function getThrougt($str, $fields) {
        if ($str == null)
            return;
        self::$str = $str;
        return collect($fields)->transform(function ($item) {
                    return [$item, 'LIKE', '%' . self::$str . '%'];
                })->all();
    }
    
    // Формирование строкового фильтра.
    static public function getThrougtLight($fields) {
        self::$str = $fields;
        return collect($fields)->except(self::$except)->transform(function ($key, $item) {
                    return [$item, 'LIKE', $key];
                })->values()->all();
    }

    // Формирование сложного фильтра.
    static public function getFilter($data, $table, $class) {
        $resData = collect($data)->reject(function ($item) {
                    return $item == null;
                })->toArray();
        self::$tableName = $table;
        $except = collect(array_merge(self::$except, $class::$range));
        $dictionary = collect($resData)->except($except)->flatMap(function ($item, $key) {
            if (stristr($key, '_id') == true)
                return $res = [[self::$tableName . '.' . $key, '=', $item]];
            else
                return $res = [[self::$tableName . '.' . $key, '=', $item]];
        });
        $range = collect($resData)->only($class::$range)->flatMap(function ($item, $key) {
            if (stristr($key, '_to') == true)
                return $res = [[self::$tableName . '.' . substr($key, 0, -3), '<=', $item]];
            elseif (stristr($key, '_from') == true)
                return $res = [[self::$tableName . '.' . substr($key, 0, -5), '>=', $item]];
        });
        return $dictionary->merge($range)->toArray();
    }

}
