<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Street extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех улиц.
    static public function listAll($id) {
        return Response::json(static::whereDistrictId($id)->get());
    }
    
    // Получения улицы по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление улицы.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление улицы.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем улицы по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }
}
