<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class District extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех район города.
    static public function listAll($id) {
        return Response::json(static::whereCityId($id)->get());
    }
    
    // Получения района города по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление района города.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление района города.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем района города по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }

}
