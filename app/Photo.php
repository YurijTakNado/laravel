<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Photo extends Model {

    // Отключение метки времени.
    public $timestamps = false;

    // Отношения к фотографий к объекту.
    public function obj() {
        return $this->hasOne(Obj::class);
    }
    
    // Получения фотографии по id объекта.
    static public function show($id) {
        return Response::json(static::whereObjId($id)->get());
    }

    // Добавление фотографий.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление фотографий.
    static public function change($data, $id) {
        $obj = static::find($id);
        $obj->attributes = $data;
        return Response::json($obj->save());
    }

    // Удаляем фотографии по id объекта.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }

}
