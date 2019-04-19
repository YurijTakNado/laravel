<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Area extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех районов.
    static public function listAll($id) {
        return Response::json(static::whereRegionId($id)->get());
    }
    
    // Получения района по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление района.
    static public function add($data) {
        $data == true ? $result = static::insertGetId($data) : $result = false;
        return Response::json($result);
    }

    // Обновление района.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем района по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }
}
