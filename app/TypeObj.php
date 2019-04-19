<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class TypeObj extends Model implements DictionaryInterface {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение все типы объекта.
    static public function listAll() {
        return Response::json(static::all());
    }
    
    // Получения типа объекта по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление типа объекта.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление типа объекта.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем типа объекта по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }

}
