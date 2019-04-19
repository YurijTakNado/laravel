<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Comment extends Model implements DictionaryInterface {

    // Отношения к пользователю.
    static public function user() {
        return $this->hasOne(User::class);
    }

    // Отношения к объектам.
    public function obj() {
        return $this->belongsTo(Obj::class);
    }

    // Получение всех комментариев.
    static public function listAll() {
        return Response::json(static::all());
    }

    // Получения  комментария по id.
    static public function show($id) {
       return Response::json(static::whereId($id)->get());
    }

    // Получения  комментария по id пользователя.
    static public function showByUser($id) {
        return Response::json(static::whereUserId($id)->get());
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
