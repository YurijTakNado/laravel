<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Balcon extends Model implements DictionaryInterface{
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех балконов.
    static public function listAll() {
        return Response::json(static::all());
    }
    
    // Получения балкона по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление балкона.
    static public function add($data) {
        $data == true ? $result = static::insertGetId($data) : $result = false;
        return Response::json($result);
    }

    // Обновление балкона.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем балкона по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }
}
