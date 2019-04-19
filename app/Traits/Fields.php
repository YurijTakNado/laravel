<?php

namespace App\Traits;

trait Fields {

    // Массив полей для сквозного фильтра. Поля, по которым будет работать сквозной поиск.
    static public $throught = ['description'];
    // Массивы полей для селекта.
    // Поля адресной части.
    static private $address = ['countries.id AS country_id', 'regions.id AS region_id', 'areas.id AS area_id', 'cities.id AS city_id',
        'districts.id AS district_id', 'microdistricts.id AS microdistrict_id', 'streets.id AS street_id', 'countries.name AS country_name',
        'regions.name AS region_name', 'areas.name AS area_name', 'cities.name AS city_name', 'districts.name AS district_name',
        'microdistricts.name AS microdistrict_name', 'streets.name AS street_name', 'photos.photo'];
    // Поля со словарями.
    static private $dictionary = ['type_objs.name AS type_objs_name', 'balcons.name AS balcons_name', 'bathrooms.name AS bathrooms_name',
        'conditions.name AS conditions_name', 'sources.name AS sources_name', 'owners.name AS owners_name', 'type_sellers.name AS type_sellers_name',
        'type_sellers.id AS type_sellers_id'];
    // Массив полей для фильтра - диапазон.
    static public $range = ['floor_from', 'floor_to', 'total_area_from', 'total_area_to', 'kitchen_area_from', 'kitchen_area_to',
        'living_area_from', 'living_area_to', 'price_usd_from', 'price_usd_to', 'price_uah_from', 'price_uah_to', 'room_from', 'room_to'];

    // Получить массив для селекта.
    static protected function getSelect() {
        return array_merge(self::$address, self::$dictionary, array('objs.*'));
    }

}
