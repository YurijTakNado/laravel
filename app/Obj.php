<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Response;

class Obj extends Model {

    use Traits\Fields;

    // Строка поиска сквозного.
    static protected $str = '';

    // Отношения к пользователю.
    public function comment() {
        return $this->hasMany(Comment::class);
    }

    // Отношения к пользователю.
    public function user() {
        return $this->hasOne(User::class);
    }

    // Отношения к владельцу.
    public function owner() {
        return $this->hasOne(Owner::class);
    }

    // Получения всех объектов.
    static public function listAll($data) {
        $table = 'objs';
        array_key_exists('str', $data) == false ? self::$str = null : self::$str = Filter::getThrougt($data['str'], static::$throught);
        array_key_exists('sort', $data) == false ? $data['sort'] = 'objs.id' : 'objs.' . $data['sort'];
        array_key_exists('by', $data) == false ? $data['by'] = 'desc' : $data['by'];
        array_key_exists('perPage', $data) == false ? $data['perPage'] = '10' : $data['perPage'];
        $complex = Filter::getFilter($data, $table, Traits\Fields::class);
        return Response::json(static::select(static::getSelect())
                        ->leftjoin('countries', 'countries.id', '=', 'country_id')
                        ->leftjoin('regions', 'regions.id', '=', 'region_id')
                        ->leftjoin('areas', 'areas.id', '=', 'area_id')
                        ->leftjoin('cities', 'cities.id', '=', 'city_id')
                        ->leftjoin('districts', 'districts.id', '=', 'district_id')
                        ->leftjoin('microdistricts', 'microdistricts.id', '=', 'microdistrict_id')
                        ->leftjoin('streets', 'streets.id', '=', 'street_id')
                        ->leftjoin('photos', 'photos.obj_id', '=', 'objs.id')
                        ->leftjoin('type_objs', 'type_objs.id', '=', 'type_obj_id')
                        ->leftjoin('balcons', 'balcons.id', '=', 'balcon_id')
                        ->leftjoin('bathrooms', 'bathrooms.id', '=', 'bathroom_id')
                        ->leftjoin('conditions', 'conditions.id', '=', 'condition_id')
                        ->leftjoin('sources', 'sources.id', '=', 'source_id')
                        ->leftjoin('owners', 'owners.id', '=', 'owner_id')
                        ->leftjoin('type_sellers', 'owners.type_seller_id', '=', 'type_sellers.id')
                        ->where($complex)
                        ->when(self::$str != null, function($query) {
                            return $query->whereOr(self::$str);
                        })
                        ->orderBy($data['sort'], $data['by'])
                        ->paginate($data['perPage']));
    }

    // Получения объекта по id.
    static public function show($id) {
        return Response::json(static::select(static::getSelect())->where('objs.id', '=', $id)
                        ->leftjoin('countries', 'countries.id', '=', 'country_id')
                        ->leftjoin('regions', 'regions.id', '=', 'region_id')
                        ->leftjoin('areas', 'areas.id', '=', 'area_id')
                        ->leftjoin('cities', 'cities.id', '=', 'city_id')
                        ->leftjoin('districts', 'districts.id', '=', 'district_id')
                        ->leftjoin('photos', 'photos.obj_id', '=', 'objs.id')
                        ->leftjoin('microdistricts', 'microdistricts.id', '=', 'microdistrict_id')
                        ->leftjoin('streets', 'streets.id', '=', 'street_id')
                        ->leftjoin('type_objs', 'type_objs.id', '=', 'type_obj_id')
                        ->leftjoin('balcons', 'balcons.id', '=', 'balcon_id')
                        ->leftjoin('bathrooms', 'bathrooms.id', '=', 'bathroom_id')
                        ->leftjoin('conditions', 'conditions.id', '=', 'condition_id')
                        ->leftjoin('sources', 'sources.id', '=', 'source_id')
                        ->leftjoin('owners', 'owners.id', '=', 'owner_id')
                        ->leftjoin('type_sellers', 'owners.type_seller_id', '=', 'type_sellers.id')
                        ->get());
    }

    // Добавление объекта.
    static public function add($data) {
        $data == true ? $result = static::insert($data) : $result = false;
        return Response::json($data);
    }

    // Обновление объекта.
    static public function change($data, $id) {
        $arr = static::find($id);
        $arr->attributes = $data;
        return Response::json($arr->save());
    }

    // Удаляем объект id.
    static public function remove($id) {
        return static::whereId($id)->delete();
    }

}
