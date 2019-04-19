<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Microdistrict extends Model {
    
    // Отключение метки времени.
    public $timestamps = false;
    
    // Получение всех микрорайона.
    static public function listAll($id) {
        return Response::json(static::whereDistrictId($id)->get());
    }
    
    // Получения микрорайона по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Добавление микрорайона.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление микрорайона.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем микрорайона по id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }

}
