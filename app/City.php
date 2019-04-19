<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class City extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех населенных пунктов.
    static public function listAll($id) {
        return Response::json(static::whereAreaId($id)->get());
    }
    
    // Получения населенного пункта по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление населенного пункта.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление населенного пункта.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем населенного пункта по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }
}
