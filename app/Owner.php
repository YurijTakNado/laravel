<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Owner extends Model {

    // Отношения к владельцев к объектам.
    public function obj() {
        return $this->hasOne(Obj::class);
    }
    
    // Получение всех владельцев.
    static public function listAll() {
        return Response::json(static::all());
    }
    
    // Получения владельца по id.
    static public function show($id) {
        return static::whereId($id)->get();
    }

    // Добавление владельца.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($result);
    }

    // Обновление владельца.
    static public function change($data, $id) {
        $arr = static::find($id);
        $arr->attributes = $data;
        return Response::json($arr->save());
    }

    // Удаляем владельца по id.
    static public function remove($id) {
        return static::where('id', '=', $id)->delete();
    }

}
