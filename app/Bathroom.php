<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Bathroom extends Model implements DictionaryInterface{
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех районов.
    static public function listAll() {
        return Response::json(static::all());
    }
    
    // Получения района по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление района.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
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
