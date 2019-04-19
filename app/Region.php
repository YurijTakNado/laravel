<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Region extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех областей.
    static public function listAll($id) {
        return Response::json(static::whereCountryId($id)->get());
    }
    
    // Получения области по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление области.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление области.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем области по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }
}
